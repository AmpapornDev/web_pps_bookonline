-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2023 at 06:20 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_book`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_acc_bank`
--

CREATE TABLE `tb_acc_bank` (
  `id_acc_bank` int(10) NOT NULL,
  `name_acc_bank` varchar(300) NOT NULL,
  `name_bank` varchar(300) NOT NULL,
  `id_admin` int(10) NOT NULL,
  `update_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_acc_bank`
--

INSERT INTO `tb_acc_bank` (`id_acc_bank`, `name_acc_bank`, `name_bank`, `id_admin`, `update_datetime`) VALUES
(1, '', 'ธนาคารกรุงเทพ', 1, '2023-11-13 08:11:14'),
(2, '', 'ธนาคารกสิกรไทย', 1, '2023-11-13 08:11:40'),
(3, '', 'ธนาคารกรุงไทย', 1, '2023-11-13 08:11:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_acc_bank`
--
ALTER TABLE `tb_acc_bank`
  ADD PRIMARY KEY (`id_acc_bank`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_acc_bank`
--
ALTER TABLE `tb_acc_bank`
  MODIFY `id_acc_bank` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
