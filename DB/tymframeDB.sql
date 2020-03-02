-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema tymframedb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tymframedb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tymframedb` DEFAULT CHARACTER SET latin1 ;
USE `tymframedb` ;

-- -----------------------------------------------------
-- Table `tymframedb`.`category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tymframedb`.`category` (
  `CATEGORY_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `CATEGORY_NAME` VARCHAR(45) NOT NULL,
  `DESCRIPTION` VARCHAR(45) NOT NULL,
  `PRODUCTS` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`CATEGORY_ID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `tymframedb`.`payment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tymframedb`.`payment` (
  `PAYMENT_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `PAYMENT_TYPE` VARCHAR(45) NOT NULL,
  `PRODUCT_NAME` INT(11) NOT NULL,
  PRIMARY KEY (`PAYMENT_ID`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `tymframedb`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tymframedb`.`roles` (
  `ROLES_ID` INT NOT NULL AUTO_INCREMENT,
  `ROLE_NAME` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ROLES_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tymframedb`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tymframedb`.`products` (
  `PRODUCT_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `PRODUCT_NAME` VARCHAR(45) NOT NULL,
  `COST_PRICE` VARCHAR(45) NOT NULL,
  `PRODUCT_SIZE` VARCHAR(45) NOT NULL,
  `QUANTITY_IN_STOCK` VARCHAR(45) NOT NULL,
  `CATEGORY` INT(11) NOT NULL,
  `DISCOUNT_PRICE` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`PRODUCT_ID`, `CATEGORY`),
  INDEX `PRODUCT_CATEGORY_ID_idx` (`CATEGORY` ASC),
  CONSTRAINT `PRODUCT_CATEGORY_ID`
    FOREIGN KEY (`CATEGORY`)
    REFERENCES `tymframedb`.`category` (`CATEGORY_ID`)
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `tymframedb`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tymframedb`.`users` (
  `USER_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` VARCHAR(60) NOT NULL,
  `PASSWORD` VARCHAR(45) NOT NULL,
  `FIRSTNAME` VARCHAR(45) NOT NULL,
  `LASTNAME` VARCHAR(45) NOT NULL,
  `EMAIL` VARCHAR(45) NOT NULL,
  `PHONENUMBER` VARCHAR(45) NOT NULL,
  `ADDRESS` VARCHAR(45) NOT NULL,
  `PRODUCTS` INT NOT NULL,
  `STATUS` ENUM('Active', 'Inactive') NOT NULL DEFAULT 'Inactive',
  PRIMARY KEY (`USER_ID`, `PRODUCTS`),
  INDEX `USER_PRODUCT_ID_idx` (`PRODUCTS` ASC),
  CONSTRAINT `USER_ROLE_ID`
    FOREIGN KEY (`USER_ID`)
    REFERENCES `tymframedb`.`roles` (`ROLES_ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE,
  CONSTRAINT `USER_PRODUCT_ID`
    FOREIGN KEY (`PRODUCTS`)
    REFERENCES `tymframedb`.`products` (`PRODUCT_ID`)
    ON DELETE RESTRICT
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `tymframedb`.`order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tymframedb`.`order` (
  `ORDER_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `USERS` INT(11) NOT NULL,
  `PAYMENT` INT(11) NOT NULL,
  PRIMARY KEY (`ORDER_ID`, `PAYMENT`, `USERS`),
  INDEX `ORDER_USER_ID_idx` (`USERS` ASC),
  INDEX `ORDER_PAYMENT_ID_idx` (`PAYMENT` ASC),
  CONSTRAINT `ORDER_PAYMENT_ID`
    FOREIGN KEY (`PAYMENT`)
    REFERENCES `tymframedb`.`payment` (`PAYMENT_ID`)
    ON UPDATE CASCADE,
  CONSTRAINT `ORDER_USER_ID`
    FOREIGN KEY (`USERS`)
    REFERENCES `tymframedb`.`users` (`USER_ID`)
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COMMENT = '			';


-- -----------------------------------------------------
-- Table `tymframedb`.`order_details`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tymframedb`.`order_details` (
  `ORDER_DETAILS_ID` INT(11) NOT NULL AUTO_INCREMENT,
  `PRODUCTS` INT(11) NOT NULL,
  `ORDER` INT(11) NOT NULL,
  `ORDER_STATUS` VARCHAR(45) NOT NULL,
  `DELIVERY_DATE` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ORDER_DETAILS_ID`, `ORDER`, `PRODUCTS`),
  INDEX `ORDER_DETAILS_ORDER_ID_idx` (`ORDER` ASC),
  INDEX `ORDER_DETAILS_PRODUCT_ID_idx` (`PRODUCTS` ASC),
  CONSTRAINT `ORDER_DETAILS_ORDER_ID`
    FOREIGN KEY (`ORDER`)
    REFERENCES `tymframedb`.`order` (`ORDER_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `ORDER_DETAILS_PRODUCT_ID`
    FOREIGN KEY (`PRODUCTS`)
    REFERENCES `tymframedb`.`products` (`PRODUCT_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
