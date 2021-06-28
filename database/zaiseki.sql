-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: zaiseki
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
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `to_user_id` int(11) NOT NULL,
  `pass_sec` varchar(255) NOT NULL DEFAULT '',
  `pass_tel` varchar(255) NOT NULL DEFAULT '',
  `pass_name` varchar(255) NOT NULL DEFAULT '',
  `msec` int(11) NOT NULL,
  `message` varchar(255) NOT NULL DEFAULT '',
  `is_urgent` int(11) NOT NULL DEFAULT 0,
  `from_user_id` int(11) NOT NULL,
  `modified_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
INSERT INTO `message` VALUES (2,2,'','03-1234-1234','目黒',0,'',0,7,'2021-05-19 15:03:16','2021-05-19 15:03:16'),(3,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:08:44','2021-05-19 15:08:44'),(4,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:10:11','2021-05-19 15:10:11'),(5,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:10:58','2021-05-19 15:10:58'),(6,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:11:33','2021-05-19 15:11:33'),(7,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:12:23','2021-05-19 15:12:23'),(8,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:13:13','2021-05-19 15:13:13'),(9,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:13:41','2021-05-19 15:13:41'),(10,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:14:28','2021-05-19 15:14:28'),(11,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:15:34','2021-05-19 15:15:34'),(12,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:15:47','2021-05-19 15:15:47'),(13,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:17:34','2021-05-19 15:17:34'),(14,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:18:13','2021-05-19 15:18:13'),(15,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:18:27','2021-05-19 15:18:27'),(16,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:18:39','2021-05-19 15:18:39'),(17,2,'B社','03-1234-1234','目黒',0,'kkkkiiiii',0,8,'2021-05-19 15:18:48','2021-05-19 15:18:48'),(18,2,'','','',1,'kkkk',0,2,'2021-05-19 17:10:30','2021-05-19 17:10:30'),(19,2,'','','',1,'kkkk',0,2,'2021-05-19 17:16:13','2021-05-19 17:16:13'),(20,2,'','03-1234-1234','',3,'kkkk',0,2,'2021-05-19 17:16:31','2021-05-19 17:16:31'),(21,2,'B社','','',0,'',0,2,'2021-05-19 17:21:29','2021-05-19 17:21:29'),(25,1,'こ','２３４','',1,'',0,2,'2021-05-21 17:37:22','2021-05-21 17:37:22'),(26,1,'','o','',0,'',0,6,'2021-05-27 15:56:50','2021-05-27 15:56:50');
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `present` int(11) NOT NULL DEFAULT 0,
  `destination` varchar(255) NOT NULL DEFAULT '',
  `reach_time` varchar(255) NOT NULL DEFAULT '',
  `memo` varchar(255) NOT NULL DEFAULT '',
  `modified_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,2,'A社','15時頃','','2021-05-14 15:23:31','2021-05-14 15:23:31'),(2,0,'','','','2021-05-14 17:23:41','2021-05-14 14:14:41'),(3,3,'小会議室B','14時','お客様対応注です','2021-05-14 15:21:53','2021-05-14 15:21:53'),(8,0,'','','','2021-05-19 15:21:27','2021-05-19 15:21:03'),(12,0,'','','','2021-05-19 16:04:28','2021-05-19 16:04:28'),(13,0,'','','','2021-05-20 13:55:11','2021-05-20 13:55:11');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name_index` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'ryuki','2384d71face1365c8ecf81bb87422a83f50e35f6','山田','saito.ryuki@no1s.biz','2021-05-18 13:22:59'),(2,'ryuki8','2384d71face1365c8ecf81bb87422a83f50e35f6','竜輝','nariaga@outlook.jp','2021-05-18 17:07:24'),(3,'12345','bc79812f0b6dfe7aee46e7effdf492232a4439fc','名無し','sura8','2021-05-18 17:20:15'),(4,'13579','2384d71face1365c8ecf81bb87422a83f50e35f6','名無し','nariaga@outlook.jp','2021-05-18 17:22:21'),(5,'surasura','2384d71face1365c8ecf81bb87422a83f50e35f6','名無し','nariaga@outlook.jp','2021-05-18 17:23:52'),(6,'Kinsura','2384d71face1365c8ecf81bb87422a83f50e35f6','名無し','nariaga@outlook.jp','2021-05-18 17:37:33'),(7,'himazin','2384d71face1365c8ecf81bb87422a83f50e35f6','名無し','Kinsura8','2021-05-19 10:44:27'),(8,'97531','2384d71face1365c8ecf81bb87422a83f50e35f6','名無し','nariaga@outlook.jp','2021-05-19 15:04:54'),(9,'123456','2384d71face1365c8ecf81bb87422a83f50e35f6','名無し','nariaga@outlook.jp','2021-05-19 15:56:37'),(10,'234567','2384d71face1365c8ecf81bb87422a83f50e35f6','名無し','nariaga@outlook.jp','2021-05-19 15:57:22'),(11,'3333','2384d71face1365c8ecf81bb87422a83f50e35f6','名無し','nariaga@outlook.jp','2021-05-19 15:59:08'),(12,'44444','2384d71face1365c8ecf81bb87422a83f50e35f6','名無し','nariaga@outlook.jp','2021-05-19 16:04:28'),(13,'0000','2384d71face1365c8ecf81bb87422a83f50e35f6','名無し','nariaga@outlook.jp','2021-05-20 13:55:11');
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

-- Dump completed on 2021-06-02 15:05:42
