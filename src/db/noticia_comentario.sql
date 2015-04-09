CREATE TABLE IF NOT EXISTS `noticia_comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `noticia_id` int(11) NOT NULL,
  `usuario` varchar(225) NOT NULL,
  `cuerpo` longtext NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `moderado` tinyint(1) NOT NULL,
  `creado` datetime NOT NULL,
  `modificado` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `noticia_comentario_6a518bd6` (`noticia_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;