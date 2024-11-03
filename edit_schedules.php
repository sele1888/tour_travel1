<?php include('date.php'); ?>
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
   $id_get=$_GET['schedule_id'];
		$result=mysql_query("select * from schedule where schedule_id='$id_get'")or die(mysql_error());
		$row=mysql_fetch_array($result);
			{
               $name=$row['fullname'];
			$city=$row['city'];
			$address=$row['address'];
			$email=$row['email'];
			$contact=$row['contact'];
			$tourist_site=$row['touristsite'];
			$othersite=$row['othersite'];
			$hotelname=$row['hotelname'];
        	$roomno=$row['roomno'];
			$carLevel=$row['carLevel'];
		   $carSideNumber=$row['carSideNumber'];
		   $year=$row['year'];
           $month=$row['month'];
          $day=$row['day'];
}
?>

<form id="save_voter" class="form-horizontal" method="POST" action="update_schedules.php">	
    <fieldset>
	</br>
	<div class="add_subject">
	<ul class="thumbnails_new_voter">
    <li class="span3">
    <div class="thumbnail_new_voter">
    <?php 
	$result=mysql_query("select * from schedule where schedule_id='$id_get'")or die(mysql_error());
	$row=mysql_fetch_array($result);
	
	?>
	<input type="hidden" name="id_get" class="id_get" value="<?php echo $id_get;?>">
	
	<div class="control-group">
    <label class="control-label" for="input01">Full Name:</label>
    <div class="controls">

    <input type="text" name="fullname" class="fullname" value="<?php echo $row['fullname']; ?>" id="span900">
    </div>
    </div>
	
<div class="control-group">
    <label class="control-label" for="input01">city:</label>
    <div class="controls">

    <input type="text" name="city" class="city" value="<?php echo $row['city']; ?>" id="span900">
    </div>
    </div>

	<div class="control-group">
    <label class="control-label" for="input01">Address:</label>
    <div class="controls">

    <input type="text" name="address" class="address" value="<?php echo $row['address']; ?>" id="span900">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Email:</label>
    <div class="controls">

    <input type="text" name="email" class="email" value="<?php echo $row['email']; ?>" id="span900">
    </div>
    </div>
	<div class="control-group">
    <label class="control-label" for="input01">Contact:</label>
    <div class="controls">

    <input type="text" name="contact" class="contact" value="<?php echo $row['contact']; ?>" id="span900">
    </div></div>
<div class="control-group">
    <label class="control-label" for="input01">Tourist site:</label>
    <div class="controls">
   <select name="touristsite" class="span333" id="touristsite">
	<option>--Select--</option>

							option value="Tis Abay">Tis Abay</option>
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
                                                        
						</select>
    </div>    </div>
 <div class="control-group">
    <label class="control-label" for="input01">other site:</label>
    <div class="controls">
   <select name="othersite" class="span333" id="othersite">
	<option>--Select--</option>

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
                                                        
						</select>	</div> </div>
		
		<div class="control-group">
	<label class="control-label" for="input01">Tourist Reserv Hotel:</label>

    <div class="controls"> <select name="hotelname" required x-moz-errormessage="Please select hotel.">
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
						</select> </div> </div>
							<div class="control-group">
    <label class="control-label" for="input01">Tourist Resrve Hotel room :</label>
    <div class="controls">
    <input type="text" name="roomno"class="roomno" value="<?php echo $row['roomno']; ?>" id="span900"> </div></div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Update Resrve car level :</label>
    <div class="controls">
    <input type="text" name="carLevel" class="carLevel" value=" <?php echo $row['carLevel']; ?>" id="span900"> </div></div>
	<div class="control-group">
    <label class="control-label" for="input01">Update Resrve car side :</label>
    <div class="controls">
    <input type="text" name="carSideNumber" class="carSideNumber" value=" <?php echo $row['carSideNumber']; ?>" id="span900"> </div></div>
	
		
	<div class="control-group">
	 <label class="control-label" for="input01">Visiting Date:</label>
    <div class="controls"><input type="text"  name="year" onclick="ds_sh(this);" placeholder="end of time" autocomplete="off">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Visiting Day:</label>
    <div class="controls"><input type="text"  name="day" class="day" value=" <?php echo $row['day']; ?>" id="span900"> <br />
    </div>
    </div>

	<div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Edit</button>
    </div>
    </div>
	
	
    </fieldset>
    </form>
