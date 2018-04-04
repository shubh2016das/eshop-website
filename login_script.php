<?php
	require_once("connect.inc.php");
	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$email = mysqli_real_escape_string($con,$email);
		$email = strip_tags($email);

		$password = $_POST['password'];
		$password = mysqli_real_escape_string($con,$password);
		$password = strip_tags($password);
		$password = MD5($password);

		$query = "SELECT `email, password` FROM `persons` WHERE `email`='$email' and `password`='$password'";
		$result = mysqli_query($con,$query);
		$num = mysqli_num_rows($result);
		if ($num == 0) // that is if no records found in database
			header('location: error.php');
		else{
			$row = mysqli_fetch_array($result);
			session_start();
			$_SESSION['email']=$row['email'];
			header('location: home page.php');	
		}
	}
?>