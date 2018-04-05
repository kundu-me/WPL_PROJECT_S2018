    <!--
        @author: Abhishek Datta <abhi06548@yahoo.com>
        @author: Koulick Sankar Paul <koulick89@gmail.com>
        @page: Student-Give Attendance UI
        @description: This page handles the daily attendance given by a student
    -->

    <?php include('../session_verify_student.php'); ?>
    <?php include('../header_footer/header.php'); ?>
    <script src="../static/js/attendancee/attendance.js"></script>
    <link rel="stylesheet" href="../static/css/attendancee/attendance.css">

    <div class="row marketing left-right-com-div" style="margin-top: 15px;">
       <div class="row header">
          <div class="col-sm-12 col-md-12 col-lg-12" style="text-align: right;">
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
                                <h3>Course</h3>
                            </div>
                            <div class="col-lg-12 col-lg-9">
                                <h3><select id="CourseID" name="Course ID" class="col-lg-6" required autocomplete="off">
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
                                    <h3>Attendance for</h3>
                                </div>
                                <div class="col-lg-12 col-lg-9">
                                    <h3><input type="text" id="date" name="Date" class="col-lg-6" disabled="disabled" autocomplete="off"></h3>
                                </div>
                            </div>
                        </div>
            	</div>
                </form> 

                <div id="thirdDiv"> <!-- class="container" -->
                    <div class="row">
                        <!-- <div class="col-lg-12 col-lg-2">
                        </div> -->
                        <div class="col-lg-12 col-lg-10">
                            <h4><p id="instructions" class="col-lg-10">Provide proper OTP received in mail to post attendance for date:
                                <span id="date_dd_mm_yyyy"></span></p></h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-lg-3">
                        </div>
                        <div class="col-lg-12 col-lg-2">
                            <h3><input type="text" id="otp_received" name="OTP" placeholder ="eg: 1234" class="col-lg-12" autocomplete="off"></h3>
                        </div>
                        <div class="col-lg-12 col-lg-3">
                            <h3><input type="submit" value="Submit" id="give_attnd" class="col-lg-6"></h3>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div id="divSuccess" class="col-lg-12 col-lg-6">
                            <p>
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
    <?php include('../header_footer/footer.php'); ?>
