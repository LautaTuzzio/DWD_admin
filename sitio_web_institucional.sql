-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2024 a las 01:47:20
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sitio_web_institucional`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(33) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `password`) VALUES
(1, 'maxi', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoridades`
--

CREATE TABLE `autoridades` (
  `id` int(11) NOT NULL,
  `orden` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `años_activo` int(11) DEFAULT NULL,
  `id_trayectoria` int(11) DEFAULT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autoridades`
--

INSERT INTO `autoridades` (`id`, `orden`, `nombre`, `apellido`, `imagen`, `años_activo`, `id_trayectoria`, `id_rol`) VALUES
(20742899, 1, 'Omar', 'Brandan', 'img/brandan.png', 30, 20742899, 20742899),
(22986305, 3, 'Mariana', 'Bonetti', 'img/bonetti.png', 5, 22986305, 22986305),
(23742589, 5, 'Alejandra', 'Basack', 'img/basack.png', 5, 23742589, 23742589),
(25467567, 6, 'Karin', 'Cuervo', 'img/cuervo.png', 11, 25467567, 25467567),
(25948201, 7, 'Martin', 'Lopez', 'img/lopez.png', 16, 25948201, 25948201),
(26828345, 8, 'Esteban', 'Lemos', 'img/lemos.png', 14, 26828345, 26828345),
(28657429, 9, 'Alejandro', 'Hsia', 'img/hsia.png', 20, 28657429, 28657429),
(28896785, 10, 'Pablo', 'Heredia', 'img/heredia.png', 15, 28896785, 28896785),
(28923159, 2, 'Ezequiel', 'Torres', 'img/torres.png', 22, 28923159, 28923159),
(28963258, 11, 'Alejandro Miguel', 'San Martín', 'img/sanmartin.png', 30, 28963258, 28963258),
(30234575, 12, 'Natalia', 'Viola', 'img/viola.png', 17, 30234575, 30234575),
(30745789, 13, 'Cristina', 'Gómez', 'img/gomez.png', 12, 30745789, 30745789),
(32451088, 4, 'Daniel ', 'Segnini', 'img/segnini.png', 16, 32451088, 32451088),
(33585723, 14, 'Nancy', 'Dunjó', 'img/dunjo.png', 10, 33585723, 33585723),
(35464889, 15, 'Diana', 'Cozzani', 'img/cozzani.png', 13, 35464889, 35464889);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `curso` varchar(10) DEFAULT NULL,
  `especialidad` text DEFAULT NULL,
  `fk_materia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `curso`, `especialidad`, `fk_materia`) VALUES
(1, '1ro', '-', 59),
(2, '1ro', '-', 9),
(3, '1ro', '-', 44),
(4, '1ro', '-', 8),
(5, '1ro', '-', 10),
(6, '1ro', '-', 26),
(7, '1ro', '-', 14),
(8, '1ro', '-', 15),
(9, '1ro', '-', 68),
(10, '1ro', '-', 40),
(11, '1ro', '-', 52),
(12, '2do', '-', 44),
(13, '2do', '-', 59),
(14, '2do', '-', 24),
(15, '2do', '-', 7),
(16, '2do', '-', 14),
(17, '2do', '-', 25),
(18, '2do', '-', 11),
(19, '2do', '-', 23),
(20, '2do', '-', 26),
(21, '2do', '-', 15),
(22, '2do', '-', 41),
(23, '2do', '-', 53),
(24, '2do', '-', 69),
(25, '3ro', '-', 44),
(26, '3ro', '-', 59),
(27, '3ro', '-', 24),
(28, '3ro', '-', 7),
(29, '3ro', '-', 14),
(30, '3ro', '-', 25),
(31, '3ro', '-', 11),
(32, '3ro', '-', 23),
(33, '3ro', '-', 26),
(34, '3ro', '-', 15),
(35, '3ro', '-', 70),
(36, '3ro', '-', 54),
(37, '3ro', '-', 42),
(38, '4to', 'Programación', 44),
(39, '4to', 'Programación', 43),
(40, '4to', 'Programación', 24),
(41, '4to', 'Programación', 61),
(42, '4to', 'Programación', 25),
(43, '4to', 'Programación', 60),
(44, '4to', 'Programación', 23),
(45, '4to', 'Programación', 26),
(46, '4to', 'Programación', 15),
(47, '4to', 'Programación', 71),
(48, '4to', 'Programación', 36),
(49, '4to', 'Programación', 34),
(50, '4to', 'Programación', 38),
(51, '4to', 'Programación', 29),
(52, '5to', 'Programación', 2),
(53, '5to', 'Programación', 43),
(54, '5to', 'Programación', 24),
(55, '5to', 'Programación', 51),
(56, '5to', 'Programación', 25),
(57, '5to', 'Programación', 47),
(58, '5to', 'Programación', 66),
(59, '5to', 'Programación', 26),
(60, '5to', 'Programación', 15),
(61, '5to', 'Programación', 6),
(62, '5to', 'Programación', 36),
(63, '5to', 'Programación', 37),
(64, '5to', 'Programación', 31),
(65, '5to', 'Programación', 30),
(66, '6to', 'Programación', 67),
(67, '6to', 'Programación', 33),
(68, '6to', 'Programación', 32),
(69, '6to', 'Programación', 36),
(70, '6to', 'Programación', 35),
(71, '6to', 'Programación', 63),
(72, '6to', 'Programación', 62),
(73, '6to', 'Programación', 5),
(74, '6to', 'Programación', 20),
(75, '6to', 'Programación', 15),
(76, '6to', 'Programación', 43),
(77, '6to', 'Programación', 12),
(78, '6to', 'Programación', 26),
(79, '6to', 'Programación', 46),
(80, '7mo', 'Programación', 19),
(81, '7mo', 'Programación', 48),
(82, '7mo', 'Programación', 58),
(83, '7mo', 'Programación', 56),
(84, '7mo', 'Programación', 18),
(85, '7mo', 'Programación', 50),
(86, '7mo', 'Programación', 55),
(87, '4to', 'Electrónica', 44),
(88, '4to', 'Electrónica', 43),
(89, '4to', 'Electrónica', 24),
(90, '4to', 'Electrónica', 61),
(91, '4to', 'Electrónica', 25),
(92, '4to', 'Electrónica', 60),
(93, '4to', 'Electrónica', 23),
(94, '4to', 'Electrónica', 26),
(95, '4to', 'Electrónica', 15),
(96, '4to', 'Electrónica', 71),
(97, '4to', 'Electrónica', 1),
(98, '4to', 'Electrónica', 3),
(99, '4to', 'Electrónica', 4),
(100, '4to', 'Electrónica', 49),
(101, '4to', 'Electrónica', 22),
(102, '5to', 'Electrónica', 44),
(103, '5to', 'Electrónica', 43),
(104, '5to', 'Electrónica', 24),
(105, '5to', 'Electrónica', 61),
(106, '5to', 'Electrónica', 25),
(107, '5to', 'Electrónica', 39),
(108, '5to', 'Electrónica', 13),
(109, '5to', 'Electrónica', 26),
(110, '5to', 'Electrónica', 15),
(111, '5to', 'Electrónica', 1),
(112, '5to', 'Electrónica', 3),
(113, '5to', 'Electrónica', 4),
(114, '5to', 'Electrónica', 49),
(115, '6to', 'Electrónica', 1),
(116, '6to', 'Electrónica', 4),
(117, '6to', 'Electrónica', 3),
(118, '6to', 'Electrónica', 49),
(119, '6to', 'Electrónica', 39),
(120, '6to', 'Electrónica', 27),
(121, '6to', 'Electrónica', 64),
(122, '6to', 'Electrónica', 26),
(123, '6to', 'Electrónica', 45),
(124, '6to', 'Electrónica', 43),
(125, '6to', 'Electrónica', 12),
(126, '6to', 'Electrónica', 20),
(127, '6to', 'Electrónica', 15),
(128, '6to', 'Electrónica', 5),
(129, '7mo', 'Electrónica', 16),
(130, '7mo', 'Electrónica', 64),
(131, '7mo', 'Electrónica', 65),
(132, '7mo', 'Electrónica', 27),
(133, '7mo', 'Electrónica', 17),
(134, '7mo', 'Electrónica', 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosalumno`
--

CREATE TABLE `datosalumno` (
  `ID` int(11) NOT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `DNI` varchar(10) DEFAULT NULL,
  `Domicilio` varchar(50) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datostutor`
--

CREATE TABLE `datostutor` (
  `ID` int(11) NOT NULL,
  `CorreoElectronico` varchar(50) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `DNI` varchar(10) DEFAULT NULL,
  `Domicilio` varchar(50) DEFAULT NULL,
  `FechaNacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Programación', 'La carrera de programación se centra en la adquisición de habilidades para desarrollar software y aplicaciones informáticas.'),
(2, 'Electrónica', 'La carrera de electrónica se enfoca en la electrónica y la tecnología de circuitos electrónicos.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagen` int(11) NOT NULL,
  `nombre_img` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagen`, `nombre_img`, `imagen`) VALUES
(1, 'carrusel', './img/slider/img1.jpg'),
(2, 'carrusel', './img/slider/img2.jpg'),
(3, 'carrusel', './img/slider/img3.jpg'),
(4, 'carrusel4', './img/slider/carrusel1.jpg'),
(5, 'programación', '/img/programación.jpg'),
(6, 'electronica', '/img/electronica.jpg'),
(7, 'historia', './img/historia.jpg'),
(8, 'noticia1', '/img/noticia1.jpg'),
(9, 'noticia2', '/img/noticia2.jpg'),
(10, 'noticia3', '/img/noticia3.jpg'),
(11, 'noticia4', '/img/noticia4.jpg'),
(12, 'centrouniversitario', '/img/centrouniversitario.jpg'),
(13, 'polideportivo', '/img/polideportivo.jpg'),
(14, 'sinFoto', '/img/sinFoto.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `materia` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `materia`) VALUES
(1, 'Análisis de los modelos circuitales'),
(2, 'Análisis matemático'),
(3, 'Aplicaciones de electronica analogica'),
(4, 'Aplicaciones de electrónica digital'),
(5, 'Arte'),
(6, 'Bases de datos'),
(7, 'Biología'),
(8, 'Ciencias naturales'),
(9, 'Ciencias sociales'),
(10, 'Construcción ciudadana'),
(11, 'Construcción de la ciudadanía'),
(12, 'Derecho del trabajo'),
(13, 'Diseños asistidos y simulación electrónica'),
(14, 'Educación artística'),
(15, 'Educación física'),
(16, 'Electrónica aplicada'),
(17, 'Emprendimientos, productivo y desarrollo Local'),
(18, 'Emprendimientos, producción y desarrollo local'),
(19, 'Evaluación de proyectos'),
(20, 'Filosofía'),
(21, 'Fisicoquímica'),
(22, 'Fundamentos de los modelos circuitales'),
(23, 'Física'),
(24, 'Geografía'),
(25, 'Historia'),
(26, 'Inglés'),
(27, 'Instalaciones industriales'),
(28, 'Instalaciones y máquinas eléctricas'),
(29, 'Laboratorio de aplicaciones'),
(30, 'Laboratorio de base de datos'),
(31, 'Laboratorio de diseño web HTML5, CSS y JavaScript'),
(32, 'Laboratorio de diseño web dinámico'),
(33, 'Laboratorio de diseño web estático'),
(34, 'Laboratorio de hardware'),
(35, 'Laboratorio de procesos industriales'),
(36, 'Laboratorio de programación'),
(37, 'Laboratorio de redes informáticas'),
(38, 'Laboratorio de sistemas operativos'),
(39, 'Lenguajes electrónicos'),
(40, 'Lenguajes tecnológicos I'),
(41, 'Lenguajes tecnológicos II'),
(42, 'Lenguajes tecnológicos III'),
(43, 'Literatura'),
(44, 'Matemática'),
(45, 'Matemática aplicada'),
(46, 'Matemática discreta'),
(47, 'Modelos y sistemas'),
(48, 'Modelos y sistemas II'),
(49, 'Montaje de proyectos electrónicos'),
(50, 'Organización y métodos'),
(51, 'Política y ciudadanía'),
(52, 'Procedimientos técnicos I'),
(53, 'Procedimientos técnicos II'),
(54, 'Procedimientos técnicos III'),
(55, 'Proyecto de desarrollo de software para plataforma'),
(56, 'Proyecto de implementación de sitios web dinámicos'),
(57, 'Proyecto y diseño electrónico'),
(58, 'Proyecto, diseño e implementación de sistemas comp'),
(59, 'Prácticas del lenguaje'),
(60, 'Química'),
(61, 'Salud y adolescencia'),
(62, 'Seguridad informática'),
(63, 'Sistema de gestión y autogestión'),
(64, 'Sistemas de Comunicaciones'),
(65, 'Sistemas de control'),
(66, 'Sistemas digitales I'),
(67, 'Sistemas digitales II'),
(68, 'Sistemas tecnológicos I'),
(69, 'Sistemas tecnológicos II'),
(70, 'Sistemas tecnológicos III'),
(71, 'Tecnología electrónica'),
(72, 'Tecnologías electrónicas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedades`
--

CREATE TABLE `novedades` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `texto` varchar(5000) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `proyecto` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` text NOT NULL,
  `id_cursos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_aut`
--

CREATE TABLE `rol_aut` (
  `id` int(11) NOT NULL,
  `rol` varchar(255) DEFAULT NULL,
  `rol_desc` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol_aut`
--

INSERT INTO `rol_aut` (`id`, `rol`, `rol_desc`) VALUES
(20742899, 'Director', 'Es el encargado y responsable de la institución.  Desempeña un papel multifacético que abarca desde el liderazgo y la visión hasta la gestión de recursos y la mejora del rendimiento estudiantil. Su objetivo principal es crear un entorno propicio para el aprendizaje y el desarrollo de los estudiantes, tanto académico como personal. '),
(22986305, 'Vicedirectora', 'Es la segunda encargada y responsable de la institución.'),
(23742589, 'Prosecretaria', 'Es la segunda encargada de las tareas administrativas de la institución.'),
(25467567, 'Jefa de preceptoria', 'Es la encargada de la organización de las y los preceptores.'),
(25948201, 'Encargado en jefe y apoyo informatico', 'Es el ecargado del mantenimiento y correcto funcionamiento de los equipos y servidores.'),
(26828345, 'Jefe de área', 'Supervisa los talleres y coordina pasantías.'),
(28657429, 'Jefe de departamento técnico profesional', 'Coordina las materias y actividades que se realizan en los talleres y laboratorios.'),
(28896785, 'Jefe de departamentos de educación física', 'Es el encargado y responsable de las actividades y profesores del área.'),
(28923159, 'Vicedirector', 'Es el segundo encargado y responsable de la institución.'),
(28963258, 'Padrino', 'Brinda su apoyo a la institución. apadrinada, ayudandola en todo lo que esté a su alcance'),
(30234575, 'Jefa de departamento de ciencias exactas y naturales', 'Es la encargada y responsable de la coordinación y realización de las materias de dicha área.'),
(30745789, 'Secretaria', 'Es la encargada de las tareas administrativas de la institución.'),
(32451088, 'Vicedirector', 'Es el segundo encargado y responsable de la institución.'),
(33585723, 'Jefa de departamento de comunicaciones', 'Planificar y  coordinar proyectos entre distintas areas y/o departamentos ( interdiciplinarios e interdepartamentales)  supervisar y acompañar a los docentes.'),
(35464889, 'Jefa de departamento de ciencias sociales', 'Es la encargada de la coordinación y organización de las materias y profesores del área de sociales.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id` int(11) NOT NULL,
  `especialidad_id` int(11) DEFAULT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` text DEFAULT NULL,
  `orden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id`, `especialidad_id`, `titulo`, `contenido`, `orden`) VALUES
(1, 1, 'Objetivos', 'Los estudiantes aprenden a programar en diferentes lenguajes de programación, como Javascript, Python, C++, entre otros. Se enfatiza la resolución de problemas, la lógica de programación y el diseño de algoritmos.', 1),
(2, 1, 'Perfil académico del egresado', 'Los graduados están preparados para trabajar como programadores, desarrolladores de software o en roles relacionados en la industria de la tecnología.', 2),
(3, 1, 'Estructura del plan de estudio', 'El plan de estudio se divide en módulos que cubren desde los fundamentos de la programación hasta técnicas avanzadas de desarrollo de software.', 3),
(4, 1, 'Diseño y organización curricular', 'El currículum está diseñado para proporcionar una base sólida en programación y adaptarse a las tecnologías emergentes.', 4),
(5, 1, 'Contenidos mínimos', 'Incluye algoritmos, estructuras de datos, paradigmas de programación, desarrollo web, bases de datos, y desarrollo de aplicaciones móviles.', 5),
(6, 1, 'Proyectos realizados', 'Los estudiantes participan en proyectos prácticos que incluyen el desarrollo de aplicaciones web, móviles y de escritorio.', 6),
(7, 2, 'Objetivos', 'Los estudiantes aprenden a diseñar, construir y reparar dispositivos electrónicos, circuitos y sistemas. Se enseñan conceptos de electrónica analógica y digital, así como también sistemas de control y automatización.', 1),
(8, 2, 'Perfil académico del egresado', 'Los graduados están capacitados para trabajar en la industria de la electrónica, en mantenimiento de equipos electrónicos, desarrollo de circuitos y sistemas, o como técnicos de reparación de dispositivos electrónicos.', 2),
(9, 2, 'Estructura del plan de estudio', 'El plan de estudio cubre desde los fundamentos de la electricidad y electrónica hasta sistemas avanzados de control y automatización.', 3),
(10, 2, 'Diseño y organización curricular', 'El currículum está organizado para proporcionar una base sólida en teoría y práctica de la electrónica.', 4),
(11, 2, 'Contenidos mínimos', 'Incluye circuitos eléctricos, electrónica digital y analógica, microcontroladores, sistemas embebidos, y automatización industrial.', 5),
(12, 2, 'Proyectos realizados', 'Los estudiantes participan en proyectos prácticos que incluyen el diseño y construcción de circuitos, sistemas de control, y dispositivos electrónicos.', 6),
(13, 2, 'test', 'test', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trayectoria`
--

CREATE TABLE `trayectoria` (
  `id` int(11) NOT NULL,
  `trayectoria_laboral` varchar(1000) DEFAULT NULL,
  `trayectoria_educativa` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trayectoria`
--

INSERT INTO `trayectoria` (`id`, `trayectoria_laboral`, `trayectoria_educativa`) VALUES
(20742899, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '),
(22986305, 'Comencé a trabajar en Misiones como Profesora de distintas materias del nivel secundario en el año 2.003, posteriormente tuve la oportunidad de trabajar como Preceptora en secundario y como Profesora de Nivel superior en la carrera de Profesorado en Ciencias Políticas, del Instituto Superior Antonio Ruiz de Montoya (I.S.A.R.M.).\nLuego me mudé a Bs. As. Y me desempeñé reiteradas veces como profesora y preceptora en Escuelas Técnicas del Distrito de Vicente López.\nActualmente Preceptora en E.E.S.T.N°3  de Vte. López y Vicedirectora en E.E.S.T.N°1 de Vte López.\n', 'Educación Primaria: egresada de la Escuela Provincial Primaria N°663 de la Localidad de Garupá, Ciudad de Posadas- Misiones\nEducación Secundaria: Título de Bachiller y Auxiliar Técnico en Administración de Empresas, egresada en 1.998, del Bachillerato C.O.L. Polivalente N°1, de la Ciudad de Posadas- Misiones.\nEducación Terciaria: Título de Profesora de Filosofía y Ciencias de la Educación, egresada en el 2.003, del Instituto Superior Antonio Ruiz de Montoya ( I.S.A.R.M.), de la Ciudad de Posadas – Misiones.\nPost-título: Actualización académica en Formación Ética y Ciudadana, año 2.004, del Instituto Superior Antonio Ruiz de Montoya ( I.S.A.R.M.), de la Ciudad de Posadas – Misiones.\nEducación Universitaria: Título de Licenciada en Educación, con Orientación en Gestión Institucional, 2.008, de la Universidad Nacional de Quilmes – Bs. As. \n'),
(23742589, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '),
(25467567, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '),
(25948201, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '),
(26828345, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '),
(28657429, 'Diseñador Mecánico en empresa de fabricación y montaje de ascensores, diseño de partes mecánicas y mecanismos de accionamiento y actualización de planos y generación de documentación técnica. Empresa de fabricación de transportadores industriales, diseño de máquinas y desarrollo de mecanismos de accionamiento y generación de documentación técnica para fabricación y montaje. Emprendedor Independiente, instalaciones eléctricas y automatización industrial.', 'Técnico en Electrónica, Técnico Superior en Automatización y Robótica y Profesor en Disciplinas Industriales recibido del Instituto Nacional Superior del Profesorado Técnico. Cursando Licenciatura en Gestión de Sistemas de Automatización y Robótica en la Universidad Nacional de Lomas de Zamora.'),
(28896785, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '),
(28923159, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '),
(28963258, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '),
(30234575, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '),
(30745789, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '),
(32451088, 'Antes de finalizar la escuela secundaria, tuve la oportunidad de trabajar como pasante a medio tiempo en una fábrica especializada en la producción de antenas para telecomunicaciones. Durante mi tiempo en esta empresa, desempeñé diversas tareas, incluyendo el armado, calibración y control de antenas. Esta experiencia temprana me brindó una sólida base en aspectos técnicos claves y habilidades prácticas en el campo de las telecomunicaciones.\n\nTras finalizar mi educación secundaria, continué mi desarrollo profesional en la fabricación de intercomunicadores y equipos de audio industriales en una empresa del mismo sector.', 'Electrotécnico con Orientación en Electrónica en la Escuela Técnica Raggio en 2005.\nCursé Ingeniería en Sistemas de 2006 a 2012, aunque quedó incompleta.\nInicié el Tramo de Formación Pedagógica para Profesionales, Técnicos de Nivel Superior y de Nivel Medio en 2008 y lo acredité en 2009.\nCursé y completé la Tecnicatura Superior en Automatización y Robótica, así como el Profesorado en Disciplinas Industriales en el I.N.S.P.T. U.T.N. del 2016 al 2019.\nActualmente, me encuentro desarrollando mi tesis para obtener la Licenciatura en Tecnología Educativa en la U.T.N. F.R.G.P.\n'),
(33585723, 'Trayectoria laboral en la escuela, 17 años (2006). Como Jefa de dpto: 5 años (2018).', 'Centro cultural en el idioma inglés durante 12 años, certificación cambridge: first certificate. Maestra de inglés y  Profesora de inglés oficial (4 años). Capacitaciones y Cursos sobre: Gestión curricular, estrategias sobre enseñanza y aprendizaje, capacidades tecnológicas (UTN).'),
(35464889, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `autoridades`
--
ALTER TABLE `autoridades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trayectoria` (`id_trayectoria`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_materia` (`fk_materia`);

--
-- Indices de la tabla `datosalumno`
--
ALTER TABLE `datosalumno`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `datostutor`
--
ALTER TABLE `datostutor`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `novedades`
--
ALTER TABLE `novedades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cursos` (`id_cursos`);

--
-- Indices de la tabla `rol_aut`
--
ALTER TABLE `rol_aut`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `especialidad_id` (`especialidad_id`);

--
-- Indices de la tabla `trayectoria`
--
ALTER TABLE `trayectoria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `autoridades`
--
ALTER TABLE `autoridades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35464890;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT de la tabla `datosalumno`
--
ALTER TABLE `datosalumno`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datostutor`
--
ALTER TABLE `datostutor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `novedades`
--
ALTER TABLE `novedades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `autoridades`
--
ALTER TABLE `autoridades`
  ADD CONSTRAINT `autoridades_ibfk_1` FOREIGN KEY (`id_trayectoria`) REFERENCES `trayectoria` (`id`),
  ADD CONSTRAINT `autoridades_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `rol_aut` (`id`);

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursos_ibfk_1` FOREIGN KEY (`fk_materia`) REFERENCES `materias` (`id_materia`);

--
-- Filtros para la tabla `datostutor`
--
ALTER TABLE `datostutor`
  ADD CONSTRAINT `datostutor_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `datosalumno` (`ID`);

--
-- Filtros para la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD CONSTRAINT `secciones_ibfk_1` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidades` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
