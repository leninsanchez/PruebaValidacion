-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2023 a las 22:17:23
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app1db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(70) NOT NULL,
  `apellidos` varchar(70) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `institucion` varchar(200) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id`, `nombres`, `apellidos`, `cedula`, `correo`, `direccion`, `telefono`, `pais`, `ciudad`, `institucion`, `tipo`, `pago`) VALUES
(4, 'Lenin', 'Sánchez', '1104685811', 'lensan777@gmail.com', 'Pucacocha', '2540260', 'Ecuador', 'Loja', 'utpl', 'Estudiante', 0),
(5, 'Lenin', 'Samaniego', '1104685811', 'lensan777@gmail.com', 'Barrio Pucacoha', '2540260', 'E', '', '-----', 'Profesional', 0),
(6, 'Juan', 'Perez', '1105665611', 'jp@gmail.com', 'Pradera', '0968423343', 'Ecuador', 'Loja', '-----', 'Profesional', 1),
(7, 'Jose ', 'Alvear ', '1105685811', 'josea@hotmail.com', 'Sauces', '0968413343', 'Ecuador', '', '', 'Estudiante', 0),
(8, 'carlos', 'sarango', '1103652558', 'a@gmail.com', 'catamayo', '0968423343', 'Ecuador', 'Loja', '-----', 'Profesional', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(60) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `tipoUsuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `correo`, `clave`, `tipoUsuario`) VALUES
(1, 'Administrador', '1', 'admin@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
