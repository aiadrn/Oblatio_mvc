-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2017 a las 18:37:12
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oblatio_mvc_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `adm_id` int(11) NOT NULL,
  `adm_nombre` varchar(30) NOT NULL,
  `adm_apellidos` varchar(40) NOT NULL,
  `adm_telefono` varchar(10) NOT NULL,
  `adm_correo` varchar(40) NOT NULL,
  `adm_alias` varchar(30) NOT NULL,
  `adm_contrasena` varchar(250) NOT NULL,
  `adm_foto_perfil` varchar(100) DEFAULT NULL,
  `adm_tipo_administrador` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`adm_id`, `adm_nombre`, `adm_apellidos`, `adm_telefono`, `adm_correo`, `adm_alias`, `adm_contrasena`, `adm_foto_perfil`, `adm_tipo_administrador`) VALUES
(2, 'ADRIAN', 'CIFUENTES', '3117733362', 'adrian@yahoo.es', 'ADRIAN', '356a192b7913b04c54574d18c28d46e6395428ab', 'ruta', 0),
(3, 'Aleja', 'Franco', '3105011053', 'aleja@gmail.com', 'Aleja', '356a192b7913b04c54574d18c28d46e6395428ab', NULL, 1),
(111, 'ANDRES', 'CIFUENTES', '3115554234', 'andres1348@hotmail.com', 'eee', '356a192b7913b04c54574d18c28d46e6395428ab', NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nombre` varchar(30) NOT NULL,
  `cat_descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cat_id`, `cat_nombre`, `cat_descripcion`) VALUES
(1, 'Aseo', 'no hay descripcion'),
(2, 'Tecnología', 'No hay descripcion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_usuario`
--

CREATE TABLE `categoria_usuario` (
  `cat_id` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_usuario`
--

INSERT INTO `categoria_usuario` (`cat_id`, `usu_cod`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `ciu_id` int(11) NOT NULL,
  `ciu_nombre` varchar(25) NOT NULL,
  `fk_dep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`ciu_id`, `ciu_nombre`, `fk_dep_id`) VALUES
(1, 'MANIZALES', 1),
(2, 'NeiraYork', 1),
(3, 'manzanares', 1),
(111, 'Cuba', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `dep_id` int(11) NOT NULL,
  `dep_nombre` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`dep_id`, `dep_nombre`) VALUES
(1, 'CALDAS'),
(2, 'Risaralda'),
(3, 'Quindío'),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(22, ''),
(33, ''),
(444, 'tttttttt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `emp_cod` int(11) NOT NULL,
  `emp_nit` varchar(30) NOT NULL,
  `emp_nombre` varchar(50) NOT NULL,
  `emp_direccion` varchar(50) NOT NULL,
  `emp_telefono` varchar(10) NOT NULL,
  `emp_extension` varchar(6) DEFAULT NULL,
  `emp_correo` varchar(50) NOT NULL,
  `emp_usuario` varchar(30) NOT NULL,
  `emp_contrasena` varchar(250) NOT NULL,
  `emp_estado` tinyint(1) NOT NULL,
  `emp_fecha_vinculacion` date NOT NULL,
  `emp_fecha_aprobacion` date DEFAULT NULL,
  `emp_imagen` varchar(60) DEFAULT NULL,
  `fk_ciu_id` int(11) NOT NULL,
  `fk_adm_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`emp_cod`, `emp_nit`, `emp_nombre`, `emp_direccion`, `emp_telefono`, `emp_extension`, `emp_correo`, `emp_usuario`, `emp_contrasena`, `emp_estado`, `emp_fecha_vinculacion`, `emp_fecha_aprobacion`, `emp_imagen`, `fk_ciu_id`, `fk_adm_id`) VALUES
(1, 'abc-123', 'SONY', 'manizales-centro', '8857465', '111', 'sony@hotmail.com', 'bat', '356a192b7913b04c54574d18c28d46e6395428ab', 0, '2017-05-07', '2017-06-14', 'ruta2', 1, 2),
(3, 'gugu', 'ttt', 'ytf', 'yft', 'tr', 't', 'trdt', '9f6194d012e32351219374c1b15c7675fdc3b297', 1, '2017-09-08', '2017-05-30', 'trd', 1, 2),
(4, '123123', 'assaas', 'kra35 c # 96 - 24', '3117733362', '023', 'hgjhg@gmail.com', 'sss', '9c1c01dc3ac1445a500251fc34a15d3e75a849df', 0, '2017-05-21', '0000-00-00', 'ruta2', 111, NULL),
(5, '111', 'fff', 'fff', 'ffff', 'fff', 'ffff', 'fff', 'f6949a8c7d5b90b4a698660bbfb9431503fbb995', 1, '2017-05-21', '2017-05-30', 'ffff', 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_usuario`
--

CREATE TABLE `empresa_usuario` (
  `emp_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `estrellas` tinyint(1) NOT NULL,
  `comentario` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa_usuario`
--

INSERT INTO `empresa_usuario` (`emp_cod`, `usu_cod`, `fecha`, `estrellas`, `comentario`) VALUES
(1, 1, '2017-04-30', 4, 'muy malo el servicio'),
(1, 2, '2017-05-17', 5, 'eres  andres valencia'),
(4, 1, '2017-05-21', 4, 'gggggggggggggggggg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimiento_saldo`
--

CREATE TABLE `movimiento_saldo` (
  `mov_id` int(11) NOT NULL,
  `mov_tipo` varchar(20) NOT NULL,
  `mov_fecha` datetime NOT NULL,
  `mov_valor` int(7) NOT NULL,
  `mov_comprobante` varchar(250) NOT NULL,
  `mov_pista_sorteo` varchar(100) DEFAULT NULL,
  `fk_usu_cod` int(11) NOT NULL,
  `fk_tip_cod` int(11) DEFAULT NULL,
  `fk_sor_cod` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movimiento_saldo`
--

INSERT INTO `movimiento_saldo` (`mov_id`, `mov_tipo`, `mov_fecha`, `mov_valor`, `mov_comprobante`, `mov_pista_sorteo`, `fk_usu_cod`, `fk_tip_cod`, `fk_sor_cod`) VALUES
(1, 'recarga', '0000-00-00 00:00:00', 3000, '123456asdfg', 'Sí hay Pistas', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `pro_id` int(11) NOT NULL,
  `pro_nombre` varchar(50) NOT NULL,
  `pro_descripcion` varchar(150) NOT NULL,
  `pro_valor_estimado` int(10) NOT NULL,
  `pro_imagen` varchar(60) NOT NULL,
  `pro_cantidad` int(7) NOT NULL,
  `pro_fecha_actualizacion` datetime NOT NULL,
  `fk_emp_cod` int(11) NOT NULL,
  `fk_cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`pro_id`, `pro_nombre`, `pro_descripcion`, `pro_valor_estimado`, `pro_imagen`, `pro_cantidad`, `pro_fecha_actualizacion`, `fk_emp_cod`, `fk_cat_id`) VALUES
(1, 'pc', 'no hay descripcion', 1200, 'RUTA/IMAGEN', 8, '2017-06-09 09:28:35', 1, 2),
(2, 'Table', 'No hay descripcion', 306000, 'RUTA/IMAGEN', 4, '1986-12-30 00:00:00', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sorteo`
--

CREATE TABLE `sorteo` (
  `sor_cod` int(11) NOT NULL,
  `sor_fecha_inicio` datetime NOT NULL,
  `sor_cantidad_tickets` int(10) NOT NULL,
  `sor_precio_base` int(10) NOT NULL,
  `sor_precio_sorteo` int(10) NOT NULL,
  `sor_precio_tic` int(10) NOT NULL,
  `sor_fecha_fin` datetime DEFAULT NULL,
  `sor_fecha_confirmacion_empresa` date DEFAULT NULL,
  `sor_comentario_empresa` varchar(150) DEFAULT NULL,
  `sor_fecha_confirmacion_usuario` date DEFAULT NULL,
  `sor_comentario_usuario` varchar(150) DEFAULT NULL,
  `sor_titulo_sorteo` varchar(30) NOT NULL,
  `fk_pro_id` int(11) NOT NULL,
  `fk_cod_usu` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sorteo`
--

INSERT INTO `sorteo` (`sor_cod`, `sor_fecha_inicio`, `sor_cantidad_tickets`, `sor_precio_base`, `sor_precio_sorteo`, `sor_precio_tic`, `sor_fecha_fin`, `sor_fecha_confirmacion_empresa`, `sor_comentario_empresa`, `sor_fecha_confirmacion_usuario`, `sor_comentario_usuario`, `sor_titulo_sorteo`, `fk_pro_id`, `fk_cod_usu`) VALUES
(1, '2017-07-07 00:00:00', 200, 1200000, 1000000, 50000, '2017-07-08 00:00:00', '2017-06-16', 'Producto entregado', '2017-06-12', 'Buen servicio', 'Portátil Samsung', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sorteo_usuario`
--

CREATE TABLE `sorteo_usuario` (
  `sor_cod` int(11) NOT NULL,
  `usu_cod` int(11) NOT NULL,
  `contenido_observacion` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sorteo_usuario`
--

INSERT INTO `sorteo_usuario` (`sor_cod`, `usu_cod`, `contenido_observacion`) VALUES
(1, 1, 'El producto fue entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `tip_cod` int(11) NOT NULL,
  `tip_medio_pago` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_pago`
--

INSERT INTO `tipo_pago` (`tip_cod`, `tip_medio_pago`) VALUES
(1, 'Recarga'),
(2, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_cod` int(11) NOT NULL,
  `usu_nombre` varchar(30) NOT NULL,
  `usu_apellidos` varchar(40) NOT NULL,
  `usu_telefono` varchar(10) DEFAULT NULL,
  `usu_correo` varchar(40) NOT NULL,
  `usu_fecha_nacimiento` date DEFAULT NULL,
  `usu_genero` char(1) NOT NULL,
  `usu_saldo_total` int(7) DEFAULT NULL,
  `usu_foto_perfil` varchar(60) DEFAULT NULL,
  `usu_alias` varchar(30) NOT NULL,
  `usu_contrasena` varchar(250) NOT NULL,
  `fk_ciu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_cod`, `usu_nombre`, `usu_apellidos`, `usu_telefono`, `usu_correo`, `usu_fecha_nacimiento`, `usu_genero`, `usu_saldo_total`, `usu_foto_perfil`, `usu_alias`, `usu_contrasena`, `fk_ciu_id`) VALUES
(1, 'ADRIAN', 'FRANCO CIFUENTES', '3117733362', 'adrian@gmail.com', '1988-10-15', 'M', NULL, 'uploads/', 'ADRY', '356a192b7913b04c54574d18c28d46e6395428ab', 2),
(2, 'andres', 'valencia', '3117807992', 'andres1348@hotmail.com', '1995-08-13', 'M', NULL, 'uploads/', 'pipo', '715e4a633a340a9c4c1f8c53399d05c0f3a434b6', 1),
(5, 'tt', 'tt', 'tt', 'tt', '2017-05-10', 'F', NULL, 'RUTA/IMAGEN', 'qq', 'bed4eb698c6eeea7f1ddf5397d480d3f2c0fb938', 3),
(11111, 'd', 'd', 'd', 'd', '2017-05-26', 'M', NULL, 'uploads/', 'a', 'eee411109a229046154bc9d75265a9ccb23a3a9c', 1),
(1076543658, 'Sandry ', 'Corrales', '3214356097', 'sandry@gmail.com', '1992-03-11', 'F', NULL, 'uploads/', 'sandry', 'f4f59e822581d785ba910fbf3f268eca79db8204', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `categoria_usuario`
--
ALTER TABLE `categoria_usuario`
  ADD PRIMARY KEY (`cat_id`,`usu_cod`),
  ADD KEY `FK_10` (`usu_cod`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`ciu_id`),
  ADD KEY `FK_3` (`fk_dep_id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`emp_cod`),
  ADD UNIQUE KEY `emp_nit` (`emp_nit`),
  ADD KEY `FK_1` (`fk_ciu_id`),
  ADD KEY `FK_2` (`fk_adm_id`);

--
-- Indices de la tabla `empresa_usuario`
--
ALTER TABLE `empresa_usuario`
  ADD PRIMARY KEY (`emp_cod`,`usu_cod`),
  ADD KEY `FK_5` (`usu_cod`);

--
-- Indices de la tabla `movimiento_saldo`
--
ALTER TABLE `movimiento_saldo`
  ADD PRIMARY KEY (`mov_id`),
  ADD KEY `FK_13` (`fk_usu_cod`),
  ADD KEY `FK_14` (`fk_tip_cod`),
  ADD KEY `FK_15` (`fk_sor_cod`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `FK_7` (`fk_emp_cod`),
  ADD KEY `FK_8` (`fk_cat_id`);

--
-- Indices de la tabla `sorteo`
--
ALTER TABLE `sorteo`
  ADD PRIMARY KEY (`sor_cod`),
  ADD KEY `FK_11` (`fk_pro_id`),
  ADD KEY `FK_12` (`fk_cod_usu`);

--
-- Indices de la tabla `sorteo_usuario`
--
ALTER TABLE `sorteo_usuario`
  ADD PRIMARY KEY (`sor_cod`,`usu_cod`),
  ADD KEY `FK_17` (`usu_cod`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD PRIMARY KEY (`tip_cod`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_cod`),
  ADD KEY `FK_6` (`fk_ciu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `emp_cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categoria_usuario`
--
ALTER TABLE `categoria_usuario`
  ADD CONSTRAINT `FK_10` FOREIGN KEY (`usu_cod`) REFERENCES `usuario` (`usu_cod`),
  ADD CONSTRAINT `FK_9` FOREIGN KEY (`cat_id`) REFERENCES `categoria` (`cat_id`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `FK_3` FOREIGN KEY (`fk_dep_id`) REFERENCES `departamento` (`dep_id`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `FK_1` FOREIGN KEY (`fk_ciu_id`) REFERENCES `ciudad` (`ciu_id`),
  ADD CONSTRAINT `FK_2` FOREIGN KEY (`fk_adm_id`) REFERENCES `administrador` (`adm_id`);

--
-- Filtros para la tabla `empresa_usuario`
--
ALTER TABLE `empresa_usuario`
  ADD CONSTRAINT `FK_4` FOREIGN KEY (`emp_cod`) REFERENCES `empresa` (`emp_cod`),
  ADD CONSTRAINT `FK_5` FOREIGN KEY (`usu_cod`) REFERENCES `usuario` (`usu_cod`);

--
-- Filtros para la tabla `movimiento_saldo`
--
ALTER TABLE `movimiento_saldo`
  ADD CONSTRAINT `FK_13` FOREIGN KEY (`fk_usu_cod`) REFERENCES `usuario` (`usu_cod`),
  ADD CONSTRAINT `FK_14` FOREIGN KEY (`fk_tip_cod`) REFERENCES `tipo_pago` (`tip_cod`),
  ADD CONSTRAINT `FK_15` FOREIGN KEY (`fk_sor_cod`) REFERENCES `sorteo` (`sor_cod`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `FK_7` FOREIGN KEY (`fk_emp_cod`) REFERENCES `empresa` (`emp_cod`),
  ADD CONSTRAINT `FK_8` FOREIGN KEY (`fk_cat_id`) REFERENCES `categoria` (`cat_id`);

--
-- Filtros para la tabla `sorteo`
--
ALTER TABLE `sorteo`
  ADD CONSTRAINT `FK_11` FOREIGN KEY (`fk_pro_id`) REFERENCES `producto` (`pro_id`),
  ADD CONSTRAINT `FK_12` FOREIGN KEY (`fk_cod_usu`) REFERENCES `usuario` (`usu_cod`);

--
-- Filtros para la tabla `sorteo_usuario`
--
ALTER TABLE `sorteo_usuario`
  ADD CONSTRAINT `FK_16` FOREIGN KEY (`sor_cod`) REFERENCES `sorteo` (`sor_cod`),
  ADD CONSTRAINT `FK_17` FOREIGN KEY (`usu_cod`) REFERENCES `usuario` (`usu_cod`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_6` FOREIGN KEY (`fk_ciu_id`) REFERENCES `ciudad` (`ciu_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
