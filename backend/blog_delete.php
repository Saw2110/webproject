<?php 
$id = $_GET['id'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
$query = "delete from blog_post where id = $id";
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../admin_bash.php')
?>