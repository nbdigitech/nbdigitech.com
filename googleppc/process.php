<?php
$servername = "185.201.11.224";
$username = "u995744577_blog";
$password = "Alvaedison88#@!";
$db = 'u995744577_blog';
$conn = mysqli_connect($servername, $username, $password,$db);
if(!$conn){
        die('connection faild'.mysqli_connect_error());
    }

?>
<?php

		// Information to be modified
		$name=$_POST['Name'];
	  $email=$_POST['Email'];
	  $contact="+91";
	  $contact.=$_POST['Mobile'];

	  $mess="Name :- $name %0a Email :- $email %0a Mobile :- $contact %0a PageUrl :- https://nbdigitech.com/googleppc";

	  $url = 'https://nbdigitech.com/googleppc/';


		$email_body = 
			"<strong>From: </strong>" . $name . "<br />
			<strong>Email: </strong>" . $email . "<br />	
			<strong>Phone: </strong>" . $contact . "<br />	
			<strong>Training Program: </strong>" . $mess . "<br />	
			<strong>url: </strong>" . $url;

		$email_user = "<b>Dear [$name],</b>
		<br>

Greetings from NBdigital Technologies. 
<br>

Thank you!! for registering for ($select). Build your resume and get skilled in (Course name).
<br>

For more information, you can check our website or visit us for further discussions/ questions.
<br>


We will be glad to train you to achieve your dreams and goals.
<br>
<br>
Regards,<br>

NB Digital Technologies<br>

Phone - +91 9827822438<br>


Follow us on Instagram, Facebook";
			
$stmnt = "INSERT INTO nbdt_clients_mail(name,email,mobile) VALUES('$name', '$email', '$contact')";
		// Assuming there's no error, send the email and redirect to Thank You page
		if(mysqli_query($conn,$stmnt)){
			  $authKey = "240400AS5LnCpvpvPY5da5683f";
            $senderId = "NBDTGP";
            $route = "4";
            $postData = array(
                'authkey' => $authKey,
                'mobiles' => '+917987300407',
                'message' => $mess,
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
        
        $user_mess = "Thank you for showing interest. We will contact you soon";


           
            $authKey = "240400AS5LnCpvpvPY5da5683f";
            $senderId = "NBDTGP";
            $route = "4";
            $postData = array(
                'authkey' => $authKey,
                'mobiles' => $contact,
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
echo "<script>window.open('thankyou.php','_self')</script>";
        

?>