<?php include('date.php'); ?>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["addhotel"]["hotelname"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the hotel name");
  return false;
  }

var d=document.forms["addhotel"]["roomno"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the hotel name and select room");
  return false;
  }
  var f=document.forms["addhotel"]["category"].value;
if (f==null || f=="")
  {
  alert("Pls. Enter the hotel category");
  return false;
  }
var g=document.forms["addhotel"]["price"].value;
if (g==null || g=="")
  {
  alert("Pls Enter the hotel name and select room and price");
  return false;
  }
    var h=document.forms["addhotel"]["status"].value;
if (h==null || h=="")
  {
  alert("Pls. Enter the hotel status");
  return false;
  }

  var j=document.forms["addhotel"]["start"].value;
if (j==null || j=="")
  {
  alert("Pls Enter the hotel name and select room and start date");
  return false;
  }
    var k=document.forms["addhotel"]["end"].value;
if (k==null || k=="")
  {
  alert("Pls. Enter the hotel reserva end date");
  return false;
  }
   var i=document.forms["addhotel"]["image"].value;
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

<form action="save_hotel.php" method="post" enctype="multipart/form-data" name="addhotel" onsubmit="return validateForm()">
   
  <p>hotel name:<br />
    <select name="hotelname" required x-moz-errormessage="Please select hotel.">
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
    </select>
    </td>
    </tr>
    <br>  
  Total Room:<br />
  <input name="totalroom" type="text" class="ed" />
  <br />
Room no:<br />
  <input name="roomno" type="text" class="ed" />
  <br />
Category:<br />
  <!--<input name="category" type="text" class="ed" /><br /> -->
  <select name="category" required x-moz-errormessage="Please select category.">
    <br>
    <option value="">...</option>
    <option value="single">Single</option>
    <option value="double">Double</option>
  </select> 
  <br /> 
Price:<br />
  <input name="price" type="text" class="ed" />
  <br />
  
Status:<br />
 <select name="status" required x-moz-errormessage="Please select status.">
   <option value="">...</option>
   <option value="available">Available</option>
   <option value="reserved">Reserved</option>
 </select> 
 <br/>
start:<br />
   <input type="text"  name="start" onclick="ds_sh(this);" placeholder="end of time" autocomplete="off">
  </p>
  <p>  End: <br />
    <input type="text"  name="end" onclick="ds_sh(this);" placeholder="end of time" autocomplete="off">
    <br />
    hotel image:<br />
  <input type="file" name="image" class="ed">
  <br />
    <input type="submit" name="Submit" value="save" id="button1" />
    
    </p>
</form>