<!DOCTYPE html>
<html>
<head>
  <title>Contact</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="control_ribbon_style.css">
</head>
<body>
<?php include("header.php"); ?>
<br><br><br>
<!-- start of content -->
<div class="contact-s">
  <div class="filler"></div>
  <table>
    <tr>
      <td class="contact-col-1" align="center">
        <h2>contact details</h2>
        <p>
          company name: Erlenz Company<br>
          street name & number: ring road<br>
          town: kathmandu<br>
          postcode/zip: 44600<br>
          tel: xxxxxxxxxx<br>
          fax: xxxxxxxxxx<br>
          email:contact@domainname.com
        </p>
      </td>

      <td  class="contact-col-2" >
      <!-- <form> -->
      <form action="backend/process_contact.php" method="POST">
        <div class="contact-body">
          <div><b>Name:</b> <input type="" name="name" id="name"></div>
          <div class="error" id='error_name'></div><br>
          <div><b>Email:</b> <input type="" name="mail" id="mail"></div>
          <div class="error" id='error_mail'></div><br>
          <div><b>Comment:</b><br><textarea rows="10" cols="45" id="cmt" name="comment"></textarea></div>
          <div class="error" id='error_cmt'></div><br>
          <div><button onclick="validate();" type="submit">Submit</button></div><br>
        </div>
      </form>
      <!-- </form> -->
      </td>
    </tr>
    <tr>
      <td colspan="2" class="icon-container">
        <div class="filler"></div>
        <div class="icon" style="margin-left: 450px;"><a href="https://www.facebook.com/shahil.jha" target="_blank"><img src="image/facebook.png"></a></div>
        <div class="icon"><a href="https://github.com/ShahilJha" target="_blank"><img src="image/github.png"></a></div>
        <div class="icon"><a href="https://www.instagram.com/shahil_jha/" target="_blank"><img src="image/instagram.png"></a></div>
      </td>
    </tr>
  </table>
</div>

<!-- end of content -->
<?php include("footer.php"); ?>
</div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>