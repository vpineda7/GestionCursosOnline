-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2019 a las 12:27:33
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `gestioncursosonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` int(11) NOT NULL,
  `nombre_curso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `owner_id`, `nombre_curso`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 1, 'UML', 'Curso de Modelado para ingenieros', NULL, NULL),
(2, 2, 'Base de Datos I', 'Se ve el nivel básico de SQL', '2019-11-24 01:28:53', '2019-11-24 01:28:53'),
(5, 2, 'Programación 1', 'Principios POO aplicados', '2019-11-24 06:34:50', '2019-11-24 06:34:50'),
(8, 19, 'Programación 3', 'Principios POO aplicados2', '2019-11-24 07:00:17', '2019-11-24 07:00:17'),
(13, 1, 'Programación 3', 'Principios POO aplicados2', '2019-11-24 15:32:00', '2019-11-24 15:32:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listas`
--

CREATE TABLE `listas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `curso_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `solicitud_baja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `listas`
--

INSERT INTO `listas` (`id`, `created_at`, `updated_at`, `curso_id`, `user_id`, `solicitud_baja`) VALUES
(7, NULL, NULL, 4, 1, 0),
(8, NULL, NULL, 4, 1, 0),
(9, NULL, NULL, 4, 1, 0),
(10, NULL, NULL, 13, 4, 0),
(11, NULL, NULL, 1, 4, 0),
(12, NULL, NULL, 1, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_03_070354_create_listas_table', 1),
(4, '2019_11_18_031815_add_tipo_field_to_users_table', 1),
(5, '2019_11_19_021946_create_profesor_table', 1),
(6, '2019_11_22_204730_create_cursos_table', 2),
(7, '2019_11_24_012421_alter_listas', 3),
(8, '2019_11_24_012656_alter_listas2', 4),
(9, '2019_11_24_053749_alter_listas3', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesors`
--

CREATE TABLE `profesors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'profesor',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `profesors`
--

INSERT INTO `profesors` (`id`, `name`, `email`, `tipo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Profesor_admin1', 'profesor_admin@email.com', 'profesor', NULL, '$2y$10$br7QDYwSHmFFI.cKnbphOuBRSGDrsf/a9M2lbmLtYDWWiO14oUBKC', NULL, '2019-11-21 11:46:25', '2019-11-21 11:46:25'),
(2, 'Profesor_admin2', 'profesor_admin2@email.com', 'profesor', NULL, '$2y$10$gYjo4TicHBf3WWqfdRxR..NOxjAa9Op8v88uEzAbTFtSOVra5yR0y', NULL, '2019-11-21 11:46:59', '2019-11-21 11:46:59'),
(16, 'Profesor3', 'profesor_admin3@email.com', 'profesor', NULL, '$2y$10$fHTor8rZsrEzKqrvmHQ03.hXlkSm1bOQBWosJAzz.9RtlujfUd/aS', NULL, '2019-11-23 04:34:25', '2019-11-23 04:34:25'),
(17, 'Profesor4', 'profesor_admin4@email.com', 'profesor', NULL, '$2y$10$mS9UHQTSEhFAWgrGF7B.2uGc9a/0sriCrQsfPnZ38i15nWjquMwlm', NULL, '2019-11-23 04:35:38', '2019-11-23 04:35:38'),
(18, 'Profeso5', 'profesor_admin5@email.com', 'profesor', NULL, '$2y$10$/nF6Dc0WPDchvEDODGA9ruYlY1u2TR8OiN2.dMvPAlBnQO0fltmEe', NULL, '2019-11-23 04:37:27', '2019-11-23 04:37:27'),
(19, 'Profesor7', 'profesor_admin7@email.com', 'profesor', NULL, '$2y$10$rV/Pk1S6aJbCDa0Gl7jFJ.gWlRyMJYmZqgv7vgglqSoBjKSS8srWO', NULL, '2019-11-24 06:35:47', '2019-11-24 06:35:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'estudiante'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tipo`) VALUES
(1, 'John Doe', 'john.doe@gmail.com', NULL, '$2y$10$LNZNhyNpUYbsHgk2V/b1KOr8EfSb0rvd1ev9YIp90fgarjEuiSGGG', NULL, '2019-11-21 11:47:36', '2019-11-21 11:47:36', 'estudiante'),
(4, 'John Doe2', 'john.doe2@gmail.com', NULL, '$2y$10$sHtS2hVly1lcnPs/6fvcdOyvHz4gxA/3d/1tQOi9OCu/oEt0vTLve', NULL, '2019-11-24 06:45:03', '2019-11-24 06:45:03', 'estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listas`
--
ALTER TABLE `listas`
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
-- Indices de la tabla `profesors`
--
ALTER TABLE `profesors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profesors_email_unique` (`email`);

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
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `listas`
--
ALTER TABLE `listas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `profesors`
--
ALTER TABLE `profesors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
