<!--
    @author: Koulick Sankar Paul <koulick89@gmail.com>
    @author: Abhishek Dutta <abhi06548@yahoo.com>
    @page: Addition of a class by a faculty 
    @description: This page allows a faculty member to add a new class to register students
-->

<?php include('../header_footer/header.php'); ?>
<script src="../static/js/facultyAddClass/facultyAddClass.js"></script>
<link rel="stylesheet"  href="../static/css/facultyAddClass.css">

<form id= "formData">	 
		<div class="container">
            <div class="row">
                <div class="col-lg-12 col-lg-12">
                    <h2><i>FACULTY - Add New Class</i></h2>
                </div>
            </div>

            <br>
			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Course Code and Section</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><input type="text" id="courseID" name="Course ID" placeholder ="eg: CS 6001.001" class="col-lg-6" autocomplete="off"></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Course Name</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><input type="text" id="courseName" name="Course Name" class="col-lg-6" autocomplete="off"><h3>
                </div>
            </div>

			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Academic Session</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
					 <h3><select id="session" name="Session" class="col-lg-6" required autocomplete="off">
						<option value="" disabled selected hidden>Choose a term..</option>
						<option value="Fall">Fall</option>
						<option value="Spring">Spring</option>
						<option value="Summer">Summer</option>
					</select></h3>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Academic Year</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><select id="year" name="Year" class="col-lg-6" autocomplete="off">
						<option value="2018" selected>2018</option>
						<option value="2019">2019</option>
					</select></h3>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <!-- <h3>Class Roster (.csv only)</h3> -->
                    <h3>Class Roster (please paste the email ids here)</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <!-- <h3><input type="file" id="classRoster" name="class_roster" accept=".xlsx" autocomplete="off"></h3> -->
                    <textarea rows="4" cols="50" id="classRoster" name="class_roster" autocomplete="off"></textarea>
                </div>
            </div>
			
			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>OTP (4-digit code)</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><input type="text" id="otp_generate" name="OTP" placeholder ="eg: 1234" class="col-lg-6" autocomplete="off"></h3>
					<h3><button id="generateOTP">Generate OTP</button></h3>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-lg-12 col-lg-3">
                </div>
                <div class="col-lg-12 col-lg-6">
                    <h3><input type="submit" value="Create New Class" id="btnSubmit" class="col-lg-6"></h3>
                </div>
                <div class="col-lg-12 col-lg-3">
                </div>
            </div>
		</div>
	</form> 

	<br>
	<p id="results" class="col-lg-12"></p>

	<br>
    <div class="container"><!--Div element to show failure message for form validation -->
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
				<h4><p id="instructions" class="col-lg-12">Please use the provided One-time Password for signing into <span id="courseID-1"></span> course for <span id="courseTerm-1"></span>.</p></h4>
				<div id="divOTP" class="col-lg-12 col-lg-3">
					<h3><input type="text" id="otp" name="One-time Pwd" value="" class="col-lg-12" disabled autocomplete="off"></h3>
				</div>
				<div class="col-lg-12 col-lg-2">
					<h3><button id="btnCopy">Copy</button></h3>
				</div>
				<div class="col-lg-12 col-lg-7">
					<h3><button id="btnClose">Close</button></h3>
				</div>
            </div>
    </div>

<?php include('../header_footer/footer.php'); ?>