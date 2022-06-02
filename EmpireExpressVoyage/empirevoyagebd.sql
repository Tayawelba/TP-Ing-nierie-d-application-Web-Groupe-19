-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 02 juin 2022 à 20:03
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `empirevoyagebd`
--

-- --------------------------------------------------------

--
-- Structure de la table `achatligne`
--

CREATE TABLE `achatligne` (
  `IdAchatLig` int(11) NOT NULL,
  `DateAchat` datetime DEFAULT current_timestamp(),
  `DateDepart` date DEFAULT NULL,
  `HeureDepart` varchar(10) DEFAULT NULL,
  `TypeBillet` varchar(10) DEFAULT NULL,
  `fkIdClient` int(11) DEFAULT NULL,
  `fkIdVilleD` int(11) DEFAULT NULL,
  `Validation` tinyint(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `achatligne`
--

INSERT INTO `achatligne` (`IdAchatLig`, `DateAchat`, `DateDepart`, `HeureDepart`, `TypeBillet`, `fkIdClient`, `fkIdVilleD`, `Validation`) VALUES
(134, '2022-06-02 18:53:55', '2022-06-03', '07H00', 'CLASSIQUE', 108, 3, 0),
(133, '2022-06-02 18:51:46', '2022-06-01', '11H00', 'VIP', 107, 4, 0),
(132, '2022-06-02 18:49:20', '2022-06-03', '07H00', 'CLASSIQUE', 106, 2, 0),
(131, '2022-06-02 18:48:00', '2022-06-01', '09H00', 'VIP', 105, 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_user`, `nom`, `prenom`, `date_naissance`, `email`, `password`) VALUES
(9, 'menetcheo', 'miikka noe', '2000-08-28', 'menetcheomiikka@gmail.com', '19a912fs'),
(14, 'admin', 'admin', '2021-06-14', 'hesedtayawelba@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `billetreserver`
--

CREATE TABLE `billetreserver` (
  `IdBilletRes` int(11) NOT NULL,
  `DateRes` datetime NOT NULL DEFAULT current_timestamp(),
  `DateDepart` date DEFAULT NULL,
  `HeureDepart` varchar(10) DEFAULT NULL,
  `TypeBillet` varchar(10) DEFAULT NULL,
  `fkIdClient` int(11) DEFAULT NULL,
  `fkIdVilleD` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `billetreserver`
--

INSERT INTO `billetreserver` (`IdBilletRes`, `DateRes`, `DateDepart`, `HeureDepart`, `TypeBillet`, `fkIdClient`, `fkIdVilleD`) VALUES
(6, '2022-05-30 13:37:06', '2022-05-22', '11H00', 'VIP', 37, 2),
(5, '2022-05-30 13:34:32', '2022-05-22', '11H00', 'VIP', 37, 2),
(4, '2022-05-30 13:32:38', '2022-07-23', '09H00', 'VIP', 36, 2),
(7, '2022-05-30 13:39:59', '2022-05-29', '', 'CLASSIQUE', 37, 2),
(8, '2022-05-30 13:41:36', '2023-05-12', '09H00', 'CLASSIQUE', 38, 2),
(9, '2022-05-30 13:42:50', '2023-05-12', '09H00', 'CLASSIQUE', 39, 2),
(10, '2022-05-30 13:50:37', '2023-05-12', '09H00', 'CLASSIQUE', 39, 2),
(11, '2022-05-30 13:53:04', '2023-05-12', '09H00', 'CLASSIQUE', 39, 2),
(12, '2022-05-30 13:53:48', '2023-05-12', '09H00', 'CLASSIQUE', 39, 2),
(13, '2022-05-30 13:58:55', '2022-05-08', '09H00', 'VIP', 43, 2),
(14, '2022-06-01 15:23:06', '2022-06-10', '09H00', 'VIP', 93, 2),
(15, '2022-06-01 15:24:17', '2022-06-11', '07H00', 'CLASSIQUE', 94, 2),
(16, '2022-06-01 15:50:27', '2022-06-05', '09H00', 'CLASSIQUE', 96, 2),
(17, '2022-06-01 15:54:02', '2022-06-12', '11H00', 'VIP', 97, 5);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `IdClient` int(11) NOT NULL,
  `NomClient` varchar(25) DEFAULT NULL,
  `PrenomClient` varchar(15) DEFAULT NULL,
  `NumCNI` int(11) NOT NULL,
  `Tel` int(13) DEFAULT NULL,
  `Mail` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`IdClient`, `NomClient`, `PrenomClient`, `NumCNI`, `Tel`, `Mail`) VALUES
(108, 'ALAHOKI ', '', 1456224, 457896321, ''),
(107, 'TAYAWELBA DAWAI', '', 147852369, 693401580, 'hesedtayawelba@gamil.com'),
(106, 'TAYAWELBA DAWAI ', '', 147852369, 693401580, 'hesedtayawelba@gamil.com'),
(105, 'MENETCHEO ', 'MIIKKA NOE ', 101677184, 698132513, 'menetcheomiikka@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `IdPaiement` int(11) NOT NULL,
  `DatePaiemnt` date DEFAULT NULL,
  `prix` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE `trajet` (
  `IdTrajet` varchar(10) NOT NULL,
  `fkIdVilleD` int(11) NOT NULL,
  `Distance` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Structure de la table `villed`
--

CREATE TABLE `villed` (
  `IdVilleD` int(11) NOT NULL,
  `NomVilleD` varchar(25) NOT NULL,
  `PrixVIP` int(11) DEFAULT NULL,
  `PrixCLASSIQUE` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `villed`
--

INSERT INTO `villed` (`IdVilleD`, `NomVilleD`, `PrixVIP`, `PrixCLASSIQUE`) VALUES
(4, 'Douala', 19000, 17000),
(2, 'Garoua', 6000, 4000),
(3, 'Maroua', 10000, 8000),
(5, 'Yaoundé', 15000, 13000),
(6, 'Bertoua', 9000, 8000),
(7, 'Edéa', 18000, 16000),
(8, 'Maiganga', 3000, 1000),
(9, 'Garouan Boulai', 5000, 3000),
(10, 'Ndokayo', 7000, 5000),
(11, 'Doumé', 10000, 8000),
(12, 'Abon-Bang', 11000, 9000),
(13, 'Moutrouva', 10000, 8000),
(14, 'Magagada', 8000, 6000),
(15, 'Bidzar', 8000, 6000),
(16, 'Figuil', 8000, 6000),
(17, 'Sorawel', 8000, 6000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achatligne`
--
ALTER TABLE `achatligne`
  ADD PRIMARY KEY (`IdAchatLig`),
  ADD KEY `fkIdClient` (`fkIdClient`),
  ADD KEY `fkIdVilleD` (`fkIdVilleD`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `billetreserver`
--
ALTER TABLE `billetreserver`
  ADD PRIMARY KEY (`IdBilletRes`),
  ADD KEY `fkIdClient` (`fkIdClient`),
  ADD KEY `fkIdVilleD` (`fkIdVilleD`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`IdClient`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`IdPaiement`);

--
-- Index pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD PRIMARY KEY (`IdTrajet`),
  ADD KEY `fkIdVilleD` (`fkIdVilleD`);

--
-- Index pour la table `villed`
--
ALTER TABLE `villed`
  ADD PRIMARY KEY (`IdVilleD`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achatligne`
--
ALTER TABLE `achatligne`
  MODIFY `IdAchatLig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `billetreserver`
--
ALTER TABLE `billetreserver`
  MODIFY `IdBilletRes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `IdClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `IdPaiement` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `villed`
--
ALTER TABLE `villed`
  MODIFY `IdVilleD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
