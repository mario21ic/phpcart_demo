CREATE TABLE IF NOT EXISTS `categoria` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(120) NOT NULL,
  `slug` VARCHAR(120) NOT NULL,
  `categoria` INT(11) NULL,
  `resumen` VARCHAR(225) NULL,
  `created_at` INT(11) NULL,
  `updated_at` INT(11) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

INSERT INTO `categoria` (`id`, `nombre`, `slug`, `categoria`, `resumen`) VALUES (1, 'Chocolates', 'chocolates', 1, 'General');
INSERT INTO `categoria` (`id`, `nombre`, `slug`, `categoria`, `resumen`) VALUES (2, 'Para regalar', 'para-regalar', 1, 'General');
INSERT INTO `categoria` (`id`, `nombre`, `slug`, `categoria`, `resumen`) VALUES (3, 'Celebraciones especiales', 'celebraciones-especiales', 1, 'General');
INSERT INTO `categoria` (`id`, `nombre`, `slug`, `categoria`, `resumen`) VALUES (4, 'Pedidos corporativos', 'pedidos-corporativos', 1, 'General');
INSERT INTO `categoria` (`id`, `nombre`, `slug`, `categoria`, `resumen`) VALUES (5, 'Chocolate para diabeticos', 'chocolate-diabeticos', 1, 'General');

