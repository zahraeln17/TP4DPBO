-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 07:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp4dpbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_absen`
--

CREATE TABLE `data_absen` (
  `id` int(11) NOT NULL,
  `id_siswa` varchar(20) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `kelas` varchar(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status_td` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_absen`
--

INSERT INTO `data_absen` (`id`, `id_siswa`, `nama_siswa`, `gender`, `kelas`, `tanggal`, `status_td`) VALUES
(1, '12A109', 'Zahra Elgysha', 'Perempuan', '12 IPA 1', '2021-04-22', 'Hadir'),
(2, '12A505', 'Andini Mulyani', 'Perempuan', '12 IPA 5', '2021-04-22', 'Hadir'),
(27, '12A103', 'Alya Chaerunnissa', 'Perempuan', '12 IPA 1', '2021-04-22', 'Tidak Hadir'),
(29, '12S101', 'Fauzan Adzikra', 'Laki-laki', '12 IPS 1', '2021-04-22', 'Tidak Hadir'),
(30, '12S403', 'Nasha Bagas', 'Laki-laki', '12 IPS 4', '2021-04-22', 'Tidak Hadir'),
(31, '12A210', 'Abighail Shafira', 'Perempuan', '12 IPA 2', '2021-04-22', 'Hadir'),
(35, '12A905', 'Helmi Aziz', 'Laki-laki', '12 IPA 9', '2021-04-22', 'Tidak Hadir'),
(37, '12A112', 'Nenden Citra', 'Perempuan', '12 IPA 1', '2021-04-22', 'Hadir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_absen`
--
ALTER TABLE `data_absen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_absen`
--
ALTER TABLE `data_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
