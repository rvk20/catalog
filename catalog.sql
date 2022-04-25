-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: catalog
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CBE5A331CC1CF4E6` (`isbn`),
  KEY `IDX_CBE5A331A76ED395` (`user_id`),
  CONSTRAINT `FK_CBE5A331A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,3,'Przygodowa 1','Przykładowy opis książki przygodowej Przykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowej','ab11b','2022-04-25'),(2,3,'Przygodowa 2','Przykładowy opis książki przygodowej Przykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowejPrzykładowy opis książki przygodowej','ab21b','2022-04-25'),(3,3,'Historyczna 2','Przykładowy opis książki historycznej','ab2121b','2022-04-25'),(5,2,'Historyczna 2','Przykładowy opis książki historycznej','1122','2022-04-25'),(6,2,'Historyczna 4','Przykładowy opis książki historycznej','1222','2022-04-25'),(7,2,'Fantasy 1','Przykładowy opis książki fantasy','122ab','2022-04-25'),(8,2,'Fantasy 2','Przykładowy opis książki fantasy','132ab','2022-04-25'),(9,2,'Fantasy 3','Przykładowy opis książki fantasy','132eb','2022-04-25'),(10,2,'Fantasy 4','Przykładowy opis książki fantasy','112eb','2022-04-25'),(11,2,'Fantasy 5','Przykładowy opis książki fantasy','112epb','2022-04-25'),(12,2,'Fantasy 6','Przykładowy opis książki fantasy','412epb','2022-04-25'),(13,2,'Przyrodnicza 1','Przykładowy opis książki przyrodniczej','4yepb','2022-04-25'),(14,2,'Przyrodnicza 2','Przykładowy opis książki przyrodniczej','4ye6b','2022-04-25');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20220425060147','2022-04-25 08:01:57',4845);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opinion`
--

DROP TABLE IF EXISTS `opinion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `opinion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `book_id` int DEFAULT NULL,
  `rating` int NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AB02B02716A2B381` (`book_id`),
  CONSTRAINT `FK_AB02B02716A2B381` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opinion`
--

LOCK TABLES `opinion` WRITE;
/*!40000 ALTER TABLE `opinion` DISABLE KEYS */;
INSERT INTO `opinion` VALUES (1,1,5,'Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka 123456789 Średnia książka','Mariusz',NULL,'2022-04-25'),(2,1,10,'Świetna książka','Jacek',NULL,'2022-04-25'),(3,2,10,'Świetna książka','Jacek',NULL,'2022-04-25'),(4,3,10,'Świetna książka','Jacek',NULL,'2022-04-25');
/*!40000 ALTER TABLE `opinion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'user1@o2.pl','[\"ROLE_USER\"]','$2y$13$zS66//2tfmEgO5C2kwmnHefOIgt8wTLsDdmO9wblUQLths4uWvPKS','Jan','Nowak'),(2,'user2@o2.pl','[\"ROLE_USER\"]','$2y$13$6AMV.RwExb0WkhB4ndCH6efFjVEzo/qYECLvWazm3xtKGWNYfqhwe','Janusz','Nowacki'),(3,'user3@o2.pl','[\"ROLE_USER\"]','$2y$13$20FJBzr1zftZYoO2X28zdOjLM2MTb88rusMq8tPm5Ia2BLEzwqad6','Marian','Nowicki');
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

-- Dump completed on 2022-04-25  9:35:48
