-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 03:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES
(1, 'Ahua', 'Christopher', 'ahuachris@gmail.com', '2020-08-07 13:15:04'),
(2, 'Pever', 'Collins', 'collinsecady@gmail.com', '2020-08-05 08:45:41'),
(5, 'Shagbaor', 'Rex', 'fagarex@gmail.com', '2020-08-07 13:12:44'),
(6, 'Shie', 'Paul', 'paulshie@gmail.com', '2020-08-05 09:16:13'),
(7, 'Agenaton', 'Kezziah', 'agenatonkez@gmail.com', '2020-08-05 09:16:13'),
(8, 'Agenaton', 'Tersoo', 'chochomayoki@gmail.com', '2020-08-05 09:16:13'),
(9, 'Agenaton', 'David', 'profton@gmail.com', '2020-08-05 09:16:13'),
(10, 'Ahor', 'Shidoon', 'shidoonmercy@gmail.com', '2020-08-05 11:34:33'),
(11, 'Aondowase', 'Mercy', 'stephenmercy@gmail.com', '2020-08-05 11:34:33'),
(12, 'Ali', 'Confidence', 'queenpearl@gmail.com', '2020-08-05 11:34:33'),
(13, 'Edeh', 'Sarah', 'edehsaraphinal@gmail.com', '2020-08-05 11:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`, `role`) VALUES
(19, 'Shidoon', 'ahorsark@gmail.com', 'nnnnnnnnnnnnnnn', 1, 'Member'),
(28, 'Ahor', 'shidoonmercy@gmail.com', 'password', 1, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
