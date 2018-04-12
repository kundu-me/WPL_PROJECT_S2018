<!--
    @author: Abhishek Datta <abhi06548@yahoo.com>
    @page: Message one-on-one UI for all users
    @description: This page will display as lightbox when clicked on Messages button on profile header.
	              It handles the total list of sent/receipt messages for the user alongwith sending new message function
-->
<!DOCTYPE html>
<html lang="en">
	
		<meta charset="UTF-8">
		<title>Message One2One Interface</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
	<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="message.js"></script>
		<link rel="stylesheet"  href="message.css">
		
	<!-- php include('./session_verify.php') -->
	<?php include('../data/connection_open.php') ?> 

		
	<div class="container col-lg-12" id="msgContainer"> <!--Div element to display all incoming and outgoing messages for the user -->
		<div class="row">
			<div class="col-lg-12 col-lg-3">
				<h3>Hi Abhishek!</h3> <!--Session value for user name -->
			</div>
			<div class="col-lg-12 col-lg-7"></div>
			<div class="col-lg-12 col-lg-2">
				<!--<h3><button id="btnNew" title="New Message" class="col-lg-6">
						<img src="add.png" alt="New Message" width="45" height="35"/>
					</button>-->
					<h3><input type=image src="add.png" width="45" height="35" title="Compose Message" alt="New Message" border="1" 
						id="btnNew" class="col-lg-6"></h3>
			</div>
		</div>
	
		<div class="row" >
		
			<div id="msgList" class="col-lg-6">   <!--Div element for message list -->
				<div id="fixed" class="col-lg-6"> <!--Div element for fixed header -->
					<table id="hdrFixed">
						<thead>
							<tr>
								<th id="msgHead" class="field1Size">Date</th>
								<th id="msgHead" class="field2Size">Subject</th>
							</tr>
						</thead>	
					</table>
				</div>
				
				<table id="messageList" >
					<thead id="header">
						<tr>
							<th>Date</th>
							<th>Subject</th>
						</tr>
					</thead>
					
					<tbody> <!-- to be populated dynamically through AJAX call from database -->
					</tbody>
				</table>
			</div>
			
			<div class="col-lg-5">
			
				<div id="messageShow">
					<div class="row">
						<div class="col-lg-12 col-lg-2">
							<h3>To</h3>
						</div>
						<div class="col-lg-12 col-lg-10">
							<h3><input type="text" id="mailTo" name="Mail to" class="col-lg-10" autocomplete="off"><h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-lg-2">
							<h3>From</h3>
						</div>
						<div class="col-lg-12 col-lg-10">
							<h3><input type="text" id="mailFrom" name="Mail from" class="col-lg-10" autocomplete="off"><h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-lg-2">
							<h3>Subject</h3>
						</div>
						<div class="col-lg-12 col-lg-10">
							<h3><input type="text" id="mailSub" name="Mail Subject" class="col-lg-10" autocomplete="off"><h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-lg-12">
							<h4><textarea id="input" rows="15" cols="20" class="col-lg-12" autocomplete="off"></textarea></h4>
						</div>
					</div>
				</div>
			
				<div id="messageNew">
					<div class="row">
						<div class="col-lg-12 col-lg-2">
							<h3>To</h3>
						</div>
						<div class="col-lg-12 col-lg-10">
							<h3><input type="text" id="mailTo" name="Mail to" class="col-lg-10" autocomplete="off"><h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-lg-2">
							<h3>From</h3>
						</div>
						<div class="col-lg-12 col-lg-10">
							<h3><input type="text" id="mailFrom" name="Mail from" class="col-lg-10" disabled="disabled" autocomplete="off"><h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-lg-2">
							<h3>Subject</h3>
						</div>
						<div class="col-lg-12 col-lg-10">
							<h3><input type="text" id="mailSub" name="Mail Subject" class="col-lg-10" autocomplete="off"><h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-lg-12">
							<h4><textarea id="input" rows="12" cols="20" class="col-lg-12" autocomplete="off"></textarea></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-lg-7">
						</div>
						<div class="col-lg-12 col-lg-3">
							<h3><input type="submit" value="Send Message" id="btnSubmit"></h3>
						</div>
					</div>
				</div>

			</div>
		</div>
    </div>

</html>