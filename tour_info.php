<style>
body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized select{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>
<script type='text/javascript'>
function formValidation(){
		var fname=document.getElementById('fname');
		var lname=document.getElementById('lname');
		var sex=document.getElementById('sex');
	var contact = document.getElementById('contact');
		var mail = document.getElementById('mail');
	var address = document.getElementById('address');
	var city = document.getElementById('city');
	var dy=document.getElementById('dy');
	if(isAlphabet(fname, "please enter Your name in characters only number is not allowed")){
	if(lengthRestriction(fname, 3, 10,"for your Name")){
	if(isAlphabet(lname, "please enter Your Last name in characters only number is not allowed")){
	if(lengthRestriction(lname, 3, 10,"for your Last Name")){
		if(lengthRestriction(contact, 6, 24,"please enter only Number for Hose Number")){
	if(emailValidator(mail,"check your e-mail format Example jone@gmail.com/yahoo.com")){
	if(isAlphabet(address, "please enter address")){
	if(isAlphabet(city, "please enter city ")){
	

	return true;
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
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
<div id="stylized" class="myform">
<form method="post" action="saveform.php" name="form1" onsubmit="return validateForm()">
<h1>Personal Information form tourist</h1>
<p>Note: This note inform/s you when you can receive your order<br>
Inside Arhat Aba: 1000 above- 2 days | 1000 below- 1 day<br>
Outside Arhat Aba: 1000 above- 4 days | 1000 below- 3 days<br>
</p>

<label>First Name
<span class="small">Add your first name</span>
</label>
<input type="text" name="firstname" id="name" />

<label>Last Name
<span class="small">Add your last name</span>
</label>
<input type="text" name="lastname" id="name" />
<label>User Name:
<span class="small">Add your user name</span>
</label>
 <select name="username" class="span333" id="username">
	<option>tourist</option>
</select>
 <label>gender:
 <span class="small">Add your sex</span>
 </label>
 <select name="sex" class="span333" id="sex">
	<option>--Select--</option>
      <option value="mela">mela</option>
		<option value="femela">femela</option>
		</select>

<label>Contact No.
<span class="small">Add your Contact number</span>
</label>
<input type="text" name="contact" id="name" />

<label>Email
<span class="small">Add a valid address</span>
</label>
<input type="text" name="email" id="email" />

<label>Address
<span class="small">permanent address</span>
</label>
<input type="text" name="address" id="name" />
<label>City
<span class="small">permanent city</span>
</label>
<input type="text" name="city" id="name" />

<label>year:
<span class="small">Add your end date of vist year</span>
 </label>
<select name="year" class="span333" id="year">
	<option>--Select year--</option>
      <option value="2015">2015 G.C</option>
		<option value="2016">2016 G.C</option>
		<option value="2017">2017 G.C</option>
		<option value="2018">2018 G.C</option>
		<option value="2019">2019 G.C</option>
		<option value= "2020">2020 G.C</option>
			</select>
			
			<label>Month:
			<span class="small">Add your vist year in month</span></label>
 <select name="month" class="span333" id="month">
	<option>--Select month--</option>
      <option value="junery">junery</option>
		<option value="febury">febury</option>
		<option value="march">march</option>
		<option value="apir">apir</option>
		<option value="may">may</option>
		<option value="june">june </option>
		<option value="july">july</option>
		<option value="agust">agust </option>
		<option value="sectember">secetember</option>
		<option value="ocamber">ocetmber </option>
		<option value="november">november</option>
		<option value="december">december </option>
			</select>
			
			<label>Day:
			<span class="small">Add your vist year in month of day</span></label>
<select name="day" class="span333" id="Day">
	<option>--Select--</option>
      <option value="1">1</option><option value="2">2</option>
		<option value="3">3</option><option value="4">4</option><option value="5">5</option><option value= "6">6</option>
		<option value="7">7</option><option value="8">8</option>
		<option value="9">9</option><option value="10">10</option>
		<option value="11">11</option><option value= "12">12</option>
<option value="13">13</option><option value="14">14</option><option value="15">15</option><option value= "16">16</option>
		<option value="17">17</option><option value="18">18</option>
		<option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option>
		<option value="23">23</option><option value="24">24</option><option value="25">25</option><option value= "26">26</option>
		<option value="27">27</option><option value="28">28</option>
		<option value="29">29</option><option value="30">30</option>		
		</select>
		<label>Password:
<span class="small">Add your password</span>
</label>
<input type="text" name="password" id="password" />

<label>Delivery Addres
<span class="small">Delivery Address</span>
</label>
<input type="text" name=" address_type" id="name" />
<input type="submit" value="Confirm" style="margin-left: 150px;">
<div class="spacer"></div>

</form>
</div>