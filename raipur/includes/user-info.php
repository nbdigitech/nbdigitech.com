<?php
include ("connection.php");
if(isset($_POST["submit"]))
{
	$page_name= $_POST["page_name"];
	$plan= $_POST["plan"];
	$price= $_POST["price"];
	$username = $_POST["username"];
	$email = $_POST["email"];
	$mobile= $_POST["mobile"];
	
	
	
	/*$query = mysqli_query($conn,"select * from landings-info where email='".$email."'");
	$numrow = mysqli_num_rows("$query");
	
	if($numrow == 0)
	{*/
	   $sql = "insert into landings-info(page_name,plan,price,username,email,mobile,date) values("$page_name","$plan","$price","$username ","$email","$mobile",NOW())";
	   $run = mysqli_query($conn,"$sql");
	   if($run)
	   {
	     echo "<script>alert('Thank You! Your data is successfuly received')</script>";
	   }
	   else
	   {
	     echo "<script>alert('Please try once again!')</script>";
	   }
	/*}
	else
	{
	  echo "<script>alert('User already exist')</script>";
	}  */       
}


?>