-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2017 a las 23:44:23
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
  `carrera` varchar(40) NOT NULL,
  `id_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `carrera`, `id_direccion`) VALUES
(1, 'Psicología', 1);

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
  `id_direcciones` int(11) NOT NULL,
  `direccion` varchar(15) NOT NULL,
  `director` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id_direcciones`, `direccion`, `director`) VALUES
(1, 'Psicología', 'Aurora Correa'),
(2, 'Ingenierías', 'Juan Manuel Palomares Muñoz');

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
(3, 'Rúbrica'),
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
  `ciclo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombrePlan`, `nombreUnidad`, `semestre`, `fecha`, `proposito`, `competenciasGen`, `competenciasEsp`, `primeraEvaluacion`, `segundaEvaluacion`, `terceraEvaluacion`, `horasUnidad`, `horasTeoDoc`, `horasPracDoc`, `horasTeoInd`, `horasPracInd`, `numAlumnos`, `salon`, `grupo`, `id_carrera`, `ciclo`) VALUES
(1, 'Ing. Sistemas Computacionales', 'Arq. Computadoras', '7', '2017-05-30', 'fdsfa', 'asdf', 'asdf', '2017-05-11', '2017-01-02', '2017-01-01', 1, 1, 1, 1, 1, 1, '2e', '2E', 1, 1),
(2, 'Mecatronica', 'Admon. Centros de cÃ³mputo', '8', '2017-06-12', 'Asistir a los alumnos', 'Familiarizacion', 'Competencias', '2017-06-13', '2017-07-11', '2017-07-25', 12, 12, 12, 12, 12, 25, 'A', '3', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiasxcarrera`
--

CREATE TABLE `materiasxcarrera` (
  `id_mc` int(11) NOT NULL,
  `materia` varchar(45) COLLATE latin1_bin NOT NULL,
  `semestre` int(20) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Volcado de datos para la tabla `materiasxcarrera`
--

INSERT INTO `materiasxcarrera` (`id_mc`, `materia`, `semestre`, `id_carrera`) VALUES
(1, 'Estadística Descriptiva', 2, 1);

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
(1, 1, 1),
(2, 2, 1);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referenciasxmateria`
--

CREATE TABLE `referenciasxmateria` (
  `id_materia` int(11) NOT NULL,
  `isbn` varchar(30) NOT NULL,
  `tipo_referencia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 1, '3142826');

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
(1, 1, '2017-05-16', 'hola', 'hola', 'hola', 'hol', 'hola', 2, '2', 'hola'),
(2, 2, '2017-06-13', 'Arquitectura', 'Aprender arquitectura', '>QQQ (veo, no veo, infiero)', 'he', 'Resistencias', 2, '2', 'Examen 100%');

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
  `director` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `nombre`, `apellido`, `pass`, `correo`, `grado_academ`, `formacion`, `admin`, `director`) VALUES
(1, 'hec1702', 'Hector', 'Mendoza', '123', 'hec1702@gmail.com', 'Licenciatura', 'Lic', 1, 0);

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
  ADD PRIMARY KEY (`id_direcciones`);

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
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `coreos`
--
ALTER TABLE `coreos`
  MODIFY `id_correo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id_direcciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `instrumentosevaluacion`
--
ALTER TABLE `instrumentosevaluacion`
  MODIFY `id_instrumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `materiasxcarrera`
--
ALTER TABLE `materiasxcarrera`
  MODIFY `id_mc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `materiasxdocente`
--
ALTER TABLE `materiasxdocente`
  MODIFY `id_md` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id_referencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
