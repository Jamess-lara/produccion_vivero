-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2023 a las 07:04:40
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `produccion_vivero`
--
CREATE DATABASE IF NOT EXISTS `produccion_vivero` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `produccion_vivero`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `email`, `pass`) VALUES
(1, 'Usuario Admin', 'usuario', 'usuario@hotmail.com', '$2y$10$Tf83ZpU6j/Sf0YiJnWTE0OqBusOdphLZ31D5E.N7O68eXS2j88bRK'),
(2, 'Juan Ruben Romero', 'juan_ruben', 'juanruben1998@hotmail.com', '$2y$10$rEOhokuTYPE7dguC3RUEX.RF6aXPgcrDZ3DOp4TiOsOCmE3ogCktu'),
(7, 'Pedro Vicente', 'pvicente', 'pedrovicente@gmail.com', '$2y$10$O0XtVXcB.tQ.wBZxZ1GBHOILYB2cGFa8XarXaH6QhOKF0IQ8kql2m');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `email`, `nombre`, `direccion`) VALUES
(1, 'tiendaagrofernando@gmail.com', 'Tienda AgroFernando', 'Calle Dr. Carlos Feraud'),
(2, 'josuemaldonado1971@hotmail.com', 'Productos Agrícola de Calidad', 'Recinto Estero Verde'),
(5, 'agroquimicosmilagro@hotmail.com', 'AgroQuimicos', 'Avenida Colón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `existencia` int(11) NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id`, `nombre`, `precio`, `existencia`, `imagen`) VALUES
(1, 'Abono orgánico - saco de 45 kg', '30.00', 22, '1.jpg'),
(2, 'Fungicida - 1 Litro', '25.00', 13, '2.jpg'),
(3, 'Insecticida - 1 Litro', '20.00', 8, '3.jpg'),
(4, 'Herbicida - 1 Litro', '15.00', 11, '4.jpg'),
(5, 'Bioestimulantes - 1 Litro', '40.00', 10, '5.jpg'),
(6, 'Complemento para el cuidado del cacao', '12.00', 10, '6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `idinsumo` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `codigo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `idproveedor`, `idinsumo`, `fecha`, `precio`, `cantidad`, `total`, `codigo`) VALUES
(1, 0, 0, '2023-01-13 17:27:50', '0.00', 0, '200.00', ''),
(2, 0, 0, '2023-02-18 17:28:14', '0.00', 0, '250.00', ''),
(3, 0, 0, '2023-03-19 17:28:31', '0.00', 0, '215.00', ''),
(4, 0, 0, '2023-04-05 17:28:45', '0.00', 0, '225.00', ''),
(5, 0, 0, '2023-05-19 17:28:57', '0.00', 0, '275.00', ''),
(6, 0, 0, '2023-06-18 17:29:14', '0.00', 0, '300.00', ''),
(7, 1, 2, '2023-07-25 23:01:41', '25.00', 3, '75.00', '71'),
(8, 1, 4, '2023-07-25 23:01:41', '15.00', 3, '45.00', '71'),
(9, 2, 2, '2023-07-25 23:05:42', '25.00', 2, '50.00', '91'),
(10, 2, 5, '2023-07-25 23:05:42', '40.00', 4, '160.00', '91'),
(11, 2, 6, '2023-07-25 23:05:42', '12.00', 6, '72.00', '91');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproveedor` (`idproveedor`),
  ADD KEY `idinsumo` (`idinsumo`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_usuarios` (`usuario`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
