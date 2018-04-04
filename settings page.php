<?php 
  session_start();
  if (!isset($_SESSION['email']))
  header('location: index.php');
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Setting page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="1.css">
</head>
<body>
<?php 
  include 'navbar-after-login.php';
?>
<div class="container" >
  <div class="login">
    <h1>Change Password</h1>
    <form method="POST" action="settings_script.php">
      <p><input type="password" name="old-password" value="" placeholder="Old Password"></p>
      <p><input type="password" name="password" value="" placeholder="New Password"></p>
      <p><input type="password" name="password1" value="" placeholder="Confirm Password"></p>
      <p class="submit"><input type="submit" name="submit" value="Change"></p>
      <?php
                echo "<b>".$_GET['error']."</b>";
            ?>
    </form>
  </div>
</div><br><br>
<footer class="container-fluid" style="display: block; padding:15px; position:absolute;">
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