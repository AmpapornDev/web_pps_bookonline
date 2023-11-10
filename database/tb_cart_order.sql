-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2023 at 04:22 AM
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
  `add_cart_order` datetime NOT NULL,
  `update_cart_order` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_cart_order`
--

INSERT INTO `tb_cart_order` (`id_cart_order`, `id_payment`, `id_member`, `id_book`, `name_book`, `price_book`, `qty_book`, `add_cart_order`, `update_cart_order`) VALUES
(74, 0, 1, 19, 'บ้านเล็กริมห้วย (ชุดบ้านเล็ก เล่ม 4)', 198, 1, '2023-11-09 10:47:07', '2023-11-09 10:47:07'),
(75, 0, 1, 29, 'กาลครั้งหนึ่ง ณ กาลาปากอส', 145, 2, '2023-11-09 10:57:04', '2023-11-09 10:57:04'),
(77, 0, 1, 14, 'Miracles เพราะเธอคือ...ปาฏิหาริย์', 59, 1, '2023-11-09 11:22:17', '2023-11-09 11:22:17');

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
  MODIFY `id_cart_order` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
