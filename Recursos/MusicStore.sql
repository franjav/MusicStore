SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `MusicStore` ;
CREATE SCHEMA IF NOT EXISTS `MusicStore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `MusicStore` ;

-- -----------------------------------------------------
-- Table `MusicStore`.`Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MusicStore`.`Usuarios` ;

CREATE  TABLE IF NOT EXISTS `MusicStore`.`Usuarios` (
  `login` VARCHAR(15) NOT NULL ,
  `contrasena` VARCHAR(8) NOT NULL ,
  `correo` VARCHAR(45) NOT NULL ,
  `nombres` VARCHAR(45) NULL ,
  `apellidos` VARCHAR(45) NULL ,
  `sexo` VARCHAR(1) NULL ,
  `fechaNacimiento` DATE NULL ,
  PRIMARY KEY (`login`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MusicStore`.`Canciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MusicStore`.`Canciones` ;

CREATE  TABLE IF NOT EXISTS `MusicStore`.`Canciones` (
  `idCanciones` INT NOT NULL AUTO_INCREMENT ,
  `nombreCancion` VARCHAR(45) NOT NULL ,
  `interprete` VARCHAR(45) NULL ,
  `album` VARCHAR(45) NULL ,
  `genero` VARCHAR(45) NULL ,
  `ruta` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idCanciones`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MusicStore`.`Disponibles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MusicStore`.`Disponibles` ;

CREATE  TABLE IF NOT EXISTS `MusicStore`.`Disponibles` (
  `idDisponibles` INT NOT NULL AUTO_INCREMENT ,
  `nombreCancion` VARCHAR(45) NOT NULL ,
  `interprete` VARCHAR(45) NOT NULL ,
  `album` VARCHAR(45) NOT NULL ,
  `genero` VARCHAR(45) NOT NULL ,
  `ruta` VARCHAR(45) NOT NULL ,
  `precio` DOUBLE NOT NULL ,
  PRIMARY KEY (`idDisponibles`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MusicStore`.`Listas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MusicStore`.`Listas` ;

CREATE  TABLE IF NOT EXISTS `MusicStore`.`Listas` (
  `nombreListas` VARCHAR(20) NOT NULL ,
  `loginDuenoLista` VARCHAR(15) NOT NULL ,
  PRIMARY KEY (`nombreListas`, `loginDuenoLista`) ,
  INDEX `loginDL` (`loginDuenoLista` ASC) ,
  CONSTRAINT `loginDL`
    FOREIGN KEY (`loginDuenoLista` )
    REFERENCES `MusicStore`.`Usuarios` (`login` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MusicStore`.`CancionesPorLista`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MusicStore`.`CancionesPorLista` ;

CREATE  TABLE IF NOT EXISTS `MusicStore`.`CancionesPorLista` (
  `loginPropietario` VARCHAR(15) NOT NULL ,
  `nombreLista` VARCHAR(20) NOT NULL ,
  `idCancionLista` INT NOT NULL ,
  PRIMARY KEY (`loginPropietario`, `nombreLista`, `idCancionLista`) ,
  INDEX `nombreListas` (`nombreLista` ASC) ,
  INDEX `loginP` (`loginPropietario` ASC) ,
  INDEX `idCanciones` (`idCancionLista` ASC) ,
  CONSTRAINT `nombreListas`
    FOREIGN KEY (`nombreLista` )
    REFERENCES `MusicStore`.`Listas` (`nombreListas` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `loginP`
    FOREIGN KEY (`loginPropietario` )
    REFERENCES `MusicStore`.`Listas` (`loginDuenoLista` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `idCanciones`
    FOREIGN KEY (`idCancionLista` )
    REFERENCES `MusicStore`.`Canciones` (`idCanciones` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MusicStore`.`CancionesPorUsuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MusicStore`.`CancionesPorUsuario` ;

CREATE  TABLE IF NOT EXISTS `MusicStore`.`CancionesPorUsuario` (
  `loginTitular` VARCHAR(15) NOT NULL ,
  `idCancionUsuario` INT NOT NULL ,
  PRIMARY KEY (`loginTitular`, `idCancionUsuario`) ,
  INDEX `loginT` (`loginTitular` ASC) ,
  INDEX `idCancionesUsr` (`idCancionUsuario` ASC) ,
  CONSTRAINT `loginT`
    FOREIGN KEY (`loginTitular` )
    REFERENCES `MusicStore`.`Usuarios` (`login` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `idCancionesUsr`
    FOREIGN KEY (`idCancionUsuario` )
    REFERENCES `MusicStore`.`Canciones` (`idCanciones` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MusicStore`.`Carrito`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MusicStore`.`Carrito` ;

CREATE  TABLE IF NOT EXISTS `MusicStore`.`Carrito` (
  `idCompra` INT NOT NULL ,
  `loginComprador` VARCHAR(15) NOT NULL ,
  `idCancionComprada` INT NOT NULL ,
  `fecha` DATE NULL ,
  `precio` DOUBLE NULL ,
  PRIMARY KEY (`idCompra`) ,
  INDEX `loginComprador` (`loginComprador` ASC) ,
  INDEX `idDisponibles` (`idCancionComprada` ASC) ,
  CONSTRAINT `loginComprador`
    FOREIGN KEY (`loginComprador` )
    REFERENCES `MusicStore`.`Usuarios` (`login` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idDisponibles`
    FOREIGN KEY (`idCancionComprada` )
    REFERENCES `MusicStore`.`Disponibles` (`idDisponibles` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `MusicStore`.`Compartidas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `MusicStore`.`Compartidas` ;

CREATE  TABLE IF NOT EXISTS `MusicStore`.`Compartidas` (
  `loginRemitente` VARCHAR(15) NOT NULL ,
  `idCancionCompartida` INT NOT NULL ,
  `loginDestinatario` VARCHAR(15) NOT NULL ,
  PRIMARY KEY (`loginRemitente`) ,
  INDEX `loginR` (`loginRemitente` ASC) ,
  INDEX `idCancionComp` (`idCancionCompartida` ASC) ,
  INDEX `loginD` (`loginDestinatario` ASC) ,
  CONSTRAINT `loginR`
    FOREIGN KEY (`loginRemitente` )
    REFERENCES `MusicStore`.`CancionesPorUsuario` (`loginTitular` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `idCancionComp`
    FOREIGN KEY (`idCancionCompartida` )
    REFERENCES `MusicStore`.`CancionesPorUsuario` (`idCancionUsuario` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `loginD`
    FOREIGN KEY (`loginDestinatario` )
    REFERENCES `MusicStore`.`Usuarios` (`login` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
