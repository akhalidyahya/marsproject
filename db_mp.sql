-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2018 at 10:30 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_admin` varchar(50) NOT NULL,
  `role` set('admin','penulis') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `foto_admin`, `role`) VALUES
(1, 'admin_super', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ui-sam.jpg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `foto_anggota` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `id_divisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `foto_anggota`, `jabatan`, `id_divisi`) VALUES
(1, 'Jane Doe', 'jane.jpg', 'Chief', 1),
(2, 'John Smith', 'john.jpg', 'Chief Litbang', 2),
(3, 'Mary Jane', 'mary.jpg', 'Chief Kominfo', 3);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(1500) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tanggal_buat` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  `index_pembaca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `gambar`, `tanggal_buat`, `id_admin`, `index_pembaca`) VALUES
(1, 'Grand opening Website Mars Project', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'blog-1.jpg', '2018-01-24', 1, 1),
(2, 'Mars Project is?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'blog-1.jpg', '2018-01-24', 1, 3),
(3, 'Program Kerja Mars Project', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'blog-1.jpg', '2018-01-24', 1, 2),
(4, 'Kenali Sekret dengan baik', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'blog-1.jpg', '2018-01-24', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `nama_divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`) VALUES
(1, 'BPH'),
(2, 'Litbang'),
(3, 'Kominfo');

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan`
--

CREATE TABLE `penghargaan` (
  `id_penghargaan` int(11) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penghargaan`
--

INSERT INTO `penghargaan` (`id_penghargaan`, `nama_mhs`, `foto`, `keterangan`) VALUES
(1, 'Jane Doe', 'jane.jpg', 'Juara 1 lomba Karya tulis ilmiah di University of Michigan'),
(2, 'John Smith', 'john.jpg', 'Juara 1 lomba Karya tulis ilmiah di University of Michigan'),
(3, 'Mary Jane', 'mary.jpg', 'Juara 1 lomba Karya tulis ilmiah di University of Michigan'),
(4, 'Carl Jenkins', 'carl.jpg', 'Juara 1 lomba Karya tulis ilmiah di University of Michigan'),
(5, 'Will Smith', 'will.jpg', 'Juara 1 lomba Karya tulis ilmiah di University of Michigan'),
(6, 'Jimmy Fallon', 'jim.jpg', 'Juara 1 lomba Karya tulis ilmiah di University of Michigan');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `last_visitor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `count`, `last_visitor`) VALUES
(1, 6, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `anggota_id_divisi_fk` (`id_divisi`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `berita_id_admin_fk` (`id_admin`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `penghargaan`
--
ALTER TABLE `penghargaan`
  ADD PRIMARY KEY (`id_penghargaan`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penghargaan`
--
ALTER TABLE `penghargaan`
  MODIFY `id_penghargaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_id_divisi_fk` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id_divisi`);

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_id_admin_fk` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
