<?php 

$sql_servername = "localhost";
$sql_username = "root";
$sql_password = "";
$sql_database = "sconnect";

// Create connection
$sql_connection = mysqli_connect($sql_servername, $sql_username, $sql_password, $sql_database);


$degree = $_POST['degree_dropdown'];
$major = $_POST['major_dropdown'];
$dob_mm = $_POST['month'];
$dob_dd = $_POST['day'];
$dob_yyyy = $_POST['year'];

$query_update_user = "UPDATE sconnect_user SET degree = '$degree', major = '$major', dob_mm = '$dob_mm', dob_dd = '$dob_dd', dob_yyyy = '$dob_yyyy' WHERE userhash = '$_SESSION['userhash']'";

$result = mysqli_query($sql_connection, $query_update_user);
?>