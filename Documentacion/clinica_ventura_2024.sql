-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-06-2024 a las 12:50:46
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica_ventura_2024`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `titulo`, `subtitulo`, `url`, `foto`, `estado`) VALUES
(1, 'Primer Título', 'Descubre nuestros tratamientos personalizados.', 'http://localhost/reservas/', 'clinica-ventura-elche-01.jpg', 1),
(2, 'Segundo título', 'Descubre bla, bla, bla, bla', 'http://localhost/reservas/', 'clinica-ventura-elche-02.jpg', 1),
(3, 'Tercer Título', 'Bla, bla y más bla', 'http://localhost/reservas/', 'clinica-ventura-elche-03.jpg', 1),
(4, 'Cuarto Título', 'Bla, bla y más bla', 'http://localhost/reservas/', 'clinica-ventura-elche-04.jpg', 1),
(5, 'Quinto Título', 'Bla, bla y más bla', 'http://localhost/reservas/', 'clinica-ventura-elche-05.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_reservas`
--

CREATE TABLE `tb_reservas` (
  `id_reserva` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `terapeuta_id` int(11) NOT NULL,
  `tipo_servicio` int(11) NOT NULL,
  `f_reserva` date NOT NULL,
  `h_reserva` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `color` varchar(50) NOT NULL,
  `title` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_reservas`
--

INSERT INTO `tb_reservas` (`id_reserva`, `id_usuario`, `terapeuta_id`, `tipo_servicio`, `f_reserva`, `h_reserva`, `start`, `end`, `fyh_creacion`, `fyh_actualizacion`, `estado`, `color`, `title`) VALUES
(99, 2, 7, 2, '2024-06-07', '09:00 - 10:00', '2024-06-07', '2024-06-07', '2024-06-07 19:08:44', '0000-00-00 00:00:00', 0, '#5F9EA0', 2),
(101, 12, 7, 2, '2024-06-07', '19:00 - 21:00', '2024-06-07', '2024-06-07', '2024-06-07 19:41:54', '0000-00-00 00:00:00', 0, '#5F9EA0', 2),
(102, 12, 11, 2, '2024-06-07', '19:00 - 21:00', '2024-06-07', '2024-06-07', '2024-06-07 19:42:03', '0000-00-00 00:00:00', 0, '#5F9EA0', 2),
(103, 12, 10, 2, '2024-06-07', '10:00 - 12:00', '2024-06-07', '2024-06-07', '2024-06-07 19:42:11', '0000-00-00 00:00:00', 0, '#5F9EA0', 2),
(104, 12, 9, 6, '2024-06-07', '10:00 - 12:00', '2024-06-07', '2024-06-07', '2024-06-07 19:42:21', '0000-00-00 00:00:00', 0, '#5F9EA0', 6),
(105, 12, 6, 2, '2024-06-12', '10:00 - 12:00', '2024-06-12', '2024-06-12', '2024-06-07 19:42:46', '0000-00-00 00:00:00', 0, '#5F9EA0', 2),
(106, 12, 10, 2, '2024-06-11', '10:00 - 12:00', '2024-06-11', '2024-06-11', '2024-06-07 19:42:57', '0000-00-00 00:00:00', 0, '#5F9EA0', 2),
(107, 12, 10, 3, '2024-06-07', '19:00 - 21:00', '2024-06-07', '2024-06-07', '2024-06-07 20:00:11', '0000-00-00 00:00:00', 0, '#5F9EA0', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_servicios`
--

CREATE TABLE `tb_servicios` (
  `id_servicio` int(11) NOT NULL COMMENT 'Identificador servicio (único)',
  `nombre_servicio` varchar(255) NOT NULL COMMENT 'Nombre servicio',
  `duracion` time NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `fyh_creacion` datetime NOT NULL COMMENT 'Registro',
  `fyh_actualizacion` datetime DEFAULT NULL COMMENT 'Modificación'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_servicios`
--

INSERT INTO `tb_servicios` (`id_servicio`, `nombre_servicio`, `duracion`, `precio`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(2, 'Quiromasaje', '01:30:00', 35, '0000-00-00 00:00:00', '2024-06-06 23:00:48'),
(3, 'Masaje Deportivo', '01:30:00', 45, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Acupuntura', '01:30:00', 45, '0000-00-00 00:00:00', '2024-06-05 05:16:01'),
(6, 'Osteopatía Integral', '01:30:00', 55, '0000-00-00 00:00:00', '2024-06-07 02:54:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_terapeutas`
--

CREATE TABLE `tb_terapeutas` (
  `id_terapeuta` int(11) NOT NULL COMMENT 'Identificador usuario (único)',
  `nombre_completo` varchar(255) NOT NULL COMMENT 'Nombre usuario',
  `email` varchar(255) NOT NULL COMMENT 'Email',
  `password` text NOT NULL COMMENT 'Password',
  `token` varchar(11) DEFAULT NULL COMMENT 'Para recordar contraseña',
  `direccion` varchar(255) NOT NULL COMMENT 'Dirección usuario',
  `telefono` int(9) NOT NULL COMMENT 'Teléfono usuario',
  `fyh_creacion` datetime NOT NULL COMMENT 'Registro',
  `fyh_actualizacion` datetime DEFAULT NULL COMMENT 'Modificación'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_terapeutas`
--

INSERT INTO `tb_terapeutas` (`id_terapeuta`, `nombre_completo`, `email`, `password`, `token`, `direccion`, `telefono`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(6, 'Manoli', 'info@clinicaventura.com', '$2y$10$F0QoA7DFdfV9u5ZI0Vo/ruV0F2.JEcuYVOSIvBwfkKqn7EKT8ZlqS', NULL, 'Ptda. Altabix, P-1, nº 411 A. 03291 Elche ALICANTE', 670340308, '0000-00-00 00:00:00', '2024-06-06 06:15:46'),
(7, 'Francisco', 'info@clinicaventura.com', '$2y$10$Ak3/XKxycLL2B6BNkelVXe.JzdQF1f7W7fjo6MeDWVjWbkfgMccr2', NULL, 'Ptda. Altabix, P-1, nº 411 A. 03291 Elche ALICANTE', 606139784, '0000-00-00 00:00:00', '2024-06-06 06:15:59'),
(8, 'Ismael', 'info@clinicaventura.com', '$2y$10$kLdztPX971gEBhw1aFen4.Al5JnSOi2krO6c97w/rZ3AJDh2Obo4O', NULL, 'Ptda. Altabix, P-1, nº 411 A. 03291 Elche ALICANTE', 606649616, '0000-00-00 00:00:00', NULL),
(9, 'Julio ', 'info@clinicaventura.com', '$2y$10$HYAi2UL5phfHLhQtUbTc0.yBpgwkICU2R4QMIXlPzmVLGa46XZRKC', NULL, 'Ptda. Altabix, P-1, nº 411 A. 03291 Elche ALICANTE', 608203548, '2024-06-06 04:14:08', '2024-06-07 01:33:21'),
(10, 'Mayse', 'info@clinicaventura.com', '$2y$10$ZZnGsUY4YFuX6NH5EFXUb.qIEk4oTb3fugQvLc3U.0vjVHfEu.qc.', NULL, 'Ptda. Altabix, P-1, nº 411 A. 03291 Elche ALICANTE', 666310044, '2024-06-06 04:15:11', NULL),
(11, 'Cristian', 'info@clinicaventura.com', '$2y$10$QBkMig8BtgtDJuMFhl/9fO0y.uIn0D6wnBUb2PnuaY0o5S1qHnl7m', NULL, 'Ptda. Altabix, P-1, nº 411 A. 03291 Elche ALICANTE', 607481975, '2024-06-06 04:15:43', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL COMMENT 'Identificador usuario (único)',
  `nombre_completo` varchar(255) NOT NULL COMMENT 'Nombre usuario',
  `email` varchar(255) NOT NULL COMMENT 'Email',
  `password` text NOT NULL COMMENT 'Password',
  `token` varchar(11) DEFAULT NULL COMMENT 'Para recordar contraseña',
  `cargo` varchar(50) NOT NULL COMMENT 'cliente, terapéuta o admin',
  `direccion` varchar(255) NOT NULL COMMENT 'Dirección usuario',
  `telefono` int(9) NOT NULL COMMENT 'Teléfono usuario',
  `fyh_creacion` datetime NOT NULL COMMENT 'Registro',
  `fyh_actualizacion` datetime DEFAULT NULL COMMENT 'Modificación'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nombre_completo`, `email`, `password`, `token`, `cargo`, `direccion`, `telefono`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(2, 'ruben', 'ruben@ruben.com', '$2y$10$mRc6/J7XKeqhGtaForTir.Bl9cTc.zer.Y4jnfWShbcTT3LeQbMYi', NULL, 'ADMINISTRADOR', 'Casa', 123456789, '2024-05-08 12:45:29', '2024-06-07 01:26:29'),
(5, 'Jose', 'jose@jose.com', '$2y$10$TxAlV1U7Q69Au85pjqw5Ge8oWW5FAvg/Yd6d3i1v/kLoaBSd3Aa5y', NULL, 'CLIENTE', 'Jose', 987654321, '2024-05-08 00:13:08', '2024-06-03 11:08:38'),
(6, 'Fonsi', 'fonsi@fonsi.com', '$2y$10$xl6TsoIDUaxMEgrXzZoVMuTsCquPi45UTk9bm183Idnf8sEKjr4o6', NULL, 'CLIENTE', 'Joaquín', 654321987, '2024-05-05 00:24:05', '2024-06-07 02:53:54'),
(11, 'Rubén Méndez', 'ruben@ruben.net', '12345678', NULL, 'ADMINISTRADOR', 'Madrid', 722485514, '2024-06-07 01:42:09', NULL),
(12, 'Ramón', 'ramon@ramon.com', '$2y$10$c63eDXNJgLC7occOi0y9auiDCv5YsR/bkUGHp8WioG16ETw7JYVc6', NULL, 'ADMINISTRADOR', 'Mérida', 123456789, '2024-06-07 19:33:05', NULL),
(13, 'admin', 'admin@admin.com', '$2y$10$2pyHGeSwELhuCEVlmrVUPefBLG1ScPynYNXZBjL7oM5jFl9SP16Ce', NULL, 'ADMINISTRADOR', 'Mérida', 123456789, '2024-06-07 19:35:14', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_reservas`
--
ALTER TABLE `tb_reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `tipo_servicio` (`tipo_servicio`),
  ADD KEY `id_terapeuta` (`terapeuta_id`);

--
-- Indices de la tabla `tb_servicios`
--
ALTER TABLE `tb_servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `tb_terapeutas`
--
ALTER TABLE `tb_terapeutas`
  ADD PRIMARY KEY (`id_terapeuta`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_reservas`
--
ALTER TABLE `tb_reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `tb_servicios`
--
ALTER TABLE `tb_servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador servicio (único)', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_terapeutas`
--
ALTER TABLE `tb_terapeutas`
  MODIFY `id_terapeuta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador usuario (único)', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador usuario (único)', AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_reservas`
--
ALTER TABLE `tb_reservas`
  ADD CONSTRAINT `tb_reservas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_reservas_ibfk_2` FOREIGN KEY (`tipo_servicio`) REFERENCES `tb_servicios` (`id_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_reservas_ibfk_3` FOREIGN KEY (`terapeuta_id`) REFERENCES `tb_terapeutas` (`id_terapeuta`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
