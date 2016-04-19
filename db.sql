-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2016. Ápr 19. 18:19
-- Kiszolgáló verziója: 10.1.10-MariaDB
-- PHP verzió: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `orszag`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `megye`
--

CREATE TABLE `megye` (
  `megyeid` int(11) NOT NULL,
  `megyenev` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `megye`
--

INSERT INTO `megye` (`megyeid`, `megyenev`) VALUES
(4, 'Bács-Kiskun'),
(5, 'Baranya'),
(6, 'Békés'),
(7, 'Borsod-Abaúj-Zemplém'),
(8, 'Csongrád'),
(9, 'Fejér'),
(10, 'Györ-Moson-Sopron'),
(11, 'Hajdú-Bihar'),
(12, 'Heves'),
(13, 'Jász-Nagykun-Szolnok'),
(14, 'Komárom-Esztergom'),
(15, 'Nógrád'),
(16, 'Pest'),
(17, 'Somogy'),
(18, 'Szabolcs-Szatmár-Bereg'),
(19, 'Tolna'),
(20, 'Vas'),
(21, 'Veszprém'),
(22, 'Zala');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `varos`
--

CREATE TABLE `varos` (
  `varosid` int(11) NOT NULL,
  `varosnev` varchar(255) CHARACTER SET latin1 NOT NULL,
  `megye` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `megye`
--
ALTER TABLE `megye`
  ADD PRIMARY KEY (`megyeid`);

--
-- A tábla indexei `varos`
--
ALTER TABLE `varos`
  ADD PRIMARY KEY (`varosid`),
  ADD KEY `megye` (`megye`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `megye`
--
ALTER TABLE `megye`
  MODIFY `megyeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT a táblához `varos`
--
ALTER TABLE `varos`
  MODIFY `varosid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `varos`
--
ALTER TABLE `varos`
  ADD CONSTRAINT `varos_ibfk_1` FOREIGN KEY (`megye`) REFERENCES `megye` (`megyeid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
