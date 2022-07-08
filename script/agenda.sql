-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 11:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactos`
--

INSERT INTO `contactos` (`id`, `name`, `phone`, `date`, `address`, `email`) VALUES
(27, 'laura ', '3224730550', '2008-01-08', 'calle 23 13 34', 'lalithaxd19987@gmail.com'),
(28, 'Carlos ', '3224720550', '1988-06-30', 'calle 23', 'lzabala@intelligencetv.co');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

