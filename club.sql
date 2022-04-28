-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 03:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `nama` varchar(30) NOT NULL,
  `jumlah` int(15) NOT NULL,
  `manager` varchar(30) NOT NULL,
  `pelatih` varchar(30) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `poin` int(10) NOT NULL,
  `totalmenang` int(10) NOT NULL,
  `totalkalah` int(10) NOT NULL,
  `totalseri` int(10) NOT NULL,
  `totalgol` int(10) NOT NULL,
  `totalkebobol` int(10) NOT NULL,
  `selisihgol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`nama`, `jumlah`, `manager`, `pelatih`, `asal`, `poin`, `totalmenang`, `totalkalah`, `totalseri`, `totalgol`, `totalkebobol`, `selisihgol`) VALUES
('Auryn Seanita', 2, 'hu', 'hu', 'ji', 0, 0, 0, 0, 0, 0, 0),
('Auryn Seanita', 4, 'hu', 'hu', 'ji', 0, 0, 0, 0, 0, 0, 0),
('Auryn Seanita', 4, 'hu', 'hu', 'ji', 0, 0, 0, 0, 0, 0, 0),
('chelsea', 8, 'hu', 'hu', 'ji', 3, 1, 1, 0, 8, 7, -2),
('chelsea', 12, 'auryn', 'seanita', 'inggris', 3, 1, 1, 0, 8, 7, -2),
('Auryn Seanita', 12, 'hu', 'hu', 'ji', 0, 0, 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
