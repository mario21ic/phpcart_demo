CREATE TABLE IF NOT EXISTS `cliente` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(120) NOT NULL,
  `apellidos` VARCHAR(120) NOT NULL,
  `email` VARCHAR(120) NOT NULL,
  `telefono` VARCHAR(20) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `created_at` INT(11) NULL,
  `updated_at` INT(11) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

INSERT INTO `cliente` (`id`, `nombres`, `apellidos`, `email`, `telefono`, `password`) VALUES ('1', 'Mario J', 'Inga Cahuana', 'mario21ic@gmail.com', '971122317', '2a6681dbd7381bf3d53afdf5e15ee3ea');

