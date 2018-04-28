<!-- @author: Gunjan Tomer <gxt160930@utdallas.edu>
	@page: Save details modified by user on profile page to DB to be fetched later
	Updated on: 04/25/2018 -->


<?php 

session_start();

// Create connection

include('../connection_open.php');


$degree = $_POST['degree'];
$major = $_POST['major'];
$dob_mm = $_POST['dob_month'];
$dob_dd = $_POST['dob_day'];
$dob_yyyy = $_POST['dob_year'];
$user_hash = $_SESSION['userhash'];

$query_update_user = "UPDATE sconnect_user SET degree = '$degree', major = '$major', dob_mm = '$dob_mm', dob_dd = '$dob_dd', dob_yyyy = '$dob_yyyy' WHERE userhash = '$user_hash'";

$_SESSION['degree'] = $degree;
$_SESSION['major'] = $major;
$_SESSION['dob_mm'] = $dob_mm;
$_SESSION['dob_dd'] = $dob_dd;
$_SESSION['dob_yyyy'] = $dob_yyyy;


if(mysqli_query($sql_connection, $query_update_user)){
	$returnObject = new stdClass();
	$returnObject->success = "true";
	$returnObject->message = "Values updated";
	echo json_encode($returnObject);
}

mysqli_close($sql_connection);

?>