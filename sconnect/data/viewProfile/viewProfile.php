<?php

	$user_hash = $_SESSION['userhash'];

	$init_query = "SELECT * FROM sconnect_user WHERE userhash = '$user_hash'";
	
	// if($result = $mysqli->query($init_query)) {
	// 	while($row = $result->fetch_row()) {
			
	// 	}
	// }

	$result = mysqli_query($sql_connection, $init_query);
	
	while($row = mysqli_fetch_assoc($result)) {

		$fname = $row['fname'];
		$lname = $row['lname'];
		$dob_mm = $row['dob_mm'];
		$dob_dd = $row['dob_dd'];
		$dob_yyyy = $row['dob_yyyy'];
		$degree = $row['degree'];
		$major = $row['major'];
		$email = $row['email'];
		$profile_image_path = $row['profile_image_path'];
		$resume_path = $row['resume_path'];
		$position = $row['position'];
		$university_domain = $row['university_domain'];
	}

	mysqli_free_result($result);

?>