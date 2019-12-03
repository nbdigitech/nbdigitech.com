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
		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHR2LP');</script>
<!-- End Google Tag Manager -->
        	<title>Thankyou For Payment</title>
        	
        	<style>
        		margin:0px;padding:0px;
        	</style>
        </head>
        <body background=img/logoone.png>
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WHR2LP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->";
            echo"<div style='width:100%;height:100vh;;background-color:rgba(0,0,0,0.9);margin:0px;padding:0px;'><center><div style='background-color:white; height:500px;width:700px;'>";
        	echo "Payment ID: " .$response['payments'][0]['payment_id']."<br>";
		echo "Name: " .$response['payments'][0]['buyer_name']."<br>";
		echo "Email: " .$response['payments'][0]['buyer_email']."<br>";
		echo "Phone: " .$response['payments'][0]['buyer_phone']."<br>";
		echo "Date: " .$response['payments'][0]['created_at']."<br>";
		
		echo "Amount: " .$response['payments'][0]['amount']."<br>";
		 print_r($response['purpose']);  // print purpose of payment request
                 
                 
                 echo "Ticket No.: NBDT".(rand() . "<br>");
echo(rand() . "<br>");
echo(rand(10,100));
                 
                 
                 
                 
                 
                 
                 

   echo $random_digit = mt_rand(0, 100);
    
   
                 
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