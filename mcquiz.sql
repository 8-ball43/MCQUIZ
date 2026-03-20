-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2026 at 03:22 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcquiz`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odpowiedzi`
--

CREATE TABLE `odpowiedzi` (
  `id_odp` int(11) NOT NULL,
  `litera` varchar(1) DEFAULT NULL,
  `tresc` text DEFAULT NULL,
  `pytanie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `odpowiedzi`
--

INSERT INTO `odpowiedzi` (`id_odp`, `litera`, `tresc`, `pytanie_id`) VALUES
(1, 'A', 'Microsoft', 1),
(2, 'B', 'Markus Persson', 1),
(3, 'C', 'Jens Bergensten', 1),
(4, 'D', 'Mojang', 1),
(5, 'A', '1.17', 2),
(6, 'B', '1.18', 2),
(7, 'C', '1.19', 2),
(8, 'D', '1.20', 2),
(9, 'A', '11', 3),
(10, 'B', '7', 3),
(11, 'C', '9', 3),
(12, 'D', '10', 3),
(13, 'A', 'enderperly', 4),
(14, 'B', 'Serce morza', 4),
(15, 'C', 'Oko kresu', 4),
(16, 'D', 'Diamenty', 4),
(17, 'A', '1.12', 5),
(18, 'B', '1.14', 5),
(19, 'C', '1.16', 5),
(20, 'D', '1.13', 5),
(21, 'A', '3', 6),
(22, 'B', '6', 6),
(23, 'C', '5', 6),
(24, 'D', '4', 6),
(25, 'A', 'Nie nie mozna', 7),
(26, 'B', 'Tak za pomocą muszl łodzika', 7),
(27, 'C', 'Tak, za pomocą złota i wodorostów', 7),
(28, 'D', 'Tak, za pomocą trujzeba i lazurytu', 7),
(29, 'A', '1.15', 8),
(30, 'B', '1.11', 8),
(31, 'C', '1.12', 8),
(32, 'D', '1.14', 8),
(34, 'A', '1.1', 9),
(35, 'B', 'Beta 1.6', 9),
(36, 'C', 'Alpha 1.6', 9),
(37, 'D', 'Beta 1.5', 9),
(38, 'A', 'Z piasku i prochu', 10),
(39, 'B', 'Z żelaza i prochu', 10),
(40, 'C', 'zapalniczka i piasek', 10),
(41, 'D', 'proch i redstowne', 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pytania`
--

CREATE TABLE `pytania` (
  `id_pytania` int(11) NOT NULL,
  `tresc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pytania`
--

INSERT INTO `pytania` (`id_pytania`, `tresc`) VALUES
(1, 'Kto jest twórcom minecraft'),
(2, 'W której wersji dodano WARDENA'),
(3, 'Ile jest rud w Minecraft'),
(4, 'Co jest potrzebne do otwarcia portalu do ENDU'),
(5, 'W której wersji dodano mechanike pływania'),
(6, 'Ile jest rodzajów zombie'),
(7, 'Czy serce moza mozna stworzyc'),
(8, 'W której wersjii zaktualizowno wioski'),
(9, 'W której wersji niby usunięto Herobrine'),
(10, 'Z czego robi się TNT');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `haslo` varchar(50) DEFAULT NULL,
  `data_zalozenia_konta` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `token` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id_user`, `username`, `haslo`, `data_zalozenia_konta`, `token`) VALUES
(1, 'Mateusz', '111', '2026-03-18 14:13:20', 56606),
(2, 'Zawisza', '222', '2026-03-11 12:40:55', 22752),
(3, 'Zawisza Czarny', 'Jack', '2026-03-18 14:11:11', 78055),
(4, 'Test', 'Tak', '2026-03-18 14:19:32', 54477);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyniki`
--

CREATE TABLE `wyniki` (
  `id_wyniku` int(11) NOT NULL,
  `id_gracza` int(11) DEFAULT NULL,
  `uzyskany_wynik` int(11) DEFAULT NULL,
  `data_zdobycia` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wyniki`
--

INSERT INTO `wyniki` (`id_wyniku`, `id_gracza`, `uzyskany_wynik`, `data_zdobycia`) VALUES
(1, 2, 8, '2026-03-12 09:20:14'),
(2, 2, 10, '2026-03-12 09:21:04'),
(3, 2, 10, '2026-03-12 09:22:42'),
(4, 2, 10, '2026-03-12 09:22:56'),
(5, 2, 10, '2026-03-12 09:23:33'),
(6, 2, 10, '2026-03-12 09:26:31'),
(7, 2, NULL, '2026-03-12 09:26:41'),
(8, 2, 10, '2026-03-12 09:27:21'),
(9, 2, 10, '2026-03-12 09:42:07'),
(10, 2, 10, '2026-03-12 09:44:00'),
(11, 2, 10, '2026-03-12 09:47:14'),
(12, 2, 6, '2026-03-12 09:48:25'),
(13, 1, 7, '2026-03-12 09:49:26'),
(14, 1, 10, '2026-03-12 09:50:00'),
(15, 1, 4, '2026-03-12 09:50:54'),
(16, 1, 8, '2026-03-13 07:10:30'),
(17, 1, 8, '2026-03-13 07:12:01'),
(18, 1, 2, '2026-03-13 08:16:54'),
(19, 1, 3, '2026-03-13 08:18:31'),
(20, 1, 5, '2026-03-18 12:31:46'),
(21, 1, 2, '2026-03-18 12:32:12'),
(22, 1, 6, '2026-03-18 12:47:07'),
(23, 1, 9, '2026-03-18 13:01:59'),
(24, 1, 8, '2026-03-18 13:47:54'),
(25, 4, 9, '2026-03-18 14:20:15');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  ADD PRIMARY KEY (`id_odp`),
  ADD KEY `pytanie_id` (`pytanie_id`);

--
-- Indeksy dla tabeli `pytania`
--
ALTER TABLE `pytania`
  ADD PRIMARY KEY (`id_pytania`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indeksy dla tabeli `wyniki`
--
ALTER TABLE `wyniki`
  ADD PRIMARY KEY (`id_wyniku`),
  ADD KEY `id_gracza` (`id_gracza`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  MODIFY `id_odp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pytania`
--
ALTER TABLE `pytania`
  MODIFY `id_pytania` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wyniki`
--
ALTER TABLE `wyniki`
  MODIFY `id_wyniku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `odpowiedzi`
--
ALTER TABLE `odpowiedzi`
  ADD CONSTRAINT `odpowiedzi_ibfk_1` FOREIGN KEY (`pytanie_id`) REFERENCES `pytania` (`id_pytania`);

--
-- Constraints for table `wyniki`
--
ALTER TABLE `wyniki`
  ADD CONSTRAINT `wyniki_ibfk_1` FOREIGN KEY (`id_gracza`) REFERENCES `uzytkownicy` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
