-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 07:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_project`
--

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
(1, '2014_10_12_000000_create_user_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_02_085913_create_role_table', 1),
(6, '2024_02_02_094255_create_role_user_table', 1),
(7, '2024_02_02_115237_create_students_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'staff', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(10) UNSIGNED NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `school` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `last_name`, `address`, `age`, `gender`, `school`, `created_at`, `updated_at`) VALUES
(100, 'Sincere', 'Macejkovic', '825 Klein Orchard\nBriceport, HI 51744-4345', 23, 'female', 'Velit praesentium.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(101, 'Miller', 'Orn', '802 Rylee Cliff Apt. 570\nWest Briellemouth, VA 43868', 22, 'male', 'Ut velit.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(102, 'Royce', 'Runolfsdottir', '14341 Wava Harbors Apt. 751\nWunschview, OH 86214-5707', 25, 'female', 'Soluta non.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(103, 'Marcel', 'Turcotte', '3516 Wiegand Haven\nLake Myles, NJ 52613-0899', 23, 'female', 'Et molestiae.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(104, 'Tony', 'Parisian', '24024 Rodriguez Via Suite 036\nAnkundingchester, CT 79087-4044', 20, 'male', 'Enim autem.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(105, 'Velva', 'Labadie', '573 Arvel Estates Suite 731\nKatherineview, IL 74890', 19, 'female', 'Accusamus quisquam.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(106, 'Percival', 'Bernhard', '1303 Clara Squares Apt. 284\nPort Karlietown, TX 81053-4170', 21, 'female', 'Sed officiis vel.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(107, 'Estevan', 'Runolfsdottir', '8247 Tristin Pines Apt. 096\nLeoport, KY 97250', 25, 'male', 'Non qui.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(108, 'Carlee', 'Bradtke', '97525 Luciano Squares\nPort Aliya, TX 91772-3571', 20, 'female', 'Aspernatur rerum.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(109, 'Dante', 'Jacobi', '8550 Manley Cove Suite 286\nQuitzonburgh, UT 15689', 21, 'female', 'Dolores consequatur rem.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(110, 'August', 'Wunsch', '15189 George Turnpike\nNew Marcellaton, NJ 88620', 18, 'male', 'Sunt esse.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(111, 'Xander', 'Kulas', '596 Kling Inlet\nNew Reidborough, PA 48002-5885', 23, 'male', 'Nostrum est aperiam.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(112, 'Shanelle', 'Larson', '53966 Berge Lodge Suite 595\nProsaccoland, MI 96660', 21, 'female', 'Saepe iure aliquam.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(113, 'Lenny', 'Wolff', '6210 Luettgen Drive\nFishershire, IA 55793', 20, 'female', 'Veritatis ipsam hic.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(114, 'Rigoberto', 'Lynch', '2148 Paucek Spurs Suite 496\nNorth Elouise, VT 13200-9182', 25, 'male', 'Harum minus molestiae.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(115, 'Domingo', 'Kohler', '65200 Hilpert Rest\nHankchester, AR 86434-0745', 19, 'female', 'Iusto tempora.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(116, 'Mabelle', 'Emard', '27211 Vida Oval\nCarrollstad, SC 97656', 23, 'female', 'Facilis quos.', '2024-02-04 22:28:00', '2024-02-04 22:28:00'),
(117, 'Dan', 'Gerlach', '93500 Jaskolski Glens Suite 721\nNew Ivahbury, DC 56530-1023', 21, 'male', 'Quas non et.', '2024-02-04 22:28:00', '2024-02-04 22:28:00');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Christian Roy Mabilin', 'mabilinr4@gmail.com', NULL, '$2y$12$iw7fjnzqHq29HPYclghUvenWtIeN3GEQsEENEm1z/oGCK0KShrV.W', NULL, '2024-02-03 19:37:47', '2024-02-03 19:37:47');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
