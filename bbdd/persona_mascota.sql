-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2019 a las 02:13:24
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `persona_mascota`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especie`
--

CREATE TABLE `especie` (
  `esp_id` int(11) NOT NULL,
  `esp_nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `especie`
--

INSERT INTO `especie` (`esp_id`, `esp_nombre`) VALUES
(16, 'conejo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `masc_id` int(11) NOT NULL,
  `pers_id` int(11) NOT NULL,
  `pers_rut` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `esp_id` int(11) NOT NULL,
  `esp_nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`masc_id`, `pers_id`, `pers_rut`, `esp_id`, `esp_nombre`) VALUES
(4, 9, '1-1', 16, 'conejo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `pers_id` int(11) NOT NULL,
  `pers_rut` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pers_nombre` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pers_apellido` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pers_direccion` varchar(50) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `pers_telefono` varchar(8) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`pers_id`, `pers_rut`, `pers_nombre`, `pers_apellido`, `pers_direccion`, `pers_telefono`) VALUES
(9, '1-1', 'Luis', 'Lopez', 'Los Limoneros 1111', '11111111');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`esp_id`),
  ADD UNIQUE KEY `esp_nombre` (`esp_nombre`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`masc_id`),
  ADD KEY `pers_id` (`pers_id`),
  ADD KEY `esp_id` (`esp_id`),
  ADD KEY `pers_rut` (`pers_rut`),
  ADD KEY `esp_nombre` (`esp_nombre`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`pers_id`),
  ADD UNIQUE KEY `pers_rut` (`pers_rut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
  MODIFY `esp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `masc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `pers_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`esp_id`) REFERENCES `especie` (`esp_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mascota_ibfk_2` FOREIGN KEY (`pers_id`) REFERENCES `persona` (`pers_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mascota_ibfk_3` FOREIGN KEY (`pers_rut`) REFERENCES `persona` (`pers_rut`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mascota_ibfk_4` FOREIGN KEY (`esp_nombre`) REFERENCES `especie` (`esp_nombre`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
