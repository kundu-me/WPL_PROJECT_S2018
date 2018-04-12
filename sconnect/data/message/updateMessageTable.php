<?php
	/*
	  	@author: Abhishek Datta <abhi06548@yahoo.com>
		@page: Message one-on-one UI for all users
		@description: This module updates the message table for message-status when an unread message is clicked.
	*/
  	include('../connection_open.php');
 	session_start();
	//Validation error flag
	$errflag = false;
 
	//Get the POST values
	$messageid = $_POST['messageid'];
	
	//Input Validations
	if($messageid == '') {
		$errmsg_arr[] = 'messageid missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "MessageId missing";
		echo json_encode($returnObject);
		exit();
	}
	$messageid_escape = mysqli_real_escape_string($sql_connection, $messageid);
 			  
	$query = "UPDATE sconnect_message SET status = 'Read' WHERE message_id = '$messageid_escape'";
	
	if (mysqli_query ($sql_connection, $query)) {
		$returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "OK. Updated the message table for unread status change to read";
		echo json_encode($returnObject);
		exit();
	}
	else {
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Not updated message table for unread status";
		echo json_encode($returnObject);
		exit();
	}
?>

<?php include("../connection_close.php") ?>