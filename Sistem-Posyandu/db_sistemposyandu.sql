-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 09:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistemposyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `balita`
--

CREATE TABLE `balita` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(250) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `nama_ayah` varchar(250) NOT NULL,
  `nama_ibu` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `balita`
--

INSERT INTO `balita` (`id`, `nama`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `nama_ayah`, `nama_ibu`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Satria Adam Nugraha', 'Laki - Laki', '2018-11-16', '', 'Ugatmin', 'Suparti', '2023-01-20 02:34:25', '2023-01-20 05:44:01', NULL),
(4, 'Aurelia Findriani', 'Perempuan', '2018-12-13', '', 'Andri Setiawan', 'Khusniati', '2023-01-20 07:26:54', '2023-01-21 09:55:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_imunisasi`
--

CREATE TABLE `data_imunisasi` (
  `id` int(11) NOT NULL,
  `id_balita` int(11) NOT NULL,
  `hb_0` date DEFAULT NULL,
  `bcg` date DEFAULT NULL,
  `polio` date DEFAULT NULL,
  `dpt_hb_hib_1` date DEFAULT NULL,
  `polio_2` date DEFAULT NULL,
  `dpt_hb_hib_2` date DEFAULT NULL,
  `polio_3` date DEFAULT NULL,
  `dpt_hb_hib_3` date DEFAULT NULL,
  `polio_4` date DEFAULT NULL,
  `ipv` date DEFAULT NULL,
  `campak` date DEFAULT NULL,
  `dpt_hb_hib_lanjutan` date DEFAULT NULL,
  `campak_lanjutan` date DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_imunisasi`
--

INSERT INTO `data_imunisasi` (`id`, `id_balita`, `hb_0`, `bcg`, `polio`, `dpt_hb_hib_1`, `polio_2`, `dpt_hb_hib_2`, `polio_3`, `dpt_hb_hib_3`, `polio_4`, `ipv`, `campak`, `dpt_hb_hib_lanjutan`, `campak_lanjutan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 4, '2023-01-20', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '2023-01-20 07:27:18', '2023-01-20 06:27:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_pengukuran`
--

CREATE TABLE `data_pengukuran` (
  `id` int(11) NOT NULL,
  `id_balita` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` varchar(250) NOT NULL,
  `tahun` int(11) NOT NULL,
  `berat` varchar(250) NOT NULL,
  `tinggi` varchar(250) NOT NULL,
  `kepala` varchar(250) NOT NULL,
  `bulan_ke` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengukuran`
--

INSERT INTO `data_pengukuran` (`id`, `id_balita`, `tanggal`, `bulan`, `tahun`, `berat`, `tinggi`, `kepala`, `bulan_ke`, `created_at`, `updated_at`) VALUES
(5, 4, 28, 'Februari', 2023, '20', '88.4', '35,2', 50, '2023-01-21 09:45:54', '2023-01-21 09:12:51'),
(6, 4, 21, 'Januari', 2023, '8.12', '80,12', '23', 49, '2023-01-21 10:12:03', '2023-01-21 09:13:21');

-- --------------------------------------------------------

--
-- Table structure for table `data_vitamin`
--

CREATE TABLE `data_vitamin` (
  `id` int(11) NOT NULL,
  `id_balita` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `bulan` varchar(250) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nama_vitamin` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_vitamin`
--

INSERT INTO `data_vitamin` (`id`, `id_balita`, `tanggal`, `bulan`, `tahun`, `nama_vitamin`, `created_at`, `updated_at`) VALUES
(6, 4, 21, 'Januari', 2023, 'Vitamin A', '2023-01-21 11:03:16', '2023-01-21 10:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `ibu_hamil`
--

CREATE TABLE `ibu_hamil` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `umur` int(11) NOT NULL,
  `telp` varchar(250) DEFAULT NULL,
  `usia_kandungan` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `telp` varchar(100) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `alamat`, `umur`, `telp`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 0, NULL, 0, '2023-01-19 15:33:24', '2023-01-19 18:42:14', NULL),
(10, 'Sumirah', 'sumirah', '09defe5b7d91279dd3d06e4d0d4b02bc', 'Ds. Geneng, Dk. Tanjung, RT.02 RW.02', 50, '', 1, '2023-01-19 17:20:36', '2023-01-20 11:19:47', NULL),
(16, 'Watini', 'watini', 'dc7fcdd5a247a2d7034e11bf1f7df79b', 'Ds. Geneng, Dk. Tanjung, RT.03 RW.02', 45, '6285325305800', 1, '2023-01-21 10:46:59', '2023-01-21 09:46:59', NULL),
(17, 'Supiatun', 'supiatun', '8bd5f32e70dff7d0db2f88ebc0514aca', 'Ds. Geneng, Dk. Tanjung, RT.02 RW.02', 53, '6289515238973', 1, '2023-01-21 10:47:35', '2023-01-21 09:47:35', NULL),
(18, 'Yanti', 'yanti', '0bfdcd8914a53e117fda8d10954810e8', 'Ds. Geneng, Dk. Tanjung, RT.02 RW.02', 45, '', 1, '2023-01-21 10:47:53', '2023-01-21 09:47:53', NULL),
(19, 'Novita Juniah', 'novita', '463f4921608f04a290b70bb391c2b74d', 'Ds. Geneng, Dk. Tanjung, RT.01 RW.02', 29, '6289649073765', 1, '2023-01-21 10:48:26', '2023-01-21 09:48:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_imunisasi`
--
ALTER TABLE `data_imunisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pengukuran`
--
ALTER TABLE `data_pengukuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_vitamin`
--
ALTER TABLE `data_vitamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balita`
--
ALTER TABLE `balita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_imunisasi`
--
ALTER TABLE `data_imunisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_pengukuran`
--
ALTER TABLE `data_pengukuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_vitamin`
--
ALTER TABLE `data_vitamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
