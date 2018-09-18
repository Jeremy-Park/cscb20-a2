# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: mathlab.utsc.utoronto.ca (MySQL 5.7.21-0ubuntu0.16.04.1-log)
# Database: cscb20w18_limcryst
# Generation Time: 2018-04-06 04:35:07 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table feedback
# ------------------------------------------------------------

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `profid` varchar(255) NOT NULL DEFAULT '',
  `a` varchar(255) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `d` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;

INSERT INTO `feedback` (`profid`, `a`, `b`, `c`, `d`)
VALUES
	('kanna1','i like [] about her teaching.','More question time.','Easy labs that dont take much time','Quick lesson before starting lab.'),
	('kanna1','i dont know','do you know','because i dont','maybe ill know'),
	('renge1','a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a a ','b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b b ','c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c c ','d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d d ');

/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table grades
# ------------------------------------------------------------

DROP TABLE IF EXISTS `grades`;

CREATE TABLE `grades` (
  `utorid` varchar(255) NOT NULL,
  `a1` int(11) DEFAULT NULL,
  `a2` int(11) DEFAULT NULL,
  `midterm` int(11) DEFAULT NULL,
  `final` int(11) DEFAULT NULL,
  `lab1` int(11) DEFAULT NULL,
  `lab2` int(11) DEFAULT NULL,
  KEY `utorid` (`utorid`),
  CONSTRAINT `grades_ibfk_1` FOREIGN KEY (`utorid`) REFERENCES `users` (`utorid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `grades` WRITE;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;

INSERT INTO `grades` (`utorid`, `a1`, `a2`, `midterm`, `final`, `lab1`, `lab2`)
VALUES
	('joblo',0,1,2,NULL,4,NULL),
	('htaki',100,100,90,NULL,90,NULL),
	('marys',80,80,85,NULL,85,85);

/*!40000 ALTER TABLE `grades` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table remarkRequests
# ------------------------------------------------------------

DROP TABLE IF EXISTS `remarkRequests`;

CREATE TABLE `remarkRequests` (
  `assignment` varchar(255) NOT NULL,
  `utorid` varchar(255) NOT NULL DEFAULT '',
  `reason` varchar(255) DEFAULT NULL,
  KEY `student` (`utorid`),
  CONSTRAINT `remarkRequests_ibfk_1` FOREIGN KEY (`utorid`) REFERENCES `users` (`utorid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `remarkRequests` WRITE;
/*!40000 ALTER TABLE `remarkRequests` DISABLE KEYS */;

INSERT INTO `remarkRequests` (`assignment`, `utorid`, `reason`)
VALUES
	('a1','joblo','not fair :('),
	('a2','joblo','no no no no nono no no no nono no no no nono no no no nono no no no nono no no no nono no no no nono no no no nono no no no nono no no no nono no no no nono no no no nono no no no nono no no no no'),
	('a3','joblo','why no marks yet??');

/*!40000 ALTER TABLE `remarkRequests` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `utorid` varchar(255) NOT NULL,
  `userpw` varchar(24) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL,
  PRIMARY KEY (`utorid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`utorid`, `userpw`, `firstName`, `lastName`, `userType`)
VALUES
	('htaki','123','Hifumi','Takimoto','student'),
	('joblo','goodpw','Joe','Blow','student'),
	('kanna1','nomnom','Kanna','Kamui','instructor'),
	('marys','mary','Mary','Sue','student'),
	('prof1','profpass','Jay','Jay','instructor'),
	('renge1','nyanpasu','Renge','Miyauchi','instructor'),
	('student1','passpass','John','Smith','student'),
	('ta1','passpass','Johnny','Johns','ta'),
	('umaru1','umrumr','Umaru','Doma','ta');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
