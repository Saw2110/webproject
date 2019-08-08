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
$arr=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Slider Update</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="admin_style.css">
  <link rel="stylesheet" type="text/css" href="control_ribbon_style.css">
  <link rel="stylesheet" type="text/css" href="admin_bash_table_style.css">
  <style type="text/css">
  	textarea{
		font-size: 14px;
		color: grey;
		font-family: Georgia Regular;
		border-radius: 12px;
		border: none;
		background: #f2f2f2;
	}
  </style>
</head>
<body>
<br><br><br>
<div class="container" style="border-radius: 10px 10px 0px 0px;">

<!-- start of content -->
<div class="post-container">
<div class="filler"></div>
<div align="center" class="post-title"><h2>Content Adding Page</h2></div>
<hr style="width: 80%; color: #f2f2f2;">
<div class="filler"></div>

<div class="login-style">
      <div class="filler"></div>
        <div class="filler"></div>
      <form method="POST" action="backend/slider_update_process.php" enctype="multipart/form-data">
        <div class="login-user"><input type="hidden" name="id" value="<?php echo $arr['id']?>"></div><br>
        <div class="login-user">Title  <input type="text" name="title" value="<?php echo $arr['slider_title']?>"></div><br>
          <div class="login-user">Short Description <br> <input type="text" name="desp" style="width: 95%; height: 10%; text-align: left; vertical-align: top;" value="<?php echo $arr['slider_description']?>"></div><br>
        <div style="margin-left: 8%;">Insert a image</div>
        <div class="login-user"> <input type="file" name="img"></div><br>
        <input type="submit" name="btn_post_slider" value="Post Slider" style="margin-left: 32%;"><br>
      </form>
  </div>
<div class="filler"></div>
<!-- main container <div> -->
</div>
</div>
<div class="filler"></div>
<!-- end of content -->
<?php include 'footer.php'; ?>

</body>
</html>