/**
    @author: Abhishek Dutta <abhi06548@yahoo.com>
	@author: Koulick Sankar Paul <koulick89@gmail.com>
    @page: Addition of a class by a faculty 
    @description: This page allows a faculty member to add a new class to register students
 **/

//function to reset input and focus on first field on every page refrssh
function resetInput() {
	jQuery("#courseID").focus();
}

//function to disable form-elements on Create-Class button click
function formDisable() {
	jQuery("#courseID").attr("disabled", true); 
	jQuery("#courseID").addClass("btnDisable");
	
	jQuery("#courseName").attr("disabled", true); 
	jQuery("#courseName").addClass("btnDisable");
	
	jQuery("#session").attr("disabled", true);
	jQuery("#session").addClass("btnDisable");
	
	jQuery("#year").attr("disabled", true); 
	jQuery("#year").addClass("btnDisable");
	
	jQuery("#classRoster").attr("disabled", true); 
	jQuery("#classRoster").addClass("btnDisable");
	
	jQuery("#otp_generate").attr("disabled", true); 	
	jQuery("#otp_generate").addClass("btnDisable");
	
	jQuery("#generateOTP").attr("disabled", true); 
	jQuery("#generateOTP").addClass("btnDisable");
	
	
	jQuery("#btnSubmit").attr("disabled", true); 	
	jQuery("#btnSubmit").addClass("btnDisable");
}

//function to parse the student ids
function parseStudentIdList() {
	var studentIdList = jQuery("#classRoster").val();
	var studentIdsArray = studentIdList.split(",");
	var parsedStudentIds = "";

	for (var i = 0; i < studentIdsArray.length; i++) {
		var student = studentIdsArray[i].substring(0, studentIdsArray[i].indexOf("@")).trim();
		if (i == studentIdsArray.length - 1) {
			parsedStudentIds += student;
		}
		else {
			parsedStudentIds += student + ", ";
		}
	}
	return parsedStudentIds;
}


jQuery(document).ready(function () {

    resetInput();
	jQuery(".container:last").hide(); //hide the last div displaying generated OTP when the form loads
	
	//function executed when generateOTP button clicked------------------------------------
	jQuery("#generateOTP").click(function (e) {
		jQuery("#otp_generate").val(Math.floor(Math.random()*9000) + 1000);
		e.preventDefault();
	});
	
	//function executed when (Create new class) submit button clicked ----------------------------
    jQuery("#btnSubmit").click(function (e) {
		e.preventDefault();

		jQuery("#lblSuccess").text("");

        var courseID = jQuery("#courseID").val();
        var courseName = jQuery("#courseName").val();
		var classRoster = jQuery("#classRoster").val();
		var otpGen = jQuery("#otp_generate").val();

		//form validation failure routine----------------------------------------------------------------------------------
        if((courseID == "" || courseID.length == 0) || (courseName == "" || courseName.length == 0) || (!$('#session').val()) ||
			(classRoster == "" || classRoster.length == 0) ||(otpGen == "" || otpGen.length == 0 || otpGen.length > 4)) {

            jQuery("#lblSuccess").text("Provide values in mandatory fields: Course Code, Course Name, Class-Roster and OTP-only 4 digits");
            jQuery("#divSuccess").addClass("failure-msg");

            if(courseID == "" || courseID.length == 0) {
                jQuery("#courseID").focus();
            }
            else if(courseName == "" || courseName.length == 0) {
                jQuery("#courseName").focus();
            }
			else if(!$('#session').val()) {
                jQuery("#session").focus();
            }
			else if(classRoster == "" || classRoster.length == 0) {
                jQuery("#classRoster").focus();
            }
			else if(otpGen == "" || otpGen.length == 0) {
                jQuery("#otp_generate").focus();
            }

			return;
        }
		else {            // Parse email-id list check for valid email input //
			var studentList = jQuery("#classRoster").val().split(",");
			var mailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

			for (var i = 0; i < studentList.length; i++) {
				if (!studentList[i].match(mailformat)) {
					jQuery("#lblSuccess").text("Parse error occured! Provide correct student email-id in Class-Roster");
					jQuery("#divSuccess").addClass("failure-msg");
					jQuery("#classRoster").focus();
					return;
				}
			}
			
		}

		//form validation failure routine ends--------------------------------------------------------------------------------
	
		
		if(jQuery("#divSuccess").hasClass("failure-msg")) {
            jQuery("#divSuccess").removeClass("failure-msg");
        }
		
		formDisable(); //disable form elements on successful form validation and submission
		
		//Show last div for OTP generation when form is validated, and copy the OTP text//
		jQuery(".container:last").show();
		jQuery("#courseID-1").text(courseID); 
		jQuery("#courseTerm-1").text(jQuery("#session").val() + " "+ jQuery("#year").val());
		jQuery("#otp").val(otpGen);

		//session
		var session = jQuery("#session").val();
		//year
		var year = jQuery("#year").val();

		//get the csv data for the class roster (TODO)
		//for now, copy the data from the text area and process it
		var studentIdList = parseStudentIdList();
		//$.post("../data/facultyAddClass/facultyAddClass.php", {CourseID: courseID, CourseName: courseName, Session: session, Year: year, StudentIdList: studentIdList, OTP: otpGen});
    	var formData = {CourseID: courseID, CourseName: courseName, Session: session, Year: year, StudentIdList: studentIdList, OTP: otpGen};
    	ajaxCallToInsertForm(formData);
    });

    function ajaxCallToInsertForm(formData) {

    $.ajax({
      type: "POST",
      url: "../data/facultyAddClass/facultyAddClass.php",
      data: formData,
      success: function(result) {

        console.log(result);
      }
    });
}
	
	//Copy button click functionality ------------------------------------
	jQuery("#btnCopy").click(function () {
		value1 = jQuery("#instructions").text();
		value2 = jQuery("#otp").val();
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val(value1 + " - " + value2).select();
		document.execCommand("copy");
		$temp.remove();
	});
	
	//Close button click functionality that takes to previous page URL----------------
	/*jQuery("#btnClose").click(function () {
		self.location = "./././feed";
	});*/
});