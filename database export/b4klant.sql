-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 jan 2020 om 12:57
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
-- Tabelstructuur voor tabel `b4klant`
--

CREATE TABLE `b4klant` (
  `gebruikersnaam` varchar(30) NOT NULL,
  `wachtwoord` varchar(30) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `geld` int(255) NOT NULL DEFAULT '0',
  `woonplaats` varchar(50) NOT NULL,
  `straat` varchar(50) NOT NULL,
  `straatNr` int(11) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `telefoonNr` int(14) NOT NULL,
  `kunstwerken` longtext NOT NULL,
  `klantenNr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `b4klant`
--

INSERT INTO `b4klant` (`gebruikersnaam`, `wachtwoord`, `voornaam`, `achternaam`, `email`, `geld`, `woonplaats`, `straat`, `straatNr`, `postcode`, `telefoonNr`, `kunstwerken`, `klantenNr`) VALUES
('Dylanspin', 'Dylan1!', 'Dylan', 'Spin', 'dylanspin100@hotmail.com', 303000, 'Gieterveen', 'Veenakkers', 50, '9511TA', 6594939, 'a:13:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:1:\"2\";i:6;s:0:\"\";i:7;s:2:\"16\";i:8;s:0:\"\";i:9;s:0:\"\";i:10;s:0:\"\";i:11;s:0:\"\";i:12;s:2:\"18\";}', 1),
('Bonospin', 'Bono1!', 'Bono', 'Spin', 'bonospin@hotmail.com', 161000, 'Gieterveen', 'Veenakkers', 50, '9511TA', 843763843, 'a:7:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";i:3;s:1:\"8\";i:4;s:2:\"10\";i:5;s:1:\"4\";i:6;s:0:\"\";}', 2),
('Dylanspin3', 'Dylan3!', 'Dylan', 'Spin', 'dylanspin200@hotmail.com', 0, 'Gieterveen', 'Veenakkers', 50, '9511TA', 648680501, '', 3),
('Testaccount', 'Test1!', 'Test', 'Account', 'testAcount@hotmail.com', 0, 'gieterveen', 'Veenakkers', 50, '9511 TA', 648680501, '', 4),
('Dylanspin5', 'Dylan5!', 'Dylan', 'Spin', 'Dylanspin5@hotmail.com', 0, 'gieterveen', 'Veenakkers', 50, '9511 TA', 648680501, '', 5);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `b4klant`
--
ALTER TABLE `b4klant`
  ADD PRIMARY KEY (`klantenNr`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `b4klant`
--
ALTER TABLE `b4klant`
  MODIFY `klantenNr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
