-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 08 Haz 2020, 16:08:38
-- Sunucu sürümü: 10.4.10-MariaDB
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `odev`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) DEFAULT NULL,
  `kadi` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `adi`, `kadi`, `sifre`) VALUES
(1, 'Ali Veli', 'ali', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Ertuğrul Eren', 'ertrleren', '10ce3e819215526107e96be7942d16c1'),
(6, 'Gülcihan ERGİN', 'gulcı34', '25f9e794323b453885f5181f1b624d0b'),
(7, 'Ertuğrul Eren', 'ertu', '7a37002e52b530ba15323527d1367f5f'),
(8, 'Deneme', 'deneme1', '8f10d078b2799206cfe914b32cc6a5e9'),
(9, 'deneme 1', 'deneme', '8f10d078b2799206cfe914b32cc6a5e9'),
(10, 'denemekayıt', 'denemekayıt', '8f10d078b2799206cfe914b32cc6a5e9');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urunadi` varchar(255) DEFAULT NULL,
  `resmi` varchar(255) DEFAULT NULL,
  `fiyati` varchar(255) DEFAULT NULL,
  `kategorisi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `urunadi`, `resmi`, `fiyati`, `kategorisi`) VALUES
(10, 'Kahve Rengi', 'image1590941280.jpeg', '150', 'tul-perde'),
(12, 'Tül Perde 3', 'image1590941325.jpeg', '125', 'tul-perde'),
(13, 'Tül Perde 4', 'image1590941349.jpeg', '140', 'tul-perde'),
(14, 'Kanat Perde 1', 'image1590941376.jpeg', '150', 'kanat-perde'),
(15, 'Kanat Perde 2', 'image1590941387.jpeg', '170', 'kanat-perde'),
(16, 'Kanat Perde 3', 'image1590941399.jpeg', '220', 'kanat-perde'),
(17, 'Kanat Perde 4', 'image1590941417.jpeg', '210', 'kanat-perde'),
(18, 'Aksesuar', 'image1590943024.jpeg', '120', 'aksesuar'),
(20, 'Zebra', 'image1591630489.jpeg', '150', 'stor-perde'),
(22, 'jaluzi', 'image1591631538.png', '200', 'aksesuar');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yoneticiler`
--

DROP TABLE IF EXISTS `yoneticiler`;
CREATE TABLE IF NOT EXISTS `yoneticiler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) DEFAULT NULL,
  `kadi` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yoneticiler`
--

INSERT INTO `yoneticiler` (`id`, `adi`, `kadi`, `sifre`) VALUES
(1, 'Ertuğrul Eren', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Yavuz Eren', 'yavuz', 'bf7db697c932cd9ace90ad49251e46ec'),
(5, 'Ertuğrul Eren', 'ertugrul', '7a37002e52b530ba15323527d1367f5f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
