
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>

	<title>Tour and travel guiding system.</title>

	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/logos.png" />
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style.css" />
	 
	<script  src="js/jquery-1.7.min.js" type="text/javascript"></script>
	<script  src="js/jquery.jcarousel.js" type="text/javascript"></script>
	<script   src="js/DD_belatedPNG-min.js" type="text/javascript"></script>
	<script  src="js/functions.js" type="text/javascript"></script>	

	</head>
<body>
	<div class="time_top" align="center">	
		 
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
			<img src="css/images/01.jpg"  width="900" height="230"/> 
							
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
								<img src="css/imag/s.jpg" />
								<div class="caption">
									
									<p>Palse of Atha Fasil</p>
									
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
									
									<p>Awra Amba community  work cultuer</p>
									
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
			                 <li> <a title="values" href="values.html">Transportation </a></li>
							<li><a title="photo of reservation culture" href="Galleryc.php">Gallery Amhara culture</a></li>
							<li><a title="photo of reservation tourist site" href="Gallerytt.php">Gallery Amhara tourist site</a></li>
							<li><a title="photo of reservation hotel" href="Galleryh.php">Reservation hotel gallery</a></li>
							<li><a title="feedback of arhot abe"  href="Feedback.php">Feedback</a></li>
							<li><a title="tourist login" href="index3.php">tourist login</a></li>
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
							<li><a title="Facebook" href="http://www.mewit.com.et" target="_blank><img src="css/images/fb.png" alt="facebook icon" />Dessie Tour guide Office</a></li>
							<li><a title="Facebook" href="http://www.facebook.com" target="_blank><img src="css/images/fb.png" alt="facebook icon" />facebook</a></li>
							<li><a title="Tweeter" href="http://www.twitter.com/andualem5" target="_blank><img src="css/images/tweet.png" alt="tweeter icon" />twitter</a></li>	
						</ul>
					</div>
				</div>
				
				
				<!-- END Sidebar -->
				<!-- Content -->
				<div id="content">
				<h2 align="left" ><font face="Courier New, Courier, monospace" > Dessie Tour Guide Agency In Amhara Regional Tourist Site Reservation Places and<br> Its Envorment Style Gellary (PHOTOGRAPY) Tourist  who  vist this system </font></h2>
					<!-- Products -->
				  <div align="right">
				    <p>&nbsp;</p>
				    <p>&nbsp;</p>
				    <p>&nbsp;</p>
				    <p>&nbsp;</p>
				    <p>&nbsp;</p>
				  </div>
					<div class="products">
					  <div id="row">	  

    <script type="text/javascript" src="js/js/jssor.core.js"></script>
    <script type="text/javascript" src="js/js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 6000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $AutoCenter: 2,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10,                                  //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 2                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 0                                  //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 0,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $DisableDrag: true,                             //[Optional] Disable drag or not, default value is false
                    $Orientation: 2                                 //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                }
            };

            var jssor_slider2 = new $JssorSlider$("slider2_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider2.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider2.$SetScaleWidth(Math.min(parentWidth, 800));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider2_container" style="position: relative; width: 800px;
        height: 400px; overflow: hidden;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 100px; top: 50px; width: 600px; height: 300px;
            overflow: hidden;">
            <div>
                <img u=image src="imag/site/dd1.jpg" />
                <div u="thumb">Gondar is positioned in Northwestern Ethiopia, at about 740 and 175 kilometers away from Addis Ababa and Bahir-Dar respectively. 
                <br />It is altitude is 2200 meters above sea level.    <br />
                </div>
            </div>
            <div>
                <img u=image src="imag/site/12.jpg" />
                <div u="thumb">Blue Nile Falls Thirty kilometers south of Bahir Dar, there is a spectacular basalt cliff where the Nile forms an incredible falls of 45 meters high, known as the Blue Nile falls. The noise, 
                <br/>the force and the smoke created by this fall is really worth discovering.  <br />
<br /> </div>
            </div>
            <div>
                <img u=image src="imag/site/dd2.jpg" />
                <div u="thumb">Do you Known Bete Giorgis?
                 /House of St. George/
   The monolithic Bete Giorgis, which constitutes the 3rd group and architecturally sophisticated, symbolizes Noh's Ark. Its sophistication is revealed in its cruciform floor plan, relief of three equilateral crosses on the roof.</div>
            </div>
            <div>
                <img u=image src="imag/site/24.jpg" />
                <div u="thumb">Do you Known Awra Amba community?
                
    What makes Awra Amba community unique is that there is no gender-based division of labour. Each member of the community contributes labour according to his/her ability. </div>
            </div>
            <div>
                <img u=image src="imag/site/2.jpg" />
                <div u="thumb">Do you know this Shadey Festival ?
		The most colorful and attractive women’s festival the word Shadey Derived from the grass they use for the celebration of the festival and which celebrated Aug16-21 E.C. The festival has religious backgrounds; the religious leaders associated with st Mar yams .</div>
            </div>
            <div>
                <img u=image src="imag/site/dd3.jpg" />
                <div u="thumb">Do you know this geographical view?<br />                
   Simien Mountains National Park is found 132 and 30 kilometers away from Gondar and the park gate town, Debark. Its altitude ranges from 1900-4620 meters above sea level <br /></div>
            </div>
            <div>
                <img u=image src="imag/site/3.jpg" />
                <div u="thumb">Do you know this wildanmal?<br />It called "siran" <a href="#">it lives south shawa in Ankober</a>?<br /><br />
                 <a href="#"></a></div>
            </div>
            <div>
                <img u=image src="imag/site/4.jpg" />
                <div u="thumb">Do you know the first student revolaion school ?<br /> <a href="#">wro shinne is the home  Walling and Marta</a>?<br />
                Do you know that the first modern school in Ethipia? <a href="../examples-jquery/thumbnail-navigator-with-arrows.source.html">add arrows for thumbnail navogator?</a><br />
               that is shinne?</div>
            </div>
        </div>

        <!-- ThumbnailNavigator Skin Begin -->
        <div u="thumbnavigator" class="slider2-T" style="position: absolute; top: 100px; left: 0px; width:250px; height:200px;">
            <div style="filter: alpha(opacity=60); opacity:0.6; position: absolute; display: block;
                background-color: #ffffff; top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides">
                <div u="prototype" style="POSITION: absolute; WIDTH: 250px; HEIGHT: 200px; TOP: 0; LEFT: 0;">
                    <thumbnailtemplate style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#000; line-height: 22px; font-size:14px; padding: 5px;"></thumbnailtemplate>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- ThumbnailNavigator Skin End -->

        <!-- Bullet Navigator Skin Begin -->
        <!-- jssor slider bullet navigator skin 01 -->
        <style>
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av
            {
                filter: alpha(opacity=70);
                opacity: .7;
                overflow:hidden;
                cursor: pointer;
                border: #000 1px solid;
            }
            .jssorb01 div { background-color: gray; }
            .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
            .jssorb01 .av { background-color: #fff; }
            .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
        </div>
        <!-- Bullet Navigator Skin End -->
        
        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l              (normal)
            .jssora05r              (normal)
            .jssora05l:hover        (normal mouseover)
            .jssora05r:hover        (normal mouseover)
            .jssora05ldn            (mousedown)
            .jssora05rdn            (mousedown)
            */
            .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(../img/a17.png) no-repeat;
                overflow:hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05ldn { background-position: -250px -40px; }
            .jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; bottom: 60px; left: 330px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; bottom: 60px; right: 330px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">javascript</a>
        <!-- Trigger -->
    </div>
    <!-- Jssor Slider End -->

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
			<!-- END Main -->
		</div>
		<!-- END Wrapper Middle -->
		<div id="wrapper-bottom"></div>	
		<!-- Footer  -->
		<div id="footer">
			<span class="author"><a href=""><font color="red">Developers:tour and travel guiding team &copy;&nbsp;2015&nbsp;Copy Right Reserved 2007 e.c </font></a></span>
			<!-- <a href="mailto:zedzedn@yahoo.com">zedzedn@yahoo.com</a> -->
			
		</div>
		<!-- END Footer -->
	
	
</body>
</html>