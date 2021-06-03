-- MySQL dump 10.13  Distrib 5.7.26, for Win32 (AMD64)
--
-- Host: localhost    Database: php2102
-- ------------------------------------------------------
-- Server version	5.7.24-log

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
-- Table structure for table `goods`
--

DROP TABLE IF EXISTS `goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods` (
  `goods_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `goods_email` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `goods_pwd1` int(11) DEFAULT NULL,
  `goods_age` bigint(20) DEFAULT NULL,
  `goods_mobile` char(11) COLLATE utf8_bin DEFAULT NULL,
  `goods_pwd` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `goods_time` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `address` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`goods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods`
--

LOCK TABLES `goods` WRITE;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` VALUES (83,'赵四','zhaosi@qq.com',123,18,'18569287894','$2y$10$Ex3QfPlCGIMCMNM83HiIy.oyVPHG1QAngWoYZVzidmvBjTyRSj72a','2021-06-02 09:12:28','河北邯郸'),(84,'袁佳莹','wzx@qq.com',520,18,'52052052052','$2y$10$M/e8xjSPLnUPrW29fjtOZeo5Oz5MCTDS7u0bPkUoq/G7nDhYJpNAC','2021-06-02 09:17:20','河北省邯郸市曲周县'),(85,'我','wzx@qq.com',2002,18,'18569287894','$2y$10$f.hUFP3WytiP8ioefWevUOWbzll4tSqTMJqXoFaq2A0whZ4aa8NbS','2021-06-02 15:09:05','河北邯郸');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-02 16:14:27
