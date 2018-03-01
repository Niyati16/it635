-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: libproject
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `BOOKS`
--

DROP TABLE IF EXISTS `BOOKS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BOOKS` (
  `ISBN` int(10) NOT NULL,
  `book_title` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `read_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`ISBN`),
  KEY `read_id` (`read_id`),
  CONSTRAINT `BOOKS_ibfk_1` FOREIGN KEY (`read_id`) REFERENCES `READER` (`read_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BOOKS`
--

LOCK TABLES `BOOKS` WRITE;
/*!40000 ALTER TABLE `BOOKS` DISABLE KEYS */;
INSERT INTO `BOOKS` VALUES (111111,'Hamlet','Literature','Shakespeare','2018-02-25','2018-03-17','issued',2),(121212,'Nemesis','Suspence','Agatha',NULL,NULL,'available',NULL),(141414,'Regeneration','History','Barker',NULL,NULL,'available',NULL),(151515,'Inheritence','Fantasy','Christopher',NULL,NULL,'available',NULL),(222222,'Macbeth','Literature','Shakespeare','2018-02-24','2018-03-16','issued',3),(333333,'Kim','Politics','Kipling','2018-02-05','2018-02-27','overdue',4);
/*!40000 ALTER TABLE `BOOKS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `LOGIN`
--

DROP TABLE IF EXISTS `LOGIN`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `LOGIN` (
  `id` int(10) NOT NULL,
  `read_id` int(10) DEFAULT NULL,
  `log_name` varchar(50) DEFAULT NULL,
  `log_password` varchar(50) DEFAULT NULL,
  `type` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `read_id` (`read_id`),
  CONSTRAINT `LOGIN_ibfk_1` FOREIGN KEY (`read_id`) REFERENCES `READER` (`read_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `LOGIN`
--

LOCK TABLES `LOGIN` WRITE;
/*!40000 ALTER TABLE `LOGIN` DISABLE KEYS */;
INSERT INTO `LOGIN` VALUES (1,1,'beth','beth1234','R'),(2,2,'mike','mike1999','R'),(3,3,'david','david001','R'),(4,4,'rebecca','rebe123','R'),(21,NULL,'lisa','lisa123','L'),(22,NULL,'joe','joe999','L');
/*!40000 ALTER TABLE `LOGIN` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `READER`
--

DROP TABLE IF EXISTS `READER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `READER` (
  `read_id` int(10) NOT NULL,
  `reader_name` varchar(50) DEFAULT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`read_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `READER`
--

LOCK TABLES `READER` WRITE;
/*!40000 ALTER TABLE `READER` DISABLE KEYS */;
INSERT INTO `READER` VALUES (1,'beth','2018-02-25'),(2,'mike','2017-05-09'),(3,'david','2017-01-24'),(4,'rebecca','2016-09-05');
/*!40000 ALTER TABLE `READER` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-01 20:39:06
