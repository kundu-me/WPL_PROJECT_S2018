<!--
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Login Data
    @description: This page verifies the user with the email and Password
    				and logs into the account
-->
<?php

	//Start session
	session_start();
 
	//Validation error flag
	$errflag = false;
 
	//Get the POST values
	$email = $_POST['login-email'];
	$password = $_POST['login-password'];
 
	//Input Validations
	if($email == '') {
		$errmsg_arr[] = 'email missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		session_write_close();
		
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Please Enter email and password to Login";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

		exit();
	}
 ?>

 <?php include('../connection_open.php') ?>

 <?php
 
 	$email_escape = mysqli_real_escape_string($sql_connection, $email);

 	$query = "SELECT password, salt, position, university_domain, fname, lname, status, user_hash_code FROM sconnect_login WHERE university_email = '$email_escape';";
	$result = mysqli_query ($sql_connection, $query);

?>

<?php include('../connection_close.php') ?>

<?php

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
	

	if($userData['status'] == 'APPROVED'){ 				

		// Redirect to news feed page after successful login.
  		session_regenerate_id(); 			
  		$_SESSION['session_user_hash_code'] = $userData['user_hash_code'];
  		$_SESSION['session_position'] = $userData['position'];
  		$_SESSION['session_university_domain'] = $userData['university_domain'];
  		$_SESSION['session_fname'] = $userData['fname'];
  		$_SESSION['session_lname'] = $userData['lname'];
  		$_SESSION['session_status'] = $userData['status'];
  		session_write_close();
  		
  		$returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "OK! Loggin In...";
		$returnObject->redirect = "true";
		$returnObject->redirectURL = "feed/";
		echo json_encode($returnObject);	
	}
	else if($userData['status'] == 'PENDING_EMAIL') {
		
		$returnObject = new stdClass();
		$returnObject->success = "true";
		$returnObject->message = "Account Verification Pending! Redirecting to Account Verify...";
		$returnObject->redirect = "true";
		$returnObject->redirectURL = "accountVerify/";
		echo json_encode($returnObject);

  		exit();
	} 
	if($userData['status'] == 'PENDING_DOCUMENT') {
		
		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "Document Verification Pending!";
		$returnObject->redirect = "true";
		$returnObject->redirectURL = "accountVerify/";
		echo json_encode($returnObject);

  		exit();
	} 
?>