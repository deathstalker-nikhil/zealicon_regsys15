-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 08, 2016 at 10:08 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zealicon_registrations`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'registration1', 'india');

-- --------------------------------------------------------

--
-- Table structure for table `online_registrations`
--

CREATE TABLE IF NOT EXISTS `online_registrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `zealId` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `collegeName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `lan_gaming` int(1) NOT NULL DEFAULT '0',
  `icard` int(11) NOT NULL DEFAULT '0',
  `amount` int(3) NOT NULL DEFAULT '150',
  `receipt` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `registration_email_unique` (`email`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `paid_registrations`
--

CREATE TABLE IF NOT EXISTS `paid_registrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `zealId` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `collegeName` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `paid` tinyint(1) NOT NULL,
  `lan_gaming` int(1) NOT NULL DEFAULT '0',
  `icard` int(11) NOT NULL DEFAULT '0',
  `amount` int(3) NOT NULL DEFAULT '150',
  `receipt` int(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `registration_email_unique` (`email`),
  UNIQUE KEY `mobile` (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
