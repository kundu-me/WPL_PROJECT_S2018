<?php 
	include('../connection_open.php');
	session_start();

	$user_hash = $_SESSION['userhash'];
	$target_dir = "../../user_data/resume/";
	//$target_file = $target_dir . basename($_FILES["resume_upload"]["name"]);
	$target_file = "../usr_data/resume/" .$user_hash. ".pdf";
	$uploadOk = 1;
	$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// if(file_exists($target_file)) {
	// 	echo "Sorry, the file already exists.";
	// 	$uploadOk = 0;
	// }

	if($_FILES["resume"]["size"] > 5000000) {
		echo "Sorry, the file is too large.";
		$uploadOk = 0;
	}

	if($fileType != "pdf") {
			echo "Sorry, only pdf format resumes are allowed.";
			$uploadOk = 0;
	}

	else if($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	}

	else {
		if(move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
			// echo "The file " .basename($_FILES["resume_upload"]["name"]). "has been uploaded.";
			echo "Your file ".basename($_FILES["resume"]["name"])." has been successfully uploaded";		
		$query = "UPDATE sconnect_user SET resume_path = '$target_file' WHERE userhash = '$user_hash'";
		$sql_connection->query($query) or die("Error : ".mysqli_error($link));
		}

		else {
			echo "Sorry, there was an error uploading the file.";
		}
	}

	$_SESSION["resume_path"] = $target_file;

	/*
	*	If file was successfully uploaded in the destination folder
	*/

	mysqli_close($sql_connection);

?>