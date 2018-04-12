<?php
	/*
	  	@author: Abhishek Datta <abhi06548@yahoo.com>
		@page: Message one-on-one UI for all users
		@description: This module inserts new message into database for newly composed message.
	*/
  	include('../connection_open.php');
 	session_start();
	//Validation error flag
	$errflag = false;
 
	//Get the SESSION values
	//$userhash_from = $_SESSION['userhash'];
	$userhash_from = '5ac6a94271639';

	//Get the POST values
	$mailTo = $_POST['mailTo'];
	$subject = $_POST['mailSub'];
	$message = $_POST['mailTxt'];
	$date_time = $_POST['currentDateTime'];
	
	//Input Validations
	if($userhash_from == '') {
		$errmsg_arr[] = 'userhash_from missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "userhash_from missing";
		echo json_encode($returnObject);
		exit();
	}
	
	$mailTo_escape = mysqli_real_escape_string($sql_connection, $mailTo);
 
 	$query = "SELECT userhash FROM sconnect_user WHERE email='$mailTo_escape'"; //get userhash_to from user_email_to from user table
	
	$result = mysqli_query ($sql_connection, $query);
	if($result->num_rows == 0) {
		
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "userhash_to missing";
		echo json_encode($returnObject);
		exit();
	}
	else {
		while($row = $result->fetch_assoc()) {
			$userhash_to = $row['userhash'];	
			$userhash_from_escape = mysqli_real_escape_string($sql_connection, $userhash_from);
			$subject_escape = mysqli_real_escape_string($sql_connection, $subject);
			$message_escape = mysqli_real_escape_string($sql_connection, $message);
			$date_time_escape = mysqli_real_escape_string($sql_connection, $date_time);

			$query = "INSERT INTO sconnect_message VALUES(NULL,'$userhash_to','$userhash_from_escape','$subject_escape','$message_escape','$date_time_escape','Unread')";
			
			if (mysqli_query ($sql_connection, $query)) {
					$returnObject = new stdClass();
					$returnObject->success = "true";
					$returnObject->message = "OK. Inserted in the message table correctly";
					echo json_encode($returnObject);
					exit();
				}
			else {
					$returnObject = new stdClass();
					$returnObject->success = "false";
					$returnObject->message = "Failed to insert in the message table";
					echo json_encode($returnObject);
					exit();
				}
		}	    	    
	}	
?>

<?php include("../connection_close.php") ?>