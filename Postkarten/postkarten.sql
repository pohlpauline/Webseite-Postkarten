-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Jun 2024 um 13:11
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `postkarten`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contacts`
--

CREATE TABLE `contacts` (
  `nachrichtID` int(11) NOT NULL,
  `vorname` varchar(255) NOT NULL,
  `nachname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `nachricht` text NOT NULL,
  `bestelldatum` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `contacts`
--

INSERT INTO `contacts` (`nachrichtID`, `vorname`, `nachname`, `email`, `adresse`, `nachricht`, `bestelldatum`) VALUES
(1, 'Lina', 'Winter', 'lina@lina.de', 'haha', 'Hallo', '2024-05-16 18:10:51'),
(6, 'Tina', 'Sommer', 'tina@tina.de', 'Ringstrasse', 'Ich bin Tina Sommer.', '2024-05-27 16:52:13'),
(8, 'Tim', 'Meier', 'tim@tim.de', 'Ringstrasse', 'Hallo', '2024-05-27 17:37:07'),
(9, 'Lisa', 'Schmidt', 'schmidt@schmidt.de', 'Vesaliusstraße 5', 'Ich möchte gerne 10 Postkarten bestellen.', '2024-06-02 11:06:50');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `lieblingszitate`
--

CREATE TABLE `lieblingszitate` (
  `zitatID` int(11) NOT NULL,
  `lieblingszitat` text NOT NULL,
  `bestelldatum` timestamp NULL DEFAULT current_timestamp(),
  `nachrichtID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `lieblingszitate`
--

INSERT INTO `lieblingszitate` (`zitatID`, `lieblingszitat`, `bestelldatum`, `nachrichtID`) VALUES
(1, 'Test', '2024-05-16 18:11:50', 1),
(6, 'Wenn du es dir vorstellen kannst, dann kannst du es auch tun.', '2024-06-02 11:07:42', 9);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`nachrichtID`);

--
-- Indizes für die Tabelle `lieblingszitate`
--
ALTER TABLE `lieblingszitate`
  ADD PRIMARY KEY (`zitatID`),
  ADD KEY `verbindung_zu_contacts` (`nachrichtID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `contacts`
--
ALTER TABLE `contacts`
  MODIFY `nachrichtID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT für Tabelle `lieblingszitate`
--
ALTER TABLE `lieblingszitate`
  MODIFY `zitatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `lieblingszitate`
--
ALTER TABLE `lieblingszitate`
  ADD CONSTRAINT `verbindung_zu_contacts` FOREIGN KEY (`nachrichtID`) REFERENCES `contacts` (`nachrichtID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
