<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Tour and travel guiding system.</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/logos.png" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<div class="time_top" align="center">	
		<?php include('date.php'); ?>
 
<tr align="right"><td><font color="#FF0000" size="+1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date 
  <?php
 $Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo $new; ?>
</font>
							<script src="css/time.js" language="javascript" type="text/javascript"></script>
							<body  onLoad="yourClock()", onUnload="stopClock(); return true"> 
					       <form name="the_clock">
							<a class="mainlevel">System Time:&nbsp;&nbsp;<input type="text" name="the_time" size="10" style="padding-bottom:5px;" align = "top"></a> 
	                 </form> </td></tr>
</div> 

	<div class="shell">		
		<div id="top-navigation">
		</div>
		<div class="welcome-message">	
		</div>
		<div class="cl"></div>
		<div id="wrapper-top"></div>
		<!-- Wrapper Middle -->
		<div id="wrapper-middle">
			<!-- Header -->
			<div id="header">
			
			<img src="image/01.jpg" width="916" height="230" /> 
							
				<!-- Search -->
				
				<!-- END Search -->				
			</div>
			<!-- END Header -->
			<!-- Navigation -->
			<div id="navigation">
								<ul>
					<li class="first"><a title="Home" href="index.php">Home<span class="home">&nbsp;</span></a></li>
					<li><a title="operator to guide tourist" href="support.html">Operator</a></li>
					<li><a title="click here register tourist" href="register.php">Tourist</a></li>
					<li><a title="About Us" href="aboutus.html">About Us</a></li>
					<li><a title="Contacts" href="contacts.html">Contacts</a></li>
					<li><a title="Service" href="service.html">Serivce</a></li>
					<li><a title="Gallery"   href="gallery.php">Gallery</a></li>
					<li><a title="login" href="index1.php">Login</a></li>
				
		<!--<li class="dropdown" id="login"> <a href="#"class="login"
          data-toggle="dropdown"> <i class="icon-user icon-large"></i>Login <b class="caret"></b> </a>
      <ul class="dropdown-menu">
        <li><a class="admin_login"href="admin/index.php">Admin</a></li>
		<li><a class="scheduler_login"href="admin/index3.php">tourist</a></li>
        <li><a class="user_login"href="admin/index2.php">OPerator</a></li>
      </ul>
	  
  </ul>
  </ul> -->

 
					<!--<li><a title="News" href="administrator/index.php" target="_blank">News</a></li> -->
				</ul>
				<div class="cl"></div>
			</div>
			<!-- END Navigation -->
			<!-- Main -->
			<div id="main">
				<!-- Slider -->
				<div id="slider-frame">					
					<div id="slider">
						<ul>
							<li>
								<img src="css/imag/c.jpg" />
								<div class="caption">
									
									<p> Gojam derssing</p>
									
								</div>	
							</li>
							<li>
								<img src="css/imag/c1.jpg" />
								<div class="caption">
									
									<p>the land of  Ast Facil </p>
									
								</div>
							</li>
							<li>
								<img src="css/imag/c2.jpg"  />
								<div class="caption">
									
									<p> Ast Minlik II</p>
									
								</div>
							</li>
							<li>
								<img src="css/imag/c3.jpg"  />
								<div class="caption">
									
									<p>Argoba's women Derassing style</p>
									
								</div>
							</li>
							<li>
								<img src="css/imag/c5.jpg"  />
								<div class="caption">
									
									<p></p>
									
								</div>
							</li>
							<li>
								<img src="css/imag/c4.jpg" />
								<div class="caption">
									
									<p></p>
									
								</div>
							</li>
						</ul>
						<div class="jcarousel-control">
				    		<a title="slide 1" href="#">1</a>
				     		<a title="slide 2" href="#">2</a>
				      		<a title="slide 3" href="#">3</a>
				     		<a title="slide 4" href="#">4</a>
							<a title="slide 5" href="#">5</a>
				     		<a title="slide 6" href="#">6</a>			     		 
   						</div>
   						<div class="slider-arrows">
	   						<a title="Next Slide" id="next" href="#">next</a>
	   						<a title="Previous Slide" id="prev" href="#">prev</a>
   						</div>   						
					</div>
				</div>
				<!-- END Slider -->
				<!-- Sidebar -->
				<div id="sidebar">
					<div class="box">
					<form  name="login" action="" method="post">
			  <p align="center" id="error">&nbsp;</p>
                    </form> 
						<ul>
							<li>
							  <div class="title">
                                <h2> Tourist View Information</h2>
							    <img class="bullet" src="css/images/bullet.png" alt="small grey bullet" /> </div>
						    <li> <a title="mission" href="mission.html">Mission and Vission</a></li>
			                 <li> <a title="values" href="values.html">Transportation</a></li>
							<li><a title="photo of reservation culture" href="Galleryc.php">Gallery Amhara culture</a></li>
							<li><a title="photo of reservation tourist site" href="Gallerytt.php">Gallery Amhara tourist site</a></li>
							<li><a title="photo of reservation hotel" href="Galleryh.php">Reservation hotel gallery</a></li>
							<li><a title="feedback of DTGA"  href="Feedback.php">Feedback</a></li>
							<li><a title="tourist login" href="index3.php">tourist login</a></li>
        <li><a title="operator login "href="index2.php">OPerator login</a></li>
	<li><a title="sign up"  href="signup.html"target="_blank">Sign up for Membership</a></li>
                        </ul>
					</div>
					
									
					<div class="box">
						<div class="title">
							<h2>Releted link</h2>
							<img class="bullet" src="css/images/bullet.png" alt="small grey bullet" />
						</div>	
						<ul class="socials">
							<li><a title="Facebook" href="http://www.mewit.com.et" target="_blank><img src="css/images/fb.png" alt="facebook icon" />Culture&nbsp;and&nbsp;Tourism&nbsp;Bureau Office</a> </li>
							<li><a title="Facebook" href="http://www.facebook.com" target="_blank><img src="css/images/fb.png" alt="facebook icon" />facebook</a></li>
							<li><a title="Tweeter" href="http://www.twitter.com/andualem5" target="_blank><img src="css/images/tweet.png" alt="tweeter icon" />twitter</a></li>	
						</ul>
					</div>
				</div>
				
				
				
				<!-- END Sidebar -->
				<!-- Content -->
				
						<div id="content">
				<div>
            <br>
			<br><br>
			<h2 align="left" ><font face="Courier New, Courier, monospace">Tourist  who sign in in this form after vist the system </font></h2><br>
            <script type='text/javascript'>
             function formValidation(){
		var fname=document.getElementById('fname');
		var lname=document.getElementById('lname');
		var user=document.getElementById('user');
		var address = document.getElementById('address');
		var city = document.getElementById('city');
		var mail = document.getElementById('mail');
	var contact = document.getElementById('contact');
	var pass=document.getElementById('pass');
	
	var address_type=document.getElementById('address_type');
	
	if(isAlphabet(fname, "please enter Your name in characters only number is not allowed")){
	if(lengthRestriction(fname, 3, 10,"for your Name")){
	if(isAlphabet(lname, "please enter Your Last name in characters only number is not allowed")){
	if(lengthRestriction(lname, 3, 10,"for your Last Name")){
	if(isAlphabet(user, "please enter Your user name in characters only number is not allowed")){
	if(lengthRestriction(user, 3, 10,"for your user Name")){
	if(isAlphabet(address, "please enter Your address in characters only number is not allowed")){
	if(lengthRestriction(address, 3, 10,"for your address")){
	
	if(isAlphabet(city, "please enter Your city in characters only number is not allowed")){
	if(lengthRestriction(city, 3, 10,"for your city")){
	
	if(emailValidator(mail,"check your e-mail format Example jone@gmail.com/yahoo.com")){
	
		if(isNumeric(contact, "please enter only Number for phone Number")){
		
		if(lengthRestriction(pass, 6, 24,"Use for your password protection")){

	return true;
	}
	}
}
}
	}
	}
	}
	}
	}
	}
	}
	}
	
return false;
		
}
function notEmpty(elem, helperMsg){
	if(elem.value.length ==0){
		alert(helperMsg);
		elem.focus(); 
		return false;
		}
		return true;
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters and special symboles" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script>
	
<script language="javascript" type="text/javascript">
function randomString() {
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
	var string_length = 8;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
	document.registerationform.randomfield.value = randomstring;
}
 

</script>





	<body  background="css/images/body.jpg">
<a href="index.php"  target="_blank">Return to Home </a><br><br>
<div id="body">
<div  align="center">
<fieldset style="width:30%"  ><legend ><font color= #333 size="11px">Sign up</font></legend><br>
<table width="532" height="372" border="0">

<h3 align="left" ><font face="Courier New, Courier, monospace"><h4 align=left ><font face=Courier New, Courier, monospace>Verification from Dessie tour guide agency  /DTGA/<br>

<br>
<font face=Courier New, Courier, monospace>You are successfully registered to the world best online operator profile  


<br>
 </h3>
<form name = "registerationform" method="POST"   action="sign-up.php" onSubmit="return(regvalidate())">

<tr>
<td width="241" height="22"><font size="+1"   face="Georgia, Times New Roman, Times, serif">Name</td>
<td width="381"> <input type="text" name="name" size="54%"    id="vname" /></td><br />
</tr>
<tr  align="left">
<td colspan="6" ><tt><font color='red'> <DIV id="une1"  align="right"></div></font></tt></td>
</tr>
<tr>
<td height="40"><font size="+1"   face="Georgia, Times New Roman, Times, serif">Email</td>
<td> <input type="text" name="email"  size="54%"  id="txtEmail" ></td>
</tr>
</tr>
<tr  align="left">
<td colspan="6" ><tt><font color='red'> <DIV id="une2"  align="right"></div></font></tt></td>
</tr>
<tr>
<td height="37"><font size="+1"  face="Georgia, Times New Roman, Times, serif">UserName</td>
<td> <input type="text" name="user" size="54%"  id="userv"></td>
</tr>
</tr>
<tr  align="left">
<td colspan="6" ><tt><font color='red'> <DIV id="une3"  align="right"></div></font></tt></td>
</tr>
<tr>
<td height="43"><font size="+1"  face="Georgia, Times New Roman, Times, serif">Password</td>
<td> <input type="password" name="pass" size="54%" id="passv"></td>
</tr>
</tr>
<tr  align="left">
<td colspan="6" ><tt><font color='red'> <DIV id="une4"  align="right"></div></font></tt></td>
</tr>
<tr>
<td height="45"><font size="+1"  face="Georgia, Times New Roman, Times, serif">Confirm Password </td>
<td><input type="password" name="cpass"  size="54%" id="cpassv"></td><br>
</tr>
</tr>
<tr  align="left">
<td colspan="6" ><tt><font color='red'> <DIV id="une5"  align="right"></div></font></tt></td>
</tr>
<tr>
<td  colspan="4"><p>To continue, please type the characters below:</p></td>
</tr>

<tr>
 
<td   colspan="6"><input disabled="disabled"   style="color: #EE0000; font-size:35px; font-w
eight: bold; font-family: Helvetica, Arial, sans-serif; background-color: #CCFFFF; border-bottom-style:dotted; border-left-style: dotted; border-right-style: dotted; border-top-style: dotted"  "type="text" name="randomfield"  ><input type="button" value="View another" onClick="randomString();"></td>

</tr>
<tr>
<td height="26"><input type="text" name="ch"  size="30%"  id="chv" placeholder="Type hear "></td>
</tr>
</tr>
<tr  align="left">
<td colspan="6" ><tt><font color='red'> <DIV id="une6"  align="right"></div></font></tt></td>
</tr>
<tr>

<td height="47"><input type="submit" name="submit" value="Sign-Up"  size="20%" ></td>
<td><input type="reset" value="Clear" /></tr>
</form>
</table>

<SCRIPT type="Text/JavaScript">
function regvalidate()

{
var name = document.getElementById('vname');

if(document.registerationform.name.value=="")
 {
  document.getElementById('une1').innerHTML = "First name should not be empty";
  
  name.style.backgroundColor = "yellow";
  registerationform.name.focus();
  return(false);
 }
var email = document.getElementById('txtEmail');
if(document.registerationform.email.value=="")
  {
  document.getElementById('une2').innerHTML = "Email id requered";
  registerationform.email.focus();
  email.style.backgroundColor = "yellow";
  return(false);
  }
var email = document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
         document.getElementById('une2').innerHTML = "Please provide a valid email address";
         email.focus;
	     registerationform.email.value = "";
	     email.style.backgroundColor = "yellow";
    return false;
}
var user = document.getElementById('userv');
 if(document.registerationform.user.value=="")
  {
  document.getElementById('une3').innerHTML = "User name field should not be empty";
  user.focus();
  email.style.backgroundColor = "yellow";
  return(false);
  }
var user = document.getElementById('userv');

if (user.value.length < 6){
        document.getElementById('une3').innerHTML = "Username should have miniumum 6 chars";
        user.focus();
        user.style.backgroundColor = "yellow";
		return(false);
}
var pass = document.getElementById('passv');
if(document.registerationform.pass.value=="")
   {
        document.getElementById('une4').innerHTML = "Please type a password";
        registerationform.pass.focus();
        pass.style.backgroundColor = "yellow";
        return(false);
   }
  var ch = document.getElementById('chv'); 
if((document.registerationform.ch.value)!= (document.registerationform.randomfield.value))
   {
   registerationform.ch.focus();
  document.getElementById('une6').innerHTML = "Character mismatch,please try again";
  ch.style.backgroundColor = "yellow";
    return(false);
   }
   var cpass = document.getElementById('cpassv');
if((document.registerationform.pass.value) != (document.registerationform.cpass.value))
   {
  document.getElementById('une5').innerHTML = "Password Must be equal";
  registerationform.pass.value = "";
  registerationform.cpass.value = "";
  registerationform.pass.focus();
  cpass.style.backgroundColor = "yellow";
  return(false);
  }
  
if(document.registerationform.ch.value=="")
   {
    document.getElementById('une6').innerHTML = "Please ,Click the view another button and  type the character";
    registerationform.ch.focus();
    return(false);
   }
else
   {
   return(true);
   }
}
</SCRIPT>


</fieldset>
</div>

</body>
						
					 </div>			 
	
						<div class="cl"></div>
		  </div>
					<!-- END Products -->
					<!-- Products -->
					<div class="products best-sellers">
					  <div class="cl"></div>
				  </div>		
					<!-- END Products -->
	  </div>
				<!-- END Content -->
				<div class="cl"></div>
</div>
				<!-- END Content -->
			</div>
			<!-- END Main -->
		</div>
		<!-- Footer  -->
		<div id="footer">
			<span class="author"><a href=""><font color="red">Developers:tour and travel guiding team &copy;&nbsp;2017 Copy Right Reserved 2009 e.c </font></a></span>
			<!-- <a href="mailto:sele_mekonen@yahoo.com">desu14@yahoo.com</a> -->
		</div>
		<!-- END Footer -->
	</div>
</body>
</html>