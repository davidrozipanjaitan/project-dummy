-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 10:34 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_vs`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_cities` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_provinsi` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `nama_cities`, `postal_code`, `id_provinsi`, `created_at`, `updated_at`) VALUES
(1, 'Jakarta ', '36150', 2, NULL, NULL),
(3, 'Medan', '22134', 1, NULL, NULL),
(4, 'Siantar', '22142', 1, '2018-03-01 23:58:21', '2018-03-01 23:58:21'),
(5, 'Balige', '22312', 1, '2018-03-02 00:00:02', '2018-03-02 00:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_region` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `id_region`, `created_at`, `updated_at`) VALUES
(1, 'Indonesia', 9, '2018-02-20 21:05:02', '2018-02-28 01:05:28'),
(2, 'Thailand', 9, '2018-02-20 21:24:27', '2018-02-20 21:24:27'),
(3, 'Malaysa', 9, '2018-02-20 21:25:19', '2018-02-20 21:25:19'),
(4, 'Italia', 3, '2018-02-20 21:25:30', '2018-02-20 21:25:30'),
(5, 'Vietnam', 9, '2018-02-20 23:37:17', '2018-02-20 23:40:29'),
(6, 'Argentina', 4, '2018-02-20 23:52:25', '2018-02-20 23:52:25'),
(7, 'Swiss', 3, '2018-02-20 23:52:35', '2018-02-20 23:52:35'),
(8, 'Mesir', 10, '2018-02-20 23:52:50', '2018-02-28 01:05:54'),
(9, 'Nigeria', 10, '2018-02-28 00:12:03', '2018-02-28 00:12:03'),
(10, 'Ghana', 10, '2018-02-28 00:12:16', '2018-02-28 00:12:16'),
(11, 'Pantai Gading', 10, '2018-02-28 00:12:36', '2018-02-28 01:04:58'),
(12, 'Australia', 5, '2018-02-28 00:21:58', '2018-02-28 00:29:43');

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
(5, '2018_01_31_064844_create_pages_table', 3),
(6, '2018_02_01_034907_create_categories_table', 4),
(20, '2014_10_12_000000_create_users_table', 5),
(21, '2014_10_12_100000_create_password_resets_table', 5),
(22, '2018_01_30_043621_create_articles_table', 5),
(23, '2018_01_30_080422_create_produk_table', 5),
(24, '2018_02_15_091431_create_regions_table', 6),
(25, '2018_02_15_091509_create_countries_table', 6),
(26, '2018_02_21_065814_create_provinces_table', 7),
(27, '2018_02_23_071418_create_cities_table', 8);

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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan_produk` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `keterangan_produk`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'Vacuum Machine DZ-500X', 'Model	DZ-500/2E\r\nTotal Power	1500 watt\r\nChamber Dimension (L×W×H)	53 × 52 ×14 cm\r\nSealing Ba	500 x 10 mm', 17000000, 100, '2018-02-19 01:31:37', '2018-02-28 00:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_provinsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_country` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `nama_provinsi`, `id_country`, `created_at`, `updated_at`) VALUES
(1, 'Sumatera Utara', 1, '2018-02-21 00:26:12', '2018-02-21 00:26:12'),
(2, 'DKI Jakarta', 1, '2018-02-21 00:27:00', '2018-02-21 00:27:00'),
(3, 'Selangor FC', 3, '2018-02-21 00:33:13', '2018-02-28 01:10:11'),
(4, 'Buenos Aires', 6, '2018-02-21 00:49:09', '2018-02-21 00:49:09'),
(5, 'Milan', 4, '2018-02-28 00:40:58', '2018-02-28 00:40:58'),
(6, 'Sumatera Barat', 1, '2018-02-28 02:53:39', '2018-02-28 02:53:39'),
(7, 'Banda Aceh', 1, '2018-02-28 02:53:50', '2018-02-28 02:53:50'),
(8, 'Jambi', 1, '2018-02-28 02:54:02', '2018-02-28 02:54:02'),
(9, 'Sumatera Selatan', 1, '2018-02-28 02:54:11', '2018-02-28 02:54:11'),
(10, 'Lampung', 1, '2018-02-28 02:54:20', '2018-02-28 02:54:20'),
(11, 'Riau', 1, '2018-02-28 02:54:31', '2018-02-28 02:54:31');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(3, 'Eropa', '2018-02-15 02:59:18', '2018-02-28 00:30:32'),
(4, 'Amerika', '2018-02-15 03:00:09', '2018-02-15 03:00:09'),
(5, 'Australia', '2018-02-15 03:00:35', '2018-02-15 03:00:35'),
(9, 'Asia', '2018-02-20 20:18:08', '2018-02-20 20:18:08'),
(10, 'Afrika', '2018-02-20 23:53:02', '2018-02-20 23:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `jabatan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'David', 'david', 'dav_rozi@yahoo.co.id', '$2y$10$jTSCdZGFlT1A7fLl65HQbeRd197Lr5nujKY2btqOcJ71UPwqw4sCC', 'ADMIN', 'cJxzjyzoF2mANV5bwEFiqgEPdgB3lpi7SwFLNKKVIlewmRaXA355MIVUPS6C', '2018-02-15 02:36:57', '2018-02-15 02:36:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_id_provinsi_foreign` (`id_provinsi`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countries_id_region_foreign` (`id_region`);

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
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provinces_id_country_foreign` (`id_country`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_id_provinsi_foreign` FOREIGN KEY (`id_provinsi`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `countries`
--
ALTER TABLE `countries`
  ADD CONSTRAINT `countries_id_region_foreign` FOREIGN KEY (`id_region`) REFERENCES `regions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `provinces`
--
ALTER TABLE `provinces`
  ADD CONSTRAINT `provinces_id_country_foreign` FOREIGN KEY (`id_country`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
