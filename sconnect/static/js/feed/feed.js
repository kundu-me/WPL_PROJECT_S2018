/*
    @author: Koulick Sankar Paul <koulick89@gmail.com> 
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Feed
    @description: This is the main landing page when the user login
                  Need to Update
*/

jQuery(document).ready(function () {

	jQuery("#submitPost").click(function (e) {
		var textPost = $("#newPostTextArea").val();

		if(textPost == '') {
			return;
		}

		var d = new Date();
		yyyy = d.getFullYear();
		mm = ((d.getMonth()+1) < 10 ? '0' : '') + (d.getMonth()+1);
		dd = (d.getDate() < 10 ? '0' : '') + d.getDate();
		hh = (d.getHours() < 10 ? '0' : '') + d.getHours();
		mm = (d.getMinutes()<10 ? '0' : '') + d.getMinutes();
		var currentDateTime = yyyy + mm + dd + hh + mm;

		insertPost(textPost, currentDateTime);
	});

	getFeedPost();

});

function insertPost(textPost, currentDateTime) {
	$.ajax({
      type: "POST",
      async: true,
      url: "../data/feed/insertPost.php",
      data: {textPost: textPost, currentDateTime: currentDateTime},
      success: function(result) {

        console.log(result);
        var objResult = JSON.parse(result);
        console.log(objResult);

        location.reload();
      }
	});
}

function getFeedPost() {

    $.ajax({
      type: "POST",
      url: "../data/feed/getFeedData.php",
      data: { searchQuery: '' },
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

          var feed = '<div class="row marketing search-feed-div" id="' + searchFeed['feedhash'] + '">' +
                     '<div class="col-sm-12 col-md-12 col-lg-3" style="text-align: left;">' + 
                     '<span><img class="feed-user-profile-image" src="../user_data/profile_image/sample.jpg"></span>' + 
                     '</div>' + 
                     '<div class="col-sm-12 col-md-12 col-lg-8" style="text-align: left;">' + 
                     '<span class="feed-user-name">' + searchFeed['user_from_name'] + ' (' + searchFeed['userhash_from'] + ')</span>' + 
                     '<br>' + 
                     '<span class="feed-user-data">' + searchFeed['user_from_university_domain'] + ' ' + searchFeed['user_from_position'] + '</span>' + 
                     '<br>' + 
                     '<br>' + 
                     '<span class="feed-text-data">' + searchFeed['text_data'] + '</span>' + 
                     '</div>' +
                     '<div class="col-sm-12 col-md-12 col-lg-1">';

          if($("#session-position").val() == "admin") {

            feed += '<button class="delete-button" onclick="deleteFeed(\'' + searchFeed['feedhash'] + '\')" title="Delete Post"><i class="fa fa-trash-o"></i></button>';
          }
          else if($("#session-userhash").val() == searchFeed['userhash_from']) {
            
            feed += '<button class="delete-button" onclick="deleteFeed(\'' + searchFeed['feedhash'] + '\')" title="Delete Post"><i class="fa fa-trash-o"></i></button>';
          }
          
          feed += '</div>';

          $("#search-feed-divs").append(feed);
        }
      }
    });
  }