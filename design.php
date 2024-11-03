<?php
include('connect.php');
$id=$_GET['id'];
$result = mysql_query("SELECT * FROM orders WHERE id='$id'");
while($row = mysql_fetch_array($result))
	{
		echo '<img src="../home/'.$row['design'].'"><br>';
		echo '<a href="../home/'.$row['design'].'">download</a>';
	}

?>