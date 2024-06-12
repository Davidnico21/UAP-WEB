-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 01:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_uap`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id_admin`, `username`, `password`) VALUES
(1, 'david', '12345'),
(2, 'rezan', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `bidang` varchar(255) NOT NULL,
  `id_bidang` int(11) DEFAULT NULL,
  `pengajar_id` int(11) DEFAULT NULL,
  `jumlah_siswa` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL,
  `biaya` int(11) DEFAULT NULL,
  `hari` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`bidang`, `id_bidang`, `pengajar_id`, `jumlah_siswa`, `teacher_id`, `id_kelas`, `biaya`, `hari`) VALUES
('Bahasa Inggris', NULL, NULL, 24, NULL, 1, 0, ''),
('IPA', NULL, NULL, 32, 1, 2, 200, ''),
('Matematika', NULL, NULL, 50, 2, 3, 400, ''),
('Bahasa Inggris', NULL, NULL, 32, 3, 7, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id_kursus` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `benefit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id_kursus`, `course_id`, `bidang`, `biaya`, `benefit`) VALUES
(1, 1, 'matematika', 400000, 'mahir berbahasa matematika yaya'),
(2, 2, 'IPS', 200000, 'mahir berbahasa IPS'),
(3, 4, 'Bahasa Indonesia', NULL, NULL),
(4, 3, 'IPA', NULL, NULL),
(5, 4, 'Bahasa Inggris', NULL, NULL),
(7, NULL, 'matematika yaya', 500000, 'mahir berbahasa matematika yaya'),
(9, NULL, 'bahasa lampung', 500, 'mahir berbahasa lampung');

-- --------------------------------------------------------

--
-- Table structure for table `pengajar`
--

CREATE TABLE `pengajar` (
  `teacher_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `bidang` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengajar`
--

INSERT INTO `pengajar` (`teacher_id`, `username`, `password`, `email`, `full_name`, `bidang`) VALUES
(1, '', '', 'bimo@gmail.com', 'dimas habib riziq', 'Bahasa Inggris'),
(2, '', '', 'asdsa@gmail.com', 'pandu', 'IPA'),
(3, '', '', 'rakun@gmail.com', 'jamaudindinnn', 'IPA'),
(4, '', '', 'dnico8118@gmail.com', 'riziq gantenk 123', 'Bahasa Inggris'),
(5, '', '', 'dnico8118@gmail.com', 'tri', 'Bahasa Indonesia'),
(70, '', '', 'dnico8118@gmail.com', 'dandu', 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `bidang` varchar(100) DEFAULT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`username`, `password`, `full_name`, `bidang`, `student_id`) VALUES
('', '', 'jokoooowiiiwaa', 'Matematika', 1),
('', '', 'pandi', 'IPA', 6),
('', '', 'dimas habib riziq', 'IPA', 7),
('', '', 'jandi', 'matematika ya', 9),
('', '', 'pandu dwi', 'IPA', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `FK_teacher` (`teacher_id`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id_kursus`);

--
-- Indexes for table `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `FK_teacher` FOREIGN KEY (`teacher_id`) REFERENCES `pengajar` (`teacher_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
