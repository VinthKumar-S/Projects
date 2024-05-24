-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 03:03 PM
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
-- Database: `viluthu`
--

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `totplant` int(6) DEFAULT NULL,
  `totmember` int(6) DEFAULT NULL,
  `totplace` int(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`totplant`, `totmember`, `totplace`) VALUES
(140, 26, 3);

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donorid` int(10) NOT NULL,
  `donorname` varchar(20) DEFAULT NULL,
  `donatedate` varchar(20) DEFAULT NULL,
  `mobileno` varchar(15) DEFAULT NULL,
  `trphoto` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donorid`, `donorname`, `donatedate`, `mobileno`, `trphoto`) VALUES
(1, 'sak', '2024-01-06', '9342070333', '65990f26b8a4d_1704529702.jpg'),
(2, 'Logesh', '2024-01-07', '7339260832', '659aa962e41cf_1704634722.jpg'),
(3, 'Kamal', '2024-01-21', '9025738933', '65ad1fd7cd53f_1705844695.jpg'),
(4, 'Kamal', '2024-01-21', '9025738933', '65ad20590558f_1705844825.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(4) NOT NULL,
  `eventname` varchar(100) DEFAULT NULL,
  `membername` varchar(500) DEFAULT NULL,
  `eventdate` varchar(12) DEFAULT NULL,
  `place` varchar(20) DEFAULT NULL,
  `plantcount` int(6) DEFAULT NULL,
  `sponser` varchar(15) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `eventname`, `membername`, `eventdate`, `place`, `plantcount`, `sponser`, `status`) VALUES
(1, 'The Green', '', '02-01-2024', 'Madurai', 20, '', 'f'),
(2, 'Plants', '', '03-01-2024', 'Madurai', 20, '', 'f'),
(3, 'The Palms', '', '07-01-2024', 'chennai', 100, '', 'f'),
(4, 'The Green Grams', '', '13-01-2024', 'Kalligudi', 50, '', 'uf'),
(5, 'The Green Grams', '', '21-01-2024', 'Kalligudi', 50, '', 'uf'),
(44, 'Seed Distribution ', NULL, '30-01-2024', 'Sivakasi ', 0, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `eventid` int(5) DEFAULT NULL,
  `eventname` varchar(30) DEFAULT NULL,
  `feedname` varchar(25) DEFAULT NULL,
  `feedemail` varchar(30) DEFAULT NULL,
  `opinion` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`eventid`, `eventname`, `feedname`, `feedemail`, `opinion`) VALUES
(2, 'Plants', 'sak', 'sakthi1043@gmail.com', 'hggoiuugkgjkg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `eventid` int(6) DEFAULT NULL,
  `imageId` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`eventid`, `imageId`) VALUES
(3, '65ad08c1b34de_1705838785.jpg'),
(1, '65ad08d286995_1705838802.jpg'),
(2, '65ad3f25a9d8b_1705852709.jpg'),
(5, '65ae975198d88_1705940817.jpg'),
(3, '65ae9957be90a_1705941335.jpg'),
(3, '65ae9afb3c06e_1705941755.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberid` bigint(4) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `dob` varchar(12) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `phoneno` bigint(15) DEFAULT NULL,
  `designation` varchar(20) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `joindate` varchar(12) DEFAULT NULL,
  `retiredate` varchar(12) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberid`, `name`, `dob`, `gender`, `phoneno`, `designation`, `qualification`, `joindate`, `retiredate`, `address`) VALUES
(4503, 'A. Sulaimaan', '11-11-1111', 'Male', 1234567890, 'Designation', 'E,.Qualify', '31-12-2023', '', '45/1, New Street, Virudhunagar.'),
(9869, 'A. Pandi', '11-11-1111', 'Male', 7706791978, 'Designation', 'PGDCA', '2023-12-30', NULL, '2, New Street, Virudhunagar.'),
(9477, 'M. Muthuramalingam', '11-11-1111', 'Male', 9488000467, 'Designation', 'BA., DOA.,', '30-12-2023', NULL, '3, New Street, Virudhunagar.'),
(2497, 'N. Ilamathi', '11-11-1111', 'Male', 1234567892, 'Designation', 'B.Com.,MBA.,', '2023-12-30', NULL, '4, New Street, Virudhunagar.'),
(8534, 'S. Rajendren', '11-11-1111', 'Male', 1234567894, 'Designation', 'BCA.,', '30-12-2023', '', '5, New Street, Virudhunagar.'),
(7830, 'G. Devibala', '11-11-1111', 'Male', 1234567893, 'Designation', 'MA., LLB.,', '2023-12-30', NULL, '6, New Street, Virudhunagar.'),
(9644, 'A.S.K.R. AjayKumar', '11-11-1111', 'Male', 1234567895, 'Designation', 'BCA.,', '2023-12-30', NULL, '7, New Street, Virudhunagar.'),
(1603, 'B. Saravana Muthu', '11-11-1111', 'Male', 1234567896, 'Designation', 'BE.,', '2023-12-30', NULL, '8, New Street, Virudhunagar.'),
(2558, 'R. Manivannan', '11-11-1111', 'Male', 1234567897, 'Designation', 'BE.,', '2023-12-30', NULL, '9, New Street, Virudhunagar.'),
(9969, 'K. Sivagurunathan', '11-11-1111', 'Male', 9600278436, 'Designation', 'E,.Qualify', '2023-12-30', '29-12-2024', '10, New Street, Virudhunagar.'),
(4608, 'G. Rajendren', '11-11-1111', 'Male', 1234567898, 'Designation', 'TNSTC', '2023-12-30', '', '11, New Street, Virudhunagar.'),
(9077, 'V. Chandra Mohan', '11-11-1111', 'Male', 1234567899, 'Designation', 'ITI', '2023-12-30', '29-12-2024', '12, New Street, Virudhunagar.'),
(8410, 'K. Vel Murugan', '11-11-1111', 'Male', 1234567810, 'Designation', 'MA.,', '31-12-2023', '30-12-2024', '234/2, New Street, Virudhunagar. '),
(7524, 'N.Ram Kumar', '11-11-1111', 'Male', 1234567820, 'Designation', 'E,.Qualify', '2023-12-30', '29-12-2024', '14, New Street, Virudhunagar.'),
(2881, 'P. Vijaya Vel', '11-11-1111', 'Male', 1234567830, 'Designation', 'MCA., MPhil., PGDCA.,', '2023-12-30', '29-12-2024', '15, New Street, Virudhunagar'),
(8614, 'M. Kannan', '11-11-1111', 'Male', 1234567840, 'Designation', 'DEEE.,', '2023-12-30', '', '16, New Street, Virudhunagar. '),
(6045, 'R. Senthil Ganapathy', '11-11-1111', 'Male', 1234567850, 'Designation', 'E,.Qualify', '30-12-2023', '', '17, New Street, Virudhunagar. '),
(6137, 'A. Rama Swamy', '11-11-1111', 'Male', 1234567860, 'Designation', 'MA.,', '2023-12-30', '', '18, New Street, Virudhunagar. '),
(6508, 'G.M. Nagendren', '11-11-1111', 'Male', 9629257273, 'Designation', 'B.sc.,', '31-12-2023', '30-12-2024', '17A, Ganesha Colony, Virudhunagar, 626001'),
(4206, 'M. Poun Raj', '11-11-1111', 'Male', 1234567870, 'Designation', 'MA.,', '2023-12-30', '', '20, New Street, Virudhunagar. '),
(9501, 'M. Mugesh', '11-11-1111', 'Male', 1234567880, 'Designation', 'BA.,', '2023-12-30', '', '201, New Street, Virudhunagar. '),
(5748, 'S. Karthikeyan', '11-11-1111', 'Male', 1234567890, 'Designation', 'MCA., MPhil.,', '30-12-2023', '', '22, New Street, Virudhunagar. '),
(8064, 'R. Rajesh Kumar', '11-11-1111', 'Male', 1234567190, 'Designation', 'MCA., MPhil.,', '2023-12-30', '', '23, New Street, Virudhunagar. '),
(5107, 'G. Veeramani', '11-11-1111', 'Male', 1234567290, 'Designation', 'MCA.,', '2023-12-30', '', '24, New Street, Virudhunagar. '),
(4793, 'G. Rajendren', '11-11-1111', 'Male', 1234567390, 'Designation', 'TNSTC', '30-12-2023', '29-12-2024', '25, New Street, Virudhunagar.'),
(5867, 'A. Bala', '11-11-1111', 'Male', 1234567490, 'Designation', 'B.com(CA).,', '31-12-2023', '', '12, New Street, Virudhunagar.');

-- --------------------------------------------------------

--
-- Table structure for table `orgmembers`
--

CREATE TABLE `orgmembers` (
  `roles` varchar(40) DEFAULT NULL,
  `status` varchar(5) DEFAULT NULL,
  `troles` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tier` int(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orgmembers`
--

INSERT INTO `orgmembers` (`roles`, `status`, `troles`, `tier`) VALUES
('Org Patron', 'p', 'குழும தலைவர்', 1),
('Org Secretary', 'p', 'குழும செயலாளர்', 2),
('Org Treasurer', 'p', 'குமும பொருளாளர்', 3),
('Org Honorable Colleague', 'p', 'குழும கௌரவ ஆலோசகர்', 4),
('Org Honorable Colleague', 'p', 'குழும கௌரவ ஆலோசகர்', 5),
('Org Legal Colleague', 'p', 'குழும சட்ட ஆலோசகர்', 6),
('Org Press Secretary', 'p', 'குழும செய்தி தொடர்பு செயலாளர்', 7),
('Org Plan Secretary', 'p', 'குழும திட்ட செயலாளர்', 8),
('Org Plan Secretary', 'p', 'குழும திட்ட செயலாளர்', 9),
('Patron', 'p', 'தலைவர்', 10),
('Secretary', 'p', 'செயலாளர்', 11),
('Treasurer', 'p', 'பொருளாளர்', 12),
('Honorable Colleague', 'p', 'கௌரவ ஆலோசகர்', 13),
('Honorable Colleague', 'p', 'கௌரவ ஆலோசகர்', 14),
('Information Secretary', 'p', 'தகவல் தொழில்நுட்பசெயலாளர்', 15),
('member', 'p', 'உறுப்பினர்', 16);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `memberid` bigint(4) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mainrole` varchar(100) DEFAULT NULL,
  `comrole` varchar(20) DEFAULT NULL,
  `tier` int(6) DEFAULT NULL,
  `imageid` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`memberid`, `name`, `mainrole`, `comrole`, `tier`, `imageid`, `username`, `password`) VALUES
(9869, 'A. Pandi', 'Org Secretary', 'member', 2, '0', '7706791978', 'Seed@123'),
(9477, 'M. Muthuramalingam', 'Org Treasurer', 'member', 3, '0', '9488000467', 'Seed@123'),
(2497, 'N. Ilamathi', 'Org Honorable Colleague', 'member', 4, '0', '1234567892', 'Seed@123'),
(8534, 'S. Rajendren', 'Org Honorable Colleague', 'member', 5, '0', '1234567894', 'Seed@123'),
(7830, 'G. Devibala', 'Org Legal Colleague', 'member', 6, '0', '1234567893', 'Seed@123'),
(9644, 'A.S.K.R. AjayKumar', 'Org Press Secretary', 'member', 7, '0', '1234567895', 'Seed@123'),
(1603, 'B. Saravana Muthu', 'Org Plan Secretary', 'member', 8, '0', '1234567896', 'Seed@123'),
(2558, 'R. Manivannan', 'Org Plan Secretary', 'member', 9, '0', '1234567897', 'Seed@123'),
(9969, 'K. Sivagurunathan', 'Patron', 'member', 10, '0', '9600278436', 'Seed@123'),
(4608, 'G. Rajendren', 'member', 'member', 16, '0', '1234567898', 'Seed@123'),
(9077, 'V. Chandra Mohan', 'Treasurer', 'member', 12, '0', '1234567899', 'Seed@123'),
(8410, 'K. Vel Murugan', 'Honorable Colleague', 'member', 13, '0', '1234567810', 'Seed@123'),
(7524, 'N.Ram Kumar', 'Honorable Colleague', 'member', 14, '0', '1234567820', 'Seed@123'),
(2881, 'P. Vijaya Vel', 'Information Secretary', 'member', 15, '0', '1234567830', 'Seed@123'),
(8614, 'M. Kannan', 'member', 'member', 16, '0', '1234567840', 'Seed@123'),
(6045, 'R. Senthil Ganapathy', 'member', 'member', 16, '0', '1234567850', 'Seed@123'),
(6137, 'A. Rama Swamy', 'member', 'member', 16, '0', '1234567860', 'Seed@123'),
(6508, 'G.M. Nagendren', 'Org Patron', 'member', 1, '0', '9629257273', 'Seed@123'),
(4206, 'M. Poun Raj', 'member', 'member', 16, '0', '1234567870', 'Seed@123'),
(9501, 'M. Mugesh', 'member', 'member', 16, '0', '1234567880', 'Seed@123'),
(5748, 'S. Karthikeyan', 'member', 'member', 16, '0', '1234567890', 'Seed@123'),
(8064, 'R. Rajesh Kumar', 'member', 'member', 16, '0', '1234567190', 'Seed@123'),
(5107, 'G. Veeramani', 'member', 'member', 16, '0', '1234567290', 'Seed@123'),
(4793, 'G. Rajendren', 'Secretary', 'member', 11, '0', '1234567390', 'Seed@123'),
(4503, 'A. Sulaimaan', 'member', 'member', 16, '0', '1234567891', 'Seed@123'),
(5867, 'A. Bala', 'member', 'member', 16, '0', '1234567490', 'Seed@123');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `id` bigint(5) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `privilege` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `username`, `password`, `privilege`) VALUES
(1, 'viruthai', 'Viruthai@123', 1),
(9477, '9488000467', 'Seed@123', 2),
(4503, '1234567891', 'Seed@123', 2),
(9869, '7706791978', 'Seed@123', 2),
(2497, '1234567892', 'Seed@123', 2),
(7830, '1234567893', 'Seed@123', 2),
(8534, '1234567894', 'Seed@123', 2),
(9644, '1234567895', 'Seed@123', 2),
(1603, '1234567896', 'Seed@123', 2),
(2558, '1234567897', 'Seed@123', 2),
(9969, '9600278436', 'Seed@123', 2),
(4608, '1234567898', 'Seed@123', 2),
(9077, '1234567899', 'Seed@123', 2),
(8410, '1234567810', 'Seed@123', 2),
(7524, '1234567820', 'Seed@123', 2),
(2881, '1234567830', 'Seed@123', 2),
(8614, '1234567840', 'Seed@123', 2),
(6045, '1234567850', 'Seed@123', 2),
(6137, '1234567860', 'Seed@123', 2),
(6508, '9629257273', 'Seed@123', 2),
(4206, '1234567870', 'Seed@123', 2),
(9501, '1234567880', 'Seed@123', 2),
(5748, '1234567890', 'Seed@123', 2),
(8064, '1234567190', 'Seed@123', 2),
(5107, '1234567290', 'Seed@123', 2),
(4793, '1234567390', 'Seed@123', 2),
(5867, '1234567490', 'Seed@123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donorid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberid`);

--
-- Indexes for table `orgmembers`
--
ALTER TABLE `orgmembers`
  ADD PRIMARY KEY (`tier`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`memberid`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
