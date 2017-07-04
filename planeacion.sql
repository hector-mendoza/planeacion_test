-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2017 a las 01:57:09
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `planeacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL,
  `carrera` varchar(60) CHARACTER SET latin1 NOT NULL,
  `id_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `carrera`, `id_direccion`) VALUES
(1, 'Cultura F&iacute;sica y Deportes', 1),
(2, 'Ingenier&iacute;a Sistemas Computacionales', 2),
(3, 'Ingenier&iacute;a Industrial', 2),
(4, 'Ingenier&iacute;a Mecatr&oacute;nica', 2),
(5, 'Dise&ntilde;o Gr&aacute;fico', 3),
(6, 'Administraci&oacute;n', 10),
(7, 'Contabilidad', 10),
(8, 'Ciencias de la Comunicaci&oacute;n', 5),
(9, 'Comercio Internacional', 6),
(10, 'Lenguas Europeas', 7),
(11, 'Gastronom&iacute;a', 8),
(12, 'Psicolog&iacute;a', 9),
(13, 'Dise&ntilde;o de Interiores y Ambientaci&oacute;n', 4),
(14, 'Optometr&iacute;a', 11),
(15, 'Mercadotecnia y Ventas', 12),
(16, 'Nutrici&oacute;n', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coreos`
--

CREATE TABLE `coreos` (
  `id_correo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `correo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id_direccion` int(11) NOT NULL,
  `direccion` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id_direccion`, `direccion`) VALUES
(1, 'Escuela de Cultura F&iacute;sica y Deportes'),
(2, 'Facultad de Ingenier&iacute;as'),
(3, 'Escuela de Dise&ntilde;o Gr&aacute;fico'),
(4, 'Escuela de Dise&ntilde;o de Interiores y Ambientaci&oacute;n'),
(5, 'Escuela de Ciencias de la Comunicaci&oacute;n'),
(6, 'Escuela de Comercio Internacional'),
(7, 'Escuela de Lenguas Europeas'),
(8, 'Escuela de Gastronom&iacute;a'),
(9, 'Escuela de Psicolog&iacute;a'),
(10, 'Escuela de Admon. y Contabilidad'),
(11, 'Escuela de Optometría'),
(12, 'Escuela de Mercadotecnia y Ventas'),
(13, 'Escuela de Nutrición');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccionesxdocente`
--

CREATE TABLE `direccionesxdocente` (
  `id_dc` int(11) NOT NULL,
  `id_direccion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `direccionesxdocente`
--

INSERT INTO `direccionesxdocente` (`id_dc`, `id_direccion`, `id_usuario`) VALUES
(1, 1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instrumentosevaluacion`
--

CREATE TABLE `instrumentosevaluacion` (
  `id_instrumento` int(11) NOT NULL,
  `instrumento` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `instrumentosevaluacion`
--

INSERT INTO `instrumentosevaluacion` (`id_instrumento`, `instrumento`) VALUES
(1, 'Lista de Cotejo'),
(2, 'Portafolio'),
(3, 'R&uacute;brica'),
(4, 'Examen de Competencias'),
(5, 'Mapas Conceptuales'),
(7, 'Cuestionario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `nombrePlan` varchar(60) NOT NULL,
  `nombreUnidad` varchar(60) NOT NULL,
  `semestre` varchar(60) NOT NULL,
  `fecha` date NOT NULL,
  `proposito` varchar(60) NOT NULL,
  `competenciasGen` mediumtext NOT NULL,
  `competenciasEsp` mediumtext NOT NULL,
  `primeraEvaluacion` date NOT NULL,
  `segundaEvaluacion` date NOT NULL,
  `terceraEvaluacion` date NOT NULL,
  `horasUnidad` int(11) NOT NULL,
  `horasTeoDoc` int(11) NOT NULL,
  `horasPracDoc` int(11) NOT NULL,
  `horasTeoInd` int(11) NOT NULL,
  `horasPracInd` int(11) NOT NULL,
  `numAlumnos` int(11) NOT NULL,
  `salon` varchar(15) NOT NULL,
  `grupo` varchar(20) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `ciclo` varchar(30) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombrePlan`, `nombreUnidad`, `semestre`, `fecha`, `proposito`, `competenciasGen`, `competenciasEsp`, `primeraEvaluacion`, `segundaEvaluacion`, `terceraEvaluacion`, `horasUnidad`, `horasTeoDoc`, `horasPracDoc`, `horasTeoInd`, `horasPracInd`, `numAlumnos`, `salon`, `grupo`, `id_carrera`, `ciclo`, `id_usuario`) VALUES
(1, 'Ingenier&iacute;a Industrial', 'Contadoresp', '4', '2017-06-23', 'ningunop', 'genp', 'espp', '2017-06-13', '2017-06-15', '2017-06-22', 2, 3, 4, 5, 7, 20, 'B', '3', 3, '1', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiasxcarrera`
--

CREATE TABLE `materiasxcarrera` (
  `id_mc` int(11) NOT NULL,
  `materia` varchar(100) COLLATE latin1_bin NOT NULL,
  `semestre` int(20) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Volcado de datos para la tabla `materiasxcarrera`
--

INSERT INTO `materiasxcarrera` (`id_mc`, `materia`, `semestre`, `id_carrera`) VALUES
(1, 'Pedagog&iacute;a del Desarrollo Motor', 1, 1),
(2, 'Gimnasia B&aacute;sica', 1, 1),
(3, 'Historia Cultura F&iacute;sica y Deporte', 1, 1),
(4, 'Sistemas de Relaci&oacute;n del Cuerpo', 1, 1),
(5, 'Filosof&iacute;a de la Persona Humana', 1, 1),
(6, 'Introducci&oacute;n a a la Investigaci&oacute;n', 1, 1),
(7, 'Teor&iacute;a del Juego y la Recreaci&oacute;n', 1, 1),
(8, 'Pedagog&iacute;a del Aprendizaje Motor Humano', 2, 1),
(9, 'Fundamentos del Baloncesto', 2, 1),
(10, 'Sociolog&iacute;a de la Cultura F&iacute;sica y Deportiva', 2, 1),
(11, 'Sistemas de Nutrici&oacute;n del Cuerpo Humano', 2, 1),
(12, 'Filosof&iacute;a Social', 2, 1),
(13, 'Metolog&iacute;a de la Investigaci&oacute;n', 2, 1),
(14, 'Juego Motor y Juego Tradicional', 2, 1),
(15, 'Did&aacute;ctica de la Educaci&oacute;n F&iacute;sica', 3, 1),
(16, 'Baloncesto de Rendimiento', 3, 1),
(17, 'Pol&iacute;tica Educativa y Deportiva', 3, 1),
(18, 'Bases Fisiol&oacute;gicas y Energ&eacute;ticas del Esfuerzo', 3, 1),
(19, 'Filosof&iacute;a del Deporte', 3, 1),
(20, 'Inform&aacute;tica B&aacute;sica', 3, 1),
(21, 'Juegos Masivos y Educaci&oacute;n para el Tiempo Libre', 3, 1),
(22, 'Planeaci&oacute;n y Programaci&oacute;n de la Educaci&oacute;n F&iacute;sica', 4, 1),
(23, 'Fundamentos del Volibol', 4, 1),
(24, 'Administraci&oacute;n Deportiva', 4, 1),
(25, 'Biomec&aacute;nica de la Actividad F&iacute;sica y Deportiva', 4, 1),
(26, '&Eaacute;tica y Valores en el Deporte', 4, 1),
(27, 'An&aacute;lisis de Datos y Estad&iacute;stica B&aacute;sica', 4, 1),
(28, 'Fundamentos de la Actividad F&iacute;sica y Deporte Adaptado', 4, 1),
(29, 'Teor&iacute;a del Entrenamiento Deportivo', 5, 1),
(30, 'Voleibol de Rendimiento', 5, 1),
(31, 'Evaluaci&oacute;n de la Educaci&oacute;n F&iacute;sica y el Deporte', 5, 1),
(32, 'Evaluaci&oacute;n del Desempe&ntilde; F&iacute;sico', 5, 1),
(33, 'Bases Generales de la Nutrici&oacute;n', 5, 1),
(34, 'Expresi&oacute;n y Coordinaci&oacute;n Motriz', 5, 1),
(35, 'Metodolog&iacute;a del Deporte Adaptado', 5, 1),
(36, 'Metodolog&iacute;a del Entrenamiento Deportivo', 6, 1),
(37, 'Fundamentos del F&uacute;tbol', 6, 1),
(38, 'Nataci&oacute;n', 6, 1),
(39, 'Expresi&oacute;n Corporal', 6, 1),
(40, 'Deporte Adaptado de Competencia', 6, 1),
(41, 'Lesiones en la Actividad F&iacute;sica y Deportiva', 6, 1),
(42, 'Psicolog&iacute;a y Cultura del Ni&ntilde;o y del Adolescente', 7, 1),
(43, 'F&uacute;tbol de Rendimiento', 7, 1),
(44, 'Observaci&oacute;n y Pr&aacute;ctica Docente', 7, 1),
(45, 'Rehabilitaci&oacute;n y Fisioterapia', 7, 1),
(46, 'Fe y Cultura Contempor&aacute;nea', 7, 1),
(47, 'Expresi&oacute;n y Creatividad en el Movimiento', 7, 1),
(48, 'Idioma Profesional B&aacute;sico', 7, 1),
(49, 'Psicolog&iacute;a y Cultura de la Adultez', 8, 1),
(50, 'Atletismo en Pista', 8, 1),
(51, 'Pr&aacute;ctica Profesional', 8, 1),
(52, 'T&eacute;cnica de Masoterapia', 8, 1),
(53, 'Bases Te&oacute;ricas y Programa del Emprendedor', 8, 1),
(54, 'Taller de Elaboraci&oacute;n de T&eacute;sis', 8, 1),
(55, 'Idioma T&eacute;cnico Avanzado', 8, 1),
(56, 'Psicolog&iacute;a de la Actividad F&iacute;sica y Deportiva', 9, 1),
(57, 'Atletismo en Campo', 9, 1),
(58, 'Pr&aacute;ctica Profesional', 9, 1),
(59, 'Salud y Primeros Auxilios', 9, 1),
(60, 'Desarrollo Empresarial', 9, 1),
(61, 'Trabajo de Tesis', 9, 1),
(62, 'Actividad F&iacute;sica para Personas Mayores', 9, 1),
(63, 'Contabilidad B&aacute;sica', 1, 10),
(64, 'Matem&aacute;ticas', 1, 10),
(65, 'Teor&iacute;a Administrativa', 1, 10),
(66, 'Principios de Derecho', 1, 10),
(67, 'Vida Universitaria', 1, 10),
(68, 'Metodolog&iacute;a de la Investigaci&oacute;n I', 1, 10),
(69, 'Ingl&eacute;s I', 1, 10),
(70, 'Inform&aacute;atica', 1, 10),
(71, 'Estudio Integral del activo', 2, 10),
(72, 'Taller de contabilidad b&aacute;sica', 2, 10),
(73, 'Estad&iacute;stica descriptiva', 2, 10),
(74, 'Planeaci&oacute;n', 2, 10),
(75, 'Derecho Mercantil II', 2, 10),
(76, 'Filosof&iacute;a del hombre', 2, 10),
(77, 'Metodolog&iacute;a de la investigaci&oacute;n II', 2, 10),
(78, 'Ingl&eacute;s II', 2, 10),
(79, 'Microeconom&iacute;a', 2, 10),
(80, 'Estudio integral del pasivo', 3, 10),
(81, 'Estad&iacute;stica para la toma de decisiones', 3, 10),
(82, 'Control directivo', 3, 10),
(83, 'Derecho Mercantil III', 3, 10),
(84, 'Filosof&iacute;a social', 3, 10),
(85, 'Metodolog&iacute;a de la investigaci&oacute;n III', 3, 10),
(86, 'Ingl&eacute;s III', 3, 10),
(87, 'Macroeconom&iacute;a', 3, 10),
(88, 'Estudio Integral del capital', 4, 10),
(89, 'Teor&iacute;a contable', 4, 10),
(90, 'Matem&aacute;ticas financieras I', 4, 10),
(91, 'Fundamentos de mercadotecnia', 4, 10),
(92, 'Derecho administrativo', 4, 10),
(93, 'Filosof&iacute;a del absoluto', 4, 10),
(94, 'Ingl&eacute;s IV t&eacute;cnico', 4, 10),
(95, 'An&aacute;lisis de la estructura socioecon&oacute;mica de M&eacute;xico', 4, 10),
(96, 'Inform&aacute;tica contable', 5, 10),
(97, 'Organizaci&oacute;n contable', 5, 10),
(98, 'Matem&acute;ticas financieras III', 5, 10),
(99, 'Desarrollo empresarial I', 5, 10),
(100, 'Relaciones individuales de trabajo', 5, 10),
(101, 'Desarrollo human&iacute;stico I', 5, 10),
(102, 'Teor&iacute;a tributaria', 5, 10),
(103, 'Econom&iacute;a internacional', 5, 10),
(104, 'Elementos del Costo', 6, 10),
(105, 'Administraci&oacute;n financiera', 6, 10),
(106, 'Desarrollo empresarial II', 6, 10),
(107, 'Relaciones colectivas de trabajo', 6, 10),
(108, 'Desarrollo human&iacute;stico II', 6, 10),
(109, 'Impuestos directos personales morales', 6, 10),
(110, 'Normas y procedimientos de auditor&iacute;a', 6, 10),
(111, 'Presupuestos', 7, 10),
(112, 'Costos hist&oacute;ricos', 7, 10),
(113, 'Proyectos de inversi&oacute;n', 7, 10),
(114, 'Fundamentos de recursos humanos', 7, 10),
(115, 'Comercio internacional', 7, 10),
(116, 'Impuestos directos personas f&iacute;sicas', 7, 10),
(117, 'T&eacute;cnicas de auditor&iacute;a', 7, 10),
(118, 'Contabilidad administrativa', 8, 10),
(119, 'Costos predeterminados', 8, 10),
(120, 'Inversi&oacute;n y financiamiento', 8, 10),
(121, 'Taller de desarrollo de directivos', 8, 10),
(122, 'Producci&oacute;n', 8, 10),
(123, 'Seminario de t&eacute;sis', 8, 10),
(124, 'Impuestos indirectos', 8, 10),
(125, 'Pr&acute;ctica integral de auditor&iacute;a', 8, 10),
(126, 'Contabilidades especiales', 9, 10),
(127, 'Finanzas avanzadas', 9, 10),
(128, 'Simulaci&oacute;n de negocios', 9, 10),
(129, '&Eacute;tica profesional', 9, 10),
(130, 'Seminario integrador', 9, 10),
(131, 'Contribuciones laborales', 9, 10),
(132, 'Auditor&iacute;a administrativa', 9, 10),
(133, 'Fundamentos de metodolog&iacute;a de la investigaci&oacute;n ', 1, 13),
(134, 'Qu&iacute;mica General', 1, 13),
(135, 'Fisiolog&iacute;a Humana', 1, 13),
(136, 'Anatom&iacute;a Topogr&aacute;fica', 1, 13),
(137, 'Computaci&oacute;n', 1, 13),
(138, 'Introducc&oacute;n a la Vida Universitaria', 1, 13),
(139, 'Introducci&oacute;n a la cultura Norteamericana', 1, 13),
(140, 'Metodolog&iacute;a de la Investigaci&iacute;n cuantitativa', 2, 13),
(141, 'Qu&iacute;mica Org&aacute;nica', 2, 13),
(142, 'Fisiolog&iacute;a de la Nutrici&oacute;n', 2, 13),
(143, 'Microbiolog&iacute;a', 2, 13),
(144, 'Introducci&oacute;n a la Nutrici&oacute;n', 2, 13),
(145, 'Filosof&iacute;a de la persona humana', 2, 13),
(146, 'Costumbres y tradiciones en pa&iacute;ses de habla inglesa', 2, 13),
(147, 'Endocrinolog&iacute;a', 3, 13),
(148, 'Nutrici&oacute;n del Individuo Sano', 3, 13),
(149, 'Bioqu&iacute;mica General', 3, 13),
(150, 'Parasitolog&iacute;a', 3, 13),
(151, 'Filosof&iacute;a Social', 3, 13),
(152, 'Metodolog&iacute;a de la Investigaci&oacute;n Cualitativa', 3, 13),
(153, 'Estilos de vida en la cultura Anglosajona', 3, 13),
(154, 'Microbiolog&acute;a de los Alimentos', 4, 13),
(155, 'Epidemiolog&iacute;a', 4, 13),
(156, 'Dietoterapia', 4, 13),
(157, 'Bioqu&iacute;mica de la Nutrici&oacute;n I', 4, 13),
(158, 'Evaluaci&oacute;n del Estado Nutricional', 4, 13),
(159, 'Filosof&iacute;a Social', 4, 13),
(160, 'Gram&aacute;tica Inglesa', 4, 13),
(161, 'Fe y Cultura Contempor&aacute;nea', 5, 13),
(162, 'Bromatolog&iacute;a y Qu&iacute;mica de los Alimentos II', 5, 13),
(163, 'C&aacute;lculo Diet&eacute;tico', 5, 13),
(164, 'Bioqu&iacute;mica de la Nutrici&oacute;n II', 5, 13),
(165, 'Laboratorio de Dietolog&iacute;a', 5, 13),
(166, 'Fisiopatolog&iacute;a de la Nutrici&oacute;n', 5, 13),
(167, 'Salud P&uacute;blica', 5, 13),
(168, 'Introducci&oacute;n al Desarrollo Humano', 5, 13),
(169, 'Bromatolog&iacute;a y Qu&iacute;mica de los Alimentos II', 6, 13),
(170, 'Nutrici&oacute;n del Individuo en Condiciones Patol&oacute;gicas', 6, 13),
(171, 'Habilidades cognitivas, desarrollo humano y comunicaci&oacute;n', 6, 13),
(172, 'Laboratorio de Dietolog&iacute;a', 6, 13),
(173, 'Lagislaci&oacute;n de la Nutrici&oacute;n', 6, 13),
(174, 'Bioestad&iacute;sticas y Probabilidad', 6, 13),
(175, 'Seminario de Desarrollo Human&iacute;stico', 6, 13),
(176, 'Nutrici&oacute;n Comunitaria', 7, 13),
(177, 'Nutrici&oacute;n Enteral y Parenteral', 7, 13),
(178, 'Psicolog&iacute;a de la Nutrici&oacute;n', 7, 13),
(179, 'Farmacolog&iacute;a y Toxicolog&iacute;a B&aacute;sica', 7, 13),
(180, 'Seminario de Titulaci&oacute;n', 7, 13),
(181, 'Administraci&oacute;n General', 7, 13),
(182, '&Eacute;tica Profesional', 7, 13),
(183, 'Proyecto en Nutrici&oacute;n Comunitaria', 8, 13),
(184, 'Bases Did&aacute;cticas para la Educaci&oacute;n en la Nutrici&oacute;n', 8, 13),
(185, 'Pr&aacute;cticas Profesionales', 8, 13),
(186, 'Nutrici&oacute;n y Deporte', 8, 13),
(187, 'Taller de protocolo de investigaci&oacute;n', 8, 13),
(188, 'Administraci&oacute;n de Servicios Alimenticios', 8, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiasxdocente`
--

CREATE TABLE `materiasxdocente` (
  `id_md` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materiasxdocente`
--

INSERT INTO `materiasxdocente` (`id_md`, `id_materia`, `id_usuario`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id_periodo` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `permiso` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencias`
--

CREATE TABLE `referencias` (
  `id_referencia` int(11) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `autor` varchar(80) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `editorial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `referencias`
--

INSERT INTO `referencias` (`id_referencia`, `isbn`, `autor`, `fecha`, `titulo`, `editorial`) VALUES
(1, '1995', 'Juan Armando', '2017-06-13', 'Antes del vuelo', 'Editoriales'),
(2, '2056', 'Fernando', '2017-06-16', 'Vuelos', 'Aviones'),
(3, '1231', 'Juan', '2016-11-30', 'Juanes', 'Editoriales'),
(4, '1715', 'Hector', '2015-10-29', 'Ninguno', 'Reprobo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referenciasxmateria`
--

CREATE TABLE `referenciasxmateria` (
  `id_refmat` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_referencia` int(11) NOT NULL,
  `tipo_referencia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `referenciasxmateria`
--

INSERT INTO `referenciasxmateria` (`id_refmat`, `id_materia`, `id_referencia`, `tipo_referencia`) VALUES
(1, 1, 3, 'BASICA'),
(2, 1, 3, 'COMPLEMENTARIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `id_telefono` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`id_telefono`, `id_usuario`, `telefono`) VALUES
(1, 1, '3142826'),
(2, 2, '44312344'),
(3, 9, '3142826');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposevaluacion`
--

CREATE TABLE `tiposevaluacion` (
  `id_tipoEvaluacion` int(11) NOT NULL,
  `tipoEvaluacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tiposevaluacion`
--

INSERT INTO `tiposevaluacion` (`id_tipoEvaluacion`, `tipoEvaluacion`) VALUES
(1, 'Diagnostica'),
(2, 'Formativa'),
(3, 'Sumativa'),
(4, 'Autoevaluacion'),
(5, 'Heteroevaluacion'),
(6, 'Coevaluacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipotel`
--

CREATE TABLE `tipotel` (
  `id_tipoTel` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id_tipoUsuario` int(11) NOT NULL,
  `tipoUsuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadescompetencia`
--

CREATE TABLE `unidadescompetencia` (
  `id_unidades` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `tema` varchar(60) NOT NULL,
  `aprenEsp` varchar(80) NOT NULL,
  `estApren` varchar(80) NOT NULL,
  `recursos` varchar(45) NOT NULL,
  `evidencias` varchar(50) NOT NULL,
  `id_tipoEvaluacion` int(11) NOT NULL,
  `instrumentosEvaluacion` varchar(45) NOT NULL,
  `ponderacion` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidadescompetencia`
--

INSERT INTO `unidadescompetencia` (`id_unidades`, `id_materia`, `fecha`, `tema`, `aprenEsp`, `estApren`, `recursos`, `evidencias`, `id_tipoEvaluacion`, `instrumentosEvaluacion`, `ponderacion`) VALUES
(1, 1, '2017-07-05', 'tema 2p', 'a 2p', 'Activacion de conocimientos previos,Activacion de conocimientos previos,Matriz d', 'Pintarron,Videos,', 'ap 2', 1, '3', 'crit 2'),
(2, 1, '2017-07-05', 'tema 2p', 'a 2p', 'Activacion de conocimientos previos,Activacion de conocimientos previos,Matriz d', 'Pintarron,Videos,', 'ap 2', 1, '3', 'crit 2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `grado_academ` varchar(50) NOT NULL,
  `formacion` varchar(40) NOT NULL,
  `admin` int(1) NOT NULL,
  `director` int(11) NOT NULL,
  `id_director` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `nombre`, `apellido`, `pass`, `correo`, `grado_academ`, `formacion`, `admin`, `director`, `id_director`) VALUES
(1, 'hec1702', 'Hector', 'Mendoza', '123', 'hec1702@gmail.com', 'Licenciatura', 'Lic', 1, 0, 0),
(2, 'rihch', 'Ricardo Ivan', 'Hinojosa', '123', 'rihch88@hotmail.com', 'Licenciatura', 'Licenciatura', 0, 1, 0),
(6, 'pablo', 'Pablo', 'Valdes', '123', 'pablo@mail.com', 'Prepa', 'Prepa', 1, 1, 0),
(9, 'doc', 'Docente', 'Maestro', '123', 'hecpilles1702@outlook.com', 'Licenciatura', 'Licenciatura', 0, 0, 1),
(10, 'a', 'sadas', 'asdasd', '123', 'ninja_livdasdasdesas@hotmaasdil.com', 'sadsa', 'asdasd', 1, 1, 0),
(11, 'pruebadocente', 'pruebadocente', 'pruebadocente', '123', 'pruebadocente@pruebadocente.com', 'pruebadocente', 'pruebadocente', 0, 0, 1),
(13, 'docentepr', 'sadqs', 'asdas', '123', 'adajulieth_ea@hotmail.com', 'asdsa', 'asd', 0, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `coreos`
--
ALTER TABLE `coreos`
  ADD PRIMARY KEY (`id_correo`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `direccionesxdocente`
--
ALTER TABLE `direccionesxdocente`
  ADD PRIMARY KEY (`id_dc`);

--
-- Indices de la tabla `instrumentosevaluacion`
--
ALTER TABLE `instrumentosevaluacion`
  ADD PRIMARY KEY (`id_instrumento`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `materiasxcarrera`
--
ALTER TABLE `materiasxcarrera`
  ADD PRIMARY KEY (`id_mc`);

--
-- Indices de la tabla `materiasxdocente`
--
ALTER TABLE `materiasxdocente`
  ADD PRIMARY KEY (`id_md`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `referencias`
--
ALTER TABLE `referencias`
  ADD PRIMARY KEY (`id_referencia`);

--
-- Indices de la tabla `referenciasxmateria`
--
ALTER TABLE `referenciasxmateria`
  ADD PRIMARY KEY (`id_refmat`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id_telefono`);

--
-- Indices de la tabla `tiposevaluacion`
--
ALTER TABLE `tiposevaluacion`
  ADD PRIMARY KEY (`id_tipoEvaluacion`);

--
-- Indices de la tabla `tipotel`
--
ALTER TABLE `tipotel`
  ADD PRIMARY KEY (`id_tipoTel`);

--
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id_tipoUsuario`);

--
-- Indices de la tabla `unidadescompetencia`
--
ALTER TABLE `unidadescompetencia`
  ADD PRIMARY KEY (`id_unidades`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `coreos`
--
ALTER TABLE `coreos`
  MODIFY `id_correo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `direccionesxdocente`
--
ALTER TABLE `direccionesxdocente`
  MODIFY `id_dc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `instrumentosevaluacion`
--
ALTER TABLE `instrumentosevaluacion`
  MODIFY `id_instrumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `materiasxcarrera`
--
ALTER TABLE `materiasxcarrera`
  MODIFY `id_mc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;
--
-- AUTO_INCREMENT de la tabla `materiasxdocente`
--
ALTER TABLE `materiasxdocente`
  MODIFY `id_md` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `referencias`
--
ALTER TABLE `referencias`
  MODIFY `id_referencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `referenciasxmateria`
--
ALTER TABLE `referenciasxmateria`
  MODIFY `id_refmat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tiposevaluacion`
--
ALTER TABLE `tiposevaluacion`
  MODIFY `id_tipoEvaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tipotel`
--
ALTER TABLE `tipotel`
  MODIFY `id_tipoTel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id_tipoUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `unidadescompetencia`
--
ALTER TABLE `unidadescompetencia`
  MODIFY `id_unidades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
