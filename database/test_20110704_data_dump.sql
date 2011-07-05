# ************************************************************
# Sequel Pro SQL dump
# Version 3348
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.1.45)
# Database: test
# Generation Time: 2011-07-04 21:30:30 -0400
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

LOCK TABLES `aircraft` WRITE;
/*!40000 ALTER TABLE `aircraft` DISABLE KEYS */;

INSERT INTO `aircraft` (`id`, `name`)
VALUES
	(1,'737');

/*!40000 ALTER TABLE `aircraft` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aircraft_cabins
# ------------------------------------------------------------



# Dump of table airport
# ------------------------------------------------------------

LOCK TABLES `airport` WRITE;
/*!40000 ALTER TABLE `airport` DISABLE KEYS */;

INSERT INTO `airport` (`id`, `name`, `cityId`)
VALUES
	(1,'MIA',1),
	(2,'JFK',2),
	(3,'SDQ',3),
	(4,'SFO',4);

/*!40000 ALTER TABLE `airport` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cabin
# ------------------------------------------------------------

LOCK TABLES `cabin` WRITE;
/*!40000 ALTER TABLE `cabin` DISABLE KEYS */;

INSERT INTO `cabin` (`id`, `name`, `noOfSeat`)
VALUES
	(1,'firstclass',5),
	(2,'coach',20);

/*!40000 ALTER TABLE `cabin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cardIssuer
# ------------------------------------------------------------

LOCK TABLES `cardIssuer` WRITE;
/*!40000 ALTER TABLE `cardIssuer` DISABLE KEYS */;

INSERT INTO `cardIssuer` (`id`, `name`)
VALUES
	(1,'Visa'),
	(2,'Master Card'),
	(3,'American Express'),
	(4,'Discover');

/*!40000 ALTER TABLE `cardIssuer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table carrier
# ------------------------------------------------------------

LOCK TABLES `carrier` WRITE;
/*!40000 ALTER TABLE `carrier` DISABLE KEYS */;

INSERT INTO `carrier` (`id`, `isCodeShare`, `name`)
VALUES
	(1,0,'FF');

/*!40000 ALTER TABLE `carrier` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table city
# ------------------------------------------------------------

LOCK TABLES `city` WRITE;
/*!40000 ALTER TABLE `city` DISABLE KEYS */;

INSERT INTO `city` (`id`, `name`, `currency`, `position_x`, `position_y`, `gMT_offset`, `dST_start`, `dST_end`, `dST_offset`, `isActive`)
VALUES
	(1,'Miami','USD',412,107,'-04:00:00',NULL,NULL,'00:00:00',1),
	(2,'New York','USD',464,279,'-04:00:00',NULL,NULL,'00:00:00',1),
	(3,'Santo Domingo','DOP',512,12,'-04:00:00',NULL,NULL,'00:00:00',1),
	(4,'San Francisco','USD',32,258,'-07:00:00',NULL,NULL,'00:00:00',1);

/*!40000 ALTER TABLE `city` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table fare
# ------------------------------------------------------------



# Dump of table fee
# ------------------------------------------------------------



# Dump of table flight
# ------------------------------------------------------------

LOCK TABLES `flight` WRITE;
/*!40000 ALTER TABLE `flight` DISABLE KEYS */;

INSERT INTO `flight` (`id`, `carrierId`, `aircraftId`, `number`, `departureAirport`, `arrivalAiport`, `start`, `end`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `departureTime`, `arrivalTime`)
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

/*!40000 ALTER TABLE `flight` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table hotel
# ------------------------------------------------------------



# Dump of table res_fare
# ------------------------------------------------------------



# Dump of table res_fee
# ------------------------------------------------------------



# Dump of table res_flight
# ------------------------------------------------------------



# Dump of table res_hotel
# ------------------------------------------------------------



# Dump of table res_payment_cc
# ------------------------------------------------------------



# Dump of table res_payment_voucher
# ------------------------------------------------------------



# Dump of table res_tax
# ------------------------------------------------------------



# Dump of table reservation
# ------------------------------------------------------------



# Dump of table tax
# ------------------------------------------------------------



# Dump of table user
# ------------------------------------------------------------



# Dump of table voucher
# ------------------------------------------------------------




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
