<?php

/**
  *
  * @author: Nirmallya Kundu <nxkundu@gmail.com>
  * @page: Attendance Data
  * @description: This page fetch the the Data For Attendance
  *
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

 	$query = "SELECT coursehash, course_code, course_name, session, year
 			  FROM sconnect_courses_offered 
 			  WHERE userhash = '$userhash_escape' and status='OPEN';";
 			  
	$result = mysqli_query ($sql_connection, $query);

	if($result->num_rows == 0) {
		
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "No Courses Offered";
		$returnObject->optionList = $optionList;
		$returnObject->courseData = $courseData;
		echo json_encode($returnObject);

		exit();
	}
	else {

		while($row = $result->fetch_assoc()) {
	        
	        $courseDetails = [];
	        $courseDetails['coursehash'] = $row['coursehash'];
	        $courseDetails['course_code'] = $row['course_code'];
	        $courseDetails['course_name'] = $row['course_name'];
	        $courseDetails['session'] = $row['session'];
	        $courseDetails['year'] = $row['year'];

	        $courseData[$row['coursehash']] = $courseDetails;
	        $optionList[$row['coursehash']] =  $row['course_code'] . " - " . $row['course_name'];
	    }

	    $returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "OK";
		$returnObject->optionList = $optionList;
		$returnObject->courseData = $courseData;
		echo json_encode($returnObject);

	    exit();
	}
	
?>

<?php include("../data/connection_close.php") ?>