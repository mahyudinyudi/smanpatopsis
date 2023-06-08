-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 09:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `topsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(15) NOT NULL,
  `nm_alternatif` varchar(35) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nm_alternatif`, `kelas`) VALUES
('3921', 'Melsa Berliana', 'XII IPA II'),
('3948', 'Komang Amelia', 'XII IPA IV'),
('4004', 'Agung', 'XII IPS I'),
('4016', 'Herlina', 'XII IPS II'),
('4082', 'Adika', 'XI IPA II'),
('4090', 'Deswita Adelia', 'XI IPA I'),
('4280', 'Nur Okta', 'XI IPS I'),
('4284', 'Revalina Azahra', 'XI IPS II'),
('4298', 'Aditya Putra', 'X I'),
('4334', 'Ahlia Khoirunisa', 'X II');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `bobot` double NOT NULL,
  `poin1` double NOT NULL,
  `poin2` double NOT NULL,
  `poin3` double NOT NULL,
  `poin4` double NOT NULL,
  `poin5` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`, `poin1`, `poin2`, `poin3`, `poin4`, `poin5`) VALUES
('kr001', 'Absensi', 3, 80, 85, 90, 95, 100),
('kr002', 'Kepribadian', 2, 80, 85, 90, 95, 100),
('kr003', 'Prestasi', 4, 1, 2, 3, 4, 5),
('kr004', 'Kegiatan Ekstrakulikuler', 2, 80, 85, 90, 95, 100),
('kr005', 'Nilai Raport', 5, 80, 85, 90, 95, 100);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(15) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(15) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `nama`, `username`, `password`, `level`, `created_date`, `modified_date`) VALUES
(1, 'user', 'user', 'user', 'user', '0000-00-00 00:00:00', NULL),
(2, 'admin', 'admin', 'admin', 'admin', '2017-12-04 11:24:00', '2017-12-04 11:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_matrik`
--

CREATE TABLE `nilai_matrik` (
  `id_matrik` int(7) NOT NULL,
  `id_alternatif` varchar(7) NOT NULL,
  `id_kriteria` varchar(7) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `nilai_matrik`
--

INSERT INTO `nilai_matrik` (`id_matrik`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(204, 'al001', 'kr001', 85),
(205, 'al001', 'kr002', 90),
(206, 'al001', 'kr003', 2),
(207, 'al001', 'kr004', 90),
(208, 'al001', 'kr005', 85),
(209, 'al002', 'kr001', 80),
(210, 'al002', 'kr002', 85),
(211, 'al002', 'kr003', 3),
(212, 'al002', 'kr004', 95),
(213, 'al002', 'kr005', 100),
(214, 'al003', 'kr001', 85),
(215, 'al003', 'kr002', 85),
(216, 'al003', 'kr003', 2),
(217, 'al003', 'kr004', 85),
(218, 'al003', 'kr005', 85),
(219, 'al004', 'kr001', 95),
(220, 'al004', 'kr002', 90),
(221, 'al004', 'kr003', 2),
(222, 'al004', 'kr004', 90),
(223, 'al004', 'kr005', 85),
(224, 'al005', 'kr001', 85),
(225, 'al005', 'kr002', 90),
(226, 'al005', 'kr003', 3),
(227, 'al005', 'kr004', 90),
(228, 'al005', 'kr005', 95),
(229, 'al006', 'kr001', 95),
(230, 'al006', 'kr002', 95),
(231, 'al006', 'kr003', 3),
(232, 'al006', 'kr004', 90),
(233, 'al006', 'kr005', 95),
(234, 'al007', 'kr001', 90),
(235, 'al007', 'kr002', 90),
(236, 'al007', 'kr003', 3),
(237, 'al007', 'kr004', 90),
(238, 'al007', 'kr005', 90),
(239, 'al008', 'kr001', 85),
(240, 'al008', 'kr002', 90),
(241, 'al008', 'kr003', 4),
(242, 'al008', 'kr004', 100),
(243, 'al008', 'kr005', 100),
(244, 'al009', 'kr001', 85),
(245, 'al009', 'kr002', 85),
(246, 'al009', 'kr003', 2),
(247, 'al009', 'kr004', 85),
(248, 'al009', 'kr005', 85),
(249, 'al010', 'kr001', 90),
(250, 'al010', 'kr002', 85),
(251, 'al010', 'kr003', 3),
(252, 'al010', 'kr004', 85),
(253, 'al010', 'kr005', 90),
(259, '1234', 'kr001', 80),
(260, '1234', 'kr002', 85),
(261, '1234', 'kr003', 3),
(262, '1234', 'kr004', 95),
(263, '1234', 'kr005', 100),
(274, '3019', 'kr001', 85),
(275, '3019', 'kr002', 90),
(276, '3019', 'kr003', 3),
(277, '3019', 'kr004', 90),
(278, '3019', 'kr005', 85),
(279, '3921', 'kr001', 80),
(280, '3921', 'kr002', 95),
(281, '3921', 'kr003', 2),
(282, '3921', 'kr004', 95),
(283, '3921', 'kr005', 95),
(284, '3948', 'kr001', 90),
(285, '3948', 'kr002', 90),
(286, '3948', 'kr003', 3),
(287, '3948', 'kr004', 90),
(288, '3948', 'kr005', 90),
(289, '4004', 'kr001', 95),
(290, '4004', 'kr002', 90),
(291, '4004', 'kr003', 4),
(292, '4004', 'kr004', 90),
(293, '4004', 'kr005', 95),
(294, '4016', 'kr001', 100),
(295, '4016', 'kr002', 100),
(296, '4016', 'kr003', 5),
(297, '4016', 'kr004', 100),
(298, '4016', 'kr005', 100),
(299, '4082', 'kr001', 90),
(300, '4082', 'kr002', 95),
(301, '4082', 'kr003', 1),
(302, '4082', 'kr004', 85),
(303, '4082', 'kr005', 85),
(304, '4090', 'kr001', 95),
(305, '4090', 'kr002', 90),
(306, '4090', 'kr003', 3),
(307, '4090', 'kr004', 90),
(308, '4090', 'kr005', 90),
(309, '4280', 'kr001', 95),
(310, '4280', 'kr002', 95),
(311, '4280', 'kr003', 4),
(312, '4280', 'kr004', 95),
(313, '4280', 'kr005', 95),
(314, '4284', 'kr001', 85),
(315, '4284', 'kr002', 80),
(316, '4284', 'kr003', 2),
(317, '4284', 'kr004', 85),
(318, '4284', 'kr005', 80),
(319, '4298', 'kr001', 95),
(320, '4298', 'kr002', 90),
(321, '4298', 'kr003', 2),
(322, '4298', 'kr004', 80),
(323, '4298', 'kr005', 100),
(324, '4334', 'kr001', 85),
(325, '4334', 'kr002', 85),
(326, '4334', 'kr003', 4),
(327, '4334', 'kr004', 95),
(328, '4334', 'kr005', 95);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_preferensi`
--

CREATE TABLE `nilai_preferensi` (
  `id_pre` int(11) NOT NULL,
  `nm_alternatif` varchar(35) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `nilai_matrik`
--
ALTER TABLE `nilai_matrik`
  ADD PRIMARY KEY (`id_matrik`);

--
-- Indexes for table `nilai_preferensi`
--
ALTER TABLE `nilai_preferensi`
  ADD PRIMARY KEY (`id_pre`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai_matrik`
--
ALTER TABLE `nilai_matrik`
  MODIFY `id_matrik` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `nilai_preferensi`
--
ALTER TABLE `nilai_preferensi`
  MODIFY `id_pre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1820;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
