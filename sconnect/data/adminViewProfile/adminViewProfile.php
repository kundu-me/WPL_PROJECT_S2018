<?php

	$user_hash = $_GET['q'];

	$init_query = "SELECT * FROM sconnect_user WHERE userhash = '$user_hash'";
	
	// if($result = $mysqli->query($init_query)) {
	// 	while($row = $result->fetch_row()) {
			
	// 	}
	// }


	$result = mysqli_query($sql_connection, $init_query);

	while($row = mysqli_fetch_assoc($result)) {

		$fname_alt = $row['fname'];
		$lname_alt = $row['lname'];
		$dob_mm_alt = $row['dob_mm'];
		$dob_dd_alt = $row['dob_dd'];
		$dob_yyyy_alt = $row['dob_yyyy'];
		$degree_alt = $row['degree'];
		$major_alt = $row['major'];
		$email_alt = $row['email'];
		$profile_image_path_alt = $row['profile_image_path'];
		$resume_path_alt = $row['resume_path'];
		$position_alt = $row['position'];
		$university_domain_alt = $row['university_domain'];
	}


	mysqli_free_result($result);

?>

