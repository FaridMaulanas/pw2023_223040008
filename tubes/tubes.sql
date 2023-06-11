-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 12:06 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `harga` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `gambar`, `nama_barang`, `deskripsi`, `harga`) VALUES
(1, 'blackovs.jpg', 'Black Oversized Shirt', 'our stylish and versatile shirt, designed to elevate your wardrobe with its timeless appeal and impeccable craftsmanship. Crafted from premium quality fabrics, this shirt offers a comfortable fit and a luxurious feel against your skin.', 15),
(2, 'washedovs.jpg', 'Washed Oversized Shirt', 'our stylish and versatile shirt, designed to elevate your wardrobe with its timeless appeal and impeccable craftsmanship. Crafted from premium quality fabrics, this shirt offers a comfortable fit and a luxurious feel against your skin.', 15),
(3, 'darkgreyovs.jpg', 'Darkgrey Oversized Shirt', 'our stylish and versatile shirt, designed to elevate your wardrobe with its timeless appeal and impeccable craftsmanship. Crafted from premium quality fabrics, this shirt offers a comfortable fit and a luxurious feel against your skin.', 15),
(4, 'turqoiseovs.jpg', 'Turqoise Oversized Shirt', 'our stylish and versatile shirt, designed to elevate your wardrobe with its timeless appeal and impeccable craftsmanship. Crafted from premium quality fabrics, this shirt offers a comfortable fit and a luxurious feel against your skin.', 15),
(5, 'lilacovs.jpg', 'Lilac Oversized Shirt', 'our stylish and versatile shirt, designed to elevate your wardrobe with its timeless appeal and impeccable craftsmanship. Crafted from premium quality fabrics, this shirt offers a comfortable fit and a luxurious feel against your skin.', 15),
(6, 'orangeovs.jpg', 'Orange Oversized Shirt', 'our stylish and versatile shirt, designed to elevate your wardrobe with its timeless appeal and impeccable craftsmanship. Crafted from premium quality fabrics, this shirt offers a comfortable fit and a luxurious feel against your skin.', 15),
(11, 'bluehd.jpg', 'Blue Oversized Hoodie', 'ESSENTIALS Hoodie in sweatshirt fabric made from a cotton blend. Relaxed fit with a jersey-lined, drawstring hood, a kangaroo pocket, long sleeves and wide ribbing at the cuffs and hem. Soft brushed inside.', 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(3, 'Farid', 'stazard12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(4, 'daffa', 'daffa123@gmail.com', 'c33367701511b4f6020ec61ded352059', 'user'),
(5, 'Jethira', 'JBTZ@gmail.com', 'd5e951c98e2e3d4be9846fc539fff491', 'user'),
(6, 'alfaboy', 'alfa9@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user'),
(7, 'algi', 'algi29@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(8, 'haifan', 'haifan@gmail.com', '67cd2a9b37f3a5053853f0db912d22d7', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
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
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
