<?php
	include('settings_fetch.php');
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
				<a href='../passwordReset/' style="float: right;">Reset password</a>
			</div>
		</div>
		<br>
		<h4><p id="instructions" class="col-lg-12">Select who should be able to see this information.</p></h4>
		<form id="settings_form">
		<div class="row marketing">
			<div class="col-lg-12 col-lg-2">
				<label>Degree: </label>
			</div>
		<div class="col-lg-12 col-lg-4">
			<div class="row">
				<input type="radio" id="everyone" name="degree_view" value="0" <?php echo ($degree_view==0)?'checked':'' ?>>
				<label>Everyone</label>
			</div>
			<div class="row marketing">
				<input type="radio" id="same_domain" name="degree_view" value="1" <?php echo ($degree_view==1)?'checked':'' ?>>

				<label>Anyone from <?php echo $_SESSION['university_domain'] ?></label>
			</div>
			<div class="row marketing">
				<input type="radio" id="self" name="degree_view" value="2"<?php echo ($degree_view==2)?'checked':'' ?>>

				<label>Just me</label>
			</div>
			</div>
		</div>
		<div class="row marketing">
			<div class="col-lg-12 col-lg-2">
				<label>Major: </label>
			</div>
		<div class="col-lg-12 col-lg-4">
			<div class="row">
				<input type="radio" id="everyone" name="major_view" value="0" <?php echo ($major_view==0)?'checked':'' ?>>
				<label>Everyone</label>
			</div>
			<div class="row marketing">
				<input type="radio" id="same_domain" name="major_view" value="1" <?php echo ($major_view==1)?'checked':'' ?>>

				<label>Anyone from <?php echo $_SESSION['university_domain'] ?></label>
			</div>
			<div class="row marketing">
				<input type="radio" id="self" name="major_view" value="2" <?php echo ($major_view==2)?'checked':'' ?>>

				<label>Just me</label>
			</div>
			</div>
		</div>
		<div class="row marketing">
			<div class="col-lg-12 col-lg-2">
				<label>Courses enrolled in: </label>
			</div>
		<div class="col-lg-12 col-lg-4">
			<div class="row">
				<input type="radio" id="everyone" name="courses_view" value="0" <?php echo ($courses_view==0)?'checked':'' ?>>
				<label>Everyone</label>
			</div>
			<div class="row marketing">
				<input type="radio" id="same_domain" name="courses_view" value="1" <?php echo ($courses_view==1)?'checked':'' ?>>

				<label>Anyone from <?php echo $_SESSION['university_domain'] ?></label>
			</div>
			<div class="row marketing">
				<input type="radio" id="self" name="courses_view" value="2" <?php echo ($courses_view==2)?'checked':'' ?>>

				<label>Just me</label>
			</div>
			</div>
		</div>
		<div class="row marketing">
			<div class="col-lg-12 col-lg-2">
				<label>Date of Birth: </label>
			</div>
		<div class="col-lg-12 col-lg-4">
			<div class="row">
				<input type="radio" id="everyone" name="dob_view" value="0" <?php echo ($dob_view==0)?'checked':'' ?>>
				<label>Everyone</label>
			</div>
			<div class="row marketing">
				<input type="radio" id="same_domain" name="dob_view" value="1" <?php echo ($dob_view==1)?'checked':'' ?>>

				<label>Anyone from <?php echo $_SESSION['university_domain'] ?></label>
			</div>
			<div class="row marketing">
				<input type="radio" id="self" name="dob_view" value="2" <?php echo ($dob_view==2)?'checked':'' ?>>

				<label>Just me</label>
			</div>
			</div>
		</div>
		<div>
			<input type="submit" id="save_settings" name="save_settings" value="Save settings" align="center" style="float: center;">
		</div>
	</form>

		<h3><button type="button" id="close_button" onclick="document.getElementById('settings_lightbox').style.display='none';document.getElementById('fade').style.display='none'">X</button></h3>
	</div>


</body>
</html>