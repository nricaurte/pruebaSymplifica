-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2017 a las 23:30:08
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebasymplifica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignar_empleados_empleador`
--

CREATE TABLE `asignar_empleados_empleador` (
  `idasignacion` int(5) NOT NULL,
  `empleador` int(5) DEFAULT NULL,
  `empleado` int(5) DEFAULT NULL,
  `fecha_asignacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignar_empleados_empleador`
--

INSERT INTO `asignar_empleados_empleador` (`idasignacion`, `empleador`, `empleado`, `fecha_asignacion`) VALUES
(4, 7, 6, '2017-08-26 16:25:59'),
(5, 7, 7, '2017-08-26 16:26:30'),
(6, 8, 8, '2017-08-26 16:27:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `idcontrato` int(5) NOT NULL,
  `tipoContrato` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`idcontrato`, `tipoContrato`) VALUES
(1, 'Término indefinido'),
(2, 'Termino definido'),
(3, 'Tiempo parcial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleador`
--

CREATE TABLE `empleador` (
  `empdor_idempleador` int(5) NOT NULL,
  `empdor_nombres` varchar(45) DEFAULT NULL,
  `empdor_sexo` varchar(5) DEFAULT NULL,
  `empdor_apellidos` varchar(45) DEFAULT NULL,
  `empdor_cedula` varchar(12) DEFAULT NULL,
  `empdor_telefono` varchar(12) DEFAULT NULL,
  `empdor_direccion` varchar(25) DEFAULT NULL,
  `empdor_fecha_nacimiento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleador`
--

INSERT INTO `empleador` (`empdor_idempleador`, `empdor_nombres`, `empdor_sexo`, `empdor_apellidos`, `empdor_cedula`, `empdor_telefono`, `empdor_direccion`, `empdor_fecha_nacimiento`) VALUES
(7, 'Diego ', 'M', 'Galindo', '123456789', '321454545634', 'Carrera 5 # 1 - 3', '1990-08-05 00:00:00'),
(8, 'Andrés ', 'M', 'Salazar ', '123456789', '321353345', 'Carrera 5 # 1 - 3', '1990-08-11 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `empdos_idempleado` int(5) NOT NULL,
  `empdos_nombres` varchar(45) DEFAULT NULL,
  `empdos_sexo` varchar(5) DEFAULT NULL,
  `empdos_apellidos` varchar(45) DEFAULT NULL,
  `empdos_cedula` varchar(12) DEFAULT NULL,
  `empdos_telefono` varchar(12) DEFAULT NULL,
  `empdos_contrato` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`empdos_idempleado`, `empdos_nombres`, `empdos_sexo`, `empdos_apellidos`, `empdos_cedula`, `empdos_telefono`, `empdos_contrato`) VALUES
(6, 'Pedro ', 'M', 'Gomez', '234567891', '312445345', 1),
(7, 'Natalia ', 'F', 'Landino', '345678912', '3213434343', 3),
(8, 'Carlos ', 'M', 'Sarmiento', '567891234', '32421234242', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignar_empleados_empleador`
--
ALTER TABLE `asignar_empleados_empleador`
  ADD PRIMARY KEY (`idasignacion`),
  ADD KEY `empleador` (`empleador`),
  ADD KEY `empleado` (`empleado`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`idcontrato`);

--
-- Indices de la tabla `empleador`
--
ALTER TABLE `empleador`
  ADD PRIMARY KEY (`empdor_idempleador`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`empdos_idempleado`),
  ADD KEY `contrato` (`empdos_contrato`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignar_empleados_empleador`
--
ALTER TABLE `asignar_empleados_empleador`
  MODIFY `idasignacion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `idcontrato` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `empleador`
--
ALTER TABLE `empleador`
  MODIFY `empdor_idempleador` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `empdos_idempleado` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignar_empleados_empleador`
--
ALTER TABLE `asignar_empleados_empleador`
  ADD CONSTRAINT `asignar_empleados_empleador_ibfk_1` FOREIGN KEY (`empleador`) REFERENCES `empleador` (`empdor_idempleador`),
  ADD CONSTRAINT `asignar_empleados_empleador_ibfk_2` FOREIGN KEY (`empleado`) REFERENCES `empleados` (`empdos_idempleado`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`empdos_contrato`) REFERENCES `contrato` (`idcontrato`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
