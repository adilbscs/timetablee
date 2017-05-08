-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 02:02 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `Employ_id` bigint(20) NOT NULL,
  `Employ_name` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Last_Update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Employ_id`, `Employ_name`, `Password`, `Last_Update`) VALUES
(1, 1234, 'adil', '123456789', '2017-04-04'),
(2, 1234, 'adil', '123456789', '2017-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` bigint(20) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_Title` varchar(50) NOT NULL,
  `Credit_hours` int(11) NOT NULL,
  `semester` bigint(20) NOT NULL,
  `Teacher_ID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `course_code`, `course_Title`, `Credit_hours`, `semester`, `Teacher_ID`) VALUES
(1, '0385', 'DBMS', 4, 4, 11),
(2, '0312', 'vpl', 3, 4, 8),
(3, '15', 'APF', 3, 4, 1),
(4, '1451', 'fdfd', 4, 4, 1),
(5, '4545', 'dwdlnwd', 4, 4, 1),
(6, 'dwd', 'dmkw', 4, 4, 1),
(7, 'dwmd', 'dwdw', 4, 4, 1),
(8, 'dwdw', 'dwd', 4, 4, 1),
(9, 'ITP', 'Intro To Programming', 3, 1, 1),
(10, 'ITC', 'Intro To Computing', 3, 1, 2),
(11, 'MT100', 'Basic Math', 3, 1, 3),
(12, 'SS104', 'Islamiat', 3, 1, 4),
(13, 'SS110', 'Pak Studies', 3, 1, 5),
(14, 'SS104', 'English 1', 3, 1, 6),
(15, 'ITC', 'Calclus 1', 3, 1, 7),
(16, 'MT100', 'Object Oriented', 3, 1, 8),
(17, 'SS104', 'Accounting', 3, 1, 9),
(18, 'SS110', 'English ii', 3, 1, 5),
(19, 'SS104', 'Electronic', 3, 1, 10),
(20, 'ITC', 'Digital Logic Design', 3, 1, 10),
(21, 'MT100', 'Data Base', 3, 1, 11),
(22, 'SS104', 'Visual Programming', 3, 1, 8),
(23, 'SS110', 'Web Programming', 3, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `course_allocation`
--

CREATE TABLE `course_allocation` (
  `rs_id` bigint(20) NOT NULL,
  `std_reg` bigint(20) NOT NULL,
  `crs_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_allocation`
--

INSERT INTO `course_allocation` (`rs_id`, `std_reg`, `crs_id`) VALUES
(1, 1008, 1),
(2, 1008, 2),
(3, 1008, 3),
(4, 1008, 4),
(5, 1008, 5),
(6, 1008, 6),
(11, 1535, 15),
(12, 1535, 16),
(13, 1535, 17),
(14, 1535, 18),
(15, 1535, 19),
(29, 1111, 19),
(30, 1111, 18),
(31, 1111, 17);

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `idDays` bigint(20) NOT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`idDays`, `Name`) VALUES
(1, 'Monday'),
(2, 'Tueaday'),
(3, 'Wenesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday'),
(7, 'Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `departrment`
--

CREATE TABLE `departrment` (
  `dept_id` bigint(20) NOT NULL,
  `dep_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departrment`
--

INSERT INTO `departrment` (`dept_id`, `dep_name`) VALUES
(1, 'CS'),
(2, 'CS'),
(3, 'CS'),
(4, 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` bigint(20) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `std_session` varchar(50) NOT NULL,
  `std_dep` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `std_session`, `std_dep`) VALUES
(1008, 'Adil', 'Summer', 1),
(1009, 'Haris', 'Summer', 1),
(1111, 'test', 'Summer', 1),
(1535, 'Fahran', 'Summer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Teacher_id` bigint(20) NOT NULL,
  `teacher_employ_id` bigint(20) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `dept_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Teacher_id`, `teacher_employ_id`, `teacher_name`, `dept_id`) VALUES
(1, 100, 'Naveen ', 1),
(2, 101, 'Dr Yousf', 1),
(3, 102, 'Ab Basit', 1),
(4, 103, 'Qari Usman', 1),
(5, 104, 'Khursheed', 1),
(6, 105, 'Kholla', 1),
(7, 106, 'Idrees', 1),
(8, 107, 'Asad sir', 1),
(9, 108, 'Furqan', 1),
(10, 109, 'Qamran Qureshi', 1),
(11, 110, 'Madam Sidra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetb_id` bigint(20) NOT NULL,
  `crs_id` bigint(20) NOT NULL,
  `day_id` bigint(20) NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `slot` varchar(50) NOT NULL,
  `last_update` date DEFAULT NULL,
  `idTiming` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetb_id`, `crs_id`, `day_id`, `time_from`, `time_to`, `slot`, `last_update`, `idTiming`) VALUES
(1, 9, 1, '08:30:00', '10:00:00', 'LH2', '0000-00-00', 1),
(2, 9, 3, '08:30:00', '10:00:00', 'LH3', '0000-00-00', 1),
(3, 14, 1, '10:00:00', '11:40:00', 'LH4', '0000-00-00', 2),
(4, 14, 3, '10:00:00', '11:40:00', 'LH5', '0000-00-00', 2),
(5, 15, 1, '01:30:00', '03:00:00', 'LH1', '0000-00-00', 3),
(6, 15, 4, '08:30:00', '10:00:00', 'LH2', '0000-00-00', 4),
(7, 11, 1, '11:40:00', '01:00:00', 'LH2', '0000-00-00', 5),
(8, 11, 2, '10:05:00', '11:40:00', 'LH3', '0000-00-00', 6),
(9, 16, 1, '08:30:00', '10:00:00', 'LH4', '0000-00-00', 7),
(10, 16, 3, '08:30:00', '10:00:00', 'LH3', '0000-00-00', 4),
(11, 18, 1, '11:40:00', '12:55:00', 'LH4', '0000-00-00', 1),
(12, 18, 5, '11:40:00', '12:55:00', 'LH4', '0000-00-00', 2),
(13, 21, 1, '10:05:00', '11:40:00', 'LH6', '0000-00-00', 4),
(14, 21, 4, '11:40:00', '12:55:00', 'LH8', '0000-00-00', 4),
(15, 20, 1, '11:40:00', '12:55:00', 'LH5', '0000-00-00', 4),
(16, 20, 3, '11:40:00', '12:55:00', 'LH1', '0000-00-00', 5),
(17, 1, 3, '11:40:00', '12:55:00', 'LH1', NULL, 1),
(18, 2, 1, '08:30:00', '10:30:00', 'Lh5', NULL, 2),
(19, 19, 6, '08:30:00', '10:30:00', 'Lh4`', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `timing`
--

CREATE TABLE `timing` (
  `idTiming` bigint(20) NOT NULL,
  `StartTime` time NOT NULL,
  `EndTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timing`
--

INSERT INTO `timing` (`idTiming`, `StartTime`, `EndTime`) VALUES
(0, '00:00:00', '00:00:00'),
(1, '08:30:00', '10:05:00'),
(2, '10:05:00', '11:40:00'),
(3, '11:40:00', '01:10:00'),
(4, '01:10:00', '01:30:00'),
(5, '01:30:00', '03:00:00'),
(6, '03:00:00', '04:30:00'),
(7, '04:30:00', '06:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `fk_teacher_id_idx` (`Teacher_ID`);

--
-- Indexes for table `course_allocation`
--
ALTER TABLE `course_allocation`
  ADD PRIMARY KEY (`rs_id`),
  ADD KEY `studentReg_idx` (`std_reg`),
  ADD KEY `courdeId_idx` (`crs_id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`idDays`);

--
-- Indexes for table `departrment`
--
ALTER TABLE `departrment`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_id`),
  ADD KEY `student_department_idx` (`std_dep`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Teacher_id`),
  ADD KEY `departmen_id_idx` (`dept_id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetb_id`),
  ADD KEY `crs_id_idx` (`crs_id`),
  ADD KEY `day_id_idx` (`day_id`),
  ADD KEY `id_timiing_idx` (`idTiming`);

--
-- Indexes for table `timing`
--
ALTER TABLE `timing`
  ADD PRIMARY KEY (`idTiming`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `course_allocation`
--
ALTER TABLE `course_allocation`
  MODIFY `rs_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `idDays` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `departrment`
--
ALTER TABLE `departrment`
  MODIFY `dept_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1536;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Teacher_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetb_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `timing`
--
ALTER TABLE `timing`
  MODIFY `idTiming` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `fk_tch_id` FOREIGN KEY (`Teacher_ID`) REFERENCES `teacher` (`Teacher_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_allocation`
--
ALTER TABLE `course_allocation`
  ADD CONSTRAINT `courdeId` FOREIGN KEY (`crs_id`) REFERENCES `courses` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `studentReg` FOREIGN KEY (`std_reg`) REFERENCES `student` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_department` FOREIGN KEY (`std_dep`) REFERENCES `departrment` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `departmen_id` FOREIGN KEY (`dept_id`) REFERENCES `departrment` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `crs_id` FOREIGN KEY (`crs_id`) REFERENCES `courses` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `day_id` FOREIGN KEY (`day_id`) REFERENCES `days` (`idDays`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_timiing` FOREIGN KEY (`idTiming`) REFERENCES `timing` (`idTiming`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
