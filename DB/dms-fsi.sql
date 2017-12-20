-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 04:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms-fsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` varchar(20) NOT NULL,
  `user_passwd` varchar(20) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `SECTION_ID` varchar(100) NOT NULL,
  `ODG_ID` int(2) NOT NULL DEFAULT '0',
  `CIRSS_ID` int(2) NOT NULL DEFAULT '0',
  `CPRSD_ID` int(2) NOT NULL DEFAULT '0',
  `AFSD_ID` int(2) NOT NULL DEFAULT '0',
  `secq` varchar(50) NOT NULL,
  `sec_que` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_passwd`, `lname`, `fname`, `mname`, `email`, `contact`, `SECTION_ID`, `ODG_ID`, `CIRSS_ID`, `CPRSD_ID`, `AFSD_ID`, `secq`, `sec_que`) VALUES
('admin', 'admin', 'Manicad', 'Michael', 'Chris', 'kasperskymikeapostol26@gmail.com', 2147483647, '1', 1, 1, 1, 1, 'Football', 'What is your sport'),
('admin2', 'admin2', 'Ramirez', 'Princess', 'De Guzman', '', 0, '1', 1, 1, 1, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `div_id` varchar(10) NOT NULL,
  `div_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`div_id`, `div_name`) VALUES
('AFSD', 'ADMINISTRATIVE AND FINANCIAL SERVICES DIVISION'),
('CIRSS', 'CENTER FOR INTERNATIONAL RELATIONS AND STRATEGIC STUDIES'),
('CPRSD', 'CARLOS P. ROMULO SCHOOL OF DIPLOMACY'),
('ODG', 'OFFICE OF THE DIRECTOR-GENERAL');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file_id` int(10) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_type` varchar(5) NOT NULL,
  `file_size` int(10) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `version` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `div_id` varchar(10) NOT NULL,
  `sec_id` varchar(10) NOT NULL,
  `sec_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`div_id`, `sec_id`, `sec_name`) VALUES
('AFSD', 'AFSD-OH', 'AFSD - OFFICE OF THE HEAD'),
('CIRSS', 'APS', 'Asean Programs Section'),
('CIRSS', 'AS1', 'Area Studies Section 1'),
('CIRSS', 'AS2', 'Area Studies Section 2'),
('ODG', 'ASEANA', 'ASEANA Consular Affair Office'),
('CIRSS', 'CIRSS-OH', 'CIRSS - OFFICE OF THE HEAD'),
('AFSD', 'COA', 'COA in DFA'),
('CPRSD', 'CPRSD-OH', 'CPRSD - OFFICE OF THE HEAD'),
('CPRSD', 'CPS', 'Core Programs Section'),
('AFSD', 'CSC', 'CSC in DFA'),
('ODG', 'DSS', 'DFA Security Services'),
('AFSD', 'FMS', 'Financial Management Section'),
('AFSD', 'GSS', 'General Service Section'),
('AFSD', 'IAS', 'Internal Audit Section'),
('ODG', 'ILU', 'Institutional Linkages Unit'),
('CIRSS', 'IOS', 'International Organizations Section'),
('CPRSD', 'IPELS', 'International Programs / E-Learning Section'),
('CPRSD', 'LPS', 'Language Programs Section'),
('ODG', 'LS', 'Library Section'),
('AFSD', 'MIS', 'Management Information Systems Section'),
('CIRSS', 'NTSSS', 'Non-Traditional Security Studies Section'),
('ODG', 'ODG-PROPER', 'ODG - PROPER'),
('AFSD', 'PS', 'Personnel Section'),
('CPRSD', 'PTPS', 'Professional and Technical Programs Section'),
('ODG', 'PubS', 'Publication Section'),
('CPRSD', 'ScPS', 'Scholarship Programs Section'),
('CIRSS', 'SPjS', 'Special Projects Section'),
('CPRSD', 'SPS', 'Special Programs Section'),
('CPRSD', 'TES', 'Training Evaluation Section'),
('CIRSS', 'TSSS', 'Traditional Security Studies Section');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(20) NOT NULL,
  `user_passwd` varchar(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` bigint(13) NOT NULL,
  `SECTION_ID` varchar(100) NOT NULL,
  `ODG_ID` int(2) NOT NULL DEFAULT '0',
  `CIRSS_ID` int(2) NOT NULL DEFAULT '0',
  `CPRSD_ID` int(2) NOT NULL DEFAULT '0',
  `AFSD_ID` int(2) NOT NULL DEFAULT '0',
  `secq` varchar(50) NOT NULL,
  `sec_que` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_passwd`, `lname`, `fname`, `mname`, `email`, `contact`, `SECTION_ID`, `ODG_ID`, `CIRSS_ID`, `CPRSD_ID`, `AFSD_ID`, `secq`, `sec_que`) VALUES
('mikemike26', '22121232xd', 'Apostolhaha', 'Michael', 'Ramoses', 'kasperskymikeapostol26@gmail.com', 2147483647, 'ODG Proper', 1, 0, 0, 0, 'Football', 'What is your sport');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`div_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sec_id`),
  ADD KEY `div_id` (`div_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`div_id`) REFERENCES `division` (`div_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
