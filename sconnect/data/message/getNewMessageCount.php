<?php
	/*
	  	@author: Abhishek Datta <abhi06548@yahoo.com>
		@page: Message one-on-one UI for all users
		@description: This module receives the unread message-count to display in left card of user feed.
	*/	

	//Validation error flag
	$errflag = false;
 
	//Get the POST values
	$userhash = $_SESSION['userhash'];
	
	//Input Validations
	if($userhash == '') {
		$errmsg_arr[] = 'userhash missing';
		$errflag = true;
	}

	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "userhash missing";
		echo json_encode($returnObject);
		exit();
	}
	$userhash_escape = mysqli_real_escape_string($sql_connection, $userhash);
 	$query = "SELECT  * FROM sconnect_message WHERE userhash_to = '$userhash_escape' and status ='Unread'";
 			  
	$result = mysqli_query ($sql_connection, $query);
	if($result->num_rows == 0) {
		
		$returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "No Unread Messages";
		$returnObject->count = "0";
		$getNewMessageCount = $returnObject->count;
	}
	else {
	    $returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "OK";
		$returnObject->count = $result->num_rows;
		$getNewMessageCount = $returnObject->count;
	}
	
?>