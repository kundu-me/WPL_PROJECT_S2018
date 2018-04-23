<?php

	/*
	  	@author: Abhishek Datta <abhi06548@yahoo.com>
        @author: Koulick Sankar Paul <koulick89@gmail.com>
        @page: Student-Give Attendance UI
        @description: This page handles the daily attendance given by a student
	*/
  	include('../connection_open.php');

 	session_start();

	//Validation error flag
	$errflag = false;
 
	//Get the SESSION values
	$userhash = $_SESSION['userhash'];
	$studentEmail = $_SESSION['email'];

	//Get the POST values
	$coursehash = $_POST['coursehash'];
	$otp = $_POST['OTP'];
	$currentTime = $_POST['currentTime'];

	//Input Validations
	if($userhash == '') {
		$errmsg_arr[] = 'userhash missing';
		$errflag = true;
	}
 
 	$optionList[''] = "Select";
	$courseData = [];
	
	//If there are input validations, redirect back to the login form
	if($errflag) {

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "userhash missing";
		$returnObject->optionList = $optionList;
		$returnObject->courseData = $courseData;
		echo json_encode($returnObject);

		exit();
	}

	$userhash_escape = mysqli_real_escape_string($sql_connection, $userhash);
 			  
 	$query = "SELECT *
 			  FROM sconnect_attendance 
 			  WHERE status='OPEN' and coursehash='$coursehash' and OTP='$otp'";

	$result = mysqli_query ($sql_connection, $query);

	if($result->num_rows == 0) {
		
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Not a correct OTP";
		echo json_encode($returnObject);

		exit();
	}
	else {

		while($row = $result->fetch_assoc()) {
			$attendancehash = $row['attendancehash'];
			
			//check if the same student wants to give attendance again
			$query = "SELECT *
 			  			FROM sconnect_attendance_realtime 
 			  			WHERE student_id='$studentEmail'";

 			$result = mysqli_query ($sql_connection, $query);

 			if($result->num_rows == 0) { //the student has not yet given the attendance 
		
				$query = "INSERT INTO sconnect_attendance_realtime VALUES(NULL,'$attendancehash','$studentEmail','$currentTime')";
			}
			else { //the student wants to update his attendance time
				$query = "UPDATE sconnect_attendance_realtime
							SET time_24hr_hh_mm = '$currentTime'
							WHERE student_id = '$studentEmail'";
			}
			if (mysqli_query ($sql_connection, $query)) {

				$returnObject = new stdClass();
				$returnObject->success = "true";
				$returnObject->message = "OK. Inserted in the realtime attendance table correctly";
				$returnObject->optionList = $optionList;
				$returnObject->courseData = $courseData;
				echo json_encode($returnObject);

			    exit();
			}
			else {
				$returnObject = new stdClass();
				$returnObject->success = "false";
				$returnObject->message = "Not inserted in the realtime attendance table";
				echo json_encode($returnObject);

				exit();
			}		
		}	    
	}	
?>

<?php include("../data/connection_close.php") ?>