<?php
	include('connect.php');
	         $hotelid = $_POST['hotelid'];
			    $hotelname=$_POST['hotelname'];
				$roomno=$_POST['roomno'];
				$category=$_POST['category'];
				$price=$_POST['price'];
				$status=$_POST['status'];
				$start=$_POST['start'];
				$end=$_POST['end'];				
mysql_query("UPDATE hotel SET hotelname='$hotelname', roomno='$roomno', category='$category', price='$price', status='$status', start='$start', end='$end' WHERE id='$hotelid'");
	header("location: hotel.php");
?>