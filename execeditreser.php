<?php
	include('connect.php');
	$roomid = $_POST['roomid'];
$first=$_POST['firstname'];
$last=$_POST['lastname'];
$city=$_POST['city'];
$address=$_POST['address'];
$country=$_POST['country'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$hotel=$_POST['hotelname'];
$room=$_POST['roomno'];
$car=$_POST['carcurrentcity'];
$total=$_POST['totalpeyment'];
$start=$_POST['startdate'];
$end=$_POST['enddate'];
	mysql_query("UPDATE reserv SET firstname='$first', lastname='$last', city='$city', address='$address', country='$country', email='$email', contact='$contact',hotelname='$hotel', roomno='$room', carcurrentcity='$car', totalpeyment='$total',startdate='$start', enddate='$end' WHERE id='$roomid'");
	header("location: tou.php");
?>