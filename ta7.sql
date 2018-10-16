-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2018 at 10:47 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta7`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(255) NOT NULL,
  `nim` int(10) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `program_studi` varchar(255) NOT NULL,
  `fakultas` varchar(255) NOT NULL,
  `asal` varchar(255) NOT NULL,
  `moto_hidup` text NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nim`, `jenis_kelamin`, `program_studi`, `fakultas`, `asal`, `moto_hidup`, `id`) VALUES
('Fulan', 1234567891, 'laki-laki', 'Manajemen informatika', 'FIT', 'dfw', 'iarljqO', 2),
('vhg', 987654321, 'perempuan', 'Sistem informasi', 'FIT', 'iuhio', 'fduyhk', 4),
('vhg', 2147483647, 'perempuan', 'teknik informatika', 'FEB', 'rrhj', 'jdbgfilj', 6),
('Fulanah', 2147483647, 'laki-laki', 'Manajemen informatika', 'FIT', 'saf', 'yu674r', 7),
('deby', 2147483647, '', 'Manajemen informatika', 'FIT', 'dskjfh', 'etwww', 8),
('Fulan', 2147483647, 'perempuan', 'Manajemen informatika', 'FRI', 'kjh', 'gxjhg uyo yioj    yigiulij.m', 9),
('uh', 987689046, 'laki-laki', 'Sistem informasi', 'FIT', 'kjl', 'hjj kjhugty jhui ', 10),
('Fulan', 1234567891, 'perempuan', 'Manajemen informatika', 'FIT', 'fdg', 'doifkv rutpoe', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
