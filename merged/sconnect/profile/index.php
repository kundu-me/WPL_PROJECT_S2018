<!-- @author: Gunjan Tomer
	Profile Page for SConnect
	Updated on: 03/28/2018 -->

	<?php include('../session_verify.php') ?>

	<?php include('../header_footer/header.php'); ?>

	<?php include('../data/connection_open.php') ?> 

	<?php include('../data/profile/profile.php'); ?>


	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../static/css/profile/profile_page.css">
<!-- 	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
-->	<title><?php echo "SConnect " .$_SESSION['fname'].' '.$_SESSION['lname']; ?></title>
<div id="page">
	<span class="left_pane">
		<div class="card">
			<?php
			if($_SESSION['profile_image_path']==null) {
				$_SESSION['profile_image_path'] = 'sample.jpg';
			}
			echo '<img src="../user_data/profile_image/' .$_SESSION['profile_image_path'].'" alt="Display Image" style="width: 100%">'
			?>
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
			echo '<embed src="../user_data/' .$_SESSION['resume_path'].'" width="200px" height="295px" scale="tofit"></embed>'
			?>
			<p><button>Browse</button></p>

		</div>
		<div>

		</div>
	</span>
	<span class="container-fluid text-center">
		<form class="card_main" action="edit.php" method="POST">
			<ul>
				<li>
					<label id="degree">Degree: </label>
					<?php
					$name = 'degree_dropdown';
					$options = $deg_array;
					$selected = 1;

					echo dropdown($name, $options, $selected);
					?>
				</li>
				<li><label id="major">Major: </label>
					<?php
					$name = 'major_dropdown';
					$options = $maj_array;
					$selected = 1;

					echo dropdown($name, $options, $selected);
					?>
				</li>
				<li><label>Email: </label><label id="email"><?php echo $_SESSION['email']; ?></label></li>
				<li><label>Courses enrolled: </label>
					<div>
						<table id="courses" class="striped">
							<tr class="header">
								<th>Course</th>
								<th>Code</th>
								<th>Session</th>
							</tr>
							<tr><td>Advanced Sailing Maneuvers</td><td>AP 7522</td><td>Spring 2018</td></tr>
							<tr><td>Crew Development Studies</td><td>AP 6344</td><td>Spring 2018</td></tr>
						</table>
					</div>
				</li>
				<li>
					<button type="button" id="add_course" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Add new course</button>
				</li>
				<div id="light" class="white_content">
					<form name="course_add_form" method="post" action="otp_submit.php">
						<label id="OTP_label">Enter OTP provided by faculty</label>
						<input type="text" name="OTP_text" class="OTP_textbox" id="OPT_box">
						<input type="submit" id="OTP_submit_button" value="Verify">
						<button type="button" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</button>
					</div>
					<div id="fade" class="black_overlay"></div>
				</form>
								<!-- <script >
									var course_name_js = <?php echo json_encode($course_name, JSON_HEX_TAG); ?>;
									var course_code_js = <?php echo json_encode($course_code, JSON_HEX_TAG); ?>;
									var session_js = <?php echo json_encode($session, JSON_HEX_TAG); ?>;
									addToTable($course_name, $course_code, $session);
								</script> -->
								<li><label>Date of birth: </label>
									<?php
									$month = date('n'); $day = date('d'); 
									?>
									<div>
										<select name="month" id="month">
											<option value=""  <?PHP if($_SESSION['dob_mm']==null) echo "selected";?>>MM</option>
											<option value="1"  <?PHP if($_SESSION['dob_mm']=='1') echo "selected";?>>January</option>
											<option value="2"  <?PHP if($_SESSION['dob_mm']=='2') echo "selected";?>>February</option>
											<option value="3"  <?PHP if($_SESSION['dob_mm']=='3') echo "selected";?>>March</option>
											<option value="4"  <?PHP if($_SESSION['dob_mm']=='4') echo "selected";?>>April</option>
											<option value="5"  <?PHP if($_SESSION['dob_mm']=='5') echo "selected";?>>May</option>
											<option value="6"  <?PHP if($_SESSION['dob_mm']=='6') echo "selected";?>>June</option>
											<option value="7"  <?PHP if($_SESSION['dob_mm']=='7') echo "selected";?>>July</option>
											<option value="8"  <?PHP if($_SESSION['dob_mm']=='8') echo "selected";?>>August</option>
											<option value="9"  <?PHP if($_SESSION['dob_mm']=='9') echo "selected";?>>September</option>
											<option value="10" <?PHP if($_SESSION['dob_mm']=='10') echo "selected";?>>October</option>
											<option value="11" <?PHP if($_SESSION['dob_mm']=='11') echo "selected";?>>November</option>
											<option value="12" <?PHP if($_SESSION['dob_mm']=='12') echo "selected";?>>December</option>
										</select>

										<select name="day" id="day">
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

										<select name="year" id="year">
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
								</li>
							</ul>
							<button id="update" type="submit">UPDATE</button>
						</form>
					</span>
				</div>

				<?php include("../header_footer/footer.php"); ?>