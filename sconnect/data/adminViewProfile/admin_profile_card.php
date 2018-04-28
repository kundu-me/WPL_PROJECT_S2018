<!-- @author: Gunjan Tomer <gxt160930@utdallas.edu>
	 @page: A different profile card for admin view profile
	 Updated on: 04/25/2018 -->

<span class="left_pane">
	<div class="card container">
		<?php
		if($profile_image_path_alt==null) {
			$profile_image_path_alt = '../user_data/profile_image/profile.png';
		}
		echo '<img src="../user_data/'.$profile_image_path_alt.'" alt="Display Image" style="width: 100%" id="profile_image">';
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
		echo '<h1>'.$fname_alt.' '.$lname_alt.'</h1>'
		?>
		<p class="title"><?php echo strtoupper($position_alt) ?><br> and <br><?php echo $degree_alt ?> <br> <?php echo $major_alt ?></p>
		<img src="<?php echo '../university_data/logo/' . $university_domain_alt . '.jpg'?>" alt="University Logo" style="width: 30%"> 
		<p><button>Connect</button></p>
		<?php
		if($resume_path_alt==null) {
			$resume_path_alt = '../user_data/resume/sample.pdf';
		}
		echo '<a href="../user_data/' .$resume_path_alt.'" target="_blank"><embed src="../user_data/' .$resume_path_alt.'" width="200px" height="295px" scale="tofit"></embed></a>'
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
