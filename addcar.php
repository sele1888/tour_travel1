
<script type="text/javascript">
function validateForm()
{
var a=document.forms["addcar"]["carBaordnumber"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the car baord number");
  return false;
  }
var b=document.forms["addcar"]["carSideNumber"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the car side number");
  return false;
  }
var c=document.forms["addcar"]["carlevel"].value;
if (c==null || c=="")
  {
  alert("Pls Enter the car level");
  return false;
  }
  var d=document.forms["addcar"]["carCurrentCity"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the car current city");
  return false;
  }
  var e=document.forms["addcar"]["rate"].value;
if (e==null || e=="")
  {
  alert("Pls. Enter the prcie of car");
  return false;
  }
 var f=document.forms["addcar"]["image"].value;
if (f==null || f=="")
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


<form action="save_car.php" method="post" enctype="multipart/form-data" name="addcar" onsubmit="return validateForm()">
<span style="color:#bb00ff; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">Administration Fill Car Profil</span><br><br />
User Name: <select name="username" class="span3333" id="username">
<option value="Tourist">tourist</option>						
	</select><br>
 car Baord number<br />
  <input name="carBaordnumber" type="text" class="ed" /><br />
 car Side Number<br />
    <input name="carSideNumber" type="text" id="carSideNumber" class="ed" onkeypress="return isNumberKey(event)" /><br />
	 car Level<br />
  <input name="carLevel" type="text" class="ed" /><br />
 
 car Current City<br />
    <input name="carCurrentCity" type="text" class="ed" /><br />
     Rate<br />
    <input name="rate" type="text" id="rate" class="ed" onkeypress="return isNumberKey(event)" /><br />

 Image: <br /><input type="file" name="image" class="ed"><br />
 
    <input type="submit" name="Submit" value="save" id="button1" />
 
</form>
