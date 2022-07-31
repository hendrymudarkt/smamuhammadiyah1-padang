-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 25, 2019 at 02:26 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smamuhammadiyah`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `gambar`, `judul`, `isi`, `tanggal`) VALUES
(4, 'visi misi.jpg', 'informasi 1', '<p>Visi dan Misi SMA Muhammadiyah 1 Padang</p>', '2019-07-08 03:13:06'),
(8, 'foto.png', 'informasi 2', '<p>Penguman Pendaftaran Siswa Baru</p>', '2019-08-11 15:00:28'),
(9, 'foto2.png', 'informasi 3', '<p>Pengumuman Mulai Sekolah</p>', '2019-08-11 15:01:23'),
(11, 'Untitled.png', 'informasi 4', '<p>Syarat-Syarat Daftar Ulang</p>', '2019-08-21 01:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ulang`
--

CREATE TABLE `daftar_ulang` (
  `nis` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(5) NOT NULL,
  `nis` int(12) NOT NULL,
  `dokumen` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `nis`, `dokumen`) VALUES
(9, 18072190, 'IMG-20190709-WA0009~2.jpg'),
(10, 108989, 'IMG-20190709-WA0008~2.jpg'),
(11, 18097879, 'IMG-20190709-WA0005.jpg'),
(12, 17201698, 'IMG-20190709-WA0006.jpg'),
(14, 13997040, 'IMG-20190709-WA0002~2.jpg'),
(15, 1789197, 'IMG-20190710-WA0010.jpg'),
(31, 767976, 'IMG-20190709-WA0006.jpg'),
(32, 24456, 'IMG-20190709-WA0006.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `nis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(5) NOT NULL,
  `nomor_antri` varchar(5) NOT NULL,
  `nis` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `no_hp_ortu` varchar(12) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `status` varchar(5) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `no_reg` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `berkebutuhan_khusus` varchar(10) NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `lintang` varchar(30) NOT NULL,
  `bujur` varchar(30) NOT NULL,
  `tempat_tinggal` varchar(30) NOT NULL,
  `transportasi` varchar(20) NOT NULL,
  `nomor_kks` varchar(20) NOT NULL,
  `anak_keberapa` varchar(2) NOT NULL,
  `penerima_kps` varchar(5) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nomor_antri`, `nis`, `nama`, `jenis_kelamin`, `alamat`, `tempat_lahir`, `tgl_lahir`, `tgl_daftar`, `no_hp`, `no_hp_ortu`, `lampiran`, `status`, `nik`, `no_reg`, `agama`, `kewarganegaraan`, `berkebutuhan_khusus`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `kode_pos`, `lintang`, `bujur`, `tempat_tinggal`, `transportasi`, `nomor_kks`, `anak_keberapa`, `penerima_kps`, `password`) VALUES
(19, '001', 18072190, 'Reza Afta Viany', 'P', 'Padang', 'Padang', '2001-06-03', '2019-07-11 10:19:32', '085272122017', '082273234580', 'IMG-20190709-WA0009~2.jpg', 'Iya', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(20, '002', 108989, 'Aditio sastra vany', 'L', 'Padang', 'Padang', '2002-09-21', '2019-07-11 10:23:53', '083182700010', '085272189012', 'IMG-20190709-WA0008~2.jpg', 'Iya', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(21, '003', 18097879, 'Helma Yuningsih', 'P', 'Padang', 'Padang', '2001-03-31', '2019-07-11 10:30:23', '081220781345', '081278534670', 'IMG-20190709-WA0005.jpg', 'Iya', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(22, '004', 17201698, 'Cindy Alwi sagita', 'P', 'Padang', 'Padang', '2001-02-11', '2019-07-11 10:35:00', '083176234567', '081265782346', 'IMG-20190709-WA0006.jpg', 'Iya', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(24, '006', 13997040, 'Mustava aji', 'L', 'Padang', 'Padang', '1998-09-04', '2019-07-11 11:18:26', '082236110890', '085272122088', 'IMG-20190709-WA0002~2.jpg', 'Iya', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(25, '007', 1789197, 'Rahmad ramadhan', 'L', 'Cilegon', 'Cilegon', '2000-12-22', '2019-07-11 11:24:59', '08527e122022', '082217625671', 'IMG-20190710-WA0010.jpg', 'Iya', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', ''),
(41, '008', 767976, 'Hendri', 'L', 'Duku', 'Pasaman', '2003-08-10', '2019-08-21 10:56:15', '085272122017', '081282775361', 'IMG-20190709-WA0006.jpg', 'Tidak', '81727270', '182727278', 'Islam', 'Wni', 'Pelajar', '8', '7', 'Duku', 'Duku', 'Padang barat', 11111, 'Barat', 'Timur', 'Padang', 'Jalan kaki', '12344', '8', 'Tidak', ''),
(42, '009', 24456, 'Anisra', 'P', 'Jln. Dulu ', 'Pasaman', '2004-07-14', '2019-08-21 11:06:05', '085272122017', '081278447686', 'IMG-20190709-WA0006.jpg', 'Tidak', '5566', '5678', 'Islam', 'WNI', 'Pelajar', '01', '30', 'Duku', 'Duku', 'Padang utara', 1234, 'Barat', 'Timur', 'Padang', 'Honda', '67885', '6', 'Tidak', ''),
(46, '001', 212, 'Testing', 'L', '', '', '2003-03-05', '2019-08-25 12:27:31', '081361861111', '07787878', '10303476_1412100117123.png', '', '', '', '0', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 'db58ea4ed900e3dbca82fd8d8ad557bc853905cb33097ccaf29eeb9f26024dec5112044842de7d66ea8776511d94f278d15adb0a42125196154c1de6f5a85129NAnmTmIC8MkcM4MqD74PTH8DwFfCSuwdQrT+/DX38E0=');

-- --------------------------------------------------------

--
-- Table structure for table `terima`
--

CREATE TABLE `terima` (
  `nis` int(12) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_terima` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terima`
--

INSERT INTO `terima` (`nis`, `nisn`, `nama`, `tgl_terima`, `status`) VALUES
(212, '', '', '0000-00-00', ''),
(108989, '9492787384', 'Aditio sastra vany', '2019-07-11', 't'),
(1789197, '3724385248', 'Rahmad ramadhan', '2019-07-12', 't'),
(13997040, '6700550653', 'Mustava aji', '2019-07-12', 't'),
(17201698, '5276837803', 'Cindy Alwi sagita', '2019-07-11', 'f'),
(18072190, '7324187014', 'Reza Afta Viany', '2019-07-11', 'f'),
(18097879, '7773696618', 'Helma Yuningsih', '2019-07-12', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'd411d0ca58bac9f0728868ceb7121a1431dfd6545278a2be045f0494b743757d2cb79a0eae5b63d6ffefd9021a8c45fbb7a4ec23117e6f9607eda4c9f00b78389e+s0ezEE6CfwRfoXVE/HUafoOAOXoVyLtyHw8gWEzI=', 1),
(2, 'kepsek', '79c79181cb214ebbb5275f47a183483a80c3e82b23beb13657c0ae04d7686a8ade6ebe8ad80ccbedf111c2299e370eee804d2a4336a6e720f98a50c557e763f0lp3ai/ZaDRrcBwNZc6tBqeJOvjcS3WmxtMTgpMuQYVM=', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `daftar_ulang`
--
ALTER TABLE `daftar_ulang`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terima`
--
ALTER TABLE `terima`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
