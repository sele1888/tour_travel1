<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('connect.php');
if($_GET['id'])
{
$name=$_GET['id'];
 $sql = "delete from message where massage_id='$id'";
 mysql_query( $sql);
}

?>