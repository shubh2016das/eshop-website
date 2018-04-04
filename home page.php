<?php 
  session_start();
  if (!isset($_SESSION['email']))
  header('location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="1.css">
  <style>
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
      height:80%; 
    }
    .col-sm-6 {
      width: 300px;
      height: 300px;
    }
    button {
  display: inline-block;
  border-radius: 4px;
  background-color: #0ca3d2;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 24px;
  padding: 20px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

button:hover span {
  padding-right: 25px;
}

button:hover span:after {
  opacity: 1;
  right: 0;
}
  </style>
</head>
<body>
<?php
  include 'navbar-after-login.php';
?>

<div class="container" style="width:100%;" >    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Shopping Bags 1</div>
        <div class="panel-body"><img src="shop.jpg" class="img-responsive" style="width:100%; height:200px; " alt="Image"></div>
        <div class="panel-footer">
        <button style="width:100%;">
        <a href="cart-script.php?id=1 & add=add" name="add" value="add"><span style = "color: white;">Add to Cart
                <?php 
                require_once("add-or-added.php");
                echo message(1);
                ?></span></a></button>
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Shopping Bags 2</div>
        <div class="panel-body"><img src="shopp.jpg" class="img-responsive" style="width:100%;height:200px;" alt="Image"></div>
        <div class="panel-footer">
        <button style="width:100%; "><a href="cart-script.php?id=2 & add=add" name="add" value="add"><span style = "color: white;">Add to Cart
                <?php 
                require_once("add-or-added.php");
                echo message(2);
                ?></span></a></button></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">Shopping Bags 3</div>
        <div class="panel-body"><img src="shop.jpg" class="img-responsive" style="width:100%;height:200px;" alt="Image"></div>
        <div class="panel-footer">
        <button style="width:100%;"><a href="cart-script.php?id=3 & add=add" name="add" value="add"><span style = "color: white;">Add to Cart
                <?php 
                require_once("add-or-added.php");
                echo message(3);
                ?></span></a></button></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container" style="width:100%;">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-info">
        <div class="panel-heading">Shopping Bags 4</div>
        <div class="panel-body"><img src="shopp.jpg" class="img-responsive" style="width:100%;height:200px;" alt="Image"></div>
        <div class="panel-footer">
        <button style="width:100%;"><a href="cart-script.php?id=4 & add=add" name="add" value="add"><span style = "color: white;">Add to Cart
                <?php 
                require_once("add-or-added.php");
                echo message(4);
                ?></span></a></button></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">Shopping Bags 5</div>
        <div class="panel-body"><img src="shop.jpg" class="img-responsive" style="width:100%;height:200px;" alt="Image"></div>
        <div class="panel-footer">
        <button style="width:100%;"><a href="cart-script.php?id=5 & add=add" name="add" value="add"><span style = "color: white;">Add to Cart
                <?php 
                require_once("add-or-added.php");
                echo message(5);
                ?></span></a></button></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">Shopping Bags 6</div>
        <div class="panel-body"><img src="shopp.jpg" class="img-responsive" style="width:100%;height:200px;" alt="Image"></div>
        <div class="panel-footer">
        <button style="width:100%;"><a href="cart-script.php?id=6 & add=add" name="add" value="add"><span style = "color: white;">Add to Cart
                <?php 
                require_once("add-or-added.php");
                echo message(6);
                ?></span></a></button></div>
      </div>
    </div>
  </div>
</div><br><br>

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
    <td><a href="Contact%20us.php" style="color:#FFFFFF;"> Contact us</a></td>
    <td><a href="Signup.php" style="color:#FFFFFF;"> Signup</a></td>
  </tr>
 </table>  
</footer>

</body>
</html>
