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
	$feedhash = $_POST['feedhash'];
	$userhash = $_SESSION['userhash'];
	$position = $_SESSION['position'];

	//$university_domain = $_SESSION['university_domain'];
	//$userhash = $_SESSION['userhash'];
 
	//Input Validations
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

 	$query = "";

 	if($position == "admin") {
		
		$query = "UPDATE sconnect_feed
	 				SET status = '1'
	 				WHERE feedhash = '$feedhash'";
 	}
 	else {

	 	$query = "UPDATE sconnect_feed
	 				SET status = '1'
	 				WHERE feedhash = '$feedhash' AND userhash_from = '$userhash'";
 	}

	$result = mysqli_query ($sql_connection, $query);

	echo "success" . $userhash . $position;
  	exit();
?>

<?php include("../data/connection_close.php") ?>