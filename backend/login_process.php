<?php
session_start();
$user = $_POST['username'];
$pass = $_POST['password'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
$query = "SELECT * FROM login_info WHERE username = '$user' AND user_pass = '$pass'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
if(mysqli_affected_rows($con)>0){
	$_SESSION['username'] = $user;
	$_SESSION['password'] = $pass;
	if(isset($_POST['remember_me'])){
		setcookie("userNameApp",$user,time()+60*60*24*365);
	}
	header('location: ../admin_bash.php');//redirects to admin bash
}
else{
	header('location: ../login.php');
}
?>