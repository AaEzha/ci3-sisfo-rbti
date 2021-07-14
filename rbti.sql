-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 01:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbti`
--

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_hak` int(11) NOT NULL,
  `keterangan` varchar(60) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_hak`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'dosen', 2),
(3, 'mahasiswa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `uname_admin` varchar(255) NOT NULL,
  `pass_admin` varchar(255) NOT NULL,
  `nama_admin` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `uname_admin`, `pass_admin`, `nama_admin`) VALUES
(1, 'admin01', 'admin01', 'Kayla Shareta'),
(2, 'admin02', 'admin02', 'Kireina Shamara');

-- --------------------------------------------------------

--
-- Table structure for table `tb_artikel`
--

CREATE TABLE `tb_artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` text NOT NULL,
  `isi_artikel` text NOT NULL,
  `foto_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_artikel`
--

INSERT INTO `tb_artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `foto_artikel`) VALUES
(2, 'Hacker', 'hacker hacker hacker hacker', 'EvelTeMVgAEZ8sj.jpg'),
(4, 'hipster', 'hipster hipster hipster', 'EveX5PRUcAIAgTX1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_biodatatim`
--

CREATE TABLE `tb_biodatatim` (
  `id_biodatatim` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nim_biodata` varchar(255) NOT NULL,
  `tangggal_submit_biodata` datetime NOT NULL,
  `nama_hustler` varchar(255) NOT NULL,
  `status_nama_hustler` enum('Approve','Revisi') DEFAULT NULL,
  `catnama_hustler` text DEFAULT NULL,
  `alamat_hustler` text NOT NULL,
  `status_alamat_hustler` enum('Approve','Revisi') DEFAULT NULL,
  `catalamat_hustler` text DEFAULT NULL,
  `telp_hustler` varchar(255) NOT NULL,
  `status_telp_hustler` enum('Approve','Revisi') DEFAULT NULL,
  `cattelp_hustler` text DEFAULT NULL,
  `email_hustler` varchar(255) NOT NULL,
  `status_email_hustler` enum('Approve','Revisi') DEFAULT NULL,
  `catemail_hustler` text DEFAULT NULL,
  `tugas_hustler` text NOT NULL,
  `status_tugas_hustler` enum('Approve','Revisi') DEFAULT NULL,
  `cattugas_hustler` text DEFAULT NULL,
  `nama_hipster` varchar(255) NOT NULL,
  `status_nama_hipster` enum('Approve','Revisi') DEFAULT NULL,
  `catnama_hipster` text DEFAULT NULL,
  `alamat_hipster` text NOT NULL,
  `status_alamat_hipster` enum('Approve','Revisi') DEFAULT NULL,
  `catalamat_hipster` text DEFAULT NULL,
  `telp_hipster` varchar(255) NOT NULL,
  `status_telp_hipster` enum('Approve','Revisi') DEFAULT NULL,
  `cattelp_hipster` text DEFAULT NULL,
  `email_hipster` varchar(255) NOT NULL,
  `status_email_hipster` enum('Approve','Revisi') DEFAULT NULL,
  `catemail_hipster` text DEFAULT NULL,
  `tugas_hipster` text NOT NULL,
  `status_tugas_hipster` enum('Approve','Revisi') DEFAULT NULL,
  `cattugas_hipster` text DEFAULT NULL,
  `nama_hacker` varchar(255) NOT NULL,
  `status_nama_hacker` enum('Approve','Revisi') DEFAULT NULL,
  `catnama_hacker` text DEFAULT NULL,
  `alamat_hacker` text NOT NULL,
  `status_alamat_hacker` enum('Approve','Revisi') DEFAULT NULL,
  `catalamat_hacker` text DEFAULT NULL,
  `telp_hacker` varchar(255) NOT NULL,
  `status_telp_hacker` enum('Approve','Revisi') DEFAULT NULL,
  `cattelp_hacker` text DEFAULT NULL,
  `email_hacker` varchar(255) NOT NULL,
  `status_email_hacker` enum('Approve','Revisi') DEFAULT NULL,
  `catemail_hacker` text DEFAULT NULL,
  `tugas_hacker` text NOT NULL,
  `status_tugas_hacker` enum('Approve','Revisi') DEFAULT NULL,
  `cattugas_hacker` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biodatatim`
--

INSERT INTO `tb_biodatatim` (`id_biodatatim`, `id_proposal`, `nim_biodata`, `tangggal_submit_biodata`, `nama_hustler`, `status_nama_hustler`, `catnama_hustler`, `alamat_hustler`, `status_alamat_hustler`, `catalamat_hustler`, `telp_hustler`, `status_telp_hustler`, `cattelp_hustler`, `email_hustler`, `status_email_hustler`, `catemail_hustler`, `tugas_hustler`, `status_tugas_hustler`, `cattugas_hustler`, `nama_hipster`, `status_nama_hipster`, `catnama_hipster`, `alamat_hipster`, `status_alamat_hipster`, `catalamat_hipster`, `telp_hipster`, `status_telp_hipster`, `cattelp_hipster`, `email_hipster`, `status_email_hipster`, `catemail_hipster`, `tugas_hipster`, `status_tugas_hipster`, `cattugas_hipster`, `nama_hacker`, `status_nama_hacker`, `catnama_hacker`, `alamat_hacker`, `status_alamat_hacker`, `catalamat_hacker`, `telp_hacker`, `status_telp_hacker`, `cattelp_hacker`, `email_hacker`, `status_email_hacker`, `catemail_hacker`, `tugas_hacker`, `status_tugas_hacker`, `cattugas_hacker`) VALUES
(1, 1, 'M3118046', '0000-00-00 00:00:00', 'KAYLA SHARETAA', NULL, '', '<p><strong>Jl. Kudus Jepara, Papringan 7/4 Kaliwungu, Kudus hustler</strong></p>\r\n', NULL, NULL, '082213588906', NULL, NULL, 'sskaylandn@gmail.com', NULL, NULL, '<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>hustler Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. hustler Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. hustler Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>\r\n</ol>\r\n', NULL, NULL, 'KAYLA SHARETA A', NULL, NULL, '<p>dd hipster</p>\r\n', NULL, NULL, '0821388493857', NULL, NULL, 'kayla@yahoo.com', NULL, NULL, '<ul>\r\n	<li>hipster Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>\r\n</ul>\r\n', NULL, NULL, 'KAYLA SHARETA ANDIEN', NULL, NULL, '<p>kudu<em>s, jawa tengah hacker</em></p>\r\n', NULL, NULL, '08221358833333', NULL, NULL, 'shareta@gmail.com', NULL, NULL, '<p>ha<ins>cker Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </ins>commodo consequat..Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n', NULL, NULL),
(3, 0, 'M3118045', '0000-00-00 00:00:00', 'FF', NULL, '', 'ff', NULL, NULL, 'ff', NULL, NULL, 'ff', NULL, NULL, 'ff', NULL, NULL, 'FF', NULL, NULL, 'ff', NULL, NULL, 'ff', NULL, NULL, 'ff', NULL, NULL, 'ff', NULL, NULL, 'FF', NULL, NULL, 'ff', NULL, NULL, 'ff', NULL, NULL, 'ff', NULL, NULL, 'ff', NULL, NULL),
(5, 3, 'M3118046', '0000-00-00 00:00:00', 'YHTN', NULL, '', 'nytjty', NULL, NULL, '4434565', NULL, NULL, 'hnjyjy', NULL, NULL, 'ytjj', NULL, NULL, 'JYJYTJ', NULL, NULL, 'jyjyyej', NULL, NULL, '24526', NULL, NULL, 'yjytjjt', NULL, NULL, 'jyyjttttt', NULL, NULL, 'YJYJTEJY', NULL, NULL, 'ghnytn', NULL, NULL, '9878979', NULL, NULL, 'yhjtyj', NULL, NULL, 'jyytjyj', NULL, NULL),
(6, 7, 'M3118045', '0000-00-00 00:00:00', 'ZHONG CHENLE', NULL, '', 'shanghai', NULL, NULL, '567678', NULL, NULL, 'hhyy@grgrg.ttt', NULL, NULL, 'rtrrhtht', NULL, NULL, 'ZHONG', NULL, NULL, 'china', NULL, NULL, '788788', NULL, NULL, 'njyhjh@rfgr.fef', NULL, NULL, 'grrggr', NULL, NULL, 'CHENLE', NULL, NULL, 'seoul', NULL, NULL, '875746', NULL, NULL, 'ngngfn@kfgrjo.knfre', NULL, NULL, 'reggg', NULL, NULL),
(7, 5, 'M3118046', '0000-00-00 00:00:00', 'JUJYMM', NULL, '', 'jmujn', NULL, NULL, '777', NULL, NULL, 'uumj', NULL, NULL, 'jyjn', NULL, NULL, 'JYYYJM', NULL, NULL, 'yjyuj', NULL, NULL, '888888888889', NULL, NULL, 'l.,k,k', NULL, NULL, 'jmmm', NULL, NULL, 'JHM', NULL, NULL, 'ujn', NULL, NULL, '8877', NULL, NULL, 'jmjhm', NULL, NULL, 'hjmm', NULL, NULL),
(8, 6, 'M3118001', '0000-00-00 00:00:00', 'GBHHB', NULL, '', 'hgfbb', NULL, NULL, '657', NULL, NULL, 'jhnhgm', NULL, NULL, 'nhhnn', NULL, NULL, 'NHGNN', NULL, NULL, 'hnhgnh', NULL, NULL, '879', NULL, NULL, 'ggn', NULL, NULL, 'ngn', NULL, NULL, 'GFNGN', NULL, NULL, 'jkm', NULL, NULL, '887', NULL, NULL, 'ghnbn', NULL, NULL, 'nhn', NULL, NULL),
(10, 11, 'M3118045', '0000-00-00 00:00:00', 'BRGI', NULL, '', 'rgeg', NULL, NULL, '98', NULL, NULL, 'hgjh', NULL, NULL, 'df', NULL, NULL, 'FBB', NULL, NULL, 'bbf', NULL, NULL, '98', NULL, NULL, 'dgg', NULL, NULL, 'dfg', NULL, NULL, 'GFG', NULL, NULL, 'gfg', NULL, NULL, '78', NULL, NULL, 'vf', NULL, NULL, 'fdv', NULL, NULL),
(11, 15, 'M3118045', '0000-00-00 00:00:00', 'YT', NULL, '', 'yjj', NULL, NULL, '67', NULL, NULL, 'hnnh', NULL, NULL, 'fbb', NULL, NULL, 'FBB', NULL, NULL, 'bfb', NULL, NULL, '897', NULL, NULL, 'hmhm', NULL, NULL, 'hmmh', NULL, NULL, 'HMMH', NULL, NULL, 'mhmh', NULL, NULL, '90', NULL, NULL, 'gnj', NULL, NULL, 'ngn', NULL, NULL),
(12, 15, 'M3118045', '0000-00-00 00:00:00', 'YT', NULL, '', 'yjj', NULL, NULL, '67', NULL, NULL, 'hnnh', NULL, NULL, 'fbb', NULL, NULL, 'FBB', NULL, NULL, 'bfb', NULL, NULL, '897', NULL, NULL, 'hmhm', NULL, NULL, 'hmmh', NULL, NULL, 'HMMH', NULL, NULL, 'mhmh', NULL, NULL, '90', NULL, NULL, 'gnj', NULL, NULL, 'ngn', NULL, NULL),
(13, 15, 'M3118045', '0000-00-00 00:00:00', 'YT', NULL, '', 'yjj', NULL, NULL, '67', NULL, NULL, 'hnnh', NULL, NULL, 'fbb', NULL, NULL, 'FBB', NULL, NULL, 'bfb', NULL, NULL, '897', NULL, NULL, 'hmhm', NULL, NULL, 'hmmh', NULL, NULL, 'HMMH', NULL, NULL, 'mhmh', NULL, NULL, '90', NULL, NULL, 'gnj', NULL, NULL, 'ngn', NULL, NULL),
(14, 16, 'M3118045', '0000-00-00 00:00:00', 'HT', NULL, NULL, 'trtr', NULL, NULL, '3', NULL, NULL, '4', NULL, NULL, '5', NULL, NULL, '6', NULL, NULL, '7', NULL, NULL, '8', NULL, NULL, '9', NULL, NULL, '10', NULL, NULL, '11', NULL, NULL, '12', NULL, NULL, '13', NULL, NULL, '14', NULL, NULL, '15', NULL, NULL),
(15, 18, 'M3118046', '0000-00-00 00:00:00', 'GRGRRG', NULL, NULL, '<p><strong>ergrgr</strong></p>\r\n\r\n<p><em><strong>fef</strong></em></p>\r\n', NULL, NULL, '88', NULL, NULL, 'dfvdf', NULL, NULL, 'fvvfv', NULL, NULL, 'FVDV', NULL, NULL, 'vfv', NULL, NULL, '7', NULL, NULL, 'vfdvf', NULL, NULL, 'fvvf', NULL, NULL, 'VFFV', NULL, NULL, 'fvdvf', NULL, NULL, '7', NULL, NULL, 'vvf', NULL, NULL, 'dvvd', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL,
  `uname_dosen` varchar(255) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `uname_dosen`, `nama_dosen`) VALUES
(1, 'dosen01', 'dosen satu'),
(5, 'dosen02', 'Hame'),
(6, 'dosen03', 'dosen 03'),
(10, 'dosen04', 'dosen empat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(5, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim_mhs` varchar(255) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `kelas_mhs` varchar(3) NOT NULL,
  `dosen_mhs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mhs`, `nim_mhs`, `nama_mhs`, `kelas_mhs`, `dosen_mhs`) VALUES
(3, 'M3118046', 'Kayla Shareta Andien', 'B', 'dosen01'),
(5, 'M3118001', 'Abcd Efgh', 'A', 'dosen02'),
(6, 'M3118045', 'Kartika Dewi Larasati', 'B', 'dosen04'),
(8, 'M3118003', 'ccc', 'C', 'dosen03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_master_proposal`
--

CREATE TABLE `tb_master_proposal` (
  `id_proposal` int(11) NOT NULL,
  `nim_mhs` varchar(255) NOT NULL,
  `judul_proposal` text NOT NULL,
  `tema_proposal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_master_proposal`
--

INSERT INTO `tb_master_proposal` (`id_proposal`, `nim_mhs`, `judul_proposal`, `tema_proposal`) VALUES
(1, 'M3118046', 'KAYLAAAAAA', 'Sistem Informasi'),
(3, 'M3118046', 'JUDUL;', 'Security'),
(4, 'M3118046', 'PROPOO', 'Games'),
(5, 'M3118046', 'QWERTY', 'Android'),
(6, 'M3118001', 'ddddd', 'Sistem Informasi'),
(7, 'M3118045', 'NEO CULTURE TECHNOLOGI', 'Security'),
(11, 'M3118045', 'df aed', 'Augmented Reality'),
(15, 'M3118045', 'HJMMJMJ', 'Virtual Reality'),
(16, 'M3118045', 'KUKV', 'Games'),
(17, 'M3118001', 'I HEART YOU', 'Virtual Reality'),
(18, 'M3118046', 'THBNTHTH', 'Android'),
(19, 'M3118046', 'UJYJYU', 'Internet of Things');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paper_pitching`
--

CREATE TABLE `tb_paper_pitching` (
  `id_pp` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nim_pp` varchar(255) NOT NULL,
  `tanggal_submit_pp` datetime NOT NULL,
  `latar_belakang_pp` text NOT NULL,
  `status_latarb_pp` enum('Approve','Revisi') DEFAULT NULL,
  `catlatarb_pp` text DEFAULT NULL,
  `permasalahan_pp` text NOT NULL,
  `status_permas_pp` enum('Approve','Revisi') DEFAULT NULL,
  `catpermas_pp` text DEFAULT NULL,
  `solusi_pp` text NOT NULL,
  `status_solusi_pp` enum('Approve','Revisi') DEFAULT NULL,
  `catsolusi_pp` text DEFAULT NULL,
  `progres_pp` text NOT NULL,
  `status_progres_pp` enum('Approve','Revisi') DEFAULT NULL,
  `catprogres_pp` text DEFAULT NULL,
  `kompetitor_pp` text NOT NULL,
  `status_komp_pp` enum('Approve','Revisi') DEFAULT NULL,
  `catkomp_pp` text DEFAULT NULL,
  `kompetitor2_pp` text NOT NULL,
  `status_komp2_pp` enum('Approve','Revisi') DEFAULT NULL,
  `catkomp2_pp` text DEFAULT NULL,
  `target_pp` text NOT NULL,
  `status_target_pp` enum('Approve','Revisi') DEFAULT NULL,
  `cattarget_pp` text DEFAULT NULL,
  `data_pp` text NOT NULL,
  `status_data_pp` enum('Approve','Revisi') DEFAULT NULL,
  `catdata_pp` text DEFAULT NULL,
  `proses_bisnis_pp` text NOT NULL,
  `status_pb_pp` enum('Approve','Revisi') DEFAULT NULL,
  `catpb_pp` text DEFAULT NULL,
  `proses_bisnis2_pp` text NOT NULL,
  `status_pb2_pp` enum('Approve','Revisi') DEFAULT NULL,
  `catpb2_pp` text DEFAULT NULL,
  `tahapan_pp` text NOT NULL,
  `status_tahap_pp` enum('Approve','Revisi') DEFAULT NULL,
  `cattahap_pp` text DEFAULT NULL,
  `kelebihan_pp` text NOT NULL,
  `status_keleb_pp` enum('Approve','Revisi') DEFAULT NULL,
  `catkeleb_pp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paper_pitching`
--

INSERT INTO `tb_paper_pitching` (`id_pp`, `id_proposal`, `nim_pp`, `tanggal_submit_pp`, `latar_belakang_pp`, `status_latarb_pp`, `catlatarb_pp`, `permasalahan_pp`, `status_permas_pp`, `catpermas_pp`, `solusi_pp`, `status_solusi_pp`, `catsolusi_pp`, `progres_pp`, `status_progres_pp`, `catprogres_pp`, `kompetitor_pp`, `status_komp_pp`, `catkomp_pp`, `kompetitor2_pp`, `status_komp2_pp`, `catkomp2_pp`, `target_pp`, `status_target_pp`, `cattarget_pp`, `data_pp`, `status_data_pp`, `catdata_pp`, `proses_bisnis_pp`, `status_pb_pp`, `catpb_pp`, `proses_bisnis2_pp`, `status_pb2_pp`, `catpb2_pp`, `tahapan_pp`, `status_tahap_pp`, `cattahap_pp`, `kelebihan_pp`, `status_keleb_pp`, `catkeleb_pp`) VALUES
(2, 1, 'M3118046', '0000-00-00 00:00:00', 'hwofhoiehe ieowofhoifhwofhf oehwfofhfohhe ohowefhofhofh oefwhfohfeh oefhofehfohfoh ofhofhofheofh owefhoefhofhofh ofoefhohfwfh ohfoefhofheofi owfhoefhofhfh owfhoefhofhfohw ohd wxxhiwh fvb kfboebf bcwefboicb dowhohvnveof ofhnofboeid nfowbfiofo cbfowefboief fbwofbeoifei foieifnowifeoifn oefhoefihewf\r\nnowehowefhfoe oifwhoeiwfhfh fieohfofho ofoiweeofefobfo oihceoifeiofher', NULL, NULL, 'ssLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, 'ssddddLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, 'sskkkkLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, 'ssffffLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, 'sswwwwLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, 'ssttttLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, 'ssiiiiLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, 'ssooooLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, 'Et16DOFUcAAChYa1.jpg', NULL, NULL, 'dwfgewhrLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, 'kkkkkLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL),
(5, 3, 'M3118046', '0000-00-00 00:00:00', 'htyh', NULL, NULL, 'ythhyhy', NULL, NULL, 'hyhyhy', NULL, NULL, 'hhytyh', NULL, NULL, 'hyhyhy', NULL, NULL, 'hyhyhy', NULL, NULL, 'hyhyh', NULL, NULL, 'hyyhhyh', NULL, NULL, 'jjuujju', NULL, NULL, '20200301_1129504.jpg', NULL, NULL, 'jujujuju', NULL, NULL, 'jujju', NULL, NULL),
(7, 4, 'M3118046', '0000-00-00 00:00:00', 'hnhgnhg', NULL, NULL, 'hnnhnhg', NULL, NULL, 'nhnhnhg', NULL, NULL, 'nhnhggnh', NULL, NULL, 'nhnhnh', NULL, NULL, 'hnnhnh', NULL, NULL, 'nhnhnh', NULL, NULL, 'nhnhhn', NULL, NULL, 'nhnhhn', NULL, NULL, '20200301_1532051.jpg', NULL, NULL, 'nhnnh', NULL, NULL, 'hnnh', NULL, NULL),
(8, 7, 'M3118045', '0000-00-00 00:00:00', 'erfgrg', NULL, NULL, 'tgggtrgt', NULL, NULL, 'grbgbhgb', NULL, NULL, 'bfgbgb', NULL, NULL, 'bgbgb', NULL, NULL, 'bgthbrtgb', NULL, NULL, 'bgbgb', NULL, NULL, 'vbbrtghtr', NULL, NULL, 'trhtrhb', NULL, NULL, '', NULL, NULL, 'gbtnyhtr', NULL, NULL, 'trhtth', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_plan`
--

CREATE TABLE `tb_plan` (
  `id_plan` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nim_plan` varchar(255) NOT NULL,
  `tanggal_submit_plan` datetime NOT NULL,
  `cust_plan` text NOT NULL,
  `status_cust_plan` enum('Approve','Revisi') DEFAULT NULL,
  `catcust_plan` text DEFAULT NULL,
  `value_plan` text NOT NULL,
  `status_value_plan` enum('Approve','Revisi') DEFAULT NULL,
  `catvalue_plan` text DEFAULT NULL,
  `channels_plan` text NOT NULL,
  `status_channels_plan` enum('Approve','Revisi') DEFAULT NULL,
  `catchannels_plan` text DEFAULT NULL,
  `relation_plan` text NOT NULL,
  `status_relation_plan` enum('Approve','Revisi') DEFAULT NULL,
  `catrelation_plan` text DEFAULT NULL,
  `key_act_plan` text NOT NULL,
  `status_keyact_plan` enum('Approve','Revisi') DEFAULT NULL,
  `catkeyact_plan` text DEFAULT NULL,
  `key_res_plan` text NOT NULL,
  `status_keyres_plan` enum('Approve','Revisi') DEFAULT NULL,
  `catkeyres_plan` text DEFAULT NULL,
  `key_partner_plan` text NOT NULL,
  `status_keypart_plan` enum('Approve','Revisi') DEFAULT NULL,
  `catkeypart_plan` text DEFAULT NULL,
  `cost_plan` text NOT NULL,
  `status_cost_plan` enum('Approve','Revisi') DEFAULT NULL,
  `catcost_plan` text DEFAULT NULL,
  `revenue_plan` text NOT NULL,
  `status_revenue_plan` enum('Approve','Revisi') DEFAULT NULL,
  `catrevenue_plan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_plan`
--

INSERT INTO `tb_plan` (`id_plan`, `id_proposal`, `nim_plan`, `tanggal_submit_plan`, `cust_plan`, `status_cust_plan`, `catcust_plan`, `value_plan`, `status_value_plan`, `catvalue_plan`, `channels_plan`, `status_channels_plan`, `catchannels_plan`, `relation_plan`, `status_relation_plan`, `catrelation_plan`, `key_act_plan`, `status_keyact_plan`, `catkeyact_plan`, `key_res_plan`, `status_keyres_plan`, `catkeyres_plan`, `key_partner_plan`, `status_keypart_plan`, `catkeypart_plan`, `cost_plan`, `status_cost_plan`, `catcost_plan`, `revenue_plan`, `status_revenue_plan`, `catrevenue_plan`) VALUES
(2, 1, 'M3118046', '0000-00-00 00:00:00', '1acustLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'Approve', '', '2bLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis ', 'Approve', '', '3cdLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Approve', '', '4dfLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Approve', '', '5fgLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Approve', '', '6ghLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Approve', '', '7hjLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Approve', '', '8ikLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Approve', '', '9jmLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Revisi', NULL),
(3, 0, 'M3118045', '0000-00-00 00:00:00', 'sss', 'Approve', '', 'wsa', 'Approve', '', 'e', 'Approve', '', 'r', 'Approve', '', 't', 'Approve', '', 'y', 'Approve', '', 'u', 'Approve', '', 'i', 'Approve', '', 'o', NULL, NULL),
(5, 3, 'M3118046', '0000-00-00 00:00:00', 'thyhyhyhh', 'Approve', '', 'jkkiu8ikhh', 'Approve', '', 'gbbgbgb', 'Approve', '', 'bhbhyythy', 'Approve', '', 'yhyhbgbdt', 'Approve', '', 'bgbnhjyu', 'Approve', '', 'gthyynb', 'Approve', '', 'hnhnyun', 'Approve', '', 'yhythrth', NULL, NULL),
(6, 7, 'M3118045', '0000-00-00 00:00:00', 'ythyhth', 'Approve', '', 'yhtjyj', 'Approve', '', 'jymm', 'Approve', '', 'mhjmymy', 'Approve', '', 'yujjjy', 'Approve', '', 'hyhgb', 'Approve', '', 'cbbvb', 'Approve', '', 'hgmhm', 'Approve', '', 'mhmhjm', NULL, NULL),
(7, 5, 'M3118046', '0000-00-00 00:00:00', 'ggg', 'Approve', '', 'ggg', 'Approve', '', 'ttt', 'Approve', '', 'ttt', 'Approve', '', 'ttt', 'Approve', '', 'ttt', 'Approve', '', 'rrr', 'Approve', '', 'hjj', 'Approve', '', 'nnn', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `id_solusi` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nim_solusi` varchar(255) NOT NULL,
  `tanggal_submit_solusi` datetime NOT NULL,
  `nama_solusi` varchar(255) NOT NULL,
  `status_nama_solusi` enum('Approve','Revisi') DEFAULT NULL,
  `catnama_solusi` text DEFAULT NULL,
  `deskripsi_solusi` text NOT NULL,
  `status_desk_solusi` enum('Approve','Revisi') DEFAULT NULL,
  `catdesk_solusi` text DEFAULT NULL,
  `logo_solusi` text NOT NULL,
  `status_logo_solusi` enum('Approve','Revisi') DEFAULT NULL,
  `catlogo_solusi` text DEFAULT NULL,
  `prev_ui1_solusi` text NOT NULL,
  `status_ui1_solusi` enum('Approve','Revisi') DEFAULT NULL,
  `catui1_solusi` text DEFAULT NULL,
  `prev_ui2_solusi` text NOT NULL,
  `status_ui2_solusi` enum('Approve','Revisi') DEFAULT NULL,
  `catui2_solusi` text DEFAULT NULL,
  `prev_ui3_solusi` text NOT NULL,
  `status_ui3_solusi` enum('Approve','Revisi') DEFAULT NULL,
  `catui3_solusi` text DEFAULT NULL,
  `prev_ui4_solusi` text NOT NULL,
  `status_ui4_solusi` enum('Approve','Revisi') DEFAULT NULL,
  `catui4_solusi` text DEFAULT NULL,
  `tahun_buat_solusi` int(11) NOT NULL,
  `status_tahun_solusi` enum('Approve','Revisi') DEFAULT NULL,
  `cattahun_solusi` text DEFAULT NULL,
  `link_vid_solusi` text NOT NULL,
  `status_linkvid_solusi` enum('Approve','Revisi') DEFAULT NULL,
  `catlinkvid_solusi` text DEFAULT NULL,
  `link_prod_solusi` text NOT NULL,
  `status_linkprod_solusi` enum('Approve','Revisi') DEFAULT NULL,
  `catlinkprod_solusi` text DEFAULT NULL,
  `teknologi_solusi` text NOT NULL,
  `status_tekn_solusi` enum('Approve','Revisi') DEFAULT NULL,
  `cattekn_solusi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`id_solusi`, `id_proposal`, `nim_solusi`, `tanggal_submit_solusi`, `nama_solusi`, `status_nama_solusi`, `catnama_solusi`, `deskripsi_solusi`, `status_desk_solusi`, `catdesk_solusi`, `logo_solusi`, `status_logo_solusi`, `catlogo_solusi`, `prev_ui1_solusi`, `status_ui1_solusi`, `catui1_solusi`, `prev_ui2_solusi`, `status_ui2_solusi`, `catui2_solusi`, `prev_ui3_solusi`, `status_ui3_solusi`, `catui3_solusi`, `prev_ui4_solusi`, `status_ui4_solusi`, `catui4_solusi`, `tahun_buat_solusi`, `status_tahun_solusi`, `cattahun_solusi`, `link_vid_solusi`, `status_linkvid_solusi`, `catlinkvid_solusi`, `link_prod_solusi`, `status_linkprod_solusi`, `catlinkprod_solusi`, `teknologi_solusi`, `status_tekn_solusi`, `cattekn_solusi`) VALUES
(1, 1, 'M3118046', '0000-00-00 00:00:00', 'TREASURE LANDDD', NULL, NULL, 'deskripsiLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, 'EtgVdX7VIAUM6Ia.jpg', NULL, NULL, 'EtgVdKyVoAAq27-.jpg', NULL, NULL, 'EvezMAkVEAUWE2e1.jpg', NULL, NULL, 'EukxPmxVgAYQ8sF_(1).jpg', NULL, NULL, 'EtgViH0VcAESvbs1.jpg', NULL, NULL, 2020, NULL, NULL, 'link vidLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, 'link prodLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL, 'teknologiLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL, NULL),
(4, 3, 'M3118046', '0000-00-00 00:00:00', 'DDD', NULL, NULL, 'ddd', NULL, NULL, 'EvesHU-VoAYkG482.jpg', NULL, NULL, 'EvesHU-VoAYkG482.jpg', NULL, NULL, 'EvTULNNUcAMaAod1.jpg', NULL, NULL, 'EveX5PRUcAIAgTX2.jpg', NULL, NULL, 'EvezMAlU4AAlTEj3.jpg', NULL, NULL, 2222, NULL, NULL, 'fff', NULL, NULL, 'ffff', NULL, NULL, 'fff', NULL, NULL),
(6, 7, 'M3118045', '0000-00-00 00:00:00', 'NCT2021', NULL, NULL, 'hytgfhhtr', NULL, NULL, '20200301_161617.jpg', NULL, NULL, '20200301_165603.jpg', NULL, NULL, '20200301_165710.jpg', NULL, NULL, '20200301_172947.jpg', NULL, NULL, '20200301_173414.jpg', NULL, NULL, 2020, NULL, NULL, 'gththht', NULL, NULL, 'hthht', NULL, NULL, 'tthhth', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_start_up`
--

CREATE TABLE `tb_start_up` (
  `id_start_up` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nim_start_up` varchar(255) NOT NULL,
  `tanggal_submit_su` datetime NOT NULL,
  `nama_start_up` text NOT NULL,
  `status_nama_su` enum('Approve','Revisi') DEFAULT NULL,
  `catnama_su` text DEFAULT NULL,
  `visi_start_up` text NOT NULL,
  `status_visi_su` enum('Approve','Revisi') DEFAULT NULL,
  `catvisi_su` text DEFAULT NULL,
  `misi_start_up` text NOT NULL,
  `status_misi_su` enum('Approve','Revisi') DEFAULT NULL,
  `catmisi_su` text DEFAULT NULL,
  `struktur_start_up` text NOT NULL,
  `status_struktur_su` enum('Approve','Revisi') DEFAULT NULL,
  `catstruktur_su` text DEFAULT NULL,
  `logo_start_up` text NOT NULL,
  `status_logo_su` enum('Approve','Revisi') DEFAULT NULL,
  `catlogo_su` text DEFAULT NULL,
  `tagline_start_up` text NOT NULL,
  `status_tagline_su` enum('Approve','Revisi') DEFAULT NULL,
  `cattagline_su` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_start_up`
--

INSERT INTO `tb_start_up` (`id_start_up`, `id_proposal`, `nim_start_up`, `tanggal_submit_su`, `nama_start_up`, `status_nama_su`, `catnama_su`, `visi_start_up`, `status_visi_su`, `catvisi_su`, `misi_start_up`, `status_misi_su`, `catmisi_su`, `struktur_start_up`, `status_struktur_su`, `catstruktur_su`, `logo_start_up`, `status_logo_su`, `catlogo_su`, `tagline_start_up`, `status_tagline_su`, `cattagline_su`) VALUES
(8, 0, 'M3118045', '0000-00-00 00:00:00', 'jjj', 'Approve', '', 'jjj', 'Approve', '', 'jj', 'Revisi', '', 'EvelTeMVgAEZ8sj.jpg', 'Revisi', '', 'EvTULNNUcAMaAod.jpg', 'Revisi', '', 'jjj', 'Approve', ''),
(31, 0, 'M3118046', '0000-00-00 00:00:00', 'GGGGG', 'Approve', '', 'gggg', 'Approve', '', 'gggg', 'Approve', '', '', 'Approve', '', '', 'Approve', '', 'HHHH', 'Approve', ''),
(34, 3, 'M3118046', '0000-00-00 00:00:00', 'QEGFSBD', 'Approve', '', 'awsgdcb', 'Approve', '', 'asdgvawesd', 'Approve', '', '20200301_1129501.jpg', 'Approve', '', '20200301_112951.jpg', 'Approve', '', 'ASRDGBAWESD', 'Approve', ''),
(35, 4, 'M3118046', '0000-00-00 00:00:00', 'AWAWAW', 'Approve', '', 'waaaaaaaaaaaaaaaaaaaa', 'Approve', '', 'hmmmmmmmmmmmmmmmmmmm', 'Approve', '', '', 'Approve', '', '', 'Approve', '', 'HEH', 'Approve', ''),
(36, 5, 'M3118046', '0000-00-00 00:00:00', 'POIUYT', 'Approve', '', 'asdfghj', 'Approve', '', 'zxcvbnk,', 'Approve', '', '20200301_1535162.jpg', 'Approve', '', '20200301_1129502.jpg', 'Approve', '', 'MNBVCX', 'Approve', ''),
(37, 1, 'M3118046', '0000-00-00 00:00:00', 'TREASURE LAND', 'Revisi', 'dibenerin namanya okkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', '<p>1The Lorem<strong> ipsum text is derived from sections 1.10.32 and 1.10.33 of Cicero&#39;s &#39;De finibus bonorum et malorum&#39;.[7][8] The physical source may have been the 1914 Loeb Classical Library edition of D</strong>e finibus, where the Latin text, presented on the left-hand (even) pages, breaks off on page 34 with &quot;Neque porro quisquam est qui do-&quot; and continues on page 36 with &quot;lorem ipsum ...&quot;, suggesting that the galley type of that page was mixed up to make the dummy text seen today.[1] The discovery of the text&#39;s origin is attributed to Richard McClintock, a Latin scholar at Hampden&ndash;Sydney College. McClintock connected Lorem ipsum to Cicero&#39;s writing sometime before 1982 while searching for instances of the Latin word consectetur, which was rarely used in classical literature.[2] McClintock first published his discovery in a 1994 letter to the editor of Before &amp; After magazine, contesting the editor&#39;s earlier claim that Lorem ipsum held no meaning.[2] The relevant section of Cicero as printed in the source is reproduced below with fragments used in Lorem ipsum underlined. Letters in brackets were added to Lorem ipsum and were not present in the source text: [32] Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum[d] exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? [D]Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? [33] At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. What follows is H. Rackham&#39;s translation, as printed in the Loeb Classical Library edition, with words at least partially represented in Lorem ipsum underlined:[8]</p>\r\n', 'Revisi', '2', '<p>2The Lorem ipsum text is derived from sections 1.10.32 and 1.10.33 of Cicero&#39;s &#39;De finibus bonorum et malorum&#39;.[7][8] The physical source may have been the 1914 Loeb Classical <strong>Library edition of De finibus, where the Latin text, presented on the left-hand (even) pages, breaks off on page 34 with &quot;Neque porro quisquam est qui do-&quot; and continues on page 36 with &quot;lorem ipsum ...&quot;, suggesting that the galley type of that page was mixed up to make the dummy text seen today.[1] The discovery of the text&#39;s origin is attributed to Richard McClintock, a Latin schola</strong>r at Hampden&ndash;Sydney College. McClintock connected Lorem ipsum to Cicero&#39;s writing sometime before 1982 while searching for instances of the Latin word consectetur, which was rarely used in classical literature.[2] McClintock first published his discovery in a 1994 letter to the editor of Before &amp; After magazine, contesting the editor&#39;s earlier claim that Lorem ipsum held no meaning.[2] The relevant section of Cicero as printed in the source is reproduced below with fragments used in Lorem ipsum underlined. Letters in brackets were added to Lorem ipsum and were not present in the source text: [32] Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum[d] exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? [D]Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? [33] At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. What follows is H. Rackham&#39;s translation, as printed in the Loeb Classical Library edition, with words at least partially represented in Lorem ipsum underlined:[8]</p>\r\n', 'Approve', '3', '20200301_153133.jpg', 'Revisi', '4', '20200301_153151.jpg', 'Approve', '5', 'SEMANGAT', 'Revisi', '6'),
(38, 7, 'M3118045', '0000-00-00 00:00:00', 'NCT2020', 'Approve', '', 'neo', 'Approve', '', 'culture', 'Approve', '', '20200301_161519.jpg', 'Approve', '', '20200301_161736.jpg', 'Approve', '', 'TO THE WORLD', 'Approve', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tema`
--

CREATE TABLE `tb_tema` (
  `id_tema` int(11) NOT NULL,
  `kode_tema` varchar(25) NOT NULL,
  `tema_proposal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tema`
--

INSERT INTO `tb_tema` (`id_tema`, `kode_tema`, `tema_proposal`) VALUES
(1, 'IOT', 'Internet of Things'),
(2, 'GAME', 'Games'),
(3, 'AR', 'Augmented Reality'),
(4, 'VR', 'Virtual Reality'),
(5, 'SC', 'Security'),
(6, 'AND', 'Android'),
(7, 'SI', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_th_akademik`
--

CREATE TABLE `tb_th_akademik` (
  `id_th_akad` int(11) NOT NULL,
  `tahun_akad` varchar(255) NOT NULL,
  `semester_akad` enum('ganjil','genap') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_th_akademik`
--

INSERT INTO `tb_th_akademik` (`id_th_akad`, `tahun_akad`, `semester_akad`) VALUES
(1, '2020/2021', 'genap');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `uname_user` varchar(255) NOT NULL,
  `pass_user` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `uname_user`, `pass_user`, `nama_user`, `hak_akses`) VALUES
(1, 'admin01', 'admin01', 'admin 01', 1),
(2, 'dosen01', 'dosen01', 'dosen 01', 2),
(3, 'M3118046', 'M3118046', 'Kayla Shareta', 3),
(4, 'M3118045', 'M3118045', 'Kartika', 3),
(6, 'dosen02', 'dosen02', 'Dosen 02', 2),
(8, 'dosen03', 'dosen03', 'Dosen 03', 2),
(9, 'M3118001', 'M3118001', 'Abcd efgh', 3),
(10, 'admin02', 'admin02', 'admin02', 1),
(11, 'dosen04', 'dosen04', 'Dosen Empat', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_hak`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_biodatatim`
--
ALTER TABLE `tb_biodatatim`
  ADD PRIMARY KEY (`id_biodatatim`),
  ADD KEY `tb_biodatatim_ibfk_1` (`nim_biodata`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD UNIQUE KEY `nim_mhs` (`nim_mhs`);

--
-- Indexes for table `tb_master_proposal`
--
ALTER TABLE `tb_master_proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `tb_paper_pitching`
--
ALTER TABLE `tb_paper_pitching`
  ADD PRIMARY KEY (`id_pp`),
  ADD KEY `tb_paper_pitching_ibfk_1` (`nim_pp`);

--
-- Indexes for table `tb_plan`
--
ALTER TABLE `tb_plan`
  ADD PRIMARY KEY (`id_plan`),
  ADD KEY `tb_plan_ibfk_1` (`nim_plan`);

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`id_solusi`),
  ADD KEY `tb_solusi_ibfk_1` (`nim_solusi`);

--
-- Indexes for table `tb_start_up`
--
ALTER TABLE `tb_start_up`
  ADD PRIMARY KEY (`id_start_up`),
  ADD KEY `tb_start_up_ibfk_1` (`nim_start_up`);

--
-- Indexes for table `tb_tema`
--
ALTER TABLE `tb_tema`
  ADD PRIMARY KEY (`id_tema`),
  ADD UNIQUE KEY `tema_proposal` (`tema_proposal`);

--
-- Indexes for table `tb_th_akademik`
--
ALTER TABLE `tb_th_akademik`
  ADD PRIMARY KEY (`id_th_akad`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `uname_user` (`uname_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_hak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_artikel`
--
ALTER TABLE `tb_artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_biodatatim`
--
ALTER TABLE `tb_biodatatim`
  MODIFY `id_biodatatim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_master_proposal`
--
ALTER TABLE `tb_master_proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_paper_pitching`
--
ALTER TABLE `tb_paper_pitching`
  MODIFY `id_pp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_plan`
--
ALTER TABLE `tb_plan`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  MODIFY `id_solusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_start_up`
--
ALTER TABLE `tb_start_up`
  MODIFY `id_start_up` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_tema`
--
ALTER TABLE `tb_tema`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_th_akademik`
--
ALTER TABLE `tb_th_akademik`
  MODIFY `id_th_akad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_biodatatim`
--
ALTER TABLE `tb_biodatatim`
  ADD CONSTRAINT `tb_biodatatim_ibfk_1` FOREIGN KEY (`nim_biodata`) REFERENCES `tb_user` (`uname_user`);

--
-- Constraints for table `tb_paper_pitching`
--
ALTER TABLE `tb_paper_pitching`
  ADD CONSTRAINT `tb_paper_pitching_ibfk_1` FOREIGN KEY (`nim_pp`) REFERENCES `tb_user` (`uname_user`);

--
-- Constraints for table `tb_plan`
--
ALTER TABLE `tb_plan`
  ADD CONSTRAINT `tb_plan_ibfk_1` FOREIGN KEY (`nim_plan`) REFERENCES `tb_user` (`uname_user`);

--
-- Constraints for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD CONSTRAINT `tb_solusi_ibfk_1` FOREIGN KEY (`nim_solusi`) REFERENCES `tb_user` (`uname_user`);

--
-- Constraints for table `tb_start_up`
--
ALTER TABLE `tb_start_up`
  ADD CONSTRAINT `tb_start_up_ibfk_1` FOREIGN KEY (`nim_start_up`) REFERENCES `tb_user` (`uname_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
