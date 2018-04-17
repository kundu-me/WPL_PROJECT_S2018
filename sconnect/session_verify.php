
<?php
	session_start();
	if (!isset($_SESSION['userhash'])) {
		
		session_unset();

		session_destroy();

		header("location: http://www.sconnect.kundu.me");

		exit();
	}
?>