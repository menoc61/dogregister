-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 16 avr. 2023 à 09:50
-- Version du serveur :  10.5.16-MariaDB
-- Version de PHP : 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id19481844_obcsdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(200) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Test', 'admin', 8979555556, 'adminuser@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2020-02-13 12:05:09'),
(2, 'meno', 'momenic61', 699691121, 'gillemomeni@gmail.com', 'b2cc8911cb64df5269001a2980c134a3', '2022-05-14 20:14:07');

-- --------------------------------------------------------

--
-- Structure de la table `tblapplication`
--

CREATE TABLE `tblapplication` (
  `ID` int(10) NOT NULL,
  `UserID` int(5) NOT NULL,
  `ApplicationID` varchar(200) DEFAULT NULL,
  `Dateofbirth` varchar(200) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `Race` varchar(200) DEFAULT NULL,
  `Placeofbirth` varchar(200) DEFAULT NULL,
  `PermanentAdd` mediumtext DEFAULT NULL,
  `MicroSim` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `GPM` varchar(200) DEFAULT NULL,
  `GPMM` varchar(200) DEFAULT NULL,
  `GPMF` varchar(200) DEFAULT NULL,
  `GPF` varchar(200) DEFAULT NULL,
  `GPFM` varchar(200) DEFAULT NULL,
  `GPFF` varchar(200) DEFAULT NULL,
  `AGPMM` varchar(200) DEFAULT NULL,
  `AGPMF` varchar(200) DEFAULT NULL,
  `AGPFM` varchar(200) DEFAULT NULL,
  `AGPFF` varchar(200) DEFAULT NULL,
  `AGPMM2` varchar(200) DEFAULT NULL,
  `AGPMF2` varchar(200) DEFAULT NULL,
  `AGPMM3` varchar(200) DEFAULT NULL,
  `AGPMF3` varchar(200) DEFAULT NULL,
  `Dateofapply` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tblapplication`
--

INSERT INTO `tblapplication` (`ID`, `UserID`, `ApplicationID`, `Dateofbirth`, `Gender`, `FullName`, `Race`, `Placeofbirth`, `PermanentAdd`, `MicroSim`, `MobileNumber`, `Email`, `GPM`, `GPMM`, `GPMF`, `GPF`, `GPFM`, `GPFF`, `AGPMM`, `AGPMF`, `AGPFM`, `AGPFF`, `AGPMM2`, `AGPMF2`, `AGPMM3`, `AGPMF3`, `Dateofapply`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 1, '1234567', '2019-05-09', 'Female', 'REXOR', 'ROTTWEILER', 'DUBAI', 'mimboman opep', '2345678765dd ', 699691121, 'gillemomni@gmail.com', 'MENO', 'meno1', 'meno2', 'meno3', 'meno4', 'meno5', 'meno6', 'meno7', 'meno8', 'meno9', 'meno10', 'meno11', 'meno12', 'meno13', '2022-05-14 04:28:03', 'valide request', 'Verified', '2022-05-22 04:24:01'),
(2, 2, '384120652', '2021-01-07', 'Male', 'rex ludivor', 'rodviller', 'yaounde', 'mimboman opep', '12345asd123', 6906784612, 'admin@admin.com', 'MOMENI', 'MOMENI1', 'MOMENI2', 'MOMENI3', 'MOMENI4', 'MOMENI5', 'MOMENI6', 'MOMENI7', 'MOMENI8', 'MOMENI9', 'MOMENI10', 'MOMENI11', 'MOMENI12', 'MOMENI13', '2022-05-14 20:12:12', 'your request is valid', 'Verified', '2022-05-14 20:23:25'),
(6, 6, '200899048', '2022-09-08', 'Female', 'STARCK', 'BOERBOEL', 'YAOUNDE', 'MIMBOMAN', '-èè_çàçàçàà', 693576990, 'fanklinhandu@icloud.com', 'rex', 'wena', 'fr', 'gd', 'gf', 'bg', 'ol', 'egm', 'hy', 'nh', 'ol', 'egm', 'hy', 'nh', '2022-09-10 16:17:07', 'OK', 'Verified', '2022-09-10 16:20:33'),
(7, 6, '171014393', '2022-06-07', 'Female', 'STARCK', 'BOERBOEL', 'YAOUNDE', 'gedt', 'hzyztz', 45749303, 'fanklinhandu@icloud.com', 'rex', 'wena', 'fr', 'gd', 'gf', 'bg', 'ol', 'egm', 'hy', 'nh', 'ol', 'egm', 'hy', 'nh', '2022-09-10 16:19:16', 'no pure', 'Rejected', '2022-09-10 17:17:23'),
(8, 6, '128941438', '2022-04-09', 'Male', 'JACK', 'CANE CORSO', 'YAOUNDE', 'MIMBOMAN', '65Z24F56', 693576990, 'fanklinhandu@icloud.com', 'HOSS', 'DIANA', 'COOPER', 'POOR', 'GF', 'ML', 'POLK', 'NBM', 'BOSH', 'NUCK', 'POLK', 'NBM', 'BOSH', 'NUCK', '2022-09-11 18:58:48', 'OK\r\n', 'Verified', '2022-09-11 19:00:28');

-- --------------------------------------------------------

--
-- Structure de la table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `Password` varchar(200) NOT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Address`, `Password`, `RegDate`) VALUES
(1, 'user', 'test', 9632123698, 'New Delhi India 110001', '5c428d8875d2948607f3e3fe134d71b4', '2020-02-20 17:23:05'),
(2, 'gille ', 'momeni', 699691121, 'gillemomeni@gmail.com', 'b2cc8911cb64df5269001a2980c134a3', '2022-05-14 19:18:27'),
(6, 'Handy', 'Neoum', 693576990, 'Mimboman ', 'f5dbb6f919e9c5e0df3710a5906d2b56', '2022-09-10 16:11:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tblapplication`
--
ALTER TABLE `tblapplication`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tblapplication`
--
ALTER TABLE `tblapplication`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
