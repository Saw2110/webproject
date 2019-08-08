<?php 
  if(isset($_COOKIE['userNameApp'])){
  $user = $_COOKIE['userNameApp'];
  die("found");
}
else {
  $user = '';
 // die("not found");
 // die($_COOKIE['userNameApp']);
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Log-in</title>
  <link rel="stylesheet" type="text/css" href="admin_style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="control_ribbon_style.css">
</head>
<body>
<?php include 'header.php'; ?>
<br><br><br>
<!-- start of content -->
<div class="post-container">
  <div class="post">
  <div align="center" class="post-title"><h2>Log-in</h2></div>
  <div class="login-style">
      <div class="filler"></div>
        <div class="filler"></div>
      <form method="POST" action="backend/login_process.php">
        <div class="login-user">Username:  <input type="text" name="username" value='<?php echo "$user"; ?>'></div><br>
        <div class="login-pass">Password:  <input type="password" name="password"></div><br>
        <div class="remember-btn"><input type="checkbox" name="remember_me" value="remember_me">Remember Me</div><br>
        <input type="submit" name="btn_login" value="Log-in"><br>
      </form>
      <div class="filler"></div>
  </div>
  <div class="filler"></div>
  </div>
  </div>

<!-- main container <div> -->
<div class="filler"></div>
</div>
<!-- end of content -->
<?php include 'footer.php'; ?>

</body>
</html>