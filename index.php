<?php 
$con = mysqli_connect('localhost','root','') or die(mysqli_error($con));
mysqli_select_db($con,'project') or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="control_ribbon_style.css">
  <link rel="stylesheet" type="text/css" href="slider_style.css">
</head>
<body onload="display();">

    <?php include("header.php"); ?>

    <!-- start of slider -->
    <?php  
    $query1 = "SELECT * FROM index_slider ORDER BY id DESC LIMIT 4";
    $result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
    ?>
    <div class="slider-container">
      <?php  
      while ($arr = mysqli_fetch_array($result1,MYSQLI_ASSOC)) {
      ?>
        <div class="slider">
          <img src="image/<?php echo $arr['slider_image_name'] ?>">
          <div class="text-container">
            <p><?php echo $arr['slider_title']; ?></p>
            <span><?php echo $arr['slider_description']; ?></span>
          </div>

          <div class="pre" onclick="pre();"></div>
          <div class="next" onclick="next();"></div>
        </div>
      <?php
      }
      ?>      
    </div>
    <!-- end of slider -->


    <!-- start of post part -->
    <div class="post-row">
      <?php
      $query3 = "SELECT * FROM blog_post ORDER BY id DESC LIMIT 2";
      $result3 = mysqli_query($con,$query3) or die(mysqli_error($con));
      ?>
      <?php  
      while ($arr3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)) {
      ?>
      <div class="post-col">
        <h2><?php echo $arr3['blog_title'] ?></h2><hr>
        <img src="image/<?php echo $arr3['blog_img'] ?>">
        <p><?php echo $arr3['blog_short_description'] ?>.........</p>
        <button class="read-b"><a href="<?php echo $arr3['blog_link'] ?>">read more&gt;&gt;</a></button>
      </div>
      <?php 
      }
      ?>
      <div class="post-col">
        <h2>News Post</h2><hr>
        <?php  
        $query2 = "SELECT * FROM news_and_notice ORDER BY id ASC LIMIT 2";
        $result2 = mysqli_query($con,$query2) or die(mysqli_error($con));
        ?>
        <?php  
        while ($arr2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)) {
        ?>
        <div class="news-col">
          <h3 class="comma"><span><?php echo $arr2['n_title']; ?></span></h3>
          <p><?php echo $arr2['n_short_description']; ?></p>
          <button class="read-b"><a href="<?php echo $arr2['n_link']; ?>">read more&gt;&gt;</a></button>
        </div>
        <?php
        }
        ?>
      </div>
    </div><hr align="center" class="gap-filler">
    <!-- end of post part -->

    <!-- start of widget section -->
    <div class="widget-section">
      
      <div class="widget">
        <h2>contact details</h2>
        <p>
          company name<br>
          street name & number<br>
          town<br>
          postcode/zip<br>
          tel: xxxxxxxxxx<br>
          fax: xxxxxxxxxx<br>
          email: <a href="">contact@domainname.com</a>
        </p>
      </div>

      <div class="widget">
        <h2>quick links to posts</h2>
        <?php  
        $query4 = "SELECT * FROM blog_post ORDER BY id ASC LIMIT 5";
        $result4 = mysqli_query($con,$query4) or die(mysqli_error($con));
        ?>
        <?php 
        while ($arr4 = mysqli_fetch_array($result4,MYSQLI_ASSOC)) {
        ?>
        <a href="<?php echo $arr4['blog_link']; ?>"><?php echo $arr4['blog_title']; ?></a><hr>
        <?php  
        }
        ?>
      </div>

      <div class="widget">
        <h2>from the blog</h2>
        <p>form the blog</p>
        <p>
          this place shows the about the blog page.<br>
          <button class="read-b"><a href="blog.php">read more &gt;&gt;</a></button>
        </p>
      </div>

      <form method="POST" action="backend/newsletter_process.php">
      <div class="widget">
        <h2>grab our newsnewsletter</h2>
          <input type="text" name="responder" placeholder="Name" id="h-name"><br>
          <input type="email" name="responder_mail" placeholder="Email" id="h-mail"><br>
          <input type="submit" name="submit" onclick="h_validate();">
      </div>
      </form>
    </div>
    <!-- End of widget section -->

    <?php include 'footer.php'; ?>

  </div>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>