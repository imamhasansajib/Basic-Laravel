-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 08:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `sort_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 1, 1, '2022-08-28 09:30:14', '2022-08-28 09:30:14'),
(2, 'Women\'s Fashion', 3, 1, '2022-08-28 09:34:25', '2022-08-28 09:34:25'),
(3, 'Men\'s Fashion', 2, 1, '2022-08-28 09:35:17', '2022-08-28 09:35:17'),
(4, 'Gaming Tools', 4, 1, '2022-08-28 09:36:58', '2022-08-28 09:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `division_id`, `created_at`, `updated_at`) VALUES
(1, 'Gazipur', 1, '2022-09-18 12:39:49', '2022-09-18 12:39:49'),
(2, 'Narayanganj', 1, '2022-09-18 12:39:49', '2022-09-18 12:39:49'),
(3, 'Bandarban', 2, '2022-09-18 12:39:49', '2022-09-18 12:39:49'),
(4, 'Rangamati', 2, '2022-09-18 12:39:49', '2022-09-18 12:39:49'),
(5, 'Sunamganj', 3, '2022-09-18 12:39:49', '2022-09-18 12:39:49'),
(6, 'Habiganj', 3, '2022-09-18 12:39:49', '2022-09-18 12:39:49'),
(7, 'Cumilla', 2, '2022-11-16 16:48:13', '2022-11-16 16:48:13'),
(8, 'Khagrachari', 2, '2022-11-16 16:48:13', '2022-11-16 16:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', '2022-09-18 12:35:36', '2022-09-18 12:35:36'),
(2, 'Chittagong', '2022-09-18 12:35:36', '2022-09-18 12:35:36'),
(3, 'Sylhet', '2022-09-18 12:35:36', '2022-09-18 12:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `division_id`, `district_id`, `created_at`, `updated_at`) VALUES
(1, 'Imam Hasan Sajib', 2, 4, '2022-09-18 07:01:56', '2022-09-18 07:01:56'),
(2, 'Aariya Tanjum', 1, 1, '2022-09-18 07:05:07', '2022-09-18 07:05:07'),
(3, 'Animesh Dutta', 3, 6, '2022-09-18 07:09:03', '2022-09-18 07:09:03'),
(4, 'Joy Barua', 2, 3, '2022-09-18 07:17:36', '2022-09-18 07:17:36'),
(5, 'K.M. Naimuddin', 2, 7, '2022-11-16 11:16:29', '2022-11-16 11:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `image_models`
--

CREATE TABLE `image_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_models`
--

INSERT INTO `image_models` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(1, '16635050211083297.jpg', '2022-09-18 06:43:41', '2022-09-18 06:43:41'),
(2, '16635050313144989.jpg', '2022-09-18 06:43:51', '2022-09-18 06:43:51');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_08_28_150552_create_categories_table', 1),
(3, '2022_08_28_150726_create_products_table', 1),
(4, '2022_09_04_142940_create_image_models_table', 2),
(5, '2022_09_10_180026_create_employees_table', 3),
(6, '2022_09_09_165358_create_image_models_table', 4),
(7, '2022_09_18_115852_create_divisions_table', 4),
(8, '2022_09_18_120225_create_districts_table', 4),
(9, '2022_09_18_120324_create_employees_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `salary` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `name`, `email`, `birth_date`, `salary`, `created_at`, `updated_at`) VALUES
(1, 'Imam Hasan Sajib', 'imamhasansajib@gmail.com', '1999-12-24', 15000, '2022-07-24 08:30:19', '2022-07-24 08:30:19'),
(2, 'Aariya Tanjum', 'Aariya.tanjum@gmail.com', '1997-06-09', 20000, '2022-07-24 08:40:23', '2022-07-24 08:40:23'),
(3, 'Bijoy Barua', 'bijoy.barua999@gmail.com', '1997-04-17', 14000, '2022-07-24 08:42:15', '2022-07-24 08:42:15'),
(5, 'Toukir Ahmed Touhid', 'Toukir420@gmail.com', '1998-09-19', 19000, '2022-07-24 08:57:27', '2022-07-24 08:57:27'),
(6, 'Animesh Dutta', 'Animesh.dutta4321@gmail.com', '1997-08-16', 18000, '2022-07-24 09:33:40', '2022-07-24 09:33:40'),
(8, 'Arifur Rahman', 'Arifur@gmail.com', '1999-11-10', 11000, '2022-09-16 19:43:44', '2022-09-16 19:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `sort_order`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Asus Gaming Laptop', 85000, 'Laptop for Gaming, with 16 gb ram.', 1, 1, 4, '2022-08-28 09:40:41', '2022-08-28 09:40:41'),
(2, 'Realme C3 Mobile', 11000, 'Realme C3 mobile, 3 gb ram and 32 gb ram.', 1, 1, 1, '2022-08-28 09:43:27', '2022-08-28 09:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 'Imam Hasan Sajib', 'imamhasansajib@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'student', 1, '2022-08-15 05:05:55', '2022-08-15 05:05:55'),
(2, 'Aariya Tanjum', 'Aariya.tanjum@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'student', 1, '2022-08-15 05:06:33', '2022-08-15 05:06:33'),
(3, 'Saiful Islam', 'saifulislam199@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'student', 0, '2022-08-15 05:07:07', '2022-08-15 05:07:07'),
(4, 'Bijoy Barua', 'bijoy.barua999@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'student', 0, '2022-08-15 05:07:22', '2022-08-15 05:07:22'),
(5, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 1, '2022-08-15 05:23:38', '2022-08-15 05:23:38'),
(6, 'K.m. Naimuddin', 'k.m.naimuddin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'student', 0, '2022-08-15 06:33:27', '2022-08-15 06:33:27'),
(7, 'Joy Barua', 'joy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'student', 0, '2022-08-15 07:22:19', '2022-08-15 07:22:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_division_id_foreign` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_division_id_foreign` (`division_id`),
  ADD KEY `employees_district_id_foreign` (`district_id`);

--
-- Indexes for table `image_models`
--
ALTER TABLE `image_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `image_models`
--
ALTER TABLE `image_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `employees_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
