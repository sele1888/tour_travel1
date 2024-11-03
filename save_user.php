<?php 
include('connect.php');
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$email=$_POST['email'];
$ability=$_POST['ability'];
$user_type=$_POST['user_type'];
$Question=$_POST['Question'];
$answer=$_POST['answer'];


if(is_numeric($first_name) || is_numeric($last_name) || is_numeric($user_name))

{ ?>
<script type="text/javascript">
alert('First Name, Last Name And User Name information must be character strings');
window.location="user_account.php";
</script>

<?php
}
else 
{
mysql_query("insert into users (first_name, last_name,user_name,password, email, ability, user_type, Question ,answer)
VALUES ('$first_name','$last_name','$user_name','$password','$email' ,'$ability', '$user_type','$Question','$answer')")or die(mysql_error());

}


$logout_query=mysql_query("select * from users where user_id=$id_get");
$row=mysql_fetch_array($logout_query);
$type=$row['user_type'];


mysql_query("insert into history (date,action,data,user)
VALUES (NOW(),'Add User','$first_name&nbsp;$last_name','$type')") or die(mysql_error());
?>
<script type="text/javascript">
alert('user account sucssfully Created!');
window.location="user_account.php";
</script>

