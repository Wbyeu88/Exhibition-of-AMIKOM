-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2022 at 05:08 PM
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
-- Database: `pameran2`
--

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` int(50) NOT NULL,
  `note` varchar(255) NOT NULL,
  `confirmation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `email`, `amount`, `note`, `confirmation`) VALUES
(5, 'admin10@gmail.com', 40, 'Donasi dendi', 'billing.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

CREATE TABLE `karya` (
  `id_karya` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `artis` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karya`
--

INSERT INTO `karya` (`id_karya`, `id_login`, `artis`, `judul`, `deskripsi`, `gambar`, `status`) VALUES
(19, 2, 'Artist: Hendra Gunawan | Painted: 1971', 'PANDAWA DADU', 'Through the production of this work, Hendra was making sense of his personal trauma. This rare masterwork reveals the artist’s subtle wit, fascination of his nation in conjunction with foreign traditions, his sincere respect for women, and ultimately, his sensitive mind.', 'PandawaDadu.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id_login`, `username`, `first_name`, `last_name`, `gender`, `email`, `password`, `role`) VALUES
(1, 'firdan', 'Firdana', 'Amanaturrokhim', 'Male', 'firdana@email.com', '$2y$10$loIcH7Ot7D/DKhsBsMzdh.JyoLM6tszUE.0jraJttPPO.dmLYnbga', 'admin'),
(2, 'Dendi', 'Dendi', 'Anugerah', 'Male', 'dendi@email.com', '$2y$10$m2ii1t3rfsl9JYc1UQZbI.hhYE5GvWVVWTPgq5/MSnybI1ZbW3IzK', ''),
(3, 'user', 'user', 'user', 'Male', 'user@mail.com', '$2y$10$F/H4PDJVkZCKxBQrjY7uHOcgXdH6XH4hlwSF41q85A9Cs/1qC3KMK', 'user'),
(4, 'tes', 'firdan', 'a', 'Male', 'firdan@gmail.com', '$2y$10$olaw.VQmerpMP005RBzgHucinqYmLnfpWKZKoYSULMq/hZPO5Rvjm', 'user'),
(5, 'tes', 'tes', 'tes', 'Male', 'tes@gmail.com', '$2y$10$03LHR/gvIF5f5ckOiHNUb.BjdBRyUjptu/y.6qfk9hk82etWvje6q', 'user'),
(6, 'ain', 'ain', 'nadia', 'Female', 'ain@gmail.com', '$2y$10$66WSZIqIm9mitB6g61Aoh.fEPPuglm4q0s7WjeqbHGDe0u8S0YzqW', 'user'),
(7, 'admin10', 'admin', 'admin10', 'Female', 'admin10@gmail.com', '$2y$10$goGkiQ9yeOnfjL9m7qaYc.SL1GxSCX2gKzZDaF5Eh9X9FO38pkdU2', 'user'),
(8, 'Dendi', 'Dendi', 'A', 'Male', 'dendi@gmail.com', '$2y$10$2jjabwackYZRzueEM7nTXecTFeDrr71HzzBEcSh.GA0fg0Oyfr6vm', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `karya`
--
ALTER TABLE `karya`
  ADD PRIMARY KEY (`id_karya`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id_login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `karya`
--
ALTER TABLE `karya`
  MODIFY `id_karya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donasi`
--
ALTER TABLE `donasi`
  ADD CONSTRAINT `donasi_ibfk_1` FOREIGN KEY (`email`) REFERENCES `sign_up` (`email`);

--
-- Constraints for table `karya`
--
ALTER TABLE `karya`
  ADD CONSTRAINT `karya_ibfk_1` FOREIGN KEY (`id_login`) REFERENCES `sign_up` (`id_login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
