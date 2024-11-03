<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
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
Order Date: 
<?php
 $Today=date('y:m:d');
$new=date('l, F d, Y',strtotime($Today));
echo $new; ?>

<?php
include('connect.php');
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM orders WHERE id='$id'");
		while($row = mysql_fetch_array($result))
			{
				echo $row['total'];
			}
	?> 
<table cellpadding="1" cellspacing="1" id="resultTable">
	<thead>
		<tr>
			<th  style="border-left: 1px solid #C1DAD7">Site Name </th>
			<th> visiting day  </th>
			<th>  tourost site price </th>
			<th> tourist name  </th>
			<th> hotel  </th>
			<th> car </th>
		</tr>
	</thead>
	<tbody>
	<?php
		
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM orders WHERE id='$id'");
		while($row = mysql_fetch_array($result))
			{
				echo '<tr class="record">';
				echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['name'].'</td>';
				echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['touristsite'].'</td>';   echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['total'].'</td>';
				echo '<td>'.$row['firstname'].' | <a rel="facebox" href="design.php?id='.$row['id'].'">View Design</a></td>';
				echo '<td>'.$row['hotelname'].' |'.$row['roomno'].'</td>';
				echo '<td>'.$row['carLevel'].' |'.$row['carSideNumber'].'</td>';
				echo '</tr>';
			}
	?> 
	<?php
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM hotel WHERE hotelname='Aligida Hotel'");
		while($row = mysql_fetch_array($result))
			{
				echo '<tr class="record">';
				echo '<td style="border-left: 1px solid #C1DAD7;">Total hotel Payable</td>';
				echo '<td>'.$row['price'].'</td>';
				echo '</tr>';
			}
	?> 
	<?php
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM cars WHERE carLevel='first'");
		while($row = mysql_fetch_array($result))
			{
				echo '<tr class="record">';
				echo '<td style="border-left: 1px solid #C1DAD7;">Total car Payable</td>';
				echo '<td>'.$row['rate'].'</td>';
				echo '</tr>';
			}
	?>
	
	<?php
		$id=$_GET['id'];
		$result = mysql_query("SELECT * FROM operator WHERE Username='operator'");
		while($row = mysql_fetch_array($result))
			{
				echo '<tr class="record">';
				echo '<td style="border-left: 1px solid #C1DAD7;">Operator name</td>';
				echo '<td>'.$row['name'].'</td>';
				echo '</tr>';
			}
	?>
	<?php
		mysql_query("SELECT SUM(total) FROM orders");
		
			{
				echo '<tr class="record">';
				echo '<td style="border-left: 1px solid #C1DAD7;">total site price</td>';
				echo '<td>'.$row['total'].'</td>';
				echo '</tr>';
			}
	?>
	</tbody>
</table>