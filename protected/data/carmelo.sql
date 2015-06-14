-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2015 a las 17:59:19
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `carmelo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actos`
--

CREATE TABLE IF NOT EXISTS `actos` (
`id_acto` int(8) NOT NULL,
  `asunto` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `lugar` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `uniformidad` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `presidido_por` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `material_necesario` text COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `actos`
--

INSERT INTO `actos` (`id_acto`, `asunto`, `lugar`, `fecha`, `hora`, `uniformidad`, `observaciones`, `presidido_por`, `material_necesario`) VALUES
(3, 'toma de control', '', '0000-00-00', '00:00:00', '', '', '', ''),
(4, 'bandera', 'sdsdsfdsdfds', '2015-06-10', '12:00:00', '', 'cscs', 'sda', 's');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitado`
--

CREATE TABLE IF NOT EXISTS `invitado` (
`id_invitado` int(8) NOT NULL,
  `id_acto` int(8) NOT NULL,
  `id_persona` int(8) NOT NULL,
  `asiste` enum('si','no') COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT 'si'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `invitado`
--

INSERT INTO `invitado` (`id_invitado`, `id_acto`, `id_persona`, `asiste`) VALUES
(1, 3, 13, 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
`id_personas` int(8) NOT NULL,
  `tratamiento` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `empleo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cargos` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `localidad` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `provincia` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cp` int(5) NOT NULL,
  `comunidad` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `movil` int(9) NOT NULL,
  `cooporativo` int(9) NOT NULL,
  `toma_posesion` date NOT NULL,
  `fecha_de_cese` varchar(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_unidad` int(8) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_personas`, `tratamiento`, `empleo`, `nombre`, `apellidos`, `dni`, `cargos`, `email`, `direccion`, `localidad`, `provincia`, `cp`, `comunidad`, `movil`, `cooporativo`, `toma_posesion`, `fecha_de_cese`, `observaciones`, `id_unidad`) VALUES
(13, '', '', 'pedro', '', '', '', '', '', '', '', 0, '', 0, 0, '0000-00-00', '0000-00-00', '', 5),
(22, '', '', 'poll', '', '', '', '', '', '', '', 0, '', 0, 0, '2015-06-17', '2015-06-14', '', 5),
(23, '', '', 'cvbcvbc', '', '', '', '', '', '', '', 0, '', 0, 0, '0000-00-00', '0000-00-00', '', 5),
(24, '', 'xcvx', 'cvxcvxcv', 'xcvxcvxc', '', '', '', '', '', '', 0, '', 0, 0, '0000-00-00', '', '', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE IF NOT EXISTS `unidad` (
`id_unidad` int(8) NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cp` int(5) NOT NULL,
  `localidad` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `comunidad` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `provincia` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` int(20) NOT NULL,
  `cooporativo` int(20) NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`id_unidad`, `nombre`, `direccion`, `cp`, `localidad`, `comunidad`, `provincia`, `telefono`, `cooporativo`, `email`) VALUES
(5, 'gamm', 'sdf', 444, '', '', '', 0, 0, ''),
(6, '', '', 0, '', 'asdasdasdasda ada dadada', 'sfrwer', 0, 0, ''),
(7, 'sdasfsfsd', '', 0, '', '', '', 0, 0, ''),
(8, 'asads', '', 0, '', '', '', 0, 0, ''),
(9, 'qwdqdasxs', '', 0, '', '', '', 0, 0, 'asa'),
(10, 'ume', 'sdsdasd', 0, '', '', '', 0, 0, ''),
(11, 'une valencia', '', 0, '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`id_usuario` int(8) NOT NULL,
  `usuario` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contraseña` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correoElectronico` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_alta` date NOT NULL,
  `privilegios` int(2) NOT NULL,
  `observaciones` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `actualizado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actos`
--
ALTER TABLE `actos`
 ADD PRIMARY KEY (`id_acto`);

--
-- Indices de la tabla `invitado`
--
ALTER TABLE `invitado`
 ADD PRIMARY KEY (`id_invitado`), ADD KEY `id_acto` (`id_acto`), ADD KEY `id_persona` (`id_persona`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
 ADD PRIMARY KEY (`id_personas`), ADD KEY `id_unidad` (`id_unidad`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
 ADD PRIMARY KEY (`id_unidad`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`id_usuario`), ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actos`
--
ALTER TABLE `actos`
MODIFY `id_acto` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `invitado`
--
ALTER TABLE `invitado`
MODIFY `id_invitado` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
MODIFY `id_personas` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `unidad`
--
ALTER TABLE `unidad`
MODIFY `id_unidad` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `id_usuario` int(8) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `invitado`
--
ALTER TABLE `invitado`
ADD CONSTRAINT `fk-actos_inivitado` FOREIGN KEY (`id_acto`) REFERENCES `actos` (`id_acto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_personas_invitado` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_personas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
ADD CONSTRAINT `fk_persona_unidad` FOREIGN KEY (`id_unidad`) REFERENCES `unidad` (`id_unidad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
