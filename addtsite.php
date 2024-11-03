
<script type="text/javascript">
function validateForm()
{
var a=document.forms["addroom"]["type"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the room type");
  return false;
  }
var b=document.forms["addroom"]["rate"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the room rate");
  return false;
  }
var d=document.forms["addroom"]["desc"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the room description");
  return false;
  }
 var e=document.forms["addroom"]["image"].value;
if (e==null || e=="")
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

<form action="save_tsite.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
 Place Name<br />
 <select name="type" required x-moz-errormessage="Please select hotel.">
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

 Rate<br />
    <input name="rate" type="text" id="rate" class="ed" onkeypress="return isNumberKey(event)" /><br />
 
 Description<br />
    <input name="desc" type="text" class="ed" /><br />
    
 Room Image: <br /><input type="file" name="image" class="ed"><br />
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
