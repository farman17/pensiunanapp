-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2019 at 03:52 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_pengajuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip_lama` varchar(45) DEFAULT NULL,
  `nip` varchar(45) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `tmp_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jns_klmn` varchar(1) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `telepon` varchar(45) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `unit_kerja` varchar(255) DEFAULT NULL,
  `pensiun` date DEFAULT NULL,
  `pendidikan_terakhir` varchar(45) DEFAULT NULL,
  `th_lulus` varchar(45) DEFAULT NULL,
  `kecamatan` varchar(45) DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip_lama`, `nip`, `nama`, `tmp_lahir`, `tgl_lahir`, `jns_klmn`, `status`, `agama`, `telepon`, `alamat`, `unit_kerja`, `pensiun`, `pendidikan_terakhir`, `th_lulus`, `kecamatan`, `jabatan_id`) VALUES
(1, '12345', '12345', 'Icha', 'Banyuwangi', '1999-12-12', 'P', 'PNS', 'Islam', '08112345678', 'Banyuwangi', 'SDN 2 Patok 11', '2020-12-12', 'D3', '2018', 'Gambiran', 1),
(2, '12344', '12344', 'Laila majnun', 'Banyuwangi', '1996-12-12', 'P', 'PNS', 'Islam', '0811234567', 'Banyuwangi', 'SMPN 2 Sumberayu', '2019-12-12', 'S1', '2019', 'Muncar', 1),
(3, '12345', '12342', 'Handoyo', 'Banyuwangi', '1990-12-01', 'L', 'PNS', 'Islam', '08112345678', 'Patok 11 sumberayu', 'SMP 2 PATOK 11', '1970-01-01', 'S1', '2003', 'Muncar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `gol_ruang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama`, `pangkat`, `gol_ruang`) VALUES
(1, 'Guru Pertama', 'Penata Muda', 'III/a'),
(2, 'Guru Pertama', 'Penata Muda Tingkat 1', 'III/b'),
(3, 'Guru Muda', 'Penata', 'III/c'),
(4, 'Guru Muda', 'Penata Tingkat 1', 'III/d'),
(5, 'Guru Madya', 'Pembina', 'IV/a'),
(6, 'Guru Madya', 'Pembina Tingkat 1', 'IV/b'),
(7, 'Guru Madya', 'Pembina Utama Muda', 'IV/c'),
(8, 'Guru Utama', 'Pembina Utama Madya', 'IV/d'),
(9, 'Guru Utama', 'Pembina Utama', 'IV/e');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `guru_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mutasi`
--

CREATE TABLE `mutasi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `tamat_pangkat` date NOT NULL,
  `gaji_pokok` double NOT NULL,
  `surat_keputusan_pejabat` varchar(200) NOT NULL,
  `nomor_keputusan` varchar(200) NOT NULL,
  `tanggal_keputusan` date NOT NULL,
  `tempat_mutasi` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `pengembalian_inventaris` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id` int(11) NOT NULL,
  `nomor_karpeg` varchar(20) NOT NULL,
  `gaji_pokok_terakhir` double NOT NULL,
  `mksd` date NOT NULL,
  `pspp` varchar(150) NOT NULL,
  `mulai_masuk_pns` date NOT NULL,
  `tamat_pangkat` date NOT NULL,
  `tamat_jabatan` date NOT NULL,
  `gaji_pokok` double NOT NULL,
  `alamat` text NOT NULL,
  `pengembalian_inventaris` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `guru_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pekerjaan`
--

CREATE TABLE `riwayat_pekerjaan` (
  `id` int(11) NOT NULL,
  `uraian` varchar(200) NOT NULL,
  `tamat` date NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `gaji_pokok` double NOT NULL,
  `pejabat` varchar(100) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `guru_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `nama` varchar(126) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `nama`, `link`) VALUES
(1, 'Admin', 'admin'),
(2, 'Guru', 'guru'),
(3, 'Kepala dinas', 'pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(126) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(2) NOT NULL,
  `is_active` int(1) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `guru_id`, `nama`, `username`, `password`, `role_id`, `is_active`, `gambar`, `date_created`) VALUES
(4, 1, 'Icha', 'icha', '$2y$10$zDaihdR.vsrQIG7rlpP8IeGNGn24GCXm/bO68nHwLpuR/oF1iSxJu', 1, 1, 'avatar.jpg', 1552637403),
(5, 2, 'laila', '12344', '$2y$10$rzBJHKOdeDy4x7HZ8D/CuueEq70GT5hZrSW5TsrmksV9S.9M4rdGG', 2, 1, 'avatar.jpg', 1555054422),
(6, 3, 'Handoyo', '12345', '$2y$10$E6ZrzTRw71YGoWpped0pKuIWS9Y.eeV3mXjqTgQz.nWeO32om7/.6', 3, 1, 'avatar.jpg', 1555936547);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat_pekerjaan`
--
ALTER TABLE `riwayat_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
