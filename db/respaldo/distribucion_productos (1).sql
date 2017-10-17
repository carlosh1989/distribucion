-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2017 a las 18:15:16
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cadip`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distribucion_productos`
--

CREATE TABLE IF NOT EXISTS `distribucion_productos` (
  `id` int(11) NOT NULL,
  `origen_id` int(11) NOT NULL,
  `rubro_id` int(11) NOT NULL,
  `presentacion_id` int(11) NOT NULL,
  `coste_id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `expresion_menor` int(11) NOT NULL,
  `expresion_mayor` int(11) NOT NULL,
  `tipo_empaque` varchar(100) NOT NULL,
  `peso_volumen` varchar(50) NOT NULL,
  `unidad_medida` varchar(50) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `distribucion_productos`
--
ALTER TABLE `distribucion_productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `distribucion_productos`
--
ALTER TABLE `distribucion_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
