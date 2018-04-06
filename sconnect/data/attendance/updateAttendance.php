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
	$attendancehash = $_POST['attendancehash'];
	
	//Input Validations
	if($userhash == '' || $attendancehash == '') {
		$errmsg_arr[] = 'Incomplete Data';
		$errflag = true;
	}
 
 	$tableRows = array("<tr><td>Student</td><td>Time</td></tr>");
	
	//If there are input validations, redirect back to the login form
	if($errflag) {

		array_push($tableRows, "<tr><td colspan='2'>No Student</td></tr>");
		echo json_encode($tableRows);

		exit();
	}

	$userhash_escape = mysqli_real_escape_string($sql_connection, $userhash);

 	$query = "SELECT student_id, time_24hr_hh_mm
 			  FROM sconnect_attendance_realtime 
 			  WHERE attendancehash = '$attendancehash'";
 			  
	$result = mysqli_query ($sql_connection, $query);

	if($result->num_rows == 0) {
		
		array_push($tableRows, "<tr><td colspan='2'>No Student</td></tr>");
		echo json_encode($tableRows);

		exit();
	}
	else {

		while($row = $result->fetch_assoc()) {
	        
	        array_push($tableRows, "<tr><td>" . $row['student_id'] . "</td><td>" . $row['time_24hr_hh_mm'] . "</td></tr>");
	        
	    }

		echo json_encode($tableRows);

	    exit();
	}
	
?>

<?php include("../data/connection_close.php") ?>