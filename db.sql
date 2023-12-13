DROP DATABASE IF EXISTS `laundryku`;
CREATE DATABASE laundryku;
use laundryku;
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Des 2023 pada 14.52
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundryku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_bulan`
--

CREATE TABLE `data_bulan` (
  `id` int(35) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor` varchar(80) NOT NULL,
  `berat` varchar(68) NOT NULL,
  `jenis` varchar(75) NOT NULL,
  `tanggal` varchar(85) NOT NULL,
  `jumlah` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_bulan`
--

INSERT INTO `data_bulan` (`id`, `nama`, `alamat`, `nomor`, `berat`, `jenis`, `tanggal`, `jumlah`) VALUES
(1, 'hahha', 'fafdasfd', '089611100101', '11', 'pakaian', '2023-12-15', '110000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_minggu`
--

CREATE TABLE `data_minggu` (
  `id` int(35) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor` varchar(80) NOT NULL,
  `berat` varchar(68) NOT NULL,
  `jenis` varchar(75) NOT NULL,
  `tanggal` varchar(85) NOT NULL,
  `jumlah` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_minggu`
--

INSERT INTO `data_minggu` (`id`, `nama`, `alamat`, `nomor`, `berat`, `jenis`, `tanggal`, `jumlah`) VALUES
(3, 'hahha', 'fafdasfd', '089611100101', '11', 'pakaian', '2023-12-15', '110000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tahun`
--

CREATE TABLE `data_tahun` (
  `id` int(35) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor` varchar(80) NOT NULL,
  `berat` varchar(68) NOT NULL,
  `jenis` varchar(75) NOT NULL,
  `tanggal` varchar(85) NOT NULL,
  `jumlah` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id` int(40) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`id`, `harga`) VALUES
(1, '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `usertype` varchar(60) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `usertype`) VALUES
(1, 'hafid', 'hafid', '12345', 'admin'),
(3, 'hafid ganteng', 'ganteng@gmail.com', '123445r', 'user'),
(4, 'hafid ganteng', 'gg@gmail.com', '123455', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_bulan`
--
ALTER TABLE `data_bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_minggu`
--
ALTER TABLE `data_minggu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_tahun`
--
ALTER TABLE `data_tahun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_bulan`
--
ALTER TABLE `data_bulan`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_minggu`
--
ALTER TABLE `data_minggu`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_tahun`
--
ALTER TABLE `data_tahun`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
