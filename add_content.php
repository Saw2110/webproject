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
  <title>Add Content</title>
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
        <div align="center" class="post-title"><h3>Add slide</h3></div>
        <hr>
      <form method="POST" action="backend/add_slider_process.php" enctype="multipart/form-data">
        <div class="login-user">Title  <input type="text" name="title"></div><br>
        <div class="login-pass">Short Description: <br> <textarea cols="45" rows="3" name="description"></textarea><br><br>
        <div class="">Insert a image</div>
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

<!-- start of content -->
<div class="post-container">
<div class="filler"></div>
<hr style="width: 80%; color: #f2f2f2;">
<div class="filler"></div>
<div class="login-style">
      <div class="filler"></div>
        <div align="center" class="post-title"><h3>Add Blog</h3></div>
        <hr>
      <form method="POST" action="backend/add_blog_process.php" enctype="multipart/form-data">
        <div class="login-user">Title  <input type="text" name="title"></div><br>
        <div class="login-pass">Short Description: <br> <textarea cols="45" rows="3" name="description"></textarea><br><br>
        Intro: <br> <textarea cols="45" rows="3" name="i_description"></textarea><br><br>
        Sub Title: <br> <textarea cols="45" rows="3" name="s_title"></textarea><br><br>
        Secondary Text : <br> <textarea cols="45" rows="3" name="s_text"></textarea><br><br>
       
        <div class="">Insert a image</div>
        <div class="login-user"> <input type="file" name="img"></div><br>
        <input type="submit" name="btn_post_blog" value="Post Blog" style="margin-left: 32%;"><br>
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