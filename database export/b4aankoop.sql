-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 jan 2020 om 12:58
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `b4aankoop`
--

CREATE TABLE `b4aankoop` (
  `naamKlant` varchar(255) NOT NULL,
  `Verkooper` varchar(30) NOT NULL DEFAULT 'Site',
  `kunstwerk` varchar(255) NOT NULL,
  `Prijs` int(100) NOT NULL,
  `aankoopdatum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `b4aankoop`
--

INSERT INTO `b4aankoop` (`naamKlant`, `Verkooper`, `kunstwerk`, `Prijs`, `aankoopdatum`, `id`) VALUES
('Dylaspin', 'Site', 'Massacre of the Innocents', 10000, '2020-01-10 10:53:35', 1),
('Dylanspin', 'Site', 'Guernica ', 3000, '2020-01-10 10:53:38', 2),
('Bonospin', 'Dylanspin', 'De Mona Lisa', 12000, '2020-01-10 10:56:10', 3),
('Bonospin', 'Site', 'Het meisje met de Parel', 14000, '2020-01-10 11:40:40', 4),
('Bonospin', 'Site', 'De volharding der herinnering', 13000, '2020-01-10 10:59:35', 5),
('Dylanspin', 'Site', 'Chauve Cave Paintings', 500000, '2020-01-10 11:45:48', 6);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `b4aankoop`
--
ALTER TABLE `b4aankoop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `b4aankoop`
--
ALTER TABLE `b4aankoop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
