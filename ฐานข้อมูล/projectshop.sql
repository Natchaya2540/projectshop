-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 03:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpId` int(11) NOT NULL,
  `address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `tel` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_15_200618_create_product_types_table', 1),
(4, '2019_10_15_200824_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_orders` bigint(20) NOT NULL,
  `order_date` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_time` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_EmpId` int(11) NOT NULL,
  `send_orders_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `send_has_orders_status_ID` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`updated_at`, `created_at`, `id_orders`, `order_date`, `order_time`, `employee_EmpId`, `send_orders_ID`, `user_ID`, `send_has_orders_status_ID`) VALUES
('2020-03-10 13:39:09', '2020-03-10 13:39:09', 250, '2020-03-18', '23:59', 0, 0, 23, ''),
('2020-03-10 13:42:12', '2020-03-10 13:42:12', 251, '2020-03-18', '23:59', 0, 0, 23, ''),
('2020-03-10 13:42:30', '2020-03-10 13:42:30', 252, '2020-03-18', '23:59', 0, 0, 23, ''),
('2020-03-10 13:44:39', '2020-03-10 13:44:39', 253, '2020-03-18', '19:59', 0, 0, 23, ''),
('2020-03-10 13:46:32', '2020-03-10 13:46:32', 254, '2020-03-26', '23:59', 0, 0, 23, ''),
('2020-03-10 13:48:15', '2020-03-10 13:48:15', 255, '2020-03-26', '23:59', 0, 0, 23, ''),
('2020-03-10 13:48:41', '2020-03-10 13:48:41', 256, '2020-03-26', '23:59', 0, 0, 23, ''),
('2020-03-10 13:51:41', '2020-03-10 13:51:41', 257, '2020-03-05', '23:59', 0, 0, 23, ''),
('2020-03-10 13:55:41', '2020-03-10 13:55:41', 258, '2020-03-12', '08:08', 0, 0, 23, ''),
('2020-03-10 13:56:49', '2020-03-10 13:56:49', 259, '2020-03-12', '08:59', 0, 0, 23, ''),
('2020-03-10 16:49:04', '2020-03-10 16:49:04', 260, '2020-02-27', '22:59', 0, 0, 23, ''),
('2020-03-13 09:36:08', '2020-03-13 09:36:08', 261, '2020-03-05', '23:59', 0, 0, 23, ''),
('2020-03-13 09:36:16', '2020-03-13 09:36:16', 262, '2020-03-05', '23:59', 0, 0, 23, ''),
('2020-03-13 09:37:15', '2020-03-13 09:37:15', 263, '2020-03-06', '23:59', 0, 0, 23, ''),
('2020-03-13 09:37:58', '2020-03-13 09:37:58', 264, '2020-03-04', '22:59', 0, 0, 23, ''),
('2020-03-13 09:39:10', '2020-03-13 09:39:10', 265, '2020-03-04', '23:59', 0, 0, 23, ''),
('2020-03-13 09:40:18', '2020-03-13 09:40:18', 266, '2020-03-04', '23:59', 0, 0, 23, ''),
('2020-03-13 09:43:26', '2020-03-13 09:43:26', 267, '2020-03-04', '23:00', 0, 0, 23, ''),
('2020-03-13 09:44:36', '2020-03-13 09:44:36', 268, '2020-03-04', '23:59', 0, 0, 23, ''),
('2020-03-13 10:21:23', '2020-03-13 10:21:23', 269, '2020-03-11', '18:00', 0, 0, 23, ''),
('2020-03-13 10:28:41', '2020-03-13 10:28:41', 270, '2020-03-05', '23:59', 0, 0, 23, ''),
('2020-03-21 14:28:34', '2020-03-21 14:28:34', 271, '2020-03-19', '23:00', 0, 0, 23, ''),
('2020-03-22 13:59:26', '2020-03-22 13:59:26', 272, '2020-03-12', '23:59', 0, 0, 1, ''),
('2020-03-22 14:06:39', '2020-03-22 14:06:39', 273, '2020-03-12', '23:59', 0, 0, 1, ''),
('2020-03-22 14:22:14', '2020-03-22 14:22:14', 274, '2020-03-12', '23:59', 0, 0, 1, ''),
('2020-03-22 14:51:48', '2020-03-22 14:51:48', 275, '2020-03-29', '12:08', 0, 0, 34, ''),
('2020-03-23 13:06:18', '2020-03-23 13:06:18', 276, '2020-03-05', '23:59', 0, 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `order_has_products`
--

CREATE TABLE `order_has_products` (
  `id_orders` bigint(11) DEFAULT NULL,
  `products_id` bigint(20) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` decimal(8,0) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_has_products`
--

INSERT INTO `order_has_products` (`id_orders`, `products_id`, `price`, `quantity`, `total`, `id`, `updated_at`, `created_at`, `name`) VALUES
(254, 40, '10.00', '2', 20, 137, '2020-03-10 13:46:32', '2020-03-10 13:46:32', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(254, 39, '10.00', '3', 30, 138, '2020-03-10 13:46:32', '2020-03-10 13:46:32', 'ปลอกหมอน ขนาด 3.5'),
(255, 40, '10.00', '2', 20, 139, '2020-03-10 13:48:15', '2020-03-10 13:48:15', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(256, 40, '10.00', '2', 20, 140, '2020-03-10 13:48:41', '2020-03-10 13:48:41', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(256, 39, '10.00', '3', 30, 141, '2020-03-10 13:48:41', '2020-03-10 13:48:41', 'ปลอกหมอน ขนาด 3.5'),
(257, 40, '10.00', '2', 20, 142, '2020-03-10 13:51:41', '2020-03-10 13:51:41', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(258, 40, '10.00', '2', 20, 143, '2020-03-10 13:55:42', '2020-03-10 13:55:42', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(258, 39, '10.00', '3', 30, 144, '2020-03-10 13:55:42', '2020-03-10 13:55:42', 'ปลอกหมอน ขนาด 3.5'),
(259, 40, '10.00', '3', 30, 145, '2020-03-10 13:56:49', '2020-03-10 13:56:49', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(259, 39, '10.00', '4', 40, 146, '2020-03-10 13:56:50', '2020-03-10 13:56:50', 'ปลอกหมอน ขนาด 3.5'),
(260, 40, '10.00', '4', 40, 147, '2020-03-10 16:49:04', '2020-03-10 16:49:04', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(260, 39, '10.00', '5', 50, 148, '2020-03-10 16:49:04', '2020-03-10 16:49:04', 'ปลอกหมอน ขนาด 3.5'),
(267, 40, '10.00', '17', 170, 149, '2020-03-13 09:43:26', '2020-03-13 09:43:26', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(268, 40, '10.00', '17', 170, 150, '2020-03-13 09:44:36', '2020-03-13 09:44:36', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(268, 39, '10.00', '2', 20, 151, '2020-03-13 09:44:36', '2020-03-13 09:44:36', 'ปลอกหมอน ขนาด 3.5'),
(269, 40, '10.00', '2', 20, 152, '2020-03-13 10:21:23', '2020-03-13 10:21:23', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(269, 39, '10.00', '2', 20, 153, '2020-03-13 10:21:23', '2020-03-13 10:21:23', 'ปลอกหมอน ขนาด 3.5'),
(270, 40, '10.00', '4', 40, 154, '2020-03-13 10:28:41', '2020-03-13 10:28:41', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(270, 39, '10.00', '4', 40, 155, '2020-03-13 10:28:42', '2020-03-13 10:28:42', 'ปลอกหมอน ขนาด 3.5'),
(271, 39, '10.00', '1', 10, 156, '2020-03-21 14:28:34', '2020-03-21 14:28:34', 'ปลอกหมอน ขนาด 3.5'),
(271, 40, '10.00', '1', 10, 157, '2020-03-21 14:28:34', '2020-03-21 14:28:34', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(274, 39, '10.00', '1', 10, 177, '2020-03-22 14:22:14', '2020-03-22 14:22:14', 'ปลอกหมอน ขนาด 3.5'),
(274, 45, '10.00', '1', 10, 178, '2020-03-22 14:22:14', '2020-03-22 14:22:14', 'ผ้าเช็ดหน้า'),
(274, 46, '15.00', '1', 15, 179, '2020-03-22 14:22:15', '2020-03-22 14:22:15', 'พรมเช็คเท้า'),
(274, 52, '30.00', '1', 30, 180, '2020-03-22 14:22:15', '2020-03-22 14:22:15', 'ผ้าคลุมเตียง'),
(274, 50, '20.00', '1', 20, 181, '2020-03-22 14:22:15', '2020-03-22 14:22:15', 'หมอน'),
(274, 48, '30.00', '1', 30, 182, '2020-03-22 14:22:15', '2020-03-22 14:22:15', 'ผ้าห่มขนาดเล็ก'),
(275, 39, '10.00', '6', 60, 183, '2020-03-22 14:51:48', '2020-03-22 14:51:48', 'ปลอกหมอน ขนาด 3.5'),
(275, 40, '10.00', '1', 10, 184, '2020-03-22 14:51:48', '2020-03-22 14:51:48', 'ผ้าปูเตียงเล็กขนาด 3.5'),
(275, 51, '8.00', '6', 48, 185, '2020-03-22 14:51:48', '2020-03-22 14:51:48', 'ผ้าเช็คมือ'),
(276, 39, '10.00', '1', 10, 186, '2020-03-23 13:06:18', '2020-03-23 13:06:18', 'ปลอกหมอน ขนาด 3.5'),
(276, 45, '10.00', '1', 10, 187, '2020-03-23 13:06:18', '2020-03-23 13:06:18', 'ผ้าเช็ดหน้า'),
(276, 51, '8.00', '1', 8, 188, '2020-03-23 13:06:18', '2020-03-23 13:06:18', 'ผ้าเช็คมือ'),
(276, 52, '30.00', '1', 30, 189, '2020-03-23 13:06:18', '2020-03-23 13:06:18', 'ผ้าคลุมเตียง');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `quantity` decimal(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number` decimal(20,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cost`, `quantity`, `image`, `product_type_id`, `created_at`, `updated_at`, `number`) VALUES
(39, 'ปลอกหมอน ขนาด 3.5', '10.00', '15.00', 'product-39.jpg', 3, '2020-03-10 12:32:24', '2020-03-10 12:32:24', NULL),
(40, 'ผ้าปูเตียงเล็กขนาด 3.5', '10.00', '5.00', 'product-40.jpg', 2, '2020-03-10 12:49:31', '2020-03-10 12:49:31', NULL),
(42, 'ผ้าปูเตียงใหญ่ 6 ฟุต', '30.00', '28.00', 'product-42.jpg', 1, '2020-03-22 13:28:34', '2020-03-22 13:28:34', NULL),
(43, 'ผ้าเช็ดตัว', '25.00', '24.00', 'product-43.jpg', 2, '2020-03-22 13:29:39', '2020-03-22 13:29:39', NULL),
(44, 'ผ้าเช็ดผม', '15.00', '10.00', 'product-44.jpg', 3, '2020-03-22 13:32:36', '2020-03-22 13:32:36', NULL),
(45, 'ผ้าเช็ดหน้า', '10.00', '8.00', 'product-45.jpg', 3, '2020-03-22 13:33:53', '2020-03-22 13:33:53', NULL),
(46, 'พรมเช็คเท้า', '15.00', '12.00', 'product-46.jpg', 2, '2020-03-22 13:38:17', '2020-03-22 13:38:17', NULL),
(47, 'ผ้าห่มขนาดใหญ่', '50.00', '40.00', 'product-47.jpg', 1, '2020-03-22 13:40:35', '2020-03-22 13:40:35', NULL),
(48, 'ผ้าห่มขนาดเล็ก', '30.00', '28.00', 'product-48.jpg', 2, '2020-03-22 13:45:23', '2020-03-22 13:45:23', NULL),
(50, 'หมอน', '20.00', '15.00', 'product-50.jpg', 3, '2020-03-22 13:52:53', '2020-03-22 13:52:54', NULL),
(51, 'ผ้าเช็คมือ', '8.00', '5.00', 'product-51.jpg', 3, '2020-03-22 13:54:46', '2020-03-22 13:54:46', NULL),
(52, 'ผ้าคลุมเตียง', '30.00', '28.00', 'product-52.jpg', 1, '2020-03-22 13:57:53', '2020-03-22 13:57:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'ขนาดใหญ่', NULL, NULL),
(2, 'ขนาดกลาง', NULL, NULL),
(3, 'ขนาดเล็ก', NULL, NULL),
(4, 'อื่น', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `send_orders`
--

CREATE TABLE `send_orders` (
  `id` bigint(11) NOT NULL,
  `send_day` datetime NOT NULL,
  `send_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total` decimal(10,2) NOT NULL,
  `employee_EmpId` int(11) UNSIGNED NOT NULL,
  `status_has_send_orders_id` bigint(12) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_has_orders`
--

CREATE TABLE `status_has_orders` (
  `status_id` bigint(11) NOT NULL,
  `status_has_orders_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_has_send_orders`
--

CREATE TABLE `status_has_send_orders` (
  `status_id` bigint(11) NOT NULL,
  `status_has_send_orders_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT '0',
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'A',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `company` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_address` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Tex` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `status`, `avatar`, `remember_token`, `created_at`, `updated_at`, `company`, `tel`, `company_address`, `send_address`, `Tex`) VALUES
(1, 'Natchya Faengmuangkok', 'primnatchaya2540@gmail.com', NULL, '$2y$10$tTskmSMGMoRaXedckHyqQu5vnfGlDF0EtfN5s9G9cxzSxP087NzVa', 0, 'A', 'default.png', NULL, NULL, NULL, '', '', '0', '', ''),
(2, 'Employee 1', 'emp1@gmail.com', NULL, '$2y$10$dqmmYHRtQdFaJmur47LrQu7F2YAPfjtaoOG0BImhvCDCEOMZI8M3K', 2, 'A', 'default.png', NULL, NULL, NULL, '', '', '0', '', ''),
(4, 'Diver 1', 'diver1@gmail.com', NULL, '$2y$10$tDZF.u0Fu49.aQmLYHifPOb1ysyzGiGsnYFgTfZRhp9yHBcLHuUym', 3, 'A', 'default.png', NULL, NULL, NULL, '', '', '0', '', ''),
(21, 'Prim', 'Prim2540@outlook.com', NULL, '$2y$10$16mubOh92vUminIhR2loCuw.WDKm6bAV4kfuDdTzzkDoxsuhNiuS.', 0, 'A', 'default.png', NULL, '2020-01-22 09:04:31', '2020-01-22 09:04:31', 'khonkaen university', NULL, NULL, NULL, NULL),
(22, 'ณัฐชยา', 'f.natchaya@kkumail.com', NULL, '$2y$10$LgvxWNEo2OTycBPjffV8a.NQ/CxPjtsD2KQN1/P4bTuhXCrRtJNte', 0, 'A', 'default.png', NULL, '2020-01-22 09:07:22', '2020-01-22 09:07:22', NULL, NULL, NULL, NULL, NULL),
(23, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$.X/EkpvO4fgVwrHZaoLOiu8MSLhF3j/6OfVKAWjbLcADaDvC6sSf.', 2, 'A', 'default.png', NULL, '2020-01-23 10:26:34', '2020-01-23 10:26:34', NULL, NULL, NULL, NULL, NULL),
(26, 'จิตรลดา', 'jitlada_p@kkumail.com', NULL, '$2y$10$LJj5tKjhBa4JtjJ1mypcDe/0Fp37nZlZU8SlFO0zoJC6B2/gf8V5q', 0, 'A', 'default.png', NULL, '2020-01-27 07:12:58', '2020-01-27 07:12:58', 'khonkaen university', '0961738186', 'khonkaen', 'banped', '1409800352079'),
(27, 'ชนาเนตร คำเพิงใจ', 'chananate.k@gmail.com', NULL, '$2y$10$.XurSG57PjXA0.YW5AHT8u0jxtpe58LeVcZVgYzRMoV1ouXqFCfm6', 0, 'A', 'default.png', NULL, '2020-02-19 07:41:47', '2020-02-19 07:41:47', 'โรงพยาบาลขอนแก่น', '0258741236', 'ขอนแก่น', 'ขอนแก่น', '1234567891234'),
(28, 'Man', 'Man123@gmail.com', NULL, '$2y$10$nk/qRnR8Jkr8mLgRkq2zSe/1Fm9Fy.jTtiokADR2hYR5tWzGLQgQa', 0, 'A', 'default.png', NULL, '2020-03-11 07:38:04', '2020-03-11 07:38:04', 'Manly222', '012346789', 'kku123456789fgflf', 'kku123456789fgflf', '1234567890'),
(29, 'Fern', 'Fern11@gmail.com', NULL, '$2y$10$wAMovvmt0uHcQBMAkm5UqeadPn/qsLalXJ6lT7zZ/qQKEjM2GxRiq', 0, 'A', 'default.png', NULL, '2020-03-18 12:17:19', '2020-03-18 12:17:19', 'kku254099', '0998300401', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '9999999999999999999'),
(30, 'B', 'BB@gmail.com', NULL, '$2y$10$ml4OOxdnspm4Clvvf/a1J.n0R7KzOea5LaKzzwjfnximRuHCIJvnK', 0, 'A', 'default.png', NULL, '2020-03-22 12:47:07', '2020-03-22 12:47:07', 'PavaraB5555', '33333333333333', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '33333333333333'),
(34, 'ธณัฐพงษ์', 'ppheepphee@gmail.com', NULL, '$2y$10$0PADmTPXz0hX1/GZ8wncc.SS5GR5WNGQHSL0Y3SAjD2GR2Ym53Eqm', 0, 'A', 'default.png', NULL, '2020-03-22 14:50:02', '2020-03-22 14:50:02', 'khonkaen university', '0967653774', '561/27 โคราช นครราชสีมา', '561/27 โคราช นครราชสีมา', '0967653774');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`,`employee_EmpId`,`send_orders_ID`,`user_ID`);

--
-- Indexes for table `order_has_products`
--
ALTER TABLE `order_has_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_product_type_id_foreign` (`product_type_id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_orders`
--
ALTER TABLE `send_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_has_orders`
--
ALTER TABLE `status_has_orders`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `status_has_send_orders`
--
ALTER TABLE `status_has_send_orders`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmpId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `order_has_products`
--
ALTER TABLE `order_has_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_has_orders`
--
ALTER TABLE `status_has_orders`
  MODIFY `status_id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_has_send_orders`
--
ALTER TABLE `status_has_send_orders`
  MODIFY `status_id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_product_type_id_foreign` FOREIGN KEY (`product_type_id`) REFERENCES `product_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
