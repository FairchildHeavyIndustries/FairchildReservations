# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.1.45)
# Database: qafrsdb
# Generation Time: 2012-03-20 02:06:56 +0000
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
	(1,1,1,456,'35',123,50.00000,'usd');

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
	(1,1,10),
	(2,1,2);

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
	(1,1,11,1,'2012-03-27','1'),
	(2,1,7,2,'2012-03-29','1');

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
	(1,1,0,'Alexander','Fairchild','3057720456','alex.fairchild@gmail.com','1970-03-01');

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
	(1,'NEW',1,'2012-03-19 22:01:21');

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
