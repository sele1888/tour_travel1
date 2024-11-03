<script type="text/javascript">
function validateForm()
{
var a=document.forms["schedule"]["name"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the first name");
  return false;
  }

var d=document.forms["schedule"]["city"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the city");
  return false;
  }
  var f=document.forms["schedule"]["address"].value;
if (f==null || f=="")
  {
  alert("Pls. Enter the schedule address");
  return false;
  }
  var h=document.forms["schedule"]["email"].value;
if (h==null || h=="")
  {
  alert("Pls. Enter the email");
  return false;
  }
var g=document.forms["schedule"]["contact"].value;
if (g==null || g=="")
  {
  alert("Pls Enter the contact");
  return false;
  }

  var j=document.forms["schedule"]["touristsite"].value;
if (j==null || j=="")
  {
  alert("Pls Enter the tourist site");
  return false;
  }
    var k=document.forms["schedule"]["othersite"].value;
if (k==null || k=="")
  {
  alert("Pls. Enter the schedule other tourist site");
  return false;
  }
var x=document.forms["schedule"]["day"].value;
if (x==null || x=="")
  {
  alert("Pls Enter the day");
  return false;
  }

  var y=document.forms["schedule"]["timestart"].value;
if (y==null || y=="")
  {
  alert("Pls Enter the tourist site start time");
  return false;
  }
    var z=document.forms["schedule"]["endtime"].value;
if (z==null || z=="")
  {
  alert("Pls. Enter the schedule other tourist site end time");
  return false;
  }

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

<form id="save_voter" class="form-horizontal" method="POST" action="save_schedule.php">	
    <fieldset>
   </br>
	 <div class="control-group">
    <label class="control-label" for="input01">full Name:</label>
    <div class="controls">
    <input type="text" name="fullname" class="fullname" id="span900" required="required">
    </div>
    </div>	
  
	<div class="control-group">
    <label class="control-label" for="input01">city:</label>
	<div class="controls">
    <input type="text" name="city" class="city" id="span900" required="required">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">address:</label>
    <div class="controls">
    <input type="text" name="address" class="address" id="span900" required="required">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">email:</label>
    <div class="controls">
    <input type="text" name="email" class="email" id="span900" required="required">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">contact:</label>
    <div class="controls">
    <input type="text" name="contact" class="contact" id="span900" required="required">
    </div>
    </div>	
  
  <div class="control-group">
    <label class="control-label" for="input01">tourist site:</label>
    <div class="controls">
   <select name="touristsite" class="span333" id="touristsite">
	<option>--Select--</option>

							<option value="Gonder">Gonder/Ast Fasile Palce</option>
							<option value="Gonder ">south Mounts/Red Fox</option>
							<option value="Argoba">shonka Villge</option>
							
							
							<option value="Lall Hotel">st.lalibla bulding</option>
							<option value="south Gonder">wally </option>
                                                        <option value="Goldn get hotel">geshan dabr karby </option>
                                                        <option value="ankober hotel">minilk place </option>
                                                        <option value="shake ali muden resort">chaseaby </option>
						</select>
    </div>
    </div>

 <div class="control-group">
    <label class="control-label" for="input01">other site:</label>
    <div class="controls">
   <select name="name" class="span333" id="name">
	<option>--Select--</option>

							<option value="Argoba">shonka Villge</option>
							
							
							<option value="Lall Hotel">st.lalibla bulding</option>
							<option value="south Gonder">wally </option>
                                                        <option value="Goldn get hotel">geshan dabr karby </option>
                                                        <option value="ankober hotel">minilk place </option>
                                                        <option value="shake ali muden resort">chaseaby </option>
						</select>
						 </div>
    </div>
	
	<div class="control-group">
	<label class="control-label" for="input01">Day:</label>

    <div class="controls">
	<br>
	<div class="day_margin">
	Monday:
	<br>
	Tuesday:
	<br>
	Wednesday:
	<br>
	Thursday:
	<br>
	Friday:
	<br>
___ You can select more than one ___

	</div>
	<div class="radio_day">
<input type="checkbox" value="Monday" name="Monday" id="day1">
<br>
<input type="checkbox" value="Tuesday" name="Tuesday" id="day2">
<br>
<input type="checkbox" value="Wednesday" name="Wednesday" id="day3">
<br>
<input type="checkbox" value="Thursday" name="Thursday" id="day4">
<br>
<input type="checkbox" value="Friday" name="Friday" id="day5">


	</div>
    </div>
    </div>

 		 <div class="control-group">
    <div class="controls">
	<button id="save_voter" class="btn btn-primary" name="save"><i class="icon-save icon-large"></i>Save</button>
    </div>
    </div>
	
	
    </fieldset>
    </form>

		