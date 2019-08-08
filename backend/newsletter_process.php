<?php 
$name = $_POST['responder'];
$mail = $_POST['responder_mail'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
$query1 = "insert into newsletter(name,mail) values('$name','$mail')";
$result = mysqli_query($con,$query1);
header("location:../index.php");
?>