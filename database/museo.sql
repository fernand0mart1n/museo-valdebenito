-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2015 a las 08:48:57
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `museo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE IF NOT EXISTS `clasificacion` (
  `id` int(10) unsigned NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fondo` int(10) unsigned NOT NULL,
  `usuario_carga` int(10) unsigned NOT NULL,
  `fecha_carga` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE IF NOT EXISTS `donacion` (
  `id` int(10) unsigned NOT NULL,
  `donante` int(10) unsigned NOT NULL,
  `fecha_donacion` date NOT NULL,
  `pieza` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donante`
--

CREATE TABLE IF NOT EXISTS `donante` (
  `id` int(10) unsigned NOT NULL,
  `persona` int(10) unsigned NOT NULL,
  `fecha_carga` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fondo`
--

CREATE TABLE IF NOT EXISTS `fondo` (
  `id` int(10) unsigned NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `usuario_carga` int(10) unsigned NOT NULL,
  `fecha_carga` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(10) unsigned NOT NULL,
  `pieza` int(10) unsigned NOT NULL,
  `foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE IF NOT EXISTS `personas` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `cuit_cuil` int(11) NOT NULL,
  `domicilio` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fecha_carga` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Disparadores `personas`
--
DELIMITER $$
CREATE TRIGGER `personas_AFTER_DELETE` AFTER DELETE ON `personas`
 FOR EACH ROW BEGIN
	INSERT INTO registro_personas(nombre, apellido, domicilio, telefono, email, modificado, usuario, id_personas)
    VALUES (OLD.nombre, OLD.apellido, OLD.domicilio, OLD.telefono, OLD.email, NOW(), CURRENT_USER(), OLD.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `personas_AFTER_INSERT` AFTER INSERT ON `personas`
 FOR EACH ROW BEGIN
	INSERT INTO registro_personas(nombre, apellido, domicilio, telefono, email, modificado, usuario, id_personas)
    VALUES (NEW.nombre, NEW.apellido, NEW.domicilio, NEW.telefono, NEW.email, NOW(), CURRENT_USER(), NEW.id);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `personas_AFTER_UPDATE` AFTER UPDATE ON `personas`
 FOR EACH ROW BEGIN
	INSERT INTO registro_personas(nombre, apellido, domicilio, telefono, email, modificado, usuario, id_personas)
    VALUES (OLD.nombre, OLD.apellido, OLD.domicilio, OLD.telefono, OLD.email, NOW(), CURRENT_USER(), OLD.id);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pieza`
--

CREATE TABLE IF NOT EXISTS `pieza` (
  `id` int(10) unsigned NOT NULL,
  `clasificacion` int(10) unsigned NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `procedencia` varchar(45) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `fecha_ejecutacion` date NOT NULL,
  `tema` varchar(45) NOT NULL,
  `observacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_personas`
--

CREATE TABLE IF NOT EXISTS `registro_personas` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `domicilio` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `modificado` datetime NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `id_personas` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revision`
--

CREATE TABLE IF NOT EXISTS `revision` (
  `id` int(10) unsigned NOT NULL,
  `usuario_revision` int(10) unsigned NOT NULL,
  `pieza` int(10) unsigned NOT NULL,
  `fecha_revision` date NOT NULL,
  `estado_conversacion` varchar(45) NOT NULL,
  `ubicacion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) unsigned NOT NULL,
  `persona` int(10) unsigned NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_clasificacion_fondo1_idx` (`fondo`),
  ADD KEY `fk_clasificacion_usuarios1_idx` (`usuario_carga`);

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `iddonacion_UNIQUE` (`id`);

--
-- Indices de la tabla `donante`
--
ALTER TABLE `donante`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_donante_personas_idx` (`persona`);

--
-- Indices de la tabla `fondo`
--
ALTER TABLE `fondo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_fondo_usuarios1_idx` (`usuario_carga`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_foto_pieza1_idx` (`pieza`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idpersonas_UNIQUE` (`id`);

--
-- Indices de la tabla `pieza`
--
ALTER TABLE `pieza`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idpieza_UNIQUE` (`id`),
  ADD KEY `fk_pieza_donacion1_idx` (`clasificacion`);

--
-- Indices de la tabla `registro_personas`
--
ALTER TABLE `registro_personas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `id_personas_UNIQUE` (`id_personas`),
  ADD KEY `fk_registro_personas_personas1_idx` (`id_personas`);

--
-- Indices de la tabla `revision`
--
ALTER TABLE `revision`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_revision_usuarios1_idx` (`usuario_revision`),
  ADD KEY `fk_revision_pieza1_idx` (`pieza`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_usuarios_personas1_idx` (`persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `donante`
--
ALTER TABLE `donante`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fondo`
--
ALTER TABLE `fondo`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pieza`
--
ALTER TABLE `pieza`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `registro_personas`
--
ALTER TABLE `registro_personas`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `revision`
--
ALTER TABLE `revision`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD CONSTRAINT `fk_clasificacion_fondo1` FOREIGN KEY (`fondo`) REFERENCES `fondo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_clasificacion_usuarios1` FOREIGN KEY (`usuario_carga`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD CONSTRAINT `fk_donacion_donante1` FOREIGN KEY (`id`) REFERENCES `donante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `donante`
--
ALTER TABLE `donante`
  ADD CONSTRAINT `fk_donante_personas` FOREIGN KEY (`persona`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fondo`
--
ALTER TABLE `fondo`
  ADD CONSTRAINT `fk_fondo_usuarios1` FOREIGN KEY (`usuario_carga`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `fk_foto_pieza1` FOREIGN KEY (`pieza`) REFERENCES `pieza` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pieza`
--
ALTER TABLE `pieza`
  ADD CONSTRAINT `fk_pieza_donacion1` FOREIGN KEY (`clasificacion`) REFERENCES `donacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `registro_personas`
--
ALTER TABLE `registro_personas`
  ADD CONSTRAINT `fk_registro_personas_personas1` FOREIGN KEY (`id_personas`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `revision`
--
ALTER TABLE `revision`
  ADD CONSTRAINT `fk_revision_pieza1` FOREIGN KEY (`pieza`) REFERENCES `pieza` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_revision_usuarios1` FOREIGN KEY (`usuario_revision`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuarios_personas1` FOREIGN KEY (`persona`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;