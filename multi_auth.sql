-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 11:58 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `bts`
--

CREATE TABLE `bts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buyer_props`
--

CREATE TABLE `buyer_props` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_num` int(11) NOT NULL,
  `bedroom_num` int(11) NOT NULL,
  `bathroom_num` int(11) NOT NULL,
  `kitchen_num` int(11) NOT NULL,
  `parking_num` int(11) NOT NULL,
  `livingroom_num` int(11) NOT NULL,
  `furniture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `usable_area_min` int(11) NOT NULL,
  `usable_area_max` int(11) NOT NULL,
  `area_min` int(11) NOT NULL,
  `area_max` int(11) NOT NULL,
  `alley` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `road` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_district` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nearby_place` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_range_min` int(11) NOT NULL,
  `price_range_max` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buyer_props`
--

INSERT INTO `buyer_props` (`id`, `property`, `property_type`, `project_name`, `type`, `floor_num`, `bedroom_num`, `bathroom_num`, `kitchen_num`, `parking_num`, `livingroom_num`, `furniture`, `usable_area_min`, `usable_area_max`, `area_min`, `area_max`, `alley`, `road`, `sub_district`, `district`, `province`, `nearby_place`, `price_range_min`, `price_range_max`, `created_at`, `updated_at`) VALUES
(1, 'บ้าน', 'ทาวน์เฮาส์/ทาวน์โฮม', 'เทส2', 'มือ 2', 2, 2, 2, 2, 2, 2, 'ไม่ครบ', 2, 200, 2, 200, 'เทส2', 'เทส2', 'เทส2', 'เทส2', 'เทส2', 'ห้างสรรพสินค้า', 2, 2000000, '2021-07-07 01:10:56', '2021-07-07 01:10:56'),
(2, 'ที่ดิน', 'ที่ดินเปล่า', 'สีเหลือง', 'ติดถนนใหญ่', 0, 0, 0, 0, 0, 0, '-', 0, 0, 1, 100, 'เทส', 'เทส', 'เทส', 'เทส', 'เทส', 'supermarket', 1, 1000000, '2021-07-07 02:23:38', '2021-07-07 02:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(4, '2021_06_21_123428_create_buyer_properties_table', 2),
(5, '2021_06_21_130510_create_contacts_table', 3),
(6, '2021_06_24_062441_buyer_prop_crud', 4),
(7, '2021_06_24_064556_buyer_prop_crud', 5),
(9, '2014_10_12_000000_create_users_table', 6),
(10, '2014_10_12_100000_create_password_resets_table', 6),
(11, '2019_08_19_000000_create_failed_jobs_table', 6),
(12, '2021_06_24_085203_buyer_prop_crud', 6),
(13, '2021_07_06_095628_bts_tbl', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, 1, '$2y$10$I.9V.3Ul06o.yncO7FCfkOFxCfbJqj4fu6VLWVVchiDXKkUH8mniG', NULL, '2021-07-06 02:41:34', '2021-07-06 02:41:34'),
(2, 'User', 'user@user.com', NULL, 0, '$2y$10$FRrBPbxYAzFTdrhqAXPv9OeKtttsIeDOUn880.08pL83QDHMVyg9u', NULL, '2021-07-06 02:41:34', '2021-07-06 02:41:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bts`
--
ALTER TABLE `bts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer_props`
--
ALTER TABLE `buyer_props`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `bts`
--
ALTER TABLE `bts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `buyer_props`
--
ALTER TABLE `buyer_props`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
