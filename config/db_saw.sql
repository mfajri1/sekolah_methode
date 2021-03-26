-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 08:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_kelas`
--

CREATE TABLE `ms_kelas` (
  `kelas_id` int(11) NOT NULL,
  `kelas_nama` varchar(20) NOT NULL,
  `kelas_jumlah` int(11) NOT NULL,
  `kelas_status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_kelas`
--

INSERT INTO `ms_kelas` (`kelas_id`, `kelas_nama`, `kelas_jumlah`, `kelas_status`) VALUES
(1, 'VII 1', 20, 'Unggul'),
(2, 'VII 2', 20, 'Reguler'),
(3, 'VII 3', 20, 'Reguler'),
(9, 'VIII 1', 20, 'Unggul'),
(10, 'VIII 2', 20, 'Reguler'),
(11, 'VIII 3', 20, 'Reguler');

-- --------------------------------------------------------

--
-- Table structure for table `ms_kriteria`
--

CREATE TABLE `ms_kriteria` (
  `kriteria_id` int(11) NOT NULL,
  `kriteria_variabel` enum('SB','B','C','K') NOT NULL COMMENT '''Sangat Baik''. ''Baik'', ''Cukup'', ''Kurang''',
  `kriteria_bobot` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_kriteria`
--

INSERT INTO `ms_kriteria` (`kriteria_id`, `kriteria_variabel`, `kriteria_bobot`) VALUES
(1, 'SB', '5'),
(2, 'B', '4'),
(3, 'C', '3'),
(4, 'K', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `hasil_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `hasil_nilai` double NOT NULL,
  `hasil_sikap` double NOT NULL,
  `hasil_peringkat` double NOT NULL,
  `hasil_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`hasil_id`, `siswa_id`, `hasil_nilai`, `hasil_sikap`, `hasil_peringkat`, `hasil_total`) VALUES
(1, 1, 0.8, 0.25, 0.25, 1.3),
(2, 2, 0.8, 0.2, 0.25, 1.25),
(3, 3, 0.8, 0.2, 0.25, 1.25),
(4, 4, 0.4, 0.25, 0.25, 0.9),
(5, 5, 0.4, 0.25, 0.25, 0.9),
(6, 6, 0.4, 0.25, 0.2, 0.85),
(7, 7, 0.4, 0.25, 0.2, 0.85),
(8, 8, 0.4, 0.25, 0.2, 0.85),
(9, 9, 0.4, 0.25, 0.2, 0.85),
(10, 10, 0.4, 0.2, 0.2, 0.8),
(11, 11, 0.4, 0.25, 0.15, 0.8),
(12, 12, 0.4, 0.25, 0.15, 0.8),
(13, 13, 0.4, 0.25, 0.15, 0.8),
(14, 14, 0.4, 0.25, 0.15, 0.8),
(15, 15, 0.4, 0.25, 0.15, 0.8),
(16, 16, 0.4, 0.2, 0.1, 0.7),
(17, 17, 0.4, 0.25, 0.1, 0.75),
(18, 18, 0.4, 0.25, 0.1, 0.75),
(19, 19, 0.4, 0.25, 0.1, 0.75),
(20, 20, 0.4, 0.25, 0.1, 0.75),
(21, 21, 0.4, 0.2, 0.25, 0.85),
(22, 22, 0.4, 0.2, 0.25, 0.85),
(23, 23, 0.4, 0.25, 0.25, 0.9),
(24, 24, 0.4, 0.2, 0.25, 0.85),
(25, 25, 0.4, 0.2, 0.25, 0.85),
(26, 26, 0.4, 0.2, 0.2, 0.8),
(27, 27, 0.4, 0.2, 0.2, 0.8),
(28, 28, 0.4, 0.2, 0.2, 0.8),
(29, 29, 0.4, 0.2, 0.2, 0.8),
(30, 30, 0.4, 0.2, 0.2, 0.8),
(31, 31, 0.4, 0.25, 0.15, 0.8),
(32, 32, 0.4, 0.2, 0.15, 0.75),
(33, 33, 0.4, 0.25, 0.15, 0.8),
(34, 34, 0.4, 0.2, 0.15, 0.75),
(35, 35, 0.4, 0.25, 0.15, 0.8),
(36, 36, 0.4, 0.25, 0.1, 0.75),
(37, 37, 0.4, 0.2, 0.1, 0.7),
(38, 38, 0.4, 0.2, 0.1, 0.7),
(39, 39, 0.4, 0.2, 0.1, 0.7),
(40, 40, 0.3, 0.25, 0.1, 0.65),
(41, 41, 0.4, 0.25, 0.25, 0.9),
(42, 42, 0.4, 0.25, 0.25, 0.9),
(43, 43, 0.4, 0.2, 0.25, 0.85),
(44, 44, 0.4, 0.2, 0.25, 0.85),
(45, 45, 0.4, 0.25, 0.25, 0.9),
(46, 46, 0.4, 0.2, 0.2, 0.8),
(47, 47, 0.4, 0.25, 0.2, 0.85),
(48, 48, 0.4, 0.25, 0.2, 0.85),
(49, 49, 0.4, 0.25, 0.2, 0.85),
(50, 50, 0.4, 0.2, 0.2, 0.8),
(51, 51, 0.4, 0.25, 0.15, 0.8),
(52, 52, 0.4, 0.2, 0.15, 0.75),
(53, 53, 0.4, 0.25, 0.15, 0.8),
(54, 54, 0.4, 0.25, 0.15, 0.8),
(55, 55, 0.4, 0.2, 0.15, 0.75),
(56, 56, 0.4, 0.25, 0.1, 0.75),
(57, 57, 0.4, 0.2, 0.1, 0.7),
(58, 58, 0.4, 0.2, 0.1, 0.7),
(59, 59, 0.4, 0.2, 0.1, 0.7),
(60, 60, 0.4, 0.2, 0.1, 0.7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `nilai_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `nilai_bahasa_indonesia` double NOT NULL,
  `nilai_bahasa_inggris` double NOT NULL,
  `nilai_matematika` double NOT NULL,
  `nilai_ipa` double NOT NULL,
  `nilai_agama` double NOT NULL,
  `nilai_rata_rata` double NOT NULL,
  `nilai_bobot` enum('SB','B','C','K') NOT NULL COMMENT '''Sangat Baik'', ''Baik'',''Cukup'',''Kurang'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`nilai_id`, `siswa_id`, `nilai_bahasa_indonesia`, `nilai_bahasa_inggris`, `nilai_matematika`, `nilai_ipa`, `nilai_agama`, `nilai_rata_rata`, `nilai_bobot`) VALUES
(1, 1, 90.5, 90, 90, 89, 90.5, 90, 'B'),
(2, 2, 90, 92, 92, 85, 90, 89.8, 'B'),
(3, 3, 88.5, 89, 92, 90.5, 88.5, 89.7, 'B'),
(4, 4, 89.5, 88, 90, 90.5, 89.5, 89.5, 'B'),
(5, 5, 90, 90, 91, 91.5, 90, 90.5, 'B'),
(6, 6, 89, 91.5, 90.5, 91, 89, 90.2, 'B'),
(7, 7, 90.5, 88.5, 89, 88, 90.5, 89.3, 'B'),
(8, 8, 90, 89.5, 89, 88, 90, 89.3, 'B'),
(9, 9, 89, 85.5, 89.5, 90, 89, 88.6, 'B'),
(10, 10, 87, 90.5, 88.5, 90, 87, 88.6, 'B'),
(11, 11, 89.5, 89, 89.5, 88.5, 89.5, 89.2, 'B'),
(12, 12, 90.5, 86.5, 89, 85.5, 90.5, 88.4, 'B'),
(13, 13, 88, 89.5, 91, 89, 88, 89.1, 'B'),
(14, 14, 89.5, 89.5, 90.5, 84, 89.5, 88.6, 'B'),
(15, 15, 89, 87.5, 88, 91, 89, 88.9, 'B'),
(16, 16, 89, 93, 90, 80, 89, 88.2, 'B'),
(17, 17, 90, 84.5, 90, 86, 90, 88.1, 'B'),
(18, 18, 88.5, 83, 89, 86, 88.5, 87, 'B'),
(19, 19, 89.5, 87.5, 90, 84.5, 89.5, 88.2, 'B'),
(20, 20, 88, 89, 90.5, 81.5, 88, 87.4, 'B'),
(21, 21, 92.5, 87.5, 91.5, 87.5, 90, 89.8, 'B'),
(22, 22, 90.5, 92.5, 90, 83, 88, 88.8, 'B'),
(23, 23, 93, 91.5, 90.5, 85, 88.5, 89.7, 'B'),
(24, 24, 93.5, 89, 90, 88.5, 85.5, 89.3, 'B'),
(25, 25, 92, 89, 87, 85, 87, 88, 'B'),
(26, 26, 92, 89.5, 86, 84, 86.5, 87.6, 'B'),
(27, 27, 90, 88.5, 87.5, 79, 88.5, 86.7, 'B'),
(28, 28, 91.5, 87, 85, 80.5, 88, 86.4, 'B'),
(29, 29, 92.5, 83.5, 85, 90, 85, 87.2, 'B'),
(30, 30, 90, 86, 86, 84.5, 88, 86.9, 'B'),
(31, 31, 88.5, 85, 83, 84, 88.5, 85.8, 'B'),
(32, 32, 87, 82, 85, 89, 87.5, 86.1, 'B'),
(33, 33, 87, 83.5, 83, 77, 87.5, 83.6, 'B'),
(34, 34, 89.5, 79.5, 85.5, 75.5, 89, 83.8, 'B'),
(35, 35, 83.5, 88.5, 83, 76, 87.5, 83.7, 'B'),
(36, 36, 87, 83.5, 83, 75, 88.5, 83.4, 'B'),
(37, 37, 88.5, 83, 83.5, 75, 87, 83.4, 'B'),
(38, 38, 88.5, 81, 84, 79, 87.5, 84, 'B'),
(39, 39, 91, 82.5, 83.5, 75, 84.5, 83.3, 'B'),
(40, 40, 86.5, 84, 83, 75, 84.5, 82.6, 'C'),
(41, 41, 93, 92, 85.5, 88.5, 89.5, 89.7, 'B'),
(42, 42, 91.5, 92, 85.5, 88.5, 89.5, 89.4, 'B'),
(43, 43, 93.5, 96, 89, 83.5, 89.5, 90.3, 'B'),
(44, 44, 89.5, 84, 83, 85.5, 89.5, 86.3, 'B'),
(45, 45, 93, 93, 82, 81, 88.5, 87.5, 'B'),
(46, 46, 89, 85, 82, 84.5, 89, 85.9, 'B'),
(47, 47, 93.5, 89.5, 84, 81, 89, 87.4, 'B'),
(48, 48, 91, 81.5, 83.5, 85, 87.5, 85.7, 'B'),
(49, 49, 90.5, 78.5, 82.5, 80.5, 89.5, 84.3, 'B'),
(50, 50, 90.5, 80.5, 82, 81, 88, 84.4, 'B'),
(51, 51, 91.5, 81, 82.5, 82.5, 88.5, 85.2, 'B'),
(52, 52, 89.5, 79.5, 80, 83.5, 88, 84.1, 'B'),
(53, 53, 89.5, 83.5, 79, 84.5, 89, 85.1, 'B'),
(54, 54, 89.5, 80.5, 80.5, 76, 89, 83.1, 'B'),
(55, 55, 89.5, 92, 79.5, 80.5, 89, 86.1, 'B'),
(56, 56, 90.5, 80.5, 80.5, 81, 89, 84.3, 'B'),
(57, 57, 93, 81.5, 80, 79, 88.5, 84.4, 'B'),
(58, 58, 91.5, 84.5, 80, 82.5, 87, 85.1, 'B'),
(59, 59, 89, 81, 80, 79.5, 88, 83.5, 'B'),
(60, 60, 90, 78.5, 82, 80.5, 87.5, 83.7, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_hasil`
--

CREATE TABLE `tb_nilai_hasil` (
  `nh_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `nilai_bobot` enum('SB','B','C','K') NOT NULL COMMENT '''Sangat Baik'',''Baik'',''Cukup'',''Kurang''',
  `sikap_bobot` enum('SB','B','C','K') NOT NULL COMMENT '''Sangat Baik'',''Baik'',''Cukup'',''Kurang''',
  `peringkat_bobot` enum('SB','B','C','K') NOT NULL COMMENT '''Sangat Baik'',''Baik'',''Cukup'',''Kurang'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai_hasil`
--

INSERT INTO `tb_nilai_hasil` (`nh_id`, `siswa_id`, `nilai_bobot`, `sikap_bobot`, `peringkat_bobot`) VALUES
(1, 1, 'B', 'SB', 'SB'),
(2, 2, 'B', 'B', 'SB'),
(3, 3, 'B', 'B', 'SB'),
(4, 4, 'B', 'SB', 'SB'),
(5, 5, 'B', 'SB', 'SB'),
(6, 6, 'B', 'SB', 'B'),
(7, 7, 'B', 'SB', 'B'),
(8, 8, 'B', 'SB', 'B'),
(9, 9, 'B', 'SB', 'B'),
(10, 10, 'B', 'B', 'B'),
(11, 11, 'B', 'SB', 'C'),
(12, 12, 'B', 'SB', 'C'),
(13, 13, 'B', 'SB', 'C'),
(14, 14, 'B', 'SB', 'C'),
(15, 15, 'B', 'SB', 'C'),
(16, 16, 'B', 'B', 'K'),
(17, 17, 'B', 'SB', 'K'),
(18, 18, 'B', 'SB', 'K'),
(19, 19, 'B', 'SB', 'K'),
(20, 20, 'B', 'SB', 'K'),
(21, 21, 'B', 'B', 'SB'),
(22, 22, 'B', 'B', 'SB'),
(23, 23, 'B', 'SB', 'SB'),
(24, 24, 'B', 'B', 'SB'),
(25, 25, 'B', 'B', 'SB'),
(26, 26, 'B', 'B', 'B'),
(27, 27, 'B', 'B', 'B'),
(28, 28, 'B', 'B', 'B'),
(29, 29, 'B', 'B', 'B'),
(30, 30, 'B', 'B', 'B'),
(31, 31, 'B', 'SB', 'C'),
(32, 32, 'B', 'B', 'C'),
(33, 33, 'B', 'SB', 'C'),
(34, 34, 'B', 'B', 'C'),
(35, 35, 'B', 'SB', 'C'),
(36, 36, 'B', 'SB', 'K'),
(37, 37, 'B', 'B', 'K'),
(38, 38, 'B', 'B', 'K'),
(39, 39, 'B', 'B', 'K'),
(40, 40, 'C', 'SB', 'K'),
(41, 41, 'B', 'SB', 'SB'),
(42, 42, 'B', 'SB', 'SB'),
(43, 43, 'B', 'B', 'SB'),
(44, 44, 'B', 'B', 'SB'),
(45, 45, 'B', 'SB', 'SB'),
(46, 46, 'B', 'B', 'B'),
(47, 47, 'B', 'SB', 'B'),
(48, 48, 'B', 'SB', 'B'),
(49, 49, 'B', 'SB', 'B'),
(50, 50, 'B', 'B', 'B'),
(51, 51, 'B', 'SB', 'C'),
(52, 52, 'B', 'B', 'C'),
(53, 53, 'B', 'SB', 'C'),
(54, 54, 'B', 'SB', 'C'),
(55, 55, 'B', 'B', 'C'),
(56, 56, 'B', 'SB', 'K'),
(57, 57, 'B', 'B', 'K'),
(58, 58, 'B', 'B', 'K'),
(59, 59, 'B', 'B', 'K'),
(60, 60, 'B', 'B', 'K');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_pengujian`
--

CREATE TABLE `tb_nilai_pengujian` (
  `np_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `np_c1` double NOT NULL,
  `np_c2` double NOT NULL,
  `np_c3` double NOT NULL,
  `np_hasil` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai_pengujian`
--

INSERT INTO `tb_nilai_pengujian` (`np_id`, `siswa_id`, `np_c1`, `np_c2`, `np_c3`, `np_hasil`) VALUES
(1, 1, 1, 0.8, 1, 2.8),
(2, 2, 0.8, 0.8, 1, 2.6),
(3, 3, 0.8, 0.8, 1, 2.6),
(4, 4, 1, 0.8, 1, 2.8),
(5, 5, 1, 0.8, 1, 2.8),
(6, 6, 1, 0.8, 0.8, 2.6),
(7, 7, 1, 0.8, 0.8, 2.6),
(8, 8, 1, 0.8, 0.8, 2.6),
(9, 9, 1, 0.8, 0.8, 2.6),
(10, 10, 0.8, 0.8, 0.8, 2.4),
(11, 11, 1, 0.8, 0.6, 2.4),
(12, 12, 1, 0.8, 0.6, 2.4),
(13, 13, 1, 0.8, 0.6, 2.4),
(14, 14, 1, 0.8, 0.6, 2.4),
(15, 15, 1, 0.8, 0.6, 2.4),
(16, 16, 0.8, 0.8, 0.4, 1.8),
(17, 17, 1, 0.8, 0.4, 2),
(18, 18, 1, 0.8, 0.4, 2),
(19, 19, 1, 0.8, 0.4, 2),
(20, 20, 1, 0.8, 0.4, 2),
(21, 21, 0.8, 0.8, 1, 2.6),
(22, 22, 0.8, 0.8, 1, 2.6),
(23, 23, 1, 0.8, 1, 2.8),
(24, 24, 0.8, 0.8, 1, 2.6),
(25, 25, 0.8, 0.8, 1, 2.6),
(26, 26, 0.8, 0.8, 0.8, 2.4),
(27, 27, 0.8, 0.8, 0.8, 2.4),
(28, 28, 0.8, 0.8, 0.8, 2.4),
(29, 29, 0.8, 0.8, 0.8, 2.4),
(30, 30, 0.8, 0.8, 0.8, 2.4),
(31, 31, 1, 0.8, 0.6, 2.4),
(32, 32, 0.8, 0.8, 0.6, 2.2),
(33, 33, 1, 0.8, 0.6, 2.4),
(34, 34, 0.8, 0.8, 0.6, 2.2),
(35, 35, 1, 0.8, 0.6, 2.4),
(36, 36, 1, 0.8, 0.4, 2),
(37, 37, 0.8, 0.8, 0.4, 1.8),
(38, 38, 0.8, 0.8, 0.4, 1.8),
(39, 39, 0.8, 0.8, 0.4, 1.8),
(40, 40, 1, 0.6, 0.4, 1.8),
(41, 41, 1, 0.8, 1, 2.8),
(42, 42, 1, 0.8, 1, 2.8),
(43, 43, 0.8, 0.8, 1, 2.6),
(44, 44, 0.8, 0.8, 1, 2.6),
(45, 45, 1, 0.8, 1, 2.8),
(46, 46, 0.8, 0.8, 0.8, 2.4),
(47, 47, 1, 0.8, 0.8, 2.6),
(48, 48, 1, 0.8, 0.8, 2.6),
(49, 49, 1, 0.8, 0.8, 2.6),
(50, 50, 0.8, 0.8, 0.8, 2.4),
(51, 51, 1, 0.8, 0.6, 2.4),
(52, 52, 0.8, 0.8, 0.6, 2.2),
(53, 53, 1, 0.8, 0.6, 2.4),
(54, 54, 1, 0.8, 0.6, 2.4),
(55, 55, 0.8, 0.8, 0.6, 2.2),
(56, 56, 1, 0.8, 0.4, 2),
(57, 57, 0.8, 0.8, 0.4, 1.8),
(58, 58, 0.8, 0.8, 0.4, 1.8),
(59, 59, 0.8, 0.8, 0.4, 1.8),
(60, 60, 0.8, 0.8, 0.4, 1.8);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai_sikap`
--

CREATE TABLE `tb_nilai_sikap` (
  `sikap_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `sikap_bobot` enum('SB','B','C','K') NOT NULL COMMENT '''Sangat Baik'', ''Baik'',''Cukup'',''Kurang'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai_sikap`
--

INSERT INTO `tb_nilai_sikap` (`sikap_id`, `siswa_id`, `sikap_bobot`) VALUES
(1, 1, 'SB'),
(2, 2, 'B'),
(3, 3, 'B'),
(4, 4, 'SB'),
(5, 5, 'SB'),
(6, 6, 'SB'),
(7, 7, 'SB'),
(8, 8, 'SB'),
(9, 9, 'SB'),
(10, 10, 'B'),
(11, 11, 'SB'),
(12, 12, 'SB'),
(13, 13, 'SB'),
(14, 14, 'SB'),
(15, 15, 'SB'),
(16, 16, 'B'),
(17, 17, 'SB'),
(18, 18, 'SB'),
(19, 19, 'SB'),
(20, 20, 'SB'),
(21, 21, 'B'),
(22, 22, 'B'),
(23, 23, 'SB'),
(24, 24, 'B'),
(25, 25, 'B'),
(26, 26, 'B'),
(27, 27, 'B'),
(28, 28, 'B'),
(29, 29, 'B'),
(30, 30, 'B'),
(31, 31, 'SB'),
(32, 32, 'B'),
(33, 33, 'SB'),
(34, 34, 'B'),
(35, 35, 'SB'),
(36, 36, 'SB'),
(37, 37, 'B'),
(38, 38, 'B'),
(39, 39, 'B'),
(40, 40, 'SB'),
(41, 41, 'SB'),
(42, 42, 'SB'),
(43, 43, 'B'),
(44, 44, 'B'),
(45, 45, 'SB'),
(46, 46, 'B'),
(47, 47, 'SB'),
(48, 48, 'SB'),
(49, 49, 'SB'),
(50, 50, 'B'),
(51, 51, 'SB'),
(52, 52, 'B'),
(53, 53, 'SB'),
(54, 54, 'SB'),
(55, 55, 'B'),
(56, 56, 'SB'),
(57, 57, 'B'),
(58, 58, 'B'),
(59, 59, 'B'),
(60, 60, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peringkat`
--

CREATE TABLE `tb_peringkat` (
  `peringkat_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `peringkat_no` decimal(10,0) NOT NULL,
  `peringkat_bobot` enum('SB','B','C','K') NOT NULL COMMENT '''Sangat Baik'', ''Baik'',''Cukup'',''Kurang'''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peringkat`
--

INSERT INTO `tb_peringkat` (`peringkat_id`, `siswa_id`, `peringkat_no`, `peringkat_bobot`) VALUES
(1, 1, '1', 'SB'),
(2, 2, '2', 'SB'),
(3, 3, '3', 'SB'),
(4, 4, '4', 'SB'),
(5, 5, '5', 'SB'),
(6, 6, '6', 'B'),
(7, 7, '7', 'B'),
(8, 8, '8', 'B'),
(9, 9, '9', 'B'),
(10, 10, '10', 'B'),
(11, 11, '11', 'C'),
(12, 12, '12', 'C'),
(13, 13, '13', 'C'),
(14, 14, '14', 'C'),
(15, 15, '15', 'C'),
(16, 16, '16', 'K'),
(17, 17, '17', 'K'),
(18, 18, '18', 'K'),
(19, 19, '19', 'K'),
(20, 20, '20', 'K'),
(21, 21, '1', 'SB'),
(22, 22, '2', 'SB'),
(23, 23, '3', 'SB'),
(24, 24, '4', 'SB'),
(25, 25, '5', 'SB'),
(26, 26, '6', 'B'),
(27, 27, '7', 'B'),
(28, 28, '8', 'B'),
(29, 29, '9', 'B'),
(30, 30, '10', 'B'),
(31, 31, '11', 'C'),
(32, 32, '12', 'C'),
(33, 33, '13', 'C'),
(34, 34, '14', 'C'),
(35, 35, '15', 'C'),
(36, 36, '16', 'K'),
(37, 37, '17', 'K'),
(38, 38, '18', 'K'),
(39, 39, '19', 'K'),
(40, 40, '20', 'K'),
(41, 41, '1', 'SB'),
(42, 42, '2', 'SB'),
(43, 43, '3', 'SB'),
(44, 44, '4', 'SB'),
(45, 45, '5', 'SB'),
(46, 46, '6', 'B'),
(47, 47, '7', 'B'),
(48, 48, '8', 'B'),
(49, 49, '9', 'B'),
(50, 50, '10', 'B'),
(51, 51, '11', 'C'),
(52, 52, '12', 'C'),
(53, 53, '13', 'C'),
(54, 54, '14', 'C'),
(55, 55, '15', 'C'),
(56, 56, '16', 'K'),
(57, 57, '17', 'K'),
(58, 58, '18', 'K'),
(59, 59, '19', 'K'),
(60, 60, '20', 'K');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_nama` varchar(50) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `siswa_jk` enum('Laki - Laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`siswa_id`, `siswa_nama`, `kelas_id`, `siswa_jk`) VALUES
(1, 'Naila Kamila', 1, 'Perempuan'),
(2, 'Hazel Aubin', 1, 'Laki - Laki'),
(3, 'Kayla Aurelia Putri', 1, 'Perempuan'),
(4, 'Exelia Monika', 1, 'Perempuan'),
(5, 'Malfin Dwi Ananda', 1, 'Perempuan'),
(6, 'Maysa Kalea Rika', 1, 'Perempuan'),
(7, 'Lisana Shidqin Aliyya', 1, 'Perempuan'),
(8, 'Zoya Yohana Gusti', 1, 'Perempuan'),
(9, 'Maisha Ayu Purnama', 1, 'Perempuan'),
(10, 'Keyla Pratama', 1, 'Perempuan'),
(11, 'Syahira Febriyana', 1, 'Perempuan'),
(12, 'Diffa Amelya Pebriani', 1, 'Perempuan'),
(13, 'Muhammad Rakan Arami', 1, 'Laki - Laki'),
(14, 'Faishal Ananda Haris', 1, 'Laki - Laki'),
(15, 'Firda Nazif Hafya', 1, 'Laki - Laki'),
(16, 'Rafi Wiksa Abqary Fitra', 1, 'Laki - Laki'),
(17, 'Sinta Aulia Safitri', 1, 'Perempuan'),
(18, 'Dyfal Muhammad Razan', 1, 'Laki - Laki'),
(19, 'Faizah Azida', 1, 'Perempuan'),
(20, 'Najla Mutiara Thamrin', 1, 'Perempuan'),
(21, 'Farhiha Rahim', 2, 'Perempuan'),
(22, 'Belvania Putri Riskal', 2, 'Perempuan'),
(23, 'Syifa Rahmanda Ardita', 2, 'Perempuan'),
(24, 'Diantha Raniya Ardiyanto', 2, 'Laki - Laki'),
(25, 'Lhijoena Tenlenry', 2, 'Perempuan'),
(26, 'Mayang Nagita savany', 2, 'Perempuan'),
(27, 'Ahmad Zikry Dheandra Hutapea', 2, 'Laki - Laki'),
(28, 'Shahira Asyfa Ramadani', 2, 'Perempuan'),
(29, 'Naila Awallia Putri', 2, 'Perempuan'),
(30, 'Nurul Hidayah', 2, 'Perempuan'),
(31, 'Vanessa Aurelya Putri', 2, 'Perempuan'),
(32, 'Salna Maituti', 2, 'Perempuan'),
(33, 'Zaky Abiyaska', 2, 'Laki - Laki'),
(34, 'Faturahman Bakri', 2, 'Laki - Laki'),
(35, 'Fajrul Ihsan', 2, 'Laki - Laki'),
(36, 'M. Zaky Zaid', 2, 'Laki - Laki'),
(37, 'Naufal Dwi Zulandsy', 2, 'Laki - Laki'),
(38, 'Aziz Maulana Akbar', 2, 'Laki - Laki'),
(39, 'Muhammad Aliefta Pratama', 2, 'Laki - Laki'),
(40, 'Aulya Nurfirda', 2, 'Perempuan'),
(41, 'Michelle Puti Dewani', 3, 'Perempuan'),
(42, 'Raafi Ramarefyan', 3, 'Laki - Laki'),
(43, 'Filzachra Azda', 3, 'Perempuan'),
(44, 'Binsar Rizky Ananda Siburian', 3, 'Laki - Laki'),
(45, 'Muhammad Alvyn Purwa Renra', 3, 'Perempuan'),
(46, 'Meydita Fathiha', 3, 'Laki - Laki'),
(47, 'Faizi Dhinia', 3, 'Perempuan'),
(48, 'Natasya Adly', 3, 'Laki - Laki'),
(49, 'Daffa Karunia Utama', 3, 'Perempuan'),
(50, 'Marsya Nada Maghfirah', 3, 'Laki - Laki'),
(51, 'Nur Aisyah', 3, 'Perempuan'),
(52, 'Muthadzan Hanif Riputra', 3, 'Laki - Laki'),
(53, 'Luckiy Ana Chalwa Fadira', 3, 'Perempuan'),
(54, 'Stevano William Athilla', 3, 'Laki - Laki'),
(55, 'Nadia Auliani', 3, 'Perempuan'),
(56, 'Cantika Sri Mulya', 3, 'Laki - Laki'),
(57, 'Fauzan Afif', 3, 'Perempuan'),
(58, 'Haryati Violta Dianty', 3, 'Laki - Laki'),
(59, 'Aiman Fathur Ramadhan', 3, 'Perempuan'),
(60, 'Habibi Kurniawan', 3, 'Laki - Laki');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(100) NOT NULL,
  `user_nick` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_fullname`, `user_nick`, `user_email`, `user_password`, `role`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_kelas`
--
ALTER TABLE `ms_kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`hasil_id`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`nilai_id`);

--
-- Indexes for table `tb_nilai_hasil`
--
ALTER TABLE `tb_nilai_hasil`
  ADD PRIMARY KEY (`nh_id`);

--
-- Indexes for table `tb_nilai_pengujian`
--
ALTER TABLE `tb_nilai_pengujian`
  ADD PRIMARY KEY (`np_id`);

--
-- Indexes for table `tb_nilai_sikap`
--
ALTER TABLE `tb_nilai_sikap`
  ADD PRIMARY KEY (`sikap_id`);

--
-- Indexes for table `tb_peringkat`
--
ALTER TABLE `tb_peringkat`
  ADD PRIMARY KEY (`peringkat_id`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_kelas`
--
ALTER TABLE `ms_kelas`
  MODIFY `kelas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `hasil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `nilai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_nilai_hasil`
--
ALTER TABLE `tb_nilai_hasil`
  MODIFY `nh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_nilai_pengujian`
--
ALTER TABLE `tb_nilai_pengujian`
  MODIFY `np_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_nilai_sikap`
--
ALTER TABLE `tb_nilai_sikap`
  MODIFY `sikap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_peringkat`
--
ALTER TABLE `tb_peringkat`
  MODIFY `peringkat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
