/*
    @author: Koulick Sankar Paul <koulick89@gmail.com> 
    @page: Feed
    @description: This is the view profile page when an user views someone else's profile
*/

jQuery(document).ready(function () {

  $('#add_text').hide();

  jQuery("#submitPost").click(function(e) {
    e.preventDefault();
    ajaxCallToSubmitNewPost();
  });

});

function ajaxCallToSubmitNewPost() {
  var d = new Date();
  yyyy = d.getFullYear();
  mm = ((d.getMonth()+1) < 10 ? '0' : '') + (d.getMonth()+1);
  dd = (d.getDate() < 10 ? '0' : '') + d.getDate();
  hh = (d.getHours() < 10 ? '0' : '') + d.getHours();
  min = (d.getMinutes()<10 ? '0' : '') + d.getMinutes();
  var currentDateTime = yyyy + mm + dd + "_" + hh + min;

  var textPost = $("#newPostTextArea").val();
  var viewed_user_hash = $("#viewed_user_hash").val();

  if(textPost == '') {
    $('#add_text').show();
    $('#add_text').text("Please add some text to post. Thank you.");
    return;
  }

  var privacyType = $('#select_Audience').val();

  var form_data = new FormData();
  form_data.append('image', $('#my_image')[0].files[0]);
  form_data.append('video', $('#my_video')[0].files[0]);
  form_data.append('text', textPost);
  form_data.append('currentDateTime', currentDateTime);
  form_data.append('privacyType', privacyType);
  form_data.append('viewedUserHash', viewed_user_hash);

  $.ajax({
    type: "POST",
    url: "../data/viewProfile/insertPostInViewProfile.php",
    processData: false,
    contentType: false,
    data: form_data,
    success: function(result) {

      console.log(result);
      /*var objResult = JSON.parse(result);
      console.log(objResult);*/
      
      //location.reload();
    }
  });
}