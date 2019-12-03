<?php




	include "src/Instamojo.php";

	$api = new Instamojo\Instamojo('9cfff2039de7ba66df61f607cd241e84','1b2d5b162a4881ebd7e9a882f6cd500a','https://test.instamojo.com/api/1.1/');


	$payid = $_GET["payment_request_id"];
	
	
	
	try
	{
        $response = $api -> paymentRequestStatus($payid);
        
       echo"
        <!DOCTYPE html>
        <html>
        <head>
        	<title>Thankyou For Payment</title>
        	
        	<style>
        		margin:0px;padding:0px;
        	</style>
        </head>
        <body background=img/logoone.png>";
            echo"<div style='width:100%;height:100vh;;background-color:rgba(0,0,0,0.9);margin:0px;padding:0px;'><center><div style='background-color:white; height:500px;width:700px;'>";
        	echo "Payment ID: " .$response['payments'][0]['payment_id']."<br>";
		echo "Name: " .$response['payments'][0]['buyer_name']."<br>";
		echo "Email: " .$response['payments'][0]['buyer_email']."<br>";
		echo "Phone: " .$response['payments'][0]['buyer_phone']."<br>";
		echo "Date: " .$response['payments'][0]['created_at']."<br>";
		
		echo "Amount: " .$response['payments'][0]['amount']."<br>";
		echo "Plan: " .$response['purpose']."<br>";
		  // print purpose of payment request
                echo "Ticket No.: NBDT".(rand() . "<br>");

    
   
                 
		/*Get a list of all Payment Requests
		$response = $api->paymentRequestsList();
                print_r($response);*/
                
	    echo"</div></div></center>";		
        echo"
        </body>
        </html>";
		


?>

<?php
	}
	catch(Exception $e)
	{
		print('Error:' .$e->getMessage());
	}
?>