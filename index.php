
<?php

$transnum=1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>Tour and travel guiding system</title>
	<link rel="stylesheet" href="main.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" type="text/css"   href="css/TableCSSCode.css">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/logos.png" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
	<script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
  
  <style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
}

  </style>
  <script language="javascript" type="text/javascript">
// Roshan's Ajax dropdown code with php
// This notice must stay intact for legal use
// Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
// If you have any problem contact me at http://selemekonen@gmail.com.np
     
</script>
	<script src="js/jquery-1.7.min.js" type="text/javascript"></script>
	<script src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	
	
</head>
<body>

<div class="time_top" align="center">	
		 
<tr align="right"><td><font color="green" size="+1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date 
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
			<img src="image/01.jpg" width="900" height="230"  /> 
							
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
		<li><a class="scheduler_login"href="admin/index3.php">Tourist</a></li>
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
								<img src="css/imag/s.jpg" />
								<div class="caption">
									
									<p>Palse of Ast Fasil</p>
									
								</div>	
							</li>
							<li>
								<img src="css/imag/k2.jpg" />
								<div class="caption">
									
									<p>Rad Fox </p>
									
								</div>
							</li>
							<li>
								<img src="css/imag/k3.jpg"  />
								<div class="caption">
									
									<p>Awra Amba Community Members at Work</p>
									
								</div>
							</li>
							<li>
								<img src="css/imag/k4.jpg"  />
								<div class="caption">
									
									<p>Ancient culcural tools of Amhara peoples </p>
									
								</div>
							</li>
							<li>
								<img src="css/imag/k5.jpg"  />
								<div class="caption">
									
									<p>Wally Ibex live in south mountains</p>
									
								</div>
							</li>
							<li>
								<img src="css/imag/k7.jpg" />
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
							<li><a title="tourist login" href="index3.php">Tourist Login</a></li>
        <li><a title="operator login "href="index2.php">OPerator login</a></li>
	<li><a title="sign up"  href="signup.html"target="_blank">Sign up for Opertaor</a></li>
                        </ul>
					</div>
					
					
					<div class="box">
						<div class="title">
							<h2>Releted link</h2>
							<img class="bullet" src="css/images/bullet.png" alt="small grey bullet" />
						</div>	
						<ul class="socials">
							<li><a title="Ethiopian Airlines Flight " href="http://www.mewit.com.et" target="_blank><img src="css/images/fb.png" alt="facebook icon" />Ethiopian Airlines Flight </a></li>
							<li><a title="Facebook" href="http://www.facebook.com" target="_blank><img src="css/image/f.jpg" alt="facebook icon" /><img src="css/imag/f.jpg"  /></a></li>
							<li><a title="Tweeter" href="http://www.twitter.com/selemekonen" target="_blank><img src="css/images/tweet.png" alt="tweeter icon" /><img src="css/imag/t.jpg"  /></a></li>	
						</ul>
					</div>
				</div>
				
				
				<!-- END Sidebar -->
				<!-- Content -->
				<div id="content">
				
					<!-- Products -->
					<div align="right">
					<form action="index.php" method="post">
<input type="text" size="30%"  name="key" placeholder="Search for tourist site hotel reserved ..."/>&nbsp;<input type="submit" name="go" value="Go"  size="10%"/>
</form>
  
<?php
$con=mysql_connect("localhost","root","");

if(!$con){

die ("can not connected :" .mysql_error());
}
mysql_select_db("tours",$con);

if(isset($_POST['key'])){

$serch = $_POST['key'];
$serch =preg_replace("#[^0-9a-z]#i","",$serch);

$sql= mysql_query ("SELECT * FROM orders hotelname");
$count = mysql_num_rows($sql);

if($count == 0)
   {
     echo  "<font color=#000066 size=2>No result found";
     echo "</font>";
	
   }
   else{
echo "<font color=#000066 size=2>By this</font>"."    "."<font face=Georgia, Times New Roman, Times, serif color=red size=2>"." '"."$serch"."' "."</font>"."<font color=#000066 size=2> keyword we found </font>"."  "."<font face=Georgia, Times New Roman, Times, serif color=red size=2>"." '"."$count"."' "."</font>"."  "."<font color=#000066 size=2>results </font>";
echo"
<div class=CSSTableGenerator >
<table width=200>
<tr>
<td width=60 height=50>HotelName</td>
 <td width=60 height=50>Roomno</td>
 <td width=50 height=50>Catagory</td>
  <td width=50 height=50>carLevel</td>
  <td width=50 height=50>Tourist Site</td>
  <td width=50 height=50>Site Visit day</td>
 <td width=50 height=50>Year</td>
</tr></font>";
 echo "<tr >";
 include('connect.php');
					
					$result = mysql_query("SELECT * FROM orders hotelname");
							while($row = mysql_fetch_array($result))
								{
									
									echo "<td ><font size=2>" .$row['hotelname']."</td>";
									echo "<td ><font size=2>".$row['roomno']."</td>";
									echo "<td ><font size=2>".$row['category']."</td>";
									echo "<td ><font size=2>".$row['carLevel']."</td>";
									echo "<td ><font size=2>".$row['name']."</td>";
									echo "<td ><font size=2>".$row['touristsite']."</td>";
									echo "<td ><font size=2>".$row['year']."</td>";
														echo '</tr>';
						}


echo "</table>";
echo "</div>";
}

}

mysql_close($con);
//exit();
?>
  </div>
					<div class="Reservation ">
					
						<div class="title">
							<h2>Tourist Reservation</h2>
															
							<a class="title-link" title="More tourist reservtion" href="#"</a>
                                                       
							<img class="bullet" src="css/images/bullet.png" alt="small grey bullet" />
                                                        
						</div>
                                   <h3><a rel="facebox" href="addreserv.php">Reservation Form</a></h3>
			
					  <div class="row">
					  <div id="wrapper">
  <div id="content">
		<div id="reservationlist">
			
			<?php  
			require "connect.php";
			$result = mysql_query("SELECT * FROM tourist_site");
			while($row=mysql_fetch_array($result))
			{
				
                            echo '<a rel="facebox" href="orderpage.php?id='.$row['id'].'&trnasnum='.$transnum.'"><img src="img/products/'.$row['img'].'" alt="'.htmlspecialchars($row['name']).'" width="150" height="150" class="pngfix" /></a>';
			}

			?>
       
		</div>
		
                     
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>

</div>
					  </div>
	
						<div class="cl"></div>
					</div>
					<!-- END Products -->
					<!-- Products -->
					<div class="products best-sellers">
					  <div class="cl">30000</div>
				  </div>		
					<!-- END Products -->
				</div>
				<!-- END Content -->
				<div class="cl"></div>
			</div>
			<!-- END Main -->
		</div>
		<!-- END Wrapper Middle -->
		<div id="wrapper-bottom"></div>	
		<!-- Footer  -->
		<div id="footer">
			<span class="author"><a href=""><font color="red">Developers:tour and travel guiding team &copy;&nbsp;2017&nbsp;Copy Right Reserved 2009 e.c</font></a></span>
			<!-- <a href="mailto:@yahoo.com">sele_mekonen@yahoo.com</a> -->
		</div>
		<!-- END Footer -->
	</div>
  
</body>
</html>