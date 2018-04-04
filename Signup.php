<?php 
  session_start();
  if (isset($_SESSION['email']))
  header('location: home page.php');
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign Up</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="1.css">
</head>
<body>

<?php  
  if (isset($_SESSION['email']))
  {include 'navbar-after-login.php';}
  else{
    include 'navbar-before-login.php';
  }
?>

<table>
<tr>
<td ><img src="shopp.jpg" width="700px" height="450px" style="margin-left:48px;"></td>
<td><div class="container">
  <div class="login" >
    <h1>Sign Up</h1>
    <form method="POST" action="signup_script.php">
      <p><input type="text" name="name" value="" placeholder="Name" required="true"></p>
      <p><input type="text" name="email" value="" placeholder="Email" required="true"></p><?php echo $_GET['m1'];?>
      <p><input type="password" name="password" value="" placeholder="Password" required="true"></p>
      <p><input type="text" name="contact" value="" placeholder="Contact" required="true"></p><?php echo $_GET['m2'];?>
      <p><input type="text" name="city" value="" placeholder="City" required="true"></p>
      <p><input type="text" name="address" value="" placeholder="Address" required="true"></p>
      <p class="submit"><input type="submit" name="submit" value="Submit"></p>
    </form>
  </div>
</div></td>
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