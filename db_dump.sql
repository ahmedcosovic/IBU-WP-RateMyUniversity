-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2023 at 11:58 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmu`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `code` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `ects` int NOT NULL,
  `name` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_courses_universities_idx` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `uid`, `code`, `ects`, `name`) VALUES
(1, 1, 'IBU-001', 6, 'Calculus I'),
(2, 1, 'IBU-002', 7, 'Web Programming'),
(3, 2, 'IUS-001', 6, 'Mobile Programming'),
(4, 2, 'IUS-002', 6, 'Software Development'),
(5, 3, 'SA-001', 7, 'Inzenjerska matematika 1'),
(6, 3, 'SA-002', 7, 'Uvod u programiranje'),
(7, 4, 'ZE-001', 7, 'Relacione baze podataka'),
(8, 4, 'ZE-002', 6, 'Tehnike programiranja'),
(9, 5, 'TZ-001', 6, 'Racunarska grafika 1'),
(10, 5, 'TZ-002', 5, 'Inzenjerska fizika 1'),
(11, 6, 'ZG-001', 4, 'Strukture i algoritmi'),
(12, 6, 'ZG-002', 7, 'Operativni sustavi');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pc_id` int NOT NULL,
  `sid` int NOT NULL,
  `pscore` int NOT NULL,
  `cscore` int NOT NULL,
  `datetime` datetime NOT NULL,
  `anonymous` tinyint NOT NULL,
  `comment` varchar(255) COLLATE utf8mb3_bin DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkratinguc_idx` (`pc_id`),
  KEY `fkratingu_idx` (`sid`),
  KEY `fkratingscores_idx` (`pscore`,`cscore`),
  KEY `fkratingcscores_idx` (`cscore`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `pc_id`, `sid`, `pscore`, `cscore`, `datetime`, `anonymous`, `comment`) VALUES
(9, 1, 3, 3, 4, '2023-05-10 19:51:20', 1, 'test1'),
(10, 2, 2, 4, 3, '2023-05-10 19:51:20', 1, 'test2'),
(11, 7, 2, 5, 5, '2023-05-10 19:51:20', 1, 'test3'),
(12, 8, 3, 1, 1, '2023-05-10 19:51:20', 1, 'test4'),
(13, 16, 5, 2, 4, '2023-05-10 19:51:20', 0, 'test5'),
(14, 18, 6, 4, 2, '2023-05-10 19:51:20', 0, 'test6'),
(15, 19, 7, 3, 3, '2023-05-10 19:51:20', 0, 'test7'),
(16, 22, 9, 1, 1, '2023-05-10 19:51:20', 0, 'test8');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

DROP TABLE IF EXISTS `scores`;
CREATE TABLE IF NOT EXISTS `scores` (
  `score` int NOT NULL,
  `description` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`score`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`score`, `description`) VALUES
(1, 'Awful'),
(2, 'Bad'),
(3, 'Neutral'),
(4, 'Good'),
(5, 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

DROP TABLE IF EXISTS `universities`;
CREATE TABLE IF NOT EXISTS `universities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `address` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `city` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `country` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `address`, `city`, `country`) VALUES
(1, 'IBU', 'Francuske Revolucije bb', 'Sarajevo', 'Bosnia and Herzegovina'),
(2, 'IUS', 'Hrasnicka cesta 15', 'Sarajevo', 'Bosnia and Herzegovina'),
(3, 'UNSA', 'Zmaja od Bosne bb', 'Sarajevo', 'Bosnia and Herzegovina'),
(4, 'UNZE', 'Fakultetska 3', 'Zenica', 'Bosnia and Herzegovina'),
(5, 'UNTZ', 'Dr. Tihomila Markovica 1', 'Tuzla', 'Bosnia and Herzegovina'),
(6, 'UniZg', 'Trg Republike Hrvatske 3', 'Zagreb', 'Croatia'),
(7, 'NONE', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `password` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `email` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `professor` tinyint NOT NULL,
  `uid` int NOT NULL,
  `fullname` varchar(45) COLLATE utf8mb3_bin NOT NULL,
  `stuid` int DEFAULT NULL,
  `admin` tinyint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `stuid_UNIQUE` (`stuid`),
  KEY `fkusersuni_idx` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `professor`, `uid`, `fullname`, `stuid`, `admin`) VALUES
(1, 'ahmed.cosovic', 'ahmed123', 'ahmed.cosovic@stu.ibu.edu.ba', 1, 1, 'Ahmed Cosovic', NULL, 1),
(2, 'amar.djurovic', 'amar123', 'amar.durovic@stu.ibu.edu.ba', 0, 1, 'Amar Djurovic', 21001111, 0),
(3, 'muhamed.slijivic', 'muhamed123', 'muhamed.sljivic@stu.ibu.edu.ba', 0, 1, 'Muhamed Sljivic', 21002222, 1),
(4, 'admin', 'admin', 'admin@domain.com', 1, 7, 'Administrator', NULL, 0),
(5, 'iusovac', 'ius123', 'stu@ius.com', 0, 2, 'IUSovac', 123, 0),
(6, 'sarajlija', 'unsa123', 'stu@unsa.ba', 0, 3, 'Sarajlija', 456, 0),
(7, 'zenicanin', 'zenica123', 'stu@zenica.ba', 0, 4, 'Zenicanin', 789, 0),
(8, 'tuzlak', 'tuzla123', 'stu@tuzla.ba', 0, 5, 'Tuzlak', 12, 0),
(9, 'zagrepcanin', 'zagreb123', 'stu@unizg.hr', 0, 6, 'Zagrepcanin', 345, 0),
(10, 'p.iusovac', 'pius123', 'prof@ius.com', 1, 2, 'prof. IUSovac', NULL, 0),
(11, 'p.sarajlija', 'punsa123', 'prof@unsa.ba', 1, 3, 'prof. Sarajlija', NULL, 0),
(12, 'p.zenicanin', 'pzenica123', 'prof@zenica.ba', 1, 4, 'prof. Zenicanin', NULL, 0),
(13, 'p.tuzlak', 'ptuzla123', 'prof@tuzla.ba', 1, 5, 'prof. Tuzlak', NULL, 0),
(14, 'p.zagrepcanin', 'pzagreb123', 'prof@unizg.hr', 1, 6, 'prof. Zagrepcanin', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_courses`
--

DROP TABLE IF EXISTS `user_courses`;
CREATE TABLE IF NOT EXISTS `user_courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `cid` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkucu_idx` (`uid`),
  KEY `fkucc_idx` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

--
-- Dumping data for table `user_courses`
--

INSERT INTO `user_courses` (`id`, `uid`, `cid`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(4, 2, 2),
(5, 3, 1),
(6, 3, 2),
(7, 4, 1),
(8, 4, 2),
(9, 5, 3),
(10, 6, 5),
(11, 6, 6),
(12, 7, 7),
(13, 7, 8),
(14, 8, 10),
(15, 9, 12),
(16, 10, 3),
(17, 10, 4),
(18, 11, 6),
(19, 12, 8),
(20, 13, 9),
(21, 14, 11),
(22, 14, 12);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `fkcoursesuniversities` FOREIGN KEY (`uid`) REFERENCES `universities` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fkratingcscores` FOREIGN KEY (`cscore`) REFERENCES `scores` (`score`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fkratingscores` FOREIGN KEY (`pscore`) REFERENCES `scores` (`score`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fkratingstudents` FOREIGN KEY (`sid`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fkratinguc` FOREIGN KEY (`pc_id`) REFERENCES `user_courses` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fkusersuni` FOREIGN KEY (`uid`) REFERENCES `universities` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_courses`
--
ALTER TABLE `user_courses`
  ADD CONSTRAINT `fkucc` FOREIGN KEY (`cid`) REFERENCES `courses` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fkucu` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
