-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2018 a las 16:05:41
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `php_observacion`
--
use crud;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculaobs`
--

CREATE TABLE IF NOT EXISTS `matriculaobs` (
`idobs` int(11) NOT NULL,
  `idalumno` int(11) DEFAULT NULL,
  `codalumno` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `codmatri` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `obs` text
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='Tabla matricula observacion';

--
-- Volcado de datos para la tabla `matriculaobs`
--

INSERT INTO `matriculaobs` (`idobs`, `idalumno`, `codalumno`, `codmatri`, `fecha`, `obs`) VALUES
(1, 5175, '23980956', '42128306141AAGEJE151018', '2018-10-15', 'PAGO MEDIA BECA AL CONTADO '),
(9, 2343, '32456786', '343453', '2018-10-15', 'PAGO ADELANTADO UNA CUOTA'),
(10, 2343, '54678909', '454646', '2018-10-16', 'SE HARA ENTREGA DE DIPLOMA DE HONOR'),
(11, 4323, '23126578', '65676', '2018-10-16', 'LLEGO TARDE A SU ASIGNATURA DE COMPUTACION');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `matriculaobs`
--
ALTER TABLE `matriculaobs`
 ADD PRIMARY KEY (`idobs`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `matriculaobs`
--
ALTER TABLE `matriculaobs`
MODIFY `idobs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
