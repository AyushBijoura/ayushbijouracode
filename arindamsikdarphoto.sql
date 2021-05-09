-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2016 at 01:28 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arindamsikdarphoto`
--
CREATE DATABASE IF NOT EXISTS `arindamsikdarphoto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `arindamsikdarphoto`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'arindamsikdarphotography@admin1.com', 'arindamsikdarphotography@admin1.com');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE IF NOT EXISTS `children` (
  `child_id` int(255) NOT NULL AUTO_INCREMENT,
  `child_image` varchar(255) NOT NULL,
  PRIMARY KEY (`child_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`child_id`, `child_image`) VALUES
(1, 'child2.jpg'),
(2, 'child1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `couple`
--

CREATE TABLE IF NOT EXISTS `couple` (
  `couple_id` int(255) NOT NULL AUTO_INCREMENT,
  `couple_image` varchar(255) NOT NULL,
  PRIMARY KEY (`couple_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `couple`
--

INSERT INTO `couple` (`couple_id`, `couple_image`) VALUES
(2, 'couple9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `events_id` int(255) NOT NULL AUTO_INCREMENT,
  `events_image` varchar(255) NOT NULL,
  PRIMARY KEY (`events_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`events_id`, `events_image`) VALUES
(1, 'event1.jpg'),
(2, 'event13.jpg'),
(3, 'event16.jpg'),
(4, 'event6.jpg'),
(5, 'event5.jpg'),
(6, 'event12.jpg'),
(7, 'event15.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
  `family_id` int(255) NOT NULL AUTO_INCREMENT,
  `family_image` varchar(255) NOT NULL,
  PRIMARY KEY (`family_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`family_id`, `family_image`) VALUES
(1, 'family7.jpg'),
(2, 'family2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fashionmen`
--

CREATE TABLE IF NOT EXISTS `fashionmen` (
  `fmen_id` int(255) NOT NULL AUTO_INCREMENT,
  `fmen_image` varchar(255) NOT NULL,
  PRIMARY KEY (`fmen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fashionmen`
--

INSERT INTO `fashionmen` (`fmen_id`, `fmen_image`) VALUES
(1, 'men2.jpg'),
(2, 'men16.jpg'),
(3, 'fm4.jpg'),
(4, 'men14.jpg'),
(5, 'men7.jpg'),
(6, 'arindamdp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fashionwomen`
--

CREATE TABLE IF NOT EXISTS `fashionwomen` (
  `fwomen_id` int(255) NOT NULL AUTO_INCREMENT,
  `fwomen_image` varchar(255) NOT NULL,
  PRIMARY KEY (`fwomen_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `fashionwomen`
--

INSERT INTO `fashionwomen` (`fwomen_id`, `fwomen_image`) VALUES
(1, 'ankita1.jpg'),
(2, 'ankita2.jpg'),
(3, 'ankita3.jpg'),
(4, 'ankita4.jpg'),
(5, 'ankita5.jpg'),
(6, 'ankita6.jpg'),
(7, 'slider3.jpg'),
(8, 'ankita7.jpg'),
(9, 'women13.jpg'),
(10, 'women8.jpg'),
(11, 'women3.jpg'),
(12, 'ankita5.jpg'),
(14, 'women7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prepostwed`
--

CREATE TABLE IF NOT EXISTS `prepostwed` (
  `prew_id` int(255) NOT NULL AUTO_INCREMENT,
  `prew_image` varchar(255) NOT NULL,
  PRIMARY KEY (`prew_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `prepostwed`
--

INSERT INTO `prepostwed` (`prew_id`, `prew_image`) VALUES
(3, 'post4_converted.jpg'),
(4, 'post1_converted-min.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(200) NOT NULL AUTO_INCREMENT,
  `slider_image` varchar(255) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`) VALUES
(1, 'couple3.jpg'),
(4, 'women12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE IF NOT EXISTS `user_feedback` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobno` varchar(255) NOT NULL,
  `user_message` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`user_id`, `user_name`, `user_email`, `user_mobno`, `user_message`) VALUES
(6, 'ayush bijoura', 'aaaa@gmail.com', '111111', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `weddingshoots`
--

CREATE TABLE IF NOT EXISTS `weddingshoots` (
  `wedd_id` int(255) NOT NULL AUTO_INCREMENT,
  `wedd_image` varchar(255) NOT NULL,
  PRIMARY KEY (`wedd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `weddingshoots`
--

INSERT INTO `weddingshoots` (`wedd_id`, `wedd_image`) VALUES
(1, 'slider12.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
