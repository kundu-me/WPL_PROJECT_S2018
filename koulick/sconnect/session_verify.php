
	<?php
	session_start();
	if (!isset($_SESSION['userhash'])) {
		header("Location: http://www.sconnect.xyz");
		exit();
	}
	?>