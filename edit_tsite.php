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
	$result = mysql_query("SELECT * FROM tourist_site where id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$type=$row['name'];
				$rate=$row['price'];
				$description=$row['description'];
			}
?>
<form action="update_tsite.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
Place Name<br />
 <select name="type" class="ed" >
							<option value="">.......</option>
							<option value="Tis Abay">Tis Abay</option>
							<option value="Simien Mountains National Park ">Simien Mountains National Park</option>
							<option value="Awra Amba community work culture">Awra Amba community work culture</option>
							<option value="A Priest holding ''Afro Ayigeba'' cross, at Bete ">A Priest holding ''Afro Ayigeba'' cross, at Bete </option>
							 <option value="Blue Nile Falls">Blue Nile Falls </option>
							<option value="Gonder Fasiladas">Gonder Fasiladas</option>
							<option value="Bete Giorgis /House of St. George/">Bete Giorgis /House of St. George/ </option>
                                                        <option value="Simien National park wild life">Simien National park wild life </option>
                                                        <option value="The Zegie Peninsula">The Zegie Peninsula </option>
                                                        <option value="Bahrdar">Bahrdar city </option>
                                                          <option value="Shadey Festival Shadey">Shadey Festival Shadey </option>
                                                        
						</select></td></tr><br> 
Rate:<br><input type="text" name="rate" value="<?php echo $rate ?>" class="ed"><br>
	Description:<br><textarea name="description" class="ed"><?php echo $description ?></textarea><br>
	<input type="submit" value="Edit" id="button1">
</form>