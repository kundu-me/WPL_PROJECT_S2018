<?php
	session_start();
	if (!isset($_SESSION['userhash'])) {
		header("Location: http://www.sconnect.xyz");
		exit();
	}

	if (!isset($_SESSION['position']) == "faculty") {
		header("Location: http://www.sconnect.xyz");
		exit();
	}
?>