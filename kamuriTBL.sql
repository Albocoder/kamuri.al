-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: sql2.freemysqlhosting.net
-- Generation Time: Feb 08, 2016 at 03:22 PM
-- Server version: 5.5.46-0ubuntu0.12.04.2
-- PHP Version: 5.3.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+02:00";


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
  `email` varchar(100) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `profpic` varchar(100) NOT NULL,
  `secQ` int(11) NOT NULL,
  `secAns` varchar(50) NOT NULL,
  `fbToken` varchar(50) NOT NULL,
  `gpToken` varchar(50) NOT NULL DEFAULT '0',
  `role` int(11) NOT NULL DEFAULT '8',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`profpic`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kamuriTBL`
--

INSERT INTO `kamuriTBL` (`id`, `email`, `pw`, `address`, `profpic`, `secQ`, `secAns`, `fbToken`, `gpToken`, `role`) VALUES
(1, 'albocoder@gmail.com', '422e0ec76fbabc62913bbde3628f9ba7c2f32ba', 'Elbasan,Albania', 'user.jpg', 1, 'bacon', '0', '0', 1),
(2, 'argertboja@yahoo.com', '422e0ec76fbabc62913bbde3628f9ba7c2f32ba', 'Elbasan,Albania', 'defaultPic.jpg', 0, '', '', '0', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
