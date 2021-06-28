-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: plan
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'総務部'),(2,'人事部'),(3,'経理部'),(4,'IT部'),(5,'マーケティング部'),(6,'新規事業企画部');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_allday` int(11) DEFAULT NULL,
  `event_start_time` time DEFAULT NULL,
  `event_end_time` time DEFAULT NULL,
  `event_name` varchar(255) NOT NULL,
  `memo` text DEFAULT NULL,
  `regist_user_id` int(11) DEFAULT NULL,
  `is_delete` int(11) DEFAULT 0,
  `modified_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (1,1,'2021-05-29',1,'20:19:00','21:19:00','有給','',1,1,'2021-05-28 17:19:09','2021-05-28 17:19:09'),(2,2,'2021-05-29',NULL,'00:00:00','00:00:00','','',2,0,'2021-05-28 17:38:06','2021-05-28 17:38:06'),(3,1,'2021-05-31',1,'00:00:00','00:00:00','','',1,0,'2021-05-31 14:48:34','2021-05-31 14:48:34'),(4,1,'2021-05-13',NULL,'00:00:00','00:00:00','','',1,0,'2021-05-31 17:25:40','2021-05-31 17:25:40'),(5,1,'2021-05-15',1,'00:00:00','00:00:00','','',1,1,'2021-06-01 15:13:51','2021-05-31 17:46:58'),(6,1,'2021-06-03',NULL,'00:00:00','00:00:00','<script>alert(\"攻撃を受けました\");</script>','',1,0,'2021-06-01 15:43:38','2021-06-01 15:43:38'),(7,1,'2021-06-18',NULL,'00:00:00','00:00:00','','',4,0,'2021-06-01 15:49:25','2021-06-01 15:49:25');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `modified_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `mail_index` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'nariaga@outlook.jp','2384d71face1365c8ecf81bb87422a83f50e35f6','齋藤',1,'2021-05-28 13:19:28','2021-05-28 13:19:28'),(2,'himazinaiih@gmail.com','2384d71face1365c8ecf81bb87422a83f50e35f6','さいとう',1,'2021-05-28 17:03:22','2021-05-28 17:03:22'),(3,'surasura9@wzweb.ne.jp','2384d71face1365c8ecf81bb87422a83f50e35f6','山田',1,'2021-05-28 17:07:36','2021-05-28 17:07:36'),(4,'r201704331nd@jindai.jp','2384d71face1365c8ecf81bb87422a83f50e35f6',' <script>alert(\"攻撃を受けました\");</script>',3,'2021-06-01 15:46:19','2021-06-01 15:46:19');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-02 15:04:44
