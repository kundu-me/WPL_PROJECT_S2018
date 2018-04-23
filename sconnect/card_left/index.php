
<!--
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Account Verification UI
    @description: This page verifies the user with the email and OTP
-->

<div class="row" style="text-align: center;">
	<img src="../user_data/profile_image/sample.jpg" style="width:100; height: 300px;">
	<br>
	<br>
	<span class="sconnect-profile-header"><h3><?php echo " " . $_SESSION['fname'] . " " . $_SESSION['lname'] ?> </h3></span>
	<br>
	<br>
	<span class="sconnect-profile-header">
		<h4><a href="../profile/"><u>Profile</u></a></h4>
	</span>

	<span class="sconnect-profile-header">
		<h4><a href="../message/"><u>Message</u></a></h4>
	</span>

	<span class="sconnect-profile-header">
		<h4><a href="../myFeed/"><u>My Posts</u></a></h4>
	</span>

	<span class="sconnect-profile-header">
		<h4><a href="../<?php echo ($_SESSION['position'] == 'faculty')? "attendance" : "attendancee" ?> "><u>Class Attendance</u></a></h4>
	</span>

	<span class="sconnect-profile-header">
		<h4><a href="../approveUser/"><u>Approve Pending User</u></a></h4>
	</span>

	<span class="sconnect-profile-header">
		<h4><a href="../approveFeed/"><u>Approve Pending Feed</u></a></h4>
	</span>

	</h4></span>
</div>