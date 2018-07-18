-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 30, 2017 at 07:14 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `1payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('a','p') NOT NULL DEFAULT 'p',
  `working` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `empid`, `date`, `status`, `working`) VALUES
(1, 1, '2015-11-30 11:09:13', 'p', '8');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `empcatid` int(11) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `doj` varchar(15) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `empcatid`, `dob`, `address`, `doj`, `mobile`, `city`, `email`) VALUES
(1, 'vinay', 5, '11/11/1999', 'bikaner', '03/10/2008', '9649214376', 'bikaner', 'vinay@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `emp_cat`
--

CREATE TABLE IF NOT EXISTS `emp_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `emp_cat`
--

INSERT INTO `emp_cat` (`id`, `designation`) VALUES
(1, 'Manager'),
(2, 'Assistant Manager'),
(3, 'Account Manager'),
(4, 'HR'),
(5, 'Director'),
(6, 'Sales Manager'),
(7, 'Peon');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE IF NOT EXISTS `leaves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empcatid` int(11) NOT NULL,
  `leavesday` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `empcatid`, `leavesday`) VALUES
(1, 5, '30'),
(2, 1, '25'),
(3, 2, '20'),
(4, 3, '20'),
(5, 4, '20'),
(6, 6, '20'),
(7, 7, '20');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(11) NOT NULL,
  `rupees` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `empid`, `rupees`, `date`) VALUES
(1, 1, '4000', '2015-11-30 11:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `working`
--

CREATE TABLE IF NOT EXISTS `working` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timeduration` varchar(20) NOT NULL,
  `rupees` varchar(20) NOT NULL,
  `empcatid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `working`
--

INSERT INTO `working` (`id`, `timeduration`, `rupees`, `empcatid`) VALUES
(1, '1', '1000', 1),
(2, '1', '900', 2),
(3, '1', '800', 3),
(4, '1', '600', 4),
(5, '1', '1500', 5),
(6, '1', '750', 6),
(7, '1', '250', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
