<?php
	$deg_option = isset($_POST['degree_dropdown']) ? $_POST['degree_dropdown'] : false;
	if($deg_option) {
		$result = mysql_query("UPDATE sconnect_user SET degree = $deg_option WHERE userhash = $userhash;");
		if(!$result){
			echo 'Error in MySQL Query!';
			exit();
	}

	$maj_option = isset($_POST['major_dropdown']) ? $_POST['major_dropdown'] : false;
	if($maj_option) {
		$result = mysql_query("UPDATE sconnect_user SET major = $maj_option WHERE userhash = $userhash;");
		if(!$result){
			echo 'Error in MySQL Query!';
			exit();
	}
?>
