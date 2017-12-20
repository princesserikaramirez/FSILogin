-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 04:15 AM
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
  `date` datetime NOT NULL,
  `ODG_ID` int(2) NOT NULL DEFAULT '0',
  `CIRSS_ID` int(2) NOT NULL DEFAULT '0',
  `CPRSD_ID` int(2) NOT NULL DEFAULT '0',
  `AFSD_ID` int(2) NOT NULL DEFAULT '0',
  `ALL` int(5) NOT NULL,
  `SECTION_ID` varchar(100) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `adm_aprvl` int(1) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `path`, `page`, `description`, `date`, `ODG_ID`, `CIRSS_ID`, `CPRSD_ID`, `AFSD_ID`, `ALL`, `SECTION_ID`, `fileName`, `adm_aprvl`, `user`) VALUES
(2, 'Test', 'documents/Wheelchair.jpg', '2', 'Wheel Chair', '2017-06-02 14:29:06', 1, 0, 0, 0, 0, 'ODG Proper', 'Wheelchair.jpg', 1, 'mikemike26'),
(3, '', 'documents/', '2', 'Hi', '2017-06-02 14:32:31', 1, 0, 0, 0, 0, 'All Section', '', 1, 'admin'),
(4, 'General service', 'documents/General Services.docx', '2', 'General service', '2017-06-02 14:55:33', 1, 0, 0, 0, 0, 'All Section', 'General Services.docx', 1, 'admin'),
(5, 'Test', 'documents/', '2', 'No class', '2017-06-02 14:57:59', 0, 1, 0, 0, 0, 'Non-Traditional Security Studies Section', '', 1, 'admin'),
(6, 'Hi Marjoe', 'documents/Wheelchair.jpg', '2', 'wheelchair ulit marjoe', '2017-06-02 15:12:20', 1, 0, 0, 0, 0, 'ODG Proper', 'Wheelchair.jpg', 1, 'mikemike26');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `user_id` varchar(100) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `process` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`user_id`, `fileName`, `date`, `process`) VALUES
('admin', 'Wheelchair.jpg', '2017-06-05 10:13:18', 'download');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
