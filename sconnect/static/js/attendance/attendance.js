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

		jQuery("#CourseName").attr("disabled", true); 
		jQuery("#CourseName").addClass("btnDisable");

		jQuery("#session").attr("disabled", true); 
		jQuery("#session").addClass("btnDisable");

		jQuery("#year").attr("disabled", true); 
		jQuery("#year").addClass("btnDisable");
		
		jQuery("#date").attr("disabled", true); 
		jQuery("#date").addClass("btnDisable");
		
		jQuery("#lec").attr("disabled", true); 
		jQuery("#lec").addClass("btnDisable");		
		
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
			var lec = jQuery("#lec").val();

            if((!$('#CourseID').val()) || (lec == "" || lec.length == 0) || (otpGen == "" || otpGen.length == 0 || otpGen.length > 4)) {

                jQuery("#lblSuccess").text("Provide/generate value in mandatory field CourseID, Lecture and OTP - 4 digit only ");
                jQuery("#divSuccess").addClass("failure-msg");

				if(!$('#CourseID').val()) {
                    jQuery("#CourseID").focus();
                }				
				else if(lec == "" || lec.length == 0) {
                    jQuery("#lec").focus();
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

			openAttendance();
			
			//Timer runout show when attendance is opened //
			var minutes = 60 * $("#attnTimeout").val(),
			display = document.querySelector('#timerShow');
			startTimer(minutes, display);
			
			
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

				closeAttendance();

				jQuery("#attnTimeout").attr("disabled", true); 
				jQuery("#attnTimeout").addClass("btnDisable");			

				jQuery("#closeAttn").attr("disabled", true); 
				jQuery("#closeAttn").addClass("btnDisable");
				
				jQuery("#btnCopy").attr("disabled", true); 
				jQuery("#btnCopy").addClass("btnDisable");
				
				//jQuery("#btnExport").show();
				// $('html, body').animate({
				// 		scrollTop: $("#btnExport").offset().top
				// }, 2000);
			}
			else {
				jQuery("#attnTimeout").focus();						
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
		
		$("#attnTimeout").change(function(){
			var minutes = 60 * $("#attnTimeout").val(),
			display = document.querySelector('#timerShow');
			startTimer(minutes, display);
		});
		
		

    });

 function openAttendance() {

 	var coursehash = $("#CourseID").val();
 	var OTP = $("#otp_generate").val();
 	var lec = $("#lec").val();
 	var timeout = $("#attnTimeout").val();

 	$.ajax({
      type: "POST",
      url: "../data/attendance/openAttendance.php",
      data: {coursehash: coursehash,  OTP:OTP, lec:lec, timeout:timeout},
      success: function(result) {

        console.log(result);
        var objResult = JSON.parse(result);
        if(objResult['success'] == "true") {
        	$("#attendancehash").val(objResult['attendancehash']);
        }

        setInterval(function(){ 
        	updateAttendance(); 
        }, 2000);

      }
    });
 }

 function updateAttendance() {

 	var attendancehash = $("#attendancehash").val();

 	$.ajax({
      type: "POST",
      url: "../data/attendance/updateAttendance.php",
      data: {attendancehash: attendancehash},
      async: true,
      success: function(result) {

        console.log(result);
        var objResult = JSON.parse(result);
        console.log(objResult);
        $("#attendanceTable").empty();
        for(var row in objResult) {

        	$("#attendanceTable").append(objResult[row]);
        }
        
      }
    });
 }

 // Timer display function for attendance timeout //
 function startTimer(duration, display) {
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
        // get the number of seconds that have elapsed since 
        // startTimer() was called
        diff = duration - (((Date.now() - start) / 1000) | 0);

        // does the same job as parseInt truncates the float
        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds; 
		if (minutes == 0 && seconds == 0) {
			clearInterval(timerId);
			$("#close_attnd").trigger('click');
			return;
		}
		
		$("#close_attnd").click(function () {
			clearInterval(timerId);
			return;
		});
		
        if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 04:59
            start = Date.now() + 1000;
        }
    };

    // we don't want to wait a full second before the timer starts
	timer();
    var timerId = setInterval(timer, 1000);
}

 function closeAttendance() {

 	var coursehash = $("#CourseID").val();
 	var attendancehash = $("#attendancehash").val();

 	$.ajax({
      type: "POST",
      async: true,
      url: "../data/attendance/closeAttendance.php",
      data: {coursehash: coursehash,  attendancehash:attendancehash},
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