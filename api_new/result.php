<?php 
session_start();
require "vendor/autoload.php";
use Google\Cloud\Vision\VisionClient;
$vision = new VisionClient(['keyFile'=>json_decode(file_get_contents('key.json'),true)]);
$get_file = fopen($_FILES['file']['tmp_name'],'r');
$image_detect = $vision->image($get_file,['WEB_DETECTION','FACE_DETECTION','LABEL_DETECTION','IMAGE_PROPERTIES','SAFE_SEARCH_DETECTION','LANDMARK_DETECTION','LOGO_DETECTION','TEXT_DETECTION']);
$result = $vision->annotate($image_detect);

if($result){
  $image_token = random_int(111111,999999);
  move_uploaded_file($_FILES['file']['tmp_name'], __DIR__.'/feed/'.$image_token.".jpg");
}

else{
  header("location:index.php");
  die();
}

$faces = $result->faces();
$logos = $result->logos();
$label = $result->labels();
$text = $result->text();
$fulltext = $result->fullText();
$properties = $result->imageProperties();
$crophints = $result->cropHints();
$web = $result->web();
$safesearch = $result->safeSearch();
$landmark = $result->landmarks();

echo $text;
?>