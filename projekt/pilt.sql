-- phpMyAdmin SQL Dump
-- version 4.6.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Loomise aeg: Mai 29, 2017 kell 02:04 PM
-- Serveri versioon: 5.7.18-0ubuntu0.16.10.1
-- PHP versioon: 7.0.15-0ubuntu0.16.10.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `ipruul`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `pilt`
--

CREATE TABLE `pilt` (
  `pilt_id` int(11) NOT NULL,
  `pilt` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Andmete tõmmistamine tabelile `pilt`
--

INSERT INTO `pilt` (`pilt_id`, `pilt`) VALUES
(1, 'img/_MG_0188.JPG'),
(2, 'img/_MG_0191.JPG'),
(3, 'img/_MG_0200.JPG'),
(4, 'img/_MG_1832.JPG'),
(5, 'img/_MG_1841.JPG'),
(6, 'img/_MG_1855.JPG'),
(7, 'img/_MG_3122.JPG'),
(8, 'img/_MG_3171.JPG');

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `pilt`
--
ALTER TABLE `pilt`
  ADD PRIMARY KEY (`pilt_id`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `pilt`
--
ALTER TABLE `pilt`
  MODIFY `pilt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
