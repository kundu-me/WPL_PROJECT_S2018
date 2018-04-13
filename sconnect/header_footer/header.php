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

	<link rel="stylesheet" href="../static/css/home-page.css">
    <script src="../static/js/home-page-loggedin.js"></script>
</head>
<body>
	<?php include('../data/connection_open.php'); ?>

	<div class="row marketing">
		<div class="row header">
		  <div class="col-sm-12 col-md-12 col-lg-3">
		     <table class="table-responsive cursor-pointer">
		        <tbody>
		           <tr>
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
						      <input type="text" class="form-control" placeholder="Search" name="search" id="searchQuery" style="width: 500px">
						      <div class="input-group-btn">
						        <button class="btn btn-default" id="searchQueryButton"><i class="glyphicon glyphicon-search"></i></button>
						      </div>
						    </div>
	                    </td>
	                 </tr>
	              </tbody>
	           </table>
		     </div>
		  </div>
		  <div class="col-sm-12 col-md-12 col-lg-3">
		  	<div id="">
		  		<a class="a-header-href" href="../message">M</a>
				<a class="a-header-href" href="<?php echo $_SESSION['position'] == 'faculty'? '../attendance' : '../attendancee' ?>">A</a>
				<a class="a-header-href" href="../profile">P</a>
				<a class="a-header-href" href="">*</a>
				<a class="a-header-href">?</a>
				&nbsp;&nbsp;
				<a class="a-header-logout" href="../session_logout.php">Logout</a>
			</div>
			</div>
		  </div>
		</div>
	</div>
	<style type="text/css">
		.a-header-href {
		    background-color: white;
		    border: none;
		    color: black;
		    padding: 15px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
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
		    margin: 4px 2px;
		    cursor: pointer;
		    text-align: right;
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


