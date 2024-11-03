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
        $id_get=$_GET['user_id'];
		$result=mysql_query("select * from users where user_id='$id_get'")or die(mysql_error());
		$row=mysql_fetch_array($result);
			{

$first_name=$row['first_name'];
$last_name=$row['last_name'];
$user_name=$row['user_name'];
$password=$row['password'];
$email=$row['email'];
$ability=$row['ability'];
$user_type=$row['user_type'];

}
?>

	<form action="update_user.php" method="POST" >	
     <input type="hidden" name="id_get" class="id_get" value="<?php echo $id_get;?>">
	First Name:<input type="text" name="first_name"  value="<?php echo $row['first_name']; ?>" class="ed">
   Last Name: <input type="text" name="last_name"  value="<?php echo $row['last_name']; ?>" class="ed">
   User Name:<input type="text" name="user_name"  value="<?php echo $row['user_name']; ?>" class="ed">
   Password:<input type="text" name="password" value="<?php echo $row['password']; ?>"class="ed" ><br />
   
   Email:<input type="email" name="email"  value="<?php echo $row['email']; ?>" class="ed"><br />
  Ability:<input type="text" name="ability"  value="<?php echo $row['ability']; ?>" class="ed"><br />
 User Type: <select name="user_type" class="user_type" id="span900">
	<option><?php echo $row['user_type']; ?></option>
	<option>.........</option>
	<option>tourist</option>
	<option>operator</option>
	<option>Admin</option>
	</select><br />
	
<input type="submit" value="Edit" id="button1">
</form>

