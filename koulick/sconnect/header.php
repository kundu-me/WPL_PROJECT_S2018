<!--
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Header
    @description: This page handles the header with opening HTML Tag and body tag
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>SConnect</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="static/css/home-page.css">
    <script src="static/js/home-page.js"></script>
</head>
<body>
	<?php include('data/connection_open.php'); ?>

	<div class="row marketing">
		<div class="row header">
		  <div class="col-sm-12 col-md-12 col-lg-6">
		     <table class="table-responsive cursor-pointer">
		        <tbody>
		           <tr>
		              <td><img class="img-responsive sconnect-logo-img" src="static/img/sconnect-logo-3.jpg" alt="sconnect-logo"></td>
		              <td><span class="sconnect-header-logo">SConnect</span></td>
		           </tr>
		        </tbody>
		     </table>
		  </div>
		  <div class="col-sm-12 col-md-12 col-lg-6">
		     <div>
		        <form method="post" id="login-form" name="login-form" action="javascript:validateSubmitLoginForm()">
		           <table class="table-responsive login-table">
		              <tbody class="align-right">
		                 <tr>
		                    <td>
		                       <span class="sconnect-login-label">Email:</span>
		                       <input class="input-login input-sm" type="email" name="login-email" id="login-email" placeholder="eg: id@university.edu">
		                    </td>
		                    <td>
		                       &nbsp;&nbsp;
		                       <span class="sconnect-login-label">Password:</span>
		                       <input class="input-login input-sm" type="password" name="login-password" id="login-password">
		                    </td>
		                    <td>
		                       &nbsp;&nbsp;
		                       <button class="btn btn-sm" id="login-button">Log In</button>
		                    </td>
		                 </tr>
		                 <tr>
		                    <td colspan="2" class="login-error-msg-td">
		                       <span class="login-error-msg-span" id="login-error-msg"></span>
		                       &nbsp;&nbsp;
		                       <span class="login-error-msg-span" id="login-forgot-password-msg">
		                          <a href="accountVerify/"><span class="login-span-link">Verify Account</span></a>
		                       </span>
		                       &nbsp;
		                       <span class="login-error-msg-span" id="login-forgot-password-msg">
		                          <a href="passwordReset/"><span class="login-span-link">Forgot Password?</span></a>
		                       </span>
		                    </td>
		                    <td>
		                       &nbsp;
		                    </td>
		                 </tr>
		              </tbody>
		           </table>
		        </form>
		     </div>
		  </div>
		</div>
	</div>

