<meta http-equiv="refresh" content="1; url=index.php">
<?php
include('connect.php');

	
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);

	
		
			move_uploaded_file($_FILES["image"]["tmp_name"],"design/" . $_FILES["image"]["name"]);
			
			$location="design/".$_FILES["image"]["name"];
			$transnum=$_POST['transnum'];
            $name=$_POST['pname'];
			$touristsite=$_POST['select2'];
			$note=$_POST['note'];
			$firstname=$_POST['firstname'];
			$email=$_POST['email'];
		      $hotelname=$_POST['hotelname'];
        		$roomno=$_POST['roomno'];
		    $category=$_POST['category'];
		   $price=$_POST['price'];
		   $carLevel=$_POST['carLevel'];
		   $carSideNumber=$_POST['carSideNumber'];
		   $rate=$_POST['rate'];
		   $year=$_POST['year'];	
		   $user=$_POST['username'];
			$total=$_POST['txtDisplay'];
			mysql_query("INSERT INTO orders (name, touristsite, confirmation, total, design, note, firstname, email, hotelname, roomno, category, price, carLevel, carSideNumber, rate, year, username) VALUES('$name', '$touristsite', '$transnum', '$total', '$location', '$note','$firstname','$email','$hotelname','$roomno','$category','$price','$carLevel','$carSideNumber','$rate','$year','$user')");
			


?>
