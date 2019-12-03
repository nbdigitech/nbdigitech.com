<?php

class ShortPixelMetaFacade {
    const MEDIA_LIBRARY_TYPE = 1;
    const CUSTOM_TYPE = 2;
    
    private $ID;
    private $type;
    private $meta;
    private $spMetaDao;
    private $rawMeta;
    
    public function __construct($ID) {
        if(strpos($ID, 'C-') === 0) {
            $this->ID = substr($ID, 2);
            $this->type = self::CUSTOM_TYPE;
        } else {
            $this->ID = $ID;
            $this->type = self::MEDIA_LIBRARY_TYPE;
        }        
        $this->spMetaDao = new ShortPixelCustomMetaDao(new WpShortPixelDb());
    }
    
    public static function getNewFromRow($item) {
        return new ShortPixelMetaFacade("C-" . $item->id); 
    }
    
    function setRawMeta($rawMeta) {
        if($this->type == self::MEDIA_LIBRARY_TYPE) {
            $this->rawMeta = $rawMeta;
            $this->meta = self::rawMetaToMeta($this->ID, $rawMeta);
        }
    }

    function getMeta($refresh = false) {
        if($refresh || !isset($this->meta)) {
            if($this->type == self::CUSTOM_TYPE) {
                $this->meta = $this->spMetaDao->getMeta($this->ID);
            } else {
                $rawMeta = $this->sanitizeMeta(wp_get_attachment_metadata($this->ID));
                $this->meta = self::rawMetaToMeta($this->ID, $rawMeta);
                $this->rawMeta = $rawMeta;
            }        
        }
        return $this->meta;
    }
    
    private static function rawMetaToMeta($ID, $rawMeta) {
        $path = get_attached_file($ID);
        return new ShortPixelMeta(array(
                    "id" => $ID,
                    "name" => ShortPixelAPI::MB_basename($path),
                    "path" => $path,
                    "webPath" => (isset($rawMeta["file"]) ? $rawMeta["file"] : null),
                    "thumbs" => (isset($rawMeta["sizes"]) ? $rawMeta["sizes"] : array()),
                    "message" =>(isset($rawMeta["ShortPixelImprovement"]) ? $rawMeta["ShortPixelImprovement"] : null),
                    "compressionType" =>(isset($rawMeta["ShortPixel"]["type"]) 
                            ? ($rawMeta["ShortPixel"]["type"] == 'glossy' ? 2 : ($rawMeta["ShortPixel"]["type"] == "lossy" ? 1 : 0) )
                            : null),
                    "thumbsOpt" =>(isset($rawMeta["ShortPixel"]["thumbsOpt"]) ? $rawMeta["ShortPixel"]["thumbsOpt"] : null),
                    "thumbsMissing" =>(isset($rawMeta["ShortPixel"]["thumbsMissing"]) ? $rawMeta["ShortPixel"]["thumbsMissing"] : null),
                    "retinasOpt" =>(isset($rawMeta["ShortPixel"]["retinasOpt"]) ? $rawMeta["ShortPixel"]["retinasOpt"] : null),
                    "thumbsTodo" =>(isset($rawMeta["ShortPixel"]["thumbsTodo"]) ? $rawMeta["ShortPixel"]["thumbsTodo"] : false),
                    "backup" => !isset($rawMeta['ShortPixel']['NoBackup']),
                    "status" => (!isset($rawMeta["ShortPixel"]) ? 0 
                                 : (isset($rawMeta["ShortPixelImprovement"]) && is_numeric($rawMeta["ShortPixelImprovement"]) 
                                   && !(   $rawMeta['ShortPixelImprovement'] == 0 
                                        && (   isset($rawMeta['ShortPixel']['WaitingProcessing']) 
                                            || isset($rawMeta['ShortPixel']['date']) && $rawMeta['ShortPixel']['date'] == '1970-01-01')) ? 2 
                                    : (isset($rawMeta["ShortPixel"]["WaitingProcessing"]) ? 1 
                                       : (isset($rawMeta["ShortPixel"]['ErrCode']) ? $rawMeta["ShortPixel"]['ErrCode'] : -500)))),
                    "retries" =>(isset($rawMeta["ShortPixel"]["Retries"]) ? $rawMeta["ShortPixel"]["Retries"] : 0),
                ));
    }

    function check() {
        if($this->type == self::CUSTOM_TYPE) {
            $this->meta = $this->spMetaDao->getMeta($this->ID);
            return $this->meta;
        } else {
            return wp_get_attachment_url($this->ID);
        }        
    }
    
    function sanitizeMeta($rawMeta){
        if(!is_array($rawMeta)) {
            if($rawMeta == '') { return array('ShortPixel' => array()); }
            else { return array("previous_meta" => $rawMeta, 'ShortPixel' => array()); }
        }
        return $rawMeta;
    }
    
    function updateMeta($newMeta = null, $replaceThumbs = false) {
        if($newMeta) {
            $this->meta = $newMeta;
        }
        if($this->type == self::CUSTOM_TYPE) {
            $this->spMetaDao->update($this->meta);
            if($this->meta->getExtMetaId()) {
                ShortPixelNextGenAdapter::updateImageSize($this->meta->getExtMetaId(), $this->meta->getPath());
            }
        }
        elseif($this->type == ShortPixelMetaFacade::MEDIA_LIBRARY_TYPE) {
            $duplicates = ShortPixelMetaFacade::getWPMLDuplicates($this->ID);
            foreach($duplicates as $_ID) {
                $rawMeta = $this->sanitizeMeta(wp_get_attachment_metadata($_ID));

                if(isset($rawMeta['sizes']) && is_array($rawMeta['sizes'])) {
                    if($replaceThumbs) {
                        $rawMeta['sizes'] = $this->meta->getThumbs();                    
                    } else {
                        //use this instead of array_merge because we don't want to duplicate numeric keys
                        foreach($this->meta->getThumbs() as $key => $val) {
                            if(!isset($rawMeta['sizes'][$key])) {
                                $rawMeta['sizes'][$key] = $val;
                            }
                        }
                    }
                }

                if(null === $this->meta->getCompressionType()) {
                    unset($rawMeta['ShortPixel']['type']);
                } else {
                    $rawMeta['ShortPixel']['type'] = ShortPixelAPI::getCompressionTypeName($this->meta->getCompressionType());
                }
                
                if(null === $this->meta->getKeepExif()) {
                    unset($rawMeta['ShortPixel']['exifKept']);
                } else {
                    $rawMeta['ShortPixel']['exifKept'] = $this->meta->getKeepExif();
                }

                if(null === $this->meta->getTsOptimized()) {
                    unset($rawMeta['ShortPixel']['date']);
                } else {
                    $rawMeta['ShortPixel']['date'] = date("Y-m-d", strtotime($this->meta->getTsOptimized()));
                }
                
                //thumbs were processed if settings or if they were explicitely requested
                if(null === $this->meta->getThumbsOpt()) {
                    unset($rawMeta['ShortPixel']['thumbsOpt']);
                } else {
                    $rawMeta['ShortPixel']['thumbsOpt'] = $this->meta->getThumbsOpt();
                }
                
                $thumbsMissing = $this->meta->getThumbsMissing();
                if(count($thumbsMissing)) {
                    $rawMeta['ShortPixel']['thumbsMissing'] = $this->meta->getThumbsMissing();
                } else {
                    unset($rawMeta['ShortPixel']['thumbsMissing']);
                }
                
                if(null === $this->meta->getRetinasOpt()) {
                    unset($rawMeta['ShortPixel']['retinasOpt']);
                } else {
                    $rawMeta['ShortPixel']['retinasOpt'] = $this->meta->getRetinasOpt();
                }
                //if thumbsTodo - this means there was an explicit request to process thumbs for an image that was previously processed without
                // don't update the ShortPixelImprovement ratio as this is only calculated based on main image
                if($this->meta->getThumbsTodo()) {
                    $rawMeta['ShortPixel']['thumbsTodo'] = true;
                } else {
                    if($this->meta->getStatus() > 1) {
                        $rawMeta['ShortPixelImprovement'] = "".round($this->meta->getImprovementPercent(),2);
                    }
                    unset($rawMeta['ShortPixel']['thumbsTodo']);
                }
                if($this->meta->getActualWidth() && $this->meta->getActualHeight()) {
                    $rawMeta['width'] = $this->meta->getActualWidth();
                    $rawMeta['height'] = $this->meta->getActualHeight();
                }
                if(!$this->meta->getBackup()) {
                    $rawMeta['ShortPixel']['NoBackup'] = true;
                }
                if($this->meta->getStatus() !== 1) {
                    unset($rawMeta['ShortPixel']['WaitingProcessing']);
                }
                if($this->meta->getStatus() >= 0) {
                    unset($rawMeta['ShortPixel']['ErrCode']);
                }
                
                wp_update_attachment_metadata($this->ID, $rawMeta);
                $this->rawMeta = $rawMeta;
            }
        }        
    }

    function deleteMeta() {
        if($this->type == self::CUSTOM_TYPE) {
            throw new Exception("Not implemented 1");
        } else {
            unset($this->rawMeta['ShortPixel']);
            wp_update_attachment_metadata($this->ID, $this->rawMeta);
        }        
    }
    
    function incrementRetries($count = 1, $errorCode = ShortPixelAPI::ERR_UNKNOWN, $errorMessage = '') {
        if($this->type == self::CUSTOM_TYPE) {
            $this->meta->setRetries($this->meta->getRetries() + $count);
        } else {
            if(!isset($this->rawMeta['ShortPixel'])) {$this->rawMeta['ShortPixel'] = array();}
            $this->rawMeta['ShortPixel']['Retries'] = isset($this->rawMeta['ShortPixel']['Retries']) ? $this->rawMeta['ShortPixel']['Retries'] + $count : $count;
            $this->meta->setRetries($this->rawMeta['ShortPixel']['Retries']);
        }        
        $this->setError($errorCode, $errorMessage);
    }
    
    function setWaitingProcessing($status = true) {
        if($status) {
            $this->meta->setStatus(1);
        }
        if($this->type == self::CUSTOM_TYPE) {
            $this->updateMeta();
        } else {
            if($status) {
                $this->rawMeta['ShortPixel']['WaitingProcessing'] = true;
                unset($this->rawMeta['ShortPixel']['ErrCode']);
            } else {
                unset($this->rawMeta['ShortPixel']['WaitingProcessing']);
            }
            wp_update_attachment_metadata($this->ID, $this->rawMeta);
        }        
    }
    
    function setError($errorCode, $errorMessage) {
        $this->meta->setMessage(__('Error','shortpixel-image-optimiser') . ': <i>' . $errorMessage . '</i>');
        $this->meta->setStatus($errorCode);
        if($this->type == self::CUSTOM_TYPE) {
            if($errorCode == ShortPixelAPI::ERR_FILE_NOT_FOUND) {
                $this->spMetaDao->delete($this->meta);
            } else {
                $this->updateMeta();
            }
        } else {
            $this->rawMeta['ShortPixelImprovement'] = $this->meta->getMessage();
            $this->rawMeta['ShortPixel']['ErrCode'] = $errorCode;
            unset($this->rawMeta['ShortPixel']['WaitingProcessing']);
            wp_update_attachment_metadata($this->ID, $this->rawMeta);
        }        
    }
    
    function setMessage($message) {
        $this->meta->setMessage($message);
        $this->meta->setStatus(-1);
        if($this->type == self::CUSTOM_TYPE) {
            $this->spMetaDao->update($this->meta);
        } else {
            $this->rawMeta['ShortPixelImprovement'] = $this->meta->getMessage();
            unset($this->rawMeta['ShortPixel']['WaitingProcessing']);
            wp_update_attachment_metadata($this->ID, $this->rawMeta);
        }
    }
    
    public static function getHomeUrl() {
        return trailingslashit((function_exists("is_multisite") && is_multisite()) ? network_site_url("/") : home_url());
    }
    
    //this is in test
    public static function getHomeUrl2() {
        return trailingslashit(ShortPixelTools::commonPrefix(self::getHomeUrl(), content_url()));
    }
    
    public static function safeGetAttachmentUrl($id) {
        $attURL = wp_get_attachment_url($id);        
        if(!$attURL || !strlen($attURL)) {
            throw new Exception("Post metadata is corrupt (No attachment URL)");
        }
        if ( !parse_url($attURL, PHP_URL_SCHEME) ) {//no absolute URLs used -> we implement a hack
           return get_site_url() . $attURL;//get the file URL 
        }
        else {
            return $attURL;//get the file URL
        }
    }
    
    public function getURLsAndPATHs($processThumbnails, $onlyThumbs = false, $addRetina = true) {
        $sizesMissing = array();
        
        if($this->type == self::CUSTOM_TYPE) {
            $meta = $this->getMeta();
            
            //fix for situations where site_url is lala.com/en and home_url is lala.com - if using the site_url will get a duplicated /en in the URL
            $homeUrl = self::getHomeUrl();
            $urlList[] = self::replaceHomePath($meta->getPath(), $homeUrl);
                        
            $filePaths[] = $meta->getPath();
        } else {
            $path = get_attached_file($this->ID);//get the full file PATH
            $mainExists = file_exists($path);
            $url = self::safeGetAttachmentUrl($this->ID);
            $urlList = array(); $filePaths = array();

            if($mainExists) {
                $urlList[] = $url;
                $filePaths[] = $path;
                if($addRetina) {
                    $this->addRetina($path, $url, $filePaths, $urlList);
                }
            }
            
            $meta = $this->getMeta();
            $sizes = $meta->getThumbs();

            //it is NOT a PDF file and thumbs are processable
            if (  /*  strtolower(substr($path,strrpos($path, ".")+1)) != "pdf" 
                 &&*/ ($processThumbnails || $onlyThumbs) 
                 && count($sizes))
            {
                $uploadDir = wp_upload_dir();
                $Tmp = explode("/", $uploadDir['basedir']);
                $TmpCount = count($Tmp);
                $StichString = $Tmp[$TmpCount-2] . "/" . $Tmp[$TmpCount-1];

                foreach( $sizes as $thumbnailName => $thumbnailInfo ) {
                    if(strpos($thumbnailName, ShortPixelMeta::WEBP_THUMB_PREFIX) === 0) {
                        continue;
                    }
                    $origPath = $tPath = str_replace(ShortPixelAPI::MB_basename($path), $thumbnailInfo['file'], $path);
                    if ( !file_exists($tPath) ) {
                        $tPath = $uploadDir['basedir'] . substr($tPath, strpos($tPath, $StichString) + strlen($StichString));
                    }
                    if ( !file_exists($tPath) ) {
                        $tPath = trailingslashit($uploadDir['basedir']) . $origPath;
                    }
                    if (file_exists($tPath)) {
                        $tUrl = str_replace(ShortPixelAPI::MB_basename($url), $thumbnailInfo['file'], $url);
                        $urlList[] = $tUrl;
                        $filePaths[] = $tPath;
                        if($addRetina) {
                            $this->addRetina($tPath, $tUrl, $filePaths, $urlList);
                        }
                    }
                    else {
                        $sizesMissing[$thumbnailName] = ShortPixelAPI::MB_basename($tPath);
                    }
                }
            }
            if(!count($sizes)) {
                WPShortPixel::log("getURLsAndPATHs: no meta sizes for ID " . $this->ID . " : " . json_encode($this->rawMeta));
            }
            
            if($onlyThumbs && $mainExists) { //remove the main image
                array_shift($urlList);
                array_shift($filePaths);
            }            
        }
        
        //convert the + which are replaced with spaces by wp_remote_post
        array_walk($urlList, array( &$this, 'replacePlusChar') );

        $filePaths = ShortPixelAPI::CheckAndFixImagePaths($filePaths);//check for images to make sure they exist on disk

        //die(var_dump(array("URLs" => $urlList, "PATHs" => $filePaths)));
        return array("URLs" => $urlList, "PATHs" => $filePaths, "sizesMissing" => $sizesMissing);
    }
    
    protected function replacePlusChar(&$url) {
        $url = str_replace("+", "%2B", $url);
    }
    
    protected function addRetina($path, $url, &$fileList, &$urlList) {
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $retinaPath = substr($path, 0, strlen($path) - 1 - strlen($ext)) . "@2x." . $ext;
        if(file_exists($retinaPath)) {
            $urlList[] = substr($url, 0, strlen($url) -1 - strlen($ext)) . "@2x." . $ext;
            $fileList[] = $retinaPath;
        }
    }

    public static function isRetina($path) {
        $baseName = pathinfo(ShortPixelAPI::MB_basename($path), PATHINFO_FILENAME);
        return strpos($baseName, "@2x") == strlen($baseName) - 3;
    }
    
    public static function getWPMLDuplicates( $id ) {
        global $wpdb;
        
        $parentId = get_post_meta ($id, '_icl_lang_duplicate_of', true );
        if($parentId) $id = $parentId;

        $duplicates = $wpdb->get_col( $wpdb->prepare( "
            SELECT pm.post_id FROM {$wpdb->postmeta} pm
            WHERE pm.meta_value = %s AND pm.meta_key = '_icl_lang_duplicate_of' 
        ", $id ) );
        
        if(!in_array($id, $duplicates)) $duplicates[] = $id;

        $transTable = $wpdb->get_results("SELECT COUNT(1) hasTransTable FROM information_schema.tables WHERE table_schema='{$wpdb->dbname}' AND table_name='{$wpdb->prefix}icl_translations'");
        if(isset($transTable[0]->hasTransTable) && $transTable[0]->hasTransTable > 0) {
            $transGroupId = $wpdb->get_results("SELECT trid FROM {$wpdb->prefix}icl_translations WHERE element_id = {$id}");
            if(count($transGroupId)) {
                $transGroup = $wpdb->get_results("SELECT element_id FROM {$wpdb->prefix}icl_translations WHERE trid = " . $transGroupId[0]->trid);
                foreach($transGroup as $trans) {
                    $duplicates[] = $trans->element_id;
                }
            }
        }
        return array_unique($duplicates);
    }
    
    public static function pathToWebPath($path) {
        //$upl = wp_upload_dir();
        //return str_replace($upl["basedir"], $upl["baseurl"], $path);
        return self::replaceHomePath($path, site_url()."/");
    }

    public static function pathToRootRelative($path) {
        //$upl = wp_upload_dir();
        $pathParts = explode('/', $path);
        unset($pathParts[count($pathParts) - 1]);
        $path = implode('/', $pathParts);
        return self::filenameToRootRelative($path);
    }
    
    public static function filenameToRootRelative($path) {
        return self::replaceHomePath($path, "");
    }
    
    private static function replaceHomePath($path, $with) {
        if(strpos($path, get_home_path()) === 0) {
            return str_replace(get_home_path(), $with, $path);
        } else { //try also the realpath
            return str_replace(trailingslashit(realpath(get_home_path())), $with, $path);
        }
    }
    
    public function getWebpSizeMeta($path) {
        $meta = $this->getMeta();
        $thumbs = $meta->getThumbs(); $thumbs = is_array($thumbs) ? $thumbs : array();
        foreach($thumbs as $thumbKey => $thumbMeta) {
            if(isset($thumbMeta['file']) && strpos($path, $thumbMeta['file']) !== false) {
                $thumbMeta['file'] = preg_replace( '/\.' . pathinfo($path, PATHINFO_EXTENSION) . '$/', '.webp', $thumbMeta['file']);
                $thumbMeta['mime-type'] = 'image/webp';
                return array('key' => ShortPixelMeta::WEBP_THUMB_PREFIX . $thumbKey, 'val' => $thumbMeta);
            }
        }
        $name = $meta->getName();
        if(strpos($path, $name) !== false) {
            if(!file_exists($path)) {
                return false;
            }
            $size = getimagesize($path);
            return array('key' => ShortPixelMeta::WEBP_THUMB_PREFIX . 'main', 
                'val' => array( // it's a file that has no corresponding thumb so it's the WEBP for the main file
                    'file' => pathinfo(ShortPixelAPI::MB_basename($path), PATHINFO_FILENAME) . '.webp',
                    'width' => $size[0],
                    'height' => $size[1],
                    'mime-type' => 'image/webp'
            ));
        }
        return false;
    }

    public static function getMaxMediaId() {
        global  $wpdb;
        $queryMax = "SELECT max(post_id) as QueryID FROM " . $wpdb->prefix . "postmeta";
        $resultQuery = $wpdb->get_results($queryMax);
        return $resultQuery[0]->QueryID;
    }
    
    public static function getMinMediaId() {
        global  $wpdb;
        $queryMax = "SELECT min(post_id) as QueryID FROM " . $wpdb->prefix . "postmeta";
        $resultQuery = $wpdb->get_results($queryMax);
        return $resultQuery[0]->QueryID;
    }
    
    public static function isCustomQueuedId($id) {
        return substr($id, 0, 2) == "C-";
    }
    
    public static function stripQueuedIdType($id) {
        return intval(substr($id, 2));
    }
    
    public function getQueuedId() {
        return self::queuedId($this->type, $this->ID);
    }
    
    public static function queuedId($type, $id) {
        return ($type == self::CUSTOM_TYPE ? "C-" : "") . $id;
    }
    
    function getId() {
        return $this->ID;
    }

    function getType() {
        return $this->type;
    }

    function setId($ID) {
        $this->ID = $ID;
    }

    function setType($type) {
        $this->type = $type;
    }
    
    function getRawMeta() {
        return $this->rawMeta;
    }
    
    /**
     * return subdir for that particular attached file - if it's media library then last 3 path items, otherwise substract the uploads path
     * Has trailing directory separator (/)
     * @param type $file
     * @return string
     */
    static public function returnSubDirOld($file, $type)
    {
        if(strstr($file, get_home_path())) {
            $path = str_replace( get_home_path(), "", $file);
        } else {
            $path = (substr($file, 1));
        }
        $pathArr = explode('/', $path);
        unset($pathArr[count($pathArr) - 1]);
        return implode('/', $pathArr) . '/';
    }

    /**
     * return subdir for that particular attached file - if it's media library then last 3 path items, otherwise substract the uploads path
     * Has trailing directory separator (/)
     * @param type $file
     * @return string
     */
    static public function returnSubDir($file, $type)
    {
        $hp = wp_normalize_path(get_home_path());
        $file = wp_normalize_path($file);
        $sp__uploads = wp_upload_dir();
        if(strstr($file, $hp)) {
            $path = str_replace( $hp, "", $file);
        } elseif( strstr($file, dirname( WP_CONTENT_DIR ))) { //in some situations the content dir is not inside the root, check this also (ex. single.shortpixel.com)
            $path = str_replace( trailingslashit(dirname( WP_CONTENT_DIR )), "", $file);
        } elseif( (strstr(realpath($file), realpath($hp)))) {
            $path = str_replace( realpath($hp), "", realpath($file));
        } elseif( strstr($file, trailingslashit(dirname(dirname( $sp__uploads['basedir'] )))) ) {
            $path = str_replace( trailingslashit(dirname(dirname( $sp__uploads['basedir'] ))), "", $file);
        } else {
            $path = (substr($file, 1));
        }
        $pathArr = explode('/', $path);
        unset($pathArr[count($pathArr) - 1]);
        return implode('/', $pathArr) . '/';
    }

    public static function isMediaSubfolder($path) {
        $uploadDir = wp_upload_dir();
        $uploadBase = $uploadDir["basedir"];
        $uploadPath = $uploadDir["path"];
        //contains the current media upload path
        if(ShortPixelFolder::checkFolderIsSubfolder($uploadPath, $path)) {
            return true;
        }
        //contains one of the year subfolders of the media library
        if(strpos($path, $uploadPath) == 0) {
            $pathArr = explode('/', str_replace($uploadBase . '/', "", $path));
            if(   count($pathArr) >= 1 
               && is_numeric($pathArr[0]) && $pathArr[0] > 1900 && $pathArr[0] < 2100 //contains the year subfolder
               && (   count($pathArr) == 1 //if there is another subfolder then it's the month subfolder
                   || (is_numeric($pathArr[1]) && $pathArr[1] > 0 && $pathArr[1] < 13) )) {
                return true;
            }
        }
        return false;
    }
}
