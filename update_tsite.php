<?php
	include('connect.php');
	$roomid = $_POST['roomid'];
	$type=$_POST['type'];
	$rate=$_POST['rate'];
	$description=$_POST['description'];
	mysql_query("UPDATE tourist_site SET name='$type', price='$rate', description='$description' WHERE id='$roomid'");
	header("location: tsite.php");
?>