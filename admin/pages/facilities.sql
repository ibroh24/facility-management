-- MySQL dump 10.16  Distrib 10.1.39-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: facilities
-- ------------------------------------------------------
-- Server version	10.1.39-MariaDB

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
-- Table structure for table `issues`
--

DROP TABLE IF EXISTS `issues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `issues` (
  `issueid` int(11) NOT NULL AUTO_INCREMENT,
  `issuetitle` varchar(36) NOT NULL,
  `itemname` varchar(36) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `repairername` varchar(36) DEFAULT NULL,
  `repairernumber` varchar(20) DEFAULT NULL,
  `repaireraddress` varchar(50) DEFAULT NULL,
  `issuedate` date DEFAULT NULL,
  `repaireddate` date DEFAULT NULL,
  `reportedby` varchar(36) DEFAULT NULL,
  `planamount` decimal(19,2) DEFAULT NULL,
  `isrepairable` bit(1) DEFAULT b'1',
  `nextservicedate` date DEFAULT NULL,
  PRIMARY KEY (`issueid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `issues`
--

LOCK TABLES `issues` WRITE;
/*!40000 ALTER TABLE `issues` DISABLE KEYS */;
INSERT INTO `issues` VALUES (1,'Flat Typre','Truck','New check on the truck shows that we need to repair the tyre','Juwonlo Service Depot','012986789','23, Aviation road, Along MMIA, Ikeja, Lagos State','2019-08-14','2019-08-19','uthman',20000.00,'\0','2019-09-13'),(2,'Servicing','Truck','Need to service the truck','Juwonlo Service Depot','08165632190','23, Aviation road, Along MMIA, Ikeja, Lagos State','2019-08-18','2019-08-22','highbee',25.00,'\0','2019-09-27'),(3,'Battery','Battery','This is battery problem','Juwonlo Service Depot','0907889009','23, Aviation road, Along MMIA, Ikeja, Lagos State','2019-08-16','2019-08-19','Danjuma',20.00,'\0','2019-09-30'),(6,'Servicing','Washing Machine','The washing machine develop fault when we were trying to use it on Tuesday evening','AutoBase Fresh Service','08065616850','Ajibade Shopping Complex, Agodi Gate, Ibadan','2019-08-19','2019-08-19','tunde',70.00,'','2019-10-02'),(7,'Not Display','Plazma TV','The Plazma TV automatically off on Wednesday morning','Owonwami Electronics','07064538790','Wakajaye Area, Ibadan','2019-08-25','2019-08-25','abdullah',6500.00,'','0000-00-00'),(8,'cable fail','Iron','the cable failed','Owonwami Electronics','0907889009','Wakajaye Area, Ibadan','2019-08-26','2019-08-26','akin',2000.00,'','0000-00-00');
/*!40000 ALTER TABLE `issues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemsetup`
--

DROP TABLE IF EXISTS `itemsetup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itemsetup` (
  `itemid` int(11) NOT NULL AUTO_INCREMENT,
  `itemname` varchar(36) DEFAULT NULL,
  `itemtype` varchar(36) DEFAULT NULL,
  `itemmodel` varchar(36) DEFAULT NULL,
  `itempurchasedate` date DEFAULT NULL,
  `itemamount` decimal(19,4) DEFAULT NULL,
  `itemnumber` varchar(36) DEFAULT NULL,
  `itemrecieptnumber` varchar(36) DEFAULT NULL,
  `itemchasisnumber` varchar(36) DEFAULT NULL,
  `itemenginenumber` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`itemid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemsetup`
--

LOCK TABLES `itemsetup` WRITE;
/*!40000 ALTER TABLE `itemsetup` DISABLE KEYS */;
INSERT INTO `itemsetup` VALUES (6,'Tyre','New','2010','2019-08-05',70000.0000,'TEWRSWQ1234','AA9098','',''),(7,'Laptop','New','2014','2019-08-08',200000.0000,'OPH1234','TAQ12546','',''),(10,'Truck','3rd Party','2012','2019-06-01',650000.0000,'QWE908OP','TYP9090','QWE231TYUI','YUMI8909H'),(12,'Washing Machine','Used','2013','2019-06-06',150000.0000,'1234RWE','QWEASD12','',''),(13,'4 Clift Machine','3rd Party','2011','2019-05-06',700000.0000,'ISBN12345','PUT54000','',''),(14,'Iron','New','2009','2019-06-13',2000.0000,'WQIOP','1234PO','',''),(15,'Plazma TV','New','12345','2019-08-01',120000.0000,'EK12341','12345','','');
/*!40000 ALTER TABLE `itemsetup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemtypessetup`
--

DROP TABLE IF EXISTS `itemtypessetup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itemtypessetup` (
  `itemtypeid` int(11) NOT NULL AUTO_INCREMENT,
  `itemtype` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`itemtypeid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemtypessetup`
--

LOCK TABLES `itemtypessetup` WRITE;
/*!40000 ALTER TABLE `itemtypessetup` DISABLE KEYS */;
INSERT INTO `itemtypessetup` VALUES (1,'New'),(2,'Used'),(3,'3rd Party');
/*!40000 ALTER TABLE `itemtypessetup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(36) DEFAULT NULL,
  `lastname` varchar(36) DEFAULT NULL,
  `username` varchar(36) DEFAULT NULL,
  `password` varchar(36) DEFAULT NULL,
  `email` varchar(36) DEFAULT NULL,
  `usertype` varchar(36) DEFAULT NULL,
  `userstatus` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'Abdullah','Sulaymon','Danjuma','5f4dcc3b5aa765d61d8327deb882cf99','ab.sulaymon@g.com','Admin',0),(6,'Abdullah','Sulaymon','abdullah','5f4dcc3b5aa765d61d8327deb882cf99','a.sulaymon@g.com','Admin',0),(12,'Abiodun','Shakirat','Abiodun','6d597d3083a78a835f1a14449aab1c94','Abiodunshakirat@gmail.com','Admin',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usertypesetup`
--

DROP TABLE IF EXISTS `usertypesetup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usertypesetup` (
  `usertypeid` int(11) NOT NULL AUTO_INCREMENT,
  `usertype` varchar(36) DEFAULT NULL,
  PRIMARY KEY (`usertypeid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usertypesetup`
--

LOCK TABLES `usertypesetup` WRITE;
/*!40000 ALTER TABLE `usertypesetup` DISABLE KEYS */;
INSERT INTO `usertypesetup` VALUES (1,'Admin'),(2,'Member');
/*!40000 ALTER TABLE `usertypesetup` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-13 12:22:28
