-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 09:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_masyarakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `dinas`
--

CREATE TABLE `dinas` (
  `dinas_id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `deskripsi` text NOT NULL,
  `kepala` varchar(35) NOT NULL,
  `telp` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `log_aktifitas`
--

CREATE TABLE `log_aktifitas` (
  `log_id` int(11) NOT NULL,
  `petugas_id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `aktifitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `username` varchar(35) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alamat` text NOT NULL,
  `kecamatan` varchar(35) NOT NULL,
  `kelurahan` varchar(35) NOT NULL,
  `telp` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `alamat`, `kecamatan`, `kelurahan`, `telp`) VALUES
('33113337639', 'Jamiah Nuraini', 'jamiah', '$2y$10$xKuzpoUrleuUnTG1G2fYu.qhIsnDB3w.rQWyxUeiaJH526DL2GOl2', 'Getas RT01/RW09', 'Jaten', 'Jaten', '088888888888'),
('3313987639', 'Muhammad Jean', 'jean', '$2y$10$G4wqpF1UD.OIU0Uq1OqDlODvIM9Qe4DIXLzKx4gZQGjNlL4wHoI.O', 'Perum. Josroyo Indah No. 42', 'Jaten', 'Jaten', '081234567891'),
('33139876391', 'Agil Firdias Radjiman Mengaji', 'yxzzig', '$2y$10$LGIzONIdyLJBocwpO02t0O8yjuHF6xvnxjay5p5kTgCGL0wg72A86', 'Jumanyar, Dolomah RT01/03', 'Lorkali', 'Dolomah', '081777123111');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `isi_pengaduan` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` enum('0','disposisi','proses','selesai','ditolak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_pengaduan`, `foto`, `status`) VALUES
(28, '2023-06-15', '3313987639', 'Saya melihat jalan dibelakang kantor kepala desa itu keliahatan sangat rusak, saya mohon mewakili masyarakat setempat ingin mengajukan ini agar jalan tersebut segera diperbaiki', 'nfsu.jpg', 'proses'),
(32, '2023-06-15', '33113337639', 'Halo, ini adalah jalan utama masuk di RT09/RW04. Jalan ini sangat tidak layak, saya mengajukan permintaan untuk segera mengaspal dan memperbaiki jalan serta parit parit disekitar jalan tersebut. Terimakasih', 'Jalan_Rusak_Parah_PPU_c4c7f1158d.jpg', 'disposisi'),
(34, '2023-06-19', '33139876391', 'Asallamualaikum', 'miris-jembatan-gantung-rapuh-ini-intai-keselamatan-warga-H4NpZ2zN1Z1.jpg', 'selesai'),
(35, '2023-07-25', '3313987639', 'ajhasjhag', 'nfsu1.jpg', 'disposisi');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `telp` varchar(13) DEFAULT NULL,
  `level` varchar(30) DEFAULT NULL,
  `dinas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `username`, `password`, `telp`, `level`, `dinas_id`) VALUES
(1, 'Jhustyn Supriyono', 'supri', '$2y$10$cxcx7MaRI2KdjARb0Yfs5OjCvSzd.Rs0m1se1j4sb0jsJ6Jz0k.2u', '085880238341', 'admin', 1),
(2, 'Joko Gandeng', 'joqo', '$2y$10$6DbBltzBF.7N/66Nt8Ufku5d1nQEbrwqhxhZfOhL7KDLLnDHz6g2e', '1234567891234', 'petugas', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) DEFAULT NULL,
  `tgl_tanggapan` date DEFAULT NULL,
  `isi_tanggapan` text DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `status` enum('0','disposisi','proses','selesai','ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dinas`
--
ALTER TABLE `dinas`
  ADD PRIMARY KEY (`dinas_id`);

--
-- Indexes for table `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
