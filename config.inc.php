<?PHP
$db_hostname = "localhost";  
$db_username = "root";      
$db_password = "Alvaedison88#@!";      
$db_name = "nbdt";

/*$db_hostname = "localhost";  
$db_username = "root";      
$db_password = "";      
$db_name = "demo";*/
   



   
$connection =@mysql_connect($db_hostname,$db_username,$db_password);  
if(!$connection)  
 {  
  die('could not connect :'.mysql_error());  
 }  
mysql_select_db($db_name); 

echo mysql_error();
foreach($_REQUEST AS $sitekey => $value) {
    ${$sitekey} = $value;
}

$arr_month = array (1=>"January", 2=>"February", 3=>"March", 4=>"April", 5=>"May", 6=>"June", 7=>"July", 8=>"August", 9=>"September", 10=>"October", 11=>"November", 12=>"December");
?>
