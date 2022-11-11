-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 nov 2022 om 11:26
-- Serverversie: 10.4.24-MariaDB
-- PHP-versie: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectherk`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `prolang`
--

CREATE TABLE `prolang` (
  `id` int(5) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `beschrijving` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `prolang`
--

INSERT INTO `prolang` (`id`, `naam`, `beschrijving`, `img`) VALUES
(1, 'C++', 'C++ is een programmeertaal gebaseerd op C. In tegenstelling tot C is C++ een multi-paradigmataal, wat inhoudt dat er verschillende programmeerparadigma\'s gebruikt kunnen worden.', 'img/c+.png'),
(2, 'Python', 'Python is een programmeertaal die begin jaren 90 ontworpen en ontwikkeld werd door Guido van Rossum, destijds verbonden aan het Centrum voor Wiskunde en Informatica in Amsterdam.', 'img/python.png'),
(3, 'lua', 'Lua is een dynamisch getypeerde imperatieve scripttaal die veel als geïntegreerde scripttaal in applicaties gebruikt wordt, maar ook los gebruikt kan worden. De scripts worden uitgevoerd op een virtuele machine met garbage collection.', 'img/lua.png'),
(8, 'Python2', 'sdfdgfdg', 'img/python.png');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `prolang`
--
ALTER TABLE `prolang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `prolang`
--
ALTER TABLE `prolang`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
