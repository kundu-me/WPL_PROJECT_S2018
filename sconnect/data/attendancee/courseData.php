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
 			  WHERE status='OPEN'
              and coursehash IN (Select coursehash from sconnect_courses_enrolled where userhash = '$userhash_escape')";
 			  
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