-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2025 at 12:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b2_minibazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `image` varchar(40) NOT NULL,
  `details` varchar(100) NOT NULL,
  `sale_price` varchar(5) NOT NULL,
  `fake_price` varchar(5) NOT NULL,
  `cost_price` varchar(5) NOT NULL,
  `stock` varchar(5) NOT NULL,
  `status` varchar(2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `image`, `details`, `sale_price`, `fake_price`, `cost_price`, `stock`, `status`, `date`) VALUES
(1, 'pen', '1234', 'pen.jpg', 'pen', '30', '40', '0', '0', '1', '2025-08-07 15:49:00'),
(2, 'pencil', '4567', 'pencil.jpg', 'pencil', '10', '12', '0', '0', '0', '2025-08-07 15:52:34'),
(3, 'bag', '4545', 'bag.jpg', 'bag', '600', '700', '0', '0', '0', '2025-08-07 16:00:13'),
(4, 'laptop', '5566', 'laptop.jpg', 'macbook', '60000', '70000', '0', '0', '0', '2025-08-07 16:19:33'),
(5, 'bottel', '7788', 'bottel.jpg', 'bottel', '60', '70', '0', '0', '0', '2025-08-07 16:20:28'),
(6, 'charger', '7788', 'MB20250808120842.jpg', 'charger', '1000', '1100', '0', '0', '1', '2025-08-08 15:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `invno` varchar(10) NOT NULL,
  `vid` varchar(5) NOT NULL,
  `pid` varchar(5) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `user_type` varchar(2) NOT NULL COMMENT '1 = user , 2 = admin',
  `status` varchar(2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `address`, `mobile`, `user_type`, `status`, `date`) VALUES
(1, 'admin', '1234', 'minibazar', '', '', '2', '1', '2025-08-06 15:28:04'),
(2, 'ravi', '1234', 'ravi kumar', 'ranchi', '8787878787', '1', '1', '2025-08-06 15:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(11) NOT NULL,
  `shop_name` varchar(20) NOT NULL,
  `owner_name` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gst` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `status` varchar(2) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `shop_name`, `owner_name`, `mobile`, `email`, `gst`, `address`, `status`, `date`) VALUES
(1, 'abcd', 'amit', '3456', 'fgh', '567', 'ranchi', '1', '2025-08-12 15:45:02'),
(2, 'f', 'f', 'f', 'f', 'f', 'f', '0', '2025-08-12 15:46:09'),
(3, 'f', 'h', 'j', 'l', 'j', 'j', '0', '2025-08-12 15:46:33'),
(4, 'xyz shop', 'raju', '56789', 'dfgh', '44556', 'ranchi', '1', '2025-08-12 15:47:47'),
(5, 'h', 'h', 'h', 'h', 'h', 'h', '0', '2025-08-12 15:48:10'),
(6, 'df', 'g', 'j', '', 'g', 'h', '0', '2025-08-12 15:48:41'),
(7, 'f', 'h', '', 'j', 'g', 'h', '0', '2025-08-12 15:49:19'),
(8, 'n', 'n', 'n', 'n', 'n', 'n', '0', '2025-08-12 15:55:54'),
(9, 'kalam', 'raja', '5678', 'raja', '5678', 'bokaro', '1', '2025-08-13 15:38:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
