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
    data: { searchQuery: '' , status : '1'},
    success: function(result) {

      console.log(result);
      var objResult = JSON.parse(result);

      if(objResult['success'] == 'false') {

        var feed =   '<div class="row marketing search-feed-div">' +
        '<div class="col-sm-12 col-md-12 col-lg-3" style="text-align: left;">' + 
        '<span><img class="feed-user-profile-image" src="../user_data/profile_image/sample.jpg"></span>' + 
        '</div>' + 
        '<div class="col-sm-12 col-md-12 col-lg-9" style="text-align: left;">' + 
        '<span class="feed-user-name">a</span>' + 
        '<br>' + 
        '<span class="feed-user-data">a</span>' + 
        '<br>' + 
        '<br>' + 
        '<span class="feed-text-data">a</span>' + 
        '</div>' + 
        '</div>';

        $("#search-feed-divs").empty().append(feed);
      }

      var searchFeeds = JSON.parse(objResult['message']);
      console.log(searchFeeds);

      for(var key in searchFeeds) {

        var searchFeed = searchFeeds[key];

        var feed = '<div class="row marketing search-feed-div" id="feed_div_' + searchFeed['feedhash'] + '">' +
        '<div class="col-sm-12 col-md-12 col-lg-3" style="text-align: left;">' + 
        '<span><img class="feed-user-profile-image" src="../user_data/profile_image/sample.jpg"></span>' + 
        '</div>' + 
        '<div class="col-sm-12 col-md-12 col-lg-7" style="text-align: left;">' + 
        '<span class="feed-user-name">' + searchFeed['user_from_name'] + ' (' + searchFeed['userhash_from'] + ')</span>' + 
        '<br>' + 
        '<span class="feed-user-data">' + searchFeed['user_from_university_domain'] + ' ' + searchFeed['user_from_position'] + '</span>' + 
        '<br>' + 
        '<br>' + 
        '<span class="feed-text-data">' + searchFeed['text_data'] + '</span>' + 
        '</div>' +
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