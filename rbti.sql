-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 08:22 PM
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
  `nama_hustler` varchar(255) NOT NULL,
  `alamat_hustler` text NOT NULL,
  `telp_hustler` varchar(255) NOT NULL,
  `email_hustler` varchar(255) NOT NULL,
  `tugas_hustler` text NOT NULL,
  `nama_hipster` varchar(255) NOT NULL,
  `alamat_hipster` text NOT NULL,
  `telp_hipster` varchar(255) NOT NULL,
  `email_hipster` varchar(255) NOT NULL,
  `tugas_hipster` text NOT NULL,
  `nama_hacker` varchar(255) NOT NULL,
  `alamat_hacker` text NOT NULL,
  `telp_hacker` varchar(255) NOT NULL,
  `email_hacker` varchar(255) NOT NULL,
  `tugas_hacker` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_biodatatim`
--

INSERT INTO `tb_biodatatim` (`id_biodatatim`, `id_proposal`, `nim_biodata`, `nama_hustler`, `alamat_hustler`, `telp_hustler`, `email_hustler`, `tugas_hustler`, `nama_hipster`, `alamat_hipster`, `telp_hipster`, `email_hipster`, `tugas_hipster`, `nama_hacker`, `alamat_hacker`, `telp_hacker`, `email_hacker`, `tugas_hacker`) VALUES
(1, 1, 'M3118046', 'KAYLA SHARETAA', 'Jl. Kudus Jepara, Papringan 7/4 Kaliwungu, Kudus hustler', '082213588906', 'sskaylandn@gmail.com', 'hustler Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'KAYLA SHARETA A', 'dd hipster', '0821388493857', 'kayla@yahoo.com', 'hipster Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'KAYLA SHARETA ANDIEN', 'kudus, jawa tengah hacker', '08221358833333', 'shareta@gmail.com', 'hacker Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat..Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.'),
(3, 0, 'M3118045', 'FF', 'ff', 'ff', 'ff', 'ff', 'FF', 'ff', 'ff', 'ff', 'ff', 'FF', 'ff', 'ff', 'ff', 'ff'),
(5, 3, 'M3118046', 'YHTN', 'nytjty', '4434565', 'hnjyjy', 'ytjj', 'JYJYTJ', 'jyjyyej', '24526', 'yjytjjt', 'jyyjttttt', 'YJYJTEJY', 'ghnytn', '9878979', 'yhjtyj', 'jyytjyj'),
(6, 7, 'M3118045', 'ZHONG CHENLE', 'shanghai', '567678', 'hhyy@grgrg.ttt', 'rtrrhtht', 'ZHONG', 'china', '788788', 'njyhjh@rfgr.fef', 'grrggr', 'CHENLE', 'seoul', '875746', 'ngngfn@kfgrjo.knfre', 'reggg'),
(7, 5, 'M3118046', 'JUJYMM', 'jmujn', '777', 'uumj', 'jyjn', 'JYYYJM', 'yjyuj', '888888888889', 'l.,k,k', 'jmmm', 'JHM', 'ujn', '8877', 'jmjhm', 'hjmm');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id_dosen` int(11) NOT NULL,
  `uname_dosen` varchar(255) NOT NULL,
  `pass_dosen` varchar(255) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `uname_dosen`, `pass_dosen`, `nama_dosen`) VALUES
(1, 'dosen01', 'dosen01', 'dosen satu'),
(4, 'dosen03', 'dosen03', 'Dosen 03'),
(5, 'dosen02', 'dosen02', 'Dosen 02');

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
(1, 'TI A'),
(2, 'TI B'),
(3, 'TI C'),
(5, 'TI D');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim_mhs` varchar(255) NOT NULL,
  `pass_mhs` varchar(255) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `kelas_mhs` enum('A','B','C','D') NOT NULL,
  `dosen_mhs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mhs`, `nim_mhs`, `pass_mhs`, `nama_mhs`, `kelas_mhs`, `dosen_mhs`) VALUES
(3, 'M3118046', 'M3118046', 'Kayla Shareta Andien', 'B', 'dosen01'),
(5, 'M3118001', 'M3118001', 'Abcd Efgh', 'A', 'dosen02'),
(6, 'M3118045', 'M3118045', 'Kartika Dewi Larasati', 'B', 'dosen01');

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
(1, 'M3118046', 'KAYLAAAAAA', ''),
(3, 'M3118046', 'JUDUL;', ''),
(4, 'M3118046', 'PROPOO', ''),
(5, 'M3118046', 'QWERTY', ''),
(6, 'M3118001', 'ddddd', ''),
(7, 'M3118045', 'NEO CULTURE TECHNOLOGI', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paper_pitching`
--

CREATE TABLE `tb_paper_pitching` (
  `id_pp` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nim_pp` varchar(255) NOT NULL,
  `latar_belakang_pp` text NOT NULL,
  `permasalahan_pp` text NOT NULL,
  `solusi_pp` text NOT NULL,
  `progres_pp` text NOT NULL,
  `kompetitor_pp` text NOT NULL,
  `kompetitor2_pp` text NOT NULL,
  `target_pp` text NOT NULL,
  `data_pp` text NOT NULL,
  `proses_bisnis_pp` text NOT NULL,
  `proses_bisnis2_pp` text NOT NULL,
  `tahapan_pp` text NOT NULL,
  `kelebihan_pp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_paper_pitching`
--

INSERT INTO `tb_paper_pitching` (`id_pp`, `id_proposal`, `nim_pp`, `latar_belakang_pp`, `permasalahan_pp`, `solusi_pp`, `progres_pp`, `kompetitor_pp`, `kompetitor2_pp`, `target_pp`, `data_pp`, `proses_bisnis_pp`, `proses_bisnis2_pp`, `tahapan_pp`, `kelebihan_pp`) VALUES
(2, 1, 'M3118046', 'hwofhoiehe ieowofhoifhwofhf oehwfofhfohhe ohowefhofhofh oefwhfohfeh oefhofehfohfoh ofhofhofheofh owefhoefhofhofh ofoefhohfwfh ohfoefhofheofi owfhoefhofhfh owfhoefhofhfohw ohd wxxhiwh fvb kfboebf bcwefboicb dowhohvnveof ofhnofboeid nfowbfiofo cbfowefboief fbwofbeoifei foieifnowifeoifn oefhoefihewf\r\nnowehowefhfoe oifwhoeiwfhfh fieohfofho ofoiweeofefobfo oihceoifeiofher', 'ssLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ssddddLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sskkkkLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ssffffLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sswwwwLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ssttttLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ssiiiiLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ssooooLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Et16DOFUcAAChYa1.jpg', 'dwfgewhrLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'kkkkkLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(5, 3, 'M3118046', 'htyh', 'ythhyhy', 'hyhyhy', 'hhytyh', 'hyhyhy', 'hyhyhy', 'hyhyh', 'hyyhhyh', 'jjuujju', '20200301_1129504.jpg', 'jujujuju', 'jujju'),
(7, 4, 'M3118046', 'hnhgnhg', 'hnnhnhg', 'nhnhnhg', 'nhnhggnh', 'nhnhnh', 'hnnhnh', 'nhnhnh', 'nhnhhn', 'nhnhhn', '20200301_1532051.jpg', 'nhnnh', 'hnnh'),
(8, 7, 'M3118045', 'erfgrg', 'tgggtrgt', 'grbgbhgb', 'bfgbgb', 'bgbgb', 'bgthbrtgb', 'bgbgb', 'vbbrtghtr', 'trhtrhb', '', 'gbtnyhtr', 'trhtth');

-- --------------------------------------------------------

--
-- Table structure for table `tb_plan`
--

CREATE TABLE `tb_plan` (
  `id_plan` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nim_plan` varchar(255) NOT NULL,
  `cust_plan` text NOT NULL,
  `value_plan` text NOT NULL,
  `channels_plan` text NOT NULL,
  `relation_plan` text NOT NULL,
  `key_act_plan` text NOT NULL,
  `key_res_plan` text NOT NULL,
  `key_partner_plan` text NOT NULL,
  `cost_plan` text NOT NULL,
  `revenue_plan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_plan`
--

INSERT INTO `tb_plan` (`id_plan`, `id_proposal`, `nim_plan`, `cust_plan`, `value_plan`, `channels_plan`, `relation_plan`, `key_act_plan`, `key_res_plan`, `key_partner_plan`, `cost_plan`, `revenue_plan`) VALUES
(2, 1, 'M3118046', 'custLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis ', 'dLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'fLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'gLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'hLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'jLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'kLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'mLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 0, 'M3118045', 'sss', 'wsa', 'e', 'r', 't', 'y', 'u', 'i', 'o'),
(5, 3, 'M3118046', 'thyhyhyhh', 'jkkiu8ikhh', 'gbbgbgb', 'bhbhyythy', 'yhyhbgbdt', 'bgbnhjyu', 'gthyynb', 'hnhnyun', 'yhythrth'),
(6, 7, 'M3118045', 'ythyhth', 'yhtjyj', 'jymm', 'mhjmymy', 'yujjjy', 'hyhgb', 'cbbvb', 'hgmhm', 'mhmhjm'),
(7, 5, 'M3118046', 'ggg', 'ggg', 'ttt', 'ttt', 'ttt', 'ttt', 'rrr', 'hjj', 'nnn');

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `id_solusi` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nim_solusi` varchar(255) NOT NULL,
  `nama_solusi` varchar(255) NOT NULL,
  `deskripsi_solusi` text NOT NULL,
  `logo_solusi` text NOT NULL,
  `prev_ui1_solusi` text NOT NULL,
  `prev_ui2_solusi` text NOT NULL,
  `prev_ui3_solusi` text NOT NULL,
  `prev_ui4_solusi` text NOT NULL,
  `tahun_buat_solusi` int(11) NOT NULL,
  `link_vid_solusi` text NOT NULL,
  `link_prod_solusi` text NOT NULL,
  `teknologi_solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_solusi`
--

INSERT INTO `tb_solusi` (`id_solusi`, `id_proposal`, `nim_solusi`, `nama_solusi`, `deskripsi_solusi`, `logo_solusi`, `prev_ui1_solusi`, `prev_ui2_solusi`, `prev_ui3_solusi`, `prev_ui4_solusi`, `tahun_buat_solusi`, `link_vid_solusi`, `link_prod_solusi`, `teknologi_solusi`) VALUES
(1, 1, 'M3118046', 'TREASURE LANDDD', 'deskripsiLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'EtgVdX7VIAUM6Ia.jpg', 'EtgVdKyVoAAq27-.jpg', 'EvezMAkVEAUWE2e1.jpg', 'EukxPmxVgAYQ8sF_(1).jpg', 'EtgViH0VcAESvbs1.jpg', 2020, 'link vidLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'link prodLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'teknologiLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 3, 'M3118046', 'DDD', 'ddd', 'EvesHU-VoAYkG482.jpg', 'EvesHU-VoAYkG482.jpg', 'EvTULNNUcAMaAod1.jpg', 'EveX5PRUcAIAgTX2.jpg', 'EvezMAlU4AAlTEj3.jpg', 2222, 'fff', 'ffff', 'fff'),
(6, 7, 'M3118045', 'NCT2021', 'hytgfhhtr', '20200301_161617.jpg', '20200301_165603.jpg', '20200301_165710.jpg', '20200301_172947.jpg', '20200301_173414.jpg', 2020, 'gththht', 'hthht', 'tthhth');

-- --------------------------------------------------------

--
-- Table structure for table `tb_start_up`
--

CREATE TABLE `tb_start_up` (
  `id_start_up` int(11) NOT NULL,
  `id_proposal` int(11) NOT NULL,
  `nim_start_up` varchar(255) NOT NULL,
  `nama_start_up` text NOT NULL,
  `visi_start_up` text NOT NULL,
  `misi_start_up` text NOT NULL,
  `struktur_start_up` text NOT NULL,
  `logo_start_up` text NOT NULL,
  `tagline_start_up` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_start_up`
--

INSERT INTO `tb_start_up` (`id_start_up`, `id_proposal`, `nim_start_up`, `nama_start_up`, `visi_start_up`, `misi_start_up`, `struktur_start_up`, `logo_start_up`, `tagline_start_up`) VALUES
(8, 0, 'M3118045', 'jjj', 'jjj', 'jj', 'EvelTeMVgAEZ8sj.jpg', 'EvTULNNUcAMaAod.jpg', 'jjj'),
(31, 0, 'M3118046', 'GGGGG', 'gggg', 'gggg', '', '', 'HHHH'),
(34, 3, 'M3118046', 'QEGFSBD', 'awsgdcb', 'asdgvawesd', '20200301_1129501.jpg', '20200301_112951.jpg', 'ASRDGBAWESD'),
(35, 4, 'M3118046', 'AWAWAW', 'waaaaaaaaaaaaaaaaaaaa', 'hmmmmmmmmmmmmmmmmmmm', '', '', 'HEH'),
(36, 5, 'M3118046', 'POIUYT', 'asdfghj', 'zxcvbnk,', '20200301_1535162.jpg', '20200301_1129502.jpg', 'MNBVCX'),
(37, 1, 'M3118046', 'TREASURE LAND', 'The Lorem ipsum text is derived from sections 1.10.32 and 1.10.33 of Cicero\'s \'De finibus bonorum et malorum\'.[7][8] The physical source may have been the 1914 Loeb Classical Library edition of De finibus, where the Latin text, presented on the left-hand (even) pages, breaks off on page 34 with \"Neque porro quisquam est qui do-\" and continues on page 36 with \"lorem ipsum ...\", suggesting that the galley type of that page was mixed up to make the dummy text seen today.[1]\r\n\r\nThe discovery of the text\'s origin is attributed to Richard McClintock, a Latin scholar at Hampden–Sydney College. McClintock connected Lorem ipsum to Cicero\'s writing sometime before 1982 while searching for instances of the Latin word consectetur, which was rarely used in classical literature.[2] McClintock first published his discovery in a 1994 letter to the editor of Before & After magazine, contesting the editor\'s earlier claim that Lorem ipsum held no meaning.[2]\r\n\r\nThe relevant section of Cicero as printed in the source is reproduced below with fragments used in Lorem ipsum underlined. Letters in brackets were added to Lorem ipsum and were not present in the source text:\r\n\r\n[32] Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum[d] exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? [D]Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? [33] At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\r\n\r\nWhat follows is H. Rackham\'s translation, as printed in the Loeb Classical Library edition, with words at least partially represented in Lorem ipsum underlined:[8]', 'The Lorem ipsum text is derived from sections 1.10.32 and 1.10.33 of Cicero\'s \'De finibus bonorum et malorum\'.[7][8] The physical source may have been the 1914 Loeb Classical Library edition of De finibus, where the Latin text, presented on the left-hand (even) pages, breaks off on page 34 with \"Neque porro quisquam est qui do-\" and continues on page 36 with \"lorem ipsum ...\", suggesting that the galley type of that page was mixed up to make the dummy text seen today.[1]\r\n\r\nThe discovery of the text\'s origin is attributed to Richard McClintock, a Latin scholar at Hampden–Sydney College. McClintock connected Lorem ipsum to Cicero\'s writing sometime before 1982 while searching for instances of the Latin word consectetur, which was rarely used in classical literature.[2] McClintock first published his discovery in a 1994 letter to the editor of Before & After magazine, contesting the editor\'s earlier claim that Lorem ipsum held no meaning.[2]\r\n\r\nThe relevant section of Cicero as printed in the source is reproduced below with fragments used in Lorem ipsum underlined. Letters in brackets were added to Lorem ipsum and were not present in the source text:\r\n\r\n[32] Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam est, qui dolorem ipsum, quia dolor sit amet consectetur adipisci[ng] velit, sed quia non numquam [do] eius modi tempora inci[di]dunt, ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum[d] exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? [D]Quis autem vel eum iure reprehenderit, qui in ea voluptate velit esse, quam nihil molestiae consequatur, vel illum, qui dolorem eum fugiat, quo voluptas nulla pariatur? [33] At vero eos et accusamus et iusto odio dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores et quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime placeat, facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet, ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\r\n\r\nWhat follows is H. Rackham\'s translation, as printed in the Loeb Classical Library edition, with words at least partially represented in Lorem ipsum underlined:[8]', '20200301_1129506.jpg', '20200301_1531336.jpg', 'SEMANGAT'),
(38, 7, 'M3118045', 'NCT2020', 'neo', 'culture', '20200301_161519.jpg', '20200301_161736.jpg', 'TO THE WORLD');

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
(10, 'admin02', 'admin02', 'admin02', 1);

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
  MODIFY `id_biodatatim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_master_proposal`
--
ALTER TABLE `tb_master_proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
