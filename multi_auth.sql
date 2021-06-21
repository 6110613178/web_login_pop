-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2021 at 04:45 PM
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
-- Table structure for table `buyerproperty`
--

CREATE TABLE `buyerproperty` (
  `id` int(11) NOT NULL,
  `property_type` text NOT NULL,
  `project_name` text NOT NULL,
  `type` text NOT NULL,
  `floor_num` int(11) NOT NULL,
  `bedroom_num` int(11) NOT NULL,
  `bathroom_num` int(11) NOT NULL,
  `kitchen_num` int(11) NOT NULL,
  `parking_num` int(11) NOT NULL,
  `livingroom_num` int(11) NOT NULL,
  `furniture` text NOT NULL,
  `usable_area_min` int(11) NOT NULL,
  `usable_area_max` int(11) NOT NULL,
  `area_min` int(11) NOT NULL,
  `area_max` int(11) NOT NULL,
  `alley` text NOT NULL,
  `road` text NOT NULL,
  `sub_district` text NOT NULL,
  `district` text NOT NULL,
  `province` text NOT NULL,
  `nearby_place` text NOT NULL,
  `price_range_min` int(11) NOT NULL,
  `price_range_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buyerproperty`
--

INSERT INTO `buyerproperty` (`id`, `property_type`, `project_name`, `type`, `floor_num`, `bedroom_num`, `bathroom_num`, `kitchen_num`, `parking_num`, `livingroom_num`, `furniture`, `usable_area_min`, `usable_area_max`, `area_min`, `area_max`, `alley`, `road`, `sub_district`, `district`, `province`, `nearby_place`, `price_range_min`, `price_range_max`) VALUES
(7, 'บ้านเดี่ยว', 'เทส', 'มือ1', 1, 1, 1, 1, 1, 1, 'ครบ', 1, 100, 1, 100, 'เทส', 'เทส', 'เทส', 'เทส', 'เทส', 'เทส', 1, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_21_123428_create_buyer_properties_table', 2),
(5, '2021_06_21_130510_create_contacts_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, 1, '$2y$10$A7A/msH14i1wC5g6VQhOL.5.vRM2zj.GKh96W7sARHFMCde8C.TPq', NULL, '2021-06-09 03:37:28', '2021-06-09 03:37:28'),
(2, 'User', 'user@user.com', '2021-06-21 02:59:57', 0, '$2y$10$efgrFdwxMLHU7rhQ8qNqieFIAutaOoAQX/XU73/ys0yYzE32r1qWS', NULL, '2021-06-09 03:37:29', '2021-06-21 02:59:57'),
(3, 'User2', 'user2@user2.com', NULL, NULL, '$2y$10$FJ155IfPWTvW60GuR09nKOIEJhPhhm6rFsGdIfrFDZ/QgsvDycipe', NULL, '2021-06-09 03:57:20', '2021-06-09 03:57:20'),
(4, 'User3', 'user3@user3.com', NULL, 0, '$2y$10$L0gZYp5LsXRWVT.CBQNGFeLQxXpR2bfaCUSWdDkRcm9pnnp7JaLd.', NULL, '2021-06-09 04:04:42', '2021-06-09 04:04:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyerproperty`
--
ALTER TABLE `buyerproperty`
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
-- AUTO_INCREMENT for table `buyerproperty`
--
ALTER TABLE `buyerproperty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
