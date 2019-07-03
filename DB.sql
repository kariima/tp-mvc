-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 03, 2019 at 12:07 PM
-- Server version: 5.7.25
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Médiathèque`
--
CREATE DATABASE IF NOT EXISTS `Médiathèque` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Médiathèque`;

-- --------------------------------------------------------

--
-- Table structure for table `Articles`
--

CREATE TABLE `Articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Media`
--

CREATE TABLE `Media` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `creator` varchar(255) NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Media`
--

INSERT INTO `Media` (`id`, `title`, `creator`, `type_id`) VALUES
(3, 'La princesse des glaces', 'Camilla Lackberg', 2),
(4, 'L\'enfant Allemand', 'Camilla Lackberg', 2),
(5, 'Millenium Tome 1 : Les hommes qui n\'aimaient pas les femmes', 'Stieg Larsson', 1),
(6, 'Millenium Tome 2 : La fille qui rêvait d\'un bidon d\'essence et d\'une allumette', 'Stieg Larrson', 1),
(7, 'Millenium Tome 3 : La reine dans le palais des courants d\'air', 'Stieg Larsson', 1),
(8, 'Jeeves', 'P.G Wodehouse', 5),
(9, 'Bonjour Jeeves', 'P.G Wodehouse', 5),
(10, 'Fahrenheit 451', 'Ray Bradbury', 6),
(11, 'Un bonheur insoutenable', 'Ira Levin', 6),
(12, 'Le bébé de Rosemary', 'Ira Levin', 4),
(13, 'Le cauchemar d\'Innsmouth', 'H.P. Lovercraft', 4),
(14, 'A la croisée des mondes : Les royaumes du Nord', 'Philip Pullman', 3),
(15, 'A la croisée des mondes : Le Miroir d\'ambre', 'Philip Pullman', 3),
(16, 'A la croisée des mondes : La Tour des Anges', 'Philip Pullman', 3),
(17, 'Chroniques de l\'oiseau à ressort', 'Haruki Murakami', 8),
(18, '1Q84 : tome 1', 'Haruki Murakami', 8),
(19, '1Q84 : tome 2', 'Haruki Murakami', 8),
(20, '1Q84 : tome 3', 'Haruki Murakami', 8),
(21, 'Handmaid\'s Tale', 'Margaret Atwood', 6),
(22, 'Wicked, la véritable histoire de la méchante sorcière de l\'ouest', 'Gregory Maguire', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Type`
--

CREATE TABLE `Type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Type`
--

INSERT INTO `Type` (`id`, `name`) VALUES
(1, 'Thriller'),
(2, 'Policier'),
(3, 'Fantastique'),
(4, 'Horreur'),
(5, 'Comédie'),
(6, 'Science-fiction'),
(8, 'Onirique');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `media_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `name`, `media_id`) VALUES
(1, 'Elodie Palumbo', 18),
(2, 'Kara Danvers', 3),
(3, 'Cécilia Reyes', 11),
(4, 'Fallon Carrington', 4),
(5, 'Vindra Monoï', 5),
(6, 'Sansa Stark', 10),
(7, 'Crystal Flores', 7),
(8, 'Liuli Dinh', 8),
(9, 'Cyrielle Beller', 9),
(10, 'Aya Murakami', 17),
(11, 'James Blood', 2),
(12, 'Steven Carrington', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Media`
--
ALTER TABLE `Media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Type`
--
ALTER TABLE `Type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Media`
--
ALTER TABLE `Media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `Type`
--
ALTER TABLE `Type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
