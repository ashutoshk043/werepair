-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 07:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `werapair`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_feedback`
--

CREATE TABLE `users_feedback` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `umobile` bigint(255) NOT NULL,
  `ufeedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_feedback`
--

INSERT INTO `users_feedback` (`id`, `uname`, `uemail`, `umobile`, `ufeedback`) VALUES
(1, 'Ashutosh Kumar', 'ashutoshk043@gmail.com', 8887592130, 'Nice service, Keep it up.'),
(2, 'Utkarsh Kumar', 'utkarshk043@gmail.com', 9559356173, 'Best service I had ever seen. I give you 7 stars⭐⭐⭐⭐⭐⭐⭐.'),
(3, 'Rosy fernandis', 'rosy@123', 9857485954, 'Thanks a lot to we repair.com team, must try one time.'),
(4, 'Sony didusa', 'sony@123.com', 8574854784, '💕💕💕💕💕💕💕💕💕💕 Lovely.'),
(5, 'Aman enterprises', 'aman@123.com', 5485798458, 'Better service 5 ⭐⭐⭐⭐⭐.');

-- --------------------------------------------------------

--
-- Table structure for table `user_registation`
--

CREATE TABLE `user_registation` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `umobile` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registation`
--

INSERT INTO `user_registation` (`id`, `uname`, `uemail`, `upass`, `umobile`) VALUES
(1, 'Ashutosh kumar', 'ashutoshk043@gmail.com', '$2y$10$f6geqUxb.h45Q9nv0R4.l.lAOkebbSdNIeSpAVYVMyF6pQwMa3bSm', 8887592130);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_feedback`
--
ALTER TABLE `users_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registation`
--
ALTER TABLE `user_registation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_feedback`
--
ALTER TABLE `users_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_registation`
--
ALTER TABLE `user_registation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
