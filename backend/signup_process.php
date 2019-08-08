<?php 
$name = $_POST['full_name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$username = $_POST['username'];
$pass = $_POST['password'];
$repass = $_POST['repassword'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
$query1 = "insert into signup_info(name,gender,dob,username,user_pass) values('$name','$gender','$dob','$username','$pass')";
$result = mysqli_query($con,$query1);
$query2 = "insert into login_info(username, user_pass) values('$username','$pass')";
$result = mysqli_query($con,$query2);
header("location:../admin_bash.php");
?>