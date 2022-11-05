CREATE TABLE `unibeta`.`donadores` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(50) NOT NULL,
    `apellido` VARCHAR(50) NOT NULL,
    `Telefono` INT NOT NULL,
    `direccion` VARCHAR(100) NOT NULL,
    `correo` VARCHAR(50) NOT NULL,
    `categoria` VARCHAR(50) NOT NULL,
    `graduacion` DATE NOT NULL,
    PRIMARY KEY (`id`)
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
ALTER TABLE `tarejtas`
ADD FOREIGN KEY (`donador`) REFERENCES `donadores`(`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
ALTER TABLE `donaciones`
ADD FOREIGN KEY (`tarjeta`) REFERENCES `tarejtas`(`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;