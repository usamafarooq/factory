-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 06:33 AM
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
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `client_Name`, `Detail`, `order_Margin`, `Contact_Person`, `Contact_Number`, `Email`, `Address`, `Company_Name`, `user_id`, `created_at`) VALUES
(1, '', 'ss', 0, 's', '', 's', '', 'ddssd', 2, '2018-01-12 06:43:06');

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
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `id` int(11) UNSIGNED NOT NULL,
  `machine_Name` tinytext,
  `detail` text,
  `feature` varchar(100) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`id`, `machine_Name`, `detail`, `feature`, `user_id`, `created_at`) VALUES
(6, 'ffsfdsfd', 'sdfdsffdssdf', '2', 2, '2018-01-11 08:40:21'),
(7, 'dsgdssdgsdg', 'dsgdsgdsgsdg', '1,2', 2, '2018-01-11 08:40:58'),
(8, 'zfdsaff', 'safdfdsfdsa', '1,2', 2, '2018-01-11 08:41:07'),
(9, 'fdgfdfdg', 'fggffgfgfg', '1', 2, '2018-01-11 08:42:22');

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
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `main_name`, `sort`, `icon`, `url`, `user_id`) VALUES
(2, 'Dashboard', 'dashboard', 1, 'home', 'home', 4),
(3, 'Modules', 'modules', 4, 'home', 'modules', 4),
(5, 'Role/Permission', 'role', 2, 'home', 'role', 4),
(7, 'Users', 'user', 3, 'home', 'users', 2),
(21, 'Orders', 'orders', 5, 'home', 'orders', 2),
(25, 'Work Orders', 'work_orders', 6, 'home', 'work_orders', 2),
(27, 'All Orders', 'all_orders', 8, 'home', 'all_orders', 2),
(33, 'Machines', 'machines', 10, 'home', 'machines', 2),
(34, 'Features', 'feature', 8, 'home', 'feature', 2),
(35, 'Clients', 'clients', 11, 'home', 'clients', 2),
(36, 'Production Plan', 'production_plan', 12, 'home', 'production_plan', 2);

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
(0, 'Planned_qty', 'INT', 'input', '', 'no', 11, 0, 36, 0, NULL, NULL, NULL);

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

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Date`, `Name`, `Designation`, `quantity`, `Attach_File`, `Order_Type`, `Remarks`, `user_id`) VALUES
(7, '2018-01-12', 'gfjfjgf', 'jjjg', 'gjgfgf', '/uploads/orders/PRD_FM_001_04_Die_Cutting.xlsx', 'New', 'gfjgjgf', 2);

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
(353, 2, 2, 1, 1, 1, 1, 1, 1, 1),
(354, 3, 2, 1, 1, 1, 1, 1, 1, 1),
(355, 5, 2, 1, 1, 1, 1, 1, 1, 1),
(356, 7, 2, 1, 1, 1, 1, 1, 1, 1),
(357, 21, 2, 1, 1, 1, 1, 1, 1, 1),
(358, 25, 2, 1, 1, 1, 1, 1, 1, 1),
(359, 27, 2, 1, 1, 1, 1, 1, 1, 1),
(360, 33, 2, 1, 1, 1, 1, 1, 1, 1),
(361, 34, 2, 1, 1, 1, 1, 1, 1, 1),
(362, 35, 2, 1, 1, 1, 1, 1, 1, 1),
(363, 36, 2, 1, 1, 1, 1, 1, 1, 1);

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

INSERT INTO `production_plan` (`id`, `Date`, `WO_no`, `MIS_no`, `Job_Description`, `Board_Name`, `Gsm`, `Board_Size`, `Quantity`, `Conversion`, `Planned_sheet_Size`, `Balanced_Offcut_Size`, `Offcut_Quantity`, `PO_Qty`, `Planned_qty_sheets`, `Ups`, `Planned_qty`, `user_id`, `created_at`) VALUES
(1, '0000-00-00', '51', '', 'sss', '', '', '', '', '', '', '', '', 0, 0, '', 0, 2, '2018-01-12 09:33:46');

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
(4, 'admin1', 'admin1@gmail.com', 'e6e061838856bf47e1de730719fb2609', 1);

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
(1, 'Admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `work_orders`
--

CREATE TABLE `work_orders` (
  `id` int(11) UNSIGNED NOT NULL,
  `Date` date DEFAULT NULL,
  `Client` varchar(250) DEFAULT NULL,
  `Description` varchar(250) DEFAULT NULL,
  `Item_Code` varchar(250) DEFAULT NULL,
  `quantity` varchar(250) DEFAULT NULL,
  `PO_No` varchar(250) DEFAULT NULL,
  `PO_Date` varchar(250) DEFAULT NULL,
  `Batch_No` varchar(250) DEFAULT NULL,
  `Delivery_Date` varchar(250) DEFAULT NULL,
  `Order_Type` varchar(250) DEFAULT NULL,
  `Delivery_Status` varchar(250) DEFAULT NULL,
  `Instruction_Remarks` text,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_orders`
--

INSERT INTO `work_orders` (`id`, `Date`, `Client`, `Description`, `Item_Code`, `quantity`, `PO_No`, `PO_Date`, `Batch_No`, `Delivery_Date`, `Order_Type`, `Delivery_Status`, `Instruction_Remarks`, `user_id`) VALUES
(51, '0000-00-00', 'asdsa', 'dsad', 'adssa', 'sadas', 'sdadas', 'sadasd', 'sad', 'asdas', 'new', 'N', 'asdasd', 2),
(52, '0000-00-00', 'asdasd', 'sadsa', 'sad', 'dsadas', 'dsad', 'sadsa', 'asdasd', 'asdsa', 'New', 'M.U', 'asdas', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
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
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `production_plan`
--
ALTER TABLE `production_plan`
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
-- Indexes for table `work_orders`
--
ALTER TABLE `work_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;
--
-- AUTO_INCREMENT for table `production_plan`
--
ALTER TABLE `production_plan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `work_orders`
--
ALTER TABLE `work_orders`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
