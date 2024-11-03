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
			$carBaordnumber=$_POST['carBaordnumber'];
			$carSideNumber=$_POST['carSideNumber'];
			$carLevel=$_POST['carLevel'];
			$carCurrentCity=$_POST['carCurrentCity'];
			$rate=$_POST['rate'];			
			
			$update=mysql_query("INSERT INTO cars (username, carBaordnumber, carSideNumber, carLevel,carCurrentCity,rate,img)
VALUES
('$user','$carBaordnumber','$carSideNumber','$carLevel','$carCurrentCity','$rate','$location')");
header("location: car.php");
			exit();
		
			}
	}
?>
