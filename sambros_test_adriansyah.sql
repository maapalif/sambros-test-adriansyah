-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2020 pada 05.32
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sambros_test_adriansyah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `address` text NOT NULL,
  `logo` varchar(50) NOT NULL,
  `id_PIC` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `discard` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `company`
--

INSERT INTO `company` (`id`, `name`, `phone`, `address`, `logo`, `id_PIC`, `createdAt`, `discard`) VALUES
(1, 'PT. A', '021345678', 'Tangerang', 'logo.jpg', 1, '2020-07-10 02:54:48', 0),
(2, 'PT. B', '021678908', 'Tangerang Selatan', 'logob.jpg', 2, '2020-07-10 02:54:48', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pic`
--

CREATE TABLE `pic` (
  `id_PIC` int(11) NOT NULL,
  `name_PIC` varchar(35) NOT NULL,
  `email_PIC` varchar(50) NOT NULL,
  `phone_PIC` varchar(14) NOT NULL,
  `address_PIC` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `discard` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pic`
--

INSERT INTO `pic` (`id_PIC`, `name_PIC`, `email_PIC`, `phone_PIC`, `address_PIC`, `createdAt`, `discard`) VALUES
(1, 'A', 'a@gmail.com', '08764378324', 'Tangerang', '2020-07-10 02:56:20', 0),
(2, 'B', 'b@gmail.com', '086514256721', 'BSD', '2020-07-10 02:56:20', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`id_PIC`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pic`
--
ALTER TABLE `pic`
  MODIFY `id_PIC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
