CREATE TABLE IF NOT EXISTS `producto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(120) NOT NULL,
  `slug` VARCHAR(120) NOT NULL,
  `categoria` INT(11) NULL,
  `precio` VARCHAR(10) NOT NULL,
  `foto` VARCHAR(225) NULL,
  `resumen` VARCHAR(225) NOT NULL,
  `descripcion` VARCHAR(225) NULL,
  `portada` INT(1) NULL,
  `foto_portada` VARCHAR(32) NULL,
  `activo` INT(1) NOT NULL DEFAULT 0,
  `created_at` INT(11) NULL,
  `updated_at` INT(11) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

INSERT INTO `producto` (`id`, `nombre`, `slug`, `categoria`, `precio`, `foto`, `resumen`, `descripcion`, `portada`, `foto_portada`) VALUES (1, 'chocolate', 'chocolate-demo', 1, '12.4', '', 'resumen de producto', 'descripcion de producto', 0, '');

