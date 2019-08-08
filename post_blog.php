<?php
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
$db = mysqli_select_db($con,'project') or die(mysqli_error($con));
$q = "select * from blog_post";
$req = mysqli_query($con,$q) or die(mysqli_error($con));


?>


<!DOCTYPE html>
<html>
<head>
  <title>Blog</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="control_ribbon_style.css">
</head>
<body>
<?php include("header.php"); ?>
<br><br><br>
<!-- start of content -->

<div class="blog-container">

<?php 
while($arr = mysqli_fetch_array($req,MYSQLI_ASSOC)){?>
  <div class="blog-post">
    <div class="blog-title"><h2 align="center"><?php echo $arr['blog_title']; ?></h2></div><br>
    <div class="blog-post-img" align="center"><img src="image/<?php echo $arr['blog_img'];?>"></div><br>
    <div class="blog-p-content" align="center"><p>
    	<?php echo $arr['blog_short_description']; ?>
    </p></div>
    <div align="center"><button class="read-b"><a href="view_post.php?id=<?php echo $arr['id']?>">read more&gt;&gt;</a></button></div>
    <div class="filler"></div>
  </div>
  <div class="filler"></div>
<?php }
?>

<!--End of Container -->
<!-- main container <div> -->
<div class="filler"></div>
</div>
<!-- end of content -->
<?php include("footer.php"); ?>

</body>
</html>