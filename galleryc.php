
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
			<img src="css/images/01.jpg" width="900" height="230"/> 
							
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
									
									<p>Argob's pepole work cultue</p>
									
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
		<h2 align="left" ><font face="Courier New, Courier, monospace" > Dessie Tour Guide Agency In Amhara Regional Culture and<br> Life Style Gellary (PHOTOGRAPY) Tourist  who  vist this system </font></h2>
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
            //Reference http://www.jssor.com/development/slider-with-slideshow-no-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
            //Fade Fly in R
            {$Duration: 1200, $During: { $Left: [0.3, 0.7] }, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2, $Outside: true }
            //Fade Fly out L
            , { $Duration: 1200, $SlideOut: true, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.3, $Opacity: 2, $Outside: true }
            ];

            //Reference http://www.jssor.com/development/slider-with-caption-no-jquery.html
            //Reference http://www.jssor.com/development/reference-ui-definition.html#captiondefinition
            //Reference http://www.jssor.com/development/tool-caption-transition-viewer.html

            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 800, $FlyDirection: 1, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["R"] = { $Duration: 800, $FlyDirection: 2, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["T"] = { $Duration: 800, $FlyDirection: 4, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["B"] = { $Duration: 800, $FlyDirection: 8, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["TL"] = { $Duration: 800, $FlyDirection: 5, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["TR"] = { $Duration: 800, $FlyDirection: 6, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["BL"] = { $Duration: 800, $FlyDirection: 9, $Easing: $JssorEasing$.$EaseInCubic };
            _CaptionTransitions["BR"] = { $Duration: 800, $FlyDirection: 10, $Easing: $JssorEasing$.$EaseInCubic };

            _CaptionTransitions["CLIP|LR"] = { $Duration: 600, $Clip: 3, $Easing: $JssorEasing$.$EaseInOutCubic };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 600, $Clip: 1, $Move: true, $Easing: $JssorEasing$.$EaseInOutCubic };
            _CaptionTransitions["LISTH|L"] = { $Duration: 1000, $Clip: 1, $FlyDirection: 1, $Easing: $JssorEasing$.$EaseInOutCubic, $ScaleHorizontal: 0.8, $ScaleClip: 0.8, $During: { $Left: [0.4, 0.6], $Clip: [0, 0.4]} };
            _CaptionTransitions["WAVE|L"] = { $Duration: 1300, $FlyDirection: 5, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $ScaleVertical: 0.3, $Round: { $Top: 2.5} };
            _CaptionTransitions["JUMPDN|R"] = { $Duration: 1000, $FlyDirection: 6, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutJump }, $ScaleHorizontal: 0.6, $ScaleVertical: 0.4, $Round: { $Top: 1.5} };
            _CaptionTransitions["DDG|TR"] = { $Duration: 1200, $Clip: 15, $FlyDirection: 6, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseSwing }, $ScaleHorizontal: 0.3, $ScaleVertical: 0.3, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 0.8} };
            _CaptionTransitions["DODGEDANCE|L"] = { $Duration: 1200, $Clip: 15, $FlyDirection: 9, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Clip: $JssorEasing$.$EaseOutQuad }, $ScaleHorizontal: 0.3, $ScaleVertical: 0.3, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 2.5} };
            _CaptionTransitions["FLUTTER|L"] = { $Duration: 600, $FlyDirection: 9, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutWave, $Opacity: $JssorEasing$.$EaseLinear }, $ScaleHorizontal: 0.2, $ScaleVertical: 0.1, $Opacity: 2, $Round: { $Top: 1.3} };
            _CaptionTransitions["TORTUOUS|VB"] = { $Duration: 1200, $Clip: 15, $FlyDirection: 8, $Easing: { $Top: $JssorEasing$.$EaseOutWave, $Clip: $JssorEasing$.$EaseOutCubic }, $ScaleVertical: 0.2, $During: { $Top: [0, 0.7] }, $Round: { $Top: 1.3} };
            _CaptionTransitions["FADE"] = { $Duration: 600, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 600, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 600, $Zoom: 11, $Rotate: true, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 600, $Zoom: 11, $Rotate: true, $FlyDirection: 10, $Easing: { $Left: $JssorEasing$.$EaseInExpo, $Top: $JssorEasing$.$EaseInExpo, $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $ScaleHorizontal: 0.6, $ScaleVertical: 0.6, $Opacity: 2, $Round: { $Rotate: 0.8} };

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
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

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 3,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $Lanes: 2,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10                                    //[Optional] Vertical space between each item in pixel, default value is 0
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 0,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $DisableDrag: true,                             //[Optional] Disable drag or not, default value is false
                    $Orientation: 2                                 //[Optional] Orientation to arrange thumbnails, 1 horizental, 2 vertical, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$SetScaleWidth(Math.min(parentWidth, 600));
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
    <div id="slider1_container" style="position: relative; width: 600px;
        height: 300px;">

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
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
            <div>
                <img u=image src="imag/culture/a5.jpg" />
                <div u="thumb">Do you notice it Amhara weare styel clothe?</div>
                <div u="caption" t="L" style="position: absolute; top: 20px; left: 20px; width: 200px; height: 30px; color: #ffffff; font-size: 20px; line-height: 30px;">thera are differnace type ao clothe?</div>
                <div u="caption" t="CLIP|LR" style="position: absolute; top: 135px; left: 100px; width: 400px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">This is clothe name is sheret</div>
            </div>
            <div>
                <img u=image src="imag/culture/a36.jpg" />
                <div u="thumb">Do you know this photo?</div>
                <div u="caption" t="MCLIP|L" style="position: absolute; top: 105px; left: 100px; width: 400px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">This is 'house of Minlke II in south shawa ''Ankober" ' </div>
                <div u="caption" t="LISTH|L" style="position: absolute; top: 165px; left: 100px; width: 400px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">This is can be do men in diifernece matrail like wood shenbeko</div>
            </div>
            <div>
                <img u=image src="imag/culture/a24.jpg" />
                <div u="thumb"> Amhara coffee program </div>
                <div u="caption" t="WAVE|L" t2="T" style="position: absolute; top: 135px; left: 450px; width: 100px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;"> "Erkabote" ,"Fandsha" .</div>
                <div u="caption" t="WAVE|L" t2="T" d="-1150" style="position: absolute; top: 135px; left: 250px; width: 100px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;"></div>
                <div u="caption" t="WAVE|L" t2="T" d="-1150" style="position: absolute; top: 135px; left: 50px; width: 100px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">  </div>
            </div>
            <div>
                <img u=image src="imag/culture/a44.jpg" />
                <div u="thumb">Do you known this is kind of house in rural area?</div>
                <div u="caption" t="JUMPDN|R" t2="B" style="position: absolute; top: 135px; left: 50px; width: 100px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">Shanka mander</div>
                <div u="caption" t="JUMPDN|R" t2="B" d="-850" style="position: absolute; top: 135px; left: 250px; width: 100px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;"> </div>
                <div u="caption" t="JUMPDN|R" t2="B" d="-850" style="position: absolute; top: 135px; left: 450px; width: 100px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">people how justifed place</div>
            </div>
            <div>
                <img u=image src="imag/culture/a46.jpg" />
                <div u="thumb">Do you known this in historcal charch:?</div>
                <div u="caption" t="DDG|TR" style="position: absolute; top: 135px; left: 100px; width: 150px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">like Charch of Geshan Dabera Kabri . </div>
                <div u="caption" t="DODGEDANCE|L" style="position: absolute; top: 135px; left: 300px; width: 250px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">.</div>
            </div>
            <div>
                <img u=image src="imag/culture/a8.jpg" />
                <div u="thumb">Do you known this ?</div>
                <div u="caption" t="FLUTTER|L" style="position: absolute; top: 135px; left: 100px; width: 150px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">"Chase Abay"</div>
                <div u="caption" t="TORTUOUS|VB" style="position: absolute; top: 135px; left: 300px; width: 250px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">On Nile Revar</div>
            </div>
            <div>
                <img u=image src="imag/culture/a17.jpg" />
                <div u="thumb">Do you know this shop? <a href="../development/tool-slideshow-transition-viewer.html"></a>?</div>
                <div u="caption" t="FADE" style="position: absolute; top: 135px; left: 100px; width: 150px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;">this is cultural shops</div>
                <div u="caption" t="ZMF|10" style="position: absolute; top: 135px; left: 300px; width: 250px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;"></div>
            </div>
            <div>
                <img u=image src="imag/culture/a42.jpg" />
                <div u="thumb">Come to vist land of Beauty <a href="../development/tool-caption-transition-viewer.html"> </a>?</div>
                <div u="caption" t="RTT|10" style="position: absolute; top: 135px; left: 100px; width: 150px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;"></div>
                <div u="caption" t="RTTL|BR" style="position: absolute; top: 135px; left: 300px; width: 250px; height: 30px; color: #ffffff; font-size: 26px; line-height: 30px; text-align: center;"></div>
            </div>
        </div>

        <!-- ThumbnailNavigator Skin Begin -->
        <div u="thumbnavigator" class="slider1-T" style="position: absolute; bottom: 0px; left: 0px; height:60px; width:600px;">
            <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                background-color: #ffffff; top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides">
                <div u="prototype" style="POSITION: absolute; WIDTH: 600px; HEIGHT: 60px; TOP: 0; LEFT: 0;">
                    <thumbnailtemplate style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#000; line-height: 60px; font-size:20px; padding-left:10px;"></thumbnailtemplate>
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
        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
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
			<span class="author"><a href=""><font color="red">Developers:tour and travel guiding team &copy;&nbsp;2017&nbsp;Copy Right Reserved 2009 e.c </font></a></span>
			<!-- <a href="mailto:zedzedn@yahoo.com">zedzedn@yahoo.com</a> -->
			
		</div>
		<!-- END Footer -->
	
	
</body>
</html>