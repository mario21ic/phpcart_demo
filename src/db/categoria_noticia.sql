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

-- INSERT INTO `categoria` (`id`, `nombre`, `slug`, `categoria`, `resumen`) VALUES (1, 'Chocolates', 'chocolates', 1, 'General');

