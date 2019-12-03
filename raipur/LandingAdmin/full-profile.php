<?php
session_start();
include("includes/config.php");

?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}
function f3()
{
window.print(); 
}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student  Information</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="hostel.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0">
<?php 
           $pid = $_GET['id'];
		 $ret= mysqli_query($mysqli,"SELECT * FROM registration where id = '$pid'");
			
               while($row=mysqli_fetch_array($ret))
			{
                    $id = $row['id'];
                    $name = $row['name'];
                    $gender = $row['gender'];
                    $city = $row['city'];
                    $phone = $row['phone'];
                    $email = $row['email'];
                    $roomtype = $row['roomtype'];
                    $roomsharing = $row['roomsharing'];
                    $address = $row['address'];
                    $additionalnote = $row['additionalnote'];
               } 
?>
<div>
         <center> <div> ID: <?php echo $id; ?></div>
          <div> NAME: <?php echo $name; ?></div>
          <div> GENDER: <?php echo $gender; ?></div>
          <div> CITY: <?php echo $city; ?></div>
          <div> MOBILE NO: <?php echo $phone; ?></div>
          <div> EMAIL ID: <?php echo $email; ?></div>
          <div> ROOM TYPE: <?php echo $roomtype; ?></div>
          <div> ROOM SHARING: <?php echo $roomsharing; ?></div>
          <div> ADDRESS: <?php echo $address; ?></div>
          <div> ADDITIONAL NOTE: <?php echo $additionalnote; ?></div></center>
</div>          


</table>
</body>
</html>
