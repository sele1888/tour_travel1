<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	include('connect.php');
	$message_id=$_GET['id'];
	$result = mysql_query("SELECT * FROM message where  message_id='$message_id'");
		while($row = mysql_fetch_array($result))
			{
				$type=$row['name'];
				$rate=$row['email'];
				$subject=$row['subject'];
				$description=$row['message'];
			}
?>
<form action="update_message.php" method="post">
	<input type="hidden" name="message_id" value="<?php echo $message_id=$_GET['id'] ?>">
Name<br><br><input type="text" name="name" value="<?php echo $type ?>" class="ed"><br>
Email:<br><input type="text" name="email" value="<?php echo $rate ?>" class="ed"><br>
Subject:<br><input type="text" name="subject" value="<?php echo $subject ?>" class="ed"><br>
Message:<br><textarea name="message" class="ed"><?php echo $description ?></textarea><br>
	<input type="submit" value="Edit" id="button1">
</form>