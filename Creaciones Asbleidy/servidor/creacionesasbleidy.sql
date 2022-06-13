-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2022 a las 01:22:27
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `creacionesasbleidy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_pago`
--

CREATE TABLE `datos_pago` (
  `email` varchar(30) NOT NULL,
  `tipo_d` varchar(20) NOT NULL,
  `numero_d` int(11) NOT NULL,
  `metodo_pago` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `id_e` int(11) NOT NULL,
  `id_i` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `unidades_i` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- SE LE AGREGO NOMBRE, COLOR Y TALLA
-- nombre varchar(40),
-- color varchar(20),
-- talla int(11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_f` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_i` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `unidades_d` int(11) NOT NULL,
  `color` varchar(10) NOT NULL,
  `talla` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pse`
--

CREATE TABLE `pse` (
  `email` varchar(30) NOT NULL,
  `banco` varchar(30) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salida`
--

CREATE TABLE `salida` (
  `id_s` int(11) NOT NULL,
  `id_i` int(11) NOT NULL,
  `id_f` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `unidades_s` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `email` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `numero_t` int(11) NOT NULL,
  `fecha_c` date NOT NULL,
  `banco` varchar(30) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(30) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `tipo` varchar(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `ciudad` varchar(30) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_pago`
--
ALTER TABLE `datos_pago`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id_e`),
  ADD KEY `id_i` (`id_i`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_f`),
  ADD KEY `email` (`email`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_i`),
  ADD KEY `codigo` (`codigo`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `pse`
--
ALTER TABLE `pse`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `salida`
--
ALTER TABLE `salida`
  ADD PRIMARY KEY (`id_s`),
  ADD KEY `id_i` (`id_i`),
  ADD KEY `id_f` (`id_f`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id_e` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_f` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_i` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `salida`
--
ALTER TABLE `salida`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_pago`
--
-----------------------------
------------------AQUI VOY
ALTER TABLE `datos_pago`
  ADD CONSTRAINT `datos_pago_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usuario` (`email`);

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `entrada_ibfk_1` FOREIGN KEY (`id_i`) REFERENCES `inventario` (`id_i`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usuario` (`email`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`codigo`) REFERENCES `producto` (`codigo`);

--
-- Filtros para la tabla `pse`
--
ALTER TABLE `pse`
  ADD CONSTRAINT `pse_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usuario` (`email`);

--
-- Filtros para la tabla `salida`
--
ALTER TABLE `salida`
  ADD CONSTRAINT `salida_ibfk_1` FOREIGN KEY (`id_i`) REFERENCES `inventario` (`id_i`),
  ADD CONSTRAINT `salida_ibfk_2` FOREIGN KEY (`id_f`) REFERENCES `factura` (`id_f`);

--
-- Filtros para la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD CONSTRAINT `tarjeta_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usuario` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
