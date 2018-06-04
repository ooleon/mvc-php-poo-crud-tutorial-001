-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2016 at 06:57 PM
-- Server version: 5.1.50
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contacts1`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `phone` varchar(64) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `address`) VALUES
(1, 'Manuel', '04122817654', 'masu.eden@gmail.com', 'Caracas, Venezuela'),
(2, 'Flora', '04143456878', 'fuad@gmail.com', 'Redoma 0, con calle arriba, plaza abajo'),
(3, 'Ziomara', '04263456789', 'zarf@gmail.com', 'Av. 1, Calle 2, Ciudad 3'),
(4, 'Abril', '04247654532', 'amja@gmail.com', 'Bogota, Colombia'),
(5, 'Tomas', '04167786543', 'tgbn@bibsun.com', 'Miranda, Venezuela'),
(13, 'Flore', '04143456833', 'fuad@gmail.com', 'Redoma 4, con calle derecha, plaza verde'),
(24, 'Flori', '04143456844', 'frsg@gmail.com', 'Redoma 3, con calle izquierda, plaza roja'),
(7, 'Marcos', '0111111111111', 'mnbv@joy.com', 'Paris, Francia');
