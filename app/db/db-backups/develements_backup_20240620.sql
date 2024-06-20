-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2024 at 11:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `develements`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_accounts`
--

CREATE TABLE `cms_accounts` (
  `cms_id` int(11) NOT NULL,
  `cms_username` text NOT NULL,
  `cms_login` text NOT NULL,
  `cms_password` text NOT NULL,
  `cms_position` text NOT NULL,
  `cms_createdDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `cms_lastModified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `front_page`
--

CREATE TABLE `front_page` (
  `fp_id` int(11) NOT NULL,
  `fp_url` text NOT NULL,
  `fp_nr` int(11) NOT NULL,
  `fp_createdDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `fp_lastModified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fp_deletedDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recenties`
--

CREATE TABLE `recenties` (
  `r_id` int(11) NOT NULL,
  `r_customerName` text NOT NULL,
  `r_message` mediumtext NOT NULL,
  `r_createdDate` datetime NOT NULL DEFAULT current_timestamp(),
  `r_lastModified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `r_deletedDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `s_name` text NOT NULL,
  `s_descr` mediumtext NOT NULL,
  `s_createdDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `s_lastModifed` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `s_deletedDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_accounts`
--
ALTER TABLE `cms_accounts`
  ADD PRIMARY KEY (`cms_id`);

--
-- Indexes for table `front_page`
--
ALTER TABLE `front_page`
  ADD PRIMARY KEY (`fp_id`);

--
-- Indexes for table `recenties`
--
ALTER TABLE `recenties`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_accounts`
--
ALTER TABLE `cms_accounts`
  MODIFY `cms_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_page`
--
ALTER TABLE `front_page`
  MODIFY `fp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recenties`
--
ALTER TABLE `recenties`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
