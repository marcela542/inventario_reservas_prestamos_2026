-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2026 a las 18:26:13
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
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_nombre` varchar(50) NOT NULL,
  `area_descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`area_id`, `area_nombre`, `area_descripcion`) VALUES
(1, 'Cámara', 'Area de cámaras '),
(2, 'Iluminación', 'Área de iluminación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_destino`
--

CREATE TABLE `area_destino` (
  `id_area_destino` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `area_destino`
--

INSERT INTO `area_destino` (`id_area_destino`, `nombre`, `descripcion`) VALUES
(1, 'Casa', 'Destino personal o particular.'),
(2, 'SENA_Fotografía', 'Área de destino relacionada con fotografía en SENA.'),
(4, 'SENA2', 'Segunda área de destino en SENA.'),
(5, 'SENA3', 'preuba333'),
(6, 'SENA4', ''),
(7, 'dieu/%4', ''),
(8, 'ausyag$%', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carga_masiva`
--

CREATE TABLE `carga_masiva` (
  `carga_id` int(11) NOT NULL,
  `carga_fecha_inicio` date NOT NULL,
  `carga_descripcion` text NOT NULL,
  `carga_nombre_archivo` varchar(255) NOT NULL,
  `estado_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `carga_errores` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carga_masiva`
--

INSERT INTO `carga_masiva` (`carga_id`, `carga_fecha_inicio`, `carga_descripcion`, `carga_nombre_archivo`, `estado_id`, `usu_id`, `carga_errores`) VALUES
(1, '2025-06-21', 'Se carga el archivo plantilla_usuarios (1).csv', 'plantilla_usuarios (1).csv', 1, 9, NULL),
(2, '2025-06-25', 'Errores en la carga', 'plantilla_usuarios (18).csv', 2, 1, 'Fila incompleta para usuario: ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `cate_id` int(11) NOT NULL,
  `cate_nombre` varchar(50) NOT NULL,
  `cate_descripcion` text NOT NULL,
  `telem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`cate_id`, `cate_nombre`, `cate_descripcion`, `telem_id`) VALUES
(1, 'Soporte', 'Categoría relacionada con servicios o estructuras de apoyo técnico', 1),
(2, 'Iluminación fría', 'Equipos de iluminación con tonalidades blancas o azuladas', 1),
(3, 'Iluminación cálida', 'Equipos de iluminación con tonalidades amarillas o anaranjadas', 1),
(4, 'Video cámara', 'Dispositivos para capturar video en diversos formatos', 1),
(5, 'Cámaras', 'Dispositivos fotográficos para capturar imágenes estáticas                                                ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_modulos_permisos`
--

CREATE TABLE `detalle_modulos_permisos` (
  `id_detalle` int(11) NOT NULL,
  `id_permiso` int(11) NOT NULL,
  `id_modulo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_prestamo`
--

CREATE TABLE `detalle_prestamo` (
  `id_detalle_prestamo` int(11) NOT NULL,
  `id_prestamo` int(11) NOT NULL,
  `elem_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_prestamo`
--

INSERT INTO `detalle_prestamo` (`id_detalle_prestamo`, `id_prestamo`, `elem_id`) VALUES
(1, 2, 88),
(2, 3, 131),
(3, 3, 132),
(4, 3, 134),
(5, 4, 88),
(6, 5, 131),
(7, 6, 179),
(8, 7, 88),
(9, 7, 131),
(10, 7, 181),
(11, 8, 109),
(12, 8, 173),
(13, 9, 110),
(14, 9, 170),
(15, 11, 41),
(16, 11, 42),
(17, 12, 92),
(18, 12, 73),
(19, 12, 74),
(20, 12, 75),
(21, 13, 171),
(22, 14, 117),
(23, 14, 118),
(24, 14, 185),
(25, 15, 141),
(26, 15, 147),
(27, 15, 248),
(28, 15, 251);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_reserva`
--

CREATE TABLE `detalle_reserva` (
  `id_detalle_reserva` int(11) NOT NULL,
  `id_reserva` int(11) NOT NULL,
  `elemen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_reserva`
--

INSERT INTO `detalle_reserva` (`id_detalle_reserva`, `id_reserva`, `elemen_id`) VALUES
(1, 1, 110),
(2, 1, 170),
(3, 2, 109),
(4, 2, 173),
(5, 3, 88),
(6, 3, 131),
(7, 3, 181),
(8, 4, 179),
(9, 6, 41),
(10, 6, 42),
(11, 7, 41),
(12, 7, 42),
(13, 8, 171),
(14, 9, 179),
(15, 9, 202),
(16, 9, 247);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos_inventario`
--

CREATE TABLE `elementos_inventario` (
  `elem_id` int(11) NOT NULL,
  `elem_placa` varchar(100) DEFAULT NULL,
  `elem_serie` varchar(100) DEFAULT NULL,
  `elem_codigo` varchar(50) NOT NULL,
  `elem_nombre` varchar(100) NOT NULL,
  `elem_telem_id` int(11) NOT NULL,
  `elem_area_id` int(11) DEFAULT NULL,
  `elem_cate_id` int(11) DEFAULT NULL,
  `elem_cantidad` int(11) DEFAULT NULL,
  `elem_unidad_id` int(11) DEFAULT NULL,
  `elem_modelo` varchar(100) DEFAULT NULL,
  `elem_marca_id` int(11) DEFAULT NULL,
  `elem_estado_id` int(11) NOT NULL,
  `recomendaciones` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `elementos_inventario`
--

INSERT INTO `elementos_inventario` (`elem_id`, `elem_placa`, `elem_serie`, `elem_codigo`, `elem_nombre`, `elem_telem_id`, `elem_area_id`, `elem_cate_id`, `elem_cantidad`, `elem_unidad_id`, `elem_modelo`, `elem_marca_id`, `elem_estado_id`, `recomendaciones`) VALUES
(41, '922917451', '922917451', 'COD455', 'TRIPODE DE CABEZA FLUIDA', 1, 1, 1, NULL, NULL, NULL, NULL, 1, 'LLEVAR LA PLATINA  - FALTA MANIVELA'),
(42, '92293399', '92293396', 'COD2', 'TRIPODE DE CABEZA FLUIDA', 1, 1, 1, 1, NULL, 'P', 0, 1, 'LLEVAR LA PLATINA -  FALTA MANIVELAOP'),
(43, '922919601', '922919603', 'COD1', 'TRIPODE DE CABEZA FLUIDA', 1, 1, 1, 1, NULL, NULL, 0, 1, 'LLEVAR LA PLATINA - COMPLETO'),
(44, '922917452', '922917452', 'COD4', 'TRIPODE DE CABEZA FLUIDA', 1, 1, 1, 1, NULL, NULL, 5, 1, 'LLEVAR LA PLATINA  - COMPLETO'),
(45, '107685076877', '107685076', 'COD5878', 'TRIPODE DE CABEZA FLUIDA', 1, 1, 1, 1, NULL, NULL, NULL, 1, 'LLEVAR LA PLATINA - COMPLETO'),
(46, '92293395', '92293395', 'COD6778', 'TRIPODE DE CABEZA FLUIDA', 1, 1, 1, 1, NULL, 'mode95', 2, 1, 'LLEVAR LA PLATINA - FALTA TORINILLO PARA LA PLATINA'),
(47, '922917453', '922917453', 'COD7', 'TRIPODE DE CABEZA FLUIDA', 1, 1, 1, 1, NULL, NULL, 0, 1, 'LLEVAR LA PLATINA - FALTA PLATINA'),
(48, '92293397', '92293397', 'COD9', 'TRIPODE DE CABEZA FLUIDA', 1, 1, 1, 1, NULL, NULL, 0, 1, 'LLEVAR LA PLATINA - COMPLETO'),
(49, '100189225', '100189225', 'COD10', 'TRIPODE DE CABEZA FLUIDA', 1, 1, 1, 1, NULL, NULL, 0, 1, 'LLEVAR LA PLATINA - SIN CABEZAL (DEVOLVER)'),
(50, '100189226', '100189226', 'COD11', 'TRIPODE DE CABEZA FLUIDA', 1, 1, 1, 1, NULL, NULL, 0, 1, 'LLEVAR LA PLATINA - FALTA SEGURO PARA PLATINA'),
(72, '922919586-1', '922919586-1', 'COD12', 'LUZ LED BICROMATICA', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + FALTA MARIPOSA - FALTA CABLE DE PODER'),
(73, '922919586-2', '922919586-2', 'COD13', 'LUZ LED BICROMATICA', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + FALTA DIFUSOR'),
(74, '922919586-3', '922919586-3', 'COD14', 'LUZ LED BICROMATICA', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + COMPLETO'),
(75, '922919586-4', '922919586-4', 'COD15', 'LUZ LED BICROMATICA', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + FALTA MARIPOSA'),
(76, '922919587-1', '922919587-1', 'COD16', 'LUZ LED BICROMATICA', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + COMPLETO'),
(77, '922919587-2', '922919587-2', 'COD17', 'LUZ LED BICROMATICA', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + COMPLETO'),
(78, '922919587-3', '922919587-3', 'COD18', 'LUZ LED BICROMATICA', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + FALTA CABLE'),
(79, '922919587-4', '922919587-4', 'COD19', 'LUZ LED BICROMATICA', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + COMPLETO'),
(80, '92293941-1', '92293941-1', 'COD20', 'SCOUP FLUORECENTE', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + FALTAN 5 BOMBILLOS - FALTA MANILA'),
(81, '92293941-2', '92293941-2', 'COD21', 'SCOUP FLUORECENTE', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + FALTAN 4 BOMBILLOS'),
(82, '92293941-3', '92293941-3', 'COD22', 'SCOUP FLUORECENTE', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + FALTAN 4 BOMBILLOS'),
(83, '92293941-4', '92293941-4', 'COD23', 'SCOUP FLUORECENTE', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + FALLAN 2 PLAFONES'),
(84, NULL, NULL, 'PRUEBA-084', 'Elemento Actualizado Test', 1, 1, 1, 5, 2, 'Model-2025', NULL, 1, 'Actualización de prueba para elem_id 84'),
(85, '922917412-2', '922917412-2', 'COD25', 'SCOUP FLUORECENTE', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + FALTA 1 BOMBILLO'),
(86, '922917413-1', '922917413-1', 'COD26', 'SCOUP FLUORECENTE', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + COMPLETO'),
(87, '922917413-2', '922917413-2', 'COD27', 'SCOUP FLUORECENTE', 1, 2, 2, 1, NULL, NULL, 0, 1, 'REVISAR MALETIN CON CARGADOR Y LLEVAR TRIPODE DE LUZ + FALTAN 3 BOMBILLOS - DISFUSOR'),
(88, '1', '1', 'COD28', 'SCOUP HALOGENAS', 1, 2, 3, 1, NULL, NULL, 0, 1, 'LLEVAR TRIPODE DE LUZ CÁLIDA Y CABLE DE PODER + COMPLETO'),
(89, '2', '2', 'COD29', 'SCOUP HALOGENAS', 1, 2, 3, 1, NULL, NULL, 0, 1, 'LLEVAR TRIPODE DE LUZ CÁLIDA Y CABLE DE PODER + COMPLETO'),
(90, '3', '3', 'COD30', 'SCOUP HALOGENAS', 1, 2, 3, 1, NULL, NULL, 0, 1, 'LLEVAR TRIPODE DE LUZ CÁLIDA Y CABLE DE PODER + NO SE PUEDE PROBAR (DIFERENTE TOMA)'),
(91, '922917402', '922917402', 'COD31', 'LUZ LED BLANCAS', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR TRIPODE DE LUZ CÁLIDA Y CABLE DE PODER + COMPLETA'),
(92, '922917403', '922917403', 'COD32', 'LUZ LED BLANCAS', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER Y TRIPODE DE LUZ + COMPLETA'),
(93, '922919588-1', '922919588-1', 'COD33', 'CARRY LIGHT', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER Y TRIPODE DE LUZ + COMPLETA'),
(94, '922919589-1', '922919589-1', 'COD34', 'CARRY LIGHT', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER Y TRIPODE DE LUZ + COMPLETA'),
(95, '922919589-2', '922919589-2', 'COD35', 'CARRY LIGHT', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER Y TRIPODE DE LUZ + FALTA 1 BOMBILLO'),
(96, '922919589-3', '922919589-3', 'COD36', 'CARRY LIGHT', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER Y TRIPODE DE LUZ + COMPLETA'),
(97, '922919590-1', '922919590-1', 'COD37', 'CARRY LIGHT', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER Y TRIPODE DE LUZ + FALTA 1 BOMBILLO'),
(98, '922919590-2', '922919590-2', 'COD38', 'CARRY LIGHT', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER Y TRIPODE DE LUZ + COMPLETA'),
(99, '922919590-3', '922919590-3', 'COD39', 'CARRY LIGHT', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER Y TRIPODE DE LUZ + COMPLETO'),
(100, '922919588-2', '922919588-2', 'COD40', 'CARRY LIGHT', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER Y TRIPODE DE LUZ + COMPLETO'),
(101, '922919588-3', '922919588-3', 'COD41', 'CARRY LIGHT', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER Y TRIPODE DE LUZ + COMPLETO'),
(105, '4', '4', 'COD42', 'LOWEL KINO', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER Y TRIPODE DE LUZ + COMPLETA'),
(106, '922917415', '922917415', 'COD43', 'PAR LED', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER + COMPLETA'),
(107, '922917416', '922917416', 'COD44', 'PAR LED', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER + COMPLETA'),
(108, '922917417', '922917417', 'COD45', 'PAR LED', 1, 2, 2, 1, NULL, NULL, 0, 1, 'LLEVAR CABLE DE PODER + COMPLETA'),
(109, '922917404', '922917404', 'COD46', 'BASE/SOPORTE', 1, 1, 1, 1, NULL, NULL, 0, 1, 'REVISAR EL CLAMP + FALTA MANIVELA'),
(110, '922919598', '922919598', 'COD47', 'BASE/SOPORTE', 1, 1, 1, 1, NULL, NULL, 0, 1, 'REVISAR EL CLAMP + FALTA MANIVELA'),
(111, '922919599', '922919599', 'COD48', 'BASE/SOPORTE', 1, 1, 1, 1, NULL, NULL, 0, 1, 'REVISAR EL CLAMP + COMPLETA'),
(112, '922919600', '922919600', 'COD49', 'BASE/SOPORTE', 1, 1, 1, 1, NULL, NULL, 0, 1, 'REVISAR EL CLAMP + COMPLETA'),
(113, '9229191', '9229191', 'COD50', 'LUZ HMI', 1, 2, 2, 1, NULL, NULL, 0, 1, 'DEBE LLEVAR REGULADOR + COMPLETA'),
(114, '9229192', '9229192', 'COD51', 'LUZ HMI', 1, 2, 2, 1, NULL, NULL, 0, 1, 'DEBE LLEVAR REGULADOR + FALLA DEL BALASTRO'),
(115, '9229193', '9229193', 'COD52', 'LUZ HMI', 1, 2, 2, 1, NULL, NULL, 0, 1, 'DEBE LLEVAR REGULADOR + FALTA BOMBILLO'),
(116, '9229194', '9229194', 'COD53', 'LUZ HMI', 1, 2, 2, 1, NULL, NULL, 0, 1, 'DEBE LLEVAR REGULADOR + COMPLETA'),
(117, '92293286', '92293286', 'COD54', 'SMITH-VICTOR', 1, 2, 3, 1, NULL, NULL, 0, 2, 'LLEVAR TRIPODE DE LUZ CÁLIDA Y CABLE DE PODER + FALTA BOMBILLO'),
(118, '92293287', '92293287', 'COD55', 'SMITH-VICTOR', 1, 2, 3, 1, NULL, NULL, 0, 2, 'LLEVAR TRIPODE DE LUZ CÁLIDA Y CABLE DE PODER + FALTA BOMBILLO'),
(119, '1D', '1D', 'COD56', 'DOLLY', 1, 1, 1, 1, NULL, NULL, 0, 1, 'COMPLETO'),
(120, '2D', '2D', 'COD57', 'DOLLY', 1, 1, 1, 1, NULL, NULL, 0, 1, 'COMPLETO'),
(121, '3D', '3D', 'COD58', 'DOLLY', 1, 1, 1, 1, NULL, NULL, 0, 1, 'COMPLETO'),
(122, '4D', '4D', 'COD59', 'DOLLY', 1, 1, 1, 1, NULL, NULL, NULL, 1, 'COMPLETO'),
(123, '922919535', '922919535', 'COD60', 'CÁMARA VIDEO PANASONIC', 1, 1, 4, 1, NULL, NULL, 0, 1, 'RECUERDE LLEVAR SD + COMPLETO'),
(124, '922919536', '922919536', 'COD61', 'CÁMARA VIDEO PANASONIC', 1, 1, 4, 1, NULL, NULL, 0, 1, 'RECUERDE LLEVAR SD + COMPLETO'),
(125, '922919537', '922919537', 'COD62', 'CÁMARA VIDEO PANASONIC', 1, 1, 4, 1, NULL, NULL, 0, 1, 'RECUERDE LLEVAR SD + COMPLETO'),
(126, '922917450', '922917450', 'COD63', 'CÁMARA VIDEO SONY', 1, 1, 4, 1, NULL, NULL, 0, 1, 'RECUERDE LLEVAR SD + COMPLETO'),
(127, '922919611', '922919611', 'COD64', 'CÁMARA VIDEO SONY', 1, 1, 4, 1, NULL, NULL, NULL, 1, 'RECUERDE LLEVAR SD COMPLETO'),
(128, '922919539', '922919539', 'COD65', 'CÁMARA VIDEO SONY', 1, 1, 4, 1, NULL, NULL, 0, 1, 'RECUERDE LLEVAR SD + COMPLETO'),
(129, '922919540', '922919540', 'COD66', 'CÁMARA VIDEO SONY', 1, 1, 4, 1, NULL, NULL, 0, 1, 'RECUERDE LLEVAR SD + COMPLETO'),
(130, '922919542', '922919542', 'COD67', 'CÁMARA VIDEO SONY', 1, 1, 4, 1, NULL, NULL, 0, 1, 'RECUERDE LLEVAR SD + COMPLETO'),
(131, '922917094', '922917094', 'COD68', 'CÁMARA FOTO CANON', 1, 1, 5, 1, NULL, NULL, 0, 1, 'RECUERDE LLEVAR SD + FALTA CARGADOR'),
(132, '922917093', '922917093', 'COD69', 'CÁMARA FOTO CANON', 1, 1, 5, 1, NULL, NULL, 0, 1, 'RECUERDE LLEVAR SD + FALTA CARGADOR'),
(133, '922917096', '922917096', 'COD70', 'CÁMARA FOTO NIKON', 1, 1, 5, 1, NULL, NULL, 0, 1, 'RECUERDE LLEVAR SD + COMPLETO'),
(134, '92294487', '92294487', 'COD71', 'CÁMARA FOTO CANON', 1, 1, 5, 1, NULL, NULL, 2, 1, 'RECUERDE LLEVAR SD XS'),
(135, '92294488', '92294488', 'COD72', 'CÁMARA FOTO CANON', 1, 1, 5, 1, NULL, NULL, 0, 1, 'RECUERDE LLEVAR SD + FALTA LENTE'),
(136, '92294489', '92294489', 'COD73', 'CÁMARA FOTO CANON', 1, 1, 5, 1, NULL, NULL, 0, 1, 'RECUERDE LLEVAR SD + XS'),
(137, '1076144983', '1076144983', 'COD74', 'CÁMARA VIDEO SONY', 1, 1, 4, 1, NULL, NULL, 0, 1, 'DEVOLUCION'),
(138, '93112759', '93112759', 'COD75', 'CÁMARA VIDEO SONY', 1, 1, 4, 1, NULL, NULL, 0, 1, 'DEVOLUCION'),
(139, '92293393', '92293393', 'COD76', 'CÁMARA VIDEO DVCAM', 1, 1, 4, 1, NULL, NULL, 0, 1, 'DEVOLUCION'),
(140, '92293392', '92293392', 'COD77', 'CÁMARA VIDEO DVCAM', 1, 1, 4, 1, NULL, NULL, 0, 1, 'COMPLETA proyecto'),
(141, '92293394', '92293394', 'COD78', 'CÁMARA VIDEO DVCAM', 1, 1, 4, 1, NULL, NULL, 0, 2, 'DEVOLUCION'),
(142, '92297900', '92297900', 'COD79', 'CÁMARA VIDEO PANASONIC', 1, 1, 4, 1, NULL, NULL, 0, 1, 'DEVOLUCION'),
(143, '92297898', '92297898', 'COD80', 'CÁMARA VIDEO PANASONIC', 1, 1, 4, 1, NULL, NULL, 0, 1, 'DEVOLUCION'),
(144, '92297899', '92297899', 'COD81', 'CÁMARA VIDEO PANASONIC', 1, 1, 4, 1, NULL, NULL, 0, 1, 'DEVOLUCION'),
(145, '100189107', '100189107', 'COD82', 'CÁMARA VIDEO PANASONIC (HANDICAM)', 1, 1, 4, 1, NULL, NULL, 0, 1, 'DEVOLUCION'),
(146, '100189081', '100189081', 'COD83', 'CÁMARA VIDEO PANASONIC (HANDICAM)', 1, 1, 4, 1, NULL, NULL, 0, 1, 'DEVOLUCION'),
(147, '100120741', '100120741', 'COD84', 'CÁMARA VIDEO BETACAM', 1, 1, 4, 1, NULL, NULL, 0, 2, 'COMPLETO proyecto'),
(148, '1076182658', '1076182658', 'COD85', 'CÁMARA VIDEO DVCAM', 1, 1, 4, 1, NULL, NULL, 0, 1, 'COMPLETO proyecto'),
(168, '9229339144222', 'S532426-000000', 'CD-67777', 'TRIPODE DE CABEZA FLUIDA', 1, 1, 4, 1, NULL, 'mod3036', 2, 1, 'prueba'),
(170, NULL, NULL, 'COD3388888', 'CÁMARA ASUS', 2, NULL, 5, 6, 1, NULL, NULL, 1, 'Prueba'),
(171, NULL, NULL, 'COD21111', 'CÁMARA SONY', 2, NULL, 2, 8, 1, NULL, NULL, 2, 'prueba2'),
(172, 'PLQ-4756', '92293396333', 'CD-6888', 'TRIPODE DE CABEZA FLUIDA', 1, 2, 5, 1, NULL, NULL, 3, 1, 'prueb'),
(173, 'PLQ111111', 'S532426-08239', 'COD278', 'CÁMARA VI', 1, 1, 3, 1, NULL, NULL, 3, 1, 'PRUEBS3'),
(174, '9229339922', '107618265833', 'COD85333', 'TRIPODE DE CABEZA FLUIDA', 1, 2, 1, 1, NULL, NULL, NULL, 1, NULL),
(179, NULL, NULL, 'CD-6111', '', 2, NULL, 3, 5, 2, NULL, NULL, 4, NULL),
(181, 'PLQ-4888899', '922922222', 'CD-66666', 'Camara Canon', 1, 1, 5, 1, NULL, 'ASUS', 0, 1, '¿?'),
(185, '10761826588989', '92293396898888', 'COD8787777', 'TRIPODE DE CABEZA FLUIDA', 1, 2, 3, 1, NULL, NULL, 0, 2, NULL),
(186, '922933992222', '922933962222', 'COD222222', 'Camara Canon', 1, 1, 5, 1, NULL, NULL, 0, 1, NULL),
(187, NULL, NULL, 'CD-61111', 'CÁMARA VIDEO DVCAM', 2, NULL, 5, 1, 1, NULL, NULL, 1, NULL),
(188, NULL, NULL, 'COD2222', 'CÁMARA VIDEO DVCAM', 2, NULL, 5, 2, 2, NULL, NULL, 1, NULL),
(192, NULL, NULL, 'CD-6888899799', 'TRIPODE DE CABEZA FLUIDA', 2, NULL, 5, 1, 2, NULL, NULL, 1, NULL),
(200, NULL, NULL, '9', 'CÁMARA VIDEO DVCAM', 2, NULL, 5, 90, 2, NULL, NULL, 1, '??'),
(202, NULL, NULL, 'CD-688898', 'Camara Canon', 2, NULL, 3, 4, 1, NULL, NULL, 4, NULL),
(210, '9229331122555', '10761826548484', 'COD677887875', 'TRIPODE DE CABEZA FLUIDA', 1, 2, 1, 1, NULL, 'ASUS', 7, 1, 'Prueba'),
(242, 'PLQ-477777', 'S532426-77777', 'CD-677777', 'CÁMARA VIDEO DVCAM', 1, 1, 3, 1, NULL, 'SAMSUNG8', 0, 1, 'prueba 1 3648 ()'),
(243, NULL, NULL, 'CD-11111', 'CÁMARA VIDEO DVCAM', 2, NULL, 3, 15, 1, NULL, NULL, 1, NULL),
(244, NULL, NULL, 'CD-68886', 'TRIPODE DE CABEZA FLUIDA', 2, NULL, 3, 5, 1, NULL, NULL, 1, '8'),
(245, 'PLQ-4756878', '922933968877', 'COD27777', 'TRIPODE DE CABEZA FLUIDA', 1, 1, 3, 1, NULL, 'ofj', 0, 1, 'prueba'),
(246, NULL, NULL, 'COD855555', 'TRIPODE DE CABEZA FLUIDA', 2, NULL, 3, 4, 1, NULL, NULL, 1, 'prueba\''),
(247, NULL, NULL, 'COD154544', 'CÁMARA VIDEO DVCAM', 2, NULL, 3, 4, 1, NULL, NULL, 4, 'prubas6565'),
(248, '92293399122222', '9229339612332333', 'CD-688833434324', 'CÁMARA VIDEO DVCAM', 1, 2, 2, 1, NULL, NULL, 8, 2, NULL),
(249, '10761826588777', '922933967777', 'CD-6888444', 'TRIPODE DE CABEZA FLUIDA', 1, 2, 3, 1, NULL, NULL, 0, 1, 'prueba de recomendaciones'),
(250, NULL, NULL, 'COD277778', 'TRIPODE', 2, NULL, 2, 10, 1, NULL, NULL, 1, 'prueba'),
(251, '1076182658111222111', '11107618265811', 'COD2112211', 'Camara Canon', 1, 2, 2, 1, NULL, 'prueba', 0, 2, 'prueba'),
(252, NULL, NULL, 'CD-688811111', 'CÁMARA VIDEO DVCAM', 2, NULL, 3, 2, 1, NULL, NULL, 1, 'pruea'),
(253, 'PLQ-475333', 'S52463536', '23767324632', 'Computador', 1, 1, 3, 1, NULL, NULL, 8, 1, NULL),
(254, 'PLQ-47567878', 'S8346544', 'COD2687', 'CÁMARA VIDEO DVCAM', 1, 2, 2, 1, NULL, NULL, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `estado_id` int(11) NOT NULL,
  `estado_nombre` varchar(50) NOT NULL,
  `estado_descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`estado_id`, `estado_nombre`, `estado_descripcion`) VALUES
(1, 'Activo', ''),
(2, 'Inactivo', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_carga_masiva`
--

CREATE TABLE `estados_carga_masiva` (
  `id_estado_carga` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados_carga_masiva`
--

INSERT INTO `estados_carga_masiva` (`id_estado_carga`, `nombre`, `descripcion`) VALUES
(1, 'Fallido', 'La carga masiva no se completó exitosamente debido a un error.'),
(2, 'Completado', 'La carga masiva se realizó correctamente sin inconvenientes.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_elementos`
--

CREATE TABLE `estado_elementos` (
  `id_estado_elementos` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_elementos`
--

INSERT INTO `estado_elementos` (`id_estado_elementos`, `nombre`, `descripcion`) VALUES
(1, 'Disponible', 'El elemento está disponible para su uso'),
(2, 'Prestado', 'El elemento ha sido prestado a un usuario'),
(3, 'Mantenimiento', 'El elemento está en proceso de mantenimiento'),
(4, 'En espera', 'El elemento está pendiente de disponibilidad o revisión'),
(5, 'Inhabilitado', 'El elemento está fuera de servicio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_prestamos`
--

CREATE TABLE `estado_prestamos` (
  `id_estado_prestamos` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_prestamos`
--

INSERT INTO `estado_prestamos` (`id_estado_prestamos`, `nombre`, `descripcion`) VALUES
(1, 'Activo', 'El prestamo se encuentra en estado activo.'),
(2, 'Cerrado', 'El prestamo se encuentra en estado cerrado.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_reserva`
--

CREATE TABLE `estado_reserva` (
  `id_estado_reservas` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estado_reserva`
--

INSERT INTO `estado_reserva` (`id_estado_reservas`, `nombre`, `descripcion`) VALUES
(1, 'En espera', 'La reserva  se encuentra en estado en espera.'),
(2, 'Cerrada', 'La reserva  se encuentra en estado cerrada.'),
(3, 'Cancelada', 'La reserva se encuentra en estado cancelada.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `marca_id` int(11) NOT NULL,
  `marca_nombre` varchar(50) NOT NULL,
  `marca_descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`marca_id`, `marca_nombre`, `marca_descripcion`) VALUES
(0, 'Generic', ''),
(2, 'HP', 'Marca de computadores y periféricos para oficina y hogar.\r\n'),
(3, 'Lenovo', 'Equipos portátiles y de escritorio de uso empresarial.\r\n'),
(5, 'Acer', 'Computadores asequibles para uso académico y generales.'),
(7, 'Epson', 'Impresoras, proyectores y escáneres de calidad.'),
(8, 'ASUS (Vivobook)', 'pruebas-rfr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `modulo_id` int(11) NOT NULL,
  `modulo_nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`modulo_id`, `modulo_nombre`) VALUES
(1, 'usuarios'),
(2, 'elementos'),
(3, 'prestamos'),
(4, 'reservas'),
(5, 'configuraciones'),
(6, 'cargas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos_elementos`
--

CREATE TABLE `movimientos_elementos` (
  `id` int(11) NOT NULL,
  `fecha_movimiento` date NOT NULL,
  `usuario` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `categoria_elm` int(11) NOT NULL,
  `movimiento` varchar(50) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `movimientos_elementos`
--

INSERT INTO `movimientos_elementos` (`id`, `fecha_movimiento`, `usuario`, `cantidad`, `categoria_elm`, `movimiento`, `descripcion`) VALUES
(1, '2025-07-11', 1, 2, 5, 'Entrada', 'Entrada manual de elemento (ID: 156, Nombre: TRIPODE DE CABEZA FLUIDA, Cantidad: 2)'),
(2, '2025-07-12', 1, 5, 3, 'Entrada', 'Entrada manual de elemento (ID: 170, Nombre: CÁMARA VIDEO DVCAM, Cantidad: 5)'),
(3, '2025-07-12', 1, 1, 5, 'Entrada', 'Entrada manual de elemento (ID: 170, Nombre: CÁMARA, Cantidad: 1)'),
(4, '2025-07-12', 1, 4, 2, 'Entrada', 'Entrada manual de elemento (ID: 171, Nombre: CÁMARA DE CINE, Cantidad: 4)'),
(5, '2025-07-16', 3, 1, 5, 'Salida', 'Salida de elemento no devolutivo (ID: 170, Nombre: CÁMARA ASUS, Cantidad: 1)'),
(6, '2025-07-24', 1, 89, 5, 'Entrada', 'Entrada manual de elemento (ID: 200, Nombre: =, Cantidad: 89)'),
(7, '2025-07-25', 1, 5, 3, 'Entrada', 'Entrada manual de elemento (ID: 240, Nombre: CÁMARA VIDEO DVCAM, Cantidad: 5)'),
(8, '2025-07-25', 1, 10, 3, 'Entrada', 'Entrada manual de elemento (ID: 243, Nombre: CÁMARA VIDEO DVCAM, Cantidad: 10)'),
(9, '2025-08-04', 1, 5, 2, 'Entrada', 'Entrada manual de elemento (ID: 250, Nombre: TRIPODE, Cantidad: 5)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permisos` int(11) NOT NULL,
  `nombre_permiso` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permisos`, `nombre_permiso`) VALUES
(1, 'consultar'),
(2, 'editar'),
(3, 'registrar'),
(4, 'inhabilitar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos_inventario`
--

CREATE TABLE `prestamos_inventario` (
  `id_prestamo` int(11) NOT NULL,
  `cantidad_elemento` int(11) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `estado_prestamo_id` int(11) NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `fecha_devolucion` date NOT NULL,
  `observaciones` text DEFAULT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prestamos_inventario`
--

INSERT INTO `prestamos_inventario` (`id_prestamo`, `cantidad_elemento`, `area_id`, `estado_prestamo_id`, `fecha_solicitud`, `fecha_devolucion`, `observaciones`, `usu_id`) VALUES
(1, 1, 2, 2, '2025-07-11', '2025-07-11', '', 4),
(2, 1, 4, 2, '2025-07-12', '2025-07-11', '', 4),
(3, 1, 2, 2, '2025-07-12', '2025-07-11', '', 4),
(4, 1, 2, 2, '2025-07-12', '2025-07-11', '', 4),
(5, 1, 4, 2, '2025-07-16', '2025-07-16', 'prueba=129879768)=(()==(=)', 3),
(6, 1, 4, 2, '2025-07-24', '2025-07-24', ' Se crea préstamo a partir de  la reserva por favor editar el prestamo con los datos correctos.', 7),
(7, 1, 2, 2, '2025-07-24', '2025-07-24', ' Se crea préstamo a partir de  la reserva por favor editar el prestamo con los datos correctos.', 13),
(8, 1, 4, 2, '2025-07-24', '2025-07-16', ' Se crea préstamo a partir de  la reserva por favor editar el prestamo con los datos correctos.', 3),
(9, 1, 4, 2, '2025-07-24', '2025-07-17', ' Se crea préstamo a partir de  la reserva por favor editar el prestamo con los datos correctos.', 3),
(10, 1, 1, 2, '2025-07-31', '2025-07-26', 'Reserva de prueba con PHPUnit Se crea préstamo a partir de  la reserva por favor editar el prestamo con los datos correctos.', 1),
(11, 1, 1, 2, '2025-07-31', '2025-07-26', 'Reserva de prueba con PHPUnit Se crea préstamo a partir de  la reserva por favor editar el prestamo con los datos correctos.', 1),
(12, 1, 2, 2, '2025-09-02', '2025-09-03', '', 13),
(13, 1, 5, 1, '2025-09-03', '2025-07-31', ' Se crea préstamo a partir de  la reserva por favor editar el prestamo con los datos correctos.', 3),
(14, 1, 2, 1, '2026-03-21', '2026-03-25', '', 2),
(15, 1, 5, 1, '2026-04-26', '2026-04-30', '', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas_inventario`
--

CREATE TABLE `reservas_inventario` (
  `reserva_id` int(11) NOT NULL,
  `reserva_identificacion_solicitante` int(11) NOT NULL,
  `reserva_area_id` int(11) NOT NULL,
  `reserva_estado_id` int(11) NOT NULL,
  `reserva_fecha_solicitud` varchar(150) DEFAULT NULL,
  `reserva_fecha_entrega` varchar(150) DEFAULT NULL,
  `reserva_fecha_devolucion` varchar(150) DEFAULT NULL,
  `reserva_observaciones` text DEFAULT NULL,
  `reserva_fecha_inicio` varchar(150) DEFAULT NULL,
  `reserva_fecha_fin` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas_inventario`
--

INSERT INTO `reservas_inventario` (`reserva_id`, `reserva_identificacion_solicitante`, `reserva_area_id`, `reserva_estado_id`, `reserva_fecha_solicitud`, `reserva_fecha_entrega`, `reserva_fecha_devolucion`, `reserva_observaciones`, `reserva_fecha_inicio`, `reserva_fecha_fin`) VALUES
(1, 3, 4, 2, '2025-07-16', '2025-07-17', '2025-07-18', '', '11:01', '14:01'),
(2, 3, 4, 2, '2025-07-16', '2025-07-16', '2025-07-18', '', '11:03', '14:02'),
(3, 13, 2, 2, '2025-07-24', '2025-07-24', '2025-07-25', '', '10:46', '00:48'),
(4, 7, 4, 2, '2025-07-24', '2025-07-24', '2025-07-24', '', '13:27', '08:01'),
(5, 1, 1, 2, '2025-07-26', '2025-07-26', '2025-07-27', 'Reserva de prueba con PHPUnit', '08:00:00', '10:00:00'),
(6, 1, 1, 2, '2025-07-26', '2025-07-26', '2025-07-27', 'Reserva de prueba con PHPUnit', '08:00:00', '10:00:00'),
(7, 1, 1, 1, '2025-07-26', '2025-07-26', '2025-07-27', 'Reserva de prueba con PHPUnit', '08:00:00', '10:00:00'),
(8, 3, 5, 2, '2025-07-31', '2025-07-31', '2025-08-01', '', '16:15', '18:15'),
(9, 7, 5, 1, '2026-04-26', '2026-04-26', '2026-04-30', '', '11:37', '13:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL,
  `rol_nombre` varchar(50) NOT NULL,
  `estado_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_id`, `rol_nombre`, `estado_id`) VALUES
(1, 'Administrador', 1),
(2, 'Instructor', 1),
(3, 'Almacenista', 1),
(4, 'Aprendiz', 1),
(5, 'Coordinador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_permisos`
--

CREATE TABLE `rol_permisos` (
  `id_rol_permisos` int(11) NOT NULL,
  `id_permisos` int(11) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `modulo_id` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol_permisos`
--

INSERT INTO `rol_permisos` (`id_rol_permisos`, `id_permisos`, `rol_id`, `modulo_id`, `activo`) VALUES
(5, 2, 5, 4, 1),
(6, 2, 5, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `tipo_docu_id` int(11) NOT NULL,
  `tipo_docu_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`tipo_docu_id`, `tipo_docu_nombre`) VALUES
(1, 'CC - Cédula de Ciudadanía'),
(2, 'TI - Tarjeta de Identidad'),
(3, 'RC - Registro Civil'),
(4, 'CE - Cédula de Extranjería'),
(6, 'NIT - Número de Identificación Tributaria'),
(7, 'PEP - Permiso Especial de Permanencia'),
(8, 'DNI - Documento Nacional de Identidad'),
(9, 'NUIP - Número Único de Identificación Personal'),
(10, 'PS - Permiso por Protección Temporal (PPT)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_elemento`
--

CREATE TABLE `tipo_elemento` (
  `telem_id` int(11) NOT NULL,
  `telem_nombre` varchar(50) NOT NULL,
  `telem_descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_elemento`
--

INSERT INTO `tipo_elemento` (`telem_id`, `telem_nombre`, `telem_descripcion`) VALUES
(1, 'Devolutivo', 'Elemento que debe ser devuelto después de su uso'),
(2, 'No devolutivo', 'Elemento que no requiere devolución después de su uso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_medida`
--

CREATE TABLE `unidad_medida` (
  `id_unidad_medidas` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `unidad_medida`
--

INSERT INTO `unidad_medida` (`id_unidad_medidas`, `nombre`, `descripcion`) VALUES
(1, 'Unidad', 'NA'),
(2, 'Litros', 'NA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_nombre` varchar(50) NOT NULL,
  `usu_apellido` varchar(50) NOT NULL,
  `usu_telefono` varchar(15) NOT NULL,
  `usu_clave` varchar(100) NOT NULL,
  `usu_numero_docu` varchar(20) NOT NULL,
  `usu_email` varchar(80) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `tipo_docu_id` int(11) NOT NULL,
  `estado_id` int(11) NOT NULL DEFAULT 1,
  `usu_direccion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `usu_nombre`, `usu_apellido`, `usu_telefono`, `usu_clave`, `usu_numero_docu`, `usu_email`, `rol_id`, `tipo_docu_id`, `estado_id`, `usu_direccion`) VALUES
(1, 'Laura ', 'González Pérez', '3201234567', '1', '1', 'lauragonzalez@gmail.com', 3, 1, 1, 'Calle 14 c 34 - 58'),
(2, 'María', 'González', '3109876543', 'clave123', '9876543210', 'maria.gonzalez@gmail.com', 1, 1, 1, 'Avenida 8 #25-47'),
(3, 'Carlos', 'Ramírez', '3151234567', 'clave456', '5678901234', 'carlos.ramirez@gmail.com', 1, 1, 1, 'Carrera 12 #50-11'),
(4, 'Ana', 'Martínez', '3176543210', 'clave789', '4567890123', 'ana.martinez@gmail.com', 1, 1, 2, 'Diagonal 20 #12-03'),
(5, 'Luis', 'Fernández', '3117896542', 'clave321', '2345678901', 'luis.fernandez@email.com', 1, 1, 2, 'Transversal 5 #68-22'),
(6, 'Sofía', 'López', '3198765432', 'clave654', '3456789012', 'sofia.lopez@email.com', 1, 1, 2, 'Calle 45 #89-15'),
(7, 'Carlos ', 'Rodríguez Mejia', '3196543210', '1', '123456789', 'carlosrodriguez@gmail.com', 5, 6, 1, 'Calle 14C34 58'),
(8, 'Nicols Andres', 'Fernandez', '3103683021', '4434', '545454545', 'nicola.fernandez@gmail.com', 1, 1, 1, 'Calle 14C34 58'),
(9, 'Cristian ', 'Sanchez ', '3127857237', '1', '1005707457', 'Cristiancamilos324@gmail.com', 1, 1, 1, 'av 7a Oeste #22 a 45'),
(10, '321423432', '5443ffdf', 'rsgdfvs', 'clave789', 'dsgdfgd', 'pescado@gmail.com', 1, 1, 1, '4567890123'),
(11, 'hector', 'escobar', '3103689878', 'ejemploeee1', '1107101512', 'meme@gmail.com', 3, 1, 1, '332'),
(12, 'nick', 'Escobar', '3123456789', 'ejemplo12', '111074879', 'meme@hotmail.com', 1, 8, 1, '4calle 14 c 34 58'),
(13, 'Marcela', 'Perdomo Yela', '3117896542', 'marce4656', '1114620566', 'luis.fernan@gmail.com', 2, 1, 1, 'Diagonal 20 #12-03'),
(14, 'marcela', 'Fernández', '3117896542', 'fwerwe45', '1005707458', 'luis.fernan@gmail.com', 2, 4, 1, 'Transversal 5 #68-25'),
(15, 'lina marcela', 'acosta', '3159788233', '34526marcela', '2334453543', 'luis.fernan@gmail.com', 4, 1, 2, 'Avenida 8 #25-47');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indices de la tabla `area_destino`
--
ALTER TABLE `area_destino`
  ADD PRIMARY KEY (`id_area_destino`);

--
-- Indices de la tabla `carga_masiva`
--
ALTER TABLE `carga_masiva`
  ADD PRIMARY KEY (`carga_id`),
  ADD KEY `estado_id` (`estado_id`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cate_id`),
  ADD KEY `telem_id` (`telem_id`);

--
-- Indices de la tabla `detalle_modulos_permisos`
--
ALTER TABLE `detalle_modulos_permisos`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `id_permiso` (`id_permiso`),
  ADD KEY `id_modulo` (`id_modulo`);

--
-- Indices de la tabla `detalle_prestamo`
--
ALTER TABLE `detalle_prestamo`
  ADD PRIMARY KEY (`id_detalle_prestamo`),
  ADD KEY `fk_prestamo` (`id_prestamo`),
  ADD KEY `fk_elemento` (`elem_id`);

--
-- Indices de la tabla `detalle_reserva`
--
ALTER TABLE `detalle_reserva`
  ADD PRIMARY KEY (`id_detalle_reserva`),
  ADD KEY `fk_detalle_reserva` (`id_reserva`),
  ADD KEY `fk_detalle_elemento` (`elemen_id`);

--
-- Indices de la tabla `elementos_inventario`
--
ALTER TABLE `elementos_inventario`
  ADD PRIMARY KEY (`elem_id`),
  ADD UNIQUE KEY `elem_codigo` (`elem_codigo`),
  ADD UNIQUE KEY `elem_placa` (`elem_placa`),
  ADD UNIQUE KEY `elem_serie` (`elem_serie`),
  ADD KEY `fk_tipo_elemento` (`elem_telem_id`),
  ADD KEY `fk_area` (`elem_area_id`),
  ADD KEY `fk_categoria` (`elem_cate_id`),
  ADD KEY `fk_unidad` (`elem_unidad_id`),
  ADD KEY `fk_marca` (`elem_marca_id`),
  ADD KEY `fk_estado` (`elem_estado_id`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`estado_id`);

--
-- Indices de la tabla `estados_carga_masiva`
--
ALTER TABLE `estados_carga_masiva`
  ADD PRIMARY KEY (`id_estado_carga`);

--
-- Indices de la tabla `estado_elementos`
--
ALTER TABLE `estado_elementos`
  ADD PRIMARY KEY (`id_estado_elementos`);

--
-- Indices de la tabla `estado_prestamos`
--
ALTER TABLE `estado_prestamos`
  ADD PRIMARY KEY (`id_estado_prestamos`);

--
-- Indices de la tabla `estado_reserva`
--
ALTER TABLE `estado_reserva`
  ADD PRIMARY KEY (`id_estado_reservas`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`marca_id`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`modulo_id`);

--
-- Indices de la tabla `movimientos_elementos`
--
ALTER TABLE `movimientos_elementos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `fk_movimientos_categoria` (`categoria_elm`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permisos`);

--
-- Indices de la tabla `prestamos_inventario`
--
ALTER TABLE `prestamos_inventario`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `fk_estado_prestamo_inventario` (`estado_prestamo_id`),
  ADD KEY `fk_area_inventario` (`area_id`),
  ADD KEY `fk_prestamo_usuario` (`usu_id`);

--
-- Indices de la tabla `reservas_inventario`
--
ALTER TABLE `reservas_inventario`
  ADD PRIMARY KEY (`reserva_id`),
  ADD KEY `fk_estado_reserva` (`reserva_estado_id`),
  ADD KEY `fk_reserva_area` (`reserva_area_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_id`),
  ADD KEY `estado_id` (`estado_id`);

--
-- Indices de la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  ADD PRIMARY KEY (`id_rol_permisos`),
  ADD KEY `id_permisos` (`id_permisos`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `modulo_id` (`modulo_id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`tipo_docu_id`);

--
-- Indices de la tabla `tipo_elemento`
--
ALTER TABLE `tipo_elemento`
  ADD PRIMARY KEY (`telem_id`);

--
-- Indices de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  ADD PRIMARY KEY (`id_unidad_medidas`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `tipo_docu_id` (`tipo_docu_id`),
  ADD KEY `estado_id` (`estado_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `area_destino`
--
ALTER TABLE `area_destino`
  MODIFY `id_area_destino` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `carga_masiva`
--
ALTER TABLE `carga_masiva`
  MODIFY `carga_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detalle_modulos_permisos`
--
ALTER TABLE `detalle_modulos_permisos`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalle_prestamo`
--
ALTER TABLE `detalle_prestamo`
  MODIFY `id_detalle_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `detalle_reserva`
--
ALTER TABLE `detalle_reserva`
  MODIFY `id_detalle_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `elementos_inventario`
--
ALTER TABLE `elementos_inventario`
  MODIFY `elem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `estado_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estados_carga_masiva`
--
ALTER TABLE `estados_carga_masiva`
  MODIFY `id_estado_carga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_elementos`
--
ALTER TABLE `estado_elementos`
  MODIFY `id_estado_elementos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estado_prestamos`
--
ALTER TABLE `estado_prestamos`
  MODIFY `id_estado_prestamos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado_reserva`
--
ALTER TABLE `estado_reserva`
  MODIFY `id_estado_reservas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `marca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `modulo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `movimientos_elementos`
--
ALTER TABLE `movimientos_elementos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permisos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `prestamos_inventario`
--
ALTER TABLE `prestamos_inventario`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `reservas_inventario`
--
ALTER TABLE `reservas_inventario`
  MODIFY `reserva_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  MODIFY `id_rol_permisos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `tipo_docu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipo_elemento`
--
ALTER TABLE `tipo_elemento`
  MODIFY `telem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `unidad_medida`
--
ALTER TABLE `unidad_medida`
  MODIFY `id_unidad_medidas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carga_masiva`
--
ALTER TABLE `carga_masiva`
  ADD CONSTRAINT `carga_masiva_ibfk_1` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`estado_id`),
  ADD CONSTRAINT `carga_masiva_ibfk_2` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usu_id`);

--
-- Filtros para la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`telem_id`) REFERENCES `tipo_elemento` (`telem_id`);

--
-- Filtros para la tabla `detalle_modulos_permisos`
--
ALTER TABLE `detalle_modulos_permisos`
  ADD CONSTRAINT `detalle_modulos_permisos_ibfk_1` FOREIGN KEY (`id_permiso`) REFERENCES `permisos` (`id_permisos`),
  ADD CONSTRAINT `detalle_modulos_permisos_ibfk_2` FOREIGN KEY (`id_modulo`) REFERENCES `modulos` (`modulo_id`);

--
-- Filtros para la tabla `detalle_prestamo`
--
ALTER TABLE `detalle_prestamo`
  ADD CONSTRAINT `fk_elemento` FOREIGN KEY (`elem_id`) REFERENCES `elementos_inventario` (`elem_id`),
  ADD CONSTRAINT `fk_prestamo` FOREIGN KEY (`id_prestamo`) REFERENCES `prestamos_inventario` (`id_prestamo`);

--
-- Filtros para la tabla `detalle_reserva`
--
ALTER TABLE `detalle_reserva`
  ADD CONSTRAINT `fk_detalle_elemento` FOREIGN KEY (`elemen_id`) REFERENCES `elementos_inventario` (`elem_id`),
  ADD CONSTRAINT `fk_detalle_reserva` FOREIGN KEY (`id_reserva`) REFERENCES `reservas_inventario` (`reserva_id`);

--
-- Filtros para la tabla `elementos_inventario`
--
ALTER TABLE `elementos_inventario`
  ADD CONSTRAINT `fk_area` FOREIGN KEY (`elem_area_id`) REFERENCES `area` (`area_id`),
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`elem_cate_id`) REFERENCES `categoria` (`cate_id`),
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`elem_estado_id`) REFERENCES `estado_elementos` (`id_estado_elementos`),
  ADD CONSTRAINT `fk_marca` FOREIGN KEY (`elem_marca_id`) REFERENCES `marca` (`marca_id`),
  ADD CONSTRAINT `fk_tipo_elemento` FOREIGN KEY (`elem_telem_id`) REFERENCES `tipo_elemento` (`telem_id`),
  ADD CONSTRAINT `fk_unidad` FOREIGN KEY (`elem_unidad_id`) REFERENCES `unidad_medida` (`id_unidad_medidas`);

--
-- Filtros para la tabla `movimientos_elementos`
--
ALTER TABLE `movimientos_elementos`
  ADD CONSTRAINT `fk_movimientos_categoria` FOREIGN KEY (`categoria_elm`) REFERENCES `categoria` (`cate_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `movimientos_elementos_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usu_id`);

--
-- Filtros para la tabla `prestamos_inventario`
--
ALTER TABLE `prestamos_inventario`
  ADD CONSTRAINT `fk_area_destino` FOREIGN KEY (`area_id`) REFERENCES `area_destino` (`id_area_destino`),
  ADD CONSTRAINT `fk_estado_prestamo_inventario` FOREIGN KEY (`estado_prestamo_id`) REFERENCES `estado_prestamos` (`id_estado_prestamos`),
  ADD CONSTRAINT `fk_prestamo_usuario` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usu_id`);

--
-- Filtros para la tabla `reservas_inventario`
--
ALTER TABLE `reservas_inventario`
  ADD CONSTRAINT `fk_estado_reserva` FOREIGN KEY (`reserva_estado_id`) REFERENCES `estado_reserva` (`id_estado_reservas`),
  ADD CONSTRAINT `fk_reserva_area` FOREIGN KEY (`reserva_area_id`) REFERENCES `area_destino` (`id_area_destino`);

--
-- Filtros para la tabla `rol`
--
ALTER TABLE `rol`
  ADD CONSTRAINT `rol_ibfk_1` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`estado_id`);

--
-- Filtros para la tabla `rol_permisos`
--
ALTER TABLE `rol_permisos`
  ADD CONSTRAINT `rol_permisos_ibfk_1` FOREIGN KEY (`id_permisos`) REFERENCES `permisos` (`id_permisos`),
  ADD CONSTRAINT `rol_permisos_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`),
  ADD CONSTRAINT `rol_permisos_ibfk_3` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`modulo_id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`tipo_docu_id`) REFERENCES `tipo_documento` (`tipo_docu_id`),
  ADD CONSTRAINT `usuario_ibfk_3` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`estado_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
