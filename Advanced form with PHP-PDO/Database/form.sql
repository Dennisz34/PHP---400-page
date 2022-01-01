-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Oca 2022, 01:37:00
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `form`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit`
--

CREATE TABLE `kayit` (
  `id` int(20) UNSIGNED NOT NULL,
  `ad` varchar(20) NOT NULL,
  `soyad` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sifre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kayit`
--

INSERT INTO `kayit` (`id`, `ad`, `soyad`, `email`, `sifre`) VALUES
(1, '5t', 'rt', 'ert@fo.com', '23'),
(2, 'Dennis', 'Uku', 'uku34@uku.com', '123'),
(3, 'Leonardo', 'Da vinci', 'bilim@ilim.com', '3'),
(4, '4', '4', '54@ho.co', ''),
(5, '45', '54', 'password1@fef.c', '1'),
(6, '34', '34', '43@hot.v', '5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sanalkard`
--

CREATE TABLE `sanalkard` (
  `id` int(20) UNSIGNED NOT NULL,
  `cardNumber` int(44) NOT NULL,
  `cardName` varchar(85) NOT NULL,
  `cardMonth` int(20) NOT NULL,
  `cardYear` int(20) NOT NULL,
  `cardCvv` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sanalkard`
--

INSERT INTO `sanalkard` (`id`, `cardNumber`, `cardName`, `cardMonth`, `cardYear`, `cardCvv`) VALUES
(1, 2333, '23444444444', 2343, 5, 2027),
(2, 2333, '23444444444', 2343, 5, 2027),
(3, 3434, '444444444', 3545, 6, 2030);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE `uye` (
  `id` int(10) UNSIGNED NOT NULL,
  `adi` varchar(20) NOT NULL,
  `soyadi` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sifre` varchar(20) NOT NULL,
  `cardnumber` int(20) NOT NULL,
  `cardholders` int(20) NOT NULL,
  `zaman` varchar(20) NOT NULL,
  `cvv` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kayit`
--
ALTER TABLE `kayit`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sanalkard`
--
ALTER TABLE `sanalkard`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uye`
--
ALTER TABLE `uye`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kayit`
--
ALTER TABLE `kayit`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `sanalkard`
--
ALTER TABLE `sanalkard`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `uye`
--
ALTER TABLE `uye`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
