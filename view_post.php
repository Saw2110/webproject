<?php
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
$db = mysqli_select_db($con,'project') or die(mysqli_error($con));
$post_id = $_GET['id'];
$q = "select * from blog_post where id = '$post_id'";
$req = mysqli_query($con,$q) or die(mysqli_error($con));
$arr = mysqli_fetch_array($req,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $arr['blog_title']; ?></title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="control_ribbon_style.css">
</head>
<body>
<?php include("header.php"); ?>
<br><br><br>
<!-- start of content -->
<div class="post-container">
<div class="filler"></div>

  <div class="post">
  <div align="center" class="post-title"><h2><?php echo $arr['blog_title']; ?></h2></div>
  <div class="filler"></div>
  <div align="center" class="post-img"><img src="image/<?php echo $arr['blog_img'];?>"></div>
  <div class="filler"></div>
  <div align="center" class="post-content">
    <p><?php echo $arr['blog_intro']; ?></p>

    <div align="center" class="post-sub-title"><h3>History of <?php echo $arr['blog_title']; ?></h3></div><br>
    <?php echo $arr['blog_short_description']; ?>
    <p><?php echo $arr['blog_secondary_text']; ?></p>

    <div class="filler"></div>
  </div>
  </div>

<!-- main container <div> -->
<div class="filler"></div>
</div>
<!-- end of content -->
<?php include("footer.php"); ?>

</body>
</html>