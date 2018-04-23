<?php

/**
  *
  * @author: Nirmallya Kundu <nxkundu@gmail.com>
  * @page: Account Verification Data
  * @description: This page verifies the user with the email and OTP
  *
  */

	include('../connection_open.php');

	//Start session
	session_start();
 
	//Validation error flag
	$errflag = false;
 
	//Get the POST values
	$userhash = $_SESSION['userhash'];
	$coursehash = $_POST['coursehash'];

 
	//Input Validations
	if($userhash == '') {
		$errmsg_arr[] = 'userhash missing';
		$errflag = true;
	}
	if($coursehash == '') {
		$errmsg_arr[] = 'coursehash missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "ERROR Missing Data";
		echo json_encode($returnObject);

		exit();
	}
 ?>



 <?php

 	$query = "SELECT attendancehash, date_mm, date_dd, date_yyyy, lecture, student_id_time_list
 			  FROM sconnect_attendance
 			  WHERE coursehash = '$coursehash'
 			  AND status='CLOSE';";
	$result = mysqli_query ($sql_connection, $query);

	if($result == null || $result->num_rows == 0) {

		$returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "No Data exists!";
		echo json_encode($returnObject);

  		exit();
	}

	$attendanceData = [];
	$attendanceKeys = [];

	while($row = $result->fetch_assoc()) {
	        
		$student_id_time_list = $row['student_id_time_list'];
		$student_id_time_arr = explode(",", $student_id_time_list);

		foreach ($student_id_time_arr as $student_id_time) {
    		
    		$student_id_time_separated = explode("_",$student_id_time);
    		$student_id = $student_id_time_separated[0];
    		$student_time = $student_id_time_separated[1];

    		$attendanceKey = $row['date_mm'] . '/' . $row['date_dd'] . '/' . $row['date_yyyy'] . ' | ' . $row['lecture'];
    		$attendanceKeys[$row['attendancehash']] = $attendanceKey;

    		if(array_key_exists($student_id, $attendanceData)) {

    			
    		}
    		else {

    			$attendanceData[$student_id] = [];
    		}

    		$attendanceData[$student_id][$row['attendancehash']] = $student_time;
		}
	}

    $returnObject = new stdClass();
	$returnObject->success = "true";
	$returnObject->message =  "DATA";
	$returnObject->attendanceData =  $attendanceData;
	$returnObject->attendanceKeys =  $attendanceKeys;
	echo json_encode($returnObject);
	exit();

	include('../connection_close.php');
?>