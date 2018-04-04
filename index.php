<?php 
  session_start();
  if (isset($_SESSION['email']))
  header('location: home page.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="3.css">

</head>
<body>
<div class="jumbotron jumbotron-fluid"  style="background-color: #0ca3d2; text-align: center; padding-top: 50px;">
  <div class="container">
    <h1 class="display-3">Online Store</h1>
    <p class="lead">Gives you everything is in your hand.</p>
  </div>
</div>
<?php 
  include 'navbar-before-login.php';
?>

<div class="contain" id="container" style="width:100%;" >    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Shopping Bags 1</div>
        <div class="panel-body"><img src="shop.jpg" class="img-responsive" style="width:100%; height:200px; " alt="Image"></div>
        <div class="panel-footer">
        <button style="width:100%;"><span>Order</span></button>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Shopping Bags 2</div>
        <div class="panel-body"><img src="shopp.jpg" class="img-responsive" style="width:100%;height:200px;" alt="Image"></div>
        <div class="panel-footer">
        <button style="width:100%; "><span>Order</span></button></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Shopping Bags 3</div>
        <div class="panel-body"><img src="shop.jpg" class="img-responsive" style="width:100%;height:200px;" alt="Image"></div>
        <div class="panel-footer">
        <button style="width:100%;"><span>Order</span></button></div>
      </div>
    </div>
  </div>
</div><br>

<div class="contain" style="width:100%;">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-info">
        <div class="panel-heading">Shopping Bags 4</div>
        <div class="panel-body"><img src="shopp.jpg" class="img-responsive" style="width:100%;height:200px;" alt="Image"></div>
        <div class="panel-footer">
        <button style="width:100%;"><span>Order</span></button></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Shopping Bags 5</div>
        <div class="panel-body"><img src="shop.jpg" class="img-responsive" style="width:100%;height:200px;" alt="Image"></div>
        <div class="panel-footer">
        <button style="width:100%;"><span>Order</span></button></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Shopping Bags 6</div>
        <div class="panel-body"><img src="shopp.jpg" class="img-responsive" style="width:100%;height:200px;" alt="Image"></div>
        <div class="panel-footer">
        <button style="width:100%;"><span> Order</span></button></div>
      </div>
    </div>
  </div>
</div><br><br>
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
    <td><a href="#myModal" style="color:#FFFFFF;"> Login</a></td>
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
