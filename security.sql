--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=216 ;


--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;


--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`),
  KEY `aro_id` (`aro_id`),
  KEY `aco_id` (`aco_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;



--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;


--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;


-- INSERT IGNORE INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
-- (1, 'mvega', 'bdda6e154f2aa7c9a5c9e067d007339565d3a0b3', 1, '2014-04-30 13:49:18', '2014-05-11 14:11:05'),
-- (4, 'dra', '4113593dbc8a3ea141a1ef36f95d3fbe0a6b4ffb', 2, '2014-05-02 22:12:26', '2014-05-11 14:23:09');

--
-- Dumping data for table `groups`
--

-- INSERT IGNORE INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
-- (1, 'admin', '2014-04-30 13:37:58', '2014-04-30 13:37:58'),
-- (2, 'profesionales', '2014-05-01 14:57:33', '2014-05-02 16:01:36');

DROP TABLE IF EXISTS `tmp_composiciones`;
CREATE TABLE IF NOT EXISTS `tmp_composiciones` (
  `idcompo` text NOT NULL,
  `descComposicion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `tmp_medicamentos` (
  `Id_NComercial` text NOT NULL,
  `Nombre_Comercial` text NOT NULL,
  `Principio_Activo` text NOT NULL,
  `Laboratorio` text NOT NULL,
  `Grupo_Terapeutico` text NOT NULL,
  `Composicion` text NOT NULL,
  `Farmacologia` text NOT NULL,
  `Farmacodinamia` text NOT NULL,
  `Farmacocinetica` text NOT NULL,
  `ReaccionesAdversas` text NOT NULL,
  `Indicaciones` text NOT NULL,
  `Dosificacion` text NOT NULL,
  `Sobredosificacion` text NOT NULL,
  `Presentaciones` text NOT NULL,
  `Conservacion` text NOT NULL,
  `Advertencias` text NOT NULL,
  `EmbarazoyLactancia` text NOT NULL,
  `AccionTerapeutica` text NOT NULL,
  `Asoc2` text NOT NULL,
  `Contraindicaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `tmp_drogas` (
  `Id_PrincipioA` text NOT NULL,
  `Principio_Activo` text NOT NULL,
  `Contraindicaciones` text NOT NULL,
  `Precauciones` text NOT NULL,
  `Interacciones` text NOT NULL,
  `Embarazo_Lactancia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `tmp_contraindicaciones` (
  `idcontra` text NOT NULL,
  `descContraindicacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `tmp_grupos_terapeuticos` (
  `Id_GrupoT` text NOT NULL,
  `GrupoTerapeutico` text NOT NULL,
  `Nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
