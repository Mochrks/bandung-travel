-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 02:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bandungku`
--

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `IdUser` int(11) NOT NULL,
  `Nama` varchar(150) NOT NULL,
  `JenisKelamin` varchar(20) NOT NULL,
  `NoHp` varchar(15) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Paket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`IdUser`, `Nama`, `JenisKelamin`, `NoHp`, `Email`, `Paket`) VALUES
(6, 'Eka', 'Laki-laki', '089609887229', 'eka@gmail.com', '4'),
(7, 'Ichas', 'Laki-laki', '089608995990', 'Ichas@gmail.com', '3'),
(8, 'Rizki', 'Laki-laki', '082166923119', 'rizki@gmail.com', '1'),
(9, 'eca', 'Perempuan', '089609882112', 'eca@gmail.com', '1'),
(10, 'Sony', 'Laki-laki', '0896098221229', 'sony@gmail.com', '1'),
(12, 'dedi', 'Laki-laki', '0896909229112', 'dedi2gmail.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama`) VALUES
('admin', '$2y$10$ZbjqXwHl6o5KkwR04TSTzePovFVZh6CxQlAQ1llGNynfCPDUZJhB.', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`IdUser`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
