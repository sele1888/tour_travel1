<html>
<head>
<link    href="css/style1.css"rel="stylesheet" type="text/css" />
</head>
<body  background="css/images/body.jpg">
<?php
error_reporting(E_ERROR);
mysql_connect("localhost","root","");
mysql_select_db("tours");

if(isset($_POST['submit'])){
 $pass=$_POST['pass'];
 $pass2=$_POST['cpass'];
 
     if($pass==$pass2){
	 //All good
	 
	 
	 
	 $name= mysql_escape_string($_POST['name']);
	 $email= mysql_escape_string($_POST['email']);
	 $user= mysql_escape_string($_POST['user']);
	 $password= mysql_escape_string($pass);
	 $password=md5($password);
	 $url = 'http://localhost/unity/index.php';
	  $sql=mysql_query ("SELECT * FROM `operator` Where `username` = '$user' ") or die (mysql_error());
	 
	 mysql_query ("INSERT INTO `operator`(`ID`, `name`, `email`, `username`, `password`) VALUES ('Null','$name','$email','$user','$password')") or die(mysql_error());
	
	
	
echo "	


<div id=header>
<div align=left>
<font color=#ffffff face=Georgia, Times New Roman, Times, serif size=11px>&nbspRegistered !</font>
</div>

</div>

<div id=body>




<div align=center>
<fieldset style=width:40%  ><legend ><font color= #333 size=11px>HI<font color=#CC0000>"."  "."$name"."</font></font></legend>
<table width=750 border=0>

<h4 align=left ><font face=Courier New, Courier, monospace>Verification from Dessie tour guide agency  /DTGA/<br>

<br>
<font face=Courier New, Courier, monospace>You are successfully registered to the world best online operator profile  


<br>



<font face=Courier New, Courier, monospace>Your username is:- <font color=#CC0000>"."  "."$user"."</font></font>

<br>
<br>

<font face=Courier New, Courier, monospace>Your password is:- <font color=#CC0000>"."  "."$pass"."</font></font>

<br>

<br>

<font face=Courier New, Courier, monospace>Thank you for visiting us 
<br><br><br>
<font face=Courier New, Courier, monospace>follow us on 

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
	
	
	

	 }
	 else{
	 //echo "Sorry,your passwored do not much";
	 exit();
	 }
	 
	 


}


?>
<a href="index.php"><--Return to Home</a>  ..../<a href="index2.php"><--login  operator account</a> 
</body>

</html>
