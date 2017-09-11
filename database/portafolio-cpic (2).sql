-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2017 a las 21:33:34
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portafolio-cpic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `titulo`, `descripcion`, `foto`, `created_at`, `updated_at`) VALUES
(3, 'Servicio De Empleo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint et neque vitae eveniet cumque unde dolore modi dolores illo amet?', '/images/1504897540.png', '2017-09-07 03:55:02', '2017-09-09 00:05:40'),
(4, 'Tecnoparque', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint et neque vitae eveniet cumque unde dolore modi dolores illo amet?', '/images/1504897601.png', '2017-09-07 04:05:50', '2017-09-09 00:06:41'),
(9, 'Sennova', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint et neque vitae eveniet cumque unde dolore modi dolores illo amet?', '/images/1504897630.png', '2017-09-08 23:53:14', '2017-09-09 00:07:10'),
(11, 'Worldskills', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint et neque vitae eveniet cumque unde dolore modi dolores illo amet?', '/images/1504897668.png', '2017-09-09 00:07:48', '2017-09-09 00:07:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_15_190840_create_images_table', 1),
(4, '2017_08_23_155841_create_table_programs', 1),
(5, '2017_09_06_221630_create_empresas_tables', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_programa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_programa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_programa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duracion` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `programs`
--

INSERT INTO `programs` (`id`, `nombre_programa`, `descripcion_programa`, `tipo_programa`, `duracion`, `created_at`, `updated_at`) VALUES
(9, 'Tecnologo En Análisis y desarrollo de sistemas de información', 'Los Tecnólogos en Análisis y Programación de Sistemas de Información solucionan problemas informáticos, mediante la implementación de sistemas que proporcionan información oportuna y confiabl', 'Tecnologia', 24, '2017-09-05 02:21:48', '2017-09-05 02:21:48'),
(10, 'Tecnico en mantenimiento mecatronica de automotores', 'La integración de mecánica, electrónica y software para crear ahorros de energía y de recursos y sistemas de alta inteligencia.', 'Tecnico', 12, '2017-09-05 02:46:01', '2017-09-05 02:46:01'),
(11, 'Electricidad Industrial', 'Es un profesional con formación integral y competencias para ser gestor organizacional, con visión estratégica para responder a las necesidades del entorno.', 'Tecnologia', 24, '2017-09-06 13:29:43', '2017-09-06 13:29:43'),
(12, 'Soldadura De Productos Metalicos(Platino)', 'La soldadura es un proceso de fabricación en donde se realiza la unión de dos o más piezas de un material, (generalmente metales o termoplásticos), usualmente logrado a través de la coalescen', 'Tecnico', 12, '2017-09-06 13:31:24', '2017-09-06 13:31:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dependencia` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `password`, `dependencia`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jhon Cortes', '/images/1502974999.jpg', 'jhon.qortes@gmail.com', '$2y$10$OOzyZWW/Uh95oEwUqW/sqO25CyWn2/DyxZrNepnxFG9C7oeiwRPsK', 'Administrador', '6cBFhuA744nk7wRsf1wCH3MS3Gu4walWtgbcL0jB4coq0JxGVPLj3ZLny51V', '2017-08-17 23:03:20', '2017-08-17 23:03:20'),
(2, 'Paola Sanchez', '/images/1502975144.jpg', 'cindypsq@hotmail.com', '$2y$10$7mkVkyFkasSlQt6pcvx1/e7vCt.li0oJIeHq.IXTQIQxYTu3au2pC', 'Administrador', 't3ACqfBIPZJjzDEqxcP1Q4rtw6qjTMJEmO6zU4M1BnWBolR4RUMjBxK2RTJD', '2017-08-17 23:05:44', '2017-08-17 23:05:44'),
(3, 'Camilo Mojica', '/images/1502975485.jpg', 'juancamilomojicamoreno@gmail.com', '$2y$10$QCZdgmrCOq.Hs9BObCHjKu4xuGKQM.hvXvs/uzX1Sj01oJkExgg86', 'Administrador', 'iosiMV5kwNqLS561Brgc385f3fBCl34vJwMLVZ6w8dPZo9ocRIWPHLM56OON', '2017-08-17 23:11:25', '2017-08-17 23:11:25'),
(6, 'el pepo', '/images/1502982798.jpg', 'elpepo@gmail.com', '$2y$10$o4I/VCABwdwQM9TDMzKEp.rmLiLIgPrlNYCH/c3mG8OlUjZrKVMfa', 'Empleado Bienestar', 'BldPlMZ4Q764qL6wRgDmBa9reRVJAWx7qNRWmoLdsttjqkmpgcxGV37z2Uz7', '2017-08-18 01:13:18', '2017-08-18 01:13:18');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
