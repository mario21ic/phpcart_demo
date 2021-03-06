CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titular` varchar(225) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `ciudad` varchar(225) NOT NULL,
  `resumen` longtext NOT NULL,
  `cuerpo` longtext NOT NULL,
  `autor_id` int(11) DEFAULT NULL,
  `fuente` varchar(225) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `foto_id` int(11) DEFAULT NULL,
  `galeria_id` int(11) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  `sticky` tinyint(1) NOT NULL,
  `comentarios` tinyint(1) NOT NULL,
  `moderacion` tinyint(1) NOT NULL,
  `creado` datetime NOT NULL,
  `modificado` datetime NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `noticia_noticia_56ae2a2a` (`slug`),
  KEY `noticia_noticia_32ec34e8` (`autor_id`),
  KEY `noticia_noticia_64c3c188` (`categoria_id`),
  KEY `noticia_noticia_46331a32` (`foto_id`),
  KEY `noticia_noticia_11d32688` (`galeria_id`),
  KEY `noticia_noticia_363db8b9` (`usuario_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=886 ;
