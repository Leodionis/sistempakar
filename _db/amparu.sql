-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 06:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amparu`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `alamat`, `keterangan`, `no_telepon`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Ahmad', 'Jl. Kesehatan No. 123', 'Dokter Spesialis Paru', '08123456789', '/upload/gambar/dokter/1722527534.jpeg', '2024-05-01 02:49:35', '2024-08-01 08:52:14'),
(2, 'Dr. Budi', 'Jl. Sehat No. 456', 'Dokter Umum', '08765432109', '/upload/gambar/dokter/1722527527.jpeg', '2024-05-01 02:49:35', '2024-08-01 08:52:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Batuk Berdahak Selama 3 minggu ?', 'Apakah anda mengalami batuk berdahak lebih dari 3 minggu ?', '2024-05-01 02:49:44', '2024-08-01 08:58:02'),
(2, 'Demam meriang ?', 'Apakah anda mengalami demam meriang ?', '2024-05-01 02:49:44', '2024-08-01 08:58:31'),
(3, 'berkeringat tanpa sebab diantara sore - malam hari ?', 'Apakah anda mengalami berkeringat tanpa sebab diantara sore - malam hari', '2024-05-01 02:49:44', '2024-08-01 08:58:58'),
(4, 'Sesak Nafas ?', 'Apakah anda mengalami kesulitan bernapas ?', '2024-05-01 02:49:44', '2024-08-01 09:00:11'),
(5, 'Nafsu Makan Menurun ?', 'Apakah anda mengalami penurunan nafsu makan ?', '2024-05-01 02:49:44', '2024-08-01 09:00:03'),
(6, 'Penurunan Berat Badan', 'Apakah anda mengalami penurunan berat badan ?', '2024-08-01 09:00:38', '2024-08-01 09:00:38'),
(7, 'nyeri sendi di sekitar lutut, pinggul ?', 'Apakah anda mengalami nyeri sendi di sekitar lutut, pinggul ?', '2024-08-01 09:01:03', '2024-08-01 09:01:03'),
(8, 'malaise ( lemas ) ?', 'apakah anda mengalami malaise ( lemas ) ?', '2024-08-01 09:01:29', '2024-08-01 09:01:29'),
(9, 'terdapat area bersisik atau mengelupas dikulit ?', 'apakah anda mengalami kadang - kadang terdapat area bersisik atau mengelupas dikulit ?', '2024-08-01 09:01:57', '2024-08-01 09:01:57'),
(10, 'luka yang susah sembuh ?', 'Apakah anda mengalami luka yang susah sembuh ?', '2024-08-01 09:02:19', '2024-08-01 09:02:19'),
(11, 'kekakuan sendi atau pembengkakan pada sendi ?', 'Apakah anda mengalami kekakuan sendi atau pembengkakan pada sendi ?', '2024-08-01 09:02:46', '2024-08-01 09:02:46'),
(12, 'bintik merah atau kecoklatan pada kulit ?', 'Apakah anda mengalami bintik merah atau kecoklatan pada kulit ?', '2024-08-01 09:03:13', '2024-08-01 09:03:13'),
(13, 'pembengkakan kelenjar getah bening di leher, ketiak, atau pangkal paha ?', 'Apakah anda mengalami pembengkakan kelenjar getah bening di leher, ketiak, atau pangkal paha ?', '2024-08-01 09:03:49', '2024-08-01 09:03:49'),
(14, 'rasa sakit atau ketidaknyamanan di daerah yang terkena ?', 'Apakah anda mengalami  rasa sakit atau ketidaknyamanan di daerah yang terkena ?', '2024-08-01 09:04:15', '2024-08-01 09:04:15');

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
(4, '2019_12_18_080546_create_dokter_table', 1),
(5, '2019_12_18_150742_create_penyakit_table', 1),
(6, '2019_12_18_171122_create_gejala_table', 1),
(7, '2019_12_18_172541_create_pengetahuan_table', 1);

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
-- Table structure for table `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penyakit` bigint(20) UNSIGNED NOT NULL,
  `id_gejala` bigint(20) UNSIGNED NOT NULL,
  `nilai_mb` double NOT NULL,
  `nilai_md` double NOT NULL,
  `nilai_cf` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengetahuan`
--

INSERT INTO `pengetahuan` (`id`, `id_penyakit`, `id_gejala`, `nilai_mb`, `nilai_md`, `nilai_cf`, `created_at`, `updated_at`) VALUES
(8, 1, 1, 0.87, 0.1, 0.77, '2024-08-01 09:11:52', '2024-08-01 09:13:34'),
(9, 1, 2, 0.85, 0.1, 0.75, '2024-08-01 09:13:25', '2024-08-01 09:13:25'),
(10, 1, 4, 0.76, 0.2, 0.56, '2024-08-01 09:15:59', '2024-08-01 09:15:59'),
(11, 1, 5, 0.8, 0.11, 0.6900000000000001, '2024-08-01 09:17:03', '2024-08-01 09:17:03'),
(12, 1, 6, 0.82, 0.1, 0.72, '2024-08-01 09:17:56', '2024-08-01 09:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanganan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`, `keterangan`, `penanganan`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Tuberkulosis Paru - Paru', 'Infeksi paru-paru yang disebabkan oleh bakteri, virus, atau jamur', 'Minum obat antibiotik sesuai resep dokter, istirahat cukup, konsumsi makanan bergizi', '/upload/gambar/1722527569.png', '2024-05-01 02:49:52', '2024-08-01 08:52:49'),
(2, 'Tuberkulosis Resisten Obat', 'Penyakit menular yang disebabkan oleh bakteri Mycobacterium tuberculosis', 'Minum obat antituberkulosis secara teratur, isolasi penderita untuk mencegah penularan, konsumsi makanan bergizi', '/upload/gambar/1722527586.png', '2024-05-01 02:49:52', '2024-08-01 08:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `no_telepon`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Leodionis', '085926925727', 'admin@admin.com', NULL, '$2y$10$sXNXZXsMsuYmbHK4xJEDBuNL.WIB7G973R9epG6RDIims5eRT17gq', NULL, '2024-04-30 17:00:00', '2024-08-01 08:54:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengetahuan_id_penyakit_foreign` (`id_penyakit`),
  ADD KEY `pengetahuan_id_gejala_foreign` (`id_gejala`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
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
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD CONSTRAINT `pengetahuan_id_gejala_foreign` FOREIGN KEY (`id_gejala`) REFERENCES `gejala` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pengetahuan_id_penyakit_foreign` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
