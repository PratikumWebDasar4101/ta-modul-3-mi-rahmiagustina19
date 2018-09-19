-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Sep 2018 pada 11.25
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `database_ta4`
--

CREATE TABLE `database_ta4` (
  `Nim` int(10) NOT NULL,
  `Nama_user` varchar(20) NOT NULL,
  `Fakultas` varchar(25) NOT NULL,
  `Jenis_kelamin` varchar(9) NOT NULL,
  `File_gbr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `database_ta4`
--

INSERT INTO `database_ta4` (`Nim`, `Nama_user`, `Fakultas`, `Jenis_kelamin`, `File_gbr`) VALUES
(87483, 'jsdhj', 'FTE', '1.', '2b.PNG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `database_ta4`
--
ALTER TABLE `database_ta4`
  ADD PRIMARY KEY (`Nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
