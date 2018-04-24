/*
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Feed
    @description: This is the main landing page when the user login
                  Need to Update
*/

jQuery(document).ready(function () {

  $("#search-feed-divs").empty();
	getFeedPost(true);

});

function getFeedPost(isAll) {

    $.ajax({
      type: "POST",
      url: "../data/viewFeed/getFeedDetails.php",
      data: { searchQuery: $("#feedhash").val() },
      success: function(result) {

        console.log(result);
        var objResult = JSON.parse(result);

        if(objResult['success'] == 'false') {

          var feed =   '<div class="row marketing search-feed-div">' +
            '<div class="col-sm-12 col-md-12 col-lg-3" style="text-align: left;">' + 
            '<span><img class="feed-user-profile-image" src="../user_data/profile_image/sample.jpg"></span>' + 
            '</div>' + 
            '<div class="col-sm-12 col-md-12 col-lg-9" style="text-align: left;">' + 
            '<span class="feed-user-name">Feed does not exists</span>' + 
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
        var activities = JSON.parse(objResult['activities']);
        var comments = JSON.parse(objResult['comments']);

        if(isAll == false) {
          updateComments(comments);
          return;
        }

        var searchFeed = searchFeeds[$("#feedhash").val()];
        var currFeedhash = searchFeed['feedhash'];

        var countLikes = activities[currFeedhash] == undefined? 0: (activities[currFeedhash]['likes'] == undefined? 0 : activities[currFeedhash]['likes']);
        var countDislikes = activities[currFeedhash] == undefined? 0: (activities[currFeedhash]['dislikes'] == undefined? 0 : activities[currFeedhash]['dislikes']);


        var feed = '<div class="row marketing search-feed-div" id="' + currFeedhash + '">';

        if(searchFeed['photo_path'] != null || searchFeed['video_path'] != null) {
          feed = '<div class="row marketing search-feed-div-with-element" id="' + currFeedhash + '">';
        }

        feed +=    '<div class="col-sm-12 col-md-12 col-lg-3" style="text-align: left;">' + 
                   '<span><img class="feed-user-profile-image" src="../user_data/' + searchFeed['user_from_profile_image_path'] + '"></span>' + 
                   '</div>' + 
                   '<div class="col-sm-12 col-md-12 col-lg-8" style="text-align: left;">' + 
                   '<span class="feed-user-name">' + searchFeed['user_from_name'] + '</span>' + 
                   '<br>' + 
                   '<span class="feed-user-data">' + searchFeed['user_from_university_domain'] + ' ' + searchFeed['user_from_position'] + '</span>' + 
                   '<br>' + 
                   '<br>' + 
                   '<span class="feed-text-data">' + searchFeed['text_data'] + '</span>';

      if(searchFeed['photo_path'] != null) {
          feed += '<div style="height:200px; padding-top:10px;"><embed src="http://www.sconnect.kundu.me/feed_data/image/' + searchFeed['photo_path'] + '" width="100%" height="250px;" scale="tofit"></embed></div>';
        }
        else if(searchFeed['video_path'] != null) {
          feed += '<div style="height:200px; padding-top:10px;"><video width="100%" height="250px;" controls><source src="http://www.sconnect.kundu.me/feed_data/video/' + searchFeed['video_path'] + '" type="video/mp4"></video></div>';
        }
        
        feed +=    '</div>' +
                   '<div class="col-sm-12 col-md-12 col-lg-1">';

        if($("#session-position").val() == "admin") {

          feed += '<button class="delete-button" onclick="deleteFeed(\'' + searchFeed['feedhash'] + '\')" title="Delete Post"><i class="fa fa-trash-o"></i></button>';
        }
        else if($("#session-userhash").val() == searchFeed['userhash_from']) {
          
          feed += '<button class="delete-button" onclick="deleteFeed(\'' + searchFeed['feedhash'] + '\')" title="Delete Post"><i class="fa fa-trash-o"></i></button>';
        }
        feed += '</div>';
        feed += '</div>';
        feed += '<div class="row marketing search-activity-div">';
        feed += '<div class="col-sm-12 col-md-12 col-lg-4" onclick="insertActivity(\'true\')"><span class="glyphicon glyphicon-thumbs-up icon-like-dislike"></span>&nbsp;<span id="likes-count">' + countLikes + '</span></div>'; 
        feed += '<div class="col-sm-12 col-md-12 col-lg-4" onclick="insertActivity(\'false\')"><span class="glyphicon glyphicon-thumbs-down icon-like-dislike"></span>&nbsp;<span id="dislikes-count">'+ countDislikes + '</span></div>'; 
        feed += '<div class="col-sm-12 col-md-12 col-lg-4"><span class="glyphicon glyphicon-comment icon-like-dislike"></span>&nbsp;<span>Comment</span></div>';
        feed += '</div>';

        feed += '<div class="row marketing search-comment-div">';

         feed += '<div class="col-sm-12 col-md-12 col-lg-1" style="text-align: left;"><span><img class="comment-user-profile-image" src="../user_data/' + searchFeed['user_from_profile_image_path'] + '"></span></div>'; 
         feed += '<div class="col-sm-12 col-md-12 col-lg-10 user-comment-spans" style="text-align: left;">' + 
                  '<span class="comment-user-name">' + $("#session-fname").val() + ' ' + $("#session-lname").val() + '</span>'+
                  '<br>' + 
                  '<span class="feed-user-data">' + $("#session-university_domain").val() + ' ' + $("#session-position").val() + '</span>' + 
                  '<br>'+
                  '<br>'+
                  '<div class="input-group">'+
                  '<input type="text" name="newComment" id="newComment" onkeypress="javascript:insertCommentOnEnter(event)" class="form-control input-comment">'+
                  '<div class="input-group-btn">' + 
                  '<button class="btn btn-default" id="newCommentButton" onclick="insertComment()"><i class="glyphicon glyphicon-play"></i></button>' + 
                  '</div>' + 
                  '</div>' + 
                  '</div>'; 

         feed += '<div class="col-sm-12 col-md-12 col-lg-1" style="text-align: right;"><span></span></div>';
         feed += '</div>';

         feed += '<div id="allCommentsDiv"></div>';
        $("#search-feed-divs").append(feed);
        updateComments(comments);
      }
    });
  }

  function updateComments(comments) {


    var feed = '';
    if(comments != undefined && comments != null) {

          for(var commenthashKey in comments) {

            var comment = comments[commenthashKey];

            console.log(comment);

             feed += '<div class="row marketing search-comment-div">';

             feed += '<div class="col-sm-12 col-md-12 col-lg-1" style="text-align: left;"><span><img class="comment-user-profile-image" src="../user_data/' + comment['user_from_profile_image_path'] + '"></span></div>'; 
             feed += '<div class="col-sm-12 col-md-12 col-lg-10 user-comment-spans" style="text-align: left;">' + 
                      '<span class="comment-user-name">' + comment['user_from_name'] + '</span>'+
                      '<br>' + 
                      '<span class="feed-user-data">' + comment['user_from_university_domain'] + ' ' + comment['user_from_position'] + '</span>' + 
                      '<br>'+
                      '<br>'+
                      '<span>' + comment['comment'] + '</span>'+
                      '</div>'; 
             feed += '<div class="col-sm-12 col-md-12 col-lg-1" style="text-align: right;"><span></span></div>';
             feed += '</div>';

          }
        }

        $("#allCommentsDiv").empty().append(feed);

  }

  function insertCommentOnEnter(event) {

    if(event.key == 'Enter') {
      insertComment();
    }
  }

  function insertComment() {

    if($("#newComment").val().trim() == "") {
      return;
    }

    var d = new Date();
    yyyy = d.getFullYear();
    mm = ((d.getMonth()+1) < 10 ? '0' : '') + (d.getMonth()+1);
    dd = (d.getDate() < 10 ? '0' : '') + d.getDate();
    hh = (d.getHours() < 10 ? '0' : '') + d.getHours();
    mm = (d.getMinutes()<10 ? '0' : '') + d.getMinutes();
    var currentDateTime = yyyy + mm + dd + hh + mm;

  $.ajax({
      type: "POST",
      async: true,
      url: "../data/viewFeed/insertComment.php",
      data: {comment: $("#newComment").val(), feedhash: $("#feedhash").val(), currentDateTime: currentDateTime},
      success: function(result) {

        console.log(result);
        var objResult = JSON.parse(result);
        console.log(objResult);

        //location.reload();
        if(objResult['success'] == "true") {
          getFeedPost(false);
          $("#newComment").val("");
        }
      }
  });
}
  function insertActivity(islikes) {

  $.ajax({
      type: "POST",
      async: true,
      url: "../data/viewFeed/insertActivity.php",
      data: {feedhash: $("#feedhash").val(), islikes: islikes},
      success: function(result) {

        console.log(result);
        var objResult = JSON.parse(result);
        console.log(objResult);

        if(objResult['success'] == "true") {

          if(islikes == "true") {
            $("#likes-count").text(parseInt($("#likes-count").text()) + 1)
          }
          else if(islikes == "false") {
            $("#dislikes-count").text(parseInt($("#dislikes-count").text()) + 1)
          }
        }
      }
  });
}