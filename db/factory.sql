-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 11:38 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_orders`
--

CREATE TABLE `all_orders` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `batch_release`
--

CREATE TABLE `batch_release` (
  `id` int(11) NOT NULL,
  `wo_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `operator` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `finish_qty` varchar(255) NOT NULL,
  `packer_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `qty_per_mc` varchar(255) NOT NULL,
  `total_carton` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch_release`
--

INSERT INTO `batch_release` (`id`, `wo_id`, `flow_id`, `operator`, `status`, `finish_qty`, `packer_name`, `date`, `qty_per_mc`, `total_carton`, `user_id`, `created_at`) VALUES
(4, 11, 22, 'Umer', 'Complete', '50500', 'baqar', '2018-05-09', '1000+500', '50+01', 2, '2018-05-09 07:21:46');

-- --------------------------------------------------------

--
-- Table structure for table `bom`
--

CREATE TABLE `bom` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bom`
--

INSERT INTO `bom` (`id`, `item_id`, `product_id`, `qty`, `user_id`, `created_at`) VALUES
(1, 2, 5, 50, 2, '2018-04-07 07:07:09'),
(2, 2, 5, 50, 2, '2018-04-07 07:07:09'),
(3, 2, 18, 50, 2, '2018-04-07 07:07:09'),
(4, 3, 5, 5, 2, '2018-04-09 06:42:30'),
(5, 4, 35, 10, 2, '2018-04-10 11:53:26'),
(6, 4, 35, 10, 2, '2018-04-10 11:53:26'),
(7, 4, 14, 10, 2, '2018-04-10 11:53:26'),
(8, 1, 5, 0, 2, '2018-04-12 09:25:14'),
(9, 7, 6, 0, 2, '2018-04-20 07:04:32'),
(10, 7, 6, 0, 2, '2018-04-20 07:04:32'),
(11, 7, 32, 0, 2, '2018-04-20 07:04:32'),
(12, 7, 6, 0, 2, '2018-04-20 07:04:32'),
(13, 7, 32, 0, 2, '2018-04-20 07:04:32'),
(14, 7, 249, 0, 2, '2018-04-20 07:04:32'),
(15, 0, 0, 0, 0, '2018-04-23 06:31:14'),
(16, 0, 0, 0, 0, '2018-04-23 06:31:14'),
(17, 0, 0, 0, 0, '2018-04-23 06:31:14'),
(18, 6, 5, 0, 2, '2018-04-23 06:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(245) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `Name`, `user_id`, `created_at`) VALUES
(2, 'Paper', 2, '2018-03-12 06:59:12'),
(3, 'Card', 2, '2018-03-12 08:58:11'),
(4, 'Board', 2, '2018-03-12 09:00:07'),
(5, 'Carton', 2, '2018-03-12 09:00:59'),
(6, 'Raw Material', 2, '2018-03-12 09:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) UNSIGNED NOT NULL,
  `client_Name` varchar(250) DEFAULT NULL,
  `Detail` text,
  `order_Margin` int(250) DEFAULT NULL,
  `Contact_Person` varchar(250) DEFAULT NULL,
  `Contact_Number` varchar(250) DEFAULT NULL,
  `Email` varchar(250) DEFAULT NULL,
  `Address` tinytext,
  `Company_Name` varchar(250) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_Name`, `Detail`, `order_Margin`, `Contact_Person`, `Contact_Number`, `Email`, `Address`, `Company_Name`, `type`, `user_id`, `created_at`) VALUES
(1, 'Usama', 'usama', 10, 'usama', '87329873273', 'usama@test.com', 'gshsdgjhds', 'usama', 'Gold', 2, '2018-03-13 10:37:28'),
(2, 'Magma', 'Service Company', 10, 'Muhammad Umer', '03462503768', 'umer@magmacc.com', 'Plot# 130/A, SMCHS, Karachi', 'Magma CC', 'Gold', 2, '2018-04-07 07:02:33'),
(3, 'GSK', 'Pharmacutical', 10, 'Muhammad Umer', '03462503768', 'umer@magmacc.com', 'Plot# 130/A, SMCHS, Karachi', 'GSK', 'Gold', 2, '2018-04-10 11:47:05'),
(4, 'ITGS', 'service industry', 10, 'Junaid', '02252558558', 'test@gmail.com', 'karachi pakistan', 'ITGS', 'Platinum', 2, '2018-04-20 06:56:52');

-- --------------------------------------------------------

--
-- Table structure for table `cutting`
--

CREATE TABLE `cutting` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `operator` varchar(100) NOT NULL,
  `assistant` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `conversion` varchar(100) NOT NULL,
  `cleaning` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `production` varchar(100) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cutting`
--

INSERT INTO `cutting` (`id`, `plane_id`, `flow_id`, `operator`, `assistant`, `quantity`, `conversion`, `cleaning`, `size`, `production`, `remarks`, `user_id`, `created_at`) VALUES
(1, 6, 5, 'Baqar ', 'Umer', '50000', '50', 'Yes', 'Yes', '50000', 'ASAP', 2, '2018-04-09 07:10:18'),
(2, 7, 8, 'Baqar', 'Umer', '500', '500', 'Yes', 'Yes', '500', 'asdasd', 2, '2018-04-09 07:12:49'),
(3, 10, 16, 'Umer', 'Uemrw', '55', '4', 'Yes', 'Yes', '50000', 'cutting complete', 2, '2018-04-10 13:16:47'),
(4, 12, 21, 'Umer', 'Baqar', '6875', '1/4', 'Yes', 'Yes', '6880', 'AAASDM', 2, '2018-04-20 07:39:12'),
(5, 9, 14, 'hgffhg', 'fghgffg', 'gfhffgghfg', '1/4', 'Yes', 'Yes', 'fghffgfg', 'fghgfgfg', 2, '2018-04-27 09:48:06');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_challan`
--

CREATE TABLE `delivery_challan` (
  `id` int(11) NOT NULL,
  `wo_id` int(11) NOT NULL,
  `delivery_challan` varchar(100) NOT NULL,
  `line_no` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_challan`
--

INSERT INTO `delivery_challan` (`id`, `wo_id`, `delivery_challan`, `line_no`, `user_id`, `created_at`) VALUES
(1, 8, '2345 / 18', 'wfwfd', 2, '2018-05-10 06:39:13'),
(2, 11, '546545', '5445454', 2, '2018-05-10 07:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `design_report`
--

CREATE TABLE `design_report` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `design_report`
--

INSERT INTO `design_report` (`id`, `order_id`, `remarks`, `file`, `user_id`, `created_at`) VALUES
(1, 2, 'done', '', 7, '2018-04-07 07:12:01'),
(2, 3, 'Done', '', 7, '2018-04-09 06:47:57'),
(3, 4, 'done', '/uploads/123.PNG', 7, '2018-04-09 06:50:06'),
(4, 6, 'Done', '', 7, '2018-04-10 10:07:43'),
(5, 7, 'done', '', 7, '2018-04-10 10:21:49'),
(6, 8, 'Done', '/uploads/1231.PNG', 7, '2018-04-10 11:59:48'),
(7, 9, 'done', '', 2, '2018-04-10 12:40:12'),
(8, 11, 'Doen', '/uploads/report.png', 2, '2018-04-20 07:10:39');

-- --------------------------------------------------------

--
-- Table structure for table `development_report`
--

CREATE TABLE `development_report` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `development_report`
--

INSERT INTO `development_report` (`id`, `order_id`, `remarks`, `file`, `user_id`, `created_at`) VALUES
(1, 2, 'done', '', 7, '2018-04-07 07:11:52'),
(2, 3, 'Done', '', 7, '2018-04-09 06:47:32'),
(3, 4, 'done', '', 7, '2018-04-09 06:49:50'),
(4, 6, 'Done', '', 7, '2018-04-10 10:07:24'),
(5, 7, 'done', '', 7, '2018-04-10 10:21:07'),
(6, 8, 'Done my job', '', 7, '2018-04-10 11:59:06'),
(7, 9, 'done', '', 2, '2018-04-10 12:39:25'),
(8, 11, 'Done', '/uploads/found.png', 2, '2018-04-20 07:09:33');

-- --------------------------------------------------------

--
-- Table structure for table `die_cutting`
--

CREATE TABLE `die_cutting` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `operator` varchar(100) NOT NULL,
  `assistant` varchar(100) NOT NULL,
  `process` varchar(100) NOT NULL,
  `opening` varchar(100) NOT NULL,
  `closing` varchar(100) NOT NULL,
  `output` varchar(100) NOT NULL,
  `waste` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `die_cutting`
--

INSERT INTO `die_cutting` (`id`, `plane_id`, `flow_id`, `operator`, `assistant`, `process`, `opening`, `closing`, `output`, `waste`, `user_id`, `created_at`) VALUES
(1, 9, 26, 'fdgfgfg', 'ffgfg', 'Cutting', '5454', '44345', '5443', '4343', 2, '2018-04-27 10:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `die_cutting_complete`
--

CREATE TABLE `die_cutting_complete` (
  `id` int(11) NOT NULL,
  `die_cutting_id` int(11) NOT NULL,
  `completed` varchar(10) NOT NULL,
  `feeder` varchar(10) NOT NULL,
  `delivery` varchar(10) NOT NULL,
  `die` varchar(10) NOT NULL,
  `plate` varchar(10) NOT NULL,
  `ready` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `die_cutting_complete`
--

INSERT INTO `die_cutting_complete` (`id`, `die_cutting_id`, `completed`, `feeder`, `delivery`, `die`, `plate`, `ready`, `user_id`, `created_at`) VALUES
(1, 1, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 2, '2018-04-27 10:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `die_cutting_hourse`
--

CREATE TABLE `die_cutting_hourse` (
  `id` int(11) NOT NULL,
  `die_cutting_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `froms` varchar(100) NOT NULL,
  `tos` varchar(100) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `counter` varchar(100) NOT NULL,
  `remarks` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `die_cutting_hourse`
--

INSERT INTO `die_cutting_hourse` (`id`, `die_cutting_id`, `code`, `froms`, `tos`, `hours`, `counter`, `remarks`) VALUES
(1, 1, 'Cleaning', '13:00', '14:00', '10 am/pm', 'fgfdggffg', 'eewew');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `name`, `user_id`, `created_at`) VALUES
(3, 'No Of Colors', 2, '2018-01-11 08:45:38'),
(4, 'Varnish', 2, '2018-01-12 06:55:22'),
(5, 'Water Base', 2, '2018-01-11 08:46:06'),
(6, 'UV Coating', 2, '2018-01-11 08:46:24'),
(7, 'Spot UV', 2, '2018-01-11 08:46:38'),
(8, 'Security Feature', 2, '2018-01-12 06:55:15'),
(9, 'Embossing', 2, '2018-01-11 08:47:10'),
(10, 'Foiling', 2, '2018-01-12 06:55:31'),
(11, 'Lamination', 2, '2018-01-12 06:55:39'),
(12, 'Die Cut', 2, '2018-01-12 06:55:47'),
(13, 'striping', 2, '2018-01-11 08:49:35'),
(14, 'straigth pasting', 2, '2018-01-11 08:50:25'),
(15, 'Crash Lock Pasting', 2, '2018-01-11 08:51:32'),
(16, 'Hand Pasting', 2, '2018-01-11 08:51:49'),
(17, 'Folding', 2, '2018-01-11 08:52:04'),
(18, 'label Cutting', 2, '2018-01-11 08:52:30'),
(19, 'leaflet cutting', 2, '2018-01-11 08:53:00'),
(20, 'binding', 2, '2018-01-11 08:53:18'),
(21, 'packing material', 2, '2018-01-11 08:53:36'),
(22, 'Master Carton', 2, '2018-01-11 08:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `flows`
--

CREATE TABLE `flows` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flows`
--

INSERT INTO `flows` (`id`, `Name`, `user_id`, `created_at`) VALUES
(4, 'Cutting', 2, '2018-01-23 10:51:15'),
(5, 'Film Making', 2, '2018-01-23 10:51:24'),
(6, 'Plate Making', 2, '2018-01-23 10:51:34'),
(7, 'Printing', 2, '2018-01-23 10:51:43'),
(8, 'Leaflet Cutting', 2, '2018-01-23 10:52:04'),
(9, 'UV Printing', 2, '2018-01-23 10:52:25'),
(10, 'Sorting', 2, '2018-01-23 10:52:35'),
(11, 'Label Cutting', 2, '2018-01-23 10:52:43'),
(12, 'Folding', 2, '2018-01-23 10:52:55'),
(13, 'Die Cutting', 2, '2018-01-23 10:53:06'),
(14, 'Packing', 2, '2018-01-23 10:53:15'),
(15, 'Pasting', 2, '2018-01-23 10:53:25'),
(16, 'Dispatch', 2, '2018-01-23 10:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) UNSIGNED NOT NULL,
  `Item_Code` varchar(100) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Client` int(11) NOT NULL,
  `Work_Type` varchar(100) NOT NULL,
  `features` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `ups` varchar(100) NOT NULL,
  `colors` varchar(100) NOT NULL,
  `spl1` varchar(255) NOT NULL,
  `spl2` varchar(255) NOT NULL,
  `spl3` varchar(255) NOT NULL,
  `spl4` varchar(255) NOT NULL,
  `gsm` varchar(100) NOT NULL,
  `conversion` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `Item_Code`, `Description`, `Client`, `Work_Type`, `features`, `type`, `size`, `ups`, `colors`, `spl1`, `spl2`, `spl3`, `spl4`, `gsm`, `conversion`, `user_id`, `created_at`) VALUES
(1, '3298732', 'hska', 1, 'Package Carton', '3,4,5', 'wg', '30*24', '6', 'Black,Cyan,Magenta,Yellow', '', '', '', '', '40', '1/4', 2, '2018-03-13 10:38:12'),
(2, '2503768', 'C/N Risek 50mg', 2, 'Package Carton', '3,4,5,7,8,9,10,12,13', 'Bleech Card', '1000*500', '8', 'Black,Cyan,Magenta,SPL1', '', '', '', '', '300', '1/4', 2, '2018-04-07 07:05:00'),
(3, '987654321-test', 'C/N Dermovat', 2, 'Package Carton', '3,4,5,12,13,14', 'Bleach Card', '1000*500', '8', 'Black,Cyan,SPL4', '', '', '', '', '300', '1/4', 2, '2018-04-09 06:31:05'),
(4, '789654 test', 'C/N Acort Cream 1ogm T/P', 3, 'Package Carton', '3,4,5,7,8,9', 'Bleech Card', '1000*500', '8', 'Black,Cyan,SPL1', '', '', '', '', '300', '1/4', 2, '2018-04-10 11:51:27'),
(6, 'fhfghg', 'try', 1, 'Package Carton', '3,4,5', 'tryt', '45', '3', 'SPL1,SPL2,SPL3,SPL4', '1', '2', '3', '4', 'rerre', '1/4', 2, '2018-04-11 07:33:38'),
(7, '999888555', 'C/N Norvix', 4, 'Package Carton', '3,4,5,8,9,10', 'Bleach Card', '100*500', '8', 'Black,Cyan,SPL1,SPL2', '468558', '857557', '', '', '300', '1/4', 2, '2018-04-20 07:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `leaflet_cutting`
--

CREATE TABLE `leaflet_cutting` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `shift` varchar(10) NOT NULL,
  `operator` varchar(100) NOT NULL,
  `assistant` varchar(100) NOT NULL,
  `paper` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `conversion` varchar(100) NOT NULL,
  `cleaning` varchar(10) NOT NULL,
  `size` varchar(10) NOT NULL,
  `production` varchar(100) NOT NULL,
  `waste` varchar(100) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaflet_cutting`
--

INSERT INTO `leaflet_cutting` (`id`, `plane_id`, `flow_id`, `shift`, `operator`, `assistant`, `paper`, `quantity`, `conversion`, `cleaning`, `size`, `production`, `waste`, `remarks`, `user_id`, `created_at`) VALUES
(1, 9, 27, 'G', 'fgfgfd', 'dffdfd', 'ddfdfdfg', 'fdfdgf', 'fdfggfddffd', 'Yes', 'Yes', 'fgfgfgdf', 'fdfgfd', 'fdgfgdfd', 2, '2018-04-27 10:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `line_clearance`
--

CREATE TABLE `line_clearance` (
  `id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `previous` varchar(100) NOT NULL,
  `material` varchar(10) NOT NULL,
  `material_remarks` varchar(255) NOT NULL,
  `printed` varchar(10) NOT NULL,
  `printed_remarks` varchar(255) NOT NULL,
  `document` varchar(10) NOT NULL,
  `document_remarks` varchar(255) NOT NULL,
  `waste` varchar(10) NOT NULL,
  `waste_remarks` varchar(255) NOT NULL,
  `oil` varchar(10) NOT NULL,
  `oil_remarks` varchar(255) NOT NULL,
  `clean` varchar(10) NOT NULL,
  `clean_remarks` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `line_clearance`
--

INSERT INTO `line_clearance` (`id`, `flow_id`, `previous`, `material`, `material_remarks`, `printed`, `printed_remarks`, `document`, `document_remarks`, `waste`, `waste_remarks`, `oil`, `oil_remarks`, `clean`, `clean_remarks`, `user_id`, `created_at`) VALUES
(1, 5, '', 'Yes', 'as', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 9, '2018-04-09 08:01:52'),
(2, 6, '', 'No', 'asd', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asdasd', 'Yes', 'asdsad', 9, '2018-04-09 08:08:27'),
(3, 8, '', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 9, '2018-04-09 08:12:46'),
(4, 9, '', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 9, '2018-04-09 08:12:55'),
(5, 10, '', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'asd', 'Yes', 'sad', 'Yes', 'asd', 'Yes', 'asd', 9, '2018-04-09 08:13:04'),
(6, 16, '7', 'No', 'sfds', 'Yes', 'dfsfd', 'Yes', 'fdfd', 'Yes', 'fdsf', 'Yes', 'fds', 'Yes', 'fds', 9, '2018-04-10 13:24:07'),
(7, 21, '10', 'Yes', 'sad', 'Yes', 'kh', 'Yes', 'kj', 'Yes', ' khkjh', 'No', 'oi', 'No', 'lkj', 9, '2018-04-20 07:41:26'),
(8, 22, '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', 9, '2018-04-20 07:44:06'),
(9, 23, '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', 9, '2018-04-20 07:44:09');

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `id` int(11) UNSIGNED NOT NULL,
  `machine_Name` tinytext,
  `detail` text,
  `feature` varchar(100) DEFAULT NULL,
  `flows` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`id`, `machine_Name`, `detail`, `feature`, `flows`, `user_id`, `created_at`) VALUES
(1, 'CM1', 'Cutting Machine', NULL, '4', 2, '2018-04-07 07:15:46'),
(2, 'CM2', 'Cutting Machine', NULL, '4', 2, '2018-04-07 07:15:57'),
(3, 'CM3', 'Cutting Machine', NULL, '4', 2, '2018-04-07 07:16:16'),
(4, 'FM1', 'Film Making', '14', '5', 2, '2018-04-07 07:17:34'),
(5, 'FM2', 'Film Making', NULL, '5', 2, '2018-04-07 07:17:45'),
(6, 'PM1', 'Plate Making', NULL, '6', 2, '2018-04-07 07:19:33'),
(7, 'PM2', 'Plate Making', NULL, '6', 2, '2018-04-07 07:19:59'),
(8, 'PR1', 'Printing Machine', NULL, '7', 2, '2018-04-07 07:20:24'),
(9, 'PR2', 'Printing Machine', '15', '7', 2, '2018-04-07 07:20:44'),
(10, 'LC1', 'Leaflet Cutting', NULL, '8', 2, '2018-04-07 07:25:31'),
(11, 'LC2', 'Leaflet Cutting', NULL, '8', 2, '2018-04-07 07:25:50'),
(12, 'UV1', 'UV Printing', '6', '9', 2, '2018-04-07 07:26:15'),
(13, 'UV2', 'UV Printing', '6', '9', 2, '2018-04-07 07:26:29'),
(14, 'LB1', 'Label Cutting', '18', '11', 2, '2018-04-07 07:27:03'),
(15, 'LB2', 'Label Cutting', '18', '11', 2, '2018-04-07 07:33:12'),
(16, 'FD1', 'Folding Machine', '20', '12', 2, '2018-04-07 07:33:38'),
(17, 'FD2', 'Folding Machine', '20', '12', 2, '2018-04-07 07:34:01'),
(18, 'DC1', 'Die cutting', '12', '13', 2, '2018-04-07 07:34:32'),
(19, 'DC2', 'Die Cutting', '12', '13', 2, '2018-04-07 07:34:58'),
(20, 'PC1', 'Packing Machine', '21', '14', 2, '2018-04-07 07:35:39'),
(21, 'PC2', 'Packing Machine', '21', '14', 2, '2018-04-07 07:35:57'),
(22, 'PS1', 'Pasting Machine', '16', '15', 2, '2018-04-07 07:36:20'),
(23, 'PS2', 'Pasting Machine', '16', '15', 2, '2018-04-07 07:36:38'),
(24, 'DP1', 'Dispatch', '21', '16', 2, '2018-04-07 07:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `main_name` varchar(100) NOT NULL,
  `sort` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `main_name`, `sort`, `icon`, `url`, `parent_id`, `user_id`) VALUES
(2, 'Dashboard', 'dashboard', 1, 'home', '/', 0, 4),
(3, 'Modules', 'modules', 4, 'home', 'modules', 65, 4),
(5, 'Role/Permission', 'role', 2, 'home', 'role', 65, 4),
(7, 'Users', 'user', 3, 'perm_identity', 'users', 0, 2),
(21, 'Orders', 'orders', 5, 'work', 'orders', 0, 2),
(25, 'Work Orders', 'work_orders', 6, 'work', 'work_orders', 0, 2),
(27, 'All Orders', 'all_orders', 8, 'work', 'all_orders', 0, 2),
(33, 'Machines', 'machines', 10, '<i class="fa fa-cogs"></i>', 'machines', 0, 2),
(34, 'Features', 'feature', 8, 'extension', 'feature', 0, 2),
(35, 'Clients', 'clients', 11, 'people', 'clients', 0, 2),
(36, 'Production Plan', 'production_plan', 12, 'assignment', 'production_plan', 0, 2),
(37, 'Item', 'item', 5, 'list', 'item', 0, 2),
(38, 'Development', 'development', 8, 'code', 'development', 60, 2),
(39, 'Design', 'design', 9, 'brush', 'design', 60, 2),
(40, 'Profing', 'printing', 10, 'home', 'printing', 60, 2),
(41, 'Approval ', 'approval ', 11, 'home', 'approval ', 60, 2),
(42, 'Printing', 'printing_plane', 13, 'print', 'printing_plane', 0, 2),
(43, 'Die Cutting', 'die_cutting', 13, 'content_cut', 'die_cutting', 0, 2),
(44, 'Pasting', 'pasting', 14, 'content_paste', 'pasting', 0, 2),
(46, 'Flows', 'flows', 5, 'show_chart', 'flows', 0, 2),
(47, 'Cutting', 'cutting', 14, 'content_cut', 'cutting', 0, 2),
(48, 'Film Making', 'film_making', 14, 'local_movies', 'film_making', 0, 2),
(49, 'Plate Making', 'plate_making', 14, 'build', 'plate_making', 0, 2),
(51, 'Leaflet Cutting', 'leaflet_cutting', 14, 'content_cut', 'leaflet_cutting', 0, 2),
(52, 'UV Printing', 'uv_printing', 14, '<i class="fa fa-first-order" aria-hidden="true"></i>', 'uv_printing', 0, 2),
(53, 'Sorting', 'sorting', 14, 'sort', 'sorting', 0, 2),
(54, 'Label Cutting', 'label_cutting', 14, 'content_cut', 'label_cutting', 0, 2),
(55, 'Folding', 'folding', 14, 'folder', 'folding', 0, 2),
(56, 'Packing', 'packing', 14, 'layers', 'packing', 0, 2),
(57, 'Dispatch', 'dispatch', 14, 'exit_to_app', 'dispatch', 0, 2),
(58, 'Machine Utilization', 'machine_utilization', 10, 'insert_chart', 'machine_utilization', 0, 2),
(59, 'QC', 'qc', 6, 'playlist_add_check', 'qc', 0, 2),
(60, 'Pre Process ', 'pre_process', 7, '<i class="fa fa-spinner" aria-hidden="true"></i>', '#', 0, 2),
(61, 'Inventory', 'inventory', 5, '<i class="fa fa fa-cube" aria-hidden="true"></i>', '#', 0, 2),
(62, 'Category', 'category', 6, 'home', 'category', 61, 2),
(63, 'Sub Category', 'sub_category', 7, 'home', 'sub_category', 61, 2),
(64, 'Product', 'product', 1, 'home', 'product', 61, 2),
(65, 'Setting', 'setting', 2, 'settings', '#', 0, 2),
(67, 'Store', 'store', 6, 'store', '#', 0, 2),
(68, 'Vendor', 'vednor', 2, 'home', 'vendor', 61, 2),
(69, 'Stock', 'stock', 1, 'home', 'stock', 67, 2),
(70, 'Purchases', 'purchases', 1, 'home', 'purchases', 67, 2),
(71, 'Quantity Adjustments', 'quantity_adjustments', 3, 'home', 'quantity_adjustments', 67, 2),
(72, 'Sub Store', 'sub_store', 4, 'home', 'sub_store', 67, 2),
(73, 'Product Release', 'product_release', 5, 'home', 'product_release', 67, 2),
(74, 'Store Stock', 'store_stock', 6, 'home', 'store_stock', 67, 2),
(75, 'Requisition', 'requisition', 7, 'home', 'requisition', 67, 2),
(76, 'Reporting', 'reporting', 4, 'playlist_add_check', '#', 0, 2),
(77, 'Jobs', 'jobs', 1, 'home', 'jobs', 76, 2),
(78, 'Machines Report', 'machines_report', 2, 'home', 'machines_report', 76, 2),
(79, 'Left Over Inventory', 'over_inventory', 9, 'home', 'over_inventory', 67, 2),
(80, 'Job Inventory Report', 'job_inventory_report', 3, 'home', 'job_inventory_report', 76, 2),
(81, 'Client Inventory Report', 'client_inventory_report', 4, 'home', 'client_inventory_report', 76, 2),
(82, 'Machine Down Time', 'machine_down_time', 11, 'insert_chart', 'machine_down_time', 0, 2),
(83, 'Client Order Report', 'client_order_report', 5, 'home', 'client_order_report', 76, 2),
(84, 'Daily Dispatch', 'daily_dispatch', 6, 'home', 'daily_dispatch', 76, 2);

-- --------------------------------------------------------

--
-- Table structure for table `modules_fileds`
--

CREATE TABLE `modules_fileds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `filed_type` varchar(100) NOT NULL,
  `options` varchar(255) NOT NULL,
  `filed_multiple` varchar(10) DEFAULT 'no',
  `length` int(11) NOT NULL,
  `required` int(11) NOT NULL DEFAULT '0',
  `module_id` int(11) NOT NULL,
  `is_relation` int(11) NOT NULL,
  `relation_column` varchar(100) DEFAULT NULL,
  `relation_table` varchar(100) DEFAULT NULL,
  `value_column` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules_fileds`
--

INSERT INTO `modules_fileds` (`id`, `name`, `type`, `filed_type`, `options`, `filed_multiple`, `length`, `required`, `module_id`, `is_relation`, `relation_column`, `relation_table`, `value_column`) VALUES
(0, 'name', 'VARCHAR', 'input', '', 'no', 250, 0, 30, 0, NULL, NULL, NULL),
(0, 'machine_Name', 'TEXT', 'textarea', '', 'no', 250, 0, 32, 0, NULL, NULL, NULL),
(0, 'detail', 'TEXT', 'textarea', '', 'no', 500, 0, 32, 0, NULL, NULL, NULL),
(0, 'features', 'VARCHAR', 'select', '', 'no', 250, 0, 32, 0, NULL, NULL, NULL),
(0, 'machine_Name', 'VARCHAR', 'input', '', 'no', 250, 0, 33, 0, NULL, NULL, NULL),
(0, 'detail', 'TEXT', 'textarea', '', 'no', 500, 0, 33, 0, NULL, NULL, NULL),
(0, 'feature', 'INT', 'input', '', 'no', 11, 0, 33, 1, 'id', 'feature', 'name'),
(0, 'client_Name', 'VARCHAR', 'input', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Detail', 'TEXT', 'textarea', '', 'no', 500, 0, 35, 0, NULL, NULL, NULL),
(0, 'order_Margin', 'INT', 'input', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Contact_Person', 'VARCHAR', 'input', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Contact_Number', 'VARCHAR', 'input', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Email', 'VARCHAR', 'input', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Address', 'TEXT', 'textarea', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Company_Name', 'VARCHAR', 'input', '', 'no', 250, 0, 35, 0, NULL, NULL, NULL),
(0, 'Date', 'DATE', 'input', '', 'no', 20, 0, 36, 0, NULL, NULL, NULL),
(0, 'WO_no', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 1, 'id', 'work_orders', 'Description,Item_Code'),
(0, 'MIS_no', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Job_Description', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Board_Name', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Gsm', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Board_Size', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Quantity', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Conversion', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Planned_sheet_Size', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Balanced_Offcut_Size', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Offcut_Quantity', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'PO_Qty', 'INT', 'input', '', 'no', 11, 0, 36, 0, NULL, NULL, NULL),
(0, 'Planned_qty_sheets', 'INT', 'input', '', 'no', 11, 0, 36, 0, NULL, NULL, NULL),
(0, 'Ups', 'VARCHAR', 'input', '', 'no', 250, 0, 36, 0, NULL, NULL, NULL),
(0, 'Planned_qty', 'INT', 'input', '', 'no', 11, 0, 36, 0, NULL, NULL, NULL),
(0, 'Item_Code', 'VARCHAR', 'input', '', 'no', 100, 1, 37, 0, NULL, NULL, NULL),
(0, 'Description', 'VARCHAR', 'input', '', 'no', 255, 1, 37, 0, NULL, NULL, NULL),
(0, 'Client', 'INT', 'input', '', 'no', 11, 1, 37, 1, 'id', 'clients', 'client_Name'),
(0, 'Work_Type', 'VARCHAR', 'select', 'Package Carton,LeafLet,Labels,Sticker Labels', 'no', 100, 1, 37, 0, NULL, NULL, NULL),
(0, 'Name', 'VARCHAR', 'input', '', 'no', 100, 1, 46, 0, NULL, NULL, NULL),
(0, 'Name', 'VARCHAR', 'input', '', 'no', 245, 1, 62, 0, NULL, NULL, NULL),
(0, 'Name', 'VARCHAR', 'input', '', 'no', 245, 1, 63, 0, NULL, NULL, NULL),
(0, 'Parent_Category', 'INT', 'input', '', 'no', 11, 1, 63, 1, 'id', 'category', 'Name'),
(0, 'Product_Name', 'VARCHAR', 'input', '', 'no', 255, 1, 64, 0, NULL, NULL, NULL),
(0, 'Product_Code', 'VARCHAR', 'input', '', 'no', 100, 1, 64, 0, NULL, NULL, NULL),
(0, 'Barcode', 'VARCHAR', 'input', '', 'no', 100, 1, 64, 0, NULL, NULL, NULL),
(0, 'Category', 'INT', 'input', '', 'no', 11, 1, 64, 1, 'id', 'category', 'Name'),
(0, 'Sub_Category', 'INT', 'input', '', 'no', 11, 0, 64, 1, 'id', 'sub_category', 'Name'),
(0, 'Product_Unit', 'VARCHAR', 'input', '', 'no', 100, 1, 64, 0, NULL, NULL, NULL),
(0, 'Product_Cost', 'VARCHAR', 'input', '', 'no', 100, 0, 64, 0, NULL, NULL, NULL),
(0, 'Product_Price', 'VARCHAR', 'input', '', 'no', 100, 1, 64, 0, NULL, NULL, NULL),
(0, 'Product_Image', 'VARCHAR', 'file', 'png,jpg,jpeg,gif', 'no', 255, 1, 64, 0, NULL, NULL, NULL),
(0, 'Product_Details', 'TEXT', 'textarea', '', 'no', 500, 0, 64, 0, NULL, NULL, NULL),
(0, 'Product_details_for_invoice', 'TEXT', 'textarea', '', 'no', 500, 0, 64, 0, NULL, NULL, NULL),
(0, 'Product', 'INT', 'input', '', 'no', 11, 1, 66, 1, 'id', 'product', 'Product_Name,Product_Code'),
(0, 'Quantity', 'INT', 'input', '', 'no', 100, 1, 66, 0, NULL, NULL, NULL),
(0, 'Name', 'VARCHAR', 'input', '', 'no', 100, 1, 68, 0, NULL, NULL, NULL),
(0, 'Date', 'DATE', 'input', '', 'no', 100, 1, 70, 0, NULL, NULL, NULL),
(0, 'Reference_No', 'INT', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Status', 'VARCHAR', 'select', 'Received,Pending,Ordered', 'no', 100, 1, 70, 0, NULL, NULL, NULL),
(0, 'Attach_Document', 'VARCHAR', 'file', 'doc,docs,pdf,xlx,xlsx', 'no', 255, 0, 70, 0, NULL, NULL, NULL),
(0, 'Supplier', 'INT', 'input', '', 'no', 11, 1, 70, 1, 'id', 'vednor', 'Name'),
(0, 'Order_Tax', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Discount_(5/5%)', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Shipping', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Payment_Term', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Note', 'TEXT', 'textarea', '', 'no', 500, 0, 70, 0, NULL, NULL, NULL),
(0, 'Date', 'DATE', 'input', '', 'no', 100, 1, 70, 0, NULL, NULL, NULL),
(0, 'Reference_No', 'INT', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Status', 'VARCHAR', 'select', 'Received,Pending,Ordered', 'no', 100, 1, 70, 0, NULL, NULL, NULL),
(0, 'Attach_Document', 'VARCHAR', 'file', 'doc,docs,pdf,xlx,xlsx', 'no', 255, 0, 70, 0, NULL, NULL, NULL),
(0, 'Supplier', 'INT', 'input', '', 'no', 11, 1, 70, 1, 'id', 'vednor', 'Name'),
(0, 'Order_Tax', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Discount_(5/5%)', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Shipping', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Payment_Term', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Note', 'TEXT', 'textarea', '', 'no', 500, 0, 70, 0, NULL, NULL, NULL),
(0, 'Date', 'DATE', 'input', '', 'no', 100, 1, 70, 0, NULL, NULL, NULL),
(0, 'Reference_No', 'INT', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Status', 'VARCHAR', 'select', 'Received,Pending,Ordered', 'no', 100, 1, 70, 0, NULL, NULL, NULL),
(0, 'Attach_Document', 'VARCHAR', 'file', 'doc,docs,pdf,xlx,xlsx', 'no', 255, 0, 70, 0, NULL, NULL, NULL),
(0, 'Supplier', 'INT', 'input', '', 'no', 11, 1, 70, 1, 'id', 'vednor', 'Name'),
(0, 'Order_Tax', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Discount_(5/5%)', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Shipping', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Payment_Term', 'VARCHAR', 'input', '', 'no', 100, 0, 70, 0, NULL, NULL, NULL),
(0, 'Note', 'TEXT', 'textarea', '', 'no', 500, 0, 70, 0, NULL, NULL, NULL),
(0, 'Date', 'DATE', 'input', '', 'no', 100, 1, 71, 0, NULL, NULL, NULL),
(0, 'Type', 'VARCHAR', 'select', 'Addition,Subtraction', 'no', 100, 1, 71, 0, NULL, NULL, NULL),
(0, 'Quantity', 'INT', 'input', '', 'no', 100, 1, 71, 0, NULL, NULL, NULL),
(0, 'Note', 'TEXT', 'textarea', '', 'no', 500, 1, 71, 0, NULL, NULL, NULL),
(0, 'Product', 'INT', 'input', '', 'no', 100, 1, 71, 1, 'id', 'product', 'Product_Name'),
(0, 'Name', 'VARCHAR', 'input', '', 'no', 100, 1, 72, 0, NULL, NULL, NULL),
(0, 'Date', 'DATE', 'input', '', 'no', 100, 1, 73, 0, NULL, NULL, NULL),
(0, 'Reference_No', 'INT', 'input', '', 'no', 100, 1, 73, 0, NULL, NULL, NULL),
(0, 'Store', 'INT', 'input', '', 'no', 11, 1, 73, 1, 'id', 'sub_store', 'Name'),
(0, 'Status', 'VARCHAR', 'select', 'Pending,complete', 'no', 100, 1, 73, 0, NULL, NULL, NULL),
(0, 'Note', 'TEXT', 'textarea', '', 'no', 500, 0, 73, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `Date` date DEFAULT NULL,
  `Name` varchar(250) DEFAULT NULL,
  `Designation` varchar(250) DEFAULT NULL,
  `quantity` varchar(250) DEFAULT NULL,
  `Attach_File` varchar(250) DEFAULT NULL,
  `Order_Type` varchar(250) DEFAULT NULL,
  `Remarks` text,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_flow_start`
--

CREATE TABLE `order_flow_start` (
  `id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_flow_start`
--

INSERT INTO `order_flow_start` (`id`, `flow_id`, `created_at`) VALUES
(1, 5, '2018-04-09 07:10:18'),
(2, 8, '2018-04-09 07:12:49'),
(3, 6, '2018-04-09 07:15:25'),
(4, 9, '2018-04-09 07:15:37'),
(5, 10, '2018-04-09 07:16:35'),
(6, 11, '2018-04-09 07:17:44'),
(7, 12, '2018-04-09 08:45:49'),
(8, 13, '2018-04-09 08:46:52'),
(9, 7, '2018-04-09 08:46:57'),
(10, 16, '2018-04-10 13:16:47'),
(11, 17, '2018-04-10 13:29:12'),
(12, 18, '2018-04-10 13:32:30'),
(13, 19, '2018-04-10 13:39:46'),
(14, 21, '2018-04-20 07:39:12'),
(15, 22, '2018-04-20 07:42:57'),
(16, 23, '2018-04-20 07:43:56'),
(17, 14, '2018-04-27 09:48:06'),
(18, 26, '2018-04-27 10:33:43'),
(19, 27, '2018-04-27 10:53:37'),
(20, 28, '2018-04-27 10:54:49'),
(21, 15, '2018-04-27 11:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_flow_submission`
--

CREATE TABLE `order_flow_submission` (
  `id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_flow_submission`
--

INSERT INTO `order_flow_submission` (`id`, `flow_id`, `created_at`) VALUES
(1, 8, '2018-04-09 07:14:19'),
(2, 5, '2018-04-09 07:14:23'),
(3, 6, '2018-04-09 07:15:32'),
(4, 9, '2018-04-09 07:15:39'),
(5, 10, '2018-04-09 07:16:49'),
(6, 11, '2018-04-09 08:11:22'),
(7, 12, '2018-04-09 08:45:54'),
(8, 13, '2018-04-09 08:46:54'),
(9, 7, '2018-04-09 08:46:58'),
(10, 16, '2018-04-10 13:16:52'),
(11, 17, '2018-04-10 13:29:20'),
(12, 18, '2018-04-10 13:37:24'),
(13, 19, '2018-04-10 13:40:16'),
(14, 21, '2018-04-20 07:40:37'),
(15, 22, '2018-04-20 07:43:30'),
(16, 23, '2018-04-20 07:43:58'),
(17, 14, '2018-04-27 09:48:09'),
(18, 26, '2018-04-27 10:52:51'),
(19, 27, '2018-04-27 10:53:39'),
(20, 28, '2018-04-27 11:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `pasting`
--

CREATE TABLE `pasting` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `operator` varchar(100) NOT NULL,
  `assistant` varchar(100) NOT NULL,
  `opening` varchar(100) NOT NULL,
  `closing` varchar(100) NOT NULL,
  `output` varchar(100) NOT NULL,
  `waste` varchar(100) NOT NULL,
  `carton` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasting`
--

INSERT INTO `pasting` (`id`, `plane_id`, `flow_id`, `operator`, `assistant`, `opening`, `closing`, `output`, `waste`, `carton`, `qty`, `weight`, `user_id`, `created_at`) VALUES
(1, 9, 28, 'dsffds', 'dsfdsfds', 'fdsfdsfdfd', 'sfdfdsfds', 'sfdfsdfds', 'sdffsfd', 'dsffdsdsd', 'sdfdfsdfssd', 'fdsfdfdss', 2, '2018-04-27 10:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `pasting_complete`
--

CREATE TABLE `pasting_complete` (
  `id` int(11) NOT NULL,
  `pasting_id` int(11) NOT NULL,
  `ready` varchar(10) NOT NULL,
  `completed` varchar(10) NOT NULL,
  `cleaning` varchar(10) NOT NULL,
  `guide` varchar(10) NOT NULL,
  `glue` varchar(10) NOT NULL,
  `blanket` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasting_complete`
--

INSERT INTO `pasting_complete` (`id`, `pasting_id`, `ready`, `completed`, `cleaning`, `guide`, `glue`, `blanket`, `user_id`, `created_at`) VALUES
(1, 1, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 2, '2018-04-27 11:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `pasting_hourse`
--

CREATE TABLE `pasting_hourse` (
  `id` int(11) NOT NULL,
  `pasting_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `froms` varchar(100) NOT NULL,
  `tos` varchar(100) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `counter` varchar(100) NOT NULL,
  `remarks` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasting_hourse`
--

INSERT INTO `pasting_hourse` (`id`, `pasting_id`, `code`, `froms`, `tos`, `hours`, `counter`, `remarks`) VALUES
(1, 1, 'Cleaning', '13:00', '14:00', '9 am/pm', 'ffddsdssd', 'dsdsfffds');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `view_all` int(11) NOT NULL DEFAULT '0',
  `created` int(11) DEFAULT '0',
  `edit` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  `disable` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `module_id`, `user_id`, `user_type_id`, `view`, `view_all`, `created`, `edit`, `deleted`, `disable`) VALUES
(1155, 2, 2, 2, 1, 1, 1, 1, 1, 1),
(1156, 3, 2, 2, 0, 0, 0, 0, 0, 0),
(1157, 5, 2, 2, 0, 0, 0, 0, 0, 0),
(1158, 7, 2, 2, 0, 0, 0, 0, 0, 0),
(1159, 21, 2, 2, 0, 0, 0, 0, 0, 0),
(1160, 25, 2, 2, 0, 0, 0, 0, 0, 0),
(1161, 27, 2, 2, 0, 0, 0, 0, 0, 0),
(1162, 33, 2, 2, 0, 0, 0, 0, 0, 0),
(1163, 34, 2, 2, 0, 0, 0, 0, 0, 0),
(1164, 35, 2, 2, 0, 0, 0, 0, 0, 0),
(1165, 36, 2, 2, 1, 1, 1, 1, 1, 1),
(1166, 37, 2, 2, 0, 0, 0, 0, 0, 0),
(1167, 38, 2, 2, 0, 0, 0, 0, 0, 0),
(1168, 39, 2, 2, 0, 0, 0, 0, 0, 0),
(1169, 40, 2, 2, 0, 0, 0, 0, 0, 0),
(1170, 41, 2, 2, 0, 0, 0, 0, 0, 0),
(1171, 42, 2, 2, 0, 0, 0, 0, 0, 0),
(1172, 43, 2, 2, 0, 0, 0, 0, 0, 0),
(1173, 44, 2, 2, 0, 0, 0, 0, 0, 0),
(1174, 45, 2, 2, 0, 0, 0, 0, 0, 0),
(1175, 46, 2, 2, 0, 0, 0, 0, 0, 0),
(1176, 47, 2, 2, 0, 0, 0, 0, 0, 0),
(1177, 48, 2, 2, 0, 0, 0, 0, 0, 0),
(1178, 49, 2, 2, 0, 0, 0, 0, 0, 0),
(1179, 50, 2, 2, 0, 0, 0, 0, 0, 0),
(1180, 51, 2, 2, 0, 0, 0, 0, 0, 0),
(1181, 52, 2, 2, 0, 0, 0, 0, 0, 0),
(1182, 53, 2, 2, 0, 0, 0, 0, 0, 0),
(1183, 54, 2, 2, 0, 0, 0, 0, 0, 0),
(1184, 55, 2, 2, 0, 0, 0, 0, 0, 0),
(1185, 56, 2, 2, 0, 0, 0, 0, 0, 0),
(1186, 57, 2, 2, 0, 0, 0, 0, 0, 0),
(1187, 58, 2, 2, 0, 0, 0, 0, 0, 0),
(1188, 59, 2, 2, 0, 0, 0, 0, 0, 0),
(1189, 60, 2, 2, 0, 0, 0, 0, 0, 0),
(1190, 61, 2, 2, 0, 0, 0, 0, 0, 0),
(1191, 62, 2, 2, 0, 0, 0, 0, 0, 0),
(1192, 63, 2, 2, 0, 0, 0, 0, 0, 0),
(1193, 64, 2, 2, 0, 0, 0, 0, 0, 0),
(1194, 65, 2, 2, 0, 0, 0, 0, 0, 0),
(1195, 66, 2, 2, 0, 0, 0, 0, 0, 0),
(1995, 2, 2, 3, 1, 1, 1, 1, 1, 1),
(1996, 3, 2, 3, 0, 0, 0, 0, 0, 0),
(1997, 5, 2, 3, 0, 0, 0, 0, 0, 0),
(1998, 7, 2, 3, 0, 0, 0, 0, 0, 0),
(1999, 21, 2, 3, 0, 0, 0, 0, 0, 0),
(2000, 25, 2, 3, 1, 1, 1, 1, 1, 1),
(2001, 27, 2, 3, 1, 1, 1, 1, 1, 1),
(2002, 33, 2, 3, 0, 0, 0, 0, 0, 0),
(2003, 34, 2, 3, 0, 0, 0, 0, 0, 0),
(2004, 35, 2, 3, 1, 1, 1, 1, 1, 1),
(2005, 36, 2, 3, 0, 0, 0, 0, 0, 0),
(2006, 37, 2, 3, 1, 1, 1, 1, 1, 1),
(2007, 38, 2, 3, 0, 0, 0, 0, 0, 0),
(2008, 39, 2, 3, 0, 0, 0, 0, 0, 0),
(2009, 40, 2, 3, 0, 0, 0, 0, 0, 0),
(2010, 41, 2, 3, 0, 0, 0, 0, 0, 0),
(2011, 42, 2, 3, 0, 0, 0, 0, 0, 0),
(2012, 43, 2, 3, 0, 0, 0, 0, 0, 0),
(2013, 44, 2, 3, 0, 0, 0, 0, 0, 0),
(2014, 46, 2, 3, 0, 0, 0, 0, 0, 0),
(2015, 47, 2, 3, 0, 0, 0, 0, 0, 0),
(2016, 48, 2, 3, 0, 0, 0, 0, 0, 0),
(2017, 49, 2, 3, 0, 0, 0, 0, 0, 0),
(2018, 50, 2, 3, 0, 0, 0, 0, 0, 0),
(2019, 51, 2, 3, 0, 0, 0, 0, 0, 0),
(2020, 52, 2, 3, 0, 0, 0, 0, 0, 0),
(2021, 53, 2, 3, 0, 0, 0, 0, 0, 0),
(2022, 54, 2, 3, 0, 0, 0, 0, 0, 0),
(2023, 55, 2, 3, 0, 0, 0, 0, 0, 0),
(2024, 56, 2, 3, 0, 0, 0, 0, 0, 0),
(2025, 57, 2, 3, 0, 0, 0, 0, 0, 0),
(2026, 58, 2, 3, 0, 0, 0, 0, 0, 0),
(2027, 59, 2, 3, 0, 0, 0, 0, 0, 0),
(2028, 60, 2, 3, 0, 0, 0, 0, 0, 0),
(2029, 61, 2, 3, 0, 0, 0, 0, 0, 0),
(2030, 62, 2, 3, 0, 0, 0, 0, 0, 0),
(2031, 63, 2, 3, 0, 0, 0, 0, 0, 0),
(2032, 64, 2, 3, 0, 0, 0, 0, 0, 0),
(2033, 65, 2, 3, 0, 0, 0, 0, 0, 0),
(2034, 67, 2, 3, 0, 0, 0, 0, 0, 0),
(2035, 68, 2, 3, 0, 0, 0, 0, 0, 0),
(2036, 69, 2, 3, 0, 0, 0, 0, 0, 0),
(2037, 70, 2, 3, 0, 0, 0, 0, 0, 0),
(2038, 71, 2, 3, 0, 0, 0, 0, 0, 0),
(2039, 72, 2, 3, 0, 0, 0, 0, 0, 0),
(2040, 73, 2, 3, 0, 0, 0, 0, 0, 0),
(2041, 74, 2, 3, 0, 0, 0, 0, 0, 0),
(2042, 75, 2, 3, 0, 0, 0, 0, 0, 0),
(2043, 76, 2, 3, 0, 0, 0, 0, 0, 0),
(2044, 77, 2, 3, 0, 0, 0, 0, 0, 0),
(2045, 78, 2, 3, 0, 0, 0, 0, 0, 0),
(2046, 2, 2, 7, 1, 1, 1, 1, 1, 1),
(2047, 3, 2, 7, 0, 0, 0, 0, 0, 0),
(2048, 5, 2, 7, 0, 0, 0, 0, 0, 0),
(2049, 7, 2, 7, 0, 0, 0, 0, 0, 0),
(2050, 21, 2, 7, 0, 0, 0, 0, 0, 0),
(2051, 25, 2, 7, 0, 0, 0, 0, 0, 0),
(2052, 27, 2, 7, 0, 0, 0, 0, 0, 0),
(2053, 33, 2, 7, 0, 0, 0, 0, 0, 0),
(2054, 34, 2, 7, 0, 0, 0, 0, 0, 0),
(2055, 35, 2, 7, 0, 0, 0, 0, 0, 0),
(2056, 36, 2, 7, 0, 0, 0, 0, 0, 0),
(2057, 37, 2, 7, 0, 0, 0, 0, 0, 0),
(2058, 38, 2, 7, 0, 0, 0, 0, 0, 0),
(2059, 39, 2, 7, 0, 0, 0, 0, 0, 0),
(2060, 40, 2, 7, 0, 0, 0, 0, 0, 0),
(2061, 41, 2, 7, 0, 0, 0, 0, 0, 0),
(2062, 42, 2, 7, 1, 1, 1, 1, 1, 1),
(2063, 43, 2, 7, 1, 1, 1, 1, 1, 1),
(2064, 44, 2, 7, 1, 1, 1, 1, 1, 1),
(2065, 46, 2, 7, 1, 1, 1, 1, 1, 1),
(2066, 47, 2, 7, 1, 1, 1, 1, 1, 1),
(2067, 48, 2, 7, 1, 1, 1, 1, 1, 1),
(2068, 49, 2, 7, 1, 1, 1, 1, 1, 1),
(2069, 50, 2, 7, 1, 1, 1, 1, 1, 1),
(2070, 51, 2, 7, 1, 1, 1, 1, 1, 1),
(2071, 52, 2, 7, 1, 1, 1, 1, 1, 1),
(2072, 53, 2, 7, 1, 1, 1, 1, 1, 1),
(2073, 54, 2, 7, 1, 1, 1, 1, 1, 1),
(2074, 55, 2, 7, 1, 1, 1, 1, 1, 1),
(2075, 56, 2, 7, 1, 1, 1, 1, 1, 1),
(2076, 57, 2, 7, 1, 1, 1, 1, 1, 1),
(2077, 58, 2, 7, 0, 0, 0, 0, 0, 0),
(2078, 59, 2, 7, 0, 0, 0, 0, 0, 0),
(2079, 60, 2, 7, 0, 0, 0, 0, 0, 0),
(2080, 61, 2, 7, 0, 0, 0, 0, 0, 0),
(2081, 62, 2, 7, 0, 0, 0, 0, 0, 0),
(2082, 63, 2, 7, 0, 0, 0, 0, 0, 0),
(2083, 64, 2, 7, 0, 0, 0, 0, 0, 0),
(2084, 65, 2, 7, 0, 0, 0, 0, 0, 0),
(2085, 67, 2, 7, 0, 0, 0, 0, 0, 0),
(2086, 68, 2, 7, 0, 0, 0, 0, 0, 0),
(2087, 69, 2, 7, 0, 0, 0, 0, 0, 0),
(2088, 70, 2, 7, 0, 0, 0, 0, 0, 0),
(2089, 71, 2, 7, 0, 0, 0, 0, 0, 0),
(2090, 72, 2, 7, 0, 0, 0, 0, 0, 0),
(2091, 73, 2, 7, 0, 0, 0, 0, 0, 0),
(2092, 74, 2, 7, 0, 0, 0, 0, 0, 0),
(2093, 75, 2, 7, 0, 0, 0, 0, 0, 0),
(2094, 76, 2, 7, 0, 0, 0, 0, 0, 0),
(2095, 77, 2, 7, 0, 0, 0, 0, 0, 0),
(2096, 78, 2, 7, 0, 0, 0, 0, 0, 0),
(2148, 2, 2, 6, 1, 1, 1, 1, 1, 1),
(2149, 3, 2, 6, 0, 0, 0, 0, 0, 0),
(2150, 5, 2, 6, 0, 0, 0, 0, 0, 0),
(2151, 7, 2, 6, 0, 0, 0, 0, 0, 0),
(2152, 21, 2, 6, 0, 0, 0, 0, 0, 0),
(2153, 25, 2, 6, 1, 1, 1, 1, 1, 1),
(2154, 27, 2, 6, 1, 1, 1, 1, 1, 1),
(2155, 33, 2, 6, 0, 0, 0, 0, 0, 0),
(2156, 34, 2, 6, 0, 0, 0, 0, 0, 0),
(2157, 35, 2, 6, 0, 0, 0, 0, 0, 0),
(2158, 36, 2, 6, 0, 0, 0, 0, 0, 0),
(2159, 37, 2, 6, 0, 0, 0, 0, 0, 0),
(2160, 38, 2, 6, 0, 0, 0, 0, 0, 0),
(2161, 39, 2, 6, 0, 0, 0, 0, 0, 0),
(2162, 40, 2, 6, 0, 0, 0, 0, 0, 0),
(2163, 41, 2, 6, 0, 0, 0, 0, 0, 0),
(2164, 42, 2, 6, 0, 0, 0, 0, 0, 0),
(2165, 43, 2, 6, 0, 0, 0, 0, 0, 0),
(2166, 44, 2, 6, 0, 0, 0, 0, 0, 0),
(2167, 46, 2, 6, 0, 0, 0, 0, 0, 0),
(2168, 47, 2, 6, 0, 0, 0, 0, 0, 0),
(2169, 48, 2, 6, 0, 0, 0, 0, 0, 0),
(2170, 49, 2, 6, 0, 0, 0, 0, 0, 0),
(2171, 50, 2, 6, 0, 0, 0, 0, 0, 0),
(2172, 51, 2, 6, 0, 0, 0, 0, 0, 0),
(2173, 52, 2, 6, 0, 0, 0, 0, 0, 0),
(2174, 53, 2, 6, 0, 0, 0, 0, 0, 0),
(2175, 54, 2, 6, 0, 0, 0, 0, 0, 0),
(2176, 55, 2, 6, 0, 0, 0, 0, 0, 0),
(2177, 56, 2, 6, 0, 0, 0, 0, 0, 0),
(2178, 57, 2, 6, 0, 0, 0, 0, 0, 0),
(2179, 58, 2, 6, 0, 0, 0, 0, 0, 0),
(2180, 59, 2, 6, 1, 1, 1, 1, 1, 1),
(2181, 60, 2, 6, 0, 0, 0, 0, 0, 0),
(2182, 61, 2, 6, 0, 0, 0, 0, 0, 0),
(2183, 62, 2, 6, 0, 0, 0, 0, 0, 0),
(2184, 63, 2, 6, 0, 0, 0, 0, 0, 0),
(2185, 64, 2, 6, 0, 0, 0, 0, 0, 0),
(2186, 65, 2, 6, 0, 0, 0, 0, 0, 0),
(2187, 67, 2, 6, 0, 0, 0, 0, 0, 0),
(2188, 68, 2, 6, 0, 0, 0, 0, 0, 0),
(2189, 69, 2, 6, 0, 0, 0, 0, 0, 0),
(2190, 70, 2, 6, 0, 0, 0, 0, 0, 0),
(2191, 71, 2, 6, 0, 0, 0, 0, 0, 0),
(2192, 72, 2, 6, 0, 0, 0, 0, 0, 0),
(2193, 73, 2, 6, 0, 0, 0, 0, 0, 0),
(2194, 74, 2, 6, 0, 0, 0, 0, 0, 0),
(2195, 75, 2, 6, 0, 0, 0, 0, 0, 0),
(2196, 76, 2, 6, 0, 0, 0, 0, 0, 0),
(2197, 77, 2, 6, 0, 0, 0, 0, 0, 0),
(2198, 78, 2, 6, 0, 0, 0, 0, 0, 0),
(2199, 2, 2, 8, 1, 1, 1, 1, 1, 1),
(2200, 3, 2, 8, 0, 0, 0, 0, 0, 0),
(2201, 5, 2, 8, 0, 0, 0, 0, 0, 0),
(2202, 7, 2, 8, 0, 0, 0, 0, 0, 0),
(2203, 21, 2, 8, 0, 0, 0, 0, 0, 0),
(2204, 25, 2, 8, 1, 1, 1, 1, 1, 1),
(2205, 27, 2, 8, 1, 1, 1, 1, 1, 1),
(2206, 33, 2, 8, 0, 0, 0, 0, 0, 0),
(2207, 34, 2, 8, 0, 0, 0, 0, 0, 0),
(2208, 35, 2, 8, 0, 0, 0, 0, 0, 0),
(2209, 36, 2, 8, 0, 0, 0, 0, 0, 0),
(2210, 37, 2, 8, 0, 0, 0, 0, 0, 0),
(2211, 38, 2, 8, 0, 0, 0, 0, 0, 0),
(2212, 39, 2, 8, 0, 0, 0, 0, 0, 0),
(2213, 40, 2, 8, 0, 0, 0, 0, 0, 0),
(2214, 41, 2, 8, 0, 0, 0, 0, 0, 0),
(2215, 42, 2, 8, 0, 0, 0, 0, 0, 0),
(2216, 43, 2, 8, 0, 0, 0, 0, 0, 0),
(2217, 44, 2, 8, 0, 0, 0, 0, 0, 0),
(2218, 46, 2, 8, 0, 0, 0, 0, 0, 0),
(2219, 47, 2, 8, 0, 0, 0, 0, 0, 0),
(2220, 48, 2, 8, 0, 0, 0, 0, 0, 0),
(2221, 49, 2, 8, 0, 0, 0, 0, 0, 0),
(2222, 50, 2, 8, 0, 0, 0, 0, 0, 0),
(2223, 51, 2, 8, 0, 0, 0, 0, 0, 0),
(2224, 52, 2, 8, 0, 0, 0, 0, 0, 0),
(2225, 53, 2, 8, 0, 0, 0, 0, 0, 0),
(2226, 54, 2, 8, 0, 0, 0, 0, 0, 0),
(2227, 55, 2, 8, 0, 0, 0, 0, 0, 0),
(2228, 56, 2, 8, 0, 0, 0, 0, 0, 0),
(2229, 57, 2, 8, 0, 0, 0, 0, 0, 0),
(2230, 58, 2, 8, 1, 1, 1, 1, 1, 1),
(2231, 59, 2, 8, 0, 0, 0, 0, 0, 0),
(2232, 60, 2, 8, 0, 0, 0, 0, 0, 0),
(2233, 61, 2, 8, 0, 0, 0, 0, 0, 0),
(2234, 62, 2, 8, 0, 0, 0, 0, 0, 0),
(2235, 63, 2, 8, 0, 0, 0, 0, 0, 0),
(2236, 64, 2, 8, 0, 0, 0, 0, 0, 0),
(2237, 65, 2, 8, 0, 0, 0, 0, 0, 0),
(2238, 67, 2, 8, 0, 0, 0, 0, 0, 0),
(2239, 68, 2, 8, 0, 0, 0, 0, 0, 0),
(2240, 69, 2, 8, 0, 0, 0, 0, 0, 0),
(2241, 70, 2, 8, 0, 0, 0, 0, 0, 0),
(2242, 71, 2, 8, 0, 0, 0, 0, 0, 0),
(2243, 72, 2, 8, 0, 0, 0, 0, 0, 0),
(2244, 73, 2, 8, 0, 0, 0, 0, 0, 0),
(2245, 74, 2, 8, 0, 0, 0, 0, 0, 0),
(2246, 75, 2, 8, 0, 0, 0, 0, 0, 0),
(2247, 76, 2, 8, 1, 1, 1, 1, 1, 1),
(2248, 77, 2, 8, 1, 1, 1, 1, 1, 1),
(2249, 78, 2, 8, 1, 1, 1, 1, 1, 1),
(2250, 2, 2, 4, 1, 1, 1, 1, 1, 1),
(2251, 3, 2, 4, 0, 0, 0, 0, 0, 0),
(2252, 5, 2, 4, 0, 0, 0, 0, 0, 0),
(2253, 7, 2, 4, 0, 0, 0, 0, 0, 0),
(2254, 21, 2, 4, 0, 0, 0, 0, 0, 0),
(2255, 25, 2, 4, 0, 0, 0, 0, 0, 0),
(2256, 27, 2, 4, 1, 1, 0, 0, 0, 0),
(2257, 33, 2, 4, 0, 0, 0, 0, 0, 0),
(2258, 34, 2, 4, 0, 0, 0, 0, 0, 0),
(2259, 35, 2, 4, 0, 0, 0, 0, 0, 0),
(2260, 36, 2, 4, 0, 0, 0, 0, 0, 0),
(2261, 37, 2, 4, 0, 0, 0, 0, 0, 0),
(2262, 38, 2, 4, 1, 1, 1, 1, 1, 1),
(2263, 39, 2, 4, 1, 1, 1, 1, 1, 1),
(2264, 40, 2, 4, 1, 1, 1, 1, 1, 1),
(2265, 41, 2, 4, 1, 1, 1, 1, 1, 1),
(2266, 42, 2, 4, 0, 0, 0, 0, 0, 0),
(2267, 43, 2, 4, 0, 0, 0, 0, 0, 0),
(2268, 44, 2, 4, 0, 0, 0, 0, 0, 0),
(2269, 46, 2, 4, 0, 0, 0, 0, 0, 0),
(2270, 47, 2, 4, 0, 0, 0, 0, 0, 0),
(2271, 48, 2, 4, 0, 0, 0, 0, 0, 0),
(2272, 49, 2, 4, 0, 0, 0, 0, 0, 0),
(2273, 50, 2, 4, 0, 0, 0, 0, 0, 0),
(2274, 51, 2, 4, 0, 0, 0, 0, 0, 0),
(2275, 52, 2, 4, 0, 0, 0, 0, 0, 0),
(2276, 53, 2, 4, 0, 0, 0, 0, 0, 0),
(2277, 54, 2, 4, 0, 0, 0, 0, 0, 0),
(2278, 55, 2, 4, 0, 0, 0, 0, 0, 0),
(2279, 56, 2, 4, 0, 0, 0, 0, 0, 0),
(2280, 57, 2, 4, 0, 0, 0, 0, 0, 0),
(2281, 58, 2, 4, 0, 0, 0, 0, 0, 0),
(2282, 59, 2, 4, 0, 0, 0, 0, 0, 0),
(2283, 60, 2, 4, 1, 1, 1, 1, 1, 1),
(2284, 61, 2, 4, 0, 0, 0, 0, 0, 0),
(2285, 62, 2, 4, 0, 0, 0, 0, 0, 0),
(2286, 63, 2, 4, 0, 0, 0, 0, 0, 0),
(2287, 64, 2, 4, 0, 0, 0, 0, 0, 0),
(2288, 65, 2, 4, 0, 0, 0, 0, 0, 0),
(2289, 67, 2, 4, 0, 0, 0, 0, 0, 0),
(2290, 68, 2, 4, 0, 0, 0, 0, 0, 0),
(2291, 69, 2, 4, 0, 0, 0, 0, 0, 0),
(2292, 70, 2, 4, 0, 0, 0, 0, 0, 0),
(2293, 71, 2, 4, 0, 0, 0, 0, 0, 0),
(2294, 72, 2, 4, 0, 0, 0, 0, 0, 0),
(2295, 73, 2, 4, 0, 0, 0, 0, 0, 0),
(2296, 74, 2, 4, 0, 0, 0, 0, 0, 0),
(2297, 75, 2, 4, 0, 0, 0, 0, 0, 0),
(2298, 76, 2, 4, 0, 0, 0, 0, 0, 0),
(2299, 77, 2, 4, 0, 0, 0, 0, 0, 0),
(2300, 78, 2, 4, 0, 0, 0, 0, 0, 0),
(2301, 79, 2, 4, 0, 0, 0, 0, 0, 0),
(2302, 2, 2, 5, 1, 1, 1, 1, 1, 1),
(2303, 3, 2, 5, 0, 0, 0, 0, 0, 0),
(2304, 5, 2, 5, 0, 0, 0, 0, 0, 0),
(2305, 7, 2, 5, 0, 0, 0, 0, 0, 0),
(2306, 21, 2, 5, 0, 0, 0, 0, 0, 0),
(2307, 25, 2, 5, 0, 0, 0, 0, 0, 0),
(2308, 27, 2, 5, 0, 0, 0, 0, 0, 0),
(2309, 33, 2, 5, 0, 0, 0, 0, 0, 0),
(2310, 34, 2, 5, 0, 0, 0, 0, 0, 0),
(2311, 35, 2, 5, 0, 0, 0, 0, 0, 0),
(2312, 36, 2, 5, 0, 0, 0, 0, 0, 0),
(2313, 37, 2, 5, 0, 0, 0, 0, 0, 0),
(2314, 38, 2, 5, 0, 0, 0, 0, 0, 0),
(2315, 39, 2, 5, 0, 0, 0, 0, 0, 0),
(2316, 40, 2, 5, 0, 0, 0, 0, 0, 0),
(2317, 41, 2, 5, 0, 0, 0, 0, 0, 0),
(2318, 42, 2, 5, 0, 0, 0, 0, 0, 0),
(2319, 43, 2, 5, 0, 0, 0, 0, 0, 0),
(2320, 44, 2, 5, 0, 0, 0, 0, 0, 0),
(2321, 46, 2, 5, 0, 0, 0, 0, 0, 0),
(2322, 47, 2, 5, 0, 0, 0, 0, 0, 0),
(2323, 48, 2, 5, 0, 0, 0, 0, 0, 0),
(2324, 49, 2, 5, 0, 0, 0, 0, 0, 0),
(2325, 50, 2, 5, 0, 0, 0, 0, 0, 0),
(2326, 51, 2, 5, 0, 0, 0, 0, 0, 0),
(2327, 52, 2, 5, 0, 0, 0, 0, 0, 0),
(2328, 53, 2, 5, 0, 0, 0, 0, 0, 0),
(2329, 54, 2, 5, 0, 0, 0, 0, 0, 0),
(2330, 55, 2, 5, 0, 0, 0, 0, 0, 0),
(2331, 56, 2, 5, 0, 0, 0, 0, 0, 0),
(2332, 57, 2, 5, 0, 0, 0, 0, 0, 0),
(2333, 58, 2, 5, 0, 0, 0, 0, 0, 0),
(2334, 59, 2, 5, 0, 0, 0, 0, 0, 0),
(2335, 60, 2, 5, 0, 0, 0, 0, 0, 0),
(2336, 61, 2, 5, 1, 1, 1, 1, 1, 1),
(2337, 62, 2, 5, 1, 1, 1, 1, 1, 1),
(2338, 63, 2, 5, 1, 1, 1, 1, 1, 1),
(2339, 64, 2, 5, 1, 1, 1, 1, 1, 1),
(2340, 65, 2, 5, 0, 0, 0, 0, 0, 0),
(2341, 67, 2, 5, 1, 1, 1, 1, 1, 1),
(2342, 68, 2, 5, 1, 1, 1, 1, 1, 1),
(2343, 69, 2, 5, 1, 1, 1, 1, 1, 1),
(2344, 70, 2, 5, 1, 1, 1, 1, 1, 1),
(2345, 71, 2, 5, 1, 1, 1, 1, 1, 1),
(2346, 72, 2, 5, 1, 1, 1, 1, 1, 1),
(2347, 73, 2, 5, 1, 1, 1, 1, 1, 1),
(2348, 74, 2, 5, 1, 1, 1, 1, 1, 1),
(2349, 75, 2, 5, 1, 1, 1, 1, 1, 1),
(2350, 76, 2, 5, 0, 0, 0, 0, 0, 0),
(2351, 77, 2, 5, 0, 0, 0, 0, 0, 0),
(2352, 78, 2, 5, 0, 0, 0, 0, 0, 0),
(2353, 79, 2, 5, 1, 1, 1, 1, 1, 1),
(2463, 2, 2, 1, 1, 1, 1, 1, 1, 1),
(2464, 3, 2, 1, 1, 1, 1, 1, 1, 1),
(2465, 5, 2, 1, 1, 1, 1, 1, 1, 1),
(2466, 7, 2, 1, 1, 1, 1, 1, 1, 1),
(2467, 21, 2, 1, 1, 1, 1, 1, 1, 1),
(2468, 25, 2, 1, 1, 1, 1, 1, 1, 1),
(2469, 27, 2, 1, 1, 1, 1, 1, 1, 1),
(2470, 33, 2, 1, 1, 1, 1, 1, 1, 1),
(2471, 34, 2, 1, 1, 1, 1, 1, 1, 1),
(2472, 35, 2, 1, 1, 1, 1, 1, 1, 1),
(2473, 36, 2, 1, 1, 1, 1, 1, 1, 1),
(2474, 37, 2, 1, 1, 1, 1, 1, 1, 1),
(2475, 38, 2, 1, 1, 1, 1, 1, 1, 1),
(2476, 39, 2, 1, 1, 1, 1, 1, 1, 1),
(2477, 40, 2, 1, 1, 1, 1, 1, 1, 1),
(2478, 41, 2, 1, 1, 1, 1, 1, 1, 1),
(2479, 42, 2, 1, 1, 1, 1, 1, 1, 1),
(2480, 43, 2, 1, 1, 1, 1, 1, 1, 1),
(2481, 44, 2, 1, 1, 1, 1, 1, 1, 1),
(2482, 46, 2, 1, 1, 1, 1, 1, 1, 1),
(2483, 47, 2, 1, 1, 1, 1, 1, 1, 1),
(2484, 48, 2, 1, 1, 1, 1, 1, 1, 1),
(2485, 49, 2, 1, 1, 1, 1, 1, 1, 1),
(2486, 51, 2, 1, 1, 1, 1, 1, 1, 1),
(2487, 52, 2, 1, 1, 1, 1, 1, 1, 1),
(2488, 53, 2, 1, 1, 1, 1, 1, 1, 1),
(2489, 54, 2, 1, 1, 1, 1, 1, 1, 1),
(2490, 55, 2, 1, 1, 1, 1, 1, 1, 1),
(2491, 56, 2, 1, 1, 1, 1, 1, 1, 1),
(2492, 57, 2, 1, 1, 1, 1, 1, 1, 1),
(2493, 58, 2, 1, 1, 1, 1, 1, 1, 1),
(2494, 59, 2, 1, 1, 1, 1, 1, 1, 1),
(2495, 60, 2, 1, 1, 1, 1, 1, 1, 1),
(2496, 61, 2, 1, 1, 1, 1, 1, 1, 1),
(2497, 62, 2, 1, 1, 1, 1, 1, 1, 1),
(2498, 63, 2, 1, 1, 1, 1, 1, 1, 1),
(2499, 64, 2, 1, 1, 1, 1, 1, 1, 1),
(2500, 65, 2, 1, 1, 1, 1, 1, 1, 1),
(2501, 67, 2, 1, 1, 1, 1, 1, 1, 1),
(2502, 68, 2, 1, 1, 1, 1, 1, 1, 1),
(2503, 69, 2, 1, 1, 1, 1, 1, 1, 1),
(2504, 70, 2, 1, 1, 1, 1, 1, 1, 1),
(2505, 71, 2, 1, 1, 1, 1, 1, 1, 1),
(2506, 72, 2, 1, 1, 1, 1, 1, 1, 1),
(2507, 73, 2, 1, 1, 1, 1, 1, 1, 1),
(2508, 74, 2, 1, 1, 1, 1, 1, 1, 1),
(2509, 75, 2, 1, 1, 1, 1, 1, 1, 1),
(2510, 76, 2, 1, 1, 1, 1, 1, 1, 1),
(2511, 77, 2, 1, 1, 1, 1, 1, 1, 1),
(2512, 78, 2, 1, 1, 1, 1, 1, 1, 1),
(2513, 79, 2, 1, 1, 1, 1, 1, 1, 1),
(2514, 80, 2, 1, 1, 1, 1, 1, 1, 1),
(2515, 81, 2, 1, 1, 1, 1, 1, 1, 1),
(2516, 82, 2, 1, 1, 1, 1, 1, 1, 1),
(2517, 83, 2, 1, 1, 1, 1, 1, 1, 1),
(2518, 84, 2, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `printing`
--

CREATE TABLE `printing` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `flow_id` int(11) NOT NULL,
  `operator` varchar(255) NOT NULL,
  `assistant` varchar(255) NOT NULL,
  `process` varchar(255) NOT NULL,
  `opening` varchar(255) NOT NULL,
  `closing` varchar(255) NOT NULL,
  `output` varchar(255) NOT NULL,
  `waste` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printing`
--

INSERT INTO `printing` (`id`, `plane_id`, `flow_id`, `operator`, `assistant`, `process`, `opening`, `closing`, `output`, `waste`, `user_id`, `created_at`) VALUES
(1, 7, 11, 'Baqar', 'Umer', 'Printing', '500', '500', '500', '500', 2, '2018-04-09 07:17:44'),
(2, 10, 18, 'Umer', 'Baqar', 'Printing', '100', '500', '55000', '100', 2, '2018-04-10 13:32:30'),
(3, 12, 22, 'Umer', 'Baqar', 'Printing', '100', '55000', '5000', '500', 2, '2018-04-20 07:42:57'),
(4, 9, 15, 'fghhgfg', 'fhgh', 'Printing', '545654', '565454', '546556', '5655454', 2, '2018-04-27 11:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `printing_complete`
--

CREATE TABLE `printing_complete` (
  `id` int(11) NOT NULL,
  `completed` varchar(100) NOT NULL,
  `feeder` varchar(100) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `cleaning` varchar(100) NOT NULL,
  `specs` varchar(100) NOT NULL,
  `impression` varchar(100) NOT NULL,
  `gauge` varchar(100) NOT NULL,
  `ready` varchar(100) NOT NULL,
  `print_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printing_complete`
--

INSERT INTO `printing_complete` (`id`, `completed`, `feeder`, `delivery`, `cleaning`, `specs`, `impression`, `gauge`, `ready`, `print_id`, `user_id`, `created_at`) VALUES
(1, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 1, 2, '2018-04-09 08:11:22'),
(2, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 2, 2, '2018-04-10 13:37:24'),
(3, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 3, 2, '2018-04-20 07:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `printing_hourse`
--

CREATE TABLE `printing_hourse` (
  `id` int(11) NOT NULL,
  `printing_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `froms` varchar(100) NOT NULL,
  `tos` varchar(100) NOT NULL,
  `hours` varchar(100) NOT NULL,
  `counter` varchar(100) NOT NULL,
  `remarks` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printing_hourse`
--

INSERT INTO `printing_hourse` (`id`, `printing_id`, `code`, `froms`, `tos`, `hours`, `counter`, `remarks`) VALUES
(1, 1, '1', '2', 'asd', '10 am/pm', '45', '212'),
(2, 1, '2', 'asd', 'asd', '10 am/pm', 'asd', 'asd'),
(3, 1, '', '', '', 'Pelease Select', '', ''),
(4, 2, '2', '9', '11', '9 am/pm', '105', 'no thanks'),
(5, 2, '3', '10', '11', '2 am/pm', '500', 'hf'),
(6, 2, '', '', '', 'Pelease Select', '', ''),
(7, 3, 'Lunch/Dinner', '13:00', '14:00', '1 am/pm', '5000', 'sadasd');

-- --------------------------------------------------------

--
-- Table structure for table `printing_report`
--

CREATE TABLE `printing_report` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printing_report`
--

INSERT INTO `printing_report` (`id`, `order_id`, `remarks`, `file`, `user_id`, `created_at`) VALUES
(1, 2, 'done', '', 7, '2018-04-07 07:12:38'),
(2, 3, 'done', '', 7, '2018-04-09 06:48:13'),
(3, 4, 'done', '/uploads/asdasd.PNG', 7, '2018-04-09 06:50:18'),
(4, 6, 'Done', '', 7, '2018-04-10 10:07:54'),
(5, 7, 'doe', '', 7, '2018-04-10 10:22:04'),
(6, 8, 'done', '', 7, '2018-04-10 12:00:00'),
(7, 9, 'done', '', 2, '2018-04-10 12:40:26'),
(8, 11, 'asd', '/uploads/task.png', 2, '2018-04-20 07:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Product_Code` varchar(100) NOT NULL,
  `Barcode` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `gramage` varchar(100) NOT NULL,
  `Category` int(11) NOT NULL,
  `Sub_Category` int(11) DEFAULT NULL,
  `Product_Unit` varchar(100) NOT NULL,
  `Product_Cost` varchar(100) DEFAULT NULL,
  `Product_Price` varchar(100) NOT NULL,
  `Product_Image` varchar(255) NOT NULL,
  `Product_Details` text,
  `Product_details_for_invoice` text,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Product_Name`, `Product_Code`, `Barcode`, `size`, `brand`, `gramage`, `Category`, `Sub_Category`, `Product_Unit`, `Product_Cost`, `Product_Price`, `Product_Image`, `Product_Details`, `Product_details_for_invoice`, `user_id`, `created_at`) VALUES
(5, 'ART PAPER 17.5X23', '1', '123', '17.5X23', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(6, 'ART PAPER 40X26', '2', '123', '40X26', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(7, 'ART PAPER 40X27', '3', '123', '40X27', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(8, 'ART PAPER 40X28', '4', '123', '40X28', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(9, 'ART PAPER 23X30', '5', '123', '23X30', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(10, 'ART PAPER 30X26', '6', '123', '30X26', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(11, 'ART PAPER 30X27', '7', '123', '30X27', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(12, 'ART PAPER 30X24', '8', '123', '30X24', 'Art Paper', '80', 2, 2, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(13, 'OFFSET PAPER 24.5X35.5', '9', '123', '24.5X35.5', 'Offset Paper', '55', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(14, 'OFFSET PAPER 24X30', '10', '123', '24X30', 'Offset Paper', '55', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(15, 'OFFSET PAPER 30X40', '11', '123', '30X40', 'Offset Paper', '55', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(16, 'OFFSET PAPER 25X36', '12', '123', '25X36', 'Offset Paper', '55', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(17, 'OFFSET PAPER 23X31', '13', '123', '23X31', 'Offset Paper', '68', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(18, 'OFFSET PAPER 19X30', '14', '123', '19X30', 'Offset Paper', '68', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(19, 'OFFSET PAPER 20X30', '15', '123', '20X30', 'Offset Paper', '70', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(20, 'OFFSET PAPER 27X34', '16', '123', '27X34', 'Offset Paper', '70', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(21, 'OFF SET PAPER 23X36', '17', '123', '23X36', 'Offset Paper', '70', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(22, 'OFFSET PAPER 25X35.5', '18', '123', '25X35.5', 'Offset Paper', '70', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(23, 'OFF SET PAPER 30X40', '19', '123', '30X40', 'Offset Paper', '70', 2, 3, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(24, 'FLYING PAPER 23X22', '20', '123', '23X22', 'Flying Paper', '55', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(25, 'FLYING PAPER 23X36', '21', '123', '23X36', 'Flying Paper', '55', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(26, 'FLYING PAPER 25X36', '22', '123', '25X36', 'Flying Paper', '55', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(27, 'FLYING PAPER 20X30', '23', '123', '20X30', 'Flying Paper', '53', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(28, 'FLYING PAPER 26X29', '24', '123', '26X29', 'Flying Paper', '55', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(29, 'FLYING PAPER 27X34', '25', '123', '27X34', 'Flying Paper', '52', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(30, 'FLYING PAPER 37.5X39', '26', '123', '37.5X39', 'Flying Paper', '52', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(31, 'FLYING PAPER 39X40', '27', '123', '39X40', 'Flying Paper', '55', 2, 4, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(32, 'ART CARD 25X36', '28', '123', '25X36', 'Art Card', '190', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(33, 'ART CARD 31X43', '29', '123', '31X43', 'Art Card', '260', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(34, 'ART CARD 25X36', '30', '123', '25X36', 'Art Card', '260', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(35, 'ART CARD 21X15.5', '31', '123', '21X15.5', 'Art Card', '210', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(36, 'ART CARD 23X36', '32', '123', '23X36', 'Art Card', '210', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(37, 'ART CARD 22X28', '33', '123', '22X28', 'Art Card', '250', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(38, 'ART CARD 23X36', '34', '123', '23X36', 'Art Card', '190', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(39, 'ART CARD 36X23                       ', '35', '123', '36X23', 'Art Card', '190', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(40, 'ART CARD 25X36', '36', '123', '25X36', 'Art Card', '210', 3, 5, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(41, 'PLASTIC CARD 11X30       ', '37', '123', '11X30', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(42, 'PLASTIC CARD 19X28', '38', '123', '19X28', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(43, 'PLASTIC CARD 25X36             ', '39', '123', '25X36', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(44, 'PLASTIC CARD 27X28             ', '40', '123', '27X28', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(45, 'PLASTIC CARD 25X30', '41', '123', '25X30', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(46, 'PLASTIC CARD 44X30           ', '42', '123', '44X30', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(47, 'PLASTIC CARD 28X50', '43', '123', '28X50', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(48, 'PLASTIC CARD 31X50', '44', '123', '31X50', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(49, 'PLASTIC CARD 31X43                ', '45', '123', '31X43', 'Plastic Card', '250', 3, 6, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(50, 'MAAT PAPER 23X36', '46', '123', '23X36', 'Maat Paper', '128', 2, 14, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(51, 'MAAT PAPER 25X16', '47', '123', '25X16', 'Maat Paper', '80', 2, 14, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(52, 'MAAT PAPER 23X21', '48', '123', '23X21', 'Maat Paper', '80', 2, 14, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(53, 'MAAT PAPER 36X23', '49', '123', '36X23', 'Maat Paper', '80', 2, 14, 'Ream', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(54, 'STICKER 20X30', '50', '123', '20X30', 'INDO', '0', 2, 15, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(55, '18X26', '51', '123', '18X26', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(56, '14X39', '52', '123', '14X39', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(57, '18.5X25', '53', '123', '18.5X25', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(58, '21X32', '54', '123', '21X32', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(59, '20X29', '55', '123', '20X29', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(60, '20X32', '56', '123', '20X32', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(61, '40X16.5', '57', '123', '40X16.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(62, '22X38.50', '58', '123', '22X38.50', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(63, '22.5X40', '59', '123', '22.5X40', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(64, '23X30', '60', '123', '23X30', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(65, '23X27', '61', '123', '23X27', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(66, '23X28', '62', '123', '23X28', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(67, '23X40', '63', '123', '23X40', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(68, '25X37', '64', '123', '25X37', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(69, '25X31', '65', '123', '25X31', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(70, '25X32.5', '66', '123', '25X32.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(71, '25X26.5', '67', '123', '25X26.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(72, '26.5X32.5', '68', '123', '26.5X32.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(73, '26X32.5', '69', '123', '26X32.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(74, '27X36.5', '70', '123', '27X36.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(75, '28X47', '71', '123', '28X47', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(76, '34X36.5', '72', '123', '34X36.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(77, '34X40', '73', '123', '34X40', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(78, '30X44', '74', '123', '30X44', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(79, '30X28', '75', '123', '30X28', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(80, '30X22', '76', '123', '30X22', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(81, '31X34', '77', '123', '31X34', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(82, '31X42', '78', '123', '31X42', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(83, '31X50', '79', '123', '31X50', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(84, '34X26.5', '80', '123', '34X26.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(85, '34X37', '81', '123', '34X37', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(86, '36X42', '82', '123', '36X42', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(87, '36X46', '83', '123', '36X46', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(88, '36X29', '84', '123', '36X29', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(89, '36X50', '85', '123', '36X50', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(90, '37X50', '86', '123', '37X50', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(91, '37X25', '87', '123', '37X25', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(92, '37X27', '88', '123', '37X27', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(93, '40X28', '89', '123', '40X28', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(94, '40X29', '90', '123', '40X29', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(95, '40.5X31', '91', '123', '40.5X31', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(96, '40X32', '92', '123', '40X32', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(97, '40X13', '93', '123', '40X13', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(98, '41X30', '94', '123', '41X30', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(99, '41X32', '95', '123', '41X32', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(100, '42X28', '96', '123', '42X28', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(101, '42X26', '97', '123', '42X26', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(102, '42X33', '98', '123', '42X33', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(103, '42X39', '99', '123', '42X39', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(104, '43X17.5', '100', '123', '43X17.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(105, '43X47', '101', '123', '43X47', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(106, '44X36', '102', '123', '44X36', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(107, '44X42', '103', '123', '44X42', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(108, '44X29', '104', '123', '44X29', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(109, '44X38', '105', '123', '44X38', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(110, '45X29', '106', '123', '45X29', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(111, '46X26', '107', '123', '46X26', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(112, '46X34', '108', '123', '46X34', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(113, '26.5X49', '109', '123', '26.5X49', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(114, '54X24.5', '110', '123', '54X24.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(115, '50X30', '111', '123', '50X30', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(116, '50X34', '112', '123', '50X34', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(117, '50X37', '113', '123', '50X37', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(118, '50X36', '114', '123', '50X36', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(119, '53X42', '115', '123', '53X42', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(120, '54X27', '116', '123', '54X27', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(121, '56.69X33.5', '117', '123', '56.69X33.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(122, '52X38.5', '118', '123', '52X38.5', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(123, '52X43', '119', '123', '52X43', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(124, '60X38', '120', '123', '60X38', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(125, '60X42', '121', '123', '60X42', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(126, '60X36', '122', '123', '60X36', 'Bleach Card', '310', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(127, '31X28.5', '123', '123', '31X28.5', 'Bleach Card', '360', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(128, '25X34', '124', '123', '25X34', 'Bleach Card', '360', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(129, '45X29', '125', '123', '45X29', 'Bleach Card', '360', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(130, '15X9.66', '126', '123', '15X9.66', 'Bleach Card', '360', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(131, '36X40.5', '127', '123', '36X40.5', 'Bleach Card', '360', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(132, '50X36', '128', '123', '50X36', 'Bleach Card', '360', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(133, '20X31', '129', '123', '20X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(134, '22X15', '130', '123', '22X15', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(135, '23X36', '131', '123', '23X36', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(136, '36X23', '132', '123', '36X23', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(137, '24X32', '133', '123', '24X32', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(138, '25X30', '134', '123', '25X30', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(139, '22X45', '135', '123', '22X45', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(140, '27X31', '136', '123', '27X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(141, '36X50', '137', '123', '36X50', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(142, '17X31', '138', '123', '17X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(143, '21.5X20', '139', '123', '21.5X20', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(144, '22X31', '140', '123', '22X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(145, '22X33', '141', '123', '22X33', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(146, '40X28', '142', '123', '40X28', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(147, '40X30', '143', '123', '40X30', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(148, '48X32', '144', '123', '48X32', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(149, '40X32', '145', '123', '40X32', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(150, '40X36', '146', '123', '40X36', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(151, '42X45', '147', '123', '42X45', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(152, '44X30', '148', '123', '44X30', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(153, '44X33', '149', '123', '44X33', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(154, '42X30', '150', '123', '42X30', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(155, '40X31', '151', '123', '40X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(156, '42X26', '152', '123', '42X26', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(157, '44X31', '153', '123', '44X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(158, '44X14', '154', '123', '44X14', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(159, '46X30', '155', '123', '46X30', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(160, '42X29', '156', '123', '42X29', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(161, '50X30', '157', '123', '50X30', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(162, '50X32', '158', '123', '50X32', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(163, '50X43', '159', '123', '50X43', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(164, '25X31', '160', '123', '25X31', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(165, '48X28.5', '161', '123', '48X28.5', 'Bleach Card', '260', 3, 7, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(166, '40X23', '162', '123', '40X23', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(167, '36X25.5 (Simplicity)', '163', '123', '36X25.5', 'POLO', '230', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(168, '23X36', '164', '123', '23X36', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(169, '30X25', '165', '123', '30X25', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(170, '22X28', '166', '123', '22X28', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(171, '25X30', '167', '123', '25X30', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(172, '25X36', '168', '123', '25X36', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(173, '28X45', '169', '123', '28X45', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(174, '36X40', '170', '123', '36X40', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(175, '36X50', '171', '123', '36X50', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(176, '28.5X42', '172', '123', '28.5X42', 'LOCAL', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(177, '28.75X21', '173', '123', '28.75X21', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(178, '30X27', '174', '123', '30X27', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(179, '30X50', '175', '123', '30X50', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(180, '40X27', '176', '123', '40X27', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(181, '40X45', '177', '123', '40X45', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(182, '40X32', '178', '123', '40X32', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(183, '44X30', '179', '123', '44X30', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(184, '44X33', '180', '123', '44X33', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(185, '44X34.5', '181', '123', '44X34.5', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(186, '46X32', '182', '123', '46X32', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(187, '34X27', '183', '123', '34X27', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(188, '47X28.5', '184', '123', '47X28.5', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(189, '47X27', '185', '123', '47X27', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(190, '47X28', '186', '123', '47X28', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(191, '40X33', '187', '123', '40X33', 'LOCAL', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(192, '40X33', '188', '123', '40X33', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(193, '40X36', '189', '123', '40X36', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(194, '40X50', '190', '123', '40X50', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(195, '50X40', '191', '123', '50X40', 'POLO', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(196, '50X40', '192', '123', '50X40', 'LOCAL', '250', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(197, '22X28', '193', '123', '22X28', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(198, '23X35', '194', '123', '23X35', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(199, '23X36', '195', '123', '23X36', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(200, '25X41', '196', '123', '25X41', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(201, '25X42', '197', '123', '25X42', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(202, '25X43', '198', '123', '25X43', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(203, '30X25', '199', '123', '30X25', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(204, '31X28.5', '200', '123', '31X28.5', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(205, '32X46', '201', '123', '32X46', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(206, '33X24', '202', '123', '33X24', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(207, '35X26', '203', '123', '35X26', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(208, '42X36', '204', '123', '42X36', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(209, '40X30', '205', '123', '40X30', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(210, '40X36', '206', '123', '40X36', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(211, '40X32', '207', '123', '40X32', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(212, '40X52', '208', '123', '40X52', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(213, '40X50', '209', '123', '40X50', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(214, '34.5X27', '210', '123', '34.5X27', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(215, '44X30', '211', '123', '44X30', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(216, '44X31', '212', '123', '44X31', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(217, '44X33', '213', '123', '44X33', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(218, '46X30', '214', '123', '46X30', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(219, '30X49', '215', '123', '30X49', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(220, '36X50', '216', '123', '36X50', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(221, '36X42', '217', '123', '36X42', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(222, '46X33', '218', '123', '46X33', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(223, '50X40', '219', '123', '50X40', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(224, '52X40', '220', '123', '52X40', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(225, '25X30', '221', '123', '25X30', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(226, '25X36', '222', '123', '25X36', 'POLO', '300', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(227, '36X26.5', '223', '123', '36X26.5', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(228, '40X28', '224', '123', '40X28', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(229, '19.5X28', '225', '123', '19.5X28', 'LOCAL', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(230, '38X30', '226', '123', '38X30', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(231, '25X36', '227', '123', '25X36', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(232, '43X27', '228', '123', '43X27', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(233, '47X27', '229', '123', '47X27', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(234, '44X34', '230', '123', '44X34', 'POLO', '350', 4, 8, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(235, '46X42', '231', '123', '46X42', 'BURGO', '250', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(236, '46X17', '232', '123', '46X17', 'BURGO', '250', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(237, '25X30', '233', '123', '25X30', 'BURGO', '300', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(238, '36X50', '234', '123', '36X50', 'BURGO', '300', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(239, '36X29', '235', '123', '36X29', 'BURGO', '300', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(240, '46X18', '236', '123', '46X18', 'BURGO', '300', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(241, '46X33', '237', '123', '46X33', 'BURGO', '300', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(242, '25X30', '238', '123', '25X30', 'BURGO', '350', 4, 9, 'Packet', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(243, 'MC-1', '239', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(244, 'MC- 2', '240', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(245, 'MC- 3', '241', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(246, 'MC- 4', '242', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(247, 'MC- 5', '243', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(248, 'MC- 6', '244', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(249, 'MC- 7', '245', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(250, 'MC- 8', '246', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(251, 'MC- 10', '247', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(252, 'MC-11', '248', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(253, 'MC-12', '249', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(254, 'MC-13', '250', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(255, 'MC-14', '251', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(256, 'MC-15', '252', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(257, 'MC-16', '253', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(258, 'MC-17', '254', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(259, 'MC-18', '255', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(260, 'MC-18(new)', '256', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(261, 'MC-19', '257', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(262, 'MC-20', '258', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(263, 'MC-21', '259', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(264, 'MC-22', '260', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(265, 'MC-23', '261', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(266, 'MC-24', '262', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(267, 'MC-25', '263', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(268, 'MC-26', '264', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(269, 'MC-27', '265', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(270, 'MC-28', '266', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(271, 'MC-29', '267', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(272, 'MC-30', '268', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(273, 'MC-32', '269', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(274, 'MC-33', '270', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(275, 'MC-34', '271', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00'),
(276, 'MC-35', '272', '123', '0', 'MC', '0', 5, 10, 'Pcs', '100', '100', '', 'Details to be added', 'Details to be added', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `production_flow`
--

CREATE TABLE `production_flow` (
  `id` int(11) NOT NULL,
  `plane_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `machine` int(11) NOT NULL,
  `priority` varchar(10) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production_flow`
--

INSERT INTO `production_flow` (`id`, `plane_id`, `type`, `machine`, `priority`, `parent_id`, `start_date`, `end_date`) VALUES
(14, 9, '4', 1, 'Hi', 0, '2018-04-10 00:00:00', '2018-04-11 00:00:00'),
(15, 9, '7', 8, 'Hi', 4, '2018-04-10 00:00:00', '2018-04-11 00:00:00'),
(16, 10, '4', 1, 'Hi', 0, '2018-04-10 00:00:00', '2018-04-11 00:00:00'),
(17, 10, '5', 4, 'Hi', 4, '2018-04-10 00:00:00', '2018-04-11 00:00:00'),
(18, 10, '7', 8, 'Hi', 5, '2018-04-10 00:00:00', '2018-04-11 00:00:00'),
(19, 10, '16', 24, 'Hi', 7, '2018-04-10 00:00:00', '2018-04-11 00:00:00'),
(20, 11, '4', 1, 'Hi', 4, '2018-04-10 00:00:00', '2018-04-11 00:00:00'),
(21, 12, '4', 1, 'Hi', 0, '2018-04-20 00:00:00', '2018-04-21 00:00:00'),
(22, 12, '7', 8, 'Hi', 4, '2018-04-20 00:00:00', '2018-04-21 00:00:00'),
(23, 12, '16', 0, 'Hi', 7, '2018-04-20 00:00:00', '2018-04-21 00:00:00'),
(24, 9, 'Select Type', 0, 'Select Pri', 0, '2018-04-25 02:00:00', '2018-04-25 04:30:00'),
(25, 9, '4', 1, 'Hi', 0, '2018-04-27 01:00:00', '2018-04-27 03:00:00'),
(26, 9, '13', 18, 'Hi', 4, '2018-04-28 01:00:00', '2018-04-28 03:00:00'),
(27, 9, '8', 10, 'Hi', 13, '2018-04-28 04:00:00', '2018-04-28 06:00:00'),
(28, 9, '15', 22, 'Hi', 8, '2018-04-29 01:00:00', '2018-04-29 03:00:00'),
(29, 9, '7', 8, 'Hi', 15, '2018-04-30 01:00:00', '2018-04-30 03:00:00'),
(30, 9, '16', 24, 'Hi', 15, '2018-05-09 13:00:00', '2018-05-08 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `production_plan`
--

CREATE TABLE `production_plan` (
  `id` int(11) UNSIGNED NOT NULL,
  `Date` date DEFAULT NULL,
  `WO_no` varchar(250) DEFAULT NULL,
  `MIS_no` varchar(250) DEFAULT NULL,
  `Job_Description` varchar(250) DEFAULT NULL,
  `Board_Name` varchar(250) DEFAULT NULL,
  `Gsm` varchar(250) DEFAULT NULL,
  `Board_Size` varchar(250) DEFAULT NULL,
  `Quantity` varchar(250) DEFAULT NULL,
  `pack_sheet` int(11) NOT NULL,
  `Conversion` varchar(250) DEFAULT NULL,
  `Planned_sheet_Size` varchar(250) DEFAULT NULL,
  `Balanced_Offcut_Size` varchar(250) DEFAULT NULL,
  `Offcut_Quantity` varchar(250) DEFAULT NULL,
  `PO_Qty` int(11) DEFAULT NULL,
  `Planned_qty_sheets` int(11) DEFAULT NULL,
  `Ups` varchar(250) DEFAULT NULL,
  `Planned_qty` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `production_plan`
--

INSERT INTO `production_plan` (`id`, `Date`, `WO_no`, `MIS_no`, `Job_Description`, `Board_Name`, `Gsm`, `Board_Size`, `Quantity`, `pack_sheet`, `Conversion`, `Planned_sheet_Size`, `Balanced_Offcut_Size`, `Offcut_Quantity`, `PO_Qty`, `Planned_qty_sheets`, `Ups`, `Planned_qty`, `user_id`, `created_at`) VALUES
(9, '2018-04-10', '7', '789', 'C/N Risek 50mg', 'Bleech Card', '300', '1000*500', '138', 0, '1/4', '82', '85', '58', 8000, 1100, '8', 8800, 2, '2018-04-10 10:23:27'),
(10, '2018-04-10', '8', '52', 'C/N Acort Cream 1ogm T/P', 'Bleech Card', '300', '1000*500', '859', 0, '1/4', '343', '343', '343', 50000, 6875, '8', 55000, 2, '2018-04-10 12:14:51'),
(11, '2018-04-10', '9', '554', 'C/N Acort Cream 1ogm T/P', 'Bleech Card', '300', '1000*500', '1031', 0, '1/4', '100', '100', '100', 60000, 8250, '8', 66000, 2, '2018-04-10 12:48:56'),
(12, '2018-04-20', '11', '78858', 'C/N Norvix', 'Bleach Card', '300', '100*500', '1719', 3, '1/4', '5', '5', '5', 50000, 6875, '8', 55000, 2, '2018-04-20 07:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `product_release`
--

CREATE TABLE `product_release` (
  `id` int(11) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Reference_No` int(100) NOT NULL,
  `Store` int(11) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Note` text,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_release`
--

INSERT INTO `product_release` (`id`, `Date`, `Reference_No`, `Store`, `Status`, `Note`, `user_id`, `created_at`) VALUES
(4, '2018-03-13', 1234566, 1, 'Complete', 'test', 2, '2018-03-13 07:59:44'),
(8, '2018-03-13', 32132, 1, 'Complete', '333232', 2, '2018-03-13 07:50:58'),
(9, '2018-03-13', 434334, 1, 'Complete', '4344343', 2, '2018-03-13 08:28:02'),
(10, '2018-04-10', 785, 3, 'Complete', 'DElec', 8, '2018-04-10 09:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_release_product`
--

CREATE TABLE `product_release_product` (
  `id` int(11) NOT NULL,
  `product_release_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `received_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_release_product`
--

INSERT INTO `product_release_product` (`id`, `product_release_id`, `product_id`, `quantity`, `received_quantity`) VALUES
(3, 4, 5, 40, 20),
(4, 4, 8, 50, 50),
(8, 8, 6, 70, 70),
(9, 9, 6, 90, 70),
(10, 10, 26, 100, 100),
(11, 10, 239, 100, 100),
(12, 10, 259, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Reference_No` int(100) DEFAULT NULL,
  `Status` varchar(100) NOT NULL,
  `Attach_Document` varchar(255) DEFAULT NULL,
  `Supplier` int(11) NOT NULL,
  `Order_Tax` varchar(100) DEFAULT NULL,
  `Discount` varchar(100) DEFAULT NULL,
  `Shipping` varchar(100) DEFAULT NULL,
  `Payment_Term` varchar(100) DEFAULT NULL,
  `Note` text,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `Date`, `Reference_No`, `Status`, `Attach_Document`, `Supplier`, `Order_Tax`, `Discount`, `Shipping`, `Payment_Term`, `Note`, `user_id`, `created_at`) VALUES
(2, '2018-03-13', 12345656, 'Received', NULL, 1, '12143', '4334', '4343', '443', '4343', 2, '2018-03-13 07:41:31'),
(3, '2018-03-13', 1322, 'Received', NULL, 2, '1221', '212', '212', '2121', '212', 2, '2018-03-13 06:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_product`
--

CREATE TABLE `purchase_product` (
  `id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `received_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_product`
--

INSERT INTO `purchase_product` (`id`, `purchase_id`, `product_id`, `quantity`, `price`, `received_quantity`) VALUES
(3, 2, 5, 400, 50, 300),
(4, 2, 6, 500, 70, 500),
(5, 3, 8, 300, 50, 300);

-- --------------------------------------------------------

--
-- Table structure for table `quantity_adjustments`
--

CREATE TABLE `quantity_adjustments` (
  `id` int(11) UNSIGNED NOT NULL,
  `Date` date NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Note` text NOT NULL,
  `Product` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quantity_adjustments`
--

INSERT INTO `quantity_adjustments` (`id`, `Date`, `Type`, `Quantity`, `Note`, `Product`, `user_id`, `created_at`) VALUES
(1, '2018-03-13', 'Addition', 20, 'demage', 8, 2, '2018-03-13 05:32:42'),
(2, '2018-03-13', 'Subtraction', 10, 'demage', 8, 2, '2018-03-13 05:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `requisition`
--

CREATE TABLE `requisition` (
  `id` int(11) NOT NULL,
  `wo_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requisition`
--

INSERT INTO `requisition` (`id`, `wo_id`, `store_id`, `type`, `user_id`, `status`, `created_at`) VALUES
(3, 1, 1, 'Production Plan', 2, 'Complete', '2018-03-14 06:26:43'),
(4, 1, 1, 'Die Cutting', 2, 'Complete', '2018-03-14 07:27:58'),
(5, 2, 1, 'Production Plan', 5, 'Complete', '2018-04-09 05:10:50'),
(6, 2, 1, 'Production Plan', 5, 'Complete', '2018-04-09 05:11:24'),
(7, 2, 1, 'Production Plan', 5, 'Complete', '2018-04-09 05:11:20'),
(8, 1, 1, 'Production Plan', 2, 'Complete', '2018-04-09 05:11:17'),
(9, 1, 1, 'Production Plan', 2, 'Complete', '2018-04-09 05:11:14'),
(10, 1, 1, 'Production Plan', 2, 'Complete', '2018-04-09 05:11:10'),
(11, 1, 1, 'Production Plan', 2, 'Complete', '2018-04-09 05:11:01'),
(12, 1, 1, 'Production Plan', 2, 'Complete', '2018-04-09 08:43:23'),
(13, 3, 1, 'Production Plan', 2, 'Pending', '2018-04-09 05:22:12'),
(14, 4, 1, 'Plate Making', 2, 'Pending', '2018-04-09 07:17:10'),
(15, 4, 1, 'Packing', 2, 'Pending', '2018-04-09 08:41:43'),
(16, 4, 1, 'Packing', 2, 'Pending', '2018-04-09 08:42:49'),
(17, 7, 1, 'Production Plan', 2, 'Pending', '2018-04-10 10:27:47'),
(18, 8, 1, 'Production Plan', 2, 'Complete', '2018-04-10 12:26:11'),
(19, 9, 1, 'Production Plan', 2, 'Complete', '2018-04-10 12:57:29'),
(20, 9, 1, 'Production Plan', 2, 'Complete', '2018-04-10 13:01:43'),
(21, 8, 1, 'Printing', 2, 'Complete', '2018-04-20 06:53:15'),
(22, 8, 1, 'Printing', 2, 'Complete', '2018-04-20 06:55:14'),
(23, 11, 1, 'Cutting', 2, 'Pending', '2018-04-20 07:27:39'),
(24, 7, 0, 'Production Plan', 2, 'Pending', '2018-04-20 09:26:59');

-- --------------------------------------------------------

--
-- Table structure for table `requisition_product`
--

CREATE TABLE `requisition_product` (
  `id` int(11) NOT NULL,
  `requisition_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `received_quantity` int(11) NOT NULL,
  `pending_quantity` int(11) NOT NULL DEFAULT '0',
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requisition_product`
--

INSERT INTO `requisition_product` (`id`, `requisition_id`, `product_id`, `quantity`, `received_quantity`, `pending_quantity`, `remarks`) VALUES
(5, 3, 6, 50, 50, 0, ''),
(6, 3, 8, 20, 20, 0, ''),
(7, 4, 6, 20, 20, 0, ''),
(8, 5, 8, 1, 1, 0, ''),
(9, 5, 26, 1, 1, 0, ''),
(10, 5, 29, 1, 1, 0, ''),
(11, 6, 6, 1, 1, 0, ''),
(12, 6, 28, 1, 1, 0, ''),
(13, 6, 236, 50, 50, 0, ''),
(14, 7, 20, 1, 1, 0, ''),
(15, 8, 5, 1, 1, 0, ''),
(16, 8, 7, 1, 1, 0, ''),
(17, 8, 14, 1, 1, 0, ''),
(18, 9, 5, 1, 1, 0, ''),
(19, 9, 7, 1, 1, 0, ''),
(20, 9, 14, 1, 1, 0, ''),
(21, 9, 16, 1, 1, 0, ''),
(22, 10, 5, 1, 1, 0, ''),
(23, 10, 9, 1, 1, 0, ''),
(24, 10, 11, 1, 1, 0, ''),
(25, 11, 6, 1, 1, 0, ''),
(26, 11, 7, 1, 1, 0, ''),
(27, 11, 5, 1, 1, 0, ''),
(28, 11, 9, 1, 1, 0, ''),
(29, 12, 5, 1, 1, 0, ''),
(30, 12, 13, 1, 1, 0, ''),
(31, 12, 14, 1, 1, 0, ''),
(32, 12, 25, 1, 1, 0, ''),
(33, 12, 29, 1, 1, 0, ''),
(34, 13, 6, 1, 0, 0, ''),
(35, 13, 9, 1, 0, 0, ''),
(36, 13, 12, 1, 0, 0, ''),
(37, 14, 7, 1, 0, 0, ''),
(38, 14, 10, 1, 0, 0, ''),
(39, 15, 33, 1, 0, 0, ''),
(40, 16, 25, 1, 0, 0, ''),
(41, 17, 5, 10, 0, 0, ''),
(42, 18, 27, 10, 10, 0, ''),
(43, 18, 259, 10, 10, 0, ''),
(44, 19, 6, 21, 24, 0, ''),
(45, 20, 57, 12, 12, 0, ''),
(46, 21, 8, 10, 10, 0, ''),
(47, 22, 8, 15, 15, 0, ''),
(48, 23, 6, 1, 0, 0, ''),
(49, 24, 5, 1, 0, 0, ''),
(50, 24, 18, 1, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(245) NOT NULL,
  `Parent_Category` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `Name`, `Parent_Category`, `user_id`, `created_at`) VALUES
(2, 'Art Paper', 2, 2, '2018-03-12 06:59:40'),
(3, 'Offset Paper', 2, 2, '2018-03-12 06:59:54'),
(4, 'Flying Paper', 2, 2, '2018-03-12 07:00:05'),
(5, 'Art Card', 3, 2, '2018-03-12 08:58:21'),
(6, 'Plastic Card', 3, 2, '2018-03-12 08:58:28'),
(7, 'Bleach Card', 3, 2, '2018-03-12 08:59:10'),
(8, 'Box Board Polo', 4, 2, '2018-03-12 09:00:22'),
(9, 'Box Board Burgo', 4, 2, '2018-03-12 09:00:44'),
(10, 'Master Carton ', 5, 2, '2018-03-12 09:03:10'),
(11, 'Ink', 6, 2, '2018-03-12 09:04:10'),
(12, 'Chemicals', 6, 2, '2018-03-12 09:04:22'),
(14, 'Maat Paper', 2, 2, '2018-03-12 09:29:23'),
(15, 'Sticker', 2, 2, '2018-03-12 09:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `sub_store`
--

CREATE TABLE `sub_store` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_store`
--

INSERT INTO `sub_store` (`id`, `Name`, `user_id`, `created_at`) VALUES
(1, 'First Store', 2, '2018-03-13 05:42:49'),
(2, 'Second Store ', 2, '2018-03-13 05:43:00'),
(3, 'Third Store', 2, '2018-03-13 05:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) UNSIGNED NOT NULL,
  `Remarks` varchar(321) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(2, 'admin', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', 1),
(5, 'Production', 'production@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2),
(6, 'Originated', 'originated@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 3),
(7, 'Process', 'process@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 4),
(8, 'Store', 'store@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 5),
(9, 'Qc', 'qc@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 6),
(10, 'Reports', 'report@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `user_id`) VALUES
(1, 'Admin', 2),
(2, 'Production Plane', 2),
(3, 'Originated dep', 2),
(4, 'Pre Process', 2),
(5, 'Store', 2),
(6, 'Qc', 2),
(7, 'Press', 2),
(8, 'Report', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vednor`
--

CREATE TABLE `vednor` (
  `id` int(11) UNSIGNED NOT NULL,
  `Name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vednor`
--

INSERT INTO `vednor` (`id`, `Name`, `user_id`, `created_at`) VALUES
(1, 'Pakistan Paper Products', 2, '2018-03-12 06:44:10'),
(2, 'RIFLE PAPER Co', 2, '2018-03-12 06:44:24'),
(3, 'Sullivan Paper Company', 2, '2018-03-12 06:44:33'),
(4, 'The Printing Ink Company', 2, '2018-03-12 06:44:53'),
(5, 'Superior Printing Inks', 2, '2018-03-12 06:45:10'),
(6, 'Quantum Ink', 2, '2018-03-12 06:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `work_orders`
--

CREATE TABLE `work_orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `Client` int(11) DEFAULT NULL,
  `Item_Code` int(11) DEFAULT NULL,
  `quantity` varchar(250) DEFAULT NULL,
  `PO_No` varchar(250) DEFAULT NULL,
  `PO_Date` varchar(250) DEFAULT NULL,
  `Batch_No` varchar(250) DEFAULT NULL,
  `Delivery_Date` varchar(250) DEFAULT NULL,
  `Delivery_Status` varchar(250) DEFAULT NULL,
  `Instruction_Remarks` text,
  `approval` int(11) NOT NULL DEFAULT '0',
  `status` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_orders`
--

INSERT INTO `work_orders` (`id`, `Client`, `Item_Code`, `quantity`, `PO_No`, `PO_Date`, `Batch_No`, `Delivery_Date`, `Delivery_Status`, `Instruction_Remarks`, `approval`, `status`, `user_id`, `created_at`) VALUES
(7, 2, 2, '8000', '80', '2018-04-10', '', '2018-04-25', 'N', 'asd', 1, 'New', 2, '2018-04-10 10:22:10'),
(8, 3, 4, '50000', '12', '2018-04-10', '125', '2018-04-25', 'N', 'ASAP', 1, 'New', 2, '2018-04-10 12:00:13'),
(9, 3, 4, '60000', '123456', '2018-04-11', '2525', '2018-04-20', 'N', '', 1, 'Existing', 2, '2018-04-10 12:40:39'),
(10, 1, 1, '50000', '123', '2018-04-12', '121', '2018-04-16', 'U', 'test', 0, 'Existing', 2, '2018-04-12 05:34:38'),
(11, 4, 7, '50000', '7854785', '2018-04-20', '58', '2018-04-27', 'M.U', 'Do ASAP', 1, 'New', 2, '2018-04-20 07:10:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batch_release`
--
ALTER TABLE `batch_release`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bom`
--
ALTER TABLE `bom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutting`
--
ALTER TABLE `cutting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_challan`
--
ALTER TABLE `delivery_challan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_report`
--
ALTER TABLE `design_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `development_report`
--
ALTER TABLE `development_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `die_cutting`
--
ALTER TABLE `die_cutting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `die_cutting_complete`
--
ALTER TABLE `die_cutting_complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `die_cutting_hourse`
--
ALTER TABLE `die_cutting_hourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flows`
--
ALTER TABLE `flows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaflet_cutting`
--
ALTER TABLE `leaflet_cutting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `line_clearance`
--
ALTER TABLE `line_clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_flow_start`
--
ALTER TABLE `order_flow_start`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_flow_submission`
--
ALTER TABLE `order_flow_submission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasting`
--
ALTER TABLE `pasting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasting_complete`
--
ALTER TABLE `pasting_complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasting_hourse`
--
ALTER TABLE `pasting_hourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printing`
--
ALTER TABLE `printing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printing_complete`
--
ALTER TABLE `printing_complete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printing_hourse`
--
ALTER TABLE `printing_hourse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printing_report`
--
ALTER TABLE `printing_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production_flow`
--
ALTER TABLE `production_flow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production_plan`
--
ALTER TABLE `production_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_release`
--
ALTER TABLE `product_release`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_release_product`
--
ALTER TABLE `product_release_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_product`
--
ALTER TABLE `purchase_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quantity_adjustments`
--
ALTER TABLE `quantity_adjustments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisition`
--
ALTER TABLE `requisition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisition_product`
--
ALTER TABLE `requisition_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_store`
--
ALTER TABLE `sub_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vednor`
--
ALTER TABLE `vednor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_orders`
--
ALTER TABLE `work_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch_release`
--
ALTER TABLE `batch_release`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bom`
--
ALTER TABLE `bom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cutting`
--
ALTER TABLE `cutting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `delivery_challan`
--
ALTER TABLE `delivery_challan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `design_report`
--
ALTER TABLE `design_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `development_report`
--
ALTER TABLE `development_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `die_cutting`
--
ALTER TABLE `die_cutting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `die_cutting_complete`
--
ALTER TABLE `die_cutting_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `die_cutting_hourse`
--
ALTER TABLE `die_cutting_hourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `flows`
--
ALTER TABLE `flows`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `leaflet_cutting`
--
ALTER TABLE `leaflet_cutting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `line_clearance`
--
ALTER TABLE `line_clearance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_flow_start`
--
ALTER TABLE `order_flow_start`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `order_flow_submission`
--
ALTER TABLE `order_flow_submission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pasting`
--
ALTER TABLE `pasting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pasting_complete`
--
ALTER TABLE `pasting_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pasting_hourse`
--
ALTER TABLE `pasting_hourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2519;
--
-- AUTO_INCREMENT for table `printing`
--
ALTER TABLE `printing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `printing_complete`
--
ALTER TABLE `printing_complete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `printing_hourse`
--
ALTER TABLE `printing_hourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `printing_report`
--
ALTER TABLE `printing_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;
--
-- AUTO_INCREMENT for table `production_flow`
--
ALTER TABLE `production_flow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `production_plan`
--
ALTER TABLE `production_plan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product_release`
--
ALTER TABLE `product_release`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product_release_product`
--
ALTER TABLE `product_release_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `purchase_product`
--
ALTER TABLE `purchase_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `quantity_adjustments`
--
ALTER TABLE `quantity_adjustments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `requisition`
--
ALTER TABLE `requisition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `requisition_product`
--
ALTER TABLE `requisition_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sub_store`
--
ALTER TABLE `sub_store`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `vednor`
--
ALTER TABLE `vednor`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `work_orders`
--
ALTER TABLE `work_orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
