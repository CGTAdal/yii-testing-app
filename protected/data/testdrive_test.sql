-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2016 at 03:48 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testdrive_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tst_cart`
--

CREATE TABLE IF NOT EXISTS `tst_cart` (
  `crt_id` int(11) NOT NULL AUTO_INCREMENT,
  `crt_order_id` int(11) NOT NULL,
  `crt_group_id` varchar(100) NOT NULL,
  `crt_product_id` int(11) NOT NULL,
  `crt_quantitiy` int(11) NOT NULL,
  `crt_price` decimal(11,2) NOT NULL,
  `crt_discount` int(11) NOT NULL,
  `crt_discounted_price` decimal(11,2) NOT NULL,
  PRIMARY KEY (`crt_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tst_contact`
--

CREATE TABLE IF NOT EXISTS `tst_contact` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_subject` varchar(255) NOT NULL,
  `c_body` text NOT NULL,
  `c_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `c_updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tst_contact`
--

INSERT INTO `tst_contact` (`c_id`, `c_name`, `c_email`, `c_subject`, `c_body`, `c_created_on`, `c_updated_on`) VALUES
(1, 'demo1', 'demo1@gmail.com', 'demo1', 'demo1 body', '2016-02-08 11:20:07', '0000-00-00 00:00:00'),
(2, 'demo2', 'demo2@gmail.com', 'demo2', 'demo2 body', '2016-02-08 11:20:07', '0000-00-00 00:00:00'),
(3, 'test3', 'test3@gmail.com', 'test3', 'test3', '2016-02-08 11:20:07', '2016-02-08 11:20:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
