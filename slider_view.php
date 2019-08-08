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
$q = "select * from index_slider where id = $i";
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
 		  <div class="post">
 		  	<div class="filler"></div>
  <div align="center" class="post-title"><h2><?php echo $arr['slider_title']; ?></h2></div>
  <div class="filler"></div>
  <div align="center" class="post-img"><img src="image/<?php echo $arr['slider_image_name'] ?>"></div>
  <div class="filler"></div>
  <div align="center" class="post-content">
    <div align="center" class="post-sub-title"><h4><?php echo $arr['slider_description']; ?></h4></div><br>

    <div class="filler"></div>
  </div>
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