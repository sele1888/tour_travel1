<?php
	include('../home/connect.php');
	$roomid = $_POST['roomid'];
	$type=$_POST['name'];
	$rate = $_POST['email'];	
	$subject = $_POST['subject'];
	$description=$_POST['message'];
	mysql_query("UPDATE message SET name='$type', email='$rate', subject='$subject', description='$description' WHERE id='$roomid'");
	header("location: message.php");
?>