-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 10:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parfum`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebagai` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `sebagai`, `password`, `remember_token`, `no_hp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'ira1234', 'admin', '$2y$10$AUEwVazGybRIluoJyP8DKOP4H0XMmwoWw9clATvuBLKfTB7x97YKG', 'gOma63aKOE9jjggFdfOaWoJTITV9X0TezI4x7GcXUOLBRI3cGD7sbtq3h7vU', '', '', '2019-08-07 03:03:29', '2019-08-07 03:03:29'),
(3, 'sarah123', 'user', '$2y$10$2YCrq716w1T16CbarbLDv.kONCANkuvRYJe61G2kqq1CPSDh9hC9.', '9Kbh6N1Gu986bjcgcy5C9n7SqKOBNz6vK8wW7qSHbvG0g1pWP8kyr3z1i1FT', '082126666222', 'Setra Sari', '2019-08-08 02:48:03', '2019-08-08 02:48:03'),
(4, 'apipah12', 'user', '$2y$10$Kqmj3H4zTBKh3JwMWCkS2.T3v87zKqKW/v3CCNWn/O4dGnubqmIRW', 'ifOfq7JS5tA32QcSqE4mfQtYuyvJQVXqv0jyYCLTm7wR1kHHeJoshX58a7do', '081321657465', 'Pagarsih', '2019-08-08 22:44:53', '2019-08-08 22:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_01_073252_create_t_produk', 1),
(2, '2019_08_01_124901_create_t_members', 2),
(3, '2019_08_03_133908_create_t_login', 3),
(4, '2019_08_06_103042_create_t_login', 4),
(5, '2019_08_06_110652_create_login', 5);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `nama`, `jumlah`, `harga`, `created_at`, `updated_at`) VALUES
(4, 'Lancome', '1', '50000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_produk`
--

CREATE TABLE `t_produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_produk`
--

INSERT INTO `t_produk` (`id`, `nama`, `photo`, `harga`, `created_at`, `updated_at`) VALUES
(7, 'Gucci', '1565267542_Gucci.jpg', '900000.00', '2019-08-08 05:32:23', '2019-08-08 05:32:23'),
(8, 'Coco Chanel', '1565267578_chanel.jpg', '800000.00', '2019-08-08 05:32:58', '2019-08-08 05:32:58'),
(9, 'Sacre', '1565267618_Sacre.jpg', '45000.00', '2019-08-08 05:33:38', '2019-08-08 05:33:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_produk`
--
ALTER TABLE `t_produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_produk`
--
ALTER TABLE `t_produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
