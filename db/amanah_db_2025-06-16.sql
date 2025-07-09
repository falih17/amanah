# ************************************************************
# Sequel Ace SQL dump
# Version 20077
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: localhost (MySQL 8.0.42-0ubuntu0.20.04.1)
# Database: amanah_db
# Generation Time: 2025-06-16 16:38:35 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table m_company
# ------------------------------------------------------------

DROP TABLE IF EXISTS `m_company`;

CREATE TABLE `m_company` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `latitude` decimal(10,0) DEFAULT NULL,
  `longitude` decimal(10,0) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) unsigned zerofill DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

LOCK TABLES `m_company` WRITE;
/*!40000 ALTER TABLE `m_company` DISABLE KEYS */;

INSERT INTO `m_company` (`id`, `name`, `address`, `phone`, `logo`, `latitude`, `longitude`, `created_at`, `created_by`, `updated_by`, `updated_at`, `deleted_at`)
VALUES
	(1,'CV. Gresik','Gresik','081999082633','Screenshot_2025-04-11_at_09.15.51.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(2,'CV. Surabaya','Surabaya','085259300068',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `m_company` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table m_config
# ------------------------------------------------------------

DROP TABLE IF EXISTS `m_config`;

CREATE TABLE `m_config` (
  `config_id` int NOT NULL,
  `config_name` varchar(255) DEFAULT NULL,
  `config_value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`config_id`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

LOCK TABLES `m_config` WRITE;
/*!40000 ALTER TABLE `m_config` DISABLE KEYS */;

INSERT INTO `m_config` (`config_id`, `config_name`, `config_value`)
VALUES
	(1,'app_name','Hippam'),
	(2,'admin_price','2000'),
	(3,'company_address','Bojonegoro');

/*!40000 ALTER TABLE `m_config` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table m_flow
# ------------------------------------------------------------

DROP TABLE IF EXISTS `m_flow`;

CREATE TABLE `m_flow` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `form_id` int DEFAULT NULL,
  `on_create` datetime DEFAULT CURRENT_TIMESTAMP,
  `on_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `usergroup_view_all` varchar(100) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  `usergroup_menu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;



# Dump of table m_retail
# ------------------------------------------------------------

DROP TABLE IF EXISTS `m_retail`;

CREATE TABLE `m_retail` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `location_lat` varchar(100) DEFAULT NULL,
  `location_long` varchar(100) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `company_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

LOCK TABLES `m_retail` WRITE;
/*!40000 ALTER TABLE `m_retail` DISABLE KEYS */;

INSERT INTO `m_retail` (`id`, `name`, `address`, `location_lat`, `location_long`, `picture`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `company_id`)
VALUES
	(1,'Toko Socah','Socah','0.177878','0.9892187','Screenshot_2025-04-11_at_14.12.58.png',NULL,NULL,NULL,NULL,NULL,NULL),
	(2,'tokoabc','Rungkut','276183612786','276112786',NULL,'2025-05-22 13:38:23','2025-05-23 15:29:06',NULL,31,1,1),
	(3,'Toko Basmalah','Graha Kamal Permai','8723166','171833',NULL,NULL,'2025-05-23 15:30:27',NULL,NULL,1,NULL);

/*!40000 ALTER TABLE `m_retail` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table s_usergroup
# ------------------------------------------------------------

DROP TABLE IF EXISTS `s_usergroup`;

CREATE TABLE `s_usergroup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

LOCK TABLES `s_usergroup` WRITE;
/*!40000 ALTER TABLE `s_usergroup` DISABLE KEYS */;

INSERT INTO `s_usergroup` (`id`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `name`, `desc`)
VALUES
	(1,'2019-02-14 10:47:52',NULL,NULL,NULL,NULL,'1. owner','administrator'),
	(2,'2021-01-19 13:00:20',NULL,NULL,NULL,NULL,'2. admin',NULL),
	(3,'2021-01-19 13:00:20',NULL,NULL,NULL,NULL,'3. distributor',NULL),
	(4,'2021-01-19 13:00:20',NULL,NULL,NULL,NULL,'4. agen',NULL);

/*!40000 ALTER TABLE `s_usergroup` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table s_menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `s_menu`;

CREATE TABLE `s_menu` (
  `menu_id` int NOT NULL AUTO_INCREMENT,
  `menu_nama` varchar(255) DEFAULT NULL,
  `menu_ket` varchar(255) DEFAULT NULL,
  `menu_url` varchar(255) DEFAULT NULL,
  `menu_icon` varchar(255) DEFAULT NULL,
  `menu_parent` int DEFAULT '0',
  `menu_active` char(1) DEFAULT NULL,
  `menu_kode` varchar(255) DEFAULT NULL,
  `menu_order` smallint DEFAULT NULL,
  PRIMARY KEY (`menu_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

LOCK TABLES `s_menu` WRITE;
/*!40000 ALTER TABLE `s_menu` DISABLE KEYS */;

INSERT INTO `s_menu` (`menu_id`, `menu_nama`, `menu_ket`, `menu_url`, `menu_icon`, `menu_parent`, `menu_active`, `menu_kode`, `menu_order`)
VALUES
	(1,'[< sys >]',NULL,'formx/formx/table/menu','fa fa-list',0,'y','form_1',0),
	(2,'sys-menu',NULL,'formx/formx/table/menu','',1,'y','form_2',NULL),
	(3,'user',NULL,'formx/formx/table/user','fa fa-user',10,'y','form_3',101),
	(10,'Master',NULL,'','',0,'y','',1),
	(39,'Data Company',NULL,'formx/formx/table/32','',1,'y','form_32',0),
	(41,'sys-form generator',NULL,'formx_gen/','',1,'y','',NULL),
	(50,'sys-user',NULL,'formx/formx/table/40',NULL,1,'y','form_40',0),
	(52,'media',NULL,'formx/formx/table/29',NULL,10,'y','form_29',0),
	(53,'Media Category',NULL,'formx/formx/table/44',NULL,10,'y','form_44',0);

/*!40000 ALTER TABLE `s_menu` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table s_akses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `s_akses`;

CREATE TABLE `s_akses` (
  `akses_id` int NOT NULL AUTO_INCREMENT,
  `usergroup_id` int DEFAULT NULL,
  `menu_id` int DEFAULT NULL,
  `akses_active` varchar(1) DEFAULT 'y',
  `akses_code` varchar(100) DEFAULT NULL,
  `order` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  PRIMARY KEY (`akses_id`) USING BTREE,
  KEY `lnk_m_menu_t_akses` (`menu_id`) USING BTREE,
  KEY `lnk_m_usergroup_t_akses` (`usergroup_id`) USING BTREE,
  CONSTRAINT `s_akses_ibfk_1` FOREIGN KEY (`usergroup_id`) REFERENCES `s_usergroup` (`id`),
  CONSTRAINT `s_akses_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `s_menu` (`menu_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

LOCK TABLES `s_akses` WRITE;
/*!40000 ALTER TABLE `s_akses` DISABLE KEYS */;

INSERT INTO `s_akses` (`akses_id`, `usergroup_id`, `menu_id`, `akses_active`, `akses_code`, `order`, `created_at`, `updated_at`, `updated_by`, `created_by`)
VALUES
	(1,1,1,'y','[\"xcreate\",\"xread\",\"xupdate\",\"xdelete\"]',1,NULL,NULL,NULL,NULL),
	(2,1,2,'y','[\"xcreate\",\"xread\",\"xupdate\",\"xdelete\"]',1,NULL,NULL,NULL,NULL),
	(3,1,3,'y','[\"xcreate\",\"xupdate\",\"xdelete\"]',1,NULL,NULL,NULL,NULL),
	(19,1,10,'y','null',NULL,NULL,NULL,NULL,NULL),
	(62,1,39,'y','[\"xread\",\"xcreate\",\"xupdate\",\"xdelete\"]',NULL,NULL,NULL,NULL,NULL),
	(63,3,3,'y','[\"xread\",\"xcreate\",\"xupdate\",\"xdelete\"]',NULL,NULL,NULL,NULL,NULL),
	(64,3,10,'y','[\"xread\",\"xcreate\",\"xupdate\",\"xdelete\"]',NULL,NULL,NULL,NULL,NULL),
	(66,1,41,'y','[\"xread\",\"xcreate\",\"xupdate\",\"xdelete\"]',NULL,NULL,NULL,NULL,NULL),
	(67,2,10,'y','[\"xread\",\"xcreate\",\"xupdate\",\"xdelete\"]',NULL,NULL,NULL,NULL,NULL),
	(68,2,3,'y','[\"xread\",\"xcreate\",\"xupdate\",\"xdelete\"]',NULL,NULL,NULL,NULL,NULL),
	(94,1,50,'y','[\"xread\",\"xcreate\",\"xupdate\",\"xdelete\"]',NULL,NULL,NULL,NULL,NULL),
	(100,1,52,'y','[\"xread\",\"xcreate\",\"xupdate\",\"xdelete\"]',NULL,'2025-06-12 04:22:45',NULL,NULL,1),
	(101,2,52,'y','[\"xread\",\"xcreate\",\"xupdate\",\"xdelete\"]',NULL,'2025-06-12 04:22:55',NULL,NULL,1),
	(102,1,53,'y','[\"xread\",\"xcreate\",\"xupdate\",\"xdelete\"]',NULL,'2025-06-12 04:23:15',NULL,NULL,1),
	(103,2,53,'y','[\"xread\",\"xcreate\",\"xupdate\",\"xdelete\"]',NULL,'2025-06-12 04:23:26',NULL,NULL,1);

/*!40000 ALTER TABLE `s_akses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table s_api_keys
# ------------------------------------------------------------

DROP TABLE IF EXISTS `s_api_keys`;

CREATE TABLE `s_api_keys` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `key` varchar(64) NOT NULL,
  `level` int DEFAULT NULL,
  `ignore_limits` tinyint(1) DEFAULT '0',
  `is_private_key` tinyint(1) DEFAULT '0',
  `ip_addresses` text,
  `date_created` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

LOCK TABLES `s_api_keys` WRITE;
/*!40000 ALTER TABLE `s_api_keys` DISABLE KEYS */;

INSERT INTO `s_api_keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`)
VALUES
	(1,1,'0695cabefc1d6bd11e6e13f1e04cffc2b2e07a3251af24c960dbae5c758b62b7',NULL,0,0,NULL,NULL),
	(2,1,'1f38c77fb7c5893ba61826b1087a9638429c8959059b73b0847f132ca5e01a13',NULL,0,0,NULL,NULL),
	(3,30,'105bf1d755e56dd35711052d6b6629ab2f6dcf2eb6ead40ed51fde9ae4320095',NULL,0,0,NULL,NULL),
	(4,31,'e8084ef026210fca3137f2a956c37cf1c7d07c5146a7445491bc622354c69dd7',NULL,0,0,NULL,NULL),
	(5,31,'f94ffe2191e6b7c664dc8a104f7a0ccc1e85b8b2b7d24895c372501ed1190c59',NULL,0,0,NULL,NULL);

/*!40000 ALTER TABLE `s_api_keys` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table s_dropdown
# ------------------------------------------------------------

DROP TABLE IF EXISTS `s_dropdown`;

CREATE TABLE `s_dropdown` (
  `id` int NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) DEFAULT NULL,
  `dd_field_name` varchar(255) DEFAULT NULL,
  `dd_field_id` varchar(255) DEFAULT NULL,
  `dd_field_subname` varchar(255) DEFAULT NULL,
  `dd_title` varchar(100) DEFAULT NULL,
  `json_value` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

LOCK TABLES `s_dropdown` WRITE;
/*!40000 ALTER TABLE `s_dropdown` DISABLE KEYS */;

INSERT INTO `s_dropdown` (`id`, `table_name`, `dd_field_name`, `dd_field_id`, `dd_field_subname`, `dd_title`, `json_value`)
VALUES
	(1,'s_usergroup','name','id',NULL,'dd_usergroup',NULL),
	(2,NULL,NULL,NULL,NULL,'dd_ya_tidak',X'7B2231223A227961222C2230223A22746964616B227D'),
	(3,NULL,NULL,NULL,NULL,'dd_year',X'7B2232303235223A2232303235222C2232303236223A2232303236222C2232303237223A2232303237227D'),
	(8,NULL,NULL,NULL,NULL,'dd_gender',X'7B2250223A22506572656D7075616E222C224C223A224C616B692D6C616B69227D'),
	(13,NULL,NULL,NULL,NULL,'dd_month',X'7B2231223A224A616E75617269222C2232223A224665627275617269222C2233223A224D61726574222C2234223A22417072696C222C2235223A224D6569222C2236223A224A756E69222C2237223A224A756C69222C2238223A2241677573747573222C2239223A2253657074656D626572222C223130223A224F6B746F626572222C223131223A224E6F70656D626572222C223132223A22446573656D626572227D'),
	(14,NULL,NULL,NULL,NULL,'dd_status_transaksi',X'7B227461676968616E223A227461676968616E222C226C756E6173223A226C756E6173227D'),
	(15,'m_company','name','id',NULL,'dd_company',NULL),
	(16,NULL,NULL,NULL,NULL,'dd_role_user_distributor',X'7B2234223A226167656E227D'),
	(21,'t_media_category','name','id',NULL,'dd_category_media',NULL);

/*!40000 ALTER TABLE `s_dropdown` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table s_form
# ------------------------------------------------------------

DROP TABLE IF EXISTS `s_form`;

CREATE TABLE `s_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `form_name` varchar(255) NOT NULL,
  `form_table` varchar(255) NOT NULL,
  `parent_form_id` int DEFAULT NULL,
  `parent_form_foreign_key` varchar(100) DEFAULT NULL,
  `is_soft_delete` smallint DEFAULT '0',
  `js_addon` varchar(255) DEFAULT NULL,
  `datatable_button_addon` varchar(2044) DEFAULT NULL,
  `fun_is_editable` varchar(2044) DEFAULT NULL,
  `col_sort_name` varchar(100) DEFAULT NULL,
  `col_sort_type` varchar(10) DEFAULT NULL,
  `table_type` varchar(10) DEFAULT 'datatable',
  `slug` varchar(255) DEFAULT NULL,
  `is_import` smallint DEFAULT '0',
  `form_table_read` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

LOCK TABLES `s_form` WRITE;
/*!40000 ALTER TABLE `s_form` DISABLE KEYS */;

INSERT INTO `s_form` (`id`, `form_name`, `form_table`, `parent_form_id`, `parent_form_foreign_key`, `is_soft_delete`, `js_addon`, `datatable_button_addon`, `fun_is_editable`, `col_sort_name`, `col_sort_type`, `table_type`, `slug`, `is_import`, `form_table_read`)
VALUES
	(1,'menu','s_menu',NULL,'menu_parent',0,NULL,NULL,NULL,'menu_order','asc','tree','menu',0,NULL),
	(2,'menu akses','s_akses',1,'menu_id',0,NULL,NULL,NULL,NULL,NULL,'datatable','akses',0,NULL),
	(3,'user','s_user',NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'datatable','user',0,''),
	(28,'Config','m_config',NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'datatable','m_config',0,''),
	(29,'media','t_media',NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'datatable','media',0,''),
	(32,'Data Company','m_company',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,'datatable','m_company',0,'m_company'),
	(40,'sys-user','s_user',NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,'datatable','sys-s_user',0,'s_user'),
	(44,'Media Category','t_media_category',NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,'datatable','t_media_category',0,'t_media_category');

/*!40000 ALTER TABLE `s_form` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table s_form_filter
# ------------------------------------------------------------

DROP TABLE IF EXISTS `s_form_filter`;

CREATE TABLE `s_form_filter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `form_id` int NOT NULL,
  `dropdown_name` varchar(255) NOT NULL,
  `column_name` varchar(255) NOT NULL,
  `placeholder` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `lnk_m_form_m_form_filter` (`form_id`) USING BTREE,
  CONSTRAINT `s_form_filter_ibfk_1` FOREIGN KEY (`form_id`) REFERENCES `s_form` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;



# Dump of table s_form_param
# ------------------------------------------------------------

DROP TABLE IF EXISTS `s_form_param`;

CREATE TABLE `s_form_param` (
  `id` int NOT NULL AUTO_INCREMENT,
  `label_name` varchar(2044) DEFAULT NULL,
  `form_id` int NOT NULL,
  `column_name` varchar(255) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `order_no` int DEFAULT NULL,
  `validation` varchar(255) DEFAULT NULL,
  `table_ref` varchar(255) DEFAULT NULL,
  `info` varchar(2044) DEFAULT NULL,
  `active` smallint DEFAULT '1',
  `column_datatable` smallint DEFAULT '1',
  `required` smallint DEFAULT '0',
  `path_upload` varchar(100) DEFAULT NULL,
  `col_md` varchar(50) DEFAULT 'col-md-6',
  `readonly` smallint DEFAULT '0',
  `default_value` varchar(50) DEFAULT NULL,
  `new_form_id` int DEFAULT NULL,
  `is_unique` smallint DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `lnk_m_form_m_form_param` (`form_id`) USING BTREE,
  CONSTRAINT `s_form_param_ibfk_1` FOREIGN KEY (`form_id`) REFERENCES `s_form` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=249 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

LOCK TABLES `s_form_param` WRITE;
/*!40000 ALTER TABLE `s_form_param` DISABLE KEYS */;

INSERT INTO `s_form_param` (`id`, `label_name`, `form_id`, `column_name`, `type`, `order_no`, `validation`, `table_ref`, `info`, `active`, `column_datatable`, `required`, `path_upload`, `col_md`, `readonly`, `default_value`, `new_form_id`, `is_unique`)
VALUES
	(1,'menu nama',1,'menu_nama','text',NULL,NULL,'',NULL,1,1,NULL,NULL,'col-md-6',0,NULL,NULL,NULL),
	(2,'menu url',1,'menu_url','text',NULL,NULL,'',NULL,1,NULL,NULL,NULL,'col-md-6',0,NULL,NULL,NULL),
	(3,'menu icon',1,'menu_icon','text',NULL,NULL,'',NULL,1,NULL,NULL,NULL,'col-md-6',0,NULL,NULL,NULL),
	(4,'menu active',1,'menu_active','select',NULL,NULL,'{\"y\":\"ya\",\"t\":\"tidak\"}',NULL,1,NULL,NULL,NULL,'col-md-6',0,NULL,NULL,NULL),
	(5,'menu kode',1,'menu_kode','text',NULL,NULL,'',NULL,1,NULL,NULL,NULL,'col-md-6',0,NULL,NULL,NULL),
	(6,'usergroup',2,'usergroup_id','select_ajax',NULL,NULL,'dd_usergroup',NULL,1,1,0,NULL,'col-md-6',0,NULL,NULL,0),
	(7,'akses',2,'akses_code','checkbox',NULL,NULL,'{\"xread\":\"read\",\"xcreate\":\"create\",\"xupdate\":\"update\",\"xdelete\":\"delete\"}',NULL,1,1,0,NULL,'col-md-6',0,NULL,NULL,0),
	(8,'usergroup',3,'usergroup_id','select_ajax',3,NULL,'dd_usergroup',NULL,1,1,1,'','col-md-6',0,NULL,NULL,NULL),
	(9,'password',3,'password','password',2,NULL,'',NULL,1,NULL,1,'','col-md-6',0,NULL,NULL,NULL),
	(10,'active',3,'active','select',4,NULL,'dd_ya_tidak',NULL,1,1,1,'','col-md-6',0,NULL,NULL,NULL),
	(19,'username',3,'email','text',1,NULL,'',NULL,1,1,1,'','col-md-6',0,NULL,NULL,NULL),
	(45,'karyawan',3,'employee_id','select_ajax',NULL,NULL,'',NULL,NULL,NULL,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(133,'nama',28,'config_name','text',NULL,NULL,'',NULL,NULL,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(134,'value',28,'config_value','text',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(137,'File Indonesia',29,'media_file','file',3,NULL,'',NULL,1,1,NULL,'uploads/media/','col-md-6',0,NULL,NULL,NULL),
	(138,'media title',29,'media_title','text',1,NULL,'',NULL,1,1,1,'','col-md-6',0,NULL,NULL,NULL),
	(139,'media url Indonesia',29,'media_url','text',5,NULL,'',NULL,1,1,NULL,'uploads/media/','col-md-6',0,NULL,NULL,NULL),
	(149,'name',32,'name','text',NULL,NULL,'',NULL,1,1,1,'','col-md-6',0,NULL,NULL,NULL),
	(150,'address',32,'address','textarea',NULL,NULL,'',NULL,1,1,1,'','col-md-6',0,NULL,NULL,NULL),
	(151,'phone',32,'phone','text',NULL,NULL,'',NULL,1,1,1,'','col-md-6',0,NULL,NULL,NULL),
	(152,'logo',32,'logo','img',NULL,NULL,'',NULL,1,NULL,NULL,'uploads/company/','col-md-6',0,NULL,NULL,NULL),
	(198,'usergroup id',40,'usergroup_id','select_ajax',NULL,NULL,'dd_usergroup',NULL,1,1,1,'','col-md-6',0,NULL,NULL,NULL),
	(199,'ip address',40,'ip_address','text',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(200,'username',40,'username','text',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(201,'password',40,'password','text',NULL,NULL,'',NULL,1,1,1,'','col-md-6',0,NULL,NULL,NULL),
	(202,'email',40,'email','text',NULL,NULL,'',NULL,1,1,1,'','col-md-6',0,NULL,NULL,NULL),
	(203,'activation code',40,'activation_code','text',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(204,'forgotten password code',40,'forgotten_password_code','text',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(205,'forgotten password time',40,'forgotten_password_time','text',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(206,'remember code',40,'remember_code','text',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(207,'active',40,'active','text',NULL,NULL,'',NULL,1,1,1,'','col-md-6',0,NULL,NULL,NULL),
	(208,'full name',40,'full_name','text',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(209,'company id',40,'company_id','select_ajax',NULL,NULL,'dd_company',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(210,'phone',40,'phone','numeric',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(211,'last login',40,'last_login','text',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(212,'foto',40,'foto','img',NULL,NULL,'',NULL,1,1,NULL,'uploads/user_profile/','col-md-6',0,NULL,NULL,NULL),
	(213,'employee id',40,'employee_id','text',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(214,'assign lat',40,'assign_lat','latitude',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(215,'assign long',40,'assign_long','longitude',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(234,'latitude',32,'latitude','latlong',NULL,NULL,'',NULL,NULL,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(244,'name',44,'name','text',NULL,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(245,'media category',29,'media_category','select_ajax',2,NULL,'dd_category_media',NULL,1,1,1,'','col-md-6',0,NULL,NULL,NULL),
	(246,'File Madura',29,'media_file2','file',4,NULL,'',NULL,1,1,NULL,'uploads/media/','col-md-6',0,NULL,NULL,NULL),
	(247,'media url Madura',29,'media_url2','text',6,NULL,'',NULL,1,1,NULL,'','col-md-6',0,NULL,NULL,NULL),
	(248,'thumbnail',44,'thumbnail','img',NULL,NULL,'',NULL,1,1,NULL,'uploads/category_thumb/','col-md-6',0,NULL,NULL,NULL);

/*!40000 ALTER TABLE `s_form_param` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table s_form_parent
# ------------------------------------------------------------

DROP TABLE IF EXISTS `s_form_parent`;

CREATE TABLE `s_form_parent` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `form_parent_id` int NOT NULL,
  `form_child_id` int NOT NULL,
  `form_child_fk` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

LOCK TABLES `s_form_parent` WRITE;
/*!40000 ALTER TABLE `s_form_parent` DISABLE KEYS */;

INSERT INTO `s_form_parent` (`id`, `form_parent_id`, `form_child_id`, `form_child_fk`)
VALUES
	(19,1,2,'menu_id');

/*!40000 ALTER TABLE `s_form_parent` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table s_user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `s_user`;

CREATE TABLE `s_user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usergroup_id` int NOT NULL DEFAULT '3',
  `ip_address` varchar(45) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(100) DEFAULT NULL,
  `forgotten_password_time` int DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `active` smallint NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `company_id` int DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `employee_id` bigint unsigned DEFAULT NULL,
  `assign_lat` decimal(10,0) DEFAULT NULL,
  `assign_long` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `lnk_m_usergroup_m_user` (`usergroup_id`) USING BTREE,
  CONSTRAINT `s_user_ibfk_1` FOREIGN KEY (`usergroup_id`) REFERENCES `s_usergroup` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3 ROW_FORMAT=DYNAMIC;

LOCK TABLES `s_user` WRITE;
/*!40000 ALTER TABLE `s_user` DISABLE KEYS */;

INSERT INTO `s_user` (`id`, `usergroup_id`, `ip_address`, `username`, `password`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `active`, `full_name`, `company_id`, `phone`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `last_login`, `foto`, `employee_id`, `assign_lat`, `assign_long`)
VALUES
	(1,1,NULL,'admin','$2y$10$2Ln2x4QpuA/N7mQLKpdmJuBLLbfNMCt1oW8YNWLPet6qvaS62Q6UW','owner',NULL,NULL,NULL,NULL,1,'Administrator',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(29,3,NULL,NULL,'$2y$10$LHiseKYmK88tT9IvD/yhbO.kVmBnBpaHfunON3e8xfnCK0TQQfKHS','distributor',NULL,NULL,NULL,NULL,1,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(30,2,NULL,NULL,'$2y$10$zbdzA25JoytWAlHkeCHfr.Mo.JclvxCGIxcZAIbnIyRcG4SawzK9S','admin',NULL,NULL,NULL,NULL,1,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(31,4,NULL,NULL,'$2y$10$QeQQl5XSUfCWHbgLCpwAPeu7aecMbbXTuMcINbWob/leZaFP82JiO','sales1',NULL,NULL,NULL,NULL,1,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(32,4,NULL,NULL,'$2y$10$VgaE3lDdXWD/N4Fq2O/0S./Chkk1SVQ47uCBRrWVtQJjUD.5VVJeq','sales2',NULL,NULL,NULL,NULL,2,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(33,4,NULL,NULL,'$2y$10$X1KIxL7UQNH5HIn540jpaOKk7Ba0UwthBH7tUoswDIPt4Nt7ThZcK','sales1.2',NULL,NULL,NULL,NULL,1,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(34,4,NULL,NULL,'$2y$10$mDRR77qWSpgkIhgVI4g/6OQEo07p9fyaPDEeIsvfGI2j/2MfGnt3i','sales1.2',NULL,NULL,NULL,NULL,1,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(35,3,NULL,NULL,'$2y$10$3dG1SReo5weyR1/ILAgrJO4XAVY4Ksi3Yz1KCuAKvlEpD5OXW4nKK','distributor2',NULL,NULL,NULL,NULL,1,NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(37,4,NULL,NULL,'$2y$10$dTrwvPrfLFmg9GWKPk0pjuDNndRqD96RlNw1En6MaVKTGitesfYTW','sales2.1',NULL,NULL,NULL,NULL,2,NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `s_user` ENABLE KEYS */;
UNLOCK TABLES;

# Dump of table t_media
# ------------------------------------------------------------

DROP TABLE IF EXISTS `t_media`;

CREATE TABLE `t_media` (
  `media_id` int NOT NULL AUTO_INCREMENT,
  `media_file` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `media_file2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `media_title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `media_category` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `media_url` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `media_url2` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `company_id` int DEFAULT NULL,
  PRIMARY KEY (`media_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

LOCK TABLES `t_media` WRITE;
/*!40000 ALTER TABLE `t_media` DISABLE KEYS */;

INSERT INTO `t_media` (`media_id`, `media_file`, `media_file2`, `media_title`, `media_category`, `media_url`, `media_url2`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `company_id`)
VALUES
	(3,'WhatsApp_Video_2025-06-14_at_00.18.46.mp4',NULL,'Cara Makan Di Pesawat','1','','',NULL,'2025-06-15 04:59:32',1,NULL,NULL,NULL,NULL),
	(4,'Amanah_-_Tata_Cara_Memakai_Ihram.mp4',NULL,'Tata Cara Memakai Ihram','3','','',NULL,'2025-06-15 05:00:50',30,'2025-06-15 05:39:31',1,NULL,1),
	(5,'Amanah_-_Tata_Cara_Sholat_Di_Pesawat.mp4',NULL,'Tata Cara Sholat Di Pesawat','1','','',NULL,'2025-06-15 05:09:19',30,NULL,NULL,NULL,1),
	(6,'Amanah_-_Menggunakan_Sabuk_Pengaman.mp4',NULL,'Cara Menggunakan Sabuk Pengaman','1','','',NULL,'2025-06-15 05:11:09',30,NULL,NULL,NULL,1),
	(7,'Amanah_-_Menggunakan_Sandaran_Kursi.mp4',NULL,'Cara Menggunakan Sandaran Kursi','1','','',NULL,'2025-06-15 05:13:35',30,NULL,NULL,NULL,1),
	(8,'Amanah_-_Menggunakan_Meja_Makan.mp4',NULL,'Cara Menggunakan Meja Makan','1','','',NULL,'2025-06-15 05:21:26',30,NULL,NULL,NULL,1),
	(9,'Amanah_-_Menggunakan_AC,_Lampu_Baca,_dan_Media_Hiburan.mp4',NULL,'Cara Menggunakan AC, Lampu Baca, dan Media Hiburan','1','','',NULL,'2025-06-15 05:26:57',30,NULL,NULL,NULL,1),
	(10,'Amanah_-_Menggunakan_Toilet.mp4',NULL,'Cara Menggunakan Toilet','1','','',NULL,'2025-06-15 05:36:57',30,NULL,NULL,NULL,1);

/*!40000 ALTER TABLE `t_media` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table t_media_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `t_media_category`;

CREATE TABLE `t_media_category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
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

INSERT INTO `t_media_category` (`id`, `name`, `thumbnail`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `company_id`)
VALUES
	(1,'Di Pesawat','Screenshot_2025-05-27_at_10.07.18.png','2025-06-12 04:25:52',30,'2025-06-16 16:34:30',1,NULL,1),
	(2,'Di Asrama Haji','Screenshot_2025-05-27_at_10.07.48.png','2025-06-12 04:26:01',30,'2025-06-16 16:34:09',1,NULL,1),
	(3,'Rukun Ibadah','Screenshot_2025-05-27_at_10.06.46.png','2025-06-15 05:38:59',1,'2025-06-16 16:33:52',1,NULL,NULL);

/*!40000 ALTER TABLE `t_media_category` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
