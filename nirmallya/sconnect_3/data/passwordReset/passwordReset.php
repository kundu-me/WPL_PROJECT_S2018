<?php

/**
  *
  * @author: Nirmallya Kundu <nxkundu@gmail.com>
  * @page: Password Reset Data
  * @description: This page enables the user to reset the password
  *
  */

	//Start session
	session_start();
 
	//Validation error flag
	$errflag = false;
 
	//Get the POST values
	$email = $_POST['reset-email'];
	$password = $_POST['reset-password'];
	$otp = $_POST['reset-otp'];
 
	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'email missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($otp == '') {
		$errmsg_arr[] = 'OTP missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Please Enter Valid Email, OTP and new password to Reset Password";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

		exit();
	}
 ?>

 <?php include('../connection_open.php') ?>

 <?php
 
 	$email_escape = mysqli_real_escape_string($sql_connection, $email);

 	$query = "SELECT userhash, password, salt, status, position, fname, mname, lname, profile_image_path, 
 	          resume_path, dob_mm, dob_dd, dob_yyyy, degree, major, university_domain, OTP
 			  FROM sconnect_user 
 			  WHERE email = '$email_escape';";
 			  
	$result = mysqli_query ($sql_connection, $query);

	if($result->num_rows == 0) {

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Email does not exists!";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

  		exit();
	}

	$userData = mysqli_fetch_assoc($result);
	
	if($userData['OTP'] != $otp) {
		
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Incorrect OTP!";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

  		exit();
	} 

	$updated_status = $userData['status'];
	if($userData['position'] == "student" and $userData['status'] = "PENDING_EMAIL") {
		$updated_status = "APPROVED";
	}
	else if($userData['position'] == "faculty" and $userData['status'] = "PENDING_EMAIL") {
		$updated_status = "PENDING_DOCUMENT";
	}
	
	$password_escape = mysqli_real_escape_string($sql_connection, $password);
	$user_salt = uniqid();
	$hashed_password = password_hash($password_escape . $user_salt, PASSWORD_BCRYPT);

	$query = "UPDATE sconnect_user 
			  SET status='$updated_status', password='$hashed_password', salt='$user_salt'
			  WHERE email = '$email_escape';";

	if (mysqli_query($sql_connection, $query)) {
    	
    	session_regenerate_id(); 
		$_SESSION['userhash'] = $userData['userhash'];
  		$_SESSION['status'] = $userData['status'];
  		$_SESSION['position'] = $userData['position'];
  		$_SESSION['fname'] = $userData['fname'];
  		$_SESSION['mname'] = $userData['mname'];
  		$_SESSION['lname'] = $userData['lname'];
  		$_SESSION['profile_image_path'] = $userData['profile_image_path'];
  		$_SESSION['resume_path'] = $userData['resume_path'];
  		$_SESSION['dob_mm'] = $userData['dob_mm'];
  		$_SESSION['dob_dd'] = $userData['dob_dd'];
  		$_SESSION['dob_yyyy'] = $userData['dob_yyyy'];
  		$_SESSION['degree'] = $userData['degree'];
  		$_SESSION['major'] = $userData['major'];
  		$_SESSION['university_domain'] = $userData['university_domain'];
		session_write_close();

		$returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "Password Reset Success! Logging In...";
		$returnObject->redirect = "true";
		$returnObject->redirectURL = "../feed/";
		echo json_encode($returnObject);

		exit();
	} 
	else {
    	
    	$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Error updating record: " . mysqli_error($conn);
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

    	exit();
	}
	
?>

<?php include("../data/connection_close.php") ?>