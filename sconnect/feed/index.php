<!--
    @author: Koulick Sankar Paul <koulick89@gmail.com> 
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Feed
    @description: This is the main landing page when the user login
                  Need to Update
-->

<?php include('../session_verify.php'); ?>
<?php include('../header_footer/header.php'); ?>

<script src="../static/js/feed/feed.js"></script>
<link rel="stylesheet" href="../static/css/feed/feed.css">

<div class="row marketing left-right-com-div" style="margin-top: 15px;">
   <!-- <div class="row header">
   </div> -->
    <div class="col-sm-12 col-md-12 col-lg-2" style="text-align: center;">
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

     <div class="col-sm-12 col-md-12 col-lg-8 search-feed-divs" style="text-align: center;">
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
			<!-- <div class="row marketing search-feed-div">
		        <div class="col-sm-12 col-md-12 col-lg-3" style="text-align: left;">
		          <span><img class="feed-user-profile-image" src="../user_data/profile_image/sample.jpg"></span>
		        </div>
		        <div class="col-sm-12 col-md-12 col-lg-9" style="text-align: left;">
		         <span class="feed-user-name">a</span>
		         <br>
		         <span class="feed-user-data">a</span>
		         <br>
		         <br>
		         <span class="feed-text-data">a</span>
		        </div>
		    </div> -->
		</div>

    </div>

     <div class="col-sm-12 col-md-12 col-lg-2" style="text-align: center;">
       <div>
       	News
       </div>
    </div>
 </div>
</div>
<style type="text/css">
	
	.search-feed-div {
    padding-left: 20px;
    padding-top: 10px;
    margin-top: 20px;
    border: 2px;
    background: white;
    height: 150px;
    cursor: pointer;
  }
  .search-feed-divs {
    overflow-y: scroll;
  }
  .feed-user-profile-image {
    width:120px;
    height:120px;
    vertical-align: middle;
    padding-top: 10px;
  }
  .feed-user-name {

    color: blue;
    text-decoration: underline;
    font-weight: bold;
    font-size: 18px;
  }
  .feed-user-data {

    color: black;
    font-size: 12px;
    font-style: italic;
  }
  .feed-text-data {

    color: black;
    font-style: italic;
    font-size: 16px;
  }
</style>
<?php include('../header_footer/footer.php'); ?>