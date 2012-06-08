-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2012 a las 00:13:33
-- Versión del servidor: 5.5.9
-- Versión de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `upv_inscripcion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `rut` varchar(12) NOT NULL,
  `fecha_nacimiento` datetime NOT NULL,
  `sexo` int(2) unsigned DEFAULT NULL,
  `mail_personal` varchar(255) DEFAULT NULL,
  `mail_institucion` varchar(255) NOT NULL,
  `fono_fijo` varchar(50) DEFAULT NULL,
  `fono_movil` varchar(50) DEFAULT NULL,
  `sede` int(2) unsigned NOT NULL,
  `facultad` varchar(255) DEFAULT NULL,
  `carrera` varchar(255) DEFAULT NULL,
  `titulo_profesional` varchar(255) DEFAULT NULL,
  `grado_academico` varchar(255) DEFAULT NULL,
  `foto_personal` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sexo` (`sexo`),
  KEY `sede` (`sede`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` VALUES(1, 'Rodrigo', 'Miranda Gutiérrez', '13253107-2', '1892-01-05 00:00:00', 1, 'rmg.contacto@gmail.com', 'info@gmail.com', NULL, NULL, 1, NULL, NULL, NULL, NULL, '13253107-2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion_sede`
--

CREATE TABLE `opcion_sede` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `etiqueta` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `opcion_sede`
--

INSERT INTO `opcion_sede` VALUES(1, 'Antofagasta');
INSERT INTO `opcion_sede` VALUES(2, 'La Serena');
INSERT INTO `opcion_sede` VALUES(3, 'Santiago');
INSERT INTO `opcion_sede` VALUES(4, 'Chillan');
INSERT INTO `opcion_sede` VALUES(5, 'Concepción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion_sexo`
--

CREATE TABLE `opcion_sexo` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `etiqueta` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `opcion_sexo`
--

INSERT INTO `opcion_sexo` VALUES(1, 'Mujer');
INSERT INTO `opcion_sexo` VALUES(2, 'Hombre');

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`sede`) REFERENCES `opcion_sede` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion_ibfk_2` FOREIGN KEY (`sexo`) REFERENCES `opcion_sexo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
