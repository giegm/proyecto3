-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2016 a las 06:38:01
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb(nueva)`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayuda_vivienda`
--

CREATE TABLE `ayuda_vivienda` (
  `ID_AYUDA_VIVIENDA` int(11) NOT NULL,
  `TIPO_AYUDA` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `DESCRIPCION` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ayuda_vivienda`
--

INSERT INTO `ayuda_vivienda` (`ID_AYUDA_VIVIENDA`, `TIPO_AYUDA`, `DESCRIPCION`, `ID_JEFE`) VALUES
(6, 'Ninguna', 'Ninguna', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_aguas_blancas`
--

CREATE TABLE `casa_aguas_blancas` (
  `ID_AGUASBLANCAS` int(11) NOT NULL,
  `AGUASBLANCAS` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_aguas_blancas`
--

INSERT INTO `casa_aguas_blancas` (`ID_AGUASBLANCAS`, `AGUASBLANCAS`) VALUES
(1, 'Acueducto'),
(2, 'Camion'),
(3, 'Pila Publica'),
(4, 'Del rio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_aguas_servidas`
--

CREATE TABLE `casa_aguas_servidas` (
  `ID_AGUASERV` int(11) NOT NULL,
  `AGUASERVIDA` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_aguas_servidas`
--

INSERT INTO `casa_aguas_servidas` (`ID_AGUASERV`, `AGUASERVIDA`) VALUES
(1, 'Cloacas'),
(2, 'Pozo septico'),
(3, 'Letrinas'),
(4, 'Al aire libre'),
(5, 'Depositada en bolsas'),
(6, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_animales`
--

CREATE TABLE `casa_animales` (
  `ID_ANIMALES` int(11) NOT NULL,
  `ANIMALES` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_animales`
--

INSERT INTO `casa_animales` (`ID_ANIMALES`, `ANIMALES`) VALUES
(1, 'Ninguno'),
(2, 'Perro'),
(3, 'Gato'),
(4, 'Gallinas'),
(5, 'Pájaros'),
(6, 'Patos'),
(7, 'Cochinos'),
(8, 'Otro(s)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_condiciones_terreno`
--

CREATE TABLE `casa_condiciones_terreno` (
  `ID_CONDTERRENO` int(11) NOT NULL,
  `CONDTERRENO` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_condiciones_terreno`
--

INSERT INTO `casa_condiciones_terreno` (`ID_CONDTERRENO`, `CONDTERRENO`) VALUES
(1, 'Estable'),
(2, 'Inestable'),
(3, 'Alto Riesgo'),
(4, 'Vulnerable'),
(5, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_enseres_vivienda`
--

CREATE TABLE `casa_enseres_vivienda` (
  `ID_ENSERESVIVIENDA` int(11) NOT NULL,
  `ENSERESVIVIENDA` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_enseres_vivienda`
--

INSERT INTO `casa_enseres_vivienda` (`ID_ENSERESVIVIENDA`, `ENSERESVIVIENDA`) VALUES
(1, 'Nevera'),
(2, 'Cocina'),
(3, 'Gabinete'),
(4, 'Cama'),
(5, 'Ventilador'),
(6, 'Juego de Comedor'),
(7, 'Muebles de Sala'),
(8, 'Utensilios de Cocina'),
(9, 'Tv'),
(10, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_formas_tenencia`
--

CREATE TABLE `casa_formas_tenencia` (
  `ID_FORMATENENCIA` int(11) NOT NULL,
  `FORMATENENCIA` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_formas_tenencia`
--

INSERT INTO `casa_formas_tenencia` (`ID_FORMATENENCIA`, `FORMATENENCIA`) VALUES
(1, 'Propia'),
(2, 'Alquilada'),
(3, 'Compartida'),
(4, 'Invadida'),
(5, 'Traspasada'),
(6, 'Prestada'),
(7, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_gas`
--

CREATE TABLE `casa_gas` (
  `ID_GAS` int(11) NOT NULL,
  `GAS` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_gas`
--

INSERT INTO `casa_gas` (`ID_GAS`, `GAS`) VALUES
(1, 'No posee'),
(2, 'Bombona'),
(3, 'Tuberia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_habitaciones`
--

CREATE TABLE `casa_habitaciones` (
  `ID_HABITACIONES` int(11) NOT NULL,
  `HABITACIONES` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_habitaciones`
--

INSERT INTO `casa_habitaciones` (`ID_HABITACIONES`, `HABITACIONES`) VALUES
(1, 'Sala'),
(2, 'Comedor'),
(3, 'Cocina'),
(4, 'Baño');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_ingreso_familiar`
--

CREATE TABLE `casa_ingreso_familiar` (
  `ID_INGFAMILIAR` int(11) NOT NULL,
  `INGFAMILIAR` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_ingreso_familiar`
--

INSERT INTO `casa_ingreso_familiar` (`ID_INGFAMILIAR`, `INGFAMILIAR`) VALUES
(1, 'Menos de 200.000'),
(2, 'De 200.001 a 600.000'),
(3, 'De 601.000 a 2.000.000'),
(4, 'De 2.000.001 y mas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_mecanismo_infor`
--

CREATE TABLE `casa_mecanismo_infor` (
  `ID_MECANISMOINFO` int(11) NOT NULL,
  `MECANISMOINFO` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_mecanismo_infor`
--

INSERT INTO `casa_mecanismo_infor` (`ID_MECANISMOINFO`, `MECANISMOINFO`) VALUES
(1, 'Television'),
(2, 'Radio'),
(3, 'Prensa'),
(4, 'Internet'),
(5, 'Medios alternativos comunitarios'),
(6, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_plagas`
--

CREATE TABLE `casa_plagas` (
  `ID_PLAGAS` int(11) NOT NULL,
  `PLAGAS` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_plagas`
--

INSERT INTO `casa_plagas` (`ID_PLAGAS`, `PLAGAS`) VALUES
(1, 'Ninguno'),
(2, 'Moscas'),
(3, 'Hormigas'),
(4, 'Ratones'),
(5, 'Ciempies'),
(6, 'Otro(s)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_recoleccion_basura`
--

CREATE TABLE `casa_recoleccion_basura` (
  `ID_RECOLBASURA` int(11) NOT NULL,
  `RECOLBASURA` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_recoleccion_basura`
--

INSERT INTO `casa_recoleccion_basura` (`ID_RECOLBASURA`, `RECOLBASURA`) VALUES
(1, 'Aseo Urbano'),
(2, 'Conteiner'),
(3, 'Bajante'),
(4, 'Camion'),
(5, 'Al aire libre'),
(6, 'Quemada'),
(7, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_salubridad_vivienda`
--

CREATE TABLE `casa_salubridad_vivienda` (
  `ID_SALUBRIDADVIVIENDA` int(11) NOT NULL,
  `SALUBRIDADVIVIENDA` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_salubridad_vivienda`
--

INSERT INTO `casa_salubridad_vivienda` (`ID_SALUBRIDADVIVIENDA`, `SALUBRIDADVIVIENDA`) VALUES
(1, 'limpia'),
(2, 'Sucia'),
(3, 'Medio Sucia'),
(4, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_servicios_comunales`
--

CREATE TABLE `casa_servicios_comunales` (
  `ID_SERVCOMUNALES` int(11) NOT NULL,
  `SERVCOMUNALES` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_servicios_comunales`
--

INSERT INTO `casa_servicios_comunales` (`ID_SERVCOMUNALES`, `SERVCOMUNALES`) VALUES
(1, 'Mercado'),
(2, 'Bodega'),
(3, 'Abastos'),
(4, 'Farmacia'),
(5, 'Plazas y Parques'),
(6, 'Preescolar'),
(7, 'Escuelas'),
(8, 'Liceos'),
(9, 'Centro de salud'),
(10, 'Canchas'),
(11, 'Casa comunal'),
(12, 'Iglesia'),
(13, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_sistema_electrico`
--

CREATE TABLE `casa_sistema_electrico` (
  `ID_SISTELECTRICO` int(11) NOT NULL,
  `SISTELECTRICO` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_sistema_electrico`
--

INSERT INTO `casa_sistema_electrico` (`ID_SISTELECTRICO`, `SISTELECTRICO`) VALUES
(1, 'Publico'),
(2, 'Planta Electrica'),
(3, 'Propia'),
(4, 'No tiene');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_telefonia`
--

CREATE TABLE `casa_telefonia` (
  `ID_TELEFONIA` int(11) NOT NULL,
  `TELEFONIA` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_telefonia`
--

INSERT INTO `casa_telefonia` (`ID_TELEFONIA`, `TELEFONIA`) VALUES
(1, 'Domiciliaria'),
(2, 'Celular'),
(3, 'Prepago'),
(4, 'Centro de Conexión'),
(5, 'Otra'),
(6, 'No posee');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_tipo_ayuda_mejora`
--

CREATE TABLE `casa_tipo_ayuda_mejora` (
  `ID_TIPOAYUDACASA` int(11) NOT NULL,
  `TIPOAYUDACASA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_tipo_ayuda_mejora`
--

INSERT INTO `casa_tipo_ayuda_mejora` (`ID_TIPOAYUDACASA`, `TIPOAYUDACASA`) VALUES
(1, 'Rehabilitacion'),
(2, 'Sustitucion'),
(3, 'Ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_tipo_paredes`
--

CREATE TABLE `casa_tipo_paredes` (
  `ID_TIPOPAREDES` int(11) NOT NULL,
  `TIPOPAREDES` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_tipo_paredes`
--

INSERT INTO `casa_tipo_paredes` (`ID_TIPOPAREDES`, `TIPOPAREDES`) VALUES
(1, 'Frisadas'),
(2, 'Sin Frisar'),
(3, 'Tablas'),
(4, 'Bahareque o Adobe'),
(5, 'Zinc'),
(6, 'Carton'),
(7, 'Piedra'),
(8, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_tipo_techo`
--

CREATE TABLE `casa_tipo_techo` (
  `ID_TIPOTECHO` int(11) NOT NULL,
  `TIPOTECHO` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_tipo_techo`
--

INSERT INTO `casa_tipo_techo` (`ID_TIPOTECHO`, `TIPOTECHO`) VALUES
(1, 'Platabanda'),
(2, 'Asbesto'),
(3, 'Teja'),
(4, 'Zinc'),
(5, 'Techo Raso'),
(6, 'Machihembrado'),
(7, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_tipo_vivienda`
--

CREATE TABLE `casa_tipo_vivienda` (
  `ID_TIPOVIVIENDA` int(11) NOT NULL,
  `TIPOVIVIENDA` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_tipo_vivienda`
--

INSERT INTO `casa_tipo_vivienda` (`ID_TIPOVIVIENDA`, `TIPOVIVIENDA`) VALUES
(1, 'Casa'),
(2, 'Quinta'),
(3, 'Apartamento'),
(4, 'Rancho'),
(5, 'Barraca'),
(6, 'Habitación'),
(7, 'Anexo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_transporte`
--

CREATE TABLE `casa_transporte` (
  `ID_TRANSPORTE` int(11) NOT NULL,
  `TRANSPORTE` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `casa_transporte`
--

INSERT INTO `casa_transporte` (`ID_TRANSPORTE`, `TRANSPORTE`) VALUES
(1, 'Publico'),
(2, 'Propio'),
(3, 'Bestias'),
(4, 'Privado'),
(5, 'Taxi'),
(6, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_noticia`
--

CREATE TABLE `categoria_noticia` (
  `ID_CATEGORIA` int(11) NOT NULL,
  `CATEGORIA` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria_noticia`
--

INSERT INTO `categoria_noticia` (`ID_CATEGORIA`, `CATEGORIA`) VALUES
(1, 'Deportes'),
(2, 'Salud'),
(3, 'Educación'),
(4, 'Social'),
(5, 'Política'),
(6, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `censos`
--

CREATE TABLE `censos` (
  `ID_CENSO` int(11) NOT NULL,
  `FECHA_CENSO` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `HORA_CENSO` time NOT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `censos`
--

INSERT INTO `censos` (`ID_CENSO`, `FECHA_CENSO`, `HORA_CENSO`, `ID_JEFE`) VALUES
(6, '2016/07/11', '00:00:00', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidad_misiones`
--

CREATE TABLE `comunidad_misiones` (
  `ID_MISIONES` int(11) NOT NULL,
  `MISIONES` varchar(70) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comunidad_misiones`
--

INSERT INTO `comunidad_misiones` (`ID_MISIONES`, `MISIONES`) VALUES
(1, 'Ribas'),
(2, 'Sucre'),
(3, 'Vuelvan caras'),
(4, 'Identidad'),
(5, 'Barrio Adentro'),
(6, 'Ezequiel Zamora'),
(7, 'Mercal'),
(8, 'Ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condiciones_salud`
--

CREATE TABLE `condiciones_salud` (
  `ID_CONDICIONES_SALUD` int(11) NOT NULL,
  `PERSONA_ENFERMEDAD` varchar(30) DEFAULT NULL,
  `PERSONA_ENFERMEDAD1` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `PERSONA_ENFERMEDAD2` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `PERSONA_ENFERMEDAD3` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `PERSONA_ENFERMEDAD4` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `PERSONA_ENFERMEDAD5` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `PERSONA_ENFERMEDAD6` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `PERSONA_ENFERMEDAD7` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `PERSONA_ENFERMEDAD8` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `PERSONA_ENFERMEDAD9` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `PERSONA_ENFERMEDAD10` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `OTRA_ENFERMEDAD` varchar(3) DEFAULT NULL,
  `AYUDA_ENFERMOS` varchar(3) DEFAULT NULL,
  `TIPO_AYUDA` varchar(45) DEFAULT NULL,
  `SITUACION_EXCLUSION` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `SITUACION_EXCLUSION1` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SITUACION_EXCLUSION2` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SITUACION_EXCLUSION3` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SITUACION_EXCLUSION4` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SITUACION_EXCLUSION5` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SITUACION_EXCLUSION6` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `CANTIDAD_EXCLUSION` int(2) DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `condiciones_salud`
--

INSERT INTO `condiciones_salud` (`ID_CONDICIONES_SALUD`, `PERSONA_ENFERMEDAD`, `PERSONA_ENFERMEDAD1`, `PERSONA_ENFERMEDAD2`, `PERSONA_ENFERMEDAD3`, `PERSONA_ENFERMEDAD4`, `PERSONA_ENFERMEDAD5`, `PERSONA_ENFERMEDAD6`, `PERSONA_ENFERMEDAD7`, `PERSONA_ENFERMEDAD8`, `PERSONA_ENFERMEDAD9`, `PERSONA_ENFERMEDAD10`, `OTRA_ENFERMEDAD`, `AYUDA_ENFERMOS`, `TIPO_AYUDA`, `SITUACION_EXCLUSION`, `SITUACION_EXCLUSION1`, `SITUACION_EXCLUSION2`, `SITUACION_EXCLUSION3`, `SITUACION_EXCLUSION4`, `SITUACION_EXCLUSION5`, `SITUACION_EXCLUSION6`, `CANTIDAD_EXCLUSION`, `ID_JEFE`) VALUES
(1, 'Ninguna', '', '', '', '', '', '', '', '', '', '', 'NO', 'NO', '', 'Tercera edad', '', '', '', '', '', '', 1, 6),
(2, 'Ninguna', '', '', '', '', '', '', '', '', '', '', 'NO', 'NO', '', 'Tercera edad', '', '', '', '', '', '', 1, 6),
(3, 'Ninguna', '', '', '', '', '', '', '', '', '', '', 'NO', 'NO', '', 'Tercera edad', '', '', '', '', '', '', 1, 6),
(4, 'Ninguna', '', '', '', '', '', '', '', '', '', '', 'NO', 'NO', '', 'Tercera edad', '', '', '', '', '', '', 1, 6),
(5, 'Ninguna', '', '', '', '', '', '', '', '', '', '', 'NO', 'NO', '', 'Tercera edad', '', '', '', '', '', '', 1, 6),
(6, 'Ninguna', '', '', '', '', '', '', '', '', '', '', 'NO', 'NO', '', 'Tercera edad', '', '', '', '', '', '', 1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_academicos`
--

CREATE TABLE `datos_academicos` (
  `ID_ACADEMICO` int(11) NOT NULL,
  `PROFESION` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NIV_INSTRUCCION` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_academicos`
--

INSERT INTO `datos_academicos` (`ID_ACADEMICO`, `PROFESION`, `NIV_INSTRUCCION`, `ID_JEFE`) VALUES
(6, 'Estudiante', 'Tecnico Superior', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_contacto`
--

CREATE TABLE `datos_contacto` (
  `ID_CONTACTO` int(11) NOT NULL,
  `TLF_CEL` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `TLF_HAB` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `TLF_OFI` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `EMAIL` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_contacto`
--

INSERT INTO `datos_contacto` (`ID_CONTACTO`, `TLF_CEL`, `TLF_HAB`, `TLF_OFI`, `EMAIL`, `ID_JEFE`) VALUES
(6, '04123154389', '', '', 'girlcarolay@hotmail.com', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_encuestado`
--

CREATE TABLE `datos_encuestado` (
  `ID_ENCUESTADO` int(11) NOT NULL,
  `NOMBRES` varchar(45) DEFAULT NULL,
  `CEDULA` int(9) DEFAULT NULL,
  `ENCUESTADOR` varchar(30) DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_encuestado`
--

INSERT INTO `datos_encuestado` (`ID_ENCUESTADO`, `NOMBRES`, `CEDULA`, `ENCUESTADOR`, `ID_JEFE`) VALUES
(6, 'Pedro Perezs', 43256789, 'admin', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_familiares`
--

CREATE TABLE `datos_familiares` (
  `ID_FAMILIARES` int(11) NOT NULL,
  `NOMBRES_F` varchar(30) DEFAULT NULL,
  `CEDULA_F` int(10) DEFAULT NULL,
  `SEXO_F` varchar(20) NOT NULL,
  `FECHANAC_F` date DEFAULT NULL,
  `EDAD_F` int(3) DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_familiares`
--

INSERT INTO `datos_familiares` (`ID_FAMILIARES`, `NOMBRES_F`, `CEDULA_F`, `SEXO_F`, `FECHANAC_F`, `EDAD_F`, `ID_JEFE`) VALUES
(6, 'Valentina Silva', 20345678, 'Femenino', '2004-02-02', 12, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_finanzas`
--

CREATE TABLE `datos_finanzas` (
  `ID_FINANZAS` int(11) NOT NULL,
  `TRABAJA` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TIPO_INGRESO` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `INGRESO_MENSUAL` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_finanzas`
--

INSERT INTO `datos_finanzas` (`ID_FINANZAS`, `TRABAJA`, `TIPO_INGRESO`, `INGRESO_MENSUAL`, `ID_JEFE`) VALUES
(6, 'SI', 'Por trabajo realizado', '30000', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_login`
--

CREATE TABLE `datos_login` (
  `ID_LOGIN` int(10) NOT NULL,
  `USERADMIN` varchar(20) DEFAULT NULL,
  `CEDULA` int(9) DEFAULT NULL,
  `PASSADMIN` longtext,
  `PASSADMINDOS` longtext CHARACTER SET utf8 NOT NULL,
  `ID_PERFIL` int(11) NOT NULL,
  `ID_EDO_PERFIL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_login`
--

INSERT INTO `datos_login` (`ID_LOGIN`, `USERADMIN`, `CEDULA`, `PASSADMIN`, `PASSADMINDOS`, `ID_PERFIL`, `ID_EDO_PERFIL`) VALUES
(1, 'admin', 12345678, '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(4, 'publicador', 20202020, '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 3, 1),
(6, 'operador', 56145645, '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `ID_DATAPERSONAL` int(11) NOT NULL,
  `CI` int(11) DEFAULT NULL,
  `NOMBRE` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDO` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `F_NAC` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EDAD` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`ID_DATAPERSONAL`, `CI`, `NOMBRE`, `APELLIDO`, `F_NAC`, `EDAD`) VALUES
(6, 43256789, 'Edelis Carolay', 'Simons Escalona', '1992-04-18', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_relacion`
--

CREATE TABLE `datos_relacion` (
  `ID_RELACION` int(11) NOT NULL,
  `EMBARAZO` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CNE` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `SEXO` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `EDOCIVIL` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NACIONALIDAD` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ID_JEFE` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_relacion`
--

INSERT INTO `datos_relacion` (`ID_RELACION`, `EMBARAZO`, `CNE`, `SEXO`, `EDOCIVIL`, `NACIONALIDAD`, `ID_JEFE`) VALUES
(6, 'NO', 'SI', 'Femenino', 'Soltero(a)', 'Venezolano(a)', '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_salud`
--

CREATE TABLE `datos_salud` (
  `ID_SALUD` int(11) NOT NULL,
  `DISCAPACIDAD` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TIPO_DISCAPACIDAD` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PENSIONADO` varchar(2) COLLATE utf8_spanish_ci DEFAULT NULL,
  `INSTITUCION` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_salud`
--

INSERT INTO `datos_salud` (`ID_SALUD`, `DISCAPACIDAD`, `TIPO_DISCAPACIDAD`, `PENSIONADO`, `INSTITUCION`, `ID_JEFE`) VALUES
(6, 'NO', '', 'NO', '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_serv_electrico`
--

CREATE TABLE `detalles_serv_electrico` (
  `ID_SERV_ELECTRICO` int(11) NOT NULL,
  `MEDIDOR` varchar(3) DEFAULT NULL,
  `BOMBILLOS_NECESITA` varchar(3) DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_serv_electrico`
--

INSERT INTO `detalles_serv_electrico` (`ID_SERV_ELECTRICO`, `MEDIDOR`, `BOMBILLOS_NECESITA`, `ID_JEFE`) VALUES
(6, 'NO', '10', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_vivienda`
--

CREATE TABLE `detalles_vivienda` (
  `ID_DETALLES_VIVIENDA` int(11) NOT NULL,
  `TIPO_VIVIENDA` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `HABITACIONES` varchar(10) DEFAULT NULL,
  `HABITACIONES1` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `HABITACIONES2` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `HABITACIONES3` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `NUM_HABITACIONES` int(3) DEFAULT NULL,
  `TIPO_PAREDES` varchar(30) DEFAULT NULL,
  `TIPO_TECHO` varchar(30) DEFAULT NULL,
  `ENSERES_VIVIENDA` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ENSERES_VIVIENDA2` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `ENSERES_VIVIENDA3` int(15) NOT NULL,
  `ENSERES_VIVIENDA4` int(15) NOT NULL,
  `ENSERES_VIVIENDA5` int(15) NOT NULL,
  `ENSERES_VIVIENDA6` int(15) NOT NULL,
  `ENSERES_VIVIENDA7` int(15) NOT NULL,
  `ENSERES_VIVIENDA8` int(15) NOT NULL,
  `ENSERES_VIVIENDA9` int(15) NOT NULL,
  `ENSERES_VIVIENDA10` int(15) NOT NULL,
  `INSECTOS_ROEDORES` varchar(10) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `INSECTOS_ROEDORES2` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `INSECTOS_ROEDORES3` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `INSECTOS_ROEDORES4` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `INSECTOS_ROEDORES5` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `INSECTOS_ROEDORES6` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `ANIMALES_DOMESTICOS` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `ANIMALES_DOMESTICOS2` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `ANIMALES_DOMESTICOS3` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `ANIMALES_DOMESTICOS4` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `ANIMALES_DOMESTICOS5` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `ANIMALES_DOMESTICOS6` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `ANIMALES_DOMESTICOS7` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `ANIMALES_DOMESTICOS8` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalles_vivienda`
--

INSERT INTO `detalles_vivienda` (`ID_DETALLES_VIVIENDA`, `TIPO_VIVIENDA`, `HABITACIONES`, `HABITACIONES1`, `HABITACIONES2`, `HABITACIONES3`, `NUM_HABITACIONES`, `TIPO_PAREDES`, `TIPO_TECHO`, `ENSERES_VIVIENDA`, `ENSERES_VIVIENDA2`, `ENSERES_VIVIENDA3`, `ENSERES_VIVIENDA4`, `ENSERES_VIVIENDA5`, `ENSERES_VIVIENDA6`, `ENSERES_VIVIENDA7`, `ENSERES_VIVIENDA8`, `ENSERES_VIVIENDA9`, `ENSERES_VIVIENDA10`, `INSECTOS_ROEDORES`, `INSECTOS_ROEDORES2`, `INSECTOS_ROEDORES3`, `INSECTOS_ROEDORES4`, `INSECTOS_ROEDORES5`, `INSECTOS_ROEDORES6`, `ANIMALES_DOMESTICOS`, `ANIMALES_DOMESTICOS2`, `ANIMALES_DOMESTICOS3`, `ANIMALES_DOMESTICOS4`, `ANIMALES_DOMESTICOS5`, `ANIMALES_DOMESTICOS6`, `ANIMALES_DOMESTICOS7`, `ANIMALES_DOMESTICOS8`, `ID_JEFE`) VALUES
(1, 'Casa', 'Comedor', '0', '0', '0', 3, 'Frisadas', 'Platabanda', 'otros', '', 0, 0, 0, 0, 0, 0, 0, 0, 'Ninguno', '', '', '', '', '', 'Ninguno', '', '', '', '', '', '', '', 6),
(2, 'Casa', 'Comedor', '0', '0', '0', 3, 'Frisadas', 'Platabanda', 'otros', '', 0, 0, 0, 0, 0, 0, 0, 0, 'Ninguno', '', '', '', '', '', 'Ninguno', '', '', '', '', '', '', '', 6),
(3, 'Casa', 'Comedor', '0', '0', '0', 3, 'Frisadas', 'Platabanda', 'otros', '', 0, 0, 0, 0, 0, 0, 0, 0, 'Ninguno', '', '', '', '', '', 'Ninguno', '', '', '', '', '', '', '', 6),
(4, 'Casa', 'Comedor', '0', '0', '0', 3, 'Frisadas', 'Platabanda', 'otros', '', 0, 0, 0, 0, 0, 0, 0, 0, 'Ninguno', '', '', '', '', '', 'Ninguno', '', '', '', '', '', '', '', 6),
(5, 'Casa', 'Comedor', '0', '0', '0', 3, 'Frisadas', 'Platabanda', 'otros', '', 0, 0, 0, 0, 0, 0, 0, 0, 'Ninguno', '', '', '', '', '', 'Ninguno', '', '', '', '', '', '', '', 6),
(6, 'Casa', 'Comedor', '0', '0', '0', 3, 'Frisadas', 'Platabanda', 'otros', '', 0, 0, 0, 0, 0, 0, 0, 0, 'Ninguno', '', '', '', '', '', 'Ninguno', '', '', '', '', '', '', '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_servicios`
--

CREATE TABLE `detalle_servicios` (
  `ID_DETALLE_SERVICIOS` int(11) NOT NULL,
  `TANQUE` varchar(3) DEFAULT NULL,
  `TANQUE_LITROS` varchar(5) DEFAULT NULL,
  `PIPOTES` varchar(3) DEFAULT NULL,
  `CANT_PIPOTES` varchar(2) DEFAULT NULL,
  `PROVEEDOR_GAS` varchar(30) DEFAULT NULL,
  `CANT_CILINDROS_GAS` varchar(5) DEFAULT NULL,
  `DURACION_GAS` varchar(15) DEFAULT NULL,
  `PRECIO_GAS` varchar(10) DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_servicios`
--

INSERT INTO `detalle_servicios` (`ID_DETALLE_SERVICIOS`, `TANQUE`, `TANQUE_LITROS`, `PIPOTES`, `CANT_PIPOTES`, `PROVEEDOR_GAS`, `CANT_CILINDROS_GAS`, `DURACION_GAS`, `PRECIO_GAS`, `ID_JEFE`) VALUES
(6, 'NO', '', 'SI', '3', 'Visa gas y PDVSA gas', '4', '4', ' 30', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `idempleado` int(11) NOT NULL,
  `nombres` varchar(32) NOT NULL DEFAULT '',
  `departamento` varchar(40) NOT NULL DEFAULT '',
  `sueldo` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_perfil`
--

CREATE TABLE `estado_perfil` (
  `ID_EDO_PERFIL` int(11) NOT NULL,
  `ESTADO` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_perfil`
--

INSERT INTO `estado_perfil` (`ID_EDO_PERFIL`, `ESTADO`) VALUES
(1, 'activo'),
(2, 'suspendido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar_academico`
--

CREATE TABLE `familiar_academico` (
  `ID_ACADEMICO_F` int(11) NOT NULL,
  `GRADO_INSTRUCCION_F` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `PROFESION_F` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar_academico`
--

INSERT INTO `familiar_academico` (`ID_ACADEMICO_F`, `GRADO_INSTRUCCION_F`, `PROFESION_F`, `ID_JEFE`) VALUES
(6, 'Sin instruccion', 'Estudiante', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar_finanzas`
--

CREATE TABLE `familiar_finanzas` (
  `ID_FINANZAS_F` int(10) UNSIGNED NOT NULL,
  `INGMENSUAL_F` varchar(20) DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar_finanzas`
--

INSERT INTO `familiar_finanzas` (`ID_FINANZAS_F`, `INGMENSUAL_F`, `ID_JEFE`) VALUES
(6, '345345', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar_relacion`
--

CREATE TABLE `familiar_relacion` (
  `ID_DETALLE_F` int(11) NOT NULL,
  `PARENTESCO_F` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `CNE_F` varchar(5) DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar_relacion`
--

INSERT INTO `familiar_relacion` (`ID_DETALLE_F`, `PARENTESCO_F`, `CNE_F`, `ID_JEFE`) VALUES
(6, 'Hermano(a)', 'SI', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar_salud`
--

CREATE TABLE `familiar_salud` (
  `ID_SALUD_F` int(11) NOT NULL,
  `EMBARAZO_F` varchar(5) DEFAULT NULL,
  `DISCAPACIDAD_F` varchar(45) DEFAULT NULL,
  `PENSIONADO_F` varchar(5) DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar_salud`
--

INSERT INTO `familiar_salud` (`ID_SALUD_F`, `EMBARAZO_F`, `DISCAPACIDAD_F`, `PENSIONADO_F`, `ID_JEFE`) VALUES
(6, 'SI', 'dsfdsf', 'SI', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivel_instruccion`
--

CREATE TABLE `nivel_instruccion` (
  `ID_NIVINSTR` int(11) NOT NULL,
  `NIVL_INSTRUCCION` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nivel_instruccion`
--

INSERT INTO `nivel_instruccion` (`ID_NIVINSTR`, `NIVL_INSTRUCCION`) VALUES
(1, 'Sin instruccion'),
(2, 'Basica'),
(3, 'Bachiller'),
(4, 'Tecnico Medio'),
(5, 'Tecnico Superior'),
(6, 'Universitario'),
(7, 'Post Grado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias_web`
--

CREATE TABLE `noticias_web` (
  `ID_NOTICIA` int(11) NOT NULL,
  `TITULO_NOTICIA` varchar(100) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `FCHA_NOTICIA` date NOT NULL,
  `HORA` time NOT NULL,
  `DESCRIPC_NOTICIA` varchar(300) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `IMAGEN` varchar(100) NOT NULL,
  `ID_CATEGORIA` int(11) NOT NULL,
  `ID_LOGIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentesco`
--

CREATE TABLE `parentesco` (
  `ID_PARENTESCO` int(11) NOT NULL,
  `PARENTESCO` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `parentesco`
--

INSERT INTO `parentesco` (`ID_PARENTESCO`, `PARENTESCO`) VALUES
(1, 'Mamá'),
(2, 'Papá'),
(3, 'Esposo(a)'),
(4, 'Hijo(a)'),
(5, 'Sobrino(a)'),
(6, 'Hermano(a)'),
(7, 'Tio(a)'),
(8, 'Abuelo(a)'),
(9, 'Nieto(a)'),
(10, 'Otro(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participacion_comunitaria`
--

CREATE TABLE `participacion_comunitaria` (
  `ID_PARTICIPACION_COMUNITARIA` int(11) NOT NULL,
  `ORG_COMUNITARIA` varchar(3) DEFAULT NULL,
  `DESCRIPCION` varchar(45) DEFAULT NULL,
  `PARTICIPA` varchar(3) DEFAULT NULL,
  `PARTICIPA_FAMILIAR` varchar(3) DEFAULT NULL,
  `MISIONES_COMUNIDAD` varchar(45) DEFAULT NULL,
  `MISIONES_COMUNIDAD1` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `MISIONES_COMUNIDAD2` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `MISIONES_COMUNIDAD3` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `MISIONES_COMUNIDAD4` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `MISIONES_COMUNIDAD5` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `MISIONES_COMUNIDAD6` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `MISIONES_COMUNIDAD7` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `OTRA_MISION` varchar(45) DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `participacion_comunitaria`
--

INSERT INTO `participacion_comunitaria` (`ID_PARTICIPACION_COMUNITARIA`, `ORG_COMUNITARIA`, `DESCRIPCION`, `PARTICIPA`, `PARTICIPA_FAMILIAR`, `MISIONES_COMUNIDAD`, `MISIONES_COMUNIDAD1`, `MISIONES_COMUNIDAD2`, `MISIONES_COMUNIDAD3`, `MISIONES_COMUNIDAD4`, `MISIONES_COMUNIDAD5`, `MISIONES_COMUNIDAD6`, `MISIONES_COMUNIDAD7`, `OTRA_MISION`, `ID_JEFE`) VALUES
(1, 'NO', '', 'NO', 'NO', 'Mercal', '', '', '', '', '', '', '', '', 6),
(2, 'NO', '', 'NO', 'NO', 'Mercal', '', '', '', '', '', '', '', '', 6),
(3, 'NO', '', 'NO', 'NO', 'Mercal', '', '', '', '', '', '', '', '', 6),
(4, 'NO', '', 'NO', 'NO', 'Mercal', '', '', '', '', '', '', '', '', 6),
(5, 'NO', '', 'NO', 'NO', 'Mercal', '', '', '', '', '', '', '', '', 6),
(6, 'NO', '', 'NO', 'NO', 'Mercal', '', '', '', '', '', '', '', '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE `perfiles` (
  `ID_PERFIL` int(11) NOT NULL,
  `PERFIL` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`ID_PERFIL`, `PERFIL`) VALUES
(1, 'Administrador'),
(2, 'Operador'),
(3, 'Publicador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas_exclusion`
--

CREATE TABLE `personas_exclusion` (
  `ID_EXCLUSION` int(11) NOT NULL,
  `PERSEXCLUSION` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personas_exclusion`
--

INSERT INTO `personas_exclusion` (`ID_EXCLUSION`, `PERSEXCLUSION`) VALUES
(1, 'Ninguna'),
(2, 'Niños de la calle'),
(3, 'Indigentes'),
(4, 'Enfermos terminales'),
(5, 'Discapacitados'),
(6, 'Tercera edad'),
(7, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_enfermedades`
--

CREATE TABLE `persona_enfermedades` (
  `ID_ENFERMEDADES` int(11) NOT NULL,
  `ENFERMEDADES` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona_enfermedades`
--

INSERT INTO `persona_enfermedades` (`ID_ENFERMEDADES`, `ENFERMEDADES`) VALUES
(1, 'Ninguna'),
(2, 'Diabetes'),
(3, 'Sida'),
(4, 'Cancer'),
(5, 'Hepatitis'),
(6, 'Corazon'),
(7, 'Leucemia'),
(8, 'Tuberculosis'),
(9, 'Hipertension'),
(10, 'Asma'),
(11, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_estado_civil`
--

CREATE TABLE `persona_estado_civil` (
  `ID_EDOCIVIL` int(11) NOT NULL,
  `EDOCIVIL` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona_estado_civil`
--

INSERT INTO `persona_estado_civil` (`ID_EDOCIVIL`, `EDOCIVIL`) VALUES
(1, 'Soltero(a)'),
(2, 'Casado(a)'),
(3, 'Divorciado(a)'),
(4, 'Viudo(a)'),
(5, 'Concubino(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_nacionalidad`
--

CREATE TABLE `persona_nacionalidad` (
  `id_nacionalidad` int(11) NOT NULL,
  `nacionalidad` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona_nacionalidad`
--

INSERT INTO `persona_nacionalidad` (`id_nacionalidad`, `nacionalidad`) VALUES
(1, 'Venezolano(a)'),
(2, 'Extranjero(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona_tipo_ingreso`
--

CREATE TABLE `persona_tipo_ingreso` (
  `ID_TIPOING` int(11) NOT NULL,
  `TIPO_INGRESO` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona_tipo_ingreso`
--

INSERT INTO `persona_tipo_ingreso` (`ID_TIPOING`, `TIPO_INGRESO`) VALUES
(1, 'Diario'),
(2, 'Semanal'),
(3, 'Quincenal'),
(4, 'Mensual'),
(5, 'Por trabajo realizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_part_comunitaria`
--

CREATE TABLE `preguntas_part_comunitaria` (
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
  `P_DOCE1` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `P_DOCE2` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `P_DOCE3` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `P_DOCE4` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `P_DOCE5` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `P_DOCE6` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `P_DOCE7` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `P_DOCE8` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `P_DOCE9` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `P_CATORCE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `P_QUINCE` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `OTRA_AREA` varchar(45) DEFAULT NULL,
  `ID_JEFE` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `preguntas_part_comunitaria`
--

INSERT INTO `preguntas_part_comunitaria` (`ID_PREG_PARTCOMUNITARIA`, `P_UNO`, `P_DOS`, `P_TRES`, `P_CUATRO`, `P_CINCO`, `P_SEIS`, `P_SIETE`, `P_OCHO`, `P_NUEVE`, `P_DIEZ`, `P_ONCE`, `P_DOCE`, `P_DOCE1`, `P_DOCE2`, `P_DOCE3`, `P_DOCE4`, `P_DOCE5`, `P_DOCE6`, `P_DOCE7`, `P_DOCE8`, `P_DOCE9`, `P_CATORCE`, `P_QUINCE`, `OTRA_AREA`, `ID_JEFE`) VALUES
(1, 'SI', 'SI', 'SI', 'SI', 'SI', 'sdfdsf', 'sdfsd', 'fds', 'dsf', ' asuhuicxs', ' sgasdgc', '', '', '', '', '', '', '', '', '', '', 'sdfsdf', 'sdfsdf', 'dfsdf', '6'),
(2, 'SI', 'SI', 'SI', 'SI', 'SI', 'sdfdsf', 'sdfsd', 'fds', 'dsf', ' asuhuicxs', ' sgasdgc', '', '', '', '', '', '', '', '', '', '', 'sdfsdf', 'sdfsdf', 'dfsdf', '6'),
(3, 'SI', 'SI', 'SI', 'SI', 'SI', 'sdfdsf', 'sdfsd', 'fds', 'dsf', ' asuhuicxs', ' sgasdgc', '', '', '', '', '', '', '', '', '', '', 'sdfsdf', 'sdfsdf', 'dfsdf', '6'),
(4, 'SI', 'SI', 'SI', 'SI', 'SI', 'sdfdsf', 'sdfsd', 'fds', 'dsf', ' asuhuicxs', ' sgasdgc', '', '', '', '', '', '', '', '', '', '', 'sdfsdf', 'sdfsdf', 'dfsdf', '6'),
(5, 'SI', 'SI', 'SI', 'SI', 'SI', 'sdfdsf', 'sdfsd', 'fds', 'dsf', ' asuhuicxs', ' sgasdgc', '', '', '', '', '', '', '', '', '', '', 'sdfsdf', 'sdfsdf', 'dfsdf', '6'),
(6, 'SI', 'SI', 'SI', 'SI', 'SI', 'sdfdsf', 'sdfsd', 'fds', 'dsf', ' asuhuicxs', ' sgasdgc', '', '', '', '', '', '', '', '', '', '', 'sdfsdf', 'sdfsdf', 'dfsdf', '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesiones`
--

CREATE TABLE `profesiones` (
  `ID_PROFESION` int(11) NOT NULL,
  `PROFESION` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesiones`
--

INSERT INTO `profesiones` (`ID_PROFESION`, `PROFESION`) VALUES
(1, 'Estudiante'),
(2, 'Trabajador'),
(3, 'Ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion_economica`
--

CREATE TABLE `situacion_economica` (
  `ID_SITUACION_ECONOMICA` int(11) NOT NULL,
  `DONDE_TRABAJA` varchar(40) DEFAULT NULL,
  `PREGUNTA_UNO` varchar(3) DEFAULT NULL,
  `ING_FAMILIAR` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `situacion_economica`
--

INSERT INTO `situacion_economica` (`ID_SITUACION_ECONOMICA`, `DONDE_TRABAJA`, `PREGUNTA_UNO`, `ING_FAMILIAR`, `ID_JEFE`) VALUES
(6, '', 'NO', 'Menos de 200.000', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion_servicios`
--

CREATE TABLE `situacion_servicios` (
  `ID_SITUACION_SERVICIOS` int(11) NOT NULL,
  `AGUAS_BLANCAS` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `MEDIDOR` varchar(3) DEFAULT NULL,
  `AGUAS_SERVIDAS` varchar(30) DEFAULT NULL,
  `GAS` varchar(30) DEFAULT NULL,
  `SISTEMA_ELECTRICO` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `BOMBILLOS_AHORRADORES` varchar(3) DEFAULT NULL,
  `RECOL_BASURA` varchar(30) DEFAULT NULL,
  `RECOL_BASURA1` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `RECOL_BASURA2` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `RECOL_BASURA3` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `RECOL_BASURA4` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `RECOL_BASURA5` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `RECOL_BASURA6` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `TELEFONIA` varchar(30) DEFAULT NULL,
  `TELEFONIA1` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `TELEFONIA2` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `TELEFONIA3` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `TELEFONIA4` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `TELEFONIA5` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `TRANSPORTE` varchar(30) DEFAULT NULL,
  `TIPO_INFORMACION` varchar(40) DEFAULT NULL,
  `TIPO_INFORMACION1` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `TIPO_INFORMACION2` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `TIPO_INFORMACION3` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `TIPO_INFORMACION4` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `TIPO_INFORMACION5` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SERV_COMUNALES` varchar(30) DEFAULT NULL,
  `SERV_COMUNALES1` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SERV_COMUNALES2` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SERV_COMUNALES3` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SERV_COMUNALES4` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SERV_COMUNALES5` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SERV_COMUNALES6` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SERV_COMUNALES7` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SERV_COMUNALES8` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SERV_COMUNALES9` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SERV_COMUNALES10` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SERV_COMUNALES11` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `SERV_COMUNALES12` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `situacion_servicios`
--

INSERT INTO `situacion_servicios` (`ID_SITUACION_SERVICIOS`, `AGUAS_BLANCAS`, `MEDIDOR`, `AGUAS_SERVIDAS`, `GAS`, `SISTEMA_ELECTRICO`, `BOMBILLOS_AHORRADORES`, `RECOL_BASURA`, `RECOL_BASURA1`, `RECOL_BASURA2`, `RECOL_BASURA3`, `RECOL_BASURA4`, `RECOL_BASURA5`, `RECOL_BASURA6`, `TELEFONIA`, `TELEFONIA1`, `TELEFONIA2`, `TELEFONIA3`, `TELEFONIA4`, `TELEFONIA5`, `TRANSPORTE`, `TIPO_INFORMACION`, `TIPO_INFORMACION1`, `TIPO_INFORMACION2`, `TIPO_INFORMACION3`, `TIPO_INFORMACION4`, `TIPO_INFORMACION5`, `SERV_COMUNALES`, `SERV_COMUNALES1`, `SERV_COMUNALES2`, `SERV_COMUNALES3`, `SERV_COMUNALES4`, `SERV_COMUNALES5`, `SERV_COMUNALES6`, `SERV_COMUNALES7`, `SERV_COMUNALES8`, `SERV_COMUNALES9`, `SERV_COMUNALES10`, `SERV_COMUNALES11`, `SERV_COMUNALES12`, `ID_JEFE`) VALUES
(1, 'Acueducto', 'SI', 'Cloacas', 'Bombona', 'Publico', 'SI', 'Conteiner', '', '', '', '', '', '', 'Prepago', '', '', '', '', '', 'Publico', 'Prensa', '', '', '', '', '', 'Bodega', '', '', '', '', '', '', '', '', '', '', '', '', 6),
(2, 'Acueducto', 'SI', 'Cloacas', 'Bombona', 'Publico', 'SI', 'Conteiner', '', '', '', '', '', '', 'Prepago', '', '', '', '', '', 'Publico', 'Prensa', '', '', '', '', '', 'Bodega', '', '', '', '', '', '', '', '', '', '', '', '', 6),
(3, 'Acueducto', 'SI', 'Cloacas', 'Bombona', 'Publico', 'SI', 'Conteiner', '', '', '', '', '', '', 'Prepago', '', '', '', '', '', 'Publico', 'Prensa', '', '', '', '', '', 'Bodega', '', '', '', '', '', '', '', '', '', '', '', '', 6),
(4, 'Acueducto', 'SI', 'Cloacas', 'Bombona', 'Publico', 'SI', 'Conteiner', '', '', '', '', '', '', 'Prepago', '', '', '', '', '', 'Publico', 'Prensa', '', '', '', '', '', 'Bodega', '', '', '', '', '', '', '', '', '', '', '', '', 6),
(5, 'Acueducto', 'SI', 'Cloacas', 'Bombona', 'Publico', 'SI', 'Conteiner', '', '', '', '', '', '', 'Prepago', '', '', '', '', '', 'Publico', 'Prensa', '', '', '', '', '', 'Bodega', '', '', '', '', '', '', '', '', '', '', '', '', 6),
(6, 'Acueducto', 'SI', 'Cloacas', 'Bombona', 'Publico', 'SI', 'Conteiner', '', '', '', '', '', '', 'Prepago', '', '', '', '', '', 'Publico', 'Prensa', '', '', '', '', '', 'Bodega', '', '', '', '', '', '', '', '', '', '', '', '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `situacion_vivienda`
--

CREATE TABLE `situacion_vivienda` (
  `ID_SITUACION_VIVIENDA` int(11) NOT NULL,
  `COND_TERRENO` varchar(30) DEFAULT NULL,
  `FORMA_TENENCIA` varchar(30) DEFAULT NULL,
  `OCV` varchar(3) DEFAULT NULL,
  `TERRENO_PROPIO` varchar(3) DEFAULT NULL,
  `SIVIH` varchar(3) DEFAULT NULL,
  `CONSTANCIA_SIVIH` varchar(3) DEFAULT NULL,
  `COTIZA_LPH` varchar(3) DEFAULT NULL,
  `SALUBRIDAD_VIVIENDA` varchar(30) DEFAULT NULL,
  `ID_JEFE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `situacion_vivienda`
--

INSERT INTO `situacion_vivienda` (`ID_SITUACION_VIVIENDA`, `COND_TERRENO`, `FORMA_TENENCIA`, `OCV`, `TERRENO_PROPIO`, `SIVIH`, `CONSTANCIA_SIVIH`, `COTIZA_LPH`, `SALUBRIDAD_VIVIENDA`, `ID_JEFE`) VALUES
(6, 'Estable', 'Propia', 'NO', 'NO', 'NO', 'NO', 'SI', 'limpia', 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ayuda_vivienda`
--
ALTER TABLE `ayuda_vivienda`
  ADD PRIMARY KEY (`ID_AYUDA_VIVIENDA`);

--
-- Indices de la tabla `casa_aguas_blancas`
--
ALTER TABLE `casa_aguas_blancas`
  ADD PRIMARY KEY (`ID_AGUASBLANCAS`);

--
-- Indices de la tabla `casa_aguas_servidas`
--
ALTER TABLE `casa_aguas_servidas`
  ADD PRIMARY KEY (`ID_AGUASERV`);

--
-- Indices de la tabla `casa_animales`
--
ALTER TABLE `casa_animales`
  ADD PRIMARY KEY (`ID_ANIMALES`);

--
-- Indices de la tabla `casa_condiciones_terreno`
--
ALTER TABLE `casa_condiciones_terreno`
  ADD PRIMARY KEY (`ID_CONDTERRENO`);

--
-- Indices de la tabla `casa_enseres_vivienda`
--
ALTER TABLE `casa_enseres_vivienda`
  ADD PRIMARY KEY (`ID_ENSERESVIVIENDA`);

--
-- Indices de la tabla `casa_formas_tenencia`
--
ALTER TABLE `casa_formas_tenencia`
  ADD PRIMARY KEY (`ID_FORMATENENCIA`);

--
-- Indices de la tabla `casa_gas`
--
ALTER TABLE `casa_gas`
  ADD PRIMARY KEY (`ID_GAS`);

--
-- Indices de la tabla `casa_habitaciones`
--
ALTER TABLE `casa_habitaciones`
  ADD PRIMARY KEY (`ID_HABITACIONES`);

--
-- Indices de la tabla `casa_ingreso_familiar`
--
ALTER TABLE `casa_ingreso_familiar`
  ADD PRIMARY KEY (`ID_INGFAMILIAR`);

--
-- Indices de la tabla `casa_mecanismo_infor`
--
ALTER TABLE `casa_mecanismo_infor`
  ADD PRIMARY KEY (`ID_MECANISMOINFO`);

--
-- Indices de la tabla `casa_plagas`
--
ALTER TABLE `casa_plagas`
  ADD PRIMARY KEY (`ID_PLAGAS`);

--
-- Indices de la tabla `casa_recoleccion_basura`
--
ALTER TABLE `casa_recoleccion_basura`
  ADD PRIMARY KEY (`ID_RECOLBASURA`);

--
-- Indices de la tabla `casa_salubridad_vivienda`
--
ALTER TABLE `casa_salubridad_vivienda`
  ADD PRIMARY KEY (`ID_SALUBRIDADVIVIENDA`);

--
-- Indices de la tabla `casa_servicios_comunales`
--
ALTER TABLE `casa_servicios_comunales`
  ADD PRIMARY KEY (`ID_SERVCOMUNALES`);

--
-- Indices de la tabla `casa_sistema_electrico`
--
ALTER TABLE `casa_sistema_electrico`
  ADD PRIMARY KEY (`ID_SISTELECTRICO`);

--
-- Indices de la tabla `casa_telefonia`
--
ALTER TABLE `casa_telefonia`
  ADD PRIMARY KEY (`ID_TELEFONIA`);

--
-- Indices de la tabla `casa_tipo_ayuda_mejora`
--
ALTER TABLE `casa_tipo_ayuda_mejora`
  ADD PRIMARY KEY (`ID_TIPOAYUDACASA`);

--
-- Indices de la tabla `casa_tipo_paredes`
--
ALTER TABLE `casa_tipo_paredes`
  ADD PRIMARY KEY (`ID_TIPOPAREDES`);

--
-- Indices de la tabla `casa_tipo_techo`
--
ALTER TABLE `casa_tipo_techo`
  ADD PRIMARY KEY (`ID_TIPOTECHO`);

--
-- Indices de la tabla `casa_tipo_vivienda`
--
ALTER TABLE `casa_tipo_vivienda`
  ADD PRIMARY KEY (`ID_TIPOVIVIENDA`);

--
-- Indices de la tabla `casa_transporte`
--
ALTER TABLE `casa_transporte`
  ADD PRIMARY KEY (`ID_TRANSPORTE`);

--
-- Indices de la tabla `categoria_noticia`
--
ALTER TABLE `categoria_noticia`
  ADD PRIMARY KEY (`ID_CATEGORIA`);

--
-- Indices de la tabla `censos`
--
ALTER TABLE `censos`
  ADD PRIMARY KEY (`ID_CENSO`);

--
-- Indices de la tabla `comunidad_misiones`
--
ALTER TABLE `comunidad_misiones`
  ADD PRIMARY KEY (`ID_MISIONES`);

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
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD KEY `id` (`idempleado`);

--
-- Indices de la tabla `estado_perfil`
--
ALTER TABLE `estado_perfil`
  ADD PRIMARY KEY (`ID_EDO_PERFIL`);

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
-- Indices de la tabla `nivel_instruccion`
--
ALTER TABLE `nivel_instruccion`
  ADD PRIMARY KEY (`ID_NIVINSTR`);

--
-- Indices de la tabla `noticias_web`
--
ALTER TABLE `noticias_web`
  ADD PRIMARY KEY (`ID_NOTICIA`);

--
-- Indices de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  ADD PRIMARY KEY (`ID_PARENTESCO`);

--
-- Indices de la tabla `participacion_comunitaria`
--
ALTER TABLE `participacion_comunitaria`
  ADD PRIMARY KEY (`ID_PARTICIPACION_COMUNITARIA`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`ID_PERFIL`);

--
-- Indices de la tabla `personas_exclusion`
--
ALTER TABLE `personas_exclusion`
  ADD PRIMARY KEY (`ID_EXCLUSION`);

--
-- Indices de la tabla `persona_enfermedades`
--
ALTER TABLE `persona_enfermedades`
  ADD PRIMARY KEY (`ID_ENFERMEDADES`);

--
-- Indices de la tabla `persona_estado_civil`
--
ALTER TABLE `persona_estado_civil`
  ADD PRIMARY KEY (`ID_EDOCIVIL`);

--
-- Indices de la tabla `persona_nacionalidad`
--
ALTER TABLE `persona_nacionalidad`
  ADD PRIMARY KEY (`id_nacionalidad`);

--
-- Indices de la tabla `persona_tipo_ingreso`
--
ALTER TABLE `persona_tipo_ingreso`
  ADD PRIMARY KEY (`ID_TIPOING`);

--
-- Indices de la tabla `preguntas_part_comunitaria`
--
ALTER TABLE `preguntas_part_comunitaria`
  ADD PRIMARY KEY (`ID_PREG_PARTCOMUNITARIA`);

--
-- Indices de la tabla `profesiones`
--
ALTER TABLE `profesiones`
  ADD PRIMARY KEY (`ID_PROFESION`);

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
  MODIFY `ID_AYUDA_VIVIENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `casa_aguas_blancas`
--
ALTER TABLE `casa_aguas_blancas`
  MODIFY `ID_AGUASBLANCAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `casa_aguas_servidas`
--
ALTER TABLE `casa_aguas_servidas`
  MODIFY `ID_AGUASERV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `casa_animales`
--
ALTER TABLE `casa_animales`
  MODIFY `ID_ANIMALES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `casa_condiciones_terreno`
--
ALTER TABLE `casa_condiciones_terreno`
  MODIFY `ID_CONDTERRENO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `casa_enseres_vivienda`
--
ALTER TABLE `casa_enseres_vivienda`
  MODIFY `ID_ENSERESVIVIENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `casa_formas_tenencia`
--
ALTER TABLE `casa_formas_tenencia`
  MODIFY `ID_FORMATENENCIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `casa_gas`
--
ALTER TABLE `casa_gas`
  MODIFY `ID_GAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `casa_habitaciones`
--
ALTER TABLE `casa_habitaciones`
  MODIFY `ID_HABITACIONES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `casa_ingreso_familiar`
--
ALTER TABLE `casa_ingreso_familiar`
  MODIFY `ID_INGFAMILIAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `casa_mecanismo_infor`
--
ALTER TABLE `casa_mecanismo_infor`
  MODIFY `ID_MECANISMOINFO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `casa_plagas`
--
ALTER TABLE `casa_plagas`
  MODIFY `ID_PLAGAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `casa_recoleccion_basura`
--
ALTER TABLE `casa_recoleccion_basura`
  MODIFY `ID_RECOLBASURA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `casa_salubridad_vivienda`
--
ALTER TABLE `casa_salubridad_vivienda`
  MODIFY `ID_SALUBRIDADVIVIENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `casa_servicios_comunales`
--
ALTER TABLE `casa_servicios_comunales`
  MODIFY `ID_SERVCOMUNALES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `casa_sistema_electrico`
--
ALTER TABLE `casa_sistema_electrico`
  MODIFY `ID_SISTELECTRICO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `casa_telefonia`
--
ALTER TABLE `casa_telefonia`
  MODIFY `ID_TELEFONIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `casa_tipo_ayuda_mejora`
--
ALTER TABLE `casa_tipo_ayuda_mejora`
  MODIFY `ID_TIPOAYUDACASA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `casa_tipo_paredes`
--
ALTER TABLE `casa_tipo_paredes`
  MODIFY `ID_TIPOPAREDES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `casa_tipo_techo`
--
ALTER TABLE `casa_tipo_techo`
  MODIFY `ID_TIPOTECHO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `casa_tipo_vivienda`
--
ALTER TABLE `casa_tipo_vivienda`
  MODIFY `ID_TIPOVIVIENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `casa_transporte`
--
ALTER TABLE `casa_transporte`
  MODIFY `ID_TRANSPORTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `categoria_noticia`
--
ALTER TABLE `categoria_noticia`
  MODIFY `ID_CATEGORIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `censos`
--
ALTER TABLE `censos`
  MODIFY `ID_CENSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `comunidad_misiones`
--
ALTER TABLE `comunidad_misiones`
  MODIFY `ID_MISIONES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `condiciones_salud`
--
ALTER TABLE `condiciones_salud`
  MODIFY `ID_CONDICIONES_SALUD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `datos_academicos`
--
ALTER TABLE `datos_academicos`
  MODIFY `ID_ACADEMICO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `datos_contacto`
--
ALTER TABLE `datos_contacto`
  MODIFY `ID_CONTACTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `datos_encuestado`
--
ALTER TABLE `datos_encuestado`
  MODIFY `ID_ENCUESTADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `datos_familiares`
--
ALTER TABLE `datos_familiares`
  MODIFY `ID_FAMILIARES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `datos_finanzas`
--
ALTER TABLE `datos_finanzas`
  MODIFY `ID_FINANZAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `datos_login`
--
ALTER TABLE `datos_login`
  MODIFY `ID_LOGIN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `ID_DATAPERSONAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `datos_relacion`
--
ALTER TABLE `datos_relacion`
  MODIFY `ID_RELACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `datos_salud`
--
ALTER TABLE `datos_salud`
  MODIFY `ID_SALUD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `detalles_serv_electrico`
--
ALTER TABLE `detalles_serv_electrico`
  MODIFY `ID_SERV_ELECTRICO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `detalles_vivienda`
--
ALTER TABLE `detalles_vivienda`
  MODIFY `ID_DETALLES_VIVIENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `detalle_servicios`
--
ALTER TABLE `detalle_servicios`
  MODIFY `ID_DETALLE_SERVICIOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `idempleado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estado_perfil`
--
ALTER TABLE `estado_perfil`
  MODIFY `ID_EDO_PERFIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `familiar_academico`
--
ALTER TABLE `familiar_academico`
  MODIFY `ID_ACADEMICO_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `familiar_finanzas`
--
ALTER TABLE `familiar_finanzas`
  MODIFY `ID_FINANZAS_F` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `familiar_relacion`
--
ALTER TABLE `familiar_relacion`
  MODIFY `ID_DETALLE_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `familiar_salud`
--
ALTER TABLE `familiar_salud`
  MODIFY `ID_SALUD_F` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `nivel_instruccion`
--
ALTER TABLE `nivel_instruccion`
  MODIFY `ID_NIVINSTR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `noticias_web`
--
ALTER TABLE `noticias_web`
  MODIFY `ID_NOTICIA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `parentesco`
--
ALTER TABLE `parentesco`
  MODIFY `ID_PARENTESCO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `participacion_comunitaria`
--
ALTER TABLE `participacion_comunitaria`
  MODIFY `ID_PARTICIPACION_COMUNITARIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `ID_PERFIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `personas_exclusion`
--
ALTER TABLE `personas_exclusion`
  MODIFY `ID_EXCLUSION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `persona_enfermedades`
--
ALTER TABLE `persona_enfermedades`
  MODIFY `ID_ENFERMEDADES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `persona_estado_civil`
--
ALTER TABLE `persona_estado_civil`
  MODIFY `ID_EDOCIVIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `persona_nacionalidad`
--
ALTER TABLE `persona_nacionalidad`
  MODIFY `id_nacionalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `persona_tipo_ingreso`
--
ALTER TABLE `persona_tipo_ingreso`
  MODIFY `ID_TIPOING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `preguntas_part_comunitaria`
--
ALTER TABLE `preguntas_part_comunitaria`
  MODIFY `ID_PREG_PARTCOMUNITARIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `profesiones`
--
ALTER TABLE `profesiones`
  MODIFY `ID_PROFESION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `situacion_economica`
--
ALTER TABLE `situacion_economica`
  MODIFY `ID_SITUACION_ECONOMICA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `situacion_servicios`
--
ALTER TABLE `situacion_servicios`
  MODIFY `ID_SITUACION_SERVICIOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `situacion_vivienda`
--
ALTER TABLE `situacion_vivienda`
  MODIFY `ID_SITUACION_VIVIENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
