	<!--
	    @author: Koulick Sankar Paul <koulick89@gmail.com> 
	    @author: Nirmallya Kundu <nxkundu@gmail.com>
	    @page: Feed
	    @description: This is the main landing page when the user login
	                  Need to Update
	              -->
      <?php include('../header_footer/header.php'); ?>

      <script src="../static/js/feed/feed.js"></script>
      <link rel="stylesheet" href="../static/css/feed/feed.css">

      <div class="row marketing left-right-com-div" style="margin-top: 15px;">
	   <div class="col-sm-12 col-md-12 col-lg-3" style="text-align: center;">
	   	<?php include('../card_left/index.php'); ?>
	   </div>

	   <div class="col-sm-12 col-md-12 col-lg-6 search-feed-divs" style="text-align: center;">
	   	<div id="newPost">
	   		<textarea placeholder="What's on your mind?" id="newPostTextArea" rows="8" cols="100"></textarea>
	   		<label id="add_text"></label>
	   		<div>
	   			<input type="file" id="my_image" name="image" accept=".jpg, .jpeg, .png">
	   			<label for="file-upload" class="custom-file-upload">
	   				<i class="fa fa-cloud-upload"></i> PHOTO
	   			</label>
	   			<input type="button" id="photo_upload" value="BROWSE" />
	   		</div>
				<div>
					<input type="file" id="my_video" name="video" accept="video/*">
					<label for="file-upload" class="custom-file-upload">
						<i class="fa fa-cloud-upload"></i> VIDEO
					</label>
					<input type="button" id="video_upload" value="BROWSE"/>
				</div>
				<div>
					<label>Select Audience: </label>
					<select id="select_Audience">
						<option value="Public" selected="selected">Public</option>
						<option value="University">University</option>
						<option value="Private">Private</option>
					</select>
				</div>
				<br/>
				<button id="submitPost">POST</button>
			</div>
			
			<div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;" id="search-feed-divs">
				<!-- Feed -->
			</div>

		</div>

		<div class="col-sm-12 col-md-12 col-lg-3" style="text-align: center;">
			<?php include('../card_right/index.php'); ?>
		</div>
	</div>
</div>
<?php include('../header_footer/footer.php'); ?>