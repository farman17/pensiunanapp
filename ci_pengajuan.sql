-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 11:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
  `alamat` text,
  `unit_kerja` varchar(255) DEFAULT NULL,
  `pensiun` date DEFAULT NULL,
  `pendidikan_terakhir` varchar(45) DEFAULT NULL,
  `th_lulus` varchar(45) DEFAULT NULL,
  `kecamatan` varchar(45) DEFAULT NULL,
  `tamat_pangkat` varchar(45) DEFAULT NULL,
  `tamat_jabatan` varchar(45) DEFAULT NULL,
  `jabatan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip_lama`, `nip`, `nama`, `tmp_lahir`, `tgl_lahir`, `jns_klmn`, `status`, `agama`, `telepon`, `alamat`, `unit_kerja`, `pensiun`, `pendidikan_terakhir`, `th_lulus`, `kecamatan`, `tamat_pangkat`, `tamat_jabatan`, `jabatan_id`) VALUES
(4, '131845641', '19630909 198903 1 014', 'MARIYAT, S.Pd', 'BANYUWANGI', '1963-09-09', 'L', 'PNS', 'Islam', '08112345678', 'JL. ANDALAS KRAKATAU 80 BANYUWANGI', 'SMP Negeri 1 Wongsorejo', '2023-09-09', 'S1', '2001', 'Wongsorejo', '2009-01-10', '2019-04-09', 1),
(8, '131838708', '19650330 198903 2 006', 'SUSWATI DWI ASTUTI, S.Pd', 'KLATEN', '1965-03-29', 'P', 'PNS', 'Islam', NULL, 'DS.ALASREJO RT.01 RW.02 WONGSOREJO', 'SMP Negeri 1 Wongsorejo', '0000-00-00', 'S1', '2006', 'Wongsorejo', '2010-01-4', '2010-01-4', NULL),
(9, '130658514', '19590121 197803 2 006', 'SUSWENI, S.Pd', 'BONDOWOSO', '1959-01-20', 'P', 'PNS', 'Islam', '85236611200', 'DUSUN GALEKAN RT.01 RW.02 BAJULMATI WONGSOREJO', 'SD Negeri 4 Bajulmati', '2019-01-02', 'S1', '1998', 'Wongsorejo', '2011-01-4', '2014-06-5', NULL),
(10, '132091294', '19660816 199403 2 013', 'Dra. ZULFATUN', 'BANYUWANGI', '1966-08-15', 'P', 'PNS', 'Islam', NULL, 'DS.CURAHUSER RT.04 RW.02 DS.SUMBERANYAR', 'SMP Negeri 1 Wongsorejo', '2026-01-09', 'S1', '1990', 'Wongsorejo', '2011-01-4', '2011-01-4', NULL),
(11, '131579458', '19620630 198602 1 002', 'HERRY PRISTIWAHYONO, S.Pd', 'BANYUWANGI', '1962-06-29', 'L', 'PNS', 'Islam', NULL, 'DS.WONGSOREJO RT.02 RW.06 KEC.WONGSOREJO', 'SMP Negeri 1 Wongsorejo', '2022-01-07', 'S1', '2005', 'Wongsorejo', '2011-01-10', '2011-01-10', NULL),
(12, '130969335', '19600202 198112 1 003', 'ENDRO SUSILO, S.Pd', 'TULUNGAGUNG', '1960-02-02', 'L', 'PNS', 'Islam', '81357960805', 'KRAJAN II - RT.1/2 ALASBULUH WONGSOREJO', 'SD Negeri 3 Wongsorejo', '2020-01-03', 'S1', '1998', 'Wongsorejo', '2011-01-10', '2011-01-10', NULL),
(13, '132145688', '19680107 199512 2 002', 'Dra. LILIK SUNARSIH', 'BANYUWANGI', '1968-07-01', 'P', 'PNS', 'Islam', NULL, 'KRAJAN', 'SMP Negeri 1 Wongsorejo', '2028-01-02', 'S1', '1991', 'Wongsorejo', '2012-01-4', '2012-01-4', NULL),
(14, '131045010', '19620112 198201 1 010', 'KATIMAN, A.Ma.Pd', 'BANYUWANGI', '1962-12-01', 'L', 'PNS', 'Katolik', NULL, 'DS. SUMBER KENCONO 03/01 WONGSOREJO', 'SD Negeri 2 Wongsorejo', '2022-01-02', 'DII', '1996', 'Wongsorejo', '2013-01-4', '2002-01-4', NULL),
(15, '131197898', '19621013 198303 1 011', 'MULYADI, S.Pd', 'BANYUWANGI', '1962-10-12', 'L', 'PNS', 'Islam', '81358150990', 'JL. MAWAR DSN KRAJAN', 'SD Negeri 2 Alasrejo', '2022-01-11', 'S1', '1998', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(16, '130749596', '19590705 197907 1 002', 'SUGITO HADI RIYANTO, S.Pd', 'BANYUWANGI', '1959-05-07', 'L', 'PNS', 'Islam', '81358648700', 'DUSUN KRAJAN RT 01 RW 03 DESA SUMBER KENCONO KEC. WONGSOREJO KAB. BANYUWANGI', 'SD Negeri 2 Bajulmati', '2019-01-08', 'S1', '1998', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(17, '131045414', '19590612 198201 1 010', 'SUNARTO, S.Pd', 'BANYUWANGI', '1959-12-06', 'L', 'PNS', 'Islam', '87793339293', 'DSN.KRAJAN I', 'SD Negeri 4 Wongsorejo', '2019-01-07', 'S1', '2009', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(18, '131623248', '19660304 198603 2 011', 'TRI PUJI LESTARI, S.Pd', 'BANYUWANGI', '1966-04-03', 'P', 'PNS', 'Islam', '81559588560', 'Jalan Nangka', 'Dpk TK Tunas Kencana Wongsorejo', '2026-01-04', 'S1', '2008', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(19, '131335728', '19620920 198504 1 002', 'MAHRUS, S.Pd', 'BANYUWANGI', '1962-09-19', 'L', 'PNS', 'Islam', '81249939283', 'DSN.KRAJAN RT.01 RW.01 DS WONGSOREJO', 'SD Negeri 2 Bangsring', '2022-01-10', 'S1', '2007', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(20, '131044864', '19600202 198201 1 023', 'MUAJAM, S.Pd', 'BANYUWANGI', '1960-02-02', 'L', 'PNS', 'Islam', '85236133853', 'DSN. BIMO RT.01 RW.01 BIMOREJO WONGSOREJO', 'SD Negeri 1 Bimorejo', '2020-01-03', 'S1', '2005', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(21, '131244764', '19610425 198308 1 002', 'HARIYADI, S.Ag', 'BANYUWANGI', '1961-04-24', 'L', 'PNS', 'Islam', '0', 'Jalan Pantai Bimo', 'SD Negeri 4 Bajulmati', '2021-01-05', 'S1', '2001', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(22, '131198026', '19610923 198303 1 010', 'WAKIJAN ANDRI JATMIKO, S.Pd', 'BANYUWANGI', '1961-09-22', 'L', 'PNS', 'Islam', '87806580077', 'ASEMAN RT.02 RW.02 BIMOREJO WONGSOREJO', 'SD Negeri 5 Bajulmati', '2021-01-10', 'S1', '2007', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(23, '131854420', '19670717 198903 1 014', 'ATIM MULYONO, S.Pd', 'BANYUWANGI', '1967-07-16', 'L', 'PNS', 'Islam', NULL, 'KRAJAN', 'SMP Negeri 1 Wongsorejo', '2027-01-08', 'S1', '2009', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(24, '131197923', '19620607 198303 1 023', 'RIDWAN, S.Pd', 'BANYUWANGI', '1962-07-06', 'L', 'PNS', 'Islam', '81336385648', 'DSN. KARANGANYAR RT.01 RW.01 BAJULMATI WONGSOREJO', 'SD Negeri 3 Bajulmati', '2022-01-07', 'S1', '1999', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(25, '131447071', '19621010 198606 1 001', 'SAMPUN, S.Pd', 'BANYUWANGI', '1962-10-10', 'L', 'PNS', 'Islam', NULL, 'JALAN RAYA ALASBULUH', 'SD Negeri 2 Sumber Anyar', '2022-01-11', 'S1', '1988', 'Wongsorejo', '2015-01-10', '2018-01-11', NULL),
(26, '131521068', '19630516 198703 1 006', 'WAGIYONO, S.Pd', 'BANYUWANGI', '1963-05-15', 'L', 'PNS', 'Islam', '85256743846', 'DSN PATOMAN BARAT', 'SD Negeri 3 Watukebo', '2023-01-06', 'S1', '2001', 'Wongsorejo', '2015-01-10', '2018-07-22', NULL),
(27, '131197929', '19610504 198303 1 032', 'SUDONO, S.Pd', 'BANYUWANGI', '1961-04-05', 'L', 'PNS', 'Islam', '85334687619', 'JALAN KENANGA NO. 16 DESA WONGSOREJO, KECAMATAN WONGSOREJO', 'SD Negeri 2 Bengkak', '2021-01-06', 'S1', '1999', 'Wongsorejo', '2015-01-10', '2018-01-11', NULL),
(28, '131197932', '19621125 198303 1 016', 'MARDI UTOMO, S.Pd', 'BANYUWANGI', '1962-11-24', 'L', 'PNS', 'Islam', '81336058469', 'DSN LABANSUKADI RT001/RW006 DS LABANASEM KEC.KABAT', 'SD Negeri 3 Alasrejo', '2022-01-12', 'S1', '2009', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(29, '131197893', '19631001 198303 1 011', 'GITO SANTOSO, S.Pd', 'BANYUWANGI', '1963-01-10', 'L', 'PNS', 'Katolik', NULL, 'DUSUN GALEKAN', 'SD Negeri 1 Bajulmati', '2023-01-11', 'S1', '2007', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(30, '131244687', '19620620 198308 1 002', 'SUHARTO, S.PdI', 'BANYUWANGI', '1962-06-19', 'L', 'PNS', 'Islam', '87755520036', 'JL. DELIMA 02/02 KARANGANYAR BAJULMATI RT.03 RW.08 WONGSOREJO', 'SD Negeri 2 Bajulmati', '2022-01-07', 'S1', '2005', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(31, '131871840', '19651018 198911 2 002', 'SUGIATI, S.Pd', 'BANYUWANGI', '1965-10-17', 'P', 'PNS', 'Islam', '81358960490', 'PERUM GGM BLOK BC 12A KLATAK', 'SD Negeri 3 Bangsring', '2025-01-11', 'S1', '1999', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(32, '131244712', '19590924 198308 1 001', 'AHMAD ZAINI, S.Ag', 'BANYUWANGI', '1959-09-23', 'L', 'PNS', 'Islam', '85236348887', 'ALASREJO - WONGSOREJO', 'SD Negeri 2 Watukebo', '2019-01-10', 'S1', '2001', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(33, '130749606', '19591010 197907 1 002', 'Drs. ANSORI', 'BANYUWANGI', '1959-10-10', 'L', 'PNS', 'Islam', '85236676173', 'JL. AHMAD YANI NO. 10 WONGSOREJO', 'SD Negeri 1 Alasrejo', '2019-01-11', 'S1', '1992', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(34, '131871679', '19610214 198911 1 001', 'MISWONO, S.Pd', 'BANYUWANGI', '1961-02-13', 'L', 'PNS', 'Islam', '81336715007', 'KRAJAN RT.04 RW.02 ALAS BULUH WONGSOREJO', 'SD Negeri 1 Alasbuluh', '2021-01-03', 'S1', '1994', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(35, '130749536', '19600622 197907 1 002', 'SIRO MIYOSO, S.Pd', 'KEDIRI', '1960-06-21', 'L', 'PNS', 'Islam', NULL, 'RT 01 RW II GALIKAN - BAJULMATI - WONGSOREJO', 'SD Negeri 1 Wongsorejo', '2020-01-07', 'S1', '2005', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(36, '131735177', '19640910 198803 2 007', 'HERO YEKTI, S.Pd', 'BANYUWANGI', '1964-10-09', 'P', 'PNS', 'Islam', '81234566463', 'DSN.KRAJAN RT.01 RW.02 WONGSOREJO', 'SD Negeri 1 Sumber Anyar', '2024-01-10', 'S1', '2007', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(37, '131870660', '19661020 198911 2 001', 'Dra. PURWATI', 'BANYUWANGI', '1966-10-19', 'P', 'PNS', 'Islam', '6282333760561', 'DS.SUMBERKENCONO WONGSOREJO', 'SD Negeri 1 Sumber Kencono', '2026-01-11', 'S1', '1990', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(38, '131521092', '19620922 198703 1 008', 'AMIR, S.Pd', 'BANYUWANGI', '1962-09-21', 'L', 'PNS', 'Islam', '85232804622', 'JL. KENANGA NO 33 WONGSOREJO', 'SD Negeri 1 Sidodadi', '2022-01-10', 'S1', '2008', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(39, '131446660', '19610713 198606 2 001', 'YULI RAHMI WINARNI, S.Pd', 'SURABAYA', '1961-07-12', 'P', 'PNS', 'Islam', '82337959992', 'DUSUN KRAJAN II', 'SD Negeri 1 Alasbuluh', '2021-01-08', 'S1', '2007', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(40, '131521124', '19630807 198703 1 018', 'SUPRIYONO, S.Pd', 'BANYUWANGI', '1963-07-08', 'L', 'PNS', 'Islam', '82132077172', 'JL. AHMAD YANI BANGSRING RT.01 RW.01 WONGSOREJO', 'SD Negeri 4 Alasbuluh', '2023-01-09', 'S1', '2007', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(41, '131332132', '19620911 198504 1 001', 'SUROSO, S.Pd', 'BANYUWANGI', '1962-11-09', 'L', 'PNS', 'Islam', '81358287582', 'RT 02 RW 01 DS SUMBERKENCONO - WONGSOREJO', 'SD Negeri 2 Sumber Kencono', '2022-01-10', 'S1', '2009', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(42, '131197836', '19621011 198303 2 013', 'DWI RATNA IRIYANI, S.Pd', 'BANYUWANGI', '1962-11-10', 'P', 'PNS', 'Islam', '81913922805', 'DUSUN KARANGANYAR DESA BAJULMATI WONGSOREJO', 'SD Negeri 1 Sidodadi', '2022-01-11', 'S1', '2007', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(43, '131378610', '19590905 198504 1 003', 'NOER HADI, S.Ag', 'BANYUWANGI', '1959-05-09', 'L', 'PNS', 'Islam', '85336475272', 'ALASREJO JL SILIR RT 05 RW II WONGSOREJO', 'SD Negeri 1 Sumber Kencono', '2019-01-10', 'S1', '2001', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(44, '131974184', '19670901 199201 1 001', 'SURAJI, S.Pd', 'BANYUWANGI', '1967-01-09', 'L', 'PNS', 'Islam', NULL, 'DUSUN. KRAJAN RT.04 RW.01 WONGSOREJO', 'SD Negeri 1 Sidowangi', '2027-01-10', 'S1', '1998', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(45, '131198328', '19621210 198303 2 023', 'EKO WINARTI PUJI RAHAYU, S.Pd', 'LUMAJANG', '1962-10-12', 'P', 'PNS', 'Islam', '81336018318', 'JL.GATOT SUBROTO RT 01/02 KETAPANG', 'SD Negeri 1 Bengkak', '2023-01-01', 'S1', '2009', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(46, '131197879', '19630406 198303 2 009', 'SUMINI, S.Pd', 'KEDIRI', '1963-06-04', 'P', 'PNS', 'Islam', '6281237152363', 'SUMBERANYAR 03/02 - WONGSOREJO', 'SD Negeri 2 Sumber Kencono', '2023-01-05', 'S1', '2007', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(47, '130849208', '19590724 198010 2 001', 'CHATIDJAH, S.Pd', 'SITUBONDO', '1959-07-23', 'P', 'PNS', 'Islam', '87857857027', 'DUSUN ALASMALANG ALASREJO', 'SD Negeri 1 Sumber Anyar', '2019-01-08', 'S1', '2000', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(48, '131871751', '19651227 198911 2 002', 'SUPARTI, S.Pd', 'BANTUL', '1965-12-26', 'P', 'PNS', 'Islam', NULL, 'DSN.KRAJAN RT 01/03 DS WONGSOREJO', 'SD Negeri 1 Alasbuluh', '2026-01-01', 'S1', '1999', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(49, '130749605', '19581229 197907 1 003', 'YUSMANTO, S.Pd', 'BANYUWANGI', '1958-12-28', 'L', 'PNS', 'Islam', NULL, 'RT.01 RW.02 KRAJAN WONGSOREJO', 'SD Negeri 4 Alasbuluh', '2019-01-01', 'S1', '1998', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(50, '131244694', '19601215 198308 1 001', 'ALI YURIDLO, S.Pd.I', 'BANYUWANGI', '1960-12-14', 'L', 'PNS', 'Islam', '6281358076671', 'DUSUN CURAH USER SUMBERANYAR 03/01 - WONGSOREJO', 'SD Negeri 2 Sumber Kencono', '2021-01-01', 'S1', '2007', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(51, '130658518', '19590418 197803 1 002', 'SUPRIYANTO, S.Pd', 'BANYUWANGI', '1959-04-17', 'L', 'PNS', 'Islam', '81937691550', 'JELUN RT.10 RW.03 WONOREJO BANYUPUTIH', 'SD Negeri 2 Bajulmati', '2019-01-05', 'S1', '2007', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(52, '131332127', '19641008 198504 1 001', 'SLAMET BASORI, S.Pd', 'BANYUWANGI', '1964-08-10', 'L', 'PNS', 'Islam', '85258350592', 'GALEKAN RT.02 RW.03 BAJULMATI WONGSOREJO', 'SD Negeri 4 Bajulmati', '2024-01-11', 'S1', '2009', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(53, '131378624', '19621221 198504 1 001', 'HASAN HAJI, S.Pd', 'BANYUWANGI', '1962-12-20', 'L', 'PNS', 'Islam', NULL, 'JL. AGUS SALIM DSN. KRAJAN RT.1/2 WONGSOREJO', 'SD Negeri 1 Wongsorejo', '2023-01-01', 'S1', '2009', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(54, '131871021', '19630101 198911 1 001', 'KATAM, S.Pd', 'BANYUWANGI', '1963-01-01', 'L', 'PNS', 'Islam', '85258222630', 'DSN. KRAJAN 001/001 DS. BENGKAK KEC. WONGSOREJO', 'SD Negeri 1 Wongsorejo', '2023-01-02', 'S1', '2006', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(55, '131332111', '19600111 198504 1 003', 'WINENGKU HADI, S.Pd', 'MALANG', '1960-11-01', 'L', 'PNS', 'Protestan', NULL, 'POSSUMUR RT 04 RW V BENGKAK - WONGSOREJO', 'SD Negeri 1 Bengkak', '2020-01-02', 'S1', '2009', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(56, '131735206', '19661203 198803 1 006', 'SAMSUL ARIFIN, S.Pd', 'BANYUWANGI', '1966-03-12', 'L', 'PNS', 'Islam', '82331652179', 'GALEKAN RT.01 RW.03 BAJULMATI WONGSOREJO', 'SD Negeri 2 Sumber Kencono', '2027-01-01', 'S1', '1999', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(57, '131735211', '19610706 198803 1 012', 'SUHAIDI, S.Pd', 'BANYUWANGI', '1961-06-07', 'L', 'PNS', 'Islam', '852337969349', 'CURAHUSER RT 02 RW 02 DS SUMBERANYAR KEC. WONGSOREJO', 'SD Negeri 2 Sidowangi', '2021-01-08', 'S1', '2007', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(58, '131447053', '19621230 198606 1 002', 'MOHAMMAD RIDWAN, S.Pd.SD', 'BANYUWANGI', '1962-12-29', 'L', 'PNS', 'Islam', NULL, 'JL. RAYA SITUBONDO DSN. KRAJAN RT.1/3 WONGSOREJO', 'SD Negeri 2 Alasrejo', '2023-01-01', 'S1', '2009', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(59, '131877132', '19651017 199002 1 001', 'MOKHAMAD SLAMET, S.Pd', 'BANYUWANGI', '1965-10-16', 'L', 'PNS', 'Islam', '81216979770', 'DSN. KRAJAN I ALASBULUH RT.5/1 WONGSOREJO', 'SD Negeri 3 Alasbuluh', '2025-01-11', 'S1', '2000', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(60, '131198336', '19620414 198303 2 023', 'WINAYAH', 'LUMAJANG', '1962-04-13', 'P', 'PNS', 'Islam', NULL, 'JL. RAYA SITUBONDO RT 01 RW III ALASREJO - WONGSOREJO', 'SD Negeri 1 Sumber Kencono', '2022-01-05', 'SLTA', '1982', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(61, '131871049', '19640505 198911 2 001', 'ENDANG SRI UTAMI, S.Pd', 'BLITAR', '1964-05-05', 'P', 'PNS', 'Islam', NULL, 'JL. SITUBONDO ALASBULUH RT.04 RW.02 W.REJO', 'SD Negeri 3 Wongsorejo', '2024-01-06', 'S1', '2007', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(62, '131552198', '19640508 198703 1 015', 'IMAM MUSANEP, S.PdI', 'BANYUWANGI', '1964-08-05', 'L', 'PNS', 'Islam', '85236363187', 'DSN.KRAJAN', 'SD Negeri 1 Alasbuluh', '2024-01-06', 'S1', '2007', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(63, '131198357', '19611228 198303 1 012', 'ABDUL HALIK', 'BANGKALAN', '1961-12-27', 'L', 'PNS', 'Islam', '6287701777065', 'DS. SUMBERKENCONO 03/02 WONGSOREJO', 'SD Negeri 2 Alasrejo', '2022-01-01', 'SLTA', '1983', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(64, '131885799', '19660814 199003 2 006', 'SUJIATUN, S.Pd.SD', 'BANYUWANGI', '1966-08-13', 'P', 'PNS', 'Islam', '82337959901', 'KRAJAN II ALASBULUH RT.4/2 WONGSOREJO', 'SD Negeri 3 Wongsorejo', '2026-01-09', 'S1', '2008', 'Wongsorejo', '2017-01-10', '2017-01-10', NULL),
(65, '131457431', '19600301 198603 1 016', 'Drs. DWI LANGGENG', 'BANYUWANGI', '1960-01-03', 'L', 'PNS', 'Islam', '08214Q258570', 'SIDODADI RT 08/01 WONGSOREJO BANYUWANGI', 'SD Negeri 1 Sumber Anyar', '2020-01-04', 'S1', '1991', 'Wongsorejo', '2004-01-4', '2004-01-4', NULL),
(66, '130749557', '19590724 197907 1 002', 'DWI SETYO RAHARJO', 'BANYUWANGI', '1959-07-23', 'L', 'PNS', 'Islam', '81249667969', 'JL RAYA WONGSOREJO 66 WONGSOREJO', 'SD Negeri 1 Wongsorejo', '2019-01-08', 'DII', '1995', 'Wongsorejo', '2005-01-4', '2002-01-10', NULL),
(67, '130968398', '19590601 198112 1 001', 'BUKARNA, S.Pd', 'BANYUWANGI', '1959-01-06', 'L', 'PNS', 'Islam', '81249542643', 'ALASMALANG - ALASREJO RT 04 WONGSOREJO', 'SD Negeri 4 Watukebo', '2019-01-07', 'S1', '2005', 'Wongsorejo', '2007-01-4', '2007-01-4', NULL),
(68, '131244739', '19610806 198308 1 003', 'HASANUDDIN, S.PdI', 'BANYUWANGI', '1961-06-08', 'L', 'PNS', 'Islam', NULL, 'BIMOREJO JL BIMO RT 01 RW I WONGSOREJO', 'SD Negeri 2 Sidowangi', '2021-01-09', 'S1', '2007', 'Wongsorejo', '2011-01-4', '2011-01-4', NULL),
(69, '131335784', '19610920 198504 1 001', 'SOBRI TAMTOMO', 'LUMAJANG', '1961-09-19', 'L', 'PNS', 'Islam', '81217080205', 'KRAJAN RT 1RW 3 DS. KALIGUNG KEC. ROGOJAMPI', 'SD Negeri 2 Watukebo', '2021-01-10', 'SLTA', '1981', 'Wongsorejo', '2012-01-10', '2018-07-22', NULL),
(70, '131198020', '19620804 198303 1 013', 'Drs. PONIMIN', 'BANYUWANGI', '1962-04-08', 'L', 'PNS', 'Islam', '87755898602', 'JLN. SERAYU 38', 'SD Negeri 2 Bangsring', '2022-01-09', 'S1', '1992', 'Wongsorejo', '2013-01-4', '2013-01-4', NULL),
(71, '131871673', '19651115 198911 1 001', 'MISNO, S.Pd.SD', 'BANYUWANGI', '1965-11-14', 'L', 'PNS', 'Islam', '82330424714', 'Jalan Nangka Dusun Karanganyar', 'SD Negeri 4 Bajulmati', '2025-01-12', 'S1', '2010', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(72, '131974176', '19660828 199201 1 001', 'SUNARWIN, S.Pd', 'BANYUWANGI', '1966-08-27', 'L', 'PNS', 'Islam', '81330568093', 'GALEKAN RT 01/01 BAJULMATI WONGSOREJO BANYUWANGI', 'SD Negeri 1 Bajulmati', '2026-01-09', 'S1', '2000', 'Wongsorejo', '2016-01-4', '2018-01-11', NULL),
(73, '131332092', '19620326 198504 1 003', 'SUPRAPTO, S.Pd', 'BANYUWANGI', '1962-03-25', 'L', 'PNS', 'Islam', '85215707747', 'DSN.ASEMAN RT 02 RW III WONGSOREJO', 'SD Negeri 6 Watukebo', '2022-01-04', 'S1', '2009', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(74, '131871340', '19640724 198911 2 002', 'JUMIYATI, S.Pd.SD', 'BANTUL', '1964-07-23', 'P', 'PNS', 'Islam', '87857295213', 'GALEKAN RT 01 RW III BAJULMATI - WONGSOREJO', 'SD Negeri 2 Bajulmati', '2024-01-08', 'S1', '2007', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(75, '132102101', '19670624 199403 1 006', 'SUPATAH MARHENTORO, S.Pd', 'BANYUWANGI', '1967-06-23', 'L', 'PNS', 'Islam', '81217323254', 'CANGKRING RT 03/0I DS. PENGATIGAN KEC. ROGOJAMPI', 'SD Negeri 1 Alasrejo', '2027-01-07', 'S1', '2001', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(76, '131974975', '19680515 199201 2 002', 'NUR EKO HAYATI, S.Pd', 'BANYUWANGI', '1968-05-14', 'P', 'PNS', 'Islam', '82334872664', 'BIMO RT.02 RW.03 BIMOREJO BANYUWANGI', 'SD Negeri 3 Bajulmati', '2028-01-06', 'S1', '2005', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(77, '131972721', '19661125 199112 1 001', 'Drs. SUSIANTO', 'BANYUWANGI', '1966-11-24', 'L', 'PNS', 'Islam', '85234625224', 'PARASPUTIH RT 03 RW III BANGSRING - WONGSOREJO', 'SD Negeri 5 Alasbuluh', '2026-01-12', 'S1', '1990', 'Wongsorejo', '2017-01-10', '2017-01-10', NULL),
(78, '131045175', '19590413 198201 1 013', 'LASENO', 'BANYUWANGI', '1959-04-12', 'L', 'PNS', 'Islam', '82332723749', 'SUMBER KENCONO ANDELAN KEC. WONGSOREJO', 'SD Negeri 3 Alasrejo', '2019-01-05', 'SLTA', '1981', 'Wongsorejo', '2006-01-10', '2006-01-10', NULL),
(79, '131044959', '19610825 198201 1 001', 'MUKSIN, S.Pd.,M.Si', 'BANYUWANGI', '1961-08-24', 'L', 'PNS', 'Islam', NULL, 'LINGKUNGAN SUKOROJO', 'Wilayah Kerja Satuan Pendidikan Kecamatan WONGSOREJO', '2019-01-09', 'S2', '2004', 'Wongsorejo', '2008-01-10', '2018-03-28', NULL),
(80, '131045455', '19590503 198201 1 004', 'SUHARIYONO', 'BANYUWANGI', '1959-03-05', 'L', 'PNS', 'Islam', NULL, 'DUSUN BADOLAN RT 02/RW 01 BAJULMATI WONGSOREJO', 'SD Negeri 4 Bajulmati', '2019-01-06', 'SLTA', '1979', 'Wongsorejo', '2011-01-4', '2011-01-4', NULL),
(81, '131332094', '19630212 198504 1 012', 'MOHAMMAD ALFI', 'BANYUWANGI', '1963-12-02', 'L', 'PNS', 'Islam', NULL, 'BENGKAK RT 01 RW I KRAJAN KEC. WONGSOREJO', 'SD Negeri 2 Bengkak', '2023-01-03', 'SLTA', '1983', 'Wongsorejo', '2011-01-10', '2011-01-10', NULL),
(82, '510135305', '19770219 200312 2 005', 'MUJI ASTUTI, S.Pd', 'BANYUWANGI', '1977-02-18', 'P', 'PNS', 'Islam', NULL, 'JL.JAMBU NO.5 RT.03 RW. VIII BAJULMATI KEC. WONGSOREJO', 'SMP Negeri 1 Wongsorejo', '2037-01-03', 'S1', '2002', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(83, '131335785', '19650402 198504 1 001', 'SATURO, S.Pd.SD', 'LUMAJANG', '1965-02-04', 'L', 'PNS', 'Islam', '82337946062', 'KRAJAN RT.02 RW.01 WATUKEBO WONGSOREJO', 'SD Negeri 6 Watukebo', '2025-01-05', 'S1', '2009', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(84, '132156229', '19700225 199611 1 001', 'SUYADA WIDYATMANTO, S.Pd', 'MALANG', '1970-02-24', 'L', 'PNS', 'Protestan', '8124950351', 'Jl. Pandean Desa WONOREJO BANYUPUTIH', 'SD Negeri 1 Bajulmati', '2030-01-03', 'S1', '2005', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(85, '132217036', '19740205 199807 1 001', 'AHMAD ZAELANI, S.Pd.SD', 'JEMBER', '1974-05-02', 'L', 'PNS', 'Islam', '81351879344', 'DSN.KEBUNREJO 003/001 DS.ALASREJO WONGSOREJO', 'SD Negeri 6 Alasbuluh', '2034-01-03', 'S1', '2008', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(86, '132179925', '19720816 199707 1 001', 'NURHADI TENDEAN, S.Pd', 'BANYUWANGI', '1972-08-15', 'L', 'PNS', 'Islam', '85236875370', 'DSN.KRAJAN RT.02 RW.06 DS.WONGSOREJO', 'SD Negeri 1 Wongsorejo', '2032-01-09', 'S1', '2001', 'Wongsorejo', '2016-01-10', '2018-01-11', NULL),
(87, '510199521', '19651213 200701 2 008', 'Dra. RIMA SURYANINGSIH', 'BANYUWANGI', '1965-12-12', 'P', 'PNS', 'Islam', NULL, 'KEL. LATENG - BANYUWANGI', 'SMP Negeri 1 Wongsorejo', '2026-01-01', 'S1', '1990', 'Wongsorejo', '2018-01-10', '2018-01-10', NULL),
(88, '131894734', '19620416 199104 1 001', 'JOKO HERMANTO, S.Pd', 'BANYUWANGI', '1962-04-15', 'L', 'PNS', 'Islam', '81216761680', 'JL. Singosari', 'SD Negeri 3 Bengkak', '2022-01-05', 'S1', '2000', 'Wongsorejo', '2014-01-4', '2014-01-4', NULL),
(89, '510151833', '19830426 200604 2 022', 'ANING INDRAWATI, S.Pd', 'PONOROGO', '1983-04-25', 'P', 'PNS', 'Islam', NULL, 'DESA WONGSOREJO KEC. WONGSOREJO', 'SMP Negeri 1 Wongsorejo', '0000-00-00', 'S1', '2005', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(90, '132248746', '19740106 199911 2 001', 'LULUK SETIYOWATI, S.Pd', 'JEMBER', '1974-06-01', 'P', 'PNS', 'Islam', '85330011072', 'JL GATOT SUBROTO - RT 01/11 KETAPANG', 'SD Negeri 1 Bangsring', '2034-01-02', 'S1', '2005', 'Wongsorejo', '2015-01-10', '2015-01-10', NULL),
(91, '131198320', '19600810 198303 1 017', 'KARSUN HADI', 'LUMAJANG', '1960-10-08', 'L', 'PNS', 'Islam', '87857348159', 'SIDODADI RT.01 RW.01 WONGSOREJO', 'SD Negeri 1 Sidodadi', '2020-01-09', 'SLTA', '1981', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(92, '510199530', '19670923 200701 2 015', 'Dra. ENDANG SUHARNININGSIH', 'BANYUWANGI', '1967-09-22', 'P', 'PNS', 'Islam', NULL, 'JL. IMAM BONJOL 32B RT 4/1 TUKANG KAYU', 'SMP Negeri 1 Wongsorejo', '2027-01-10', 'S1', '1991', 'Wongsorejo', '2016-01-4', '2016-01-4', NULL),
(93, '510235021', '19780101 200801 1 044', 'SYAMSUL HADI, S.Pd', 'BANYUWANGI', '1978-01-01', 'L', 'PNS', 'Islam', NULL, 'JALAN KH. ABDUL WAHID 25 KERTOSARI - BANYUWANGI', 'SMP Negeri 4 Wongsorejo Satu Atap', '2038-01-02', 'S1', '2001', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(94, '510235008', '19710616 200801 1 013', 'EDY SUWIGNYO, S.Pd', 'BANYUWANGI', '1971-06-15', 'L', 'PNS', 'Islam', NULL, 'DESA SUMBERKENCONO KRAJAN RT.04/03 WONGSOREJO', 'SMP Negeri 4 Wongsorejo Satu Atap', '2031-01-07', 'S1', '2008', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(95, '132248761', '19740610 199911 2 003', 'ENI MUJIANA, S.Pd.SD', 'JEMBER', '1974-10-06', 'P', 'PNS', 'Islam', '81249960930', 'KRAJAN KULON RT 02 RW III TEMUGURUH - SEMPU', 'SD Negeri 1 Bengkak', '2034-01-07', 'S1', '2010', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(96, '510234226', '19650519 200801 1 004', 'ALFIAN HELMI, SH', 'BANYUWANGI', '1965-05-18', 'L', 'PNS', 'Islam', NULL, 'DSN MADURAN RT.02/02 ROGOJAMPI', 'SMP Negeri 4 Wongsorejo Satu Atap', '2025-01-06', 'S1', '1994', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(97, '510234133', '19640807 200801 1 006', 'Drs. SAMIYONO', 'BANYUWANGI', '1964-07-08', 'L', 'PNS', 'Islam', '85230592212', 'LINGK. GAPLEK RT.03/02 BAKUNGAN KEC. GLAGAH', 'SMP Negeri 4 Wongsorejo Satu Atap', '2024-01-09', 'S1', '1990', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(98, '510234304', '19670202 200801 2 019', 'Dra. CHRISTIANA HERWINARJATI', 'SURABAYA', '1967-02-02', 'P', 'PNS', 'Protestan', NULL, 'PERUM VILLA SUKOWIDI F-9 KLATAK KALIPURO', 'SMP Negeri 1 Wongsorejo', '2027-01-03', 'S1', '1992', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(99, '510234324', '19760427 200801 2 019', 'KUSTANTI PRASETYANINGTYAS, S.Pd', 'BANYUWANGI', '1976-04-26', 'P', 'PNS', 'Islam', NULL, 'KALIPURO - BANYUWANGI', 'SMP Negeri 1 Wongsorejo', '2036-01-05', 'S1', '1998', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(100, '510234011', '19680121 200801 1 011', 'Drs. SUGIH HARTOYO', 'BANYUWANGI', '1968-01-20', 'L', 'PNS', 'Islam', '81358718484', 'PENDARUNGAN RT 01 RW 01 KABAT', 'SMP Negeri 2 Wongsorejo Satu Atap', '2028-01-02', 'S1', '1992', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(101, '510234878', '19750301 200801 1 027', 'HARDI SAPTONO, S.Pd', 'CILACAP', '1975-01-03', 'L', 'PNS', 'Islam', '81234976480', 'PERUMAHAN PERMATA CANDI PERMAI A18', 'SMP Negeri 1 Wongsorejo', '2035-01-04', 'S1', '2001', 'Wongsorejo', '2014-01-10', '2012-12-30', NULL),
(102, '510135357', '19770715 200312 1 004', 'SUYONO, S.Pd', 'BANYUWANGI', '1977-07-14', 'L', 'PNS', 'Islam', '81336139281', 'DSN ALAS MALANG RT.I RW.III ALASREJO WONGSOREJO', 'SD Negeri 3 Bajulmati', '2037-01-08', 'S1', '2005', 'Wongsorejo', '2016-01-10', '2016-01-10', NULL),
(103, '510234357', '19651015 200801 1 007', 'MISTARI EFENDI, S.Pd', 'BANYUWANGI', '1965-10-14', 'L', 'PNS', 'Islam', '85232673418', 'SUMBERKENCONO - WONGSOREJO', 'SD Negeri 1 Sumber Kencono', '2025-01-11', 'S1', '2013', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(104, '510234400', '19640528 200801 1 003', 'SAI\'IN, S.PdI', 'BANYUWANGI', '1964-05-27', 'L', 'PNS', 'Islam', NULL, 'RT 02/02 KRAJAN DS. BAJULMATI KEC. WONGSOREJO', 'SD Negeri 1 Bajulmati', '2024-01-06', 'S1', '2009', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(105, '510234008', '19710712 200801 1 020', 'MOH. EKSAN RIFAI, S.PdI', 'BANYUWANGI', '1971-12-07', 'L', 'PNS', 'Islam', NULL, 'JL RAYA SITUBONDO NO. 143 BAJULMATI WONGSOREJO', 'SD Negeri 5 Bajulmati', '2031-01-08', 'S1', '2012', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(106, '510234553', '19680601 200801 1 013', 'MOHAMAD ASIK, S.Pd', 'JEMBER', '1968-01-06', 'L', 'PNS', 'Islam', NULL, 'Dusun krajan', 'SD Negeri 2 Sidowangi', '2028-01-07', 'S1', '2009', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(107, '510234217', '19680127 200801 1 004', 'ALI MURIDHA, S.PdI', 'BANYUWANGI', '1968-01-26', 'L', 'PNS', 'Islam', '85854530045', 'DUSUN KRAJAN WONGSOREJO', 'SD Negeri 2 Wongsorejo', '2028-01-02', 'S1', '2009', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(108, '510147165', '19671212 200501 1 007', 'ABD. MUNI, S.PdI', 'BANYUWANGI', '1967-12-12', 'L', 'PNS', 'Islam', '87857208167', 'JL. KH AGUS SALIM 31 WONGSOREJO', 'SD Negeri 4 Alasbuluh', '2028-01-01', 'S1', '2009', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(109, '510234319', '19691231 200801 1 169', 'HAMIDI, S.Pd', 'SUMENEP', '1969-12-30', 'L', 'PNS', 'Islam', NULL, 'KRAJAN RT 04/02 - WATUKEBO WONGSOREJO', 'SD Negeri 2 Watukebo', '2030-01-01', 'S1', '2013', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL),
(110, '510198840', '19670831 200701 1 012', 'AGUS SUPRIYANTO, S.Pd', 'BANYUWANGI', '1967-08-30', 'L', 'PNS', 'Islam', NULL, 'DSN KARANGANYAR RT. 04/02 BAJULMATI WONGSOREJO', 'SD Negeri 1 Sidowangi', '2027-01-09', 'S1', '2009', 'Wongsorejo', '2017-01-4', '2017-01-4', NULL);

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
(1, 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
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

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role_id`, `is_active`, `gambar`, `date_created`) VALUES
(4, 'Icha', 'icha', '$2y$10$WKw3jo4OKTuzTHTHzAhrle0fkec73YN5wG7/5UiZN4iWCnXPmn.Bm', 1, 1, 'avatar.jpg', 1552637403);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
