<?php
include('connect.php');





	if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"img/products/" . $_FILES["image"]["name"]);
			
			$location=$_FILES["image"]["name"];
			      $user=$_POST['username'];
			     $hotelname=$_POST['hotelname'];
				$roomno=$_POST['roomno'];
				$totalroom=$_POST['totalroom'];
				$category=$_POST['category'];
				$price=$_POST['price'];
				$status=$_POST['status'];
				$start=$_POST['start'];
				$end=$_POST['end'];			
			
		$update=mysql_query("INSERT INTO hotel (username, hotelname, roomno, totalroom, category, price , status , start, end, img)
VALUES ('$user','$hotelname','$roomno','$totalroom','$category','$price','$status','$start','$end','$location')");

header("location: hotel.php");
			exit();
		
			}
	}


?>