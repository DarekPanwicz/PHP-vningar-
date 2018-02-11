CREATE TABLE IF NOT EXISTS `24769562_dariusz`.`Auta` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `marka` VARCHAR(45) NOT NULL,
  `model` VARCHAR(45) NOT NULL,
  `rocznik` INT NOT NULL,
  `moc` INT NOT NULL,
  `kolor` VARCHAR(45) NOT NULL,
  `ilosc drzwi` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB