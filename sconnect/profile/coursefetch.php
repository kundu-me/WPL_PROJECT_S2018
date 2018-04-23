<?php
//Include the database configuration file
// include 'dbConfig.php';
// $dbHost2     = 'localhost';
// $dbUsername2 = 'root';
// $dbPassword2 = '';
// $dbName2     = 'sconnect';

// //Connect and select the database
// $sql_connection = new mysqli($dbHost2, $dbUsername2, $dbPassword2, $dbName2);

include('../data/connection_open.php');

if(!empty($_POST["session"])){

    $session = $_POST['session'];
    echo "Session: " .$session;
    //Fetch all state data
    $query = $sql_connection->query("SELECT * FROM sconnect_courses_offered WHERE session = '$session' ORDER BY session ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Course option list
    if($rowCount > 0){
        echo '<option value="">Select course ID</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['course_code'].'">'.$row['course_code'].'</option>';
        }
    }else{
        echo '<option value="">No courses found</option>';
    }

    if(!empty($_POST['CourseID'])){
        $course_id = $_POST['CourseID'];
        $otp = $_POST['otp_received'];
        echo '<label>Inside 2nd IF</label>';

        $query2 = $sql_connection->query("SELECT OTP FROM sconnect_courses_offered WHERE session = '$session' AND course_code = '$course_id'");

        echo '<script>console.log('.$otp.')</script>';
        $otp = $query2->fetch_assoc();
    }
}


// if(!empty($_POST['session']) && !empty($_POST['CourseID']) && !empty($_POST['otp_received'])){
//     $session = $_POST['session'];
//     $course_id = $_POST['CourseID'];
//     $otp = $_POST['otp_received'];

//     $query2 = $db2->query("SELECT OTP FROM sconnect_courses_offered WHERE session = '$session' AND course_code = '$course_id'");

//     echo '<script>console.log('.$otp.')</script>';
//     $otp = $query2->fetch_assoc();
//     //console.log('The OTP is: ' .$otp);
//     //echo $otp['OTP'];
// }
?>