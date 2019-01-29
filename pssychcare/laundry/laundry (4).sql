-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 03:55 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `photo` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `username`, `photo`, `password`) VALUES
(12, 'Lerrie', 'Garrido', 'lerriegarrido', 'images/008.jpg', '1234'),
(13, 'Darlyn', 'Guaca', 'darguaca', 'images/13152768_10206118078380166_1627097167_n.jpg', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
`id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact_num` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `contact_num`) VALUES
(2, 'Lerrie', 'Garrido', '09565513902'),
(4, 'Brethmarie', 'Pactores', '09121278932'),
(5, 'Brad', 'Pitt', '12345678910'),
(6, 'Katelyn', 'Lopez', '09173663544'),
(7, 'Kim', 'Nengasca', '09232323232'),
(8, 'jan', 'vil', '09161213141'),
(9, 'hhh', 'hhh', '777'),
(10, 'Dar', 'Guaca', '12345678910');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
`id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price_kilo` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `price_kilo`) VALUES
(1, 'T-Shirts', '50.00'),
(2, 'Jeans', '100.00'),
(3, 'Comforters', '500.00'),
(4, 'Blankets', '200.00'),
(5, 'Underwear/Handkerchiefs', '20.00'),
(7, 'Pillow', '50.00'),
(8, 'Barong', '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`id` int(11) NOT NULL,
  `date_today` varchar(10) NOT NULL,
  `pick_up_date` varchar(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `total_payment` decimal(10,2) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date_today`, `pick_up_date`, `fname`, `lname`, `contact_no`, `total_payment`, `status`) VALUES
(39, '2018-03-20', '2018-03-20', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Claimed'),
(40, '2018-03-20', '2018-03-23', 'Kim', 'Nengasca', '09232323232', '270.00', 'Pending'),
(41, '2018-03-20', '2018-03-22', 'Brad', 'Pitt', '12345678910', '610.00', 'Cancelled'),
(44, '2018-03-20', '2018-03-20', 'Katelyn', 'Lopez', '09173663544', '200.00', 'Claimed'),
(47, '2018-03-22', '2018-03-24', 'Brad', 'Pitt', '12345678910', '100.00', 'Cancelled'),
(49, '2018-03-22', '2018-03-22', 'Dar', 'Guaca', '12345678910', '50.00', 'Claimed'),
(50, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Pending'),
(51, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Pending'),
(52, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Pending'),
(53, '2018-03-22', '2018-03-30', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Pending'),
(54, '2018-03-22', '2018-03-30', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Pending'),
(55, '2018-03-22', '2018-03-30', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Pending'),
(56, '2018-03-22', '2018-03-30', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Pending'),
(57, '2018-03-22', '2018-03-30', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Pending'),
(58, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Pending'),
(59, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Pending'),
(60, '2018-03-22', '2018-03-22', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(61, '2018-03-22', '2018-03-23', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Pending'),
(62, '2018-03-22', '2018-03-23', 'Lerrie', 'Garrido', '09565513902', '50.00', 'Pending'),
(63, '2018-03-22', '2018-03-23', 'Brethmarie', 'Pactores', '09121278932', '850.00', 'Pending'),
(64, '2018-03-22', '2018-03-23', 'Brethmarie', 'Pactores', '09121278932', '850.00', 'Pending'),
(65, '2018-03-22', '2018-03-23', 'Brethmarie', 'Pactores', '09121278932', '850.00', 'Pending'),
(66, '2018-03-22', '2018-03-24', 'hhh', 'hhh', '777', '650.00', 'Pending'),
(67, '2018-03-22', '2018-03-24', 'hhh', 'hhh', '777', '650.00', 'Pending'),
(68, '2018-03-22', '2018-03-24', 'hhh', 'hhh', '777', '650.00', 'Pending'),
(69, '2018-03-22', '2018-03-24', 'hhh', 'hhh', '777', '650.00', 'Pending'),
(70, '2018-03-22', '2018-03-24', 'hhh', 'hhh', '777', '650.00', 'Pending'),
(71, '2018-03-22', '2018-03-24', 'hhh', 'hhh', '777', '650.00', 'Pending'),
(72, '2018-03-22', '2018-03-24', 'hhh', 'hhh', '777', '650.00', 'Pending'),
(73, '2018-03-22', '2018-03-24', 'hhh', 'hhh', '777', '650.00', 'Pending'),
(74, '2018-03-22', '2018-03-24', 'hhh', 'hhh', '777', '650.00', 'Pending'),
(75, '2018-03-22', '2018-03-24', 'hhh', 'hhh', '777', '650.00', 'Pending'),
(76, '2018-03-22', '2018-03-24', 'hhh', 'hhh', '777', '650.00', 'Pending'),
(77, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '870.00', 'Pending'),
(78, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '70.00', 'Pending'),
(79, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '70.00', 'Pending'),
(80, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(81, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(82, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(83, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(84, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(85, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(86, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(87, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(88, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(89, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(90, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(91, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(92, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(93, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(94, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(95, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(96, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(97, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(98, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(99, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(100, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(101, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(102, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(103, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(104, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(105, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(106, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(107, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(108, '2018-03-22', '2018-03-24', '', '', '', '0.00', 'Pending'),
(109, '2018-03-22', '2018-03-24', '', '', '', '0.00', 'Pending'),
(110, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(111, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(112, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(113, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(114, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(115, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(116, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(117, '2018-03-22', '2018-03-24', 'Lerrie', 'Garrido', '09565513902', '0.00', 'Pending'),
(118, '2018-03-22', '2018-03-24', '', '', '', '0.00', 'Pending'),
(119, '2018-03-22', '2018-03-24', '', '', '', '0.00', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
`id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=534 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `item_name`, `quantity`) VALUES
(7, 39, 'T-Shirts', 20),
(8, 39, 'Jeans', 0),
(9, 39, 'Comforters', 0),
(10, 39, 'Blankets', 0),
(11, 39, 'Underwear/Handkerchiefs', 0),
(12, 39, 'Towels', 0),
(13, 40, 'T-Shirts', 30),
(14, 40, 'Jeans', 20),
(15, 40, 'Comforters', 0),
(16, 40, 'Blankets', 0),
(17, 40, 'Underwear/Handkerchiefs', 30),
(18, 40, 'Towels', 0),
(19, 41, 'T-Shirts', 30),
(20, 41, 'Jeans', 15),
(21, 41, 'Comforters', 0),
(22, 41, 'Blankets', 0),
(23, 41, 'Underwear/Handkerchiefs', 0),
(24, 41, 'Towels', 16),
(25, 42, 'T-Shirts', 30),
(26, 42, 'Jeans', 15),
(27, 42, 'Comforters', 0),
(28, 42, 'Blankets', 0),
(29, 42, 'Underwear/Handkerchiefs', 0),
(30, 42, 'Towels', 16),
(31, 43, 'T-Shirts', 18),
(32, 43, 'Jeans', 13),
(33, 43, 'Comforters', 2),
(34, 43, 'Blankets', 0),
(35, 43, 'Underwear/Handkerchiefs', 0),
(36, 43, 'Towels', 0),
(37, 44, 'T-Shirts', 40),
(38, 44, 'Jeans', 0),
(39, 44, 'Comforters', 0),
(40, 44, 'Blankets', 0),
(41, 44, 'Underwear/Handkerchiefs', 0),
(42, 45, 'T-Shirts', 0),
(43, 45, 'Jeans', 0),
(44, 45, 'Comforters', 0),
(45, 45, 'Blankets', 0),
(46, 45, 'Underwear/Handkerchiefs', 0),
(47, 45, 'Pillow', 20),
(48, 46, 'T-Shirts', 20),
(49, 46, 'Jeans', 0),
(50, 46, 'Comforters', 0),
(51, 46, 'Blankets', 0),
(52, 46, 'Underwear/Handkerchiefs', 0),
(53, 46, 'Pillow', 0),
(54, 47, 'T-Shirts', 30),
(55, 47, 'Jeans', 20),
(56, 47, 'Comforters', 0),
(57, 47, 'Blankets', 0),
(58, 47, 'Underwear/Handkerchiefs', 0),
(59, 47, 'Pillow', 0),
(60, 47, 'T-Shirts', 20),
(61, 47, 'Jeans', 0),
(62, 47, 'Comforters', 0),
(63, 47, 'Blankets', 0),
(64, 47, 'Underwear/Handkerchiefs', 0),
(65, 47, 'Pillow', 0),
(66, 48, 'T-Shirts', 20),
(67, 48, 'Jeans', 20),
(68, 48, 'Comforters', 0),
(69, 48, 'Blankets', 0),
(70, 48, 'Underwear/Handkerchiefs', 0),
(71, 48, 'Pillow', 0),
(72, 49, 'T-Shirts', 20),
(73, 49, 'Jeans', 0),
(74, 49, 'Comforters', 0),
(75, 49, 'Blankets', 0),
(76, 49, 'Underwear/Handkerchiefs', 0),
(77, 49, 'Pillow', 0),
(78, 50, 'T-Shirts', 1),
(79, 50, 'Jeans', 0),
(80, 50, 'Comforters', 0),
(81, 50, 'Blankets', 0),
(82, 50, 'Underwear/Handkerchiefs', 0),
(83, 50, 'Pillow', 0),
(84, 50, 'Barong', 0),
(85, 51, 'T-Shirts', 1),
(86, 51, 'Jeans', 0),
(87, 51, 'Comforters', 0),
(88, 51, 'Blankets', 0),
(89, 51, 'Underwear/Handkerchiefs', 0),
(90, 51, 'Pillow', 0),
(91, 51, 'Barong', 0),
(92, 52, 'T-Shirts', 1),
(93, 52, 'Jeans', 0),
(94, 52, 'Comforters', 0),
(95, 52, 'Blankets', 0),
(96, 52, 'Underwear/Handkerchiefs', 0),
(97, 52, 'Pillow', 0),
(98, 52, 'Barong', 0),
(99, 53, 'T-Shirts', 1),
(100, 53, 'Jeans', 0),
(101, 53, 'Comforters', 0),
(102, 53, 'Blankets', 0),
(103, 53, 'Underwear/Handkerchiefs', 0),
(104, 53, 'Pillow', 0),
(105, 53, 'Barong', 0),
(106, 54, 'T-Shirts', 1),
(107, 54, 'Jeans', 0),
(108, 54, 'Comforters', 0),
(109, 54, 'Blankets', 0),
(110, 54, 'Underwear/Handkerchiefs', 0),
(111, 54, 'Pillow', 0),
(112, 54, 'Barong', 0),
(113, 55, 'T-Shirts', 1),
(114, 55, 'Jeans', 0),
(115, 55, 'Comforters', 0),
(116, 55, 'Blankets', 0),
(117, 55, 'Underwear/Handkerchiefs', 0),
(118, 55, 'Pillow', 0),
(119, 55, 'Barong', 0),
(120, 56, 'T-Shirts', 1),
(121, 56, 'Jeans', 0),
(122, 56, 'Comforters', 0),
(123, 56, 'Blankets', 0),
(124, 56, 'Underwear/Handkerchiefs', 0),
(125, 56, 'Pillow', 0),
(126, 56, 'Barong', 0),
(127, 57, 'T-Shirts', 1),
(128, 57, 'Jeans', 0),
(129, 57, 'Comforters', 0),
(130, 57, 'Blankets', 0),
(131, 57, 'Underwear/Handkerchiefs', 0),
(132, 57, 'Pillow', 0),
(133, 57, 'Barong', 0),
(134, 58, 'T-Shirts', 1),
(135, 58, 'Jeans', 0),
(136, 58, 'Comforters', 0),
(137, 58, 'Blankets', 0),
(138, 58, 'Underwear/Handkerchiefs', 0),
(139, 58, 'Pillow', 0),
(140, 58, 'Barong', 0),
(141, 59, 'T-Shirts', 1),
(142, 59, 'Jeans', 0),
(143, 59, 'Comforters', 0),
(144, 59, 'Blankets', 0),
(145, 59, 'Underwear/Handkerchiefs', 0),
(146, 59, 'Pillow', 0),
(147, 59, 'Barong', 0),
(148, 60, 'T-Shirts', 0),
(149, 60, 'Jeans', 0),
(150, 60, 'Comforters', 0),
(151, 60, 'Blankets', 0),
(152, 60, 'Underwear/Handkerchiefs', 0),
(153, 60, 'Pillow', 0),
(154, 60, 'Barong', 0),
(155, 61, 'T-Shirts', 2),
(156, 61, 'Jeans', 0),
(157, 61, 'Comforters', 0),
(158, 61, 'Blankets', 0),
(159, 61, 'Underwear/Handkerchiefs', 0),
(160, 61, 'Pillow', 0),
(161, 61, 'Barong', 0),
(162, 62, 'T-Shirts', 2),
(163, 62, 'Jeans', 0),
(164, 62, 'Comforters', 0),
(165, 62, 'Blankets', 0),
(166, 62, 'Underwear/Handkerchiefs', 0),
(167, 62, 'Pillow', 0),
(168, 62, 'Barong', 0),
(169, 63, 'T-Shirts', 20),
(170, 63, 'Jeans', 10),
(171, 63, 'Comforters', 30),
(172, 63, 'Blankets', 40),
(173, 63, 'Underwear/Handkerchiefs', 0),
(174, 63, 'Pillow', 0),
(175, 63, 'Barong', 0),
(176, 64, 'T-Shirts', 20),
(177, 64, 'Jeans', 10),
(178, 64, 'Comforters', 30),
(179, 64, 'Blankets', 40),
(180, 64, 'Underwear/Handkerchiefs', 0),
(181, 64, 'Pillow', 0),
(182, 64, 'Barong', 0),
(183, 65, 'T-Shirts', 20),
(184, 65, 'Jeans', 10),
(185, 65, 'Comforters', 30),
(186, 65, 'Blankets', 40),
(187, 65, 'Underwear/Handkerchiefs', 0),
(188, 65, 'Pillow', 0),
(189, 65, 'Barong', 0),
(190, 66, 'T-Shirts', 20),
(191, 66, 'Jeans', 26),
(192, 66, 'Comforters', 10),
(193, 66, 'Blankets', 0),
(194, 66, 'Underwear/Handkerchiefs', 0),
(195, 66, 'Pillow', 0),
(196, 66, 'Barong', 0),
(197, 67, 'T-Shirts', 10),
(198, 67, 'Jeans', 10),
(199, 67, 'Comforters', 10),
(200, 67, 'Blankets', 0),
(201, 67, 'Underwear/Handkerchiefs', 0),
(202, 67, 'Pillow', 0),
(203, 67, 'Barong', 0),
(204, 68, 'T-Shirts', 10),
(205, 68, 'Jeans', 10),
(206, 68, 'Comforters', 10),
(207, 68, 'Blankets', 0),
(208, 68, 'Underwear/Handkerchiefs', 0),
(209, 68, 'Pillow', 0),
(210, 68, 'Barong', 0),
(211, 69, 'T-Shirts', 10),
(212, 69, 'Jeans', 10),
(213, 69, 'Comforters', 10),
(214, 69, 'Blankets', 0),
(215, 69, 'Underwear/Handkerchiefs', 0),
(216, 69, 'Pillow', 0),
(217, 69, 'Barong', 0),
(218, 71, 'T-Shirts', 10),
(219, 71, 'Jeans', 10),
(220, 71, 'Comforters', 10),
(221, 71, 'Blankets', 0),
(222, 71, 'Underwear/Handkerchiefs', 0),
(223, 71, 'Pillow', 0),
(224, 71, 'Barong', 0),
(225, 75, 'T-Shirts', 10),
(226, 75, 'Jeans', 10),
(227, 75, 'Comforters', 10),
(228, 75, 'Blankets', 0),
(229, 75, 'Underwear/Handkerchiefs', 0),
(230, 75, 'Pillow', 0),
(231, 75, 'Barong', 0),
(232, 76, 'T-Shirts', 20),
(233, 76, 'Jeans', 20),
(234, 76, 'Comforters', 20),
(235, 76, 'Blankets', 0),
(236, 76, 'Underwear/Handkerchiefs', 0),
(237, 76, 'Pillow', 0),
(238, 76, 'Barong', 0),
(239, 77, 'T-Shirts', 20),
(240, 77, 'Jeans', 20),
(241, 77, 'Comforters', 20),
(242, 77, 'Blankets', 20),
(243, 77, 'Underwear/Handkerchiefs', 20),
(244, 77, 'Pillow', 0),
(245, 77, 'Barong', 0),
(246, 78, 'T-Shirts', 20),
(247, 78, 'Jeans', 0),
(248, 78, 'Comforters', 0),
(249, 78, 'Blankets', 0),
(250, 78, 'Underwear/Handkerchiefs', 20),
(251, 78, 'Pillow', 0),
(252, 78, 'Barong', 0),
(253, 79, 'T-Shirts', 0),
(254, 79, 'Jeans', 0),
(255, 79, 'Comforters', 0),
(256, 79, 'Blankets', 0),
(257, 79, 'Underwear/Handkerchiefs', 20),
(258, 79, 'Pillow', 0),
(259, 79, 'Barong', 0),
(260, 80, 'T-Shirts', 0),
(261, 80, 'Jeans', 0),
(262, 80, 'Comforters', 0),
(263, 80, 'Blankets', 0),
(264, 80, 'Underwear/Handkerchiefs', 0),
(265, 80, 'Pillow', 0),
(266, 80, 'Barong', 0),
(267, 81, 'T-Shirts', 0),
(268, 81, 'Jeans', 0),
(269, 81, 'Comforters', 0),
(270, 81, 'Blankets', 0),
(271, 81, 'Underwear/Handkerchiefs', 0),
(272, 81, 'Pillow', 0),
(273, 81, 'Barong', 0),
(274, 82, 'T-Shirts', 0),
(275, 82, 'Jeans', 0),
(276, 82, 'Comforters', 0),
(277, 82, 'Blankets', 0),
(278, 82, 'Underwear/Handkerchiefs', 0),
(279, 82, 'Pillow', 0),
(280, 82, 'Barong', 0),
(281, 83, 'T-Shirts', 0),
(282, 83, 'Jeans', 0),
(283, 83, 'Comforters', 0),
(284, 83, 'Blankets', 0),
(285, 83, 'Underwear/Handkerchiefs', 0),
(286, 83, 'Pillow', 0),
(287, 83, 'Barong', 0),
(288, 84, 'T-Shirts', 0),
(289, 84, 'Jeans', 0),
(290, 84, 'Comforters', 0),
(291, 84, 'Blankets', 0),
(292, 84, 'Underwear/Handkerchiefs', 0),
(293, 84, 'Pillow', 0),
(294, 84, 'Barong', 0),
(295, 85, 'T-Shirts', 0),
(296, 85, 'Jeans', 0),
(297, 85, 'Comforters', 0),
(298, 85, 'Blankets', 0),
(299, 85, 'Underwear/Handkerchiefs', 0),
(300, 85, 'Pillow', 0),
(301, 85, 'Barong', 0),
(302, 86, 'T-Shirts', 0),
(303, 86, 'Jeans', 0),
(304, 86, 'Comforters', 0),
(305, 86, 'Blankets', 0),
(306, 86, 'Underwear/Handkerchiefs', 0),
(307, 86, 'Pillow', 0),
(308, 86, 'Barong', 0),
(309, 87, 'T-Shirts', 0),
(310, 87, 'Jeans', 0),
(311, 87, 'Comforters', 0),
(312, 87, 'Blankets', 0),
(313, 87, 'Underwear/Handkerchiefs', 0),
(314, 87, 'Pillow', 0),
(315, 87, 'Barong', 0),
(316, 88, 'T-Shirts', 0),
(317, 88, 'Jeans', 0),
(318, 88, 'Comforters', 0),
(319, 88, 'Blankets', 0),
(320, 88, 'Underwear/Handkerchiefs', 0),
(321, 88, 'Pillow', 0),
(322, 88, 'Barong', 0),
(323, 89, 'T-Shirts', 0),
(324, 89, 'Jeans', 0),
(325, 89, 'Comforters', 0),
(326, 89, 'Blankets', 0),
(327, 89, 'Underwear/Handkerchiefs', 0),
(328, 89, 'Pillow', 0),
(329, 89, 'Barong', 0),
(330, 90, 'T-Shirts', 0),
(331, 90, 'Jeans', 0),
(332, 90, 'Comforters', 0),
(333, 90, 'Blankets', 0),
(334, 90, 'Underwear/Handkerchiefs', 0),
(335, 90, 'Pillow', 0),
(336, 90, 'Barong', 0),
(337, 91, 'T-Shirts', 0),
(338, 92, 'T-Shirts', 0),
(339, 92, 'Jeans', 0),
(340, 92, 'Comforters', 0),
(341, 92, 'Blankets', 0),
(342, 92, 'Underwear/Handkerchiefs', 0),
(343, 92, 'Pillow', 0),
(344, 92, 'Barong', 0),
(345, 93, 'T-Shirts', 0),
(346, 93, 'Jeans', 0),
(347, 93, 'Comforters', 0),
(348, 93, 'Blankets', 0),
(349, 93, 'Underwear/Handkerchiefs', 0),
(350, 93, 'Pillow', 0),
(351, 93, 'Barong', 0),
(352, 94, 'T-Shirts', 0),
(353, 94, 'Jeans', 0),
(354, 94, 'Comforters', 0),
(355, 94, 'Blankets', 0),
(356, 94, 'Underwear/Handkerchiefs', 0),
(357, 94, 'Pillow', 0),
(358, 94, 'Barong', 0),
(359, 95, 'T-Shirts', 0),
(360, 95, 'Jeans', 0),
(361, 95, 'Comforters', 0),
(362, 95, 'Blankets', 0),
(363, 95, 'Underwear/Handkerchiefs', 0),
(364, 95, 'Pillow', 0),
(365, 95, 'Barong', 0),
(366, 96, 'T-Shirts', 0),
(367, 96, 'Jeans', 0),
(368, 96, 'Comforters', 0),
(369, 96, 'Blankets', 0),
(370, 96, 'Underwear/Handkerchiefs', 0),
(371, 96, 'Pillow', 0),
(372, 96, 'Barong', 0),
(373, 97, 'T-Shirts', 0),
(374, 97, 'Jeans', 0),
(375, 97, 'Comforters', 0),
(376, 97, 'Blankets', 0),
(377, 97, 'Underwear/Handkerchiefs', 0),
(378, 97, 'Pillow', 0),
(379, 97, 'Barong', 0),
(380, 98, 'T-Shirts', 0),
(381, 98, 'Jeans', 0),
(382, 98, 'Comforters', 0),
(383, 98, 'Blankets', 0),
(384, 98, 'Underwear/Handkerchiefs', 0),
(385, 98, 'Pillow', 0),
(386, 98, 'Barong', 0),
(387, 99, 'T-Shirts', 2),
(388, 99, 'Jeans', 2),
(389, 99, 'Comforters', 2),
(390, 99, 'Blankets', 2),
(391, 99, 'Underwear/Handkerchiefs', 2),
(392, 99, 'Pillow', 2),
(393, 99, 'Barong', 2),
(394, 100, 'T-Shirts', 2),
(395, 100, 'Jeans', 2),
(396, 100, 'Comforters', 2),
(397, 100, 'Blankets', 2),
(398, 100, 'Underwear/Handkerchiefs', 2),
(399, 100, 'Pillow', 2),
(400, 100, 'Barong', 2),
(401, 101, 'T-Shirts', 2),
(402, 101, 'Jeans', 2),
(403, 101, 'Comforters', 2),
(404, 101, 'Blankets', 2),
(405, 101, 'Underwear/Handkerchiefs', 2),
(406, 101, 'Pillow', 2),
(407, 101, 'Barong', 2),
(408, 102, 'T-Shirts', 2),
(409, 102, 'Jeans', 2),
(410, 102, 'Comforters', 2),
(411, 102, 'Blankets', 2),
(412, 102, 'Underwear/Handkerchiefs', 2),
(413, 102, 'Pillow', 2),
(414, 102, 'Barong', 2),
(415, 103, 'T-Shirts', 2),
(416, 103, 'Jeans', 2),
(417, 103, 'Comforters', 2),
(418, 103, 'Blankets', 2),
(419, 103, 'Underwear/Handkerchiefs', 2),
(420, 103, 'Pillow', 2),
(421, 103, 'Barong', 2),
(422, 104, 'T-Shirts', 2),
(423, 104, 'Jeans', 2),
(424, 104, 'Comforters', 2),
(425, 104, 'Blankets', 2),
(426, 104, 'Underwear/Handkerchiefs', 2),
(427, 104, 'Pillow', 2),
(428, 104, 'Barong', 2),
(429, 105, 'T-Shirts', 0),
(430, 105, 'Jeans', 0),
(431, 105, 'Comforters', 0),
(432, 105, 'Blankets', 0),
(433, 105, 'Underwear/Handkerchiefs', 0),
(434, 105, 'Pillow', 0),
(435, 105, 'Barong', 0),
(436, 106, 'T-Shirts', 0),
(437, 106, 'Jeans', 0),
(438, 106, 'Comforters', 0),
(439, 106, 'Blankets', 0),
(440, 106, 'Underwear/Handkerchiefs', 0),
(441, 106, 'Pillow', 0),
(442, 106, 'Barong', 0),
(443, 107, 'T-Shirts', 0),
(444, 107, 'Jeans', 0),
(445, 107, 'Comforters', 0),
(446, 107, 'Blankets', 0),
(447, 107, 'Underwear/Handkerchiefs', 0),
(448, 107, 'Pillow', 0),
(449, 107, 'Barong', 0),
(450, 108, 'T-Shirts', 2),
(451, 108, 'Jeans', 2),
(452, 108, 'Comforters', 2),
(453, 108, 'Blankets', 2),
(454, 108, 'Underwear/Handkerchiefs', 2),
(455, 108, 'Pillow', 2),
(456, 108, 'Barong', 2),
(457, 109, 'T-Shirts', 20),
(458, 109, 'Jeans', 20),
(459, 109, 'Comforters', 20),
(460, 109, 'Blankets', 20),
(461, 109, 'Underwear/Handkerchiefs', 20),
(462, 109, 'Pillow', 20),
(463, 109, 'Barong', 20),
(464, 110, 'T-Shirts', 0),
(465, 110, 'Jeans', 0),
(466, 110, 'Comforters', 0),
(467, 110, 'Blankets', 0),
(468, 110, 'Underwear/Handkerchiefs', 0),
(469, 110, 'Pillow', 0),
(470, 110, 'Barong', 0),
(471, 111, 'T-Shirts', 20),
(472, 111, 'Jeans', 20),
(473, 111, 'Comforters', 20),
(474, 111, 'Blankets', 20),
(475, 111, 'Underwear/Handkerchiefs', 20),
(476, 111, 'Pillow', 20),
(477, 111, 'Barong', 20),
(478, 112, 'T-Shirts', 20),
(479, 112, 'Jeans', 20),
(480, 112, 'Comforters', 20),
(481, 112, 'Blankets', 20),
(482, 112, 'Underwear/Handkerchiefs', 20),
(483, 112, 'Pillow', 20),
(484, 112, 'Barong', 20),
(485, 113, 'T-Shirts', 20),
(486, 113, 'Jeans', 20),
(487, 113, 'Comforters', 20),
(488, 113, 'Blankets', 20),
(489, 113, 'Underwear/Handkerchiefs', 20),
(490, 113, 'Pillow', 20),
(491, 113, 'Barong', 20),
(492, 114, 'T-Shirts', 0),
(493, 114, 'Jeans', 0),
(494, 114, 'Comforters', 0),
(495, 114, 'Blankets', 0),
(496, 114, 'Underwear/Handkerchiefs', 0),
(497, 114, 'Pillow', 0),
(498, 114, 'Barong', 0),
(499, 115, 'T-Shirts', 0),
(500, 115, 'Jeans', 0),
(501, 115, 'Comforters', 0),
(502, 115, 'Blankets', 0),
(503, 115, 'Underwear/Handkerchiefs', 0),
(504, 115, 'Pillow', 0),
(505, 115, 'Barong', 0),
(506, 116, 'T-Shirts', 20),
(507, 116, 'Jeans', 20),
(508, 116, 'Comforters', 20),
(509, 116, 'Blankets', 20),
(510, 116, 'Underwear/Handkerchiefs', 20),
(511, 116, 'Pillow', 20),
(512, 116, 'Barong', 20),
(513, 117, 'T-Shirts', 0),
(514, 117, 'Jeans', 0),
(515, 117, 'Comforters', 0),
(516, 117, 'Blankets', 0),
(517, 117, 'Underwear/Handkerchiefs', 0),
(518, 117, 'Pillow', 0),
(519, 117, 'Barong', 0),
(520, 118, 'T-Shirts', 0),
(521, 118, 'Jeans', 0),
(522, 118, 'Comforters', 0),
(523, 118, 'Blankets', 0),
(524, 118, 'Underwear/Handkerchiefs', 0),
(525, 118, 'Pillow', 0),
(526, 118, 'Barong', 0),
(527, 119, 'T-Shirts', 20),
(528, 119, 'Jeans', 20),
(529, 119, 'Comforters', 20),
(530, 119, 'Blankets', 20),
(531, 119, 'Underwear/Handkerchiefs', 20),
(532, 119, 'Pillow', 20),
(533, 119, 'Barong', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=120;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=534;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
