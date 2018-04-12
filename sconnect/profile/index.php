<!-- @author: Gunjan Tomer
	Profile Page for SConnect
	Updated on: 03/28/2018 -->

	<?php include('../session_verify.php') ?>

	<?php include('../header_footer/header.php'); ?>

	<?php include('../data/connection_open.php') ?> 

	<?php include('../data/profile/profile.php'); ?>


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../static/css/profile/profile_page.css">
	<script type="text/javascript" src="profile.js"></script>
<!-- 	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
-->	<title><?php echo "SConnect " .$_SESSION['fname'].' '.$_SESSION['lname']; ?></title>
<div id="page">
	<span class="left_pane">
		<div class="card container">
			<?php
			if($_SESSION['profile_image_path']==null) {
				$_SESSION['profile_image_path'] = 'sample.jpg';
			}
			echo '<img src="../user_data/' .$_SESSION['profile_image_path'].'" alt="Display Image" style="width: 100%">'
			?>
			<form method="post" action="image_upload.php" enctype="multipart/form-data">
				Select profile image
				<input type="file" id="my_image" name="image_upload"/>
				<input type="button" value="Browse" id="get_image">
				<input type="submit" name="upload" value="Upload"/>
			</form>
			<?php 
			echo '<h1>'.$_SESSION['fname'].' '.$_SESSION['lname'].'</h1>'
			?>
			<p class="title"><?php echo $_SESSION['position'] ?><br> and <br><?php echo $_SESSION['degree'] ?> <br> <?php echo $_SESSION['major'] ?></p>
			<p><?php echo $_SESSION['university_domain'] ?></p>
			<img src="<?php echo '../university_data/logo/' . $_SESSION['university_domain'] . '.jpg'?>" alt="University Logo" style="width: 30%"> 
			<p><button>Connect</button></p>
			<?php
			if($_SESSION['resume_path']==null) {
				$_SESSION['resume_path'] = 'sample.pdf';
			}
			echo '<a href="../user_data/' .$_SESSION['resume_path'].'" target="_blank"><embed src="../user_data/' .$_SESSION['resume_path'].'" width="200px" height="295px" scale="tofit"></embed></a>'
			?>
			<form method="post" action="resume_upload.php" enctype="multipart/form-data">
				Select resume to upload:
				<input type="file" id="my_resume" name="resume_upload" onchange="startRead()"/>
				<input type="button" id="get_resume" value="Browse">
				<input type="submit" name="upload" value="Upload"/>
			</form>
		</div>
	</span>
	<span class="container-fluid text-center">
		<form class="card_main">
			<div id="toggleDiv" class="hover">
				<label class="switch">
					<input type="checkbox" id="toggle">
<!-- 				<p class="tooltip">Use this toogle to show privacy configuration options.</p>
-->				<span class="slider"></span>
</label>
<p class="tooltip">Show privacy options</p>
</div>
<div class="container">
	<div class="row">
		<div class="degree_div col-lg-12 col-lg-2">
			<label id="degree">Degree: </label>
			<i class="fa fa-wrench wrench" id="degree_hide"></i>
			<?php
			$name = 'degree_dropdown';
			$options = $deg_array;
			$selected = $_SESSION['degree'];
					// $onChange = 'degreeChange()';
			echo dropdown($name, $options, $selected);
			?>
		</div>
	</div>
	<div class="row">
		<div class="major-div col-lg-12 col-lg-3">
			<label id="major">Major: </label>
			<i class="fa fa-wrench id="major_hide""></i>
			<?php
			$name = 'major_dropdown';
			$options = $maj_array;
			$selected = $_SESSION['major'];
					// $onChange = 'majorChange()';

			echo dropdown($name, $options, $selected);
			?>
		</div>
	</div>
	<div class="row">
		<div class="email-div col-lg-12 col-lg-3"><label>Email: </label><br><label id="email"><?php echo $_SESSION['email']; ?></label>
			<i class="fa fa-wrench" id="email_hide"></i>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-lg-10"><label>Courses enrolled: </label>
			<i class="fa fa-wrench" id="courses_hide"></i>
			<div>
				<table id="courses" class="table table-striped table-bordered table-hover table-responsive">
					<tr class="header">
						<th class="col-lg-3">Course</th>
						<th class="col-lg-2">Code</th>
						<th class="col-lg-3">Session</th>
					</tr>
					<tr><td>Advanced Sailing Maneuvers</td><td>AP 7522</td><td>Spring 2018</td></tr>
					<tr><td>Crew Development Studies</td><td>AP 6344</td><td>Spring 2018</td></tr>
				</table>
			</div>
		</div>
	</div>
		<div class="row">
			<button type="button" id="add_course" onclick="document.getElementById('lightbox').style.display='block';document.getElementById('fade').style.display='block'">Add new course</button>
		</div>
		<div id="lightbox" class="white_content">
			<?php include('course_box.php'); ?>
		</div>
		<div id="settings_lightbox" class="white_content">
			<?php include('settings_box.php'); ?>
		</div>
		<div id="fade" class="black_overlay"></div>
		<div class="row"><label for="dob-div">Date of birth: </label>
			<i class="fa fa-wrench" id="dob_hide"></i>
			<?php
			$month = date('n'); $day = date('d'); 
			?>
			<div id="dob-div">
				<div class="col-lg-12 col-lg-3">
					<select class="selectpicker form-control" data-width="30%" name="month" id="month">
						<option value=""  <?PHP if($_SESSION['dob_mm']==null) echo "selected";?>><strong>MM</strong></option>
						<option value="January"  <?PHP if($_SESSION['dob_mm']=='January') echo "selected";?>>January</option>
						<option value="February"  <?PHP if($_SESSION['dob_mm']=='February') echo "selected";?>>February</option>
						<option value="March"  <?PHP if($_SESSION['dob_mm']=='March') echo "selected";?>>March</option>
						<option value="April"  <?PHP if($_SESSION['dob_mm']=='April') echo "selected";?>>April</option>
						<option value="May"  <?PHP if($_SESSION['dob_mm']=='May') echo "selected";?>>May</option>
						<option value="June"  <?PHP if($_SESSION['dob_mm']=='June') echo "selected";?>>June</option>
						<option value="July"  <?PHP if($_SESSION['dob_mm']=='July') echo "selected";?>>July</option>
						<option value="August"  <?PHP if($_SESSION['dob_mm']=='August') echo "selected";?>>August</option>
						<option value="September"  <?PHP if($_SESSION['dob_mm']=='September') echo "selected";?>>September</option>
						<option value="October" <?PHP if($_SESSION['dob_mm']=='October') echo "selected";?>>October</option>
						<option value="November" <?PHP if($_SESSION['dob_mm']=='November') echo "selected";?>>November</option>
						<option value="December" <?PHP if($_SESSION['dob_mm']=='December') echo "selected";?>>December</option>
					</select>
				</div>
				<div class="col-lg-12 col-lg-3">
					<select class="selectpicker form-control" name="day" id="day">
						<?PHP 
						if($_SESSION['dob_dd'==null]) {
							echo "<option value='' selected>DD</option>";
						}
						else{
							echo "<option value=''>DD</option>";
						}
						for($i=1; $i<=31; $i++) {
							if($_SESSION['dob_dd'] == $i)
								echo "<option value='$i' selected>$i</option>";
							else
								echo "<option value='$i'>$i</option>";
						}
						?>
					</select>
				</div>
				<div class="col-lg-12 col-lg-3">
					<select class="selectpicker form-control" name="year" id="year">
						<?PHP 
						if($_SESSION['dob_yyyy'==null]) {
							echo "<option value='' selected>YYYY</option>";
						}
						else{
							echo "<option value=''>YYYY</option>";
						}
						for($i=date("Y")-60; $i<=date("Y"); $i++) {
							if($_SESSION['dob_yyyy'] == $i)
								echo "<option value='$i' selected>$i</option>";
							else
								echo "<option value='$i'>$i</option>";
						}	
						?>
					</select>
				</div>
			<i class="fa fa-wrench"></i>
			<div class="row">
				<input id="update" type="submit" value="Update">
			</div>
		</div>
	</div>
	</form>
</span>
</div>

<?php include("../header_footer/footer.php"); ?>