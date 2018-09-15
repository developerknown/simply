-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2018 at 09:17 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simply`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `status`) VALUES
(1, 'Admin', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `rental_features`
--

DROP TABLE IF EXISTS `rental_features`;
CREATE TABLE IF NOT EXISTS `rental_features` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `rental_id` varchar(255) NOT NULL,
  `feature_name` varchar(255) NOT NULL,
  `feature_value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental_features`
--

INSERT INTO `rental_features` (`id`, `rental_id`, `feature_name`, `feature_value`) VALUES
(1, '20', 'a', '1'),
(2, '20', 'b', '2'),
(3, '26', '1', '1'),
(4, '26', '2', '2'),
(5, '26', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `rental_images`
--

DROP TABLE IF EXISTS `rental_images`;
CREATE TABLE IF NOT EXISTS `rental_images` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `rental_id` varchar(255) NOT NULL,
  `multiple_images` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental_images`
--

INSERT INTO `rental_images` (`id`, `rental_id`, `multiple_images`) VALUES
(1, '27', 'img12.jpg'),
(2, '27', 'img22.jpg'),
(3, '27', 'img32.jpg'),
(4, '27', 'img42.jpg'),
(5, '27', 'lockscreen_user2.jpg'),
(6, '29', 'img13.jpg'),
(7, '29', 'img43.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rental_property`
--

DROP TABLE IF EXISTS `rental_property`;
CREATE TABLE IF NOT EXISTS `rental_property` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `property_id` varchar(255) NOT NULL,
  `property_name` varchar(255) NOT NULL,
  `primary_image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `listed_on` varchar(255) NOT NULL,
  `maximum_guests` varchar(255) NOT NULL,
  `low_guests` varchar(255) NOT NULL,
  `low_season_under` varchar(255) NOT NULL,
  `low_season_full` varchar(255) NOT NULL,
  `mid_season_under` varchar(255) NOT NULL,
  `mid_season_full` varchar(255) NOT NULL,
  `high_season_under` varchar(255) NOT NULL,
  `high_season_full` varchar(255) NOT NULL,
  `beds` varchar(255) NOT NULL,
  `bathroom` varchar(255) NOT NULL,
  `pool_size` varchar(255) NOT NULL,
  `washer` varchar(255) NOT NULL,
  `tv` varchar(255) NOT NULL,
  `aircon` varchar(255) NOT NULL,
  `wifi` varchar(255) NOT NULL,
  `bbq` varchar(255) NOT NULL,
  `private_parking` varchar(255) NOT NULL,
  `private_garden` varchar(255) NOT NULL,
  `private_pool` varchar(255) NOT NULL,
  `pets_allowed` varchar(255) NOT NULL,
  `family_friendly` varchar(255) NOT NULL,
  `village_house` varchar(255) NOT NULL,
  `rural_setting` varchar(255) NOT NULL,
  `romatic_for_two` varchar(255) NOT NULL,
  `cosy_cottage` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rental_property`
--

INSERT INTO `rental_property` (`id`, `property_id`, `property_name`, `primary_image`, `address`, `town`, `phone`, `email`, `listed_on`, `maximum_guests`, `low_guests`, `low_season_under`, `low_season_full`, `mid_season_under`, `mid_season_full`, `high_season_under`, `high_season_full`, `beds`, `bathroom`, `pool_size`, `washer`, `tv`, `aircon`, `wifi`, `bbq`, `private_parking`, `private_garden`, `private_pool`, `pets_allowed`, `family_friendly`, `village_house`, `rural_setting`, `romatic_for_two`, `cosy_cottage`, `description`, `status`) VALUES
(3, 'kjl', 'kjoljk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(4, 'adas', 'sad', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(5, 'fsdf', 'dsfds', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(6, 'fsdf', 'dsfds', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(7, '', 'gggg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(8, '', 'gggg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(9, 'a', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(10, 'a', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(11, 'a', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(12, '', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(13, '', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(14, 'asd', 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(15, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(16, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(17, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(18, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(19, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(20, 'asd', 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(21, 'asd', 'asd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(22, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(23, '', 'a', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(24, 'a', 'a', 'img2.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(25, '', 'asdddd', 'img14.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(26, 'a', 'a', 'img15.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(27, '', '', 'goku22.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(28, '', '', 'goku23.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active'),
(29, 'dd', 'dddd', 'goku24.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', 'Active');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
