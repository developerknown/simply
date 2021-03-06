-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 25, 2018 at 10:03 AM
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
-- Table structure for table `booking_holiday_rental`
--

DROP TABLE IF EXISTS `booking_holiday_rental`;
CREATE TABLE IF NOT EXISTS `booking_holiday_rental` (
  `booking_holiday_rental_id` int(255) NOT NULL AUTO_INCREMENT,
  `holiday_rental_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `booking_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`booking_holiday_rental_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_holiday_rental`
--

INSERT INTO `booking_holiday_rental` (`booking_holiday_rental_id`, `holiday_rental_id`, `user_id`, `booking_date`, `status`, `date`) VALUES
(1, '1', '2', '1537519330', '1', '1537519330'),
(2, '2', '3', '1537519330', '1', '1537519330'),
(3, '4', '2', '1537519330', '0', '1537519330');

-- --------------------------------------------------------

--
-- Table structure for table `holiday_rental`
--

DROP TABLE IF EXISTS `holiday_rental`;
CREATE TABLE IF NOT EXISTS `holiday_rental` (
  `holiday_rental_id` int(255) NOT NULL AUTO_INCREMENT,
  `property_type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `season` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `max_guest` varchar(255) NOT NULL,
  `booking_start_date` varchar(255) NOT NULL,
  `booking_end_date` varchar(255) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday_rental`
--

INSERT INTO `holiday_rental` (`holiday_rental_id`, `property_type`, `name`, `location`, `size`, `season`, `price`, `max_guest`, `booking_start_date`, `booking_end_date`, `guest_number`, `bedrooms`, `bathrooms`, `washer`, `television`, `aircon`, `wifi`, `bbq`, `private_pool`, `private_parking`, `private_garden`, `pet_allowed`, `family_friendly`, `village_house`, `rural_setting`, `romantic_for_two`, `cosy_cottage`, `booked_date`, `status`) VALUES
(1, 'rental', '2 BHK 1350 Sq-ft Flat/Apartment for rent in Ajmera Zeon, Wadala East, Mumbai', 'Wadala East, Mumbai, Wadala East, Mumbai - Central Mumbai, Maharashtra', '', '', '', '30', '09/25/2018', '09/23/2018', '21', '3', '2', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '1537444141', '1'),
(2, 'rental', '2 BHK Apartment', 'sapoorji palonji sukhobrishty , Newtown, Kolkata', '', '', '', '30', '09/25/2018', ',09/23/2018', '26', '3', '2', 'yes', 'yes', 'yes', 'no', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', '1537446464', '1'),
(4, 'rental', '3 BHK Apartment', 'Eastern High, New Town', '', '', '', '30', '09/04/2018', '09/11/2018', '20', '2', '2', 'yes', 'yes', 'no', 'no', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', 'no', 'no', 'no', '1537452421', '1'),
(5, 'rental', '2 BHK Apartment for Rent Immediately', 'Elita Garden Vista Phase 2New Town, Kolkata', '', '1', '1800', '31', '09/06/2018', '09/30/2018', '24', '3', '2', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'yes', 'no', 'yes', 'no', 'yes', 'yes', 'no', '1537801913', '1'),
(6, 'sale', 'Sidha Alaxia India', 'Eco Park ~ 4 min City Centre II ~ 6 min Airport via Expressway ~ 15 min Technopolis, Sector V ~ 17 min', '1010–2760 sq ft per flat', '', '', '', '', '', '', '3', '2', '', '', '', '', '', 'no', 'yes', 'yes', '', '', 'yes', 'no', '', '', '1537532617', '1'),
(7, 'sale', '3 BHK 1475 Sq-ft Flat For Sale in E M Bypass, Kolkata, West Bengal', 'E M Bypass, Kolkata - South, West Bengal', '1010–2760 sq ft per flat', '', '', '', '', '', '', '3', '3', '', '', '', '', '', 'yes', 'yes', 'no', '', '', 'no', 'no', '', '', '1537452121', '1'),
(8, 'sale', 'Independent House/Villa for Sale', 'Nona Chandanpukur, Kolkata North, Kolkata', '1400 sq. Ft.', '', '', '', '', '', '', '4', '2', '', '', '', '', '', 'no', 'no', 'yes', '', '', '', '', '', '', '1537452676', '1'),
(9, 'sale', '3Bedrooms 2Baths Independent House/Villa for Sale', 'Sodepur, Kolkata North, Kolkata', '1000 to 1100 Sq.Ft.', '', '', '', '', '', '', '4', '3', '', '', '', '', '', 'no', 'yes', 'no', '', '', 'no', 'yes', '', '', '1537452777', '1'),
(10, 'sale', '5Bedrooms 4Baths Independent House/Villa for Sale', 'Barrackpore, Kolkata North, Kolkata', '2500 Sq.Ft.', '', '', '', '', '', '', '3', '1', '', '', '', '', '', 'no', 'no', 'no', '', '', 'yes', 'yes', '', '', '1537453339', '1'),
(11, 'sale', '3 BHK 1475 Sq-ft Flat For Sale in E M Bypass, Kolkata, West Bengal', 'ranchi', '1200 sq ft.', '', '', '', '', '', '', '1', '1', '', '', '', '', '', 'yes', 'yes', 'yes', '', '', 'yes', 'yes', '', '', '1537863111', '1'),
(12, 'rental', '3 BHK 1475 Sq-ft Flat For Sale', 'Bangalore', '', '1', '1500', '4', '10/02/2018', '10/23/2018', '20', '2', '3', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'yes', 'no', 'yes', 'yes', 'no', 'yes', 'yes', 'yes', '1537863209', '1');

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
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday_rental_images`
--

INSERT INTO `holiday_rental_images` (`holiday_rental_image_id`, `holiday_rental_id`, `image`, `date`, `status`) VALUES
(1, '1', '35767117_18_IMG-20180213-WA0017.jpg', '1537444141', '1'),
(2, '1', '35767117_1_IMG-20180213-WA0027.jpg', '1537444141', '1'),
(3, '2', 'shapoorji-pallonji-shukho-brishti-cluster-plan-1114782.jpeg', '1537446464', '1'),
(4, '2', 'shapoorji-pallonji-real-estate-shukho-brishti-location-plan-1114786.jpeg', '1537446464', '1'),
(5, '2', 'spre-shukho-brishti-elevation-1114785.jpeg', '1537446464', '1'),
(6, '3', 'Penguins.jpg', '1537449077', '1'),
(7, '3', 'Tulips.jpg', '1537449077', '1'),
(8, '4', '1031332.jpeg', '1537452421', '1'),
(9, '4', '20772987.jpeg', '1537452421', '1'),
(10, '5', '20772984.jpeg', '1537452514', '1'),
(11, '5', '20772985.jpeg', '1537452514', '1'),
(12, '5', 'unitech-fresco-elevation-1031339.jpeg', '1537452514', '1'),
(13, '5', '10313322.jpeg', '1537782202', '1'),
(14, '5', '77098825O-15149814951.jpeg', '1537782314', '1'),
(15, '5', '', '1537801693', '1'),
(16, '5', '', '1537801831', '1'),
(17, '5', '', '1537801913', '1'),
(18, '1', 'galaxia-lan-banner-1a.jpg', '1537443579', '1'),
(19, '1', 'gal-lan-pic-one.jpg', '1537443579', '1'),
(20, '1', 'gal-lan-skywalk-view.jpg', '1537443579', '1'),
(21, '2', 'Project-Photo-15-Avidipta-2-Kolkata-5116533_345_1366.jpg', '1537445285', '1'),
(22, '2', 'Project-Photo-9-Avidipta-2-Kolkata-5116533_500_1000.jpg', '1537445285', '1'),
(23, '3', 'Chrysanthemum.jpg', '1537449039', '1'),
(24, '3', 'Desert.jpg', '1537449039', '1'),
(25, '4', 'unitech-fresco-elevation-1031338.jpeg', '1537452676', '1'),
(26, '4', '20772986.jpeg', '1537452676', '1'),
(27, '5', '121618691O-1521573201.jpeg', '1537452777', '1'),
(28, '5', '121618711O-1521568474.jpeg', '1537452777', '1'),
(29, '5', '121618709O-1521573203.jpeg', '1537452777', '1'),
(30, '6', '77098837O-1514981503.jpeg', '1537453339', '1'),
(31, '6', '77098825O-1514981495.jpeg', '1537453339', '1'),
(32, '6', '77098797O-1514981461.jpeg', '1537453339', '1'),
(33, '1', 'unitech-fresco-elevation-10313391.jpeg', '1537782285', '1'),
(34, '11', 'spre-shukho-brishti-elevation-111478511.jpeg', '1537863111', '1'),
(35, '11', 'unitech-fresco-elevation-10313381.jpeg', '1537863111', '1'),
(36, '12', '207729851.jpeg', '1537863209', '1'),
(37, '12', '207729861.jpeg', '1537863209', '1'),
(38, '12', '35767117_18_IMG-20180213-WA00171.jpg', '1537863209', '1');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

DROP TABLE IF EXISTS `season`;
CREATE TABLE IF NOT EXISTS `season` (
  `season_id` int(255) NOT NULL AUTO_INCREMENT,
  `season_name` varchar(255) NOT NULL,
  `date_from` varchar(255) NOT NULL,
  `date_to` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_added` varchar(255) NOT NULL,
  PRIMARY KEY (`season_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`season_id`, `season_name`, `date_from`, `date_to`, `status`, `date_added`) VALUES
(1, 'Summer', '04/03/2018', '09/30/2018', '1', '1537797062');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_type`, `name`, `email`, `password`, `registration_date`, `status`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', '1537519656', '1'),
(2, 'user', 'Debashis Nath', 'debashisnath1992@gmail.com', 'debashis25', '1537519656', '1'),
(3, 'user', 'Shuvradeb Mondal', 'deepbratt@gmail.com', 'deepbratt', '1537519656', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
