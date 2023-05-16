-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 05, 2023 at 02:53 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stampee2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Enchere`
--

CREATE TABLE `Enchere` (
  `id` int(11) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `prix_debut` decimal(10,2) NOT NULL,
  `mise_courante` decimal(10,2) NOT NULL,
  `lord_favoris` int(11) NOT NULL,
  `Timbre_id` int(11) NOT NULL,
  `Utilisateur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Enchere`
--

INSERT INTO `Enchere` (`id`, `date_debut`, `date_fin`, `prix_debut`, `mise_courante`, `lord_favoris`, `Timbre_id`, `Utilisateur_id`) VALUES
(55, '2023-02-02', '2023-02-21', '10.00', '12.00', 0, 94, 3),
(56, '2023-02-02', '2023-02-21', '10.00', '0.00', 0, 95, 3),
(59, '2023-02-02', '2023-02-21', '33.00', '0.00', 0, 98, 3),
(60, '2023-02-02', '2023-02-21', '32.00', '0.00', 0, 99, 2),
(61, '2023-02-03', '2023-02-21', '22.00', '0.00', 0, 100, 2),
(62, '2023-02-03', '2023-02-21', '22.00', '0.00', 0, 101, 1),
(63, '2023-02-03', '2023-02-21', '25.00', '0.00', 0, 102, 1),
(64, '2023-02-03', '2023-02-21', '33.00', '334.00', 0, 104, 1),
(65, '2023-02-03', '2023-02-21', '27.00', '111.00', 0, 105, 1),
(66, '2023-02-03', '2023-02-21', '11.00', '14.00', 0, 108, 1),
(67, '2023-02-03', '2023-02-23', '25.00', '27.00', 0, 109, 1),
(68, '2023-02-03', '2023-02-23', '33.00', '34.00', 0, 117, 1),
(69, '2023-02-03', '2023-02-21', '33.00', '35.00', 0, 118, 1),
(70, '2023-02-03', '2023-02-23', '10.00', '11.00', 0, 119, 1),
(71, '2023-02-03', '2023-02-21', '25.00', '25.00', 0, 120, 1),
(72, '2023-02-04', '2023-02-23', '32.00', '32.00', 0, 121, 3),
(73, '2023-02-05', '2023-02-21', '50.00', '55.00', 0, 122, 8);

-- --------------------------------------------------------

--
-- Table structure for table `Favori`
--

CREATE TABLE `Favori` (
  `Utilisateur_id` int(11) NOT NULL,
  `Enchere_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Image`
--

CREATE TABLE `Image` (
  `id` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `type` varchar(45) NOT NULL,
  `Timbre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Image`
--

INSERT INTO `Image` (`id`, `source`, `type`, `Timbre_id`) VALUES
(3, '0b369701fd3426182b783ba04a812d80.jpg', '1', 94),
(4, '0b369701fd3426182b783ba04a812d80.jpg', '1', 95),
(5, '2a7dcd90c3c8661b18881dd8ad9f36d6.jpg', '1', 98),
(6, '1caa441fe1f4fef50afb911922be11f2.jpg', '1', 99),
(7, '6d4741066c373a5919184192c82c6b3a.jpg', '1', 100),
(8, 'ca93a361362319e83b39640117410971.jpg', '1', 101),
(9, 'b2ed208e574ff14121e18208f51c8123.jpg', '1', 102),
(10, '_123073925_mediaitem123073924.jpg', '1', 104),
(11, '52a11fd8da7931eda6b4938e62bcdb7b.jpg', '1', 105),
(12, '6d4741066c373a5919184192c82c6b3a.jpg', '1', 106),
(13, '6d4741066c373a5919184192c82c6b3a.jpg', '1', 107),
(14, '6d4741066c373a5919184192c82c6b3a.jpg', '1', 108),
(15, '9a1e39bc883b6ae97164de1d694db8ea.jpg', '1', 109),
(16, 'Screen Shot 2022-10-18 at 6.28.26 PM.png', '1', 112),
(17, 'Screen Shot 2022-10-18 at 6.28.26 PM.png', '1', 113),
(18, 'Screen Shot 2022-10-18 at 6.28.26 PM.png', '1', 114),
(19, 'briefmarke-aus-kanada-in-die-queen-elizabeth-ii-definitves-1953-karsh-portrait-serie-ra1kna.jpg', '1', 117),
(20, '734f2642504e7765409a6aecac7184be.jpg', '1', 118),
(21, 'Année-complète-des-timbres-français-1948-1.webp', '1', 119),
(22, 'british-postage-stamp-EBGBX2.jpg', '1', 120),
(23, '5fd986a92cf636a75d7ebc899ad3528e.jpg', '1', 121),
(24, '204db4ceadf8f938d4e4476e7b35b170.jpg', '1', 122);

-- --------------------------------------------------------

--
-- Table structure for table `Mise`
--

CREATE TABLE `Mise` (
  `id` int(11) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `Utilisateur_id` int(11) NOT NULL,
  `Enchere_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Mise`
--

INSERT INTO `Mise` (`id`, `prix`, `date`, `Utilisateur_id`, `Enchere_id`) VALUES
(1, '58.00', '2023-02-03', 1, 64),
(2, '334.00', '2023-02-03', 1, 64),
(3, '111.00', '2023-02-03', 1, 65),
(4, '13.00', '2023-02-03', 1, 66),
(5, '27.00', '2023-02-03', 1, 67),
(6, '34.00', '2023-02-03', 1, 68),
(7, '35.00', '2023-02-03', 1, 69),
(8, '11.00', '2023-02-03', 1, 70),
(9, '24.00', '2023-02-03', 1, 53),
(10, '24.00', '2023-02-03', 1, 54),
(11, '12.00', '2023-02-03', 1, 55),
(12, '25.00', '2023-02-03', 2, 53),
(13, '25.00', '2023-02-03', 2, 54),
(14, '26.00', '2023-02-03', 2, 54),
(15, '27.00', '2023-02-03', 1, 53),
(16, '28.00', '2023-02-04', 3, 53),
(17, '14.00', '2023-02-04', 3, 66),
(18, '55.00', '2023-02-05', 8, 73);

-- --------------------------------------------------------

--
-- Table structure for table `Role`
--

CREATE TABLE `Role` (
  `id` int(11) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Role`
--

INSERT INTO `Role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `Timbre`
--

CREATE TABLE `Timbre` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_creation` date NOT NULL,
  `couleur` varchar(25) NOT NULL,
  `pays_origine` varchar(25) NOT NULL,
  `etat` varchar(25) NOT NULL,
  `tirage` varchar(25) NOT NULL,
  `dimension` varchar(45) NOT NULL,
  `certifie` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Timbre`
--

INSERT INTO `Timbre` (`id`, `nom`, `description`, `date_creation`, `couleur`, `pays_origine`, `etat`, `tirage`, `dimension`, `certifie`) VALUES
(92, 'Tombeau', 'text', '1957-02-11', 'Bleu', 'Canada', 'Parfaite', '1', '12 x 45 mm', 1),
(93, 'Tutu', 'text', '1957-02-11', 'Rouge', 'Royaume-Uni', 'Excellente', '1', '12 x 45 mm', 1),
(94, 'lulu', 'Lorem', '1957-02-11', 'Rouge', 'Canada', 'Parfaite', '3', '12 x 45 mm', 1),
(95, 'lulu', 'Lorem', '1957-02-11', 'Rouge', 'Canada', 'Parfaite', '3', '12 x 45 mm', 1),
(96, 'Avalanche', 'text', '1957-02-11', 'Rouge', 'Canada', 'Parfaite', '1', '12 x 45 mm', 1),
(97, 'Titi', 'text', '1957-02-11', 'Bleu', 'Canada', 'Parfaite', '1', '12 x 45 mm', 1),
(98, 'Roulette', 'Lorem', '1964-09-23', 'Jaune', 'Canada', 'Parfaite', '2', '12 x 45 mm', 1),
(99, 'CANADA postage #567 (blue), The Queen, 1968, 20¢, EiiR, rare', 'Timbre de 20 cennes de la reine Élisabeth II du Canada datant de 1968 en très bonne condition.', '1957-02-11', 'Bleu', 'Canada', 'Parfaite', '2', '12 x 45 mm', 1),
(100, 'Promotion', 'Lorem ipsum', '1957-02-11', 'Bleu', 'Canada', 'Parfaite', '2', '12 x 45 mm', 1),
(101, 'Portugal', 'Lorem', '1957-02-11', 'Rouge', 'Royaume-Uni', 'Excellente', '1', '12 x 45 mm', 1),
(102, 'Clementine', 'Lorem', '1964-09-23', 'Bleu', 'Canada', 'Parfaite', '5', '12 x 45 mm', 1),
(103, 'Canada22', 'Lorem text', '1957-02-11', 'Bleu', 'Canada', 'Très bonne', '2', '12 x 45 mm', 1),
(104, 'Canada22', 'Lorem text', '1957-02-11', 'Bleu', 'Canada', 'Très bonne', '2', '12 x 45 mm', 1),
(105, 'Bonjour', 'TExt', '1957-02-11', 'Rouge', 'Canada', 'Parfaite', '2', '12 x 45 mm', 1),
(106, 'Raisin', 'Lorem Ipsum', '1957-02-11', 'Rouge', 'Canada', 'Parfaite', '1', '12 x 45 mm', 1),
(107, 'Raisin', 'Lorem Ipsum', '1957-02-11', 'Rouge', 'Canada', 'Parfaite', '1', '12 x 45 mm', 1),
(108, 'Raisin', 'Lorem Ipsum', '1957-02-11', 'Rouge', 'Canada', 'Parfaite', '1', '12 x 45 mm', 1),
(109, 'Titi', 'Lorem', '1964-09-23', 'Rouge', 'Canada', 'Parfaite', '1', '12 x 45 mm', 1),
(110, 'patate', 'Lorem', '1957-02-11', 'Bleu', 'États-Unis', 'Parfaite', '2', '12 x 45 mm', 1),
(111, 'patate', 'Lorem', '1957-02-11', 'Bleu', 'États-Unis', 'Parfaite', '2', '12 x 45 mm', 1),
(112, 'patate', 'Lorem', '1957-02-11', 'Bleu', 'États-Unis', 'Parfaite', '2', '12 x 45 mm', 1),
(113, 'patate', 'Lorem', '1957-02-11', 'Bleu', 'États-Unis', 'Parfaite', '2', '12 x 45 mm', 1),
(114, 'patate', 'Lorem', '1957-02-11', 'Bleu', 'États-Unis', 'Parfaite', '2', '12 x 45 mm', 1),
(115, 'Coco', 'Lorem', '1964-09-23', 'Rouge', 'Canada', 'Parfaite', '5', '12 x 45 mm', 1),
(116, 'Coco', 'Lorem', '1964-09-23', 'Rouge', 'Canada', 'Parfaite', '5', '12 x 45 mm', 1),
(117, 'Coco', 'Lorem', '1964-09-23', 'Rouge', 'Canada', 'Parfaite', '5', '12 x 45 mm', 1),
(118, 'Poire', 'Lorem', '1964-09-23', 'Rouge', 'Canada', 'Parfaite', '1', '12 x 45 mm', 1),
(119, 'Coco', 'Lorem', '1957-02-11', 'Rouge', 'États-Unis', 'Parfaite', '2', '12 x 45 mm', 1),
(120, 'Toutou', 'Lorem', '1964-09-23', 'Rouge', 'États-Unis', 'Excellente', '1', '12 x 45 mm', 1),
(121, 'Liban', 'Lorem', '1957-02-11', 'Orange', 'France', 'Excellente', '2', '12 x 45 mm', 1),
(122, 'Scott #RVB2 - $3 Blue', 'This is a Scott #RVB2 - $3 Blue - P# block of 4 - MNH - 1960. P#block 4. There are finger prints on upper left stamp. Upper left corner crease on selvage.', '1957-02-11', 'Bleu', 'États-Unis', 'Bonne', '3', '12 x 45 mm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `code_postal` varchar(10) DEFAULT NULL,
  `telephone` varchar(25) DEFAULT NULL,
  `courriel` varchar(45) NOT NULL,
  `date_naissance` date NOT NULL,
  `date_inscription` date NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Utilisateur`
--

INSERT INTO `Utilisateur` (`id`, `nom`, `prenom`, `adresse`, `code_postal`, `telephone`, `courriel`, `date_naissance`, `date_inscription`, `username`, `password`, `Role_id`) VALUES
(1, 'Trudel', 'Celine', '4533 rue St-Albert', 'H2T 8N7', '514-977-0909', 'trucel@gmail.com', '1959-04-09', '2008-10-03', 'ct@gmail.com', '$2y$10$oeBjUZR8a7625mhc3bBxbeMwkwcxsyP71iraStiWFwRMWbRYsMQwS', 2),
(2, 'Simoneau', 'Luc', '5677 rue St-Antoine', 'H7Y 2V8', '514-988-8974', 'simluc@gmail.com', '1976-09-11', '2009-09-23', 'ls@gmail.com', '$2y$10$Z/ABo.Gz7IeESzxQNVMka.lntyO54754L/STSGlXFasIx2n5e3vx.', 2),
(3, 'Dion', 'Mathieu', '3466 rue St-Pierre', 'H2T 4N7', '514-889-4563', 'diomat@gmail.com', '1987-08-12', '2023-01-25', 'md@gmail.com', '$2y$10$.01kNdpRoHASls7yS0JKCut6LWBPk8sLbhJXEIk9YK/fGeVS3HNT6', 2),
(4, 'Nadeau', 'Lise', '766 rue St-Urbain', 'H7T 8N4', '514-987-0988', 'nadlis@gmail.com', '1987-08-12', '2023-01-25', 'ln@gmail.com', '$2y$10$//IRlPQwc08pLJSzbnELKuZM2OHhCDVEVtxrJnxugomO72DpzPZo2', 2),
(5, 'Harrison', 'Henry', '473 Elson street', 'H7U 8N7', '438-982-1221', 'harhen@gmail.com', '1976-09-11', '2006-07-07', 'hh@gmail.com', '$2y$10$/WcQ7qVcIkXwxCwO9IDFPO8L0GhBUAsGk3oZNJcuJP78UlgTNwKcG', 2),
(6, 'Tremblay', 'René', '45 rue Piché', 'H6T 2T8', '514-908-0987', 'treren@gmail.com', '1976-09-11', '2008-02-15', 'rt@gmail.com', '$2y$10$pO6bIHoZhQB2EbE7SDix9OvoBvTi97PvpVk1UFKNwBF78fmfr5PFu', 1),
(8, 'Poirier', 'Samuel', '355 rue Saint-Laurent', 'H2U 2V9', '514-977-3544', 'poisam@gmail.com', '1976-09-11', '2023-01-25', 'sp@gmail.com', '$2y$10$cvhgYnG3/zMlQ7ab/LV7suIsrft2EpxgpPx5koK94QOR2K4BLHJrq', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Enchere`
--
ALTER TABLE `Enchere`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Enchere_Timbre1_idx` (`Timbre_id`),
  ADD KEY `fk_Enchere_Utilisateur1_idx` (`Utilisateur_id`);

--
-- Indexes for table `Favori`
--
ALTER TABLE `Favori`
  ADD KEY `fk_Utilisateur_favori_Utilisateur1_idx` (`Utilisateur_id`),
  ADD KEY `fk_Utilisateur_favori_Enchere1_idx` (`Enchere_id`);

--
-- Indexes for table `Image`
--
ALTER TABLE `Image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Image_Timbre1_idx` (`Timbre_id`);

--
-- Indexes for table `Mise`
--
ALTER TABLE `Mise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Mise_Utilisateur1_idx` (`Utilisateur_id`),
  ADD KEY `fk_Mise_Enchere1_idx` (`Enchere_id`);

--
-- Indexes for table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Timbre`
--
ALTER TABLE `Timbre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Utilisateur_Role1_idx` (`Role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Enchere`
--
ALTER TABLE `Enchere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `Image`
--
ALTER TABLE `Image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `Mise`
--
ALTER TABLE `Mise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Timbre`
--
ALTER TABLE `Timbre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Enchere`
--
ALTER TABLE `Enchere`
  ADD CONSTRAINT `fk_Enchere_Timbre1` FOREIGN KEY (`Timbre_id`) REFERENCES `Timbre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Enchere_Utilisateur1` FOREIGN KEY (`Utilisateur_id`) REFERENCES `Utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Favori`
--
ALTER TABLE `Favori`
  ADD CONSTRAINT `fk_Utilisateur_favori_Enchere1` FOREIGN KEY (`Enchere_id`) REFERENCES `Enchere` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Utilisateur_favori_Utilisateur1` FOREIGN KEY (`Utilisateur_id`) REFERENCES `Utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Image`
--
ALTER TABLE `Image`
  ADD CONSTRAINT `fk_Image_Timbre1` FOREIGN KEY (`Timbre_id`) REFERENCES `Timbre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Mise`
--
ALTER TABLE `Mise`
  ADD CONSTRAINT `fk_Mise_Enchere1` FOREIGN KEY (`Enchere_id`) REFERENCES `Enchere` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Mise_Utilisateur1` FOREIGN KEY (`Utilisateur_id`) REFERENCES `Utilisateur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD CONSTRAINT `fk_Utilisateur_Role1` FOREIGN KEY (`Role_id`) REFERENCES `Role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
