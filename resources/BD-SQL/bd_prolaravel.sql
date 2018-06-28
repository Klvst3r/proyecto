-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2016 a las 09:36:49
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_prolaravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auspiciadores`
--

CREATE TABLE `auspiciadores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `detalle` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auspiciadores`
--

INSERT INTO `auspiciadores` (`id`, `nombre`, `detalle`, `created_at`, `updated_at`) VALUES
(1, 'Cristal', 'nuevo', '2016-07-24 10:04:21', '2016-07-24 10:04:21'),
(2, 'Bitel', 'nuevo', '2016-07-24 10:04:31', '2016-07-24 10:04:31'),
(3, 'Entel', 'tres', '2016-07-24 10:04:40', '2016-07-24 10:04:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auspiciador_evento`
--

CREATE TABLE `auspiciador_evento` (
  `id` int(10) UNSIGNED NOT NULL,
  `auspiciador_id` int(11) NOT NULL,
  `evento_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auspiciador_evento`
--

INSERT INTO `auspiciador_evento` (`id`, `auspiciador_id`, `evento_id`, `created_at`, `updated_at`) VALUES
(23, 2, 3, NULL, NULL),
(24, 3, 3, NULL, NULL),
(27, 1, 5, NULL, NULL),
(28, 2, 5, NULL, NULL),
(29, 3, 5, NULL, NULL),
(30, 2, 4, NULL, NULL),
(31, 3, 4, NULL, NULL),
(32, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apoyo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `organizador_id` int(11) NOT NULL,
  `socios` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `nombre`, `imagen`, `apoyo`, `organizador_id`, `socios`, `direccion`, `fecha`, `url`, `created_at`, `updated_at`) VALUES
(2, 'Pacha 1', 'public/imagenes/24-07-2016-071643.png', 'Etnuevo, otro', 3, 'Dolor, expedita', 'Magni, quis', '2016-09-05', 'pacha-1', '2016-07-24 11:23:26', '2016-07-24 12:16:44'),
(3, 'Possimus', 'public/imagenes/24-07-2016-071214.png', 'Dolor ut nisi dolores et eum sunt culpa Nam iste voluptatibus cum et dolore', 2, 'Saepe', 'Maiores', '2016-07-06', 'possimus', '2016-07-24 12:01:52', '2016-07-24 12:12:14'),
(4, 'Incididun', 'public/imagenes/24-07-2016-071437.png', 'Officiis amet esse volupt', 1, 'Animi sint non in cu', 'Sit est cillum', '2016-07-03', 'incididun', '2016-07-24 12:06:45', '2016-07-24 12:15:50'),
(5, 'Quos', 'public/imagenes/24-07-2016-071530.jpg', 'Laboriosam', 1, 'Inventore in', 'Et rerum ea', '2016-09-28', 'quos', '2016-07-24 12:15:30', '2016-07-24 12:15:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_27_062159_create_eventos_table', 1),
('2016_05_27_062252_create_organizadors_table', 1),
('2016_05_27_063428_create_auspiciadores_table', 1),
('2016_05_27_063512_create_auspiciador_evento_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizadores`
--

CREATE TABLE `organizadores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `detalle` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `organizadores`
--

INSERT INTO `organizadores` (`id`, `nombre`, `detalle`, `created_at`, `updated_at`) VALUES
(1, 'Agro', 'otro detalle', '2016-07-24 10:05:06', '2016-07-24 10:05:06'),
(2, 'Web', 'otro', '2016-07-24 10:05:19', '2016-07-24 10:05:19'),
(3, 'Pilsen', 'otro', '2016-07-24 10:05:28', '2016-07-24 10:05:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `privilegio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `privilegio`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Cesar', 'cesar@gmail.com', '$2y$10$v8eyRnxNOwd3.SqADVIk4uwsw0vLrcxVtZwmAYG7PHP8i.SH6xYjW', '', 'JHRrGJItrZjvUfzXubUZmNcRl2vQ3FZm40qeuSHm7m2IrOoVZt5H1FLntVP2', '2016-06-22 09:42:45', '2016-07-24 11:53:28'),
(2, 'ucesar', 'dev@web.com', '$2y$10$ZEtXr1wHsjLSBgJ4kTleTOzYEDWCRoAlskJ.2gV14Jsf3uNuk4caS', 'Administrador', 'zF3AFx61VKNM33HKLDsLVolp8HeBzerOEupHgXIjhEm6i1azMipi9UZH6daQ', '2016-07-02 11:42:08', '2016-07-02 12:19:34'),
(3, 'Brittany Potts', 'gunonod@yahoo.com', '$2y$10$9MIMzQ7N0x..YJiWm0H50.GhFq1yTaVHidnBfcXNcGm1bDstIddHO', 'Administrador', NULL, '2016-07-02 12:44:55', '2016-07-02 12:44:55'),
(4, 'Peter Velazquez', 'hifuqurugy@yahoo.com', '$2y$10$DcYBb.KsKw5CLFLTr71lMeJeD1cNCBNkgNctQTdcfmedkLvFguV1K', 'Administrador', NULL, '2016-07-02 12:47:34', '2016-07-02 12:47:34'),
(5, 'Karly Bishop', 'muqas@gmail.com', '$2y$10$Uxs2BjUQ0ATDvkgcyx/UR.d3k5Nu61OP8DXC/b/L43B88wFblIk7C', 'Administrador', NULL, '2016-07-02 12:47:55', '2016-07-02 12:47:55'),
(6, 'Florence Barnett', 'como@hotmail.com', '$2y$10$dElO/nAk3UNxXRav6y.QX.tU4S6RyhpLCI6vgHLA42Pj1DHAw.tly', 'Administrador', NULL, '2016-07-02 12:48:21', '2016-07-02 12:48:21'),
(7, 'Nathan Hutchinson', 'lumy@hotmail.com', '$2y$10$BooqrzLMTSt45BwT3/l6WO7TXm9PPqFLXX4Xh7ScYObzUT/F4UdrO', 'Administrador', NULL, '2016-07-02 12:50:14', '2016-07-02 12:50:14'),
(8, 'Alec Patrick', 'zezuc@yahoo.com', '$2y$10$kOZTq0CLIfIu1den/znaauR9hUQ5QzZYDA292J3y.yn7WxTA/bH1W', 'Administrador', NULL, '2016-07-02 12:51:10', '2016-07-02 12:51:10'),
(9, 'Pearl Burt', 'nytiwo@gmail.com', '$2y$10$vh.mAx32mpdPzA3piRbuxuS/dWHk6tAfN2Pg/zga7hJvmZXx4LrB2', 'Administrador', NULL, '2016-07-02 12:51:40', '2016-07-02 12:51:40');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auspiciadores`
--
ALTER TABLE `auspiciadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `auspiciador_evento`
--
ALTER TABLE `auspiciador_evento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organizadores`
--
ALTER TABLE `organizadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auspiciadores`
--
ALTER TABLE `auspiciadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `auspiciador_evento`
--
ALTER TABLE `auspiciador_evento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `organizadores`
--
ALTER TABLE `organizadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
