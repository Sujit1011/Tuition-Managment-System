-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 02:20 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutioncentre`
--

-- --------------------------------------------------------

--
-- Table structure for table `classdetails`
--

CREATE TABLE `classdetails` (
  `c_id` int(5) NOT NULL,
  `day` char(9) NOT NULL,
  `room` varchar(10) NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classdetails`
--

INSERT INTO `classdetails` (`c_id`, `day`, `room`, `time`) VALUES
(120, 'Monday', 'L-202', '14:00:00'),
(431, 'Wednesday', 'CR-107', '09:00:00'),
(872, 'Friday', 'L-106', '11:00:00'),
(762, 'Wednesday', 'L-107', '11:00:00'),
(642, 'Thursday', 'L-201', '13:00:00'),
(234, 'Thursday', 'L-201', '13:00:00'),
(111, 'Tuesday', 'L-201', '15:00:00'),
(776, 'Friday', 'CR-104', '13:00:00'),
(279, 'Thursday', 'L-206', '15:00:00'),
(1212, 'Sunday', '1212', '05:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `fac_id` int(5) NOT NULL,
  `c_id` int(4) NOT NULL,
  `c_name` char(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`fac_id`, `c_id`, `c_name`) VALUES
(10, 900, 'Complete Python'),
(10, 950, 'Machine Learning'),
(20, 670, 'Real Analysis'),
(20, 672, 'Operational Research'),
(20, 674, 'Intro to Fractals'),
(30, 920, 'OPPs with Java'),
(30, 300, 'Image Processing'),
(30, 320, 'DBMS'),
(30, 370, 'SQL Security'),
(40, 170, 'Digital Electronics'),
(40, 175, 'Instrumentation'),
(40, 0, 'Combinational Circuit Design'),
(27, 432, 'Dot NET Framework'),
(27, 642, 'OOPs with C#'),
(27, 234, 'Dango Development'),
(32, 762, 'Leadership Qualities'),
(32, 120, 'Culture & Values'),
(32, 431, 'Mind & Emotions'),
(47, 872, 'Data Structures & Algorithms'),
(47, 111, 'Algorithm Optimizations'),
(12, 747, 'Big Data Analysis'),
(12, 776, 'Robotics'),
(12, 882, 'Software Design'),
(12, 279, 'Artifical Intilligence'),
(10, 1212, '1212');

-- --------------------------------------------------------

--
-- Table structure for table `facattendance`
--

CREATE TABLE `facattendance` (
  `fac_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `present` int(2) NOT NULL,
  `total` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facattendance`
--

INSERT INTO `facattendance` (`fac_id`, `c_id`, `present`, `total`) VALUES
(10, 900, 99, 100),
(20, 950, 80, 200),
(30, 431, 0, 100),
(27, 111, 50, 100),
(14, 279, 150, 150);

-- --------------------------------------------------------

--
-- Table structure for table `faclogin`
--

CREATE TABLE `faclogin` (
  `fac_id` int(5) NOT NULL,
  `fac_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faclogin`
--

INSERT INTO `faclogin` (`fac_id`, `fac_password`) VALUES
(10, 'fac123'),
(20, 'qwerty999'),
(30, 'exam@');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fac_id` int(5) NOT NULL,
  `fac_fname` varchar(20) NOT NULL,
  `fac_mname` varchar(20) DEFAULT NULL,
  `fac_lname` varchar(20) NOT NULL,
  `fac_gender` varchar(1) NOT NULL,
  `fac_email` varchar(20) DEFAULT NULL,
  `fac_phonenum` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_id`, `fac_fname`, `fac_mname`, `fac_lname`, `fac_gender`, `fac_email`, `fac_phonenum`) VALUES
(10, 'Prof.Rahul', 'Varma', 'Vijay', 'M', 'rahulvv123@gmail.com', 9876234),
(20, 'Dr.Kartik', 'Hendy', 'James', 'M', 'drkartik@hotmail.com', 8562496),
(30, 'Prof.Sheema', NULL, 'Sen', 'F', 'sheemapaul@gmail.com', 87465132),
(40, 'Dr.Naveen', 'Orukutheel', 'Ron', 'M', 'naveen75ron@gmail.co', 987451654),
(27, 'Prof.Jeevan', 'Santosh', 'Rao', 'M', 'jeevanrao27@hotmail.', 98544257),
(32, 'Dr.Swati', 'Rajesh', 'Singh', 'F', 'rsswati1488@gmail.co', 985465321),
(47, 'Prof.Priyanka', 'Amit', 'Shukla', 'F', NULL, 984651687),
(12, 'Dr.Saurabh', 'Deepak', 'Patil', 'M', 'saurabhdp2000@hotmai', 75162658),
(13, 'Prof.Bhatia', NULL, 'Prasad', 'M', 'bhatiaprasad222@gmai', NULL),
(22, 'Dr.Rajiv', NULL, 'Shukla', 'M', NULL, NULL),
(14, 'Prof.sheema', NULL, 'Sen', 'F', NULL, 2147483647),
(1231, 'ffffff', 'mmmmm', 'llllll', 'M', 'qqq@gmail.com', 22222222);

-- --------------------------------------------------------

--
-- Table structure for table `sattendance`
--

CREATE TABLE `sattendance` (
  `s_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `present` int(2) NOT NULL,
  `total` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sattendance`
--

INSERT INTO `sattendance` (`s_id`, `c_id`, `present`, `total`) VALUES
(101, 900, 99, 100),
(102, 320, 132, 200),
(103, 670, 0, 100),
(104, 872, 50, 100),
(105, 900, 150, 150);

-- --------------------------------------------------------

--
-- Table structure for table `scourses`
--

CREATE TABLE `scourses` (
  `s_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scourses`
--

INSERT INTO `scourses` (`s_id`, `c_id`) VALUES
(102, 320),
(103, 670),
(104, 872),
(101, 900),
(105, 900);

-- --------------------------------------------------------

--
-- Table structure for table `sgrade`
--

CREATE TABLE `sgrade` (
  `s_id` int(5) NOT NULL,
  `c_id` int(5) NOT NULL,
  `exam_name` varchar(20) NOT NULL,
  `marks` float NOT NULL,
  `total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sgrade`
--

INSERT INTO `sgrade` (`s_id`, `c_id`, `exam_name`, `marks`, `total`) VALUES
(101, 900, 'test1', 24, 60),
(102, 320, 'test2', 70, 90),
(103, 670, 'test3', 40, 40),
(104, 872, 'test4', 5, 10),
(105, 900, 'test5', 45, 70);

-- --------------------------------------------------------

--
-- Table structure for table `sguardian`
--

CREATE TABLE `sguardian` (
  `s_id` int(5) NOT NULL,
  `g_name` varchar(60) NOT NULL,
  `gphone` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sguardian`
--

INSERT INTO `sguardian` (`s_id`, `g_name`, `gphone`) VALUES
(101, 'Raj', 987654321),
(102, 'T.K.Boban', 984523145),
(103, 'Shrill Soren', 987623123),
(104, 'Singh', 985121912),
(105, 'Bhaskar', 2147483647),
(106, 'Tom', 2147483647),
(107, 'Yash', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `slogin`
--

CREATE TABLE `slogin` (
  `s_id` int(5) NOT NULL,
  `s_username` varchar(20) NOT NULL,
  `s_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slogin`
--

INSERT INTO `slogin` (`s_id`, `s_username`, `s_password`) VALUES
(101, 'great.albin14', 'albin'),
(102, 'bibin$boban', 'bibin2'),
(103, 'sujit&&soren', 'Soren#'),
(104, 'anshul%singh', 'anshul4');

-- --------------------------------------------------------

--
-- Table structure for table `sprofile`
--

CREATE TABLE `sprofile` (
  `s_id` int(5) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `m_name` varchar(20) DEFAULT NULL,
  `l_name` varchar(20) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `dob` date NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  `phonenum` int(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sprofile`
--

INSERT INTO `sprofile` (`s_id`, `f_name`, `m_name`, `l_name`, `gender`, `dob`, `address`, `phonenum`, `email`) VALUES
(101, 'Albin', 'Dave', 'Paul', 'M', '2019-05-06', 'address 1', 1234567890, '1234567890@email.com'),
(102, 'Bibin', 'Kurikesu', 'Boban', 'M', '2000-03-26', 'address 2', 1234567899, 'qwertyuio@email.com'),
(103, 'Sujit', NULL, 'Soren', 'M', '2019-11-11', 'address 3', 1232154678, 'wsxcijhxcv@gmail.com'),
(104, 'Anshul', NULL, 'Singh', 'M', '2001-01-08', 'address 4', 987654321, 'okjnbuygfc@hotmail.com'),
(105, 'Ayush', 'Kumar', 'Jain', 'M', '2003-06-16', 'address 5', 2147483647, 'ayushkumarjain55@hotmail.com'),
(106, 'Femi', 'Anna', 'Ivan', 'F', '2012-03-05', 'address 6', NULL, NULL),
(107, 'Bibin', NULL, 'Boban', 'M', '2000-03-26', 'address 6', 2147483647, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classdetails`
--
ALTER TABLE `classdetails`
  ADD PRIMARY KEY (`c_id`,`day`,`time`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`fac_id`,`c_id`);

--
-- Indexes for table `faclogin`
--
ALTER TABLE `faclogin`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `sattendance`
--
ALTER TABLE `sattendance`
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `scourses`
--
ALTER TABLE `scourses`
  ADD PRIMARY KEY (`c_id`,`s_id`);

--
-- Indexes for table `sgrade`
--
ALTER TABLE `sgrade`
  ADD PRIMARY KEY (`c_id`,`s_id`,`exam_name`);

--
-- Indexes for table `sguardian`
--
ALTER TABLE `sguardian`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `slogin`
--
ALTER TABLE `slogin`
  ADD PRIMARY KEY (`s_id`,`s_username`);

--
-- Indexes for table `sprofile`
--
ALTER TABLE `sprofile`
  ADD PRIMARY KEY (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
