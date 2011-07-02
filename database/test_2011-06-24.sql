# Sequel Pro dump
# Version 2492
# http://code.google.com/p/sequel-pro
#
# Host: 127.0.0.1 (MySQL 5.1.45)
# Database: test
# Generation Time: 2011-06-24 22:57:11 -0400
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table aircraft_cabins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aircraft_cabins`;

CREATE TABLE `aircraft_cabins` (
  `cabinId` int(11) NOT NULL,
  `aircraftId` int(11) NOT NULL,
  KEY `aircraftId` (`aircraftId`),
  CONSTRAINT `aircraft_cabins_ibfk_1` FOREIGN KEY (`aircraftId`) REFERENCES `aircraft` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table aircraft
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aircraft`;

CREATE TABLE `aircraft` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `aircraft` WRITE;
/*!40000 ALTER TABLE `aircraft` DISABLE KEYS */;
INSERT INTO `aircraft` (`id`,`name`)
VALUES
	(1,'737');

/*!40000 ALTER TABLE `aircraft` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table airport
# ------------------------------------------------------------

DROP TABLE IF EXISTS `airport`;

CREATE TABLE `airport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(3) NOT NULL,
  `cityId` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cityId` (`cityId`),
  CONSTRAINT `airport_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `city` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `airport` WRITE;
/*!40000 ALTER TABLE `airport` DISABLE KEYS */;
INSERT INTO `airport` (`id`,`name`,`cityId`)
VALUES
	(1,'MIA',1),
	(2,'JFK',2);

/*!40000 ALTER TABLE `airport` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cabin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cabin`;

CREATE TABLE `cabin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `noOfSeat` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

LOCK TABLES `cabin` WRITE;
/*!40000 ALTER TABLE `cabin` DISABLE KEYS */;
INSERT INTO `cabin` (`id`,`name`,`noOfSeat`)
VALUES
	(1,'firstclass',5),
	(2,'coach',20);

/*!40000 ALTER TABLE `cabin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cardIssuer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cardIssuer`;

CREATE TABLE `cardIssuer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `cardIssuer` WRITE;
/*!40000 ALTER TABLE `cardIssuer` DISABLE KEYS */;
INSERT INTO `cardIssuer` (`id`,`name`)
VALUES
	(1,'Visa'),
	(2,'Master Card'),
	(3,'American Express'),
	(4,'Discover');

/*!40000 ALTER TABLE `cardIssuer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table carrier
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carrier`;

CREATE TABLE `carrier` (
  `carrierId` int(11) NOT NULL AUTO_INCREMENT,
  `isCodeShare` char(1) NOT NULL,
  `name` varchar(3) NOT NULL,
  PRIMARY KEY (`carrierId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `carrier` WRITE;
/*!40000 ALTER TABLE `carrier` DISABLE KEYS */;
INSERT INTO `carrier` (`carrierId`,`isCodeShare`,`name`)
VALUES
	(1,'N','AF');

/*!40000 ALTER TABLE `carrier` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table city
# ------------------------------------------------------------

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `currency` char(3) NOT NULL,
  `gMT_offset` time NOT NULL,
  `dST_start` date DEFAULT NULL,
  `dST_end` date DEFAULT NULL,
  `dST_offset` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` (`id`,`name`,`currency`,`gMT_offset`,`dST_start`,`dST_end`,`dST_offset`)
VALUES
	(1,'Miami','USD','-04:00:00',NULL,NULL,'00:00:00'),
	(2,'New York','USD','-04:00:00',NULL,NULL,'00:00:00'),
	(3,'Santo Domingo','DOP','-04:00:00',NULL,NULL,'00:00:00'),
	(4,'San Francisco','USD','-07:00:00',NULL,NULL,'00:00:00');

/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;


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
  `start` date NOT NULL,
  `end` date NOT NULL,
  `monday` char(1) DEFAULT NULL,
  `tuesday` char(1) DEFAULT NULL,
  `wednesday` char(1) DEFAULT NULL,
  `thursday` char(1) DEFAULT NULL,
  `friday` char(1) DEFAULT NULL,
  `saturday` char(1) DEFAULT NULL,
  `sunday` char(1) DEFAULT NULL,
  `departureAirport` char(3) NOT NULL,
  `arrivalAiport` char(3) NOT NULL,
  `departureTime` time NOT NULL,
  `arrivalTime` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `carrierId` (`carrierId`),
  KEY `aircraftId` (`aircraftId`),
  CONSTRAINT `flight_ibfk_1` FOREIGN KEY (`carrierId`) REFERENCES `carrier` (`carrierId`),
  CONSTRAINT `flight_ibfk_2` FOREIGN KEY (`aircraftId`) REFERENCES `aircraft` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

LOCK TABLES `flight` WRITE;
/*!40000 ALTER TABLE `flight` DISABLE KEYS */;
INSERT INTO `flight` (`id`,`carrierId`,`aircraftId`,`number`,`start`,`end`,`monday`,`tuesday`,`wednesday`,`thursday`,`friday`,`saturday`,`sunday`,`departureAirport`,`arrivalAiport`,`departureTime`,`arrivalTime`)
VALUES
	(1,1,1,100,'2011-06-15','2070-07-15','1','1','1','1','1','1','1','MIA','JFK','09:00:00','12:00:00');

/*!40000 ALTER TABLE `flight` ENABLE KEYS */;
UNLOCK TABLES;


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



# Dump of table res_flight
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_flight`;

CREATE TABLE `res_flight` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flightId` int(11) NOT NULL,
  `date` date NOT NULL,
  `isActive` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `flightId` (`flightId`),
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
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
