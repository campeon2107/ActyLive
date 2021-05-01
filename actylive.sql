-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-03-2021 a las 17:43:41
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `actylive`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_actividad` int(12) NOT NULL,
  `titulo_actividad` varchar(40) NOT NULL,
  `descripcion_actividad` text NOT NULL,
  `fecha_actividad` date NOT NULL,
  `id_usuario_actividad` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_actividad`, `titulo_actividad`, `descripcion_actividad`, `fecha_actividad`, `id_usuario_actividad`) VALUES
(6, 'Presentacion Personero', 'charla con los chicos del colegio de democracia', '2021-03-15', 1042732285);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(12) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `edad_usuario` int(3) NOT NULL,
  `telefono_usuario` varchar(12) NOT NULL,
  `ciudad_usuario` varchar(45) NOT NULL,
  `user_usuario` varchar(60) NOT NULL,
  `pass_usuario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `edad_usuario`, `telefono_usuario`, `ciudad_usuario`, `user_usuario`, `pass_usuario`) VALUES
(1042732285, 'Yeimar Lemus', 18, '3145646456', 'Medellin', 'yeimar@gmail.com', 'Ye1m4rL6mu3..5px'),
(1045022754, 'Daniel', 26, '3045625480', 'Medellin', 'juan@gmail.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `id_usuario_actividad` (`id_usuario_actividad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_actividad` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD CONSTRAINT `fk_id_usuario_id_actividad` FOREIGN KEY (`id_usuario_actividad`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
