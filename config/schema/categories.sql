-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 21 avr. 2020 à 13:11
-- Version du serveur :  8.0.19
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` smallint UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` smallint UNSIGNED DEFAULT NULL,
  `identifier` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_count` mediumint UNSIGNED NOT NULL DEFAULT '0',
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `position`, `identifier`, `video_count`, `active`) VALUES
(1, 'Family', 'family', 36, '73', 18679, 1),
(2, 'Horror', 'horror', 50, '138', 998154, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories_i18n`
--

CREATE TABLE `categories_i18n` (
  `id` int UNSIGNED NOT NULL,
  `locale` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` tinyint NOT NULL DEFAULT '1',
  `foreign_key` int UNSIGNED NOT NULL,
  `field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories_i18n`
--

INSERT INTO `categories_i18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(1, 'de', 1, 1, 'name', 'Familie'),
(2, 'de', 1, 2, 'name', 'Grusel'),
(3, 'fr', 1, 1, 'name', 'Famille'),
(4, 'fr', 1, 2, 'name', 'Horreur');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_ak_2` (`identifier`),
  ADD KEY `categories_idx_1` (`active`,`slug`) USING BTREE;

--
-- Index pour la table `categories_i18n`
--
ALTER TABLE `categories_i18n`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_i18n_ak_1` (`locale`,`model`,`foreign_key`,`field`),
  ADD KEY `categories_i18n_idx_1` (`model`,`foreign_key`,`field`),
  ADD KEY `categories_i18n_idx_2` (`locale`,`field`,`content`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` smallint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `categories_i18n`
--
ALTER TABLE `categories_i18n`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
