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
-- Table structure for table `tb_cart_order`
--

CREATE TABLE `tb_cart_order` (
  `id_cart_order` int(10) NOT NULL,
  `id_payment` int(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `id_book` int(10) NOT NULL,
  `name_book` varchar(350) NOT NULL,
  `price_book` decimal(10,0) NOT NULL,
  `qty_book` int(3) NOT NULL,
  `status_cart_order` varchar(10) NOT NULL,
  `add_cart_order` datetime NOT NULL,
  `update_cart_order` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_cart_order`
--

INSERT INTO `tb_cart_order` (`id_cart_order`, `id_payment`, `id_member`, `id_book`, `name_book`, `price_book`, `qty_book`, `status_cart_order`, `add_cart_order`, `update_cart_order`) VALUES
(86, 20, 1, 29, 'กาลครั้งหนึ่ง ณ กาลาปากอส', 145, 1, 'success', '2023-11-14 08:56:39', '2023-11-14 08:56:39'),
(88, 21, 1, 50, 'คุณแม่ของฉันเจ๋งที่สุด', 130, 1, 'success', '2023-11-14 11:48:55', '2023-11-14 11:48:55'),
(89, 21, 1, 30, 'ต้นส้มแสนรัก ภาค2', 169, 1, 'success', '2023-11-14 12:36:15', '2023-11-14 12:36:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cart_order`
--
ALTER TABLE `tb_cart_order`
  ADD PRIMARY KEY (`id_cart_order`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cart_order`
--
ALTER TABLE `tb_cart_order`
  MODIFY `id_cart_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
