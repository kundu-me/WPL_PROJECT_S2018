<!--
    @author: Abhishek Datta <abhi06548@yahoo.com>
    @page: Help and contact page for all users
    @description: This module will provide a brief walkthrough across the sconnect website and basic functionalities.
	              For more assistance please contact the contributors to this application as mentioned below
-->
<?php include('../header_footer/header.php'); ?>
		<link rel="stylesheet"  href="../static/css/message/message.css">
		
	<?php include('../data/connection_open.php') ?> 


	<!--<div class="container" >-->
	<div class="row" style="height: 30%;">
		<div style="width: 100%; background-color: #fff; margin-top: 5px; margin-bottom: 5px;">
					<h2 style="text-align: center;"><i>Help Manual For Website Walkthrough</i></h2>
		</div>
		<div class="slideshow-container">
			<div class="mySlides show">				
				<p id ="firstView" style="text-align: justify; padding-left: 50px; padding-right: 50px; font-size: 15px;"><strong> 
							   Student Connect - a new initiative to present to the students at any level, with an educational 
							   social media which has lot of capabilities to meet the present and future requirements.<br />
								<br />1.  Login: provide university email id and password in login window
								<br />	  Signup: provide details and university card scan (mandatory for faculty) 
								<br />2.	If wrong password provided in login, forget password link can be availed to reset password through 
									validating OTP sent in mail
								<br />3. Verify account needs to be done for first time login (both faculty and students)
				</strong></p>
			</div>

			<div class="mySlides">
				<p style="text-align: justify; padding-left: 50px; padding-right: 50px; font-size: 15px;"><strong>
								The Homepage and list of Feeds view for the logged-in user<br />
								<br />1. The user can post text, photos and videos by selecting relevant buttons on top of feed
								<br />2. Also, there is an privacy choice for public view of user's post provided
								<br />3. The user can also like/dislike/comment on any post showing in his feed by clicking on it or delete his own post later
								<br />4. The header has options to navigate to messages(M), attendance (A),Profile (P) or Help page (?) or can come back to feed by clicking top left SCONNECT logo.</strong></p>
			</div>

            <div class="mySlides">
				<p style="text-align: justify; padding-left: 50px; padding-right: 50px; font-size: 15px;"><strong>  
								User Profile update by clicking on (P) in header or, Visit any other profile using search from header<br />
								<br />1. Use can modify or update his own profile from here and change the privacy seetings for viewing profile using top right slider
								<br />2. He can also change his profile picture or update his own resume on left card.
								<br />3. If user is faculty, he can add new course by clicking add class for any session; or if student, the user can add class to his current session</strong></p> 
            </div>

            <div class="mySlides">
				<p style="text-align: justify; padding-left: 50px; padding-right: 50px; font-size: 15px;"><strong>
								Add new class for Faculty by clicking (Add Class) from profile<br />
								<br />1.Create a new class for any session/year by providing course details and generating OTP
								<br />2. Faculty needs to provide the class roster by providing comma-separated email-ids to validate a student when he tries to add his course
								<br />3. On clicking (Create New Class) he can copy the OTP by clicking (Copy) and go back to feed by clicking (Close)
								<br />4. Faculty can then send Registration OTP to students over email</strong></p>            
			</div>
			
			<div class="mySlides">
				<p style="text-align: justify; padding-left: 50px; padding-right: 50px; font-size: 15px;"><strong>
								Add new class for Students by clicking (Add Class) from profile<br />
								<br />1. The lightbox will open from profile-page where student needs to provide session and OTP information received in email to validate course
								<br />2. If error then message displayed to provide proper OTP.
								<br />3. If the student email-id is present in class roster provided by faculty, the course details is displayed on submitting OTP and he can successfully add the course to his list
								<br />4. Else the system informs the student, that his name is not in the cloass roster submitted by faculty</strong></p>            
			</div>
			
			<div class="mySlides">
				<p style="text-align: justify; padding-left: 50px; padding-right: 50px; font-size: 15px;"><strong>
								Add new Attendance by faculty and students for any lecture by clicking (A) on Header
								<br />Faculty- 
								<br />1. Select course from dropdown and provide lecture number for the date and generate OTP and send attendance OTP to students on mail
								<br />2. Faculty provides timer and starts the attendance. While the timer counts down, he can close it and modify the timer again or, let the timer count down to ZERO
								<br />3. During timer, a dynamic attendance table is displayed where real-time attendance can be viewed. End of timer triggers close attendance and provides a way to view the attendance table</strong></p>            
			</div>
			
			<div class="mySlides">
				<p style="text-align: justify; padding-left: 50px; padding-right: 50px; font-size: 15px;"><strong>
								One-to-One messaging option by clicking (M) on Header<br />
								<br />1. The window opens with all incoming and outgoin messages loaded for the logged in user. The new message window displays alongside.
								<br />2. USer can type in a message and send to respective email id of faculty or another student and send. Success or failure message displays and outgoing message shows up in list
								<br />3. If another user sends message to the logged in user, the incoming unread message is shown bold in the list. When clicked it displays in the adjacent message area</strong></p>            
			</div>
			
            <a class="prev" onclick="javascript: $('#firstView').hide(); plusSlides(-1);" style="background-color: #3ebbbb;">&#10094;</a>
            <a class="next" onclick="javascript: $('#firstView').hide(); plusSlides(1)" style="background-color: #3ebbbb;">&#10095;</a>

		</div>
	</div>	 

		<div class="row" style="border: 1px solid gray; background-color: #fff; margin: 15px;">				
				<div class="col-lg-12 col-lg-4">
					<h3><i> ADVISOR - </i></h3>
					<img src="../static/img/Timothy-McMahan-Fall-2017.jpg" title="Professor photo" alt="Professor picture" style="width:220px; height: 270px; margin-top: 10px;">
					<p id = "aboutProf" >
						<a href="https://cs.utdallas.edu/people/faculty/mcmahan-timothy/" target="_blank" title="University Profile"><span class="user-name">Dr. Timothy MCMahan </span></a>
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