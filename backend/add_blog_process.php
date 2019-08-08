<?php
//for file upload
$filename=$_FILES['img']['name'];
move_uploaded_file($_FILES['img']['tmp_name'], "../image/$filename");
//for database entry
$title = $_POST['title'];
$description = $_POST['description'];
$intro = $_POST['i_description'];
// $subtitle = $_POST['s_title'];
$secondarytext =$_POST['s_text']; 

$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
$q = "insert into blog_post (blog_title, blog_img, blog_short_description, blog_intro, blog_sub_title, blog_secondary_text) values('$title', '$filename', '$description','$intro','HISTORY','$description')";
$res = mysqli_query($con,$q) or die(mysqli_error($con));
header("location: ../admin_bash.php");
?>