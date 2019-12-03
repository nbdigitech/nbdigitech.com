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

@media (min-width: 701px) and (max-width: 3800px)
{
	.rdiv1
	{
		background-color: skyblue;
		height: auto;
		width: 100%;
		padding-bottom: 10px;
		padding-top: 10px;
	}
	.rdiv11
	{
		
		height: auto;
		width: 95%;
		margin: auto;
		margin-bottom: 10px;
		margin-top: 10px;
	}
	.rdiv12
	{
		width: 19%;
		height: 30px;
		background-color: white; 
		
		border-radius: 3px;
	}
	.rdiv122
	{
		width: 19%;
		height: 30px;
		background-color: white; 
		
		border-radius: 3px;
	}
	#rdiv1
	{
		width: 5%;
		text-align: center;
		line-height: 32px;
	}
	#rdiv2
	{
		margin-left: 48px;
		margin-top: -30px;
		text-align: center;
		line-height: 32px;
	}
	#rdiv3
	{
	        width: 30%;
		margin-left: 229px;
		margin-top: -30px;
		text-align: center;
		line-height: 32px;
	}
	#rdiv4
	{
		margin-left: 514px;
		margin-top: -30px;
		text-align: center;
		line-height: 32px;
	}
	#rdiv5
	{
		margin-left: 695px;
		margin-top: -30px;
		text-align: center;
		line-height: 32px;
	}
	#rdiv6
	{
		width: 19%;
		margin-left: 772px;
		margin-top: -30px;
		text-align: center;
		line-height: 32px;
	}


	#rdiv11
	{
		width: 5%;
		height: 50px;
		padding-left:10px;
		padding-top:10px;
	}
	#rdiv22
	{
		margin-left: 48px;
		margin-top: -50px;
		height: 50px;
		padding-left:10px;
                padding-top:10px;
                word-break: keep-all;
	}
	#rdiv33
	{
		margin-left: 229px;
		margin-top: -50px;
		height: 50px;
		width: 30%;
		padding-left:10px;
                word-break: keep-all;
                padding-top:10px;
	}
	#rdiv44
	{
		margin-left: 514px;
		margin-top: -50px;
		height: 50px;
		padding-left:10px;
		padding-top:10px;
	}
	#rdiv55
	{
		margin-left: 695px;
		margin-top: -50px;
		height: 50px;
	}
	#rdiv66
	{
		width: 19%;
		margin-left: 772px;
		margin-top: -50px;
		height: 50px;
	}
	#p
	{
	        width:35%;
	        height:24px;
	        margin-top:13px;
	       
	}
		
}






@media (min-width: 100px) and (max-width: 701px)
{
	.rdiv1
	{
		background-color: skyblue;
		height: auto;
		width: 100%;
		padding-bottom: 10px;
		padding-top: 10px;
	}
	.rdiv11
	{
		
		height: auto;
		width: 95%;
		margin: auto;
		margin-bottom: 10px;
		margin-top: 10px;
	}
	.rdiv12
	{
		width: 20%;
		min-height: 46px;
		max-height:auto;
		
		background-color: white; 
		border: none;
		border-radius: 3px;
	}
	.rdiv122
	{
		width: 20%;
		min-height: 30px;
		max-height:auto;
		
		background-color: white; 
		border: none;
		border-radius: 3px;
	}
	#rdiv1
	{
		width: 10%;
		text-align: center;
		line-height: 30px;
		font-size: 11px;
	}
	#rdiv2
	{
		margin-left: 38px;
		margin-top: -30px;
		text-align: center;
		line-height: 30px;
		font-size: 10px;
	}
	#rdiv3
	{
		margin-left: 113px;
		margin-top: -30px;
		text-align: center;
		line-height: 30px;
		font-size: 10px;
		width:28%;
	}
	#rdiv4
	{
		margin-left: 218px;
		margin-top: -30px;
		text-align: center;
		line-height: 30px;
		font-size: 10px;
	}
	#rdiv5
	{
		margin-left: 293px;
		margin-top: -30px;
		text-align: center;
		line-height: 30px;
		font-size: 10px;
		width:22%;
	}
	#rdiv6
	{
		width: 19%;
		margin-left: 772px;
		margin-top: -30px;
		text-align: center;
		line-height: 32px;
	}


	#rdiv11
	{
		width: 10%;
		font-size: 12px;
		padding-left:15px;
		padding-top:15px;
	}
	#rdiv22
	{
		margin-left: 38px;
		margin-top:-46px;
		font-size: 12px;
		word-wrap: break-word;
		padding-left:3px;
		padding-top:10px;
	}
	#rdiv33
	{
		margin-left: 113px;
		margin-top:-46px;
		font-size: 12px;
		width:28%;
		word-wrap: break-word; 
		padding-left:3px;
		padding-top:10px;
	}
	#rdiv44
	{
		margin-left: 218px;
		font-size: 12px;
		margin-top:-46px;
		padding-left:3px;
		padding-top:15px;
	}
	#rdiv55
	{
		margin-left: 293px;
		font-size: 12px;
		margin-top:-46px;
		width:22%;
	}
	#rdiv66
	{
		width: 19%;
		margin-left: 771px;
		font-size: 10px;
		
	}
	#p
	{
	        width:7%;
	        height:24px;
	        margin-top:10px;
	       
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
<div class="panel-heading"  style="font-size: 20px; height: 40px; background-color: #325D88; line-height: 20px; color: white;">All Users</div>

<div class="panel-body">


<form method="post" class="form-horizontal" enctype="multipart/form-data">
	

	<div class="form-group">
		<!--<label class="col-sm-2 control-label">Name</label><br>-->
		<div class="" style="overflow-x:auto;">

			<div class="rdiv1">
				<div class="rdiv11">
					<div class="rdiv122" id="rdiv1">
						<strong>SNo.</strong>
					</div>
					
					<div class="rdiv122" id="rdiv2">
						<strong>USER NAME</strong>
					</div>
					<div class="rdiv122" id="rdiv3">
						<strong>EMAIL</strong>
					</div>
					<div class="rdiv122" id="rdiv4">
						<strong>MOBILE</strong>
					</div>
					<div class="rdiv122" id="rdiv5">
						<strong>ACTION</strong>
					</div>
				</div>

				<?php 
					

					$query =mysqli_query($mysqli,"select * from landing_info order by 1 DESC");

					
			        $i=1;
		
					while($row=mysqli_fetch_array($query))
					{
						$id=$row['id'];
						$page_name=$row['page_name'];
						$plan=$row['plan'];
						$price=$row['price'];
						$username=$row['username'];
						$email=$row['email'];
						$mobile=$row['mobile'];	
						$date=$row['date'];	
						
			?>
				<div class="rdiv11">
					<div class="rdiv12" id="rdiv11">
						<?php echo $i;$i++; ?>
					</div>
					
					<div class="rdiv12" id="rdiv22">
						<?php echo $username; ?>
					</div>
					<div class="rdiv12" id="rdiv33">
						<?php echo $email; ?>
					</div>
					<div class="rdiv12" id="rdiv44">
						<?php echo $mobile; ?>
					</div>
					<div class="rdiv12" id="rdiv55">
						<center><a href='enquiry_info.php?edit=<?php echo $id; ?>,<?php echo $page_name; ?>,<?php echo $plan; ?>,<?php echo $price; ?>,<?php echo $username; ?>,<?php echo $email; ?>,<?php echo $mobile; ?>,<?php echo $date; ?>' class="btn btn-primary" id="p"><i class="fa fa-eye" aria-hidden="true" id="ii"></i></a>
		<a href='delete.php?del=<?php echo $id; ?>' class="btn btn-danger" id="p"><i class="fa fa-trash" aria-hidden="true" id="ii"></i></a></center>
					</div>
				</div>

				<?php } ?>
			</div>
			
			
				
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