-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2022 pada 16.37
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `id_pakaian` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `bahan` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`id_pakaian`, `nama`, `kategori`, `bahan`, `harga`, `stok`, `gambar`) VALUES
(1, 'Aadoreity Chicago Sweatshirt', 'Sweatshirt', 'Flecee', '120.000', 13, 'sweat1.jpg'),
(2, 'Aadoreity Brookyln Sweatshirt', 'Sweatshirt', 'Flecee', '125.000', 12, 'sweat2.jpg'),
(3, 'Aadoreity Speed Way Sweatshirt', 'Sweatshirt', 'Flecee', '130.000', 7, 'sweat3.jpg'),
(4, 'Aadoreity Los Angeles Sweatshirt', 'Sweatshirt', 'Flecee', '145.000', 5, 'sweat4.jpg'),
(5, 'Aadoreity Butterflies', 'shirt', 'cotton combed 24s', '75.000', 11, 'shirt1.jpg'),
(6, 'Aadoreity American Summer', 'Shirt', 'cotton combed 24s', '75.000', 11, 'shirt2.jpg'),
(7, 'Aadoreity Spiderman', 'shirt', 'cotton combed 24s', '75.000', 11, 'shirt3.jpg'),
(8, 'Aadoreity Harley Davidson', 'Shirt', 'cotton combed 24s', '75.000', 11, 'shirt4.jpg'),
(9, 'Aadoreity Sushi', 'Hoodie', 'Flecee', '175.000', 7, 'hoodie1.jpg'),
(10, 'Aadoreity Notice', 'Hoodie', 'Flecee', '175.000', 11, 'hoodie2.jpg'),
(11, 'Aadoreity Akuma', 'Hoodie', 'Flecee', '175.000', 13, 'hoodie3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_pakaian`
--

CREATE TABLE `pesanan_pakaian` (
  `id_pesanan` int(11) NOT NULL,
  `id_pakaian` int(11) NOT NULL,
  `id_ukuran_pakaian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukuran_pakaian`
--

CREATE TABLE `ukuran_pakaian` (
  `id_ukuran_pakaian` int(11) NOT NULL,
  `ukuran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ukuran_pakaian`
--

INSERT INTO `ukuran_pakaian` (`id_ukuran_pakaian`, `ukuran`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL'),
(6, 'XXL'),
(7, 'XXXL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`id_pakaian`);

--
-- Indeks untuk tabel `pesanan_pakaian`
--
ALTER TABLE `pesanan_pakaian`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_pakaian` (`id_pakaian`),
  ADD KEY `id_ukuran_pakaian` (`id_ukuran_pakaian`);

--
-- Indeks untuk tabel `ukuran_pakaian`
--
ALTER TABLE `ukuran_pakaian`
  ADD PRIMARY KEY (`id_ukuran_pakaian`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `id_pakaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pesanan_pakaian`
--
ALTER TABLE `pesanan_pakaian`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `ukuran_pakaian`
--
ALTER TABLE `ukuran_pakaian`
  MODIFY `id_ukuran_pakaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan_pakaian`
--
ALTER TABLE `pesanan_pakaian`
  ADD CONSTRAINT `pesanan_pakaian_ibfk_1` FOREIGN KEY (`id_pakaian`) REFERENCES `pakaian` (`id_pakaian`),
  ADD CONSTRAINT `pesanan_pakaian_ibfk_2` FOREIGN KEY (`id_ukuran_pakaian`) REFERENCES `ukuran_pakaian` (`id_ukuran_pakaian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
