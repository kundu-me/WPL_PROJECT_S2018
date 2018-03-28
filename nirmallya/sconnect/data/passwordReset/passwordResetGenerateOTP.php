<?php

/**
  *
  * @author: Nirmallya Kundu <nxkundu@gmail.com>
  * @page: Password Reset - Generate OTP Data
  * @description: his page generates the OTP to reset the password
  *
  */

	//Start session
	session_start();
 
	//Validation error flag
	$errflag = false;
 
	//Get the POST values
	$email = $_POST['otp-email'];
	
	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'email missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Please Enter email to send Password Reset OTP";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

		exit();
	}
 ?>

 <?php include('../connection_open.php') ?>

 <?php
 
 	$email_escape = mysqli_real_escape_string($sql_connection, $email);

 	$query = "SELECT userhash, status 
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

	if($userData['status'] == "PENDING_DOCUMENT") {

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Document Verification Pending!";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

  		exit();
	}

	if($userData['status'] == "PENDING_EMAIL" or $userData['status'] == "APPROVED") {

		$user_OTP = rand(1000, 9999) . "";

		$query = "UPDATE sconnect_user 
					  SET OTP='$user_OTP'
					  WHERE email = '$email_escape';";

		if (mysqli_query($sql_connection, $query)) {

			$returnObject = new stdClass();
			$returnObject->success = "true";
			$returnObject->message = "Use the OTP Sent in Email to Reset Password!";
			$returnObject->redirect = "false";
			$returnObject->redirectURL = "";
			echo json_encode($returnObject);

			exit();
		}
		else {

			$returnObject = new stdClass();
			$returnObject->success = "false";
			$returnObject->message = "Database Error: " . mysqli_error($sql_connection);
			$returnObject->redirect = "false";
			$returnObject->redirectURL = "";
			echo json_encode($returnObject);

			exit();
		}

		
	}
?>

<?php include("../data/connection_close.php") ?>