-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2025 a las 03:14:50
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaevaluaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `identificacion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombres`, `apellidos`, `correo`, `identificacion`) VALUES
(1, 'JHOE ', 'CADENA', 'CADENALEONEL9@GMAIL.COM', '1721582821'),
(2, 'JHOE ', 'ALVAREZ', 'CADENALEONEL9@GMAIL.COM', '1721582821'),
(3, 'Carlos', 'Pérez', 'carlos.perez@example.com', '110000001'),
(4, 'María', 'Gómez', 'maria.gomez@example.com', '110000002'),
(5, 'José', 'Ramírez', 'jose.ramirez@example.com', '110000003'),
(6, 'Ana', 'Torres', 'ana.torres@example.com', '110000004'),
(7, 'Luis', 'Mendoza', 'luis.mendoza@example.com', '110000005'),
(8, 'Diana', 'Vargas', 'diana.vargas@example.com', '110000006'),
(9, 'Pedro', 'Salazar', 'pedro.salazar@example.com', '110000007'),
(10, 'Lucía', 'Reyes', 'lucia.reyes@example.com', '110000008'),
(11, 'Fernando', 'Lima', 'fernando.lima@example.com', '110000009'),
(12, 'Andrea', 'Beltrán', 'andrea.beltran@example.com', '110000010'),
(13, 'Jorge', 'Espinoza', 'jorge.espinoza@example.com', '110000011'),
(14, 'Elena', 'Cortez', 'elena.cortez@example.com', '110000012'),
(15, 'Ricardo', 'Quintero', 'ricardo.quintero@example.com', '110000013'),
(16, 'Patricia', 'Cedeño', 'patricia.cedeno@example.com', '110000014'),
(17, 'Miguel', 'Vallejo', 'miguel.vallejo@example.com', '110000015'),
(18, 'Sofía', 'López', 'sofia.lopez@example.com', '110000016'),
(19, 'Gabriel', 'Ponce', 'gabriel.ponce@example.com', '110000017'),
(20, 'Valeria', 'Correa', 'valeria.correa@example.com', '110000018'),
(21, 'Héctor', 'Sierra', 'hector.sierra@example.com', '110000019'),
(22, 'Camila', 'Chávez', 'camila.chavez@example.com', '110000020'),
(23, 'Daniel', 'Alvarado', 'daniel.alvarado@example.com', '110000021'),
(24, 'Karina', 'Orozco', 'karina.orozco@example.com', '110000022'),
(25, 'Sebastián', 'Rojas', 'sebastian.rojas@example.com', '110000023'),
(26, 'Bianca', 'Moreno', 'bianca.moreno@example.com', '110000024'),
(27, 'Adrián', 'Cárdenas', 'adrian.cardenas@example.com', '110000025'),
(28, 'Carolina', 'Vera', 'carolina.vera@example.com', '110000026'),
(29, 'Nicolás', 'Suárez', 'nicolas.suarez@example.com', '110000027'),
(30, 'Fátima', 'Navarro', 'fatima.navarro@example.com', '110000028'),
(31, 'Kevin', 'Harms', 'kevin.harms@example.com', '110000029'),
(32, 'Melany', 'Santos', 'melany.santos@example.com', '110000030'),
(33, 'Julián', 'Villacís', 'julian.villacis@example.com', '110000031'),
(34, 'Rocío', 'Zamora', 'rocio.zamora@example.com', '110000032'),
(35, 'David', 'Palacios', 'david.palacios@example.com', '110000033'),
(36, 'Karen', 'Romero', 'karen.romero@example.com', '110000034'),
(37, 'Tomás', 'Escobar', 'tomas.escobar@example.com', '110000035'),
(38, 'Fiorella', 'Aguilar', 'fiorella.aguilar@example.com', '110000036'),
(39, 'Samuel', 'Herrera', 'samuel.herrera@example.com', '110000037'),
(40, 'Miranda', 'Ortiz', 'miranda.ortiz@example.com', '110000038'),
(41, 'Esteban', 'Granda', 'esteban.granda@example.com', '110000039'),
(42, 'Laura', 'Silva', 'laura.silva@example.com', '110000040'),
(43, 'Cristian', 'Molina', 'cristian.molina@example.com', '110000041'),
(44, 'Ariana', 'Cruz', 'ariana.cruz@example.com', '110000042'),
(45, 'Felipe', 'Terán', 'felipe.teran@example.com', '110000043'),
(46, 'Daniela', 'Muñoz', 'daniela.munoz@example.com', '110000044'),
(47, 'Mateo', 'Jácome', 'mateo.jacome@example.com', '110000045'),
(48, 'Isabella', 'Rosales', 'isabella.rosales@example.com', '110000046'),
(49, 'Xavier', 'Naranjo', 'xavier.naranjo@example.com', '110000047'),
(50, 'Paula', 'García', 'paula.garcia@example.com', '110000048'),
(51, 'Ramiro', 'Villavicencio', 'ramiro.villavicencio@example.com', '110000049'),
(52, 'Alexa', 'Montenegro', 'alexa.montenegro@example.com', '110000050'),
(53, 'JHOE ', 'CADENA', 'CADENALEONEL9@GMAIL.COM', '1721582821');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluaciones`
--

CREATE TABLE `evaluaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `evaluaciones`
--

INSERT INTO `evaluaciones` (`id`, `nombre`, `descripcion`, `fecha`) VALUES
(4, 'Matemáticas I', 'Evaluación del primer parcial', '2024-01-10'),
(5, 'Matemáticas II', 'Segundo parcial', '2024-02-05'),
(6, 'Física I', 'Evaluación de movimiento', '2024-01-15'),
(7, 'Física II', 'Ondas y energía', '2024-02-22'),
(8, 'Lengua y Literatura', 'Ensayo crítico', '2024-01-20'),
(9, 'Historia Universal', 'Guerras mundiales', '2024-01-25'),
(10, 'Historia del Ecuador', 'Período Republicano', '2024-02-10'),
(11, 'Inglés A1', 'Evaluación escrito A1', '2024-02-18'),
(12, 'Inglés A2', 'Speaking test', '2024-03-01'),
(13, 'Química I', 'Estructura atómica', '2024-01-12'),
(14, 'Química II', 'Reacciones químicas', '2024-02-08'),
(15, 'Programación I', 'Sintaxis básica', '2024-01-09'),
(16, 'Programación II', 'POO conceptos', '2024-02-03'),
(17, 'Bases de Datos', 'Modelo relacional', '2024-02-15'),
(18, 'Redes I', 'OSI vs TCP/IP', '2024-03-05'),
(19, 'Arte y Cultura', 'Análisis artístico', '2024-01-30'),
(20, 'Música I', 'Lectura musical', '2024-03-10'),
(21, 'Biología I', 'Célula y ADN', '2024-01-14'),
(22, 'Biología II', 'Genética básica', '2024-02-21'),
(23, 'Educación Física', 'Resistencia y velocidad', '2024-03-08'),
(24, 'Contabilidad I', 'Libros contables', '2024-01-18'),
(25, 'Contabilidad II', 'Balance general', '2024-02-12'),
(26, 'Geografía', 'Sistemas geográficos', '2024-02-28'),
(27, 'Estadística I', 'Probabilidad', '2024-03-03'),
(28, 'Estadística II', 'Distribuciones', '2024-03-11'),
(29, 'Cívica', 'Derechos ciudadanos', '2024-01-22'),
(30, 'Computación Básica', 'Office Tools', '2024-01-28'),
(31, 'Programación Web', 'HTML + CSS', '2024-02-14'),
(32, 'Programación Web II', 'PHP + MySQL', '2024-03-02'),
(33, 'Economía I', 'Microeconomía', '2024-01-17'),
(34, 'Economía II', 'Macroeconomía', '2024-02-25'),
(35, 'Emprendimiento', 'Plan de negocio', '2024-03-04'),
(36, 'Robótica I', 'Sensores básicos', '2024-02-06'),
(37, 'Robótica II', 'Microcontroladores', '2024-03-06'),
(38, 'Dibujo Técnico', 'Perspectiva', '2024-01-29'),
(39, 'Ética', 'Valores humanos', '2024-02-04'),
(40, 'Filosofía', 'Corrientes filosóficas', '2024-02-11'),
(41, 'Sociología', 'Estructura social', '2024-03-09'),
(42, 'Psicología', 'Conducta humana', '2024-03-12'),
(43, 'Derecho', 'Normativa básica', '2024-01-31'),
(44, 'Administración', 'Organización empresarial', '2024-02-09'),
(45, 'Marketing', 'Plan comercial', '2024-02-26'),
(46, 'Logística', 'Cadena de suministro', '2024-03-07'),
(47, 'Comercio Exterior', 'Importaciones', '2024-03-13'),
(48, 'Electrónica I', 'Circuitos básicos', '2024-02-07'),
(49, 'Electrónica II', 'Componentes y análisis', '2024-03-14'),
(50, 'Computación Gráfica', 'Modelado 3D', '2024-03-15'),
(51, 'Álgebra', 'Ecuaciones básicas', '2024-01-11'),
(52, 'Trigonometría', 'Funciones trigonométricas', '2024-02-13'),
(53, 'PRUEBA', 'PRUEBA', '2025-11-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `id` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_evaluacion` int(11) NOT NULL,
  `nota` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`id`, `id_estudiante`, `id_evaluacion`, `nota`) VALUES
(5, 4, 4, 8.30),
(6, 5, 5, 9.50),
(7, 6, 6, 7.40),
(8, 7, 7, 8.20),
(9, 8, 8, 9.00),
(10, 9, 9, 7.10),
(11, 10, 10, 8.70),
(12, 11, 11, 8.90),
(13, 12, 12, 9.20),
(14, 13, 13, 7.50),
(15, 14, 14, 9.30),
(16, 15, 15, 8.80),
(17, 16, 16, 9.00),
(18, 17, 17, 7.60),
(19, 18, 18, 8.10),
(20, 19, 19, 9.40),
(21, 20, 20, 8.00),
(22, 21, 21, 9.60),
(23, 22, 22, 7.90),
(24, 23, 23, 8.40),
(25, 24, 24, 9.70),
(26, 25, 25, 7.70),
(27, 26, 26, 8.90),
(28, 27, 27, 9.10),
(29, 28, 28, 7.80),
(30, 29, 29, 8.60),
(31, 30, 30, 9.30),
(32, 31, 31, 7.30),
(33, 32, 32, 8.20),
(34, 33, 33, 9.00),
(35, 34, 34, 7.40),
(36, 35, 35, 8.50),
(37, 36, 36, 9.20),
(38, 37, 37, 7.60),
(39, 38, 38, 8.30),
(40, 39, 39, 9.10),
(41, 40, 40, 7.90),
(42, 41, 41, 8.80),
(43, 42, 42, 9.00),
(44, 43, 43, 7.70),
(45, 44, 44, 8.40),
(46, 45, 45, 9.50),
(47, 46, 46, 7.80),
(48, 47, 47, 8.90),
(49, 48, 48, 9.30),
(50, 49, 49, 7.50),
(51, 50, 50, 8.60),
(52, 9, 5, 4.10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_evaluacion` (`id_evaluacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `evaluaciones`
--
ALTER TABLE `evaluaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resultados_ibfk_2` FOREIGN KEY (`id_evaluacion`) REFERENCES `evaluaciones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
