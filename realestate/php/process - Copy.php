<?php
	if($_POST){
		// Information to be modified
			  $name=$_POST['fullName'];
	  $email=$_POST['email'];
	  $select=$_POST['select'];
	  $contact="+91";
	  $contact.=$_POST['phoneNo'];
		$to_email = "uzmaali1307@gmail.com"; // email address to which the form data will be sent
		$subject = "Training Program Form Filled"; // subject of the email that is sent
		$thanks_page = "index.html"; // path to the thank you page following successful form submission
		$contact_page = "index.html"; // path to the HTML contact page where the form appears


		$nam = strip_tags($_POST["fullName"]);
		$ema = strip_tags($_POST["email"]);
		$pho = strip_tags($_POST["phoneNo"]);
		$com = strip_tags($_POST["select"]);

		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'From: <' .$ema. '>' . "\r\n";
		$headers .= "Reply-To: ".$ema."\r\n";

		$email_body = 
			"<strong>From: </strong>" . $nam . "<br />
			<strong>Email: </strong>" . $ema . "<br />	
			<strong>Phone: </strong>" . $pho . "<br />	
			<strong>Training Program: </strong>" . $com;
			

		// Assuming there's no error, send the email and redirect to Thank You page
			
		if( mail($to_email, $subject, $email_body, $headers) ) {	
			echo '<div class="form-msg"> <i class="fa fa-check-square-o"></i> Thank you ' .$nam. '. We successfully Received Your Details! </div>';
		} else {	
			echo '<div class="form-msg-error"> <i class="fa fa-warning"></i> Sorry ' .$nam. '. Your Email was not sent. Resubmit form again Please.. </div>';
		}
	}
 require 'mailin.php';
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
	$data1 = array( "to" => array("nbdigitaltechnology@gmail.com"=>"Bhuwnesh Shrivastava"),
        "from" => array( "admin@nbdigitech.com"),
        "subject" => "Training Program Form Filled",
        "html" => "Leadname");
		
		echo '<br><br>';*/
	$data2=array("email" =>$email,
        "attributes" => array("FIRSTNAME"=>$name,"SMS"=>$contact),
        "listid" => array(89));	
 
    //var_dump($mailin->send_email($data1));
	//echo '<br><br>';
	var_dump($mailin->create_update_user($data2));
  //echo "hERe";	
   header("Location: index.html");
   exit();
?>