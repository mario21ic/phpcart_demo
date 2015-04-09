CREATE TABLE IF NOT EXISTS `pedido` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `codigo` VARCHAR(120) NOT NULL,
  `total` VARCHAR(225) NULL,
  `created_at` INT(11) NULL,
  `updated_at` INT(11) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

INSERT INTO `pedido` (`id`, `codigo`, `total`) VALUES (1, '00001', '200');

