CREATE TABLE `ubeta`.`donadores` (
    `ID` INT NOT NULL,
    `name` VARCHAR(45) NOT NULL,
    `last_name` VARCHAR(45) NOT NULL,
    `address` VARCHAR(100) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `categoria` VARCHAR(50) NOT NULL DEFAULT 'Otro',
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;

CREATE TABLE `ubeta`.`tarejtas` (
    `ID` INT NOT NULL,
    `no_tarjeta` INT NOT NULL,
    `nombre` VARCHAR(45) NOT NULL,
    `expiracion` DATE NOT NULL,
    `cvc` INT NOT NULL,
    `donador` INT NOT NULL,
    PRIMARY KEY (`ID`)
) ENGINE = InnoDB;


Me falto la tabla de donaciones XD

ALTER TABLE
    `tarejtas`
ADD
    FOREIGN KEY (`donador`) REFERENCES `donadores`(`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

ALTER TABLE
    `donaciones`
ADD
    FOREIGN KEY (`tarjeta`) REFERENCES `tarejtas`(`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;