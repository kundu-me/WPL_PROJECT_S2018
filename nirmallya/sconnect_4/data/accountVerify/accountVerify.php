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
	$email = $_POST['verify-email'];
	$password = $_POST['verify-password'];
	$otp = $_POST['verify-OTP'];
 
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
		$returnObject->message = "Please Enter email, password and OTP to Verify Account";
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

	if(!password_verify($password .  $userData['salt'], $userData['password'])) { 		
	
		// Incorrect password. So, redirect to login_form again.

  		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Incorrect Password!";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

  		exit();
	}
	
	if($userData['OTP'] != $otp) {
		
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Incorrect OTP! Please Contact admin@sconnect.xyz";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

  		exit();
	} 
	
	if($userData['status'] == "APPROVED") {

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Account Already Verified! Please go to sconnect.xyz to Login";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

  		exit();
	}

	if($userData['status'] == "PENDING_DOCUMENT") {

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Document Verification Pending!";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

  		exit();
	}

	if($userData['status'] == "PENDING_EMAIL") {

		$updated_status = "";
		if($userData['position'] == "student") {
			$updated_status = "APPROVED";
		}
		else if($userData['position'] == "faculty") {
			$updated_status = "PENDING_DOCUMENT";
		}
		

		if($updated_status != "") {
			$query = "UPDATE sconnect_user 
					  SET status='$updated_status'
					  WHERE email = '$email_escape';";

			if (mysqli_query($sql_connection, $query)) {
		    	
		    	session_regenerate_id(); 
				$_SESSION['userhash'] = $userData['userhash'];
				$_SESSION['email'] = $email_escape;
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
				$returnObject->message = "Account Verification Success! Logging In...";
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
		}
	}
?>

<?php include("../data/connection_close.php") ?>