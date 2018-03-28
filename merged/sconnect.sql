-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2018 at 05:49 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_attendance`
--

CREATE TABLE `sconnect_attendance` (
  `attendancehash` varchar(100) NOT NULL,
  `coursehash` varchar(100) NOT NULL,
  `date_mm` varchar(10) NOT NULL,
  `date_dd` varchar(10) NOT NULL,
  `date_yyyy` varchar(10) NOT NULL,
  `time_24hr_hh_mm` varchar(10) NOT NULL,
  `lecture` varchar(10) NOT NULL,
  `timeout_mm` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `student_id_time_list` varchar(255) NOT NULL,
  `OTP` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_attendance_realtime`
--

CREATE TABLE `sconnect_attendance_realtime` (
  `attendance_id` int(5) NOT NULL,
  `attendancehash` varchar(100) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `time_24hr_hh_mm` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_courses_enrolled`
--

CREATE TABLE `sconnect_courses_enrolled` (
  `courses_enrolled_id` int(5) NOT NULL,
  `userhash` varchar(100) NOT NULL,
  `coursehash` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_courses_offered`
--

CREATE TABLE `sconnect_courses_offered` (
  `coursehash` varchar(100) NOT NULL,
  `university_domain` varchar(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `OTP` varchar(4) NOT NULL,
  `student_id_list` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_feed`
--

CREATE TABLE `sconnect_feed` (
  `feed_id` int(5) NOT NULL,
  `text` varchar(100) NOT NULL,
  `photo_path` varchar(50) NOT NULL,
  `video_path` varchar(50) NOT NULL,
  `privacy` varchar(50) NOT NULL,
  `university_domain` varchar(50) NOT NULL,
  `userhash` varchar(100) NOT NULL,
  `date_time_yyyy_mm_dd_hh_mm` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_degree`
--

CREATE TABLE `sconnect_lookup_degree` (
  `degree_code` int(5) NOT NULL,
  `degree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_major`
--

CREATE TABLE `sconnect_lookup_major` (
  `major_code` int(5) NOT NULL,
  `major` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_position`
--

CREATE TABLE `sconnect_lookup_position` (
  `position_code` int(5) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_privacy`
--

CREATE TABLE `sconnect_lookup_privacy` (
  `privacy_code` int(5) NOT NULL,
  `privacy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_session`
--

CREATE TABLE `sconnect_lookup_session` (
  `session` varchar(50) NOT NULL,
  `start_mm` varchar(50) NOT NULL,
  `end_mm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_status`
--

CREATE TABLE `sconnect_lookup_status` (
  `status_code` int(5) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_university`
--

CREATE TABLE `sconnect_lookup_university` (
  `university_domain` varchar(50) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `university_logo_path` varchar(50) NOT NULL,
  `university_time_zone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_message`
--

CREATE TABLE `sconnect_message` (
  `message_id` int(5) NOT NULL,
  `userhash_to` int(11) NOT NULL,
  `userhash_from` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_user`
--

CREATE TABLE `sconnect_user` (
  `userhash` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `profile_image_path` varchar(50) NOT NULL,
  `document_image_path` varchar(50) NOT NULL,
  `resume_path` varchar(50) NOT NULL,
  `dob_mm` varchar(10) NOT NULL,
  `dob_dd` varchar(10) NOT NULL,
  `dob_yyyy` varchar(10) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `university_domain` varchar(50) NOT NULL,
  `OTP` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sconnect_attendance`
--
ALTER TABLE `sconnect_attendance`
  ADD PRIMARY KEY (`attendancehash`);

--
-- Indexes for table `sconnect_attendance_realtime`
--
ALTER TABLE `sconnect_attendance_realtime`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `sconnect_courses_enrolled`
--
ALTER TABLE `sconnect_courses_enrolled`
  ADD PRIMARY KEY (`courses_enrolled_id`);

--
-- Indexes for table `sconnect_courses_offered`
--
ALTER TABLE `sconnect_courses_offered`
  ADD PRIMARY KEY (`coursehash`);

--
-- Indexes for table `sconnect_feed`
--
ALTER TABLE `sconnect_feed`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `sconnect_lookup_degree`
--
ALTER TABLE `sconnect_lookup_degree`
  ADD PRIMARY KEY (`degree_code`);

--
-- Indexes for table `sconnect_lookup_major`
--
ALTER TABLE `sconnect_lookup_major`
  ADD PRIMARY KEY (`major_code`);

--
-- Indexes for table `sconnect_lookup_position`
--
ALTER TABLE `sconnect_lookup_position`
  ADD PRIMARY KEY (`position_code`);

--
-- Indexes for table `sconnect_lookup_privacy`
--
ALTER TABLE `sconnect_lookup_privacy`
  ADD PRIMARY KEY (`privacy_code`);

--
-- Indexes for table `sconnect_lookup_session`
--
ALTER TABLE `sconnect_lookup_session`
  ADD PRIMARY KEY (`session`);

--
-- Indexes for table `sconnect_lookup_status`
--
ALTER TABLE `sconnect_lookup_status`
  ADD PRIMARY KEY (`status_code`);

--
-- Indexes for table `sconnect_lookup_university`
--
ALTER TABLE `sconnect_lookup_university`
  ADD PRIMARY KEY (`university_domain`);

--
-- Indexes for table `sconnect_message`
--
ALTER TABLE `sconnect_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `sconnect_user`
--
ALTER TABLE `sconnect_user`
  ADD PRIMARY KEY (`userhash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sconnect_attendance_realtime`
--
ALTER TABLE `sconnect_attendance_realtime`
  MODIFY `attendance_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sconnect_courses_enrolled`
--
ALTER TABLE `sconnect_courses_enrolled`
  MODIFY `courses_enrolled_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sconnect_feed`
--
ALTER TABLE `sconnect_feed`
  MODIFY `feed_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sconnect_lookup_degree`
--
ALTER TABLE `sconnect_lookup_degree`
  MODIFY `degree_code` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sconnect_lookup_major`
--
ALTER TABLE `sconnect_lookup_major`
  MODIFY `major_code` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sconnect_lookup_position`
--
ALTER TABLE `sconnect_lookup_position`
  MODIFY `position_code` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sconnect_lookup_privacy`
--
ALTER TABLE `sconnect_lookup_privacy`
  MODIFY `privacy_code` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sconnect_lookup_status`
--
ALTER TABLE `sconnect_lookup_status`
  MODIFY `status_code` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sconnect_message`
--
ALTER TABLE `sconnect_message`
  MODIFY `message_id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
