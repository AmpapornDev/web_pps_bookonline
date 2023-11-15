-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2023 at 06:21 AM
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
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(10) NOT NULL,
  `name_member` varchar(300) NOT NULL,
  `lastname_member` varchar(300) NOT NULL,
  `email_member` varchar(300) NOT NULL,
  `password_member` varchar(32) NOT NULL,
  `image_member` varchar(100) NOT NULL,
  `mobile_member` varchar(15) NOT NULL,
  `address_member` text NOT NULL,
  `province_member` varchar(100) NOT NULL,
  `amphur_member` varchar(100) NOT NULL,
  `district_member` varchar(100) NOT NULL,
  `postcode_member` int(5) NOT NULL,
  `add_datetime` datetime NOT NULL,
  `update_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `name_member`, `lastname_member`, `email_member`, `password_member`, `image_member`, `mobile_member`, `address_member`, `province_member`, `amphur_member`, `district_member`, `postcode_member`, `add_datetime`, `update_datetime`) VALUES
(1, 'อำภาพร', 'บวรรัตนศิลป์', 'am.yinghunter@gmail.com', '04615492bd8d9970fb4587e7e77b216e', '', '0612490000', 'เลขที่ 222 บุษราคัม Terrace พุทธมณฑลสาย 2', 'กรุงเทพฯ', 'ทวีวัฒนา', 'ศาลาธรรมสพน์', 10170, '2023-11-10 11:38:07', '2023-11-10 11:38:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
