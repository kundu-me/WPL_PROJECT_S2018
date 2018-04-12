<?php 

// session_start();
// $sql_servername = "localhost";
// $sql_username = "root";
// $sql_password = "";
// $sql_database = "sconnect";

// // Create connection
// $sql_connection = mysqli_connect($sql_servername, $sql_username, $sql_password, $sql_database);

include('../data/connection_open.php');

$session = $_POST['session'];
$CourseID = $_POST['CourseID'];
$otp = $_POST['otp_received'];
$course_query = "SELECT OTP, course_name FROM sconnect_courses_offered WHERE session = 'session' AND course_code = 'CourseID'";

$result = mysqli_query($sql_connection, $course_query);
$course_details = array();
$course_details = $result->fetch_all(MYSQLI_ASSOC);

$course_name = $course_details['course_name'];
$otp_actual = $course_details['OTP'];
//$course_code = $result['course_code'];
//$session = $result['session'];


// if($otp_actual != $otp) {
// 	$returnObject = new stdClass();
// 	$returnObject->success = "false";
// 	$returnObject->message = "The OTP could not be verified. Please check again.";
// 	$returnObject->redirect = "false";
// 	$returnObject->redirectURL = "";
// 	echo json_encode($returnObject);

// 	exit();
// }

$myJSON =  json_encode($course_details);
echo $myJSON;

include("../data/connection_close.php");
?>