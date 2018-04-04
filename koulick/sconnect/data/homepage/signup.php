<?php

/**
  *
  * @author: Nirmallya Kundu <nxkundu@gmail.com>
  * @page: Signup Data
  * @description: This page inserts the new user data into the DataBase
  *
  */

	//Start session
	session_start();
 
	//Validation error flag
	$errflag = false;
 
	//Get the POST values
	$signup_email_id = $_POST['signup-email-id'];
	$signup_university_domain = $_POST['signup-email-domain'];
	$signup_fname = $_POST['signup-fname'];
	$signup_lname = $_POST['signup-lname'];
	$signup_password = $_POST['signup-password'];
	$signup_position = $_POST['signup-position'];
 
	//Input Validations
	if($signup_email_id == '' 
		|| $signup_university_domain == '' 
		|| $signup_fname == '' 
		|| $signup_lname == '' 
		|| $signup_password == '' 
		|| $signup_position == '') {

		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		session_write_close();

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Please Complete the Form to Signup !";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

		exit();
	}

?>

<?php include('../connection_open.php') ?>

<?php
 
 	$signup_user_email = $signup_email_id . "@" . $signup_university_domain . ".edu";

 	$signup_user_email_escape = mysqli_real_escape_string($sql_connection, $signup_user_email);

 	$query = "SELECT userhash 
 			  FROM sconnect_user 
 			  WHERE email = '$signup_user_email_escape';";
	$result = mysqli_query ($sql_connection, $query);

	if($result->num_rows !=0) {
		
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Email Already Exists! Login with Email and Password";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

  		exit();
	}

	$signup_fname_escape = mysqli_real_escape_string($sql_connection, $signup_fname);
 	$signup_lname_escape = mysqli_real_escape_string($sql_connection, $signup_lname);
 	$signup_password_escape = mysqli_real_escape_string($sql_connection, $signup_password);
 	$signup_position_escape = mysqli_real_escape_string($sql_connection, $signup_position);
 	$signup_university_domain_escape = mysqli_real_escape_string($sql_connection, $signup_university_domain);

 	$user_hash_code = uniqid();
 	$user_salt = uniqid();
 	$user_OTP = rand(1000, 9999) . "";

 	$hashed_password = password_hash($signup_password_escape . $user_salt, PASSWORD_BCRYPT);

	$query_insert_user = "INSERT INTO sconnect_user (userhash, email, password, salt, position, 
						  university_domain, fname, lname, status, OTP, profile_image_path, resume_path)
						  VALUES ('$user_hash_code', '$signup_user_email_escape', '$hashed_password', '$user_salt', 
						 '$signup_position_escape', '$signup_university_domain_escape', '$signup_fname_escape', 
						 '$signup_lname_escape', 'PENDING_EMAIL', '$user_OTP', 'profile_image/sample.jpg', 'resume/sample.pdf')";

	if (mysqli_query($sql_connection, $query_insert_user)) {
    	
    	$returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "Account Creation Success! Redirecting...";
		$returnObject->redirect = "true";
		$returnObject->redirectURL = "accountVerify/";
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
?>

<?php include('../connection_close.php') ?>