<?php
	session_start();
	require_once("connect.inc.php");
	if(isset($_GET['add'])){
		$id=$_GET['id'];
		echo $id;
		$value= 1;
		$query = "UPDATE items SET cart='{$value}' WHERE ID=".$id;
		echo $query;
		if(mysqli_query($con, $query)){
			header("location:home page.php");
		}
	}
 ?>