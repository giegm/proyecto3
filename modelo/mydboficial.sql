-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2015 a las 06:44:09
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayuda_vivienda`
--

CREATE TABLE IF NOT EXISTS `ayuda_vivienda` (
`ID_AYUDA_VIVIENDA` int(11) NOT NULL,
  `TIPO_AYUDA` varchar(30) DEFAULT NULL,
  `DESCRIPCION` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ayuda_vivienda`
--

INSERT INTO `ayuda_vivienda` (`ID_AYUDA_VIVIENDA`, `TIPO_AYUDA`, `DESCRIPCION`) VALUES
(3, '', '1'),
(4, '', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condiciones_salud`
--

CREATE TABLE IF NOT EXISTS `condiciones_salud` (
`ID_CONDICIONES_SALUD` int(11) NOT NULL,
  `PERSONA_ENFERMEDAD` varchar(30) DEFAULT NULL,
  `OTRA_ENFERMEDAD` varchar(3) DEFAULT NULL,
  `AYUDA_ENFERMOS` varchar(3) DEFAULT NULL,
  `TIPO_AYUDA` varchar(45) DEFAULT NULL,
  `SITUACION_EXCLUSION` varchar(30) DEFAULT NULL,
  `CANTIDAD_EXCLUSION` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `condiciones_salud`
--

INSERT INTO `condiciones_salud` (`ID_CONDICIONES_SALUD`, `PERSONA_ENFERMEDAD`, `OTRA_ENFERMEDAD`, `AYUDA_ENFERMOS`, `TIPO_AYUDA`, `SITUACION_EXCLUSION`, `CANTIDAD_EXCLUSION`) VALUES
(3, '9', '1', '1', 'sdf', '1', 3),
(4, '9', '1', '1', 'sdf', '1', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_academicos`
--

CREATE TABLE IF NOT EXISTS `datos_academicos` (
`ID_ACADEMICO` int(10) NOT NULL,
  `PROFESION` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NIV_INSTRUCCION` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_academicos`
--

INSERT INTO `datos_academicos` (`ID_ACADEMICO`, `PROFESION`, `NIV_INSTRUCCION`) VALUES
(2, 'fdsfd', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_contacto`
--

CREATE TABLE IF NOT EXISTS `datos_contacto` (
`ID_CONTACTO` int(10) NOT NULL,
  `TLF_CEL` int(12) DEFAULT NULL,
  `TLF_HAB` int(12) DEFAULT NULL,
  `TLF_OFI` int(12) DEFAULT NULL,
  `EMAIL` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_contacto`
--

INSERT INTO `datos_contacto` (`ID_CONTACTO`, `TLF_CEL`, `TLF_HAB`, `TLF_OFI`, `EMAIL`) VALUES
(2, 654546, 2128612278, 2124578245, 'erickaj718@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_encuestado`
--

CREATE TABLE IF NOT EXISTS `datos_encuestado` (
`ID_ENCUESTADO` int(10) NOT NULL,
  `NOMBRES` varchar(45) DEFAULT NULL,
  `CEDULA` int(9) DEFAULT NULL,
  `ENCUESTADOR` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_encuestado`
--

INSERT INTO `datos_encuestado` (`ID_ENCUESTADO`, `NOMBRES`, `CEDULA`, `ENCUESTADOR`) VALUES
(2, 'dfsdf sdfsdf', 21332, 'jhoan');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_familiares`
--

CREATE TABLE IF NOT EXISTS `datos_familiares` (
`ID_FAMILIARES` int(10) NOT NULL,
  `NOMBRES_F` varchar(30) DEFAULT NULL,
  `CEDULA_F` int(10) DEFAULT NULL,
  `FECHANAC_F` date DEFAULT NULL,
  `EDAD_F` int(3) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_familiares`
--

INSERT INTO `datos_familiares` (`ID_FAMILIARES`, `NOMBRES_F`, `CEDULA_F`, `FECHANAC_F`, `EDAD_F`) VALUES
(2, 'asds sadasd', 654564, '2015-07-07', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_finanzas`
--

CREATE TABLE IF NOT EXISTS `datos_finanzas` (
`ID_FINANZAS` int(10) NOT NULL,
  `TRABAJA` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TIPO_INGRESO` int(2) DEFAULT NULL,
  `INGRESO_MENSUAL` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_finanzas`
--

INSERT INTO `datos_finanzas` (`ID_FINANZAS`, `TRABAJA`, `TIPO_INGRESO`, `INGRESO_MENSUAL`) VALUES
(2, 'SI', 2, '123123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_login`
--

CREATE TABLE IF NOT EXISTS `datos_login` (
`ID_LOGIN` int(10) NOT NULL,
  `USERADMIN` varchar(20) DEFAULT NULL,
  `CEDULA` int(9) DEFAULT NULL,
  `PASSADMIN` longtext,
  `ROL_ADMIN` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_login`
--

INSERT INTO `datos_login` (`ID_LOGIN`, `USERADMIN`, `CEDULA`, `PASSADMIN`, `ROL_ADMIN`) VALUES
(4, 'jhoan', 561564, 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE IF NOT EXISTS `datos_personales` (
`ID_DATAPERSONAL` int(10) NOT NULL,
  `CI` int(10) DEFAULT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDO` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `F_NAC` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EDAD` int(3) DEFAULT NULL,
  `NACIONALIDAD` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`ID_DATAPERSONAL`, `CI`, `NOMBRE`, `APELLIDO`, `F_NAC`, `EDAD`, `NACIONALIDAD`) VALUES
(2, 654564, 'sadsd', 'dfgdf', '2015-07-07', 34, 'Venezolana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_relacion`
--

CREATE TABLE IF NOT EXISTS `datos_relacion` (
`ID_RELACION` int(10) NOT NULL,
  `EMBARAZO` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CNE` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `SEXO` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EDOCIVIL` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_relacion`
--

INSERT INTO `datos_relacion` (`ID_RELACION`, `EMBARAZO`, `CNE`, `SEXO`, `EDOCIVIL`) VALUES
(2, 'SI', 'SI', '1', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_salud`
--

CREATE TABLE IF NOT EXISTS `datos_salud` (
`ID_SALUD` int(10) NOT NULL,
  `DISCAPACIDAD` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TIPO_DISCAPACIDAD` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PENSIONADO` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `INSTITUCION` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_salud`
--

INSERT INTO `datos_salud` (`ID_SALUD`, `DISCAPACIDAD`, `TIPO_DISCAPACIDAD`, `PENSIONADO`, `INSTITUCION`) VALUES
(2, 'NO', 'ninguna', 'NO', 'cufm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_serv_electrico`
--

CREATE TABLE IF NOT EXISTS `detalles_serv_electrico` (
`ID_SERV_ELECTRICO` int(11) NOT NULL,
  `MEDIDOR` varchar(3) DEFAULT NULL,
  `BOMBILLOS_NECESITA` varchar(3) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_serv_electrico`
--

INSERT INTO `detalles_serv_electrico` (`ID_SERV_ELECTRICO`, `MEDIDOR`, `BOMBILLOS_NECESITA`) VALUES
(4, '0', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_vivienda`
--

CREATE TABLE IF NOT EXISTS `detalles_vivienda` (
`ID_DETALLES_VIVIENDA` int(11) NOT NULL,
  `TIPO_VIVIENDA` varchar(30) DEFAULT NULL,
  `HABITACIONES` varchar(30) DEFAULT NULL,
  `NUM_HABITACIONES` int(3) DEFAULT NULL,
  `TIPO_PAREDES` varchar(30) DEFAULT NULL,
  `TIPO_TECHO` varchar(30) DEFAULT NULL,
  `ENSERES_VIVIENDA` varchar(30) DEFAULT NULL,
  `INSECTOS_ROEDORES` varchar(3) DEFAULT NULL,
  `ANIMALES_DOMESTICOS` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_vivienda`
--

INSERT INTO `detalles_vivienda` (`ID_DETALLES_VIVIENDA`, `TIPO_VIVIENDA`, `HABITACIONES`, `NUM_HABITACIONES`, `TIPO_PAREDES`, `TIPO_TECHO`, `ENSERES_VIVIENDA`, `INSECTOS_ROEDORES`, `ANIMALES_DOMESTICOS`) VALUES
(4, '1', '1', 23, '0', '0', '2', '0', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_servicios`
--

CREATE TABLE IF NOT EXISTS `detalle_servicios` (
`ID_DETALLE_SERVICIOS` int(11) NOT NULL,
  `TANQUE` varchar(3) DEFAULT NULL,
  `TANQUE_LITROS` varchar(5) DEFAULT NULL,
  `PIPOTES` varchar(3) DEFAULT NULL,
  `CANT_PIPOTES` varchar(2) DEFAULT NULL,
  `PROVEEDOR_GAS` varchar(30) DEFAULT NULL,
  `CANT_CILINDROS_GAS` varchar(5) DEFAULT NULL,
  `DURACION_GAS` varchar(15) DEFAULT NULL,
  `PRECIO_GAS` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_servicios`
--

INSERT INTO `detalle_servicios` (`ID_DETALLE_SERVICIOS`, `TANQUE`, `TANQUE_LITROS`, `PIPOTES`, `CANT_PIPOTES`, `PROVEEDOR_GAS`, `CANT_CILINDROS_GAS`, `DURACION_GAS`, `PRECIO_GAS`) VALUES
(4, '0', '34', '0', '2', 'dfg', '34', '54', '34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento_censo`
--

CREATE TABLE IF NOT EXISTS `evento_censo` (
`ID_EVENTO` int(10) unsigned NOT NULL,
  `FECHA` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `evento_censo`
--

INSERT INTO `evento_censo` (`ID_EVENTO`, `FECHA`) VALUES
(3, '2015/07/08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento_noticia`
--

CREATE TABLE IF NOT EXISTS `evento_noticia` (
  `ID_EVENT_NOTICIA` int(10) unsigned NOT NULL,
  `RESPONSABLE` varchar(30) NOT NULL,
  `FCHA_EVENT_NOTICIA` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar_academico`
--

CREATE TABLE IF NOT EXISTS `familiar_academico` (
`ID_ACADEMICO_F` int(10) NOT NULL,
  `GRADO_INSTRUCCION_F` varchar(20) DEFAULT NULL,
  `PROFESION_F` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar_academico`
--

INSERT INTO `familiar_academico` (`ID_ACADEMICO_F`, `GRADO_INSTRUCCION_F`, `PROFESION_F`) VALUES
(2, 'sadasd', 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar_finanzas`
--

CREATE TABLE IF NOT EXISTS `familiar_finanzas` (
`ID_FINANZAS_F` int(10) NOT NULL,
  `INGMENSUAL_F` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar_finanzas`
--

INSERT INTO `familiar_finanzas` (`ID_FINANZAS_F`, `INGMENSUAL_F`) VALUES
(2, '5645');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar_relacion`
--

CREATE TABLE IF NOT EXISTS `familiar_relacion` (
`ID_DETALLE_F` int(10) NOT NULL,
  `PARENTESCO_F` varchar(20) DEFAULT NULL,
  `CNE_F` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar_relacion`
--

INSERT INTO `familiar_relacion` (`ID_DETALLE_F`, `PARENTESCO_F`, `CNE_F`) VALUES
(2, 'sdfdsf', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar_salud`
--

CREATE TABLE IF NOT EXISTS `familiar_salud` (
`ID_SALUD_F` int(10) NOT NULL,
  `EMBARAZO_F` varchar(5) DEFAULT NULL,
  `DISCAPACIDAD_F` varchar(45) DEFAULT NULL,
  `PENSIONADO_F` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar_salud`
--

INSERT INTO `familiar_salud` (`ID_SALUD_F`, `EMBARAZO_F`, `DISCAPACIDAD_F`, `PENSIONADO_F`) VALUES
(2, 'SI', 'ghffd', 'SI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias_web`
--

CREATE TABLE IF NOT EXISTS `noticias_web` (
  `ID_NOTICIAS` int(10) unsigned NOT NULL,
  `IMG_NOTICIAUNO` longblob,
  `TITULO_NOTICIA` varchar(50) NOT NULL,
  `FCHA_NOTICIA` varchar(30) NOT NULL,
  `CATEG_NOTICIA` varchar(30) NOT NULL,
  `DESCRIPC_NOTICIA` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participacion_comunitaria`
--

CREATE TABLE IF NOT EXISTS `participacion_comunitaria` (
`ID_PARTICIPACION_COMUNITARIA` int(11) NOT NULL,
  `ORG_COMUNITARIA` varchar(3) DEFAULT NULL,
  `DESCRIPCION` varchar(45) DEFAULT NULL,
  `PARTICIPA` varchar(3) DEFAULT NULL,
  `PARTICIPA_FAMILIAR` varchar(3) DEFAULT NULL,
  `MISIONES_COMUNIDAD` varchar(45) DEFAULT NULL,
  `OTRA_MISION` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `participacion_comunitaria`
--

INSERT INTO `participacion_comunitaria` (`ID_PARTICIPACION_COMUNITARIA`, `ORG_COMUNITARIA`, `DESCRIPCION`, `PARTICIPA`, `PARTICIPA_FAMILIAR`, `MISIONES_COMUNIDAD`, `OTRA_MISION`) VALUES
(4, '0', 'sdf', '0', '0', '1', 'sdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_part_comunitaria`
--

CREATE TABLE IF NOT EXISTS `preguntas_part_comunitaria` (
`ID_PREG_PARTCOMUNITARIA` int(11) NOT NULL,
  `P_UNO` varchar(45) DEFAULT NULL,
  `P_DOS` varchar(45) DEFAULT NULL,
  `P_TRES` varchar(45) DEFAULT NULL,
  `P_CUATRO` varchar(45) DEFAULT NULL,
  `P_CINCO` varchar(45) DEFAULT NULL,
  `P_SEIS` varchar(45) DEFAULT NULL,
  `P_SIETE` varchar(45) DEFAULT NULL,
  `P_OCHO` varchar(45) DEFAULT NULL,
  `P_NUEVE` varchar(45) DEFAULT NULL,
  `P_DIEZ` varchar(45) DEFAULT NULL,
  `P_ONCE` varchar(45) DEFAULT NULL,
  `P_DOCE` varchar(45) DEFAULT NULL,
  `OTRA_AREA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntas_part_comunitaria`
--

INSERT INTO `preguntas_part_comunitaria` (`ID_PREG_PARTCOMUNITARIA`, `P_UNO`, `P_DOS`, `P_TRES`, `P_CUATRO`, `P_CINCO`, `P_SEIS`, `P_SIETE`, `P_OCHO`, `P_NUEVE`, `P_DIEZ`, `P_ONCE`, `P_DOCE`, `OTRA_AREA`) VALUES
(4, '0', '0', '0', '0', '0', 'sdf', 'sdfsd', 'fdsff', 'sdfsdf', 'sdfsdfsdf', 'sdfsdfdsf', '10', 'sdfsdfsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion_comunidad`
--

CREATE TABLE IF NOT EXISTS `situacion_comunidad` (
`ID_SITUACION_COMUNIDAD` int(11) NOT NULL,
  `P_UNO` varchar(45) DEFAULT NULL,
  `P_DOS` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `situacion_comunidad`
--

INSERT INTO `situacion_comunidad` (`ID_SITUACION_COMUNIDAD`, `P_UNO`, `P_DOS`) VALUES
(4, 'sdfsdfsdf', 'sdfsdfsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion_economica`
--

CREATE TABLE IF NOT EXISTS `situacion_economica` (
`ID_SITUACION_ECONOMICA` int(11) NOT NULL,
  `DONDE_TRABAJA` varchar(40) DEFAULT NULL,
  `PREGUNTA_UNO` varchar(3) DEFAULT NULL,
  `ING_FAMILIAR` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `situacion_economica`
--

INSERT INTO `situacion_economica` (`ID_SITUACION_ECONOMICA`, `DONDE_TRABAJA`, `PREGUNTA_UNO`, `ING_FAMILIAR`) VALUES
(4, 'sdf', 'SI', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion_servicios`
--

CREATE TABLE IF NOT EXISTS `situacion_servicios` (
`ID_SITUACION_SERVICIOS` int(11) NOT NULL,
  `AGUAS_BLANCAS` varchar(3) DEFAULT NULL,
  `MEDIDOR` varchar(3) DEFAULT NULL,
  `AGUAS_SERVIDAS` varchar(30) DEFAULT NULL,
  `GAS` varchar(30) DEFAULT NULL,
  `SISTEMA_ELECTRICO` varchar(30) DEFAULT NULL,
  `BOMBILLOS_AHORRADORES` varchar(3) DEFAULT NULL,
  `RECOL_BASURA` varchar(30) DEFAULT NULL,
  `TELEFONIA` varchar(30) DEFAULT NULL,
  `TRANSPORTE` varchar(30) DEFAULT NULL,
  `TIPO_INFORMACION` varchar(40) DEFAULT NULL,
  `SERV_COMUNALES` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `situacion_servicios`
--

INSERT INTO `situacion_servicios` (`ID_SITUACION_SERVICIOS`, `AGUAS_BLANCAS`, `MEDIDOR`, `AGUAS_SERVIDAS`, `GAS`, `SISTEMA_ELECTRICO`, `BOMBILLOS_AHORRADORES`, `RECOL_BASURA`, `TELEFONIA`, `TRANSPORTE`, `TIPO_INFORMACION`, `SERV_COMUNALES`) VALUES
(4, '1', '0', '15', '2', '2', '0', '0', '1', '0', '3', '12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion_vivienda`
--

CREATE TABLE IF NOT EXISTS `situacion_vivienda` (
`ID_SITUACION_VIVIENDA` int(11) NOT NULL,
  `COND_TERRENO` varchar(30) DEFAULT NULL,
  `FORMA_TENENCIA` varchar(30) DEFAULT NULL,
  `OCV` varchar(3) DEFAULT NULL,
  `TERRENO_PROPIO` varchar(3) DEFAULT NULL,
  `SIVIH` varchar(3) DEFAULT NULL,
  `CONSTANCIA_SIVIH` varchar(3) DEFAULT NULL,
  `COTIZA_LPH` varchar(3) DEFAULT NULL,
  `SALUBRIDAD_VIVIENDA` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `situacion_vivienda`
--

INSERT INTO `situacion_vivienda` (`ID_SITUACION_VIVIENDA`, `COND_TERRENO`, `FORMA_TENENCIA`, `OCV`, `TERRENO_PROPIO`, `SIVIH`, `CONSTANCIA_SIVIH`, `COTIZA_LPH`, `SALUBRIDAD_VIVIENDA`) VALUES
(4, '1', '1', '1', '1', '0', '0', '0', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ayuda_vivienda`
--
ALTER TABLE `ayuda_vivienda`
 ADD PRIMARY KEY (`ID_AYUDA_VIVIENDA`);

--
-- Indices de la tabla `condiciones_salud`
--
ALTER TABLE `condiciones_salud`
 ADD PRIMARY KEY (`ID_CONDICIONES_SALUD`);

--
-- Indices de la tabla `datos_academicos`
--
ALTER TABLE `datos_academicos`
 ADD PRIMARY KEY (`ID_ACADEMICO`);

--
-- Indices de la tabla `datos_contacto`
--
ALTER TABLE `datos_contacto`
 ADD PRIMARY KEY (`ID_CONTACTO`);

--
-- Indices de la tabla `datos_encuestado`
--
ALTER TABLE `datos_encuestado`
 ADD PRIMARY KEY (`ID_ENCUESTADO`);

--
-- Indices de la tabla `datos_familiares`
--
ALTER TABLE `datos_familiares`
 ADD PRIMARY KEY (`ID_FAMILIARES`);

--
-- Indices de la tabla `datos_finanzas`
--
ALTER TABLE `datos_finanzas`
 ADD PRIMARY KEY (`ID_FINANZAS`);

--
-- Indices de la tabla `datos_login`
--
ALTER TABLE `datos_login`
 ADD PRIMARY KEY (`ID_LOGIN`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
 ADD PRIMARY KEY (`ID_DATAPERSONAL`);

--
-- Indices de la tabla `datos_relacion`
--
ALTER TABLE `datos_relacion`
 ADD PRIMARY KEY (`ID_RELACION`);

--
-- Indices de la tabla `datos_salud`
--
ALTER TABLE `datos_salud`
 ADD PRIMARY KEY (`ID_SALUD`);

--
-- Indices de la tabla `detalles_serv_electrico`
--
ALTER TABLE `detalles_serv_electrico`
 ADD PRIMARY KEY (`ID_SERV_ELECTRICO`);

--
-- Indices de la tabla `detalles_vivienda`
--
ALTER TABLE `detalles_vivienda`
 ADD PRIMARY KEY (`ID_DETALLES_VIVIENDA`);

--
-- Indices de la tabla `detalle_servicios`
--
ALTER TABLE `detalle_servicios`
 ADD PRIMARY KEY (`ID_DETALLE_SERVICIOS`);

--
-- Indices de la tabla `evento_censo`
--
ALTER TABLE `evento_censo`
 ADD PRIMARY KEY (`ID_EVENTO`);

--
-- Indices de la tabla `evento_noticia`
--
ALTER TABLE `evento_noticia`
 ADD PRIMARY KEY (`ID_EVENT_NOTICIA`);

--
-- Indices de la tabla `familiar_academico`
--
ALTER TABLE `familiar_academico`
 ADD PRIMARY KEY (`ID_ACADEMICO_F`);

--
-- Indices de la tabla `familiar_finanzas`
--
ALTER TABLE `familiar_finanzas`
 ADD PRIMARY KEY (`ID_FINANZAS_F`);

--
-- Indices de la tabla `familiar_relacion`
--
ALTER TABLE `familiar_relacion`
 ADD PRIMARY KEY (`ID_DETALLE_F`);

--
-- Indices de la tabla `familiar_salud`
--
ALTER TABLE `familiar_salud`
 ADD PRIMARY KEY (`ID_SALUD_F`);

--
-- Indices de la tabla `noticias_web`
--
ALTER TABLE `noticias_web`
 ADD PRIMARY KEY (`ID_NOTICIAS`);

--
-- Indices de la tabla `participacion_comunitaria`
--
ALTER TABLE `participacion_comunitaria`
 ADD PRIMARY KEY (`ID_PARTICIPACION_COMUNITARIA`);

--
-- Indices de la tabla `preguntas_part_comunitaria`
--
ALTER TABLE `preguntas_part_comunitaria`
 ADD PRIMARY KEY (`ID_PREG_PARTCOMUNITARIA`);

--
-- Indices de la tabla `situacion_comunidad`
--
ALTER TABLE `situacion_comunidad`
 ADD PRIMARY KEY (`ID_SITUACION_COMUNIDAD`);

--
-- Indices de la tabla `situacion_economica`
--
ALTER TABLE `situacion_economica`
 ADD PRIMARY KEY (`ID_SITUACION_ECONOMICA`);

--
-- Indices de la tabla `situacion_servicios`
--
ALTER TABLE `situacion_servicios`
 ADD PRIMARY KEY (`ID_SITUACION_SERVICIOS`);

--
-- Indices de la tabla `situacion_vivienda`
--
ALTER TABLE `situacion_vivienda`
 ADD PRIMARY KEY (`ID_SITUACION_VIVIENDA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ayuda_vivienda`
--
ALTER TABLE `ayuda_vivienda`
MODIFY `ID_AYUDA_VIVIENDA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `condiciones_salud`
--
ALTER TABLE `condiciones_salud`
MODIFY `ID_CONDICIONES_SALUD` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `datos_academicos`
--
ALTER TABLE `datos_academicos`
MODIFY `ID_ACADEMICO` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `datos_contacto`
--
ALTER TABLE `datos_contacto`
MODIFY `ID_CONTACTO` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `datos_encuestado`
--
ALTER TABLE `datos_encuestado`
MODIFY `ID_ENCUESTADO` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `datos_familiares`
--
ALTER TABLE `datos_familiares`
MODIFY `ID_FAMILIARES` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `datos_finanzas`
--
ALTER TABLE `datos_finanzas`
MODIFY `ID_FINANZAS` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `datos_login`
--
ALTER TABLE `datos_login`
MODIFY `ID_LOGIN` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
MODIFY `ID_DATAPERSONAL` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `datos_relacion`
--
ALTER TABLE `datos_relacion`
MODIFY `ID_RELACION` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `datos_salud`
--
ALTER TABLE `datos_salud`
MODIFY `ID_SALUD` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `detalles_serv_electrico`
--
ALTER TABLE `detalles_serv_electrico`
MODIFY `ID_SERV_ELECTRICO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `detalles_vivienda`
--
ALTER TABLE `detalles_vivienda`
MODIFY `ID_DETALLES_VIVIENDA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `detalle_servicios`
--
ALTER TABLE `detalle_servicios`
MODIFY `ID_DETALLE_SERVICIOS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `evento_censo`
--
ALTER TABLE `evento_censo`
MODIFY `ID_EVENTO` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `familiar_academico`
--
ALTER TABLE `familiar_academico`
MODIFY `ID_ACADEMICO_F` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `familiar_finanzas`
--
ALTER TABLE `familiar_finanzas`
MODIFY `ID_FINANZAS_F` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `familiar_relacion`
--
ALTER TABLE `familiar_relacion`
MODIFY `ID_DETALLE_F` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `familiar_salud`
--
ALTER TABLE `familiar_salud`
MODIFY `ID_SALUD_F` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `participacion_comunitaria`
--
ALTER TABLE `participacion_comunitaria`
MODIFY `ID_PARTICIPACION_COMUNITARIA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `preguntas_part_comunitaria`
--
ALTER TABLE `preguntas_part_comunitaria`
MODIFY `ID_PREG_PARTCOMUNITARIA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `situacion_comunidad`
--
ALTER TABLE `situacion_comunidad`
MODIFY `ID_SITUACION_COMUNIDAD` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `situacion_economica`
--
ALTER TABLE `situacion_economica`
MODIFY `ID_SITUACION_ECONOMICA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `situacion_servicios`
--
ALTER TABLE `situacion_servicios`
MODIFY `ID_SITUACION_SERVICIOS` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `situacion_vivienda`
--
ALTER TABLE `situacion_vivienda`
MODIFY `ID_SITUACION_VIVIENDA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
