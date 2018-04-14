	/**
	@author: Abhishek Datta <abhi06548@yahoo.com>
    @page: Message one-on-one UI for all users
    @description: This page will display as lightbox when clicked on Messages button on profile header.
	              It handles the total list of sent/receipt messages for the user alongwith sending new message function
	**/

	var messageData;	
	//function to reset input and focus on first field on every page refrssh
    function  resetInput() {
		jQuery("table#messageList #msgEach:first").focus();
    }

	// function to make AJAX call to db for message-list fetch for the user
	function ajaxCallToFetchMsgList() {
		$.ajax({
		type: "POST",
		async: true,
		url: "../data/message/fetchMessageList.php",
		data: {userhash:'' },
		success: function(result) {

			console.log(result);
			var objResult = JSON.parse(result);

			var messageList = objResult.messageList;
			messageData = objResult.messageData;
			console.log(messageList);

			for(var row in messageList) {
					$("#messageList tbody").append(messageList[row]);	
			}
		}
		});
	}
	
	// function to make AJAX call to db for updating message unread status to read
	function ajaxCallToChangeStatus(messageid) {
		$.ajax({
		type: "POST",
		async: true,
		url: "../data/message/updateMessagetable.php",
		data: {messageid:messageid},
		success: function(result) {

			var objResult = JSON.parse(result);
			console.log(objResult);

			if ((objResult.message == "MessageId missing") || (objResult.message == "Not updated message table for unread status")) {
				console.log(objResult.message);
				jQuery(this).find("td").find("a").addClass("messageBold");
			
				return;
			}
		}
		});
	}
	
	// function to make AJAX call to insert new message row in message table
	function ajaxCallToEnterNewMessage(mailTo, mailSub, mailTxt, currentDateTime) {
		$.ajax({
		type: "POST",
		async: true,
		url: "../data/message/insertNewMessage.php",
		data: {mailTo:mailTo, mailSub:mailSub, mailTxt:mailTxt, currentDateTime:currentDateTime},
		success: function(result) {

			var objResult = JSON.parse(result);
			console.log(objResult);

			if ((objResult.message == "userhash_to missing") || (objResult.message == "userhash_to missing") ||
				(objResult.message == "Failed to insert in the message table")) {
				jQuery("#lblmessage").text("Failed to send the message!!");
				console.log(objResult.message);
			
				return;
			}
			else {
				jQuery("#lblmessage").text("Message successfully sent!!!");
				jQuery("#btnSubmit").attr("disabled", true); 
				jQuery("#btnSubmit").addClass("btnDisable");

			}
			
		}
		});
	}
	
	
    jQuery(document).ready(function () {
        resetInput();
		
		ajaxCallToFetchMsgList();
		jQuery("#messageShow").hide(); //hide the div element for message display at the beginning (on page laod)
		jQuery("#messageNew").show(); //hide the div element for compose new message
		jQuery("#messageNew #mailFrom").val(jQuery("#session-email").val()); //put session value for email
 
		
		//**************** highlight text function on scrolling message-list using keyboard up-down arrow keys *******//
		$(document).keydown(function (e) {
    
			switch(e.which) 
			{
				case 38:
					highlight($('#messageList tbody tr.highlight').index() - 1);
					break;
				case 40:
					highlight($('#messageList tbody tr.highlight').index() + 1);
					break;
			}

		});
		
		function highlight(tableIndex) {
			// Just a simple check. If .highlight has reached the last, start again
			if( (tableIndex+1) > $('#messageList tbody tr').length )
				tableIndex = 0;
    
			// Element exists?
			if($('#messageList tbody tr:eq('+tableIndex+')').length > 0)
			{
				// Remove other highlights
				$('#messageList tbody tr').removeClass('highlight');
        
				// Highlight your target
				$('#messageList tbody tr:eq('+tableIndex+')').addClass('highlight');
			}
		}
		//************ highlight text on scrolling using keyboard keys end **************//
		
		//Message display clickOn message from list functionality //
		
		jQuery('#messageList tbody').on("click", "tr#msgEach", function(e) {
			e.preventDefault();
			if(jQuery("#messageShow").hide()){
				jQuery("#messageShow").show();
			}
			
			if(jQuery("#messageNew").show()){

				jQuery("#lblmessage").text("");
				jQuery("#messageNew").hide(); 
				jQuery("#messageShow").show();
			}			
			
			var messageid = $(this).find("td.field2Size").find("span#msgindex").text();
			$("#messageShow #mailTo").val(messageData[messageid]['to_mail']);
			$("#messageShow #mailFrom").val(messageData[messageid]['from_mail']);
			$("#messageShow #mailSub").val(messageData[messageid]['subject']);
			$("#messageShow #input").val(messageData[messageid]['message']);
			
			if(jQuery(this).find("td").find("a").hasClass("messageBold")) {
                jQuery(this).find("td").find("a").removeClass("messageBold");
				ajaxCallToChangeStatus(messageid);
            }

		});
		
		//Compose message click functionality //
		jQuery("#btnNew").click(function (e1) {
			e1.preventDefault();
			jQuery("#lblmessage").text("");

			jQuery("#messageShow").hide(); //hide the table element displaying fetched course details based on OTP provided
			jQuery("#messageNew").show(); //hide the div element for OTP intake and submit
					
			if (jQuery("#btnSubmit").hasClass("btnDisable")){
				jQuery("#btnSubmit").attr("disabled", false); 
				jQuery("#btnSubmit").removeClass("btnDisable");
				jQuery("#messageNew #mailTo").val('');
				jQuery("#messageNew #mailSub").val('');
				jQuery("#messageNew #input").val('');
				jQuery("#messageNew #mailTo").focus();
			}

			jQuery("#messageNew #mailFrom").val(jQuery('#session-email').val());
			jQuery("#messageNew #mailTo").focus();

		});
		
		//Message-button Submit click functionality ------------------------------------
		jQuery("#btnSubmit").click(function (e2) {
			e2.preventDefault();
			var mailTo = jQuery("#messageNew #mailTo").val();
			var mailFrom = jQuery("#messageNew #mailFrom").val();
			var mailSub = jQuery("#messageNew #mailSub").val();
			var mailTxt = jQuery("#messageNew #input").val();
			var d = new Date();
			
			yyyy = d.getFullYear();
			mm = ((d.getMonth()+1) < 10 ? '0' : '') + (d.getMonth()+1);
			dd = (d.getDate() < 10 ? '0' : '') + d.getDate();
			h = (d.getHours() < 10 ? '0' : '') + d.getHours();
			m = (d.getMinutes()<10 ? '0' : '') + d.getMinutes();
			var currentDateTime = yyyy + mm + dd + '_'+ h + m;
			console.log(currentDateTime);
			
			if((mailTo == "" || mailTo.length == 0) || (mailSub == "" || mailSub.length == 0)) {

			//new message validation failure routine----------------------------------------------------------------------------------
				if(mailTo == "" || mailTo.length == 0) {
					jQuery("#messageNew #mailTo").focus();
				}
				else if (mailSub == "" || mailSub.length == 0) {
					jQuery("#messageNew #mailSub").focus();
				}
				return;
			}
			//new message validation failure routine ends--------------------------------------------------------------------------------

			ajaxCallToEnterNewMessage(mailTo, mailSub, mailTxt, currentDateTime); //Post new message to message table //
		});
		
    });