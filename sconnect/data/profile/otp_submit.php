<?php 

// session_start();
// $sql_servername = "localhost";
// $sql_username = "root";
// $sql_password = "";
// $sql_database = "sconnect";

// // Create connection
// $sql_connection = mysqli_connect($sql_servername, $sql_username, $sql_password, $sql_database);

include('../connection_open.php');


$session = $_POST['session'];
$CourseID = $_POST['CourseID'];
$otp = $_POST['otp_received'];
$user_hash = $_SESSION['userhash'];
$course_query = "SELECT OTP, course_name, year, coursehash FROM sconnect_courses_offered WHERE session = '$session' AND course_code = '$CourseID'";

$result = mysqli_query($sql_connection, $course_query);


while($row = mysqli_fetch_assoc($result)) {
	$courseDetails = [];
    $courseDetails['course_name'] = $row['course_name'];
    $courseDetails['year'] = $row['year'];
    $coursehash = $row['coursehash'];

	if($row['OTP'] == $otp) {

		//echo "before query";

		// $courses_update_query = "INSERT INTO sconnect_courses_enrolled VALUES (NULL, '$user_hash', '$coursehash');";
		//$res = mysqli_query($sql_connection, $courses_update_query);		
		$returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "OK";
		// $returnObject->courses_update = $res;
		$returnObject->courseDetails = $courseDetails;
		echo json_encode($returnObject);


	}

	else {
		$success = "In else";
		echo $success;
	}
}



mysqli_free_result($result);

include("../data/connection_close.php");
?>