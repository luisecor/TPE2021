-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 07:07 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tpe`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
(1, 'OTRA CATEGORI'),
(2, 'Hardware'),
(4, 'Video Juegos'),
(11, 'Soporte');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` double NOT NULL,
  `fk_categoria` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `precio`, `fk_categoria`, `descripcion`) VALUES
(2, 'CAMBIAZO', 100, 2, 'DESCRRIPCION'),
(3, 'Mouse', 100, 1, 'Mouse Gamer'),
(4, 'Mother ASUS Z590-P', 500, 2, 'Motherboard marca Asus'),
(5, 'Monitor LG-24\"', 500, 1, 'Monitro 24\" marca LG'),
(6, 'Diablo II', 1500, 4, 'Ubisoft - Diablo II'),
(7, 'Assasing Creeds', 100, 4, 'Juego de PPRMGORO'),
(21, 'Instalacion de Software', 10, 11, 'Instalación de cualquier software - precio según presupuesto');

-- --------------------------------------------------------

--
-- Table structure for table `productoreview`
--

CREATE TABLE `productoreview` (
  `id_review` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `puntaje` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productoreview`
--

INSERT INTO `productoreview` (`id_review`, `id_producto`, `id_user`, `review`, `puntaje`) VALUES
(17, 2, 1, 'asdadasd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `roleUser` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_user`, `email`, `password`, `roleUser`) VALUES
(1, 'demo@gmail.com', '$2y$10$VWBNGh654BUNh/D51jyGYeJuiSF5tAiVSKjJVOiULYyAcA1NjsWEG', 1),
(9, 'usuario@gmail.com', '$2y$10$eLpJQh4/jqabqKIfwSngWeUICY/z1NivAwbY1p0oj8pZLFFsegswa', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `unique_producto_categoria` (`id_producto`,`fk_categoria`),
  ADD KEY `fk_ProductoCategoria` (`fk_categoria`);

--
-- Indexes for table `productoreview`
--
ALTER TABLE `productoreview`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `productoReview_producto_id_producto` (`id_producto`),
  ADD KEY `productoreview_usuario_id_user` (`id_user`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `productoreview`
--
ALTER TABLE `productoreview`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_ProductoCategoria` FOREIGN KEY (`fk_categoria`) REFERENCES `categoria` (`id_categoria`);

--
-- Constraints for table `productoreview`
--
ALTER TABLE `productoreview`
  ADD CONSTRAINT `productoReview_producto_id_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `productoreview_usuario_id_user` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
