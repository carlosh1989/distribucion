-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2017 at 01:26 PM
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
-- Table structure for table `distribucion_items`
--

CREATE TABLE `distribucion_items` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `rubro_id` int(11) NOT NULL,
  `origen_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `coste_id` int(11) NOT NULL,
  `combo_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `detalle` varchar(200) NOT NULL,
  `cantidad` int(255) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distribucion_items`
--

INSERT INTO `distribucion_items` (`id`, `categoria_id`, `rubro_id`, `origen_id`, `producto_id`, `coste_id`, `combo_id`, `nombre`, `detalle`, `cantidad`, `eliminar`) VALUES
(2, 1, 10, 4, 1, 3, 1, 'PDVAL ARROZ REGULADO', 'PDVAL REGULADO ARROZ de 1X24 BULTO 1 KILOGRAMO (Kg) ', 4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distribucion_items`
--
ALTER TABLE `distribucion_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distribucion_items`
--
ALTER TABLE `distribucion_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
