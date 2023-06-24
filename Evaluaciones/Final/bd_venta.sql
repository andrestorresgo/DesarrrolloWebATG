-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2023 a las 13:32:04
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
-- Base de datos: `bd_venta`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `direccion`, `correo_electronico`, `telefono`, `imagen`) VALUES
(1, 'María López', 'Calle Principal 123', 'maria_lopez@sis256.com', '123456789', 'foto1.jpg'),
(2, 'Juan Rodríguez', 'Avenida Central 456', 'juan_rodriguez@sis256.com', '987654321', 'foto2.jpg'),
(3, 'Ana García', 'Plaza Mayor 789', 'ana_garcia@sis256.com', '456123789', 'foto3.jpg'),
(4, 'Pedro Martínez', 'Calle Secundaria 321', 'pedro_martinez@sis256.com', '789123456', 'foto4.jpg'),
(5, 'Laura Sánchez', 'Avenida Principal 654', 'laura_sanchez@sis256.com', '321987654', 'foto5.jpg'),
(6, 'Carlos Torres', 'Calle Central 987', 'carlos_torres@sis256.com', '654321789', 'foto6.jpg'),
(7, 'Sofía Ramírez', 'Plaza Secundaria 741', 'sofia_ramirez@sis256.com', '789654123', 'foto7.jpg'),
(8, 'Miguel Morales', 'Avenida Mayor 852', 'miguel_morales@sis256.com', '123789456', 'foto8.jpg'),
(9, 'Lucía Jiménez', 'Calle Principal 369', 'lucia_jimenez@sis256.com', '456321987', 'foto9.jpg'),
(10, 'Manuel Herrera', 'Avenida Central 159', 'manuel_herrera@sis256.com', '987456321', 'foto10.jpg'),
(11, 'Paula Castro', 'Plaza Mayor 753', 'paula_castro@sis256.com', '321789654', 'foto11.jpg'),
(12, 'Javier Ríos', 'Calle Secundaria 258', 'javier_rios@sis256.com', '654123789', 'foto12.jpg'),
(13, 'Valentina Ortega', 'Avenida Principal 852', 'valentina_ortega@sis256.com', '789456123', 'foto13.jpg'),
(14, 'Diego Mendoza', 'Calle Central 741', 'diego_mendoza@sis256.com', '123987654', 'foto14.jpg'),
(15, 'Martina Silva', 'Plaza Secundaria 369', 'martina_silva@sis256.com', '456789321', 'foto15.jpg'),
(16, 'Andrés Guzmán', 'Avenida Mayor 456', 'andres_guzman@sis256.com', '987321654', 'foto16.jpg'),
(17, 'Carolina Vargas', 'Calle Principal 963', 'carolina_vargas@sis256.com', '321654987', 'foto17.jpg'),
(18, 'Gabriel Paredes', 'Avenida Central 852', 'gabriel_paredes@sis256.com', '654789321', 'foto18.jpg'),
(19, 'Valeria Navarro', 'Plaza Mayor 741', 'valeria_navarro@sis256.com', '789321654', 'foto19.jpg'),
(20, 'Francisco Roldán', 'Calle Secundaria 852', 'francisco_roldan@sis256.com', '123654789', 'foto20.jpg'),
(21, 'Renata Fernández', 'Avenida Principal 741', 'renata_fernandez@sis256.com', '456321654', 'foto21.jpg'),
(22, 'Emilio Soto', 'Calle Central 963', 'emilio_soto@sis256.com', '987789321', 'foto22.jpg'),
(23, 'Camila Carvajal', 'Plaza Secundaria 852', 'camila_carvajal@sis256.com', '321321654', 'foto23.jpg'),
(24, 'Sebastián Araya', 'Avenida Mayor 741', 'sebastian_araya@sis256.com', '654654789', 'foto24.jpg'),
(25, 'Isabella Vidal', 'Calle Principal 852', 'isabella_vidal@sis256.com', '987987321', 'foto25.jpg'),
(26, 'Matías López', 'Avenida Central 369', 'matias_lopez@sis256.com', '321456987', NULL),
(27, 'Valentino Guzmán', 'Plaza Mayor 963', 'valentino_guzman@sis256.com', '654321456', NULL),
(28, 'Emma Ríos', 'Calle Secundaria 741', 'emma_rios@sis256.com', '987654321', NULL),
(29, 'Santiago Paredes', 'Avenida Principal 258', 'santiago_paredes@sis256.com', '456789654', NULL),
(30, 'Mía Herrera', 'Avenida Central 852', 'mia_herrera@sis256.com', '789123987', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_venta`
--

CREATE TABLE `detalles_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio_unitario` decimal(10,2) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `stock`, `imagen`) VALUES
(1, 'Refrigerador', 'Refrigerador de acero inoxidable', '1500.00', 10, '6496b208ea916.jpg'),
(2, 'Lavadora', 'Lavadora de carga frontal de 10 kg', '1200.00', 5, '6496b20b4804e.jpg'),
(3, 'Televisor', 'Televisor LED Full HD de 50 pulgadas', '800.00', 8, '6496b20d8aa6b.jpg'),
(4, 'Horno microondas', 'Horno microondas con grill', '250.00', 15, '6496b20fdb884.jpg'),
(5, 'Aspiradora', 'Aspiradora sin bolsa de alta potencia', '180.00', 12, '6496b21190923.jpg'),
(6, 'Licuadora', 'Licuadora de alta velocidad de 1000W', '90.00', 20, '6496b213ba40f.jpg'),
(7, 'Cafetera', 'Cafetera programable de acero inoxidable', '70.00', 18, '6496b215d9d57.jpg'),
(8, 'Batidora', 'Batidora de mano con accesorios intercambiables', '60.00', 25, '6496b21825673.jpg'),
(9, 'Plancha', 'Plancha de vapor con suela de cerámica', '45.00', 30, '6496b21a457a3.jpg'),
(10, 'Secadora de ropa', 'Secadora de ropa de ropa de 8 kg', '700.00', 3, '6496b21c7770b.jpg'),
(11, 'Hervidor de agua', 'Hervidor de agua eléctrico de acero inoxidable', '35.00', 22, '6496b21e2e67f.jpg'),
(12, 'Tostadora', 'Tostadora de pan de 2 rebanadas', '30.00', 28, '6496b2204c5e3.jpg'),
(13, 'Robot aspirador', 'Robot aspirador con navegación inteligente', '350.00', 6, '6496b22287efb.jpg'),
(14, 'Plancha de pelo', 'Plancha de pelo profesional de cerámica', '80.00', 15, '6496b224c5774.jpg'),
(15, 'Ventilador de torre', 'Ventilador de torre con control remoto', '100.00', 10, '6496b2267c200.jpg'),
(16, 'Calefactor eléctrico', 'Calefactor eléctrico de bajo consumo', '120.00', 8, '6496b228a4fc7.jpg'),
(17, 'Cocina de gas', 'Cocina de gas con horno y encendido electrónico', '900.00', 4, '6496b22a64dc8.jpg'),
(18, 'Exprimidor de cítricos', 'Exprimidor de cítricos automático', '40.00', 20, '6496b22c837c8.jpg'),
(19, 'Freidora de aire', 'Freidora de aire sin aceite de 3 litros', '150.00', 7, '6496b22e383df.jpg'),
(20, 'Batidora de vaso', 'Batidora de vaso de alta potencia de 1500W', '120.00', 12, '6496b22fdfa77.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `correo_electronico` varchar(100) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo_electronico`, `contrasena`, `rol`) VALUES
(1, 'Administrador', 'Apellido', 'admin@example.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'administrador'),
(2, 'Admin', 'Doe', 'admin2@example.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'administrador'),
(3, 'Vendedor', 'Apellido', 'vendedor@example.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'vendedor'),
(4, 'Vend', 'Doe', 'vendedor2@example.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'vendedor'),
(5, 'Vendy', 'Smith', 'vendedor3@example.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalles_venta`
--
ALTER TABLE `detalles_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_venta` (`id_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `detalles_venta`
--
ALTER TABLE `detalles_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles_venta`
--
ALTER TABLE `detalles_venta`
  ADD CONSTRAINT `detalles_venta_ibfk_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`),
  ADD CONSTRAINT `detalles_venta_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
