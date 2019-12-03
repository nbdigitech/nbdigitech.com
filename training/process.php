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
	if(isset($_POST['submit'])){
		// Information to be modified
		$name=$_POST['Name'];
	  $email=$_POST['Email'];
	  $contact="+91";
	  $contact.=$_POST['Mobile'];
      $select = $_POST['Select'];

	  $mess="Name :- $name %0a Email :- $email %0a Mobile :- $contact %0a Course :- $select";

	  $url = 'https://nbdigitech.com/training/';


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
			
$stmnt = "INSERT INTO nbdt_clients_mail(name,email,mobile,description) VALUES('$name', '$email', '$contact', '$mess')";
		// Assuming there's no error, send the email and redirect to Thank You page
		if(mysqli_query($conn,$stmnt)){
			$mobileNo = '9827822438';
			$authKey = "189400AfYrghh05c10fecf";
            $senderId = "IPMSMP";
            $route = "4";
            $postData = array(
                'authkey' => $authKey,
                'mobiles' => $mobileNo,
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






        $user_mess = "Thank you for showing interest. please fill this enquiry form https://forms.gle/hwxfrcGTUMaYrSoN9 and visit our centre NB Digital Technologies Call Now : 9827900742";


           
            $authKey = "189400AfYrghh05c10fecf";
            $senderId = "IPMSMP";
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
        

	}
 require '../mailin.php';
	$mailin = new Mailin("https://api.sendinblue.com/v2.0","kG7vd1NOMz9wLfEj");
	/*$data = array( "to" => $contact,
		"from" => "WAY2SMSS",
		"text" => "Hello!",
		"web_url" => "localhost/Domainer/index.html",
		"tag" => "Tag1",
		"type" => "transactional"
	);
   
	var_dump($mailin->send_sms($data));*/
	//$mailin = new Mailin("https://api.sendinblue.com/v2.0","IWZkH2FByxSzsXVq");
	$data1 = array( "to" => array("nbdigitaltechnology@gmail.com"=>"Bhuwnesh Shrivastava", "kunal1071996@gmail.com"=>"kunal soni"),
        "from" => array( "support@nbdigitech.com"),
        "subject" => "Training Enquiry  Form Filled",
        "html" => $email_user);
		
		echo '<br><br>';
	$data2=array("email" =>$email,
        "attributes" => array("FIRSTNAME"=>$name,"SMS"=>$contact,"SUBJECTS"=>$url),
        "listid" => array(89));	
 
    var_dump($mailin->send_email($data1));
	//echo '<br><br>';
	var_dump($mailin->create_update_user($data2));
  //echo "hERe";	



	$data2 = array( "to" => array($email=>$name),
        "from" => array( "support@nbdigitech.com"),
        "subject" => "Greetings from NBdigital Technologies",
        "html" => $email_body);
		
		echo '<br><br>';
	$data2=array("email" =>$email,
        "attributes" => array("FIRSTNAME"=>$name,"SMS"=>$contact,"SUBJECTS"=>$url),
        "listid" => array(89));	
 
    var_dump($mailin->send_email($data2));
	//echo '<br><br>';
	var_dump($mailin->create_update_user($data2));
  //echo "hERe";	
   header("Location: thankyou.html");
   exit();
?>