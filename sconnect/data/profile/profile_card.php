<!-- @author: Gunjan Tomer <gxt160930@utdallas.edu>
	@page: Profile Card for displaying user image, resume and position in the university
	Updated on: 04/25/2018 -->

<span class="left_pane">
	<div class="card container">
		<?php
		if($_SESSION['profile_image_path']==null) {
			$_SESSION['profile_image_path'] = '../user_data/profile_image/profile.png';
		}
		echo '<img src="../user_data/'.$_SESSION['profile_image_path'].'" alt="Display Image" style="width: 100%" id="profile_image">';
		?>
		<div>
			<input id="my_image" type="file" name="image_upload">
			<div class="browse_show" id="image_browse_div">
				<i class="fa fa-upload"></i>
			</div>
			<input type="button" id="get_image" value="Browse">
			<button id="upload_image" name="upload_image">Upload</button>
		</div>



		<?php 
		echo '<h1>'.$_SESSION['fname'].' '.$_SESSION['lname'].'</h1>'
		?>
		<p class="title"><?php echo strtoupper($_SESSION['position']) ?><br> and <br><?php echo $_SESSION['degree'] ?> <br> <?php echo $_SESSION['major'] ?></p>
		<img src="<?php echo '../university_data/logo/' . $_SESSION['university_domain'] . '.jpg'?>" alt="University Logo" style="width: 30%"> 
		<p><button>Connect</button></p>
		<?php
		if($_SESSION['resume_path']==null) {
			$_SESSION['resume_path'] = '../../user_data/resume/sample.pdf';
		}
		echo '<a href="../user_data/' .$_SESSION['resume_path'].'" target="_blank"><embed src="../user_data/' .$_SESSION['resume_path'].'" width="200px" height="295px" scale="tofit"></embed></a>'
		?>
		<div>
			<input id="my_resume" type="file" name="resume_upload">
			<div class="browse_show" id="resume_browse_div">
				<i class="fa fa-upload"></i>
			</div>
			<input type="button" id="get_resume" value="Browse">
			<button id="upload_resume" name="upload_resume">Upload</button>
		</div>
	</div>
</span>
