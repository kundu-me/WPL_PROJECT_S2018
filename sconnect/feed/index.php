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
       <span class="left_pane">
		<div class="card">
			<?php
			if($_SESSION['profile_image_path']==null) {
				$_SESSION['profile_image_path'] = 'sample.jpg';
			}
			echo '<img src="../user_data/' .$_SESSION['profile_image_path'].'" alt="Display Image" style="width: 100%">'
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
	</span>
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