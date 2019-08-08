<?php  
$name = $_POST['name'];
$mail = $_POST['mail'];
$cmmt = $_POST['comment'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
$db = mysqli_select_db($con,'project') or die(mysqli_error($con));
$q = "insert into contact_info(name,email,cmmt) values('$name','$mail','$cmmt')";
$result = mysqli_query($con,$q) or die(mysqli_error());
header("location: ../contact.php");
?>