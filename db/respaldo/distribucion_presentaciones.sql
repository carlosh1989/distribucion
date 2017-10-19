-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2017 at 11:27 AM
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
-- Table structure for table `distribucion_presentaciones`
--

CREATE TABLE `distribucion_presentaciones` (
  `id` int(11) NOT NULL,
  `rubro_id` int(11) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `expresion_menor` int(11) NOT NULL,
  `expresion_maxima` int(11) NOT NULL,
  `empaque_id` int(11) NOT NULL,
  `medida_id` int(11) NOT NULL,
  `peso_volumen` float NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribucion_presentaciones`
--

INSERT INTO `distribucion_presentaciones` (`id`, `rubro_id`, `detalle`, `expresion_menor`, `expresion_maxima`, `empaque_id`, `medida_id`, `peso_volumen`, `eliminar`) VALUES
(3, 10, 'ARROZ de 1X24 BULTO 1 KILOGRAMO (Kg) ', 1, 24, 1, 2, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribucion_presentaciones`
--
ALTER TABLE `distribucion_presentaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribucion_presentaciones`
--
ALTER TABLE `distribucion_presentaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
