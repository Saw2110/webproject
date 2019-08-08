
<!DOCTYPE html>
<html>
<head>
  <title>Sign-up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="admin_style.css">
  <link rel="stylesheet" type="text/css" href="control_ribbon_style.css">
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'restrict.php'; ?>
<br><br><br>
<!-- start of content -->
<div class="post-container">
  <div class="post">
  <div align="center" class="post-title"><h2>Please Fill Up the Given Form</h2></div>
  <div class="login-style">
      <div class="filler"></div>
        <div class="filler"></div>
      <form method="POST" action="backend/signup_process.php"  style="margin-left: 12%;">
        <div class="login-user">Name:<br>
          <input type="text" name="full_name" placeholder="Full Name">
        </div><br>
        <div class="login-user">Gender: <br>
          <div class="signup-radio-btn" style="margin-left: 15%;">
            Male <input type="radio" name="gender" value="Male">
            Female <input type="radio" name="gender" value="Female">  
          </div>
        </div><br>
        <div class="login-user">D.O.B.:<br>  <input type="text" name="dob" placeholder="yyyy/mm/dd"></div><br>
        <div class="login-user">Username: <br><input type="text" name="username"></div><br>
        <div class="login-pass">Password:<br>  <input type="password" name="password"></div><br>
        <div class="login-pass">Re-enter Password: <br> <input type="password" name="repassword"></div><br>
        <input type="submit" name="btn" value="Add Member" style="margin-left:25%;">
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