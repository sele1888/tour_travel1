<?php
	include('connect.php');
	$id = $_POST['id'];
	$year=$_POST['year'];
	$touristsite=$_POST['touristsite'];
$permission=$_POST['permission'];
	mysql_query("UPDATE orders SET year='$year', touristsite='$touristsite',permission='$permission' WHERE id='$id'");
	header("location: tschedule.php");
?>