
<script type="text/javascript">
function validateForm()
{
var a=document.forms["adduser"]["first_name"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the first name");
  return false;
  }

var d=document.forms["adduser"]["last_nameo"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the last name");
  return false;
  }
  var f=document.forms["adduser"]["user_name"].value;
if (f==null || f=="")
  {
  alert("Pls. Enter the user name");
  return false;
  }
var g=document.forms["adduser"]["passworrd"].value;
if (g==null || g=="")
  {
  alert("Pls Enter the password");
  return false;
  }
    var h=document.forms["adduser"]["email"].value;
if (h==null || h=="")
  {
  alert("Pls. Enter the email");
  return false;
  }

  var j=document.forms["adduser"]["abilityt"].value;
if (j==null || j=="")
  {
  alert("Pls Enter the ability");
  return false;
  }
    var k=document.forms["adduser"]["user_type"].value;
if (k==null || k=="")
  {
  alert("Pls. Enter the user type");
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



<form action="save_user.php" method="post" enctype="multipart/form-data" name="adduser" onsubmit="return validateForm()">

 <fieldset>
	</br>
	<div class="control-group">
    <label class="control-label" for="input01">First Name:</label>
    <div class="controls">
    <input type="text" name="first_name" class="first_name" id="span900" required="required">
    </div>
    </div>
	
		<div class="control-group">
    <label class="control-label" for="input01">Last Name:</label>
    <div class="controls">
    <input type="text" name="last_name" class="last_name" id="span900" required="required">
   	 </div>
     </div>
    
	<div class="control-group">
    <label class="control-label" for="input01">User Name:</label>
    <div class="controls">
    <input type="text" name="user_name" class="user_name" id="span900" required="required">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Password:</label>
    <div class="controls">
    <input type="password" name="password" class="password" id="span900" required="required">
    </div>
    </div>
	<div class="control-group">
    <label class="control-label" for="input01">Email:</label>
    <div class="controls">
    <input type="email" name="email" class="email" id="span900" required="required">
    </div>
    </div>
	
	<div class="control-group">
    <label class="control-label" for="input01">ability:</label>
    <div class="controls">
    <input type="text" name="ability" class="email" id="span900" required="required">
    </div>
    </div> 
<div class="control-group">
    <label class="control-label" for="input01">User Type:</label>
    <div class="controls">
   <select name="user_type" class="span3"  id="span900" required="required">
   <option>.........</option>
	<option>tourist</option>
	<option>operator</option>
	<option>Admin</option>
	</select>
    </div>
    </div>
	<div class="control-group">
    <label class="control-label" for="input01">Question:</label>
    <div class="controls">
	 <select name="Question" class="span3"  id="span900" required="required">
   	<option>1. What is your love?</option>
	<option>2. what was the name of your elementary school?</option>
	</select>
	</div>
	</div>
	
	<div class="control-group">
    <label class="control-label" for="input01">Answer:</label>
    <div class="controls">
	<input type="text" name="answer" class="span3" id="span900" required="required"value=""> 
   </div>
   </div>
	
	 <input type="submit" name="Submit" value="save" id="button1" />
 
</form>