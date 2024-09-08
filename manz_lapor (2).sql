-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 05:01 AM
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
-- Database: `manz_lapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `Nik` varchar(20) NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `Jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `Alamat` varchar(250) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `No_Telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`Nik`, `Nama`, `Jenis_kelamin`, `Alamat`, `Username`, `Password`, `No_Telp`) VALUES
('121345', 'Genos', 'Perempuan', 'Jln.bebek', 'genz', '00', '08563923'),
('233253', 'ilman', 'Laki-Laki', 'Jln ayam', 'manz', '11', '4564'),
('27385673', 'Gary ', 'Laki-Laki', 'Jln.Patriot', 'Garyyy', '23', '089836257'),
('33244624', 'Asep sudyono', 'Perempuan', 'Jln.Amplas,Tokyo.Laos', '', '', '0847623576'),
('35366', 'Danzu', 'Laki-Laki', 'Jln.gurara', 'danzo', 'tt', '085346535'),
('4535363', 'Budiyanto', 'Perempuan', 'Jln.Bebek racing,Nagasaki,India', 'anto', 'asu', '23'),
('5785744', 'Makro Samsel', 'Perempuan', 'Jln.tembung.Medan Deli', 'ooo', 'wk', '087826328');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `Id_pengaduan` varchar(20) NOT NULL,
  `Tgl_pengaduan` date NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Isi_laporan` varchar(250) NOT NULL,
  `Foto` varchar(250) NOT NULL,
  `Status` enum('0','proses','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`Id_pengaduan`, `Tgl_pengaduan`, `Nik`, `Nama`, `Isi_laporan`, `Foto`, `Status`) VALUES
('P007', '2023-02-09', '98', 'ilman zuhry', 'ada kerbau berantem di sawah sama walikota', 'IMG-20230126-WA0010.jpg', 'selesai'),
('P009', '2023-02-09', '797', 'botak', 'ada anomali joko..... di GBK', 'SAVE_20220907_105946.jpg', 'selesai'),
('P010', '2023-02-09', '423', 'emil ', 'ada teroris di papua menembaki burung ', 'IMG_20220302_091500.jpg', 'selesai'),
('P011', '2023-02-09', '9644', 'Abdul', 'ada marco di sungai', 'IMG_20220627_112147~2.jpg', 'selesai'),
('P013', '2023-02-12', '3532', 'Asep', 'lari ada apk tolol', 'SAVE_20220923_162016.jpg', 'selesai'),
('P014', '2023-02-22', '4643', 'ilman zuhry', 'Terjadi pembantaian di Anfield', 'IMG_20220627_112147~2.jpg', 'selesai'),
('P018', '2023-02-22', '4535363', 'Budiyanto', 'wakaka', 'ipol.jpg', 'selesai'),
('P020', '2023-02-23', '5785744', 'Makro Samsel', 'wooooo', 'ipol.jpg', '0'),
('P021', '2023-02-23', '4535363', 'Budiyanto', 'coto', 'IMG-20221201-WA0001.jpg', 'proses'),
('P022', '2023-03-09', '233253', 'ilman', 'hhhh', 'ipol.jpg', 'selesai'),
('P023', '2023-03-12', '35366', 'Danzu', 'ds', 'IMG-20221201-WA0001.jpg', 'proses'),
('P024', '2023-03-12', '233253', 'ilman', 'hvgh', 'IMG-20230126-WA0010.jpg', 'proses'),
('P025', '2023-03-16', '233253', 'ilman', 'gdyasg', 'logo.jpg', 'proses'),
('P026', '2023-03-19', '233253', 'ilman', 'Di RW.01 ada kemalingan sendal', 'IMG_20220302_091500.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `Id_petugas` int(20) NOT NULL,
  `Nama_petugas` varchar(100) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `No_Telp` varchar(13) NOT NULL,
  `Level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`Id_petugas`, `Nama_petugas`, `Username`, `Password`, `No_Telp`, `Level`) VALUES
(2, 'Ilman Zuhry', 'kids', 'ss', '08436576478', 'admin'),
(3, 'Asep Sudyono', 'el asepe', '77', '084563475', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `Id_tanggapan` varchar(15) NOT NULL,
  `Id_pengaduan` varchar(15) NOT NULL,
  `Tgl_tanggapan` date NOT NULL,
  `Tanggapan` varchar(250) NOT NULL,
  `Id_petugas` int(15) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`Id_tanggapan`, `Id_pengaduan`, `Tgl_tanggapan`, `Tanggapan`, `Id_petugas`, `Status`) VALUES
('TGP01', 'P005', '2023-02-08', 'hd', 1, 'Selesai'),
('TGP02', 'P007', '2023-02-09', 'srtfsd', 2, 'Selesai'),
('TGP04', 'P007', '2023-02-16', 'otw ngirim pemuda pancasila', 3, 'Proses'),
('TGP05', 'P018', '2023-03-12', 'Done', 2, 'Proses'),
('TGP06', 'P016', '2023-03-12', 'COk', 2, 'Proses'),
('TGP07', 'P014', '2023-03-12', 'ds', 2, 'Selesai'),
('TGP08', 'P018', '2023-03-12', 'Done', 2, 'Selesai'),
('TGP09', 'P022', '2023-03-12', 'sdshfvsdhfvdsmfvjjnjbfnvhdsbvnbdmvbdfjbfnbdf', 2, 'Proses'),
('TGP10', 'P022', '2023-03-12', 'sdshfvsdhfvdsmfvjjnjbfnvhdsbvnbdmvbdfjbfnbdf', 2, 'Selesai'),
('TGP11', 'P025', '2023-03-13', 'Done ya bg', 2, 'Proses'),
('TGP12', 'P025', '2023-03-13', 'Done ya bg', 2, 'Selesai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`Nik`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`Id_pengaduan`),
  ADD KEY `Nik` (`Nik`),
  ADD KEY `Nik_2` (`Nik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`Id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`Id_tanggapan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
