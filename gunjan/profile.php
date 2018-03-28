<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	session_start();
	if (!isset($_SESSION['userhash'])) {
		header("Location: login.html");
	}
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="profile_page.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title><?php echo $_SESSION['fname'].' '.$_SESSION['lname']; ?></title>
</head>
<body>
	<div id="page">
		<span class="left_pane">
			<div class="card">
				<?php
				echo '<img src="'.$_SESSION['profile_image_path'].'" alt="Jack" style="width: 100%">'
				?>
				<?php 
				echo '<h1>'.$_SESSION['fname'].' '.$_SESSION['lname'].'</h1>'
				?>
				<p class="title"><?php echo $_SESSION['position'] ?><br> and <br><?php echo $_SESSION['degree'] ?> <br> <?php echo $_SESSION['major'] ?></p>
				<p>University of Texas at Dallas</p>
				<img src="utd.jpg" alt="UTD" style="width: 30%"> 
				<p><button>Connect</button></p>
				<?php
				echo '<embed src="'.$_SESSION['resume_path'].'" width="200px" height="295px" scale="tofit"></embed>'
				?>
				<p><button>Browse</button></p>
				
			</div>
			<div>
				
			</div>
		</span>
		<span class="container-fluid text-center">
			<form class="card_main">
				<ul>
					<li><label id="degree">Degree: </label><select>
						<option value="bs">Bachelor of Science</option>
						<option value="ms" selected>Master of Science</option>
						<option value="phd">Ph.D</option>
					</select></li>
					<li><label id="major">Major: </label><select>
						<option value="cs">Computer Science</option>
						<option value="ee">Electronics Engineering</option>
						<option value="ce">Computer Engineering</option>
						<option value="apps" selected>Advanced Piracy and Parley Studies</option>
					</select></li>
					<li><label>Email: </label><label id="email">thegreatestpirate@utdallas.edu</label></li>
<!-- 					<li><label>Gender: </label><input type="radio" name=gender checked="checked">Male<input type="radio" name=gender id="radiof">Female</li>
-->					<li><label>Courses enrolled: </label>
	<div>
		<table id="courses">
			<tr>
				<th>Course</th>
				<th>Code</th>
				<th>Session</th>
			</tr>
			<tr><td>Advanced Sailing Maneuvers</td><td>AP 7522</td><td>Spring 2018</td></tr>
			<tr><td>Crew Development Studies</td><td>AP 6344</td><td>Spring 2018</td></tr>
		</table>
<!-- 							<button class="w3-button w3-xlarge w3-circle w3-black relative">+</button>
-->						</div>
</ul>
<button id="update" type="submit">UPDATE</button>
</form>
</span>
</div>
</body>
</html>