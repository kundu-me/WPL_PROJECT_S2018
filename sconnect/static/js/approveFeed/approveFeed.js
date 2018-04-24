/*
    @author: Koulick Sankar Paul <koulick89@gmail.com> 
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Feed
    @description: This is the main landing page when the user login
                  Need to Update
                  */

jQuery(document).ready(function () {

  getFeedPost();

});


function getFeedPost() {

  $.ajax({
    type: "POST",
    url: "../data/feed/getFeedData.php",
    data: { searchQuery: '' , status : '2'},
    success: function(result) {

      console.log(result);
      var objResult = JSON.parse(result);

      if(objResult['success'] == 'false') {

        var feed =   '<div class="row marketing search-feed-div">' +
        '<div class="col-sm-12 col-md-12 col-lg-3" style="text-align: left;">' + 
        '<span></span>' + 
        '</div>' + 
        '<div class="col-sm-12 col-md-12 col-lg-9" style="text-align: left;">' + 
        '<span class="feed-user-name">No Pending Post</span>' + 
        '<br>' + 
        '<span class="feed-user-data"></span>' + 
        '<br>' + 
        '<br>' + 
        '<span class="feed-text-data"></span>' + 
        '</div>' + 
        '</div>';

        $("#search-feed-divs").empty().append(feed);
      }

      var searchFeeds = JSON.parse(objResult['message']);
      console.log(searchFeeds);

      for(var key in searchFeeds) {

        var searchFeed = searchFeeds[key];

        var feed = '';
        feed = '<div class="row marketing search-feed-div" id="feed_div_' + searchFeed['feedhash'] + '">';
        
        if(searchFeed['photo_path'] != null || searchFeed['video_path'] != null) {
          feed = '<div class="row marketing search-feed-div-with-element" id="feed_div_' + searchFeed['feedhash'] + '" onclick="location.href=(\'../viewFeed/?q=' + searchFeed['feedhash'] +'\')">';
        }

        feed += '<div class="col-sm-12 col-md-12 col-lg-3" style="text-align: left;">' + 
        '<span><img class="feed-user-profile-image" src="../user_data/' + searchFeed['user_from_profile_image_path'] + '"></span>' + 
        '</div>' + 
        '<div class="col-sm-12 col-md-12 col-lg-7" style="text-align: left;">' + 
        '<span class="feed-user-name">' + searchFeed['user_from_name'] + '</span>' + 
        '<br>' + 
        '<span class="feed-user-data">' + searchFeed['user_from_university_domain'] + ' ' + searchFeed['user_from_position'] + '</span>' + 
        '<br>' + 
        '<br>' + 
        '<span class="feed-text-data">' + searchFeed['text_data'] + '</span>'; 

        if(searchFeed['photo_path'] != null) {
          feed += '<div style="height:200px; padding-top:10px;"><embed src="../feed_data/image/' + searchFeed['photo_path'] + '" width="100%" height="250px;" scale="tofit"></embed></div>';
        }
        else if(searchFeed['video_path'] != null) {
          feed += '<div style="height:200px; padding-top:10px;"><video width="100%" height="250px;" controls><source src="../feed_data/video/' + searchFeed['video_path'] + '" type="video/mp4"></video></div>';
        }

        feed += '</div>' +
        '<div class="col-sm-12 col-md-12 col-lg-2">';

        feed += '<div class="col-sm-12 col-md-12 col-lg-1"><button class="delete-button" onclick="approveFeed(\'' + searchFeed['feedhash'] + '\')" title="Approve Post"><i class="fa fa-check"></i></button></div>';
        feed += '<div class="col-sm-12 col-md-12 col-lg-1"><button class="delete-button" onclick="disapproveFeed(\'' + searchFeed['feedhash'] + '\')" title="Delete Post"><i class="fa fa-close"></i></button></div>';
        feed += '</div>';

        $("#search-feed-divs").append(feed);
      }
    }
  });
}

function approveFeed(feedhash) {

    $.ajax({
      type: "POST",
      url: "../data/feed/approveFeed.php",
      data: {feedhash:feedhash, approveFeedStatus:"0"},
      success: function(result) {

        console.log(result);

        location.href= "../approveFeed/";
      }
    });
}

function disapproveFeed(feedhash) {

    $.ajax({
      type: "POST",
      url: "../data/feed/approveFeed.php",
      data: {feedhash: feedhash, approveFeedStatus:"1"},
      success: function(result) {

        console.log(result);

        location.href= "../approveFeed/";
      }
    });
}