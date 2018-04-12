<?php 

session_start();
$sql_servername = "localhost";
$sql_username = "root";
$sql_password = "";
$sql_database = "sconnect";

// Create connection
$sql_connection = mysqli_connect($sql_servername, $sql_username, $sql_password, $sql_database);


$degree = $_POST['degree'];
$major = $_POST['major'];
$dob_mm = $_POST['dob_month'];
$dob_dd = $_POST['dob_day'];
$dob_yyyy = $_POST['dob_year'];
$user_hash = $_SESSION['userhash'];

$query_update_user = "UPDATE sconnect_user SET degree = '$degree', major = '$major', dob_mm = '$dob_mm', dob_dd = '$dob_dd', dob_yyyy = '$dob_yyyy' WHERE userhash = 'user_hash'";

$result = mysqli_query($sql_connection, $query_update_user);

echo $result;
?>