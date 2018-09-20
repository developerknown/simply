-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2018 at 08:51 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simply_perigord`
--

-- --------------------------------------------------------

--
-- Table structure for table `holiday_rental`
--

DROP TABLE IF EXISTS `holiday_rental`;
CREATE TABLE IF NOT EXISTS `holiday_rental` (
  `holiday_rental_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `max_guest` varchar(255) NOT NULL,
  `booking_date` varchar(255) NOT NULL,
  `guest_number` varchar(255) NOT NULL,
  `bedrooms` varchar(255) NOT NULL,
  `bathrooms` varchar(255) NOT NULL,
  `washer` varchar(255) NOT NULL,
  `television` varchar(255) NOT NULL,
  `aircon` varchar(255) NOT NULL,
  `wifi` varchar(255) NOT NULL,
  `bbq` varchar(255) NOT NULL,
  `private_pool` varchar(255) NOT NULL,
  `private_parking` varchar(255) NOT NULL,
  `private_garden` varchar(255) NOT NULL,
  `pet_allowed` varchar(255) NOT NULL,
  `family_friendly` varchar(255) NOT NULL,
  `village_house` varchar(255) NOT NULL,
  `rural_setting` varchar(255) NOT NULL,
  `romantic_for_two` varchar(255) NOT NULL,
  `cosy_cottage` varchar(255) NOT NULL,
  `booked_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`holiday_rental_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `holiday_rental_images`
--

DROP TABLE IF EXISTS `holiday_rental_images`;
CREATE TABLE IF NOT EXISTS `holiday_rental_images` (
  `holiday_rental_image_id` int(255) NOT NULL AUTO_INCREMENT,
  `holiday_rental_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`holiday_rental_image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

DROP TABLE IF EXISTS `sale`;
CREATE TABLE IF NOT EXISTS `sale` (
  `property_sale_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `bedrooms` varchar(255) NOT NULL,
  `bathrooms` varchar(255) NOT NULL,
  `private_pool` varchar(255) NOT NULL,
  `private_parking` varchar(255) NOT NULL,
  `private_garden` varchar(255) NOT NULL,
  `village_house` varchar(255) NOT NULL,
  `rural_setting` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`property_sale_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sale_images`
--

DROP TABLE IF EXISTS `sale_images`;
CREATE TABLE IF NOT EXISTS `sale_images` (
  `sale_image_id` int(255) NOT NULL AUTO_INCREMENT,
  `property_sale_id` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`sale_image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_type` enum('user','admin') NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
