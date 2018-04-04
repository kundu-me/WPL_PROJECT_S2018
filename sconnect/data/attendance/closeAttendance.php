<?php

/**
  *
  * @author: Nirmallya Kundu <nxkundu@gmail.com>
  * @page: Attendance Data
  * @description: This page fetch the the Data For Attendance
  *
  */

	/* coursehash: coursehash */

  	include('../connection_open.php');

 	session_start();

	//Validation error flag
	$errflag = false;
 
	//Get the POST values
	$userhash = $_SESSION['userhash'];
	$coursehash = $_POST['coursehash'];
	$attendancehash = $_POST['attendancehash'];
	
	//Input Validations
	if($userhash == '' || $coursehash == '' || $attendancehash == '') {
		$errmsg_arr[] = 'Please fill all mandatory fields';
		$errflag = true;
	}
 
	
	//If there are input validations, redirect back to the login form
	if($errflag) {

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Please fill all mandatory fields";
		echo json_encode($returnObject);

		exit();
	}

	$userhash_escape = mysqli_real_escape_string($sql_connection, $userhash);

 	$query = "UPDATE sconnect_attendance
 			  SET status = 'CLOSE'
 			  WHERE coursehash = '$coursehash' and attendancehash = '$attendancehash'";


	if (mysqli_query($sql_connection, $query)) {
    	
    	$returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "OK";
		echo json_encode($returnObject);

    	exit();
	} 
	else {

   		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Database Error: " . mysqli_error($sql_connection);
		echo json_encode($returnObject);

   		exit();
	}
	
?>

<?php include("../data/connection_close.php") ?>