<?php
session_start();
session_regenerate_id();
$_SESSION["userhash"]="abc123";
$_SESSION["email"]="thedonald@greatamerica.edu";
$_SESSION["password"]="iamdonaldtrump";
$_SESSION["salt"]="1234567890";
$_SESSION["status"]="POTUS";
$_SESSION["position"]="Student";
$_SESSION["fname"]="Donald";
$_SESSION["mname"]="J";
$_SESSION["lname"]="Trump";
$_SESSION["profile_image_path"]="data/dt.jpg";
$_SESSION["document_image_path"]="comet.jpg";
$_SESSION["resume_path"]="Jack_Resume.pdf";
$_SESSION["dob_mm"]="03";
$_SESSION["dob_dd"]="26";
$_SESSION["dob_yyyy"]="2018";
$_SESSION["degree"]="Ph.D";
$_SESSION["major"]="Bullshittery and Douchebaggery";
$_SESSION["university_domain"]="greatamerica.edu";
$_SESSION["OTP"]="6643";

session_write_close();
header("Location: profile.php");

?>