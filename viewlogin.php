<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=50"; 
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
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content">
<?php
include('connect.php');
		$id=$_GET['history_id'];
		$result = mysql_query("SELECT * FROM history WHERE date='$id'");
		while($row = mysql_fetch_array($result))
			{
			    echo '  Login to the system <br><br>';
			    echo '  full Name: '.$row['history_id'].'<br>';
				echo ' Category: '.$row['date'].'<br>';
				echo 'Email: '.$row['data'].'<br>';
				echo ' Visiting  site: '.$row['action'].'<br>';
				echo ' Visiting Day: '.$row['user'].'<br>';
				}
	?> 

	<?php
		
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM history WHERE date='$id'");
		while($row = mysql_fetch_array($result))
			{
				echo 'tourist address:'.$row['address'].' /'.$row['city'].'<br>';
				echo ' tourist contact: '.$row['contact'].'<br>';
				echo 'tourist register date:'.$row['startdate'].'<br>';
				echo 'tourist visting day:'.$row['year'].' /'.$row['month'].'<br>';
				echo '</tr>';
			}
			
	?> 
	<?php
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM cars WHERE rate='$id'");
		while($row = mysql_fetch_array($result))
			{
				echo '<tr class="record">';
				echo '<td>Tourist car Level rate</td>';
				echo '<td>'.$row['rate'].'</td>';
				echo '</tr>';
			}
	?> 

</div>