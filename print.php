<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:434px;
margin:0 auto;
}
</style>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">
<img  src="images/address_icon.png" width="100" height="100" style="float:left;"><strong>DESSIE TOUR GUIDE AGENCY IN AMHARA REGION/DESSIE/ </strong><br />
Dessie <br />
Email Us:Email:   dessie@DS.com<br />
Contact +251-033-111596 /
+251-033-111214 <br>
<br /><br>
<?php
include('connect.php');
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM orders WHERE confirmation='$id'");
		while($row = mysql_fetch_array($result))
			{
				
			
	?> 
<table cellpadding="5" cellspacing="0" id="resultTable" border="1" width="100%">
		<tr>
<td> <strong>number</strong> </td>
<td> <strong>Tourist full name</strong> </td>
<td> <strong> Tourist email</strong> </td>
<td> <strong>tourist site name</strong> </td>
<td> <strong> Site visit price</strong> </td>
<td> <strong>hotel reserv </strong> </td>
<td> <strong> Hotel reserv room</strong> </td>
<td> <strong>Catagory</strong> </td>
<td> <strong> Room  Price</strong> </td>
<td> <strong> reserv car Lavel</strong> </td>
<td> <strong> reserv car side</strong> </td>
<td> <strong>reserv car per day Price</strong> </td>
<td> <strong> visiting date</strong> </td>
<td> <strong> visit day</strong> </td>
		</tr>
	<?php	
		$id=$_GET['id'];
		$results = mysql_query("SELECT * FROM orders WHERE confirmation='$id'");
		while($rows = mysql_fetch_array($results))
			{
				echo '<tr class="record">';
					echo '<td>'.$rows['id'].'</td>';
				echo '<td>'.$rows['firstname'].'</td>';
				echo '<td>'.$rows['email'].'</td>';
				echo '<td>'.$rows['name'].'</td>';
				echo '<td>'.$rows['total'].'</td>';
				echo '<td>'.$rows['hotelname'].'</td>';
                 echo '<td>'.$rows['roomno'].'</td>';
				echo '<td>'.$rows['category'].'</td>';
				echo '<td>'.$rows['rate'].'</td>';
				echo '<td>'.$rows['carLevel'].'</td>';
				echo '<td>'.$rows['rate'].'</td>';
				echo '<td>'.$rows['carSideNumber'].'</td>';
				echo '<td>'.$rows['year'].'</td>';
				echo '<td>'.$rows['touristsite'].'</td>';
				echo '</tr>';
			}
	?>

	<?php
	}
	?>
</table>

</div>
<a  href="index.php">Back</a>