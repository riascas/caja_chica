-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2018 a las 15:28:05
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gred2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `ID_GASTO` int(11) NOT NULL,
  `ID_USUARIO` bigint(20) NOT NULL,
  `ID_SERVICIO` bigint(20) NOT NULL,
  `ID_TIPO_GASTO` bigint(20) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  `IMPORTE` decimal(30,2) DEFAULT NULL,
  `FECHA_EMISION` datetime DEFAULT NULL,
  `FECHA_VTO` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_simulador`
--

CREATE TABLE `gastos_simulador` (
  `ID_GASTOS_S` bigint(20) NOT NULL,
  `DETALLE` varchar(50) NOT NULL,
  `CUOTAS` int(11) NOT NULL,
  `FORMA_PAGO` varchar(30) DEFAULT NULL,
  `IMPORTE_TOTAL` decimal(30,2) NOT NULL,
  `OTROS_GASTOS` varchar(30) DEFAULT NULL,
  `FECHA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `ID_INGRESOS` int(11) NOT NULL,
  `ID_USUARIO` bigint(20) NOT NULL,
  `ID_TIPO_INGRESOS` int(11) NOT NULL,
  `IMPORTE` decimal(30,2) DEFAULT NULL,
  `FECHA_INGRESO` datetime DEFAULT NULL,
  `DESCRIPCION` varchar(50) NOT NULL,
  `IMPORTE_AHORRO` decimal(30,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `ID_MOVIMIENTOS` bigint(20) NOT NULL,
  `ID_CAJA` int(11) NOT NULL,
  `ID_SERVICIO` bigint(20) NOT NULL,
  `ID_USUARIO` bigint(20) NOT NULL,
  `ID_GASTO` int(11) NOT NULL,
  `FECHA` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `ID_SERVICIO` bigint(20) NOT NULL,
  `ID_USUARIO` bigint(20) NOT NULL,
  `DESCRIPCION` varchar(50) DEFAULT NULL,
  `FRECUENCIA` varchar(20) NOT NULL,
  `FORMA_PAGO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_gasto`
--

CREATE TABLE `tipo_gasto` (
  `ID_TIPO_GASTO` bigint(20) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_gasto`
--

INSERT INTO `tipo_gasto` (`ID_TIPO_GASTO`, `NOMBRE`) VALUES
(1, 'Fijo'),
(2, 'Variable'),
(3, 'Deuda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_ingresos`
--

CREATE TABLE `tipo_ingresos` (
  `ID_TIPO_INGRESOS` int(11) NOT NULL,
  `NOMBRE` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_ingresos`
--

INSERT INTO `tipo_ingresos` (`ID_TIPO_INGRESOS`, `NOMBRE`) VALUES
(1, 'Sueldo'),
(2, 'Prestamo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` bigint(20) NOT NULL,
  `NOMBRE` varchar(50) NOT NULL,
  `APELLIDO` varchar(50) NOT NULL,
  `DNI` varchar(11) NOT NULL,
  `CONTRASENA` varchar(12) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `ID_SESION` int(11) NOT NULL,
  `ID_CONFIRMADO` int(11) NOT NULL,
  `ID_UNICO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `NOMBRE`, `APELLIDO`, `DNI`, `CONTRASENA`, `EMAIL`, `ID_SESION`, `ID_CONFIRMADO`, `ID_UNICO`) VALUES
(101, 'Gabriel', 'Pereyra', '40672909', 'GabiAle97', 'Gabrielpereyra1997@gmail.com', 1, 1, '5be9bbb90ecae'),
(102, 'Gabriel', 'Pereyra', '40672909', 'GabiAle97', 'gabi_pereyra97@hotmail.com', 1, 1, '5be9bbf95a1ef');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`ID_GASTO`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`),
  ADD KEY `ID_SERVICIO` (`ID_SERVICIO`),
  ADD KEY `ID_TIPO_GASTO` (`ID_TIPO_GASTO`);

--
-- Indices de la tabla `gastos_simulador`
--
ALTER TABLE `gastos_simulador`
  ADD PRIMARY KEY (`ID_GASTOS_S`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`ID_INGRESOS`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`),
  ADD KEY `ID_TIPO_INGRESOS` (`ID_TIPO_INGRESOS`);

--
-- Indices de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`ID_MOVIMIENTOS`),
  ADD KEY `ID_CAJA` (`ID_CAJA`),
  ADD KEY `ID_SERVICIO` (`ID_SERVICIO`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`),
  ADD KEY `ID_GASTO` (`ID_GASTO`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`ID_SERVICIO`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`);

--
-- Indices de la tabla `tipo_gasto`
--
ALTER TABLE `tipo_gasto`
  ADD PRIMARY KEY (`ID_TIPO_GASTO`);

--
-- Indices de la tabla `tipo_ingresos`
--
ALTER TABLE `tipo_ingresos`
  ADD PRIMARY KEY (`ID_TIPO_INGRESOS`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `ID_GASTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gastos_simulador`
--
ALTER TABLE `gastos_simulador`
  MODIFY `ID_GASTOS_S` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `ID_INGRESOS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `ID_MOVIMIENTOS` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `ID_SERVICIO` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`),
  ADD CONSTRAINT `gastos_ibfk_2` FOREIGN KEY (`ID_SERVICIO`) REFERENCES `servicios` (`ID_SERVICIO`),
  ADD CONSTRAINT `gastos_ibfk_3` FOREIGN KEY (`ID_TIPO_GASTO`) REFERENCES `tipo_gasto` (`ID_TIPO_GASTO`);

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `ingresos_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`),
  ADD CONSTRAINT `ingresos_ibfk_2` FOREIGN KEY (`ID_TIPO_INGRESOS`) REFERENCES `tipo_ingresos` (`ID_TIPO_INGRESOS`);

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `movimientos_ibfk_1` FOREIGN KEY (`ID_CAJA`) REFERENCES `ingresos` (`ID_INGRESOS`),
  ADD CONSTRAINT `movimientos_ibfk_2` FOREIGN KEY (`ID_SERVICIO`) REFERENCES `servicios` (`ID_SERVICIO`),
  ADD CONSTRAINT `movimientos_ibfk_3` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`),
  ADD CONSTRAINT `movimientos_ibfk_4` FOREIGN KEY (`ID_GASTO`) REFERENCES `gastos` (`ID_GASTO`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `servicios_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
