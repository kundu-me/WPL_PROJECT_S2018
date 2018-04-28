<!-- @author: Gunjan Tomer <gxt160930@utdallas.edu>
	@page: Fetch privacy settings for currently logged in user
	Updated on: 04/25/2018 -->

<?php
	
	$user_hash = $_SESSION['userhash'];

	$settings_query  = $sql_connection->query("SELECT * FROM sconnect_privacy_settings WHERE userhash = '$user_hash'");


	$rowCount = $settings_query->num_rows;

	if($rowCount > 0){
		while($row = $settings_query->fetch_assoc()){
			$degree_view = $row['degree_view'];
			$major_view = $row['major_view'];
			$courses_view = $row['courses_view'];
			$dob_view = $row['dob_view'];
		}
	}

	else {
		$degree_view = 0;
		$major_view = 0;
		$courses_view = 0;
		$dob_view = 0;
	}

	// else{
	// 	echo "Unable to process request.";
	// }
	



?>