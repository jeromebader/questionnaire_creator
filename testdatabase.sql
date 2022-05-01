-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2022 a las 10:36:02
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `testdatabase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `einkauffragebogen`
--

CREATE TABLE `einkauffragebogen` (
  `AntwortID` int(11) NOT NULL,
  `ProjektID` int(11) NOT NULL,
  `Antwort1` int(11) NOT NULL,
  `Antwort2` int(11) NOT NULL,
  `Antwort3` int(11) NOT NULL,
  `Antwort4` int(11) NOT NULL,
  `Antwort5` int(11) NOT NULL,
  `Antwort6` int(11) NOT NULL,
  `Antwort7` int(11) NOT NULL,
  `Antwort8` int(11) NOT NULL,
  `Antwort9` int(11) NOT NULL,
  `Antwort10` int(11) NOT NULL,
  `FragebogenDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kundenfragebogen`
--

CREATE TABLE `kundenfragebogen` (
  `AntwortID` int(11) NOT NULL DEFAULT 0,
  `ProjektID` int(11) NOT NULL,
  `Antwort1` int(11) NOT NULL,
  `Antwort2` int(11) NOT NULL,
  `Antwort3` int(11) NOT NULL,
  `Antwort4` int(11) NOT NULL,
  `Antwort5` int(11) NOT NULL,
  `Antwort6` int(11) NOT NULL,
  `Antwort7` int(11) NOT NULL,
  `Antwort8` int(11) NOT NULL,
  `Antwort9` int(11) NOT NULL,
  `Antwort10` int(11) NOT NULL,
  `FragebogenDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mitarbeiterfragebogen`
--

CREATE TABLE `mitarbeiterfragebogen` (
  `AntwortID` int(11) NOT NULL DEFAULT 0,
  `ProjektID` int(11) NOT NULL,
  `Antwort1` int(11) NOT NULL,
  `Antwort2` int(11) NOT NULL,
  `Antwort3` int(11) NOT NULL,
  `Antwort4` int(11) NOT NULL,
  `Antwort5` int(11) NOT NULL,
  `Antwort6` int(11) NOT NULL,
  `Antwort7` int(11) NOT NULL,
  `Antwort8` int(11) NOT NULL,
  `Antwort9` int(11) NOT NULL,
  `Antwort10` int(11) NOT NULL,
  `FragebogenDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `einkauffragebogen`
--
ALTER TABLE `einkauffragebogen`
  ADD PRIMARY KEY (`AntwortID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `einkauffragebogen`
--
ALTER TABLE `einkauffragebogen`
  MODIFY `AntwortID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
