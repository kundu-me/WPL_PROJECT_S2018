<?php
	/**
	 *  @author: Koulick Sankar Paul <koulick89@gmail.com>
    @author: Abhishek Dutta <abhi06548@yahoo.com>
    @page: Addition of a class by a faculty 
    @description: This page allows a faculty member to add a new class to register students

    **/
?>

<?php include('../connection_open.php') ?>

<?php
	
	session_start();

	$courseHashCode = uniqid();
	$universityDomain = $_SESSION['university_domain'];
	//$universityDomain = "UTDallas";
	$courseID = $_POST["CourseID"];
	$courseName = $_POST["CourseName"];
	$session = $_POST["Session"];
	$year = $_POST["Year"];
	$otpGen = $_POST["OTP"];
	$studentIdList = $_POST["StudentIdList"];
	$userhashCode = $_SESSION['userhash'];
	//$userhashCode = uniqid();
	
	//Query the database to insert into the table named 'sconnect_courses_offered'
	//INSERT INTO `sconnect_courses_offered`(`coursehash`, `university_domain`, `course_code`, `course_name`, `session`, `year`, `OTP`, `student_id_list`, `status`, `userhash`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])

	$insertQuery = "INSERT INTO sconnect_courses_offered (coursehash, university_domain, course_code, course_name, session, year, OTP, student_id_list, status, userhash) VALUES('$courseHashCode','$universityDomain','$courseID','$courseName','$session','$year','$otpGen','$studentIdList','Open','$userhashCode')";
	$result = mysqli_query ($sql_connection, $insertQuery);

	if(!$result){
		echo 'Error in MySQL Query!'.mysqli_error($sql_connection);
		session_write_close();
		exit();
	}
	else {
		echo "Successfully inserted the data in the table sconnect_courses_offered";
		session_write_close();
		exit();
	}

?>

<?php include('../connection_close.php') ?>
