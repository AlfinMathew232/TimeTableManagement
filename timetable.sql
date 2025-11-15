-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 09:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adm_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adm_id`, `name`, `email`, `pass`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `cls_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`cls_id`, `name`) VALUES
(1, 'BCA 1'),
(2, 'BCA 2'),
(3, 'BCA 3'),
(4, 'BBA 1'),
(5, 'BBA 2'),
(6, 'BBA 3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_day`
--

CREATE TABLE `tbl_day` (
  `day_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_day`
--

INSERT INTO `tbl_day` (`day_id`, `name`) VALUES
(1, 'Day 1'),
(2, 'Day 2'),
(3, 'Day 3'),
(4, 'Day 4'),
(5, 'Day 5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam`
--

CREATE TABLE `tbl_exam` (
  `ex_id` int(11) NOT NULL,
  `cls_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_exam`
--

INSERT INTO `tbl_exam` (`ex_id`, `cls_id`, `date`, `time`, `subject`) VALUES
(16, 4, '2024-02-05', '', 'Statistics'),
(15, 4, '2024-02-02', '', 'Business Accounting'),
(14, 4, '2024-02-01', '', 'English'),
(13, 1, '2024-02-05', '01:00', 'Mathematics'),
(12, 1, '2024-02-02', '01:00', 'C++'),
(11, 1, '2024-02-01', '01:00', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hour`
--

CREATE TABLE `tbl_hour` (
  `hr_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hour`
--

INSERT INTO `tbl_hour` (`hr_id`, `name`) VALUES
(1, 'Hour 1'),
(2, 'Hour 2'),
(3, 'Hour 3'),
(4, 'Hour 4'),
(5, 'Hour 5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `msg_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `response` varchar(500) NOT NULL,
  `sts` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`msg_id`, `name`, `role`, `message`, `response`, `sts`) VALUES
(7, '1', 'user', 'Test review', 'fjvdifhvdojb', 1),
(3, '1', 'user', 'Hello 1', 'ssample response', 1),
(6, '1', 'user', 'Hello 2', 'Sample 2', 0),
(5, '1', 'teacher', 'Message from Teacher', '', 1),
(8, '1', 'teacher', 'tfcygvbhngtfrftgyh', '', 0),
(9, '1', 'user', 'hlo', '', 0),
(10, '1', 'teacher', 'hlo2', '', 1),
(12, '1', 'teacher', 'hi', 'khgriygi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `stud_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `class` int(11) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `regno` varchar(30) NOT NULL,
  `sts` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stud_id`, `name`, `email`, `phone`, `class`, `pass`, `batch`, `regno`, `sts`) VALUES
(1, 'sample student', 'student@student.com', '9876543210', 1, '123', '2021-2024', '111111111111', 1),
(21, 'Student from BCA3', 'student@bca3.com', '8383838383', 3, '123', '2020-2023', '121212121212', 0),
(20, 'Student 2', 'student2@gmail.com', '9876543210', 2, '123', '2021-2023', '123456123456', 0),
(22, 'Alfin', 'alfin@123.com', '9876543210', 3, '1234', '2021-2024', '777777777777', 0),
(23, 'sam', 'sam@123.com', '09976543200', 4, '123', '2021-2024', '210021089598', 0),
(24, 'ADON', 'adon@123.com', '1111111111', 1, '123', '2021-2025', '111111111111', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub`
--

CREATE TABLE `tbl_sub` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sub`
--

INSERT INTO `tbl_sub` (`sub_id`, `sub_name`, `t_id`) VALUES
(1, 'English', 1),
(9, 'C++', 9),
(3, 'Statistics', 4),
(4, 'Mathematics', 3),
(5, 'Algorith Analysis', 5),
(6, 'Java', 7),
(8, 'PHP', 8),
(10, 'Human Rights', 10),
(11, 'Business Accounting', 11),
(12, 'Management Accounting', 12),
(13, 'Business Communication', 13),
(14, 'Marketing Management', 13),
(15, 'Business Laws', 14),
(16, 'Corporate Law', 15),
(17, 'Strategic Management', 16),
(18, 'Software Engineering', 17),
(19, 'LINUX', 18),
(20, 'Microprocessor', 19);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `t_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `sts` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`t_id`, `name`, `phone`, `email`, `pass`, `sts`) VALUES
(1, 'Teacher 1', '2147483647', 'teacher@t.com', '123', 0),
(2, 'Teacher 2', '9987998790', 'ameermon@gmail.com', '123', 0),
(3, 'Teacher 3', '6596596596', 'teacher3@tc.com', '123', 0),
(4, 'jithu', '9898989898', 'jithu@123.com', '123', 0),
(5, 'Teacher4', '4444444444', 'teacher@4.com', '123', 0),
(6, 'Teacher5', '5555555555', 'teacher@5.com', '123', 0),
(7, 'Teacher6', '6666666666', 'teacher@6.com', '123', 0),
(8, 'Teacher7', '7777777777', 'teacher@7.com', '123', 0),
(9, 'Teacher8', '8888888888', 'teacher@8.com', '123', 0),
(10, 'Teacher9', '9999999999', 'teacher@9.com', '123', 0),
(11, 'Teacher10', '1000000000', 'teacher@10.com', '123', 0),
(12, 'Teacher11', '1111111111', 'teacher@11.com', '123', 0),
(13, 'Teacher12', '1222222222', 'teacher@12.com', '123', 0),
(14, 'Teacher13', '1333333333', 'teacher@13.com', '123', 0),
(15, 'Teacher14', '1444444444', 'teacher@14.com', '143', 0),
(16, 'Teacher15', '1555555555', 'teacher@15.com', '123', 0),
(17, 'Teacher16', '1666666666', 'teacher@16.com', '123', 0),
(18, 'Teacher17', '1777777777', 'teacher@17.com', '123', 0),
(19, 'Teacher18', '1888888888', 'teacher@18.com', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timetable`
--

CREATE TABLE `tbl_timetable` (
  `tt_id` int(11) NOT NULL,
  `day_id` int(11) NOT NULL,
  `cls_id` varchar(20) NOT NULL,
  `hour1` varchar(20) NOT NULL,
  `hour2` varchar(20) NOT NULL,
  `hour3` varchar(20) NOT NULL,
  `hour4` varchar(20) NOT NULL,
  `hour5` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_timetable`
--

INSERT INTO `tbl_timetable` (`tt_id`, `day_id`, `cls_id`, `hour1`, `hour2`, `hour3`, `hour4`, `hour5`) VALUES
(13, 1, 'BCA 3', 'Microprocessor', 'Human Rights', 'LINUX', 'Algorith Analysis', 'PHP'),
(12, 1, 'BCA 2', 'C++', 'Statistics', 'Java', 'Microprocessor', 'LINUX'),
(11, 1, 'BCA 1', 'English', 'C++', 'Statistics', 'Mathematics', 'Algorith Analysis'),
(14, 1, 'BBA 1', 'Statistics', 'Mathematics', 'Business Accounting', 'Management Accountin', 'English'),
(15, 1, 'BBA 2', 'Corporate Law', 'Marketing Management', 'Strategic Management', 'Business Laws', 'Mathematics'),
(16, 1, 'BBA 3', 'Human Rights', 'English', 'Software Engineering', 'Strategic Management', 'Corporate Law'),
(17, 2, 'BCA 1', 'C++', 'Statistics', 'Mathematics', 'Algorith Analysis', 'English'),
(18, 2, 'BCA 2', 'Statistics', 'Java', 'Microprocessor', 'LINUX', 'C++'),
(19, 2, 'BCA 3', 'Human Rights', 'LINUX', 'Algorith Analysis', 'PHP', 'Microprocessor'),
(20, 2, 'BBA 1', 'Mathematics', 'Business Accounting', 'Management Accountin', 'English', 'Statistics'),
(21, 2, 'BBA 2', 'Marketing Management', 'Strategic Management', 'Business Laws', 'Mathematics', 'Corporate Law'),
(22, 2, 'BBA 3', 'English', 'Software Engineering', 'Strategic Management', 'Corporate Law', 'Human Rights'),
(23, 3, 'BCA 1', 'Statistics', 'Mathematics', 'Algorith Analysis', 'English', 'C++'),
(24, 3, 'BCA 2', 'Java', 'Microprocessor', 'LINUX', 'C++', 'Statistics'),
(25, 3, 'BCA 3', 'LINUX', 'Algorith Analysis', 'PHP', 'Microprocessor', 'Human Rights'),
(26, 3, 'BBA 1', 'Business Accounting', 'Management Accountin', 'English', 'Statistics', 'Mathematics'),
(27, 3, 'BBA 2', 'Strategic Management', 'Business Laws', 'Mathematics', 'Corporate Law', 'Marketing Management'),
(28, 3, 'BBA 3', 'Software Engineering', 'Strategic Management', 'Corporate Law', 'Human Rights', 'English'),
(29, 4, 'BCA 1', 'Mathematics', 'Algorith Analysis', 'English', 'C++', 'Statistics'),
(30, 4, 'BCA 2', 'Microprocessor', 'LINUX', 'C++', 'Statistics', 'Java'),
(31, 4, 'BCA 3', 'Algorith Analysis', 'PHP', 'Microprocessor', 'Human Rights', 'LINUX'),
(32, 4, 'BBA 2', 'Business Laws', 'Mathematics', 'Corporate Law', 'Marketing Management', 'Strategic Management'),
(33, 4, 'BBA 3', 'Strategic Management', 'Corporate Law', 'Human Rights', 'English', 'Software Engineering'),
(34, 4, 'BBA 1', 'Management Accountin', 'English', 'Statistics', 'Mathematics', 'Business Accounting'),
(35, 5, 'BCA 1', 'English', 'C++', 'Statistics', 'Mathematics', 'Algorith Analysis'),
(36, 5, 'BCA 2', 'C++', 'Statistics', 'Java', 'Microprocessor', 'LINUX'),
(37, 5, 'BCA 3', 'Microprocessor', 'Human Rights', 'LINUX', 'Algorith Analysis', 'PHP'),
(38, 5, 'BBA 1', 'Statistics', 'Mathematics', 'Business Accounting', 'Management Accountin', 'English'),
(39, 5, 'BBA 2', 'Corporate Law', 'Marketing Management', 'Strategic Management', 'Business Laws', 'Mathematics'),
(40, 5, 'BBA 3', 'Human Rights', 'English', 'Software Engineering', 'Strategic Management', 'Corporate Law');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`cls_id`);

--
-- Indexes for table `tbl_day`
--
ALTER TABLE `tbl_day`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `tbl_hour`
--
ALTER TABLE `tbl_hour`
  ADD PRIMARY KEY (`hr_id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `tbl_sub`
--
ALTER TABLE `tbl_sub`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tbl_timetable`
--
ALTER TABLE `tbl_timetable`
  ADD PRIMARY KEY (`tt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `cls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_day`
--
ALTER TABLE `tbl_day`
  MODIFY `day_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_exam`
--
ALTER TABLE `tbl_exam`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_hour`
--
ALTER TABLE `tbl_hour`
  MODIFY `hr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_sub`
--
ALTER TABLE `tbl_sub`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_timetable`
--
ALTER TABLE `tbl_timetable`
  MODIFY `tt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
