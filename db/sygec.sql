-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2022 at 05:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sygec`
--

-- --------------------------------------------------------

--
-- Table structure for table `actividade`
--

CREATE TABLE `actividade` (
  `actividade_id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `duracao` varchar(50) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `actividadeXnivel`
--

CREATE TABLE `actividadeXnivel` (
  `id_nivel` int(11) NOT NULL,
  `id_actividade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `crianca`
--

CREATE TABLE `crianca` (
  `crianca_id` int(11) NOT NULL,
  `id_encarregado` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `apelido` varchar(25) DEFAULT NULL,
  `bi_Nr` varchar(30) DEFAULT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  `naturalidade` varchar(50) DEFAULT NULL,
  `data_Nascimento` date DEFAULT NULL,
  `sexo` enum('F','M') DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `avenida` varchar(100) DEFAULT NULL,
  `casa_Nr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE `departamento` (
  `departamento_id` int(11) NOT NULL,
  `nome` varchar(150) DEFAULT NULL,
  `descricao` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `encarregado`
--

CREATE TABLE `encarregado` (
  `encarregado_id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `apelido` varchar(25) DEFAULT NULL,
  `bi_Nr` varchar(30) DEFAULT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  `naturalidade` varchar(50) DEFAULT NULL,
  `data_Nascimento` date DEFAULT NULL,
  `sexo` enum('F','M') DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `avenida` varchar(100) DEFAULT NULL,
  `casa_Nr` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE `funcionario` (
  `funcionario_id` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `apelido` varchar(25) DEFAULT NULL,
  `bi_Nr` varchar(30) DEFAULT NULL,
  `nacionalidade` varchar(50) DEFAULT NULL,
  `naturalidade` varchar(50) DEFAULT NULL,
  `data_Nascimento` date DEFAULT NULL,
  `sexo` enum('F','M') DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `avenida` varchar(100) DEFAULT NULL,
  `casa_Nr` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `funcionarioXnivel`
--

CREATE TABLE `funcionarioXnivel` (
  `id_nivel` int(11) NOT NULL,
  `id_funcionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nivel`
--

CREATE TABLE `nivel` (
  `nivel_id` int(11) NOT NULL,
  `id_propina` int(11) NOT NULL,
  `valor` double DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `propina`
--

CREATE TABLE `propina` (
  `propina_id` int(11) NOT NULL,
  `mes` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actividade`
--
ALTER TABLE `actividade`
  ADD PRIMARY KEY (`actividade_id`);

--
-- Indexes for table `actividadeXnivel`
--
ALTER TABLE `actividadeXnivel`
  ADD PRIMARY KEY (`id_nivel`,`id_actividade`),
  ADD KEY `fk_id_actividade` (`id_actividade`);

--
-- Indexes for table `crianca`
--
ALTER TABLE `crianca`
  ADD PRIMARY KEY (`crianca_id`),
  ADD KEY `fk_id_encarregado` (`id_encarregado`);

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`departamento_id`);

--
-- Indexes for table `encarregado`
--
ALTER TABLE `encarregado`
  ADD PRIMARY KEY (`encarregado_id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`funcionario_id`),
  ADD KEY `fk_id_cargo` (`id_cargo`);

--
-- Indexes for table `funcionarioXnivel`
--
ALTER TABLE `funcionarioXnivel`
  ADD PRIMARY KEY (`id_nivel`,`id_funcionario`),
  ADD KEY `fk_id_func` (`id_funcionario`);

--
-- Indexes for table `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`nivel_id`),
  ADD KEY `fk_id_propina` (`id_propina`);

--
-- Indexes for table `propina`
--
ALTER TABLE `propina`
  ADD PRIMARY KEY (`propina_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actividade`
--
ALTER TABLE `actividade`
  MODIFY `actividade_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crianca`
--
ALTER TABLE `crianca`
  MODIFY `crianca_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `departamento_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `encarregado`
--
ALTER TABLE `encarregado`
  MODIFY `encarregado_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `funcionario_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nivel`
--
ALTER TABLE `nivel`
  MODIFY `nivel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propina`
--
ALTER TABLE `propina`
  MODIFY `propina_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actividadeXnivel`
--
ALTER TABLE `actividadeXnivel`
  ADD CONSTRAINT `fk_id_actividade` FOREIGN KEY (`id_actividade`) REFERENCES `actividade` (`actividade_id`),
  ADD CONSTRAINT `fk_id_nivel` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`nivel_id`);

--
-- Constraints for table `crianca`
--
ALTER TABLE `crianca`
  ADD CONSTRAINT `fk_id_encarregado` FOREIGN KEY (`id_encarregado`) REFERENCES `encarregado` (`encarregado_id`);

--
-- Constraints for table `funcionarioXnivel`
--
ALTER TABLE `funcionarioXnivel`
  ADD CONSTRAINT `fk_id_func` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`funcionario_id`),
  ADD CONSTRAINT `fk_id_nive` FOREIGN KEY (`id_nivel`) REFERENCES `nivel` (`nivel_id`);

--
-- Constraints for table `nivel`
--
ALTER TABLE `nivel`
  ADD CONSTRAINT `fk_id_propina` FOREIGN KEY (`id_propina`) REFERENCES `propina` (`propina_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
