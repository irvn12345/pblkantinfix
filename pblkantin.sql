-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Okt 2022 pada 09.42
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pblkantin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_menu`
--

CREATE TABLE `pembelian_menu` (
  `id_pembelian_menu` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembelian_menu`
--

INSERT INTO `pembelian_menu` (`id_pembelian_menu`, `id_pembelian`, `id_menu`, `jumlah`) VALUES
(1, 1, 1, '1'),
(2, 2, 2, '1'),
(3, 0, 15, '1'),
(4, 0, 16, '1'),
(5, 0, 17, '1'),
(6, 0, 20, '1'),
(7, 0, 29, '1'),
(8, 0, 15, '1'),
(9, 0, 16, '1'),
(10, 0, 17, '1'),
(11, 0, 20, '1'),
(12, 0, 29, '1'),
(13, 0, 15, '1'),
(14, 0, 16, '1'),
(15, 0, 17, '1'),
(16, 0, 20, '1'),
(17, 0, 29, '1'),
(18, 0, 15, '1'),
(19, 0, 16, '1'),
(20, 0, 17, '1'),
(21, 0, 20, '1'),
(22, 0, 29, '1'),
(23, 13, 15, '1'),
(24, 13, 16, '1'),
(25, 13, 17, '1'),
(26, 13, 20, '1'),
(27, 13, 29, '1'),
(28, 14, 15, '1'),
(29, 14, 16, '1'),
(30, 14, 17, '1'),
(31, 14, 20, '1'),
(32, 14, 29, '1'),
(33, 15, 15, '1'),
(34, 15, 17, '1'),
(35, 16, 12, '1'),
(36, 17, 18, '1'),
(37, 17, 19, '1'),
(38, 18, 12, '1'),
(39, 18, 17, '1'),
(40, 18, 20, '1'),
(41, 19, 17, '2'),
(42, 19, 20, '1'),
(43, 19, 13, '2'),
(44, 19, 30, '1'),
(45, 20, 31, '2'),
(46, 20, 25, '1'),
(47, 20, 19, '1'),
(48, 20, 17, '1'),
(49, 21, 13, '2'),
(50, 21, 16, '1'),
(51, 21, 17, '1'),
(52, 21, 18, '1'),
(53, 22, 16, '1'),
(54, 22, 17, '1'),
(55, 22, 19, '1'),
(56, 22, 21, '1'),
(57, 22, 30, '1'),
(58, 23, 16, '1'),
(59, 23, 19, '1'),
(60, 23, 20, '1'),
(61, 24, 31, '1'),
(62, 24, 13, '1'),
(63, 24, 20, '1'),
(64, 24, 27, '1'),
(65, 24, 29, '1'),
(66, 24, 28, '1'),
(67, 25, 13, '1'),
(68, 25, 16, '1'),
(69, 25, 17, '1'),
(70, 25, 18, '1'),
(71, 25, 20, '1'),
(72, 26, 13, '1'),
(73, 26, 20, '1'),
(74, 27, 13, '1'),
(75, 27, 16, '1'),
(76, 27, 24, '1'),
(77, 28, 16, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `stock` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id`, `name`, `price`, `stock`, `image`) VALUES
(16, 'Bakso Aci', '12000', 20, 'bakso_aci-removebg-preview.png'),
(17, 'Bakso', '10000', 15, 'bakso-removebg-preview.png'),
(18, 'Boba', '8000', 25, 'boba-removebg-preview.png'),
(19, 'bubur ayam', '10000', 20, 'bubur-removebg-preview.png'),
(20, 'croffle', '15000', 20, 'croffle-removebg-preview.png'),
(21, 'Donut', '6000', 25, 'donut-removebg-preview.png'),
(22, 'Es Krim', '7000', 25, 'es_krim-removebg-preview.png'),
(23, 'Jus Buah', '8000', 25, 'jus_buah-removebg-preview.png'),
(24, 'Kelepon', '5000', 25, 'kelepon-removebg-preview.png'),
(25, 'Lemon Tea', '4000', 30, 'lemon_tea-removebg-preview.png'),
(26, 'Pudding', '5000', 30, 'pudding-removebg-preview.png'),
(27, 'Sate Taichan', '13000', 35, 'sate_taichan-removebg-preview.png'),
(28, 'Seblak', '12000', 25, 'seblak-removebg-preview.png'),
(29, 'Steak Ayam', '18000', 25, 'steak_ayam-removebg-preview.png'),
(30, 'Green Tea', '5000', 30, 'teh_matcha-removebg-preview.png'),
(31, 'Air Mineral', '5000', 10, 'aqua-removebg-preview.png'),
(33, 'Es Campur', '10000', 40, 'es_buah-removebg-preview.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_user`, `nama_user`, `email_pelanggan`, `telepon_pelanggan`) VALUES
(11, '', 'arilesmana@gmail.com', '081214443221'),
(12, '', 'pamungkas123@gmail.com', '081214443222'),
(13, '', 'angelia12@gmail.com', '082144556789'),
(14, '', 'kresnaarya@gmail.com', '081212337740'),
(15, 'Ilham Akbar', 'ilhamakbar@gmail.com', '09812345678'),
(16, 'Muhammad Rakha', 'rakha123@gmail.com', '081252655664');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pembelian`
--

INSERT INTO `tb_pembelian` (`id_pembelian`, `id_user`, `nama_pelanggan`, `tanggal_pembelian`, `total_pembelian`) VALUES
(21, 9, 'budi', '2022-06-28', 40000),
(22, 15, 'Ilham Akbar', '2022-06-28', 43000),
(23, 12, 'Pamungkas', '2022-06-28', 37000),
(24, 16, 'Muhammad Rakha', '2022-06-28', 68000),
(28, 0, 'Kresna Arya', '2022-09-13', 12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rfid`
--

CREATE TABLE `tb_rfid` (
  `id_user` int(11) NOT NULL,
  `id_rfid` varchar(20) NOT NULL,
  `nama_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rfid`
--

INSERT INTO `tb_rfid` (`id_user`, `id_rfid`, `nama_user`) VALUES
(11, '2040211085', 'Ari Lesmana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','penjual','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Rakha', 'rakha', 'admin', 'admin'),
(5, 'Alfito', 'alfito', 'admin', 'admin'),
(6, 'ilham', 'ilham', 'admin', 'admin'),
(7, 'kresna', 'kresna', 'admin', 'admin'),
(8, 'fadhil', 'fadhil', 'admin', 'admin'),
(9, 'budi', 'budi', 'penjual', 'penjual'),
(10, 'wiwin', 'wiwin', 'penjual', 'penjual'),
(11, 'Ari Lesmana', 'Ari Lesmana', 'user', 'user'),
(12, 'Pamungkas', 'Pamungkas', 'user', 'user'),
(13, 'angelina jolie', 'Angelina Jolie', 'user', 'user'),
(14, 'kresna arya', 'Kresna Arya', 'user', 'user'),
(15, 'Ilham Akbar', 'Ilham Akbar', 'user', 'user'),
(16, 'Muhammad Rakha', 'Muhammad Rakha', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pembelian_menu`
--
ALTER TABLE `pembelian_menu`
  ADD PRIMARY KEY (`id_pembelian_menu`);

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `tb_rfid`
--
ALTER TABLE `tb_rfid`
  ADD PRIMARY KEY (`id_rfid`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pembelian_menu`
--
ALTER TABLE `pembelian_menu`
  MODIFY `id_pembelian_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
