-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 01:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `student_id` varchar(20) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `course` varchar(10) NOT NULL,
  `stream` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `foccupation` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `moccupation` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pmobile` varchar(15) NOT NULL,
  `pemail` varchar(100) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `bloodgroup` varchar(4) NOT NULL,
  `simage` varchar(255) NOT NULL,
  `pdisability` varchar(100) NOT NULL,
  `bnx` varchar(100) NOT NULL,
  `scnx` varchar(100) NOT NULL,
  `miex` int(5) NOT NULL,
  `mimx` int(5) NOT NULL,
  `mibx` int(5) NOT NULL,
  `micompx` int(5) NOT NULL,
  `yopx` int(10) NOT NULL,
  `tpx` decimal(10,0) NOT NULL,
  `pygx` decimal(10,0) NOT NULL,
  `mipx` int(5) NOT NULL,
  `micx` int(5) NOT NULL,
  `miscx` int(5) NOT NULL,
  `mislx` int(5) NOT NULL,
  `bnxii` varchar(100) NOT NULL,
  `ssnxii` varchar(100) NOT NULL,
  `miexii` int(5) NOT NULL,
  `mimxii` int(5) NOT NULL,
  `mislxii` int(5) NOT NULL,
  `micxii` int(5) NOT NULL,
  `yopxii` int(10) NOT NULL,
  `tpxii` decimal(10,0) NOT NULL,
  `pygxii` decimal(10,0) NOT NULL,
  `mipxii` int(5) NOT NULL,
  `michemxii` int(5) NOT NULL,
  `ecaxii` varchar(100) NOT NULL,
  `hobbies` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`student_id`, `sname`, `course`, `stream`, `fname`, `foccupation`, `mname`, `moccupation`, `gender`, `address`, `mobile`, `email`, `pmobile`, `pemail`, `nationality`, `bloodgroup`, `simage`, `pdisability`, `bnx`, `scnx`, `miex`, `mimx`, `mibx`, `micompx`, `yopx`, `tpx`, `pygx`, `mipx`, `micx`, `miscx`, `mislx`, `bnxii`, `ssnxii`, `miexii`, `mimxii`, `mislxii`, `micxii`, `yopxii`, `tpxii`, `pygxii`, `mipxii`, `michemxii`, `ecaxii`, `hobbies`) VALUES
('S111', 'ria', 'Mtech', 'Mechanical', 'ROY', 'Private Employee', 'SITA', 'Private Employee', 'other', 'kolkata', '6290139949', 'soubhu28@gmai', '6290139948', 'soubhu28@', 'Pakistani', 'A-', 'studentpic/S111.jpeg', 'y', 'icse', 'jds', 198, 194, 195, 197, 2016, '200', '196', 180, 190, 198, 199, 'isc', 'jds', 189, 196, 199, 200, 2020, '200', '190', 190, 190, 'no', 'dancing'),
('s112', 'Ria Sen', 'Btech', 'Comuter science', 'Ram Sen', 'Government Employee', 'Sita Sen', 'Government Employee', 'female', 'A-10/193,Kalyani Nadia', '6290139946', 'soubhu28@gmail.com', '6290139946', 'soubhu28@gmail.com', 'Indian', 'A+', 'studentpic/s112.jpeg', 'no', 'ICSE', 'JDS', 98, 94, 95, 97, 2018, '100', '96', 80, 90, 98, 99, 'ISC', 'JDS', 89, 96, 99, 100, 2020, '100', '90', 90, 90, 'Dance', 'Reading'),
('S150', '', 'Btech', 'Mechanical', '', 'Private Employee', '', 'Bussiness', 'other', '', '', '', '', '', '', 'B+', 'studentpic/S150.jpeg', '', '', '', 0, 0, 0, 0, 0, '0', '0', 0, 0, 0, 0, '', '', 0, 0, 0, 0, 0, '0', '0', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `enquirytable`
--

CREATE TABLE `enquirytable` (
  `name` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquirytable`
--

INSERT INTO `enquirytable` (`name`, `mobile`, `email`, `subject`, `message`) VALUES
('Soubhagya Das', '6290139946', 'soubhu28@gmail.com', 'complain', ''),
('Soubhagya Das', '6290139946', 'soubhu28@gmail.com', 'complain', ''),
('Soubhagya Das', '6290139946', 'soubhu28@gmail.com', 'complain', 'p'),
('Soubhagya Das', '6290139946', 'soubhu28@gmail.com', 'complain', 'p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
