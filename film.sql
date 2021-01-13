-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 06:03 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_film`
--

CREATE TABLE `list_film` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `sutradara` varchar(255) NOT NULL,
  `Synopsis` varchar(1000) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `upadated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_film`
--

INSERT INTO `list_film` (`id`, `slug`, `judul`, `sutradara`, `Synopsis`, `cover`, `created_at`, `upadated_at`) VALUES
(1, 'avanger:-endagame', 'Avengers: Endgame', 'Joe Russo', 'Film action selanjutnya ada Avengers: Endgame yang merupakan kisah terakhir dari Avengers. Di mana pada film ini diceritakan bahwa alam semesta sudah hancur karena ulah Thanos. Maka dari itu, para Avengers yang tersisa berkumpul untuk membatalkan ide Thanos, sehingga alam bisa normal kembali. Dengan cerita yang begitu menegangkan sekaligus seru, film ini menghadirkan adegan keren dan tak terasa film berlangsung selama tiga jam. ', 'film1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'inception', 'Inception ', 'Christoper Nolan', 'Ada juga film action yang tidak kalah menarik. Judulnya adalah Inception yang pemeran utamanya adalah Leonardo DiCaprio. Di mana film ini mengisahkan tentang Dom Cobb yang merupakan seorang pencuri dengan kemampuan tak biasa. Ia bisa masuk ke dalam mimpi seseorang untuk mendapatkan informasi rahasia. Dengan cara ini, Dom Cobb bisa melangsungkan aksi jahatnya secara lancar. ', 'film2.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'shazam!', 'Shazam!', 'David F. Sandberg', 'Kalau kalian ingin film action yang santai tapi tetap ada unsur menegangkannya, bisa banget untuk nonton Shazam!. Film yang diadaptasi dari komik DC terkenal ini mengisahkan tentang remaja 14 tahun bernama Billy yang hidup secara nomaden. Pada suatu hari, ia bertemu seorang penyihir dan kemudian mengubahnya menjadi pahlawan super dengan mantra ajaibnya “Shazam”. \r\n\r\nKekuatan luar biasa yang dimilikinya dipergunakan untuk menghentikan kejahatan dari Dr. Thaddeus Sivana. Namun sayangnya tak selamanya indah, kekuatan tersebut menimbulkan bencana bagi dirinya. ', 'film3.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'alita:-battle-angel', 'Alita: Battle Angel', 'Robert Rodriguez', 'Film menarik lainnya ada Alita: Battle Angel yang terkenal dengan efek visualnya yang apik. Di mana pada film ini dikisahkan tentang cyborg yang ditemukan di timbunan sampah logam oleh Dr. Ido. Dr. Ido sendiri merupakan ilmuan yang juga ahli dalam perakitan tubuh manusia. Sejak saat itu, Dr. Ido menganggap cyborg yang diberi nama Alita tersebut sebagai anaknya sendiri. ', 'film4.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'tomb-raider', 'Tomb Raider', 'Roar Uthaug, \r\nMetro Goldwyn Mayer ', 'Film lainnya ada Tomb Raider. Film ini mengisahkan tentang Lara Croft yang mengalami peristiwa sedih, yang mana sang ayah menghilang secara tiba-tiba. Saat ia beranjak dewasa, usia 21 tahun, Lara mengingat kembali hilangnya sanga ayah. Akhirnya dirinya menyelidiki kasus tersebut dan pencarian tersebut membawanya ke sebuah situs kuno di pesisir Jepang. Pada saat itulah, petualangan Lara pun dimulai. ', 'film5.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'q', 'q', 'q', 'q', 'q', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'qs', 'qs', 'qs', 'qs', 'qs', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_film`
--
ALTER TABLE `list_film`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_film`
--
ALTER TABLE `list_film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
