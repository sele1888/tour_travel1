<?php
	include('connect.php');
	           $roomid= $_POST['roomid'];
	          $carBaordnumber=$_POST['carBaordnumber'];
			$carSideNumber=$_POST['carSideNumber'];
			$carLevel=$_POST['carLevel'];
			$carCurrentCity=$_POST['carCurrentCity'];
			$price=$_POST['rate'];
mysql_query("UPDATE cars SET carBaordnumber='$carBaordnumber',  carSideNumber='$carSideNumber', carLevel='$carLevel',  carCurrentCity='$carCurrentCity', rate='$price' WHERE id='$roomid'");
	header("location: car.php");
?>