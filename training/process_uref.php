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
	$name = $_POST['uname'];
	$email = $_POST['uemail'];
	$mobile = $_POST['umobile'];
  $userid = $_POST['userid'];
  $course = $_POST['course'];

 $user_d = "SELECT * from user where id='$userid'";
    $runs = mysqli_query($conn,$user_d);
    $results = mysqli_fetch_assoc($runs);
    $ms = $results['Name'];

	$data= "SELECT COUNT(*) from refer_users where Email='$email' or Mobile='$mobile'";
  	$run = mysqli_query($conn,$data);
  	$result = mysqli_fetch_assoc($run);


  	if($result[0]==0){
  		$query = "INSERT INTO refer_users(Name,Email,Mobile,UserId,Course)VALUES('$name','$email','$mobile','$userid','$course')";




  		mysqli_query($conn,$query);
  		echo $conn->insert_id;


       $user_mess = "Hey $name ,Your friend  ".$ms." has reffered you various courses to upskill yourself Visit https://bit.ly/2YTdiRT , Register for New batch Call Now :  7000711500.";
   

           
            $authKey = "189400AfYrghh05c10fecf";
            $senderId = "IPMSMP";
            $route = "4";
            $postData = array(
                'authkey' => $authKey,
                'mobiles' => $mobile,
                'message' => $user_mess,
                'sender' => $senderId,
                'route' => $route,
                'country'=>'0'
        );  
             $url="https://control.msg91.com/api/sendhttp.php";
            $ch = curl_init();
                curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $postData
            ));
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $output = curl_exec($ch);
            
             if(curl_errno($ch))
            {
                echo 'error:' . curl_error($ch);
            }
            else{
                    curl_close($ch);    
            }
  	}
  	else{
  		echo "existss";
  	}
?>