-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2014 a las 00:20:26
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `appigluc_fb_proddestacad`
--
CREATE DATABASE IF NOT EXISTS `appigluc_fb_proddestacad` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `appigluc_fb_proddestacad`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE IF NOT EXISTS `descripcion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `textdes` longtext NOT NULL,
  `textoacc` longtext NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `imagen4` varchar(100) NOT NULL,
  `date` datetime NOT NULL,
  `user` varchar(100) NOT NULL,
  `host` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `descripcion`
--

INSERT INTO `descripcion` (`id`, `textdes`, `textoacc`, `image1`, `image2`, `image3`, `imagen4`, `date`, `user`, `host`) VALUES
(4, '<p><strong>Cocina Montecarlo</strong></p>\n<ul>\n<li style="text-align: left;">tablero de acero inoxidable</li>\n<li style="text-align: left;">Parrillas fundidas</li>\n<li style="text-align: left;">Quemador Ultrar&aacute;pido triple corona</li>\n<li style="text-align: left;">panel de control touch \npad</li>\n<li style="text-align: left;">encendido electronico</li>\n<li style="text-align: left;">calienta Platos</li>\n<li style="text-align: left;">reloj Digital</li>\n</ul>\n<ul>\n<li style="text-align: left;">tablero de acero inoxidable</li>\n<li style="text-align: left;">Parrillas fundidas</li>\n<li style="text-align: left;">Quemador Ultrar&aacute;pido triple corona</li>\n<li style="text-align: left;">panel de control touch \npad</li>\n<li style="text-align: left;">encendido electronico</li>\n<li style="text-align: left;">calienta Platos</li>\n<li style="text-align: left;">reloj Digital</li>\n</ul>\n<ul>\n', '<p>Accesorios</p>\n<ul>\n<li> Bandeja</li>\n<li>Plancha Asadora</li>\n</ul>\n\n', 'producto1.jpg', 'a1.jpg', 'a2.jpg', 'a3.jpg', '2014-06-19 16:48:22', 'leon', '127.0.0.1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idu` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pass_v` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`idu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idu`, `user`, `pass`, `pass_v`, `name`, `email`) VALUES
(1, 'leon', '5C443B2003676FA5E8966030CE3A86EA', 'cd605ae4359b76c5958f817e1c766bad', 'ricardo', 'dragjohn@hotmail.com'),
(2, 'jay', 'BABA327D241746EE0829E7E88117D4D5', '730e5c80ff11545e5b054f5ffbd2dec1', 'eee', 'dre@ho.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
