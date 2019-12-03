<style>
	
.dDown
{
	width:248px;
	font-size: 15px;
	text-align: left;
	background-color: #2C3136;
}
.a li
{
	width: 246px;
}
.a ul
{
	background-color: #163C63;
}
.a ul li a:hover
{
	background-color:#2C3136; 
	color: white;
}

a:hover
{
	background-color:#163C63; 
	color: white;
}
</style>
	




<nav class="ts-sidebar">
<div class="menu">


<!--<li class="ts-label">Main</li>-->
	  <li><a href="admin-profile.php" style="color:lime" class="btn  dDown"><i class="fa fa-dashboard"></i> Dashboard</a></li>

	
<div class="dropdown a">
    <a class="btn dropdown-toggle dDown" type="button" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> Enquiry
  <span class="caret" style="float: right; margin-top:10px;"></span></a>
    <ul class="dropdown-menu">
      <li><a href="view_enquiry_info.php">View Enqiries</a></li>
      
    </ul>
</div>






<li><a href="logout.php" style="color:red" class="btn dDown"><i class="fa fa-sign-out" aria-hidden="true" ></i> Logout</a></li>

</div>		
</nav>