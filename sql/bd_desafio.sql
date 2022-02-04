-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_desafio
-- ------------------------------------------------------
-- Server version	5.5.16
-- -----------------------------------------------------
-- Schema bd_desafio
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_desafio` DEFAULT CHARACTER SET latin1 ;
USE `bd_desafio` ;

--
-- Table structure for table `tb_desafio`
--

DROP TABLE IF EXISTS `tb_desafio`;

CREATE TABLE `tb_desafio` (
  `id_desafiocol` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` int(1) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `valor` double(10,2) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `cartao` varchar(12) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `dono_loja` varchar(14) DEFAULT NULL,
  `nome_loja` varchar(19) DEFAULT NULL,
  PRIMARY KEY (`id_desafiocol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
