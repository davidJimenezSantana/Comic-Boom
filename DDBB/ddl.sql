
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema comicBoom
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema comicBoom
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `comicBoom` DEFAULT CHARACTER SET utf8 ;
USE `comicBoom` ;

-- -----------------------------------------------------
-- Table `comicBoom`.`marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comicBoom`.`marca` (
  `idmarca` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idmarca`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `comicBoom`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comicBoom`.`categoria` (
  `idcategoria` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `comicBoom`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comicBoom`.`producto` (
  `idproducto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `cantidad` INT NOT NULL,
  `precio` INT NOT NULL,
  `marca_idmarca` INT NOT NULL,
  `categoria_idcategoria` INT NOT NULL,
  PRIMARY KEY (`idproducto`),
  INDEX `fk_producto_marca_idx` (`marca_idmarca` ASC) ,
  INDEX `fk_producto_categoria1_idx` (`categoria_idcategoria` ASC) ,
  CONSTRAINT `fk_producto_marca`
    FOREIGN KEY (`marca_idmarca`)
    REFERENCES `comicBoom`.`marca` (`idmarca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_producto_categoria1`
    FOREIGN KEY (`categoria_idcategoria`)
    REFERENCES `comicBoom`.`categoria` (`idcategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `comicBoom`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comicBoom`.`rol` (
  `idrol` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idrol`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `comicBoom`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comicBoom`.`estado` (
  `idestado` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idestado`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `comicBoom`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comicBoom`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(45) NOT NULL,
  `rol_idrol` INT NOT NULL,
  `estado_idestado` INT NOT NULL,
  PRIMARY KEY (`idusuario`),
  INDEX `fk_usuario_rol1_idx` (`rol_idrol` ASC) ,
  INDEX `fk_usuario_estado1_idx` (`estado_idestado` ASC) ,
  CONSTRAINT `fk_usuario_rol1`
    FOREIGN KEY (`rol_idrol`)
    REFERENCES `comicBoom`.`rol` (`idrol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_estado1`
    FOREIGN KEY (`estado_idestado`)
    REFERENCES `comicBoom`.`estado` (`idestado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `comicBoom`.`factura`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comicBoom`.`factura` (
  `idfactura` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `hora` VARCHAR(45) NOT NULL,
  `total` INT NOT NULL,
  `usuario_idusuario` INT NOT NULL,
  PRIMARY KEY (`idfactura`),
  INDEX `fk_factura_usuario1_idx` (`usuario_idusuario` ASC) ,
  CONSTRAINT `fk_factura_usuario1`
    FOREIGN KEY (`usuario_idusuario`)
    REFERENCES `comicBoom`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `comicBoom`.`factura_has_producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comicBoom`.`factura_has_producto` (
  `idfactura_has_producto` INT NOT NULL AUTO_INCREMENT,
  `factura_idfactura` INT NOT NULL,
  `producto_idproducto` INT NOT NULL,
  `unidades` INT NOT NULL,
  `subtotal` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idfactura_has_producto`, `factura_idfactura`, `producto_idproducto`),
  INDEX `fk_factura_has_producto_factura1_idx` (`factura_idfactura` ASC) ,
  INDEX `fk_factura_has_producto_producto1_idx` (`producto_idproducto` ASC) ,
  CONSTRAINT `fk_factura_has_producto_factura1`
    FOREIGN KEY (`factura_idfactura`)
    REFERENCES `comicBoom`.`factura` (`idfactura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_factura_has_producto_producto1`
    FOREIGN KEY (`producto_idproducto`)
    REFERENCES `comicBoom`.`producto` (`idproducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;