
<?php
	session_start();
	
	session_unset();

	session_destroy();

	header("location: http://www.sconnect.xyz");

	exit();

?>