-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 19, 2024 at 02:07 PM
-- Server version: 10.11.3-MariaDB
-- PHP Version: 8.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ma-database`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `nom`, `prenom`, `mail`) VALUES
(1, 2, 'csqcdqs', 'dsCDSQ', 'SCdq'),
(2, 27, 'henni', 'alo', 'alo@gmail.com'),
(3, 27, 'reafre', 'fzafaz\"', 'freaeaffe'),
(4, 27, 'utils', 'sazz', 'saaaaa'),
(5, 2, 'sGFZQF', 'SQRFQEFRQE', 'QSFQE'),
(6, 2, 'S<FQZEQZF', 'QSFESQ', 'QSFEQQE'),
(7, 2, 'sqfcsz', 'SCFSZE', 'EQAFCZ'),
(8, 2, 'NANS', 'SSS', 'SS'),
(9, 2, '<sqq', 'sqfq', 'zqFFQ'),
(10, 28, 'camille', 'ddd', 'ddd'),
(11, 28, 'qqd', 'qqqd', 'qdqd'),
(12, 28, 'qdqq', 'dd', 'qqq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
