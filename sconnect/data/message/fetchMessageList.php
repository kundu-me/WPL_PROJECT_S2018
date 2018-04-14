<?php
	/*
	  	@author: Abhishek Datta <abhi06548@yahoo.com>
		@page: Message one-on-one UI for all users
		@description: This module fetches the message list for a user when message-box opens.
					  It handles the total list of sent/receipt messages
	*/
  	include('../connection_open.php');
 	session_start();
	//Validation error flag
	$errflag = false;
 
	//Get the POST values
	$userhash = $_SESSION['userhash'];
	
	//Input Validations
	if($userhash == '') {
		$errmsg_arr[] = 'userhash missing';
		$errflag = true;
	}
 
 	$messageList = array("");
	$messageData = [];
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "userhash missing";
		array_push($messageList, "<tr id='msgEach'><td colspan='2'>No message-user not found</td></tr>");
		$returnObject->messageList = $messageList;
		$returnObject->messageData = $messageData;
		echo json_encode($returnObject);
		exit();
	}
	$userhash_escape = mysqli_real_escape_string($sql_connection, $userhash);
 	$query = "SELECT  sm.message_id, sm.userhash_to, sm.userhash_from, sm.subject, sm.message, sm.date_time, sm.status, u1.email as to_mail, u2.email as from_mail
			  FROM sconnect_message as sm 
			  LEFT JOIN sconnect_user as u1 on u1.userhash = sm.userhash_to
			  INNER JOIN sconnect_user as u2 on u2.userhash = sm.userhash_from
			  WHERE sm.userhash_to = '$userhash_escape' or sm.userhash_from ='$userhash_escape' 
			  order by sm.date_time desc";
 			  
	$result = mysqli_query ($sql_connection, $query);
	if($result->num_rows == 0) {
		
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "No Messages retrieved";
		array_push($messageList, "<tr id='msgEach'><td colspan='2'>No message</td></tr>");
		$returnObject->messageList = $messageList;
		$returnObject->messageData = $messageData;
		echo json_encode($returnObject);
		exit();
	}
	else {
		while($row = $result->fetch_assoc()) {

	        $messageDetails = [];
	        $messageDetails['userhash_to'] = $row['userhash_to'];
	        $messageDetails['userhash_from'] = $row['userhash_from'];
	        $messageDetails['subject'] = $row['subject'];
	        $messageDetails['message'] = $row['message'];
	        $messageDetails['status'] = $row['status'];
			$messageDetails['to_mail'] = $row['to_mail'];
			$messageDetails['from_mail'] = $row['from_mail'];
			$messageData[$row['message_id']] = $messageDetails;
			
			//Check for incoming or outgoing message based on userhash_to/from //
			
			if ($messageDetails['userhash_from'] == $userhash) {
				array_push($messageList, "<tr id='msgEach'><td class='field1Size'><a href='#'>" . $row['date_time'] . "</a></td><td class='field2Size'><span id='msgicon'><i class='fa fa-caret-square-o-up fa-lg' title='Outgoing msg'></i></span><a href='#'>"
					. $row['subject'] . "</a><span id='msgindex'>" . $row['message_id'] . "</span></td></tr>");
			}
			else {
				
				if($messageDetails['status'] == "Unread"){  //Check for unread messages to be shown bold in mail-list //
					array_push($messageList, "<tr id='msgEach'><td class='field1Size'><a href='#' class='messageBold'>" . $row['date_time'] . "</a></td><td class='field2Size'><span id='msgicon'><i class='fa fa-caret-square-o-down fa-lg' title='Incoming msg'></i></span><a href='#' class='messageBold'>"
						. $row['subject'] . "</a><span id='msgindex'>" . $row['message_id'] . "</span></td></tr>");
				}
				else {
					array_push($messageList, "<tr id='msgEach'><td class='field1Size'><a href='#'>" . $row['date_time'] . "</a></td><td class='field2Size'><span id='msgicon'><i class='fa fa-caret-square-o-down fa-lg' title='Incoming msg'></i></span><a href='#'>"
						. $row['subject'] . "</a><span id='msgindex'>" . $row['message_id'] . "</span></td></tr>");
				}
			}
			

	    }
	    $returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "OK";
		$returnObject->messageList = $messageList;
		$returnObject->messageData = $messageData;
		echo json_encode($returnObject);
	    exit();
	}
	
?>

<?php include("../connection_close.php") ?>