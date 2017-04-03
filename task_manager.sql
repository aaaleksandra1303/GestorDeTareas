-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2017 a las 13:18:03
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `task_manager`
--
CREATE DATABASE IF NOT EXISTS `task_manager` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `task_manager`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `admin_password` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `client_password` varchar(250) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_password`) VALUES
(1, 'David', '1234'),
(2, 'Juan', '4321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `packs`
--

CREATE TABLE IF NOT EXISTS `packs` (
  `pack_id` int(11) NOT NULL AUTO_INCREMENT,
  `pack_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pack_desc` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`pack_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `packs`
--

INSERT INTO `packs` (`pack_id`, `pack_name`, `pack_desc`) VALUES
(1, 'pack1', 'Descripción de este nuestro pack 1'),
(2, 'pack2', 'Remitirse a la descripción del pack 1 sustituyendo el 1 por un 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `task_description` longtext COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_name`, `task_description`) VALUES
(1, 'tarea1', ''),
(2, 'tarea2', ''),
(3, 'tarea3', ''),
(4, 'task1', ''),
(5, 'task2', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `technicians`
--

CREATE TABLE IF NOT EXISTS `technicians` (
  `tech_id` int(11) NOT NULL AUTO_INCREMENT,
  `tech_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tech_password` varchar(250) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`tech_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `technicians`
--

INSERT INTO `technicians` (`tech_id`, `tech_name`, `tech_password`) VALUES
(1, 'tecnico1', '1234'),
(2, 'tecnico2', '4321');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
