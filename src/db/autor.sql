CREATE TABLE IF NOT EXISTS `autor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(225) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `descripcion` longtext NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL,
  `creado` datetime NOT NULL,
  `modificado` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `noticia_autor_56ae2a2a` (`slug`)
) ENGINE=MyISAM;

--
-- Dumping data for table `noticia_autor`
--

INSERT INTO `noticia_autor` (`id`, `nombre`, `slug`, `descripcion`, `foto`, `activo`, `creado`, `modificado`) VALUES
(1, 'Aldo Vilcapoma', 'aldo-vilcapoma', '', 'autor/Logofa7_-_copia.png', 1, '2012-10-07 17:02:15', '2012-10-07 18:43:15'),
(2, 'Walter Alejandro', 'walter-alejandro', '', 'autor/Logofa7_-_copia_1_.png', 1, '2012-10-07 17:08:17', '2013-01-19 19:22:03'),
(3, 'Arturo Palomino', 'arturo-palomino', '<p>...</p>', 'autor/Logofa7_-_copia_2.png', 1, '2012-10-17 15:35:56', '2012-10-17 15:35:56'),
(4, 'Adalberto Blas', 'adalberto-blas', '<p>.</p>', 'autor/Logofa7_-_copia_3.png', 1, '2012-10-17 15:37:51', '2012-10-17 15:37:51'),
(5, 'Omar Sapaico', 'omar-sapaico', '<p>.</p>', 'autor/Logofa7_-_copia_4.png', 1, '2012-10-17 15:38:21', '2012-10-17 15:38:21'),
(6, 'Cristian Jayos', 'cristian-jayos', '<p>.</p>', 'autor/Logofa7_-_copia_5.png', 1, '2012-10-17 15:38:51', '2012-10-17 15:38:51'),
(7, 'Roxana Espejo', 'roxana-espejo', '', 'autor/Logofa7_-_copia_6.png', 1, '2012-10-17 16:22:19', '2012-10-17 16:22:19'),
(8, 'Roberto Quintana', 'roberto-quintana', '', 'autor/Logofa7_-_copia_7.png', 1, '2012-12-03 15:54:31', '2012-12-03 15:54:31'),
(9, 'Pedro Morales Mansilla', 'pedro-morales-mansilla', '', 'autor/Morales-Mansilla.jpg', 1, '2013-03-10 15:42:05', '2013-03-10 15:42:05'),
(10, 'Luis Alberto Solórzano Talaverno', 'luis-alberto-solorzano-talaverno', '', 'autor/Luis_Alberto.jpg', 1, '2013-03-11 22:05:07', '2013-03-11 22:05:07'),
(11, 'Gobierno Regional de Huancavelica', 'gobierno-regional-de-huancavelica', '', 'autor/LOGO_22.jpg', 1, '2013-04-10 17:40:54', '2013-04-10 17:40:54'),
(12, 'Marco Barzola', 'marco-barzola', '', 'autor/circulo.jpg', 1, '2013-06-24 15:36:45', '2013-06-24 15:36:45'),
(13, 'Gobierno Regional de Paso', 'gobierno-regional-de-paso', '', 'autor/LOGOTIPO_FINAL_COLOR.png', 1, '2013-06-25 15:09:50', '2013-06-25 15:09:50'),
(14, 'Carlos Alberto Zavala Romero', 'carlos-alberto-zavala-romero', '', 'autor/carlos_zavala.png', 1, '2013-06-26 03:37:59', '2013-06-26 03:37:59'),
(15, 'Regiones', 'regiones', '', 'autor/circulo_1.jpg', 1, '2013-06-26 14:14:41', '2013-06-26 14:14:41'),
(16, 'Diario Gestión', 'diario-gestion', '', 'autor/logo_Gestion.jpg', 1, '2013-06-28 15:31:57', '2013-06-28 15:31:57'),
(17, 'Carlos  Zavala Romero', 'carlos-zavala-romero', '', 'autor/log_de_arcoiris_en_transparencia.png', 1, '2013-07-04 17:54:05', '2013-07-04 17:54:05'),
(18, 'La República', 'la-republica', '', 'autor/Arcoiris.png', 1, '2013-07-31 15:05:02', '2013-07-31 15:05:02'),
(19, 'El Comercio', 'el-comercio', '', 'autor/Arcoiris_1.png', 1, '2013-07-31 15:05:36', '2013-07-31 15:05:36'),
(20, 'Gestión', 'gestion', '', 'autor/Arcoiris_2.png', 1, '2013-07-31 15:05:56', '2013-07-31 15:05:56');