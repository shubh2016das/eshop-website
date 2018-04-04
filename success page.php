<?php
  error_reporting(0);
  session_start();
  if (!isset($_SESSION['email']))
  header('location: index.php');
?>
<?php
$id= $_POST['ID'];
$to = $_SESSION['email'];
$subject = "Test mail";
$message = "Your order has been confirmed. Your items will be delivered soon !";
mail($to, $subject, $message, "");
// Mail to the item owner
$to = $_SESSION['email'];
$to_owner = "sd.shubh2011@gmail.com";
$subject_owner = "New Order";
$message_owner = "New Order made by ".$to.".<br> The items Id are ";
$message_owner = $message_owner.$_POST['ID'];
mail($to_owner, $subject_owner, $message_owner, "");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Success Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="1.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="Clogo.gif" width="30" height="27"> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a  href="http://localhost/WebDevelopmentPractice/Finalpage/Home%20Page.php">E-Shop</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a  href="http://localhost/WebDevelopmentPractice/Finalpage/Cart%20page.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
        <li><a  href="http://localhost/WebDevelopmentPractice/Finalpage/settings%20Page.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
        <li><a href="http://localhost/WebDevelopmentPractice/Finalpage/index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div style="color:rgb(50,50,50); text-align:center; margin-top:100px">
  <p>Thank You for ordering from E-Shop. The order shall be delivered to you shortly.</p>
  <br><br>
  <p>Order some more items <a href="#" style="color:rgb(20,0,255);">here</a></p><br><br><br>
  <img src="thank.gif" width="400px" height="180px">
</div>
</body>
</html>