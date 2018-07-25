-- --------------------------------------------------------
-- Сервер:                       127.0.0.1
-- Версія сервера:               5.7.20 - MySQL Community Server (GPL)
-- ОС сервера:                   Win64
-- HeidiSQL Версія:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `test`;

-- Dumping structure for таблиця test.goods
CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `art` int(11) DEFAULT NULL,
  `title` char(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `category` char(50) DEFAULT NULL,
  `tags` char(50) DEFAULT NULL,
  `mainPrice` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table test.goods: ~5 rows (приблизно)
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
REPLACE INTO `goods` (`id`, `art`, `title`, `description`, `category`, `tags`, `mainPrice`) VALUES
	(1, 0, 'New test goods\r\n', 'Some kind of goods', 'main', 'main,wool,cool', 10),
	(2, 0, 'New test goods\r\n', 'Some kind of goods', 'electronic', 'electronic,smartphone,2sim', 2000),
	(3, 0, 'New test goods\r\n', 'Some kind of goods', 'electronic', 'electronic,smartphone,2sim', 2000),
	(4, 0, 'New test goods\r\n', 'Some kind of goods', 'electronic', 'electronic,smartphone,2sim', 2000),
	(5, 0, 'New test goods\r\n', 'Some kind of goods', 'electronic', 'electronic,smartphone,2sim', 2000);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;

-- Dumping structure for таблиця test.priceperiod
CREATE TABLE IF NOT EXISTS `priceperiod` (
  `ppid` int(11) NOT NULL AUTO_INCREMENT,
  `gid` int(11) DEFAULT NULL,
  `startDate` timestamp NULL DEFAULT NULL,
  `endDate` timestamp NULL DEFAULT NULL,
  `diffDate` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`ppid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Dumping data for table test.priceperiod: ~10 rows (приблизно)
/*!40000 ALTER TABLE `priceperiod` DISABLE KEYS */;
REPLACE INTO `priceperiod` (`ppid`, `gid`, `startDate`, `endDate`, `diffDate`, `price`) VALUES
	(11, 1, '2018-06-25 00:00:00', '2018-07-25 00:00:00', 2592000, 100000),
	(12, 2, '2016-01-01 00:00:00', '2018-07-25 00:00:00', 80870400, 8000),
	(13, 2, '2016-05-01 00:00:00', '2017-01-01 00:00:00', 21168000, 12000),
	(14, 2, '2016-07-01 00:00:00', '2016-09-10 00:00:00', 6134400, 15000),
	(15, 2, '2017-06-01 00:00:00', '2017-10-20 00:00:00', 12182400, 20000),
	(16, 2, '2017-12-15 00:00:00', '2017-12-31 00:00:00', 1382400, 5000),
	(17, 1, '2018-07-20 00:00:00', '2018-07-26 00:00:00', 518400, 1),
	(18, 1, '2018-05-28 00:00:00', '2018-07-31 00:00:00', 5529600, 2),
	(19, 1, '2018-05-28 00:00:00', '2018-07-25 00:00:00', 5011200, 2222),
	(20, 3, '2018-06-25 00:00:00', '2018-07-25 00:00:00', 2592000, 333333);
/*!40000 ALTER TABLE `priceperiod` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
