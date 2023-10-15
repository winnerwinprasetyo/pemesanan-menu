-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2023 pada 15.21
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kedai_wildan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_whatsapp` varchar(13) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `no_whatsapp`, `tgl_pesan`, `batas_bayar`) VALUES
(22, 'Joko Susanto', 'Tangerang', '089539221709', '2023-08-05 21:09:28', '2023-08-06 21:09:28'),
(23, 'Bayu Eka', 'Tangerang', '089766621', '2023-08-07 04:49:17', '2023-08-08 04:49:17'),
(24, 'Eko Prasetyo', 'Cimone', '08966755121', '2023-08-07 04:51:02', '2023-08-08 04:51:02'),
(25, 'Bewin', 'Tangerang KOta', '08977656', '2023-08-07 04:57:29', '2023-08-08 04:57:29'),
(26, 'Bewin', 'Tangerang Kota', '0897766566', '2023-08-07 04:59:00', '2023-08-08 04:59:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id_menu`, `nama_menu`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Pempek Lenjer', 'Pempek Khas Jakarta', 'Makanan', 15000, 15, 'pempek.jpg'),
(4, 'Es Campur', 'Es Campur Segar', 'Minuman', 10000, 13, 'Campur.jpg'),
(11, 'Air Putih', 'Aqua', 'Minuman', 4000, 6, 'aqua4.jpg'),
(12, 'Pempek Adaan', 'Pempek Khas Palembang', 'Makanan', 15000, 19, 'Pempek_adaan1.jpg'),
(13, 'Es Teh Manis', 'Es Teh Manis', 'Minuman', 4000, 9, 'tehmanis1.jpg'),
(14, 'Pempek Kulit', 'Pempek kulit maknyus', 'Makanan', 10000, 14, 'Pempek-Kulit.jpg'),
(15, 'Pempek Campur', 'Pempek Asli Palembang', 'Makanan', 10000, 10, 'pempek-campur.jpg'),
(16, 'Pempek Telur', 'Pempek Khas Palembang', 'Makanan', 10000, 15, 'pempek-telur.jpg'),
(17, 'Pempek Kapal Selam', 'Pempek Asli Palembang', 'Makanan', 15000, 10, 'pempek-kapalselam.jpg'),
(21, 'Tekwan', 'Tekwan Khas Palembang', 'Makanan', 10000, 9, 'tekwan_2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_menu`, `nama_menu`, `jumlah`, `harga`, `pilihan`) VALUES
(27, 22, 11, 'Air Putih', 2, 4000, ''),
(28, 23, 4, 'Es Campur', 2, 10000, ''),
(29, 24, 1, 'Pempek Lenjer', 1, 10000, ''),
(30, 25, 21, 'Tekwan', 1, 10000, ''),
(31, 26, 21, 'Tekwan', 5, 10000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN 
	UPDATE tb_menu SET stok = stok-NEW.jumlah
    WHERE id_menu = NEW.id_menu;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'rahasia', 1),
(10, 'Erwin Prasetyo', 'erwin14', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
