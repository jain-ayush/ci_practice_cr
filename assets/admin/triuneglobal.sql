-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2017 at 02:20 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `triuneglobal`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE IF NOT EXISTS `achievements` (
  `achievements_id` int(10) NOT NULL AUTO_INCREMENT,
  `event` varchar(50) NOT NULL,
  `count` int(50) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(10) NOT NULL,
  PRIMARY KEY (`achievements_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`achievements_id`, `event`, `count`, `month`, `year`) VALUES
(4, 'shruthis', 401, 'apr', 1996);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(10) NOT NULL AUTO_INCREMENT,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE IF NOT EXISTS `home_slider` (
  `slider_id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`slider_id`, `image`, `description`) VALUES
(3, 'images.jpg', 'shruthi');

-- --------------------------------------------------------

--
-- Table structure for table `learninit_content`
--

CREATE TABLE IF NOT EXISTS `learninit_content` (
  `learninit_content_id` int(10) NOT NULL AUTO_INCREMENT,
  `learninit_type_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(50000) NOT NULL,
  PRIMARY KEY (`learninit_content_id`),
  KEY `fk0` (`learninit_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `learninit_type`
--

CREATE TABLE IF NOT EXISTS `learninit_type` (
  `learninit_type_id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`learninit_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `learninit_type`
--

INSERT INTO `learninit_type` (`learninit_type_id`, `type`) VALUES
(1, 'Leadership'),
(2, 'Sales'),
(3, 'Behavioral Skills'),
(4, 'Outbound Learning'),
(5, 'Psychometric Assessments');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `resources_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  PRIMARY KEY (`resources_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`resources_id`, `title`, `image`, `description`) VALUES
(8, 'title resources', 'fdf.jpg', '<p>srfafedf</p>\r\n\r\n<ul>\r\n	<li>jkjjj</li>\r\n	<li>klk</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n'),
(9, 'sample', 'dsfd.jpg', '<p>srfafedf</p>\r\n\r\n<ul>\r\n	<li>jkjjj</li>\r\n	<li>klk</li>\r\n</ul>\r\n\r\n<p><img alt="" src="http://www.adfg.alaska.gov/static/species/speciesinfo/dallsheep/images/dallsheep.jpg" style="float:left; height:100px; width:150px" />sfdasfs</p>\r\n\r\n<p>ghjdfsd</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>hjghjh</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `testimonials_id` int(10) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `company` varchar(50) NOT NULL,
  PRIMARY KEY (`testimonials_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonials_id`, `content`, `name`, `designation`, `company`) VALUES
(1, 'shruthidfdsdcxzxc', 'shruthi', 'php', 'Q');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE IF NOT EXISTS `workshops` (
  `workshops_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `location` varchar(50) NOT NULL,
  `month` varchar(10) NOT NULL,
  `start_date` int(10) NOT NULL,
  `end_date` int(10) NOT NULL,
  PRIMARY KEY (`workshops_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `workshops`
--

INSERT INTO `workshops` (`workshops_id`, `name`, `location`, `month`, `start_date`, `end_date`) VALUES
(3, 'sample', 'thane', 'feb', 10, 12);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `learninit_content`
--
ALTER TABLE `learninit_content`
  ADD CONSTRAINT `fk0` FOREIGN KEY (`learninit_type_id`) REFERENCES `learninit_type` (`learninit_type_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
