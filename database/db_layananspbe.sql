-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2021 pada 05.07
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_layananspbe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_aplikasi`
--

CREATE TABLE `tb_aplikasi` (
  `id_aplikasi` int(15) NOT NULL,
  `tiket` text NOT NULL,
  `nama_OPD` text NOT NULL,
  `nama_aplikasi` text NOT NULL,
  `jenis_aplikasi` text NOT NULL,
  `pengembang` text NOT NULL,
  `sourcecode` varchar(50) NOT NULL,
  `verifikasi` enum('belum verifikasi','verifikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_aplikasi`
--

INSERT INTO `tb_aplikasi` (`id_aplikasi`, `tiket`, `nama_OPD`, `nama_aplikasi`, `jenis_aplikasi`, `pengembang`, `sourcecode`, `verifikasi`) VALUES
(26, 'APK30032021004', 'kominfo', 'simda', 'website', 'dwdsdsd', 'VID-20190909-WA0001.mp4', 'verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_domain`
--

CREATE TABLE `tb_domain` (
  `id_domain` int(15) NOT NULL,
  `tiket` text NOT NULL,
  `nama_OPD` text NOT NULL,
  `nama_domain` text NOT NULL,
  `jenis_domain` text NOT NULL,
  `verifikasi` enum('belum verifikasi','verifikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_domain`
--

INSERT INTO `tb_domain` (`id_domain`, `tiket`, `nama_OPD`, `nama_domain`, `jenis_domain`, `verifikasi`) VALUES
(5, 'DM28022021001', 'Tes1', 'Tes1', 'Tes1', 'verifikasi'),
(6, 'DM05032021002', 'Tes', 'Tes', 'Tes', 'belum verifikasi'),
(7, 'DM27032021003', 'multi', 'multitekno.com', '.com', 'belum verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_user`, `username`, `password`) VALUES
(1, 'admin@admin.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_zoom`
--

CREATE TABLE `tb_zoom` (
  `id_zoom` int(11) NOT NULL,
  `Tiket` text NOT NULL,
  `Nama_instansi` text NOT NULL,
  `keperluan` text NOT NULL,
  `E_mail` text NOT NULL,
  `No_handphone` text NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `verifikasi` enum('belum verifikasi','verivikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_zoom`
--

INSERT INTO `tb_zoom` (`id_zoom`, `Tiket`, `Nama_instansi`, `keperluan`, `E_mail`, `No_handphone`, `tgl_pinjam`, `tgl_kembali`, `verifikasi`) VALUES
(1, 'ZM30032021004', 'kehutanan', 'meeting zoom', 'muhammadhisyam174@gmail.com', '+6281357267278', '2021-04-01', '2021-04-03', 'belum verifikasi'),
(5, 'ZM30032021004', 'sdad', 'meeting', 'muhammadhisyam174@gmail.com', '+6281357267278', '2021-04-03', '2021-04-06', 'belum verifikasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_aplikasi`
--
ALTER TABLE `tb_aplikasi`
  ADD PRIMARY KEY (`id_aplikasi`);

--
-- Indeks untuk tabel `tb_domain`
--
ALTER TABLE `tb_domain`
  ADD PRIMARY KEY (`id_domain`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_zoom`
--
ALTER TABLE `tb_zoom`
  ADD PRIMARY KEY (`id_zoom`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_aplikasi`
--
ALTER TABLE `tb_aplikasi`
  MODIFY `id_aplikasi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_domain`
--
ALTER TABLE `tb_domain`
  MODIFY `id_domain` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_zoom`
--
ALTER TABLE `tb_zoom`
  MODIFY `id_zoom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
