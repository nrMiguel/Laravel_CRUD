-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 19:52:27
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `m06_uf2_practica_ls_shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `nombre`, `categoria`, `precio`, `descripcion`) VALUES
(1, ' Samsung Z Fold3 5G', 'Smartphone', 1800, 'es un movil que mola mazo porque se dobla y tienes 3 pantallas'),
(2, 'Samsung Z Flip3 5G', 'Smartphone', 1000, 'es un movil que también mola mazo pero solo tiene 1 pantalla, a parte tiene 5G y mata'),
(3, 'Samsung Galaxy S21+ 5G', 'Smartphone', 800, 'un galaxy de toda la vida pero más nuevo, una maravilla por lo que cuesta'),
(4, 'Samsung Galaxy S21 Ultra 5G', 'Smartphone', 900, 'como el s21 pero ultra, en plan sabes'),
(5, 'Gigabyte RTX 3080TI Gaming OC', 'Graficas', 2500, 'a tope minando ethers, o jugando al Hello Kitty online, eso ya es cosa tuya'),
(6, 'MSI RTX 3080TI Gaming X', 'Graficas', 2400, 'vas a ser el mejor jugando al Tivia'),
(7, 'PNY RTX 3080TI XLR8', 'Graficas', 2100, 'a ti esta marca te suena, porque a mi no'),
(8, 'Zotac RTX 3080TI', 'Graficas', 1800, 'a mi una vez se me quemó una grafica de esta marca pero no tiene porque pasarte a ti'),
(9, 'Asus ProArt', 'Monitores', 5600, 'es bastante asequible'),
(10, 'Asus Rog Swift', 'Monitores', 4100, 'ufffff, un poco cara no'),
(11, 'Acer Predator X35', 'Monitores', 2500, 'esta si es la buena pantalla que te deberias comprar'),
(12, '3Dconnexion SpaceMouse', 'Ratones', 420, 'me recuerda a una maquina de afeitar rotativa para pelar cabezas pero con estetica gamingg'),
(13, '3Dconnexion SpaceMouse Enterprise', 'Ratones', 400, 'yo creo que es una calculadora pero si me dices que es un raton pues me lo creo'),
(14, 'Steelseries Rival 650', 'Ratones', 160, 'al fin un raton de toda la vida pero con leds porque es gaming');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
