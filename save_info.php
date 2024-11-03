<?php
include('connect.php');
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$s=$_POST['username'];
$sex=$_POST['sex'];
$city=$_POST['city'];
$paddress=$_POST['address'];
$email=$_POST['email'];
$transnum=$_POST['contact'];
$ddddddd=$_POST['year'];
$pmethod=$_POST['month'];
$total=$_POST['day'];
$so=$_POST['password'];
$dmethod=$_POST['address_type'];

mysql_query("INSERT INTO register (firstname, lastname,username, sex, city, address, email, contact, startdate,year, month, day, password, address_type) VALUES ('$fname','$lname','$s','$sex','$city','$paddress','$email','$transnum',NOW(),'$ddddddd','$pmethod','$total','$so','$dmethod')") or die(mysql_error());
	
	
	
echo "	


<div id=header>
<div align=left>
<font color=#ffffff face=Georgia, Times New Roman, Times, serif size=24px>&nbspRegistered of tourist !</font>
</div>

</div>

<div id=body>




<div align=center>
<fieldset style=width:30%  ><legend ><font color= #333 size=11px>HI<font color=#CC0000>"."  "."$fname"."</font></font></legend>
<table width=750 border=0>

<h4 align=left ><font face=Courier New, Courier, monospace>Verification from Dessie tour guide agency  /DTGA/<br>

<br>
<font face=Courier New, Courier, monospace>You are successfully registered to the world best online Tourist profile  


<br>
<font face=Courier New, Courier, monospace>Your username is:- <font color=#CC0000>"."  "."$lname"."</font></font>

<br>
<br>
<font face=Courier New, Courier, monospace>Your usertype is:- <font color=#CC0000>"."  "."$s"."</font></font>

<br>
<br>

<font face=Courier New, Courier, monospace>Your password is:- <font color=#CC0000>"."  "."$so"."</font></font>

<br>

<br>

<font face=Courier New, Courier, monospace>Thank you for visiting us of Tourist you can access service log in to system.
<br><br><br>
<font face=Courier New, Courier, monospace>In Adtion to follow us on 

</tr>
<tr>
<td height=47><a href=facebook.com target=_blank><img src=css/images/facebook.png /></a></td>
<td height=47><a href=deviantart.com target=_blank><img  src=css/images/deviantart.png /></a></td>

<td height=47><a href=google.com target=_blank><img  src=css/images/google.png /></a></td>
<td height=47><a href=skype.com target=_blank><img  src=css/images/skype.png /></a></td>
<td height=47><a href=youtube.com target=_blank><img  src=css/images/youtube.png /></a></td>
<td>
</tr>

</form>
</table>

</fieldset>
</div>
	
	";
	
	
	

?>
<a href="index.php"><--Return to Home</a>  
</body>

</html>
