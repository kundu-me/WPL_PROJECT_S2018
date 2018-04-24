<?php
	
	//include('../data/connection_open.php');

	$user_hash = $_GET['q'];

	$settings_query  = $sql_connection->query("SELECT * FROM sconnect_privacy_settings WHERE userhash = '$user_hash'");


	$rowCount = $settings_query->num_rows;

	if($rowCount > 0){
		while($row = $settings_query->fetch_assoc()){
			$user_degree_view = $row['degree_view'];
			$user_major_view = $row['major_view'];
			$user_courses_view = $row['courses_view'];
			$user_dob_view = $row['dob_view'];
		}
	}

	else{
		$user_degree_view = 0;
		$user_major_view = 0;
		$user_courses_view = 0;
		$user_dob_view = 0;
		//echo "Unable to process request.";
	}
	



?>