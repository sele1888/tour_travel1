<?php 
include('session.php');
include('dbcon.php');



$logout_query=mysql_query("select * from users where User_id=$id_session");
$row=mysql_fetch_array($logout_query);
$f=$row['first_name'];
$l=$row['last_name'];
$type=$row['user_type'];

session_start();
session_destroy();

mysql_query("INSERT INTO history (data,action,date,user)VALUES('$f $l', 'Logout', NOW(),'$type')")or die(mysql_error());

header('location:index3.php');
?>