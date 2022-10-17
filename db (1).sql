-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2022 a las 15:14:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familia`
--

CREATE TABLE `familia` (
  `id` int(11) NOT NULL,
  `familia` varchar(250) NOT NULL,
  `informacion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `familia`
--

INSERT INTO `familia` (`id`, `familia`, `informacion`) VALUES
(1, 'Percusion', 'Uan instrumentos de percusión es uun tipo de inastrumento musical que suenas al ser golpeado, agitado o raspado por una baqueta, mazo o palillo incluyendo batidores adjuntos o cerrados o sonajeros golpeados, raspados o frotados con la mano o golpeado'),
(2, 'Cuerda', 'Los instrumentos de cuerda o cordófonos son instrumentos musicales que producen sonidos por medio de las vibraciones de una o más cuerdas, usualmente amplificadas por medio de una caja de resonancia. Estas cuerdas están tensadas entre 2 puntos del in'),
(3, 'Vientos', 'El viento es el flujo del aire a gran escala en la atmósfera terrestre. En la atmósfera, movimiento en masa del aire de acuerdo con las diferencias de presión atmosférica. Günter D. Roth lo define como «la compensación de las diferencias de presión a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instrumento`
--

CREATE TABLE `instrumento` (
  `id` int(11) NOT NULL,
  `instrumento` varchar(250) NOT NULL,
  `precio` bigint(25) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `instrumento`
--

INSERT INTO `instrumento` (`id`, `instrumento`, `precio`, `descripcion`, `id_fk`) VALUES
(1, 'Ukelele De Madera Soprano', 3000, 'Cuerpo construido en madera Sapele. • Nombre científico madera: Entandrophragma cylindricum. • Diapasón construido en madera Okume. • Puente construido en madera de Arce. Terminación madera. • Funda tipo OXFORD 420D Ultra Resistente. • Dimensiones: A', 2),
(2, 'Bajo YAMAHA Trbx 305 BL', 155000, ' Cuerpo de caoba maciza Mástil de 5 piezas de arce/caoba Anchura de cejuela reducida: 38 mm Previo activo con 2 bandas de ecualización más selector Performance EQ con 5 ecualizaciones predeterminadas.', 2),
(3, 'Flauta Traversa Parque', 55000, 'Una boquilla diseñada para guiar a los principiantes hacia la utilización adecuada de la respiración, teclas con dimensiones y ángulos cuidadosamente considerados para un equilibrio óptimo y una fácil jugabilidad.', 3),
(4, 'Saxo Alto Parquer', 142000, '-Material: Latón laqueado -Llave de fa# agudo -Zapatillas de cuero con resonador -Campana y cuerpo labrado -Incluye estuche, boquilla, caña, grasa y paño de limpieza', 3),
(5, 'Cajon Peruano Flamenco', 20000, ' Medidas: - Profundidad: 30cm. - Ancho: 31cm. - Alto: 46cm.', 1),
(6, 'Orion Platillos Solo Pro Prp10sp Splash 10 Pulgadas', 11000, '10 Pulgadas - Volumen: Medium - Sustain Medium/Largo - Control de Frecuencia: Regular/Oriental - Composición: 93% Cobre - 7% Estaño', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', '$2a$12$Qu30g/RXfu60n.NzoBqj.uwQUSPbr4GGPUT8ueXdhIl4VV/.mxGm6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `instrumento`
--
ALTER TABLE `instrumento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`id_fk`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `familia`
--
ALTER TABLE `familia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `instrumento`
--
ALTER TABLE `instrumento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
