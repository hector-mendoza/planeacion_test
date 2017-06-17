-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2017 at 08:28 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planeacion`
--

-- --------------------------------------------------------

--
-- Table structure for table `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(11) NOT NULL,
  `carrera` varchar(40) CHARACTER SET latin1 NOT NULL,
  `id_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `carrera`, `id_direccion`) VALUES
(1, 'Psicologia', 1),
(2, 'Dise&ntilde;o grafico', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coreos`
--

CREATE TABLE `coreos` (
  `id_correo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `correo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `direcciones`
--

CREATE TABLE `direcciones` (
  `id_direccion` int(11) NOT NULL,
  `direccion` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `direcciones`
--

INSERT INTO `direcciones` (`id_direccion`, `direccion`) VALUES
(8, 'Sistemas');

-- --------------------------------------------------------

--
-- Table structure for table `direccionesxdocente`
--

CREATE TABLE `direccionesxdocente` (
  `id_dc` int(11) NOT NULL,
  `id_direccion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `direccionesxdocente`
--

INSERT INTO `direccionesxdocente` (`id_dc`, `id_direccion`, `id_usuario`) VALUES
(6, 8, 6);

-- --------------------------------------------------------

--
-- Table structure for table `instrumentosevaluacion`
--

CREATE TABLE `instrumentosevaluacion` (
  `id_instrumento` int(11) NOT NULL,
  `instrumento` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instrumentosevaluacion`
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
-- Table structure for table `materias`
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
  `ciclo` int(30) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id_materia`, `nombrePlan`, `nombreUnidad`, `semestre`, `fecha`, `proposito`, `competenciasGen`, `competenciasEsp`, `primeraEvaluacion`, `segundaEvaluacion`, `terceraEvaluacion`, `horasUnidad`, `horasTeoDoc`, `horasPracDoc`, `horasTeoInd`, `horasPracInd`, `numAlumnos`, `salon`, `grupo`, `id_carrera`, `ciclo`, `id_usuario`) VALUES
(1, 'Ing. Sistemas Computacionales', 'Arq. Computadoras', '7', '2017-05-30', 'fdsfa', 'asdf', 'asdf', '2017-05-11', '2017-01-02', '2017-01-01', 1, 1, 1, 1, 1, 1, '5A', '2E', 1, 1, 1),
(2, 'Mecatronica', 'Admon. Centros de cÃ³mputo', '8', '2017-06-12', 'Asistir a los alumnos', 'Familiarizacion', 'Competencias', '2017-06-13', '2017-07-11', '2017-07-25', 12, 12, 12, 12, 12, 25, '6A', '3', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `materiasxcarrera`
--

CREATE TABLE `materiasxcarrera` (
  `id_mc` int(11) NOT NULL,
  `materia` varchar(45) COLLATE latin1_bin NOT NULL,
  `semestre` int(20) NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `materiasxcarrera`
--

INSERT INTO `materiasxcarrera` (`id_mc`, `materia`, `semestre`, `id_carrera`) VALUES
(1, 'Estadística Descriptiva', 2, 1),
(2, 'Estadistica Matematica', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `materiasxdocente`
--

CREATE TABLE `materiasxdocente` (
  `id_md` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materiasxdocente`
--

INSERT INTO `materiasxdocente` (`id_md`, `id_materia`, `id_usuario`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `periodos`
--

CREATE TABLE `periodos` (
  `id_periodo` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `permiso` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referencias`
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
-- Dumping data for table `referencias`
--

INSERT INTO `referencias` (`id_referencia`, `isbn`, `autor`, `fecha`, `titulo`, `editorial`) VALUES
(1, '1995', 'Juan Armando', '2017-06-13', 'Antes del vuelo', 'Editoriales'),
(2, '2056', 'Fernando', '2017-06-16', 'Vuelos', 'Aviones'),
(3, '1231', 'Juan', '2016-11-30', 'Juanes', 'Editoriales');

-- --------------------------------------------------------

--
-- Table structure for table `referenciasxmateria`
--

CREATE TABLE `referenciasxmateria` (
  `id_refmat` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_referencia` int(11) NOT NULL,
  `tipo_referencia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referenciasxmateria`
--

INSERT INTO `referenciasxmateria` (`id_refmat`, `id_materia`, `id_referencia`, `tipo_referencia`) VALUES
(1, 1, 1, 'BASICA');

-- --------------------------------------------------------

--
-- Table structure for table `telefonos`
--

CREATE TABLE `telefonos` (
  `id_telefono` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `telefonos`
--

INSERT INTO `telefonos` (`id_telefono`, `id_usuario`, `telefono`) VALUES
(1, 1, '3142826'),
(2, 2, '44312344');

-- --------------------------------------------------------

--
-- Table structure for table `tiposevaluacion`
--

CREATE TABLE `tiposevaluacion` (
  `id_tipoEvaluacion` int(11) NOT NULL,
  `tipoEvaluacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiposevaluacion`
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
-- Table structure for table `tipotel`
--

CREATE TABLE `tipotel` (
  `id_tipoTel` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipousuario`
--

CREATE TABLE `tipousuario` (
  `id_tipoUsuario` int(11) NOT NULL,
  `tipoUsuario` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unidadescompetencia`
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
-- Dumping data for table `unidadescompetencia`
--

INSERT INTO `unidadescompetencia` (`id_unidades`, `id_materia`, `fecha`, `tema`, `aprenEsp`, `estApren`, `recursos`, `evidencias`, `id_tipoEvaluacion`, `instrumentosEvaluacion`, `ponderacion`) VALUES
(1, 1, '2017-05-16', 'hola', 'hola', 'hola', 'hol', 'hola', 2, '2', 'hola'),
(2, 2, '2017-06-13', 'Arquitectura', 'Aprender arquitectura', '>QQQ (veo, no veo, infiero)', 'he', 'Resistencias', 2, '2', 'Examen 100%');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
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
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `nombre`, `apellido`, `pass`, `correo`, `grado_academ`, `formacion`, `admin`, `director`) VALUES
(1, 'hec1702', 'Hector', 'Mendoza', '123', 'hec1702@gmail.com', 'Licenciatura', 'Lic', 1, 0),
(2, 'rihch', 'Ricardo Ivan', 'Hinojosa', '123', 'rihch88@hotmail.com', 'Licenciatura', 'Licenciatura', 0, 1),
(6, 'pablo', 'Pablo', 'Valdes', 'hola', 'pablo@mail.com', 'Prepa', 'Prepa', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indexes for table `coreos`
--
ALTER TABLE `coreos`
  ADD PRIMARY KEY (`id_correo`);

--
-- Indexes for table `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indexes for table `direccionesxdocente`
--
ALTER TABLE `direccionesxdocente`
  ADD PRIMARY KEY (`id_dc`);

--
-- Indexes for table `instrumentosevaluacion`
--
ALTER TABLE `instrumentosevaluacion`
  ADD PRIMARY KEY (`id_instrumento`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indexes for table `materiasxcarrera`
--
ALTER TABLE `materiasxcarrera`
  ADD PRIMARY KEY (`id_mc`);

--
-- Indexes for table `materiasxdocente`
--
ALTER TABLE `materiasxdocente`
  ADD PRIMARY KEY (`id_md`);

--
-- Indexes for table `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indexes for table `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indexes for table `referencias`
--
ALTER TABLE `referencias`
  ADD PRIMARY KEY (`id_referencia`);

--
-- Indexes for table `referenciasxmateria`
--
ALTER TABLE `referenciasxmateria`
  ADD PRIMARY KEY (`id_refmat`);

--
-- Indexes for table `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id_telefono`);

--
-- Indexes for table `tiposevaluacion`
--
ALTER TABLE `tiposevaluacion`
  ADD PRIMARY KEY (`id_tipoEvaluacion`);

--
-- Indexes for table `tipotel`
--
ALTER TABLE `tipotel`
  ADD PRIMARY KEY (`id_tipoTel`);

--
-- Indexes for table `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`id_tipoUsuario`);

--
-- Indexes for table `unidadescompetencia`
--
ALTER TABLE `unidadescompetencia`
  ADD PRIMARY KEY (`id_unidades`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coreos`
--
ALTER TABLE `coreos`
  MODIFY `id_correo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `direccionesxdocente`
--
ALTER TABLE `direccionesxdocente`
  MODIFY `id_dc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `instrumentosevaluacion`
--
ALTER TABLE `instrumentosevaluacion`
  MODIFY `id_instrumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `materiasxcarrera`
--
ALTER TABLE `materiasxcarrera`
  MODIFY `id_mc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `materiasxdocente`
--
ALTER TABLE `materiasxdocente`
  MODIFY `id_md` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `referencias`
--
ALTER TABLE `referencias`
  MODIFY `id_referencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `referenciasxmateria`
--
ALTER TABLE `referenciasxmateria`
  MODIFY `id_refmat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tiposevaluacion`
--
ALTER TABLE `tiposevaluacion`
  MODIFY `id_tipoEvaluacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tipotel`
--
ALTER TABLE `tipotel`
  MODIFY `id_tipoTel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipousuario`
--
ALTER TABLE `tipousuario`
  MODIFY `id_tipoUsuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `unidadescompetencia`
--
ALTER TABLE `unidadescompetencia`
  MODIFY `id_unidades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
