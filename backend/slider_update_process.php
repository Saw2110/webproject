<?php
$i = $_POST['id'];
$title = $_POST['title'];
$desp = $_POST['desp'];
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
if(isset($_POST['img'])) {
  unlink("../image/".$arr['slider_image_name']);
  $filename=$_FILES['img']['name'];
  move_uploaded_file($_FILES['img']['tmp_name'], "../image/$filename");
  $query = "UPDATE index_slider Set slider_image_name = '$filename', slider_title='$title',   slider_description= '$desp' WHERE id = $i";
}
else{ 
 $query = "UPDATE index_slider Set slider_title='$title',   slider_description= '$desp' WHERE id = $i";
}
$result = mysqli_query($con,$query) or die(mysqli_error($con));
header('location: ../admin_bash.php')
?>