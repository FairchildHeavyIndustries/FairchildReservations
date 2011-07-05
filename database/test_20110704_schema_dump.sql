# ************************************************************
# Sequel Pro SQL dump
# Version 3348
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.1.45)
# Database: test
# Generation Time: 2011-07-04 21:32:28 -0400
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table aircraft
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aircraft`;

CREATE TABLE `aircraft` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



# Dump of table aircraft_cabins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aircraft_cabins`;

CREATE TABLE `aircraft_cabins` (
  `cabinId` int(11) NOT NULL,
  `aircraftId` int(11) NOT NULL,
  KEY `aircraftId` (`aircraftId`),
  CONSTRAINT `aircraft_cabins_ibfk_1` FOREIGN KEY (`aircraftId`) REFERENCES `aircraft` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table airport
# ------------------------------------------------------------

DROP TABLE IF EXISTS `airport`;

CREATE TABLE `airport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(3) NOT NULL,
  `cityId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_name` (`name`),
  KEY `cityId` (`cityId`),
  CONSTRAINT `airport_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `city` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;



# Dump of table cabin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cabin`;

CREATE TABLE `cabin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `noOfSeat` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



# Dump of table cardIssuer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cardIssuer`;

CREATE TABLE `cardIssuer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;



# Dump of table carrier
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carrier`;

CREATE TABLE `carrier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isCodeShare` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



# Dump of table city
# ------------------------------------------------------------

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `currency` char(3) NOT NULL,
  `position_x` int(5) NOT NULL,
  `position_y` int(5) NOT NULL,
  `gMT_offset` time NOT NULL,
  `dST_start` date DEFAULT NULL,
  `dST_end` date DEFAULT NULL,
  `dST_offset` time DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;



# Dump of table fare
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fare`;

CREATE TABLE `fare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startAirport` char(3) NOT NULL,
  `endAirport` char(3) NOT NULL,
  `currency` char(3) NOT NULL,
  `isActive` char(1) NOT NULL DEFAULT '1',
  `amount` decimal(7,5) NOT NULL,
  `cabinId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cabinId` (`cabinId`),
  CONSTRAINT `fare_ibfk_1` FOREIGN KEY (`cabinId`) REFERENCES `cabin` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table fee
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fee`;

CREATE TABLE `fee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startAirport` char(3) NOT NULL,
  `endAirport` char(3) NOT NULL,
  `currency` char(3) NOT NULL,
  `isActive` char(1) NOT NULL DEFAULT '1',
  `amount` decimal(7,5) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table flight
# ------------------------------------------------------------

DROP TABLE IF EXISTS `flight`;

CREATE TABLE `flight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carrierId` int(11) NOT NULL,
  `aircraftId` int(11) DEFAULT NULL,
  `number` int(5) unsigned NOT NULL,
  `departureAirport` char(3) NOT NULL,
  `arrivalAiport` char(3) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `monday` char(1) DEFAULT NULL,
  `tuesday` char(1) DEFAULT NULL,
  `wednesday` char(1) DEFAULT NULL,
  `thursday` char(1) DEFAULT NULL,
  `friday` char(1) DEFAULT NULL,
  `saturday` char(1) DEFAULT NULL,
  `sunday` char(1) DEFAULT NULL,
  `departureTime` time NOT NULL,
  `arrivalTime` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aircraftId` (`aircraftId`),
  KEY `carrierId` (`carrierId`),
  KEY `departureAirport` (`departureAirport`),
  KEY `arrivalAiport` (`arrivalAiport`),
  CONSTRAINT `flight_ibfk_5` FOREIGN KEY (`arrivalAiport`) REFERENCES `airport` (`name`),
  CONSTRAINT `flight_ibfk_2` FOREIGN KEY (`aircraftId`) REFERENCES `aircraft` (`id`),
  CONSTRAINT `flight_ibfk_3` FOREIGN KEY (`carrierId`) REFERENCES `carrier` (`id`),
  CONSTRAINT `flight_ibfk_4` FOREIGN KEY (`departureAirport`) REFERENCES `airport` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;



# Dump of table hotel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hotel`;

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotelName` varchar(30) NOT NULL,
  `cityId` int(11) NOT NULL,
  `imageName` varchar(30) NOT NULL,
  `rating` int(1) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `nightlyRate` decimal(7,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cityId` (`cityId`),
  CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `city` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_fare
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_fare`;

CREATE TABLE `res_fare` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fareId` int(11) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  `reservationId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fareId` (`fareId`),
  KEY `reservationId` (`reservationId`),
  CONSTRAINT `res_fare_ibfk_2` FOREIGN KEY (`reservationId`) REFERENCES `reservation` (`id`),
  CONSTRAINT `res_fare_ibfk_1` FOREIGN KEY (`fareId`) REFERENCES `fare` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_fee
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_fee`;

CREATE TABLE `res_fee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feeId` int(11) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  `reservationId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fareId` (`feeId`),
  KEY `reservationId` (`reservationId`),
  CONSTRAINT `res_fee_ibfk_2` FOREIGN KEY (`reservationId`) REFERENCES `reservation` (`id`),
  CONSTRAINT `res_fee_ibfk_1` FOREIGN KEY (`feeId`) REFERENCES `fee` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_flight
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_flight`;

CREATE TABLE `res_flight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flightId` int(11) NOT NULL,
  `date` date NOT NULL,
  `isActive` char(1) NOT NULL DEFAULT '1',
  `cabinId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `flightId` (`flightId`),
  KEY `cabinId` (`cabinId`),
  CONSTRAINT `res_flight_ibfk_2` FOREIGN KEY (`cabinId`) REFERENCES `cabin` (`id`),
  CONSTRAINT `res_flight_ibfk_1` FOREIGN KEY (`flightId`) REFERENCES `flight` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_hotel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_hotel`;

CREATE TABLE `res_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotelId` int(11) NOT NULL,
  `nightlyRate` decimal(7,5) NOT NULL,
  `isActive` char(1) NOT NULL DEFAULT '1',
  `noOfNights` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `flightId` (`hotelId`),
  CONSTRAINT `res_hotel_ibfk_1` FOREIGN KEY (`hotelId`) REFERENCES `hotel` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_payment_cc
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_payment_cc`;

CREATE TABLE `res_payment_cc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CCNumber` int(20) NOT NULL,
  `expiration` date NOT NULL,
  `cvv` int(4) NOT NULL,
  `cardIssuerId` int(11) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_payment_voucher
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_payment_voucher`;

CREATE TABLE `res_payment_voucher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voucherId` int(11) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `voucherId` (`voucherId`),
  CONSTRAINT `res_payment_voucher_ibfk_1` FOREIGN KEY (`voucherId`) REFERENCES `voucher` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_tax
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_tax`;

CREATE TABLE `res_tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taxId` int(11) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  `reservationId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fareId` (`taxId`),
  KEY `reservationId` (`reservationId`),
  CONSTRAINT `res_tax_ibfk_2` FOREIGN KEY (`taxId`) REFERENCES `tax` (`id`),
  CONSTRAINT `res_tax_ibfk_1` FOREIGN KEY (`reservationId`) REFERENCES `reservation` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table reservation
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservation`;

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PNR` varchar(6) NOT NULL,
  `isActive` int(1) NOT NULL DEFAULT '1',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table tax
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tax`;

CREATE TABLE `tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startAirport` char(3) NOT NULL,
  `endAirport` char(3) NOT NULL,
  `currency` char(3) NOT NULL,
  `isActive` char(1) NOT NULL DEFAULT '1',
  `amount` decimal(7,5) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `reservationId` int(11) NOT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reservationId` (`reservationId`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`reservationId`) REFERENCES `reservation` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table voucher
# ------------------------------------------------------------

DROP TABLE IF EXISTS `voucher`;

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voucherNumber` varchar(10) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  `userName` varchar(30) DEFAULT NULL,
  `originalResId` int(11) DEFAULT NULL,
  `isUsed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `originalResId` (`originalResId`),
  CONSTRAINT `voucher_ibfk_1` FOREIGN KEY (`originalResId`) REFERENCES `reservation` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
