<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('connect.php');
if($_POST['id'])
{
$id=$_POST['id'];
 $sql = "delete from tourist_site where id='$id'";
 mysql_query( $sql);
}

?>