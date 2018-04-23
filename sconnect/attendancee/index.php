    <!--
        @author: Abhishek Datta <abhi06548@yahoo.com>
        @author: Koulick Sankar Paul <koulick89@gmail.com>
        @page: Student-Give Attendance UI
        @description: This page handles the daily attendance given by a student
    -->

    <?php include('../header_footer/header.php'); ?>
    <?php include('../session_verify_student.php'); ?>
    <script src="../static/js/attendancee/attendance.js"></script>
    <link rel="stylesheet" href="../static/css/attendancee/attendance.css">

<div class="row marketing left-right-com-div" style="margin-top: 15px;">
       <div class="col-sm-12 col-md-12 col-lg-3" style="text-align: center;">
        <?php include('../card_left/index.php'); ?>
       </div>

    <div class="col-sm-12 col-md-12 col-lg-9 search-feed-divs" style="text-align: center;">

    <div class="row marketing left-right-com-div" style="margin-top: 15px;">
       <div class="row header">
          <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
             <span class="sconnect-header">Class Attendance</span>
                 <div class="sconnect-signup-div">
            	 <form id= "formData"> 
            	 
            		<div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-lg-12">
                                <h2><i></i></h2> <!-- STUDENT - Post Attendance -->
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
            					</select></h3>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div id="secondDiv">
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
                                    <h3>Attendance for</h3>
                                </div>
                                <div class="col-lg-12 col-lg-9">
                                    <h3><input type="text" id="date" name="Date" class="col-lg-7" disabled="disabled" autocomplete="off"></h3>
                                </div>
                            </div>
                        </div>
            	</div>
                </form> 

                <br />
				<div id="thirdDiv"> <!-- class="container" -->
                    <div class="row">
                        <!-- <div class="col-lg-12 col-lg-2">
                        </div> -->
                        <div class="col-lg-12 col-lg-12">
                            <h4><p id="instructions" style="text-align: center;">Provide proper OTP received in mail to post attendance for date:
                                <span id="date_dd_mm_yyyy"></span></p></h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-lg-4">
                        </div>
                        <div class="col-lg-12 col-lg-5" style="text-align: center;">
                            <h3><input type="text" id="otp_received" name="OTP" placeholder ="eg: 1234" class="col-lg-4" autocomplete="off"></h3>
                        <!--<div class="col-lg-12 col-lg-3"> -->
							<div class="col-lg-1"></div>
							<h3><input type="submit" value="Submit" id="give_attnd" class="col-lg-4"></h3>
                        </div>
						<div class="col-lg-12 col-lg-3">
						</div>
                    </div>

                    <br />
					<div class="row">
                        <div id="divSuccess" class="col-lg-12 col-lg-12">
                            <p style="text-align: center;">
                                <label id="lblSuccess"></label>
                            </p>
                        </div>
                    </div>
                </div>
                <div> <!-- class="container" -->
                    <div class="row">
        				<!-- <h4><p id="instructions" class="col-lg-12">Attendance is submitted for: <span id="courseID-1"></span></p></h4> -->
                    </div>
                </div>
            </div>
          </div>
       </div>
    </div>
   </div>
    </div>
</div>
</div>
<?php include('../header_footer/footer.php'); ?>
