CREATE TABLE `admin` (
  `user_id` varchar(20) NOT NULL,
  `user_passwd` varchar(20) NOT NULL,
  `sec_id` varchar(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` int(11) NOT NULL,
  `SECTION_ID` int(2) NOT NULL,
  `ODG_ID` int(2) NOT NULL DEFAULT '0',
  `CIRSS_ID` int(2) NOT NULL DEFAULT '0',
  `CPRSD_ID` int(2) NOT NULL DEFAULT '0',
  `AFSD_ID` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

CREATE TABLE `division` (
  `div_id` varchar(10) NOT NULL,
  `div_name` varchar(100) NOT NULL,
  PRIMARY KEY (`div_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

CREATE TABLE `file` (
  `file_id` int(10) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_type` varchar(5) NOT NULL,
  `file_size` int(10) NOT NULL,
  `file_path` varchar(200) NOT NULL,
  `version` int(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  PRIMARY KEY (`file_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

CREATE TABLE `section` (
  `div_id` varchar(10) NOT NULL,
  `sec_id` varchar(10) NOT NULL,
  `sec_name` varchar(100) NOT NULL,
  PRIMARY KEY (`sec_id`),
  KEY `div_id` (`div_id`),
  CONSTRAINT `section_ibfk_1` FOREIGN KEY (`div_id`) REFERENCES `division` (`div_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

CREATE TABLE `user` (
  `sec_id` varchar(10) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `user_passwd` varchar(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact` int(11) NOT NULL,
  `SECTION_ID` int(2) NOT NULL,
  `ODG_ID` int(2) NOT NULL DEFAULT '0',
  `CIRSS_ID` int(2) NOT NULL DEFAULT '0',
  `CPRSD_ID` int(2) NOT NULL DEFAULT '0',
  `AFSD_ID` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  KEY `sec_id` (`sec_id`),
  KEY `sec_id_2` (`sec_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

CREATE TABLE `user_log` (
  `user_id` varchar(20) NOT NULL,
  `sec_id` varchar(10) NOT NULL,
  `file_id` int(10) NOT NULL,
  `date` date NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `sec_id` (`sec_id`),
  KEY `file_id` (`file_id`),
  CONSTRAINT `user_log_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  CONSTRAINT `user_log_ibfk_2` FOREIGN KEY (`file_id`) REFERENCES `file` (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 
 
INSERT INTO `admin` ( `user_id`, `user_passwd`, `sec_id`, `lname`, `fname`, `mname`, `email`, `contact`, `SECTION_ID`, `ODG_ID`, `CIRSS_ID`, `CPRSD_ID`, `AFSD_ID`) VALUES 
('admin', 'admin', '', '', '', '', '', '3061', '1', '1', '1', '1', '1');  



INSERT INTO `division` ( `div_id`, `div_name`) VALUES 
('AFSD', 'ADMINISTRATIVE AND FINANCIAL SERVICES DIVISION'), 
('CIRSS', 'CENTER FOR INTERNATIONAL RELATIONS AND STRATEGIC STUDIES'), 
('CPRSD', 'CARLOS P. ROMULO SCHOOL OF DIPLOMACY'), 
('ODG', 'OFFICE OF THE DIRECTOR-GENERAL');  



 



INSERT INTO `section` ( `div_id`, `sec_id`, `sec_name`) VALUES 
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



INSERT INTO `user` ( `sec_id`, `user_id`, `user_passwd`, `lname`, `fname`, `mname`, `email`, `contact`, `SECTION_ID`, `ODG_ID`, `CIRSS_ID`, `CPRSD_ID`, `AFSD_ID`) VALUES 
('GSS', '', '', 'Tornilla', 'Hope', 'C.', '', '3933', '0', '0', '0', '0', '0'), 
('MIS', 'abueser', '', 'Bueser Jr.', 'Armando', 'R.', '', '3061', '0', '0', '0', '0', '0'), 
('PTPS', 'aestrella', '', 'Estrella', 'Arniel', 'D.', '', '3799', '0', '0', '0', '0', '0'), 
('AS2', 'akmolina', '', 'Molina', 'Andrea Kristine', 'G.', '', '4492', '0', '0', '0', '0', '0'), 
('MIS', 'amarasigan', '', 'Marasigan', 'Andres Astro', 'Y.', '', '4211', '0', '0', '0', '0', '0'), 
('GSS', 'apadilla', '', 'Padilla', 'Allan', 'V.', '', '3186', '0', '0', '0', '0', '0'), 
('ODG-PROPER', 'aretumban', '', 'Retumban', 'Amaliarita', 'H.', '', '3780', '0', '0', '0', '0', '0'), 
('GSS', 'arodriguez', '', 'Rodriguez', 'Angel', 'G.', '', '3064', '0', '0', '0', '0', '0'), 
('CPS', 'azaldivar', '', 'Zaldivar', 'Amarie', 'C.', '', '4626', '0', '0', '0', '0', '0'), 
('MIS', 'bbasal', '', 'Basal', 'Bienvenido', 'S.', '', '3061', '0', '0', '0', '0', '0'), 
('CPRSD-OH', 'bcordero', '', 'Cordero', 'Bernadette', 'E.', '', '3952', '0', '0', '0', '0', '0'), 
('ODG-PROPER', 'cclaro', '', 'Cristobal', 'Claro', 'S.', '', '4981', '0', '0', '0', '0', '0'), 
('TES', 'cjusto', 'aaa', 'Justo', 'Carlos', 'Q.', '', '4098', '0', '0', '0', '0', '0'), 
('GSS', 'clegazpi', '', 'Legazpi', 'Carmelito', 'E.', '', '3064', '0', '0', '0', '0', '0'), 
('AFSD-OH', 'cmarasigan', '', 'Marasigan', 'Carmelita', 'S.', '', '4799', '0', '0', '0', '0', '0'), 
('CIRSS-OH', 'crguillemer', '', 'Guillemer', 'Connie Rose', 'C.', '', '3762', '0', '0', '0', '0', '0'), 
('CPS', 'dafortunado', '', 'Fortunado', 'Dulce Amor', 'N.', '', '3783', '0', '0', '0', '0', '0'), 
('AS1', 'destrada', '', 'Estrada', 'Darlene', 'V.', '', '3563', '0', '0', '0', '0', '0'), 
('AS2', 'disalazar', '', 'Salazar', 'Diet Immarie', 'A.', '', '3702', '0', '0', '0', '0', '0'), 
('PS', 'dlarin', '', 'Larin', 'Dionne Marga', 'M.', '', '4205', '0', '0', '0', '0', '0'), 
('SPjS', 'earquiza', '', 'Arquiza', 'Eileene', 'M.', '', '3540', '0', '0', '0', '0', '0'), 
('SPS', 'eclagman', '', 'Lagman', 'Eivette Carmen', 'P.', '', '3635', '0', '0', '0', '0', '0'), 
('LS', 'ecruz', '', 'Cruz', 'Estrella', 'A.', '', '3276', '0', '0', '0', '0', '0'), 
('NTSSS', 'eestrada', '', 'Estrada', 'Edwin', 'S.', '', '4675', '0', '0', '0', '0', '0'), 
('TSSS', 'ejibarra', '', 'Ibarra', 'Edcel John', 'A.', '', '3563', '0', '0', '0', '0', '0'), 
('PubS', 'elineses', '', 'Lineses', 'Emerson Kim', 'J.', '', '3392', '0', '0', '0', '0', '0'), 
('PubS', 'esajul', '', 'Sajul', 'Elsa', 'A.', '', '3546', '0', '0', '0', '0', '0'), 
('AS2', 'fapon', '', 'Apon', 'Fe', 'T.', '', '3736', '0', '0', '0', '0', '0'), 
('AFSD-OH', 'fjmalayao', '', 'Malayao', 'Francis Jake', 'P.', '', '3179', '0', '0', '0', '0', '0'), 
('CPS', 'gyuson', '', 'Yuson', 'Gladys', 'M.', '', '3783', '0', '0', '0', '0', '0'), 
('FMS', 'hagtina', '', 'Agtina', 'Hazel', 'P.', '', '0', '0', '0', '0', '0', '0'), 
('GSS', 'htornilla', '', 'Tornilla', 'Hope', 'B.', '', '3933', '0', '0', '0', '0', '0'), 
('IPELS', 'jabacasmas', '', 'Bacasmas', 'Jill Angeli', 'V.', '', '3744', '0', '0', '0', '0', '0'), 
('ODG-PROPER', 'jamador', '', 'Amador III', 'Julio', 'S.', '', '4942', '0', '0', '0', '0', '0'), 
('ODG-PROPER', 'jccarloc', '', 'Carlos', 'Jean Clarisse', 'T.', '', '3509', '0', '0', '0', '0', '0'), 
('GSS', 'jceñidoza', '', 'Ceñidoza', 'Joselia', 'P.', '', '3064', '0', '0', '0', '0', '0'), 
('APS', 'jcredo', '', 'Credo', 'Jeremie', 'P.', '', '4778', '0', '0', '0', '0', '0'), 
('NTSSS', 'jdmirasol', '', 'Mirasol', 'Jeremy Dexter', 'B.', '', '3563', '0', '0', '0', '0', '0'), 
('TES', 'jjdomagsang', '', 'Domagsang', 'Janyn Joie', 'P.', '', '4668', '0', '0', '0', '0', '0'), 
('IOS', 'jjkatigbak', '', 'Katigbak', 'Jovito Jose', 'P.', '', '3752', '0', '0', '0', '0', '0'), 
('AS1', 'jjvillaruel', '', 'Villaruel', 'Jemimah Joanne', 'C.', '', '4778', '0', '0', '0', '0', '0'), 
('PTPS', 'jmorales', '', 'Morales', 'Janice', 'C.', '', '4957', '0', '0', '0', '0', '0'), 
('TES', 'jpascua', '', 'Pascua', 'Joan', 'C.', '', '3136', '0', '0', '0', '0', '0'), 
('IAS', 'jquitlong', '', 'Quitlong', 'Judy', 'T.', '', '4951', '0', '0', '0', '0', '0'), 
('LPS', 'jrdevera', '', 'De Vera', 'Jaydelyn Reise', 'D.', '', '3376', '0', '0', '0', '0', '0'), 
('APS', 'jteodoro', '', 'Teodoro', 'Joycee', 'A.', '', '3751', '0', '0', '0', '0', '0'), 
('PubS', 'kaargete', '', 'Argete', 'Kaye Anne', 'P.', '', '3546', '0', '0', '0', '0', '0'), 
('IPELS', 'keconcepcion', '', 'Concepcion', 'Ken Edward', 'H.', '', '3744', '0', '0', '0', '0', '0'), 
('IPELS', 'klheceta', '', 'Heceta', 'Kate Lynn', 'M.', '', '3744', '0', '0', '0', '0', '0'), 
('SPjS', 'kmpabeliña', '', 'Pabeliña', 'Karla Mae', 'G.', '', '4492', '0', '0', '0', '0', '0'), 
('AS1', 'laadducul', '', 'Adducul', 'Lloyd Alexander', 'M.', '', '3563', '0', '0', '0', '0', '0'), 
('APS', 'ldmerced', '', 'Merced', 'Louie Dane', 'C.', '', '4084', '0', '0', '0', '0', '0'), 
('GSS', 'ldomino', '', 'Domino', 'Leonardo', 'B.', '', '3064', '0', '0', '0', '0', '0'), 
('PTPS', 'ljjamilano', '', 'Jamilano', 'Liezhel Joy', 'S.', '', '3182', '0', '0', '0', '0', '0'), 
('CPS', 'llcuevas', '', 'Cuevas', 'Leona Liza', 'S.', '', '3192', '0', '0', '0', '0', '0'), 
('LS', 'lmaquinad', '', 'Maquinad', 'Luzviminda', 'P.', '', '3276', '0', '0', '0', '0', '0'), 
('FMS', 'ltañeca', '', 'Tañeca', 'Luisa', 'F.', '', '4747', '0', '0', '0', '0', '0'), 
('FMS', 'mafaigao', '', 'Faigao', 'Mary Ann', 'M.', '', '3180', '0', '0', '0', '0', '0'), 
('FMS', 'maguilar', '', 'Aguilar', 'Minda', 'F.', '', '3766', '0', '0', '0', '0', '0'), 
('CIRSS-OH', 'marllayador', '', 'Maria Anna Rowena Luz', 'Layador', 'G.', '', '3101', '0', '0', '0', '0', '0'), 
('AS2', 'mediaz', '', 'Diaz', 'Mark Edel', 'V.', '', '3536', '0', '0', '0', '0', '0'), 
('ScPS', 'meperez', '', 'Perez', 'Ma. Esmeralda', 'S.', '', '3964', '0', '0', '0', '0', '0'), 
('LPS', 'mfbolos', '', 'Bolos', 'Ma. Foederis', 'Z.', '', '3885', '0', '0', '0', '0', '0'), 
('TSSS', 'mfquintos', '', 'Quintos', 'Mary Fides', 'A.', '', '3751', '0', '0', '0', '0', '0'), 
('FMS', 'mgonzales', '', 'Gonzales', 'Merjorie', 'T.', '', '3745', '0', '0', '0', '0', '0'), 
('SPS', 'mkbmojica', '', 'Mojica', 'Maria Kristina Bernadette', 'C.', '', '4071', '0', '0', '0', '0', '0'), 
('CPRSD-OH', 'mliwanag', '', 'Liwanag', 'Marichu', 'C.', '', '3802', '0', '0', '0', '0', '0'), 
('AFSD-OH', 'mlnethercott', '', 'Nethercott', 'Maria Lourdes', 'P.', '', '4562', '0', '0', '0', '0', '0'), 
('LS', 'mlquindoza', '', 'Quindoza', 'Mark Lawrence', 'R.', '', '4264', '0', '0', '0', '0', '0'), 
('LS', 'mlverdejo', '', 'Verdejo', 'Maria Luz', 'S.', '', '3214', '0', '0', '0', '0', '0'), 
('CIRSS-OH', 'mmlicayan', '', 'Licayan', 'Ma. Maureen', 'P.', '', '4355', '0', '0', '0', '0', '0'), 
('CPS', 'motaclan', '', 'Taclan', 'Ma. Olive', 'E.', '', '3192', '0', '0', '0', '0', '0'), 
('PubS', 'mvvelasco', '', 'Velasco', 'Monina Victoria', 'S.', '', '3181', '0', '0', '0', '0', '0'), 
('LPS', 'nmangahis', '', 'Mangahis', 'Nona', 'C.', '', '4943', '0', '0', '0', '0', '0'), 
('ScPS', 'nmiranda', '', 'Miranda', 'Nerissa', 'A.', '', '4771', '0', '0', '0', '0', '0'), 
('PS', 'ocorrales', '', 'Corrales', 'Orlando', 'S.', '', '4586', '0', '0', '0', '0', '0'), 
('NTSSS', 'parcon', '', 'Parcon', 'RJ Marco Lorenzo', 'C.', '', '4675', '0', '0', '0', '0', '0'), 
('SPS', 'ppnagpala', '', 'Nagpala II', 'Prince Philip', 'N.', '', '3378', '0', '0', '0', '0', '0'), 
('ScPS', 'racosta', '', 'Acosta', 'Rhoda', 'R.', '', '4637', '0', '0', '0', '0', '0'), 
('IOS', 'rcasaclang', '', 'Casaclang', 'Rowell', 'G.', '', '4084', '0', '0', '0', '0', '0'), 
('CIRSS-OH', 'rjoaquin', '', 'Joaquin', 'Rhodora', 'M.', '', '3617', '0', '0', '0', '0', '0'), 
('LS', 'rrefuerzo', '', 'Refuerzo', 'Rosario', 'S.', '', '4283', '0', '0', '0', '0', '0'), 
('PS', 'rrivera', '', 'Rivera', 'Rachelle', 'C.', '', '4794', '0', '0', '0', '0', '0'), 
('GSS', 'rsotto', '', 'Sotto', 'Richard', 'J.', '', '3064', '0', '0', '0', '0', '0'), 
('ILU', 'rvillanueva', '', 'Villanueva', 'Rowena', 'C.', '', '3740', '0', '0', '0', '0', '0'), 
('ScPS', 'sdiaz', '', 'Diaz', 'Sonia', 'D.', '', '4014', '0', '0', '0', '0', '0'), 
('CPS', 'smcustodio', '', 'Custodio', 'Sarah Mariz', 'P.', '', '3172', '0', '0', '0', '0', '0'), 
('AS2', 'ugalace', '', 'Galace', 'Uriel', 'N.', '', '3536', '0', '0', '0', '0', '0'), 
('', 'user', 'user', '', '', '', '', '0', '0', '0', '0', '0', '0'), 
('AS1', 'vajvalero', '', 'Valero', 'Valerie Anne Jill', 'I.', '', '3736', '0', '0', '0', '0', '0'), 
('GSS', 'vgruta', '', 'Gruta', 'Vivencio', 'C.', '', '4586', '0', '0', '0', '0', '0'), 
('FMS', 'vmanipis', '', 'Manipis', 'Veronica', 'V.', '', '4057', '0', '0', '0', '0', '0'), 
('IOS', 'vsalazar', '', 'Salazar', 'Virgemarie', 'A.', '', '3752', '0', '0', '0', '0', '0'), 
('PS', 'ylasala', '', 'Lasala', 'Ma. Yvette Vanessa', 'C.', '', '3176', '0', '0', '0', '0', '0'), 
('GSS', 'zbautista', '', 'Bautista', 'Zenaida', 'C.', '', '3937', '0', '0', '0', '0', '0');  



