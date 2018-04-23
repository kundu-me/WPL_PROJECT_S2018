<!--
    @author: Abhishek Datta <abhi06548@yahoo.com>
    @page: Help and contact page for all users
    @description: This module will provide a brief walkthrough across the sconnect website and basic functionalities.
	              For more assistance please contact the contributors to this application as mentioned below
-->
<?php include('../header_footer/header.php'); ?>
		<script src="../static/js/message/message.js"></script>
		<link rel="stylesheet"  href="../static/css/message/message.css">
		
	<?php include('../data/connection_open.php') ?> 

	 
	<div class="container"> <!--Div element to enter the OTP provided by faculty and verify course detail -->
            <div class="row">
                <div class="col-lg-12 col-lg-12">
                    <h2><i>STUDENT - Post Attendance</i></h2>
                </div>
            </div>
			
            <br>
			<div class="row">
                <div class="col-lg-12 col-lg-3">
                    <h3>Course-ID</h3>
                </div>
                <div class="col-lg-12 col-lg-9">
                    <h3><select id="CourseID" name="Course ID" class="col-lg-6" required autocomplete="off">
						<option value=""  selected >Select from the list..</option>
						<option value="CS6301.001">CS6301.001</option>
						<option value="CS6305.002">CS6305.002</option>
					</select></h3>
                </div>
				<div class="col-lg-12 col-lg-9">
                    <h3><select id="CourseID" name="Course ID" class="col-lg-6" required autocomplete="off">
						<option value=""  selected >Select from the list..</option>
						<option value="CS6301.001">CS6301.001</option>
						<option value="CS6305.002">CS6305.002</option>
					</select></h3>
                </div>
            </div>
		</div> 
	 

		<div class="row" style="border: 1px solid gray; background-color: #fff; margin: 15px;">				
				<div class="col-lg-12 col-lg-4">
					<h3><i> ADVISOR - </i></h3>
					<img src="../static/img/Timothy-McMahan-Fall-2017.jpg" title="Professor photo" alt="Professor picture" style="width:240px; height: 270px; margin-top: 10px;">
					<p id = "aboutProf" >
						<a href="https://cs.utdallas.edu/people/faculty/mcmahan-timothy/" target="_blank" title="University Profile"><span class="user-name">Prof. Timothy MCMahan </span></a>
						<br /><span class="user-university">UT Dallas-Computer Science (Senior Lecturer)</span>
					</p>
				</div>
				<div class="col-lg-12 col-lg-8">
					<h3><i> CONTRIBUTORS - </i></h3>
					<div class="row">
						<div class="col-lg-6">
							<a href="https://www.facebook.com/nxkundu" target="_blank" title="Facebook link"><img src="../static/img/nirmallya.jpg" alt="Team-member 1" style="width:100; height: 140px; margin-top: 10px; margin-right: 10px; float: left;"></a>
							<br /><a href="https://www.linkedin.com/in/nxkundu/" target="_blank" title="Linkedin Profile"><span class="user-name">Nirmallya Kundu </span></a>
							<br /><span class="user-university">UT Dallas</span>
							<br /><span class="user-position">MS Computer Science</span>
						</div>
						<div class="col-lg-6">
							<a href="https://www.facebook.com/KoulickSankarPaul" target="_blank" title="Facebook link"><img src="../static/img/koulick.jpg" alt="Team-member 2" style="width:100; height: 140px; margin-top: 10px; margin-right: 10px; float: left;"></a>
							<br /><a href="https://www.linkedin.com/in/koulicksankarpaul/" target="_blank" title="Linkedin Profile"><span class="user-name">Koulick Shankar Paul </span></a>
							<br /><span class="user-university">UT Dallas</span>
							<br /><span class="user-position">MS Computer Science</span>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<a href="https://www.facebook.com/abhi06548" target="_blank" title="Facebook link"><img src="../static/img/Abhishek.jpg" alt="Team-member 3" style="width:140px; height: 140px; margin-top: 10px; margin-right: 10px; float: left;"></a>
							<br /><a href="https://www.linkedin.com/in/abhi-comets-axd151630/" target="_blank" title="Linkedin Profile"><span class="user-name">Abhishek Datta </span></a>
							<br /><span class="user-university">UT Dallas</span>
							<br /><span class="user-position">MS Telecom engineering</span>
						</div>
						<div class="col-lg-6">
							<a href="https://www.facebook.com/gunjan.tomer" target="_blank" title="Facebook link"><img src="../static/img/Gunjan.jpeg" alt="Team-member 4" style="width:140px; height: 140px; margin-top: 10px; margin-right: 10px; float: left;"></a>
							<br /><a href="https://www.linkedin.com/in/gunjantomer/" target="_blank" title="Linkedin Profile"><span class="user-name">Gunjan Tomer </span></a>
							<br /><span class="user-university">UT Dallas</span>
							<br /><span class="user-position">MS Computer Science</span>
						</div>
					</div>				
		        </div>
		</div>
    <!--</div> -->