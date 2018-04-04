<?php

/**
  *
  * @author: Nirmallya Kundu <nxkundu@gmail.com>
  * @page: Attendance Data
  * @description: This page fetch the the Data For Attendance
  *
  */

	/* coursehash: coursehash,  OTP:OTP, lec:lec, timeout:timeout */

  	include('../connection_open.php');

 	session_start();

	//Validation error flag
	$errflag = false;
 
	//Get the POST values
	$userhash = $_SESSION['userhash'];
	$coursehash = $_POST['coursehash'];
	$OTP = $_POST['OTP'];
	$lec = $_POST['lec'];
	$timer = $_POST['timeout'];
	
	//Input Validations
	if($userhash == '' || $coursehash == '' || $OTP == '' || $lec == '' || $timer == '') {
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

	$attendancehash = uniqid();
	$date_mm = date("m");
	$date_dd = date("d");
	$date_yyyy = date("Y");
	$time_24hr_hh_mm = date("H_i");

 	$query = "INSERT INTO sconnect_attendance (attendancehash, coursehash, date_mm, 
 			  date_dd, date_yyyy, time_24hr_hh_mm, lecture, timeout_mm, status, OTP)
 			  VALUES ('$attendancehash', '$coursehash', '$date_mm', '$date_dd', 
 			  '$date_yyyy', '$time_24hr_hh_mm', '$lec', '$timer', 'OPEN', '$OTP')";


	if (mysqli_query($sql_connection, $query)) {
    	
    	$returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "OK";
		$returnObject->attendancehash = $attendancehash;
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