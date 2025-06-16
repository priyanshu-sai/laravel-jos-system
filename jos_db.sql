-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2025 at 08:55 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conductors`
--

CREATE TABLE `conductors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `staff_id` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `department_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conductors`
--

INSERT INTO `conductors` (`id`, `first_name`, `middle_name`, `last_name`, `staff_id`, `email`, `phone_number`, `department_name`, `created_at`, `updated_at`) VALUES
(1, 'Amit', NULL, 'Verma', 'STF001', 'amit@yopmail.com', '1212121212', 'Operations', '2025-06-16 09:37:48', '2025-06-16 09:37:48'),
(2, 'Rahul', NULL, 'Singh', 'STF002', 'rahul@yopmail.com', '2314231421', 'Ground Team', '2025-06-16 09:37:48', '2025-06-16 09:37:48'),
(3, 'Suresh', NULL, 'Yadav', 'STF001', 'suresh@example.com', '9876543000', 'Electrical', '2025-06-16 10:16:47', '2025-06-16 10:16:47'),
(4, 'Rudra', 'Pratap', 'Singh', 'STF002', 'rudra@yopmail.com', '7878787887', 'Carpaint', '2025-06-16 10:42:52', '2025-06-16 10:42:52'),
(5, 'Test', NULL, 'test', 'STF998', 'test@yopmail.com', '6767676767', 'road repair', '2025-06-16 11:04:34', '2025-06-16 11:04:34'),
(6, 'aman', NULL, 'singh', 'STFAMAN1', 'aman@yopmail.com', '9090909090', 'multitalent', '2025-06-16 11:29:45', '2025-06-16 11:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `contractors`
--

CREATE TABLE `contractors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `balance` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contractors`
--

INSERT INTO `contractors` (`id`, `name`, `code`, `email`, `phone_number`, `company_name`, `balance`, `created_at`, `updated_at`) VALUES
(1, 'Ramesh Sharma', 'CONT001', 'ramesh@yopmail.com', '1234567890', 'Sharma Constructions', '15500.00', '2025-06-16 09:37:48', '2025-06-16 09:38:12'),
(2, 'Akash Kumar', 'CONT002', 'akash@yopmail.com', '9876543109', 'Kumar Constructions', '20600.00', '2025-06-16 09:37:48', '2025-06-16 09:38:24'),
(3, 'ABC Infra Pvt Ltd', 'CONT-001', 'abc@infra.com', '9876543210', 'ABC Infrastructure', '1000.00', '2025-06-16 10:15:32', '2025-06-16 10:15:32'),
(4, 'Manish Carpainter', 'CONT1234', 'manish@yopmail.com', '6767676767', 'Manish Carpainter PVT LTD', '0.00', '2025-06-16 10:41:36', '2025-06-16 11:15:23'),
(5, 'Sharma road repair ltd', 'CONT1222', 'sharama@yopmail.com', '8787787887', 'roadlines pvt ltd', '0.00', '2025-06-16 11:03:33', '2025-06-16 11:20:56'),
(6, 'priyanshu', 'CONT122', 'priyanshu@yopmail.com', '7217495769', 'priyanshu solutions', '0.00', '2025-06-16 11:28:26', '2025-06-16 11:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_orders`
--

CREATE TABLE `job_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jos_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `jos_date` date NOT NULL,
  `type_of_work_id` bigint(20) UNSIGNED NOT NULL,
  `contractor_id` bigint(20) UNSIGNED NOT NULL,
  `conductor_id` bigint(20) UNSIGNED NOT NULL,
  `actual_work_completed` decimal(10,2) NOT NULL,
  `remarks` text DEFAULT NULL,
  `reference_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_orders`
--

INSERT INTO `job_orders` (`id`, `jos_id`, `name`, `date`, `jos_date`, `type_of_work_id`, `contractor_id`, `conductor_id`, `actual_work_completed`, `remarks`, `reference_number`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Priyanshu saini', '2025-06-11', '2025-06-16', 2, 1, 1, '8.00', NULL, 'JO-202506-001', '2025-06-16 10:28:02', '2025-06-16 10:36:40', NULL),
(2, 2, 'Test', '2025-05-16', '2025-06-06', 1, 2, 2, '2.00', NULL, 'JO-202506-002', '2025-06-16 10:29:05', '2025-06-16 10:38:24', NULL),
(3, 4, 'Carpainter', '2025-06-16', '2025-06-16', 4, 4, 4, '20.00', NULL, 'JO-202506-003', '2025-06-16 10:43:46', '2025-06-16 12:56:17', '2025-06-16 12:56:17'),
(5, 10, 'test new', '2025-06-16', '2025-06-16', 5, 5, 5, '12.00', NULL, 'JO-202506-005', '2025-06-16 11:20:41', '2025-06-16 11:24:29', NULL),
(6, 9, 'test abc', '2025-06-16', '2025-06-16', 4, 5, 4, '12.00', NULL, 'JO-202506-006', '2025-06-16 11:21:54', '2025-06-16 11:23:59', NULL),
(7, 12, 'demo', '2025-06-16', '2025-06-16', 1, 5, 1, '2.00', NULL, 'JO-202506-007', '2025-06-16 11:22:42', '2025-06-16 12:30:06', NULL),
(8, 11, 'washroom clean', '2025-06-16', '2025-06-16', 6, 6, 6, '3.00', 'done 3 clean washroom', 'JO-202506-008', '2025-06-16 11:31:44', '2025-06-16 11:34:05', NULL),
(9, 11, 'plumbing', '2025-06-16', '2025-06-16', 2, 6, 6, '1.00', NULL, 'JO-202506-009', '2025-06-16 11:32:20', '2025-06-16 11:34:05', NULL),
(10, 11, 'Road Repair', '2025-06-16', '2025-06-16', 5, 6, 6, '2.00', NULL, 'JO-202506-010', '2025-06-16 11:33:28', '2025-06-16 11:34:06', NULL),
(12, NULL, 'test123', '2025-06-16', '2025-06-16', 2, 6, 1, '1.00', NULL, 'JO-202506-011', '2025-06-16 12:57:38', '2025-06-16 12:57:38', NULL),
(13, 13, 'testing', '2025-06-17', '2025-06-17', 6, 1, 5, '1.00', NULL, 'JO-202506-013', '2025-06-16 13:07:39', '2025-06-16 13:08:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_order_statements`
--

CREATE TABLE `job_order_statements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference_number` varchar(255) NOT NULL,
  `total_job_orders` int(11) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `paid_amount` decimal(10,2) NOT NULL,
  `balance_amount` decimal(10,2) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_order_statements`
--

INSERT INTO `job_order_statements` (`id`, `reference_number`, `total_job_orders`, `total_amount`, `paid_amount`, `balance_amount`, `remarks`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'JOS-202506-001', 1, '2400.00', '1000.00', '1400.00', NULL, '2025-06-16 10:36:40', '2025-06-16 10:36:40', NULL),
(2, 'JOS-202506-002', 1, '1000.00', '250.00', '750.00', NULL, '2025-06-16 10:38:24', '2025-06-16 10:38:24', NULL),
(3, 'JOS-202506-003', 0, '0.00', '500.00', '-500.00', NULL, '2025-06-16 10:38:55', '2025-06-16 10:38:55', NULL),
(4, 'JOS-202506-004', 1, '3600.00', '2700.00', '900.00', 'paid 2700', '2025-06-16 10:45:34', '2025-06-16 10:45:34', NULL),
(5, 'JOS-202506-005', 0, '0.00', '900.00', '-900.00', NULL, '2025-06-16 10:46:21', '2025-06-16 10:46:21', NULL),
(6, 'JOS-202506-006', 0, '0.00', '3600.00', '-3600.00', NULL, '2025-06-16 10:47:23', '2025-06-16 10:47:23', NULL),
(7, 'JOS-202506-007', 0, '0.00', '1200.00', '-1200.00', NULL, '2025-06-16 10:48:21', '2025-06-16 10:48:21', NULL),
(8, 'JOS-202506-008', 1, '6000.00', '1000.00', '5000.00', NULL, '2025-06-16 11:09:51', '2025-06-16 11:09:51', NULL),
(9, 'JOS-202506-009', 1, '10800.00', '100.00', '10700.00', NULL, '2025-06-16 11:23:59', '2025-06-16 11:23:59', NULL),
(10, 'JOS-202506-010', 1, '6000.00', '1500.00', '4500.00', NULL, '2025-06-16 11:24:29', '2025-06-16 11:24:29', NULL),
(11, 'JOS-202506-011', 3, '2350.00', '2000.00', '350.00', 'paid', '2025-06-16 11:34:05', '2025-06-16 11:34:05', NULL),
(12, 'JOS-202506-012', 1, '1000.00', '1000.00', '0.00', 'paid 1000', '2025-06-16 12:30:06', '2025-06-16 12:30:06', NULL),
(13, 'JOS-202506-013', 1, '350.00', '100.00', '250.00', NULL, '2025-06-16 13:08:10', '2025-06-16 13:08:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jos_job_order_links`
--

CREATE TABLE `jos_job_order_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_order_statement_id` bigint(20) UNSIGNED NOT NULL,
  `job_order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jos_job_order_links`
--

INSERT INTO `jos_job_order_links` (`id`, `job_order_statement_id`, `job_order_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-06-16 10:36:40', '2025-06-16 10:36:40'),
(2, 2, 2, '2025-06-16 10:38:24', '2025-06-16 10:38:24'),
(3, 4, 3, '2025-06-16 10:45:34', '2025-06-16 10:45:34'),
(5, 9, 6, '2025-06-16 11:23:59', '2025-06-16 11:23:59'),
(6, 10, 5, '2025-06-16 11:24:29', '2025-06-16 11:24:29'),
(7, 11, 8, '2025-06-16 11:34:05', '2025-06-16 11:34:05'),
(8, 11, 9, '2025-06-16 11:34:05', '2025-06-16 11:34:05'),
(9, 11, 10, '2025-06-16 11:34:06', '2025-06-16 11:34:06'),
(10, 12, 7, '2025-06-16 12:30:06', '2025-06-16 12:30:06'),
(11, 13, 13, '2025-06-16 13:08:10', '2025-06-16 13:08:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_15_091216_create_type_of_works_table', 1),
(5, '2025_06_15_091223_create_contractors_table', 1),
(6, '2025_06_15_091232_create_conductors_table', 1),
(7, '2025_06_15_091238_create_job_orders_table', 1),
(8, '2025_06_15_091244_create_job_order_statements_table', 1),
(9, '2025_06_15_091251_create_jos_job_order_links_table', 1),
(10, '2025_06_16_141634_add_jos_id_to_job_orders_table', 1),
(11, '2025_06_16_143500_add_remarks_to_job_order_statements_table', 1),
(12, '2025_06_16_181849_add_soft_deletes_to_job_order_statements_table', 2),
(13, '2025_06_16_182005_add_soft_deletes_to_job_order_statements_table', 3),
(14, '2025_06_16_182503_add_soft_deletes_to_job_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_of_works`
--

CREATE TABLE `type_of_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_works`
--

INSERT INTO `type_of_works` (`id`, `name`, `rate`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Electrical Work', '500.00', 'ELEC', '2025-06-16 09:37:48', '2025-06-16 09:37:48'),
(2, 'Plumbing', '300.00', 'PLUMB', '2025-06-16 09:37:48', '2025-06-16 09:37:48'),
(3, 'Painter', '700.00', 'PANT', '2025-06-16 09:37:48', '2025-06-16 09:37:48'),
(4, 'Carpainter', '900.00', 'CARPANT', '2025-06-16 09:37:48', '2025-06-16 09:37:48'),
(5, 'Road Repair', '500.00', 'TR-001', '2025-06-16 11:01:43', '2025-06-16 11:01:43'),
(6, 'Swipper', '350.00', 'SWP12', '2025-06-16 11:30:56', '2025-06-16 11:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `conductors`
--
ALTER TABLE `conductors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `conductors_email_unique` (`email`),
  ADD UNIQUE KEY `conductors_phone_number_unique` (`phone_number`);

--
-- Indexes for table `contractors`
--
ALTER TABLE `contractors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contractors_code_unique` (`code`),
  ADD UNIQUE KEY `contractors_email_unique` (`email`),
  ADD UNIQUE KEY `contractors_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `contractors_company_name_unique` (`company_name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_orders`
--
ALTER TABLE `job_orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_orders_reference_number_unique` (`reference_number`),
  ADD KEY `job_orders_type_of_work_id_foreign` (`type_of_work_id`),
  ADD KEY `job_orders_contractor_id_foreign` (`contractor_id`),
  ADD KEY `job_orders_conductor_id_foreign` (`conductor_id`);

--
-- Indexes for table `job_order_statements`
--
ALTER TABLE `job_order_statements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `job_order_statements_reference_number_unique` (`reference_number`);

--
-- Indexes for table `jos_job_order_links`
--
ALTER TABLE `jos_job_order_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jos_job_order_links_job_order_statement_id_foreign` (`job_order_statement_id`),
  ADD KEY `jos_job_order_links_job_order_id_foreign` (`job_order_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `type_of_works`
--
ALTER TABLE `type_of_works`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_of_works_code_unique` (`code`);

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
-- AUTO_INCREMENT for table `conductors`
--
ALTER TABLE `conductors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contractors`
--
ALTER TABLE `contractors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_orders`
--
ALTER TABLE `job_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `job_order_statements`
--
ALTER TABLE `job_order_statements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jos_job_order_links`
--
ALTER TABLE `jos_job_order_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `type_of_works`
--
ALTER TABLE `type_of_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_orders`
--
ALTER TABLE `job_orders`
  ADD CONSTRAINT `job_orders_conductor_id_foreign` FOREIGN KEY (`conductor_id`) REFERENCES `conductors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_orders_contractor_id_foreign` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_orders_type_of_work_id_foreign` FOREIGN KEY (`type_of_work_id`) REFERENCES `type_of_works` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jos_job_order_links`
--
ALTER TABLE `jos_job_order_links`
  ADD CONSTRAINT `jos_job_order_links_job_order_id_foreign` FOREIGN KEY (`job_order_id`) REFERENCES `job_orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jos_job_order_links_job_order_statement_id_foreign` FOREIGN KEY (`job_order_statement_id`) REFERENCES `job_order_statements` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
