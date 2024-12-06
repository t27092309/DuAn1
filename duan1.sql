-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 04:21 PM
-- Server version: 9.0.1
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id_bill` int NOT NULL,
  `total_price` int NOT NULL,
  `id_user` int NOT NULL,
  `phuongthuc_thanhtoan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `quantity_product` int NOT NULL,
  `price_product` int NOT NULL,
  `id_bill` int NOT NULL,
  `id_product` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int NOT NULL,
  `name_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(1, 'Category1'),
(2, 'Văn học'),
(3, 'Sách Thiếu Nhi');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int NOT NULL,
  `title_product` varchar(100) NOT NULL,
  `img_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price_product` int NOT NULL,
  `description_product` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_category` int NOT NULL,
  `author_product` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `title_product`, `img_product`, `price_product`, `description_product`, `id_category`, `author_product`) VALUES
(4, '321234567890', '/Source/IMG/Hành Trình Đi Theo Chân.webp', 123, '123', 1, '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `address`, `phone`, `description`, `role`) VALUES
(3, 'admin', 'admin@gmail.com', '$2y$10$SMtr4XPfgLHja32XoCIQ1e.Q7B4RywgFc21sp/36/ax8PX9/wuR2G', NULL, NULL, '', 1),
(5, 'rgfdgdf', 'erertrtrt@gmail.com', '$2y$10$p4DCJDTkIggUeRev6/spy.oc12RyW29mTCFt7Gykc270SjNf4FIiy', NULL, NULL, '', 0),
(6, 'hoang123', 'hoangtvhph53463@gmail.com', '$2y$10$UymIdMdindyuXQBP5AszSOjzppqa.x6HNHyQEN7usaU8BYtImmtcG', NULL, NULL, '', 0),
(7, 'admin', 'hoangtvhph53463@gmail.com', '$2y$10$GUssbOLB95elvr7UOjZ4guiVUFJkfwxKwBjDugO.I20ZiTpfPNdoO', NULL, NULL, '', 0),
(8, 'hoagn', 'hoangtvhph53463@gmail.com', '$2y$10$BEANf7EAnkgUxMvO0rz32.YmW017ny2M7.d/UdLwSIe8pNsXsYo7u', NULL, NULL, '', 0),
(9, 'hoagn', 'hoanghh@gmail.com', '$2y$10$73G1zyRrCaaEiapjsAsgaecBUTp9V1Wh2BvYPbO/DeFy4GCGVVh6.', NULL, NULL, '', 0),
(11, 'user dep zai', 'user@gmail.com', '$2y$10$XGn.kMmPSJdXc2OwHMdz9.ChHXJa./c5rDCkIqcsnFRnj238eF8hy', '551/263/22 Lê Văn Khương', '0949652939', 'ghi chu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
