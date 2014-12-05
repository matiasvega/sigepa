-- MySQL dump 10.13  Distrib 5.5.35, for Linux (i686)
--
-- Host: localhost    Database: sigepa
-- ------------------------------------------------------
-- Server version	5.5.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,446),(2,1,NULL,NULL,'Antecedentes',2,13),(3,2,NULL,NULL,'add',3,4),(4,2,NULL,NULL,'delete',5,6),(5,2,NULL,NULL,'edit',7,8),(6,2,NULL,NULL,'index',9,10),(7,2,NULL,NULL,'view',11,12),(8,1,NULL,NULL,'Composiciones',14,25),(9,8,NULL,NULL,'add',15,16),(10,8,NULL,NULL,'delete',17,18),(11,8,NULL,NULL,'edit',19,20),(12,8,NULL,NULL,'index',21,22),(13,8,NULL,NULL,'view',23,24),(14,1,NULL,NULL,'Consultas',26,37),(15,14,NULL,NULL,'add',27,28),(16,14,NULL,NULL,'delete',29,30),(17,14,NULL,NULL,'edit',31,32),(18,14,NULL,NULL,'index',33,34),(19,14,NULL,NULL,'view',35,36),(20,1,NULL,NULL,'Contraindicaciones',38,49),(21,20,NULL,NULL,'add',39,40),(22,20,NULL,NULL,'delete',41,42),(23,20,NULL,NULL,'edit',43,44),(24,20,NULL,NULL,'index',45,46),(25,20,NULL,NULL,'view',47,48),(26,1,NULL,NULL,'Diagnosticos',50,63),(27,26,NULL,NULL,'add',51,52),(28,26,NULL,NULL,'delete',53,54),(29,26,NULL,NULL,'edit',55,56),(30,26,NULL,NULL,'index',57,58),(31,26,NULL,NULL,'indexPaciente',59,60),(32,26,NULL,NULL,'view',61,62),(33,1,NULL,NULL,'Drogas',64,75),(34,33,NULL,NULL,'add',65,66),(35,33,NULL,NULL,'delete',67,68),(36,33,NULL,NULL,'edit',69,70),(37,33,NULL,NULL,'index',71,72),(38,33,NULL,NULL,'view',73,74),(39,1,NULL,NULL,'Especialidades',76,87),(40,39,NULL,NULL,'add',77,78),(41,39,NULL,NULL,'delete',79,80),(42,39,NULL,NULL,'edit',81,82),(43,39,NULL,NULL,'index',83,84),(44,39,NULL,NULL,'view',85,86),(45,1,NULL,NULL,'EspecialidadesProfesionales',88,99),(46,45,NULL,NULL,'add',89,90),(47,45,NULL,NULL,'delete',91,92),(48,45,NULL,NULL,'edit',93,94),(49,45,NULL,NULL,'index',95,96),(50,45,NULL,NULL,'view',97,98),(51,1,NULL,NULL,'EstudiosComplementarios',100,113),(52,51,NULL,NULL,'add',101,102),(53,51,NULL,NULL,'delete',103,104),(54,51,NULL,NULL,'edit',105,106),(55,51,NULL,NULL,'index',107,108),(56,51,NULL,NULL,'public_index',109,110),(57,51,NULL,NULL,'view',111,112),(58,1,NULL,NULL,'EstudiosComplementariosPacientes',114,129),(59,58,NULL,NULL,'add',115,116),(60,58,NULL,NULL,'delete',117,118),(61,58,NULL,NULL,'download',119,120),(62,58,NULL,NULL,'edit',121,122),(63,58,NULL,NULL,'index',123,124),(64,58,NULL,NULL,'indexPaciente',125,126),(65,58,NULL,NULL,'view',127,128),(66,1,NULL,NULL,'ExamenesFisicos',130,143),(67,66,NULL,NULL,'add',131,132),(68,66,NULL,NULL,'delete',133,134),(69,66,NULL,NULL,'edit',135,136),(70,66,NULL,NULL,'index',137,138),(71,66,NULL,NULL,'indexPaciente',139,140),(72,66,NULL,NULL,'view',141,142),(73,1,NULL,NULL,'Groups',144,155),(74,73,NULL,NULL,'add',145,146),(75,73,NULL,NULL,'delete',147,148),(76,73,NULL,NULL,'edit',149,150),(77,73,NULL,NULL,'index',151,152),(78,73,NULL,NULL,'view',153,154),(79,1,NULL,NULL,'GruposTerapeuticos',156,167),(80,79,NULL,NULL,'add',157,158),(81,79,NULL,NULL,'delete',159,160),(82,79,NULL,NULL,'edit',161,162),(83,79,NULL,NULL,'index',163,164),(84,79,NULL,NULL,'view',165,166),(85,1,NULL,NULL,'Medicaciones',168,179),(86,85,NULL,NULL,'add',169,170),(87,85,NULL,NULL,'delete',171,172),(88,85,NULL,NULL,'edit',173,174),(89,85,NULL,NULL,'index',175,176),(90,85,NULL,NULL,'view',177,178),(91,1,NULL,NULL,'Medicamentos',180,193),(92,91,NULL,NULL,'add',181,182),(93,91,NULL,NULL,'delete',183,184),(94,91,NULL,NULL,'edit',185,186),(95,91,NULL,NULL,'index',187,188),(96,91,NULL,NULL,'view',189,190),(97,91,NULL,NULL,'viewMedicamento',191,192),(98,1,NULL,NULL,'ObrasSociales',194,205),(99,98,NULL,NULL,'add',195,196),(100,98,NULL,NULL,'delete',197,198),(101,98,NULL,NULL,'edit',199,200),(102,98,NULL,NULL,'index',201,202),(103,98,NULL,NULL,'view',203,204),(104,1,NULL,NULL,'ObrasSocialesPacientes',206,219),(105,104,NULL,NULL,'add',207,208),(106,104,NULL,NULL,'delete',209,210),(107,104,NULL,NULL,'edit',211,212),(108,104,NULL,NULL,'index',213,214),(109,104,NULL,NULL,'indexPaciente',215,216),(110,104,NULL,NULL,'view',217,218),(111,1,NULL,NULL,'ObrasSocialesProfesionales',220,231),(112,111,NULL,NULL,'add',221,222),(113,111,NULL,NULL,'delete',223,224),(114,111,NULL,NULL,'edit',225,226),(115,111,NULL,NULL,'index',227,228),(116,111,NULL,NULL,'view',229,230),(117,1,NULL,NULL,'Pacientes',232,253),(118,117,NULL,NULL,'add',233,234),(119,117,NULL,NULL,'antecedentes',235,236),(120,117,NULL,NULL,'delete',237,238),(121,117,NULL,NULL,'edit',239,240),(122,117,NULL,NULL,'ficha',241,242),(123,117,NULL,NULL,'index',243,244),(124,117,NULL,NULL,'search',245,246),(125,117,NULL,NULL,'view',247,248),(126,1,NULL,NULL,'PacientesPatologias',254,265),(127,126,NULL,NULL,'add',255,256),(128,126,NULL,NULL,'delete',257,258),(129,126,NULL,NULL,'edit',259,260),(130,126,NULL,NULL,'index',261,262),(131,126,NULL,NULL,'view',263,264),(132,1,NULL,NULL,'Pages',266,269),(133,132,NULL,NULL,'display',267,268),(134,1,NULL,NULL,'Patologias',270,281),(135,134,NULL,NULL,'add',271,272),(136,134,NULL,NULL,'delete',273,274),(137,134,NULL,NULL,'edit',275,276),(138,134,NULL,NULL,'index',277,278),(139,134,NULL,NULL,'view',279,280),(140,1,NULL,NULL,'PatologiasTratamientos',282,293),(141,140,NULL,NULL,'add',283,284),(142,140,NULL,NULL,'delete',285,286),(143,140,NULL,NULL,'edit',287,288),(144,140,NULL,NULL,'index',289,290),(145,140,NULL,NULL,'view',291,292),(146,1,NULL,NULL,'Profesionales',294,305),(147,146,NULL,NULL,'add',295,296),(148,146,NULL,NULL,'delete',297,298),(149,146,NULL,NULL,'edit',299,300),(150,146,NULL,NULL,'index',301,302),(151,146,NULL,NULL,'view',303,304),(152,1,NULL,NULL,'Recetas',306,321),(153,152,NULL,NULL,'add',307,308),(154,152,NULL,NULL,'delete',309,310),(155,152,NULL,NULL,'edit',311,312),(156,152,NULL,NULL,'getMedicamentos',313,314),(157,152,NULL,NULL,'index',315,316),(158,152,NULL,NULL,'indexPaciente',317,318),(159,152,NULL,NULL,'view',319,320),(160,1,NULL,NULL,'Tratamientos',322,333),(161,160,NULL,NULL,'add',323,324),(162,160,NULL,NULL,'delete',325,326),(163,160,NULL,NULL,'edit',327,328),(164,160,NULL,NULL,'index',329,330),(165,160,NULL,NULL,'view',331,332),(166,1,NULL,NULL,'Turnos',334,347),(167,166,NULL,NULL,'add',335,336),(168,166,NULL,NULL,'agendaDiaria',337,338),(169,166,NULL,NULL,'delete',339,340),(170,166,NULL,NULL,'edit',341,342),(171,166,NULL,NULL,'index',343,344),(172,166,NULL,NULL,'view',345,346),(173,1,NULL,NULL,'Users',348,365),(174,173,NULL,NULL,'add',349,350),(175,173,NULL,NULL,'delete',351,352),(176,173,NULL,NULL,'edit',353,354),(177,173,NULL,NULL,'index',355,356),(178,173,NULL,NULL,'login',357,358),(179,173,NULL,NULL,'logout',359,360),(180,173,NULL,NULL,'view',361,362),(181,1,NULL,NULL,'Acl',366,421),(182,181,NULL,NULL,'Acl',367,372),(183,182,NULL,NULL,'admin_index',368,369),(184,182,NULL,NULL,'index',370,371),(185,181,NULL,NULL,'Acos',373,384),(186,185,NULL,NULL,'admin_build_acl',374,375),(187,185,NULL,NULL,'admin_empty_acos',376,377),(188,185,NULL,NULL,'admin_index',378,379),(189,185,NULL,NULL,'admin_prune_acos',380,381),(190,185,NULL,NULL,'admin_synchronize',382,383),(191,181,NULL,NULL,'Aros',385,420),(192,191,NULL,NULL,'admin_ajax_role_permissions',386,387),(193,191,NULL,NULL,'admin_check',388,389),(194,191,NULL,NULL,'admin_clear_user_specific_permissions',390,391),(195,191,NULL,NULL,'admin_deny_all_controllers',392,393),(196,191,NULL,NULL,'admin_deny_role_permission',394,395),(197,191,NULL,NULL,'admin_deny_user_permission',396,397),(198,191,NULL,NULL,'admin_empty_permissions',398,399),(199,191,NULL,NULL,'admin_get_role_controller_permission',400,401),(200,191,NULL,NULL,'admin_get_user_controller_permission',402,403),(201,191,NULL,NULL,'admin_grant_all_controllers',404,405),(202,191,NULL,NULL,'admin_grant_role_permission',406,407),(203,191,NULL,NULL,'admin_grant_user_permission',408,409),(204,191,NULL,NULL,'admin_index',410,411),(205,191,NULL,NULL,'admin_role_permissions',412,413),(206,191,NULL,NULL,'admin_update_user_role',414,415),(207,191,NULL,NULL,'admin_user_permissions',416,417),(208,191,NULL,NULL,'admin_users',418,419),(209,1,NULL,NULL,'BoostCake',422,431),(210,209,NULL,NULL,'BoostCake',423,430),(211,210,NULL,NULL,'bootstrap2',424,425),(212,210,NULL,NULL,'bootstrap3',426,427),(213,210,NULL,NULL,'index',428,429),(214,117,NULL,NULL,'addExpress',249,250),(215,173,NULL,NULL,'options',363,364),(216,117,NULL,NULL,'testpdf',251,252),(217,1,NULL,NULL,'Backups',432,445),(218,217,NULL,NULL,'add',433,434),(219,217,NULL,NULL,'delete',435,436),(220,217,NULL,NULL,'edit',437,438),(221,217,NULL,NULL,'index',439,440),(222,217,NULL,NULL,'view',441,442),(223,217,NULL,NULL,'download',443,444);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group',1,NULL,1,4),(2,1,'User',1,NULL,2,3),(3,NULL,'Group',2,NULL,5,8),(7,3,'User',4,NULL,6,7);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,1,'1','1','1','1'),(2,3,178,'1','1','1','1'),(3,3,123,'1','1','1','1'),(4,3,179,'1','1','1','1'),(5,3,119,'1','1','1','1'),(6,3,120,'1','1','1','1'),(7,3,121,'1','1','1','1'),(8,3,122,'1','1','1','1'),(9,3,118,'1','1','1','1'),(10,3,168,'1','1','1','1'),(11,3,171,'1','1','1','1'),(12,3,102,'1','1','1','1'),(13,3,214,'1','1','1','1'),(14,3,101,'1','1','1','1'),(15,3,100,'1','1','1','1'),(16,3,99,'1','1','1','1'),(17,3,215,'1','1','1','1'),(18,3,109,'1','1','1','1'),(19,3,108,'1','1','1','1'),(20,3,1,'-1','-1','-1','-1'),(21,3,31,'1','1','1','1'),(22,3,29,'1','1','1','1'),(23,3,27,'1','1','1','1'),(24,3,59,'1','1','1','1'),(25,3,61,'1','1','1','1'),(26,3,62,'1','1','1','1'),(27,3,64,'1','1','1','1'),(28,3,67,'1','1','1','1'),(29,3,71,'1','1','1','1'),(30,3,153,'1','1','1','1'),(31,3,156,'1','1','1','1'),(32,3,158,'1','1','1','1'),(33,3,167,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `backups`
--

DROP TABLE IF EXISTS `backups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `backups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `backups`
--

LOCK TABLES `backups` WRITE;
/*!40000 ALTER TABLE `backups` DISABLE KEYS */;
INSERT INTO `backups` VALUES (13,'Full backup SIGEPA 19-11-2014','2014-11-19','backupSigepa_19_11_2014_02_29_44.sql','2014-11-19 02:29:44','2014-11-19 02:29:44'),(14,'Full backup SIGEPA 03-12-2014','2014-12-03','backupSigepa_03_12_2014_04_28_15.sql','2014-12-03 16:28:15','2014-12-03 16:28:15');
/*!40000 ALTER TABLE `backups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centros_atencion`
--

DROP TABLE IF EXISTS `centros_atencion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `centros_atencion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centros_atencion`
--

LOCK TABLES `centros_atencion` WRITE;
/*!40000 ALTER TABLE `centros_atencion` DISABLE KEYS */;
/*!40000 ALTER TABLE `centros_atencion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `composiciones`
--

DROP TABLE IF EXISTS `composiciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `composiciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `composiciones`
--

LOCK TABLES `composiciones` WRITE;
/*!40000 ALTER TABLE `composiciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `composiciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contraindicaciones`
--

DROP TABLE IF EXISTS `contraindicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contraindicaciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contraindicacion` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contraindicaciones`
--

LOCK TABLES `contraindicaciones` WRITE;
/*!40000 ALTER TABLE `contraindicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `contraindicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diagnosticos`
--

DROP TABLE IF EXISTS `diagnosticos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diagnosticos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `diagnostico_presuntivo` text NOT NULL,
  `diagnostico_definitivo` text,
  `pacientes_id` int(11) unsigned DEFAULT NULL,
  `patologias_id` int(11) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_atenciones_pacientes_pacientes1_idx` (`pacientes_id`),
  KEY `fk_diagnosticos_patologias1_idx` (`patologias_id`),
  CONSTRAINT `fk_atenciones_pacientes_pacientes1` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  CONSTRAINT `fk_diagnosticos_patologias1` FOREIGN KEY (`patologias_id`) REFERENCES `patologias` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diagnosticos`
--

LOCK TABLES `diagnosticos` WRITE;
/*!40000 ALTER TABLE `diagnosticos` DISABLE KEYS */;
INSERT INTO `diagnosticos` VALUES (1,'lolo',NULL,2,NULL,'2014-10-23 21:29:32','2014-10-23 21:29:32');
/*!40000 ALTER TABLE `diagnosticos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drogas`
--

DROP TABLE IF EXISTS `drogas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drogas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `contraindicaciones` text,
  `precauciones` text,
  `interacciones` text,
  `embarazo_lactancia` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drogas`
--

LOCK TABLES `drogas` WRITE;
/*!40000 ALTER TABLE `drogas` DISABLE KEYS */;
/*!40000 ALTER TABLE `drogas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especialidades`
--

DROP TABLE IF EXISTS `especialidades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `especialidades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialidades`
--

LOCK TABLES `especialidades` WRITE;
/*!40000 ALTER TABLE `especialidades` DISABLE KEYS */;
INSERT INTO `especialidades` VALUES (1,'Alergista','','2014-09-16 21:04:57','2014-09-16 21:04:57');
/*!40000 ALTER TABLE `especialidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `especialidades_profesionales`
--

DROP TABLE IF EXISTS `especialidades_profesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `especialidades_profesionales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `especialidades_id` int(10) unsigned NOT NULL,
  `profesionales_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_especialidades_has_profesionales_profesionales1_idx` (`profesionales_id`),
  KEY `fk_especialidades_has_profesionales_especialidades1_idx` (`especialidades_id`),
  CONSTRAINT `fk_especialidades_has_profesionales_especialidades1` FOREIGN KEY (`especialidades_id`) REFERENCES `especialidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_especialidades_has_profesionales_profesionales1` FOREIGN KEY (`profesionales_id`) REFERENCES `profesionales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `especialidades_profesionales`
--

LOCK TABLES `especialidades_profesionales` WRITE;
/*!40000 ALTER TABLE `especialidades_profesionales` DISABLE KEYS */;
INSERT INTO `especialidades_profesionales` VALUES (1,1,1,NULL,NULL);
/*!40000 ALTER TABLE `especialidades_profesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudios_complementarios`
--

DROP TABLE IF EXISTS `estudios_complementarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudios_complementarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudios_complementarios`
--

LOCK TABLES `estudios_complementarios` WRITE;
/*!40000 ALTER TABLE `estudios_complementarios` DISABLE KEYS */;
INSERT INTO `estudios_complementarios` VALUES (1,'Radiografia de Totax','lalalala','2014-09-13 21:13:08','2014-09-13 21:13:08');
/*!40000 ALTER TABLE `estudios_complementarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudios_complementarios_pacientes`
--

DROP TABLE IF EXISTS `estudios_complementarios_pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudios_complementarios_pacientes` (
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
  KEY `fk_pacientes_has_estudios_complementarios_pacientes1_idx` (`pacientes_id`),
  CONSTRAINT `fk_pacientes_has_estudios_complementarios_pacientes1` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudios_complementarios_pacientes`
--

LOCK TABLES `estudios_complementarios_pacientes` WRITE;
/*!40000 ALTER TABLE `estudios_complementarios_pacientes` DISABLE KEYS */;
INSERT INTO `estudios_complementarios_pacientes` VALUES (2,2,1,NULL,NULL,'2014-12-04',NULL,'2014-12-04 17:14:05','2014-12-04 17:14:05');
/*!40000 ALTER TABLE `estudios_complementarios_pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `examenes_fisicos`
--

DROP TABLE IF EXISTS `examenes_fisicos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `examenes_fisicos` (
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
  KEY `fk_examenes_fisicos_pacientes1_idx` (`pacientes_id`),
  CONSTRAINT `fk_examenes_fisicos_pacientes1` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `examenes_fisicos`
--

LOCK TABLES `examenes_fisicos` WRITE;
/*!40000 ALTER TABLE `examenes_fisicos` DISABLE KEYS */;
INSERT INTO `examenes_fisicos` VALUES (1,'4','','','','','','','','',2,'2014-10-23 21:29:21','2014-10-23 21:29:21');
/*!40000 ALTER TABLE `examenes_fisicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (1,'admin','2014-04-30 13:37:58','2014-04-30 13:37:58'),(2,'profesionales','2014-05-01 14:57:33','2014-05-02 16:01:36');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupos_terapeuticos`
--

DROP TABLE IF EXISTS `grupos_terapeuticos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupos_terapeuticos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupos_terapeuticos`
--

LOCK TABLES `grupos_terapeuticos` WRITE;
/*!40000 ALTER TABLE `grupos_terapeuticos` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupos_terapeuticos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horarios`
--

DROP TABLE IF EXISTS `horarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horarios` (
  `centros_atencion_id` int(10) unsigned NOT NULL,
  `profesionales_id` int(10) unsigned NOT NULL,
  `dia` varchar(45) DEFAULT NULL,
  `horaDesde` varchar(45) DEFAULT NULL,
  `horaHasta` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`centros_atencion_id`,`profesionales_id`),
  KEY `fk_centros_atencion_has_profesionales_profesionales1_idx` (`profesionales_id`),
  KEY `fk_centros_atencion_has_profesionales_centros_atencion1_idx` (`centros_atencion_id`),
  CONSTRAINT `fk_centros_atencion_has_profesionales_centros_atencion1` FOREIGN KEY (`centros_atencion_id`) REFERENCES `centros_atencion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_centros_atencion_has_profesionales_profesionales1` FOREIGN KEY (`profesionales_id`) REFERENCES `profesionales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horarios`
--

LOCK TABLES `horarios` WRITE;
/*!40000 ALTER TABLE `horarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `horarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `licencias`
--

DROP TABLE IF EXISTS `licencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `licencias` (
  `centros_atencion_id` int(10) unsigned NOT NULL,
  `profesionales_id` int(10) unsigned NOT NULL,
  `fechaDesde` datetime NOT NULL,
  `fechaHasta` datetime NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`centros_atencion_id`,`profesionales_id`),
  KEY `fk_centros_atencion_has_profesionales1_profesionales1_idx` (`profesionales_id`),
  KEY `fk_centros_atencion_has_profesionales1_centros_atencion1_idx` (`centros_atencion_id`),
  CONSTRAINT `fk_centros_atencion_has_profesionales1_centros_atencion1` FOREIGN KEY (`centros_atencion_id`) REFERENCES `centros_atencion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_centros_atencion_has_profesionales1_profesionales1` FOREIGN KEY (`profesionales_id`) REFERENCES `profesionales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `licencias`
--

LOCK TABLES `licencias` WRITE;
/*!40000 ALTER TABLE `licencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `licencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicaciones_tratamientos`
--

DROP TABLE IF EXISTS `medicaciones_tratamientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medicaciones_tratamientos` (
  `id` int(10) unsigned zerofill NOT NULL,
  `tratamientos_id` int(11) unsigned NOT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_medicaciones_has_tratamientos_tratamientos1_idx` (`tratamientos_id`),
  CONSTRAINT `fk_medicaciones_has_tratamientos_tratamientos1` FOREIGN KEY (`tratamientos_id`) REFERENCES `tratamientos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicaciones_tratamientos`
--

LOCK TABLES `medicaciones_tratamientos` WRITE;
/*!40000 ALTER TABLE `medicaciones_tratamientos` DISABLE KEYS */;
/*!40000 ALTER TABLE `medicaciones_tratamientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicamentos`
--

DROP TABLE IF EXISTS `medicamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medicamentos` (
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
  KEY `fk_medicamentos_composiciones1_idx` (`composiciones_id`),
  CONSTRAINT `fk_medicamentos_composiciones1` FOREIGN KEY (`composiciones_id`) REFERENCES `composiciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_medicamentos_contraindicaciones1` FOREIGN KEY (`contraindicaciones_id`) REFERENCES `contraindicaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_medicamentos_drogas1` FOREIGN KEY (`drogas_id`) REFERENCES `drogas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_medicamentos_grupos_terapeuticos1` FOREIGN KEY (`grupos_terapeuticos_id`) REFERENCES `grupos_terapeuticos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicamentos`
--

LOCK TABLES `medicamentos` WRITE;
/*!40000 ALTER TABLE `medicamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `medicamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obras_sociales`
--

DROP TABLE IF EXISTS `obras_sociales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obras_sociales` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obras_sociales`
--

LOCK TABLES `obras_sociales` WRITE;
/*!40000 ALTER TABLE `obras_sociales` DISABLE KEYS */;
INSERT INTO `obras_sociales` VALUES (1,'OSDE','','2014-09-16 21:05:18','2014-09-16 21:05:18'),(2,'swiss medical','','2014-11-15 21:22:58','2014-11-15 21:22:58');
/*!40000 ALTER TABLE `obras_sociales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obras_sociales_pacientes`
--

DROP TABLE IF EXISTS `obras_sociales_pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obras_sociales_pacientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pacientes_id` int(11) unsigned NOT NULL,
  `obras_sociales_id` int(11) unsigned NOT NULL,
  `nro_afiliado` varchar(45) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pacientes_has_obras_sociales_obras_sociales1_idx` (`obras_sociales_id`),
  KEY `fk_pacientes_has_obras_sociales_pacientes_idx` (`pacientes_id`),
  CONSTRAINT `fk_pacientes_has_obras_sociales_obras_sociales1` FOREIGN KEY (`obras_sociales_id`) REFERENCES `obras_sociales` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_pacientes_has_obras_sociales_pacientes` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obras_sociales_pacientes`
--

LOCK TABLES `obras_sociales_pacientes` WRITE;
/*!40000 ALTER TABLE `obras_sociales_pacientes` DISABLE KEYS */;
INSERT INTO `obras_sociales_pacientes` VALUES (1,2,1,NULL,NULL,NULL),(2,1,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `obras_sociales_pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `obras_sociales_profesionales`
--

DROP TABLE IF EXISTS `obras_sociales_profesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `obras_sociales_profesionales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `obras_sociales_id` int(10) unsigned NOT NULL,
  `profesionales_id` int(10) unsigned NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_obras_sociales_has_profesionales_profesionales1_idx` (`profesionales_id`),
  KEY `fk_obras_sociales_has_profesionales_obras_sociales1_idx` (`obras_sociales_id`),
  CONSTRAINT `fk_obras_sociales_has_profesionales_obras_sociales1` FOREIGN KEY (`obras_sociales_id`) REFERENCES `obras_sociales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_obras_sociales_has_profesionales_profesionales1` FOREIGN KEY (`profesionales_id`) REFERENCES `profesionales` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `obras_sociales_profesionales`
--

LOCK TABLES `obras_sociales_profesionales` WRITE;
/*!40000 ALTER TABLE `obras_sociales_profesionales` DISABLE KEYS */;
INSERT INTO `obras_sociales_profesionales` VALUES (1,1,1,NULL,NULL);
/*!40000 ALTER TABLE `obras_sociales_profesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pacientes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `dni` int(11) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` VALUES (1,31220356,'Matias Ariel','Vega Tapia','M','1984-11-10','Juan B Justo 2514','154006845','','2014-12-04',NULL,NULL,NULL,NULL,NULL,'2014-09-13 21:07:30','2014-12-04 19:13:53'),(2,0,'Carla Fabiana','CastaÃ±o LiÃ±eiro','F','1984-11-05','','154613465','','2014-12-04','aaaaaaaaaaaaaaaaaaaaaa','','','','','2014-09-13 21:09:34','2014-12-04 17:14:06');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patologias`
--

DROP TABLE IF EXISTS `patologias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patologias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patologias`
--

LOCK TABLES `patologias` WRITE;
/*!40000 ALTER TABLE `patologias` DISABLE KEYS */;
/*!40000 ALTER TABLE `patologias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patologias_tratamientos`
--

DROP TABLE IF EXISTS `patologias_tratamientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patologias_tratamientos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tratamientos_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_patologias_has_tratamientos_tratamientos1_idx` (`tratamientos_id`),
  CONSTRAINT `fk_patologias_has_tratamientos_tratamientos1` FOREIGN KEY (`tratamientos_id`) REFERENCES `tratamientos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patologias_tratamientos`
--

LOCK TABLES `patologias_tratamientos` WRITE;
/*!40000 ALTER TABLE `patologias_tratamientos` DISABLE KEYS */;
/*!40000 ALTER TABLE `patologias_tratamientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesionales`
--

DROP TABLE IF EXISTS `profesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesionales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `matricula` varchar(45) NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesionales`
--

LOCK TABLES `profesionales` WRITE;
/*!40000 ALTER TABLE `profesionales` DISABLE KEYS */;
INSERT INTO `profesionales` VALUES (1,'Nora','Zanollo','0000000001','2014-09-16','2014-09-16 21:05:45','2014-09-16 21:05:45');
/*!40000 ALTER TABLE `profesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recetas`
--

DROP TABLE IF EXISTS `recetas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recetas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pacientes_id` int(11) unsigned DEFAULT NULL,
  `medicamentos_id` int(11) unsigned DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`id`),
  KEY `fk_recetas_pacientes1_idx` (`pacientes_id`),
  KEY `fk_recetas_medicamentos1_idx` (`medicamentos_id`),
  CONSTRAINT `fk_recetas_medicamentos1` FOREIGN KEY (`medicamentos_id`) REFERENCES `medicamentos` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION,
  CONSTRAINT `fk_recetas_pacientes1` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recetas`
--

LOCK TABLES `recetas` WRITE;
/*!40000 ALTER TABLE `recetas` DISABLE KEYS */;
/*!40000 ALTER TABLE `recetas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp_composiciones`
--

DROP TABLE IF EXISTS `tmp_composiciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmp_composiciones` (
  `idcompo` text NOT NULL,
  `descComposicion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_composiciones`
--

LOCK TABLES `tmp_composiciones` WRITE;
/*!40000 ALTER TABLE `tmp_composiciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmp_composiciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp_contraindicaciones`
--

DROP TABLE IF EXISTS `tmp_contraindicaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmp_contraindicaciones` (
  `idcontra` text NOT NULL,
  `descContraindicacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_contraindicaciones`
--

LOCK TABLES `tmp_contraindicaciones` WRITE;
/*!40000 ALTER TABLE `tmp_contraindicaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmp_contraindicaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp_drogas`
--

DROP TABLE IF EXISTS `tmp_drogas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmp_drogas` (
  `Id_PrincipioA` text NOT NULL,
  `Principio_Activo` text NOT NULL,
  `Contraindicaciones` text NOT NULL,
  `Precauciones` text NOT NULL,
  `Interacciones` text NOT NULL,
  `Embarazo_Lactancia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_drogas`
--

LOCK TABLES `tmp_drogas` WRITE;
/*!40000 ALTER TABLE `tmp_drogas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmp_drogas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp_grupos_terapeuticos`
--

DROP TABLE IF EXISTS `tmp_grupos_terapeuticos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmp_grupos_terapeuticos` (
  `Id_GrupoT` text NOT NULL,
  `GrupoTerapeutico` text NOT NULL,
  `Nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_grupos_terapeuticos`
--

LOCK TABLES `tmp_grupos_terapeuticos` WRITE;
/*!40000 ALTER TABLE `tmp_grupos_terapeuticos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmp_grupos_terapeuticos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp_medicamentos`
--

DROP TABLE IF EXISTS `tmp_medicamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tmp_medicamentos` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_medicamentos`
--

LOCK TABLES `tmp_medicamentos` WRITE;
/*!40000 ALTER TABLE `tmp_medicamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tmp_medicamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tratamientos`
--

DROP TABLE IF EXISTS `tratamientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tratamientos` (
  `id` int(11) unsigned NOT NULL,
  `fechaInicio` date DEFAULT NULL,
  `fechaFin` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tratamientos`
--

LOCK TABLES `tratamientos` WRITE;
/*!40000 ALTER TABLE `tratamientos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tratamientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `turnos`
--

DROP TABLE IF EXISTS `turnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `turnos` (
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `turnos`
--

LOCK TABLES `turnos` WRITE;
/*!40000 ALTER TABLE `turnos` DISABLE KEYS */;
INSERT INTO `turnos` VALUES (3,'2014-09-16 09:06:00',1,1,1,'2014-09-16 21:06:14','2014-09-16 21:06:14'),(4,'2014-09-17 11:30:00',1,1,1,'2014-09-17 13:29:04','2014-09-17 13:29:04'),(5,'2014-09-17 01:35:00',2,1,1,'2014-09-17 13:36:07','2014-09-17 13:36:07'),(6,'2014-09-17 01:37:00',2,1,1,'2014-09-17 13:37:52','2014-09-17 13:37:52'),(7,'2014-09-17 14:30:00',2,1,1,'2014-09-17 13:38:25','2014-09-17 13:38:25'),(8,'2014-10-10 09:30:00',1,1,1,'2014-11-09 14:52:08','2014-11-09 14:52:08'),(9,'2014-10-10 09:30:00',1,1,1,'2014-11-09 14:52:39','2014-11-09 14:52:39'),(10,'2014-10-17 21:00:00',1,1,1,'2014-11-17 23:54:47','2014-11-17 23:54:47'),(11,'2014-10-18 09:30:00',1,1,1,'2014-11-17 23:55:43','2014-11-17 23:55:43'),(12,'2014-10-18 11:56:00',1,1,1,'2014-11-17 23:56:59','2014-11-17 23:56:59'),(13,'2014-10-19 09:30:00',1,1,1,'2014-11-19 02:32:48','2014-11-19 02:32:48'),(14,'2014-10-19 10:00:00',1,1,1,'2014-11-19 02:42:54','2014-11-19 02:42:54'),(15,'2014-11-19 11:00:00',1,1,1,'2014-11-19 02:44:39','2014-11-19 02:44:39'),(16,'2014-11-19 12:00:00',2,1,1,'2014-11-19 02:45:03','2014-11-19 02:45:03'),(17,'2014-11-19 11:30:00',1,1,1,'2014-11-19 02:45:27','2014-11-19 02:45:27'),(18,'2014-12-03 18:05:00',1,1,1,'2014-12-03 18:46:07','2014-12-04 14:25:36'),(23,'2014-12-04 15:00:00',1,1,1,'2014-12-04 17:05:19','2014-12-04 17:05:19'),(25,'2014-12-04 15:45:00',1,1,1,'2014-12-04 17:06:03','2014-12-04 17:06:03'),(26,'2014-12-04 18:05:00',2,1,1,'2014-12-04 17:06:30','2014-12-04 17:17:19');
/*!40000 ALTER TABLE `turnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'mvega','24f88ab1f0823c206c1848fbed59863509edcb09',1,'2014-04-30 13:49:18','2014-09-13 20:53:59'),(4,'dra','24f88ab1f0823c206c1848fbed59863509edcb09',2,'2014-05-02 22:12:26','2014-09-13 21:00:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-04 22:40:53
