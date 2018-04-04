<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['email'])){
  header('location: index.php');
}
require("connect.inc.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart Page</title>
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
<div style="color:white; margin-top:100px;">
  <table style="text-align:left; padding:15px; " width="500px" height="10px" align="center">
    <thead style="border-bottom: 2px groove white;">
      <td>Item Number</td>
      <td> Price</td>
    </thead>
    <tbody>
              <?php 
              $sum=0;
              $query = "SELECT ID, Price FROM items WHERE cart=1";
              $result=mysqli_query($con, $query);
              while($row = mysqli_fetch_array($result)){
                $sum+= $row["price"];
                $id .= $row["ID"].", ";
                echo "<tr><td>"."#".$row["ID"]."</td><td>".$row["price"]."</td><td><a href='remove.php?id={$row['ID']}' style='color:#0000ff;'> Remove</a></td></tr>";
              }
              echo "<tr><td>Total</td><td>".$sum."</td><td><a href='success page.php?itemsid=".$id."' class='btn btn-primary'> Confirm</a></td></tr>";
          ?>
    </tbody>
  </table>
</div>
</body>
</html>