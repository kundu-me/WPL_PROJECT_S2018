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

	$searchStatus = isset($_POST['status'])? isset($_POST['status']) : '0';

	$filterPosition = isset($_POST['position']) ? $_POST['position'] : '';
	$filterUniversity = isset($_POST['university']) ? $_POST['university'] : '';

	//$university_domain = $_SESSION['university_domain'];
	$userhash = $_SESSION['userhash'];
 
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

 	$searchStatus = mysqli_real_escape_string($sql_connection, $searchStatus);

	$filterPosition = mysqli_real_escape_string($sql_connection, $filterPosition);
 	$filterUniversity = mysqli_real_escape_string($sql_connection, $filterUniversity);

 	$query = "SELECT feed.feedhash as feedhash, feed.text_data as text_data, feed.photo_path as photo_path, 
 			  feed.video_path as video_path, feed.privacy as privacy, 
 			  feed.university_domain as university_domain, feed.userhash_to as userhash_to, 
 			  feed.userhash_from as userhash_from, feed.date_time_yyyy_mm_dd_hh_mm as date_time_yyyy_mm_dd_hh_mm, 
 			  feed.status as status,
 			  user_from.fname as user_from_fname, user_from.lname as user_from_lname, user_from.position as user_from_position,
 			  user_from.university_domain as user_from_university_domain
 			  FROM sconnect_feed as feed
 			  INNER JOIN sconnect_user as user_from
 			  WHERE feed.userhash_from = user_from.userhash
 			  AND 
 			  (
 			   feed.text_data LIKE '%$searchQuery%' OR 
 			   feed.university_domain LIKE '%$searchQuery%' OR
 			   user_from.fname LIKE '%$searchQuery%' OR
 			   user_from.lname LIKE '%$searchQuery%'
 			   )
 			   AND
 			  (user_from.position LIKE '%$filterPosition%')
 			  AND
 			  (feed.university_domain LIKE '%$filterUniversity%')
 			  AND
 			  (feed.status = '$searchStatus')";

 	if($searchStatus != '0') {
 		//$query .= " AND (userhash_to = '$userhash') ";
 	}

 	$query .= "ORDER BY feed.date_time_yyyy_mm_dd_hh_mm DESC";

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
		$feed['user_from_name'] = $row['user_from_fname'] . ' ' . $row['user_from_lname'];
		$feed['user_from_university_domain'] = $row['user_from_university_domain'];
		$feed['user_from_position'] = $row['user_from_position'];
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