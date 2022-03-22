-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 03:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gibjohn_tutorials`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursecontent`
--

CREATE TABLE `coursecontent` (
  `CourseSectionID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `CourseSectionName` varchar(255) NOT NULL,
  `CourseContentLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursecontent`
--

INSERT INTO `coursecontent` (`CourseSectionID`, `CourseID`, `CourseSectionName`, `CourseContentLink`) VALUES
(1, 31, 'Biology 1.1', 'www.templink.com\r\n'),
(2, 31, 'Biology 1.2', 'www.templink.com\r\n'),
(3, 31, 'Biology 1.3', 'www.templink.com'),
(4, 32, 'Biology 2.1', 'www.templink.com\r\n'),
(5, 32, 'Biology 2.2\r\n', 'www.templink.com\r\n'),
(6, 32, 'Biology 2.3', 'www.templink.com\r\n'),
(7, 33, 'Biology 3.1', 'www.templink.com\r\n'),
(8, 33, 'Biology 3.2', 'www.templink.com\r\n'),
(9, 33, 'Biology 3.3', 'www.templink.com\r\n'),
(10, 34, 'Chemistry 1.1', 'www.templink.com'),
(11, 34, 'Chemistry 1.2', 'www.templink.com'),
(12, 34, 'Chemistry 1.3', 'www.templink.com'),
(13, 35, 'Chemistry 2.1', 'www.templink.com'),
(14, 35, 'Chemistry 2.2', 'www.templink.com'),
(15, 35, 'Chemistry 2.3', 'www.templink.com'),
(16, 36, 'Chemistry 3.1', 'www.templink.com'),
(17, 36, 'Chemistry 3.2', 'www.templink.com'),
(18, 36, 'Chemistry 3.3', 'www.templink.com'),
(19, 37, 'Physics 1.1', 'www.templink.com'),
(20, 37, 'Physics 1.2', 'www.templink.com'),
(21, 37, 'Physics 1.3', 'www.templink.com'),
(22, 38, 'Physics 2.1', 'www.templink.com'),
(23, 38, 'Physics 2.2', 'www.templink.com'),
(24, 38, 'Physics 2.3', 'www.templink.com'),
(25, 39, 'Physics 3.1', 'www.templink.com'),
(26, 39, 'Physics 3.2', 'www.templink.com'),
(27, 39, 'Physics 3.3', 'www.templink.com'),
(28, 40, 'Computer Science 1.1', 'www.templink.com'),
(29, 40, 'Computer Science 1.2', 'www.templink.com'),
(30, 40, 'Computer Science 1.3', 'www.templink.com'),
(31, 41, 'Computer Science 2.1', 'www.templink.com'),
(32, 41, 'Computer Science 2.2', 'www.templink.com'),
(33, 41, 'Computer Science 2.3', 'www.templink.com'),
(34, 42, 'Computer Science 3.1', 'www.templink.com'),
(35, 42, 'Computer Science 3.2', 'www.templink.com'),
(36, 42, 'Computer Science 3.3', 'www.templink.com'),
(37, 43, 'English 1.1', 'www.templink.com'),
(38, 43, 'English 1.2', 'www.templink.com'),
(39, 43, 'English 1.3', 'www.templink.com'),
(40, 44, 'English 2.1', 'www.templink.com'),
(41, 44, 'English 2.2', 'www.templink.com'),
(42, 44, 'English 2.3', 'www.templink.com'),
(43, 45, 'English 3.1', 'www.templink.com'),
(44, 45, 'English 3.2', 'www.templink.com'),
(45, 45, 'English 3.3', 'www.templink.com'),
(46, 46, 'English 4.1', 'www.templink.com'),
(47, 46, 'English 4.2', 'www.templink.com'),
(48, 46, 'English 4.3', 'www.templink.com'),
(49, 47, 'English 5.1', 'www.templink.com'),
(50, 47, 'English 5.2', 'www.templink.com'),
(51, 47, 'English 5.3', 'www.templink.com'),
(52, 26, 'Maths 1.1', 'www.templink.com'),
(53, 26, 'Maths 1.2', 'www.templink.com'),
(54, 26, 'Maths 1.3', 'www.templink.com'),
(55, 27, 'Maths 2.1', 'www.templink.com'),
(56, 27, 'Maths 2.2', 'www.templink.com'),
(57, 27, 'Maths 2.3', 'www.templink.com'),
(58, 28, 'Maths 3.1', 'www.templink.com'),
(59, 28, 'Maths 3.2', 'www.templink.com'),
(60, 28, 'Maths 3.3', 'www.templink.com'),
(61, 29, 'Maths 4.1', 'www.templink.com'),
(62, 29, 'Maths 4.2', 'www.templink.com'),
(63, 29, 'Maths 4.3', 'www.templink.com'),
(64, 30, 'Maths 5.1', 'www.templink.com'),
(65, 30, 'Maths 5.2', 'www.templink.com'),
(66, 30, 'Maths 5.3', 'www.templink.com');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseID`, `CourseName`) VALUES
(26, 'Maths 1'),
(27, 'Maths 2\r\n'),
(28, 'Maths 3'),
(29, 'Maths 4'),
(30, 'Maths 5\r\n'),
(31, 'Biology  1'),
(32, 'Biology 2'),
(33, 'Biology 3'),
(34, 'Chemistry 1'),
(35, 'Chemistry 2'),
(36, 'Chemistry 3'),
(37, 'Physics 1'),
(38, 'Physics 2'),
(39, 'Physics 3'),
(40, 'Computer Science 1'),
(41, 'Computer Science 2'),
(42, 'Computer Science 3'),
(43, 'English 1'),
(44, 'English 2'),
(45, 'English 3'),
(46, 'English 4'),
(47, 'English 5');

-- --------------------------------------------------------

--
-- Table structure for table `staffusers`
--

CREATE TABLE `staffusers` (
  `StaffID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `Gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffusers`
--

INSERT INTO `staffusers` (`StaffID`, `firstName`, `lastName`, `email`, `Password`, `dateOfBirth`, `Gender`) VALUES
(2, 'Ben', 'Moulton', 'bm111123@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(3, 'Ben', 'Moulton', 'bm111124@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `studentcourses`
--

CREATE TABLE `studentcourses` (
  `StudentID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `StaffID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studentusers`
--

CREATE TABLE `studentusers` (
  `StudentID` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentusers`
--

INSERT INTO `studentusers` (`StudentID`, `firstName`, `lastName`, `email`, `Password`, `dateOfBirth`, `gender`) VALUES
(1, 'Ben', 'Moulton', 'bm327263@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(4, 'Ben', 'Moulton', 'bm111111@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(5, 'Ben', 'Moulton', 'bm111112@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(6, 'Ben', 'Moulton', 'bm111113@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(7, 'Ben', 'Moulton', 'bm111114@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(8, 'Ben', 'Moulton', 'bm111115@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(9, 'Ben', 'Moulton', 'bm111116@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(10, 'Ben', 'Moulton', 'bm111117@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(11, 'Ben', 'Moulton', 'bm111118@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(12, 'Ben', 'Moulton', 'bm111119@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(13, 'Ben', 'Moulton', 'bm111120@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(14, 'Ben', 'Moulton', 'bm111121@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male'),
(15, 'Ben', 'Moulton', 'bm111122@truro-penwith.ac.uk', 'cookies', '2004-07-19', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursecontent`
--
ALTER TABLE `coursecontent`
  ADD PRIMARY KEY (`CourseSectionID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `staffusers`
--
ALTER TABLE `staffusers`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `studentcourses`
--
ALTER TABLE `studentcourses`
  ADD PRIMARY KEY (`StudentID`),
  ADD KEY `CourseID` (`CourseID`),
  ADD KEY `studentcourses_ibfk_3` (`StaffID`);

--
-- Indexes for table `studentusers`
--
ALTER TABLE `studentusers`
  ADD PRIMARY KEY (`StudentID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursecontent`
--
ALTER TABLE `coursecontent`
  MODIFY `CourseSectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `staffusers`
--
ALTER TABLE `staffusers`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studentusers`
--
ALTER TABLE `studentusers`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentcourses`
--
ALTER TABLE `studentcourses`
  ADD CONSTRAINT `studentcourses_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`),
  ADD CONSTRAINT `studentcourses_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `studentusers` (`StudentID`),
  ADD CONSTRAINT `studentcourses_ibfk_3` FOREIGN KEY (`StaffID`) REFERENCES `staffusers` (`StaffID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
