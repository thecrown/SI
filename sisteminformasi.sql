-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 05:15 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisteminformasi`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `acc_tabel`
--
CREATE TABLE `acc_tabel` (
`id_siswa` int(11)
,`nama_siswa` varchar(255)
,`jenis_kelamin` varchar(20)
,`kota_lahir` varchar(20)
,`tgl_lahir` date
,`alamat_siswa` varchar(255)
,`status` enum('diterima','ditolak')
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `detail_view`
--
CREATE TABLE `detail_view` (
`id_siswa` int(11)
,`nama_siswa` varchar(255)
,`tanggal_lahir` date
,`jenis_kelamin` varchar(20)
,`kota_lahir` varchar(20)
,`alamat_siswa` varchar(255)
,`id_ortu` int(11)
,`nama_ayah` varchar(255)
,`nama_ibu` varchar(255)
,`pekerjaan_ayah` varchar(255)
,`pekerjaan_ibu` varchar(255)
,`penghasilan_ayah` int(10)
,`penghasilan_ibu` int(10)
,`nama_sekolah` varchar(100)
,`nilai_siswa` int(5)
,`prestasi` text
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ortu_view`
--
CREATE TABLE `ortu_view` (
`id_ortu` int(11)
,`id_siswa` int(11)
,`nama_ayah` varchar(255)
,`nama_ibu` varchar(255)
,`pekerjaan_ayah` varchar(255)
,`pekerjaan_ibu` varchar(255)
,`penghasilan_ayah` int(10)
,`penghasilan_ibu` int(10)
,`no_hp` int(15)
,`nama_siswa` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pendidikan_view`
--
CREATE TABLE `pendidikan_view` (
`id_sekolah` int(11)
,`nama_sekolah` varchar(100)
,`id_siswa` int(11)
,`NIS` int(20)
,`tanggal_lulus` date
,`nilai_siswa` int(5)
,`prestasi` text
,`nama_siswa` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_diterima`
--

CREATE TABLE `tabel_diterima` (
  `id_acc` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `status` enum('diterima','ditolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_diterima`
--

INSERT INTO `tabel_diterima` (`id_acc`, `id_siswa`, `status`) VALUES
(1, 6, 'diterima'),
(2, 7, 'ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_ortu`
--

CREATE TABLE `tabel_ortu` (
  `id_ortu` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `pekerjaan_ayah` varchar(255) NOT NULL,
  `pekerjaan_ibu` varchar(255) NOT NULL,
  `penghasilan_ayah` int(10) NOT NULL,
  `penghasilan_ibu` int(10) NOT NULL,
  `no_hp` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_ortu`
--

INSERT INTO `tabel_ortu` (`id_ortu`, `id_siswa`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `no_hp`) VALUES
(3, 6, 'asmanu purwoto', 'parmi', 'wiraswasta', 'pedagang', 1000000, 1000000, 2147483647),
(4, 7, 'awal', 'retty', 'programer', 'ibu rumah tangga', 2000000, 2000000, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendidikan`
--

CREATE TABLE `tabel_pendidikan` (
  `id_sekolah` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `NIS` int(20) NOT NULL,
  `tanggal_lulus` date NOT NULL,
  `nilai_siswa` int(5) NOT NULL,
  `prestasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pendidikan`
--

INSERT INTO `tabel_pendidikan` (`id_sekolah`, `id_siswa`, `nama_sekolah`, `NIS`, `tanggal_lulus`, `nilai_siswa`, `prestasi`) VALUES
(1, 6, 'smk garuda nusantara', 92200911, '2014-04-01', 90, 'makan nasi 1 mangkuk'),
(2, 7, 'smk n 7 semarang', 252525, '2013-04-01', 95, 'makan ayam gorang');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `kota_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_siswa` varchar(255) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_hp` bigint(20) NOT NULL,
  `kondisi_kesehatan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`id_siswa`, `nama_siswa`, `jenis_kelamin`, `kota_lahir`, `tgl_lahir`, `alamat_siswa`, `kode_pos`, `agama`, `no_hp`, `kondisi_kesehatan`, `status`) VALUES
(6, 'amien kurniawan', 'Laki-Laki', 'grobogan', '1996-05-02', 'jl kebon sawit v no 13 kebonbatur mranggen demak', 59567, 'Islam', 85727747959, 'sehat wal afiat', 0),
(7, 'denta', 'Laki-Laki', 'semarang', '1995-05-02', 'jl semarang', 59567, 'Islam', 87563654345, 'sehat wal afiat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `username`, `password`) VALUES
(1, 'amien', '270e589efc43c0d79c0123bf0a1c763f');

-- --------------------------------------------------------

--
-- Structure for view `acc_tabel`
--
DROP TABLE IF EXISTS `acc_tabel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `acc_tabel`  AS  select `a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,`a`.`jenis_kelamin` AS `jenis_kelamin`,`a`.`kota_lahir` AS `kota_lahir`,`a`.`tgl_lahir` AS `tgl_lahir`,`a`.`alamat_siswa` AS `alamat_siswa`,`b`.`status` AS `status` from (`tabel_siswa` `a` join `tabel_diterima` `b` on((`a`.`id_siswa` = `b`.`id_siswa`))) ;

-- --------------------------------------------------------

--
-- Structure for view `detail_view`
--
DROP TABLE IF EXISTS `detail_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_view`  AS  select `a`.`id_siswa` AS `id_siswa`,`a`.`nama_siswa` AS `nama_siswa`,`a`.`tgl_lahir` AS `tanggal_lahir`,`a`.`jenis_kelamin` AS `jenis_kelamin`,`a`.`kota_lahir` AS `kota_lahir`,`a`.`alamat_siswa` AS `alamat_siswa`,`b`.`id_ortu` AS `id_ortu`,`b`.`nama_ayah` AS `nama_ayah`,`b`.`nama_ibu` AS `nama_ibu`,`b`.`pekerjaan_ayah` AS `pekerjaan_ayah`,`b`.`pekerjaan_ibu` AS `pekerjaan_ibu`,`b`.`penghasilan_ayah` AS `penghasilan_ayah`,`b`.`penghasilan_ibu` AS `penghasilan_ibu`,`c`.`nama_sekolah` AS `nama_sekolah`,`c`.`nilai_siswa` AS `nilai_siswa`,`c`.`prestasi` AS `prestasi` from ((`tabel_siswa` `a` join `tabel_ortu` `b` on((`a`.`id_siswa` = `b`.`id_siswa`))) join `tabel_pendidikan` `c` on((`a`.`id_siswa` = `c`.`id_siswa`))) ;

-- --------------------------------------------------------

--
-- Structure for view `ortu_view`
--
DROP TABLE IF EXISTS `ortu_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ortu_view`  AS  select `a`.`id_ortu` AS `id_ortu`,`a`.`id_siswa` AS `id_siswa`,`a`.`nama_ayah` AS `nama_ayah`,`a`.`nama_ibu` AS `nama_ibu`,`a`.`pekerjaan_ayah` AS `pekerjaan_ayah`,`a`.`pekerjaan_ibu` AS `pekerjaan_ibu`,`a`.`penghasilan_ayah` AS `penghasilan_ayah`,`a`.`penghasilan_ibu` AS `penghasilan_ibu`,`a`.`no_hp` AS `no_hp`,`b`.`nama_siswa` AS `nama_siswa` from (`tabel_ortu` `a` join `tabel_siswa` `b` on((`a`.`id_siswa` = `b`.`id_siswa`))) ;

-- --------------------------------------------------------

--
-- Structure for view `pendidikan_view`
--
DROP TABLE IF EXISTS `pendidikan_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pendidikan_view`  AS  select `a`.`id_sekolah` AS `id_sekolah`,`a`.`nama_sekolah` AS `nama_sekolah`,`a`.`id_siswa` AS `id_siswa`,`a`.`NIS` AS `NIS`,`a`.`tanggal_lulus` AS `tanggal_lulus`,`a`.`nilai_siswa` AS `nilai_siswa`,`a`.`prestasi` AS `prestasi`,`b`.`nama_siswa` AS `nama_siswa` from (`tabel_pendidikan` `a` join `tabel_siswa` `b` on((`a`.`id_siswa` = `b`.`id_siswa`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_diterima`
--
ALTER TABLE `tabel_diterima`
  ADD PRIMARY KEY (`id_acc`);

--
-- Indexes for table `tabel_ortu`
--
ALTER TABLE `tabel_ortu`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indexes for table `tabel_pendidikan`
--
ALTER TABLE `tabel_pendidikan`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_diterima`
--
ALTER TABLE `tabel_diterima`
  MODIFY `id_acc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_ortu`
--
ALTER TABLE `tabel_ortu`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tabel_pendidikan`
--
ALTER TABLE `tabel_pendidikan`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
