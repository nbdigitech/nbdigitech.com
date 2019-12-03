<?php

$servername = "185.201.11.224";
$username = "u995744577_nbdt";
$password = "Alvaedison88#@!";
$db = 'u995744577_nbdt';
$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){
    	die('connection faild'.mysqli_connect_error());
    }

?>
<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$data= "SELECT COUNT(*) from user where Email='$email' or Mobile='$mobile'";
  	$run = mysqli_query($conn,$data);
  	$result = mysqli_fetch_array($run);

  	if($result[0]==0){
  		$query = "INSERT INTO user(Name,Email,Mobile)VALUES('$name','$email','$mobile')";
  		mysqli_query($conn,$query);
  		echo $conn->insert_id;
  	}
  	else{
  		echo "exists";
  	}
?>