<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../untiy/connect.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from cars where id='$id'";
 mysql_query( $sql);
}

?>