CREATE TABLE IF NOT EXISTS `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noticia_id` int(11) NOT NULL,
  `usuario` varchar(225) NOT NULL,
  `cuerpo` longtext NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `moderado` tinyint(1) NULL,
  `created_at` datetime NULL,
  `updated_at` datetime NULL,
  PRIMARY KEY (`id`),
  KEY `noticia_comentario_6a518bd6` (`noticia_id`)
) ENGINE=MyISAM;