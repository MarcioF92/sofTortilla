-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-11-2014 a las 21:56:38
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `flight`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `idciudad` int(11) NOT NULL AUTO_INCREMENT,
  `idpais` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idciudad`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`idciudad`, `idpais`, `nombre`) VALUES
(1, 1, 'Ciudad 1 - Pais 1'),
(2, 2, 'Ciudad 1 - Pais 2'),
(3, 1, 'Ciudad 2 - Pais 1'),
(4, 1, 'Ciudad 3 - Pais 1'),
(5, 2, 'Ciudad 2 - Pais 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE IF NOT EXISTS `modulos` (
  `idmodulo` int(11) NOT NULL AUTO_INCREMENT,
  `carpeta` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `autor` varchar(30) NOT NULL,
  `version` varchar(30) NOT NULL,
  `habilitado` int(11) NOT NULL,
  PRIMARY KEY (`idmodulo`),
  UNIQUE KEY `nombre` (`nombre`),
  UNIQUE KEY `carpeta` (`carpeta`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `modulos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `idpais` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idpais`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `paises`
--

INSERT INTO `paises` (`idpais`, `nombre`) VALUES
(1, 'Pais 1'),
(2, 'Pais 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `idpermiso` int(11) NOT NULL AUTO_INCREMENT,
  `permiso` varchar(100) NOT NULL,
  `llave` varchar(100) NOT NULL,
  PRIMARY KEY (`idpermiso`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`idpermiso`, `permiso`, `llave`) VALUES
(1, 'Tareas de administración', 'admin_access'),
(2, 'Agregar Post', 'nuevo_post'),
(3, 'Editar Post', 'editar_post'),
(4, 'Eliminar Post', 'eliminar_post'),
(5, 'Módulos', 'modulos'),
(6, 'Widgets', 'widgets'),
(7, 'Usuarios', 'usuarios'),
(9, 'Hacer Pete', 'hacer_pete');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_role`
--

CREATE TABLE IF NOT EXISTS `permisos_role` (
  `idpermisorole` int(11) NOT NULL AUTO_INCREMENT,
  `idrole` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL,
  `valor` tinyint(4) NOT NULL,
  PRIMARY KEY (`idpermisorole`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcar la base de datos para la tabla `permisos_role`
--

INSERT INTO `permisos_role` (`idpermisorole`, `idrole`, `idpermiso`, `valor`) VALUES
(1, 1, 1, 1),
(18, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(13, 2, 3, 1),
(12, 2, 2, 1),
(7, 2, 4, 0),
(8, 3, 2, 1),
(9, 3, 3, 1),
(14, 1, 5, 1),
(15, 1, 6, 1),
(16, 1, 7, 1),
(17, 1, 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_usuario`
--

CREATE TABLE IF NOT EXISTS `permisos_usuario` (
  `idpermisousuario` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  PRIMARY KEY (`idpermisousuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcar la base de datos para la tabla `permisos_usuario`
--

INSERT INTO `permisos_usuario` (`idpermisousuario`, `idusuario`, `idpermiso`, `valor`) VALUES
(12, 8, 3, 1),
(16, 8, 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `idpost` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) NOT NULL,
  `cuerpo` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `idpais` int(11) NOT NULL,
  `idciudad` int(11) NOT NULL,
  PRIMARY KEY (`idpost`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=301 ;

--
-- Volcar la base de datos para la tabla `posts`
--

INSERT INTO `posts` (`idpost`, `titulo`, `cuerpo`, `imagen`, `idpais`, `idciudad`) VALUES
(1, 'Titulo 0', 'Cuerpo 0', '', 1, 1),
(2, 'Titulo 1', 'Cuerpo 1', '', 2, 2),
(3, 'Titulo 2', 'Cuerpo 2', '', 1, 3),
(4, 'Titulo 3', 'Cuerpo 3', '', 2, 4),
(5, 'Titulo 4', 'Cuerpo 4', '', 1, 5),
(6, 'Titulo 5', 'Cuerpo 5', '', 2, 1),
(7, 'Titulo 6', 'Cuerpo 6', '', 1, 2),
(8, 'Titulo 7', 'Cuerpo 7', '', 2, 3),
(9, 'Titulo 8', 'Cuerpo 8', '', 1, 4),
(10, 'Titulo 9', 'Cuerpo 9', '', 2, 5),
(11, 'Titulo 10', 'Cuerpo 10', '', 1, 1),
(12, 'Titulo 11', 'Cuerpo 11', '', 2, 2),
(13, 'Titulo 12', 'Cuerpo 12', '', 1, 3),
(14, 'Titulo 13', 'Cuerpo 13', '', 2, 4),
(15, 'Titulo 14', 'Cuerpo 14', '', 1, 5),
(16, 'Titulo 15', 'Cuerpo 15', '', 2, 1),
(17, 'Titulo 16', 'Cuerpo 16', '', 1, 2),
(18, 'Titulo 17', 'Cuerpo 17', '', 2, 3),
(19, 'Titulo 18', 'Cuerpo 18', '', 1, 4),
(20, 'Titulo 19', 'Cuerpo 19', '', 2, 5),
(21, 'Titulo 20', 'Cuerpo 20', '', 1, 1),
(22, 'Titulo 21', 'Cuerpo 21', '', 2, 2),
(23, 'Titulo 22', 'Cuerpo 22', '', 1, 3),
(24, 'Titulo 23', 'Cuerpo 23', '', 2, 4),
(25, 'Titulo 24', 'Cuerpo 24', '', 1, 5),
(26, 'Titulo 25', 'Cuerpo 25', '', 2, 1),
(27, 'Titulo 26', 'Cuerpo 26', '', 1, 2),
(28, 'Titulo 27', 'Cuerpo 27', '', 2, 3),
(29, 'Titulo 28', 'Cuerpo 28', '', 1, 4),
(30, 'Titulo 29', 'Cuerpo 29', '', 2, 5),
(31, 'Titulo 30', 'Cuerpo 30', '', 1, 1),
(32, 'Titulo 31', 'Cuerpo 31', '', 2, 2),
(33, 'Titulo 32', 'Cuerpo 32', '', 1, 3),
(34, 'Titulo 33', 'Cuerpo 33', '', 2, 4),
(35, 'Titulo 34', 'Cuerpo 34', '', 1, 5),
(36, 'Titulo 35', 'Cuerpo 35', '', 2, 1),
(37, 'Titulo 36', 'Cuerpo 36', '', 1, 2),
(38, 'Titulo 37', 'Cuerpo 37', '', 2, 3),
(39, 'Titulo 38', 'Cuerpo 38', '', 1, 4),
(40, 'Titulo 39', 'Cuerpo 39', '', 2, 5),
(41, 'Titulo 40', 'Cuerpo 40', '', 1, 1),
(42, 'Titulo 41', 'Cuerpo 41', '', 2, 2),
(43, 'Titulo 42', 'Cuerpo 42', '', 1, 3),
(44, 'Titulo 43', 'Cuerpo 43', '', 2, 4),
(45, 'Titulo 44', 'Cuerpo 44', '', 1, 5),
(46, 'Titulo 45', 'Cuerpo 45', '', 2, 1),
(47, 'Titulo 46', 'Cuerpo 46', '', 1, 2),
(48, 'Titulo 47', 'Cuerpo 47', '', 2, 3),
(49, 'Titulo 48', 'Cuerpo 48', '', 1, 4),
(50, 'Titulo 49', 'Cuerpo 49', '', 2, 5),
(51, 'Titulo 50', 'Cuerpo 50', '', 1, 1),
(52, 'Titulo 51', 'Cuerpo 51', '', 2, 2),
(53, 'Titulo 52', 'Cuerpo 52', '', 1, 3),
(54, 'Titulo 53', 'Cuerpo 53', '', 2, 4),
(55, 'Titulo 54', 'Cuerpo 54', '', 1, 5),
(56, 'Titulo 55', 'Cuerpo 55', '', 2, 1),
(57, 'Titulo 56', 'Cuerpo 56', '', 1, 2),
(58, 'Titulo 57', 'Cuerpo 57', '', 2, 3),
(59, 'Titulo 58', 'Cuerpo 58', '', 1, 4),
(60, 'Titulo 59', 'Cuerpo 59', '', 2, 5),
(61, 'Titulo 60', 'Cuerpo 60', '', 1, 1),
(62, 'Titulo 61', 'Cuerpo 61', '', 2, 2),
(63, 'Titulo 62', 'Cuerpo 62', '', 1, 3),
(64, 'Titulo 63', 'Cuerpo 63', '', 2, 4),
(65, 'Titulo 64', 'Cuerpo 64', '', 1, 5),
(66, 'Titulo 65', 'Cuerpo 65', '', 2, 1),
(67, 'Titulo 66', 'Cuerpo 66', '', 1, 2),
(68, 'Titulo 67', 'Cuerpo 67', '', 2, 3),
(69, 'Titulo 68', 'Cuerpo 68', '', 1, 4),
(70, 'Titulo 69', 'Cuerpo 69', '', 2, 5),
(71, 'Titulo 70', 'Cuerpo 70', '', 1, 1),
(72, 'Titulo 71', 'Cuerpo 71', '', 2, 2),
(73, 'Titulo 72', 'Cuerpo 72', '', 1, 3),
(74, 'Titulo 73', 'Cuerpo 73', '', 2, 4),
(75, 'Titulo 74', 'Cuerpo 74', '', 1, 5),
(76, 'Titulo 75', 'Cuerpo 75', '', 2, 1),
(77, 'Titulo 76', 'Cuerpo 76', '', 1, 2),
(78, 'Titulo 77', 'Cuerpo 77', '', 2, 3),
(79, 'Titulo 78', 'Cuerpo 78', '', 1, 4),
(80, 'Titulo 79', 'Cuerpo 79', '', 2, 5),
(81, 'Titulo 80', 'Cuerpo 80', '', 1, 1),
(82, 'Titulo 81', 'Cuerpo 81', '', 2, 2),
(83, 'Titulo 82', 'Cuerpo 82', '', 1, 3),
(84, 'Titulo 83', 'Cuerpo 83', '', 2, 4),
(85, 'Titulo 84', 'Cuerpo 84', '', 1, 5),
(86, 'Titulo 85', 'Cuerpo 85', '', 2, 1),
(87, 'Titulo 86', 'Cuerpo 86', '', 1, 2),
(88, 'Titulo 87', 'Cuerpo 87', '', 2, 3),
(89, 'Titulo 88', 'Cuerpo 88', '', 1, 4),
(90, 'Titulo 89', 'Cuerpo 89', '', 2, 5),
(91, 'Titulo 90', 'Cuerpo 90', '', 1, 1),
(92, 'Titulo 91', 'Cuerpo 91', '', 2, 2),
(93, 'Titulo 92', 'Cuerpo 92', '', 1, 3),
(94, 'Titulo 93', 'Cuerpo 93', '', 2, 4),
(95, 'Titulo 94', 'Cuerpo 94', '', 1, 5),
(96, 'Titulo 95', 'Cuerpo 95', '', 2, 1),
(97, 'Titulo 96', 'Cuerpo 96', '', 1, 2),
(98, 'Titulo 97', 'Cuerpo 97', '', 2, 3),
(99, 'Titulo 98', 'Cuerpo 98', '', 1, 4),
(100, 'Titulo 99', 'Cuerpo 99', '', 2, 5),
(101, 'Titulo 100', 'Cuerpo 100', '', 1, 1),
(102, 'Titulo 101', 'Cuerpo 101', '', 2, 2),
(103, 'Titulo 102', 'Cuerpo 102', '', 1, 3),
(104, 'Titulo 103', 'Cuerpo 103', '', 2, 4),
(105, 'Titulo 104', 'Cuerpo 104', '', 1, 5),
(106, 'Titulo 105', 'Cuerpo 105', '', 2, 1),
(107, 'Titulo 106', 'Cuerpo 106', '', 1, 2),
(108, 'Titulo 107', 'Cuerpo 107', '', 2, 3),
(109, 'Titulo 108', 'Cuerpo 108', '', 1, 4),
(110, 'Titulo 109', 'Cuerpo 109', '', 2, 5),
(111, 'Titulo 110', 'Cuerpo 110', '', 1, 1),
(112, 'Titulo 111', 'Cuerpo 111', '', 2, 2),
(113, 'Titulo 112', 'Cuerpo 112', '', 1, 3),
(114, 'Titulo 113', 'Cuerpo 113', '', 2, 4),
(115, 'Titulo 114', 'Cuerpo 114', '', 1, 5),
(116, 'Titulo 115', 'Cuerpo 115', '', 2, 1),
(117, 'Titulo 116', 'Cuerpo 116', '', 1, 2),
(118, 'Titulo 117', 'Cuerpo 117', '', 2, 3),
(119, 'Titulo 118', 'Cuerpo 118', '', 1, 4),
(120, 'Titulo 119', 'Cuerpo 119', '', 2, 5),
(121, 'Titulo 120', 'Cuerpo 120', '', 1, 1),
(122, 'Titulo 121', 'Cuerpo 121', '', 2, 2),
(123, 'Titulo 122', 'Cuerpo 122', '', 1, 3),
(124, 'Titulo 123', 'Cuerpo 123', '', 2, 4),
(125, 'Titulo 124', 'Cuerpo 124', '', 1, 5),
(126, 'Titulo 125', 'Cuerpo 125', '', 2, 1),
(127, 'Titulo 126', 'Cuerpo 126', '', 1, 2),
(128, 'Titulo 127', 'Cuerpo 127', '', 2, 3),
(129, 'Titulo 128', 'Cuerpo 128', '', 1, 4),
(130, 'Titulo 129', 'Cuerpo 129', '', 2, 5),
(131, 'Titulo 130', 'Cuerpo 130', '', 1, 1),
(132, 'Titulo 131', 'Cuerpo 131', '', 2, 2),
(133, 'Titulo 132', 'Cuerpo 132', '', 1, 3),
(134, 'Titulo 133', 'Cuerpo 133', '', 2, 4),
(135, 'Titulo 134', 'Cuerpo 134', '', 1, 5),
(136, 'Titulo 135', 'Cuerpo 135', '', 2, 1),
(137, 'Titulo 136', 'Cuerpo 136', '', 1, 2),
(138, 'Titulo 137', 'Cuerpo 137', '', 2, 3),
(139, 'Titulo 138', 'Cuerpo 138', '', 1, 4),
(140, 'Titulo 139', 'Cuerpo 139', '', 2, 5),
(141, 'Titulo 140', 'Cuerpo 140', '', 1, 1),
(142, 'Titulo 141', 'Cuerpo 141', '', 2, 2),
(143, 'Titulo 142', 'Cuerpo 142', '', 1, 3),
(144, 'Titulo 143', 'Cuerpo 143', '', 2, 4),
(145, 'Titulo 144', 'Cuerpo 144', '', 1, 5),
(146, 'Titulo 145', 'Cuerpo 145', '', 2, 1),
(147, 'Titulo 146', 'Cuerpo 146', '', 1, 2),
(148, 'Titulo 147', 'Cuerpo 147', '', 2, 3),
(149, 'Titulo 148', 'Cuerpo 148', '', 1, 4),
(150, 'Titulo 149', 'Cuerpo 149', '', 2, 5),
(151, 'Titulo 150', 'Cuerpo 150', '', 1, 1),
(152, 'Titulo 151', 'Cuerpo 151', '', 2, 2),
(153, 'Titulo 152', 'Cuerpo 152', '', 1, 3),
(154, 'Titulo 153', 'Cuerpo 153', '', 2, 4),
(155, 'Titulo 154', 'Cuerpo 154', '', 1, 5),
(156, 'Titulo 155', 'Cuerpo 155', '', 2, 1),
(157, 'Titulo 156', 'Cuerpo 156', '', 1, 2),
(158, 'Titulo 157', 'Cuerpo 157', '', 2, 3),
(159, 'Titulo 158', 'Cuerpo 158', '', 1, 4),
(160, 'Titulo 159', 'Cuerpo 159', '', 2, 5),
(161, 'Titulo 160', 'Cuerpo 160', '', 1, 1),
(162, 'Titulo 161', 'Cuerpo 161', '', 2, 2),
(163, 'Titulo 162', 'Cuerpo 162', '', 1, 3),
(164, 'Titulo 163', 'Cuerpo 163', '', 2, 4),
(165, 'Titulo 164', 'Cuerpo 164', '', 1, 5),
(166, 'Titulo 165', 'Cuerpo 165', '', 2, 1),
(167, 'Titulo 166', 'Cuerpo 166', '', 1, 2),
(168, 'Titulo 167', 'Cuerpo 167', '', 2, 3),
(169, 'Titulo 168', 'Cuerpo 168', '', 1, 4),
(170, 'Titulo 169', 'Cuerpo 169', '', 2, 5),
(171, 'Titulo 170', 'Cuerpo 170', '', 1, 1),
(172, 'Titulo 171', 'Cuerpo 171', '', 2, 2),
(173, 'Titulo 172', 'Cuerpo 172', '', 1, 3),
(174, 'Titulo 173', 'Cuerpo 173', '', 2, 4),
(175, 'Titulo 174', 'Cuerpo 174', '', 1, 5),
(176, 'Titulo 175', 'Cuerpo 175', '', 2, 1),
(177, 'Titulo 176', 'Cuerpo 176', '', 1, 2),
(178, 'Titulo 177', 'Cuerpo 177', '', 2, 3),
(179, 'Titulo 178', 'Cuerpo 178', '', 1, 4),
(180, 'Titulo 179', 'Cuerpo 179', '', 2, 5),
(181, 'Titulo 180', 'Cuerpo 180', '', 1, 1),
(182, 'Titulo 181', 'Cuerpo 181', '', 2, 2),
(183, 'Titulo 182', 'Cuerpo 182', '', 1, 3),
(184, 'Titulo 183', 'Cuerpo 183', '', 2, 4),
(185, 'Titulo 184', 'Cuerpo 184', '', 1, 5),
(186, 'Titulo 185', 'Cuerpo 185', '', 2, 1),
(187, 'Titulo 186', 'Cuerpo 186', '', 1, 2),
(188, 'Titulo 187', 'Cuerpo 187', '', 2, 3),
(189, 'Titulo 188', 'Cuerpo 188', '', 1, 4),
(190, 'Titulo 189', 'Cuerpo 189', '', 2, 5),
(191, 'Titulo 190', 'Cuerpo 190', '', 1, 1),
(192, 'Titulo 191', 'Cuerpo 191', '', 2, 2),
(193, 'Titulo 192', 'Cuerpo 192', '', 1, 3),
(194, 'Titulo 193', 'Cuerpo 193', '', 2, 4),
(195, 'Titulo 194', 'Cuerpo 194', '', 1, 5),
(196, 'Titulo 195', 'Cuerpo 195', '', 2, 1),
(197, 'Titulo 196', 'Cuerpo 196', '', 1, 2),
(198, 'Titulo 197', 'Cuerpo 197', '', 2, 3),
(199, 'Titulo 198', 'Cuerpo 198', '', 1, 4),
(200, 'Titulo 199', 'Cuerpo 199', '', 2, 5),
(201, 'Titulo 200', 'Cuerpo 200', '', 1, 1),
(202, 'Titulo 201', 'Cuerpo 201', '', 2, 2),
(203, 'Titulo 202', 'Cuerpo 202', '', 1, 3),
(204, 'Titulo 203', 'Cuerpo 203', '', 2, 4),
(205, 'Titulo 204', 'Cuerpo 204', '', 1, 5),
(206, 'Titulo 205', 'Cuerpo 205', '', 2, 1),
(207, 'Titulo 206', 'Cuerpo 206', '', 1, 2),
(208, 'Titulo 207', 'Cuerpo 207', '', 2, 3),
(209, 'Titulo 208', 'Cuerpo 208', '', 1, 4),
(210, 'Titulo 209', 'Cuerpo 209', '', 2, 5),
(211, 'Titulo 210', 'Cuerpo 210', '', 1, 1),
(212, 'Titulo 211', 'Cuerpo 211', '', 2, 2),
(213, 'Titulo 212', 'Cuerpo 212', '', 1, 3),
(214, 'Titulo 213', 'Cuerpo 213', '', 2, 4),
(215, 'Titulo 214', 'Cuerpo 214', '', 1, 5),
(216, 'Titulo 215', 'Cuerpo 215', '', 2, 1),
(217, 'Titulo 216', 'Cuerpo 216', '', 1, 2),
(218, 'Titulo 217', 'Cuerpo 217', '', 2, 3),
(219, 'Titulo 218', 'Cuerpo 218', '', 1, 4),
(220, 'Titulo 219', 'Cuerpo 219', '', 2, 5),
(221, 'Titulo 220', 'Cuerpo 220', '', 1, 1),
(222, 'Titulo 221', 'Cuerpo 221', '', 2, 2),
(223, 'Titulo 222', 'Cuerpo 222', '', 1, 3),
(224, 'Titulo 223', 'Cuerpo 223', '', 2, 4),
(225, 'Titulo 224', 'Cuerpo 224', '', 1, 5),
(226, 'Titulo 225', 'Cuerpo 225', '', 2, 1),
(227, 'Titulo 226', 'Cuerpo 226', '', 1, 2),
(228, 'Titulo 227', 'Cuerpo 227', '', 2, 3),
(229, 'Titulo 228', 'Cuerpo 228', '', 1, 4),
(230, 'Titulo 229', 'Cuerpo 229', '', 2, 5),
(231, 'Titulo 230', 'Cuerpo 230', '', 1, 1),
(232, 'Titulo 231', 'Cuerpo 231', '', 2, 2),
(233, 'Titulo 232', 'Cuerpo 232', '', 1, 3),
(234, 'Titulo 233', 'Cuerpo 233', '', 2, 4),
(235, 'Titulo 234', 'Cuerpo 234', '', 1, 5),
(236, 'Titulo 235', 'Cuerpo 235', '', 2, 1),
(237, 'Titulo 236', 'Cuerpo 236', '', 1, 2),
(238, 'Titulo 237', 'Cuerpo 237', '', 2, 3),
(239, 'Titulo 238', 'Cuerpo 238', '', 1, 4),
(240, 'Titulo 239', 'Cuerpo 239', '', 2, 5),
(241, 'Titulo 240', 'Cuerpo 240', '', 1, 1),
(242, 'Titulo 241', 'Cuerpo 241', '', 2, 2),
(243, 'Titulo 242', 'Cuerpo 242', '', 1, 3),
(244, 'Titulo 243', 'Cuerpo 243', '', 2, 4),
(245, 'Titulo 244', 'Cuerpo 244', '', 1, 5),
(246, 'Titulo 245', 'Cuerpo 245', '', 2, 1),
(247, 'Titulo 246', 'Cuerpo 246', '', 1, 2),
(248, 'Titulo 247', 'Cuerpo 247', '', 2, 3),
(249, 'Titulo 248', 'Cuerpo 248', '', 1, 4),
(250, 'Titulo 249', 'Cuerpo 249', '', 2, 5),
(251, 'Titulo 250', 'Cuerpo 250', '', 1, 1),
(252, 'Titulo 251', 'Cuerpo 251', '', 2, 2),
(253, 'Titulo 252', 'Cuerpo 252', '', 1, 3),
(254, 'Titulo 253', 'Cuerpo 253', '', 2, 4),
(255, 'Titulo 254', 'Cuerpo 254', '', 1, 5),
(256, 'Titulo 255', 'Cuerpo 255', '', 2, 1),
(257, 'Titulo 256', 'Cuerpo 256', '', 1, 2),
(258, 'Titulo 257', 'Cuerpo 257', '', 2, 3),
(259, 'Titulo 258', 'Cuerpo 258', '', 1, 4),
(260, 'Titulo 259', 'Cuerpo 259', '', 2, 5),
(261, 'Titulo 260', 'Cuerpo 260', '', 1, 1),
(262, 'Titulo 261', 'Cuerpo 261', '', 2, 2),
(263, 'Titulo 262', 'Cuerpo 262', '', 1, 3),
(264, 'Titulo 263', 'Cuerpo 263', '', 2, 4),
(265, 'Titulo 264', 'Cuerpo 264', '', 1, 5),
(266, 'Titulo 265', 'Cuerpo 265', '', 2, 1),
(267, 'Titulo 266', 'Cuerpo 266', '', 1, 2),
(268, 'Titulo 267', 'Cuerpo 267', '', 2, 3),
(269, 'Titulo 268', 'Cuerpo 268', '', 1, 4),
(270, 'Titulo 269', 'Cuerpo 269', '', 2, 5),
(271, 'Titulo 270', 'Cuerpo 270', '', 1, 1),
(272, 'Titulo 271', 'Cuerpo 271', '', 2, 2),
(273, 'Titulo 272', 'Cuerpo 272', '', 1, 3),
(274, 'Titulo 273', 'Cuerpo 273', '', 2, 4),
(275, 'Titulo 274', 'Cuerpo 274', '', 1, 5),
(276, 'Titulo 275', 'Cuerpo 275', '', 2, 1),
(277, 'Titulo 276', 'Cuerpo 276', '', 1, 2),
(278, 'Titulo 277', 'Cuerpo 277', '', 2, 3),
(279, 'Titulo 278', 'Cuerpo 278', '', 1, 4),
(280, 'Titulo 279', 'Cuerpo 279', '', 2, 5),
(281, 'Titulo 280', 'Cuerpo 280', '', 1, 1),
(282, 'Titulo 281', 'Cuerpo 281', '', 2, 2),
(283, 'Titulo 282', 'Cuerpo 282', '', 1, 3),
(284, 'Titulo 283', 'Cuerpo 283', '', 2, 4),
(285, 'Titulo 284', 'Cuerpo 284', '', 1, 5),
(286, 'Titulo 285', 'Cuerpo 285', '', 2, 1),
(287, 'Titulo 286', 'Cuerpo 286', '', 1, 2),
(288, 'Titulo 287', 'Cuerpo 287', '', 2, 3),
(289, 'Titulo 288', 'Cuerpo 288', '', 1, 4),
(290, 'Titulo 289', 'Cuerpo 289', '', 2, 5),
(291, 'Titulo 290', 'Cuerpo 290', '', 1, 1),
(292, 'Titulo 291', 'Cuerpo 291', '', 2, 2),
(293, 'Titulo 292', 'Cuerpo 292', '', 1, 3),
(294, 'Titulo 293', 'Cuerpo 293', '', 2, 4),
(295, 'Titulo 294', 'Cuerpo 294', '', 1, 5),
(296, 'Titulo 295', 'Cuerpo 295', '', 2, 1),
(297, 'Titulo 296', 'Cuerpo 296', '', 1, 2),
(298, 'Titulo 297', 'Cuerpo 297', '', 2, 3),
(299, 'Titulo 298', 'Cuerpo 298', '', 1, 4),
(300, 'Titulo 299', 'Cuerpo 299', '', 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE IF NOT EXISTS `prueba` (
  `idprueba` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`idprueba`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `prueba`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `idrole` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`idrole`),
  UNIQUE KEY `role` (`role`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `roles`
--

INSERT INTO `roles` (`idrole`, `role`) VALUES
(1, 'Admin'),
(2, 'Gestor'),
(3, 'Editor'),
(4, 'nuevoRole');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `fecha` date NOT NULL,
  `codigo` int(10) unsigned NOT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nombre`, `usuario`, `pass`, `email`, `role`, `estado`, `fecha`, `codigo`) VALUES
(1, 'nombre1', 'admin', '06d6adadec053f09d59a1584c59347098669a4ba', 'marciofuentes50@hotmail.com', 1, 1, '0000-00-00', 0),
(8, 'Marcio', 'MarcioF92', '06d6adadec053f09d59a1584c59347098669a4ba', 'marciofuentes50@gmail.com', 2, 0, '2014-06-23', 869415387),
(9, 'Marcio', 'usr2', '06d6adadec053f09d59a1584c59347098669a4ba', 'elmarcio81@hotmail.com', 3, 1, '2014-06-30', 869415386);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `widgets`
--

CREATE TABLE IF NOT EXISTS `widgets` (
  `idwidget` int(11) NOT NULL AUTO_INCREMENT,
  `carpeta` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `autor` varchar(30) NOT NULL,
  `version` varchar(30) NOT NULL,
  `habilitado` int(11) NOT NULL,
  PRIMARY KEY (`idwidget`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `widgets`
--

INSERT INTO `widgets` (`idwidget`, `carpeta`, `nombre`, `descripcion`, `autor`, `version`, `habilitado`) VALUES
(2, 'menu', 'Menú', 'La descripción del widget', 'Marcio Fuentes', '1.0', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
