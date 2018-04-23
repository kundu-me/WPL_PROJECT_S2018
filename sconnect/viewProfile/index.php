`<!-- @author: Gunjan Tomer
	Profile Page for SConnect
	Updated on: 03/28/2018 -->

	<?php include('../header_footer/header.php'); ?>

	<?php include('../data/connection_open.php') ?> 

	<?php include('../data/viewProfile/viewProfile.php'); ?>

	<?php include('viewProfile_settings_fetch.php'); ?>


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../static/css/profile/profile_page.css">
<!-- 	<script type="text/javascript" src="../static/js/profile/profile.js"></script>
 -->	<title><?php echo "SConnect " .$fname.' '.$lname; ?></title>
	<div id="page">
		<input type="hidden" id="viewed_user_hash" <?php echo 'value="' .$_GET['q'].'">' ?>>
		<div class="col-sm-12 col-md-12 col-lg-3">
			<span class="left_pane">
				<div class="card container">
					<?php
					if($profile_image_path==null) {
						$profile_image_path = 'sample.jpg';
					}
					echo '<img src="../user_data/' .$profile_image_path.'" alt="Display Image" style="width: 100%">'
					?>
					<?php 
					echo '<h1>'.$fname.' '.$lname.'</h1>'
					?>
					<p class="title"><?php echo $position ?><br><?php echo $degree ?> <br> <?php echo $major ?></p>
					<p><?php echo $university_domain ?></p>
					<img src="<?php echo '../university_data/logo/' . $university_domain . '.jpg'?>" alt="University Logo" style="width: 30%"> 
					<p><button>Connect</button></p>
					<?php
					if($resume_path==null) {
						$resume_path = 'sample.pdf';
					}
					echo '<a href="../user_data/' .$resume_path.'" target="_blank"><embed src="../user_data/' .$resume_path.'" width="200px" height="295px" scale="tofit"></embed></a>'
					?>
				</div>
			</span>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-8" style="text-align: left;">
			<span class="container-fluid text-center">
				<div class="card_main">
					<div class="container">
						<div class="row" style="text-align: center;">
							<span class="sconnect-profile-header">Profile - <?php echo " " . $fname . " " . $lname ?> 
							</span>
						</div>
						<div class="row marketing">

							<div class="degree_div col-lg-12 col-lg-2" <?php if($user_degree_view == 2){ echo 'style="display:none;"'; } ?>>
								<label id="degree">Degree: <?php echo " " . $degree ?></label>
							</div>
						</div>
						<div class="row">
							<div class="major-div col-lg-12 col-lg-3" <?php if($user_major_view == 2){ echo 'style="display:none;"'; } ?>>
								<label id="major">Major: <?php echo $major ?> </label>
							</div>
						</div>
						<div class="row">
							<div class="email-div col-lg-12 col-lg-3"><label>Email: </label><br><label id="email"><?php echo $email; ?></label>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12 col-lg-10" <?php if($user_courses_view == 2){ echo 'style="display:none;"'; } ?>><label>Courses enrolled: </label>
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
							<div id="dob-div">
								<div class="col-lg-12 col-lg-3" <?php if($user_dob_view == 2){ echo 'style="display:none;"'; } ?>>
									<label>Date of Birth: <?php echo $dob_dd. " " .$dob_mm. " " .$dob_yyyy ?></label>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</span>
		</div>

		<?php include("../header_footer/footer.php"); ?>