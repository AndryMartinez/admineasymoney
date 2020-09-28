-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2020 a las 03:24:31
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `easymoney`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` int(10) NOT NULL,
  `monto` varchar(252) NOT NULL,
  `fecha` varchar(252) NOT NULL,
  `status` varchar(255) NOT NULL,
  `usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`id`, `monto`, `fecha`, `status`, `usuario`) VALUES
(2, '$30', '26/09/2020', 'pendiente', 1),
(3, '$100', 'hoy', 'pendiente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `url` varchar(255) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `dataextra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `tipo`, `url`, `valor`, `dataextra`) VALUES
(1, 'video', 'https://www.youtube.com/watch?v=4xhs0ir6Xjs', '10', ''),
(2, 'video', 'dwadwadwa', '20', ''),
(3, 'video', 'wdadwa', '12', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombreCompleto` varchar(25) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `correoPaypal` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `monedas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombreCompleto`, `Direccion`, `correoPaypal`, `foto`, `monedas`) VALUES
(1, 'Andry', 'caricuao', 'laviejaescuelac@gmail.com', 'imagen.jpg', '2000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `u_t`
--

CREATE TABLE `u_t` (
  `id_u` int(10) NOT NULL,
  `id_t` int(10) NOT NULL,
  `views` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `renovacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `u_t`
--

INSERT INTO `u_t` (`id_u`, `id_t`, `views`, `fecha`, `renovacion`) VALUES
(1, 1, '1', '26/09/2020', '27/09/2020');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `u_t`
--
ALTER TABLE `u_t`
  ADD PRIMARY KEY (`id_u`,`id_t`),
  ADD KEY `id_t` (`id_t`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `u_t`
--
ALTER TABLE `u_t`
  ADD CONSTRAINT `u_t_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `usuarios` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `u_t_ibfk_2` FOREIGN KEY (`id_t`) REFERENCES `tareas` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
