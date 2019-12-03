<?php

	$plan_name = $_POST["plan_name"];
	$plan_price = $_POST["plan_price"];
	$user_name = $_POST["user_name"];
	$user_mobile = $_POST["user_mobile"];
	$user_email = $_POST["user_email"];

$date = date("Y/m/d H:i:s");
	include "src/Instamojo.php";

	$api = new Instamojo\Instamojo('9cfff2039de7ba66df61f607cd241e84','1b2d5b162a4881ebd7e9a882f6cd500a','https://test.instamojo.com/api/1.1/');


	try
	{
		$response = $api -> paymentRequestCreate(array(

			"purpose" => $plan_name,
			"amount" => $plan_price,
			"buyer_name" => $user_name,
			"phone" => $user_mobile,
			"send_email" => true,
			"send_sms" => true,
			"email" => $user_email,
			"date" => $date,
			'allow_repeated_payments:' => false,
			'allow_requested_payments' => false,
			"redirect_url" => "http://fortuneventures.in/testing/payment/thankyou.php",
			"webhook" => "http://fortuneventures.in/testing/payment/webhook.php"

		));

		$pay_url = $response['longurl'];

		header("Location: $pay_url");
		exit();
	}


	catch(Exception $e)
	{
		print('Error:' .$e->getMessage());
	}
?>



