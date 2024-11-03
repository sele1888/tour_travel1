<?php
	include('connect.php');
	$id = $_POST['id'];
	$category=$_POST['category'];
	mysql_query("UPDATE orders SET category='$category' WHERE id='$id'");
	header("location: admin.php");
?>