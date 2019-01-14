-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 06:47 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodmauhalla`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `plan` varchar(60) NOT NULL,
  `price` int(20) NOT NULL,
  `source` varchar(60) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `plan`, `price`, `source`, `comment`, `paid`) VALUES
(18, 'rohitsharma', 'sharma123@gmail.com', 'Sharma123@', 'PREMIUM', 399, 'ad', 'cdsFas', 1),
(19, 'mummy', 'mummy123@gmail.com', 'Mummy123@', 'abc', 100, 'search', 'fasgfa', 1),
(20, 'MohdAis', 'MohdAis123@gmail.com', 'MohdAis123@', 'PRO', 149, 'friends', 'ggasgawr', 1),
(21, 'Kajal', 'Kajal123@gmail.com', 'Kajal123@', 'PREMIUM', 399, 'other', 'zfsvfsfgvdfsgdf', 1),
(22, 'Amit', 'Amit123@gmail.com', 'Amit123@', 'STARTER', 19, 'friends', 'asdf;lkjh', 1),
(23, 'riteshy', 'r@r.com', 'Rkp@12345', 'STARTER', 19, 'friends', 'dfsf', 1),
(24, 'Himalaya', 'Himalaya@gmail.com', 'Himalaya@123', 'STARTER', 19, 'search', 'nj kjbkjbk', 1),
(25, 'Zero', 'Zero123@gmail.com', 'Zero123@', 'STARTER', 19, 'friends', 'fasfsf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
