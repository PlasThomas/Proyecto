-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Tienda
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Tienda` ;

-- -----------------------------------------------------
-- Schema Tienda
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Tienda` DEFAULT CHARACTER SET utf8 ;
USE `Tienda` ;

-- -----------------------------------------------------
-- Table `Tienda`.`Productos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Tienda`.`Productos` ;

CREATE TABLE IF NOT EXISTS `Tienda`.`Productos` (
  `ID_Productos` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(100) NOT NULL,
  `ID_Proveedor` INT NULL,
  `Existencias` INT NOT NULL,
  `Precio_COM` FLOAT NOT NULL,
  `Precio_VEN` FLOAT NOT NULL,
  `Codigo` VARCHAR(20) NOT NULL unique,
  PRIMARY KEY (`ID_Productos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Tienda`.`Proveedores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Tienda`.`Proveedores` ;

CREATE TABLE IF NOT EXISTS `Tienda`.`Proveedores` (
  `ID_Proveedores` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(100) NOT NULL,
  `Telefono` VARCHAR(15) NULL,
  PRIMARY KEY (`ID_Proveedores`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Tienda`.`Venta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Tienda`.`Venta` ;

CREATE TABLE IF NOT EXISTS `Tienda`.`Venta` (
  `ID_Venta` INT NOT NULL AUTO_INCREMENT,
  `Fecha` DATE NOT NULL,
  `ID_Producto` INT NOT NULL,
  `V_Total` FLOAT NOT NULL,
  `Costo` FLOAT NOT NULL,
  `Ganancia` FLOAT NOT NULL,
  PRIMARY KEY (`ID_Venta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Tienda`.`Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Tienda`.`Usuarios` ;

CREATE TABLE IF NOT EXISTS `Tienda`.`Usuarios` (
  `ID_Usuario` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(100) NOT NULL,
  `Contraseña` VARCHAR(100) NOT NULL,
  `Telefono` VARCHAR(15) NOT NULL UNIQUE,
  `Email` VARCHAR(50) NOT NULL UNIQUE,
  `Permisos` VARCHAR(4) NOT NULL DEFAULT 'USUA',
  `F_registro` DATE NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`ID_Usuario`)
  )
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
