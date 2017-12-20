-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2017 at 06:34 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `folder`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` varchar(400) NOT NULL,
  `page` varchar(3) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `ODG_ID` int(2) NOT NULL DEFAULT '0',
  `CIRSS_ID` int(2) NOT NULL DEFAULT '0',
  `CPRSD_ID` int(2) NOT NULL DEFAULT '0',
  `AFSD_ID` int(2) NOT NULL DEFAULT '0',
  `SECTION_ID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `path`, `page`, `description`, `date`, `ODG_ID`, `CIRSS_ID`, `CPRSD_ID`, `AFSD_ID`, `SECTION_ID`) VALUES
(2, 'Marjoe Manicad Announcement', 'documents/DN 2017-02-19 08-23-09 Sun.jpg', '1', 'This is for new class activity', '0000-00-00', 0, 0, 0, 0, 0),
(3, 'Marjoe tutorial', 'documents/DN 2017-02-11 17-01-28 Sat.jpg', '1', 'How to create a checkbox', '0000-00-00', 0, 0, 0, 0, 0),
(4, 'Ticket', 'documents/acewaterspa2.jpg', '1', 'Flight to Canada', '0000-00-00', 0, 0, 0, 0, 0),
(5, 'Michael Apostol Announcement', 'documents/acewaterspa2.jpg', '1', 'Class suspension', '0000-00-00', 0, 0, 0, 0, 0),
(6, 'Marjoe Practice', 'documents/f3.png', '2', 'Try to be a game developer', '0000-00-00', 0, 0, 0, 0, 0),
(7, 'Announcement 1', 'documents/f1.PNG', '2', 'Project description', '0000-00-00', 0, 0, 0, 0, 0),
(8, 'Announcement 2', 'documents/', '2', 'Capstone proposal', '0000-00-00', 0, 0, 0, 0, 0),
(17, 'ace erosa', 'documents/acewaterspa2.jpg', '2', 'Swimming', '0000-00-00', 0, 0, 0, 0, 0),
(25, 'Michael tiekcet', 'documents/16736228_1616636961684344_1053285880_n.jpg', '2', 'asdasdasd', '0000-00-00', 0, 0, 0, 0, 0),
(26, 'Michael tiekcet', 'documents/16736228_1616636961684344_1053285880_n.jpg', '2', 'asdasdasd', '0000-00-00', 0, 0, 0, 0, 0),
(27, 'Dad', 'documents/', '1', 'asdasd', '0000-00-00', 0, 0, 0, 0, 0),
(28, '18', 'documents/eighteen 18+ mobile.PNG', '1', 'adas', '0000-00-00', 0, 0, 0, 0, 0),
(29, 'Marjoe powerpoint', 'documents/Presentation1.pptx', '1', '5 mins pitch', '0000-00-00', 0, 0, 0, 0, 0),
(30, 'Marjoe ppt', 'documents/Presentation1.pptx', '2', 'Aww', '0000-00-00', 0, 0, 0, 0, 0),
(31, 'Trydownload', 'documents/17155709_1316633125042494_3264236475050221348_n.jpg', '1', 'Marjoe', '0000-00-00', 0, 0, 0, 0, 0),
(32, 'Marjoe Download', 'documents/17155943_1316633258375814_6480194111138590025_n.jpg', '1', 'Tshirt', '0000-00-00', 0, 0, 0, 0, 0),
(33, 'Date try', 'documents/17191034_1316633128375827_4230307602592205185_n.jpg', '2', 'HM', '0000-00-00', 0, 0, 0, 0, 0),
(34, 'asdasd', 'documents/17155686_1316633118375828_4347893207283396668_n.jpg', '1', 'date', '2017-03-12', 0, 0, 0, 0, 0),
(35, 'Maaaa', 'documents/17155285_1316633248375815_7788796286205388887_n.jpg', '2', 'asdasdasd', '2017-03-13', 0, 0, 0, 0, 0),
(36, 'aaa', 'documents/16736228_1616636961684344_1053285880_n.jpg', '2', 'aaa', '2017-03-13', 0, 0, 0, 0, 0),
(37, '123123', 'documents/17155686_1316633118375828_4347893207283396668_n.jpg', '2', '123123111111', '2017-03-13', 1, 1, 1, 1, 0),
(38, '1234', 'documents/17155816_1316633178375822_956736543368142885_n.jpg', '2', '1234', '2017-03-13', 0, 0, 1, 1, 0),
(39, 'Section Testing', 'documents/17155709_1316633125042494_3264236475050221348_n.jpg', '2', 'asdasdasd', '2017-03-13', 0, 0, 1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
