<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="2.css">
</head>
<body>


<?php  
  session_start();
  if (isset($_SESSION['email']))
  {include 'navbar-after-login.php';}
  else{
    include 'navbar-before-login.php';
  }
?>

<table style="margin:80px;" width="90%">
<tr>
  <td style=" color:rgb(50,50,50); "><h2>LIVE SUPPORT</h2><h4>24 hours | 7 days a week | 365 days a year Live Technical Support</h4><p style="text-align:justify;">This is a demo information. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p></td>
  <td><img src="call.png" width="200px" height="200px"></td>
</tr>
</table>
<table>
  <tr>
    <td>
<div class="container">
  <div class="login" >
    <h1>Contact Us</h1>
    <form method="POST" action="contact_script.php">
      <p><input type="text" name="name" value="" placeholder="Name"></p>
      <p><input type="email" name="email" value="" placeholder="Email"></p>
      <p><textarea name="message" placeholder="Write your message to us!!!"></textarea></p>
      <p class="submit"><input type="submit" name="submit" value="Submit"></p>
    </form>
  </div>
</div>
    </td>
    <td style=" color:rgb(50,50,50); padding-left:400px; padding-bottom:270px;">
      <h2>Company Information:</h2>500 Lorem Ipsum Dolor Sit,<br>

          22-56-2-9 Sit Amet, Lorem,<br>

          INDIA<br>

          Phone:(00) 222 666 444<br>

          Fax: (000) 000 00 00 0<br>

          Email: info@mycompany.com<br>

          Follow on: Facebook, Twitter<br>
    </td>
  </tr>
</table>
<?php 
  include 'modal.php'; 
?>
<footer class="container-fluid" style="display: block; padding:15px; position:relative;">
 <table style="width:100%; margin-bottom:0px;">
  <tr style="font-size:17px;">
    <td><b> Information</b></td>
    <td><b> My Account</b></td>
    <td><b> Contact Us</b></td>
  </tr>
  <tr>
    <td><a href="http://localhost/WebDevelopmentPractice/Finalpage/About%20us.php" style="color:#FFFFFF;"> About us</a></td>
    <td><a href="#" style="color:#FFFFFF;"> Login</a></td>
    <td> Contact: +919711854430</td>
  </tr>
  <tr>
    <td><a href="http://localhost/WebDevelopmentPractice/Finalpage/Contact%20us.php" style="color:#FFFFFF;"> Contact us</a></td>
    <td><a href="http://localhost/WebDevelopmentPractice/Finalpage/Signup.php" style="color:#FFFFFF;"> Signup</a></td>
  </tr>
 </table>  
</footer>
</body>
</html>