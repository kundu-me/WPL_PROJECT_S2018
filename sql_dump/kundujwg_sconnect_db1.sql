-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2018 at 09:49 PM
-- Server version: 5.6.34-79.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kundujwg_sconnect_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_attendance`
--

CREATE TABLE IF NOT EXISTS `sconnect_attendance` (
  `attendancehash` varchar(100) NOT NULL,
  `coursehash` varchar(100) NOT NULL,
  `date_mm` varchar(10) NOT NULL,
  `date_dd` varchar(10) NOT NULL,
  `date_yyyy` varchar(10) NOT NULL,
  `time_24hr_hh_mm` varchar(10) NOT NULL,
  `lecture` varchar(10) NOT NULL,
  `timeout_mm` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `student_id_time_list` varchar(1000) NOT NULL,
  `OTP` varchar(4) NOT NULL,
  PRIMARY KEY (`attendancehash`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sconnect_attendance`
--

INSERT INTO `sconnect_attendance` (`attendancehash`, `coursehash`, `date_mm`, `date_dd`, `date_yyyy`, `time_24hr_hh_mm`, `lecture`, `timeout_mm`, `status`, `student_id_time_list`, `OTP`) VALUES
('5ac6b43670f91', '5ac6adffc92ff', '04', '06', '2018', '01_41', 'Lec1', '15', 'CLOSE', 's1@utdallas.edu_1200,s2@utdallas.edu_1201,s3@utdallas.edu_1202,s4@utdallas.edu_1203,s5@utdallas.edu_1204,s6@utdallas.edu_1200,s7@utdallas.edu_1201,s8@utdallas.edu_1202,s9@utdallas.edu_1203,s10@utdallas.edu_1204,s11@utdallas.edu_1200,s12@utdallas.edu_1201,s13@utdallas.edu_1202,s14@utdallas.edu_1203,s15@utdallas.edu_1204,s16@utdallas.edu_1200,s17@utdallas.edu_1201,s19@utdallas.edu_1203,s20@utdallas.edu_1204', '2191'),
('5ac6b43670f92', '5ac6adffc92ff', '04', '16', '2018', '01_41', 'Lec2', '15', 'CLOSE', 's1@utdallas.edu_1200,s2@utdallas.edu_1201,s3@utdallas.edu_1202,s4@utdallas.edu_1203,s5@utdallas.edu_1204,s6@utdallas.edu_1200,s7@utdallas.edu_1201,s8@utdallas.edu_1202,s9@utdallas.edu_1203,s10@utdallas.edu_1204,s11@utdallas.edu_1200,s12@utdallas.edu_1201,s13@utdallas.edu_1202,s14@utdallas.edu_1203,s15@utdallas.edu_1204,s16@utdallas.edu_1200,s17@utdallas.edu_1201,s19@utdallas.edu_1203,s20@utdallas.edu_1204', '1111'),
('5ac6b43670f93', '5ac6adffc92ff', '04', '17', '2018', '11_00', 'Lec3', '15', 'CLOSE', 's1@utdallas.edu_1200,s2@utdallas.edu_1201,s3@utdallas.edu_1202,s4@utdallas.edu_1203,s5@utdallas.edu_1204,s6@utdallas.edu_1200,s7@utdallas.edu_1201,s8@utdallas.edu_1202,s9@utdallas.edu_1203,s10@utdallas.edu_1204,s11@utdallas.edu_1200,s12@utdallas.edu_1201,s13@utdallas.edu_1202,s14@utdallas.edu_1203,s15@utdallas.edu_1204,s16@utdallas.edu_1200,s17@utdallas.edu_1201,s19@utdallas.edu_1203,s20@utdallas.edu_1204', '2222'),
('5ac6b43670f94', '5ac6adffc92ff', '04', '18', '2018', '11_00', 'Lec4', '15', 'CLOSE', 's1@utdallas.edu_1200,s2@utdallas.edu_1201,s3@utdallas.edu_1202,s4@utdallas.edu_1203,s5@utdallas.edu_1204,s6@utdallas.edu_1200,s7@utdallas.edu_1201,s8@utdallas.edu_1202,s9@utdallas.edu_1203,s10@utdallas.edu_1204,s11@utdallas.edu_1200,s12@utdallas.edu_1201,s13@utdallas.edu_1202,s14@utdallas.edu_1203,s15@utdallas.edu_1204,s16@utdallas.edu_1200,s17@utdallas.edu_1201,s19@utdallas.edu_1203,s20@utdallas.edu_1204', '3333'),
('5adaeda52570e', '5ad2b9c453956', '04', '21', '2018', '02_52', 'Lec6', '15', 'CLOSE', 's1@utdallas.edu_1200', '7637'),
('5adbdde062df4', '5ad2b9c453956', '04', '21', '2018', '19_57', 'Lec10', '15', 'CLOSE', 's1@utdallas.edu_1200', '4548'),
('5adbde83d0c8c', '5ad2b9c453956', '04', '21', '2018', '19_59', 'Lec6', '15', 'CLOSE', 's1@utdallas.edu_1200', '3232'),
('5add4ff067d82', '5ac6adffc92ff', '04', '22', '2018', '22_16', 'Lec10', '15', 'CLOSE', 's1@utdallas.edu_1200', '1147'),
('5add52c9d566d', '5ac6adffc92ff', '04', '22', '2018', '22_28', 'Lec11', '15', 'CLOSE', 's1@utdallas.edu_2229', '7913'),
('5add537a7b994', '5ac6adffc92ff', '04', '22', '2018', '22_31', 'Lec 12', '15', 'CLOSE', 's1@utdallas.edu_2232,s2@utdallas.edu_2232,s3@utdallas.edu_2232,s4@utdallas.edu_2233', '2851'),
('5add892e94c1b', '5ac6adffc92ff', '04', '23', '2018', '02_20', 'Lec 5', '15', 'OPEN', '', '2236'),
('5add89922b089', '5ac6adffc92ff', '04', '23', '2018', '02_21', 'Lec 99', '15', 'OPEN', '', '3382'),
('5add8c472ce09', '5ac6adffc92ff', '04', '23', '2018', '02_33', 'Lec32', '15', 'OPEN', '', '4252'),
('5add8eda95395', '5ac6adffc92ff', '04', '23', '2018', '02_44', 'Lec 22', '15', 'OPEN', '', '6574'),
('5add8f92647bb', '5ac6adffc92ff', '04', '23', '2018', '02_47', 'lec 44', '15', 'OPEN', '', '7222'),
('5add902fddb20', '5ac6adffc92ff', '04', '23', '2018', '02_50', 'aa', '15', 'OPEN', '', '9940'),
('5add916d7bbb9', '5ac6adffc92ff', '04', '23', '2018', '02_55', 'aa', '15', 'OPEN', '', '2631'),
('5add91ec67f84', '5ac6adffc92ff', '04', '23', '2018', '02_57', 's', '15', 'OPEN', '', '2816'),
('5add92b0a115c', '5ac6adffc92ff', '04', '23', '2018', '03_00', 'ss', '15', 'OPEN', '', '4979'),
('5add9330d2673', '5ac6adffc92ff', '04', '23', '2018', '03_02', 'ss', '15', 'OPEN', '', '1458'),
('5add939182902', '5ac6adffc92ff', '04', '23', '2018', '03_04', 's', '15', 'OPEN', '', '2025'),
('5add9432de4e1', '5ac6adffc92ff', '04', '23', '2018', '03_07', 'ss', '15', 'OPEN', '', '1406'),
('5add95487374f', '5ac6adffc92ff', '04', '23', '2018', '03_11', 's', '15', 'CLOSE', 's1@utdallas.edu_0313,s2@utdallas.edu_0314', '7429'),
('5addf71a93be0', '5ac6adffc92ff', '04', '23', '2018', '10_09', 'Lec_Apr232', '15', 'CLOSE', 's13@utdallas.edu_1010', '2881'),
('5adfcff2959c6', '5ac6adffc92ff', '04', '24', '2018', '19_46', 'Lec 22', '15', 'OPEN', '', '6836'),
('5ae40f1362dc4', '5ac6adffc92ff', '04', '28', '2018', '01_05', 'Lecture 10', '15', 'OPEN', '', '7870'),
('5ae40f60243e5', '5ac6adffc92ff', '04', '28', '2018', '01_06', 'Lec 10', '15', 'OPEN', '', '1610');

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_attendance_realtime`
--

CREATE TABLE IF NOT EXISTS `sconnect_attendance_realtime` (
  `attendance_id` int(5) NOT NULL AUTO_INCREMENT,
  `attendancehash` varchar(100) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `time_24hr_hh_mm` varchar(10) NOT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `sconnect_attendance_realtime`
--

INSERT INTO `sconnect_attendance_realtime` (`attendance_id`, `attendancehash`, `student_id`, `time_24hr_hh_mm`) VALUES
(1, '5ac6b43670f91', 's3@utdallas.edu', '18:41'),
(2, '5ac6b43670f91', 's1@utdallas.edu', '18:42'),
(3, '5ac6b43670f91', 's2@utdallas.edu', '18:42'),
(4, '5ac6b43670f91', 's4@utdallas.edu', '18:43'),
(5, '5ac6b43670f91', 's4@utdallas.edu', '18:43'),
(6, '5ac6b43670f91', 's4@utdallas.edu', '18:44'),
(7, '5add52c9d566d', 's1@utdallas.edu', '22:29'),
(8, '5add537a7b994', 's1@utdallas.edu', '22:32'),
(9, '5add537a7b994', 's1@utdallas.edu', '22:32'),
(10, '5add537a7b994', 's1@utdallas.edu', '22:32'),
(11, '5add537a7b994', 's2@utdallas.edu', '22:33'),
(12, '5add8c472ce09', 's1@utdallas.edu', '02:36'),
(13, '5add8c472ce09', 's2@utdallas.edu', '02:37'),
(14, '5add8c472ce09', 's3@utdallas.edu', '02:38'),
(15, '5add8f92647bb', 's1@utdallas.edu', '02:48'),
(16, '5add902fddb20', 's1@utdallas.edu', '02:51'),
(17, '5add95487374f', 's1@utdallas.edu', '03:13'),
(18, '5add95487374f', 's2@utdallas.edu', '03:14'),
(19, '5addf71a93be0', 's13@utdallas.edu', '10:10');

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_courses_enrolled`
--

CREATE TABLE IF NOT EXISTS `sconnect_courses_enrolled` (
  `courses_enrolled_id` int(5) NOT NULL AUTO_INCREMENT,
  `userhash` varchar(100) NOT NULL,
  `coursehash` varchar(100) NOT NULL,
  PRIMARY KEY (`courses_enrolled_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `sconnect_courses_enrolled`
--

INSERT INTO `sconnect_courses_enrolled` (`courses_enrolled_id`, `userhash`, `coursehash`) VALUES
(1, '5ac6a906961a3', '5ac6adffc92ff'),
(2, '5ac6a9325cda8', '5ac6adffc92ff'),
(3, '5ac6a94271639', '5ac6adffc92ff'),
(4, '5ac6a95261df4', '5ac6adffc92ff'),
(5, '5ac6a961e8ed4', '5ac6adffc92ff'),
(6, '5ac6a9723e89d', '5ac6adffc92ff'),
(7, '5ac6a98710738', '5ac6adffc92ff'),
(8, '5ac6a99d884ab', '5ac6adffc92ff'),
(9, '5ac6a9c877627', '5ac6adffc92ff'),
(10, '5ac6a9dd8ef45', '5ac6adffc92ff'),
(11, '5ac6a9e330226', '5ac6adffc92ff'),
(12, '5ac6a9f8dff9e', '5ac6adffc92ff'),
(14, '5ac6a906961a3', '5ad2b9c453956'),
(15, '', '5ad2b9c453956'),
(16, '5ac6aa13553c1', '5ac6aa13553c1'),
(17, '5ac6aa13553c1', '5ac6adffc92ff');

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_courses_offered`
--

CREATE TABLE IF NOT EXISTS `sconnect_courses_offered` (
  `coursehash` varchar(100) NOT NULL,
  `userhash` varchar(100) NOT NULL,
  `university_domain` varchar(50) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `OTP` varchar(4) NOT NULL,
  `status` varchar(50) NOT NULL,
  `student_id_list` varchar(255) NOT NULL,
  PRIMARY KEY (`coursehash`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sconnect_courses_offered`
--

INSERT INTO `sconnect_courses_offered` (`coursehash`, `userhash`, `university_domain`, `course_code`, `course_name`, `session`, `year`, `OTP`, `status`, `student_id_list`) VALUES
('5ac6adffc92ff', '5ac6a7853b377', 'utdallas', 'CS6361.001', 'Database', 'Fall', '2018', '7385', 'Open', 's1, s2, s3, s4, s5, s6, s7, s8, s9, s10, s11, s12'),
('5ad2b9c453956', '5ac6a7853b377', 'utdallas', 'CS6390.002', 'Computation of Algorithms', 'Spring', '2018', '6511', 'Open', 's8, s9, s11, s13, s14, s16, s17, s18'),
('5adfa96d918ef', '5ac6a7853b377', 'utdallas', 'CS6390.001', 'Advanced Networks', 'Fall', '2018', '5278', 'Open', 's1, s2'),
('5adface3a593f', '5ac6a7853b377', 'utdallas', 'CS5160.001', 'SDN', 'Spring', '2018', '7616', 'Open', 's1, s3, s8');

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_feed`
--

CREATE TABLE IF NOT EXISTS `sconnect_feed` (
  `feedhash` varchar(100) NOT NULL,
  `text_data` varchar(100) NOT NULL,
  `photo_path` varchar(255) DEFAULT NULL,
  `video_path` varchar(255) DEFAULT NULL,
  `privacy` varchar(50) NOT NULL,
  `university_domain` varchar(50) NOT NULL,
  `userhash_to` varchar(100) NOT NULL,
  `userhash_from` varchar(100) NOT NULL,
  `date_time_yyyy_mm_dd_hh_mm` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`feedhash`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sconnect_feed`
--

INSERT INTO `sconnect_feed` (`feedhash`, `text_data`, `photo_path`, `video_path`, `privacy`, `university_domain`, `userhash_to`, `userhash_from`, `date_time_yyyy_mm_dd_hh_mm`, `status`) VALUES
('5ad0047d89086', 'sssss', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2014', '0'),
('5ad00480b9240', 'ss', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2014', '0'),
('5ad00b2437150', 'zzzz', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2043', '0'),
('5ad00b31981b9', 'hellow??', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2043', '0'),
('5ad00b3bbd7aa', 'Howdy all?', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2043', '0'),
('5ad00b868396f', 'hello all!!!', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2044', '0'),
('5ad02b4d5c8d9', 'hi A1111', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2300', '0'),
('5ad02b5311b72', 'I am here', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2300', '0'),
('5ad02b5b6db4a', 'how are you?', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2300', '0'),
('5ad02b6a75101', 'how are you?\n', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2300', '0'),
('5ad02b734547e', 'I am good', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2300', '0'),
('5ad02c58c5a9f', 'd', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2304', '0'),
('5ad02c615eb37', 'e', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2304', '0'),
('5ad02c6ec9b8c', 'h', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2305', '0'),
('5ad02c860aa15', 's', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2305', '0'),
('5ad02c889ff5e', 's', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180412_2305', '0'),
('5ad11035414d0', 'w', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180413_1516', '0'),
('5ad114d4eda9b', 'hello I am Student 2', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a9325cda8', '20180413_1537', '0'),
('5ad1fedf6d23f', 'This is a post with new date time format.', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180414_0815', '0'),
('5ad20fec1d564', 'Another post!', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180414_0927', '0'),
('5ad281be16648', 'hi I am faculty', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a7853b377', '20180414_0927', '0'),
('5ad3039198c25', 'heeeeee', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a9325cda8', '20180414_0927', '0'),
('5ad4f32b0b2be', 'a', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a9325cda8', '20180414_0927', '0'),
('5ad4f333de9f2', 'sssss', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a9325cda8', '20180414_0927', '0'),
('5ad4f33bbad98', 'ssss', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a9325cda8', '20180414_0927', '0'),
('5ad4f34baf4de', 'facebook\n', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a9325cda8', '20180414_0927', '0'),
('5ad63cae46cb7', 'test', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a7853b377', '20180414_0927', '0'),
('5ad8f24ca422c', 'Hi I am Michael Smith', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180414_0927', '0'),
('5ad908043dd58', 'hiii\n', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180414_0927', '0'),
('5ad9f5f0d9d33', 'correct photo', '../../feed_data/image/5ac6a906961a3_11.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180414_0927', '1'),
('5ad9fc60317a9', 'With Privacy...', '../../feed_data/image/5ac6a906961a3_Pluto is a graffiti artist - NASA_JHUAPL_SwRI.jpg', NULL, 'University', 'utdallas', 'Timeline', '5ac6a906961a3', '20180420_0942', '1'),
('5ada08405a6e4', 'dadad', '../../feed_data/image/5ac6a906961a3_11.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180420_1033', '1'),
('5ada090269912', 'adddd', '../../feed_data/image/5ac6a906961a3_adventure-background-blur-891252.jpg', NULL, 'Private', 'utdallas', 'Timeline', '5ac6a906961a3', '20180420_1036', '1'),
('5ada09d8bc916', 'mmmmmmmooooooooo', '../../feed_data/image/5ac6a906961a3_architecture-building-ceiling-922792.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180420_1040', '1'),
('5ada0c00e0121', 'aaaaaaaaaaaaccccccccc', '../../feed_data/image/5ac6a906961a3_11.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180420_1049', '1'),
('5ada0ce4da8d1', 'doggo', '../../feed_data/image/5ac6a9723e89d_dog.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a9723e89d', '20180420_1053', '1'),
('5ada0fed0e275', 'photo+video+text', '../../feed_data/image/5ac6a9723e89d_dog.jpg', '../../feed_data/video/5ac6a9723e89d_funny cat videos.mp4', 'Private', 'utdallas', 'Timeline', '5ac6a9723e89d', '20180420_1106', '0'),
('5ada1333c89e2', 'only text', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a9723e89d', '20180420_1120', '0'),
('5ada13bc5865d', 'only text - 2', NULL, NULL, 'University', 'utdallas', 'Timeline', '5ac6a9723e89d', '20180420_1122', '0'),
('5ada13e8f2b5d', 'text+video', NULL, '../../feed_data/video/5ac6a9723e89d_funny cat videos.mp4', 'University', 'utdallas', 'Timeline', '5ac6a9723e89d', '20180420_1123', '1'),
('5ada1408b7399', 'text+photo', '../../feed_data/image/5ac6a9723e89d_Pluto is a graffiti artist - NASA_JHUAPL_SwRI.jpg', NULL, 'Private', 'utdallas', 'Timeline', '5ac6a9723e89d', '20180420_1123', '0'),
('5ada1427e2523', 'text+photo+video :-)', '../../feed_data/image/5ac6a9723e89d_11.jpg', '../../feed_data/video/5ac6a9723e89d_funny cat videos.mp4', 'Public', 'utdallas', 'Timeline', '5ac6a9723e89d', '20180420_1124', '1'),
('5ada15319c7a4', 'there you go. some text here.', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a9723e89d', '20180420_1128', '0'),
('5ada4fe81d236', 'nn', '../../feed_data/image/5ac6a906961a3_icon1.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180420_1539', '1'),
('5ada7795ab47d', 'hhh', '../../feed_data/image/5ac6a906961a3_icon1.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180420_1829', '1'),
('5ada782e880f0', 'jj', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180420_1831', ''),
('5add696c89ed1', 'hiiiii\r\n', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_0004', '1'),
('5add69b65fbee', 'This is ddddddddd', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_0005', '1'),
('5add6a297ebbd', 'ssss', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_0007', '1'),
('5add6a321f401', 'qqqqqqqqq', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_0008', '1'),
('5add6a892782f', 'hh', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_0010', ''),
('5add6ab7b3db8', 'gghghhghg', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_0011', '1'),
('5adde64be3796', 'CSS added.', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_0857', '1'),
('5adde7be99aea', 'photo path changed', '../../feed_data/image/5adde7be99aea_altitude-blue-sky-clouds-530158.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_0903', '1'),
('5adde8049e811', 'video path changed', NULL, '../../feed_data/video/5adde8049e811_funny cat videos.mp4', 'University', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_0904', '1'),
('5addeba4b9cf4', 'text with new post card', NULL, NULL, 'University', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_0920', '0'),
('5ade482e38833', 'Test', '5ade482e38833_sample1.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_1555', '1'),
('5ade4ad9ad92d', 'Test . video', NULL, 'SampleVideo_720x480_1mb.mp4', 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_1606', '1'),
('5ade50eb3b3e5', 'TestVideo', NULL, '5ade50eb3b3e5.mp4', 'Public', 'utdallas', 'Timeline', '5ac6a7853b377', '20180423_1633', '1'),
('5ade55309d53a', 'test text', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_1651', '0'),
('5ade5539bfa89', 'test photo ', '5ade5539bfa89.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_1651', '1'),
('5ade55a3e8c90', 'test photo', '5ade55a3e8c90.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_1653', '1'),
('5ade55b11b520', 'tyest video ', NULL, '5ade55b11b520.mp4', 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_1653', '1'),
('5ade71ad1aaf7', 'hi', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_1852', '0'),
('5ade71b36c951', 'hi', NULL, NULL, 'Private', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_1852', '0'),
('5ade71f530cf6', 'hello from viewProfile', NULL, NULL, 'Public', 'utdallas', '5ac6a7853b377', '5ac6a98710738', '20180423_1853', '2'),
('5ade720be69b5', 'hello from viewProfile+Photo', '5ade720be69b5.jpg', NULL, 'Public', 'utdallas', '5ac6a7853b377', '5ac6a98710738', '20180423_1853', '2'),
('5ade722092fbe', 'hello from viewProfile+video', '5ade722092fbe.jpg', '5ade722092fbe.mp4', 'Public', 'utdallas', '5ac6a7853b377', '5ac6a98710738', '20180423_1854', '2'),
('5ade72465446c', 'hi', NULL, NULL, 'Private', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_1854', '0'),
('5ade7386003f8', 'gg', NULL, NULL, 'University', 'utdallas', 'Timeline', '5ac6a906961a3', '20180423_1900', '0'),
('5ade78fbdda59', 'Test 04232018', NULL, NULL, 'Public', 'utdallas', '5ac6a906961a3', '5ac6a9325cda8', '20180423_1923', '0'),
('5adebbf93c907', 'good work ,...keep it up.....we r proud of u CEO....', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180424_0010', '1'),
('5adec00912856', 'nnnn', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180424_0027', '0'),
('5adec3139036e', 'This is a photo upload!!', '5adec3139036e.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a7853b377', '20180424_0040', '0'),
('5adec37e8c6c9', 'This is a viedo upload !!', NULL, '5adec37e8c6c9.mp4', 'Public', 'utdallas', 'Timeline', '5ac6a7853b377', '20180424_0042', '0'),
('5adf2a91a963f', 'post by savannah', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a961e8ed4', '20180424_0801', '1'),
('5adf2ad6d8c77', 'Nice way to connect to people here :-)', NULL, NULL, 'University', 'utdallas', 'Timeline', '5ac6a961e8ed4', '20180424_0803', '0'),
('5adf4d0fba32c', 'I will be thy priest.', '5adf4d0fba32c.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180424_1029', '1'),
('5adf82e5c04c0', 'Hello Everyone, this is Nathan', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a9f8dff9e', '20180424_1418', '1'),
('5adf955ed7b87', 'This is a new post', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180424_1537', '0'),
('5adfb59827339', 'Hey There!!', NULL, NULL, 'University', 'utdallas', 'Timeline', '5ac6a9325cda8', '20180424_1755', '0'),
('5adfb92a9f760', 'I am a UT Arlington Faculty! And my POST PRIVACY is Within UNIVERSITY', NULL, NULL, 'University', 'uta', 'Timeline', '5adfb8d12585e', '20180424_1810', '0'),
('5adfb942458bb', 'I am a UT Arlington Faculty! And my POST PRIVACY is PUBLIC', NULL, NULL, 'Public', 'uta', 'Timeline', '5adfb8d12585e', '20180424_1810', '0'),
('5adfcc8789f7d', 'This is a demo text for UT Dallas.', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180424_1932', '1'),
('5adfccd194d3f', 'Uploading photo', '5adfccd194d3f.jpg', NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180424_1934', '0'),
('5adfcce7ed42e', 'uploading video here.', NULL, '5adfcce7ed42e.mp4', 'Private', 'utdallas', 'Timeline', '5ac6a906961a3', '20180424_1934', '0'),
('5adfce14704a5', 'approve this post...from Michael (s1@utdallas.edu)', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a906961a3', '20180424_1939', '0'),
('5adfce3f844ff', 'approve please(from s2)', NULL, NULL, 'Public', 'utdallas', 'Timeline', '5ac6a9325cda8', '20180424_1940', '1'),
('5adfce8bc2a73', 'hi, michael...', NULL, NULL, 'Public', 'utdallas', '5ac6a906961a3', '5ac6a9325cda8', '20180424_1941', '2');

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_feed_activity`
--

CREATE TABLE IF NOT EXISTS `sconnect_feed_activity` (
  `activityhash` varchar(100) NOT NULL,
  `feedhash` varchar(100) NOT NULL,
  `userhash` varchar(100) NOT NULL,
  `likes` int(100) NOT NULL,
  `dislikes` int(100) NOT NULL,
  PRIMARY KEY (`activityhash`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sconnect_feed_activity`
--

INSERT INTO `sconnect_feed_activity` (`activityhash`, `feedhash`, `userhash`, `likes`, `dislikes`) VALUES
('5ad3030198c25', '5ad3039198c25', '5ac6a9325cda8', 1, 0),
('5ad581fd7334c', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5823e9ceb9', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5829e9d206', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad582a02ab73', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad582a149633', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad582a264eee', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad583225c6d3', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58322a8ffc', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58329f34c9', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5832b20c8e', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5832c9d538', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5832f8019b', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58330d29cc', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58331e2a7d', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58350d5474', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad583520fbf4', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58353a0284', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5835497614', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad583e6ab8b7', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5846133e45', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5846276642', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58463aa1db', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58464bc964', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5847fadc9e', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58480a61e0', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5848194779', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5848286feb', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad584838251a', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad584846ee69', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58487f40e7', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5848a223da', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5848b2538c', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5848c38343', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58580b58e1', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad585f91c6e8', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad585fa4d6c8', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58614abcff', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5861553e55', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58615aca9f', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58615e0941', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5861637da2', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad586182ea38', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5861a74dd7', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5861b08b96', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5861ce62f3', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5861d6cb2a', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5861dcb256', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5861f78c14', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5861fe49df', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58620813fb', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58622350fa', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58622b1e05', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad586aae45c0', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad586abb6446', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad586ac88d3e', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad586ad0b758', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad586ad37d7b', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5870d06c54', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5870ddc0e4', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5870e6545b', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5870eced1a', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5870f58eae', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58710c20f8', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad5871190b05', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad5871207338', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad587124c829', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58b07227dc', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58b079d0b9', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58b07e60a5', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58b08201dd', '5ad3039198c25', '5ac6a906961a3', 1, 0),
('5ad58b093a23f', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58b096e10f', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58b09a38f1', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58b09d51c7', '5ad3039198c25', '5ac6a906961a3', 0, 1),
('5ad58f8f8fbad', '5ad3039198c25', '5ac6a9325cda8', 1, 0),
('5ad58f976e730', '5ad281be16648', '5ac6a9325cda8', 1, 0),
('5ad58fa918287', '5ad114d4eda9b', '5ac6a9325cda8', 0, 1),
('5ad5900833551', '5ad11035414d0', '5ac6a9325cda8', 0, 1),
('5ad590088925c', '5ad11035414d0', '5ac6a9325cda8', 0, 1),
('5ad59008b9f5b', '5ad11035414d0', '5ac6a9325cda8', 0, 1),
('5ad59008e6827', '5ad11035414d0', '5ac6a9325cda8', 0, 1),
('5ad590091a308', '5ad11035414d0', '5ac6a9325cda8', 0, 1),
('5ad590094e9cc', '5ad11035414d0', '5ac6a9325cda8', 0, 1),
('5ad590098451b', '5ad11035414d0', '5ac6a9325cda8', 0, 1),
('5ad59009b2d54', '5ad11035414d0', '5ac6a9325cda8', 0, 1),
('5ad59011232ad', '5ad4f33bbad98', '5ac6a9325cda8', 0, 1),
('5ad5901154a00', '5ad4f33bbad98', '5ac6a9325cda8', 0, 1),
('5ad590118444a', '5ad4f33bbad98', '5ac6a9325cda8', 0, 1),
('5ad59011b10e9', '5ad4f33bbad98', '5ac6a9325cda8', 0, 1),
('5ad59011dadf4', '5ad4f33bbad98', '5ac6a9325cda8', 0, 1),
('5ad59012152ba', '5ad4f33bbad98', '5ac6a9325cda8', 0, 1),
('5ad5901244018', '5ad4f33bbad98', '5ac6a9325cda8', 0, 1),
('5ad5901becd86', '5ad3039198c25', '5ac6a9325cda8', 1, 0),
('5ad5901c26fb0', '5ad3039198c25', '5ac6a9325cda8', 1, 0),
('5ad59066c0921', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906730689', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad590676468f', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906794e29', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad59067c6a2c', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad59068032ea', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad590683535b', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906863112', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad59069a8f49', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad59069dd4c0', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906a1efa3', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906a55f01', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906a87738', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906abfc32', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906af2388', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906b2d23d', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906b5f89e', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906b91d55', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906bbb779', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5906c921c7', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906cc11c3', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906ceeb1e', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906d26f87', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906d556c6', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906d85475', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906db6025', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906de5c82', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906e219a8', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906e5475a', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906e88ee5', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906ebc4ee', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906ef1cba', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906f307d7', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906f61a03', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906f916e7', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906fbff95', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5906ff0a1d', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad590702d6b6', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5907088e3a', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad59070bab50', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad59070ec044', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad590712a211', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5907157946', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5907188bf2', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad59071b8d23', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad59071eb6df', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad590722b40a', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad590726020d', '5ad0047d89086', '5ac6a9325cda8', 0, 1),
('5ad5907688979', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad59076b7490', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad59076ea12f', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad59077288c6', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad59077505fd', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad59077850d3', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad59077b4628', '5ad0047d89086', '5ac6a9325cda8', 1, 0),
('5ad5912a47c1f', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912aab22f', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912ae4fac', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912b3e7c7', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912b85dfc', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912bc0e3d', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912c0a65c', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912c5b5fb', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912c95d18', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912cd04a9', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912d19496', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912d51f03', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912d8c4be', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912dc4497', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912e0c29d', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912e42c50', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad5912e81cfe', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad593b12ceb9', '5ad3039198c25', '5ac6a9325cda8', 1, 0),
('5ad593b19cb3d', '5ad3039198c25', '5ac6a9325cda8', 1, 0),
('5ad595ad8014f', '5ad3039198c25', '5ac6a9325cda8', 0, 1),
('5ad595aec5ef6', '5ad3039198c25', '5ac6a9325cda8', 1, 0),
('5ad595af773bd', '5ad3039198c25', '5ac6a9325cda8', 1, 0),
('5ad6328bcb01a', '5ad00b3bbd7aa', '5ac6a9325cda8', 1, 0),
('5ad6328c3d809', '5ad00b3bbd7aa', '5ac6a9325cda8', 1, 0),
('5ad6328c6cd4c', '5ad00b3bbd7aa', '5ac6a9325cda8', 1, 0),
('5ad6328c982a1', '5ad00b3bbd7aa', '5ac6a9325cda8', 1, 0),
('5ad6328ccade8', '5ad00b3bbd7aa', '5ac6a9325cda8', 1, 0),
('5ad63cc973001', '5ad63cae46cb7', '5ac6a7853b377', 1, 0),
('5ad6531634d08', '5ad63cae46cb7', '5ac6a7853b377', 1, 0),
('5ad653287fec8', '5ad63cae46cb7', '5ac6a7853b377', 1, 0),
('5ad65329cfcc0', '5ad63cae46cb7', '5ac6a7853b377', 0, 1),
('5ad6532e1a9ac', '5ad63cae46cb7', '5ac6a7853b377', 0, 1),
('5ad65334cb6ee', '5ad63cae46cb7', '5ac6a7853b377', 1, 0),
('5ad6533559077', '5ad63cae46cb7', '5ac6a7853b377', 1, 0),
('5ad65335c3e0c', '5ad63cae46cb7', '5ac6a7853b377', 1, 0),
('5ad6533652425', '5ad63cae46cb7', '5ac6a7853b377', 1, 0),
('5ad653372243c', '5ad63cae46cb7', '5ac6a7853b377', 0, 1),
('5ad6533857c96', '5ad63cae46cb7', '5ac6a7853b377', 1, 0),
('5ad65338e4aee', '5ad63cae46cb7', '5ac6a7853b377', 0, 1),
('5ad653396e195', '5ad63cae46cb7', '5ac6a7853b377', 0, 1),
('5ad65339d63cb', '5ad63cae46cb7', '5ac6a7853b377', 0, 1),
('5ad6533a57abf', '5ad63cae46cb7', '5ac6a7853b377', 1, 0),
('5ad6533acde9c', '5ad63cae46cb7', '5ac6a7853b377', 1, 0),
('5ad6608f5f8b9', '5ad02b6a75101', '5ac6a7853b377', 1, 0),
('5ad6aedaa737a', '5ad3039198c25', '5ac6a7853b377', 1, 0),
('5ad6aedbc3a67', '5ad3039198c25', '5ac6a7853b377', 0, 1),
('5ad6d61a5a647', '5ad3039198c25', '5ac6a7853b377', 1, 0),
('5ad6d61b3c3c5', '5ad3039198c25', '5ac6a7853b377', 0, 1),
('5ad7bda01c13e', '5ad3039198c25', '5ac6a7853b377', 1, 0),
('5ad7bda14a11d', '5ad3039198c25', '5ac6a7853b377', 1, 0),
('5ad7bda5881cd', '5ad3039198c25', '5ac6a7853b377', 0, 1),
('5ad812add4b59', '5ad20fec1d564', '5ac6a7853b377', 1, 0),
('5ad812ae83404', '5ad20fec1d564', '5ac6a7853b377', 0, 1),
('5ad812af517db', '5ad20fec1d564', '5ac6a7853b377', 1, 0),
('5ad812af9be91', '5ad20fec1d564', '5ac6a7853b377', 1, 0),
('5ad812afccfb3', '5ad20fec1d564', '5ac6a7853b377', 1, 0),
('5ad812b009772', '5ad20fec1d564', '5ac6a7853b377', 1, 0),
('5ad812b846dfb', '5ad63cae46cb7', '5ac6a7853b377', 1, 0),
('5ad8beaf78c07', '5ad3039198c25', '5ac6a7853b377', 1, 0),
('5ad8beb0021c6', '5ad3039198c25', '5ac6a7853b377', 1, 0),
('5ad8beb10f195', '5ad3039198c25', '5ac6a7853b377', 0, 1),
('5ad8beb180b46', '5ad3039198c25', '5ac6a7853b377', 0, 1),
('5ad8c7eb29d0c', '5ad02c889ff5e', '5ac6a7853b377', 1, 0),
('5ad8c7ebaf3e9', '5ad02c889ff5e', '5ac6a7853b377', 1, 0),
('5ad8c7ec27f87', '5ad02c889ff5e', '5ac6a7853b377', 1, 0),
('5ad8c7ec5927b', '5ad02c889ff5e', '5ac6a7853b377', 1, 0),
('5ad8c7ed5d678', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7edcabf0', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7ee2b52d', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f030fd2', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f095312', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f1735da', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f1c4a66', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f21d840', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f25be57', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f296e36', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f2cf411', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f33aa8a', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f388010', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f3cbc3e', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f41aa67', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f45086f', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f4877a2', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f4b8950', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f4eb676', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8c7f529cca', '5ad02c889ff5e', '5ac6a7853b377', 0, 1),
('5ad8f25baa155', '5ad8f24ca422c', '5ac6a906961a3', 1, 0),
('5ad8f25d094c2', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad8f25d45cd8', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad8f25e5457b', '5ad8f24ca422c', '5ac6a906961a3', 1, 0),
('5ad8f25e9b6d2', '5ad8f24ca422c', '5ac6a906961a3', 1, 0),
('5ad8fc733ec05', '5ad8f24ca422c', '5ac6a906961a3', 1, 0),
('5ad8fc73cec55', '5ad8f24ca422c', '5ac6a906961a3', 1, 0),
('5ad8fc7427130', '5ad8f24ca422c', '5ac6a906961a3', 1, 0),
('5ad8fc7452927', '5ad8f24ca422c', '5ac6a906961a3', 1, 0),
('5ad8fc748a5ea', '5ad8f24ca422c', '5ac6a906961a3', 1, 0),
('5ad8fc759a5a1', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad8fc75d480f', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad8fc760ee01', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad8fc763cbb2', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad8fc766e157', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad8fc797007e', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad8fc7a0690c', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad8fc7addfae', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad9398e3313a', '5ad8f24ca422c', '5ac6a906961a3', 1, 0),
('5ad9398ea2098', '5ad8f24ca422c', '5ac6a906961a3', 1, 0),
('5ad9398fa5ea2', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad9398ff3346', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad939903f842', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ad9399081f28', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca20ca72', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca2c3c79', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca2ca04a', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca3304b2', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca332458', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca38556b', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca386c2f', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca3d758a', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca3d9200', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca43d454', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca43ee4d', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca49bad6', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca49dcc4', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca504949', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca506466', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca55ed0d', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca56089c', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca5b7a18', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca5b8ade', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca61cd54', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca61ef8d', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca67feec', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca6827b1', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca6dd265', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca6def93', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca74edf9', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca750c10', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca7b1494', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca7b37db', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca98bdd2', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca98d6b6', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca9e3dca', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1ca9e5cab', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5ada1caa425bf', '5ad8f24ca422c', '5ac6a906961a3', 0, 1),
('5add68b6c62b1', '5ad0047d89086', '5ac6a906961a3', 1, 0),
('5add68b75b41c', '5ad0047d89086', '5ac6a906961a3', 1, 0),
('5addfd3bda16d', '5adde8049e811', '5ac6a906961a3', 1, 0),
('5addfd3c6a693', '5adde8049e811', '5ac6a906961a3', 1, 0),
('5addfd3c9fa1a', '5adde8049e811', '5ac6a906961a3', 1, 0),
('5addfd3ccd0a0', '5adde8049e811', '5ac6a906961a3', 1, 0),
('5addfd3d06686', '5adde8049e811', '5ac6a906961a3', 1, 0),
('5addfd3d31869', '5adde8049e811', '5ac6a906961a3', 1, 0),
('5addfd3d6047e', '5adde8049e811', '5ac6a906961a3', 1, 0),
('5addfd3d8e085', '5adde8049e811', '5ac6a906961a3', 1, 0),
('5addfd3dba248', '5adde8049e811', '5ac6a906961a3', 1, 0),
('5addfd3de7899', '5adde8049e811', '5ac6a906961a3', 1, 0),
('5ade3d994ed8d', '5addeba4b9cf4', '5ac6a906961a3', 1, 0),
('5ade3d9980eff', '5addeba4b9cf4', '5ac6a906961a3', 1, 0),
('5ade3d99b35a9', '5addeba4b9cf4', '5ac6a906961a3', 1, 0),
('5ade40f64af20', '5ada15319c7a4', '5ac6a7853b377', 1, 0),
('5ade40f6787c5', '5ada15319c7a4', '5ac6a7853b377', 1, 0),
('5ade40f6a440e', '5ada15319c7a4', '5ac6a7853b377', 1, 0),
('5ade4d587f474', '5ade4ad9ad92d', '5ac6a906961a3', 1, 0),
('5ade61b14836b', '5ade55b11b520', '5ac6a906961a3', 1, 0),
('5ade61b27a8c2', '5ade55b11b520', '5ac6a906961a3', 1, 0),
('5ade61b2a8622', '5ade55b11b520', '5ac6a906961a3', 1, 0),
('5ade61b2d305b', '5ade55b11b520', '5ac6a906961a3', 1, 0),
('5ade61b304fd7', '5ade55b11b520', '5ac6a906961a3', 1, 0),
('5ade61b32c66d', '5ade55b11b520', '5ac6a906961a3', 1, 0),
('5ade61b357e8a', '5ade55b11b520', '5ac6a906961a3', 1, 0),
('5ade8309204b2', '5ade71ad1aaf7', '5ac6a7853b377', 1, 0),
('5ade83094ce9f', '5ade71ad1aaf7', '5ac6a7853b377', 1, 0),
('5ade83097c087', '5ade71ad1aaf7', '5ac6a7853b377', 1, 0),
('5ade8309a8068', '5ade71ad1aaf7', '5ac6a7853b377', 1, 0),
('5ade8309d107c', '5ade71ad1aaf7', '5ac6a7853b377', 1, 0),
('5ade8309f3167', '5ade71ad1aaf7', '5ac6a7853b377', 1, 0),
('5adebf70813c8', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf70e877f', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf71214d2', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf714c6a4', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf72e9c46', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf7339911', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf73702db', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf73a3b41', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf73cf9c1', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf7405a6c', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf743379d', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf75a3881', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf75d17af', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf760a564', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf7632b09', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf76617e4', '5ad02c860aa15', '5ac6a906961a3', 1, 0),
('5adebf77b8079', '5ad02c860aa15', '5ac6a906961a3', 0, 1),
('5adebf77e8a1b', '5ad02c860aa15', '5ac6a906961a3', 0, 1),
('5adebf781bf20', '5ad02c860aa15', '5ac6a906961a3', 0, 1),
('5adec00ba2a65', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec00da3eb3', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec00dd17d5', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec00e060a8', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec00e2d729', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec00e52c27', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec00e79b8e', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec00e9d0c0', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec00ec41f3', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec00ee5fb1', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec00f16d8a', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec010cd41e', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec011007d8', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec01129d90', '5adec00912856', '5ac6a906961a3', 1, 0),
('5adec012cc025', '5adec00912856', '5ac6a906961a3', 0, 1),
('5adec01305a1d', '5adec00912856', '5ac6a906961a3', 0, 1),
('5adec0132ac88', '5adec00912856', '5ac6a906961a3', 0, 1),
('5adec01353a87', '5adec00912856', '5ac6a906961a3', 0, 1),
('5adec0137cec6', '5adec00912856', '5ac6a906961a3', 0, 1),
('5adec013a4d30', '5adec00912856', '5ac6a906961a3', 0, 1),
('5adec401960cd', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5adec402a3344', '5adec37e8c6c9', '5ac6a906961a3', 0, 1),
('5adece01b0d1d', '5ade71ad1aaf7', '5ac6a906961a3', 1, 0),
('5adece02b7b24', '5ade71ad1aaf7', '5ac6a906961a3', 1, 0),
('5adece02ec54c', '5ade71ad1aaf7', '5ac6a906961a3', 1, 0),
('5adece032a4c5', '5ade71ad1aaf7', '5ac6a906961a3', 1, 0),
('5adfcda918a92', '5adfccd194d3f', '5ac6a906961a3', 1, 0),
('5adfcdaa3cbb2', '5adfccd194d3f', '5ac6a906961a3', 0, 1),
('5adfcdaf1f1af', '5adfccd194d3f', '5ac6a906961a3', 1, 0),
('5adfcdaf4c874', '5adfccd194d3f', '5ac6a906961a3', 1, 0),
('5adfcdaf707c7', '5adfccd194d3f', '5ac6a906961a3', 1, 0),
('5adfcdaf92bb3', '5adfccd194d3f', '5ac6a906961a3', 1, 0),
('5adfcdb0e9d30', '5adfccd194d3f', '5ac6a906961a3', 0, 1),
('5adfcdb11a0a2', '5adfccd194d3f', '5ac6a906961a3', 0, 1),
('5adfcfb872c84', '5ad02b4d5c8d9', '5ac6a81be9dd1', 1, 0),
('5adfcfb9b666f', '5ad02b4d5c8d9', '5ac6a81be9dd1', 0, 1),
('5ae2c4137ef02', '5adfccd194d3f', '5ac6a906961a3', 1, 0),
('5ae410035e925', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae410038da9d', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae41003bfa67', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae41003ef65f', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae410042b848', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae4100455b73', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae410047d599', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae41004a6265', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae41004cfff4', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae4100508a77', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae410052db66', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae41005513d0', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae41005a9522', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae41005c9af4', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae41005f1dfe', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae410062afbf', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae41006533a3', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae410067d9b4', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae41006a3207', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae41006c943f', '5adec37e8c6c9', '5ac6a906961a3', 1, 0),
('5ae41007cff66', '5adec37e8c6c9', '5ac6a906961a3', 0, 1),
('5ae4100802607', '5adec37e8c6c9', '5ac6a906961a3', 0, 1),
('5ae41008294bf', '5adec37e8c6c9', '5ac6a906961a3', 0, 1),
('5ae4100852458', '5adec37e8c6c9', '5ac6a906961a3', 0, 1),
('5ae410087ab66', '5adec37e8c6c9', '5ac6a906961a3', 0, 1),
('5ae41008a130a', '5adec37e8c6c9', '5ac6a906961a3', 0, 1),
('5ae41008c5603', '5adec37e8c6c9', '5ac6a906961a3', 0, 1),
('5ae41008eeb9a', '5adec37e8c6c9', '5ac6a906961a3', 0, 1),
('5ae41009224d6', '5adec37e8c6c9', '5ac6a906961a3', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_feed_comment`
--

CREATE TABLE IF NOT EXISTS `sconnect_feed_comment` (
  `commenthash` varchar(100) NOT NULL,
  `feedhash` varchar(100) NOT NULL,
  `userhash` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `date_time_yyyy_mm_hh_mm_dd` varchar(100) NOT NULL,
  PRIMARY KEY (`commenthash`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sconnect_feed_comment`
--

INSERT INTO `sconnect_feed_comment` (`commenthash`, `feedhash`, `userhash`, `comment`, `date_time_yyyy_mm_hh_mm_dd`) VALUES
('5ac6a932ffda8', '5ad3039198c25', '5ac6a9325cda8', 'This is comment 1', '20180412_2014'),
('5arra9325cda8', '5ad3039198c25', '5ac6a9325cda8', 'This is comment 2', '20180412_2014'),
('5ad3039198c2q', '5ad3039198c25', '5ac6a9325cda8', 'This is comment 3', '20180412_2014'),
('5ad3039198c2w', '5ad3039198c25', '5ac6a9325cda8', 'This is comment 4', '20180412_2014'),
('5ad57aa94a6e9', '5ad3039198c25', '5ac6a906961a3', 'hiiiiiiii', '201840162340'),
('5ad57af12fd22', '5ad3039198c25', '5ac6a906961a3', 'hello', '201841162341'),
('5ad57c7a0251b', '5ad3039198c25', '5ac6a906961a3', 'ssss', '201847162347'),
('5ad57d23f40ed', '5ad3039198c25', '5ac6a906961a3', 'd', '201850162350'),
('5ad57df6e5098', '5ad3039198c25', '5ac6a906961a3', 'qqqq', '201854162354'),
('5ad57f24e0dc5', '5ad3039198c25', '5ac6a906961a3', 'a', '201859162359'),
('5ad57f766ed53', '5ad3039198c25', '5ac6a906961a3', 's', '201800170000'),
('5ad57f7eece87', '5ad3039198c25', '5ac6a906961a3', 'this is good', '201800170000'),
('5ad57f8532404', '5ad3039198c25', '5ac6a906961a3', 'dd', '201800170000'),
('5ad57fb1a5975', '5ad3039198c25', '5ac6a906961a3', 'jkhkjh', '201801170001'),
('5ad586a6d5b16', '5ad3039198c25', '5ac6a906961a3', 'a', '201831170031'),
('5ad586d61c3b8', '5ad3039198c25', '5ac6a906961a3', 's', '201832170032'),
('5ad586d81cd17', '5ad3039198c25', '5ac6a906961a3', 's', '201832170032'),
('5ad586dc36e98', '5ad3039198c25', '5ac6a906961a3', 'knjkj', '201832170032'),
('5ad586e2e4771', '5ad3039198c25', '5ac6a906961a3', 'ss', '201832170032'),
('5ad586fdb859b', '5ad3039198c25', '5ac6a906961a3', 'x', '201832170032'),
('5ad586ffb12e2', '5ad3039198c25', '5ac6a906961a3', 'x', '201832170032'),
('5ad587028ba9c', '5ad3039198c25', '5ac6a906961a3', 'xdd', '201832170032'),
('5ad5870a9dbc3', '5ad3039198c25', '5ac6a906961a3', 'nhjh', '201832170032'),
('5ad588a82dba3', '5ad3039198c25', '5ac6a906961a3', 'jkjkj', '201839170039'),
('5ad588e809e63', '5ad3039198c25', '5ac6a906961a3', 'sd', '201840170040'),
('5ad589323a78e', '5ad3039198c25', '5ac6a906961a3', 's', '201842170042'),
('5ad589527aa2f', '5ad3039198c25', '5ac6a906961a3', 's', '201842170042'),
('5ad589c25a36f', '5ad3039198c25', '5ac6a906961a3', 's', '201844170044'),
('5ad589cac2e57', '5ad3039198c25', '5ac6a906961a3', 's', '201844170044'),
('5ad589ea18e1c', '5ad3039198c25', '5ac6a906961a3', 's', '201845170045'),
('5ad589f165c6b', '5ad3039198c25', '5ac6a906961a3', 'this is test', '201845170045'),
('5ad589f7267d3', '5ad3039198c25', '5ac6a906961a3', 'this is test2', '201845170045'),
('5ad58a1a86da3', '5ad3039198c25', '5ac6a906961a3', 'this is next com', '201846170046'),
('5ad58b0bd5f68', '5ad3039198c25', '5ac6a906961a3', 'hh', '201850170050'),
('5ad58fa6240db', '5ad114d4eda9b', '5ac6a9325cda8', 'lll', '201810170110'),
('5ad590011e68c', '5ad281be16648', '5ac6a9325cda8', 'j', '201811170111'),
('5ad5939af0e7f', '5ad3039198c25', '5ac6a9325cda8', '@tes yes', '201827170127'),
('5ad595927c0cf', '5ad3039198c25', '5ac6a9325cda8', 'kk', '201835170135'),
('5ad63ccc26324', '5ad63cae46cb7', '5ac6a7853b377', 'Test', '201829171329'),
('5ad66098d8d8b', '5ad00b868396f', '5ac6a7853b377', 'hi', '201801171601'),
('5ad6aedd8fca4', '5ad3039198c25', '5ac6a7853b377', 'h', '201835172135'),
('5ad6b3dc79c2a', '5ad114d4eda9b', '5ac6a7853b377', 'm', '201857172157'),
('5ad6d61eb86f0', '5ad3039198c25', '5ac6a7853b377', 'mm', '201823180023'),
('5ad7bdc20ebf8', '5ad3039198c25', '5ac6a7853b377', 'Comment test', '201850181650'),
('5ad7bdcbd0e02', '5ad3039198c25', '5ac6a7853b377', 'Comment test', '201851181651'),
('5ad812b2dcd6c', '5ad20fec1d564', '5ac6a7853b377', 'd', '201854182254'),
('5ad812b9da0e9', '5ad63cae46cb7', '5ac6a7853b377', 'd', '201854182254'),
('5ad8c816e4c51', '5ad02c889ff5e', '5ac6a7853b377', 's', '201848191148'),
('5ad93992e1858', '5ad8f24ca422c', '5ac6a906961a3', 'h', '201852191952'),
('5ada1c9db6bf2', '5ad8f24ca422c', '5ac6a906961a3', 'Hello Mr. Smith.', '201800201200'),
('5ada7c95d1065', '5ada782e880f0', '5ac6a9723e89d', 'riley, how are you?', '201849201849'),
('5add6b04d0651', '5add6ab7b3db8', '5ac6a906961a3', 'so long name', '201812230012'),
('5addfd3fd1515', '5adde8049e811', '5ac6a906961a3', 'I', '201836231036'),
('5ade40f8150c5', '5ada15319c7a4', '5ac6a7853b377', 'hi', '201825231525'),
('5ade40fe74b48', '5ada15319c7a4', '5ac6a7853b377', 'hi', '201825231525'),
('5ade41a0d45f5', '5addeba4b9cf4', '5ac6a7853b377', 'j', '201828231528'),
('5ade830e04553', '5ade71ad1aaf7', '5ac6a7853b377', 'this is a comment', '201807232007'),
('5adeb6144f9d9', '5ade55b11b520', '5ac6a906961a3', 'where is the video? :-P', '201844232344'),
('5adebf7a9b5a2', '5ad02c860aa15', '5ac6a906961a3', 'hi', '201824240024'),
('5adec016bfe93', '5adec00912856', '5ac6a906961a3', 'nnn', '201827240027'),
('5adec0195b63a', '5adec00912856', '5ac6a906961a3', 'jjj', '201827240027'),
('5adec404edd97', '5adec37e8c6c9', '5ac6a906961a3', 'ji', '201843240043'),
('5adfcdb96309a', '5adfccd194d3f', '5ac6a906961a3', 'this is a conmment', '201838241938'),
('5ae2c415bfc94', '5adfccd194d3f', '5ac6a906961a3', 'l', '201833270133'),
('5ae4100e6ae54', '5adec37e8c6c9', '5ac6a906961a3', 'comment1', '201810280110'),
('5ae411890975f', '5adec37e8c6c9', '5ac6a7853b377', 'This is a comment by faculty', '201816280116');

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_degree`
--

CREATE TABLE IF NOT EXISTS `sconnect_lookup_degree` (
  `degree_code` int(5) NOT NULL AUTO_INCREMENT,
  `degree` varchar(50) NOT NULL,
  PRIMARY KEY (`degree_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sconnect_lookup_degree`
--

INSERT INTO `sconnect_lookup_degree` (`degree_code`, `degree`) VALUES
(1, 'M.S.'),
(2, 'Ph.D'),
(3, 'B.S.'),
(4, 'B.A.');

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_major`
--

CREATE TABLE IF NOT EXISTS `sconnect_lookup_major` (
  `major_code` int(5) NOT NULL AUTO_INCREMENT,
  `major` varchar(50) NOT NULL,
  PRIMARY KEY (`major_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sconnect_lookup_major`
--

INSERT INTO `sconnect_lookup_major` (`major_code`, `major`) VALUES
(1, 'Computer Science'),
(2, 'Electrical Engineering'),
(3, 'Physics'),
(4, 'Biological Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_position`
--

CREATE TABLE IF NOT EXISTS `sconnect_lookup_position` (
  `position_code` int(5) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL,
  PRIMARY KEY (`position_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_privacy`
--

CREATE TABLE IF NOT EXISTS `sconnect_lookup_privacy` (
  `privacy_code` int(5) NOT NULL AUTO_INCREMENT,
  `privacy` varchar(50) NOT NULL,
  PRIMARY KEY (`privacy_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_session`
--

CREATE TABLE IF NOT EXISTS `sconnect_lookup_session` (
  `session` varchar(50) NOT NULL,
  `start_mm` varchar(50) NOT NULL,
  `end_mm` varchar(50) NOT NULL,
  PRIMARY KEY (`session`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_status`
--

CREATE TABLE IF NOT EXISTS `sconnect_lookup_status` (
  `status_code` int(5) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`status_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_lookup_university`
--

CREATE TABLE IF NOT EXISTS `sconnect_lookup_university` (
  `university_domain` varchar(50) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `university_logo_path` varchar(50) NOT NULL,
  `university_time_zone` varchar(50) NOT NULL,
  PRIMARY KEY (`university_domain`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_message`
--

CREATE TABLE IF NOT EXISTS `sconnect_message` (
  `message_id` int(5) NOT NULL AUTO_INCREMENT,
  `userhash_to` varchar(100) NOT NULL,
  `userhash_from` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `sconnect_message`
--

INSERT INTO `sconnect_message` (`message_id`, `userhash_to`, `userhash_from`, `subject`, `message`, `date_time`, `status`) VALUES
(1, '5ac6a9723e89d', '5ac6a94271639', 'Discussion on course project', 'Hey, \n\nHow r u doing? Lets meet up to discuss project work.', '20180403_1145', 'Read'),
(2, '5ac6a9c877627', '5ac6a94271639', 'How r u doing?', 'Hey, What''s up!!\r\nWhat courses you took?\r\n\r\nRegards', '20180407_1752', 'Read'),
(3, '5ac6a94271639', '5ac6a8fa585a2', 'Class Assignment due', 'Helo Students, \r\n\r\nThe assignment posted is due Monday..\r\n\r\nRegards,', '20180407_0330', 'Read'),
(4, '5ac6a94271639', '5ac6a9723e89d', 'Hi There!', 'Helo, \r\n\r\nI took Database systems and ACN.. what about you?\r\nRegards,', '20180408_1945', 'Read'),
(6, '5ac6a99d884ab', '5ac6a94271639', 'Hello!! exams over..', 'Hi, \n\nExams are over. Lets meet up!\n\nRegards', '20180412_1803', 'Unread'),
(21, '5ac6a906961a3', '5ac6a94271639', 's3@utdallas.edu', 's3@utdallas.edu', '20180414_1843', 'Read'),
(22, '5ac6a906961a3', '5ac6a94271639', 'Test Message from s2 to s1', 'Test Message from s2 to s1', '20180414_1853', 'Read'),
(23, '5ac6a906961a3', '5ac6a9325cda8', 'Message Test s2 to s1', 'Message Test s2 to s1. This is message body', '20180414_1900', 'Read'),
(24, '5ac6a9325cda8', '5ac6a906961a3', 'Test from s2 to s1', 'Hello,\n\nTest email.\n\nThanks.', '20180414_1902', 'Read'),
(32, '5ac6a94271639', '5ac6a7853b377', 'test incoming', 'Test!!...', '20180422_0426', 'Read'),
(33, '5ac6a7853b377', '5ac6a94271639', 'Test outgoing ', 'test!!...', '20180422_0427', 'Read'),
(34, '5ac6a9325cda8', '5ac6a906961a3', 'Test message 2', 'April 22, Test from s1 to s2', '20180422_1947', 'Unread'),
(35, '5ac6a94271639', '5ac6a9723e89d', 'Test outgoing', 'Hello s3,\n\nHow you doing?\n\nRegards,\ns6', '20180423_1512', 'Unread'),
(36, '5ac6a9723e89d', '5ac6a94271639', 'Hello', 'test outgoing', '20180423_1513', 'Unread'),
(39, '5ac6a7853b377', '5ac6a906961a3', 'test final', 'Test final...', '20180424_1506', 'Unread'),
(40, '5ac6a906961a3', '5ac6a94271639', 'test server', 'Test!!!', '20180424_1736', 'Read'),
(41, '5ac6a9325cda8', '5ac6a906961a3', 'Demo test', 'Test', '20180424_1942', 'Unread'),
(42, '5ac6a906961a3', '5ac6a961e8ed4', 'Test', 'Test', '20180424_1942', 'Read'),
(43, '5ac6a906961a3', '5ac6a94271639', 'Test ', 'ZF', '20180424_1942', 'Unread'),
(44, '5ac6a9325cda8', '5ac6a906961a3', 'Test on Saturday', 'Test now', '20180428_1613', 'Unread'),
(45, '5ac6a7853b377', '5ac6a906961a3', 'Regarding exams', 'Helo Sir, \n\nI have some doubts related to exams. When will be your office hours.\n\nRegards,', '20180429_1445', 'Unread');

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_privacy_settings`
--

CREATE TABLE IF NOT EXISTS `sconnect_privacy_settings` (
  `userhash` varchar(150) NOT NULL,
  `degree_view` int(11) NOT NULL DEFAULT '0',
  `major_view` int(11) NOT NULL DEFAULT '0',
  `courses_view` int(11) NOT NULL DEFAULT '0',
  `dob_view` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userhash`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sconnect_privacy_settings`
--

INSERT INTO `sconnect_privacy_settings` (`userhash`, `degree_view`, `major_view`, `courses_view`, `dob_view`) VALUES
('5ac6a9723e89d', 1, 1, 1, 1),
('5ac6a906961a3', 1, 0, 0, 0),
('5ac6a7853b377', 1, 1, 1, 2),
('5adfb4c9cbdc8', 0, 0, 0, 0),
('5adfb5f80fe9a', 0, 0, 0, 0),
('5adfb8d12585e', 0, 0, 0, 0),
('5adfcb294718f', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sconnect_user`
--

CREATE TABLE IF NOT EXISTS `sconnect_user` (
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
  `OTP` varchar(4) NOT NULL,
  PRIMARY KEY (`userhash`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sconnect_user`
--

INSERT INTO `sconnect_user` (`userhash`, `email`, `password`, `salt`, `status`, `position`, `fname`, `mname`, `lname`, `profile_image_path`, `document_image_path`, `resume_path`, `dob_mm`, `dob_dd`, `dob_yyyy`, `degree`, `major`, `university_domain`, `OTP`) VALUES
('5ac6a7853b377', 'f1@utdallas.edu', '$2y$10$5MPNfQ.a9MsFDjOk4KAYgewPea6.KfNgm6aoLjKBnIimkv1PSHWVm', '5ac6a7853b383', 'APPROVED', 'faculty', 'Prof. John', '', 'Gomes', 'profile_image/5ac6a7853b377.png', '', 'resume/sample.pdf', 'April', '3', '', 'B.A.', 'Electrical Engineering', 'utdallas', '1042'),
('5ac6a81be9dd1', 'f2@utdallas.edu', '$2y$10$Sf8gTdC4G7QBAF6F2S1hQO6tt1TKFffSYq8k/8TZ/b5q1PxpzVPni', '5ac6a81be9dd5', 'APPROVED', 'faculty', 'Prof. Sam', '', 'Smith', 'profile_image/5ac6a81be9dd1.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '8080'),
('5ac6a8699828b', 'f3@utdallas.edu', '$2y$10$6QXQ.D/vfsbwoyfWrrynQO4yR8p4vqRGERt3A3vuXOjPQh2rX9jUC', '5ac6a8699828e', 'APPROVED', 'faculty', 'Prof. Sophia', '', 'Brown', 'profile_image/5ac6a8699828b.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '7557'),
('5ac6a8fa585a2', 'f4@utdallas.edu', '$2y$10$MrcmVti2tzuUNalcPjoaiO7poFY5LICoQkfi36vvr4SLBfnt.Avie', '5ac6a8fa585b0', 'APPROVED', 'faculty', 'Prof. Emily', '', 'Davis', 'profile_image/5ac6a8fa585a2.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '7561'),
('5ac6a906961a3', 's1@utdallas.edu', '$2y$10$53r7dYthZwAjrjVobdLOhOOK3q9v3a3eCSt1g4affxmSzUmpfxrUu', '5ac6a906961ad', 'APPROVED', 'student', 'Michael', '', 'Smith', 'profile_image/5ac6a906961a3.jpg', '', 'resume/5ac6a906961a3.pdf', 'June', '6', '', 'Ph.D', 'Physics', 'utdallas', '6083'),
('5ac6a92509c7e', 'f5@utdallas.edu', '$2y$10$g1sK/RNLpkfMOKya5KNuv.m5nWDjI2GQGhHeML2kPvsKQ.HOOSXAq', '5ac6a92509c87', 'APPROVED', 'faculty', 'Prof. James', '', 'Shon', 'profile_image/5ac6a92509c7e.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '4958'),
('5ac6a9325cda8', 's2@utdallas.edu', '$2y$10$ZRs/RUa1tHxCfnj.1Evrb.0fHGOhXRBu1.83K75m0nW6QJWr06u.6', '5ac6a9325cdad', 'APPROVED', 'student', 'Justin', '', 'Johnson', 'profile_image/5ac6a9325cda8.jpg', '', '../../user_data/resume/5ac6a9325cda8.pdf', '', '', '', 'M.S.', 'Computer Science', 'utdallas', '9287'),
('5ac6a94271639', 's3@utdallas.edu', '$2y$10$xu8lHhj8V6q12ND5g2B82uXdCz1NM6O4RHnHpiiEO2Y.q8oBKwcRS', '5ac6a9427163d', 'APPROVED', 'student', 'Sophia', '', 'Clark', 'profile_image/5ac6a94271639.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '4078'),
('5ac6a95261df4', 's4@utdallas.edu', '$2y$10$u0mud7uQhRwOMojXVwG.geN11PgIituJoDDsexC4NetKAAP1/lYDe', '5ac6a95261df8', 'APPROVED', 'student', 'Victoria', '', 'Lee', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '9955'),
('5ac6a961e8ed4', 's5@utdallas.edu', '$2y$10$1ugF6YH.xsPASN70YZNHouuW1g7iDRfVoMv619sVFKOPdTDdLxM2e', '5ac6a961e8ed9', 'APPROVED', 'student', 'Savannah', '', 'Hall', 'profile_image/5ac6a8699828b.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '1074'),
('5ac6a9723e89d', 's6@utdallas.edu', '$2y$10$Xo6vjxVrDc4H1EChTbCK9eWY4otRTrH8d8zJvUAkIaQAilDhdnA1W', '5ac6a9723e8a1', 'DELETED', 'student', 'Riley', '', 'Scott', 'profile_image/5ac6a9723e89d.png', '', 'resume/sample.pdf', 'August', '15', '1947', 'B.S.', 'Physics', 'utdallas', '2248'),
('5ac6a98710738', 's7@utdallas.edu', '$2y$10$lQe89s6PpsCfNv1rteJpg.1YdctvsCE5MRJA60T4xUh.8/rDy0d6q', '5ac6a9871073d', 'APPROVED', 'student', 'Morgan', '', 'Hill', 'profile_image/5ac6a98710738.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '9297'),
('5ac6a99d884ab', 's8@utdallas.edu', '$2y$10$3U5506EFdkFrAGbrqYa.S.dev42K.ub0grbtfiX/T83IbCrIGWYE6', '5ac6a99d884b2', 'APPROVED', 'student', 'Bailey', '', 'Phillips', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '9028'),
('5ac6a9c877627', 's9@utdallas.edu', '$2y$10$BTspt3NpJUXYuxaR0WXM/eQ9uWFpm5wqYKYFpgZw3voyYtGPsGG2W', '5ac6a9c87762d', 'APPROVED', 'student', 'Kendall', '', 'Campbell', 'profile_image/sample1.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '8160'),
('5ac6a9dd8ef45', 's10@utdallas.edu', '$2y$10$6mtM14F0vFdvVDHBbGgiReKnPlU6m.Zom0c9S1z3StpHzu32EZGI2', '5ac6a9dd8ef49', 'APPROVED', 'student', 'Eliana', '', 'Parker', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '9013'),
('5ac6a9e330226', 's11@utdallas.edu', '$2y$10$JgaJXZkvNU8e2K8R0bak2O5hu8OGvW0IZ1t6YaosbHpy9R9KksGsi', '5ac6a9e33022a', 'APPROVED', 'student', 'Angela', '', 'Morris', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '5469'),
('5ac6a9f8dff9e', 's12@utdallas.edu', '$2y$10$b/qwK16/Gugwsx9jxyUNWOmfyLkz9LvSNEmX4eEMN3mZSjP021xjq', '5ac6a9f8dffae', 'APPROVED', 'student', 'Nathan', '', 'Reek', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '3185'),
('5ac6a9f9dc101', 's16@utdallas.edu', '$2y$10$CDWUyrmKoas2n1PFDbW1nug4O0Ha9/K0VZM9t2Wd9tiWzIDKSfiWO', '5ac6a9f9dc108', 'APPROVED', 'student', 'Brayden', '', 'Cook', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '4974'),
('5ac6aa093418b', 's17@utdallas.edu', '$2y$10$lKak/kJcScQVq8MdEgchfOasxtXuBoe0LmK9Pq2T3J55kwAPh9uSq', '5ac6aa0934190', 'APPROVED', 'student', 'Jack', '', 'Murphy', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '5032'),
('5ac6aa13553c1', 's13@utdallas.edu', '$2y$10$otxb585qKb.NJaK.YIp6ZuoWeMtRWxPL.N0QaxIuBQcSeNgsx/qp6', '5ac6aa13553c3', 'APPROVED', 'student', 'Alex', '', 'Cox', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '2064'),
('5ac6aa25b676a', 's18@utdallas.edu', '$2y$10$3YfoQojd.iNqVoSQdyCcdu4OvDVnLcf3ywxt5bMYEeXdkBN5G6N02', '5ac6aa25b6770', 'APPROVED', 'student', 'Kayden', '', 'James', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '5992'),
('5ac6aa29e81c3', 's14@utdallas.edu', '$2y$10$Nfg1CgaZSY2EMvojl4LStuRqbOStPW6msYxhA8UuyFnG2q95B.Sde', '5ac6aa29e81d0', 'APPROVED', 'student', 'Santiago', '', 'Brooks', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '8649'),
('5ac6aa3480f84', 's19@utdallas.edu', '$2y$10$iJgZ8.XpMLOgzGmNqbfQgejiBSRkmMi1KiC9ED/yc.OUaSepeCjFe', '5ac6aa3480f88', 'APPROVED', 'student', 'Nicolas', '', 'Ross', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '8901'),
('5ac6aa410d87b', 's15@utdallas.edu', '$2y$10$R2o4XXTwAixz9hssA5dUw.ZPPT6tBk.wnEN0pWqqban7cfFajJM2a', '5ac6aa410d87e', 'APPROVED', 'student', 'Collin', '', 'Rodriguez', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '8532'),
('5ac6aa45c8a6b', 's20@utdallas.edu', '$2y$10$psuv/zWwnaoWUxlJKMhSzeFC/POnSUdez7n6CjQZikUTIOukXXJ3G', '5ac6aa45c8a72', 'APPROVED', 'student', 'Abraham', '', 'Garcia', 'profile_image/5ac6aa45c8a6b.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '3583'),
('5addf3c4df666', 'f6@utdallas.edu', '$2y$10$nF3yDRqJjisTj5cPXzXDHeI.dCQREZrtO28ta2ykXC2zxlRbP4NhG', '5addf3c4df6a4', 'PENDING_DOCUMENT', 'faculty', 'Nirmallya', '', 'Kundu', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '4117'),
('5ade310790ba5', 'f7@utdallas.edu', '$2y$10$7EnSd7IJawChFT3P6tczJenNsqjkERhwH2xkLaz6czzqqyXGaYEVa', '5ade310790be0', 'PENDING_DOCUMENT', 'faculty', 'Prof. Sam', '', 'Gomes', 'profile_image/5ade310790ba5.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'utdallas', '1058'),
('5adfb4c9cbdc8', 's1@uta.edu', '$2y$10$E3ZEHwsl6A92jncnP9wqZu.s.zRhOG.jHvyYcHDE0xqWHu1AhP0C2', '5adfb4c9cbe08', 'APPROVED', 'student', 'Michel', '', 'John', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'uta', '3712'),
('5adfb5f80fe9a', 's2@uta.edu', '$2y$10$kOtzwYQKj1bPDyma0ZhXc.ERklbk6g.SwgFHJ80.ybyLZss3eV2vC', '5adfb5f80fed5', 'APPROVED', 'student', 'Samuel', '', 'Simpson', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'uta', '4004'),
('5adfb8d12585e', 'f1@uta.edu', '$2y$10$yJyXb/mnQU1PTEDS.u6DleNv7MgD7lSD/m5pBAjhsS3S4tZyRyUH6', '5adfb8d12589d', 'APPROVED', 'faculty', 'Prof. Karl', '', 'Andrew', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'uta', '3051'),
('5adfcb294718f', 's30@uta.edu', '$2y$10$N6n4s2OaRyNCcEtTvxQ6ROrhpclWm6cZ6VB6iEqXUN55cJy9kPhRW', '5adfcb29471ce', 'APPROVED', 'student', 'John', '', 'Kole', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'uta', '5832'),
('admin1', 'admin1@sconnect.xyz', '$2y$10$5MPNfQ.a9MsFDjOk4KAYgewPea6.KfNgm6aoLjKBnIimkv1PSHWVm', '5ac6a7853b383', 'APPROVED', 'admin', 'Admin Sam', '', 'Gonzalvez', 'profile_image/sample.jpg', '', 'resume/sample.pdf', '', '', '', '', '', 'sconnect', '1111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
