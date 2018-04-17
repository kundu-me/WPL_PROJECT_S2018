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
   <!-- <div class="row header">
   </div> -->
    <div class="col-sm-12 col-md-12 col-lg-3" style="text-align: center;">
       
    </div>

     <div class="col-sm-12 col-md-12 col-lg-6 search-feed-divs" style="text-align: center;">
       <div id="newPost">
			<textarea title="newPostText" placeholder="What's on your mind?" id="newPostTextArea" rows="8" cols="100"></textarea>
			<div id="action_bar">
				<label for="file-upload" class="custom-file-upload">
				    <i class="fa fa-cloud-upload"></i> PHOTO
				</label>
				<input id="photo-upload" type="file"/>

				<label for="file-upload" class="custom-file-upload">
				    <i class="fa fa-cloud-upload"></i> VIDEO
				</label>
				<input id="video-upload" type="file"/>

				<input id="submitPost" type="submit"/>
			</div>
		</div>
		

		<div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;" id="search-feed-divs">
			<!-- Feed -->
		</div>

    </div>

     <div class="col-sm-12 col-md-12 col-lg-3" style="text-align: center;">
       <div>
       	News
       </div>
    </div>
 </div>
</div>
<?php include('../header_footer/footer.php'); ?>