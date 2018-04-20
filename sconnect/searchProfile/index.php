<!--
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Feed
    @description: This is the main landing page when the user login
                  Need to Update
-->

<?php include('../header_footer/header.php'); ?>
<script src="https://cdn.jsdelivr.net/mark.js/7.0.0/jquery.mark.min.js"></script>
<div class="row marketing left-right-com-div" style="margin-top: 15px;">
    <div class="col-sm-12 col-md-12 col-lg-3" style="text-align: center;">
       <?php include('../card_left/index.php'); ?>
    </div>

     <div class="col-sm-12 col-md-12 col-lg-6 search-profile-divs" style="text-align: center;" id= "search-profile-divs">
       Search Profile
       <div class="row marketing search-profile-div">
        <div class="col-sm-12 col-md-12 col-lg-3" style="text-align: left;">
          <span></span>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-9" style="text-align: left;">
         <span></span>
        </div>
       </div>
    </div>

     <div class="col-sm-12 col-md-12 col-lg-3" style="text-align: center;">
       
    </div>
</div>
<?php include('../header_footer/footer.php'); ?>

<style type="text/css">
  .search-profile-div {
    padding-left: 20px;
    padding-top: 10px;
    margin-top: 20px;
    border: 2px;
    background: white;
    height: 150px;
    cursor: pointer;
  }
  .search-profile-divs {
    overflow-y: scroll;
  }
  .user-profile-image {
    width:120px;
    height:120px;
    vertical-align: middle;
    padding-top: 10px;
  }
  .user-name {

    color: blue;
    text-decoration: underline;
    font-weight: bold;
    font-size: 18px;
  }
  .user-position {

    color: black;
    font-style: italic;
    font-size: 16px;
    text-transform: uppercase;
  }
  .user-university {

    color: black;
    font-style: italic;
    font-size: 16px;
    text-transform: uppercase;
  }
  .user-info {
    padding-top: 20px;
  }
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
  
  mark {
    background-color: #FFD700;
  }
</style>

<script type="text/javascript">

  $(document).ready(function(){

    $("#searchQueryButton").unbind("click");
    $("#searchQuery").unbind("keypress");

    var searchParams = new URLSearchParams(window.location.search);
    if(searchParams.has('q')) {

      var q = searchParams.get('q');
      $("#searchQuery").val(q);
      $("#search-profile-divs").empty();
      searchProfile();
      searchFeed();
    }

    $("#searchQueryButton").click(function() {
      $("#search-profile-divs").empty();
      searchProfile();
      searchFeed();
    });

    $("#searchQueryButton").click(function() {
      $("#search-profile-divs").empty();
      searchProfile();
      searchFeed();
    });
    

    $("#searchQuery").keypress(function(e) {
      if(e.keyCode == 13) {
        $("#search-profile-divs").empty();
        searchProfile();
        searchFeed();
      }
    });
  });
  
  function searchProfile() {

    if($("#searchQuery").val() == '') {
      return;
    }
    $.ajax({
      type: "POST",
      url: "../data/searchProfile/searchProfile.php",
      data: { searchQuery: $("#searchQuery").val() },
      async: true,
      success: function(result) {

        console.log(result);
        var objResult = JSON.parse(result);

        if(objResult['success'] == 'false') {

          var profile =   '<div class="row marketing search-profile-div">' +
                          '<div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">' + 
                          '<span class="user-name">No User Found</span>' +
                          '</div>' + 
                          '</div>' ;

          $("#search-profile-divs").append(profile);
          return;
        }

        var searchUsers = JSON.parse(objResult['message']);
        console.log(searchUsers);

        for(var key in searchUsers) {

          var searchUser = searchUsers[key];

          var profile =   '<div class="row marketing search-profile-div" onclick="viewProfile(this.id)" id="' + searchUser['userhash'] + '">' +
                          '<div class="col-sm-12 col-md-12 col-lg-3" style="text-align: left;">' + 
                          '<span><img alt="profile image" class="user-profile-image" src="../user_data/' + searchUser['profile_image_path'] + '"></span>' +
                          '</div>' + 
                          '<div class="col-sm-12 col-md-12 col-lg-9" style="text-align: left;" class="user-info">' + 
                          '<span class="user-name">' + searchUser['fname'] + ' ' + searchUser['lname'] + '</span>' +
                          '<br>'+
                          '<br>'+
                          '<span class="user-university">' + searchUser['university_domain'] + '</span>' +
                          '<br>'+
                          '<span class="user-position">' + searchUser['position'] + '</span>' +
                          '</div>' +
                          '</div>' ;

          $("#search-profile-divs").append(profile);
        }

        $("#search-profile-divs").unmark().mark($("#searchQuery").val());
      }
    });
  }

  function searchFeed() {

    if($("#searchQuery").val() == '') {
      return;
    }
    $.ajax({
      type: "POST",
      url: "../data/feed/getFeedData.php",
      data: { searchQuery: $("#searchQuery").val() },
      async: true,
      success: function(result) {

        console.log(result);
        var objResult = JSON.parse(result);

        if(objResult['success'] == 'false') {

          var feed =   '<div class="row marketing search-profile-div">' +
                          '<div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">' + 
                          '<span class="user-name">No Feed Found</span>' +
                          '</div>' + 
                          '</div>' ;

          $("#search-profile-divs").append(feed);
          return;
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

            feed += '<button class="delete-button" onclick="deleteFeed(\'' + searchFeed['feedhash'] + '\')" title="Delete Post">' +
                    '<i class="fa fa-trash-o"></i></button>';
          }
          else if($("#session-userhash").val() == searchFeed['userhash_from']) {
            
            feed += '<button class="delete-button" onclick="deleteFeed(\'' + searchFeed['feedhash'] + '\')" title="Delete Post">' + 
                    '<i class="fa fa-trash-o"></i></button>';
          }
          
          feed += '</div>';

          $("#search-profile-divs").append(feed);
        }

        $("#search-profile-divs").unmark().mark($("#searchQuery").val());
      }
    });
  }



  function viewProfile(userhash) {
    alert(userhash);
  }
</script>