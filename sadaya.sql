-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2018 pada 20.10
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `password` varchar(150) NOT NULL,
  `names` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `names`, `email`) VALUES
('Admin', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Admin', 'admintest@example.com'),
('admin', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'Admin', 'admin@example.com'),
('benhard', '92f48287dd42d8d547a0f72f8f82e6f5', 'Benhard Tampubolon', 'benhard_tampubolon23@yahoo.com'),
('ok', 'adf4661fe6715ed47954193e68b63036', 'ok', 'ok@example.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `kodeTempat` int(10) NOT NULL,
  `namaTempat` varchar(250) DEFAULT NULL,
  `linkGambar` varchar(300) DEFAULT NULL,
  `hargaTiket` double(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`kodeTempat`, `namaTempat`, `linkGambar`, `hargaTiket`) VALUES
(1, 'Bandung', 'assets/gambar_tempat/Bandung.jpg', 500000.00),
(2, 'Jakarta', 'assets/gambar_tempat/Jakarta.jpg', 500000.00),
(3, 'Yogyakarta', 'assets/gambar_tempat/Yogyakarta.jpg', 1000000.00),
(4, 'Bali', 'assets/gambar_tempat/Bali.jpg', 3000000.00),
(5, 'Lombok', 'assets/gambar_tempat/Lombok.jpg', 5000000.00);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`kodeTempat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `kodeTempat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
