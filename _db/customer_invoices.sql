-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2020 at 11:33 PM
-- Server version: 5.6.47-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayibobo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_invoices`
--

CREATE TABLE `customer_invoices` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `tracking_id` text NOT NULL,
  `items_name` text NOT NULL,
  `quantity` text NOT NULL,
  `catergory` text NOT NULL,
  `product_link` text NOT NULL,
  `shipment_mode` text NOT NULL,
  `pay_mode` text NOT NULL,
  `shipment_fee` text NOT NULL,
  `description` text NOT NULL,
  `weight` text NOT NULL,
  `approve_status` tinyint(1) NOT NULL DEFAULT '1',
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `total_balance` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_invoices`
--

INSERT INTO `customer_invoices` (`id`, `customer_id`, `name`, `tracking_id`, `items_name`, `quantity`, `catergory`, `product_link`, `shipment_mode`, `pay_mode`, `shipment_fee`, `description`, `weight`, `approve_status`, `is_paid`, `total_balance`, `created_at`, `updated_at`) VALUES
(49, 'BSN027', 'Rogan Prince', '356', 'Olga Bowers', '248', 'Pet Accessory', 'Neque aut voluptate ', 'International Priority', 'Iure commodo iste do', '71', 'Aspernatur et volupt', '61', 1, 1, '6', '2020-03-18 08:47:37', '2020-03-18 08:47:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_invoices`
--
ALTER TABLE `customer_invoices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_invoices`
--
ALTER TABLE `customer_invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
