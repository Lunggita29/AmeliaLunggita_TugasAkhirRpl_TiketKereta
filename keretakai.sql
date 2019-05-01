-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2019 pada 15.20
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keretakai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keretaindo`
--

CREATE TABLE `keretaindo` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keretaindo`
--

INSERT INTO `keretaindo` (`id`, `nama_pemesan`, `alamat`, `jumlah_tiket`, `tujuan`, `asal`, `tanggal_pesan`, `harga`) VALUES
(21, 'Nanda Syarla Hariyanti', 'JL. Sawojajar', 1, 'Kepanjen(KPN)', 'Malang(ML)', '2019-04-01', 10000),
(22, 'Faiz Diandra', 'JL. Sawojajar', 1, 'Kepanjen(KPN)', 'Malang(ML)', '2019-04-04', 10000),
(23, 'Zidan Rakhi', 'JL. Sawojajar', 1, 'Surabaya(SGU)', 'Malang(ML)', '2019-04-06', 29000),
(24, 'Ghufron Andriansyah', 'JL. Sawojajar', 1, 'Malang(ML)', 'Surabaya(SGU)', '2019-04-29', 29000),
(25, 'Della Andini Putri', 'JL. Sawojajar', 1, 'Surabaya(SGU)', 'Malang(ML)', '2019-04-11', 29000),
(29, 'Ni Kadek Cessica', 'JL. Sawojajar', 1, 'Surabaya(SGU)', 'Malang(ML)', '2019-04-24', 29000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin1', 'admin1'),
(2, 'admin2', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keretaindo`
--
ALTER TABLE `keretaindo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keretaindo`
--
ALTER TABLE `keretaindo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
