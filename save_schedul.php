<?php
	include('connect.php');
	$id = $_POST['id'];
	$permission=$_POST['permission'];
	mysql_query("UPDATE orders SET permission='$permission' WHERE id='$id'");
	header("location: tschedule.php");
?>