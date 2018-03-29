<?php 

$sql_servername = "localhost";
$sql_username = "root";
$sql_password = "";
$sql_database = "sconnect";

// Create connection
$sql_connection = mysqli_connect($sql_servername, $sql_username, $sql_password, $sql_database);


$otp = $_POST['OTP_text'];
$course_query = "SELECT course_name, course_code, session FROM sconnect_courses_offered WHERE OTP = '$otp'";
$result = mysqli_query($sql_connection, $course_query);
$course_name = $result['course_name'];
$course_code = $result['course_code'];
$session = $result['session'];

?>