-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 03 sep. 2019 à 15:37
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `campagne_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `communaute`
--

CREATE TABLE `communaute` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lien` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `communaute`
--

INSERT INTO `communaute` (`id`, `nom`, `localite`, `lien`, `created_at`, `updated_at`) VALUES
(8, 'BPEB', 'Abidjan - Koumassi', 'http:link.com', '2019-08-29 02:08:12', '2019-09-02 22:41:10'),
(10, 'Community 1', 'Abidjan - Koumassi', NULL, '2019-09-01 17:08:18', '2019-09-01 17:08:18'),
(11, 'Community 2', 'Abidjan - Koumassi', NULL, '2019-09-01 17:08:34', '2019-09-01 17:08:34'),
(12, 'Community 3', 'Abidjan - Koumassi', NULL, '2019-09-01 17:08:48', '2019-09-01 17:08:48'),
(13, 'Doumbi community', 'Abidjan - Abobo', NULL, '2019-09-01 18:16:21', '2019-09-01 18:16:21');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_28_190821_create_sensibilisation_table', 2),
(4, '2019_08_28_191352_create_communaute_table', 3),
(5, '2019_08_28_191755_create_recense_table', 3),
(6, '2019_08_29_175829_add_communaute_id_to_sensibilisation_table', 4),
(9, '2019_08_29_203441_add_non_nullable_to_tel_recense_table', 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ok@nan.ci', '$2y$10$Vg7q2c7UY6PQVPRJACHQBuNV.Y3LCt4P7fyhS8GfUUeD4lWaqCo16', '2019-09-01 12:29:26');

-- --------------------------------------------------------

--
-- Structure de la table `recense`
--

CREATE TABLE `recense` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `niveau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sensibilisation_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recense`
--

INSERT INTO `recense` (`id`, `nom`, `prenom`, `sexe`, `tel`, `niveau`, `email`, `matricule`, `created_at`, `updated_at`, `sensibilisation_id`) VALUES
(3, 'Yves', 'Michael', 'Masculin', '09004930', 'Terminale', NULL, NULL, '2019-09-01 19:15:33', '2019-09-01 19:15:33', '13'),
(4, 'Vicky', 'Imby', 'Feminin', '79713162', 'Terminale', NULL, '0900048', '2019-09-01 19:16:18', '2019-09-01 19:16:18', '13'),
(5, 'bly', 'bene', 'Feminin', '44288418', 'Premiere', NULL, '13047602V', '2019-09-01 19:19:18', '2019-09-01 19:19:18', '13'),
(6, 'bly', 'bene', 'Feminin', '44288417', 'Terminale', NULL, '13047602V', '2019-09-01 19:20:38', '2019-09-01 19:20:38', '13'),
(7, 'Doumbiskov', 'Milliardais russe', 'Masculin', '48990150', 'Terminale', NULL, '0802345M', '2019-09-01 19:26:24', '2019-09-01 19:26:24', '13'),
(8, 'attofouet', 'Imby', 'Feminin', '090837', 'Terminale', NULL, '098', '2019-09-01 19:26:47', '2019-09-01 19:26:47', '13'),
(9, 'attofouet', 'Imby', 'Feminin', '0978655', 'Terminale', NULL, NULL, '2019-09-01 19:27:28', '2019-09-01 19:27:28', '13'),
(10, 'Imby', 'Vicky', 'Feminin', '79713162', 'Terminale', NULL, NULL, '2019-09-01 19:29:12', '2019-09-01 19:29:12', '16'),
(11, 'Imby', 'Victoria', 'Feminin', '09024509', 'Premiere', NULL, '12345678M', '2019-09-01 19:29:50', '2019-09-01 19:29:50', '16'),
(12, 'Imby', 'Victoria', 'Feminin', '48090245', 'Terminale', NULL, '1234567M', '2019-09-01 19:34:56', '2019-09-01 19:34:56', '21'),
(13, 'Bly', 'bene', 'Masculin', '44288417', 'Terminale', NULL, '13047602X', '2019-09-01 19:35:16', '2019-09-01 19:35:16', '18'),
(14, 'Lala', 'Lali', 'Feminin', '09078006', 'Terminale', NULL, NULL, '2019-09-01 19:42:45', '2019-09-01 19:42:45', '18'),
(15, 'Petit', 'Benito', 'Masculin', '134556679', 'Terminale', NULL, '14437467M', '2019-09-01 19:42:57', '2019-09-01 19:42:57', '18'),
(16, 'bly', 'ketoura', 'Feminin', '44288417', 'Terminale', NULL, '13047602G', '2019-09-01 19:52:02', '2019-09-01 19:52:02', '18'),
(17, 'bly', 'bene', 'Masculin', '1234567', 'Terminale', NULL, '19625328R', '2019-09-01 20:00:09', '2019-09-01 20:00:09', '18'),
(18, 'Bly', 'noel', 'Masculin', '79713162', 'Terminale', NULL, '13047602G', '2019-09-01 20:00:51', '2019-09-01 20:00:51', '18'),
(19, 'Vicky', 'Imby', 'Feminin', '79713162', 'Terminale', NULL, NULL, '2019-09-01 20:15:16', '2019-09-01 20:15:16', '20'),
(20, 'Yves', 'Michale', 'Masculin', '09004930', 'Terminale', NULL, NULL, '2019-09-01 20:15:37', '2019-09-01 20:15:37', '20'),
(21, 'Bly', 'bene', 'Masculin', '79713162', 'Terminale', NULL, '13047602X', '2019-09-01 20:15:42', '2019-09-01 20:15:42', '22'),
(22, 'Jeanne', 'Jeanne', 'Feminin', '03006745', 'Terminale', NULL, NULL, '2019-09-01 20:16:03', '2019-09-01 20:16:03', '20'),
(24, 'Lola', 'Imby', 'Feminin', '09876543', 'Terminale', NULL, NULL, '2019-09-01 20:18:18', '2019-09-01 20:18:18', '25'),
(25, 'kone', 'ousmane', 'Masculin', '1234567', 'Terminale', NULL, '1233AAAA', '2019-09-02 09:46:28', '2019-09-02 09:46:28', '26'),
(26, 'serveur', 'sande', 'Masculin', '1234', 'Terminale', NULL, 'AZE123', '2019-09-02 09:52:55', '2019-09-02 09:52:55', '24');

-- --------------------------------------------------------

--
-- Structure de la table `sensibilisation`
--

CREATE TABLE `sensibilisation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beginAt` date NOT NULL,
  `endAt` date NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `communaute_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sensibilisation`
--

INSERT INTO `sensibilisation` (`id`, `libelle`, `description`, `beginAt`, `endAt`, `slug`, `created_at`, `updated_at`, `communaute_id`) VALUES
(18, 'JIO', 'journée d\'orientation', '2019-09-01', '2019-12-01', 'jio-01092019073021', '2019-09-01 19:30:21', '2019-09-01 19:30:21', '11'),
(19, 'Doumbi fan club', 'Recensement des fans de doumbi', '2019-09-06', '2019-09-21', 'doumbi-fan-club-01092019073411', '2019-09-01 19:34:11', '2019-09-01 19:34:11', '13'),
(20, 'Abidjan', 'Recensement des élèves', '2019-09-01', '2019-09-03', 'abidjan-01092019073534', '2019-09-01 19:35:34', '2019-09-01 19:35:34', '10'),
(21, 'Les enfants de doumbi', 'Tous ceux qui aime doumbi', '2019-09-13', '2019-09-22', 'les-enfants-de-doumbi-01092019074059', '2019-09-01 19:40:59', '2019-09-01 19:40:59', '13'),
(22, 'jio2', 'BNKJNHL', '2019-12-31', '2018-12-01', 'jio2-01092019075116', '2019-09-01 19:51:16', '2019-09-01 19:51:16', '11'),
(24, 'MANGEUR DE VICKY', 'on va bien la manger', '2019-09-06', '2019-09-14', 'mangeur-de-vicky-01092019081618', '2019-09-01 20:16:18', '2019-09-01 20:16:18', '13'),
(25, 'FASHION WEEK', 'Beauté fatale', '2019-09-03', '2019-09-04', 'fashion-week-01092019083114', '2019-09-01 20:17:22', '2019-09-01 20:31:14', '10'),
(26, 'job', 'dans le cadre d un recensement des nouveaux bacheliers', '2019-09-05', '2019-09-07', 'job-02092019094531', '2019-09-02 09:45:31', '2019-09-02 09:45:31', '10');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `communaute_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `prenom`, `sexe`, `tel`, `localite`, `niveau`, `specialite`, `email`, `type`, `email_verified_at`, `password`, `communaute_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Benito', 'Beni', 'Masculin', '09536409', 'Abidjan - Koumassi', 'Licence 1', 'RSI', 'beni@gmail.com', '2', NULL, '$2y$10$F3cCKFg2KaHzTZlgp9kxwOcpdqxC407/ZvzLpU.zM7gwxQfLfvVFK', '11', NULL, '2019-09-01 17:20:21', '2019-09-01 17:20:21'),
(12, 'epi', 'Epiphani', 'Masculin', '09004930', 'Abidjan - Koumassi', 'Licence 3', 'DAS', 'epi@gmail.com', '3', NULL, '$2y$10$MmEOAYGe8E.76Ewe4ndGj.vgJgECJszmvFW/t02O4v.QBlVkESpim', '10', NULL, '2019-09-01 17:23:32', '2019-09-01 17:23:32'),
(14, 'vicky', 'vicky', 'Feminin', '79713162', 'Abidjan - Koumassi', 'Licence 3', 'DAS', 'vicky@mail.co', '2', NULL, '$2y$10$LuCuvD913cwoFUBE8oZCKujUWUQe4yvGVHiPw9EXp5HcjmFHHdh8q', '10', NULL, '2019-09-01 17:30:15', '2019-09-01 17:30:15'),
(15, 'serveur', 'serveur', 'Masculin', '12345678', 'Abidjan - Abobo', 'Master 1', 'RSI', 'serveur@serveur.ci', '2', NULL, '$2y$10$MRqs5J5D5JdXju8n9pe4ju1zO0kLFKjaV9Ptw9FfkxKqFtPLx2ZWi', '13', NULL, '2019-09-01 17:44:21', '2019-09-01 17:44:21'),
(18, 'vicky', 'bene', 'Feminin', '79713162', 'Abidjan - Koumassi', 'Master 1', 'RSI', 'beni@gmail.FR', '3', NULL, '$2y$10$PRlGTV2Wo78ExDHy.esKDuEcz0aPF6Rz2awySgKt0m8JluOl1R0e2', NULL, NULL, '2019-09-01 20:19:15', '2019-09-01 20:19:15'),
(19, 'doumbiskov', 'millliadaire', 'Masculin', '48990150', 'Abidjan - Koumassi', 'Licence 1', 'RSI', 'djaka@gmail.com', '3', NULL, '$2y$10$p0GcRG7WCI2KTetYZgdKSeHOhEiBVMECK2YrxQQKrLfaqb/5kF6HG', NULL, NULL, '2019-09-01 20:21:51', '2019-09-01 20:21:51'),
(20, 'Doumbi', 'Royal', 'Masculin', '09876543', 'Abidjan - Koumassi', 'Licence 1', 'RSI', 'doumbi@gmail.com', '3', NULL, '$2y$10$B70IoVQL8C/Ll6w24E8p1ude/0Hf8F9xR7EtcA3lar2X7rnZYidMa', NULL, NULL, '2019-09-01 20:22:22', '2019-09-01 20:22:22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `communaute`
--
ALTER TABLE `communaute`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `recense`
--
ALTER TABLE `recense`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recense_sensibilisation_id_index` (`sensibilisation_id`);

--
-- Index pour la table `sensibilisation`
--
ALTER TABLE `sensibilisation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sensibilisation_communaute_id_index` (`communaute_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_communaute_id_index` (`communaute_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `communaute`
--
ALTER TABLE `communaute`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `recense`
--
ALTER TABLE `recense`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `sensibilisation`
--
ALTER TABLE `sensibilisation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
