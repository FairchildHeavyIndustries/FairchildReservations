# ************************************************************
# Sequel Pro SQL dump
# Version 3348
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.1.45)
# Database: devfrsdb
# Generation Time: 2011-08-19 02:16:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table aircrafts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aircrafts`;

CREATE TABLE `aircrafts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `aircrafts` WRITE;
/*!40000 ALTER TABLE `aircrafts` DISABLE KEYS */;

INSERT INTO `aircrafts` (`id`, `name`)
VALUES
	(1,'737');

/*!40000 ALTER TABLE `aircrafts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aircraft_cabins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aircraft_cabins`;

CREATE TABLE `aircraft_cabins` (
  `cabinId` int(11) NOT NULL,
  `aircraftId` int(11) NOT NULL,
  KEY `aircraftId` (`aircraftId`),
  CONSTRAINT `aircraft_cabins_ibfk_1` FOREIGN KEY (`aircraftId`) REFERENCES `aircrafts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table airports
# ------------------------------------------------------------

DROP TABLE IF EXISTS `airports`;

CREATE TABLE `airports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(3) NOT NULL,
  `cityId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_name` (`name`),
  KEY `cityId` (`cityId`),
  CONSTRAINT `airports_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `cities` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `airports` WRITE;
/*!40000 ALTER TABLE `airports` DISABLE KEYS */;

INSERT INTO `airports` (`id`, `name`, `cityId`)
VALUES
	(1,'MIA',1),
	(2,'JFK',2),
	(3,'SDQ',3),
	(4,'SFO',4);

/*!40000 ALTER TABLE `airports` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cabins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cabins`;

CREATE TABLE `cabins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `noOfSeat` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `cabins` WRITE;
/*!40000 ALTER TABLE `cabins` DISABLE KEYS */;

INSERT INTO `cabins` (`id`, `name`, `noOfSeat`)
VALUES
	(1,'firstclass',5),
	(2,'coach',20);

/*!40000 ALTER TABLE `cabins` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table card_issuers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `card_issuers`;

CREATE TABLE `card_issuers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `card_issuers` WRITE;
/*!40000 ALTER TABLE `card_issuers` DISABLE KEYS */;

INSERT INTO `card_issuers` (`id`, `name`)
VALUES
	(1,'Visa'),
	(2,'Master Card'),
	(3,'American Express'),
	(4,'Discover');

/*!40000 ALTER TABLE `card_issuers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table carriers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carriers`;

CREATE TABLE `carriers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isCodeShare` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `carriers` WRITE;
/*!40000 ALTER TABLE `carriers` DISABLE KEYS */;

INSERT INTO `carriers` (`id`, `isCodeShare`, `name`)
VALUES
	(1,0,'FF');

/*!40000 ALTER TABLE `carriers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;

INSERT INTO `cities` (`id`, `name`, `currency`, `position_x`, `position_y`, `gMT_offset`, `dST_start`, `dST_end`, `dST_offset`, `isActive`)
VALUES
	(1,'Miami','USD',412,107,'-04:00:00',NULL,NULL,'00:00:00',1),
	(2,'New York','USD',464,279,'-04:00:00',NULL,NULL,'00:00:00',1),
	(3,'Santo Domingo','DOP',512,12,'-04:00:00',NULL,NULL,'00:00:00',1),
	(4,'San Francisco','USD',32,258,'-07:00:00',NULL,NULL,'00:00:00',1);

/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fares
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fares`;

CREATE TABLE `fares` (
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
  CONSTRAINT `fares_ibfk_1` FOREIGN KEY (`cabinId`) REFERENCES `cabins` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table fees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fees`;

CREATE TABLE `fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startAirport` char(3) NOT NULL,
  `endAirport` char(3) NOT NULL,
  `currency` char(3) NOT NULL,
  `isActive` char(1) NOT NULL DEFAULT '1',
  `amount` decimal(7,5) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table flights
# ------------------------------------------------------------

DROP TABLE IF EXISTS `flights`;

CREATE TABLE `flights` (
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
  CONSTRAINT `flights_ibfk_2` FOREIGN KEY (`aircraftId`) REFERENCES `aircrafts` (`id`),
  CONSTRAINT `flights_ibfk_3` FOREIGN KEY (`carrierId`) REFERENCES `carriers` (`id`),
  CONSTRAINT `flights_ibfk_4` FOREIGN KEY (`departureAirport`) REFERENCES `airports` (`name`),
  CONSTRAINT `flights_ibfk_5` FOREIGN KEY (`arrivalAiport`) REFERENCES `airports` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

LOCK TABLES `flights` WRITE;
/*!40000 ALTER TABLE `flights` DISABLE KEYS */;

INSERT INTO `flights` (`id`, `carrierId`, `aircraftId`, `number`, `departureAirport`, `arrivalAiport`, `start`, `end`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `departureTime`, `arrivalTime`)
VALUES
	(1,1,1,102,'MIA','JFK','2011-06-15','2070-07-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(2,1,1,201,'JFK','MIA','2011-06-15','2070-07-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(3,1,1,203,'JFK','SDQ','2011-06-15','2070-06-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(4,1,1,103,'MIA','SDQ','2011-06-15','2070-07-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(5,1,1,104,'MIA','SFO','2011-06-15','2070-07-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(6,1,1,302,'SDQ','JFK','2011-06-15','2070-06-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(7,1,1,301,'SDQ','MIA','2011-06-15','2015-07-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(8,1,1,204,'JFK','SFO','2011-06-26','2020-01-01','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(9,1,1,401,'SFO','MIA','2011-06-26','2020-01-01','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(10,1,1,402,'SFO','JFK','2011-06-26','2020-01-01','1','1','1','1','1','1','1','09:00:00','12:00:00');

/*!40000 ALTER TABLE `flights` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table hotels
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hotels`;

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotelName` varchar(30) NOT NULL,
  `cityId` int(11) NOT NULL,
  `imageName` varchar(30) NOT NULL,
  `rating` int(1) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `nightlyRate` decimal(7,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cityId` (`cityId`),
  CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `cities` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_fares
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_fares`;

CREATE TABLE `res_fares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fareId` int(11) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  `reservationId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fareId` (`fareId`),
  KEY `reservationId` (`reservationId`),
  CONSTRAINT `res_fares_ibfk_1` FOREIGN KEY (`fareId`) REFERENCES `fares` (`id`),
  CONSTRAINT `res_fares_ibfk_2` FOREIGN KEY (`reservationId`) REFERENCES `reservations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_fees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_fees`;

CREATE TABLE `res_fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `feeId` int(11) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  `reservationId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fareId` (`feeId`),
  KEY `reservationId` (`reservationId`),
  CONSTRAINT `res_fees_ibfk_1` FOREIGN KEY (`feeId`) REFERENCES `fees` (`id`),
  CONSTRAINT `res_fees_ibfk_2` FOREIGN KEY (`reservationId`) REFERENCES `reservations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_flights
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_flights`;

CREATE TABLE `res_flights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flightId` int(11) NOT NULL,
  `date` date NOT NULL,
  `isActive` char(1) NOT NULL DEFAULT '1',
  `cabinId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `flightId` (`flightId`),
  KEY `cabinId` (`cabinId`),
  CONSTRAINT `res_flights_ibfk_1` FOREIGN KEY (`flightId`) REFERENCES `flights` (`id`),
  CONSTRAINT `res_flights_ibfk_2` FOREIGN KEY (`cabinId`) REFERENCES `cabins` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_hotels
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_hotels`;

CREATE TABLE `res_hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotelId` int(11) NOT NULL,
  `nightlyRate` decimal(7,5) NOT NULL,
  `isActive` char(1) NOT NULL DEFAULT '1',
  `noOfNights` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `flightId` (`hotelId`),
  CONSTRAINT `res_hotels_ibfk_1` FOREIGN KEY (`hotelId`) REFERENCES `hotels` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_payment_credit_cards
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_payment_credit_cards`;

CREATE TABLE `res_payment_credit_cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CCNumber` int(20) NOT NULL,
  `expiration` date NOT NULL,
  `cvv` int(4) NOT NULL,
  `cardIssuerId` int(11) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_payment_vouchers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_payment_vouchers`;

CREATE TABLE `res_payment_vouchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voucherId` int(11) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `voucherId` (`voucherId`),
  CONSTRAINT `res_payment_vouchers_ibfk_1` FOREIGN KEY (`voucherId`) REFERENCES `vouchers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_taxes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_taxes`;

CREATE TABLE `res_taxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taxId` int(11) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  `reservationId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fareId` (`taxId`),
  KEY `reservationId` (`reservationId`),
  CONSTRAINT `res_taxes_ibfk_1` FOREIGN KEY (`reservationId`) REFERENCES `reservations` (`id`),
  CONSTRAINT `res_taxes_ibfk_2` FOREIGN KEY (`taxId`) REFERENCES `taxes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table reservations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservations`;

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `PNR` varchar(6) NOT NULL,
  `isActive` int(1) NOT NULL DEFAULT '1',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table taxes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `taxes`;

CREATE TABLE `taxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `startAirport` char(3) NOT NULL,
  `endAirport` char(3) NOT NULL,
  `currency` char(3) NOT NULL,
  `isActive` char(1) NOT NULL DEFAULT '1',
  `amount` decimal(7,5) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table customers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `reservationId` int(11) NOT NULL,
  `telephone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reservationId` (`reservationId`),
  CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`reservationId`) REFERENCES `reservations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table vouchers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vouchers`;

CREATE TABLE `vouchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voucherNumber` varchar(10) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  `userName` varchar(30) DEFAULT NULL,
  `originalResId` int(11) DEFAULT NULL,
  `isUsed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `originalResId` (`originalResId`),
  CONSTRAINT `vouchers_ibfk_1` FOREIGN KEY (`originalResId`) REFERENCES `reservations` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
