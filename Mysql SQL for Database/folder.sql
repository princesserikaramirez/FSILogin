-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2017 at 01:23 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

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

CREATE TABLE IF NOT EXISTS `documents` (
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
  `SECTION_ID` int(2) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `adm_aprvl` int(1) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `name`, `path`, `page`, `description`, `date`, `ODG_ID`, `CIRSS_ID`, `CPRSD_ID`, `AFSD_ID`, `SECTION_ID`, `fileName`, `adm_aprvl`, `user`) VALUES
(1, 'try', 'documents/problems-and-solutions-for-calculus-1.pdf', '2', 'asdasd', '2017-03-24 09:57:43', 1, 1, 1, 1, 1, 'problems-and-solutions-for-calculus-1.pdf', 1, ''),
(2, 'try ulit', '', '1', 'asdasd', '2017-03-24 09:59:15', 1, 1, 1, 1, 1, 'jie_joe.pdf', 1, ''),
(3, '123123123', '../admin/documents/Manicad_PS7.pdf', '1', '123123', '2017-03-24 10:02:38', 1, 1, 1, 1, 1, 'Manicad_PS7.pdf', 1, ''),
(4, 'asdasd', 'documents/Manicad_PS7_2.pdf', '', 'asdasdasd', '2017-03-24 10:21:44', 0, 0, 0, 1, 1, 'Manicad_PS7_2.pdf', 1, ''),
(5, 'awwww', 'documents/Manicad_PS10.pdf', '', 'asdasdasd', '2017-03-24 10:22:14', 0, 1, 0, 0, 1, 'Manicad_PS10.pdf', 1, ''),
(6, 'hmmmm', 'documents/Manicad_PS10.pdf', '', 'asdasdas', '2017-03-24 10:22:47', 1, 1, 1, 1, 1, 'Manicad_PS10.pdf', 1, ''),
(7, 'afafafa', 'documents/Manicad_PS7_2.pdf', '', 'asdasd', '2017-03-24 10:30:50', 0, 1, 1, 1, 1, 'Manicad_PS7_2.pdf', 1, ''),
(8, 'assss', 'documents/Manicad_PS7.pdf', '', 'asdasd', '2017-03-24 10:31:25', 0, 0, 1, 1, 1, 'Manicad_PS7.pdf', 1, ''),
(9, 'awwwwsssss', 'documents/Manicad_PS9.pdf', '', 'aaaa', '2017-03-24 10:32:21', 0, 0, 1, 1, 1, 'Manicad_PS9.pdf', 1, ''),
(10, 'marjoe', 'documents/', '', 'aaaa', '2017-03-24 10:36:37', 0, 1, 1, 1, 1, '', 1, ''),
(11, 'uhhh', 'documents/jhin_by_glaesii-d9ogx2l.jpg', '', 'Michael AKO', '2017-03-24 15:35:43', 1, 0, 0, 0, 1, 'jhin_by_glaesii-d9ogx2l.jpg', 0, 'admin'),
(12, 'Titulo', 'documents/The Virtuoso.jpg', '2', 'Jhinner', '2017-03-24 15:37:36', 1, 0, 0, 0, 1, 'The Virtuoso.jpg', 1, 'admin'),
(13, 'Hays', 'documents/GG.PNG', '2', 'GG', '2017-03-24 15:51:08', 1, 1, 0, 0, 1, 'GG.PNG', 1, 'adminmoto');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `user_id` varchar(100) NOT NULL,
  `SECTION_ID` int(2) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`user_id`, `SECTION_ID`, `fileName`, `date`) VALUES
('admin', 1, 'acewaterspa2.jpg', '2017-03-17'),
('admin', 1, 'documents.sql', '2017-03-17'),
('admin', 1, 'acewaterspa2.jpg', '2017-03-17'),
('admin', 1, '', '2017-03-17'),
('admin', 1, '', '2017-03-17'),
('admin', 1, '', '2017-03-17'),
('admin', 1, '', '2017-03-17'),
('admin', 1, '', '2017-03-17'),
('admin', 1, '17155943_1316633258375814_6480194111138590025_n(1).jpg', '2017-03-17'),
('admin', 1, 'acewaterspa2.jpg', '2017-03-17'),
('admin', 1, 'acewaterspa2(7).jpg', '2017-03-17'),
('admin', 1, '18.jpg', '2017-03-17'),
('admin', 1, '18.jpg', '2017-03-17'),
('admin', 1, 'eighteen 18+ mobile.PNG', '2017-03-17'),
('admin', 1, '17191034_1316633128375827_4230307602592205185_n.jpg', '2017-03-17'),
('admin', 1, '', '2017-03-17'),
('admin', 1, 'eighteen 18+ mobile.PNG', '2017-03-17'),
('admin', 1, '', '2017-03-17'),
('admin', 1, '', '2017-03-17'),
('admin', 1, '', '2017-03-17'),
('admin', 1, '17155943_1316633258375814_6480194111138590025_n.jpg', '2017-03-17'),
('admin', 1, 'asd.txt', '2017-03-17'),
('admin', 1, '', '2017-03-17'),
('admin', 1, '18.jpg', '2017-03-17'),
('admin', 1, 'Manicad_PS18.pdf', '2017-03-17'),
('admin', 1, 'player_2017-03-15_22-22-09.png', '2017-03-17'),
('admin', 1, 'Compare.png', '2017-03-17'),
('admin', 1, 'logo.png', '2017-03-17'),
('admin', 1, 'player_2017-03-15_22-22-09.png', '2017-03-17'),
('admin', 1, 'page 1.jpg', '2017-03-24'),
('admin', 1, 'Compare.gif', '2017-03-24'),
('admin', 1, 'Compare.gif', '2017-03-24'),
('abueser', 1, 'page 3.jpg', '2017-03-24'),
('admin', 1, 'The Virtuoso.jpg', '2017-03-24'),
('admin', 1, 'The Virtuoso.jpg', '2017-03-24'),
('admin', 1, 'The Virtuoso.jpg', '2017-03-24'),
('admin', 1, 'Answers.PNG', '2017-03-24'),
('admin', 1, 'jhin_by_glaesii-d9ogx2l.jpg', '2017-03-24'),
('abueser', 1, 'amd-ryzen-1200x666.png', '2017-03-24'),
('admin', 1, 'jhin_by_glaesii-d9ogx2l.jpg', '2017-03-24'),
('admin', 1, 'The Virtuoso.jpg', '2017-03-24'),
('adminmoto', 1, 'GG.PNG', '2017-03-24'),
('abueser', 1, 'Compare.gif', '2017-03-24');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
