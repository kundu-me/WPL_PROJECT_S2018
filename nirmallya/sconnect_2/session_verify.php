
	<?php
	session_start();
	if (!isset($_SESSION['userhash'])) {
		// header("Location: ../login.html");
		echo "Redirect";
	}
	?>