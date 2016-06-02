-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-04-2016 a las 01:34:11
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `karlozw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestacomentario`
--

CREATE TABLE IF NOT EXISTS `respuestacomentario` (
  `id_rc` int(11) NOT NULL,
  `respcom` text COLLATE utf8_spanish2_ci NOT NULL,
  `id_comentario` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `respuestacomentario`
--

INSERT INTO `respuestacomentario` (`id_rc`, `respcom`, `id_comentario`) VALUES
(1, 'Respuesta Comentario uno', 1),
(2, 'Respuesta dos comentario uno.', 1),
(3, 'Respueta 1 a comentario 2', 2),
(4, 'Respuesta 2 a comentario 2', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `respuestacomentario`
--
ALTER TABLE `respuestacomentario`
  ADD PRIMARY KEY (`id_rc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `respuestacomentario`
--
ALTER TABLE `respuestacomentario`
  MODIFY `id_rc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
