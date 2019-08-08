<!-- insertion of control_ribbon (start) -->
<?php
session_start();
if(isset($_SESSION['username'])){
  include("control_ribbon.php");  
}
?>
<!-- insertion of control_ribbon (end) -->

    <!-- start of header -->
<div class="header">
      <div class="logo">
        <a href="index.php"><span>Extreme Sports</span><div>Let The Fun Begin</div></a>  
      </div>
      
        <div align="right" class="contact-info">Tel:XXXXX XXXXXXXXXX | Mail: info@domain.com</div>
      <div class="search-container">
        <form>
          <input type="text" placeholder="Search.." name="search">
          <button type="submit">Submit</button> 
        </form>
      </div>
    </div>
        <!-- end of header -->

  <div class="container">
        <!-- start of menu -->
        <div class="menu">
      
        <div><a href="index.php" style=" border-radius: 10px 0px 0px 0px;">Home</a></div>
        <div><a href="portofolio.php">Portofolio</a></div>
        <div id='dropdown'>
          <a href="post_blog.php">Blog</a>
          <!-- <div class="submenu">
            <a href="">1</a>
            <a href="">2</a>
            <a href="" style="border-radius: 0px 0px 5px 5px;">3</a>
          </div> -->
        </div>
       <!--  <div><a href="">Gallery</a></div> -->
        <div><a href="about.php">About</a></div>
        <div><a href="contact.php" style="border-radius: 0px 10px 0px 0px;padding-right: 75px;">Contact</a></div>
      
    </div><br>
    <!-- end of meu -->