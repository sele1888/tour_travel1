<?php include('date.php'); ?>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["form1"]["fullname"].value;
if (a==null || a=="")
  {
  alert("Enter Full name");
  return false;
  }
   var e=document.forms["form1"]["email"].value;
if (e==null || e=="")
  {
  alert("Enter Email Address");
  return false;
  }
      var h=document.forms["form1"]["hotelname"].value;
if (h==null || h=="")
  {
  alert("Enter hotel name");
  return false;
  }
    var i=document.forms["form1"]["roomno"].value;
if (i==null || i=="")
  {
  alert("Enter room number");
  return false;
  }
  var c=document.forms["form1"]["category"].value;
if (c==null || c=="")
  {
  alert("Enter your category");
  return false;
  }
   var d=document.forms["form1"]["price"].value;
if (d==null || d=="")
  {
  alert("Enter hotel price");
  return false;
  }   
  var g=document.forms["form1"]["carlevel"].value;
if (g==null || g=="")
  {
  alert("Enter want car level");
  return false;
  }

  var b=document.forms["form1"]["carSideNumber"].value;
if (b==null || b=="")
  {
  alert("Enter car  side number");
  return false;
  }
  var b=document.forms["form1"]["rate"].value;
if (b==null || b=="")
  {
  alert("Enter want car level total peyment");
  return false;
  }
   var b=document.forms["form1"]["note"].value;
if (b==null || b=="")
  {
  alert("Enter any suggetion or comment");
  return false;
  }
  var i=document.forms["form1"]["image"].value;
if (i==null || i=="")
  {
  alert("Pls. browse an image");
  return false;
  }
  
/*if (c.which!=8 && c.which!=0 && (c.which<48 || c.which>57))
  {
  alert("The input U enter in Quantity field is not valid, only numbers are accepted (ex. 1, 2, 3, 4.......)");
  return false;
  }
if (b.which!=8 && b.which!=0 && (b.which<48 || b.which>57))
  {
  alert("The input U enter in Quantity field is not valid, only numbers are accepted (ex. 1, 2, 3, 4.......)");
  return false;
  }*/
}
</script>

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
<!--sa input that accept number only-->
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>


<form action="save_reserv.php" method="post" enctype="multipart/form-data" name="form1" onsubmit="return validateForm()">


<fieldset>
<span style="color:#bb00ff; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">Tourist Reservation Need Thing</span>
	</br>
	<div class="control-group">
    <label class="control-label" for="input01">
Full name:</label>
    <div class="controls"><input type="text" name="firstname" class="firstname" id="span900" required="required">
    </div>
    </div>

	<div class="control-group">
    <label class="control-label" for="input01">Tourist email:</label>
    <div class="controls"><input type="text" name="email"  class="email" id="span900" required="required">
    </div>
    </div>
<div class="control-group">
    <label class="control-label" for="input01">Tourist Site:</label>
    <div class="controls"><select name="pname" required x-moz-errormessage="Please select Site.">
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
                                                        
						</select> </div>
    </div>
	<div class="control-group">
    <label class="control-label" for="input01">Visiting Date:</label>
    <div class="controls"><input type="text"  name="year" onclick="ds_sh(this);" placeholder="end of time" autocomplete="off">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Visiting Day:</label>
    <div class="controls"><input type="text"  name="touristsite" class="touristsite" id="span900" required="required">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Tourist Total:</label>
    <div class="controls"><input type="text" name="total" class="total" id="span900" required="required">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Hotel name::</label>
    <div class="controls">
	 <select name="hotelname" class="span333" id="hotelname">
	                                               <option>--Select--</option>
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
                                                        
						</select>
    </div>
    </div>

	
	<div class="control-group">
    <label class="control-label" for="input01">Room Number::</label>
<div class="controls">
<select name="Room Number" class="span3333" id="Room Number">
	<option>--Select--</option>
 <option value="Bete Abriham  Hotel">Bete Abriham  Hotel </option>
<option value="1-20">1</option>
<option value="1-30">2</option>
<option value="1-20">3</option>
<option value="1-30">4</option>
<option value="1-20">5</option>
<option value="1-30">6</option>
<option value="1-20">7</option>
<option value="1-30">8</option>
<option value="1-20">9</option>
<option value="1-30">10</option>
<option value="Roha Hotel">Roha Hotel</option>
<option value="1-20">711</option>
<option value="1-30">12</option>
<option value="1-20">013</option>
<option value="1-30">414</option>
<option value="1-20">115</option>
<option value="1-30">116</option>
<option value="1-20">317</option>
<option value="1-30">218</option>
<option value="Ambaras">Ambaras </option>
<option value="1-20">741</option>
<option value="1-30">012</option>
<option value="1-20">013</option>
<option value="1-30">414</option>
<option value="1-20">115</option>
<option value="1-30">116</option>
<option value="1-20">317</option>
<option value="1-30">218</option>
 <option value="Qualeber">Qualeber</option>
<option value="1-20">11</option>
<option value="1-30">12</option>
<option value="1-20">01</option>
<option value="1-30">414</option>
<option value="1-20">115</option>
<option value="1-30">116</option>
<option value="1-20">317</option>
<option value="1-30">218</option>
  <option value="Lalibela">Lalibela </option>
<option value="1-20">551</option>
<option value="1-30">12</option>
<option value="1-20">013</option>
<option value="1-30">414</option>
<option value="1-20">115</option>
<option value="1-30">116</option>
<option value="1-20">317</option>
<option value="1-30">218</option>
   <option value="Goldn get ">Goldn get  <option value="1-20">001</option>
<option value="1-30">102</option>
<option value="1-20">013</option>
<option value="1-30">414</option>
<option value="1-20">115</option>
<option value="1-30">116</option>
<option value="1-20">317</option>
<option value="1-30">208</option>
 <option value="Time">Time</option>
<option value="1-20">441</option>
<option value="1-30">12</option>
<option value="1-20">013</option>
<option value="1-30">414</option>
<option value="1-20">115</option>
<option value="1-30">116</option>
<option value="1-20">317</option>
<option value="1-30">218</option>
 <option value="Milburn">Milburn </option>
<option value="1-20">700</option>
<option value="1-30">12</option>
<option value="1-20">013</option>
<option value="1-30">414</option>
<option value="1-20">115</option>
<option value="1-30">116</option>
<option value="1-20">317</option>
<option value="1-30">218</option>
	</select>
    </div>
    </div>

	<div class="control-group">
    <label class="control-label" for="input01">Category::</label>
    <div class="controls">
<select name="category" class="span3333" id="category">
	<option>--Select--</option>
<option value="single">Single</option>
<option value="double">Double</option>
	</select>
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Hotel Price:</label>
    <div class="controls">
<select name="category" class="span3333" id="category">
<option>--Select--</option>
<option value="Roha Hotel">Roha Hotel</option>
<option value="400">400</option>
 <option value="500">450</option>
<option value="400">500</option>
 <option value="500">600</option>
<option value="400">700</option>
 <option value="500">800</option>
<option value="500">1000</option>
<option value="Lale Hotel">Lale Hotel </option>
<option value="350">350</option>
 <option value="450">450</option>
<option value="400">500</option>
 <option value="">600</option>
<option value="400">700</option>
 <option value="500">800</option>
<option value="500">1000</option>
<option value="400">1500</option>
<option value="Yimiriha Hotle">Yimiriha HotleLale Hotel </option>
 <option value="350">250</option>
 <option value="450">350</option>
<option value="400">450</option>
 <option value="">600</option>
<option value="400">700</option>
 <option value="500">800</option>
<option value="500">1000</option>
<option value="400">1600</option>
 <option value="Sevene Olibes">Sevene Olibes </option><option value="350">200</option>
 <option value="450">350</option>
<option value="400">450</option>
 <option value="">600</option>
<option value="400">700</option>
<option value="Bete Abriham  Hotel">Bete Abriham  Hotel </option><option value="350">100</option>
 <option value="450">250</option>
<option value="400">350</option>
 <option value="">400</option>
<option value="400">500</option>

 <option value="Tana Hotel">Tana Hotel</option><option value="350">450</option>
 <option value="450">550</option>
<option value="400">650</option>
 <option value="">600</option>
<option value="400">700</option>
  <option value="Dib Anbesal">Dib Anbesal</option>
<option value="350">350</option>
 <option value="450">550</option>
<option value="400">650</option>
 <option value="">600</option>
<option value="400">800</option>
<option value="Goldn get ">Goldn get  </option>
<option value="350">350</option>
 <option value="450">550</option>
<option value="400">650</option>
 <option value="">900</option>
<option value="400">1200</option>
<option value="Time">Time</option>
<option value="350">250</option>
 <option value="450">250</option>
<option value="400">550</option>
 <option value="">850</option>
<option value="400">1400</option>
 <option value="Milburn">Milburn </option>
<option value="350">450</option>
 <option value="450">550</option>
<option value="400">650</option>
 <option value="">900</option>
<option value="400">1200</option>
	</select>
    </div>
    </div>

	<div class="control-group">
    <label class="control-label" for="input01">car Level::</label>
<select name="car Level" class="span3333" id="car Level">
<option>--Select--</option>
<option value="500">Bus</option>
<option value="400">Defendar</option>
<option value="400">Marchalice</option>
 <option value="500">Landcloser</option>
<option value="400">Jeep</option>
 <option value="500">Coster</option>
<option value="400">HighRoof</option>
 <option value="500">Min bus</option>
</select>
    </div>
    </div>


	<div class="control-group">
    <label class="control-label" for="input01">car Side Number:</label>
   <select name="car Side Number" class="span3333" id="car Side Number">
<option>--Select--</option>
<option value="500">Bus</option>
<option value="500">0012</option>
<option value="400">1212</option>
 <option value="500">1478</option>
<option value="400">777</option>
<option value="400">Defendar</option>
<option value="500">666</option>
  <option value="500">004</option>
<option value="400">002</option>
 <option value="500">Landcloser</option>
 option value="500">0332</option>
<option value="400">9892</option>
 <option value="500">2328</option>
<option value="400">Jeep</option>
<option value="400">888</option>
 <option value="500">444</option>
<option value="400">188</option>
 <option value="500">644</option>
 <option value="500">Coster</option>
<option value="400">880</option>
 <option value="500">400</option>
<option value="400">HighRoof</option>
<option value="400">4570</option>
 <option value="500">4512</option>
 <option value="500">Min bus</option>
 <option value="500">1088</option>
<option value="400">1070</option>
 <option value="500">666</option>
 
</select>
    </div>
    </div>

	<div class="control-group">
    <label class="control-label" for="input01">car Price:</label>
 <select name="car Price" class="span3333" id="car Price">
    <option>--Select--</option>
<option value="500">Bus</option>
<option value="400">1500</option>
 <option value="500">2000</option>
<option value="400">2500</option>
<option value="400">Defendar</option>
<option value="400">1500</option>
 <option value="500">1700</option>
<option value="400">2100</option>
<option value="400">Marchalice</option>
<option value="500">2000</option>
<option value="400">2300</option>
 <option value="500">Landcloser</option>
<option value="400">7500</option>
 <option value="500">8000</option>
<option value="400">Jeep</option>
<option value="400">7000</option>
 <option value="500">7200</option>
 <option value="500">Coster</option>
<option value="400">5500</option>
 <option value="500">6000</option>
<option value="400">HighRoof</option>
<option value="400">6500</option>
 <option value="500">7000</option>
 <option value="500">Min bus</option>
<option value="400">700</option>
 <option value="500">800</option>
<option value="400">900</option>
 <option value="500">1000</option>

	</select>
    </div>
    </div>

	<div class="control-group">
    <label class="control-label" for="input01">Note:</label>
    <div class="controls"><input type="text" name="note"  class="note" id="span900" required="required">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">image of tourist::</label>
    <div class="controls"><input type="file" name="image"  class="image" id="span900" required="required">
    </div>
    </div>
 <input type="submit" name="Submit" value="Add to Order" id="button1" />
 <input type='reset' value='clear'/>
</form>
