<?php
include('/connect.php');





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

            $name=$_POST['pname'];
			$year=$_POST['year'];
			$touristsite=$_POST['touristsite'];
			$note=$_POST['note'];
			$permission=$_POST['permission'];
			$firstname=$_POST['firstname'];
			$email=$_POST['email'];
		     $hotelname=$_POST['hotelname'];
        		$roomno=$_POST['roomno'];
		    $category=$_POST['category'];
		   $price=$_POST['price'];
		   $carLevel=$_POST['carLevel'];
		   $carSideNumber=$_POST['carSideNumber'];
		   $rate=$_POST['rate'];	
		   
$update=mysql_query("INSERT INTO orders (name, year, touristsite, confirmation, total, design, note,permission, firstname, email, hotelname, roomno, category, price, carLevel, carSideNumber, rate) VALUES('$name', '$year','$touristsite', '$transnum', '$total', '$location', '$note','$permission','$firstname','$email','$hotelname','$roomno','$category','$price','$carLevel','$carSideNumber','$rate')");

header("location: tou.php");
			exit();
		
			}
	}
