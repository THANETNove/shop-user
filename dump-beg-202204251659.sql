-- MariaDB dump 10.19  Distrib 10.4.21-MariaDB, for osx10.10 (x86_64)
--
-- Host: localhost    Database: beg
-- ------------------------------------------------------
-- Server version	10.4.21-MariaDB

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
-- Table structure for table `add_money_users`
--

DROP TABLE IF EXISTS `add_money_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `add_money_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `add_money_users`
--

LOCK TABLES `add_money_users` WRITE;
/*!40000 ALTER TABLE `add_money_users` DISABLE KEYS */;
INSERT INTO `add_money_users` VALUES (1,'12','500','2022-04-20 10:20:06','2022-04-20 10:20:06'),(2,'11','200','2022-04-20 12:39:30','2022-04-20 12:39:30'),(3,'12','500','2022-04-20 12:45:19','2022-04-20 12:45:19');
/*!40000 ALTER TABLE `add_money_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bank_accounts`
--

DROP TABLE IF EXISTS `bank_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bank_accounts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_accounts`
--

LOCK TABLES `bank_accounts` WRITE;
/*!40000 ALTER TABLE `bank_accounts` DISABLE KEYS */;
INSERT INTO `bank_accounts` VALUES (1,'13','tert','erter','ธนาคารอาคารสงเคราะห์',NULL,NULL),(4,'12','นาย ธเนศ สายวรรณ์','102020252012-','ธนาคารกรุงเทพ','2022-04-20 10:30:12','2022-04-21 01:46:55');
/*!40000 ALTER TABLE `bank_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `buy_outs`
--

DROP TABLE IF EXISTS `buy_outs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buy_outs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `userId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finished_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberCount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buy_outs`
--

LOCK TABLES `buy_outs` WRITE;
/*!40000 ALTER TABLE `buy_outs` DISABLE KEYS */;
INSERT INTO `buy_outs` VALUES (63,'3','SHOPEE','ชิ้นใหญ่','1000','5719949230','2022-04-24 11:31:48','2022-04-24 11:31:48'),(64,'12','LAZADA','ชิ้นเล็ก','500','8441885770','2022-04-24 11:42:16','2022-04-24 11:42:16'),(65,'3','Chilindo','ชิ้นเดียว','500','8441885770','2022-04-24 11:42:21','2022-04-24 11:42:21'),(66,'3','LAZADA','ชิ้นใหญ่','1000','..','2022-04-24 23:01:58','2022-04-24 23:01:58'),(67,'3','300Lazada','ชิ้นใหญ่','25','5642359459','2022-04-25 02:56:46','2022-04-25 02:56:46');
/*!40000 ALTER TABLE `buy_outs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invitations`
--

DROP TABLE IF EXISTS `invitations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invitations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enrol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invitations`
--

LOCK TABLES `invitations` WRITE;
/*!40000 ALTER TABLE `invitations` DISABLE KEYS */;
INSERT INTO `invitations` VALUES (4,'11','2136980501444','off','เเพลตฟอร์อย่างเป็นทางการ','3.3% (933)',NULL,'2022-04-20 07:15:34'),(5,'1','2694342821','off','การลงทะเบียนเริ่มต้น\n','0.2% (902)',NULL,NULL),(7,'1','84857173511','on','เเพลตฟอร์อย่างเป็นทางการ','0.3% (903)','2022-04-19 22:34:42','2022-04-19 22:34:42'),(8,'admin','949778755','on','เเพลตฟอร์อย่างเป็นทางการ','0% (900)','2022-04-20 08:11:09','2022-04-20 08:11:09'),(9,'12','74348850612','on','การลงทะเบียนเริ่มต้น','1.5% (915)','2022-04-20 12:37:09','2022-04-20 12:37:09'),(10,'admin','2142456617','on','เเพลตฟอร์อย่างเป็นทางการ','0% (900)','2022-04-22 20:07:44','2022-04-22 20:07:44');
/*!40000 ALTER TABLE `invitations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `link_lines`
--

DROP TABLE IF EXISTS `link_lines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `link_lines` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `link_lines`
--

LOCK TABLES `link_lines` WRITE;
/*!40000 ALTER TABLE `link_lines` DISABLE KEYS */;
INSERT INTO `link_lines` VALUES (1,'https://line.me/R/ti/p/@154kqcus?from=page',NULL,'2022-04-21 00:09:31');
/*!40000 ALTER TABLE `link_lines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_04_17_110113_create_invitations_table',2),(6,'2022_04_19_134530_create_bank_accounts_table',3),(9,'2022_04_20_051505_create_withdraw_moneys_table',5),(10,'2022_04_20_171402_create_add_money_users_table',6),(11,'2022_04_21_064128_create_link_lines_table',7),(12,'2014_10_12_000000_create_users_table',8),(14,'2022_04_23_205655_create_buy_outs_table',9),(17,'2022_04_24_171618_create_re-count_numbers_table',11),(18,'2022_04_24_080228_create_won_prizes_table',12);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `re_count_numbers`
--

DROP TABLE IF EXISTS `re_count_numbers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `re_count_numbers` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `number_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `re_count_numbers`
--

LOCK TABLES `re_count_numbers` WRITE;
/*!40000 ALTER TABLE `re_count_numbers` DISABLE KEYS */;
INSERT INTO `re_count_numbers` VALUES (1,'5642359459','2022-04-24 17:40:50','2022-04-25 01:10:00');
/*!40000 ALTER TABLE `re_count_numbers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invitation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_idadmin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusbew` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','84857173511','1','','0','$2y$10$CPY9iqd915xlP7/PV40AI.5OCQpQEgEStxUCCfTleF.VwQXOWYmRC',NULL,'2022-04-22 03:03:18','2022-04-22 03:03:18'),(2,'statusbew','2142456617','2',NULL,'0','$2y$10$CPY9iqd915xlP7/PV40AI.5OCQpQEgEStxUCCfTleF.VwQXOWYmRC',NULL,'2022-04-22 20:07:44','2022-04-22 20:07:44'),(3,'user','84857173511','0',NULL,'3913150','$2y$10$N2pLe2Ft/wb//dRDHEGgqeL1I0ABgX8/6VSRqogP.DjP2eFS8cm4O',NULL,'2022-04-23 12:41:09','2022-04-25 02:56:46');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `withdraw_moneys`
--

DROP TABLE IF EXISTS `withdraw_moneys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `withdraw_moneys` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `withdrawMoney` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusMoney` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `withdraw_moneys`
--

LOCK TABLES `withdraw_moneys` WRITE;
/*!40000 ALTER TABLE `withdraw_moneys` DISABLE KEYS */;
INSERT INTO `withdraw_moneys` VALUES (2,'12','10','1','2022-04-20 09:55:55','2022-04-20 11:52:01'),(3,'12','10','1','2022-04-20 09:59:13','2022-04-20 11:52:06'),(4,'13','10','1','2022-04-20 10:01:07','2022-04-20 11:52:48'),(5,'12','10','0','2022-04-20 10:05:52','2022-04-20 10:05:52'),(6,'13','10','0','2022-04-20 10:06:08','2022-04-20 11:36:34'),(7,'12','10','2','2022-04-20 10:06:36','2022-04-20 12:01:38'),(8,'12','500','2','2022-04-20 12:50:55','2022-04-20 12:55:20'),(9,'12','300','1','2022-04-20 12:59:51','2022-04-20 13:00:06'),(10,'12','300','1','2022-04-20 13:14:53','2022-04-20 13:15:04');
/*!40000 ALTER TABLE `withdraw_moneys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `won_prizes`
--

DROP TABLE IF EXISTS `won_prizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `won_prizes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `time_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `won_prize` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `won_prize1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `won_prizes`
--

LOCK TABLES `won_prizes` WRITE;
/*!40000 ALTER TABLE `won_prizes` DISABLE KEYS */;
INSERT INTO `won_prizes` VALUES (1,'4064951787','ชิ้นใหญ่','ชิ้นคู่','2022-04-25 00:44:37','2022-04-25 00:44:37'),(2,'4064951787','ชิ้นใหญ่','ชิ้นใหญ่','2022-04-25 00:44:55','2022-04-25 00:44:55'),(3,'4064951787','ชิ้นคู่','ชิ้นใหญ่','2022-04-25 00:44:59','2022-04-25 00:44:59'),(4,'5642359459','ชิ้นเดียว','ชิ้นเดียว','2022-04-25 02:57:50','2022-04-25 02:57:50');
/*!40000 ALTER TABLE `won_prizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'beg'
--
