-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2017 a las 21:52:07
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
-- Estructura de tabla para la tabla `distribucion_categorias`
--

CREATE TABLE IF NOT EXISTS `distribucion_categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(60) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `distribucion_categorias`
--

INSERT INTO `distribucion_categorias` (`id`, `categoria`, `eliminar`) VALUES
(1, 'Alimentos de Consumo Humano', 0),
(2, 'PRODUCTOS DE HIGIENE PERSONAL 2', 0),
(3, 'PRODUCTOS DE HIGIENE PERSONAL', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `distribucion_categorias`
--
ALTER TABLE `distribucion_categorias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `distribucion_categorias`
--
ALTER TABLE `distribucion_categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
