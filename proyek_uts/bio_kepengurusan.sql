-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2020 at 02:50 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bio_kepengurusan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bph`
--

CREATE TABLE `bph` (
  `ID_Kepengurusan` int(5) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Fakultas` varchar(30) NOT NULL,
  `Angkatan` varchar(30) NOT NULL,
  `Jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bph`
--

INSERT INTO `bph` (`ID_Kepengurusan`, `Nama`, `Jurusan`, `Fakultas`, `Angkatan`, `Jabatan`) VALUES
(1, 'Brahim Isnanda', 'Administrasi Publik', 'Ilmu Sosial dan Ilmu Politik', 'Tahun 2017', 'Ketua Umum'),
(2, 'Mohammad Haydir Awaludin W.', 'Teknik Informatika', 'Ilmu Komputer', 'Tahun 2018', 'Wakil Ketua Umum'),
(3, 'Prameswari Reksa Agami', 'Teknik Informatika', 'Ilmu Komputer', 'Tahun 2017', 'Sekretaris I'),
(4, 'Linda Anggraini', 'Teknologi Pangan', 'Teknik', 'Tahun 2018', 'Sekretaris II'),
(5, 'Septi Lilik Yuliana', 'Teknologi Pangan', 'Teknik', 'Tahun 2017', 'Bendahara I'),
(6, 'Novia Ely Mazzlin', 'Agribisnis', 'Pertanian', 'Tahun 2018', 'Bendahara II');

-- --------------------------------------------------------

--
-- Table structure for table `humas`
--

CREATE TABLE `humas` (
  `ID_Kepengurusan` int(5) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Fakultas` varchar(30) NOT NULL,
  `Angkatan` varchar(30) NOT NULL,
  `Jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `humas`
--

INSERT INTO `humas` (`ID_Kepengurusan`, `Nama`, `Jurusan`, `Fakultas`, `Angkatan`, `Jabatan`) VALUES
(23, 'Pebri Dian Cahyono P.', 'Agroteknologi', 'Pertanian', 'Tahun 2017', 'Kepala Departemen'),
(24, 'Afif Nafis Murtadha', 'Ilmu Hukum', 'Hukum', 'Tahun 2017', 'Anggota'),
(25, 'Urwatut Diyanah', 'Ekonomi Pembangunan', 'Ekonomi dan Bisnis', 'Tahun 2018', 'Anggota'),
(26, 'Novita Riska Mina P.', 'Akuntansi', 'Ekonomi dan Bisnis', 'Tahun 2018', 'Anggota'),
(27, 'Khindya Alifah', 'Ekonomi Pembangunan', 'Ekonomi dan Bisnis', 'Tahun 2018', 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `kominfo`
--

CREATE TABLE `kominfo` (
  `ID_Kepengurusan` int(5) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Fakultas` varchar(30) NOT NULL,
  `Angkatan` varchar(30) NOT NULL,
  `Jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kominfo`
--

INSERT INTO `kominfo` (`ID_Kepengurusan`, `Nama`, `Jurusan`, `Fakultas`, `Angkatan`, `Jabatan`) VALUES
(28, 'Rizky Devin Nurcahyo', 'Agroteknologi', 'Pertanian', 'Tahun 2017', 'Kepala Departemen'),
(29, 'Aris Prabowo', 'Teknik Informatika', 'Ilmu Komputer', 'Tahun 2017', 'Anggota'),
(30, 'Kiki Yuniar Kristiawan', 'Teknik Informatika', 'Ilmu Komputer', 'Tahun 2017', 'Anggota'),
(31, 'Apriliana Latifah Hanum', 'Sistem Informasi', 'Ilmu Komputer', 'Tahun 2018', 'Anggota'),
(32, 'Yunita Rosiana', 'Manajemen', 'Ekonomi dan Bisnis', 'Tahun 2018', 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `kwu`
--

CREATE TABLE `kwu` (
  `ID_Kepengurusan` int(5) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Fakultas` varchar(30) NOT NULL,
  `Angkatan` varchar(30) NOT NULL,
  `Jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kwu`
--

INSERT INTO `kwu` (`ID_Kepengurusan`, `Nama`, `Jurusan`, `Fakultas`, `Angkatan`, `Jabatan`) VALUES
(18, 'Nindar Septiani Eka P.', 'Manajemen', 'Ekonomi dan Bisnis', 'Tahun 2017', 'Kepala Departemen'),
(19, 'Miftahul Nuril Silviyah', 'Teknik Informatika', 'Ilmu Komputer', 'Tahun 2018', 'Anggota'),
(20, 'Nabila Sofia Rizka U.', 'Agroteknologi', 'Pertanian', 'Tahun 2018', 'Anggota'),
(21, 'Qouman Sholihin', 'Teknik Industri', 'Teknik', 'Tahun 2018', 'Anggota'),
(22, 'Putri Diana Lestari', 'Ilmu Hukum', 'Hukum', 'Tahun 2018', 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `minba`
--

CREATE TABLE `minba` (
  `ID_Kepengurusan` int(5) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Fakultas` varchar(30) NOT NULL,
  `Angkatan` varchar(30) NOT NULL,
  `Jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minba`
--

INSERT INTO `minba` (`ID_Kepengurusan`, `Nama`, `Jurusan`, `Fakultas`, `Angkatan`, `Jabatan`) VALUES
(12, 'Riza Intikhatus Sholikhah', 'Agroteknologi', 'Pertanian', 'Tahun 2017', 'Kepala Departemen'),
(13, 'Tri Cahyo Prakoso', 'Ilmu Komunikasi', 'Ilmu Sosial dan Ilmu Politik', 'Tahun 2017', 'Anggota'),
(14, 'Iqbal Imani Khoirul A.', 'Teknik Informatika', 'Ilmu Komputer', 'Tahun 2017', 'Anggota'),
(15, 'Agnes Fadiah Ariatama', 'Agroteknologi', 'Pertanian', 'Tahun 2018', 'Anggota'),
(16, 'Kiki Darma Kasih', 'Administrasi Publik', 'Ilmu Sosial dan Ilmu Politik', 'Tahun 2018', 'Anggota'),
(17, 'Dwi Kumalasari', 'Manajemen', 'Ekonomi dan Bisnis', 'Tahun 2018', 'Anggota');

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE `rt` (
  `ID_Kepengurusan` int(5) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Fakultas` varchar(30) NOT NULL,
  `Angkatan` varchar(30) NOT NULL,
  `Jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`ID_Kepengurusan`, `Nama`, `Jurusan`, `Fakultas`, `Angkatan`, `Jabatan`) VALUES
(7, 'Gilang Cahyo Saputro', 'Agribisnis', 'Pertanian', 'Tahun 2017', 'Kepala Departemen'),
(8, 'Regita Safira Adiana', 'Administrasi Publik', 'Ilmu Sosial dan Ilmu Politik', 'Tahun 2017', 'Anggota'),
(9, 'Wahyu Mahendra', 'Agroteknologi', 'Pertanian', 'Tahun 2018', 'Anggota'),
(10, 'Temi Puji Lestari', 'Administrasi Negara', 'Ilmu Sosial dan Ilmu Politik', 'Tahun 2018', 'Anggota'),
(11, 'Ainun Fitriya', 'Agroteknologi', 'Pertanian', 'Tahun 2018', 'Anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bph`
--
ALTER TABLE `bph`
  ADD PRIMARY KEY (`ID_Kepengurusan`);

--
-- Indexes for table `humas`
--
ALTER TABLE `humas`
  ADD PRIMARY KEY (`ID_Kepengurusan`);

--
-- Indexes for table `kominfo`
--
ALTER TABLE `kominfo`
  ADD PRIMARY KEY (`ID_Kepengurusan`);

--
-- Indexes for table `kwu`
--
ALTER TABLE `kwu`
  ADD PRIMARY KEY (`ID_Kepengurusan`);

--
-- Indexes for table `minba`
--
ALTER TABLE `minba`
  ADD PRIMARY KEY (`ID_Kepengurusan`);

--
-- Indexes for table `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`ID_Kepengurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bph`
--
ALTER TABLE `bph`
  MODIFY `ID_Kepengurusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `humas`
--
ALTER TABLE `humas`
  MODIFY `ID_Kepengurusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `kominfo`
--
ALTER TABLE `kominfo`
  MODIFY `ID_Kepengurusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kwu`
--
ALTER TABLE `kwu`
  MODIFY `ID_Kepengurusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `minba`
--
ALTER TABLE `minba`
  MODIFY `ID_Kepengurusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rt`
--
ALTER TABLE `rt`
  MODIFY `ID_Kepengurusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
