<?php 
	session_start();
	if (!isset($_SESSION['email']))
	header('location: index.php');
	require_once("connect.inc.php");
	
	$old_pass = $_POST['old-password'];
	$old_pass = mysqli_real_escape_string($con, $old_pass);
	$old_pass = strip_tags($old_pass);
	$old_pass = MD5($old_pass);

	$new_pass = $_POST['password'];
	$new_pass = mysqli_real_escape_string($con, $new_pass);
	$new_pass = strip_tags($new_pass);
	$new_pass = MD5($new_pass);

	$new_pass1 = $_POST['password1'];
	$new_pass1 = mysqli_real_escape_string($con, $new_pass1);
	$new_pass1 = strip_tags($new_pass1);
	$new_pass1 = MD5($new_pass1);

	$query = "SELECT email, password FROM persons
	WHERE email ='".$_SESSION['email']."'";
	$result = mysqli_query($con, $query);
	$row = mysqli_fetch_array($result);
	$orig_pass = $row['password'];
	if ($new_pass != $new_pass1)
		{
		header('location: settings page.php?error=The two passwords don\'t match');
		}
	else
		{
		if ($old_pass == $orig_pass)
			{
			$query = "UPDATE  persons SET password = '".$new_pass."' WHERE Email = '".$_SESSION['email']."'";
			mysqli_query($con, $query);
			header('location: settings page.php?error="Password Updated"');
			}
		else
			header('location: settings page.php?error="Wrong Password"');
		}
?>