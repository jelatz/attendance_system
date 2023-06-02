-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 05:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--
-- Error reading structure for table attendance.attendance: #1932 - Table &#039;attendance.attendance&#039; doesn&#039;t exist in engine
-- Error reading data for table attendance.attendance: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `attendance`.`attendance`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `compulsory`
--
-- Error reading structure for table attendance.compulsory: #1932 - Table &#039;attendance.compulsory&#039; doesn&#039;t exist in engine
-- Error reading data for table attendance.compulsory: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `attendance`.`compulsory`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `course`
--
-- Error reading structure for table attendance.course: #1932 - Table &#039;attendance.course&#039; doesn&#039;t exist in engine
-- Error reading data for table attendance.course: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `attendance`.`course`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `department`
--
-- Error reading structure for table attendance.department: #1932 - Table &#039;attendance.department&#039; doesn&#039;t exist in engine
-- Error reading data for table attendance.department: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `attendance`.`department`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `event`
--
-- Error reading structure for table attendance.event: #1932 - Table &#039;attendance.event&#039; doesn&#039;t exist in engine
-- Error reading data for table attendance.event: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `attendance`.`event`&#039; at line 1

-- --------------------------------------------------------

--
-- Stand-in structure for view `events_info`
-- (See below for the actual view)
--
CREATE TABLE `events_info` (
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `report_info`
-- (See below for the actual view)
--
CREATE TABLE `report_info` (
);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--
-- Error reading structure for table attendance.status: #1932 - Table &#039;attendance.status&#039; doesn&#039;t exist in engine
-- Error reading data for table attendance.status: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `attendance`.`status`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `students`
--
-- Error reading structure for table attendance.students: #1932 - Table &#039;attendance.students&#039; doesn&#039;t exist in engine
-- Error reading data for table attendance.students: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `attendance`.`students`&#039; at line 1

-- --------------------------------------------------------

--
-- Stand-in structure for view `students_info`
-- (See below for the actual view)
--
CREATE TABLE `students_info` (
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Error reading structure for table attendance.users: #1932 - Table &#039;attendance.users&#039; doesn&#039;t exist in engine
-- Error reading data for table attendance.users: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `attendance`.`users`&#039; at line 1

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_info`
-- (See below for the actual view)
--
CREATE TABLE `user_info` (
);

-- --------------------------------------------------------

--
-- Structure for view `events_info`
--
DROP TABLE IF EXISTS `events_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `events_info`  AS SELECT `event`.`eventname` AS `eventname`, `event`.`time` AS `time`, `event`.`date` AS `date`, `event`.`venue` AS `venue`, `compulsory`.`compulsory` AS `compulsory`, `status`.`status` AS `status`, `department`.`department` AS `department` FROM (((`event` join `compulsory` on(`compulsory`.`compulsory_id` = `event`.`compulsory_id`)) join `status` on(`status`.`status_id` = `event`.`status_id`)) join `department` on(`department`.`department_id` = `event`.`department_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `report_info`
--
DROP TABLE IF EXISTS `report_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `report_info`  AS SELECT `event`.`eventname` AS `eventname`, `event`.`date` AS `date`, `event`.`time` AS `time`, `event`.`venue` AS `venue`, `department`.`department` AS `department`, `event`.`total_attendance` AS `total_attendance` FROM (`event` join `department` on(`department`.`department_id` = `event`.`department_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `students_info`
--
DROP TABLE IF EXISTS `students_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `students_info`  AS SELECT `students`.`lastname` AS `lastname`, `students`.`middlename` AS `middlename`, `students`.`firstname` AS `firstname`, `course`.`course` AS `course`, `students`.`yearlevel` AS `yearlevel`, `students`.`email` AS `email`, `students`.`mobile` AS `mobile` FROM (`students` join `course` on(`students`.`course_id` = `course`.`course_id`))  ;

-- --------------------------------------------------------

--
-- Structure for view `user_info`
--
DROP TABLE IF EXISTS `user_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_info`  AS SELECT `users`.`lastname` AS `lastname`, `users`.`middlename` AS `middlename`, `users`.`firstname` AS `firstname`, `department`.`department` AS `department`, `users`.`email` AS `email`, `users`.`password` AS `password`, `users`.`mobile` AS `mobile`, `users`.`usertype` AS `usertype`, `users`.`status` AS `status` FROM (`users` join `department` on(`department`.`department_id` = `users`.`department_id`))  ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
