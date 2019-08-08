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
$q = "select * from login_info where id = $i";
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
<div class="post-container">
  <div class="post">
  <div align="center" class="post-title"><h2>Log-in</h2></div>
  <div class="login-style">
      <div class="filler"></div>
        <div class="filler"></div>
      <form method="POST" action="backend/login_update_process.php">
        <div class="login-user"><input type="hidden" name="id" value='<?php echo $arr['id']; ?>'></div><br>
        <div class="login-user">Username:  <input type="text" name="username" value='<?php echo $arr['username']; ?>'></div><br>
        <div class="login-pass">Password:  <input type="password" name="password" value="<?php echo $arr['user_pass']; ?>"></div><br>
        <input type="submit" name="btn_login" value="Apply Edit"><br>
      </form>
      <div class="filler"></div>
  </div>
  <div class="filler"></div>
  </div>
  </div>

<!-- main container <div> -->
<div class="filler"></div>
 </div>
<!-- main container <div> -->
<div class="filler"></div>
</div>
</div>
<!-- end of content -->
<?php include 'footer.php'; ?>

</body>
</html>