<!-- @author: Gunjan Tomer <gxt160930@utdallas.edu>
	@page: Profile Page for SConnect
	Updated on: 04/28/2018 -->

	<?php include('../header_footer/header.php'); ?>

	<?php include('../data/profile/profile.php'); ?>

	<?php include('../data/profile/settings_fetch.php'); ?>

	<script type="text/javascript" src="../static/js/profile/profile.js"></script>
	<script type="text/javascript" src="../static/js/profile/settings_box.js"></script>
	<link rel="stylesheet" type="text/css" href="../static/css/profile/profile_page.css">


	<div id="page">
		<div class="col-sm-12 col-md-12 col-lg-3" id="profile_card">
			<?php include('../data/profile/profile_card.php');	?>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-8" style="text-align: left;" id="profile_main">
			<span class="container-fluid text-center">
				<form class="card_main">
					<div id="toggleDiv" class="hover">
						<label class="switch">
							<input type="checkbox" id="toggle">
							<span class="slider"></span>
						</label>
						<p class="tooltip">Show privacy options</p>
					</div>
					<div class="container">
						<div class="row" style="text-align: center;">
							<span class="sconnect-profile-header">Profile - <?php echo " " . $_SESSION['fname'] . " " . $_SESSION['lname'] ?> 
							</div>
							<div class="row marketing">
								<div class="degree_div col-lg-12 col-lg-2">
									<label id="degree">Degree: </label>
									<i class="fa fa-wrench wrench" id="degree_hide"></i>
									<?php
									$name = 'degree_dropdown';
									$options = $deg_array;
									$selected = $_SESSION['degree'];
									echo dropdown($name, $options, $selected);
									?>
								</div>
							</div>
							<div class="row">
								<div class="major-div col-lg-12 col-lg-3">
									<label id="major">Major: </label>
									<i class="fa fa-wrench" id="major_hide"></i>
									<?php
									$name = 'major_dropdown';
									$options = $maj_array;
									$selected = $_SESSION['major'];
									echo dropdown($name, $options, $selected);
									?>
								</div>
							</div>
							<div class="row">
								<div class="email-div col-lg-12 col-lg-3"><label>Email: </label><br><label id="email"><?php echo $_SESSION['email']; ?></label>
								</div>
							</div>
							<div class="row" <?php if($_SESSION['position'] == 'faculty') {echo "style= 'display: none';";}?>>
								<div class="col-lg-12 col-lg-10"><label>Courses enrolled: </label>
									<i class="fa fa-wrench" id="courses_hide"></i>
									<div>
										<table id="courses" class="table table-striped table-bordered table-hover table-responsive">
											<tr class="header">
												<th class="col-lg-3">Course</th>
												<th class="col-lg-2">Code</th>
												<th class="col-lg-3">Session</th>
											</tr>
											<?php include('../data/profile/courses_populate.php'); ?>
										</table>
									</div>
								</div>
							</div>
							<div class="row">
								<button type="button" id="add_course" <?php 
								if($_SESSION['position'] == 'student'){
									echo "onclick = open_course_box()"; }
									else if($_SESSION['position'] == 'faculty'){ 
										echo 'onclick = open_window()'; } 
										?>>Add new course</button>
									</div>
									<div id="lightbox" class="white_content">
										<?php include('../data/profile/course_box.php'); ?>
									</div>
									<div id="settings_lightbox" class="white_content">
										<?php include('../data/profile/settings_box.php'); ?>
									</div>
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
													for($i=1902; $i<=2018; $i++) {
														if($_SESSION['dob_yyyy'] == $i)
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