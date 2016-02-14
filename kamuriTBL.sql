-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: sql2.freemysqlhosting.net
-- Generation Time: Feb 14, 2016 at 07:56 PM
-- Server version: 5.5.46-0ubuntu0.12.04.2
-- PHP Version: 5.3.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sql287738`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamuriTBL`
--

CREATE TABLE IF NOT EXISTS `kamuriTBL` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pw` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kryp` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `profpic` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `secQ` int(11) NOT NULL,
  `secAns` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fbToken` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gpToken` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `role` int(11) NOT NULL DEFAULT '8',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`profpic`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kamuriTBL`
--

INSERT INTO `kamuriTBL` (`id`, `email`, `pw`, `kryp`, `address`, `profpic`, `secQ`, `secAns`, `fbToken`, `gpToken`, `role`) VALUES
(1, 'albocoder@gmail.com', 'db2d5c79e77af71cfdd2fbcb6a4a9a569c3a3435c871643f65525646a837a283afa2811d2d5905d70b2c154eeed8c9471646', '', 'Elbasan,Albania', 'user.jpg', 1, 'bacon', '0', '0', 1),
(2, 'argertboja@yahoo.com', '0331f7ccb4563faf9e42cc9a1380e42095602ed48a1aedf493333cf5521386ef09e2304018fc4e18f7d5334379632b577ac0', '', 'Elbasan,Albania', 'defaultPic.jpg', 1, 'pizza', '0', '0', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
