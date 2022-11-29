-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema uBeta
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema uBeta
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `uBeta` DEFAULT CHARACTER SET utf8 ;
USE `uBeta` ;

-- -----------------------------------------------------
-- Table `uBeta`.`tarjetas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `uBeta`.`tarjetas` (
  `idtarjetas` INT NOT NULL AUTO_INCREMENT,
  `num` VARCHAR(45) NULL,
  `banco` VARCHAR(45) NULL,
  `vence` VARCHAR(45) NULL,
  PRIMARY KEY (`idtarjetas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `uBeta`.`direcciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `uBeta`.`direcciones` (
  `iddirecciones` INT NOT NULL AUTO_INCREMENT,
  `direccion` INT NULL,
  `colonia` VARCHAR(45) NULL,
  `localidad` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `pais` VARCHAR(45) NULL,
  `cp` VARCHAR(45) NULL,
  PRIMARY KEY (`iddirecciones`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `uBeta`.`donadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `uBeta`.`donadores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NULL,
  `ap1` VARCHAR(100) NULL,
  `ap2` VARCHAR(100) NULL,
  `tel` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `categ` VARCHAR(45) NULL,
  `graduate` DATE NULL,
  `tarjeta` INT NULL,
  `direccion` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `cards_idx` (`tarjeta` ASC),
  INDEX `address_idx` (`direccion` ASC),
  CONSTRAINT `cards`
    FOREIGN KEY (`tarjeta`)
    REFERENCES `uBeta`.`tarjetas` (`idtarjetas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `address`
    FOREIGN KEY (`direccion`)
    REFERENCES `uBeta`.`direcciones` (`iddirecciones`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `uBeta`.`donaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `uBeta`.`donaciones` (
  `iddonaciones` INT NOT NULL AUTO_INCREMENT,
  `donador` INT NULL,
  `prometido` DOUBLE NULL,
  `abonado` DOUBLE NULL,
  `fecha_abono` DATE NULL,
  `fecha_limite` DATE NULL,
  `formapago` VARCHAR(50) NULL,
  `plazos` INT NULL,
  `plazos_abonados` INT NULL,
  PRIMARY KEY (`iddonaciones`),
  INDEX `donors_idx` (`donador` ASC),
  CONSTRAINT `donors`
    FOREIGN KEY (`donador`)
    REFERENCES `uBeta`.`donadores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `uBeta`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `uBeta`.`users` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `passaword` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
