
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tour and travel guiding system</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
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
</head>

<body>
<?php include('session.php'); ?>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
      <div style="position:relative;">
  	<!--LOGO-->
	<div class="grid_8" id="logo">Operator Pages</div>
    <div class="grid_8">
<!-- USER TOOLS START -->
<div id="user_tools"><span><a   href="logout2.php">Logout</a></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
	<li class="item first" id="one"><a href="ohotel.php" class="main current"><span class="outer"><span class="inner dashboard"> hotel reserve</span></span></a></li>
		<li class="item first" id="one"><a href="ocar.php" class="main"><span class="outer"><span class="inner dashboard"> car reserve</span></span></a></li>
		<li class="item last" id="eight"><a href="otsite.php" class="main"><span class="outer"><span class="inner settings">site reserve</span></span></a></li>
		<li class="item first" id="one"><a href="oper.php" class="main"><span class="outer"><span class="inner dashboard"> Reservation  </span></span></a></li> 
		<li class="item first" id="one"><a href="oschedule.php" class="main "><span class="outer"><span class="inner dashboard"> Updeta Reserve</span></span></a></li>      
    </ul>
</div>
<!-- MENU END -->
</div>


<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">view hotel </h1>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
		<div class="portlet">
			<div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> 
			<label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" />
			</div>
			<div class="portlet-content nopadding">
			<form action="" method="post">
			
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> hotelname</th>
								<th> roomno </th>
								<th> category </th>
								<th>price </th>
								<th> status </th>
								<th>start </th>
								<th> end</th>
								<th> image </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../unity/connect.php');
							$result = mysql_query("SELECT * FROM hotel");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['hotelname'].'</td>';
									echo '<td><div align="left">'.$row['roomno'].'</div></td>';
									echo '<td><div align="left">'.$row['category'].'</div></td>';
									echo '<td><div align="left">'.$row['price'].'</div></td>';
									echo '<td><div align="left">'.$row['status'].'</div></td>';
									echo '<td><div align="left">'.$row['start'].'</div></td>';
									echo '<td><div align="left">'.$row['end'].'</div></td>';
									
									echo '<td><a rel="facebox" href="#" id='.$row['id'].'"><img src="../unity/img/products/'.$row['img'].'" width="50" height="50"></a></td>';
									echo '<td><div align="center"><a rel="facebox" href="#" hotei_id="'.$row['id'].'"></a> | <a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete"></a></div></td>';
									
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
			</form>
			</div>
		</div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

</div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Developers:tour and travel guiding team &copy;&nbsp;2017&nbsp;Copy Right Reserved 2009 E.C </div>
<!-- FOOTER END -->
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deletehotel.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>
