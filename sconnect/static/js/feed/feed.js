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

		var d = new Date();
		yyyy = d.getFullYear();
		mm = ((d.getMonth()+1) < 10 ? '0' : '') + (d.getMonth()+1);
		dd = (d.getDate() < 10 ? '0' : '') + d.getDate();
		hh = (d.getHours() < 10 ? '0' : '') + d.getHours();
		mm = (d.getMinutes()<10 ? '0' : '') + d.getMinutes();
		var currentDateTime = yyyy + mm + dd + hh + mm;

		insertPost(textPost, currentDateTime);
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
	      }
    	});
	}

});