-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2025 at 05:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--
CREATE DATABASE IF NOT EXISTS `shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shop`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(7) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_detail` text NOT NULL,
  `p_price` float(9,2) NOT NULL,
  `p_ext` varchar(50) NOT NULL,
  `c_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_ext`, `c_id`) VALUES
(1, 'อิฐมอญ 2 รู (เล็ก)', 'ขนาด 3 x 6 x 14 ซม.,น้ำหนัก 0.3 กก./ก้อน,ใช้ก่อ 140 ก้อน/ตร.ม.,ชักร่อง 1.5 ซม.', 0.90, 'png', 1),
(2, 'อิฐมอญ 2 รู (ใหญ่)', 'ขนาด 5 x 6 x 14.5 ซม.,น้ำหนัก 0.55 กก./ก้อน,ใช้ 100 ก้อน/ตร.ม.,ชักร่อง  1.5 ซม.', 1.00, 'png', 1),
(3, 'อิฐมอญ 2 รู (จัมโบ้)', 'ขนาด  6 x 6 x 15 ซม.,น้ำหนัก 0.7 กก./ก้อน,ใช้ก่อ 80 ก้อน/ตร.ม.,ชักร่อง 1.5 ซม.', 1.20, 'png', 1),
(4, 'อิฐมอญ 4 รู', 'ขนาด 5 x 6 x 14.5 ซม.,น้ำหนัก 0.55 กก./ก้อน,ใช้ก่อ 100 ก้อน/ตร.ม.,ชักร่อง 1.5 ซม.', 1.00, 'png', 2),
(5, 'อิฐมอญ 4 รู(ใหญ่)', 'ขนาด  6 x 6 x 15 ซม.,น้ำหนัก 0.70 กก./ก้อน,ใช้ก่อ 80 ก้อน/ตร.ม.,ชักร่อง 1.5 ซม.', 1.20, 'png', 2),
(6, 'อิฐมอญ 4 รู(จัมโบ้)', 'ขนาด 6 x 7 x 17.5 ซม.,น้ำหนัก 1 กก./ก้อน,ใช้ 62 ก้อน/ตร.ม.,เผาฟืน คุณภาพสูง', 1.50, 'png', 2),
(7, 'อิฐมอญ 3 รู', 'ขนาด 6 x 10 x 20 ซม.,น้ำหนัก 1.6 กก./ก้อน,ใช้ก่อผนัง 40 ก้อน/ตร.ม.,ชักร่อง 1.5 ซม.', 2.50, 'png', 5),
(8, 'อิฐ 4 ช่อง', 'ขนาด 6.5 x 11 x 25  ซม.,น้ำหนัก 1.8 กก./ก้อน,ก่อแนวตั้ง 30 ก้อน/ตร.ม.,ก่อแนวนอน 48 ก้อน/ตร.ม.', 7.00, 'png', 6),
(9, 'อิฐมอญ 8 รู', 'ขนาด 6 x 12 x 24 ซม.,น้ำหนัก 2.2 กก./ก้อน,ใช้ก่อ 30 ก้อน/ตร.ม.,เผาฟืน คุณภาพสูง', 4.50, 'png', 7),
(10, 'อิฐประสาน 2 ปุ่ม', 'ขนาด 10 x 12.5 x 25 ซม.,น้ำหนัก 4.8 กิโลกรัม/ก้อน,ใช้ก่อผนัง 40 ก้อน/ตร.ม.,ส่งขั้นต่ำ 500 ก้อน', 15.00, 'png', 8),
(11, 'อิฐประสาน ลายหินสกัด', 'ขนาด 10 x 12 x 24 ซม.,น้ำหนัก 4.8 กิโลกรัม/ก้อน,ใช้ 42 ก้อน/ตร.ม.,ส่งขั้นต่ำ 500 ก้อน', 18.00, 'png', 9),
(12, 'อิฐประสาน ลายเปลือกไม้', 'ขนาด 10 x 12 x 24 ซม. ,น้ำหนัก 4.8 กิโลกรัม/ก้อน,ใช้ 42 ก้อน/ตร.ม. , ส่งขั้นต่ำ 500 ก้อน', 18.00, 'png', 9),
(13, 'อิฐประสาน 3 ปุ่ม สีเทา', 'ขนาด 10 x 10 x 30 ซม.,น้ำหนัก 5.5 กิโลกรัม/ก้อน,ใช้ 34 ก้อน/ตร.ม', 16.00, 'png', 10),
(14, 'อิฐประสาน 2 ปุ่มใหญ่ สีเทา', 'ขนาด 10 x 12.5 x 25 ซม.,ใช้ 40 ก้อน/ตร.ม.', 16.00, 'png', 11),
(15, 'อิฐประสาน 2 ปุ่มเล็ก สีเทา', 'ขนาด 10 x 10 x 20 ซม.,ใช้ 50 ก้อน/ตร.ม.', 12.00, 'png', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
