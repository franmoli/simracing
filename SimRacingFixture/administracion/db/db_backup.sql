-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-07-2020 a las 01:43:51
-- Versión del servidor: 5.7.24
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
-- Base de datos: `simracing_fixture`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campeonato`
--

CREATE TABLE `campeonato` (
  `id_liga` int(11) NOT NULL,
  `nombre_campeonato` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id_campeonato` int(11) NOT NULL,
  `nombre_campeonato` varchar(60) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `circuito` varchar(60) NOT NULL,
  `categorias` text NOT NULL,
  `inicio_transmision` datetime DEFAULT NULL,
  `link_transmision` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liga`
--

CREATE TABLE `liga` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `pais` varchar(60) NOT NULL,
  `sitio_web` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_permisos`
--

CREATE TABLE `nivel_permisos` (
  `id_nivel_permisos` int(11) NOT NULL,
  `detalle_nivel_permisos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nivel_permisos`
--

INSERT INTO `nivel_permisos` (`id_nivel_permisos`, `detalle_nivel_permisos`) VALUES
(1, 'Piloto'),
(2, 'Organizador'),
(3, 'Administrador'),
(4, 'Developer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plataforma_simulador`
--

CREATE TABLE `plataforma_simulador` (
  `id_simulador` int(11) NOT NULL,
  `plataforma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes_sociales_liga`
--

CREATE TABLE `redes_sociales_liga` (
  `id_liga` int(11) NOT NULL,
  `red_social` varchar(60) NOT NULL,
  `link` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `simulador`
--

CREATE TABLE `simulador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `foto` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre_real` varchar(60) NOT NULL,
  `apellido_real` varchar(60) NOT NULL,
  `nombre_usaurio` varchar(60) NOT NULL,
  `clave_usuario` varchar(60) NOT NULL,
  `correo_electronico` varchar(60) NOT NULL,
  `nivel_permisos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campeonato`
--
ALTER TABLE `campeonato`
  ADD PRIMARY KEY (`id_liga`,`nombre_campeonato`),
  ADD KEY `id_liga` (`id_liga`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`,`nombre_campeonato`,`id_campeonato`) USING BTREE,
  ADD KEY `id_campeonato` (`nombre_campeonato`),
  ADD KEY `id_campeonato_2` (`id_campeonato`),
  ADD KEY `nombre_campeonato` (`nombre_campeonato`),
  ADD KEY `id_campeonato_3` (`id_campeonato`,`nombre_campeonato`);

--
-- Indices de la tabla `liga`
--
ALTER TABLE `liga`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nivel_permisos`
--
ALTER TABLE `nivel_permisos`
  ADD PRIMARY KEY (`id_nivel_permisos`);

--
-- Indices de la tabla `plataforma_simulador`
--
ALTER TABLE `plataforma_simulador`
  ADD PRIMARY KEY (`id_simulador`,`plataforma`),
  ADD KEY `id_simulador` (`id_simulador`);

--
-- Indices de la tabla `redes_sociales_liga`
--
ALTER TABLE `redes_sociales_liga`
  ADD PRIMARY KEY (`id_liga`,`red_social`),
  ADD KEY `id_liga` (`id_liga`);

--
-- Indices de la tabla `simulador`
--
ALTER TABLE `simulador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombre_usaurio`),
  ADD KEY `nivel_permisos` (`nivel_permisos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `liga`
--
ALTER TABLE `liga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nivel_permisos`
--
ALTER TABLE `nivel_permisos`
  MODIFY `id_nivel_permisos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `simulador`
--
ALTER TABLE `simulador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `campeonato`
--
ALTER TABLE `campeonato`
  ADD CONSTRAINT `campeonato_ibfk_1` FOREIGN KEY (`id_liga`) REFERENCES `liga` (`id`);

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`id_campeonato`) REFERENCES `liga` (`id`),
  ADD CONSTRAINT `evento_ibfk_2` FOREIGN KEY (`id_campeonato`,`nombre_campeonato`) REFERENCES `campeonato` (`id_liga`, `nombre_campeonato`);

--
-- Filtros para la tabla `plataforma_simulador`
--
ALTER TABLE `plataforma_simulador`
  ADD CONSTRAINT `plataforma_simulador_ibfk_1` FOREIGN KEY (`id_simulador`) REFERENCES `simulador` (`id`);

--
-- Filtros para la tabla `redes_sociales_liga`
--
ALTER TABLE `redes_sociales_liga`
  ADD CONSTRAINT `redes_sociales_liga_ibfk_1` FOREIGN KEY (`id_liga`) REFERENCES `liga` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`nivel_permisos`) REFERENCES `nivel_permisos` (`id_nivel_permisos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
