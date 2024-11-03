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
<form action="execeditstatus.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id=$_GET['id'] ?>">
	category:<br>
	<select name="category" class="ed">
	<option>Single</option>
	<option>double</option>
	<option>Traple</option>
	<option>Fourth</option>
	</select>
	<br>
	<input type="submit" value="Edit" id="button1">
</form>