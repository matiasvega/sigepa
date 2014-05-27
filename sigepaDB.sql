-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 27, 2014 at 09:47 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sigepa`
--

-- --------------------------------------------------------

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
  PRIMARY KEY (`id`),
  KEY `idx_acos_lft_rght` (`lft`,`rght`),
  KEY `idx_acos_alias` (`alias`),
  KEY `idx_acos_model_foreign_key` (`model`,`foreign_key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=216 ;

-- --------------------------------------------------------

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
  PRIMARY KEY (`id`),
  KEY `idx_aros_lft_rght` (`lft`,`rght`),
  KEY `idx_aros_alias` (`alias`),
  KEY `idx_aros_model_foreign_key` (`model`,`foreign_key`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

-- --------------------------------------------------------

--
-- Table structure for table `centros_atencion`
--

DROP TABLE IF EXISTS `centros_atencion`;
CREATE TABLE IF NOT EXISTS `centros_atencion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `composiciones`
--

DROP TABLE IF EXISTS `composiciones`;
CREATE TABLE IF NOT EXISTS `composiciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7818 ;

-- --------------------------------------------------------

--
-- Table structure for table `contraindicaciones`
--

DROP TABLE IF EXISTS `contraindicaciones`;
CREATE TABLE IF NOT EXISTS `contraindicaciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contraindicacion` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7818 ;

-- --------------------------------------------------------

--
-- Table structure for table `diagnosticos`
--

DROP TABLE IF EXISTS `diagnosticos`;
CREATE TABLE IF NOT EXISTS `diagnosticos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `diagnostico_presuntivo` text NOT NULL,
  `diagnostico_definitivo` text,
  `pacientes_id` int(11) unsigned DEFAULT NULL,
  `patologias_id` int(11) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_atenciones_pacientes_pacientes1_idx` (`pacientes_id`),
  KEY `fk_diagnosticos_patologias1_idx` (`patologias_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `drogas`
--

DROP TABLE IF EXISTS `drogas`;
CREATE TABLE IF NOT EXISTS `drogas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `contraindicaciones` text,
  `precauciones` text,
  `interacciones` text,
  `embarazo_lactancia` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2486 ;

-- --------------------------------------------------------

--
-- Table structure for table `especialidades`
--

DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE IF NOT EXISTS `especialidades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `especialidades_profesionales`
--

DROP TABLE IF EXISTS `especialidades_profesionales`;
CREATE TABLE IF NOT EXISTS `especialidades_profesionales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `especialidades_id` int(10) unsigned NOT NULL,
  `profesionales_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_especialidades_has_profesionales_profesionales1_idx` (`profesionales_id`),
  KEY `fk_especialidades_has_profesionales_especialidades1_idx` (`especialidades_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `estudios_complementarios`
--

DROP TABLE IF EXISTS `estudios_complementarios`;
CREATE TABLE IF NOT EXISTS `estudios_complementarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=391 ;

-- --------------------------------------------------------

--
-- Table structure for table `estudios_complementarios_pacientes`
--

DROP TABLE IF EXISTS `estudios_complementarios_pacientes`;
CREATE TABLE IF NOT EXISTS `estudios_complementarios_pacientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pacientes_id` int(11) unsigned NOT NULL,
  `estudios_complementarios_id` int(11) unsigned NOT NULL,
  `resultado` text,
  `adjunto` varchar(45) DEFAULT NULL,
  `fechaSolicitado` date DEFAULT NULL,
  `fechaRealizado` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pacientes_has_estudios_complementarios_estudios_compleme_idx` (`estudios_complementarios_id`),
  KEY `fk_pacientes_has_estudios_complementarios_pacientes1_idx` (`pacientes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `examenes_fisicos`
--

DROP TABLE IF EXISTS `examenes_fisicos`;
CREATE TABLE IF NOT EXISTS `examenes_fisicos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `estatura` varchar(45) DEFAULT NULL,
  `peso` varchar(45) DEFAULT NULL,
  `piel` text,
  `mucosas` text,
  `ap_respiratorio` text,
  `TA` text,
  `FC` text,
  `FR` text,
  `oximetria_pulso` text,
  `pacientes_id` int(11) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_examenes_fisicos_pacientes1_idx` (`pacientes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

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

-- --------------------------------------------------------

--
-- Table structure for table `grupos_terapeuticos`
--

DROP TABLE IF EXISTS `grupos_terapeuticos`;
CREATE TABLE IF NOT EXISTS `grupos_terapeuticos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=204 ;

-- --------------------------------------------------------

--
-- Table structure for table `horarios`
--

DROP TABLE IF EXISTS `horarios`;
CREATE TABLE IF NOT EXISTS `horarios` (
  `centros_atencion_id` int(10) unsigned NOT NULL,
  `profesionales_id` int(10) unsigned NOT NULL,
  `dia` varchar(45) DEFAULT NULL,
  `horaDesde` varchar(45) DEFAULT NULL,
  `horaHasta` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`centros_atencion_id`,`profesionales_id`),
  KEY `fk_centros_atencion_has_profesionales_profesionales1_idx` (`profesionales_id`),
  KEY `fk_centros_atencion_has_profesionales_centros_atencion1_idx` (`centros_atencion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `licencias`
--

DROP TABLE IF EXISTS `licencias`;
CREATE TABLE IF NOT EXISTS `licencias` (
  `centros_atencion_id` int(10) unsigned NOT NULL,
  `profesionales_id` int(10) unsigned NOT NULL,
  `fechaDesde` datetime NOT NULL,
  `fechaHasta` datetime NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`centros_atencion_id`,`profesionales_id`),
  KEY `fk_centros_atencion_has_profesionales1_profesionales1_idx` (`profesionales_id`),
  KEY `fk_centros_atencion_has_profesionales1_centros_atencion1_idx` (`centros_atencion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medicaciones_tratamientos`
--

DROP TABLE IF EXISTS `medicaciones_tratamientos`;
CREATE TABLE IF NOT EXISTS `medicaciones_tratamientos` (
  `id` int(10) unsigned zerofill NOT NULL,
  `tratamientos_id` int(11) unsigned NOT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medicaciones_has_tratamientos_tratamientos1_idx` (`tratamientos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medicamentos`
--

DROP TABLE IF EXISTS `medicamentos`;
CREATE TABLE IF NOT EXISTS `medicamentos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_comercial` varchar(45) NOT NULL,
  `descripcion` text,
  `farmacologia` text,
  `farmacodinamia` text,
  `farmacocinetica` text,
  `reacciones_adversas` text,
  `indicaciones` text,
  `dosificacion` text,
  `sobredosificacion` text,
  `presentacion` text,
  `conservacion` text,
  `advertencias` text,
  `embarazo_lactancia` text,
  `accion_terapeutica` text,
  `drogas_id` int(10) unsigned NOT NULL,
  `contraindicaciones_id` int(10) unsigned NOT NULL,
  `grupos_terapeuticos_id` int(10) unsigned NOT NULL,
  `composiciones_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medicamentos_drogas1_idx` (`drogas_id`),
  KEY `fk_medicamentos_contraindicaciones1_idx` (`contraindicaciones_id`),
  KEY `fk_medicamentos_grupos_terapeuticos1_idx` (`grupos_terapeuticos_id`),
  KEY `fk_medicamentos_composiciones1_idx` (`composiciones_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7573 ;

-- --------------------------------------------------------

--
-- Table structure for table `obras_sociales`
--

DROP TABLE IF EXISTS `obras_sociales`;
CREATE TABLE IF NOT EXISTS `obras_sociales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `obras_sociales_pacientes`
--

DROP TABLE IF EXISTS `obras_sociales_pacientes`;
CREATE TABLE IF NOT EXISTS `obras_sociales_pacientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pacientes_id` int(11) unsigned NOT NULL,
  `obras_sociales_id` int(11) unsigned NOT NULL,
  `nro_afiliado` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pacientes_has_obras_sociales_obras_sociales1_idx` (`obras_sociales_id`),
  KEY `fk_pacientes_has_obras_sociales_pacientes_idx` (`pacientes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `obras_sociales_profesionales`
--

DROP TABLE IF EXISTS `obras_sociales_profesionales`;
CREATE TABLE IF NOT EXISTS `obras_sociales_profesionales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `obras_sociales_id` int(10) unsigned NOT NULL,
  `profesionales_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_obras_sociales_has_profesionales_profesionales1_idx` (`profesionales_id`),
  KEY `fk_obras_sociales_has_profesionales_obras_sociales1_idx` (`obras_sociales_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE IF NOT EXISTS `pacientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dni` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefonoFijo` varchar(45) DEFAULT NULL,
  `telefonoMovil` varchar(45) DEFAULT NULL,
  `fechaUltimaConsulta` date DEFAULT NULL,
  `atiopia` text,
  `habitos` text,
  `medicacion_base` text,
  `familiares` text,
  `otros` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- Table structure for table `patologias`
--

DROP TABLE IF EXISTS `patologias`;
CREATE TABLE IF NOT EXISTS `patologias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=266 ;

-- --------------------------------------------------------

--
-- Table structure for table `patologias_tratamientos`
--

DROP TABLE IF EXISTS `patologias_tratamientos`;
CREATE TABLE IF NOT EXISTS `patologias_tratamientos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tratamientos_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_patologias_has_tratamientos_tratamientos1_idx` (`tratamientos_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profesionales`
--

DROP TABLE IF EXISTS `profesionales`;
CREATE TABLE IF NOT EXISTS `profesionales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `matricula` varchar(45) NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `recetas`
--

DROP TABLE IF EXISTS `recetas`;
CREATE TABLE IF NOT EXISTS `recetas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pacientes_id` int(11) unsigned DEFAULT NULL,
  `medicamentos_id` int(11) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`),
  KEY `fk_recetas_pacientes1_idx` (`pacientes_id`),
  KEY `fk_recetas_medicamentos1_idx` (`medicamentos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_composiciones`
--

DROP TABLE IF EXISTS `tmp_composiciones`;
CREATE TABLE IF NOT EXISTS `tmp_composiciones` (
  `idcompo` text NOT NULL,
  `descComposicion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_contraindicaciones`
--

DROP TABLE IF EXISTS `tmp_contraindicaciones`;
CREATE TABLE IF NOT EXISTS `tmp_contraindicaciones` (
  `idcontra` text NOT NULL,
  `descContraindicacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_drogas`
--

DROP TABLE IF EXISTS `tmp_drogas`;
CREATE TABLE IF NOT EXISTS `tmp_drogas` (
  `Id_PrincipioA` text NOT NULL,
  `Principio_Activo` text NOT NULL,
  `Contraindicaciones` text NOT NULL,
  `Precauciones` text NOT NULL,
  `Interacciones` text NOT NULL,
  `Embarazo_Lactancia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_grupos_terapeuticos`
--

DROP TABLE IF EXISTS `tmp_grupos_terapeuticos`;
CREATE TABLE IF NOT EXISTS `tmp_grupos_terapeuticos` (
  `Id_GrupoT` text NOT NULL,
  `GrupoTerapeutico` text NOT NULL,
  `Nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_medicamentos`
--

DROP TABLE IF EXISTS `tmp_medicamentos`;
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

-- --------------------------------------------------------

--
-- Table structure for table `tratamientos`
--

DROP TABLE IF EXISTS `tratamientos`;
CREATE TABLE IF NOT EXISTS `tratamientos` (
  `id` int(11) unsigned NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `turnos`
--

DROP TABLE IF EXISTS `turnos`;
CREATE TABLE IF NOT EXISTS `turnos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fechaHora` datetime NOT NULL,
  `pacientes_id` int(11) unsigned NOT NULL,
  `profesionales_id` int(10) unsigned NOT NULL,
  `especialidades_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_turnos_pacientes1_idx` (`pacientes_id`),
  KEY `fk_turnos_profesionales1_idx` (`profesionales_id`),
  KEY `fk_turnos_especialidades1_idx` (`especialidades_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

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
-- Constraints for dumped tables
--

--
-- Constraints for table `diagnosticos`
--
ALTER TABLE `diagnosticos`
  ADD CONSTRAINT `fk_atenciones_pacientes_pacientes1` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_diagnosticos_patologias1` FOREIGN KEY (`patologias_id`) REFERENCES `patologias` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `especialidades_profesionales`
--
ALTER TABLE `especialidades_profesionales`
  ADD CONSTRAINT `fk_especialidades_has_profesionales_especialidades1` FOREIGN KEY (`especialidades_id`) REFERENCES `especialidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_especialidades_has_profesionales_profesionales1` FOREIGN KEY (`profesionales_id`) REFERENCES `profesionales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `estudios_complementarios_pacientes`
--
ALTER TABLE `estudios_complementarios_pacientes`
  ADD CONSTRAINT `fk_pacientes_has_estudios_complementarios_estudios_complement1` FOREIGN KEY (`estudios_complementarios_id`) REFERENCES `estudios_complementarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pacientes_has_estudios_complementarios_pacientes1` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `examenes_fisicos`
--
ALTER TABLE `examenes_fisicos`
  ADD CONSTRAINT `fk_examenes_fisicos_pacientes1` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `fk_centros_atencion_has_profesionales_centros_atencion1` FOREIGN KEY (`centros_atencion_id`) REFERENCES `centros_atencion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_centros_atencion_has_profesionales_profesionales1` FOREIGN KEY (`profesionales_id`) REFERENCES `profesionales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `licencias`
--
ALTER TABLE `licencias`
  ADD CONSTRAINT `fk_centros_atencion_has_profesionales1_centros_atencion1` FOREIGN KEY (`centros_atencion_id`) REFERENCES `centros_atencion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_centros_atencion_has_profesionales1_profesionales1` FOREIGN KEY (`profesionales_id`) REFERENCES `profesionales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medicaciones_tratamientos`
--
ALTER TABLE `medicaciones_tratamientos`
  ADD CONSTRAINT `fk_medicaciones_has_tratamientos_tratamientos1` FOREIGN KEY (`tratamientos_id`) REFERENCES `tratamientos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medicamentos`
--
ALTER TABLE `medicamentos`
  ADD CONSTRAINT `fk_medicamentos_composiciones1` FOREIGN KEY (`composiciones_id`) REFERENCES `composiciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medicamentos_contraindicaciones1` FOREIGN KEY (`contraindicaciones_id`) REFERENCES `contraindicaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medicamentos_drogas1` FOREIGN KEY (`drogas_id`) REFERENCES `drogas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_medicamentos_grupos_terapeuticos1` FOREIGN KEY (`grupos_terapeuticos_id`) REFERENCES `grupos_terapeuticos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `obras_sociales_pacientes`
--
ALTER TABLE `obras_sociales_pacientes`
  ADD CONSTRAINT `fk_pacientes_has_obras_sociales_obras_sociales1` FOREIGN KEY (`obras_sociales_id`) REFERENCES `obras_sociales` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pacientes_has_obras_sociales_pacientes` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `obras_sociales_profesionales`
--
ALTER TABLE `obras_sociales_profesionales`
  ADD CONSTRAINT `fk_obras_sociales_has_profesionales_obras_sociales1` FOREIGN KEY (`obras_sociales_id`) REFERENCES `obras_sociales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_obras_sociales_has_profesionales_profesionales1` FOREIGN KEY (`profesionales_id`) REFERENCES `profesionales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patologias_tratamientos`
--
ALTER TABLE `patologias_tratamientos`
  ADD CONSTRAINT `fk_patologias_has_tratamientos_tratamientos1` FOREIGN KEY (`tratamientos_id`) REFERENCES `tratamientos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recetas`
--
ALTER TABLE `recetas`
  ADD CONSTRAINT `fk_recetas_medicamentos1` FOREIGN KEY (`medicamentos_id`) REFERENCES `medicamentos` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_recetas_pacientes1` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Constraints for table `turnos`
--
ALTER TABLE `turnos`
  ADD CONSTRAINT `fk_turnos_especialidades1` FOREIGN KEY (`especialidades_id`) REFERENCES `especialidades` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_turnos_pacientes1` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_turnos_profesionales1` FOREIGN KEY (`profesionales_id`) REFERENCES `profesionales` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
