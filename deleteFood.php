<?php
	session_start();
	include("connection.php");
	$id=$_GET['id'];
	$query="delete from food where foodID=$id";

	$run=mysqli_query($link,$query);

	$msg="Food Deleted";
	header("location:ownMenu.php?msg=$msg");

?>