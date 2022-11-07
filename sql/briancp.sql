-- --------------------------------------------------------
-- Host:                         10.10.10.10
-- Server version:               10.4.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for briancp
CREATE DATABASE IF NOT EXISTS `briancp` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `briancp`;

-- Dumping structure for table briancp.accounts
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User account ID',
  `username` varchar(255) NOT NULL COMMENT 'Username of user',
  `password` varchar(255) NOT NULL COMMENT 'Password of user',
  `email` varchar(100) NOT NULL COMMENT 'E-Mail of user',
  `avatar` text NOT NULL DEFAULT 'https://ynnovate.it/wp-content/uploads/2015/04/default-avatar.png' COMMENT 'Avatar of user, HTML img for linking',
  `role` tinytext DEFAULT 'User' COMMENT 'Role of user',
  `country` tinytext DEFAULT 'No location set' COMMENT 'Country of user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='Administrative accounts, used to login in BrianCP.';

-- Dumping structure for table briancp.site_modules
CREATE TABLE IF NOT EXISTS `site_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Option ID',
  `title` mediumtext NOT NULL COMMENT 'Name of option',
  `option` mediumtext NOT NULL COMMENT 'Setting of option',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8mb4 COMMENT='Modules system';

-- Dumping data for table briancp.site_modules: ~3 rows (approximately)
DELETE FROM `site_modules`;
INSERT INTO `site_modules` (`id`, `title`, `option`) VALUES
	(1, 'Server Monitoring', '1'),
	(2, 'Package Manager', '1'),
	(2147483647, 'Hello World - Sample plugin', '1');

-- Dumping structure for table briancp.site_settings
CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Option ID',
  `name` mediumtext NOT NULL COMMENT 'Name of option',
  `option` mediumtext NOT NULL COMMENT 'Setting of option',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8mb4 COMMENT='Settings of control panel.';

-- Dumping data for table briancp.site_settings: ~2 rows (approximately)
DELETE FROM `site_settings`;
INSERT INTO `site_settings` (`id`, `name`, `option`) VALUES
	(1, 'site_title', 'BrianCP'),
	(2, 'site_logo', 'https://i.imgur.com/DEfEugx.png');

-- Dumping structure for table briancp.version
CREATE TABLE IF NOT EXISTS `version` (
  `id` int(11) NOT NULL,
  `package` text NOT NULL,
  `version` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table briancp.version: ~2 rows (approximately)
DELETE FROM `version`;
INSERT INTO `version` (`id`, `package`, `version`) VALUES
	(1, 'panel', '0.4 main'),
	(2, 'database', '0.4');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
