-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 07:03 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

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
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` char(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `foto_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `alamat`, `username`, `password`, `telp`, `foto_profile`) VALUES
('1', 'Alamahul Bayan', 'Cikarag', 'Alamahul', '12345678', '089787897', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` int(11) NOT NULL,
  `judul_laporan` varchar(25) NOT NULL,
  `isi_laporan` text NOT NULL,
  `alamat_pengaduan` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','ditolak','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `judul_laporan`, `isi_laporan`, `alamat_pengaduan`, `foto`, `status`) VALUES
(1, '2023-03-03', 1, 'Lorem ipsum dolor sit', '<div><strong><em><del>Lorem</del></em></strong><strong> ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate ullam odit dolores omnis, voluptates in quod nostrum vel debitis voluptatem ex sunt ipsa, quas repellendus maxime non iure ipsam</strong> molestias eveniet dolor! Facilis accusantium libero rem, aspernatur nemo reiciendis aperiam cumque, quam odio ipsum, modi non. Est ex cupiditate numquam asperiores, veniam exer<del>citationem l</del>aborum culpa nihil reiciendis provident eius expedita aliquid ipsam enim temporibus quis incidunt dolores nisi debitis sunt fuga <strong>molestiae quam. Ullam perferendis, voluptates facilis, facere soluta voluptas aperiam nam assumenda nostrum, odit dignissimos perspiciatis vero modi. Consequuntur explicabo praesentium iste suscipit</strong> alias consequatur accusantium amet autem cumque.</div>', 'Cikarag', 'Foto_dari_1_6402369e8f806_tanggal_03-03-2023.jpeg', 'selesai'),
(2, '2023-03-03', 1, 'Lorem ipsum dolor sit', '<div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate ullam odit dolores omnis, voluptates in quod nostrum vel debitis voluptatem ex sunt ipsa, quas repellendus maxime non iure ipsam molestias eveniet dolor! Facilis accusantium libero rem, aspernatur nemo reiciendis aperiam cumque, quam odio ipsum, modi non. Est ex cupiditate numquam asperiores, veniam exercitationem laborum culpa nihil reiciendis provident eius expedita aliquid ipsam enim temporibus quis incidunt dolores nisi debitis sunt fuga molestiae quam. Ullam perferendis, voluptates facilis, facere soluta voluptas aperiam nam assumenda nostrum, odit dignissimos perspiciatis vero modi. Consequuntur explicabo praesentium iste suscipit alias consequatur accusantium amet autem cumque.</div>', 'Cikarag', 'Foto_dari_1_640236c6077f1_tanggal_03-03-2023.jpeg', 'proses'),
(3, '2023-03-03', 1, 'Lorem ipsum dolor sit', '<div>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate ullam odit dolores omnis, voluptates in quod nostrum vel debitis voluptatem ex sunt ipsa, quas repellendus maxime non iure ipsam molestias eveniet dolor! Facilis accusantium libero rem, aspernatur nemo reiciendis aperiam cumque, quam odio ipsum, modi non. Est ex cupiditate numquam asperiores, veniam exercitationem laborum culpa nihil reiciendis provident eius expedita aliquid ipsam enim temporibus quis incidunt dolores nisi debitis sunt fuga molestiae quam. Ullam perferendis, voluptates facilis, facere soluta voluptas aperiam nam assumenda nostrum, odit dignissimos perspiciatis vero modi. Consequuntur explicabo praesentium iste suscipit alias consequatur accusantium amet autem cumque.</div>', 'Cikarag', 'Foto_dari_1_6402372c009d8_tanggal_03-03-2023.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username_petugas` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `level` enum('admin','petugas','SuperAdmin') NOT NULL,
  `status` enum('0','terverifikasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username_petugas`, `password`, `telp`, `level`, `status`) VALUES
(1, 'Alam', 'SuperAdmin', '12345678', '0897987987', 'SuperAdmin', 'terverifikasi'),
(2, 'Mahul', 'Admin', '12345678', '08987745848', 'admin', 'terverifikasi'),
(3, 'Bayan', 'Petugas', '12345678', '0878767876', 'petugas', 'terverifikasi'),
(5, ' Alam Bayan', ' AB', 'bb8c5531d83f0eca79b7b602a639630e', ' 0694646', 'admin', 'terverifikasi'),
(6, 'Bayan Alam', 'BA', '12345678', '0879798', 'admin', 'terverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(1, 1, '2023-03-03', '<div>bb8c5531d83f0eca79b7b602a639630sdsfsf;ljsfj;ldk</div>', 2);

--
-- Indexes for dumped tables
--

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
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
