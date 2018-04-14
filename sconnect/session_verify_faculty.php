<?php

	if (!isset($_SESSION['userhash'])) {
		
		session_unset();

		session_destroy();

		header("location: http://www.sconnect.xyz");

		exit();
	}

	if ($_SESSION['position'] != "faculty") {
		
		session_unset();

		session_destroy();

		header("location: http://www.sconnect.xyz");

		exit();
	}
?>