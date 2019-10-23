-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2019 a las 01:46:40
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vereador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(50) COLLATE utf8_bin NOT NULL,
  `senha` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contatos`
--

CREATE TABLE `contatos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `email` varchar(150) COLLATE utf8_bin NOT NULL,
  `mensagem` varchar(2000) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gabinete`
--

CREATE TABLE `gabinete` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `cargo` varchar(50) COLLATE utf8_bin NOT NULL,
  `foto` varchar(500) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagens`
--

CREATE TABLE `imagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagem` varchar(1000) COLLATE utf8_bin NOT NULL,
  `fk_noticia` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(5000) COLLATE utf8_bin NOT NULL,
  `fk_tiponoticia` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonesuteis`
--

CREATE TABLE `telefonesuteis` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `numero` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiponoticia`
--

CREATE TABLE `tiponoticia` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(75) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gabinete`
--
ALTER TABLE `gabinete`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_imagens_noticias` (`fk_noticia`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `noticias_ibfk_1` (`fk_tiponoticia`);

--
-- Indices de la tabla `telefonesuteis`
--
ALTER TABLE `telefonesuteis`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiponoticia`
--
ALTER TABLE `tiponoticia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gabinete`
--
ALTER TABLE `gabinete`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telefonesuteis`
--
ALTER TABLE `telefonesuteis`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tiponoticia`
--
ALTER TABLE `tiponoticia`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `fk_imagens_noticias` FOREIGN KEY (`fk_noticia`) REFERENCES `noticias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`fk_tiponoticia`) REFERENCES `tiponoticia` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
