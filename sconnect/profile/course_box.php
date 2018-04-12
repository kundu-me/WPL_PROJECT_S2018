<?php
//Database credentials
$dbHost     = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName     = 'sconnect';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add New Course Interface</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="course_box.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="course_box.js"></script> 

	
</head>

<body>

	<div class="container"> <!--Div element to enter the OTP provided by faculty and verify course detail -->
		<div class="row">
			<div class="col-lg-12 col-lg-12">
				<h2><i>STUDENT - Add New Class</i></h2>
			</div>
		</div>

		<br>
		<div class="row">
			<h4><p id="instructions" class="col-lg-12">Select Session/Course-ID and enter correct OTP received in mail to verify course detail</p></h4>
			<?php 
			$query = $db->query("SELECT * FROM sconnect_courses_offered GROUP BY session ORDER BY session ASC");
			$rowCount = $query->num_rows;
			?>
			<div class="col-lg-12 col-lg-2">
				<h3><select id="session" name="Session" required autocomplete="off">
					<option value="" disabled selected hidden>Session</option>
					<?php 
					if($rowCount > 0) {
					while($row = $query->fetch_assoc()) {
					echo '<option value="'.$row['session'].'">'.$row['session'].'</option>';
				}
			}
			else {
			echo '<option value="">Course not available</option>';
		}
		?>
		</select></h3>
</div>
<div class="col-lg-12 col-lg-3">
	<h3><select id="CourseID" name="CourseID" required autocomplete="off">
		<option value="" disabled selected hidden>Select Course-ID..</option>
			</select></h3>
</div>
<div class="col-lg-12 col-lg-2">
	<h3><input type="text" id="otp_received" name="otp_received" placeholder ="eg: 1234" class="col-lg-10" autocomplete="off"></h3>
</div>
<div class="col-lg-12 col-lg-3">
	<h3><button id="verifyCourse">Verify Course</button></h3>
	<!-- <h3><button type="button" id="close_button" onclick="document.getElementById('lightbox').style.display='none';document.getElementById('fade').style.display='none'">Close</button></h3> -->
</div>
</div>
<h3><button type="button" id="close_button" onclick="document.getElementById('lightbox').style.display='none';document.getElementById('fade').style.display='none'">X</button></h3>
</div> 

<div class="container"><!--Div element to show failure message for OTP validation -->
	<div class="row">
		<div id="divSuccess" class="col-lg-12 col-lg-9">
			<p>
				<label id="lblSuccess"></label>
			</p>
		</div>
	</div>
</div>

<br>
<form id= "formData"> 

	<table class="container">
		<tr class="row">
			<td class="col-lg-12 col-lg-3">
				<h3>Course Name</h3>
			</td>
			<td class="col-lg-12 col-lg-9">
				<h3><input type="text" id="CourseName" name="Course Name" class="col-lg-6" disabled="disabled" autocomplete="off"><h3>
				</td>
			</tr>

			<tr class="row">
				<td class="col-lg-12 col-lg-3">
					<h3>Academic Session</h3>
				</td>
				<td class="col-lg-12 col-lg-9">
					<h3><input type="text" id="session_verified" name="Session_verified" class="col-lg-6" disabled="disabled" autocomplete="off"></h3>
				</td>
			</tr>
			
			<tr class="row">
				<td class="col-lg-12 col-lg-3">
					<h3>Academic Year</h3>
				</td>
				<td class="col-lg-12 col-lg-9">
					<h3><input type="text" id="year" name="Year" class="col-lg-6" disabled="disabled" autocomplete="off"></h3>
				</td>
			</tr>

			<br>
			<tr class="row">
				<td class="col-lg-12 col-lg-3">
				</td>
				<td class="col-lg-12 col-lg-6">
					<h3><input type="submit" value="Join the Class" id="btnSubmit" class="col-lg-4"></h3>
				</td>
			</tr>
		</table>
	</form> 
	
	<div class="container"><!--Div element to show failure message for student details validation in class roster -->
		<div class="row">
			<div id="divSuccess" class="col-lg-12 col-lg-9">
				<p>
					<label id="lblSuccess"></label>
				</p>
			</div>
		</div>
	</div>


</body>
</html>