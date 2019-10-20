-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 20 oct. 2019 à 14:15
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `olux`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cpanel`
--

CREATE TABLE `cpanel` (
  `id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `tld` varchar(20) DEFAULT NULL,
  `https` tinyint(4) DEFAULT 0,
  `detected_hosting` tinytext DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `price` decimal(5,3) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cpanel`
--

INSERT INTO `cpanel` (`id`, `country`, `tld`, `https`, `detected_hosting`, `seller_id`, `price`, `created_at`) VALUES
(1, 'France', '.fr', 1, 'OVH', 1, '5.000', '2019-08-07 14:24:12');

-- --------------------------------------------------------

--
-- Structure de la table `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `source` text DEFAULT NULL,
  `emails_domain` text DEFAULT NULL,
  `email_number` int(11) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `price` decimal(5,3) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `leads`
--

INSERT INTO `leads` (`id`, `country`, `source`, `emails_domain`, `email_number`, `seller_id`, `price`, `created_at`) VALUES
(1, 'Canada', '100k|china|unspammed|fresh|best for spamming|100%live|leads collection', 'gmail.com', 100000, 1, '5.000', '2019-08-28 21:44:38');

-- --------------------------------------------------------

--
-- Structure de la table `mailer`
--

CREATE TABLE `mailer` (
  `id` int(11) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `detected_hosting` tinytext DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `price` decimal(5,3) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mailer`
--

INSERT INTO `mailer` (`id`, `country`, `detected_hosting`, `seller_id`, `price`, `created_at`) VALUES
(1, 'Morocco', 'Telefonica del Peru S.A.A', 1, '5.000', '2019-08-28 22:00:32');

-- --------------------------------------------------------

--
-- Structure de la table `rdp`
--

CREATE TABLE `rdp` (
  `id` int(11) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `windows` varchar(100) DEFAULT NULL,
  `ram` varchar(100) DEFAULT NULL,
  `access` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `detected_hosting` tinytext DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `price` decimal(5,3) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rdp`
--

INSERT INTO `rdp` (`id`, `country`, `state`, `windows`, `ram`, `access`, `login`, `detected_hosting`, `seller_id`, `price`, `created_at`) VALUES
(1, 'Morocco', 'Casablanca', '2000', '1 GB', 'system', 'admin', 'OVH', 1, '5.000', '2019-08-20 14:22:52');

-- --------------------------------------------------------

--
-- Structure de la table `shell`
--

CREATE TABLE `shell` (
  `id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `tld` varchar(20) DEFAULT NULL,
  `server_information` text DEFAULT NULL,
  `server_os` varchar(100) DEFAULT NULL,
  `https` tinyint(4) DEFAULT 0,
  `detected_hosting` tinytext DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `price` decimal(5,3) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `shell`
--

INSERT INTO `shell` (`id`, `country`, `tld`, `server_information`, `server_os`, `https`, `detected_hosting`, `seller_id`, `price`, `created_at`) VALUES
(1, 'USA', '.ma', 'Linux dallas120.arvixeshared.com 3.10.0-693.11.6.1.ELK.el6.x86_64 #1 SMP Tue Jan 23 10:30:30 MST 2018 x86_64 - PHP : 5.6.35	', 'Linux', 1, 'godaddy', 1, '10.000', '2019-09-14 13:12:33');

-- --------------------------------------------------------

--
-- Structure de la table `smtp`
--

CREATE TABLE `smtp` (
  `id` int(11) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `webmail` tinyint(4) DEFAULT 1,
  `detected_hosting` tinytext DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `price` decimal(5,3) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `smtp`
--

INSERT INTO `smtp` (`id`, `country`, `webmail`, `detected_hosting`, `seller_id`, `price`, `created_at`) VALUES
(1, 'Frane', 1, 'OVH', 1, '9.000', '2019-09-14 13:02:06');

-- --------------------------------------------------------

--
-- Structure de la table `ssh`
--

CREATE TABLE `ssh` (
  `id` int(11) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `login` varchar(80) DEFAULT NULL,
  `information` text DEFAULT NULL,
  `ram` varchar(100) DEFAULT NULL,
  `whm` tinyint(4) DEFAULT 0,
  `detected_hosting` tinytext DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `price` decimal(5,3) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ssh`
--

INSERT INTO `ssh` (`id`, `country`, `login`, `information`, `ram`, `whm`, `detected_hosting`, `seller_id`, `price`, `created_at`) VALUES
(1, 'Morocco', 'root', 'Linux Arch/debian', '72GB', 1, 'OVH', 1, '8.000', '2019-09-14 12:38:25');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` int(11) DEFAULT 1,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `user_type`, `name`) VALUES
(1, 'ethinker', '15B2D1B769719BFD07D16C73D5519836F672DE52BFB297A94EFD6AF0660D95A2', 'r.aachich@gmail.com', 1, 'rachid aachich');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cpanel`
--
ALTER TABLE `cpanel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_user_id` (`seller_id`);

--
-- Index pour la table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mailer`
--
ALTER TABLE `mailer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `rdp`
--
ALTER TABLE `rdp`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `shell`
--
ALTER TABLE `shell`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `smtp`
--
ALTER TABLE `smtp`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ssh`
--
ALTER TABLE `ssh`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cpanel`
--
ALTER TABLE `cpanel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mailer`
--
ALTER TABLE `mailer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `rdp`
--
ALTER TABLE `rdp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `shell`
--
ALTER TABLE `shell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `smtp`
--
ALTER TABLE `smtp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ssh`
--
ALTER TABLE `ssh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cpanel`
--
ALTER TABLE `cpanel`
  ADD CONSTRAINT `seller_user_id` FOREIGN KEY (`seller_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
