<?php 
	session_start();
	// $fileName = $_FILES['new_resume']['name'];
	$link = mysqli_connect('localhost', 'root', '', 'sconnect') or die('Error '.mysql_error($link));
	// $target = "../user_data/resume/";		
	// $fileTarget = $target.$fileName;	
	// $tempFileName = $_FILES["new_resume"]["tmp_name"];
	// //$fileDescription = $_POST['Description'];	
	// echo "First check " .$fileName. "file target: " .$fileTarget;
	// $result = move_uploaded_file($fileName,$fileTarget);
	// echo "Result: " .$result;


	$target_dir = "../user_data/resume/";
	$target_file = $target_dir . basename($_FILES["resume_upload"]["name"]);
	$uploadOk = 1;
	$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$user_hash = $_SESSION['userhash'];

	if(file_exists($target_file)) {
		echo "Sorry, the file already exists.";
		$uploadOk = 0;
	}

	if($_FILES["resume_upload"]["size"] > 500000) {
		echo "Sorry, the file is too large.";
		$uploadOk = 0;
	}

	if($fileType != "pdf") {
			echo "Sorry, only pdf format resumes are allowed.";
			$uploadOk = 0;
	}

	if($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	}

	else {
		if(move_uploaded_file($_FILES["resume_upload"]["tmp_name"], $target_file)) {
			echo "The file " .basename($_FILES["resume_upload"]["name"]). "has been uploaded.";
			echo "Your file <html><b><i>".basename($_FILES["resume_upload"]["name"])."</i></b></html> has been successfully uploaded";		
		$query = "UPDATE sconnect_user SET resume_path = '$target_file' WHERE userhash = '$user_hash'";
		$link->query($query) or die("Error : ".mysqli_error($link));
		}

		else {
			echo "Sorry, there was an error uploading the file.";
		}
	}

	$_SESSION["resume_path"] = $target_file;

	/*
	*	If file was successfully uploaded in the destination folder
	*/

	mysqli_close($link);

?>