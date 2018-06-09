-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 09, 2018 at 04:24 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_newsletter`
--

CREATE TABLE `email_newsletter` (
  `id_email` varchar(7) NOT NULL,
  `ipaddress` varchar(30) NOT NULL,
  `info` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `waktu` date NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_newsletter`
--

INSERT INTO `email_newsletter` (`id_email`, `ipaddress`, `info`, `email`, `waktu`, `jam`) VALUES
('2187952', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', 'gelumbang@gmail.com', '2018-06-09', '12:56:26');

-- --------------------------------------------------------

--
-- Table structure for table `klik_histori`
--

CREATE TABLE `klik_histori` (
  `id_histori` varchar(7) NOT NULL,
  `ip_address` varchar(30) NOT NULL,
  `info` varchar(150) NOT NULL,
  `aksi` varchar(100) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klik_histori`
--

INSERT INTO `klik_histori` (`id_histori`, `ip_address`, `info`, `aksi`, `waktu`) VALUES
('1572496', '', '', '', '2018-06-08'),
('51153', '127.0.0.1', 'mozilla', 'daftar sekarang', '2018-06-08'),
('5635964', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', 'Klik Daftar Sekarang', '2018-06-08'),
('8630946', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', 'Klik Daftar Sekarang', '2018-06-08'),
('8261134', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', 'Klik Daftar Sekarang', '2018-06-08'),
('41606', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', 'Klik Daftar Sekarang', '2018-06-09'),
('1346678', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', 'Klik send Email', '2018-06-09'),
('195875', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', 'Klik send Email', '2018-06-09'),
('9521462', '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', 'Klik Daftar Sekarang', '2018-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `time_spent`
--

CREATE TABLE `time_spent` (
  `id_time_spent` varchar(7) NOT NULL,
  `migrasi_page` int(4) NOT NULL,
  `why_page` int(4) NOT NULL,
  `carakerja_page` int(4) NOT NULL,
  `kontak_page` int(4) NOT NULL,
  `ipaddress` varchar(50) NOT NULL,
  `info` varchar(150) NOT NULL,
  `waktu` date NOT NULL,
  `jam` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_spent`
--

INSERT INTO `time_spent` (`id_time_spent`, `migrasi_page`, `why_page`, `carakerja_page`, `kontak_page`, `ipaddress`, `info`, `waktu`, `jam`) VALUES
('8063008', 0, 0, 0, 0, '127.0.0.1', 'mozilla', '2018-06-08', '0'),
('1744961', 0, 0, 0, 0, '', '', '2018-06-08', '0'),
('2362564', 7, 7, 6, 3, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', '2018-06-08', '0'),
('2999143', 3, 2, 1, 1, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', '2018-06-08', '0'),
('9452347', 3, 3, 4, 2, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', '2018-06-08', '0'),
('4488893', 3, 3, 4, 2, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', '2018-06-08', '0'),
('2490634', 1, 0, 0, 0, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', '2018-06-08', '0'),
('8536493', 5, 8, 3, 5, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', '2018-06-08', '0'),
('4871516', 22, 11, 16, 0, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', '2018-06-09', '1'),
('9964049', 0, 0, 0, 0, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', '2018-06-09', '10'),
('613357', 1, 0, 0, 0, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', '2018-06-09', '4'),
('1615582', 1, 0, 0, 0, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', '2018-06-09', '4'),
('1880367', 2, 4, 2, 0, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', '2018-06-09', '04:18:53'),
('5883270', 0, 0, 0, 0, '127.0.0.1', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:58.0) Gecko/20100101 Firefox/58.0', '2018-06-09', '04:21:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
