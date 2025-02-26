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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `login` varchar(30) NOT NULL,
  `mdp` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`login`, `mdp`, `mail`, `id`) VALUES
('mon_login', 'mon_mdp', 'mail@mail.com', 1),
('nans', 'mdp_nans', 'nans.mail@mail.com', 2),
('nico bellek', 'mdp_de_nico', 'nico.mail@mail.com', 3),
('jean', 'mdp_de_jean', 'jean@gmail.com', 4),
('jean', 'mdp_de_jean', 'jean@gmail.com', 5),
('jean', 'mdpdejean', 'jean@gmail.com', 6),
('yves', 'mdpdeyves', 'yves@gmail.com', 7),
('johan', 'johanmdp', 'johan@grossefolle.com', 8),
('adam', 'adamlamenace', 'adam@gmail.com', 9),
('jean pierre', 'mdpjean', 'jean.pierre@gmail.com', 10),
('julian', 'aaaalo', 'julian@gmail.com', 11),
('user3', 'mdp87', 'user3@gmail.com', 12),
('un_autre_login', 'un_mdp', 'un_email', 13),
('atfstufazafzdstazftuzdfutf', 'dazeazedezead', 'qzdqzedqzdzqe', 26),
('momo', 'mdpmomo', 'momo@momo.momo', 27),
('silvio', 'mdp', 'lasivioterie@gmail.com', 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
