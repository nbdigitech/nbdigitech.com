<?php
	if($_POST){
		// Information to be modified
			  $name=$_POST['fullName'];
	  $email=$_POST['email'];
	  $select=$_POST['select'];
	  $contact="+91";
	  $contact.=$_POST['phoneNo'];


		$email_body = 
			"<strong>From: </strong>" . $name . "<br />
			<strong>Email: </strong>" . $email . "<br />	
			<strong>Phone: </strong>" . $contact . "<br />	
			<strong>Training Program: </strong>" . $select;
			

		// Assuming there's no error, send the email and redirect to Thank You page
			

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
        "from" => array( "trainingadmin@nbdigitech.com"),
        "subject" => "Training Program Form Filled",
        "html" => $email_body);
		
		echo '<br><br>';
	$data2=array("email" =>$email,
        "attributes" => array("FIRSTNAME"=>$name,"SMS"=>$contact,"SUBJECTS"=>$select),
        "listid" => array(89));	
 
    var_dump($mailin->send_email($data1));
	//echo '<br><br>';
	var_dump($mailin->create_update_user($data2));
  //echo "hERe";	
   header("Location: thankyou.html");

?>