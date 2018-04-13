<?php

	/*
    @author: Koulick Sankar Paul <koulick89@gmail.com> 
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
	$userhash_from = $_SESSION['userhash'];
	$university_domain = $_SESSION['university_domain'];

	//Get the POST values
	$text_data = $_POST['textPost'];
	$date_time_yyyy_mm_dd_hh_mm = $_POST['currentDateTime'];
	/*$photo_path = 
	$video_path = 
	*/

	$feedhash = uniqid();
	$userhash_to = "Timeline";
	$privacy = "Public";
	$status = "0"; //0 - OK, 1 - Deleted

	//Input Validations
	if($userhash_from == '') {
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

	$userhash_from_escape = mysqli_real_escape_string($sql_connection, $userhash_from);

	$query = "INSERT INTO sconnect_feed VALUES('$feedhash','$text_data',NULL,NULL,'$privacy','$university_domain','$userhash_to','$userhash_from','$date_time_yyyy_mm_dd_hh_mm','$status')";

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