CREATE TABLE IF NOT EXISTS `moderador` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `password` VARCHAR(32) NULL,
  `rid` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

INSERT INTO `moderador` (`id`, `username`, `password`, `rid`) VALUES ('1', '4dm1n', '2a6681dbd7381bf3d53afdf5e15ee3ea', 1);
