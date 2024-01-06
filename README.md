# Stadium Stream 

SteadiumStream is a PHP application designed to provide a seamless platform for purchasing tickets for Afcon 2023. This user-friendly application provides fans with a convenient and secure way to access and purchase tickets for the highly anticipated event . With SteadiumStream, users can browse available tickets, select their preferred seat and complete their purchase with ease. The app is designed with a focus on efficiency and reliability, ensuring a smooth and enjoyable ticket purchasing experience for all users.

## Installation

Type these commands to run this project
#### - But before that:

- First of all, you need to configure the development environment, The one we choose is called [Laragon](https://laragon.org/index.html)

- After that, clone the repository from its link:

```bash
   git clone https://github.com/Zaiidmo/StadiumStream
```

- you need to install [nodeJS](https://nodejs.org/en) and [Composer](https://getcomposer.org/)

- so after successfully installing nodejs and composer, open command prompt from directory folder and type these commands:

```bash
   npm install
```
```bash
   composer update
```
```bash
   composer dump-autoload
```
## Color Reference

| Color             | Hex                                                                |
| ----------------- | ------------------------------------------------------------------ |
| Noir | ![#0a192f](https://via.placeholder.com/10/0a192f?text=+) #0a192f |
| Orange | ![#00d1a0](https://via.placeholder.com/10/FFA500?text=+) #FFA500 |
| Vert | ![#00b48a](https://via.placeholder.com/10/00b48a?text=+) #00b48a |

## Mock Up

- Here is the link to the model [figma](https://www.figma.com/file/2El7met2oJqv3EUe5oN2B9/Untitled?type=design&node-id=0%3A1&mode=dev).

## StadiumStream Features

- Light/dark mode toggle
- Cross platform
- Authentication
- User roles
- Contactez-nous avec confirmation par e-mail
- Réservation de billets

## Roadmap

- The first thing we did was design, we designed use cases and class diagrams.
- Jira planning
- Mock Up
- Development

 ## Screenshots

![Use Cases Diagram](https://ibb.co/MhHL7pd)
![Classes Diagram](https://ibb.co/Gch41z0)

## Stack Technologique

**Client:** Html, JavaScript, TailwindCSS
**Server:** PHP, MySQL

## Run Locally

Clone the project

```bash
  git clone https://github.com/Zaiidmo/StadiumStream
```

Go to the project directory

```bash
  cd StadiumStream
```

Install npm dependencies

```bash
  npm install
```
Install composer dependencies

```bash
  composer update
```

Start autoload

```bash
  composer dump-autoload
```

## What do you need to do

- Create a .env file in the public directory and you will change all the credentials to match those in your database

```env
HOST = host_name
USER = phpmydmin username
PASSWORD = phpmydmin password
DATABASE = db_name
```

## SQL code

- Create a database named Stadiumstream, then import this data into it
```sql
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2024 at 09:36 PM
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
  `stade` int NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`id`, `team1`, `team2`, `time`, `stade`, `image`) VALUES
(68, 4, 3, '2024-01-13 22:00:00', 1, '4vs3.jpg'),
(69, 3, 2, '2024-01-21 22:00:00', 3, '3vs2.jpg'),
(70, 6, 5, '2024-01-13 22:00:00', 3, '6vs5.jpg'),
(71, 6, 8, '2024-01-18 22:00:00', 3, '6vs8.jpg'),
(72, 5, 8, '2024-01-21 22:00:00', 4, '5vs8.jpg'),
(73, 6, 7, '2024-01-21 22:00:00', 5, '6vs7.jpg'),
(74, 10, 9, '2024-01-18 22:00:00', 4, '10vs9.jpg'),
(75, 9, 12, '2024-01-22 22:00:00', 5, '9vs12.jpg'),
(76, 11, 10, '2024-01-22 22:00:00', 3, '11vs10.jpg'),
(77, 11, 9, '2024-01-18 22:00:00', 2, '11vs9.jpg'),
(78, 10, 12, '2024-01-18 22:00:00', 2, '10vs12.jpg'),
(79, 10, 12, '2024-01-22 22:00:00', 1, '10vs12.jpg'),
(80, 15, 13, '2024-01-19 22:00:00', 3, '15vs13.jpg'),
(81, 16, 15, '2024-01-15 22:00:00', 2, '16vs15.jpg'),
(82, 14, 16, '2024-01-19 22:00:00', 2, '14vs16.jpg'),
(83, 15, 14, '2024-01-22 22:00:00', 1, '15vs14.jpg'),
(84, 16, 13, '2024-01-22 22:00:00', 5, '16vs13.jpg'),
(85, 20, 19, '2024-01-15 22:00:00', 4, '20vs19.jpg'),
(86, 18, 17, '2024-01-15 22:00:00', 5, '18vs17.jpg'),
(87, 17, 19, '2024-01-19 22:00:00', 4, '17vs19.jpg'),
(88, 20, 18, '2024-01-20 22:00:00', 2, '20vs18.jpg'),
(89, 17, 20, '2024-01-23 22:00:00', 3, '17vs20.jpg'),
(90, 22, 21, '2024-01-16 22:00:00', 4, '22vs21.jpg'),
(91, 24, 23, '2024-01-20 22:00:00', 5, '24vs23.jpg'),
(92, 23, 21, '2024-01-20 22:00:00', 2, '23vs21.jpg'),
(93, 22, 24, '2024-01-20 22:00:00', 3, '22vs24.jpg'),
(94, 23, 22, '2024-01-23 22:00:00', 5, '23vs22.jpg'),
(95, 21, 24, '2024-01-23 22:00:00', 3, '21vs24.jpg'),
(96, 1, 12, '2024-01-02 22:00:00', 2, '1vs12.jpg'),
(97, 4, 1, '2024-01-11 22:00:00', 2, '4vs1.jpg'),
(98, 4, 1, '2024-01-21 22:00:00', 1, '4vs1.jpg');

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
(6, 'Charles Konan Banny Stadium', 'Yamoussoukro', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `flag` varchar(255) DEFAULT NULL,
  `coach` varchar(255) NOT NULL,
  `founded_year` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `flag`, `coach`, `founded_year`) VALUES
(1, 'Ivory Coast', 'Ivory_Coast.jpeg', 'Joan Louis Gasset', 1950),
(2, 'Guinea Bissau', 'Guinea_Bissau.jpeg', 'Baciro Candé', 1965),
(3, 'Nigeria', 'Nigeria.jpeg', 'José Peseiro', 1972),
(4, 'Equatorial Guinea', 'Equatorial_Guinea.jpeg', 'Juan Micha', 1988),
(5, 'Egypt ', 'Egypt_.jpeg', 'Rui Vitória', 1990),
(6, 'Mozambique', 'Mozambique.jpeg', 'Chiquinho Conde', 1978),
(7, 'Ghana', 'Ghana.jpeg', 'Chris Hughton', 1962),
(8, 'Cape Verde', 'Cape_Verde.jpeg', 'Bubista', 1985),
(9, 'Senegal', 'Senegal.jpeg', 'Aliou Cissé', 1975),
(10, 'Gambia', 'Gambia.jpeg', 'Tom Saintfiet', 1995),
(11, 'Cameroon', 'Cameroon.jpeg', 'Rigobert Song', 1968),
(12, 'Guinea', 'Guinea.jpeg', 'Kaba Diawara', 1971),
(13, 'Algeria', 'Algeria.jpeg', 'Djamel Belmadi', 1982),
(14, 'Angola', 'Angola.jpeg', 'Pedro Gonçalves', 1967),
(15, 'Burkina Faso', 'Burkina_Faso.jpeg', 'Hubert Velud', 1970),
(16, 'Mauritania', 'Mauritania.jpeg', 'Amir Chelle', 1980),
(17, 'Mali', 'Mali.jpeg', 'Éric Chelle', 1998),
(18, 'South Africa', 'South_Africa.jpeg', 'Hugo Broos', 1999),
(19, 'Tunisia', 'Tunisia.jpeg', 'Jalel Kadri', 1957),
(20, 'Namibia', 'Namibia.jpeg', 'Collin Benjamin', 1987),
(21, 'Tanzania', 'Tanzania.jpeg', 'Adel Regragui', 1969),
(22, 'Morocco', 'Morocco.jpeg', 'Walid Regragui', 1960),
(23, 'DR Congo', 'DR_Congo.jpeg', 'Sébastien Desabre', 1992),
(24, 'Zambia', 'Zambia.jpeg', 'Avram Grant', 1977);

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
  `status` enum('sold','canceled','expired') DEFAULT 'sold'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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

```
## Authors

- [@Zaiid-Moumni](https://github.com/Zaiidmo/)
- [@Ismail-Lafhiel](https://github.com/Ismail-Lafhiel)
- [@khalid-oukha](https://github.com/khalid-oukha)



