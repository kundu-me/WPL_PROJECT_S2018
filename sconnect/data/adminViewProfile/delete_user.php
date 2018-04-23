<?php

	include('../connection_open.php');

	$user_hash = $_POST['user_hash'];

	$query_delete_user = "UPDATE sconnect_user SET status = 'DELETED' WHERE userhash = '$user_hash'";

	if(mysqli_query($sql_connection, $query_delete_user)){
		echo "User deleted.";
	}

	mysqli_close($sql_connection);

?>