# ************************************************************
# Sequel Ace SQL dump
# Version 20077
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 9.0.1)
# Database: amanah_db
# Generation Time: 2025-06-16 23:10:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table t_media_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `t_media_category`;

CREATE TABLE `t_media_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `company_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `t_media_category` WRITE;
/*!40000 ALTER TABLE `t_media_category` DISABLE KEYS */;

INSERT INTO `t_media_category` (`id`, `name`, `thumbnail`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `company_id`)
VALUES
	(1,'Di Pesawat','Screenshot_2025-05-27_at_10.07.18.png','Kumpulan video saat jemaah haji berada di pesawat','2025-06-12 04:25:52',30,'2025-06-16 16:39:46',1,NULL,1),
	(2,'Di Asrama Haji','Screenshot_2025-05-27_at_10.07.48.png','Kumpulan video saat jemaah berada di Asrama Haji','2025-06-12 04:26:01',30,'2025-06-16 16:39:35',1,NULL,1),
	(3,'Rukun Ibadah','Screenshot_2025-05-27_at_10.06.46.png','Kumpulan video saat pelaksanaan ibadah haji dan umrah','2025-06-15 05:38:59',1,'2025-06-16 16:39:27',1,NULL,NULL);

/*!40000 ALTER TABLE `t_media_category` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
