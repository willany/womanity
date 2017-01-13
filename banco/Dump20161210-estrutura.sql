CREATE DATABASE  IF NOT EXISTS `womanity_ecossistema` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `womanity_ecossistema`;
-- MySQL dump 10.13  Distrib 5.6.23, for Win32 (x86)
--
-- Host: br-cdbr-azure-south-b.cloudapp.net    Database: womanity_ecossistema
-- ------------------------------------------------------
-- Server version	5.5.45-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `atuacao_direta`
--

DROP TABLE IF EXISTS `atuacao_direta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atuacao_direta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(100) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `atuacao_direta_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8171 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `contatos`
--

DROP TABLE IF EXISTS `contatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `cargo` varchar(150) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `contatos_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4591 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `empoderamento`
--

DROP TABLE IF EXISTS `empoderamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empoderamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `empoderamento_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4831 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enderecos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(105) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `complemento` varchar(500) DEFAULT NULL,
  `bairro` varchar(500) DEFAULT NULL,
  `cidade` varchar(500) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `regiao` varchar(45) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `enderecos_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=591 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `funcoes`
--

DROP TABLE IF EXISTS `funcoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(300) DEFAULT NULL,
  `complemento` varchar(500) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `funcoes_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1131 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `indicacoes`
--

DROP TABLE IF EXISTS `indicacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `indicacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `indicacoes_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4141 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `orcamentos`
--

DROP TABLE IF EXISTS `orcamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orcamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ano` varchar(45) DEFAULT NULL,
  `valor` decimal(10,0) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `orcamentos_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5021 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `organizacoes`
--

DROP TABLE IF EXISTS `organizacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `organizacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` varchar(45) DEFAULT NULL,
  `localizacao` varchar(45) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `sigla` varchar(45) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `inicio_atv` varchar(5) DEFAULT NULL,
  `qtde_pessoas` varchar(100) DEFAULT NULL,
  `recursos_financeiros` varchar(100) DEFAULT NULL,
  `descricao` text,
  `publico_atendido` varchar(300) DEFAULT NULL,
  `politicas_publicas` varchar(500) DEFAULT NULL,
  `monitoramento_atividades` varchar(500) DEFAULT NULL,
  `estrategia_comunicacao` varchar(500) DEFAULT NULL,
  `premiacao_certificacao` varchar(500) DEFAULT NULL,
  `organizacao_pai` varchar(45) DEFAULT NULL,
  `identifica_iniciativa` varchar(300) DEFAULT NULL,
  `usuario_id` int(10) unsigned NOT NULL,
  `inputnomeong` varchar(100) DEFAULT NULL,
  `pessoas_benefeciadas` varchar(100) DEFAULT NULL,
  `justificativa_orcamento` varchar(500) DEFAULT NULL,
  `identifica_organizacao_outros` varchar(100) DEFAULT NULL,
  `fonte_recursos_outros` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `organizacoes_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1491 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `origem_recursos`
--

DROP TABLE IF EXISTS `origem_recursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `origem_recursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(300) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `origem_recursos_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6901 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `politicas_publicas`
--

DROP TABLE IF EXISTS `politicas_publicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `politicas_publicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(150) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`organizacao_id`),
  CONSTRAINT `id` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1631 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `redes_sociais`
--

DROP TABLE IF EXISTS `redes_sociais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `redes_sociais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(500) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `redes_sociais_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8371 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `relacionadas`
--

DROP TABLE IF EXISTS `relacionadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `relacionadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `relacionadas_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4381 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `subtemas`
--

DROP TABLE IF EXISTS `subtemas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subtemas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subtema` varchar(150) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_idx` (`organizacao_id`),
  KEY `id_id_sub` (`organizacao_id`),
  CONSTRAINT `id_id_sub` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3051 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `telefones`
--

DROP TABLE IF EXISTS `telefones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(45) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizacao_id` (`organizacao_id`),
  CONSTRAINT `telefones_ibfk_1` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `temas`
--

DROP TABLE IF EXISTS `temas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tema` varchar(150) DEFAULT NULL,
  `organizacao_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_id_tema` (`organizacao_id`),
  CONSTRAINT `id_id_tema` FOREIGN KEY (`organizacao_id`) REFERENCES `organizacoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3901 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `carta_principios` tinyint(1) NOT NULL,
  `politica_privacidade` tinyint(1) NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=371 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-10 13:37:28
