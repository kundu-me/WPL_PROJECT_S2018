<!--
    @author: Abhishek Datta <abhi06548@yahoo.com>
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Faculty-Create Attendance UI
    @description: This page handles the creation of daily attendance sheet and OTP-generation (for student use) by faculty
-->

<?php include('../header_footer/header.php'); ?>
<?php include('../session_verify_faculty.php'); ?>
<script src="../static/js/attendance/attendance.js"></script>
<link rel="stylesheet" href="../static/css/attendance/attendance.css">

<div class="row marketing left-right-com-div" style="margin-top: 15px;">
       <div class="col-sm-12 col-md-12 col-lg-3" style="text-align: center;">
        <?php include('../card_left/index.php'); ?>
       </div>

       <div class="col-sm-12 col-md-12 col-lg-9 search-feed-divs" style="text-align: center; overflow: scroll;">
<div class="row marketing left-right-com-div" style="margin-top: 15px;">
   <div class="row header">
      <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
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
                    <h3>Course Code</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><select id="CourseID" name="Course ID" class="col-lg-7" required autocomplete="off">
						<option value="" disabled selected hidden>Select from course list..</option>
					</select>
                    <input type="hidden" id="attendancehash" name="attendancehash">
                    <button class="col-lg-4" id="showAttendanceTable">Attendance Table</button>
                </h3>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Course Name</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><input type="text" id="CourseName" name="Course Name" class="col-lg-7" disabled="disabled" autocomplete="off"><h3>
                </div>
            </div>

			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Academic Session</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
					 <h3><input type="text" id="session" name="Session" class="col-lg-7" disabled="disabled" autocomplete="off"></h3>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Academic Year</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><input type="text" id="year" name="Year" class="col-lg-7" disabled="disabled" autocomplete="off"></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Lecture#</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><input type="text" id="lec" name="lec" class="col-lg-7" placeholder="eg: Lec1" autocomplete="off"></h3>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Attendance for</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><input type="text" id="date" name="Date" class="col-lg-7" disabled="disabled" autocomplete="off"></h3>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>OTP (4-digit code)</h3>
                </div>
                <div class="col-lg-12 col-lg-9" style="text-align: left;">
                    <h3><input type="text" id="otp_generate" name="OTP" placeholder ="eg: 1234" class="col-lg-7" autocomplete="off"></h3>
					<h3><button id="generateOTP">Generate OTP</button></h3>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-lg-12 col-lg-3">
					<h3>Timer&nbsp;&nbsp;<select id="attnTimeout" name="Timer" autocomplete="off">
								<option value="15">15 mins</option>
								<option value="30">30 mins</option>
								<option value="45">45 mins</option>
							</select>
					</h3>
                </div>
                <div class="col-lg-12 col-lg-6">
					<h3><span id ="timerShow" class="col-lg-4"></span>
						<input type="submit" value="Open Attendance" id="btnSubmit" class="col-lg-6" style="text-align: center;"></h3>
                </div>
                <div id="closeAttn" class="col-lg-12 col-lg-3" style="text-align: left;">
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
	
    <div class="container"> <!--Dynamic population of div element on button click -->
            <div class="row">
				<p id="instructions" class="col-lg-12"><strong>Please use this One-time Password to give attendance on <span id="courseID-1"></span></strong></p>
				<div id="divOTP" class="col-lg-12 col-lg-3">
					<h3><input type="text" id="otp" name="One-time Pwd" value="" class="col-lg-12" disabled autocomplete="off"></h3>
				</div>
				<div class="col-lg-12 col-lg-9">
					<h3><button id="btnCopy" class="col-lg-2" style="text-align: center;">Copy</button></h3>
				</div>

            </div>
    </div>
	
	<br>
	<table class="container" id="attendanceTable" style="text-align: left; width: 600px;" border="1">
     <!--Dynamic population of div element on button click -->
     <thead>
     <tr>
        <th>
            Student
        </th>
        <th>
            Time
        </th>
    </tr>
    <tr>
        <th>
            &nbsp;
        </th>
        <th>
            &nbsp;
        </th>
     </tr>
    </thead>
    <tbody id="attendanceTableBody">
    </tbody>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr><tr><td>&nbsp;</td></tr>
        

    </table>
	
	<div class="col-lg-12 col-lg-3">
		<!-- <h3><button id="btnExport">Export</button></h3> -->
	</div>

    </div>
      </div>
   </div>
</div>
</div>
</div>
	<?php include('../header_footer/footer.php'); ?>
