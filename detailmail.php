<?php
include 'config.inc.php';
//include './BaseCon.php';
$strName=$_POST['strName'];
$strEmail=$_POST['strEmail'];
$strMobile=$_POST['strMobile'];
$strSubject==$_POST['strSubject'];
$to = "nbdigitaltechnology@gmail.com";
$subject = "New Enquiry Availaible";
$txt ="Name:-".$strName."\r\n"."Email:-".$strEmail."\r\n"."Mobile:-".$strMobile."\r\n"."Intrested:-".$strSubject;
$headers = "New Enquiry Availaible Addmission";
mail($to,$subject,$txt);

echo "Name:-".$strName."\r\n"."Email:-".$strEmail."\r\n"."Mobile:-".$strMobile."\r\n"."Subject:-".$strSubject."\r\n";
?>