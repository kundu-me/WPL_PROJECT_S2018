	<!--
	    @author: Nirmallya Kundu <nxkundu@gmail.com>
	    @page: Feed
	    @description: This is the main landing page when the user login
	                  Need to Update
	              -->
      <?php include('../header_footer/header.php'); ?>

      <script src="../static/js/approveFeed/approveFeed.js"></script>
      <link rel="stylesheet" href="../static/css/feed/feed.css">

      <div class="row marketing left-right-com-div" style="margin-top: 15px;">
	   <div class="col-sm-12 col-md-12 col-lg-3" style="text-align: center;">
	   	<?php include('../card_left/index.php'); ?>
	   </div>

	   <div class="col-sm-12 col-md-12 col-lg-6 search-feed-divs" style="text-align: center;">
			
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