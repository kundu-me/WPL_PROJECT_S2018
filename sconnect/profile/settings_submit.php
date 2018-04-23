<?php

	include('../data/connection_open.php');
	session_start();

	$degree_view = $_POST['degree_view'];
	$major_view = $_POST['major_view'];
	$courses_view = $_POST['courses_view'];
	$dob_view = $_POST['dob_view'];
	$user_hash = $_SESSION['userhash'];


	$query_update_privacy_settings = "UPDATE sconnect_privacy_settings SET degree_view = '$degree_view', major_view = '$major_view', dob_view = '$dob_view', courses_view = '$courses_view' WHERE userhash = '$user_hash'";
	
	if(mysqli_query($sql_connection, $query_update_privacy_settings)) {
		$returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "Values updated";
		echo json_encode($returnObject);
	}

mysqli_close($sql_connection);
?>