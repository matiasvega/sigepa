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

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, NULL, NULL, 'controllers', 1, 430),
(2, 1, NULL, NULL, 'Antecedentes', 2, 13),
(3, 2, NULL, NULL, 'add', 3, 4),
(4, 2, NULL, NULL, 'delete', 5, 6),
(5, 2, NULL, NULL, 'edit', 7, 8),
(6, 2, NULL, NULL, 'index', 9, 10),
(7, 2, NULL, NULL, 'view', 11, 12),
(8, 1, NULL, NULL, 'Composiciones', 14, 25),
(9, 8, NULL, NULL, 'add', 15, 16),
(10, 8, NULL, NULL, 'delete', 17, 18),
(11, 8, NULL, NULL, 'edit', 19, 20),
(12, 8, NULL, NULL, 'index', 21, 22),
(13, 8, NULL, NULL, 'view', 23, 24),
(14, 1, NULL, NULL, 'Consultas', 26, 37),
(15, 14, NULL, NULL, 'add', 27, 28),
(16, 14, NULL, NULL, 'delete', 29, 30),
(17, 14, NULL, NULL, 'edit', 31, 32),
(18, 14, NULL, NULL, 'index', 33, 34),
(19, 14, NULL, NULL, 'view', 35, 36),
(20, 1, NULL, NULL, 'Contraindicaciones', 38, 49),
(21, 20, NULL, NULL, 'add', 39, 40),
(22, 20, NULL, NULL, 'delete', 41, 42),
(23, 20, NULL, NULL, 'edit', 43, 44),
(24, 20, NULL, NULL, 'index', 45, 46),
(25, 20, NULL, NULL, 'view', 47, 48),
(26, 1, NULL, NULL, 'Diagnosticos', 50, 63),
(27, 26, NULL, NULL, 'add', 51, 52),
(28, 26, NULL, NULL, 'delete', 53, 54),
(29, 26, NULL, NULL, 'edit', 55, 56),
(30, 26, NULL, NULL, 'index', 57, 58),
(31, 26, NULL, NULL, 'indexPaciente', 59, 60),
(32, 26, NULL, NULL, 'view', 61, 62),
(33, 1, NULL, NULL, 'Drogas', 64, 75),
(34, 33, NULL, NULL, 'add', 65, 66),
(35, 33, NULL, NULL, 'delete', 67, 68),
(36, 33, NULL, NULL, 'edit', 69, 70),
(37, 33, NULL, NULL, 'index', 71, 72),
(38, 33, NULL, NULL, 'view', 73, 74),
(39, 1, NULL, NULL, 'Especialidades', 76, 87),
(40, 39, NULL, NULL, 'add', 77, 78),
(41, 39, NULL, NULL, 'delete', 79, 80),
(42, 39, NULL, NULL, 'edit', 81, 82),
(43, 39, NULL, NULL, 'index', 83, 84),
(44, 39, NULL, NULL, 'view', 85, 86),
(45, 1, NULL, NULL, 'EspecialidadesProfesionales', 88, 99),
(46, 45, NULL, NULL, 'add', 89, 90),
(47, 45, NULL, NULL, 'delete', 91, 92),
(48, 45, NULL, NULL, 'edit', 93, 94),
(49, 45, NULL, NULL, 'index', 95, 96),
(50, 45, NULL, NULL, 'view', 97, 98),
(51, 1, NULL, NULL, 'EstudiosComplementarios', 100, 113),
(52, 51, NULL, NULL, 'add', 101, 102),
(53, 51, NULL, NULL, 'delete', 103, 104),
(54, 51, NULL, NULL, 'edit', 105, 106),
(55, 51, NULL, NULL, 'index', 107, 108),
(56, 51, NULL, NULL, 'public_index', 109, 110),
(57, 51, NULL, NULL, 'view', 111, 112),
(58, 1, NULL, NULL, 'EstudiosComplementariosPacientes', 114, 129),
(59, 58, NULL, NULL, 'add', 115, 116),
(60, 58, NULL, NULL, 'delete', 117, 118),
(61, 58, NULL, NULL, 'download', 119, 120),
(62, 58, NULL, NULL, 'edit', 121, 122),
(63, 58, NULL, NULL, 'index', 123, 124),
(64, 58, NULL, NULL, 'indexPaciente', 125, 126),
(65, 58, NULL, NULL, 'view', 127, 128),
(66, 1, NULL, NULL, 'ExamenesFisicos', 130, 143),
(67, 66, NULL, NULL, 'add', 131, 132),
(68, 66, NULL, NULL, 'delete', 133, 134),
(69, 66, NULL, NULL, 'edit', 135, 136),
(70, 66, NULL, NULL, 'index', 137, 138),
(71, 66, NULL, NULL, 'indexPaciente', 139, 140),
(72, 66, NULL, NULL, 'view', 141, 142),
(73, 1, NULL, NULL, 'Groups', 144, 155),
(74, 73, NULL, NULL, 'add', 145, 146),
(75, 73, NULL, NULL, 'delete', 147, 148),
(76, 73, NULL, NULL, 'edit', 149, 150),
(77, 73, NULL, NULL, 'index', 151, 152),
(78, 73, NULL, NULL, 'view', 153, 154),
(79, 1, NULL, NULL, 'GruposTerapeuticos', 156, 167),
(80, 79, NULL, NULL, 'add', 157, 158),
(81, 79, NULL, NULL, 'delete', 159, 160),
(82, 79, NULL, NULL, 'edit', 161, 162),
(83, 79, NULL, NULL, 'index', 163, 164),
(84, 79, NULL, NULL, 'view', 165, 166),
(85, 1, NULL, NULL, 'Medicaciones', 168, 179),
(86, 85, NULL, NULL, 'add', 169, 170),
(87, 85, NULL, NULL, 'delete', 171, 172),
(88, 85, NULL, NULL, 'edit', 173, 174),
(89, 85, NULL, NULL, 'index', 175, 176),
(90, 85, NULL, NULL, 'view', 177, 178),
(91, 1, NULL, NULL, 'Medicamentos', 180, 193),
(92, 91, NULL, NULL, 'add', 181, 182),
(93, 91, NULL, NULL, 'delete', 183, 184),
(94, 91, NULL, NULL, 'edit', 185, 186),
(95, 91, NULL, NULL, 'index', 187, 188),
(96, 91, NULL, NULL, 'view', 189, 190),
(97, 91, NULL, NULL, 'viewMedicamento', 191, 192),
(98, 1, NULL, NULL, 'ObrasSociales', 194, 205),
(99, 98, NULL, NULL, 'add', 195, 196),
(100, 98, NULL, NULL, 'delete', 197, 198),
(101, 98, NULL, NULL, 'edit', 199, 200),
(102, 98, NULL, NULL, 'index', 201, 202),
(103, 98, NULL, NULL, 'view', 203, 204),
(104, 1, NULL, NULL, 'ObrasSocialesPacientes', 206, 219),
(105, 104, NULL, NULL, 'add', 207, 208),
(106, 104, NULL, NULL, 'delete', 209, 210),
(107, 104, NULL, NULL, 'edit', 211, 212),
(108, 104, NULL, NULL, 'index', 213, 214),
(109, 104, NULL, NULL, 'indexPaciente', 215, 216),
(110, 104, NULL, NULL, 'view', 217, 218),
(111, 1, NULL, NULL, 'ObrasSocialesProfesionales', 220, 231),
(112, 111, NULL, NULL, 'add', 221, 222),
(113, 111, NULL, NULL, 'delete', 223, 224),
(114, 111, NULL, NULL, 'edit', 225, 226),
(115, 111, NULL, NULL, 'index', 227, 228),
(116, 111, NULL, NULL, 'view', 229, 230),
(117, 1, NULL, NULL, 'Pacientes', 232, 251),
(118, 117, NULL, NULL, 'add', 233, 234),
(119, 117, NULL, NULL, 'antecedentes', 235, 236),
(120, 117, NULL, NULL, 'delete', 237, 238),
(121, 117, NULL, NULL, 'edit', 239, 240),
(122, 117, NULL, NULL, 'ficha', 241, 242),
(123, 117, NULL, NULL, 'index', 243, 244),
(124, 117, NULL, NULL, 'search', 245, 246),
(125, 117, NULL, NULL, 'view', 247, 248),
(126, 1, NULL, NULL, 'PacientesPatologias', 252, 263),
(127, 126, NULL, NULL, 'add', 253, 254),
(128, 126, NULL, NULL, 'delete', 255, 256),
(129, 126, NULL, NULL, 'edit', 257, 258),
(130, 126, NULL, NULL, 'index', 259, 260),
(131, 126, NULL, NULL, 'view', 261, 262),
(132, 1, NULL, NULL, 'Pages', 264, 267),
(133, 132, NULL, NULL, 'display', 265, 266),
(134, 1, NULL, NULL, 'Patologias', 268, 279),
(135, 134, NULL, NULL, 'add', 269, 270),
(136, 134, NULL, NULL, 'delete', 271, 272),
(137, 134, NULL, NULL, 'edit', 273, 274),
(138, 134, NULL, NULL, 'index', 275, 276),
(139, 134, NULL, NULL, 'view', 277, 278),
(140, 1, NULL, NULL, 'PatologiasTratamientos', 280, 291),
(141, 140, NULL, NULL, 'add', 281, 282),
(142, 140, NULL, NULL, 'delete', 283, 284),
(143, 140, NULL, NULL, 'edit', 285, 286),
(144, 140, NULL, NULL, 'index', 287, 288),
(145, 140, NULL, NULL, 'view', 289, 290),
(146, 1, NULL, NULL, 'Profesionales', 292, 303),
(147, 146, NULL, NULL, 'add', 293, 294),
(148, 146, NULL, NULL, 'delete', 295, 296),
(149, 146, NULL, NULL, 'edit', 297, 298),
(150, 146, NULL, NULL, 'index', 299, 300),
(151, 146, NULL, NULL, 'view', 301, 302),
(152, 1, NULL, NULL, 'Recetas', 304, 319),
(153, 152, NULL, NULL, 'add', 305, 306),
(154, 152, NULL, NULL, 'delete', 307, 308),
(155, 152, NULL, NULL, 'edit', 309, 310),
(156, 152, NULL, NULL, 'getMedicamentos', 311, 312),
(157, 152, NULL, NULL, 'index', 313, 314),
(158, 152, NULL, NULL, 'indexPaciente', 315, 316),
(159, 152, NULL, NULL, 'view', 317, 318),
(160, 1, NULL, NULL, 'Tratamientos', 320, 331),
(161, 160, NULL, NULL, 'add', 321, 322),
(162, 160, NULL, NULL, 'delete', 323, 324),
(163, 160, NULL, NULL, 'edit', 325, 326),
(164, 160, NULL, NULL, 'index', 327, 328),
(165, 160, NULL, NULL, 'view', 329, 330),
(166, 1, NULL, NULL, 'Turnos', 332, 345),
(167, 166, NULL, NULL, 'add', 333, 334),
(168, 166, NULL, NULL, 'agendaDiaria', 335, 336),
(169, 166, NULL, NULL, 'delete', 337, 338),
(170, 166, NULL, NULL, 'edit', 339, 340),
(171, 166, NULL, NULL, 'index', 341, 342),
(172, 166, NULL, NULL, 'view', 343, 344),
(173, 1, NULL, NULL, 'Users', 346, 363),
(174, 173, NULL, NULL, 'add', 347, 348),
(175, 173, NULL, NULL, 'delete', 349, 350),
(176, 173, NULL, NULL, 'edit', 351, 352),
(177, 173, NULL, NULL, 'index', 353, 354),
(178, 173, NULL, NULL, 'login', 355, 356),
(179, 173, NULL, NULL, 'logout', 357, 358),
(180, 173, NULL, NULL, 'view', 359, 360),
(181, 1, NULL, NULL, 'Acl', 364, 419),
(182, 181, NULL, NULL, 'Acl', 365, 370),
(183, 182, NULL, NULL, 'admin_index', 366, 367),
(184, 182, NULL, NULL, 'index', 368, 369),
(185, 181, NULL, NULL, 'Acos', 371, 382),
(186, 185, NULL, NULL, 'admin_build_acl', 372, 373),
(187, 185, NULL, NULL, 'admin_empty_acos', 374, 375),
(188, 185, NULL, NULL, 'admin_index', 376, 377),
(189, 185, NULL, NULL, 'admin_prune_acos', 378, 379),
(190, 185, NULL, NULL, 'admin_synchronize', 380, 381),
(191, 181, NULL, NULL, 'Aros', 383, 418),
(192, 191, NULL, NULL, 'admin_ajax_role_permissions', 384, 385),
(193, 191, NULL, NULL, 'admin_check', 386, 387),
(194, 191, NULL, NULL, 'admin_clear_user_specific_permissions', 388, 389),
(195, 191, NULL, NULL, 'admin_deny_all_controllers', 390, 391),
(196, 191, NULL, NULL, 'admin_deny_role_permission', 392, 393),
(197, 191, NULL, NULL, 'admin_deny_user_permission', 394, 395),
(198, 191, NULL, NULL, 'admin_empty_permissions', 396, 397),
(199, 191, NULL, NULL, 'admin_get_role_controller_permission', 398, 399),
(200, 191, NULL, NULL, 'admin_get_user_controller_permission', 400, 401),
(201, 191, NULL, NULL, 'admin_grant_all_controllers', 402, 403),
(202, 191, NULL, NULL, 'admin_grant_role_permission', 404, 405),
(203, 191, NULL, NULL, 'admin_grant_user_permission', 406, 407),
(204, 191, NULL, NULL, 'admin_index', 408, 409),
(205, 191, NULL, NULL, 'admin_role_permissions', 410, 411),
(206, 191, NULL, NULL, 'admin_update_user_role', 412, 413),
(207, 191, NULL, NULL, 'admin_user_permissions', 414, 415),
(208, 191, NULL, NULL, 'admin_users', 416, 417),
(209, 1, NULL, NULL, 'BoostCake', 420, 429),
(210, 209, NULL, NULL, 'BoostCake', 421, 428),
(211, 210, NULL, NULL, 'bootstrap2', 422, 423),
(212, 210, NULL, NULL, 'bootstrap3', 424, 425),
(213, 210, NULL, NULL, 'index', 426, 427),
(214, 117, NULL, NULL, 'addExpress', 249, 250),
(215, 173, NULL, NULL, 'options', 361, 362);


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

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, NULL, 1, 4),
(2, 1, 'User', 1, NULL, 2, 3),
(3, NULL, 'Group', 2, NULL, 5, 8),
(7, 3, 'User', 4, NULL, 6, 7);





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








INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 3, 178, '1', '1', '1', '1'),
(3, 3, 123, '1', '1', '1', '1'),
(4, 3, 179, '1', '1', '1', '1'),
(5, 3, 119, '1', '1', '1', '1'),
(6, 3, 120, '1', '1', '1', '1'),
(7, 3, 121, '1', '1', '1', '1'),
(8, 3, 122, '1', '1', '1', '1'),
(9, 3, 118, '1', '1', '1', '1'),
(10, 3, 168, '1', '1', '1', '1'),
(11, 3, 171, '1', '1', '1', '1'),
(12, 3, 102, '1', '1', '1', '1'),
(13, 3, 214, '1', '1', '1', '1'),
(14, 3, 101, '1', '1', '1', '1'),
(15, 3, 100, '1', '1', '1', '1'),
(16, 3, 99, '1', '1', '1', '1'),
(17, 3, 215, '1', '1', '1', '1'),
(18, 3, 109, '1', '1', '1', '1'),
(19, 3, 108, '1', '1', '1', '1'),
(20, 3, 1, '-1', '-1', '-1', '-1'),
(21, 3, 31, '1', '1', '1', '1'),
(22, 3, 29, '1', '1', '1', '1'),
(23, 3, 27, '1', '1', '1', '1'),
(24, 3, 59, '1', '1', '1', '1'),
(25, 3, 61, '1', '1', '1', '1'),
(26, 3, 62, '1', '1', '1', '1'),
(27, 3, 64, '1', '1', '1', '1'),
(28, 3, 67, '1', '1', '1', '1'),
(29, 3, 71, '1', '1', '1', '1'),
(30, 3, 153, '1', '1', '1', '1'),
(31, 3, 156, '1', '1', '1', '1'),
(32, 3, 158, '1', '1', '1', '1'),
(33, 3, 167, '1', '1', '1', '1');





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


INSERT IGNORE INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'mvega', 'bdda6e154f2aa7c9a5c9e067d007339565d3a0b3', 1, '2014-04-30 13:49:18', '2014-05-11 14:11:05'),
(4, 'dra', '4113593dbc8a3ea141a1ef36f95d3fbe0a6b4ffb', 2, '2014-05-02 22:12:26', '2014-05-11 14:23:09');

--
-- Dumping data for table `groups`
--

INSERT IGNORE INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'admin', '2014-04-30 13:37:58', '2014-04-30 13:37:58'),
(2, 'profesionales', '2014-05-01 14:57:33', '2014-05-02 16:01:36');

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
