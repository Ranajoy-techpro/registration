-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2019 at 10:36 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `unm` text NOT NULL,
  `eml` text NOT NULL,
  `pswd` text NOT NULL,
  `adds` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`unm`, `eml`, `pswd`, `adds`) VALUES
('Rama', 'rama@gmail.com', 'rama1234', 'Chanditala'),
('Jay', 'jay2gmail.com', '1234jay', 'gara'),
('Rakesh', 'rakesh@gmail.com', 'rak123', 'Chanditala'),
('jadu', 'jadu@mail.com', 'jadu123', 'Ramrajatala'),
('Soumya', 'soumya@gmail.com', 'sou123', 'Kolkata'),
('jaya', 'jaya@gmail.com', 'jaya123', 'Dankuni'),
('bhas', 'bhas@gmail.com', 'bhas123', 'Garalgacha'),
('fab', 'fab@gmail.com', 'fab123', 'Chanditala'),
('dear', 'dear@gmail.com', 'dear1234', 'USA'),
('Rana', 'rana@rediffmail.com', 'rana1234', 'Kalipur');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
