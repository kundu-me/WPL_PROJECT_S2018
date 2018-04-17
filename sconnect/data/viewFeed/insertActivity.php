<?php

	/*
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Feed
    @description: This is the main landing page when the user login
                  Need to Update
	*/

    include('../connection_open.php');

 	session_start();

 	//Validation error flag
	$errflag = false;
 
	//Get the SESSION values
	$userhash = $_SESSION['userhash'];
	$feedhash = $_POST['feedhash'];

	//Get the POST values
	$islikes = $_POST['islikes'];

	$activityhash = uniqid();

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

	$userhash_from_escape = mysqli_real_escape_string($sql_connection, $userhash);
	$feedhash_from_escape = mysqli_real_escape_string($sql_connection, $feedhash);

	$likes = 0;
	$dislikes = 0;
	if($islikes == "true") {
		$likes = 1;
	}
	else {
		$dislikes = 1;
	}

	$query = "INSERT INTO sconnect_feed_activity VALUES('$activityhash','$feedhash', '$userhash', $likes, $dislikes)";

	if (mysqli_query($sql_connection, $query)) {
    	
    	$returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "Successfully inserted the data in the table sconnect_feed";	
		echo json_encode($returnObject);

    	exit();
	} 
	else {

   		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Error in MySQL Query: " . mysqli_error($sql_connection);
		echo json_encode($returnObject);

   		exit();
	}

	include('../connection_close.php');
?>