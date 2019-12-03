<?php
session_start();

include('includes/checklogin.php');
check_login();




$edit_id = $_GET['edit'];
$split_val = explode(",",$edit_id);					
					
?>

<br><br>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>NBDT | Raipur Chhattisgarh</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>





<style>
	input
	{
		width: 100%;
		height: 30px;
		padding-left: 10px;
		margin-bottom: 10px;
	}
	input[type='file']{

	}
	#ipt1
	{
		background-color: ;

	}

	#ipt2
	{
		background-color: #BBD4F1;
		border:none;
		border-radius: 3px;
	}

@media (min-width:701px) and (max-width:3800px)
{
	.widthDiv
	{
		width:50%;
		border:1px solid black;
	}
}

@media (min-width:100px) and (max-width:700px)
{
	.widthDiv
	{
		
	}
}
	
</style>
</head>
<body style="background-color:#ecf0f5">
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
<div class="container-fluid">

<div class="row">
<div class="col-md-12">
					

	
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading" style="font-size: 20px;">Individual Enquiry Details</div>

<div class="panel-body">
		<a href="view_enquiry_info.php" class="btn btn-primary">Back</a><br><br>
		

		<form action="edit_enquiry_info.php?edit_form=<?php echo "$split_val[0]"; ?>" method="post" enctype="multipart/form-data">
		
		
			<div>
			   <strong>NAME</strong><br>
			   <input type="text" name="" class="widthDiv" value="<?php echo "$split_val[4]"; ?>">
			</div>

			<div>
			    <strong>EMAIL</strong><br>
			   <input type="text" name="" value="<?php echo "$split_val[5]"; ?>" class="widthDiv">
			</div>

			<div>
			    <strong>MOBILE NO.</strong><br>
			   <input type="text" name="" value="<?php echo "$split_val[6]"; ?>" class="widthDiv">
			</div>
		

			<div>
			    <strong>PAGE NAME</strong><br>
			   <input type="text" name="" class="widthDiv" value="<?php echo "$split_val[1]"; ?>">
			</div>

			<div>
			    <strong>PLAN</strong><br>
			   <input type="text" name="" value="<?php echo "$split_val[2]"; ?>" class="widthDiv">
			</div>

			<div>
			    <strong>PRICE</strong><br>
			   <input type="text" name="" value="<?php echo "$split_val[3]"; ?>" class="widthDiv">
			</div>
			
			

			<div>
			    <strong>DATE</strong><br>
			   <input type="text" name="" value="<?php echo "$split_val[7]"; ?>" class="widthDiv">
			</div>
			
			<a href="view_enquiry_info.php" class="btn btn-primary">Back</a>
		</form>


</div>
</div>
</div>
</div>
</div>
</div>
</div> 	
</div>
</div>






	
</script>
</body>

</html>

<?php

if(isset($_POST["update"]))
{
	$edit_record1 = $_GET['edit_form'];

	$galImage = $_FILES['galfile']['name'];
	$type = $_FILES['galfile']['type'];
	$size = $_FILES['galfile']['size'];
	$tmp = $_FILES['galfile']['tmp_name'];

	//$move = "/Users/mani.com/Desktop/uploads/";
		
	$galName = $_POST['galName'];
	$galDescription = $_POST['galDescription'];
	
	$path3 = "../sauranSAdmin/gallary/".$galImage ;
			
		$con=mysqli_connect("localhost","sauryans","sauryans#@!","db_sauyanssolar");
		
if($galImage=="")
{
	$query1 = mysqli_query($con,"update gallary set gal_product_name='$galName',gal_product_description='$galDescription',created_at=NOW() where id='$edit_record1'");
	if($query1)
	{
		move_uploaded_file($tmp,$path3);
	
		echo "<script> window.location.href = 'viewGallaryIMG.php';</script>";
	}
}
else
{
	$query2 = mysqli_query($con,"update gallary set gal_product='$galImage',gal_product_name='$galName',gal_product_description='$galDescription',date=NOW() where id='$edit_record1'");
	if($query2)
	{
		move_uploaded_file($tmp,$path3 );
	
		echo "<script> window.location.href = 'viewGallaryIMG.php';</script>";
	}
}		
		
			
}
?>