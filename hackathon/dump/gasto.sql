-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 06:05 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon_apae`
--

--
-- Dumping data for table `gasto`
--

INSERT INTO `gasto` (`idGasto`, `idSetor`, `data`, `valor`, `descricao`) VALUES
(30, 2, '2018-01-01', 580.34, 'Dinheiro gasto para os medicamentos das crianÃ§as'),
(31, 2, '2018-01-15', 14762, 'Valor referente aos mÃ©dicos colaboradores da APAE'),
(32, 2, '2018-01-07', 14762, 'Valor referente aos materiais relacionados aos procedimentos mÃ©dicos. '),
(33, 2, '2018-02-06', 13289, 'Valor relacionado aos salÃ¡rios dos profissionais da Ã¡rea de saÃºde da APAE.'),
(34, 2, '2018-02-22', 789.81, 'Valor referente a nada'),
(35, 2, '2018-02-22', 789.81, 'Valor referente'),
(36, 5, '2018-03-06', 549.31, 'Valor referente ao churrasco'),
(37, 4, '2018-03-19', 879.33, 'Valor referente'),
(38, 3, '2018-04-19', 45.31, 'Valor referente'),
(39, 4, '2018-06-19', 659.17, 'Valor referente'),
(40, 2, '2018-09-19', 17382.1, 'Valor referente'),
(41, 5, '2018-12-07', 23813.1, 'Valor referente'),
(42, 3, '2018-08-07', 574.21, 'Valor referente'),
(43, 4, '2018-08-01', 768.44, 'Valor referente'),
(52, 3, '2018-05-02', 398.11, 'Valor referente'),
(53, 2, '2018-04-02', 398.11, 'Valor referente'),
(54, 3, '2018-07-02', 38.11, 'Valor referente'),
(55, 5, '2018-08-02', 8.11, 'Valor referente'),
(56, 5, '2018-08-02', 88.11, 'Valor referente'),
(57, 4, '2018-09-02', 66.37, 'Valor referente'),
(58, 2, '2018-09-02', 41.11, 'Valor referente'),
(59, 2, '2018-10-02', 3983.11, 'Valor referente'),
(60, 3, '2018-11-02', 38.8, 'Valor referente'),
(61, 5, '2018-11-02', 513.76, 'Valor referente'),
(62, 5, '2018-12-02', 444.11, 'Valor referente'),
(63, 4, '2018-07-02', 33.37, 'Valor referente'),
(64, 2, '2018-05-02', 1.88, 'Valor referente'),
(65, 2, '2018-04-02', 83.29, 'Valor referente');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
