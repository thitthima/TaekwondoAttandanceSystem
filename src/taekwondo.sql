-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 03:44 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taekwondo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `IC` varchar(20) NOT NULL,
  `phoneNo` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `password`, `name`, `IC`, `phoneNo`, `email`, `gender`) VALUES
('A001', '001', 'Admin', '980101095078', '194473097', 'admin@gmail.com', 'Female'),
('A002', '002', 'Admin2', '991016095092', '194473097', 'admin2@gmail.com', 'Female'),
('A003', '003', 'Admin 3', '962711095051', '194473097', 'admin3@gmail.com', 'Male'),
('A004', '004', 'Admin 4', '970509125321', '175373499', 'admin4@gmail.com', 'Male'),
('A005', '005', 'Admin 5', '951202075421', '174865994', 'admin5@gmail.com', 'Female'),
('A006', '006', 'Admin 6', '981018095032', '178958831', 'admin8@gmail.com', 'Female'),
('A007', '007', 'Admin 7', '870205085032', '194473097', 'admin8@gmail.com', 'Female'),
('A008', '008', 'Admin 8', '980105045251', '194473097', 'admin8@gmail.com', 'Female'),
('A009', '009', 'Admin 9', '991016095092', '194473097', 'admin9@gmail.com', 'Female'),
('A010', '010', 'Admin 10', '951202075421', '175373499', 'admin10@gmail.com', 'Female'),
('A011', '011', 'Admin 11', '981212055268', '194473097', 'admin11@gmail.com', 'Male'),
('jj', 'yee00', 'sin yee', '000922030768', '0167409538', 'yee@gmail.com', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attID` int(11) NOT NULL,
  `date` date NOT NULL,
  `studentID` varchar(20) NOT NULL,
  `adminID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attID`, `date`, `studentID`, `adminID`) VALUES
(28, '2019-12-12', 'S001', 'A001'),
(29, '2019-12-12', 'S001', 'A001'),
(30, '2019-12-12', 'S002', 'A001'),
(31, '2019-12-12', 'S003', 'A005'),
(32, '2019-12-11', 'S004', 'A001'),
(33, '2019-12-12', 'S002', 'A001'),
(34, '2019-12-02', 'S001', 'A006'),
(35, '2019-12-03', 'S002', 'A006'),
(36, '2019-12-04', 'S003', 'A006'),
(37, '2019-12-03', 'S003', 'A002'),
(38, '2019-12-16', 'S003', 'A001'),
(39, '2019-12-17', 'S002', 'A001'),
(40, '2019-12-01', 'S001', 'A001'),
(41, '2019-12-18', 'S001', 'jj');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `feeID` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `outstanding` int(11) NOT NULL,
  `studentID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`feeID`, `paid`, `date`, `outstanding`, `studentID`) VALUES
(4, 31, '2019-12-18 15:54:03', 4, 'S001'),
(5, 22, '2019-12-15 19:16:53', 6, 'S002'),
(6, 33, '2019-12-16 06:33:27', -5, 'S003'),
(7, 5, '2019-12-18 10:29:20', 2, 'S004');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `matricNo` varchar(10) NOT NULL,
  `phoneNo` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `faculty` varchar(10) NOT NULL,
  `program` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `password`, `name`, `matricNo`, `phoneNo`, `email`, `gender`, `faculty`, `program`) VALUES
('S001', '001', 'ANG XUE TING', 'B031710171', '0187835814', 'ang@gmail.com', 'Female', 'FTMK', 'BITC'),
('S002', '002', 'ARVINDREN A/L SAKTHIVEL', 'B031710046', '0186665945', 'arvin@gmail.com', 'Male', 'FTMK', 'BITC'),
('S003', '003', 'FATIN LIYANA NASRIN BINTI ROZWARDI', 'B031820046', '0173230535', 'fatin_365@gmail.com', 'Female', 'FTMK', 'BITD'),
('S004', '004', 'NOOR ASIAH BT MAMAT', 'B031710079', '0123004722', 'noorAsiah@gmail.com', 'Female', 'FTMK', 'BITD'),
('S006', '006', 'NURUL AIN NABILAH BINTI AMRAN', 'B031710314', '01111287981', 'ain_77@gmail.com', 'Female', 'FTMK', 'BITE'),
('S007', '007', 'TOH QI QI', 'B031810095', '0122235640', 'qiqi@gmail.com', 'Female', 'FTMK', 'BITE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attID`),
  ADD KEY `adminID` (`adminID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`feeID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `feeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `admin` (`adminID`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
