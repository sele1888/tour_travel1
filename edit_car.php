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
	include('connect.php');
	$id=$_GET['id'];
	$result = mysql_query("SELECT * FROM cars where id='$id'");
		while($row = mysql_fetch_array($result))
			{
			    $carBaordnumber=$row['carBaordnumber'];
			    $carSideNumber=$row['carSideNumber']; 
				$carLevel=$row['carLevel'];
				$carCurrentCity=$row['carCurrentCity'];
				$price=$row['rate'];
			}
?>
<form action="update_car.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id']?>" >
	
car Baord number:<br><input type="text" name="carBaordnumber" value="<?php echo $carBaordnumber ?>" class="ed"><br>
 
car Side Number:<br><input type="text" name="carSideNumber" value="<?php echo $carSideNumber ?>" class="ed"><br>

car Level:<br><input type="text" name="carLevel" value="<?php echo $carLevel ?>" class="ed"><br>

car Current City:<br><textarea name="carCurrentCity" class="ed"><?php echo $carCurrentCity ?></textarea><br>

Rate:<br><input type="text" name="rate" value="<?php echo $price ?>" class="ed"><br>
	<input type="submit" value="Edit" id="button1">
</form>