-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2019 a las 03:55:04
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

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuario`, `senha`) VALUES
(1, 'yo', 'yotambien'),
(2, 'vereadoraz', '57ffdbffec2f242b823ce260126ce551'),
(3, 'prueba1', 'c2b7499cf0a6d9350ba8667917da6a234a7965df'),
(4, 'vino', '3fa6b1ff29aa0b4f9b9c59c676846829');

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

--
-- Volcado de datos para la tabla `gabinete`
--

INSERT INTO `gabinete` (`id`, `nome`, `cargo`, `foto`) VALUES
(23, 'Carol', 'Estagiaria', 'Carol.png'),
(24, 'Rafael', 'Assessor', 'Rafael.png'),
(27, 'Nose', 'Assessor', 'Nose.png'),
(28, 'Debora', 'Assessora', 'Debora.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagens`
--

CREATE TABLE `imagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `imagem` varchar(1000) COLLATE utf8_bin NOT NULL,
  `fk_noticia` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `imagens`
--

INSERT INTO `imagens` (`id`, `imagem`, `fk_noticia`) VALUES
(16, '3noticia1.jpg', 13),
(17, '3noticia4.jpg', 13),
(18, '3noticia5.jpg', 13),
(19, '3noticia6.jpg', 13),
(20, '3noticia7.jpg', 13),
(21, '3noticia8.jpg', 13),
(22, 'noticia2.jpg', 15),
(23, 'noticia3.jpg', 15),
(24, 'noticia4.jpg', 15),
(25, '2noticia.jpg', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) COLLATE utf8_bin NOT NULL,
  `tiponoticia` varchar(100) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(5000) COLLATE utf8_bin NOT NULL,
  `datant` date NOT NULL,
  `portada` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `tiponoticia`, `descricao`, `datant`, `portada`) VALUES
(13, 'Assambleia Legislativa', 'Nenhum', 'ASSEMBLEIA LEGISLATIVA DO ESTADO DO RIO GRANDE DO SUL.\r\n\r\nOBJETIVO alcançado, entregamos em mãos, juntamente com a presidente do CPERS prof. Helenir e diversos VEREADORES do Estado do RS, um requerimento ao Pres. Dep. Luis Augusto Lara, solicitando a retirada do Regime de Urgência do projeto com o Pacote de medidas de alterações do Plano de Carreira do Magistério Público Estadual, no Estatuto do Servidor Público e na Previdência Estadual.', '2019-11-26', '3noticia2.jpg'),
(14, 'Entrevista a Rádio RCC', 'Comunidade', 'Segue muito POSITIVA A REPERCUSSÃO da mobilização realizada pelo Vereador Antonio Zenoir contra o pacote de medidas do Governo do Estado com vereadores de várias cidades do Rio Grande do Sul no dia de ontem na Assembleia Legislativa.', '2019-11-27', '2noticia.jpg'),
(15, 'Assembleia Geral do CPERS', 'Comunidade', 'Momento HISTÓRICO e de muita emoção vividos no dia 26.11.19 durante a Assembleia Geral do CPERS...sem palavras minhas colegas queridas!!! Muito obrigado!!!', '2019-11-28', 'noticia1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonesuteis`
--

CREATE TABLE `telefonesuteis` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_bin NOT NULL,
  `numero` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `telefonesuteis`
--

INSERT INTO `telefonesuteis` (`id`, `nome`, `numero`) VALUES
(1, 'Prefeitura', '5532443158'),
(3, 'ACIL', '5532423200');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `telefonesuteis`
--
ALTER TABLE `telefonesuteis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `gabinete`
--
ALTER TABLE `gabinete`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `telefonesuteis`
--
ALTER TABLE `telefonesuteis`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `fk_imagens_noticias` FOREIGN KEY (`fk_noticia`) REFERENCES `noticias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
