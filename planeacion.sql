-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 11:01 PM
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
  `carrera` varchar(40) NOT NULL,
  `id_direccion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id_direcciones` int(11) NOT NULL,
  `direccion` varchar(15) NOT NULL,
  `director` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `refComp` mediumtext NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `periodos`
--

CREATE TABLE `periodos` (
  `id_periodo` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `id_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `permiso` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referencias`
--

CREATE TABLE `referencias` (
  `isbn` int(30) NOT NULL,
  `autor` varchar(80) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `fecha` date NOT NULL,
  `editorial` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referenciasxmateria`
--

CREATE TABLE `referenciasxmateria` (
  `id_materia` int(11) NOT NULL,
  `isbn` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `telefonos`
--

CREATE TABLE `telefonos` (
  `id_telefono` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_tipoTel` int(11) NOT NULL,
  `telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tiposevaluacion`
--

CREATE TABLE `tiposevaluacion` (
  `id_tipoEvaluacion` int(11) NOT NULL,
  `tipoEvaluacion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `horaInicio` date NOT NULL,
  `horaFin` date NOT NULL,
  `tema` varchar(60) NOT NULL,
  `aprenEsp` text NOT NULL,
  `estApren` text NOT NULL,
  `recursos` text NOT NULL,
  `evidencias` text NOT NULL,
  `id_tipoEvaluacion` int(11) NOT NULL,
  `instrumentosEvaluacion` text NOT NULL,
  `ponderacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellidoPat` varchar(40) NOT NULL,
  `apellidoMat` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `id_tipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`id_direcciones`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

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
  ADD PRIMARY KEY (`isbn`);

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
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coreos`
--
ALTER TABLE `coreos`
  MODIFY `id_correo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id_direcciones` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `isbn` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tiposevaluacion`
--
ALTER TABLE `tiposevaluacion`
  MODIFY `id_tipoEvaluacion` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_unidades` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
