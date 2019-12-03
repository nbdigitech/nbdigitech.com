<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();



//code for add users

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
	<title>Create User</title>
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
	table
	{
		width: 90%;
		text-align:center; 
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
<div class="panel-heading" style="font-size: 20px;">All Users</div>

<div class="panel-body">


<form method="post" class="form-horizontal" enctype="multipart/form-data">
	

	<div class="form-group">
		<!--<label class="col-sm-2 control-label">Name</label><br>-->
		<div class="col-sm-offset-1">
			
			<table>
				<tr  style="background-color: #BBD4F1; height:30px;">
					<th style="text-align:center;">SNo.</th>
					<th style="text-align:center;">NAME</th>
					<th style="text-align:center;">EMAIL</th>
					<th style="text-align:center;">MOBILE</th>
					<th colspan="3" style="text-align:center;">ACTION</th>
				</tr>

				<tr style="height:30px;">
				<?php 
					$con=mysqli_connect("localhost","root","","sauryansDB");

					$query =mysqli_query($con,"select * from enquire order by 1 DESC");

					
			        $i=1;
		
					while($row=mysqli_fetch_array($query))
					{
						$id=$row['id'];
						//$profile=$row['profile'];
						
						$name=$row['name'];
						$email=$row['email'];
						//$place=$row['place'];
						
						$mobile=$row['mobile'];
						
						//$category=$row['category'];
						//$batch=$row['batch'];
						//$timing=$row['timing'];
						//$fee=$row['fee'];
					
			?>
				
		<td><?php echo $i;$i++; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $email; ?></td>
		
		<td><?php echo $mobile; ?></td>
		<td align="center" id="p"><a href='edit.php?edit=<?php echo $id; ?>' >Edit</a></td>
		<td align="center" id="p"><a href='delete.php?del=<?php echo $id; ?>' >Delete</a></td>
		<td align="center" id="p"><a href='details.php?detail=<?php echo $id; ?>' >Detail</a></td></tr>
		
		<?php } ?>
			</table>
		</div>
	</div>


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






	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</script>
</body>

</html>