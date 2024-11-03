
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

 <form method="post" action="messagesend.php" name="contact-form" id="contact-form">	
		
    <label ><font color="#000066">Name:</font></label>
     <input type="text" name="name" id="name" size="30" />
      
	   <label><font color="#000066">Email:</font></label>
         <input type="text" name="email" id="email" size="30" />
         
      <label><font color="#000066">Subject:</font></label>
       <input type="text" name="subject" id="subject" size="30" />
           
    <label><font color="#000066">Message:</font></label>
     <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <input  class="contact_button button" type="submit" name="submit" id="submit" value="Send" /></p>
        
        </form>
