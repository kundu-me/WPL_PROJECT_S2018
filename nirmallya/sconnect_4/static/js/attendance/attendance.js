/**
  * @author: Abhishek Dutta<abhi06548@yahoo.com>
  * @author: Nirmallya Kundu<nxkundu@gmail.com>
  *
  */
var courseData;
function  resetInput() {
		jQuery("#CourseID").focus();
    }
	
	function formDisable() {
		jQuery("#CourseID").attr("disabled", true); 
		jQuery("#CourseID").addClass("btnDisable");
		
		jQuery("#date").attr("disabled", true); 
		jQuery("#date").addClass("btnDisable");
		
		jQuery("#otp_generate").attr("disabled", true); 	
		jQuery("#otp_generate").addClass("btnDisable");
		
		jQuery("#generateOTP").attr("disabled", true); 
		jQuery("#generateOTP").addClass("btnDisable");
		
		jQuery("#btnSubmit").attr("disabled", true); 	
		jQuery("#btnSubmit").addClass("btnDisable");
	}


    jQuery(document).ready(function () {

        resetInput();
		jQuery("#closeAttn").hide();
		jQuery("div.container:last").hide();
		jQuery("table.container").hide();
		jQuery("#btnExport").hide();
		
		var date=new Date();
		jQuery("#date").val(date.toDateString());
		
		jQuery("#generateOTP").click(function (event) {
			event.preventDefault();
			jQuery("#otp_generate").val(Math.floor(Math.random()*9000) + 1000);
		});
		
        jQuery("#btnSubmit").click(function (e1) {
			e1.preventDefault();
			jQuery("#lblSuccess").text("");

			var courseID = jQuery("#CourseID").val();
			var otpGen = jQuery("#otp_generate").val();

            if((!$('#CourseID').val()) || (otpGen == "" || otpGen.length == 0 || otpGen.length > 4)) {

                jQuery("#lblSuccess").text("Provide/generate value in mandatory field CourseID and OTP - 4 digit only ");
                jQuery("#divSuccess").addClass("failure-msg");

				if(!$('#CourseID').val()) {
                    jQuery("#CourseID").focus();
                }
				else if(otpGen == "" || otpGen.length == 0) {
                    jQuery("#otp_generate").focus();
                }
	
				return;
            }
            
			if(jQuery("#divSuccess").hasClass("failure-msg")) {
                jQuery("#divSuccess").removeClass("failure-msg");
            }
			
			formDisable(); //disable form elements on successful form submission
			
			//Show last div for OTP generation when form validated and copy //
			jQuery("#closeAttn").show();
			jQuery("div.container:last").show();
			jQuery("#courseID-1").text($("#CourseID option:selected").text()); 
			jQuery("#date_dd_mm_yyyy").text(date.getDate() + "/"+ (date.getMonth()+1) +"/"+ date.getFullYear());
			jQuery("#otp").val(otpGen);
			
			//create attendance table dynamically
			jQuery("table.container").show();
			$('html, body').animate({
					scrollTop: $("table.container").offset().top
			}, 2000);				

        });
				
		jQuery("#close_attnd").click(function (e2) {
			e2.preventDefault();
			var r = confirm("Do you really wish to close attendance now!!");
			if (r == true) {
				jQuery("#timer").attr("disabled", true); 
				jQuery("#timer").addClass("btnDisable");			

				jQuery("#closeAttn").attr("disabled", true); 
				jQuery("#closeAttn").addClass("btnDisable");
				
				jQuery("#btnCopy").attr("disabled", true); 
				jQuery("#btnCopy").addClass("btnDisable");
				
				jQuery("#btnExport").show();
				$('html, body').animate({
						scrollTop: $("#btnExport").offset().top
				}, 2000);
			}

		});

		
		jQuery("#btnCopy").click(function () {
			value1 = jQuery("#instructions").text();
			value2 = jQuery("#otp").val();
			var $temp = $("<input>");
			$("body").append($temp);
			$temp.val(value1 + " - " + value2).select();
			document.execCommand("copy");
			$temp.remove();
		});
		
		jQuery("#btnClose").click(function () {
			self.location = "https://www.google.com";
		});

		ajaxCallToGetCourseData();

		$("#CourseID").change(function(){
			updateCourseDetails();
		});

		$("#open_attnd").change(function(e){
			
			openAttendance();

			e.preventDefault();
		});

		$("#close_attnd").change(function(e){
			
			closeAttendance();

			e.preventDefault();
		});

    });

 function openAttendance() {

 	var coursehash = $("#CourseID").val();
 	var OPT = $("#otp").val();
 	$.ajax({
      type: "POST",
      data: {coursehash: coursehash, OTP:OTP},
      url: "../data/attendance/openAttendance.php",
      data: {userhash:'' },
      success: function(result) {

        console.log(result);
        var objResult = JSON.parse(result);
        
        courseData = objResult.courseData;
      }
    });
 }

 function closeAttendance() {

 	var coursehash = $("#CourseID").val();
 	var OPT = $("#otp").val();
 	$.ajax({
      type: "POST",
      data: {coursehash: coursehash, OTP:OTP},
      url: "../data/attendance/closeAttendance.php",
      data: {userhash:'' },
      success: function(result) {

        console.log(result);
        var objResult = JSON.parse(result);
        
        courseData = objResult.courseData;
      }
    });
 }

 function updateCourseDetails() {

 	if($("#CourseID").val() == "") {

 		$("#CourseName").val('');
	 	$("#session").val('');
	 	$("#year").val('');
 	}
 	else {

 		$("#CourseName").val(courseData[$("#CourseID").val()]['course_name']);
	 	$("#session").val(courseData[$("#CourseID").val()]['session']);
	 	$("#year").val(courseData[$("#CourseID").val()]['year']);
	 	$("#generateOTP").trigger('click');
 	}
 }

 function ajaxCallToGetCourseData() {

     $.ajax({
      type: "POST",
      async: true,
      url: "../data/attendance/courseData.php",
      data: {userhash:'' },
      success: function(result) {


        console.log(result);
        var objResult = JSON.parse(result);

        var optionList = objResult.optionList;
        var options = "";

        for(var key in optionList) {
        	options += "<option value = '" + key + "'>" + optionList[key] + "</option>";
        }

        $("#CourseID").empty().append(options);
        
        courseData = objResult.courseData;
      }
    });
}