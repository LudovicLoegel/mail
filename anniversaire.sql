-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 07 Décembre 2017 à 14:26
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `anniversaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `simploniens`
--

CREATE TABLE `simploniens` (
  `prenom` varchar(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `anniversaire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `simploniens`
--

INSERT INTO `simploniens` (`prenom`, `mail`, `anniversaire`) VALUES
('Samir', 'indabzez@gmail.com', '1990-08-01'),
('Chris', 'amaterasu.sempai@gmail.com', '1991-09-12'),
('Axmerio', 'lement.aymeric@outlook.com', '1995-06-05'),
('Charline', 'charline.mouton@hotmail.com', '1998-11-20'),
('Justine', 'justine.aliemart@neuf.fr', '1998-02-03'),
('Salima', 'mtalsisalima@gmail.com', '1991-08-18'),
('Laurence', 'laurence.balayn@hotmail.fr', '1983-09-21'),
('Théo', 'rbshayla@protonmail.com', '1998-03-01'),
('Céline', 'celine-lembach@hotmail.fr', '1979-08-21'),
('Romain', 'maucotel.romain@gmail.com', '1997-08-07'),
('Fares', 'faressik13@gmail.com', '1998-01-17'),
('Alexandre', 'alexandre_dargent@live.fr', '1991-01-11'),
('Yann', 'yanngeorgel@hotmail.fr', '1997-02-27'),
('Corentin', 'c.stoeckle@outlook.fr', '1994-10-16'),
('Eric', 'ericsandaucourt@hotmail.fr', '1980-12-07'),
('Ludovic', 'ludovic.loegel@gmail.com', '1993-10-28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
