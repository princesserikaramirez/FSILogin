-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2017 at 10:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

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
  `sec_id` varchar(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_passwd`, `sec_id`, `lname`, `fname`, `mname`, `email`, `contact`) VALUES
('admin', 'admin', '', '', '', '', '', 3061);

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
  `sec_id` varchar(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_passwd` varchar(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sec_id`, `user_id`, `user_passwd`, `lname`, `fname`, `mname`, `email`, `contact`) VALUES
('', '', '', '', '', '', '', 0),
('MIS', 'abueser', '', 'Bueser Jr.', 'Armando', 'R.', '', 3061),
('PTPS', 'aestrella', '', 'Estrella', 'Arniel', 'D.', '', 3799),
('AS2', 'akmolina', '', 'Molina', 'Andrea Kristine', 'G.', '', 4492),
('MIS', 'amarasigan', '', 'Marasigan', 'Andres Astro', 'Y.', '', 4211),
('GSS', 'apadilla', '', 'Padilla', 'Allan', 'V.', '', 3186),
('ODG-PROPER', 'aretumban', '', 'Retumban', 'Amaliarita', 'H.', '', 3780),
('GSS', 'arodriguez', '', 'Rodriguez', 'Angel', 'G.', '', 3064),
('CPS', 'azaldivar', '', 'Zaldivar', 'Amarie', 'C.', '', 4626),
('MIS', 'bbasal', '', 'Basal', 'Bienvenido', 'S.', '', 3061),
('CPRSD-OH', 'bcordero', '', 'Cordero', 'Bernadette', 'E.', '', 3952),
('ODG-PROPER', 'cclaro', '', 'Cristobal', 'Claro', 'S.', '', 4981),
('TES', 'cjusto', '', 'Justo', 'Carlos', 'Q.', '', 4098),
('GSS', 'clegazpi', '', 'Legazpi', 'Carmelito', 'E.', '', 3064),
('AFSD-OH', 'cmarasigan', '', 'Marasigan', 'Carmelita', 'S.', '', 4799),
('CIRSS-OH', 'crguillemer', '', 'Guillemer', 'Connie Rose', 'C.', '', 3762),
('CPS', 'dafortunado', '', 'Fortunado', 'Dulce Amor', 'N.', '', 3783),
('AS1', 'destrada', '', 'Estrada', 'Darlene', 'V.', '', 3563),
('AS2', 'disalazar', '', 'Salazar', 'Diet Immarie', 'A.', '', 3702),
('PS', 'dlarin', '', 'Larin', 'Dionne Marga', 'M.', '', 4205),
('SPjS', 'earquiza', '', 'Arquiza', 'Eileene', 'M.', '', 3540),
('SPS', 'eclagman', '', 'Lagman', 'Eivette Carmen', 'P.', '', 3635),
('LS', 'ecruz', '', 'Cruz', 'Estrella', 'A.', '', 3276),
('NTSSS', 'eestrada', '', 'Estrada', 'Edwin', 'S.', '', 4675),
('TSSS', 'ejibarra', '', 'Ibarra', 'Edcel John', 'A.', '', 3563),
('PubS', 'elineses', '', 'Lineses', 'Emerson Kim', 'J.', '', 3392),
('PubS', 'esajul', '', 'Sajul', 'Elsa', 'A.', '', 3546),
('AS2', 'fapon', '', 'Apon', 'Fe', 'T.', '', 3736),
('AFSD-OH', 'fjmalayao', '', 'Malayao', 'Francis Jake', 'P.', '', 3179),
('CPS', 'gyuson', '', 'Yuson', 'Gladys', 'M.', '', 3783),
('FMS', 'hagtina', '', 'Agtina', 'Hazel', 'P.', '', 0),
('GSS', 'htornilla', '', 'Tornilla', 'Hope', 'B.', '', 3933),
('IPELS', 'jabacasmas', '', 'Bacasmas', 'Jill Angeli', 'V.', '', 3744),
('ODG-PROPER', 'jamador', '', 'Amador III', 'Julio', 'S.', '', 4942),
('ODG-PROPER', 'jccarloc', '', 'Carlos', 'Jean Clarisse', 'T.', '', 3509),
('GSS', 'jceñidoza', '', 'Ceñidoza', 'Joselia', 'P.', '', 3064),
('APS', 'jcredo', '', 'Credo', 'Jeremie', 'P.', '', 4778),
('NTSSS', 'jdmirasol', '', 'Mirasol', 'Jeremy Dexter', 'B.', '', 3563),
('TES', 'jjdomagsang', '', 'Domagsang', 'Janyn Joie', 'P.', '', 4668),
('IOS', 'jjkatigbak', '', 'Katigbak', 'Jovito Jose', 'P.', '', 3752),
('AS1', 'jjvillaruel', '', 'Villaruel', 'Jemimah Joanne', 'C.', '', 4778),
('PTPS', 'jmorales', '', 'Morales', 'Janice', 'C.', '', 4957),
('TES', 'jpascua', '', 'Pascua', 'Joan', 'C.', '', 3136),
('IAS', 'jquitlong', '', 'Quitlong', 'Judy', 'T.', '', 4951),
('LPS', 'jrdevera', '', 'De Vera', 'Jaydelyn Reise', 'D.', '', 3376),
('APS', 'jteodoro', '', 'Teodoro', 'Joycee', 'A.', '', 3751),
('PubS', 'kaargete', '', 'Argete', 'Kaye Anne', 'P.', '', 3546),
('IPELS', 'keconcepcion', '', 'Concepcion', 'Ken Edward', 'H.', '', 3744),
('IPELS', 'klheceta', '', 'Heceta', 'Kate Lynn', 'M.', '', 3744),
('SPjS', 'kmpabeliña', '', 'Pabeliña', 'Karla Mae', 'G.', '', 4492),
('AS1', 'laadducul', '', 'Adducul', 'Lloyd Alexander', 'M.', '', 3563),
('APS', 'ldmerced', '', 'Merced', 'Louie Dane', 'C.', '', 4084),
('GSS', 'ldomino', '', 'Domino', 'Leonardo', 'B.', '', 3064),
('PTPS', 'ljjamilano', '', 'Jamilano', 'Liezhel Joy', 'S.', '', 3182),
('CPS', 'llcuevas', '', 'Cuevas', 'Leona Liza', 'S.', '', 3192),
('LS', 'lmaquinad', '', 'Maquinad', 'Luzviminda', 'P.', '', 3276),
('FMS', 'ltañeca', '', 'Tañeca', 'Luisa', 'F.', '', 4747),
('FMS', 'mafaigao', '', 'Faigao', 'Mary Ann', 'M.', '', 3180),
('FMS', 'maguilar', '', 'Aguilar', 'Minda', 'F.', '', 3766),
('CIRSS-OH', 'marllayador', '', 'Maria Anna Rowena Luz', 'Layador', 'G.', '', 3101),
('AS2', 'mediaz', '', 'Diaz', 'Mark Edel', 'V.', '', 3536),
('ScPS', 'meperez', '', 'Perez', 'Ma. Esmeralda', 'S.', '', 3964),
('LPS', 'mfbolos', '', 'Bolos', 'Ma. Foederis', 'Z.', '', 3885),
('TSSS', 'mfquintos', '', 'Quintos', 'Mary Fides', 'A.', '', 3751),
('FMS', 'mgonzales', '', 'Gonzales', 'Merjorie', 'T.', '', 3745),
('SPS', 'mkbmojica', '', 'Mojica', 'Maria Kristina Bernadette', 'C.', '', 4071),
('CPRSD-OH', 'mliwanag', '', 'Liwanag', 'Marichu', 'C.', '', 3802),
('AFSD-OH', 'mlnethercott', '', 'Nethercott', 'Maria Lourdes', 'P.', '', 4562),
('LS', 'mlquindoza', '', 'Quindoza', 'Mark Lawrence', 'R.', '', 4264),
('LS', 'mlverdejo', '', 'Verdejo', 'Maria Luz', 'S.', '', 3214),
('CIRSS-OH', 'mmlicayan', '', 'Licayan', 'Ma. Maureen', 'P.', '', 4355),
('CPS', 'motaclan', '', 'Taclan', 'Ma. Olive', 'E.', '', 3192),
('PubS', 'mvvelasco', '', 'Velasco', 'Monina Victoria', 'S.', '', 3181),
('LPS', 'nmangahis', '', 'Mangahis', 'Nona', 'C.', '', 4943),
('ScPS', 'nmiranda', '', 'Miranda', 'Nerissa', 'A.', '', 4771),
('PS', 'ocorrales', '', 'Corrales', 'Orlando', 'S.', '', 4586),
('NTSSS', 'parcon', '', 'Parcon', 'RJ Marco Lorenzo', 'C.', '', 4675),
('SPS', 'ppnagpala', '', 'Nagpala II', 'Prince Philip', 'N.', '', 3378),
('ScPS', 'racosta', '', 'Acosta', 'Rhoda', 'R.', '', 4637),
('IOS', 'rcasaclang', '', 'Casaclang', 'Rowell', 'G.', '', 4084),
('CIRSS-OH', 'rjoaquin', '', 'Joaquin', 'Rhodora', 'M.', '', 3617),
('LS', 'rrefuerzo', '', 'Refuerzo', 'Rosario', 'S.', '', 4283),
('PS', 'rrivera', '', 'Rivera', 'Rachelle', 'C.', '', 4794),
('GSS', 'rsotto', '', 'Sotto', 'Richard', 'J.', '', 3064),
('ILU', 'rvillanueva', '', 'Villanueva', 'Rowena', 'C.', '', 3740),
('ScPS', 'sdiaz', '', 'Diaz', 'Sonia', 'D.', '', 4014),
('CPS', 'smcustodio', '', 'Custodio', 'Sarah Mariz', 'P.', '', 3172),
('AS2', 'ugalace', '', 'Galace', 'Uriel', 'N.', '', 3536),
('AS1', 'vajvalero', '', 'Valero', 'Valerie Anne Jill', 'I.', '', 3736),
('GSS', 'vgruta', '', 'Gruta', 'Vivencio', 'C.', '', 4586),
('FMS', 'vmanipis', '', 'Manipis', 'Veronica', 'V.', '', 4057),
('IOS', 'vsalazar', '', 'Salazar', 'Virgemarie', 'A.', '', 3752),
('PS', 'ylasala', '', 'Lasala', 'Ma. Yvette Vanessa', 'C.', '', 3176),
('GSS', 'zbautista', '', 'Bautista', 'Zenaida', 'C.', '', 3937);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `user_id` varchar(20) NOT NULL,
  `sec_id` varchar(10) NOT NULL,
  `file_id` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `sec_id` (`sec_id`),
  ADD KEY `sec_id_2` (`sec_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `sec_id` (`sec_id`),
  ADD KEY `file_id` (`file_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`div_id`) REFERENCES `division` (`div_id`);

--
-- Constraints for table `user_log`
--
ALTER TABLE `user_log`
  ADD CONSTRAINT `user_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `user_log_ibfk_2` FOREIGN KEY (`file_id`) REFERENCES `file` (`file_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
