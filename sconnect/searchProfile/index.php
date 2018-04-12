<!--
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Feed
    @description: This is the main landing page when the user login
                  Need to Update
-->

<?php include('../header_footer/header.php'); ?>
<div class="row marketing left-right-com-div" style="margin-top: 15px;">
    <div class="col-sm-12 col-md-12 col-lg-3" style="text-align: center;">
       Profile
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
       News
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
</style>

<script type="text/javascript">

  $(document).ready(function(){

    searchProfile();

    $("#searchQueryButton").unbind("click");
    $("#searchQuery").unbind("keypress");

    var searchParams = new URLSearchParams(window.location.search);
    if(searchParams.has('q')) {

      var q = searchParams.get('q');
      $("#searchQuery").val(q);
      searchProfile();
    }

    $("#searchQueryButton").click(function() {
      searchProfile();
    });
    

    $("#searchQuery").keypress(function(e) {
      if(e.keyCode == 13) {
        searchProfile();
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
      success: function(result) {

        $("#search-profile-divs").empty();
        console.log(result);
        var objResult = JSON.parse(result);

        if(objResult['success'] == 'false') {

          var profile =   '<div class="row marketing search-profile-div">' +
                          '<div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">' + 
                          '<span class="user-name">No User Found</span>' +
                          '</div>' + 
                          '</div>' ;

          $("#search-profile-divs").empty().append(profile);
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
      }
    });
  }

  function viewProfile(userhash) {
    alert(userhash);
  }
</script>