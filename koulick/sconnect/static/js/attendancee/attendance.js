/*
  	@author: Abhishek Datta <abhi06548@yahoo.com>
    @author: Koulick Sankar Paul <koulick89@gmail.com>
    @page: Student-Give Attendance UI
    @description: This page handles the daily attendance given by a student
*/

var courseData;
function resetInput() {
	jQuery("#CourseID").focus();
 }
	
	function formDisable() {
		jQuery("#CourseID").attr("disabled", true); 
		jQuery("#CourseID").addClass("btnDisable");

		jQuery("#otp_received").attr("disabled", true); 	
		jQuery("#otp_received").addClass("btnDisable");
	}

    jQuery(document).ready(function () {

        resetInput();

		jQuery("#secondDiv").hide();
		jQuery("#thirdDiv").hide();

		ajaxCallToGetCourseData();

		$("#CourseID").change(function(){
			updateCourseDetails();
		});
		
		//OTP Submit button click functionality
		jQuery("#give_attnd").click(function (e1) {
			e1.preventDefault();

			jQuery("#lblSuccess").text("");

			var otp = $("#otp_received").val();

			//OTP validation failure routine
            if(otp == "" || otp.length == 0 || otp.length > 4) {

                jQuery("#lblSuccess").text("Provide value in mandatory field OTP ( 4 digits only)");
                jQuery("#divSuccess").addClass("failure-msg");
				jQuery("#otp_received").focus();
	
				return;
            }
			
            giveAttendance(otp);
		});		
    });

 function giveAttendance(otp) {

 	var coursehash = $("#CourseID").val();
 
 	var d = new Date();
  	h = (d.getHours() < 10 ? '0' : '') + d.getHours();
  	m = (d.getMinutes()<10 ? '0' : '') + d.getMinutes();
		var currentTime = h + ':' + m;
 	
 	$.ajax({
      type: "POST",
      data: {coursehash: coursehash, OTP: otp, currentTime: currentTime},
      url: "../data/attendancee/giveAttendance.php",
      success: function(result) {

        console.log(result);
        
        var objResult = JSON.parse(result);
        console.log(objResult);

        //OTP provided is not valid as per OTP present in database against the course attendance for the day			
        if (objResult.message == "Not a correct OTP") {
        	jQuery("#lblSuccess").text("OTP not valid for attendance. Please recheck OTP from email!!");
            jQuery("#divSuccess").addClass("failure-msg");
			
			jQuery("#otp_received").val("");
			jQuery("#otp_received").focus();
			
			return;
        }
        else {
	        if(jQuery("#divSuccess").hasClass("failure-msg")) {
                jQuery("#divSuccess").removeClass("failure-msg");
            }
            jQuery("#lblSuccess").text("Attendance is submitted!");

			formDisable(); //disable input section on successful OTP validation and submission
        }
      }
    });
 }

 function updateCourseDetails() {

 	if($("#CourseID").val() == "") {

 		jQuery("#secondDiv").hide(); //hide the div element displaying fetched course details based on OTP provided
		jQuery("#thirdDiv").hide();
 	}
 	else {

 		jQuery("#secondDiv").show(); //Show table element with course details, when any course ID selected from list
		jQuery("#thirdDiv").show(); //Show div element for OTP inout by student for post attendance

 		$("#CourseName").val(courseData[$("#CourseID").val()]['course_name']);
	 	$("#session").val(courseData[$("#CourseID").val()]['session']);
	 	$("#year").val(courseData[$("#CourseID").val()]['year']);

	 	var date=new Date();
		$("#date").val(date); //generate local datetime

		$("#date_dd_mm_yyyy").text(date.getDate() + "/"+ (date.getMonth()+1) +"/"+ date.getFullYear());
 	}
 }

 function ajaxCallToGetCourseData() {

     $.ajax({
      type: "POST",
      async: true,
      url: "../data/attendancee/courseData.php",
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