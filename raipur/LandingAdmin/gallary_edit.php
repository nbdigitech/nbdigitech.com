<?php
session_start();

include('includes/checklogin.php');
check_login();




$con=mysqli_connect("localhost","sauryans","sauryans#@!","db_sauyanssolar");
$edit_id=$_GET['edit'];
$query =mysqli_query($con,"select * from gallary where id='$edit_id'");

	
		
	while($row=mysqli_fetch_array($query))
	{
		$id=$row['id'];
		$gal_product=$row['gal_product'];				
		$gal_product_name=$row['gal_product_name'];
		$gal_product_description=$row['gal_product_description'];	
		$date=$row['created_at'];
	}					
					
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
	<title>Sauryans Solar</title>
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
<div class="panel-heading" style="font-size: 20px;">Edit Gallery</div>

<div class="panel-body">
		<a href="viewGallaryIMG.php" class="btn btn-primary">Back</a>
		<div><br>
			<img src="../sauranSAdmin/gallary/<?php echo "$gal_product"; ?>" style="width: 380px; height: 250px;">
		</div>

		<form action="gallary_edit.php?edit_form=<?php echo "$edit_id"; ?>" method="post" enctype="multipart/form-data">

			<div><input type="file" name="galfile" class="form-control"></div>

			<div><input type="text" name="galName" value="<?php echo "$gal_product_name"; ?>" class="form-control"></div>

			<div><input type="text" name="galDescription" value="<?php echo $gal_product_description; ?>" class="form-control"></div>

			<div><input type="text" name="galDate" value="<?php echo $date; ?>" class="form-control"></div>
			<input type="submit" name="update" value="UPDATE" class="btn-primary">
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