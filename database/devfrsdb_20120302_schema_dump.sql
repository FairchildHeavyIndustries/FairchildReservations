# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.1.45)
# Database: devfrsdb
# Generation Time: 2012-03-03 02:51:17 +0000
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aircrafts` WRITE;
/*!40000 ALTER TABLE `aircrafts` DISABLE KEYS */;

INSERT INTO `aircrafts` (`id`, `name`)
VALUES
	(1,'737'),
	(2,'A380');

/*!40000 ALTER TABLE `aircrafts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aircrafts_cabins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aircrafts_cabins`;

CREATE TABLE `aircrafts_cabins` (
  `aircraft_id` int(11) NOT NULL,
  `cabin_id` int(11) NOT NULL,
  KEY `aircraftId` (`aircraft_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `aircrafts_cabins` WRITE;
/*!40000 ALTER TABLE `aircrafts_cabins` DISABLE KEYS */;

INSERT INTO `aircrafts_cabins` (`aircraft_id`, `cabin_id`)
VALUES
	(2,1),
	(2,2),
	(1,1),
	(1,2),
	(1,4);

/*!40000 ALTER TABLE `aircrafts_cabins` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table airports
# ------------------------------------------------------------

DROP TABLE IF EXISTS `airports`;

CREATE TABLE `airports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(3) NOT NULL,
  `city_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uq_name` (`name`),
  KEY `cityId` (`city_id`),
  CONSTRAINT `airports_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `airports` WRITE;
/*!40000 ALTER TABLE `airports` DISABLE KEYS */;

INSERT INTO `airports` (`id`, `name`, `city_id`)
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
  `no_of_seat` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cabins` WRITE;
/*!40000 ALTER TABLE `cabins` DISABLE KEYS */;

INSERT INTO `cabins` (`id`, `name`, `no_of_seat`)
VALUES
	(1,'Coach',20),
	(2,'First',5),
	(3,'Business',10);

/*!40000 ALTER TABLE `cabins` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cake_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cake_sessions`;

CREATE TABLE `cake_sessions` (
  `id` varchar(255) NOT NULL,
  `data` text,
  `expires` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `cake_sessions` WRITE;
/*!40000 ALTER TABLE `cake_sessions` DISABLE KEYS */;

INSERT INTO `cake_sessions` (`id`, `data`, `expires`)
VALUES
	('1514c5d2ab1ab2b44873a30016569fe2','Config|a:3:{s:9:\"userAgent\";s:0:\"\";s:4:\"time\";i:1327710229;s:7:\"timeout\";i:10;}',1327710229),
	('de42b05385e9cc14bd27d29feacdea52','Config|a:3:{s:9:\"userAgent\";s:0:\"\";s:4:\"time\";i:1327724128;s:7:\"timeout\";i:10;}',1327724140);

/*!40000 ALTER TABLE `cake_sessions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table card_issuers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `card_issuers`;

CREATE TABLE `card_issuers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `is_code_share` tinyint(1) NOT NULL DEFAULT '0',
  `name` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `carriers` WRITE;
/*!40000 ALTER TABLE `carriers` DISABLE KEYS */;

INSERT INTO `carriers` (`id`, `is_code_share`, `name`)
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
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;

INSERT INTO `cities` (`id`, `name`, `currency`, `position_x`, `position_y`, `gMT_offset`, `dST_start`, `dST_end`, `dST_offset`, `is_active`)
VALUES
	(1,'Miami','USD',412,107,'-04:00:00',NULL,NULL,'00:00:00',1),
	(2,'New York','USD',464,279,'-04:00:00',NULL,NULL,'00:00:00',1),
	(3,'Santo Domingo','DOP',512,12,'-04:00:00',NULL,NULL,'00:00:00',1),
	(4,'San Francisco','USD',32,258,'-07:00:00',NULL,NULL,'00:00:00',1),
	(5,'San Juan','USD',1,1,'04:00:00','2012-01-31','2012-01-31','04:00:00',1);

/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fares
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fares`;

CREATE TABLE `fares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route_id` int(11) DEFAULT NULL,
  `cabin_id` int(11) NOT NULL,
  `amount` decimal(7,3) NOT NULL,
  `currency` char(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `is_active` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `cabinId` (`cabin_id`),
  KEY `route_id` (`route_id`),
  CONSTRAINT `fares_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `fares` WRITE;
/*!40000 ALTER TABLE `fares` DISABLE KEYS */;

INSERT INTO `fares` (`id`, `route_id`, `cabin_id`, `amount`, `currency`, `name`, `is_active`)
VALUES
	(9,2,1,133.000,'USD','cheap!','1'),
	(10,1,1,100.000,'USD','coach fare','1'),
	(11,1,2,300.000,'USD','firstclass fare','1'),
	(12,2,2,450.000,'USD','Pricey','1');

/*!40000 ALTER TABLE `fares` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fares_flights
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fares_flights`;

CREATE TABLE `fares_flights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fare_id` int(11) NOT NULL,
  `flight_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `fares_flights` WRITE;
/*!40000 ALTER TABLE `fares_flights` DISABLE KEYS */;

INSERT INTO `fares_flights` (`id`, `fare_id`, `flight_id`)
VALUES
	(9,1,4),
	(10,1,2);

/*!40000 ALTER TABLE `fares_flights` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `fees`;

CREATE TABLE `fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_airport` char(3) NOT NULL DEFAULT '',
  `end_airport` char(3) NOT NULL DEFAULT '',
  `currency` char(3) NOT NULL,
  `is_active` char(1) NOT NULL DEFAULT '1',
  `amount` decimal(7,5) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table flights
# ------------------------------------------------------------

DROP TABLE IF EXISTS `flights`;

CREATE TABLE `flights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carrier_id` int(11) NOT NULL,
  `aircraft_id` int(11) DEFAULT NULL,
  `route_id` int(11) DEFAULT NULL,
  `number` int(5) unsigned NOT NULL,
  `departure_airport` char(3) NOT NULL DEFAULT '',
  `arrival_airport` char(3) NOT NULL DEFAULT '',
  `start` date NOT NULL,
  `end` date NOT NULL,
  `monday` char(1) DEFAULT NULL,
  `tuesday` char(1) DEFAULT NULL,
  `wednesday` char(1) DEFAULT NULL,
  `thursday` char(1) DEFAULT NULL,
  `friday` char(1) DEFAULT NULL,
  `saturday` char(1) DEFAULT NULL,
  `sunday` char(1) DEFAULT NULL,
  `departure_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aircraftId` (`aircraft_id`),
  KEY `carrierId` (`carrier_id`),
  KEY `departureAirport` (`departure_airport`),
  KEY `arrivalAiport` (`arrival_airport`),
  KEY `route_id` (`route_id`),
  CONSTRAINT `flights_ibfk_1` FOREIGN KEY (`carrier_id`) REFERENCES `carriers` (`id`),
  CONSTRAINT `flights_ibfk_2` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `flights` WRITE;
/*!40000 ALTER TABLE `flights` DISABLE KEYS */;

INSERT INTO `flights` (`id`, `carrier_id`, `aircraft_id`, `route_id`, `number`, `departure_airport`, `arrival_airport`, `start`, `end`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `departure_time`, `arrival_time`)
VALUES
	(1,1,1,NULL,102,'MIA','JFK','2011-06-15','2070-07-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(2,1,1,NULL,201,'JFK','MIA','2011-06-15','2070-07-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(3,1,1,NULL,203,'JFK','SDQ','2011-06-15','2070-06-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(4,1,1,1,103,'MIA','SDQ','2011-06-15','2070-07-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(5,1,1,NULL,104,'MIA','SFO','2011-06-15','2070-07-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(6,1,1,NULL,302,'SDQ','JFK','2011-06-15','2070-06-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(7,1,1,2,301,'SDQ','MIA','2011-06-15','2015-07-15','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(8,1,1,NULL,204,'JFK','SFO','2011-06-26','2020-01-01','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(9,1,1,NULL,401,'SFO','MIA','2011-06-26','2020-01-01','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(10,1,1,NULL,402,'SFO','JFK','2011-06-26','2020-01-01','1','1','1','1','1','1','1','09:00:00','12:00:00'),
	(11,1,2,1,113,'MIA','SDQ','2012-02-09','2022-02-09','1','1','1','1','1','0','0','14:00:00','15:30:00');

/*!40000 ALTER TABLE `flights` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table hotels
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hotels`;

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(30) NOT NULL DEFAULT '',
  `city_id` int(11) NOT NULL,
  `image_name` varchar(30) NOT NULL DEFAULT '',
  `rating` int(1) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `nightly_rate` decimal(7,5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cityId` (`city_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_cc_payments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_cc_payments`;

CREATE TABLE `res_cc_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` int(11) NOT NULL,
  `card_issuer_id` int(11) NOT NULL,
  `cc_number` int(20) NOT NULL,
  `expiration` varchar(7) NOT NULL DEFAULT '',
  `cvv` int(4) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  `currency` char(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `res_cc_payments` WRITE;
/*!40000 ALTER TABLE `res_cc_payments` DISABLE KEYS */;

INSERT INTO `res_cc_payments` (`id`, `reservation_id`, `card_issuer_id`, `cc_number`, `expiration`, `cvv`, `amount`, `currency`)
VALUES
	(1,2,1,9,'9',9,9.00000,'usd'),
	(2,9,1,9,'9',9,9.00000,'usd'),
	(3,10,1,9,'9',9,9.00000,''),
	(4,13,1,9,'9',9,9.00000,''),
	(5,14,1,9,'9',1,9.00000,''),
	(6,15,1,9,'9',123,9.00000,''),
	(7,18,1,123,'123',123,50.00000,'123'),
	(8,21,1,12345,'12',9,50.00000,'usd'),
	(9,22,1,123456,'1212',123,50.00000,'usd'),
	(10,24,1,2147483647,'123',123,99.99999,'usd'),
	(11,31,1,2147483647,'12',123,99.99999,'usd'),
	(12,33,1,1234567890,'1212',123,70.00000,'usd'),
	(13,34,1,123,'1212',123,50.00000,'usd'),
	(14,36,1,134,'1212',123,40.00000,'usd'),
	(15,37,1,1234,'1212',123,50.00000,'usd'),
	(16,38,1,123,'1212',123,99.99999,'usd'),
	(17,39,1,123,'123',123,99.99999,'usd'),
	(18,43,1,123,'',123,99.99999,'usd'),
	(19,44,1,123,'123',123,99.99999,'USD'),
	(20,45,1,1231,'123',123,99.99999,''),
	(21,46,1,123,'123',123,99.99999,'usd'),
	(22,47,1,13,'4',123,50.00000,'pes'),
	(23,48,1,2147483647,'1212',123,99.99999,'PES'),
	(24,49,1,3,'8',8,8.00000,'usd');

/*!40000 ALTER TABLE `res_cc_payments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table res_fares
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_fares`;

CREATE TABLE `res_fares` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` int(11) NOT NULL,
  `fare_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fareId` (`fare_id`),
  KEY `reservationId` (`reservation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `res_fares` WRITE;
/*!40000 ALTER TABLE `res_fares` DISABLE KEYS */;

INSERT INTO `res_fares` (`id`, `reservation_id`, `fare_id`)
VALUES
	(1,2,10),
	(12,9,10),
	(13,9,1),
	(14,10,10),
	(15,10,1),
	(20,13,10),
	(21,13,1),
	(22,14,10),
	(23,14,1),
	(24,15,10),
	(25,15,1),
	(26,18,10),
	(27,18,1),
	(32,21,10),
	(33,21,1),
	(34,22,10),
	(35,22,1),
	(38,24,10),
	(39,24,1),
	(52,31,10),
	(53,31,1),
	(54,33,10),
	(55,33,1),
	(56,34,10),
	(57,34,2),
	(60,36,10),
	(61,36,1),
	(62,37,10),
	(63,37,1),
	(64,38,11),
	(65,38,2),
	(66,39,11),
	(67,39,2),
	(74,43,10),
	(75,43,1),
	(76,44,10),
	(77,45,10),
	(78,46,10),
	(79,47,10),
	(80,47,2),
	(81,48,10),
	(82,48,1),
	(83,49,10),
	(84,49,1);

/*!40000 ALTER TABLE `res_fares` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table res_fees
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_fees`;

CREATE TABLE `res_fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fee_id` int(11) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fareId` (`fee_id`),
  KEY `reservationId` (`reservation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_flights
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_flights`;

CREATE TABLE `res_flights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` int(11) DEFAULT NULL,
  `flight_id` int(11) NOT NULL,
  `cabin_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `is_active` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `flightId` (`flight_id`),
  KEY `cabinId` (`cabin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `res_flights` WRITE;
/*!40000 ALTER TABLE `res_flights` DISABLE KEYS */;

INSERT INTO `res_flights` (`id`, `reservation_id`, `flight_id`, `cabin_id`, `date`, `is_active`)
VALUES
	(1,2,11,1,'0000-00-00','1'),
	(4,4,4,1,'0000-00-00','1'),
	(5,4,7,1,'0000-00-00','1'),
	(14,9,11,1,'0000-00-00','1'),
	(15,9,7,1,'0000-00-00','1'),
	(16,10,11,1,'0000-00-00','1'),
	(17,10,7,1,'0000-00-00','1'),
	(22,13,11,1,'0000-00-00','1'),
	(23,13,7,1,'0000-00-00','1'),
	(24,14,11,1,'0000-00-00','1'),
	(25,14,7,1,'0000-00-00','1'),
	(26,15,11,1,'0000-00-00','1'),
	(27,15,7,1,'0000-00-00','1'),
	(28,18,4,1,'2012-02-20','1'),
	(29,18,7,1,'0000-00-00','1'),
	(34,21,4,1,'2012-02-16','1'),
	(35,21,7,1,'2012-02-16','1'),
	(36,22,4,1,'2012-02-16','1'),
	(37,22,7,1,'2012-02-16','1'),
	(40,24,4,1,'2012-02-20','1'),
	(41,24,7,1,'2012-02-20','1'),
	(54,31,11,1,'2012-02-29','1'),
	(55,31,7,1,'2012-02-29','1'),
	(56,33,11,1,'2012-02-29','1'),
	(57,33,7,1,'2012-02-29','1'),
	(58,34,4,1,'2012-02-29','1'),
	(59,34,7,2,'2012-02-29','1'),
	(62,36,4,1,'2012-02-08','1'),
	(63,36,7,1,'2012-02-29','1'),
	(64,37,4,1,'2012-02-15','1'),
	(65,37,7,1,'2012-03-22','1'),
	(66,38,11,2,'2012-02-15','1'),
	(67,38,7,2,'2012-02-23','1'),
	(68,39,4,2,'2012-02-15','1'),
	(69,39,7,2,'2012-02-16','1'),
	(76,43,4,1,'2012-02-15','1'),
	(77,43,7,1,'2012-02-15','1'),
	(78,44,4,1,'2012-02-15','1'),
	(79,45,4,1,'2012-02-15','1'),
	(80,46,4,1,'2012-02-15','1'),
	(81,47,11,1,'2012-02-15','1'),
	(82,47,7,2,'2012-02-23','1'),
	(83,48,4,1,'2012-03-14','1'),
	(84,48,7,1,'2012-03-22','1'),
	(85,49,4,1,'2012-03-21','1'),
	(86,49,7,1,'2012-03-22','1');

/*!40000 ALTER TABLE `res_flights` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table res_hotels
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_hotels`;

CREATE TABLE `res_hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` int(11) DEFAULT NULL,
  `hotel_id` int(11) NOT NULL,
  `nightly_rate` decimal(7,5) NOT NULL,
  `is_active` char(1) NOT NULL DEFAULT '1',
  `no_of_nights` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `flightId` (`hotel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table res_passengers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_passengers`;

CREATE TABLE `res_passengers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` int(11) NOT NULL,
  `seqn_no` int(11) DEFAULT '1',
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `telephone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reservationId` (`reservation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `res_passengers` WRITE;
/*!40000 ALTER TABLE `res_passengers` DISABLE KEYS */;

INSERT INTO `res_passengers` (`id`, `reservation_id`, `seqn_no`, `first_name`, `last_name`, `telephone`, `email`, `date_of_birth`)
VALUES
	(1,2,0,'joan','of','arc','bark',NULL),
	(4,4,0,'Alexander','Fairchild','3057720456','alex.fairchild@gmail.com',NULL),
	(5,4,1,'Joan','of Arc','3','joan@arc.com',NULL),
	(14,9,0,'bob','bool','1234','alex.fairchild@gmail.com',NULL),
	(15,9,1,'for','noor','34','alex3.fairchild@gmail.com',NULL),
	(16,10,0,'bob','bool','1234','alex.fairchild@gmail.com',NULL),
	(17,10,1,'for','noor','34','alex3.fairchild@gmail.com',NULL),
	(22,13,0,'bob','bool','1234','alex.fairchild@gmail.com',NULL),
	(23,13,1,'for','noor','34','alex3.fairchild@gmail.com',NULL),
	(24,14,0,'bob','bool','1234','alex.fairchild@gmail.com',NULL),
	(25,14,1,'for','noor','34','alex3.fairchild@gmail.com',NULL),
	(26,15,0,'bob','bool','1234','alex.fairchild@gmail.com',NULL),
	(27,15,1,'for','noor','34','alex3.fairchild@gmail.com',NULL),
	(30,18,0,'alex','fairchild','3057720456','alex.fairchild@gmail.com',NULL),
	(35,21,0,'Alex','Fairchild','3057720456','',NULL),
	(36,21,1,'celey','baby','123','taint@taint.taint',NULL),
	(37,22,0,'Alex','Fairchild','3057720456','alex.fairchild@gmail.com',NULL),
	(38,22,1,'Celey','\"Baby\" Nevares','123','c@c.com',NULL),
	(41,24,0,'alex','fairchild','3057720456','alex.fairchild@gmail.com',NULL),
	(42,24,1,'Dhanraj','Singh','123','taint@taint.taint',NULL),
	(55,31,0,'Alex','Fairchild','3057720456','alex.fairchild@gmail.com',NULL),
	(56,31,1,'Dhanraj','Singh','123','taint@taint.taint',NULL),
	(58,33,0,'Beta','Adonis','3057720456','alex.fairchild@gmail.com',NULL),
	(59,33,1,'Diana','Kraal','2','taint@taint.taint',NULL),
	(60,34,0,'Charles','Sensations','3057720456','alex.fairchild@gmail.com',NULL),
	(61,34,1,'Alexis','Texas','234','taint@taint.taint',NULL),
	(63,36,0,'Nameless','Saint','','',NULL),
	(64,37,0,'alex','fairchild','3057720456','alex.fairchild@gmail.com',NULL),
	(65,37,1,'Dhanraj','Singh','5','taint@taint.taint',NULL),
	(66,38,0,'Kristal','Solis','9','alex.fairchild@gmail.com',NULL),
	(67,39,0,'bob','','','',NULL),
	(68,39,1,'charles','','','',NULL),
	(69,39,2,'dana','','','',NULL),
	(89,43,0,'p','','','',NULL),
	(90,43,1,'po','','','',NULL),
	(91,43,2,'ui','','','',NULL),
	(92,43,3,'yu','','','',NULL),
	(93,43,4,'ty','','','',NULL),
	(94,43,5,'et','','','',NULL),
	(95,44,0,'a','','','',NULL),
	(96,44,1,'s','','','',NULL),
	(97,44,2,'f','','','',NULL),
	(98,44,3,'df','','','',NULL),
	(99,44,4,'asdf','','','',NULL),
	(100,44,5,'adf','','','',NULL),
	(101,45,0,'fds','','','',NULL),
	(102,45,1,'fads','','','',NULL),
	(103,45,2,'adsf','','','',NULL),
	(104,45,3,'','','','',NULL),
	(105,45,4,'afd','','','',NULL),
	(106,45,5,'adsf','','','',NULL),
	(107,46,0,'df','','','',NULL),
	(108,46,1,'adsf','','','',NULL),
	(109,46,2,'sdf','','','',NULL),
	(110,46,3,'','','','',NULL),
	(111,46,4,'asdf','','','',NULL),
	(112,46,5,'sdf','','','',NULL),
	(113,47,0,'borkle','smangmatron','5','is nice',NULL),
	(114,48,0,'alex','fairchild','3057720456','alex.fairchild@gmail.com',NULL),
	(115,49,0,'alex','fairchild','3057720456','alex.fairchild@gmail.com',NULL);

/*!40000 ALTER TABLE `res_passengers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table res_taxes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `res_taxes`;

CREATE TABLE `res_taxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fareId` (`tax_id`),
  KEY `reservationId` (`reservation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table reservations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservations`;

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pnr` varchar(6) NOT NULL DEFAULT '',
  `is_active` int(1) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;

INSERT INTO `reservations` (`id`, `pnr`, `is_active`, `created_date`)
VALUES
	(1,'FIRST',1,'2032-01-01 00:00:00'),
	(2,'NEW',1,'2012-02-13 18:15:13'),
	(4,'NEW',1,'2012-02-13 18:19:33'),
	(9,'NEW',1,'2012-02-13 18:29:53'),
	(10,'NEW',1,'2012-02-13 18:30:21'),
	(13,'NEW',1,'2012-02-13 18:30:56'),
	(14,'NEW',1,'2012-02-13 18:31:07'),
	(15,'NEW',1,'2012-02-13 18:31:14'),
	(18,'NEW',1,'2012-02-13 18:55:56'),
	(21,'NEW',1,'2012-02-15 18:10:59'),
	(22,'NEW',1,'2012-02-15 18:21:52'),
	(24,'NEW',1,'2012-02-16 10:31:24'),
	(31,'NEW',1,'2012-02-16 11:23:29'),
	(33,'NEW',1,'2012-02-16 12:13:21'),
	(34,'NEW',1,'2012-02-16 12:15:57'),
	(36,'NEW',1,'2012-02-16 12:17:07'),
	(37,'NEW',1,'2012-02-25 11:33:35'),
	(38,'NEW',1,'2012-02-25 11:34:49'),
	(39,'NEW',1,'2012-02-25 14:24:53'),
	(43,'NEW',1,'2012-02-25 14:27:42'),
	(44,'NEW',1,'2012-02-25 14:28:32'),
	(45,'NEW',1,'2012-02-25 14:29:13'),
	(46,'NEW',1,'2012-02-25 14:31:40'),
	(47,'NEW',1,'2012-02-25 15:54:59'),
	(48,'NEW',1,'2012-03-01 11:29:41'),
	(49,'NEW',1,'2012-03-02 18:57:11');

/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table routes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `routes`;

CREATE TABLE `routes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_airport_id` int(11) NOT NULL,
  `end_airport_id` int(11) NOT NULL,
  `description` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `start_airport_id` (`start_airport_id`),
  KEY `end_airport_id` (`end_airport_id`),
  CONSTRAINT `routes_ibfk_2` FOREIGN KEY (`start_airport_id`) REFERENCES `airports` (`id`),
  CONSTRAINT `routes_ibfk_3` FOREIGN KEY (`end_airport_id`) REFERENCES `airports` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `routes` WRITE;
/*!40000 ALTER TABLE `routes` DISABLE KEYS */;

INSERT INTO `routes` (`id`, `start_airport_id`, `end_airport_id`, `description`)
VALUES
	(1,1,3,'MIA-SDQ'),
	(2,3,1,'SDQ-MIA');

/*!40000 ALTER TABLE `routes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table taxes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `taxes`;

CREATE TABLE `taxes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `amount` decimal(7,5) NOT NULL,
  `currency` char(3) NOT NULL,
  `is_active` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table vouchers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `vouchers`;

CREATE TABLE `vouchers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voucher_number` varchar(10) NOT NULL DEFAULT '',
  `amount` decimal(7,5) NOT NULL,
  `client_name` varchar(30) DEFAULT NULL,
  `original_reservation_id` int(11) DEFAULT NULL,
  `is_used` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `originalResId` (`original_reservation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
