<?php include('date.php'); ?>
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
<form action="editschedule.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id=$_GET['id'] ?>">
	Visiting Date::<input type="text"  name="year" onclick="ds_sh(this);" placeholder="start of date" autocomplete="off"><br />
	
	Visiting Day:<input type="text"  name="touristsite" class="touristsite" id="span900" required="required">
	<br>
	<input type="submit" value="Edit" id="button1">
</form>