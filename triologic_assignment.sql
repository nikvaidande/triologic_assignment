-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 07, 2023 at 09:01 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triologic_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees_list`
--

CREATE TABLE `employees_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees_list`
--

INSERT INTO `employees_list` (`id`, `name`, `company_name`, `designation`, `email`, `created_at`) VALUES
(12, 'name one', 'company one', 'designation one', 'email1@gmail.com', '2023-10-07 07:49:29'),
(13, 'name two', 'company two', 'designation two', 'email2@gmail.com', '2023-10-07 07:49:29'),
(15, 'name one', 'company one', 'designation one', 'email1@gmail.com', '2023-10-07 07:49:29'),
(16, 'name two', 'company two', 'designation two', 'email2@gmail.com', '2023-10-07 07:49:29'),
(17, 'name one', 'company one', 'designation one', 'email1@gmail.com', '2023-10-07 07:49:29'),
(24, 'name two', 'company two', 'designation two', 'email2@gmail.com', '2023-10-07 07:49:29'),
(29, 'name one', 'company one', 'designation one', 'email1@gmail.com', '2023-10-07 07:49:29'),
(30, 'name two', 'company two', 'designation two', 'email2@gmail.com', '2023-10-07 07:49:29'),
(31, 'name one', 'company one', 'designation one', 'email1@gmail.com', '2023-10-07 07:49:29'),
(50, 'name one', 'company one', 'designation one', 'email1@gmail.com', '2023-10-07 07:49:29'),
(51, 'name two', 'company two', 'designation two', 'email2@gmail.com', '2023-10-07 07:49:29'),
(52, 'name one', 'company one', 'designation one', 'email1@gmail.com', '2023-10-07 07:49:29'),
(53, 'name two', 'company two', 'designation two', 'email2@gmail.com', '2023-10-07 07:49:29'),
(54, 'name one', 'company one', 'designation one', 'email1@gmail.com', '2023-10-07 07:49:29'),
(55, 'name two', 'company two', 'designation two', 'email2@gmail.com', '2023-10-07 07:49:29'),
(56, 'name one', 'company one', 'designation one', 'email1@gmail.com', '2023-10-07 07:49:29'),
(57, 'name two', 'company two', 'designation two', 'email2@gmail.com', '2023-10-07 07:49:29'),
(58, 'name one', 'company one', 'designation one', 'email1@gmail.com', '2023-10-07 07:49:29'),
(59, 'test', 'test', 'test designation', 'test@gmail.com', '2023-10-07 08:36:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees_list`
--
ALTER TABLE `employees_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees_list`
--
ALTER TABLE `employees_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
