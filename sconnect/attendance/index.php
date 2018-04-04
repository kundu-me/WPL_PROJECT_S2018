<!--
    @author: Abhishek Datta <abhi06548@yahoo.com>
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Faculty-Create Attendance UI
    @description: This page handles the creation of daily attendance sheet and OTP-generation (for student use) by faculty
-->

<?php include('../header_footer/header.php'); ?>
<script src="../static/js/attendance/attendance.js"></script>
<link rel="stylesheet" href="../static/css/attendance/attendance.css">

<div class="row marketing left-right-com-div" style="margin-top: 15px;">
   <div class="row header">
      <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: right;">
         <span class="sconnect-header">Class Attendance</span>
         <div class="sconnect-signup-div">
	 <form id= "formData"> 
	 
		<div class="container">
            <div class="row">
                <div class="col-lg-12 col-lg-12">
                    <h2><i></i></h2>
                </div>
            </div>

            <br>
			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Course</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><select id="CourseID" name="Course ID" class="col-lg-6" required autocomplete="off">
						<option value="" disabled selected hidden>Select from course list..</option>
					</select>
                    <input type="hidden" id="attendancehash" name="attendancehash">
                </h3>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Course Name</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><input type="text" id="CourseName" name="Course Name" class="col-lg-6" disabled="disabled" autocomplete="off"><h3>
                </div>
            </div>

			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Academic Session</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
					 <h3><input type="text" id="session" name="Session" class="col-lg-6" disabled="disabled" autocomplete="off"></h3>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Academic Year</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><input type="text" id="year" name="Year" class="col-lg-6" disabled="disabled" autocomplete="off"></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Lecture#</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><input type="text" id="lec" name="lec" class="col-lg-6" autocomplete="off"></h3>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Attendance for</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><input type="text" id="date" name="Date" class="col-lg-6" disabled="disabled" autocomplete="off"></h3>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>OTP (4-digit code)</h3>
                </div>
                <div class="col-lg-12 col-lg-9" style="text-align: left;">
                    <h3><input type="text" id="otp_generate" name="OTP" placeholder ="eg: 1234" class="col-lg-6" autocomplete="off"></h3>
					<h3><button id="generateOTP">Generate OTP</button></h3>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-lg-12 col-lg-1">
					<h3>Timer</h3>
				</div>
				<div class="col-lg-12 col-lg-2">
					<h3><select id="attn-timeout" name="Timer" autocomplete="off">
						<option value="15">15 mins</option>
						<option value="30">30 mins</option>
						<option value="45">45 mins</option>
					</select></h3>
                </div>
                <div class="col-lg-12 col-lg-4">
                    <h3><input type="submit" value="Open Attendance" id="btnSubmit"></h3>
                </div>
                <div id="closeAttn" class="col-lg-12 col-lg-5" style="text-align: left;">
                    <h3><input type="submit" value="Close Attendance" id="close_attnd"></h3>
                </div>
            </div>
		</div>
	</form> 

    <div class="container">
            <div class="row">
                <div class="col-lg-12 col-lg-3">
                </div>
                <div id="divSuccess" class="col-lg-12 col-lg-9">
                    <p>
                        <label id="lblSuccess"></label>
                    </p>
                </div>
            </div>
    </div>
	
	<br>
    <div class="container"> <!--Dynamic population of div element on button click -->
            <div class="row">
				<h4><p id="instructions" class="col-lg-12">Please use this One-time Password to give attendance on <span id="courseID-1"></span>
					<!-- course for the date: <span id="date_dd_mm_yyyy"></span></p></h4> -->
				<div id="divOTP" class="col-lg-12 col-lg-3">
					<h3><input type="text" id="otp" name="One-time Pwd" value="" class="col-lg-12" disabled autocomplete="off"></h3>
				</div>
				<div class="col-lg-12 col-lg-2">
					<h3><button id="btnCopy">Copy</button></h3>
				</div>
				<div class="col-lg-12 col-lg-7">
					<!-- <h3><button id="btnClose">Close</button></h3> -->
				</div>
            </div>
    </div>
	
	<br>
	<table class="container" id="attendanceTable" style="text-align: left;"> <!--Dynamic population of div element on button click -->
    </table>
	
	<div class="col-lg-12 col-lg-3">
		<!-- <h3><button id="btnExport">Export</button></h3> -->
	</div>

    </div>
      </div>
   </div>
</div>
	<?php include('../header_footer/footer.php'); ?>
