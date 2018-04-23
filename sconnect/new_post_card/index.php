<!--
    @author: Koulick Sankar Paul <koulick89@gmail.com>
    @page: New Post Card (used in feed and viewProfile)
    @description: This page shows the new post area for uploading text, photo and video
-->

	<div id="newPost">
		<div class="col-sm-12 col-md-12 col-lg-12">
			<textarea placeholder="What's on your mind?" id="newPostTextArea" rows="8" cols="80"></textarea>
			<label id="add_text"></label>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-3">
			<input type="file" id="my_image" name="image" accept="image/*">
			<label for="my_image" class="custom-file-upload">
				<i class="fa fa-cloud-upload"></i>
				PHOTO
			</label>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-3">
			<input type="file" id="my_video" name="video" accept="video/*">
			<label for="my_video" class="custom-file-upload">
				<i class="fa fa-cloud-upload"></i> VIDEO
			</label>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-3" style="padding: 5px;">
			<select id="select_Audience">
				<option value="Public" selected="selected">Public</option>
				<option value="University">University</option>
				<option value="Private">Private</option>
			</select>
		</div>
		<div class="col-sm-12 col-md-12 col-lg-3" style="padding: 5px;">
			<button id="submitPost">POST</button>
		</div>
	</div>