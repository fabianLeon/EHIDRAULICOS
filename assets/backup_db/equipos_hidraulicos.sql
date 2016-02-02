-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2016 a las 18:47:10
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `equipos_hidraulicos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE IF NOT EXISTS `descripcion` (
  `k_descripcion` int(4) NOT NULL,
  `n_path_imagen` varchar(100) NOT NULL,
  `n_titulo` varchar(100) NOT NULL,
  `n_descripcion` varchar(600) NOT NULL,
  `k_servicio` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `k_servicio` int(2) NOT NULL,
  `n_titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `k_correo` varchar(50) CHARACTER SET utf8 NOT NULL,
  `n_nombre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `n_edificio_direccion` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `n_telefono` varchar(11) CHARACTER SET utf8 NOT NULL,
  `n_contrasena` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='Tabla de Usuarios';

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`k_correo`, `n_nombre`, `n_edificio_direccion`, `n_telefono`, `n_contrasena`) VALUES
('fabi_leon@outlook.com', 'Fabián Sánchez', 'edificio villa nueva', '3152191558', 'socito'),
('lauragocu@hotmail.com', 'laura gomez', NULL, '321274917', 'valentina34'),
('ludwingsanchez@outlook.com', 'ludwing sánchez', 'avenida 123', '3152191558', 'ludwing11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD PRIMARY KEY (`k_descripcion`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`k_servicio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`k_correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  MODIFY `k_descripcion` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `k_servicio` int(2) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD CONSTRAINT `descripcion_ibfk_1` FOREIGN KEY (`k_descripcion`) REFERENCES `servicio` (`k_servicio`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
