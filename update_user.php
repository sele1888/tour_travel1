<?php 
include('connect.php');

$id_get=$_POST['Id_get'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$email=$_POST['email'];
$ability=$_POST['ability'];
$user_type=$_POST['user_type'];

mysql_query("update users set first_name='$first_name',last_name='$last_name',user_name='$user_name',password='$password',email='$email', ability='$ability', user_type='$user_type' where user_id='$id_get'");
header('location:user_account.php');
?>