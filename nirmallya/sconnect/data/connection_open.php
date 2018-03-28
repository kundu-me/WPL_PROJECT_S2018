<!--
    @author: Nirmallya Kundu <nxkundu@gmail.com>
    @page: Connection Open
    @description: This page handles the connection Open
-->

<?php
$sql_servername = "localhost";
$sql_username = "root";
$sql_password = "";
$sql_database = "sconnect-db1";

// Create connection
$sql_connection = mysqli_connect($sql_servername, $sql_username, $sql_password, $sql_database);

// Check connection
if (!$sql_connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>