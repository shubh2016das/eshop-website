<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://localhost/WebDevelopmentPractice/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="1.css">
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
  <table align="center" style="color:rgb(50,50,50); margin-top:100px; margin-left:3%; margin-right:3%;" width="95%" >
    <tr style="text-align:center;">
      <td ><p > <h2>WHO WE ARE</h2></p></td>
      <td><h2>OUR HISTORY</h2></td>
      <td><h2>OPPORTUNITIES</h2></td>
    </tr>
    <tr style=" text-align:justify;" >
      <td  width="300px">
        <img src="original.jpg" width="300px" height="200px" style="margin-bottom:10px; "><br>
        <p >
          E-Shop is an Indian electronic commerce company with headquarters in Delhi. It is the largest Internet-based retailer in the World. E- Shop started as an online blog, but soon diversified, selling mobile phones. E- Shop also sells certain low-end products like USB cables and other accessories. E- Shop has separate retail websites for India, United Kingdom & Ireland, France, Canada, Germany, Italy, Spain, the Netherlands, Australia, Brazil, Japan, China, United States and Mexico. Amazon also offers international shipping to certain other countries for some of its products.
        </p>
      </td>
      <td width="300px" >
        <p style="margin-left:20px;margin-right:20px; padding-top:34px;">
          1998-<br>
          The company was founded in 1998, spurred by what Velos called his "Initiating framework", which described his efforts as an initiate to participate in the Internet business boom during that time. In 1998, Velos left his employment as president of Ofcol & Co. and moved to Bengalore. He began to work on a business plan for what would eventually become E- Shop.<br><br>
          2002-<br>
          In January 2002, E- Shop has received a funding of $12 million from Venture Partners and Indo-US Venture Partners.<br><br>
          2008-<br>
          In July 2008, the company raised a further $45 million from Bessemer Venture Partners, along with existing investors Venture Partners and Indo-US Venture Partners.<br><br>
          2015-<br>
          E- Shop received its 3rd round of funding of $133 million on Feb-2015. The 3rd round of funding was led by Fcom with all the current institutional investors, including Kalaari Capital, Venture Partners, Bessemer Venture Partners all participating.
        </p>
      </td>
      <td  style=" padding-bottom:380px;" width="300px">
        <ol type="1" >Available Roles

        <li>Jr./Sr. Web Developer [Full Time Role + also available as a 6 Months Internship]</li>

        <li>Business Apprentice [6 Months Internship]</li>

        <li>Manager at backend operations [Full Time Role + also available as a 6 Months Internship]</li>
        <hr>
        </ol>
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