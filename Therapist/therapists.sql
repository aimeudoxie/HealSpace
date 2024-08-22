-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 06:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `theme` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `marital` varchar(50) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `theme`, `age`, `marital`, `occupation`, `location`, `role`) VALUES
(1, 280878844, 'Eudoxie', 'UMWARI', 'eudoxieumwali@gmail.com', '44fb4122572909c7355de1147033e77a', '1716127086Umwari Eudoxie_photo.jpg', 'Online', '', NULL, NULL, NULL, NULL, NULL),
(2, 1327443929, 'UMUKOBWA', 'Divine', 'divine@gmail.com', '67d46ec7d84ba284982e634970c5b7df', '1716130119Screenshot 2024-02-23 082650.png', 'Online', '', NULL, NULL, NULL, NULL, NULL),
(3, 135126718, 'agaba', 'agaba', 'agaba@gmail.com', '79ef2317eeecc97f8278ab56d673d9c3', '1716281842avatar.jpg', 'Offline', '', NULL, NULL, NULL, NULL, NULL),
(4, 1627967223, 'bebe', 'bebe', 'bebe@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1716304252images.png', 'Offline', '', 23, 'single', 'self-employed', 'employed', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
