<!--
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Account Verification UI
    @description: This page verifies the user with the email and OTP
-->

<div id= "right-search-profile-divs" style="background: white; height: 800px; width: 360px; position: fixed; overflow-y: scroll;">
</div>

<script type="text/javascript">

	$(document).ready(function() {
		searchProfile();
	});

	function searchProfile() {

    $.ajax({
      type: "POST",
      url: "../data/searchProfile/searchProfile.php",
      data: { searchQuery: '', university:$("#session-university_domain").val() },
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

          $("#right-search-profile-divs").append(profile);
          return;
        }

        var searchUsers = JSON.parse(objResult['message']);
        console.log(searchUsers);

        for(var key in searchUsers) {

          var searchUser = searchUsers[key];

          var profile =   '<div class="row marketing right-search-profile-div">' +
                          '<div class="col-sm-12 col-md-12 col-lg-3" style="text-align: left;">' + 
                          '<span><img alt="profile image" class="right-user-profile-image" src="../user_data/' + searchUser['profile_image_path'] + '"></span>' +
                          '</div>' + 
                          '<div class="col-sm-12 col-md-12 col-lg-9" style="text-align: left;" class="user-info">' + 
                          '<span class="user-name" onclick="viewUserProfilePage(\'' + searchUser['userhash'] + '\')">' +
                           searchUser['fname'] + ' ' + searchUser['lname'] + '</span>' +
                          '<br>'+
                          '<span class="user-university">' + searchUser['university_domain'] + '</span>' +
                          '<br>'+
                          '<span class="user-position">' + searchUser['position'] + '</span>' +
                          '</div>' +
                          '</div>' ;

          $("#right-search-profile-divs").append(profile);
        }
      }
    });
  }
</script>