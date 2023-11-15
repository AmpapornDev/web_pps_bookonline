-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2023 at 07:13 AM
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
-- Table structure for table `tb_book_category`
--

CREATE TABLE `tb_book_category` (
  `id_book_cate` int(10) NOT NULL,
  `name_book_cate` varchar(350) NOT NULL,
  `id_user` int(10) NOT NULL,
  `add_date` datetime NOT NULL,
  `edit_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_book_category`
--

INSERT INTO `tb_book_category` (`id_book_cate`, `name_book_cate`, `id_user`, `add_date`, `edit_date`) VALUES
(5, 'นวนิยาย', 0, '2023-10-25 09:41:08', '2023-10-25 10:46:29'),
(4, 'สารคดี', 0, '2023-10-25 09:40:34', '2023-10-25 09:40:34'),
(7, 'นิทาน 2 ภาษา', 0, '2023-11-02 11:26:30', '2023-11-02 11:26:30'),
(8, 'วรรณกรรมเยาวชน', 0, '2023-11-02 11:28:44', '2023-11-02 11:28:44'),
(9, 'How to', 0, '2023-11-02 11:37:50', '2023-11-02 11:37:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_book_category`
--
ALTER TABLE `tb_book_category`
  ADD PRIMARY KEY (`id_book_cate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_book_category`
--
ALTER TABLE `tb_book_category`
  MODIFY `id_book_cate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
