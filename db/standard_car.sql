-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 31, 2015 at 08:16 PM
-- Server version: 5.6.25-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `standard_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
`booking_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `loc_desc` text NOT NULL,
  `personnel_num` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `date_use` datetime NOT NULL,
  `date_return` datetime NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `created_by`, `car_id`, `district_id`, `loc_desc`, `personnel_num`, `driver_id`, `date_use`, `date_return`, `status`, `created_at`, `updated_at`, `updated_by`) VALUES
(3, 11, 8, 18, 'Area 49 Gulliver', 2, 15, '2015-11-11 00:00:00', '2015-11-13 00:00:00', 'pending', '2015-08-26 12:20:19', '2015-08-26 12:20:19', 11),
(4, 11, 10, 3, 'Golomoti', 1, 15, '2015-08-10 00:00:00', '2015-08-12 00:00:00', 'done', '2015-08-26 12:27:53', '2015-08-26 12:27:53', 11),
(5, 11, 10, 32, 'Manase', 3, 15, '2015-10-07 00:00:00', '2015-11-12 00:00:00', 'pending', '2015-08-26 12:47:07', '2015-08-26 12:47:07', 11),
(7, 11, 11, 23, 'Pottery', 4, 16, '2015-08-20 00:00:00', '2015-08-31 00:00:00', 'active', '2015-08-28 08:15:13', '2015-08-28 08:15:13', 11),
(8, 11, 9, 11, 'Kaya', 0, 15, '2015-08-19 00:00:00', '2015-08-31 00:00:00', 'active', '2015-08-28 08:42:54', '2015-08-28 08:42:54', 11),
(9, 11, 12, 14, 'Manja', 6, 15, '2016-02-19 00:00:00', '2016-02-19 00:00:00', 'pending', '2015-08-28 12:32:50', '2015-08-28 12:32:50', 11),
(10, 11, 13, 7, 'Nkhata bay', 4, 15, '2015-08-28 00:00:00', '2015-08-28 00:00:00', 'done', '2015-08-28 12:56:54', '2015-08-28 12:56:54', 11),
(11, 11, 10, 28, 'City Centre', 3, 16, '2016-01-01 00:00:00', '2016-01-04 00:00:00', 'pending', '2015-08-31 07:39:43', '2015-08-31 07:39:43', 11),
(13, 17, 8, 28, 'City Center', 12, 15, '2016-01-01 00:00:00', '2016-01-05 00:00:00', 'pending', '2015-08-31 09:42:38', '2015-08-31 09:42:38', 17),
(14, 17, 8, 23, 'Chapananga', 1, 15, '2016-01-08 00:00:00', '2016-01-14 00:00:00', 'pending', '2015-08-31 11:06:36', '2015-08-31 11:06:36', 17),
(15, 17, 8, 23, 'Forestry', 12, 15, '2016-01-08 00:00:00', '2016-01-13 00:00:00', 'pending', '2015-08-31 11:07:44', '2015-08-31 11:07:44', 17);

-- --------------------------------------------------------

--
-- Table structure for table `bookings_log`
--

CREATE TABLE IF NOT EXISTS `bookings_log` (
`bookings_log_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `start_mileage` int(11) NOT NULL,
  `end_mileage` int(11) NOT NULL,
  `status` text NOT NULL,
  `checker` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings_log`
--

INSERT INTO `bookings_log` (`bookings_log_id`, `booking_id`, `duration`, `start_mileage`, `end_mileage`, `status`, `checker`, `created_at`, `updated_at`) VALUES
(1, 3, 0, 0, 0, 'pending', '', '2015-08-26 12:20:19', '2015-08-26 12:20:19'),
(2, 4, 0, 0, 0, 'done', '', '2015-08-26 12:27:53', '2015-08-26 12:27:53'),
(3, 5, 0, 0, 0, 'pending', '', '2015-08-26 12:47:08', '2015-08-26 12:47:08'),
(4, 6, 0, 0, 0, 'pending', '', '2015-08-28 07:59:25', '2015-08-28 07:59:25'),
(5, 7, 0, 0, 0, 'active', '', '2015-08-28 08:15:13', '2015-08-28 08:15:13'),
(6, 8, 0, 0, 0, 'active', '', '2015-08-28 08:42:54', '2015-08-28 08:42:54'),
(7, 9, 0, 0, 0, 'pending', '', '2015-08-28 12:32:50', '2015-08-28 12:32:50'),
(8, 10, 0, 0, 0, 'done', '', '2015-08-28 12:56:54', '2015-08-28 12:56:54'),
(9, 11, 0, 0, 0, 'pending', '', '2015-08-31 07:39:43', '2015-08-31 07:39:43'),
(10, 0, 0, 0, 0, 'pending', '', '2015-08-31 08:38:53', '2015-08-31 08:38:53'),
(11, 0, 0, 0, 0, 'pending', '', '2015-08-31 08:47:25', '2015-08-31 08:47:25'),
(12, 12, 0, 0, 0, 'pending', '', '2015-08-31 08:54:12', '2015-08-31 08:54:12'),
(13, 0, 0, 0, 0, 'pending', '', '2015-08-31 08:57:49', '2015-08-31 08:57:49'),
(14, 0, 0, 0, 0, 'pending', '', '2015-08-31 09:41:53', '2015-08-31 09:41:53'),
(15, 13, 0, 0, 0, 'pending', '', '2015-08-31 09:42:38', '2015-08-31 09:42:38'),
(16, 14, 0, 0, 0, 'pending', '', '2015-08-31 11:06:36', '2015-08-31 11:06:36'),
(17, 15, 0, 0, 0, 'pending', '', '2015-08-31 11:07:44', '2015-08-31 11:07:44');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
`car_id` int(11) NOT NULL,
  `make` text NOT NULL,
  `model` text NOT NULL,
  `ownership` text NOT NULL,
  `type` text NOT NULL,
  `year` int(11) NOT NULL,
  `reg_num` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `make`, `model`, `ownership`, `type`, `year`, `reg_num`, `created_by`, `created_at`, `update_at`) VALUES
(8, 'TOYOTA', 'HIACE', 'bank_owned', 'mini_bus', 2016, 'SB 8542', 11, '2015-08-24 18:19:51', '2015-08-24 18:19:51'),
(9, 'NISSAN', 'NAVARA', 'bank_owned', 'pickup', 2014, 'DZ 7855', 11, '2015-08-25 11:54:36', '2015-08-25 11:54:36'),
(10, 'VOLKSWAGEN', 'TUAREG', 'bank_owned', 'SUV', 2012, 'DZ 4487', 11, '2015-08-26 12:26:45', '2015-08-26 12:26:45'),
(11, 'TOYOTA', 'HILUX D4D', 'bank_owned', 'pickup', 2016, 'ZA 4652', 11, '2015-08-27 13:03:08', '2015-08-27 13:03:08'),
(12, 'NISSAN', 'QASHQAI', 'taxi', 'SUV', 2015, 'MJ 5699', 11, '2015-08-27 13:15:46', '2015-08-27 13:15:46'),
(13, 'MISTUBISHI', 'SHOGUN', 'bank_owned', 'SUV', 2015, 'MJ 7866', 11, '2015-08-28 12:56:40', '2015-08-28 12:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
`district_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `region_id` int(11) NOT NULL DEFAULT '0',
  `creator` int(11) NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=292 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `name`, `region_id`, `creator`, `date_created`) VALUES
(1, 'Chitipa', 2, 1, '2011-07-27 12:17:25'),
(2, 'Kasungu', 1, 1, '2011-07-27 12:17:25'),
(3, 'Mangochi', 3, 1, '2011-07-27 12:17:25'),
(4, 'Karonga', 2, 1, '2011-07-27 12:17:25'),
(5, 'Machinga', 3, 1, '2011-07-27 12:17:25'),
(6, 'Nkhotakota ', 1, 1, '2011-07-27 12:17:25'),
(7, 'Nkhata-bay', 2, 1, '2011-07-27 12:17:25'),
(8, 'Ntchisi', 1, 1, '2011-07-27 12:17:25'),
(9, 'Zomba', 3, 1, '2011-07-27 12:17:25'),
(10, 'Zomba City', 3, 1, '2011-07-27 12:17:25'),
(11, 'Chiradzulu', 3, 1, '2011-07-27 12:17:25'),
(12, 'Dowa ', 1, 1, '2011-07-27 12:17:25'),
(13, 'Rumphi', 2, 1, '2011-07-27 12:17:25'),
(14, 'Blantyre', 3, 1, '2011-07-27 12:17:25'),
(15, 'Mzimba', 2, 1, '2011-07-27 12:17:25'),
(16, 'Salima', 1, 1, '2011-07-27 12:17:25'),
(17, 'Likoma', 2, 1, '2011-07-27 12:17:25'),
(18, 'Lilongwe', 1, 1, '2011-07-27 12:17:25'),
(19, 'Mwanza', 3, 1, '2011-07-27 12:17:25'),
(20, 'Mchinji', 1, 1, '2011-07-27 12:17:25'),
(21, 'Mzuzu City', 2, 1, '2011-07-27 12:17:25'),
(22, 'Thyolo', 3, 1, '2011-07-27 12:17:25'),
(23, 'Dedza', 1, 1, '2011-07-27 12:17:25'),
(24, 'Mulanje', 3, 1, '2011-07-27 12:17:25'),
(25, 'Ntcheu', 1, 1, '2011-07-27 12:17:25'),
(26, 'Phalombe', 3, 1, '2011-07-27 12:17:25'),
(27, 'Chikwawa', 3, 1, '2011-07-27 12:17:25'),
(28, 'Lilongwe City', 1, 1, '2011-07-27 12:17:25'),
(29, 'Nsanje ', 3, 1, '2011-07-27 12:17:25'),
(30, 'Balaka', 3, 1, '2011-07-27 12:17:25'),
(31, 'Neno', 3, 1, '2011-07-27 12:17:25'),
(32, 'Blantyre City', 3, 1, '2011-07-27 12:17:25'),
(33, 'Afghanistan', 4, 1, '2011-07-27 12:17:25'),
(34, 'Akrotiri', 4, 1, '2011-07-27 12:17:25'),
(35, 'Albania', 4, 1, '2011-07-27 12:17:25'),
(36, 'American Samoa', 4, 1, '2011-07-27 12:17:25'),
(37, 'Andorra', 4, 1, '2011-07-27 12:17:25'),
(38, 'Angola', 4, 1, '2011-07-27 12:17:25'),
(39, 'Anguilla', 4, 1, '2011-07-27 12:17:25'),
(40, 'Antarctica', 4, 1, '2011-07-27 12:17:25'),
(41, 'Antigua and Barbuda', 4, 1, '2011-07-27 12:17:25'),
(42, 'Argentina', 4, 1, '2011-07-27 12:17:25'),
(43, 'Armenia', 4, 1, '2011-07-27 12:17:25'),
(44, 'Aruba', 4, 1, '2011-07-27 12:17:25'),
(45, 'Ashmore and Cartier Islands', 4, 1, '2011-07-27 12:17:25'),
(46, 'Australia', 4, 1, '2011-07-27 12:17:25'),
(47, 'Austria', 4, 1, '2011-07-27 12:17:25'),
(48, 'Azerbaijan', 4, 1, '2011-07-27 12:17:25'),
(49, 'Bahamas, The', 4, 1, '2011-07-27 12:17:25'),
(50, 'Bahrain', 4, 1, '2011-07-27 12:17:25'),
(51, 'Barbados', 4, 1, '2011-07-27 12:17:25'),
(52, 'Belarus', 4, 1, '2011-07-27 12:17:25'),
(53, 'Burkina Faso', 4, 1, '2011-07-27 12:17:25'),
(54, 'Bulgaria', 4, 1, '2011-07-27 12:17:25'),
(55, 'Brunei', 4, 1, '2011-07-27 12:17:25'),
(56, 'British Virgin Islands', 4, 1, '2011-07-27 12:17:25'),
(57, 'British Indian Ocean Territory', 4, 1, '2011-07-27 12:17:25'),
(58, 'Brazil', 4, 1, '2011-07-27 12:17:25'),
(59, 'Bouvet Island', 4, 1, '2011-07-27 12:17:25'),
(60, 'Botswana', 4, 1, '2011-07-27 12:17:25'),
(61, 'Bosnia and Herzegovina', 4, 1, '2011-07-27 12:17:25'),
(62, 'Bolivia', 4, 1, '2011-07-27 12:17:25'),
(63, 'Bhutan', 4, 1, '2011-07-27 12:17:25'),
(64, 'Bermuda', 4, 1, '2011-07-27 12:17:25'),
(65, 'Benin', 4, 1, '2011-07-27 12:17:25'),
(66, 'Belize', 4, 1, '2011-07-27 12:17:25'),
(67, 'Belgium', 4, 1, '2011-07-27 12:17:25'),
(68, 'Bangladesh', 4, 1, '2011-07-27 12:17:25'),
(69, 'Burma', 4, 1, '2011-07-27 12:17:25'),
(70, 'Burundi', 4, 1, '2011-07-27 12:17:25'),
(71, 'Cambodia', 4, 1, '2011-07-27 12:17:25'),
(72, 'Cameroon', 4, 1, '2011-07-27 12:17:25'),
(73, 'Canada', 4, 1, '2011-07-27 12:17:25'),
(74, 'Cape Verde', 4, 1, '2011-07-27 12:17:25'),
(75, 'Cayman Islands', 4, 1, '2011-07-27 12:17:25'),
(76, 'Central African Republic', 4, 1, '0000-00-00 00:00:00'),
(77, 'Chad', 4, 1, '2011-07-27 12:17:25'),
(78, 'Chile', 4, 1, '2011-07-27 12:17:25'),
(79, 'China', 4, 1, '2011-07-27 12:17:25'),
(80, 'Christmas Island', 4, 1, '2011-07-27 12:17:25'),
(81, 'Clipperton Island', 4, 1, '2011-07-27 12:17:25'),
(82, 'Cocos Islands', 4, 1, '2011-07-27 12:17:25'),
(83, 'Colombia', 4, 1, '2011-07-27 12:17:25'),
(84, 'Comoros', 4, 1, '2011-07-27 12:17:25'),
(85, 'Democratic Republic of Congo (DRC)', 4, 1, '2011-07-27 12:17:25'),
(86, 'Congo Republic of the', 4, 1, '2011-07-27 12:17:25'),
(87, 'Cook Islands', 4, 1, '2011-07-27 12:17:25'),
(88, 'Coral Sea Islands', 4, 1, '2011-07-27 12:17:25'),
(89, 'Cook Islands', 4, 1, '2011-07-27 12:17:25'),
(90, 'Coral Sea Islands', 4, 1, '2011-07-27 12:17:25'),
(91, 'Costa Rica', 4, 1, '2011-07-27 12:17:25'),
(92, 'Cote d''Ivoire', 4, 1, '2011-07-27 12:17:25'),
(93, 'Croatia', 4, 1, '2011-07-27 12:17:25'),
(94, 'Cuba', 4, 1, '2011-07-27 12:17:25'),
(95, 'Cyprus', 4, 1, '2011-07-27 12:17:25'),
(96, 'Czech Republic', 4, 1, '2011-07-27 12:17:25'),
(97, 'Denmark', 4, 1, '2011-07-27 12:17:25'),
(98, 'Dhekelia', 4, 1, '2011-07-27 12:17:25'),
(99, 'Djibouti', 4, 1, '2011-07-27 12:17:25'),
(100, 'Dominica', 4, 1, '2011-07-27 12:17:25'),
(101, 'Dominican Republic', 4, 1, '2011-07-27 12:17:25'),
(102, 'Ecuador', 4, 1, '2011-07-27 12:17:25'),
(103, 'Egypt', 4, 1, '2011-07-27 12:17:25'),
(104, 'El Salvador', 4, 1, '2011-07-27 12:17:25'),
(105, 'Equatorial Guinea', 4, 1, '2011-07-27 12:17:25'),
(106, 'Eritrea', 4, 1, '2011-07-27 12:17:25'),
(107, 'Estonia', 4, 1, '2011-07-27 12:17:25'),
(108, 'Ethiopia', 4, 1, '2011-07-27 12:17:25'),
(109, 'Europa Island', 4, 1, '2011-07-27 12:17:25'),
(110, 'Falkland Islands', 4, 1, '2011-07-27 12:17:25'),
(112, 'Faroe Islands', 4, 1, '2011-07-27 12:17:25'),
(113, 'Fiji', 4, 1, '2011-07-27 12:17:25'),
(114, 'Finland', 4, 1, '2011-07-27 12:17:25'),
(115, 'France', 4, 1, '2011-07-27 12:17:25'),
(116, 'French Guiana', 4, 1, '2011-07-27 12:17:25'),
(117, 'French Polynesia', 4, 1, '2011-07-27 12:17:25'),
(118, 'French Southern and Antarctic Lands', 4, 1, '2011-07-27 12:17:25'),
(119, 'Gabon', 4, 1, '2011-07-27 12:17:25'),
(120, 'Gambia, The', 4, 1, '2011-07-27 12:17:25'),
(121, 'Gaza Strip', 4, 1, '2011-07-27 12:17:25'),
(122, 'Georgia', 4, 1, '2011-07-27 12:17:25'),
(123, 'Germany', 4, 1, '2011-07-27 12:17:25'),
(124, 'Ghana', 4, 1, '2011-07-27 12:17:25'),
(125, 'Gibraltar', 4, 1, '2011-07-27 12:17:25'),
(126, 'Glorioso Islands', 4, 1, '2011-07-27 12:17:25'),
(127, 'Greece', 4, 1, '2011-07-27 12:17:25'),
(128, 'Greenland', 4, 1, '2011-07-27 12:17:25'),
(129, 'Grenada', 4, 1, '2011-07-27 12:17:25'),
(130, 'Guadeloupe', 4, 1, '2011-07-27 12:17:25'),
(131, 'Guam', 4, 1, '2011-07-27 12:17:25'),
(132, 'Guatemala', 4, 1, '2011-07-27 12:17:25'),
(133, 'Guernsey', 4, 1, '2011-07-27 12:17:25'),
(134, 'Guinea', 4, 1, '2011-07-27 12:17:25'),
(135, 'Guinea_Bissau', 4, 1, '2011-07-27 12:17:25'),
(136, 'Guyana', 4, 1, '2011-07-27 12:17:25'),
(137, 'Haiti', 4, 1, '2011-07-27 12:17:25'),
(138, 'Heard Island and McDonald Islands', 4, 1, '2011-07-27 12:17:25'),
(139, 'Holy See (Vatican City)', 4, 1, '2011-07-27 12:17:25'),
(140, 'Honduras', 4, 1, '2011-07-27 12:17:25'),
(141, 'Hong Kong', 4, 1, '2011-07-27 12:17:25'),
(142, 'Hungary', 4, 1, '2011-07-27 12:17:25'),
(143, 'celand', 4, 1, '2011-07-27 12:17:25'),
(144, 'India', 4, 1, '2011-07-27 12:17:25'),
(145, 'Indonesia', 4, 1, '2011-07-27 12:17:25'),
(146, 'Iran', 4, 1, '2011-07-27 12:17:25'),
(147, 'Iraq', 4, 1, '2011-07-27 12:17:25'),
(148, 'Ireland', 4, 1, '2011-07-27 12:17:25'),
(149, 'Isle of Man', 4, 1, '2011-07-27 12:17:25'),
(150, 'Israel', 4, 1, '2011-07-27 12:17:25'),
(151, 'Italy', 4, 1, '2011-07-27 12:17:25'),
(152, 'Jamaica', 4, 1, '2011-07-27 12:17:25'),
(153, 'Jan Mayen', 4, 1, '2011-07-27 12:17:25'),
(154, 'Japan', 4, 1, '2011-07-27 12:17:25'),
(155, 'Jersey', 4, 1, '2011-07-27 12:17:25'),
(156, 'Jordan', 4, 1, '2011-07-27 12:17:25'),
(157, 'Juan de Nova Island', 4, 1, '2011-07-27 12:17:25'),
(158, 'Kazakhstan', 4, 1, '2011-07-27 12:17:25'),
(159, 'Kenya', 4, 1, '2011-07-27 12:17:25'),
(160, 'Kiribati', 4, 1, '2011-07-27 12:17:25'),
(161, 'Korea North', 4, 1, '2011-07-27 12:17:25'),
(162, 'Korea South', 4, 1, '2011-07-27 12:17:25'),
(163, 'Kuwait', 4, 1, '2011-07-27 12:17:25'),
(164, 'Kyrgyzstan', 4, 1, '2011-07-27 12:17:25'),
(165, 'Laos', 4, 1, '2011-07-27 12:17:25'),
(166, 'Latvia', 4, 1, '2011-07-27 12:17:25'),
(167, 'Lebanon', 4, 1, '2011-07-27 12:17:25'),
(168, 'Lesotho', 4, 1, '2011-07-27 12:17:25'),
(169, 'Liberia', 4, 1, '2011-07-27 12:17:25'),
(170, 'Libya', 4, 1, '2011-07-27 12:17:25'),
(171, 'Liechtenstein', 4, 1, '2011-07-27 12:17:25'),
(172, 'Lithuania', 4, 1, '2011-07-27 12:17:25'),
(173, 'Luxembourg', 4, 1, '2011-07-27 12:17:25'),
(174, 'Macau', 4, 1, '2011-07-27 12:17:25'),
(175, 'Macedonia', 4, 1, '2011-07-27 12:17:25'),
(176, 'Madagascar', 4, 1, '2011-07-27 12:17:25'),
(178, 'Malaysia', 4, 1, '2011-07-27 12:17:25'),
(179, 'Maldives', 4, 1, '2011-07-27 12:17:25'),
(180, 'Mali', 4, 1, '2011-07-27 12:17:25'),
(181, 'Malta', 4, 1, '2011-07-27 12:17:25'),
(182, 'Marshall Islands', 4, 1, '2011-07-27 12:17:25'),
(183, 'Martinique', 4, 1, '2011-07-27 12:17:25'),
(184, 'Mauritania', 4, 1, '2011-07-27 12:17:25'),
(185, 'Mauritius', 4, 1, '2011-07-27 12:17:25'),
(186, 'Mayotte', 4, 1, '2011-07-27 12:17:25'),
(187, 'Mexico', 4, 1, '2011-07-27 12:17:25'),
(188, 'Micronesia Federated States of', 4, 1, '2011-07-27 12:17:25'),
(189, 'Moldova', 4, 1, '2011-07-27 12:17:25'),
(190, 'Monaco', 4, 1, '2011-07-27 12:17:25'),
(191, 'Mongolia', 4, 1, '2011-07-27 12:17:25'),
(192, 'Montserrat', 4, 1, '2011-07-27 12:17:25'),
(193, 'Morocco', 4, 1, '2011-07-27 12:17:25'),
(194, 'Mozambique', 4, 1, '2011-07-27 12:17:25'),
(195, 'Namibia', 4, 1, '2011-07-27 12:17:25'),
(196, 'Nauru', 4, 1, '2011-07-27 12:17:25'),
(197, 'Navassa Island', 4, 1, '2011-07-27 12:17:25'),
(198, 'Nepal', 4, 1, '2011-07-27 12:17:25'),
(199, 'Netherlands', 4, 1, '2011-07-27 12:17:25'),
(200, 'Netherlands Antilles', 4, 1, '2011-07-27 12:17:25'),
(201, 'New Caledonia', 4, 1, '2011-07-27 12:17:25'),
(202, 'New Zealand', 4, 1, '2011-07-27 12:17:25'),
(203, 'Nicaragua', 4, 1, '2011-07-27 12:17:25'),
(204, 'Niger', 4, 1, '2011-07-27 12:17:25'),
(205, 'Nigeria', 4, 1, '2011-07-27 12:17:25'),
(206, 'Niue', 4, 1, '2011-07-27 12:17:25'),
(207, 'Norfolk Island', 4, 1, '2011-07-27 12:17:25'),
(208, 'Northern Mariana Islands', 4, 1, '2011-07-27 12:17:25'),
(209, 'Norway', 4, 1, '2011-07-27 12:17:25'),
(210, 'Oman', 4, 1, '2011-07-27 12:17:25'),
(211, 'Pakistan', 4, 1, '2011-07-27 12:17:25'),
(212, 'Palau', 4, 1, '2011-07-27 12:17:25'),
(213, 'Panama', 4, 1, '2011-07-27 12:17:25'),
(214, 'Papua New Guinea', 4, 1, '2011-07-27 12:17:25'),
(215, 'Paracel Islands', 4, 1, '2011-07-27 12:17:25'),
(216, 'Paraguay', 4, 1, '2011-07-27 12:17:25'),
(217, 'Peru', 4, 1, '2011-07-27 12:17:25'),
(218, 'Philippines', 4, 1, '2011-07-27 12:17:25'),
(219, 'Pitcairn Islands', 4, 1, '2011-07-27 12:17:25'),
(220, 'Poland', 4, 1, '2011-07-27 12:17:25'),
(221, 'Portugal', 4, 1, '2011-07-27 12:17:25'),
(222, 'Puerto Rico', 4, 1, '2011-07-27 12:17:25'),
(223, 'Qatar', 4, 1, '2011-07-27 12:17:25'),
(224, 'Reunion', 4, 1, '2011-07-27 12:17:25'),
(225, 'Romania', 4, 1, '2011-07-27 12:17:25'),
(226, 'Russia', 4, 1, '2011-07-27 12:17:25'),
(227, 'Rwanda', 4, 1, '2011-07-27 12:17:25'),
(228, 'Saint Helena', 4, 1, '2011-07-27 12:17:25'),
(229, 'Saint Kitts and Nevis', 4, 1, '2011-07-27 12:17:25'),
(230, 'Saint Lucia', 4, 1, '2011-07-27 12:17:25'),
(231, 'Saint Pierre and Miquelon', 4, 1, '2011-07-27 12:17:25'),
(232, 'Saint Vincent and the Grenadines', 4, 1, '2011-07-27 12:17:25'),
(233, 'Samoa', 4, 1, '2011-07-27 12:17:25'),
(234, 'San Marino', 4, 1, '2011-07-27 12:17:25'),
(235, 'Sao Tome and Principe', 4, 1, '2011-07-27 12:17:25'),
(236, 'Saudi Arabia', 4, 1, '2011-07-27 12:17:25'),
(237, 'Senegal', 4, 1, '2011-07-27 12:17:25'),
(238, 'Serbia and Montenegro', 4, 1, '2011-07-27 12:17:25'),
(239, 'Seychelles', 4, 1, '2011-07-27 12:17:25'),
(240, 'Sierra Leone', 4, 1, '2011-07-27 12:17:25'),
(241, 'Singapore', 4, 1, '2011-07-27 12:17:25'),
(242, 'Slovakia', 4, 1, '2011-07-27 12:17:25'),
(243, 'Slovenia', 4, 1, '2011-07-27 12:17:25'),
(244, 'Solomon Islands', 4, 1, '2011-07-27 12:17:25'),
(245, 'Somalia', 4, 1, '2011-07-27 12:17:25'),
(246, 'South Africa', 4, 1, '2011-07-27 12:17:25'),
(247, 'South Georgia and the South Sandwich Islands', 4, 1, '2011-07-27 12:17:25'),
(248, 'Spain', 4, 1, '2011-07-27 12:17:25'),
(249, 'Spratly Islands', 4, 1, '2011-07-27 12:17:25'),
(250, 'Sri Lanka', 4, 1, '2011-07-27 12:17:25'),
(251, 'Sudan', 4, 1, '2011-07-27 12:17:25'),
(252, 'Suriname', 4, 1, '2011-07-27 12:17:25'),
(253, 'Svalbard', 4, 1, '2011-07-27 12:17:25'),
(254, 'Swaziland', 4, 1, '2011-07-27 12:17:25'),
(255, 'Sweden', 4, 1, '2011-07-27 12:17:25'),
(256, 'Switzerland', 4, 1, '2011-07-27 12:17:25'),
(257, 'Syria', 4, 1, '2011-07-27 12:17:25'),
(258, 'Taiwan', 4, 1, '2011-07-27 12:17:25'),
(259, 'Tajikistan', 4, 1, '2011-07-27 12:17:25'),
(260, 'Tanzania', 4, 1, '2011-07-27 12:17:25'),
(261, 'Thailand', 4, 1, '2011-07-27 12:17:25'),
(262, 'Timor-Leste', 4, 1, '2011-07-27 12:17:25'),
(263, 'Togo', 4, 1, '2011-07-27 12:17:25'),
(264, 'Tokelau', 4, 1, '2011-07-27 12:17:25'),
(265, 'Tonga', 4, 1, '2011-07-27 12:17:25'),
(266, 'Trinidad and Tobago', 4, 1, '2011-07-27 12:17:25'),
(267, 'Tromelin Island', 4, 1, '2011-07-27 12:17:25'),
(268, 'Tunisia', 4, 1, '2011-07-27 12:17:25'),
(269, 'Turkey', 4, 1, '2011-07-27 12:17:25'),
(270, 'Turkmenistan', 4, 1, '2011-07-27 12:17:25'),
(271, 'Turks and Caicos Islands', 4, 1, '2011-07-27 12:17:25'),
(272, 'Tuvalu', 4, 1, '2011-07-27 12:17:25'),
(273, 'Uganda', 4, 1, '2011-07-27 12:17:25'),
(274, 'Ukraine', 4, 1, '2011-07-27 12:17:25'),
(275, 'United Arab Emirates', 4, 1, '2011-07-27 12:17:25'),
(276, 'United Kingdom', 4, 1, '2011-07-27 12:17:25'),
(278, 'United States of America', 4, 1, '2011-07-27 12:17:25'),
(279, 'Uruguay', 4, 1, '2011-07-27 12:17:25'),
(280, 'Uzbekistan', 4, 1, '2011-07-27 12:17:25'),
(281, 'Vanuatu', 4, 1, '2011-07-27 12:17:25'),
(282, 'Venezuela', 4, 1, '2011-07-27 12:17:25'),
(283, 'Vietnam', 4, 1, '2011-07-27 12:17:25'),
(284, 'Virgin Islands', 4, 1, '2011-07-27 12:17:25'),
(285, 'Wake Island', 4, 1, '2011-07-27 12:17:25'),
(286, 'Wallis and Futuna', 4, 1, '2011-07-27 12:17:25'),
(287, 'West Bank', 4, 1, '2011-07-27 12:17:25'),
(288, 'Western Sahara', 4, 1, '2011-07-27 12:17:25'),
(289, 'Yemen', 4, 1, '2011-07-27 12:17:25'),
(290, 'Zambia', 4, 1, '2011-07-27 12:17:25'),
(291, 'Zimbabwe', 4, 1, '2011-07-27 12:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `privileges` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `privileges`) VALUES
(13, 'admin', 'admin', 'admin'),
(16, 'frank.chisale', '123456', 'driver'),
(17, 'frank.chisale', '123456', 'driver'),
(18, 'jane.doe', '987654321', 'driver'),
(19, 'john.doe', 'vanawsum', 'staff'),
(20, 'patrick.chikafa', '123456', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
`staff_id` int(255) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `role` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `firstname`, `surname`, `username`, `phone`, `email`, `role`, `date_added`) VALUES
(11, 'Super', 'User', 'admin', '0996234931', 'mwmtingwi5@gmail.com', 'admin', '2015-02-13 09:31:44'),
(15, 'Frank', 'Chisale', 'frank.chisale', '0992534561', 'frank.chisale@sb.org', 'driver', '2015-08-24 19:59:56'),
(16, 'Jane', 'Doe', 'jane.doe', '0992534575', 'jane.doe@sb.org', 'driver', '2015-08-26 18:34:16'),
(17, 'John', 'Doe', 'john.doe', '0996234931', 'mwmtingwi5@gmail.com', 'staff', '2015-08-31 07:44:59'),
(18, 'Patrick', 'Chikafa', 'patrick.chikafa', '099521478', 'pc@mnmm.com', 'staff', '2015-08-31 17:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
`log_id` int(255) NOT NULL,
  `username` varchar(70) NOT NULL,
  `times` int(255) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`log_id`, `username`, `times`, `last_login`) VALUES
(1, 'admin', 213, '2015-08-31 19:58:46'),
(12, 'frank.chisale', 3, '2015-08-31 10:58:42'),
(13, 'jane.doe', 0, '0000-00-00 00:00:00'),
(14, 'john.doe', 7, '2015-08-31 19:44:35'),
(15, 'patrick.chikafa', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
 ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `bookings_log`
--
ALTER TABLE `bookings_log`
 ADD PRIMARY KEY (`bookings_log_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
 ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
 ADD PRIMARY KEY (`district_id`), ADD KEY `region_for_district` (`region_id`), ADD KEY `user_who_created_district` (`creator`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
 ADD PRIMARY KEY (`log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `bookings_log`
--
ALTER TABLE `bookings_log`
MODIFY `bookings_log_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=292;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
MODIFY `staff_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
MODIFY `log_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
