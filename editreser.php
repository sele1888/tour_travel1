<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	include('../home/connect.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM reserv where id='$id'");
		while($row = mysql_fetch_array($result))
			{
$first=$row['firstname'];
$last=$row['lastname'];
$city=$row['city'];
$address=$row['address'];
$country=$row['country'];
$email=$row['email'];
$contact=$row['contact'];
$hotel=$row['hotelname'];
$room=$row['roomno'];
$car=$row['carcurrentcity'];
$total=$row['totalpeyment'];
$start=$row['startdate'];
$end=$row['enddate'];
			}
?>
<form action="../tourist/execeditreser.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
First name:<br><input type="text" name="firstname" value="<?php echo $first ?>" class="ed"><br>
Last Name:<input type="text" name="lastname"  value="<?php echo $last ?>" class="ed"><br>
City:<input type="text" name="city" value="<?php echo $city ?>" class="ed"><br>
Address:<input type="text" name="address"  value="<?php echo $address ?>" class="ed"><br>

Email:<input type="text" name="email"  value="<?php echo $email ?>" class="ed"><br>
Contact No.:
<input type="text" name="contact"  value="<?php echo $contact ?>" class="ed"><br>
Hotel Name:<input type="text" name="hotelname" value="<?php echo $hotal ?>" class="ed"><br>
Room Number:<input type="text" name="roomno"  value="<?php echo $room ?>" class="ed"><br>

Car Current City:<input type="text" name="carcurrentcity"  value="<?php echo $car ?>" class="ed"><br>
Total Peyment:<input type="text" name="totalpeyment"  value="<?php echo $total ?>" class="ed"><br>
Start Date:<input type="text" name="startdate"  value="<?php echo $start ?>" class="ed"><br>
End Date:<input type="text" name="enddate"  value="<?php echo $end ?>" class="ed"><br>
	<input type="submit" value="Edit" id="button1">
</form>