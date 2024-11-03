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
	$result = mysql_query("SELECT * FROM hotel where id='$id'");
		while($row = mysql_fetch_array($result))
			{
				$hotelname=$row['hotelname'];
				$roomno=$row['roomno'];
				$category=$row['category'];
				$price=$row['price'];
				$status=$row['status'];
				$start=$row['start'];
				$end=$row['end'];
				}
?>
<form action="update_hotel.php" method="post">
<input type="hidden" name="hotelid" value="<?php echo $id=$_GET['id'] ?>">
hotelname:<br>
<select name="hotelname" class="ed">
							<option value="">.......</option>
							<option value="Roha Hotel">Roha Hotel</option>
							<option value="Lale Hotel">Lale Hotel </option>
                                                        <option value="Yimiriha Hotle">Yimiriha Hotle </option>
                                                        <option value="Sevene Olibes">Sevene Olibes </option>
                                                        <option value="Bluelale Hotel">Bluelale Hotel </option>
                                                        <option value="Helen  Hotel">Helen  Hotel</option>
							<option value="Aman  Hotel">Aman  Hotel </option>
                                                        <option value="Sevat Wayra  Hotel">Sevat Wayra  Hotel </option>
                                                        <option value="Sevene Olibes">Sevene Olibes </option>
                                                        <option value="Bete Abriham  Hotel">Bete Abriham  Hotel </option>
                                                       

                                                         <option value="Tana Hotel">Tana Hotel</option>
							<option value="Ghion">Ghion </option>
                                                        <option value="Kuriftu Resort&Sposek Tana Lodge">Kuriftu Resort&Sposek Tana Lodge </option>
                                                        <option value="Abay minchi Lodge">Abay minchi Lodge </option>
                                                        <option value="Dib Anbesal">Dib Anbesal </option>
                                                        <option value="Papyrus">Papyrus</option>
							<option value="Ethio star">Ethio star </option>
                                                        <option value="SemerLand  Hotel">SemerLand  Hotel </option>
                                                        <option value="Blue Nile">Blue Nile </option>
                                                        <option value="Fikireselam">Fikireselam </option>
                                                        
                                                         <option value="Goha Hotel">Goha Hotel</option>
							<option value="Quara">Quara  </option>
                                                        <option value="Land mark International">Land mark International </option>
                                                        <option value="Walia Kapra">Walia Kapra </option>
                                                        <option value="Fogera">Fogera  </option>
                                                        <option value="Semien Park">Semien Park</option>
							<option value="Universal Guest house">Universal Guest house </option>
                                                        <option value="MetGogo">MetGogo </option>
                                                        <option value="Kwin Hotel">Kwin Hotel </option>
                                                        <option value="Ambaras">Ambaras </option>
                                                          <option value="Qualeber">Qualeber</option>
                                                          <option value="Lalibela">Lalibela </option>
                                                          <option value="Goldn get ">Goldn get  </option>
                                                          <option value="Time">Time</option>
                                                          <option value="Milburn">Milburn </option>
                                                        
						</select><br>
Room No:<br><input type="text" name="roomno" value="<?php echo $roomno ?>" class="ed"><br>

Category:<br><select name="category" class="ed" >
							<option value="">...</option>
							<option value="single">Single</option>
							<option value="double">Double</option>
						</select><br>

Price:<br><input type="text" name="price" value="<?php echo $price ?>" class="ed"><br>
 
Status:<br><select name="status" class="ed" >
							<option value="">...</option>
							<option value="available">Available</option>
							<option value="reserved">Reserved</option>
						</select> <br>

start:<br><input type="text" name="start" value="<?php echo $start ?>" class="ed"><br>
 
end:<br><input type="text" name="end" value="<?php echo $end ?>" class="ed"><br>

	<input type="submit" value="Edit" id="button1">
</form>