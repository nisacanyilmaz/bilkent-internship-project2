-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Ağu 2019, 15:08:17
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `bitirme1`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_adi` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kategori_ustid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kategori_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_adi`, `kategori_ustid`) VALUES
(4, 'yıllar', 0),
(2, 'mevsimler', 0),
(3, 'gunler', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konular`
--

CREATE TABLE IF NOT EXISTS `konular` (
  `konu_id` int(11) NOT NULL AUTO_INCREMENT,
  `konu_baslik` varchar(200) NOT NULL,
  `konu_aciklama` text NOT NULL,
  `konu_kategori` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`konu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `konular`
--

INSERT INTO `konular` (`konu_id`, `konu_baslik`, `konu_aciklama`, `konu_kategori`) VALUES
(1, 'Başlık', 'Test Test test testtest testttttt', 3),
(3, 'Başlık2', '<p>acıklama</p>', 3),
(4, 'başlıkkkk', '<p>deneme</p>', 2),
(5, 'başlık3', '<p>gunlerrrr</p>', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `makale`
--

CREATE TABLE IF NOT EXISTS `makale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(100) NOT NULL,
  `icerik` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `makale`
--

INSERT INTO `makale` (`id`, `baslik`, `icerik`) VALUES
(1, '1 başlık', '<p>test&nbsp;test&nbsp;testtest&nbsp;testtesttesttest&nbsp;test</p>'),
(2, '2 başlık', '<p>denemedeneme&nbsp;deneme&nbsp;deneme&nbsp;deneme&nbsp;</p>'),
(3, 'başlıkkkk', '<p>deneme test deneme tst</p>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `metinler`
--

CREATE TABLE IF NOT EXISTS `metinler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hakkimda` text COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `metinler`
--

INSERT INTO `metinler` (`id`, `hakkimda`) VALUES
(1, '<p>hakkımda <em><strong>hakkımda</strong></em>&nbsp;hakkımda&nbsp;hakkımda&nbsp;hakkımda&nbsp;hakkımda&nbsp;hakkımda&nbsp;</p>'),
(2, '<p>test12 test21212</p>');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `pass` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `username`, `pass`) VALUES
(1, 'nisa', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
