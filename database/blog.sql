-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: blog
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
-- Table structure for table `favorite`
--

DROP TABLE IF EXISTS `favorite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favorite` (
  `user_id` int(11) NOT NULL,
  `tweet_id` int(11) NOT NULL,
  `modified_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`,`tweet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorite`
--

LOCK TABLES `favorite` WRITE;
/*!40000 ALTER TABLE `favorite` DISABLE KEYS */;
INSERT INTO `favorite` VALUES (1,2,'2021-05-25 15:29:26'),(1,4,'2021-05-25 15:25:58'),(1,48,'2021-05-26 15:49:07'),(1,54,'2021-05-26 15:49:01'),(3,5,'2021-05-26 16:07:54'),(3,7,'2021-05-25 11:53:54'),(5,3,'2021-05-24 16:31:41'),(5,5,'2021-05-24 16:32:25');
/*!40000 ALTER TABLE `favorite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `follow`
--

DROP TABLE IF EXISTS `follow`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `follow` (
  `follow_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `following_user_id` int(11) NOT NULL,
  PRIMARY KEY (`follow_id`),
  UNIQUE KEY `user_id_following_user_id_index` (`user_id`,`following_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `follow`
--

LOCK TABLES `follow` WRITE;
/*!40000 ALTER TABLE `follow` DISABLE KEYS */;
INSERT INTO `follow` VALUES (1,1,2),(8,1,3),(9,1,4),(5,1,5),(2,2,1),(10,2,3),(12,2,4),(14,2,5),(13,2,6),(15,3,1),(6,4,3),(3,5,7),(4,6,7),(11,7,1);
/*!40000 ALTER TABLE `follow` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tweet`
--

DROP TABLE IF EXISTS `tweet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tweet` (
  `tweet_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `body` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`tweet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tweet`
--

LOCK TABLES `tweet` WRITE;
/*!40000 ALTER TABLE `tweet` DISABLE KEYS */;
INSERT INTO `tweet` VALUES (1,1,'サッカーやろうぜ！','2021-05-24 10:36:30'),(2,1,'サッカーやろぜ！','2021-05-24 10:38:05'),(3,1,'サッカーやろぜ！','2021-05-24 10:40:06'),(4,1,'決闘しようぜ！','2021-05-24 10:40:39'),(5,1,'決闘しようぜ！','2021-05-24 10:40:43'),(7,3,'ポケモンゲットだぜ！','2021-05-24 16:35:30'),(47,2,'ゴットハンド！','2021-05-26 13:55:22'),(48,2,'ゴットハンド！','2021-05-26 13:55:26'),(49,2,'メガトンヘット！','2021-05-26 14:00:30'),(54,5,'こんにちは！僕ペンタン！','2021-05-26 15:09:54');
/*!40000 ALTER TABLE `tweet` ENABLE KEYS */;
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
  `nickname` varchar(255) NOT NULL,
  `modified_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `mail_index` (`mail`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'nariaga@outlook.jp','2384d71face1365c8ecf81bb87422a83f50e35f6','趙雲子龍','2021-05-20 17:33:16','2021-05-20 17:33:16'),(2,'saito.ryuki@no1s.biz','2384d71face1365c8ecf81bb87422a83f50e35f6','円堂　守','2021-05-21 11:54:17','2021-05-21 11:54:17'),(3,'himazinaiih@gmail.com','2384d71face1365c8ecf81bb87422a83f50e35f6','サトシ','2021-05-24 14:41:49','2021-05-24 14:41:49'),(4,'r201704331nd@jindai.jp','2384d71face1365c8ecf81bb87422a83f50e35f6','鷹村　守','2021-05-24 14:44:54','2021-05-24 14:44:54'),(5,'nariaga9@outlook.jp','2384d71face1365c8ecf81bb87422a83f50e35f6','ペンタン','2021-05-24 14:57:14','2021-05-24 14:57:14'),(6,'saito.ryuki4@no1s.biz','2384d71face1365c8ecf81bb87422a83f50e35f6','海馬','2021-05-24 15:04:56','2021-05-24 15:04:56'),(7,'nariaga6@outlook.jp','2384d71face1365c8ecf81bb87422a83f50e35f6','ロトの勇者','2021-05-24 15:23:17','2021-05-24 15:23:17');
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

-- Dump completed on 2021-06-02 14:59:01
