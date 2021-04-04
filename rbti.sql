-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 05:58 AM
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
(1, 'dosen01', 'dosen01', 'dosen satu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hacker`
--

CREATE TABLE `tb_hacker` (
  `id_hacker` int(11) NOT NULL,
  `nama_hacker` varchar(255) NOT NULL,
  `alamat_hacker` text NOT NULL,
  `telp_hacker` int(11) NOT NULL,
  `email_hacker` varchar(255) NOT NULL,
  `tugas_hacker` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hipster`
--

CREATE TABLE `tb_hipster` (
  `id_hipster` int(11) NOT NULL,
  `nama_hipster` varchar(255) NOT NULL,
  `alamat_hipster` text NOT NULL,
  `telp_hipster` int(11) NOT NULL,
  `email_hipster` varchar(255) NOT NULL,
  `tugas_hipster` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hustler`
--

CREATE TABLE `tb_hustler` (
  `id_hustler` int(11) NOT NULL,
  `nama_hustler` varchar(255) NOT NULL,
  `alamat_hustler` text NOT NULL,
  `telp_hustler` int(11) NOT NULL,
  `email_hustler` varchar(255) NOT NULL,
  `tugas_hustler` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim_mhs` varchar(255) NOT NULL,
  `pass_mhs` varchar(255) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `kelas_mhs` enum('A','B','C','D') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mhs`, `nim_mhs`, `pass_mhs`, `nama_mhs`, `kelas_mhs`) VALUES
(3, 'M3118046', 'M3118046', 'Kayla Shareta Andien', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tb_paper_pitching`
--

CREATE TABLE `tb_paper_pitching` (
  `id_pp` int(11) NOT NULL,
  `latar_belakang_pp` text NOT NULL,
  `permasalahan_pp` text NOT NULL,
  `solusi_pp` text NOT NULL,
  `progres_pp` text NOT NULL,
  `kompetitor_pp` text NOT NULL,
  `kompetitor_2_pp` text NOT NULL,
  `target_pp` text NOT NULL,
  `data_pp` text NOT NULL,
  `prses_bisnis_pp` text NOT NULL,
  `tahapan_pp` text NOT NULL,
  `kelebihan_pp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_plan`
--

CREATE TABLE `tb_plan` (
  `id_plan` int(11) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `tb_solusi`
--

CREATE TABLE `tb_solusi` (
  `id_solusi` int(11) NOT NULL,
  `nama_solusi` varchar(255) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `tb_start_up`
--

CREATE TABLE `tb_start_up` (
  `id_start_up` int(11) NOT NULL,
  `nama_start_up` text NOT NULL,
  `visi_start_up` text NOT NULL,
  `misi_start_up` text NOT NULL,
  `struktur_start_up` text NOT NULL,
  `logo_start_up` text NOT NULL,
  `tagline_start_up` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tb_hacker`
--
ALTER TABLE `tb_hacker`
  ADD PRIMARY KEY (`id_hacker`);

--
-- Indexes for table `tb_hipster`
--
ALTER TABLE `tb_hipster`
  ADD PRIMARY KEY (`id_hipster`);

--
-- Indexes for table `tb_hustler`
--
ALTER TABLE `tb_hustler`
  ADD PRIMARY KEY (`id_hustler`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tb_paper_pitching`
--
ALTER TABLE `tb_paper_pitching`
  ADD PRIMARY KEY (`id_pp`);

--
-- Indexes for table `tb_plan`
--
ALTER TABLE `tb_plan`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indexes for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indexes for table `tb_start_up`
--
ALTER TABLE `tb_start_up`
  ADD PRIMARY KEY (`id_start_up`);

--
-- Indexes for table `tb_th_akademik`
--
ALTER TABLE `tb_th_akademik`
  ADD PRIMARY KEY (`id_th_akad`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_hacker`
--
ALTER TABLE `tb_hacker`
  MODIFY `id_hacker` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hipster`
--
ALTER TABLE `tb_hipster`
  MODIFY `id_hipster` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_hustler`
--
ALTER TABLE `tb_hustler`
  MODIFY `id_hustler` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_paper_pitching`
--
ALTER TABLE `tb_paper_pitching`
  MODIFY `id_pp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_plan`
--
ALTER TABLE `tb_plan`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_solusi`
--
ALTER TABLE `tb_solusi`
  MODIFY `id_solusi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_start_up`
--
ALTER TABLE `tb_start_up`
  MODIFY `id_start_up` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_th_akademik`
--
ALTER TABLE `tb_th_akademik`
  MODIFY `id_th_akad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
