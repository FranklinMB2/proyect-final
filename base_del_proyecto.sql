-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2023 a las 17:29:00
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_del_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(10) NOT NULL,
  `primer_nombre` varchar(50) NOT NULL,
  `segundo_nombre` varchar(50) NOT NULL,
  `primer_apellido` varchar(50) NOT NULL,
  `segundo_apellido` varchar(50) NOT NULL,
  `identificacion` varchar(11) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `identificacion`, `telefono`, `direccion`, `email`) VALUES
(1, 'Harlinton', '', 'Palacios', 'Mosquera', '24r24', '2424', 'utch', 'dfhjdfhj@gmai.com'),
(2, 'delascar', 'manuel', 'mosquera', 'sanches', '1133629039', '3122693571', 'Barrios Reposo', 'franklin@mail.com'),
(3, 'marlon', 'andres', 'mosquera', 'blandon', '1133629039', '3122691542', 'cede repso', 'juan@mail.com'),
(4, 'aurelio', 'andres', 'rojas', 'lopez', '1133629039', '3142697163', 'Barrios Reposo', 'aurelio.1990@gmail.com'),
(5, 'Yiber', 'Andres', 'Mena', 'Robledo', '1123445667', '3122691542', 'Pallita', 'yeiberandres@gmail.com'),
(6, 'Liopo', '', 'Blandon', 'Perea', '12344567890', '3122693571', 'Sona Norte', 'liopo2@gmail.com'),
(7, 'Yarwin', '', 'Espinoza', 'Moreno', '12344567890', '31672890', 'Barrios Reposo', 'franklin@mail.com'),
(9, 'Luz', 'Mileidy', 'Blandon', 'Perea', '1123445667', '3122691542', 'Barrios Reposo', 'luzmilaidy@gmail.com'),
(10, 'Maria', 'Magdalena', 'Hernandez', 'Palacios', '1122345875', '3122693571', 'Barrios Reposo', 'maria123@gmail.com'),
(11, 'Sneider', 'Andres', 'Palomeque', 'Blandon', '1123445667', '31672890', 'seno sur', 'sneider23@gmail.com'),
(12, 'Luz dary', '', 'mosquera', 'Blandon', '1004010962', '3122691542', 'Sona Norte', 'luzdary@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(10) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `rol`) VALUES
(1, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_tipo_usuario` int(10) NOT NULL,
  `id_persona` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_usuario`, `password`, `id_tipo_usuario`, `id_persona`) VALUES
(1, 'dfgdfg', '1213', 1, 1),
(2, 'delascar23', 'franklin123', 1, 1),
(3, 'marlon23', 'marlon1234', 1, 2),
(4, 'aurelio1990', 'aurelio2003', 1, 3),
(5, 'Yeiber1234', 'yeiber12345', 1, 4),
(6, 'Liopo2', 'liopo2134567', 1, 5),
(7, 'yarwin_jorge', 'jorgue12345', 1, 6),
(9, 'Luzmileidy', 'mileidy12345', 1, 7),
(10, 'Maria123', 'maria123', 1, 9),
(11, 'delascar23', '$2y$10$afFnJqOWU7arp', 1, 10),
(12, 'delascar23', '$2y$10$5I6I847FCVYBr', 1, 11);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
