<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('connect.php');
if($_GET['schedule_id'])
{
$schedule_id=$_GET['schedule_id'];
 $sql = "delete from schedule where schedule_id='$schedule_id'";
 mysql_query( $sql);
}

?>