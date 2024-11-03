<?php 
include('dbcon.php');

$id_get=$_POST['id_get'];
      $first=$_POST['fullname'];
			$city=$_POST['city'];
			$address=$_POST['address'];
			$email=$_POST['email'];
			$contact=$_POST['contact'];
			$touristsite=$_POST['touristsite'];
			$othersite=$_POST['othersite'];
			$hotelname=$_POST['hotelname'];
        	$roomno=$_POST['roomno'];
			$carLevel=$_POST['carLevel'];
		   $carSideNumber=$_POST['carSideNumber'];
		   $year=$_POST['year'];
              $day=$_POST['day'];

$query=mysql_query("select * from schedule where fullname='$first' and city='$city' and address='$address' and  email='$email'and  contact='$contact'and  touristsite='$touristsite'and othersite='$othersite' and  hotelname='$hotelname' and roomno='$roomno' and  carLevel='$carLevel' and carSideNumber='$carSideNumber' and  year='$year' and day='$day'") or die(mysql_error());
$count=mysql_num_rows($query);

if ($count==1){
?>
<script type="text/javascript">
alert('You Didnt Make any Change to the schedule!');
window.location="oschedule.php";
</script>
<?php 
}


else{

mysql_query("select * from schedule where fullname='$first' and city='$city' and address='$address' and  email='$email'and  contact='$contact'and  touristsite='$touristsite'and othersite='$othersite' and  hotelname='$hotelname' and roomno='$roomno' and  carLevel='$carLevel' and carSideNumber='$carSideNumber' and  year='$year' and day='$day' where schedule_id='$id_get'")or die(mysql_error());


$logout_query=mysql_query("select * from users where user_id=$id_session");
$row=mysql_fetch_array($logout_query);
$type=$row['user_type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Update Schedule','$time_start &nbsp;&nbsp; &nbsp;  $time_end','$type')") or die(mysql_error());
header('location:oschedule.php');
}

?>