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
$i = $_GET['id'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
$q = "select * from signup_info where id = $i";
$res = mysqli_query($con,$q) or die(mysqli_error($con));
$arr=mysqli_fetch_array($res,MYSQLI_ASSOC)
?>
<!DOCTYPE html>
<html>
<head>
  <title>Viewboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="admin_style.css">
  <link rel="stylesheet" type="text/css" href="control_ribbon_style.css">
  <link rel="stylesheet" type="text/css" href="admin_bash_table_style.css">
</head>
<body>
<br><br><br>
<div class="container" style="border-radius: 10px 10px 0px 0px;">
 <div>
 	<p align="center">
	<b>
		<br>
		ID:<?php echo $arr['id']; ?>
		<br>
		Name:<?php echo $arr['name']; ?>
		<br>
		Gender:<?php echo $arr['gender']; ?>
		<br>
		D.O.B.:<?php echo $arr['dob']; ?>
		<br>
		Username:<?php echo $arr['username']; ?>
		<br>
		Password:<?php echo $arr['user_pass']; ?>
		<br>
	</b>
</p>
 </div>
<!-- main container <div> -->
<div class="filler"></div>
</div>
</div>
<!-- end of content -->
<?php include 'footer.php'; ?>

</body>
</html>