<?php

	$plan = "Advanced";
	$price = "2300";
	$total = "2300";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Product Order System</title>
</head>
<body>
	<h1>Your in order page</h1>
	Your Plan = <?php echo $plan; ?><br>
	Your Total = <?php echo $total; ?>
<form action="pay.php" method="post" accept-charset="utf-8">
   <input type="hidden" name="plan_name" value="<?php echo $plan; ?>">
   <input type="hidden" name="plan_price" value="<?php echo $total; ?>">

   <input type="text" name="user_name" placeholder="Your Nmae">
   <input type="text" name="user_mobile" placeholder="Your Mobile Number">
   <input type="email" name="user_email" placeholder="Your Email ID">
   <input type="submit" name="submit" value="Click here to pay:<?php echo $total; ?>">
</form>   
</body>
</html>