-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2017 at 08:15 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CADIP2`
--

-- --------------------------------------------------------

--
-- Table structure for table `distribucion_rubros`
--

CREATE TABLE `distribucion_rubros` (
  `id` int(11) NOT NULL,
  `distribucion_categoria_id` int(11) NOT NULL,
  `rubro` varchar(100) NOT NULL,
  `cantidad` int(255) NOT NULL,
  `eliminar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribucion_rubros`
--

INSERT INTO `distribucion_rubros` (`id`, `distribucion_categoria_id`, `rubro`, `cantidad`, `eliminar`) VALUES
(1, 0, 'arroz', 5000, 1),
(2, 0, 'HARINA', 0, 1),
(3, 0, 'HARINA DE TRIGO', 0, 1),
(4, 0, 'HARINA DE TRIGO', 0, 1),
(5, 0, 'ARROZ', 0, 1),
(6, 0, 'PASTA', 0, 1),
(7, 0, 'HARINA DE TRIGO', 0, 1),
(8, 0, 'ARROZ', 0, 0),
(9, 0, 'HARINA DE TRIGO', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribucion_rubros`
--
ALTER TABLE `distribucion_rubros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribucion_rubros`
--
ALTER TABLE `distribucion_rubros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
