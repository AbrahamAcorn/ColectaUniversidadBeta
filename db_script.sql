
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proye236_u-beta`.`tarjetas` (
  `idtarjetas` INT NOT NULL AUTO_INCREMENT,
  `num` VARCHAR(45) NULL,
  `banco` VARCHAR(45) NULL,
  `vence` VARCHAR(45) NULL,
  PRIMARY KEY (`idtarjetas`)
) ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `uBeta`.`direcciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proye236_u-beta`.`direcciones` (
  `iddirecciones` INT NOT NULL AUTO_INCREMENT,
  `direccion` VARCHAR(45) NULL,
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
CREATE TABLE IF NOT EXISTS `proye236_u-beta`.`donadores` (
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
  CONSTRAINT `cards` FOREIGN KEY (`tarjeta`) REFERENCES `proye236_u-beta`.`tarjetas` (`idtarjetas`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `address` FOREIGN KEY (`direccion`) REFERENCES `proye236_u-beta`.`direcciones` (`iddirecciones`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `uBeta`.`donaciones`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proye236_u-beta`.`donaciones` (
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
  CONSTRAINT `donors` FOREIGN KEY (`donador`) REFERENCES `proye236_u-beta`.`donadores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;
-- -----------------------------------------------------
-- Table `uBeta`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proye236_u-beta`.`users` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NULL,
  `passaword` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  UNIQUE INDEX `username_UNIQUE` (`username` ASC)
) ENGINE = InnoDB;

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
  COMMIT;
END $$
DELIMITER ;



CALL registra_todo('prueba #1','colonia','localidad','estado', 'pais','90078','9879 8798 7987 9878', 'HSBC','2024/05/06','Pablo','apellido','Apellido','1234567890','pablo@gmail.com','Graduado','2015/06/06' ,'65000','25000','2022/12/06','2023/06/06','Tarjeta de Debito','10','3');
