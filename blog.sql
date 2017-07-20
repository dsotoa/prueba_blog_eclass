-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2017 a las 15:24:13
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'Santiago. Centro de Chile', 'Agitada capital de Chile, distinguida en el 2011 por el periÃ³dico New York Times dentro de los mejores destinos del mundo, cautivando por sus museos de arte, sofisticados restaurantes y propuestas de diseÃ±o que han impregnado algunos de sus mÃ¡s famosos barrios.\r\nRutas del vino, modernos centros de esquÃ­ y un extenso litoral a solo 100 kilÃ³metros de distancia, son otro de sus grandes atractivos, cercanÃ­a que permite disfrutar en un mismo dÃ­a de las nieves de la montaÃ±a para luego bajar a las arenas de la costa. MÃ¡s informaciÃ³n en el siguiente artÃ­culo de Santiago.', '2017-07-20 10:27:07', '2017-07-20 10:27:07'),
(2, 'San Pedro de Atacama. Norte de Chile', 'Poblado altiplÃ¡nico situado en pleno Desierto de Atacama a alturas por sobre los 2.400 metros por sobre el nivel del mar, fascinante paraje que deslumbra por sus pintorescas arquitecturas blancas y estrechas callecitas inmersas entre majestuosos paisajes de cordilleras y salares.\r\nParadisiacos entornos tales como los GÃ©iseres del Tatio y los Valles de la Luna y de la Muerte, son otro de sus atractivos, maravillas naturales que se entremezclan con mÃ¡gicos poblados rurales y antiguos yacimientos arqueolÃ³gicos de la cultura atacameÃ±a, que dan muestra de mÃ¡s doce mil aÃ±os de ocupaciÃ³n humana. MÃ¡s informaciÃ³n en el siguiente artÃ­culo de San Pedro de Atacama.', '2017-07-20 10:28:33', '2017-07-20 10:28:33'),
(3, 'Parque Nacional Lauca. Norte de Chile', 'Sin estar dentro de los lugares turÃ­sticos de Chile mÃ¡s conocidos, corresponde a una joya de patrimonio natural situado a 165 kilÃ³metros de Arica, escondido entre paisajes altiplÃ¡nicos, montaÃ±as nevadas y poblados de la cultura AymarÃ¡, siendo hogar de un ecosistema Ãºnico en el mundo que habita a la sorprendente altitud de 4.500 metros sobre el nivel del mar.\r\n\r\nDentro de sus escenarios de mayor belleza destacan las Lagunas de Cotacotani con bofedales e islotes volcÃ¡nicos y El Lago ChungarÃ¡, uno de los mÃ¡s altos del planeta, con aguas de tonalidades verde esmeralda en donde se reflejan imponentes macizos nevados y los gigantes volcanes Parinacota y Pomerape.', '2017-07-20 10:29:04', '2017-07-20 10:29:04'),
(4, 'Iquique. Norte de Chile', 'Vibrante ciudad balneario, una localidad del norte de Chile, que cautiva con sus playas de arenas blancas y oleaje suave, hermosas arquitecturas en madera levantadas durante la Ã©poca de esplendor de las salitreras y valiosos museos arqueolÃ³gicos que dan muestra de la Cultura Chinchorro que habitÃ³ la zona 5.000 aÃ±os atrÃ¡s.\r\nSus alrededores son otro de sus atractivos, figurando alternativas como paseos a las vecinas salitreras de Humberstone y Santa Laura declaradas Patrimonio de la Humanidad por la Unesco, los enigmÃ¡ticos geoglifos tallados en los cerros de Pintados y hermosos oasis verdes, situados en medio del desierto como Pica. MÃ¡s informaciÃ³n en el siguiente artÃ­culo de Iquique.', '2017-07-20 10:29:37', '2017-07-20 10:29:37'),
(5, 'Isla de Pascua. Centro de Chile', 'Localizada en medio del OcÃ©ano PacÃ­fico, es considerada uno de los lugares turÃ­sticos de Chile que genera mayor curiosidad, tanto por sus enigmÃ¡ticas esculturas en piedra conocidas como MoÃ¡is como por las misteriosas leyendas y tradiciones de la cultura ancestral Rapanui.\r\nDeclarada Patrimonio de la Humanidad por la Unesco, maravilla tambiÃ©n por sus escenarios de exÃ³tica belleza, entre los que se encuentran las arenas rosadas de la Playa de Ovahe, las aguas turquesas de Anakena o las innumerables cuevas que se abren camino entre las laderas de los volcanes. MÃ¡s informaciÃ³n en el siguiente artÃ­culo de Isla de Pascua.', '2017-07-20 10:30:10', '2017-07-20 10:30:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'daniela', '$2a$10$DVCB.aAWtjBGu3MXV4zT7.vpJlFCiiGQb.L1D0IT70DuLzUdOrsea', NULL, '2017-07-20 10:25:19', '2017-07-20 10:25:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
