-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 26, 2023 at 09:45 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stadiumstream`
--

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE `match` (
  `id` int NOT NULL,
  `team1` int NOT NULL,
  `team2` int NOT NULL,
  `time` timestamp NOT NULL,
  `stade` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `position` varchar(255) NOT NULL,
  `id_team` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `stade`
--

CREATE TABLE `stade` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `capacity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stade`
--

INSERT INTO `stade` (`id`, `name`, `location`, `capacity`) VALUES
(1, 'Olympic Stadium of Ebimpe', 'Abidjan', 60000),
(2, 'The Felix Houphouet-Boigny Stadium', 'Abidjan', 29000),
(3, 'Peace Stadium', 'Bouake', 40000),
(4, 'The Stadium of Korhogo', 'Korhogo', 20000),
(5, 'Laurent Pokou Stadium – San Pedro', 'San Pedro', 20000),
(6, 'Charles Konan Banny Stadium', 'Yamoussoukro       ', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `coach` varchar(255) NOT NULL,
  `founded_year` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `coach`, `founded_year`) VALUES
(1, 'Ivory Coast', 'Jean-Louis Gasset', 1950),
(2, 'Guinea-Bissau', 'Baciro Candé', 1965),
(3, 'Nigeria', 'José Peseiro', 1972),
(4, 'Equatorial Guinea', 'Juan Micha ', 1988),
(5, 'Egypt', 'Rui Vitória', 1990),
(6, 'Mozambique', 'Chiquinho Conde', 1978),
(7, 'Ghana', 'Chris Hughton ', 1962),
(8, 'Cape Verde', 'Bubista', 1985),
(9, 'Senegal', 'Aliou Cissé', 1975),
(10, 'Gambia', 'Tom Saintfiet', 1995),
(11, 'Cameroon', 'Rigobert Song', 1968),
(12, 'Guinea', 'Kaba Diawara', 1971),
(13, 'Algeria', 'Djamel Belmadi', 1982),
(14, 'Angola', 'Pedro Gonçalves', 1967),
(15, 'Burkina Faso', 'Hubert Velud', 1970),
(16, 'Mauritania', 'Amir Abdou', 1980),
(17, 'Mali', 'Éric Chelle', 1998),
(18, 'South Africa', 'Hugo Broos', 1999),
(19, 'Tunisia', 'Jalel Kadri', 2005),
(20, 'Namibia', 'Collin Benjamin', 1987),
(21, 'Morocco', 'Walid Regragui', 1960),
(22, 'Tanzania', 'Adel Amrouche', 1973),
(23, 'DR Congo', 'Sébastien Desabre', 1992),
(24, 'Zambia', 'Avram Grant', 1977);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int NOT NULL,
  `uu_id` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `reservation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `match_id` int NOT NULL,
  `user_id` int NOT NULL,
  `status` enum('sold','canceled','expired') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`id`),
  ADD KEY `match_FK1` (`team1`),
  ADD KEY `match_FK2` (`team2`),
  ADD KEY `match_FK3` (`stade`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`),
  ADD KEY `player_FK1` (`id_team`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stade`
--
ALTER TABLE `stade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_FK1` (`match_id`),
  ADD KEY `ticket_FK2` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD KEY `role_FK1` (`role_id`),
  ADD KEY `role_FK2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `match`
--
ALTER TABLE `match`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stade`
--
ALTER TABLE `stade`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `match`
--
ALTER TABLE `match`
  ADD CONSTRAINT `match_FK1` FOREIGN KEY (`team1`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `match_FK2` FOREIGN KEY (`team2`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `match_FK3` FOREIGN KEY (`stade`) REFERENCES `stade` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `player_FK1` FOREIGN KEY (`id_team`) REFERENCES `team` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_FK1` FOREIGN KEY (`match_id`) REFERENCES `match` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_FK2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `role_FK1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_FK2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
