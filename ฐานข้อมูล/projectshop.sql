-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 02:07 AM
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
  `tel` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpId`, `address`, `tel`, `name`, `email`, `password`) VALUES
(4, '123 khon kaen', '099-8300401', 'Dive1', 'diver1@gmail.com', '12345678'),
(5, '123 khon kaen', '0998300401', 'Diver2', 'diver2@gmail.com', '12345678'),
(6, '123 khon kaen', '099800401', 'Diver3', 'diver3@gmail.com', '12345678');

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
  `employee_EmpId` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_orders_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `send_has_orders_status_ID` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`updated_at`, `created_at`, `id_orders`, `order_date`, `order_time`, `employee_EmpId`, `send_orders_ID`, `user_ID`, `send_has_orders_status_ID`) VALUES
('2020-04-21 23:08:33', '2020-04-18 20:22:55', 293, '2020-04-20', '23:00', '4', 0, 1, 'รับผ้าสำเร็จ'),
('2020-04-20 19:07:09', '2020-04-18 20:37:02', 294, '2020-04-19', '23:00', '5', 0, 23, 'เตรียมจัดส่ง'),
('2020-04-21 21:16:05', '2020-04-18 21:14:21', 295, '2020-04-23', '18:00', 'Diver2', 0, 23, 'ถึงโรงงาน'),
('2020-04-21 21:47:46', '2020-04-21 21:47:46', 298, '2020-04-23', '00:00', 'Diver2', 0, 1, NULL),
('2020-04-21 23:09:54', '2020-04-21 21:53:07', 299, '2020-04-22', '23:00', '5', 0, 5, 'ส่งผ้าสำเร็จ');

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
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Total_price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_has_products`
--

INSERT INTO `order_has_products` (`id_orders`, `products_id`, `price`, `quantity`, `total`, `id`, `updated_at`, `created_at`, `name`, `Total_price`) VALUES
(291, 50, '20.00', '1', 20, 231, '2020-04-18 16:26:27', '2020-04-18 16:26:27', 'หมอน', NULL),
(291, 51, '8.00', '1', 8, 232, '2020-04-18 16:26:27', '2020-04-18 16:26:27', 'ผ้าเช็คมือ', NULL),
(291, 52, '30.00', '1', 30, 233, '2020-04-18 16:26:27', '2020-04-18 16:26:27', 'ผ้าคลุมเตียง', NULL),
(292, 50, '20.00', '1', 20, 234, '2020-04-18 17:17:03', '2020-04-18 17:17:03', 'หมอน', NULL),
(293, 39, '10.00', '1', 10, 235, '2020-04-18 20:22:55', '2020-04-18 20:22:55', 'ปลอกหมอน ขนาด 3.5', NULL),
(293, 45, '10.00', '1', 10, 236, '2020-04-18 20:22:55', '2020-04-18 20:22:55', 'ผ้าเช็ดหน้า', NULL),
(294, 50, '20.00', '1', 20, 237, '2020-04-18 20:37:02', '2020-04-18 20:37:02', 'หมอน', NULL),
(294, 51, '8.00', '1', 8, 238, '2020-04-18 20:37:02', '2020-04-18 20:37:02', 'ผ้าเช็คมือ', NULL),
(295, 50, '20.00', '1', 20, 239, '2020-04-18 21:14:22', '2020-04-18 21:14:22', 'หมอน', NULL),
(297, 50, '20.00', '1', 20, 242, '2020-04-18 21:35:48', '2020-04-18 21:35:48', 'หมอน', NULL),
(300, 50, '20.00', '1', 20, 246, '2020-04-18 21:50:33', '2020-04-18 21:50:33', 'หมอน', NULL),
(300, 51, '8.00', '1', 8, 247, '2020-04-18 21:50:34', '2020-04-18 21:50:34', 'ผ้าเช็คมือ', NULL),
(301, 39, '10.00', '1', 10, 248, '2020-04-19 07:51:29', '2020-04-19 07:51:29', 'ปลอกหมอน ขนาด 3.5', NULL),
(301, 45, '10.00', '1', 10, 249, '2020-04-19 07:51:29', '2020-04-19 07:51:29', 'ผ้าเช็ดหน้า', NULL),
(304, 45, '10.00', '1', 10, 252, '2020-04-20 15:46:44', '2020-04-20 15:46:44', 'ผ้าเช็ดหน้า', NULL),
(305, 50, '20.00', '1', 20, 253, '2020-04-20 15:47:30', '2020-04-20 15:47:30', 'หมอน', NULL),
(305, 51, '8.00', '1', 8, 254, '2020-04-20 15:47:30', '2020-04-20 15:47:30', 'ผ้าเช็คมือ', NULL),
(306, 40, '10.00', '1', 10, 255, '2020-04-20 15:50:51', '2020-04-20 15:50:51', 'ผ้าปูเตียงเล็กขนาด 3.5', NULL),
(306, 45, '10.00', '1', 10, 256, '2020-04-20 15:50:51', '2020-04-20 15:50:51', 'ผ้าเช็ดหน้า', NULL),
(306, 50, '20.00', '1', 20, 257, '2020-04-20 15:50:51', '2020-04-20 15:50:51', 'หมอน', NULL),
(306, 42, '30.00', '1', 30, 258, '2020-04-20 15:50:51', '2020-04-20 15:50:51', 'ผ้าปูเตียงใหญ่ 6 ฟุต', NULL),
(306, 51, '8.00', '1', 8, 259, '2020-04-20 15:50:51', '2020-04-20 15:50:51', 'ผ้าเช็คมือ', NULL),
(306, 43, '25.00', '1', 25, 260, '2020-04-20 15:50:51', '2020-04-20 15:50:51', 'ผ้าเช็ดตัว', NULL),
(307, 45, '10.00', '1', 10, 261, '2020-04-20 16:08:41', '2020-04-20 16:08:41', 'ผ้าเช็ดหน้า', NULL),
(296, 39, '10.00', '1', 10, 262, '2020-04-21 21:11:34', '2020-04-21 21:11:34', 'ปลอกหมอน ขนาด 3.5', NULL),
(297, 40, '10.00', '1', 10, 263, '2020-04-21 21:12:52', '2020-04-21 21:12:52', 'ผ้าปูเตียงเล็กขนาด 3.5', NULL),
(298, 40, '10.00', '1', 10, 264, '2020-04-21 21:47:46', '2020-04-21 21:47:46', 'ผ้าปูเตียงเล็กขนาด 3.5', NULL),
(299, 39, '10.00', '1', 10, 265, '2020-04-21 21:53:07', '2020-04-21 21:53:07', 'ปลอกหมอน ขนาด 3.5', NULL),
(299, 45, '10.00', '1', 10, 266, '2020-04-21 21:53:07', '2020-04-21 21:53:07', 'ผ้าเช็ดหน้า', NULL);

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
  `send_day` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_time` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `employee_EmpId` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_has_send_orders_id` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_orders` bigint(20) DEFAULT NULL,
  `details` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_orders`
--

INSERT INTO `send_orders` (`id`, `send_day`, `send_time`, `total`, `employee_EmpId`, `status_has_send_orders_id`, `id_orders`, `details`, `updated_at`, `created_at`) VALUES
(1, '12/30/02', '12.00', '18.00', 'Prim', 'ส่งแล้ว', 122, 'ดีจ้า', '2020-04-13 20:21:16', '2020-04-13 20:21:16'),
(2, '12/30/01', '12.01', '18.00', 'Prim', 'ส่งแล้ว', 123, 'ดีจ้า', '2020-04-13 20:25:36', '2020-04-13 20:25:36'),
(3, '2020-04-09', '13:15', '18.00', 'Prim', 'ส่งแล้ว', 285, 'ดีจ้า', '2020-04-13 20:43:30', '2020-04-13 20:43:30'),
(4, '2020-04-16', '08:23', '18.00', 'Prim', '2', 111, 'ดีจ้า', '2020-04-13 20:54:47', '2020-04-13 20:54:47'),
(5, '2020-04-16', '23:59', '15.00', 'Prim', '3', 122, 'ดีจ้า', '2020-04-13 20:56:38', '2020-04-13 20:56:38'),
(8, '2020-04-23', '23:00', '89.00', 'Diver2', '1', 283, 'ผ้าหาย2', '2020-04-21 21:23:11', '2020-04-21 21:23:11'),
(9, '2020-04-23', '23:00', '200.00', 'Diver3', '1', 283, 'ปลอกหมอนหาย 1 ชิ้น', '2020-04-21 21:24:29', '2020-04-21 21:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint(11) NOT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'รับผ้าสำเร็จ'),
(2, 'รับผ้าไม่สำเร็จ'),
(3, 'กำลังดำเนินการ'),
(4, 'ดำเนินการสำเร็จ');

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
(1, 'Natchya Faengmuangkok', 'primnatchaya2540@gmail.com', NULL, '$2y$10$tTskmSMGMoRaXedckHyqQu5vnfGlDF0EtfN5s9G9cxzSxP087NzVa', 0, 'A', 'default.png', NULL, NULL, NULL, '', '0998300401', '0', '475 ม.2 บ้านศรีสุข อำเภอกระนวน จ.ขอนแก่น 40170', '1419900681767'),
(4, 'Diver 1', 'diver1@gmail.com', NULL, '$2y$10$tDZF.u0Fu49.aQmLYHifPOb1ysyzGiGsnYFgTfZRhp9yHBcLHuUym', 3, 'A', 'default.png', NULL, NULL, NULL, '', '', '0', '', ''),
(5, 'Diver2', 'diver2@gmail.com', NULL, '$2y$10$dqmmYHRtQdFaJmur47LrQu7F2YAPfjtaoOG0BImhvCDCEOMZI8M3K', 3, 'A', 'default.png', NULL, NULL, NULL, '', '', '0', '', ''),
(6, 'Diver3', 'diver3@gmail.com', NULL, '$2y$10$MlXIQZcsNr7WD.4ST5HuU.y8r77DC5jNcKVFuqyESZ5UQ9Q6NF4xu', 3, 'A', 'default.png', NULL, '2020-04-22 00:05:34', '2020-04-22 00:05:34', 'Pavara2540', '0998300401', '-', '-', '-'),
(23, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$.X/EkpvO4fgVwrHZaoLOiu8MSLhF3j/6OfVKAWjbLcADaDvC6sSf.', 2, 'A', 'default.png', NULL, '2020-01-23 10:26:34', '2020-01-23 10:26:34', NULL, NULL, NULL, NULL, NULL),
(27, 'ชนาเนตร คำเพิงใจ', 'chananate.k@gmail.com', NULL, '$2y$10$.XurSG57PjXA0.YW5AHT8u0jxtpe58LeVcZVgYzRMoV1ouXqFCfm6', 0, 'A', 'default.png', NULL, '2020-02-19 07:41:47', '2020-02-19 07:41:47', 'โรงพยาบาลขอนแก่น', '0258741236', 'ขอนแก่น', 'ขอนแก่น', '1234567891234'),
(28, 'Man', 'Man123@gmail.com', NULL, '$2y$10$nk/qRnR8Jkr8mLgRkq2zSe/1Fm9Fy.jTtiokADR2hYR5tWzGLQgQa', 0, 'A', 'default.png', NULL, '2020-03-11 07:38:04', '2020-03-11 07:38:04', 'Manly222', '012346789', 'kku123456789fgflf', 'kku123456789fgflf', '1234567890'),
(29, 'Fern', 'Fern11@gmail.com', NULL, '$2y$10$wAMovvmt0uHcQBMAkm5UqeadPn/qsLalXJ6lT7zZ/qQKEjM2GxRiq', 0, 'A', 'default.png', NULL, '2020-03-18 12:17:19', '2020-03-18 12:17:19', 'kku254099', '0998300401', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '9999999999999999999'),
(30, 'B', 'BB@gmail.com', NULL, '$2y$10$ml4OOxdnspm4Clvvf/a1J.n0R7KzOea5LaKzzwjfnximRuHCIJvnK', 0, 'A', 'default.png', NULL, '2020-03-22 12:47:07', '2020-03-22 12:47:07', 'PavaraB5555', '33333333333333', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '33333333333333'),
(34, 'ธณัฐพงษ์', 'ppheepphee@gmail.com', NULL, '$2y$10$0PADmTPXz0hX1/GZ8wncc.SS5GR5WNGQHSL0Y3SAjD2GR2Ym53Eqm', 0, 'A', 'default.png', NULL, '2020-03-22 14:50:02', '2020-03-22 14:50:02', 'khonkaen university', '0967653774', '561/27 โคราช นครราชสีมา', '561/27 โคราช นครราชสีมา', '0967653774'),
(35, 'Prim', 'primnatchaya25408@gmail.com', NULL, '$2y$10$JZPnolwchPRqzriSnNiTC.b4VUh4pfQ6W0KPhUbPpODUGA3bRuoOu', 0, 'A', 'default.png', NULL, '2020-04-17 03:37:41', '2020-04-17 03:37:41', 'khonkaen university', '0998300401', 'KKu 123  กรีนเพจ', 'KKu 123  กรีนเพจ', '1419906111622');

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
  MODIFY `EmpId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

--
-- AUTO_INCREMENT for table `order_has_products`
--
ALTER TABLE `order_has_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

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
-- AUTO_INCREMENT for table `send_orders`
--
ALTER TABLE `send_orders`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

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
