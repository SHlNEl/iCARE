-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2025 at 10:27 AM
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
-- Database: `icare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` varchar(10) NOT NULL,
  `AdminName` varchar(200) DEFAULT NULL,
  `AdminEmail` varchar(200) DEFAULT NULL,
  `Role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Faculty_FacultyID` varchar(10) NOT NULL,
  `Date` date DEFAULT NULL,
  `TimeIn` date DEFAULT NULL,
  `TimeOut` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FacultyID` varchar(10) NOT NULL,
  `FacultyName` varchar(200) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `FacultyEmail` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `CourseCode` varchar(50) DEFAULT NULL,
  `Modules` varchar(200) DEFAULT NULL,
  `Type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scheduling`
--

CREATE TABLE `scheduling` (
  `Faculty_FacultyID` varchar(10) NOT NULL,
  `SchoolYear` int(11) DEFAULT NULL,
  `Term` int(11) DEFAULT NULL,
  `TotalHours` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ServiceID` varchar(10) NOT NULL,
  `Student_StudentNumber` int(11) NOT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `FacultyName` varchar(200) DEFAULT NULL,
  `ServiceType` enum('Faculty Consultation','Grade Consultation') DEFAULT NULL,
  `CourseCode` varchar(50) DEFAULT NULL,
  `Timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentNumber` int(11) NOT NULL,
  `StudentName` varchar(200) DEFAULT NULL,
  `StudentEmail` varchar(200) DEFAULT NULL,
  `FEUADTCampus` varchar(200) DEFAULT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `YearLevel` int(11) DEFAULT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentNumber`, `StudentName`, `StudentEmail`, `FEUADTCampus`, `Course`, `YearLevel`, `Password`) VALUES
(202211570, '[value-2]', '[value-3]', '[value-4]', '[value-5]', 0, 'secret');

-- --------------------------------------------------------

--
-- Table structure for table `studentassistantslogs`
--

CREATE TABLE `studentassistantslogs` (
  `StudentAssistantName` varchar(200) DEFAULT NULL,
  `Schedule` date DEFAULT NULL,
  `TimeIn` time DEFAULT NULL,
  `TimeOut` time DEFAULT NULL,
  `Type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TransactionID` varchar(10) NOT NULL,
  `Faculty_FacultyID` varchar(10) NOT NULL,
  `Date` date DEFAULT NULL,
  `TransactonType` enum('Consultation','Tutorial') DEFAULT NULL,
  `TimeStarted` time DEFAULT NULL,
  `TimeFinished` time DEFAULT NULL,
  `Remarks` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `TutorialID` varchar(10) NOT NULL,
  `Student_StudentNumber` int(11) NOT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `TutorName` varchar(200) DEFAULT NULL,
  `Schedule` datetime DEFAULT NULL,
  `CourseCode` varchar(50) DEFAULT NULL,
  `ModuleTopic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD UNIQUE KEY `Attendance__IDX` (`Faculty_FacultyID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FacultyID`);

--
-- Indexes for table `scheduling`
--
ALTER TABLE `scheduling`
  ADD KEY `Scheduling_Faculty_FK` (`Faculty_FacultyID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ServiceID`),
  ADD KEY `Service_Student_FK` (`Student_StudentNumber`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentNumber`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TransactionID`),
  ADD KEY `Transaction_Faculty_FK` (`Faculty_FacultyID`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`TutorialID`),
  ADD KEY `Tutorial_Student_FK` (`Student_StudentNumber`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `Attendance_Faculty_FK` FOREIGN KEY (`Faculty_FacultyID`) REFERENCES `faculty` (`FacultyID`);

--
-- Constraints for table `scheduling`
--
ALTER TABLE `scheduling`
  ADD CONSTRAINT `Scheduling_Faculty_FK` FOREIGN KEY (`Faculty_FacultyID`) REFERENCES `faculty` (`FacultyID`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `Service_Student_FK` FOREIGN KEY (`Student_StudentNumber`) REFERENCES `student` (`StudentNumber`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `Transaction_Faculty_FK` FOREIGN KEY (`Faculty_FacultyID`) REFERENCES `faculty` (`FacultyID`);

--
-- Constraints for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD CONSTRAINT `Tutorial_Student_FK` FOREIGN KEY (`Student_StudentNumber`) REFERENCES `student` (`StudentNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
