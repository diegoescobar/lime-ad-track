-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2015 at 11:10 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `development`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_clicks`
--

CREATE TABLE IF NOT EXISTS `ad_clicks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(16) CHARACTER SET latin1 NOT NULL,
  `viewed` tinyint(1) NOT NULL,
  `clicked` tinyint(1) NOT NULL,
  `blocked` tinyint(1) NOT NULL,
  `ad_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=172 ;

--
-- Dumping data for table `ad_clicks`
--

INSERT INTO `ad_clicks` (`id`, `timestamp`, `ip`, `viewed`, `clicked`, `blocked`, `ad_id`) VALUES
(171, '2015-01-16 21:59:35', '74.15.167.215', 1, 0, 1, 1),
(170, '2015-01-16 21:59:30', '74.15.167.215', 1, 1, 0, 1),
(169, '2015-01-16 21:59:25', '74.15.167.215', 1, 0, 0, 1),
(168, '2015-01-16 21:58:20', '74.15.167.215', 0, 0, 0, 1),
(167, '2015-01-16 21:58:19', '74.15.167.215', 0, 0, 0, 1),
(166, '2015-01-16 21:58:04', '74.15.167.215', 0, 0, 0, 1),
(165, '2015-01-16 21:57:23', '74.15.167.215', 0, 0, 1, 1),
(164, '2015-01-16 21:57:22', '74.15.167.215', 0, 0, 1, 1),
(163, '2015-01-16 21:51:02', '74.15.167.215', 0, 1, 0, 1),
(162, '2015-01-16 21:48:24', '74.15.167.215', 0, 1, 1, 1),
(161, '2015-01-16 21:48:16', '74.15.167.215', 0, 0, 1, 1),
(160, '2015-01-16 21:48:10', '74.15.167.215', 0, 0, 1, 1),
(159, '2015-01-16 21:48:04', '74.15.167.215', 0, 0, 1, 1),
(158, '2015-01-16 21:47:57', '74.15.167.215', 0, 0, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
