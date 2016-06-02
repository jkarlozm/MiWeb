-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-04-2016 a las 23:52:38
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
-- Estructura de tabla para la tabla `trabajos`
--

CREATE TABLE IF NOT EXISTS `trabajos` (
  `id_trabajos` int(11) NOT NULL,
  `titulo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `herramientas` text COLLATE utf8_spanish2_ci NOT NULL,
  `url` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `trabajos`
--

INSERT INTO `trabajos` (`id_trabajos`, `titulo`, `imagen`, `descripcion`, `herramientas`, `url`) VALUES
(1, 'comete algo aquí', 'comida.png', 'La sencilla plantilla fue empleada para inicializarme en el uso de HTML5, bootstrap3 y responsive web desing ademas de incrustar mapas de google maps en el sitio.', '<div class="media">\r\n<div class="pull-left">\r\n<span class="glyphicon glyphicon-cog app-glyphicon1"></span>\r\n</div>\r\n<div class="media-body container">\r\n<h4 class="media-heading">Herramientas</h4>\r\n<div class="row">\r\n<div class="col-xs-4 col-sm-4 col-md-4">\r\n<div class="app-contenedor">\r\n<p class="glyphicon glyphicon-edit glyphicon2"></p>\r\n<h4>HTML5</h4> \r\n</div>\r\n</div>\r\n<div class="col-xs-4 col-sm-4 col-md-4">\r\n<div class="app-contenedor">\r\n<p class="glyphicon glyphicon-wrench glyphicon2"></p>\r\n<h4>Bootstrap3</h4>\r\n</div>\r\n</div>\r\n<div class="col-xs-4 col-sm-4 col-md-4">\r\n<div class="app-contenedor">\r\n<p class="glyphicon glyphicon-play-circle glyphicon2"></p>\r\n<h4>Animate.CSS</h4>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="row">\r\n<div class="col-xs-12 col-sm-12 col-md-12">\r\n<div class="app-contenedor">\r\n<p class="glyphicon glyphicon-phone glyphicon2"></p>\r\n<h4>Responsive Web Desing</h4> \r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'http://goo.gl/80S30l'),
(2, 'próximamente', 'proximamente.png', 'La platilla entra dentro de la categoría comingsoon, en ella se emplean dos herramientas, la primera es "Mail Chimp" que es utilizada para el mail marketing, y la otra es "Add This" un complemento para el servicio de mercado social.', '<div class="media">\r\n<div class="pull-left">\r\n<span class="glyphicon glyphicon-cog app-glyphicon1"></span>\r\n</div>\r\n<div class="media-body container">\r\n<h4 class="media-heading">Herramientas</h4>\r\n<div class="row">\r\n<div class="col-xs-4 col-sm-4 col-md-4">\r\n<div class="app-contenedor">\r\n<p class="glyphicon glyphicon-edit glyphicon2"></p>\r\n<h4>HTML5</h4> \r\n</div>\r\n</div>\r\n<div class="col-xs-4 col-sm-4 col-md-4">\r\n<div class="app-contenedor">                      \r\n<p class="glyphicon glyphicon-wrench glyphicon2"></p>\r\n<h4>CSS3</h4>\r\n</div>\r\n</div>\r\n<div class="col-xs-4 col-sm-4 col-md-4">\r\n<div class="app-contenedor">\r\n<p class="glyphicon glyphicon-phone glyphicon2"></p>\r\n<h4>Responsive Web Desing</h4>\r\n</div>\r\n</div>\r\n</div>\r\n<div class="row">\r\n<div class="col-xs-4 col-sm-4 col-md-4col-xs-4 ">\r\n<div class="app-contenedor">\r\n<p class="glyphicon glyphicon-edit glyphicon2"></p>\r\n<h4>jQuery</h4> \r\n</div>\r\n</div>\r\n<div class="col-xs-4 col-sm-4 col-md-4col-xs-4 ">\r\n<div class="app-contenedor">                      \r\n<p class="glyphicon glyphicon-envelope glyphicon2"></p>\r\n<h4>MailChimp</h4>\r\n</div>\r\n</div>\r\n<div class="col-xs-4 col-sm-4 col-md-4col-xs-4 ">\r\n<div class="app-contenedor">\r\n<p class="glyphicon glyphicon-comment glyphicon2"></p>\r\n<h4>AddThis</h4>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'https://goo.gl/FsOTtY'),
(3, 'viajes', 'viajes.png', 'El fin de la realización de la plantilla a sido el de poder trabajar con el "BOILERPLATE" de "INITIALIZR", ya que esta herramienta permite iniciar un proyecto en HTML5 mas rápido y fácil.', '<div class="media">\r\n<div class="pull-left">\r\n<span class="glyphicon glyphicon-cog app-glyphicon1"></span>\r\n</div>\r\n<div class="media-body container">\r\n<h4 class="media-heading">Herramientas</h4>\r\n<div class="row">\r\n<div class="col-xs-4 col-sm-4 col-md-4">\r\n<div class="app-contenedor">\r\n<p class="glyphicon glyphicon-edit glyphicon2"></p>\r\n<h4>HTML5</h4> \r\n</div>\r\n</div>\r\n<div class="col-xs-4 col-sm-4 col-md-4">\r\n<div class="app-contenedor">                      \r\n<p class="glyphicon glyphicon-wrench glyphicon2"></p>\r\n<h4>Bootstrap3</h4>\r\n</div>\r\n</div>\r\n<div class="col-xs-4 col-sm-4 col-md-4">\r\n<div class="app-contenedor">\r\n<p class="glyphicon glyphicon-phone glyphicon2"></p>\r\n<h4>Resposnive Web Desing</h4>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 'https://goo.gl/aSGWyM'),
(4, 'aplicación web', 'aplicacion.png', 'Aplicación diseñada para el control y estadística de los servicios de soporte realizados a ordenadores del personal de las diferentes áreas de la secretaría. \nActualmente se encuentra corriendo en la intranet de la intendencia. \nSe desarrollo durante la estancia como practicante.', '<div class="media">\n<div class="pull-left">\n<span class="glyphicon glyphicon-cog app-glyphicon1"></span>\n</div>\n<div class="media-body container">\n<h4 class="media-heading">Herramientas</h4>\n<div class="row">\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-edit glyphicon2"></p>\n<h4>HTML y PHP</h4>\n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-book glyphicon2"></p>\n<h4>MySQL</h4>\n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-edit glyphicon2"></p>\n<h4>Ajax y jQuery</h4>\n</div>\n</div>\n</div>\n<div class="row">\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-signal glyphicon2"></p>\n<h4>JPGRAPH</h4>\n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-play-circle glyphicon2"></p>\n<h4>Animate.CSS</h4>\n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-wrench glyphicon2"></p>\n<h4>Bootstrap3</h4>\n</div>\n</div>\n</div>\n</div>\n</div>', 'http://soportessp.azurewebsites.net'),
(5, 'Recetario', 'recetario.png', 'La presenta plantilla recetario esta diseñada sobre la librería de javascript Modernizr para la detección de capacidades del navegador.\nLa maquetación de la plantilla se desarrollo con HTML5.\nPara el diseño se ha utilizado CSS3, con el cual desarrollamos temas para cada una de las categorías de las comidas, media querys para el responsive web desing, animaciones para el titulo e imágenes de cada una de las recetas y por ultimo utilizamos pseudo clases y pseudo elementos.\nJavaScript solo fue empleado para la animación del Slider.', '<div class="media">\n<div class="pull-left">\n<span class="glyphicon glyphicon-cog app-glyphicon1"></span>\n</div>\n<div class="media-body container">\n<h4 class="media-heading">Tecnologías</h4>\n<div class="row">\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-edit glyphicon2"></p>\n<h4>HTML5</h4> \n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">                      \n<p class="glyphicon glyphicon-wrench glyphicon2"></p>\n<h4>CSS3</h4>\n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-phone glyphicon2"></p>\n<h4>Responsive Web Desing</h4>\n</div>\n</div>\n</div>\n<div class="row">\n<div class="col-xs-4 col-sm-4 col-md-4col-xs-4 ">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-console glyphicon2"></p>\n<h4>JavaScript</h4> \n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4col-xs-4 ">\n<div class="app-contenedor">                      \n<p class="glyphicon glyphicon-bookmark glyphicon2"></p>\n<h4>Modernizr</h4>\n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4col-xs-4 ">\n<div class="app-contenedor">                      \n<p class="glyphicon glyphicon-bookmark glyphicon2"></p>\n<h4>jQuery</h4>\n</div>\n</div>\n</div>\n</div>\n</div>', 'https://goo.gl/BBnAhq'),
(6, 'Proyecto UTP', 'proyectoutp.png', 'Esta sencilla aplicación la realice en la universidad en la materia de Base de Datos.\nEsta actividad me acerco de lleno con HTML, CSS3, PHP, MySQL, Ajax, jQuery con acciones muy sencillas pero que me cautivaron para seguir investigando y realizando mejores trabajos.', '<div class="media">\n<div class="pull-left">\n<span class="glyphicon glyphicon-cog app-glyphicon1"></span>\n</div>\n<div class="media-body container">\n<h4 class="media-heading">Herramientas</h4>\n<div class="row">\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-edit glyphicon2"></p>\n<h4>HTML</h4>\n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-book glyphicon2"></p>\n<h4>MySQL</h4>\n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-bookmark glyphicon2"></p>\n<h4>jQuery</h4>\n</div>\n</div>\n</div>\n<div class="row">\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-console glyphicon2"></p>\n<h4>PHP</h4>\n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-wrench glyphicon2"></p>\n<h4>CSS3</h4>\n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-console glyphicon2"></p>\n<h4>Ajax y Json</h4>\n</div>\n</div>\n</div>\n</div>\n</div>', 'http://proyectoutp.azurewebsites.net'),
(7, 'Comentarios', 'comentarios.png', 'Plantilla desarrollada con HTML5, CSS3, Boostrpa 3, jQuery en el curso de Boostrap por DEVCODE.la.\nLa plantilla esta diseñada para trabajar en pantallas de dispositivos celulares, tabletas y pantallas de ordenadores.', '<div class="media">\n<div class="pull-left">\n<span class="glyphicon glyphicon-cog app-glyphicon1"></span>\n</div>\n<div class="media-body container">\n<h4 class="media-heading">Tecnologías</h4>\n<div class="row">\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-edit glyphicon2"></p>\n<h4>HTML5</h4> \n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">                      \n<p class="glyphicon glyphicon-wrench glyphicon2"></p>\n<h4>CSS3</h4>\n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-phone glyphicon2"></p>\n<h4>Responsive Web Desing</h4>\n</div>\n</div>\n</div>\n<div class="row">\n<div class="col-xs-4 col-sm-4 col-md-4col-xs-4 ">\n<div class="app-contenedor">\n<p class="glyphicon glyphicon-console glyphicon2"></p>\n<h4>Bootstrap3</h4> \n</div>\n</div>\n<div class="col-xs-4 col-sm-4 col-md-4col-xs-4 ">\n<div class="app-contenedor">                      \n<p class="glyphicon glyphicon-bookmark glyphicon2"></p>\n<h4>jQuery</h4>\n</div>\n</div>\n</div>\n</div>\n</div>', 'https://goo.gl/FN32FN');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  ADD PRIMARY KEY (`id_trabajos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `trabajos`
--
ALTER TABLE `trabajos`
  MODIFY `id_trabajos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
