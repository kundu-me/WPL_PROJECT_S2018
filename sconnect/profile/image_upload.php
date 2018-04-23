<?php 
	session_start();

	// $sql_connection = mysqli_connect('localhost', 'root', '', 'sconnect') or die('Error '.mysql_error($sql_connection));

	include('../data/connection_open.php');

	$user_hash = $_SESSION['userhash'];
	$target_dir = "profile_image/";
	$target_file = $target_dir . $user_hash. ".jpg";
	$uploadOk = 1;
	$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// if(file_exists($target_file)) {
	// 	echo "Sorry, the file already exists.";
	// 	$uploadOk = 0;
	// }

	if($_FILES["dp"]["size"] > 5000000) {
		echo "Sorry, the file is too large.";
		$uploadOk = 0;
	}

	else if($fileType != "jpg") {
			echo "Sorry, only jpg formats are allowed.";
			$uploadOk = 0;
	}

	else if($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	}

	else {
		if(move_uploaded_file($_FILES["dp"]["tmp_name"], $target_file)) {
			$returnObject = new stdClass();
			$returnObject->message =  "Your file ".basename($_FILES["dp"]["name"])." has been successfully uploaded";
			$returnObject->image_link = $target_file;
			echo json_encode($returnObject);		
			$query = "UPDATE sconnect_user SET profile_image_path = '$target_file' WHERE userhash = '$user_hash'";
			$sql_connection->query($query) or die("Error : ".mysqli_error($sql_connection));
		}

		else {
			echo "Sorry, there was an error uploading the file.";
		}
	}

	$_SESSION["profile_image_path"] = $target_file;

	/*
	*	If file was successfully uploaded in the destination folder
	*/

	mysqli_close($sql_connection);

?>