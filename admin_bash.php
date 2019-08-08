<?php
session_start();
if(isset($_SESSION['username'])){
  include("control_ribbon.php");  
}
else{
  header('location: login.php');
}
?>
<?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="admin_style.css">
  <link rel="stylesheet" type="text/css" href="control_ribbon_style.css">
  <link rel="stylesheet" type="text/css" href="admin_bash_table_style.css">
</head>
<body>
<br><br><br>
<div class="container" style="border-radius: 10px 10px 0px 0px;">

<!-- start of content -->
<?php  
$query1 = "SELECT * FROM login_info";
$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
?>
<div class="post-container">
<div class="filler"></div>
<div align="center" class="post-title"><h2>Admin Dashboard</h2></div>
<hr style="width: 80%; color: #f2f2f2;">
<div class="filler"></div>
<!-- start of log-in info -->
<div align="center" class="post-title"><h2>Log-in Info</h2></div>
<div class="admin_bash_table">
<p align="center">
<table border="1" cellspacing="0px" cellpadding="10px">
 	<tr>
 		<th rowspan="2">ID</th>
 		<th rowspan="2">Username</th>
 		<th rowspan="2">Password</th>
 		<th colspan="3">Action</th>
 	</tr>
 	<tr>
 		<th>Edit</th>
 		<th>Delete</th>
 		<th>View</th>
 	</tr>
 	<?php 
 	while($arr = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
 		echo "<tr>";
 		echo "<td>".$arr['id']."</td>";
 		echo "<td>".$arr['username']."</td>";
 		echo "<td>".$arr['user_pass']."</td>";
 		echo "<td><a href='login_update_page.php?id=".$arr['id']."'>Edit</a></td>";
 		echo "<td><a href='backend/login_info_delete.php?id=".$arr['id']."' onclick=\"return confirm('are you sure you want to delete!');\">Delete</a></td>";
 		echo "<td><a href='login_info_view.php?id=".$arr['id']."'>View</a></td>";
 		echo "</tr>";
 	}
 	 ?>
</table>
</p>
<div class="filler"></div>
</div>
<!-- end of log-in info -->

<!-- start of signup user info info -->
<?php  
$query2 = "SELECT * FROM signup_info";
$result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
?>
<div align="center" class="post-title"><h2>Team Member Details</h2></div>
<div class="admin_bash_table">
<p align="center">
<table border="1" cellspacing="0px" cellpadding="10px">
 	<tr>
 		<th rowspan="2">ID</th>
 		<th rowspan="2">Name</th>
 		<th rowspan="2">Gender</th>
 		<th rowspan="2">D.O.B.</th>
 		<th rowspan="2">Username</th>
 		<th rowspan="2">Password</th>
 		<th colspan="3">Action</th>
 	</tr>
 	<tr>
 		<th>Edit</th>
 		<th>Delete</th>
 		<th>View</th>
 	</tr>
 	<?php 
 	while($arr2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
 		echo "<tr>";
 		echo "<td>".$arr2['id']."</td>";
 		echo "<td>".$arr2['name']."</td>";
 		echo "<td>".$arr2['gender']."</td>";
 		echo "<td>".$arr2['dob']."</td>";
 		echo "<td>".$arr2['username']."</td>";
 		echo "<td>".$arr2['user_pass']."</td>";
 		echo "<td><a href='signup_update_page.php?id=".$arr2['id']."'>Edit</a></td>";
 		echo "<td><a href='backend/signup_info_delete.php?id=".$arr2['id']."' onclick=\"return confirm('are you sure you want to delete!');\">Delete</a></td>";
 		echo "<td><a href='signup_info_view.php?id=".$arr2['id']."'>View</a></td>";
 		echo "</tr>";
 	}
 	 ?>
</table>
</p>
<div class="filler"></div>
</div>
<!-- end of signup user info info -->

<!-- start of slider post info  -->
<?php  
$query4 = "SELECT * FROM index_slider";
$result4 = mysqli_query($con,$query4) or die(mysqli_error($con));
?>
<div align="center" class="post-title"><h2>Slider Details</h2></div>
<div class="admin_bash_table">
<p align="center">
<table border="1" cellspacing="0px" cellpadding="10px">
 	<tr>
 		<th rowspan="2">ID</th>
 		<th rowspan="2">Title</th>
 		<th rowspan="2">description</th>
 		<th colspan="3">Action</th>
 	</tr>
 	<tr>
 		<th>Edit</th>
 		<th>Delete</th>
 		<th>View</th>
 	</tr>
 	<?php 
 	while($arr4 = mysqli_fetch_array($result4,MYSQLI_ASSOC)) {
 		echo "<tr>";
 		echo "<td>".$arr4['id']."</td>";
 		echo "<td>".$arr4['slider_title']."</td>";
 		echo "<td>".$arr4['slider_description']."</td>";
 		echo "<td><a href='slider_update_page.php?id=".$arr4['id']."'>Edit</a></td>";
 		echo "<td><a href='backend/slider_delete.php?id=".$arr4['id']."' onclick=\"return confirm('are you sure you want to delete!');\">Delete</a></td>";
 		echo "<td><a href='slider_view.php?id=".$arr4['id']."'>View</a></td>";
 		echo "</tr>";
 	}
 	 ?>
</table>
</p>
<div class="filler"></div>
</div>
<!-- end of slider post info -->

<!-- start of Blog info -->
<?php  
$query6 = "SELECT * FROM blog_post";
$result6 = mysqli_query($con,$query6) or die(mysqli_error($con));
?>
<div align="center" class="post-title"><h2>Blogs Details</h2></div>
<div class="admin_bash_table">
<p align="center">
<table border="1" cellspacing="0px" cellpadding="10px">
 	<tr>
 		<th rowspan="2">ID</th>
 		<th rowspan="2">Title</th>
 		<th rowspan="2">description</th>
 		<th colspan="3">Action</th>
 	</tr>
 	<tr>
 		<th>Edit</th>
 		<th>Delete</th>
 		<th>View</th>
 	</tr>
 	<?php 
 	while($arr6 = mysqli_fetch_array($result6,MYSQLI_ASSOC)) {
 		echo "<tr>";
 		echo "<td>".$arr6['id']."</td>";
 		echo "<td>".$arr6['blog_title']."</td>";
 		echo "<td>".$arr6['blog_short_description']."</td>";
 		echo "<td><a href='add_blog_process.php?id=".$arr6['id']."'>Edit</a></td>";
 		echo "<td><a href='backend/blog_delete.php?id=".$arr6['id']."' onclick=\"return confirm('are you sure you want to delete!');\">Delete</a></td>";
 		echo "<td><a href='blog_view.php?id=".$arr6['id']."'>View</a></td>";
 		echo "</tr>";
 	}
 	 ?>
</table>
</p>
<div class="filler"></div>
</div>
<!-- end of Blog post info -->

<!-- start of contact info -->
<?php  
$query5 = "SELECT * FROM contact_info";
$result5 = mysqli_query($con,$query5) or die(mysqli_error($con));
?>
<div align="center" class="post-title"><h2>People who want to contact us</h2></div>
<div class="admin_bash_table">
<p align="center">
<table border="1" cellspacing="0px" cellpadding="10px">
 	<tr>
 		<th>ID</th>
 		<th>Name</th>
 		<th>Email</th>
 		<th>Comment</th>
 		<th>Action</th>
 	</tr>
 	<?php 
 	while($arr5 = mysqli_fetch_array($result5,MYSQLI_ASSOC)) {
 		echo "<tr>";
 		echo "<td>".$arr5['contact_id']."</td>";
 		echo "<td>".$arr5['name']."</td>";
 		echo "<td>".$arr5['email']."</td>";
 		echo "<td>".$arr5['cmmt']."</td>";
 		echo "<td><a href='backend/contact_delete.php?contact_id=".$arr5['contact_id']."' onclick=\"return confirm('are you sure you want to delete!');\">Delete</a></td>";
 		
 		echo "</tr>";
 	}
 	 ?>
</table>
</p>
<div class="filler"></div>
</div>
<!-- end of contact info -->

<!-- start of newsletter info -->
<?php  
$query3 = "SELECT * FROM newsletter";
$result3 = mysqli_query($con,$query3) or die(mysqli_error($con));
?>
<div align="center" class="post-title"><h2>Newsletter Info</h2></div>
<div class="admin_bash_table">
<p align="center">
<table border="1" cellspacing="0px" cellpadding="10px">
 	<tr>
 		<th>ID</th>
 		<th>Name</th>
 		<th>Email Address</th>
 		<th>Action</th>
 	</tr>
 	<?php 
 	while($arr3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)) {
 		echo "<tr>";
 		echo "<td>".$arr3['id']."</td>";
 		echo "<td>".$arr3['name']."</td>";
 		echo "<td>".$arr3['mail']."</td>";
 		echo "<td><a href='backend/newsletter_info_delete.php?id=".$arr3['id']."' onclick=\"return confirm('are you sure you want to delete!');\">Delete</a></td>";
 		
 		echo "</tr>";
 	}
 	 ?>
</table>
</p>
<div class="filler"></div>
</div>
<!-- end of newsletter info -->

<!-- main container <div> -->
<div class="filler"></div>
</div>
</div>
<!-- end of content -->
<?php include 'footer.php'; ?>

</body>
</html>