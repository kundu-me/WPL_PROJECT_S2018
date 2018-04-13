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
	//$searchQuery = $_POST['searchQuery'];
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

 	$query = "SELECT feedhash, text_data, photo_path, video_path, privacy, 
 			  university_domain, userhash_to, userhash_from, date_time_yyyy_mm_dd_hh_mm, status
 			  FROM sconnect_feed
 			  ORDER BY date_time_yyyy_mm_dd_hh_mm DESC";

	$result = mysqli_query ($sql_connection, $query);

	if($result->num_rows == 0) {

		$returnObject = new stdClass();
		$returnObject->success = "false";
		$returnObject->message = "No Feed Found!";
		$returnObject->redirect = "false";
		$returnObject->redirectURL = "";
		echo json_encode($returnObject);

  		exit();
	}

	$feeds = [];

	while($row = $result->fetch_assoc()) {

		$feed = [];
		$feed['feedhash'] = $row['feedhash'];
		$feed['text_data'] = $row['text_data'];
		$feed['photo_path'] = $row['photo_path'];
		$feed['video_path'] = $row['video_path'];
		$feed['privacy'] = $row['privacy'];
		$feed['university_domain'] = $row['university_domain'];
		$feed['userhash_to'] = $row['userhash_to'];
		$feed['userhash_from'] = $row['userhash_from'];
		$feed['date_time_yyyy_mm_dd_hh_mm'] = $row['date_time_yyyy_mm_dd_hh_mm'];
		$feed['status'] = $row['status'];

		$feeds[$row['feedhash']] = $feed;
	}

	$returnObject = new stdClass();
	$returnObject->success = "true";
	$returnObject->message = json_encode($feeds);
	$returnObject->redirect = "false";
	$returnObject->redirectURL = "";
	echo json_encode($returnObject);
	exit();
?>

<?php include("../data/connection_close.php") ?>