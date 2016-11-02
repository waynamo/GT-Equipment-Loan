-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 04:54 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `equipment_loan`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_users`
--

CREATE TABLE `app_users` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) DEFAULT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `email_address` varchar(256) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_lastchanged` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_users`
--

INSERT INTO `app_users` (`id`, `username`, `password`, `firstname`, `lastname`, `email_address`, `date_created`, `date_lastchanged`) VALUES
(8, 'apac\\wongwaic', NULL, 'Wai Chong', 'Wong', 'waichong.wong@ihg.com', '2016-11-02 16:53:00', NULL),
(7, 'apac\\wongwaic', NULL, 'Wai Chong', 'Wong', 'waichong.wong@ihg.com', '2016-11-02 16:53:00', NULL),
(6, 'apac\\wongwaic', NULL, 'Wai Chong', 'Wong', 'waichong.wong@ihg.com', '2016-11-02 04:52:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(11) NOT NULL,
  `equip_name` varchar(1024) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `equip_name`, `date_added`) VALUES
(2, 'HP Laptop-Presentation Laptop', '2016-10-25 03:50:07'),
(3, 'HP Power Adapter - 90W', '2016-10-25 03:51:26'),
(4, 'Apple Display Port-VGA converter', '2016-10-25 03:52:35'),
(6, 'Logitech Clicker - R800', '2016-10-26 03:28:41'),
(7, 'HP Laptop-ROC Laptop', '2016-10-26 08:25:44'),
(8, 'iPhone 6 - 16GB', '2016-10-26 08:30:36'),
(9, 'Power cable with adapter', '2016-10-27 06:54:07'),
(10, 'DVD ROM (with USB cable)', '2016-10-27 06:54:31'),
(11, 'iPhone charger', '2016-10-27 06:54:39'),
(12, 'iPhone 5 - 16GB', '2016-10-27 06:54:53'),
(13, 'Mouse', '2016-10-27 07:33:22'),
(14, 'Keyboard', '2016-10-27 07:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(11) NOT NULL,
  `equip_name` varchar(128) NOT NULL,
  `serial_num` varchar(64) NOT NULL DEFAULT '''NA''',
  `loan_date` date NOT NULL,
  `loan_by` varchar(256) NOT NULL,
  `loan_email` varchar(1024) NOT NULL,
  `issue_by` varchar(256) NOT NULL,
  `return_date` date DEFAULT NULL,
  `return_by` varchar(256) DEFAULT NULL,
  `receive_by` varchar(256) DEFAULT NULL,
  `remarks` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `equip_name`, `serial_num`, `loan_date`, `loan_by`, `loan_email`, `issue_by`, `return_date`, `return_by`, `receive_by`, `remarks`) VALUES
(2, 'Laptop', 'GT Presentation Laptop', '2016-10-21', 'Bernard Yong', '', 'Serene Pek', '2016-10-21', '', '', ''),
(3, 'iPhone 5-Black', '4322423309884233', '2016-10-21', 'Jerome Goh', '', 'Wai Chong', '2016-10-21', '', '', ''),
(4, 'Laptop Charger', '90W', '2016-10-21', 'Eisuke Yokoyama', '', 'Carlos Cinco', '2016-10-21', '', '', ''),
(5, 'Apple Display Port-VGA converter', '', '2016-10-26', 'Thiraphon', '', 'Wai Chong', NULL, NULL, NULL, ''),
(6, 'HP Laptop-Presentation Laptop', '', '2016-10-26', 'Colin Fernandez', '', 'Bernard Yong', NULL, NULL, NULL, ''),
(7, 'HP Power Adapter - 90W', '', '2016-10-26', 'Sheena Forn', 'sheena.forn@ihg.com', 'Bernard Yong', '2016-10-27', 'Jerome Goh', 'Wai Chong Wong', 'For travel use.'),
(8, 'HP Laptop-Presentation Laptop', '', '2016-10-26', 'Aishah Rahman', 'aishah.rahman@ihg.com', 'Bernard Yong', NULL, NULL, NULL, ''),
(9, 'HP Laptop-Presentation Laptop', '', '2016-10-26', 'Aishah Rahman', 'aishah.rahman@ihg.com', 'Bernard Yong', '2016-10-27', 'Sharon Yuen', 'Carlos Cinco', ''),
(10, 'HP Laptop-Presentation Laptop', '', '2016-10-26', 'Aishah Rahman', 'aishah.rahman@ihg.com', 'Bernard Yong', '2016-10-27', 'Aishah Rahman', 'Wai Chong Wong', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_users`
--
ALTER TABLE `app_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_users`
--
ALTER TABLE `app_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
