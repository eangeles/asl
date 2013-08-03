# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.29)
# Database: ikawtube
# Generation Time: 2013-08-03 16:11:29 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table songs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `songs`;

CREATE TABLE `songs` (
  `songId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT '',
  `artist` varchar(100) DEFAULT NULL,
  `albumName` varchar(100) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT '',
  PRIMARY KEY (`songId`),
  KEY `uId_fk` (`userId`),
  CONSTRAINT `uId_fk` FOREIGN KEY (`userId`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `songs` WRITE;
/*!40000 ALTER TABLE `songs` DISABLE KEYS */;

INSERT INTO `songs` (`songId`, `title`, `artist`, `albumName`, `year`, `userId`, `file`)
VALUES
	(59,'fef','sssss','qs',2001,1,'namimiss_kita.mp3'),
	(60,'Paasa','Erwin','Paasa',2013,2,'paasa_by_espada2.mp3'),
	(61,'s','s','s',2003,9,'paasa_by_espada3.mp3'),
	(62,'ubub','ob','ubu',2001,9,'hambog_ng_sagpro_krew-alaala_nalang_ft._lun_.mp3');

/*!40000 ALTER TABLE `songs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `email`, `dob`)
VALUES
	(1,'test','098f6bcd4621d373cade4e832627b4f6','test@test.com','2013-07-09'),
	(2,'erwin','785f0b13d4daf8eee0d11195f58302a4','erwin@erwin.com','2013-06-11'),
	(9,'tbsmith','0040f2abc2cff0c8f59883b99ae9fab6','mail@toddbsmith.com','1980-11-17');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table videos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `videoId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file` varchar(255) DEFAULT '',
  `title` varchar(55) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  PRIMARY KEY (`videoId`),
  KEY `userIdfk` (`userId`),
  CONSTRAINT `userIdfk` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;

INSERT INTO `videos` (`videoId`, `file`, `title`, `artist`, `userId`)
VALUES
	(41,'IMG_15231.MOV','Reiv Dancing','Test',1),
	(42,'VID_20130730_1455481.mp4','Mp4','Erwin',2);

/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
