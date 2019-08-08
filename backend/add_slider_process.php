<?php
//for file upload
$filename=$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'], "../image/$filename");
//for database entry
$title = $_POST['title'];
$description = $_POST['description'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
$q = "insert into index_slider(slider_title, slider_description, slider_image_name) values('$title', '$description', '$filename')";
$res = mysqli_query($con,$q) or die(mysqli_error($con));
header("location: ../admin_bash.php");
?>