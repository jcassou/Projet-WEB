-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 11:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `entreprise`
--

CREATE TABLE `entreprise` (
  `id_entreprise` int(4) NOT NULL,
  `nom_entreprise` varchar(20) NOT NULL,
  `duree_stage` text NOT NULL,
  `annee_stage` int(4) NOT NULL,
  `id_utilisateur` int(4) NOT NULL,
  `id_ville` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id_pays` int(4) NOT NULL,
  `nom_pays` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_utilisateur` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id_pays`, `nom_pays`, `id_utilisateur`) VALUES
(46, 'Allemagne', 1),
(47, 'Canada', 1),
(48, 'Japon', 1),
(49, 'Espagne', 1),
(50, 'Chine', 1),
(51, 'Belgique', 1),
(52, 'Australie', 1),
(54, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `universite`
--

CREATE TABLE `universite` (
  `id_universite` int(4) NOT NULL,
  `nom_universite` varchar(20) NOT NULL,
  `contrat_etude` blob NOT NULL,
  `cours_interessants` text NOT NULL,
  `duree_echange` int(4) NOT NULL,
  `langue_cours` varchar(10) NOT NULL,
  `id_utilisateur` int(4) NOT NULL,
  `id_ville` int(4) NOT NULL,
  `date_echange` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `universite`
--

INSERT INTO `universite` (`id_universite`, `nom_universite`, `contrat_etude`, `cours_interessants`, `duree_echange`, `langue_cours`, `id_utilisateur`, `id_ville`, `date_echange`) VALUES
(60, '', '', '', 0, '', 1, 17, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(4) NOT NULL,
  `nom_utilisateur` varchar(20) NOT NULL,
  `prenom_utilisateur` varchar(20) NOT NULL,
  `promo_utilisateur` int(4) NOT NULL,
  `numero_telephone_utilisateur` int(10) NOT NULL,
  `adresse_mail_utilisateur` varchar(30) NOT NULL,
  `mot_de_passe_utilisateur` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `promo_utilisateur`, `numero_telephone_utilisateur`, `adresse_mail_utilisateur`, `mot_de_passe_utilisateur`) VALUES
(1, 'Tacos', 'Tacos', 2017, 0, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `id_ville` int(4) NOT NULL,
  `nom_ville` varchar(20) NOT NULL,
  `sortir` text NOT NULL,
  `manger` text NOT NULL,
  `dormir` text NOT NULL,
  `voyager` text NOT NULL,
  `id_utilisateur` int(4) NOT NULL,
  `id_pays` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`id_ville`, `nom_ville`, `sortir`, `manger`, `dormir`, `voyager`, `id_utilisateur`, `id_pays`) VALUES
(9, 'Toronto', '', '', '', '', 1, 47),
(10, 'Pekin', '', '', '', '', 1, 50),
(11, 'Bruxelles', '', '', '', '', 1, 51),
(17, '', '', '', '', '', 1, 54);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id_entreprise`),
  ADD KEY `entreprise` (`id_utilisateur`),
  ADD KEY `id_ville` (`id_ville`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id_pays`),
  ADD KEY `pays` (`id_utilisateur`);

--
-- Indexes for table `universite`
--
ALTER TABLE `universite`
  ADD PRIMARY KEY (`id_universite`),
  ADD KEY `universite` (`id_ville`),
  ADD KEY `univ` (`id_utilisateur`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id_ville`),
  ADD KEY `ville` (`id_utilisateur`),
  ADD KEY `ville_idpays` (`id_pays`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id_entreprise` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id_pays` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `universite`
--
ALTER TABLE `universite`
  MODIFY `id_universite` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
  MODIFY `id_ville` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `entreprise` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE,
  ADD CONSTRAINT `entreprise_ibfk_1` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id_ville`) ON DELETE CASCADE;

--
-- Constraints for table `pays`
--
ALTER TABLE `pays`
  ADD CONSTRAINT `pays` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Constraints for table `universite`
--
ALTER TABLE `universite`
  ADD CONSTRAINT `univ` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE CASCADE,
  ADD CONSTRAINT `universite_ibfk_1` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id_ville`) ON DELETE CASCADE;

--
-- Constraints for table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `ville` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `ville_ibfk_1` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id_pays`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
