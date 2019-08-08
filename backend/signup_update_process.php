<?php
$id = $_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$user = $_POST['username'];
$pass = $_POST['password'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
$q = "update signup_info set name='$name', gender='$gender', dob='$dob', username='$user', user_pass='$pass' where id=$id ";
$res = mysqli_query($con,$q);
header('location: ../admin_bash.php');
?>