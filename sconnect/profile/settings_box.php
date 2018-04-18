<?php
//Database credentials
// $dbHost     = 'localhost';
// $dbUsername = 'root';
// $dbPassword = '';
// $dbName     = 'sconnect';

// //Connect and select the database
// $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

include('../data/connection_open.php');

if ($sql_connection->connect_error) {
    die("Connection failed: " . $sql_connection->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Privacy Settings</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../static/css/profile/course_box.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
</head>

<body>

	<div class="container"> <!--Div element to enter the OTP provided by faculty and verify course detail -->
		<div class="row">
			<div class="col-lg-12 col-lg-12">
				<h2><i>Profile - Configure Privacy Settings</i></h2>
			</div>
		</div>

		<br>
			<h4><p id="instructions" class="col-lg-12">Select who should be able to see this information.</p></h4>
			<div class="col-lg-12 col-lg-2">
				<div class="row">
				<label>Everyone</label>
				<input type="radio" name="everyone" value="everyone">
				</div>
				<div class="row">
				<label>Just me</label>
				<input type="radio" name="self" value="Just me">
				</div>
			</div>

			<h3><button type="button" id="close_button" onclick="document.getElementById('settings_lightbox').style.display='none';document.getElementById('fade').style.display='none'">X</button></h3>
	</div>


</body>
</html>