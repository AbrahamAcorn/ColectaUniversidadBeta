-- MySQL Workbench Forward Engineering
SET @OLD_UNIQUE_CHECKS = @@UNIQUE_CHECKS,
  UNIQUE_CHECKS = 0;
SET @OLD_FOREIGN_KEY_CHECKS = @@FOREIGN_KEY_CHECKS,
  FOREIGN_KEY_CHECKS = 0;
SET @OLD_SQL_MODE = @@SQL_MODE,
  SQL_MODE = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';
-- -----------------------------------------------------
-- Schema uBeta
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema uBeta
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `uBeta` DEFAULT CHARACTER SET utf8;
USE `uBeta`;
-- -----------------------------------------------------
-- Table `uBeta`.`tarjetas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `uBeta`.`tarjetas` (
  `idtarjetas` INT NOT NULL AUTO_INCREMENT,
  `num` VARCHAR(45) NULL,
  `banco` VARCHAR(45) NULL,
  `vence` VARCHAR(45) NULL,
  PRIMARY KEY (`idtarjetas`)
) ENGINE = InnoDB;
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
  PRIMARY KEY (`iddirecciones`)
) ENGINE = InnoDB;
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
  CONSTRAINT `cards` FOREIGN KEY (`tarjeta`) REFERENCES `uBeta`.`tarjetas` (`idtarjetas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `address` FOREIGN KEY (`direccion`) REFERENCES `uBeta`.`direcciones` (`iddirecciones`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
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
  CONSTRAINT `donors` FOREIGN KEY (`donador`) REFERENCES `uBeta`.`donadores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB;
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
  UNIQUE INDEX `username_UNIQUE` (`username` ASC)
) ENGINE = InnoDB;
SET SQL_MODE = @OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS = @OLD_UNIQUE_CHECKS;

CREATE VIEW donaciones_full AS SELECT iddonaciones,nombre,ap1,ap2,categ,prometido,abonado,fecha_abono,fecha_limite,formapago,plazos,plazos_abonados FROM donadores JOIN donaciones ON donaciones.donador =donadores.id;


DELIMITER $$ CREATE PROCEDURE registra_todo(
  IN `direction` VARCHAR(50),
  IN `col` VARCHAR(45),
  IN `locali` VARCHAR(45),
  IN `estate` VARCHAR(45),
  IN `pais` VARCHAR(45),
  IN `cp` VARCHAR(45),
  IN `nume` VARCHAR(45),
  IN `banco` VARCHAR(45),
  IN `vence` VARCHAR(45),
  IN `name` VARCHAR(100),
  IN `ap1` VARCHAR(100),
  IN `ap2` VARCHAR(100),
  IN `phone` VARCHAR(45),
  IN `email` VARCHAR(45),
  IN `categ` VARCHAR(45),
  IN `graduate` DATE,
  IN `promet` DOUBLE(10, 2),
  IN `abono` DOUBLE(10, 2),
  IN `fechbono` DATE,
  IN `fechlim` DATE,
  IN `pago` VARCHAR(50),
  IN `plazo` INT(11),
  IN `plazoabon` INT(11)
) BEGIN
DECLARE iddirecc INT;
DECLARE idtarj INT;
DECLARE iddon INT;
START TRANSACTION;
INSERT INTO `direcciones`(
    `iddirecciones`,
    `direccion`,
    `colonia`,
    `localidad`,
    `estado`,
    `pais`,
    `cp`
  )
VALUES (NULL, direction, col, locali, estate, pais, cp);
SET iddirecc := LAST_INSERT_ID();
INSERT INTO `tarjetas`(`idtarjetas`, `num`, `banco`, `vence`)
VALUES (NULL, nume, banco, vence);
SET idtarj := LAST_INSERT_ID();
INSERT INTO `donadores`(
    `id`,
    `nombre`,
    `ap1`,
    `ap2`,
    `tel`,
    `email`,
    `categ`,
    `graduate`,
    `tarjeta`,
    `direccion`
  )
VALUES (
    NULL,
    name,
    ap1,
    ap2,
    phone,
    email,
    categ,
    graduate,
    iddirecc,
    idtarj
  );
SET iddon := LAST_INSERT_ID();
INSERT INTO `donaciones`(
    `iddonaciones`,
    `donador`,
    `prometido`,
    `abonado`,
    `fecha_abono`,
    `fecha_limite`,
    `formapago`,
    `plazos`,
    `plazos_abonados`
  )
VALUES (
    NULL,
    iddon,
    promet,
    abono,
    fechbono,
    fechlim,
    pago,
    plazo,
    plazoabon
  );
END $$

CALL registra_todo('prueba #1','colonia','localidad','estado', 'pais','90078','9879 8798 7987 9878', 'HSBC','2024/05/06','Pablo','apellido','Apellido','1234567890','pablo@gmail.com','Graduado','2015/06/06' ,'65000','25000','2022/12/06','2023/06/06','Tarjeta de Debito','10','3');

{"direction":"prueba API#65", "col":"APIOSA","locali":"jerez","estate":"zacatecas","pais":"mexico","cp":"99300","nume":"9874 5648 2314 5245","banco":"FAKE","vence":"2024/12/12","name":"Apia","ap1":"apeuno","ap2":"apedos","phone":"9874987498",
            "email":"apia@gmail.com","categ":"Administrativo","graduate":"2000/01/01","promet":"750000","abono":"250000","fechabono":"2022/12/12","fechalimite":"2023/02/12","pago":"Cheque","plazos":"5","plazosabon":"3"}

v=Ut^E=HM*2lgLc[