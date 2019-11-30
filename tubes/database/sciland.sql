-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 05:12 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sciland`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `namaAdm` varchar(30) NOT NULL,
  `emailAdm` varchar(30) NOT NULL,
  `alamatAdm` varchar(60) NOT NULL,
  `passAdm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`namaAdm`, `emailAdm`, `alamatAdm`, `passAdm`) VALUES
('Farah', 'fakhranakurnia@gmail.com', 'Jl.umayah', 'farah'),
('Jojo', 'jojojovita@gmail.com', 'Jl.Umayah', 'jojo'),
('ariq', 'ariqmr123@gmail.com', 'surga', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `jhal` int(10) NOT NULL,
  `stock` int(10) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `imgpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `penerbit`, `jhal`, `stock`, `sinopsis`, `imgpath`) VALUES
('1', 'Kungfu Boy', 'Takeshi Maekawa', 'Wibuu', 60, 100, 'ini buku wibu', '1.jpg'),
('2', 'The Book of Almost', 'Brian Khrisna', 'Kompas media', 50, 50, '                                                                                                                        samlekom geys                                                                                                                        ', '2.jpg'),
('3', 'Harry Potter and The Goblet Of Fire', 'J.K Rowling', 'Bloomsbury', 150, 20, '                        Harry, Ron dan Hermione memasuki tahun keempat mereka di Hogwarts. Setelah mengalami mimpi aneh dari Pangeran Kegelapan dan nya Pelahap Maut, Harry Potter terbangun di rumah keluarga Weasley di mana mereka segera berangkat ke Piala', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `peminjam`
--

CREATE TABLE `peminjam` (
  `namaPjm` varchar(30) NOT NULL,
  `emailPjm` varchar(30) NOT NULL,
  `alamatPjm` varchar(60) NOT NULL,
  `passPjm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `peminjam`
--
ALTER TABLE `peminjam`
  ADD PRIMARY KEY (`emailPjm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
