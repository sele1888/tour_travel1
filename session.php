<?php
//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) {
		 header("location: index1.php");
		exit();
	}
        $id_session=$_SESSION['id'];

?>