<?php
$id = $_POST['id'];
$user = $_POST['username'];
$pass = $_POST['password'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
$q = "update login_info set username='$user', user_pass='$pass' where id=$id ";
$res = mysqli_query($con,$q);
header('location: ../admin_bash.php');
?>