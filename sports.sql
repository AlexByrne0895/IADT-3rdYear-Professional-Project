-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 03:31 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sports`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(2, 2, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(3, 3, '2019-01-31 17:11:18', '2019-01-31 17:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `leagues`
--

CREATE TABLE `leagues` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leagues`
--

INSERT INTO `leagues` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'The Motley Crew', '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(2, 'No Guts No Glory', '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(3, 'Injured Head & Shoulders', '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(4, 'Show me the Money', '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(5, 'The Dirty Dozen', '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(6, 'Test League 22', '2019-02-07 13:19:24', '2019-02-07 13:25:22');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `phone_number`, `address`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '0879687564', 'Sebastopol, CA, USA', 4, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(2, '0873355761', 'San Francisco, CA, USA', 5, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(3, '0879687567', '23 Fake Str', 6, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(4, '0864613464', '54 Fake St', 7, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(5, '0873613464', '66 Fake St', 8, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(6, '0853613464', '97 Fake St', 9, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(7, '0869013464', '24 Fake St', 10, '2019-01-31 17:11:18', '2019-01-31 17:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_team_score` int(10) UNSIGNED DEFAULT NULL,
  `away_team_score` int(10) UNSIGNED DEFAULT NULL,
  `home_team_id` int(10) UNSIGNED NOT NULL,
  `away_team_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `date`, `time`, `home_team_score`, `away_team_score`, `home_team_id`, `away_team_id`, `created_at`, `updated_at`) VALUES
(1, '2018-05-12', '12:30pm', NULL, NULL, 4, 2, '2019-01-31 17:11:19', '2019-02-19 14:26:48'),
(2, '2018-07-16', '2:00pm', 3, 4, 3, 1, '2019-01-31 17:11:19', '2019-01-31 17:11:19'),
(3, '2018-06-12', '12:00pm', NULL, NULL, 1, 2, '2019-02-19 14:23:15', '2019-02-19 14:23:15');

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
(291, '2014_10_12_000000_create_users_table', 1),
(292, '2014_10_12_100000_create_password_resets_table', 1),
(293, '2018_10_18_094356_create_roles_table', 1),
(294, '2018_10_18_095704_create_role_user_table', 1),
(295, '2018_11_01_142113_create_admin_table', 1),
(296, '2018_11_01_142243_create_manager_table', 1),
(297, '2018_11_01_142920_create_league_table', 1),
(298, '2018_11_01_143000_create_team_table', 1),
(299, '2018_11_01_143015_create_player_table', 1),
(300, '2018_11_01_143030_create_matches_table', 1);

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
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `team_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `position`, `date_of_birth`, `phone_number`, `address`, `emergency_name`, `emergency_number`, `user_id`, `team_id`, `created_at`, `updated_at`) VALUES
(1, 'Defender', '2000-12-12', '0879687564', '27 fake str', 'Kevin Smith', '0869687364', 11, 3, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(2, 'Midfielder', '2000-12-12', '0865687564', '25 fake str', 'Linda Smith', '0863387364', 12, 4, '2019-01-31 17:11:19', '2019-01-31 17:11:19'),
(3, 'Forward', '2000-12-12', '0875689544', '25 fake str', 'Anne Smith', '0863388864', 13, 4, '2019-01-31 17:11:19', '2019-01-31 17:11:19'),
(4, 'Goalkeeper', '1990-11-25', '0879345464', '51 Main St', 'Keith', '0865686564', 14, 1, '2019-01-31 17:11:19', '2019-01-31 17:11:19'),
(5, 'Defender', '1980-09-10', '0879745464', '9 Main St', 'Haley', '0857887568', 15, 2, '2019-01-31 17:11:19', '2019-01-31 17:11:19'),
(6, 'Midfielder', '2000-10-05', '0870430464', '23 Main St', 'Mark', '0869690664', 16, 5, '2019-01-31 17:11:19', '2019-01-31 17:11:19'),
(7, 'Forward', '1999-12-20', '0870430464', '28 Main St', 'Amy', '0869690664', 17, 2, '2019-01-31 17:11:19', '2019-01-31 17:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'An Administrator', '2019-01-31 17:11:17', '2019-01-31 17:11:17'),
(2, 'manager', 'A Manager', '2019-01-31 17:11:17', '2019-01-31 17:11:17'),
(3, 'player', 'A Player', '2019-01-31 17:11:18', '2019-01-31 17:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 2, 7, NULL, NULL),
(8, 2, 8, NULL, NULL),
(9, 2, 9, NULL, NULL),
(10, 2, 10, NULL, NULL),
(11, 3, 11, NULL, NULL),
(12, 3, 12, NULL, NULL),
(13, 3, 13, NULL, NULL),
(14, 3, 14, NULL, NULL),
(15, 3, 15, NULL, NULL),
(16, 3, 16, NULL, NULL),
(17, 3, 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `league_id` int(10) UNSIGNED NOT NULL,
  `manager_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `address`, `phone`, `league_id`, `manager_id`, `created_at`, `updated_at`) VALUES
(1, 'Dream Crushers', '38Fake Club', '0863664464', 1, 3, '2019-01-31 17:11:18', '2019-02-20 13:36:32'),
(2, 'We Showed Up', '48Fake Club', '0873564464', 2, 2, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(3, 'Ragin’ Cajuns', '98Fake Club', '0853769464', 3, 4, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(4, 'Scarlet Raptors', '97Fake Club', '0875484464', 4, 5, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(5, 'Sea Lions', '64Fake Club', '1234567890', 5, 6, '2019-01-31 17:11:18', '2019-02-14 17:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Kenn Donnell', 'KennDonnell@hotmail.com', NULL, '$2y$10$gXei867hy2.6urW8M6FWse4ZEKYa5JC3wGp6JupzEdHWhhJJqZf9O', NULL, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(2, 'Kathy', 'Kathy@example.com', NULL, '$2y$10$z.z/Q6jzxxad876zjava0.8DZPnWf7zQMJyQdBTRGGsbqd/iHh.vG', NULL, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(3, 'Mary Anne', 'maryAnn@hotmail.com', NULL, '$2y$10$f4aF2AmC9U8p6u/3iGs6reNgJr3RuLwajIOCNp/F/Agnvd.RT1hR6', NULL, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(4, 'John O Reilly', 'johnOReilly@hotmail.com', NULL, '$2y$10$CODNc7yFiCK8XvHtXimFoO3Y3hm.7YXS5OH7LonXn421m4fv0mQB2', NULL, '2019-01-31 17:11:18', '2019-02-20 13:39:10'),
(5, 'Joe', 'joe01@hotmail.com', NULL, '$2y$10$YWhDUvOV1QxGlnBEhzevtuAHyXsH0/tNFTj5B/rGt3NoKwHJhx6hi', NULL, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(6, 'Joe', 'joe@example.com', NULL, '$2y$10$RuGBMmGm3tsplbIIJuBfQeZOXmZJ1e34/91K6eXHI.FxjWQialHz2', NULL, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(7, 'Adam', 'adam@example.com', NULL, '$2y$10$yTR8JWDZJ1ao7sDPKYZzkuARW6mGMtRy9Aj5sjzBHDNjCrCuHRJDa', NULL, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(8, 'Jade', 'jade@example.com', NULL, '$2y$10$AXa7OLLgAWON7UXrs/mzu.4sylfnh7UJQNoKdi.jGTPx9UlDe5MU2', NULL, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(9, 'Alex', 'alex@example.com', NULL, '$2y$10$w.EfH53F.MSMppfVAQS7dOlwE4.noNcOycBGr4Oyu5u1pgp8cCCNu', NULL, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(10, 'Kai', 'kai@example.com', NULL, '$2y$10$mT2DEqt3WyOjXDJ.4b5t.OiF81NeSnxjoD8Ax4LBjbfaHDUN7LgZ.', NULL, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(11, 'Mary', 'mary@example.com', NULL, '$2y$10$TmumpAR.nN2183D53MkAtOTRxSG9l2dDh7UYYpfSrG/AS58aidOdS', NULL, '2019-01-31 17:11:18', '2019-01-31 17:11:18'),
(12, 'Anne', 'anne@example.com', NULL, '$2y$10$iabBwuKs65W2/qYKgVKhj.slTrgyW/dNNuqRAMq9NsVkNes/scuse', NULL, '2019-01-31 17:11:19', '2019-01-31 17:11:19'),
(13, 'Anne', 'anne01@example.com', NULL, '$2y$10$nBsdGist9VpR55DpVdLAI./ttP4.he5mgiO672aDUZ/U2b8HPB.SG', NULL, '2019-01-31 17:11:19', '2019-01-31 17:11:19'),
(14, 'David', 'david@example.com', NULL, '$2y$10$PiNL59Imv6S.F6w3q9h10.7q22xS.mTDw4zXONwM63oOMVAMGSzEe', NULL, '2019-01-31 17:11:19', '2019-01-31 17:11:19'),
(15, 'Jack', 'jack@example.com', NULL, '$2y$10$Ue7JRtzOT.oeCpkolX87o.5nVl9kh.B/NKDtsYUnDtNjYjtArLps.', NULL, '2019-01-31 17:11:19', '2019-01-31 17:11:19'),
(16, 'Megan', 'megan@example.com', NULL, '$2y$10$PP4ev9me0C2mnlK43tah2u9PWOJpv73vIVIrCBL8hmK4pjfitBF4y', NULL, '2019-01-31 17:11:19', '2019-01-31 17:11:19'),
(17, 'John', 'john@example.com', NULL, '$2y$10$IvKhhPZL73KuKzsP/obaeuto8dZib4pF2mJF/H2n9K6lBoKxBpIdO', NULL, '2019-01-31 17:11:19', '2019-01-31 17:11:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_user_id_foreign` (`user_id`);

--
-- Indexes for table `leagues`
--
ALTER TABLE `leagues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `managers_user_id_foreign` (`user_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matches_home_team_id_foreign` (`home_team_id`),
  ADD KEY `matches_away_team_id_foreign` (`away_team_id`);

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
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `players_user_id_foreign` (`user_id`),
  ADD KEY `players_team_id_foreign` (`team_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_league_id_foreign` (`league_id`),
  ADD KEY `teams_manager_id_foreign` (`manager_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leagues`
--
ALTER TABLE `leagues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `managers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_away_team_id_foreign` FOREIGN KEY (`away_team_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `matches_home_team_id_foreign` FOREIGN KEY (`home_team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `players_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_league_id_foreign` FOREIGN KEY (`league_id`) REFERENCES `leagues` (`id`),
  ADD CONSTRAINT `teams_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `managers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
