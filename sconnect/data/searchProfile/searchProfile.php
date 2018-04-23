<?php

/**
  *
  * @author: Nirmallya Kundu <nxkundu@gmail.com>
  * @page: Account Verification Data
  * @description: This page verifies the user with the email and OTP
  *
  */

	//Start session
	session_start();
 
	//Validation error flag
	$errflag = false;
 
	//Get the POST values
	$searchQuery = $_POST['searchQuery'];
	$filterPosition = isset($_POST['position']) ? $_POST['position'] : '';
	$filterUniversity = isset($_POST['university']) ? $_POST['university'] : '';
	//$university_domain = $_SESSION['university_domain'];
	//$userhash = $_SESSION['userhash'];
 
	//Input Validations
	// if($searchQuery == '') {
	// 	$errmsg_arr[] = 'searchQuery missing';
	// 	$errflag = true;
	// }
	// if($university_domain == '') {
	// 	$errmsg_arr[] = 'university_domain missing';
	// 	$errflag = true;
	// }
	// if($userhash == '') {
	// 	$errmsg_arr[] = 'userhash missing';
	// 	$errflag = true;
	// }
 
	//If there are input validations, redirect back to the login form
	if($errflag) {

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Please Enter email, password and OTP to Verify Account";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

		exit();
	}
 ?>

 <?php include('../connection_open.php') ?>

 <?php
 
 	$searchQuery_escape = mysqli_real_escape_string($sql_connection, $searchQuery);

 	$filterPosition = mysqli_real_escape_string($sql_connection, $filterPosition);
 	$filterUniversity = mysqli_real_escape_string($sql_connection, $filterUniversity);

 	$query = "SELECT userhash, fname, lname, profile_image_path, university_domain, position
 			  FROM sconnect_user
 			  WHERE 
 			  (fname LIKE '%$searchQuery_escape%' OR lname LIKE '%$searchQuery_escape%')
 			  AND
 			  (position LIKE '%$filterPosition%')
 			  AND
 			  (university_domain LIKE '%$filterUniversity%')";

	$result = mysqli_query ($sql_connection, $query);

	if($result->num_rows == 0) {

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "User does not exists!";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

  		exit();
	}

	

	$searchUsers = [];
	while($row = $result->fetch_assoc()) {

		$searchUser = [];
		$searchUser['userhash'] = $row['userhash'];
		$searchUser['fname'] = $row['fname'];
		$searchUser['lname'] = $row['lname'];
		$searchUser['profile_image_path'] = $row['profile_image_path'];
		$searchUser['university_domain'] = $row['university_domain'];
		$searchUser['position'] = $row['position'];

		$searchUsers[$row['userhash']] = $searchUser;
	}

	$returnObject = new stdClass();
	$returnObject->success = "true";
	$returnObject->message = json_encode($searchUsers);
	$returnObject->redirect = "false";
	$returnObject->redirectURL = "";
	echo json_encode($returnObject);
	exit();
?>

<?php include("../data/connection_close.php") ?>