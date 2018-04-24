
	//function to reset input and focus on first field on every page refrssh
	function  resetInput() {
		jQuery("#session").focus();
	}
	
	//function to disable form-elements on Create-Class button click
	function formDisable() {
		
		jQuery("#session").attr("disabled", true);
		jQuery("#session").addClass("btnDisable");
		
		jQuery("#CourseID").attr("disabled", true); 
		jQuery("#CourseID").addClass("btnDisable");
		jQuery("#otp_received").attr("disabled", true); 	
		jQuery("#otp_received").addClass("btnDisable");
		
		jQuery("#verifyCourse").attr("disabled", true); 	
		jQuery("#verifyCourse").addClass("btnDisable");
	}
	jQuery(document).ready(function () {
		resetInput();
		jQuery("table.container").hide(); //hide the table element displaying fetched course details based on OTP provided
		
		//function executed when (Verify Course) button clicked ----------------------------
		$('#session').on('change',function(){
			var session = $(this).val();
			if(session){
				//alert("Session is: " + session);
				$.ajax({
					type:'POST',
					url:'../data/profile/coursefetch.php',
					data:'session='+session,
					success:function(html){
						$('#CourseID').html(html);
					}
				}); 
			}else{
				$('#CourseID').html('<option value="">Select course code</option>');
			}
		});

		jQuery("#verifyCourse").click(function (event) {
			event.preventDefault();
			jQuery("#lblSuccess").text("");
			var session = jQuery("#session option:selected").val();
			var CourseID = jQuery("#CourseID option:selected").val();
			var otp = jQuery("#otp_received").val();
			//console.log(session);
			//console.log(CourseID);
			//console.log(otp);
			//OTP validation failure routine----------------------------------------------------------------------------------
			if((!$('#session').val()) || (!$('#CourseID').val()) || (otp == "" || otp.length == 0 || otp.length > 4)) {
				jQuery("#lblSuccess").text("Provide correct values in above fields (OTP should be 4 digits only)");
				jQuery("#divSuccess").addClass("failure-msg");
				if(!$('#session').val()) {
					jQuery("#session").focus();
				}
				else if(!$('#CourseID').val()) {
					jQuery("#CourseID").focus();
				}
				else if(otp == "" || otp.length == 0) {
					jQuery("#otp_received").focus();
				}

				return;
			}
			// else if (otp != "0101") {   //OTP provided is not valid as per OTP present in database against the course detail
			// 	jQuery("#lblSuccess").text("No courses found with provided OTP. Please recheck OTP from email!!");
   //              jQuery("#divSuccess").addClass("failure-msg");

			// 	jQuery("#otp_received").val("");
			// 	jQuery("#otp_received").focus();

			// 	return;
			// } 
			
			//OTP validation failure routine ends--------------------------------------------------------------------------------

			if(jQuery("#divSuccess").hasClass("failure-msg")) {
				jQuery("#divSuccess").removeClass("failure-msg");
			}
			
			formDisable(); //disable input section on successful OTP validation and submission
			
			//Show table element when OTP validated, with fetched course details//
			jQuery("table.container").show();
			if(($('#session').val()) && ($('#CourseID').val()) && !(otp == "" || otp.length == 0 || otp.length > 4)) {
				console.log(session);
				console.log(CourseID);
				console.log(otp);
				$.ajax({
					type: 'POST',
					url: "../data/profile/otp_submit.php",
					dataType:'json',
					data: ({session: session, CourseID: CourseID, otp_received: otp }),
					success: function(result) {
						console.log(result.courseDetails);
						console.log(session);
						jQuery('#session_verified').val(session);
            			jQuery('#year').val(result.courseDetails['year']);
            			jQuery('#CourseName').val(result.courseDetails['course_name']);
						}
            			
            		});

            }
			});

		//Copy button click functionality ------------------------------------
		jQuery("#btnSubmit").click(function (e1) {
			e1.preventDefault();
			//form post......................//
			
			// if(true) {  //student details not found//
			// 	jQuery("#lblSuccess").text("Student detail could not be validated against Class roster uploaded");
			// 	jQuery("#divSuccess").addClass("failure-msg");
			// 	return;
			// }

			$('#courses > tbody').append("<tr><td>" + jQuery('#CourseName').val() + "</td><td>" + jQuery("#CourseID").val() + "</td><td>" + $('#session').val() + " " + $('#year').val() + "</td></tr>");

		});
	});


		// $('#fade').on('click', function(event) {
		// 	$('#lightbox', '#fade').hide();
		// });

		// $( '#add_course').on('click', function(event) {
		// 	$("#lightbox, #fade").show();
		// });
