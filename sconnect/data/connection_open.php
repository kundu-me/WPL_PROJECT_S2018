<?php

/**
  *
  * @author: Nirmallya Kundu <nxkundu@gmail.com>
  * @page: Connection Open
  * @description: This page handles the connection Open
  *
  */

$sql_servername = "kundu.me";
$sql_username = "kundujwg_sc";
$sql_password = "Pass@1234";
$sql_database = "kundujwg_sconnect_db1";


// $sql_servername = "localhost";
// $sql_username = "root";
// $sql_password = "";
// $sql_database = "sconnect";

// Create connection
$sql_connection = mysqli_connect($sql_servername, $sql_username, $sql_password, $sql_database);

// Check connection
if (!$sql_connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>