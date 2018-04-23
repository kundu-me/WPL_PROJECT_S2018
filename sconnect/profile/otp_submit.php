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
$course_query = "SELECT OTP, course_name, year FROM sconnect_courses_offered WHERE session = 'session' AND course_code = 'CourseID'";

$result = mysqli_query($sql_connection, $course_query);

while($row = mysqli_fetch_assoc($result)) {
	$data = array(
	"course_name" => $row['course_name'],
	"otp_found" => $row['OTP'],
	"course_year" => $row['year']
	// "success" => 'true';
	);
	$res[] = $data;

	if($row['OTP'] == $otp) {
	// $success = "true";
	echo json_encode($res);
	//echo json_encode($success);
}

else {
	// $success = "false";
	$success = "crap";
	echo json_encode($success);
}
}



mysqli_free_result($result);

include("../data/connection_close.php");
?>