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
    <link rel="shortcut icon" href="../static/img/sconnect-logo-3.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css">

	<link rel="stylesheet" href="../static/css/home-page.css">
    <script src="../static/js/home-page-loggedin.js"></script>
</head>
<body>
	<?php include('../data/connection_open.php'); ?>


	<div class="row marketing">
		<div class="row header header-fixed">
		  <div class="col-sm-12 col-md-12 col-lg-3">
		     <table class="table-responsive cursor-pointer">
		        <tbody>
		           <tr onclick="javascript:location.href='../feed'">
		              <td><img class="img-responsive sconnect-logo-img" src="../static/img/sconnect-logo-3.jpg" alt="sconnect-logo"></td>
		              <td><span class="sconnect-header-logo">SConnect</span></td>
		           </tr>
		        </tbody>
		     </table>
		  </div>
		  <div class="col-sm-12 col-md-12 col-lg-6">
		     <div>
	           <table class="table-responsive login-table">
	              <tbody class="align-right">
	                 <tr>
	                    <td>
	                       <div class="input-group">
						    </div>
	                    </td>
	                 </tr>
	              </tbody>
	           </table>
		     </div>
		  </div>
		  <div class="col-sm-12 col-md-12 col-lg-3">
			</div>
		  </div>
		</div>
	</div>
	<div class="after-header-fixed"></div>
	<style type="text/css">
		.a-header-href {
		    background-color: white;
		    border: none;
		    color: black;
		    padding: 15px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    /*font-size: 16px;*/
		    margin: 4px 2px;
		    border-radius: 50%;
		    cursor: pointer;
		}

		.a-header-logout {
		    background-color: white;
		    border: none;
		    color: black;
		    padding: 5px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    /*font-size: 16px;*/
		    margin: 4px 2px;
		    cursor: pointer;
		    text-align: right;
		}
		.header-fixed {
			position: fixed;
		    width: 100%;
		    top: 0;
		    left: 0;
		    right: 0;
		    z-index:9999;
		}

		.after-header-fixed {

			margin-top:80px;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {

			$("#searchQueryButton").click(function() {

				if($("#searchQuery").val() == '') {
					return;
				}
      			self.location = "../searchProfile/?q=" +  $("#searchQuery").val();
    		});
	    

		    $("#searchQuery").keypress(function(e) {
		      if(e.keyCode == 13) {
		        
		        if($("#searchQuery").val() == '') {
					return;
				}
      			self.location = "../searchProfile/?q=" +  $("#searchQuery").val();
		      }
		    });
		});
	</script>

