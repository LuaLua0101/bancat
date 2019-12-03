-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 12:49 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruit`
--

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE `cate` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `pos` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`id`, `title`, `slug`, `description`, `pos`, `created_at`, `updated_at`) VALUES
(1, 'TRÁI CÂY NHẬP KHẨU', 'trai-cay-nhap-khau', 'TẤT CẢ CÁC LOẠI TRÁI CÂY TƯƠI NHẬP KHẨU THEO MÙA TỪ NHIỀU NƯỚC TRÊN THẾ GIỚI', 1, '2019-11-11 23:32:57', '2019-11-11 23:45:46'),
(2, 'TRÁI CÂY ĐẶC SẢN VIỆT NAM', 'trai-cay-dac-san-viet-nam', 'TRÁI CÂY ĐẶC SẢN VIỆT NAM THEO MÙA, CHUẨN ORGANIC, VIET GAP, GLOBAL GAP', 2, '2019-11-11 23:32:57', '2019-11-11 23:32:57'),
(3, 'THỰC PHẨM DINH DƯỠNG', 'thuc-pham-dinh-duong', 'THEO TIÊU CHÍ, KHÔNG CHỈ THƠM NGON MÀ CÒN PHẢI BỔ DƯỠNG, TỐT CHO SỨC KHỎE ... HEALTHY FOOD', 3, '2019-11-11 23:32:57', '2019-11-11 23:32:57'),
(4, 'GIỎ QUÀ, HỘP QUÀ CAO CẤP', 'gio-qua-hop-qua-cao-cap', 'GIỎ TRÁI CÂY, HỘP QUÀ TRÁI CÂY KIỂU DÁNG ĐA DẠNG, SANG TRỌNG, ĐẸP MẮT, TINH TẾ', 4, '2019-11-11 23:32:57', '2019-11-11 23:33:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
