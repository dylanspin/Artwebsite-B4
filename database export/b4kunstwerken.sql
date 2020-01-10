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
-- Tabelstructuur voor tabel `b4kunstwerken`
--

CREATE TABLE `b4kunstwerken` (
  `Prijs` int(11) NOT NULL,
  `kunstenaar` varchar(255) NOT NULL,
  `kunstwerk` varchar(255) NOT NULL,
  `bought` tinyint(1) NOT NULL DEFAULT '0',
  `seller` varchar(30) NOT NULL,
  `Owner` varchar(30) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `b4kunstwerken`
--

INSERT INTO `b4kunstwerken` (`Prijs`, `kunstenaar`, `kunstwerk`, `bought`, `seller`, `Owner`, `id`) VALUES
(3000, 'Pablo Picasso', 'Guernica ', 0, 'Dylanspin', ' ', 1),
(9000, 'Vincent van Gogh', 'Zelf portret zonder baard', 1, '', 'Dylanspin', 2),
(15000, 'Salvador Dali', 'De volharding der herinnering', 0, 'Bonospin', ' ', 3),
(14000, 'Het meisje met de ParelJohannes Vermeer', 'Het meisje met de Parel', 1, ' ', 'Bonospin', 4),
(15000, 'Rembrandt van Rijn', 'De Nachtwacht', 0, '', '', 5),
(23000, 'Edvard Munch', 'De Schreeuw', 0, '', '', 6),
(10000, 'Vincent van Gogh', 'Sterrennacht', 0, '', '', 7),
(75000, 'Michelangelo Buonarroti', 'De schepping van Adam', 1, '', 'Bonospin', 8),
(60000, 'Leonardo da Vinci', 'Het laatste Avondmaal', 0, '', '', 9),
(12000, 'Leonardo da Vinci', 'De Mona Lisa', 1, ' ', 'Bonospin', 10),
(30000, 'Caravaggio ', 'The Beheading of Saint John the Baptist', 0, '', '', 11),
(20000, 'Rembrandt ', 'Self-Portrait with Two Circles', 0, '', '', 12),
(300000, 'Parthenon Sculptures', 'not known', 0, '', '', 13),
(25000, 'Cézanne ', 'Mont Sainte-Victoire', 0, '', '', 14),
(15000, 'Cezanne', 'The Bathers', 0, '', '', 15),
(10000, 'Rubens', 'Massacre of the Innocents', 1, ' ', 'Dylanspin', 16),
(17000, 'Warhol', 'Campbell\'s Soup Cans', 0, '', '', 17),
(600000, 'CaveMan', 'Chauve Cave Paintings', 1, 'Dylanspin', 'Dylanspin', 18),
(10000, 'Monet', 'Water Lilies ', 0, '', '', 19),
(500000, 'Not know', 'Moai\r\n', 0, '', '', 20),
(200000, 'Rodin', 'The Thinker ', 0, '', '', 21),
(1000000, 'Eiffel', 'Statue of Liberty', 0, '', '', 22),
(2000000, 'Vincent van Gogh', 'The Red Vineyard', 0, '', '', 23),
(60000, 'Leonardo da Vinci', 'Salvator Mundi', 0, '', '', 24),
(30000, 'Paul Cezanne', 'The Card Players', 0, '', '', 25),
(200000, 'Rembrandt', 'Pendant portraits of\r\nMaerten Soolmans\r\nand Oopjen Coppit', 0, '', '', 26),
(300000, 'Gustav Klimt', 'Portrait of Adele Bloch-Bauer I', 0, '', '', 27),
(20000, 'Titian', 'Portrait of Alfonso d\'Avalos with a Page', 0, '', '', 28);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `b4kunstwerken`
--
ALTER TABLE `b4kunstwerken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `b4kunstwerken`
--
ALTER TABLE `b4kunstwerken`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100010;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
