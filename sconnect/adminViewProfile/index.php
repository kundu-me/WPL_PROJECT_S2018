<!-- @author: Gunjan Tomer
	Profile Page for SConnect
	Updated on: 03/28/2018 -->

	<?php include('../header_footer/header.php'); ?>

	<?php include('../data/adminViewProfile/adminViewProfile.php'); ?>
	<?php include('../data/profile/profile.php'); ?>


	<link rel="stylesheet" type="text/css" href="../static/css/profile/profile_page.css">
	
	<script type="text/javascript" src="../static/js/adminViewProfile/adminViewprofile.js"></script>

	<div id="page">
		<div class="col-sm-12 col-md-12 col-lg-3" id="profile_card">
			<?php include('../data/adminViewProfile/admin_profile_card.php');	?>
		</div>
		<input type="hidden" id="viewed_user_hash" <?php echo 'value="' .$_GET['q'].'">' ?>>
		<div class="col-sm-12 col-md-12 col-lg-8" style="text-align: left;" id="profile_main">
			<span class="container-fluid text-center">
				<form class="card_main">
					<div id="deleteProfileDiv" class="hover" align="right">
						<i class="fa fa-trash" id="delete_profile" style="font-size: 2.0em;"></i>
						<p class="tooltip">Disable User Profile</p>
					</div>
					<div class="container">
						<div class="row" style="text-align: center;">
							<span class="sconnect-profile-header">Profile - <?php echo " " . $fname_alt . " " . $lname_alt ?> 
							</div>
							<div class="row marketing">
								<div class="degree_div col-lg-12 col-lg-2">
									<label id="degree">Degree: </label>
									<?php
									$name = 'degree_dropdown';
									$options = $deg_array;
									$selected = $degree_alt;
									echo dropdown($name, $options, $selected);
									?>
								</div>
							</div>
							<div class="row">
								<div class="major-div col-lg-12 col-lg-3">
									<label id="major">Major: </label>
									<?php
									$name = 'major_dropdown';
									$options = $maj_array;
									$selected = $major_alt;
									echo dropdown($name, $options, $selected);
									?>
								</div>
							</div>
							<div class="row">
								<div class="email-div col-lg-12 col-lg-3"><label>Email: </label><br><label id="email"><?php echo $email_alt; ?></label>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-lg-10"><label>Courses enrolled: </label>
									<div>
										<table id="courses" class="table table-striped table-bordered table-hover table-responsive">
											<tr class="header">
												<th class="col-lg-3">Course</th>
												<th class="col-lg-2">Code</th>
												<th class="col-lg-3">Session</th>
											</tr>
											<?php include('../data/viewProfile/courses_populate.php'); ?>
										</table>
									</div>
								</div>
							</div>
							<!-- <div class="row">
								<button type="button" id="add_course" <?php 
								if($position_alt == 'student'){
									echo "onclick = open_course_box()"; }
									else if($position_alt == 'faculty'){ 
										echo 'onclick = open_window()'; } 
										?>>Add new course</button>
									</div> -->
									<div id="lightbox" class="white_content">
										<?php include('course_box.php'); ?>
									</div>
									<div id="settings_lightbox" class="white_content">
										<?php include('settings_box.php'); ?>
									</div>
									<div class="row"><label for="dob-div">Date of birth: </label>
										<?php
										$month = date('n'); $day = date('d');
										?>
										<div id="dob-div">
											<div class="col-lg-12 col-lg-3">
												<select class="selectpicker form-control" data-width="30%" name="month" id="month">
													<option value=""  <?PHP if($dob_mm_alt==null) echo "selected";?>><strong>MM</strong></option>
													<option value="January"  <?PHP if($dob_mm_alt=='January') echo "selected";?>>January</option>
													<option value="February"  <?PHP if($dob_mm_alt=='February') echo "selected";?>>February</option>
													<option value="March"  <?PHP if($dob_mm_alt=='March') echo "selected";?>>March</option>
													<option value="April"  <?PHP if($dob_mm_alt=='April') echo "selected";?>>April</option>
													<option value="May"  <?PHP if($dob_mm_alt=='May') echo "selected";?>>May</option>
													<option value="June"  <?PHP if($dob_mm_alt=='June') echo "selected";?>>June</option>
													<option value="July"  <?PHP if($dob_mm_alt=='July') echo "selected";?>>July</option>
													<option value="August"  <?PHP if($dob_mm_alt=='August') echo "selected";?>>August</option>
													<option value="September"  <?PHP if($dob_mm_alt=='September') echo "selected";?>>September</option>
													<option value="October" <?PHP if($dob_mm_alt=='October') echo "selected";?>>October</option>
													<option value="November" <?PHP if($dob_mm_alt=='November') echo "selected";?>>November</option>
													<option value="December" <?PHP if($dob_mm_alt=='December') echo "selected";?>>December</option>
												</select>
											</div>
											<div class="col-lg-12 col-lg-3">
												<select class="selectpicker form-control" name="day" id="day">
													<?php 
													if($dob_dd_alt==null) {
														echo "<option value='' selected>DD</option>";
													}
													else{
														echo "<option value=''>DD</option>";
													}
													for($i=1; $i<=31; $i++) {
														if($dob_dd_alt == $i)
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
													if($dob_yyyy_alt==null) {
														echo "<option value='' selected>YYYY</option>";
													}
													else{
														echo "<option value=''>YYYY</option>";
													}
													for($i=1902; $i<=2018; $i++) {
														if($dob_yyyy_alt == $i)
															echo "<option value='$i' selected>$i</option>";
														else
															echo "<option value='$i'>$i</option>";
													}	
													?>
												</select>
											</div>				
										</div>
									</div>
									<div class="row">
										<input id="update" type="submit" value="Update" align="center">
									</div>
								</div>
							</form>
						</span>
					</div>
				</div>
				<?php include("../header_footer/footer.php"); ?>