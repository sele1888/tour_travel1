<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('connect.php');
if($_GET['hotelid'])
{
$id=$_GET['hotelid'];
 $sql = "delete from hotel where hotelname='$hotelname'";
 mysql_query( $sql);
}

?>