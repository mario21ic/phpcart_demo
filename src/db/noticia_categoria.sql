CREATE TABLE IF NOT EXISTS `noticia_categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(225) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `descripcion` longtext NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `creado` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `noticia_categoria_56ae2a2a` (`slug`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `noticia_categoria`
--

INSERT INTO `noticia_categoria` (`id`, `nombre`, `slug`, `descripcion`, `activo`, `creado`) VALUES
(1, 'Editorial', 'editorial', '', 1, '2012-09-15 06:41:17'),
(2, 'Entrevista', 'entrevista', '', 1, '2012-09-15 06:41:26'),
(3, 'Opinión', 'opinion', '', 1, '2012-09-15 06:41:35'),
(4, 'Actualidad', 'actualidad', '', 1, '2012-09-15 06:41:46'),
(5, 'Informe', 'informe', '', 1, '2012-10-06 00:26:37'),
(6, 'Breves', 'breves', '', 1, '2012-10-06 00:26:46'),
(7, 'Caricatura', 'caricatura', '', 1, '2012-10-06 00:26:54'),
(8, 'Actualidad', 'actualidad', '', 1, '2013-11-24 17:55:35'),
(9, 'Minería', 'mineria', '', 1, '2013-11-24 17:55:43'),
(10, 'Medio Ambiente', 'medio-ambiente', '', 1, '2013-11-24 17:55:53'),
(11, 'Turismo', 'turismo', '', 1, '2013-11-24 17:56:00'),
(12, 'Cultura', 'cultura', '', 1, '2013-11-24 17:56:06'),
(13, 'Voces y Rostros', 'voces-y-rostros', '', 1, '2013-11-24 17:56:13'),
(14, 'Notas Institucionales', 'notas-institucionales', '', 1, '2013-11-24 17:56:35');