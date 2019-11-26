-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2019 a las 21:26:08
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `therewellbepostcards`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrator`
--

CREATE TABLE `administrator` (
  `idmanager` int(10) UNSIGNED NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `idcategory` int(10) UNSIGNED NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`idcategory`, `name`) VALUES
(1, 'christmas'),
(2, 'birthdays'),
(3, 'valentines'),
(4, 'miscellaneous');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postcard`
--

CREATE TABLE `postcard` (
  `idpostcard` int(10) UNSIGNED NOT NULL,
  `sent` int(10) UNSIGNED NOT NULL,
  `namepost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `postcard`
--

INSERT INTO `postcard` (`idpostcard`, `sent`, `namepost`) VALUES
(1, 0, 'The Lighthouse'),
(2, 0, 'Parasite'),
(3, 0, 'Ad Astra'),
(4, 0, 'Before the Devil Knows Youre Dead'),
(5, 0, 'The Irishman'),
(6, 0, 'Quien Te Cantara'),
(7, 0, 'The Sisters Brothers'),
(8, 0, 'The Favourite'),
(9, 0, 'A Serious Man'),
(10, 0, 'A Single Man'),
(11, 0, 'Being John Malkovich'),
(12, 0, 'In Bruges');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postcard_category`
--

CREATE TABLE `postcard_category` (
  `idpostcard` int(10) UNSIGNED NOT NULL,
  `idcategory` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `postcard_category`
--

INSERT INTO `postcard_category` (`idpostcard`, `idcategory`) VALUES
(1, 2),
(1, 3),
(2, 1),
(3, 4),
(3, 1),
(4, 2),
(5, 1),
(5, 2),
(5, 3),
(6, 4),
(7, 3),
(8, 2),
(8, 3),
(8, 4),
(9, 2),
(10, 2),
(11, 3),
(11, 4),
(12, 1),
(12, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `iduser` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`iduser`, `firstname`, `lastname`, `email`, `password`, `gender`, `birthdate`) VALUES
(1, 'David', 'Portilla', 'prueba@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Male', '2019-05-11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrator`
--
ALTER TABLE `administrator`
  ADD KEY `administrators_fk` (`idmanager`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Indices de la tabla `postcard`
--
ALTER TABLE `postcard`
  ADD PRIMARY KEY (`idpostcard`);

--
-- Indices de la tabla `postcard_category`
--
ALTER TABLE `postcard_category`
  ADD KEY `postcard_category_fk` (`idpostcard`),
  ADD KEY `postcard_category_fk_1` (`idcategory`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrator`
--
ALTER TABLE `administrator`
  MODIFY `idmanager` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `idcategory` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `postcard`
--
ALTER TABLE `postcard`
  MODIFY `idpostcard` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrators_fk` FOREIGN KEY (`idmanager`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `postcard_category`
--
ALTER TABLE `postcard_category`
  ADD CONSTRAINT `postcard_category_fk` FOREIGN KEY (`idpostcard`) REFERENCES `postcard` (`idpostcard`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `postcard_category_fk_1` FOREIGN KEY (`idcategory`) REFERENCES `category` (`idcategory`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
