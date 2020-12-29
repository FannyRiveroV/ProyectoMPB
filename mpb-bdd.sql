-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 30-11-2020 a las 23:02:28
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mpb-bdd`
--
CREATE DATABASE IF NOT EXISTS `mpb-bdd` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `mpb-bdd`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8_bin NOT NULL,
  `apellido_paterno` varchar(45) COLLATE utf8_bin NOT NULL,
  `apellido_materno` varchar(45) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(45) COLLATE utf8_bin NOT NULL,
  `correo` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_bin NOT NULL,
  `id_comuna` int(11) DEFAULT NULL,
  PRIMARY KEY (`idcliente`),
  KEY `id_comuna_idx` (`id_comuna`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombre`, `apellido_paterno`, `apellido_materno`, `telefono`, `correo`, `password`, `id_comuna`) VALUES
(1, 'David', 'Norambuena', 'Castro', '+56912345678', 'dn@gmail.com', 'elpepe1234', 1),
(2, 'Javiera', 'Sanchez', 'Castro', '+56912345612', 'javii@gmail.com', 'hola1234', 5),
(3, 'Daniel', 'Perez', 'Montecinos', '+56945625623', 'danii@gmail.com', 'elpo234', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comuna`
--

DROP TABLE IF EXISTS `comuna`;
CREATE TABLE IF NOT EXISTS `comuna` (
  `idcomuna` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_comuna` varchar(60) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idcomuna`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `comuna`
--

INSERT INTO `comuna` (`idcomuna`, `nombre_comuna`) VALUES
(1, 'Alhue'),
(2, 'Buin'),
(3, 'Calera de Tango'),
(4, 'Cerrillos'),
(5, 'Cerro Navia'),
(6, 'Colina'),
(7, 'Conchali'),
(8, 'Curacavi'),
(9, 'El Bosque'),
(10, 'El Monte'),
(11, 'Estacion Central'),
(12, 'Huechuraba'),
(13, 'Independencia'),
(14, 'Isla de Maipo'),
(15, 'La Cisterna'),
(16, 'La Florida'),
(17, 'La Granja'),
(18, 'Lampa'),
(19, 'La Pintana'),
(20, 'La Reina'),
(21, 'Las Condes'),
(22, 'Lo Barnechea'),
(23, 'Lo Espejo'),
(24, 'Lo Prado'),
(25, 'Macul'),
(26, 'Maipu'),
(27, 'Maria Pinto'),
(28, 'Melipilla'),
(29, 'Nunoa'),
(30, 'Padre Hurtado'),
(31, 'Paine'),
(32, 'Pedro Aguirre Cerda'),
(33, 'Penaflor'),
(34, 'Penalolen'),
(35, 'Pirque'),
(36, 'Providencia'),
(37, 'Pudahuel'),
(38, 'Puente Alto'),
(39, 'Quilicura'),
(40, 'Quinta Normal'),
(41, 'Recoleta'),
(42, 'Renca'),
(43, 'San Bernardo'),
(44, 'San Joaquín'),
(45, 'San Jose de Maipo'),
(46, 'San Miguel'),
(47, 'San Pedro'),
(48, 'San Ramon'),
(49, 'Santiago'),
(50, 'Talagante'),
(51, 'Tiltil'),
(52, 'Vitacura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

DROP TABLE IF EXISTS `curso`;
CREATE TABLE IF NOT EXISTS `curso` (
  `idcurso` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_curso` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idcurso`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`idcurso`, `nombre_curso`) VALUES
(1, 'cocina'),
(2, 'reposteria'),
(3, 'carpinteria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interes`
--

DROP TABLE IF EXISTS `interes`;
CREATE TABLE IF NOT EXISTS `interes` (
  `id_cliente` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  KEY `id_cliente_idx` (`id_cliente`),
  KEY `id_curso_idx` (`id_curso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `interes`
--

INSERT INTO `interes` (`id_cliente`, `id_curso`) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
