-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 08:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `jumlah` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id`, `order_id`, `product_id`, `jumlah`) VALUES
(50, 48, 13, 1),
(51, 49, 1, 1),
(52, 50, 14, 1),
(53, 50, 17, 1),
(54, 51, 13, 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tanggal_order` date DEFAULT curdate(),
  `alamat_pengiriman` varchar(255) DEFAULT NULL,
  `status` varchar(60) DEFAULT NULL,
  `payment_id` int(11) NOT NULL,
  `hargaTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `tanggal_order`, `alamat_pengiriman`, `status`, `payment_id`, `hargaTotal`) VALUES
(48, 4, '2024-06-22', 'Jalan Kenangan Rindu, Babakan Sapi', 'diproses', 2, 331890),
(49, 4, '2024-06-22', 'awdawdwa', 'diproses', 2, 387390),
(50, 4, '2024-06-22', 'Pakansari Stadion, Gate 5', 'diproses', 2, 987900),
(51, 8, '2024-06-23', 'awdwda', 'diproses', 2, 995670);

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `gambar` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `name`, `gambar`) VALUES
(1, 'dana', 'dana.png'),
(2, 'gopay', 'gopay.jpg'),
(3, 'linkaja', 'linkaja.png'),
(4, 'ovo', 'ovo.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `harga` int(12) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(120) DEFAULT NULL,
  `isDeleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `nama`, `harga`, `deskripsi`, `gambar`, `isDeleted`) VALUES
(1, 'Cosmic Mockup', 349000, 'FEARTEE JAYA JAYA JAYA', '66766bb3d6ab8.jpg', 0),
(2, 'Wake Up', 399000, 'hey gamers! nama kamu discover 12? pasti jago main valo ziizizizizi', 'Wake Up Mockup.jpg', 1),
(4, 'Warior of The Shadow', 359000, 'Are U a Viper? Cause I want u a lot xixixi', 'warrior of the shadows Mockup-picsay.jpg', 1),
(13, 'Japanese Adenese', 299000, 'The Japanese Shirt U Always Needed', 'Tokyo - Street Culture Mockup.jpg', 1),
(14, 'Doubling mocking', 299000, 'KURAANAMIIII', '66766bbe8450b.jpg', 0),
(15, 'Japanese Denim', 490000, 'This Is What You Wanted', '66766b4c88a22.jpg', 0),
(16, 'Kuronami', 400000, 'Kuronami Asdajsndlkjwn askjdnlk wjndlkjasn dkjanwd ', '6676b19eda13a.jpg', 0),
(17, 'awdw', 270000, 'Enak euy', '66771c0a059d1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `stock` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`, `stock`) VALUES
(1, 1, 1, 28),
(2, 1, 4, 34),
(3, 1, 2, 15),
(4, 2, 2, 40),
(5, 2, 4, 21),
(12, 13, 2, 90),
(13, 14, 2, 90),
(14, 15, 4, 90),
(15, 15, 5, 20),
(16, 15, 1, 90),
(17, 16, 1, 28),
(18, 16, 2, 1),
(19, 17, 4, 20);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `size` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `size`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L'),
(4, 'XL'),
(5, 'XXL');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `isAdmin`) VALUES
(4, 'pratamaega513@gmail.com', '$2y$10$pxqDVMEA6YKlKRv5Inyz.eAZ/WPAlvuEAUwzd.4bCxAuyT.pHHSb2', 'ega', 0),
(5, '1@gmail.com', '$2y$10$b6DbWeJnNjAmRfTGSGNv2Oy0h2Y8P17.E8aBb27tXdGnhrY6UW1pe', 'ananda', 0),
(6, '2@gmail.com', '$2y$10$1MRNF78u3rxmMicsWgRBFe8P1Ulylb21Sp6AScynrutnCeWw5TAF.', '2210511062', 0),
(8, 'admin@gmail.com', '$2y$10$LFl8eBmdXiPqd2L2.F2n6er4ZJdFku.pWnrbjqgJf2wfyIGHHNI/6', 'admins', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_order_ibfk_2` (`product_id`),
  ADD KEY `detail_order_ibfk_1` (`order_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `fk_payment_method_id` (`payment_id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`),
  ADD KEY `size_id` (`size_id`),
  ADD KEY `product_size_ibfk_1` (`product_id`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product_size` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_payment_method_id` FOREIGN KEY (`payment_id`) REFERENCES `payment_method` (`id`),
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `product_size`
--
ALTER TABLE `product_size`
  ADD CONSTRAINT `product_size_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_size_ibfk_2` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
