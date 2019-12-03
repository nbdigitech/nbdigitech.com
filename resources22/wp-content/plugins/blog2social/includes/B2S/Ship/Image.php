<?php

class B2S_Ship_Image {

    public $isImage;

    public function __construct() {
        
    }

    public function getItemHtml($postId, $postContent, $postUrl, $userLang = 'en') {
        $firstImage = "";
        $imageData = B2S_Util::getImagesByPostID($postId, $postContent, $postUrl, true, $userLang);
        $isImage = (is_array($imageData) && !empty($imageData)) ? true : false;

        $content = '<div class="col-xs-12 del-padding-left del-padding-right"><div class="alert alert-danger b2s-upload-image-invalid-extension" style="display:none;"><span id="b2s-upload-image-invalid-extension-file-name"></span>' . __('The images file types .jpg and .png are allowed. Please try another.', 'blog2social') . '</div></div>';
        $content .= '<div class="col-xs-12 del-padding-left del-padding-right"><div class="alert alert-info b2s-upload-image-no-permission" style="display:none;">' . __('You need a higher user role to upload an image on this blog. Please contact your administrator.', 'blog2social') . '</div></div>';
        $content .= '<div class="col-xs-12 del-padding-left del-padding-right"><div class="alert alert-danger b2s-upload-image-free-version-info" style="display:none;">' . __('To select an individual image from your media library,', 'blog2social');
        $content .= ' <a target="_blank" href="' . B2S_Tools::getSupportLink('affiliate') . '">' . __('please upgrade', 'blog2social') . '</a>';
        $content .= '</div></div>';

        $content .= '<div class="row b2s-image-size-info">';
        $content .='<div class="col-xs-12 del-padding-left del-padding-right">';
        $content .='<div class="col-xs-7 hidden-xs hidden-sm">';
        $content .='<i">' . __('The best size for images in social media posts are between: 667-1000px x 523-1000px. Blog2Social will automatically resize your image according to network requirements.', 'blog2social') . '</i>';
        $content .='</div>';
        $content .='<div class="col-xs-5">';

        if (current_user_can('upload_files')) {
            if (B2S_PLUGIN_USER_VERSION > 1) {
                $content .= '<button class="btn btn-primary b2s-upload-image pull-right">' . __('Select & upload an image from your mediathek', 'blog2social') . '</button>';
            } else {
                $content .= '<button class="btn btn-primary b2s-upload-image-free-version pull-right">' .__('PREMIUM', 'blog2social').': '.__('Select & upload an image from your mediathek', 'blog2social') . '</button>';
            }
        }
        $content .='</div>';
        $content .='</div>';
        $content .='</div>';
        $tempCountImage = 0;
        $content .= '<div class="b2s-image-choose-area">';

        if ($isImage) {
            foreach ($imageData as $key => $image) {
                $checked = (($tempCountImage == 0) ? "checked" : "");
                $firstImage = ($tempCountImage == 0) ? $image[0] : $firstImage;
                $content .= '<div class="b2s-image-item">';
                $content .= '<div class="b2s-image-item-thumb">';
                $content .= '<label for="b2s-image-count-' . $tempCountImage . '">';
                $content .= '<img class="img-thumbnail networkImage img-responsive" alt="blogImage" src="' . $image[0] . '">';
                $content .= '</label>';
                $content .= '</div>';
                $content .= '<div class="b2s-image-item-caption text-center">';
                $content .= '<div class="b2s-image-item-caption-resolution clearfix small"></div>';
                $content .= '<input type="radio" value="' . $image[0] . '" class="checkNetworkImage" name="image_url" id="b2s-image-count-' . $tempCountImage . '" ' . $checked . '>';
                $content .= '</div>';
                $content .= '</div>';
                $tempCountImage++;
            }
        } else {
            $content .= '<div class="col-xs-12 del-padding-left del-padding-right b2s-choose-image-no-image-info-text"><br><div class="alert alert-info">' . __('No images are included in your post.', 'blog2social') . '</div></div>';
        }
        $content .= '</div>';
        $content .= '<input type="hidden" class="b2s-choose-image-count" value="' . $tempCountImage . '">';

        $content .= '<div class="col-xs-12 b2s-image-change-btn-area" ' . (!$isImage ? 'style="display:none"' : '') . '>';
        if (B2S_PLUGIN_USER_VERSION > 0) {
            $content .= '<button class="btn btn-success pull-right b2s-image-change-this-network" data-network-auth-id="" >' . __('Apply image for this network', 'blog2social') . '</button>';
        } else {
            $content .= '<button class="btn btn-success pull-right b2s-upload-image-free-version" >' .__('PREMIUM', 'blog2social').': '. __('Apply image for this network', 'blog2social') . '</button>';
        }
        $content .= ' <button class="btn btn-success b2s-image-change-all-network pull-right" >' . __('Apply image for all networks', 'blog2social') . '</button>';
        $content .= '</div>';
        $content .= '<input type="hidden" id="b2s_wp_media_headline" value="' . __('Select or upload an image from mediathek', 'blog2social') . '">';
        $content .= '<input type="hidden" id="b2s_wp_media_btn" value="' . __('Use image', 'blog2social') . '">';
        $content .= '<input type="hidden" id="b2s_blog_default_image" value="' . $firstImage . '">';
        $content .= "<input type='hidden' id='blog_image' name='blog_image' value='" . trim($isImage) . "'>";
        return $content;
    }

}
