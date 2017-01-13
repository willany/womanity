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
) ENGINE=InnoDB AUTO_INCREMENT=8162 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atuacao_direta`
--

LOCK TABLES `atuacao_direta` WRITE;
/*!40000 ALTER TABLE `atuacao_direta` DISABLE KEYS */;
INSERT INTO `atuacao_direta` VALUES (391,'Alagoas',1321),(1511,'Alagoas',1391),(1521,'Amapá',1391),(1621,'Acre',1392),(1631,'Alagoas',1392),(2881,'Acre',NULL),(2891,'Alagoas',NULL),(2901,'Amapá',NULL),(2911,'Amazonas',NULL),(2921,'Bahia',NULL),(2931,'Ceará',NULL),(2941,'Distrito Federal',NULL),(2951,'Espírito Santo',NULL),(2961,'Goiás',NULL),(2971,'Maranhão',NULL),(2981,'Mato Grosso',NULL),(2991,'Mato Grosso do Sul',NULL),(3001,'Minas Gerais',NULL),(3011,'Pará',NULL),(3021,'Paraíba',NULL),(3031,'Paraná',NULL),(3041,'Pernambuco',NULL),(3051,'Piauí',NULL),(3061,'Rio de Janeiro',NULL),(3071,'Rio Grande do Norte',NULL),(3081,'Rio Grande do Sul',NULL),(3091,'Rondônia',NULL),(3101,'Roraima',NULL),(3111,'Santa Catarina',NULL),(3121,'São Paulo',NULL),(3131,'Sergipe',NULL),(3141,'Tocantins',NULL),(7471,'Acre',1171),(7481,'Alagoas',1171),(7491,'Amapá',1171),(7501,'Amazonas',1171),(7781,'Acre',1161),(7791,'Alagoas',1161),(7801,'Amapá',1161),(7811,'Amazonas',1161),(7821,'Bahia',1161),(7831,'Ceará',1161),(7841,'Distrito Federal',1161),(7851,'Espírito Santo',1161),(7861,'Goiás',1161),(7871,'Maranhão',1161),(7881,'Mato Grosso',1161),(7891,'Mato Grosso do Sul',1161),(7901,'Minas Gerais',1161),(7911,'Pará',1161),(7921,'Paraíba',1161),(7931,'Paraná',1161),(7941,'Pernambuco',1161),(7951,'Piauí',1161),(7961,'Rio de Janeiro',1161),(7971,'Rio Grande do Norte',1161),(7981,'Rio Grande do Sul',1161),(7991,'Rondônia',1161),(8001,'Roraima',1161),(8011,'Santa Catarina',1161),(8021,'São Paulo',1161),(8031,'Sergipe',1161),(8041,'Tocantins',1161),(8051,'Acre',1381),(8061,'Alagoas',1381),(8071,'Amapá',1381),(8081,'Amazonas',1381),(8091,'Bahia',1381),(8101,'Ceará',1381),(8141,'Alagoas',1241),(8151,'Amapá',1241),(8161,'Piauí',1241);
/*!40000 ALTER TABLE `atuacao_direta` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=4582 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contatos`
--

LOCK TABLES `contatos` WRITE;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` VALUES (2241,'','','','','','1',1181),(2251,'','','','','','2',1181),(2281,'','','','','','1',1201),(2291,'','','','','','2',1201),(2551,'ewf','ewf','willanylp@gmail.com','(33) 3333-3333','(33) 33333-3333','1',1321),(2561,'ewfewf','wefwf','willanylp@gmail.com','(33) 3333-3333','(33) 33333-3333','2',1321),(2711,'','','','','','1',1331),(2721,'','','','','','2',1331),(2791,'','','karinamachado@msn.com','','','1',NULL),(2801,'','','','','','2',NULL),(3561,'will teste','cargo 1','will_teste@gmail.com','(99) 9999-9999','(99) 99999-9999','1',1391),(3571,'teste 2 will','cargo 2','willanylp@gmail.com','(99) 9999-9999','(99) 99999-9999','2',1391),(3671,'ini ','cargo 1','willteste_ini@gmail.com','(99) 9999-9999','(99) 99999-9999','1',1392),(3681,'teste 2','cargo 2','willanylp@gmail.com','(99) 9999-9999','(99) 99999-9999','2',1392),(3831,'','','duda@hotmail.com','','','1',1401),(3841,'','','','','','2',1401),(3911,'karina  testando','dev','recife@womenwhocode.com','(81) 9999-9999','(81) 99999-9999','1',NULL),(3921,'karina','dev','willanylp@gmail.com','(88) 8888-8888','(88) 88888-8888','2',NULL),(4111,'andreza org','','andreza.lba@gmail.com','','','1',1411),(4121,'','','','','','2',1411),(4131,'teste','teste','andreza_leite@hotmail.com','(99) 9999-9999','(99) 99999-9999','1',1421),(4141,'teste','teste','teste@gmail.com','(99) 9999-9999','(99) 99999-9999','2',1421),(4331,'karina','dev','karinamachado@msn.com','(88) 8888-8888','(99) 99999-9999','1',1171),(4341,'karina machado','desenvolvedora web','karinamachado@msn.com','(99) 9999-9999','(99) 99999-9999','2',1171),(4371,'','','dim2@dim2.com.br','','','1',1431),(4381,'','','','','','2',1431),(4391,'','','karina@womenwhocode.com','','','1',1271),(4401,'','','','','','2',1271),(4411,'','','123@123','','','1',1441),(4421,'','','','','','2',1441),(4431,'maik','','ryuge@yahoo.com','','','1',1451),(4441,'','','','(99) 9999-9999','','2',1451),(4451,'testando !!!! karina','','ong@ong.com','','','1',1461),(4461,'','','','','','2',1461),(4471,'karina  testando','dev','recife@womenwhocode.com','(81) 9999-9999','(81) 99999-9999','1',1161),(4481,'karina','dev','willanylp@gmail.com','(88) 8888-8888','(88) 88888-8888','2',1161),(4491,'','','testeini@testeini.com','','','1',1471),(4501,'','','','','','2',1471),(4511,'Karina Machado','engenheiro','karina@womenwhocode.com','(81) 3314-5628','(81) 99702-3491','1',1381),(4521,'Karina dos Santos Machado','dev','karina@womenwhocode.com','(55) 5555-5555','(77) 77777-7777','2',1381),(4531,'','','karinatestong@karina.com','','','1',1481),(4541,'','','','','','2',1481),(4571,'Willany Silva','Developer','willany_lp@hotmail.com','(99) 9999-9999','(99) 99999-9999','1',1241),(4581,'','','','','','2',1241);
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=4822 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empoderamento`
--

LOCK TABLES `empoderamento` WRITE;
/*!40000 ALTER TABLE `empoderamento` DISABLE KEYS */;
INSERT INTO `empoderamento` VALUES (1741,'_1',NULL,1181),(1751,'_2',NULL,1181),(1761,'_3',NULL,1181),(1771,'_1',NULL,1201),(1781,'_2',NULL,1201),(1791,'_3',NULL,1201),(1971,'_1',NULL,1321),(1981,'_2',NULL,1321),(1991,'_3',NULL,1321),(2121,'_1','',1331),(2131,'_2','',1331),(2141,'_3','',1331),(2241,'_1','',NULL),(2251,'_2','',NULL),(2261,'_3','',NULL),(3281,'teste 1_1','ihilkn',1391),(3291,'ewf_2','wefwe',1391),(3301,'_3','',1391),(3451,'_1',NULL,1392),(3461,'_2',NULL,1392),(3471,'_3',NULL,1392),(3691,'_1',NULL,1401),(3701,'_2',NULL,1401),(3711,'_3',NULL,1401),(3811,'_1',NULL,NULL),(3821,'_2',NULL,NULL),(3831,'_3',NULL,NULL),(4111,'_1',NULL,1411),(4121,'_2',NULL,1411),(4131,'_3',NULL,1411),(4141,'_1','',1421),(4151,'_2','',1421),(4161,'_3','',1421),(4441,'iniciativa 1_1','iniciativa1',1171),(4451,'iniciativa2_2','iniciativa2',1171),(4461,'iniciativa3_3','iniciativa3',1171),(4501,'_1',NULL,1431),(4511,'_2',NULL,1431),(4521,'_3',NULL,1431),(4531,'_1',NULL,1271),(4541,'_2',NULL,1271),(4551,'_3',NULL,1271),(4561,'_1','',1441),(4571,'_2','',1441),(4581,'_3','',1441),(4591,'_1','',1451),(4601,'_2','',1451),(4611,'_3','',1451),(4621,'_1','',1461),(4631,'_2','',1461),(4641,'_3','',1461),(4651,'_1',NULL,1161),(4661,'_2',NULL,1161),(4671,'_3',NULL,1161),(4681,'_1',NULL,1471),(4691,'_2',NULL,1471),(4701,'_3',NULL,1471),(4711,'_1',NULL,1381),(4721,'_2',NULL,1381),(4731,'_3',NULL,1381),(4741,'_1','',1481),(4751,'_2','',1481),(4761,'_3','',1481),(4801,'wwcode recife_1','wwcode recife',1241),(4811,'_2','',1241),(4821,'pyladies_3','pyladies',1241);
/*!40000 ALTER TABLE `empoderamento` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=582 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enderecos`
--

LOCK TABLES `enderecos` WRITE;
/*!40000 ALTER TABLE `enderecos` DISABLE KEYS */;
INSERT INTO `enderecos` VALUES (381,'rua sá e souza','263','403','boa viagem',NULL,'Bahia','51030-065','nordeste',1161),(391,'rua sá e souza, 263/403','263','esquina com a capitāo zuzinha.','boa viagem',NULL,'Pernambuco','51030-065','nordeste',1171),(401,'','','','',NULL,'','','norte',1181),(411,'','','','',NULL,'','','norte',1201),(441,'rua iracema','129','casa','','Igarassu','Pernambuco','53650-500','nordeste',1241),(451,'','','','',NULL,'','','norte',1271),(461,'rua iracema','129','casa','cruz de reboucas','Feijó','Acre','33333-333','nordeste',1321),(471,'','','','',NULL,'','','norte',1331),(481,'Sá e souza, ','263','403','sétubal',NULL,'Pernambuco','51030-065','nordeste',1381),(491,'rua iracema','129','casa','cruz de reboucas','Igarassu','Pernambuco','53650-500','nordeste',1391),(492,'rua iracema','129','casa','cruz de reboucas','Abdon Batista','Santa Catarina','53650-500','nordeste',1392),(501,'','','','',NULL,'','','norte',1401),(511,'','','','',NULL,'','','escolha uma regiāo',1411),(521,'','','','',NULL,'','','escolha uma regiāo',1421),(531,'','','','',NULL,'','','escolha uma regiāo',1431),(541,'','','','',NULL,'','','escolha uma regiāo',1441),(551,'','','','',NULL,'','','escolha uma regiāo',1451),(561,'','','','',NULL,'','','escolha uma regiāo',1461),(571,'','','','',NULL,'','','escolha uma regiāo',1471),(581,'rua sá e souza, ','263','401','boa viagem','Abreu e Lima','Pernambuco','51030-065','nordeste',1481);
/*!40000 ALTER TABLE `enderecos` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=1122 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcoes`
--

LOCK TABLES `funcoes` WRITE;
/*!40000 ALTER TABLE `funcoes` DISABLE KEYS */;
INSERT INTO `funcoes` VALUES (341,'Atuação direta com mulheres, homens, LGBTT, etc','2',1321),(921,'Atuação direta com mulheres, homens, LGBTT, etc','10',1391),(931,'privado','0',1391),(1031,'Atuação direta com mulheres, homens, LGBTT, etc','23',1392),(1041,'público','0',1392),(1111,'Atuação direta com mulheres, homens, LGBTT, etc','40',1241),(1121,'privado','0',1241);
/*!40000 ALTER TABLE `funcoes` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=4132 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `indicacoes`
--

LOCK TABLES `indicacoes` WRITE;
/*!40000 ALTER TABLE `indicacoes` DISABLE KEYS */;
INSERT INTO `indicacoes` VALUES (1081,'_1','','',1181),(1091,'_2','','',1181),(1101,'_3','','',1181),(1111,'_1','','',1201),(1121,'_2','','',1201),(1131,'_3','','',1201),(1311,'nome 1_1','willanylp@gmail.com','(33) 3333-3333',1321),(1321,'nome 2_2','willanylp@gmail.com','(88) 8888-8888',1321),(1331,'nome 3_3','willanylp@gmail.com','(99) 9999-9999',1321),(1461,'_1','','',1331),(1471,'_2','','',1331),(1481,'_3','','',1331),(1581,'_1','','',NULL),(1591,'_2','','',NULL),(1601,'_3','','',NULL),(2591,'teste_1','willanylp@gmail.com','(99) 9999-9999',1391),(2601,'nome 2_2','willanylp@gmail.com','(99) 9999-9999',1391),(2611,'_3','','',1391),(2761,'nome 1_1','willanylp@gmail.com','(99) 9999-9999',1392),(2771,'_2','','',1392),(2781,'_3','','',1392),(3001,'_1','','',1401),(3011,'_2','','',1401),(3021,'_3','','',1401),(3121,'amiga1_1','willanylp@gmail.com','(88) 8888-8888',NULL),(3131,'amiga2_2','willanylp@gmail.com','(99) 9999-9999',NULL),(3141,'amiga3_3','willanylp@gmail.com','(12) 3333-3333',NULL),(3421,'_1','','',1411),(3431,'_2','','',1411),(3441,'_3','','',1411),(3451,'_1','','',1421),(3461,'_2','','',1421),(3471,'_3','','',1421),(3751,'Iniciativa 1_1','karinamachado@msn.com','(88) 8888-8888',1171),(3761,'Iniciativa 2_2','recife@womenwhocode.com','(55) 5555-5555',1171),(3771,'Iniciativa 3_3','karinamachado@msn.com','(44) 4444-4444',1171),(3811,'_1','','',1431),(3821,'_2','','',1431),(3831,'_3','','',1431),(3841,'_1','','',1271),(3851,'_2','','',1271),(3861,'_3','','',1271),(3871,'_1','','',1441),(3881,'_2','','',1441),(3891,'_3','','',1441),(3901,'_1','','',1451),(3911,'_2','','',1451),(3921,'_3','','',1451),(3931,'_1','','',1461),(3941,'_2','','',1461),(3951,'_3','','',1461),(3961,'amiga1_1','willanylp@gmail.com','(88) 8888-8888',1161),(3971,'amiga2_2','willanylp@gmail.com','(99) 9999-9999',1161),(3981,'amiga3_3','willanylp@gmail.com','(12) 3333-3333',1161),(3991,'_1','','',1471),(4001,'_2','','',1471),(4011,'_3','','',1471),(4021,'1_1','karinamachado@msn.com','(88) 8888-8888',1381),(4031,'2_2','wil@gmail.com','(88) 8888-8888',1381),(4041,'3_3','machado.karina@gmail.com','(81) 9970-2349',1381),(4051,'_1','','',1481),(4061,'_2','','',1481),(4071,'_3','','',1481),(4111,'wwcode recife_1','willanylp@gmail.com','(99) 9999-9999',1241),(4121,'_2','','',1241),(4131,'pyladies_3','willanylp@gmail.com','(99) 9999-9999',1241);
/*!40000 ALTER TABLE `indicacoes` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=5012 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orcamentos`
--

LOCK TABLES `orcamentos` WRITE;
/*!40000 ALTER TABLE `orcamentos` DISABLE KEYS */;
INSERT INTO `orcamentos` VALUES (1901,'2014',0,1181),(1911,'2015',0,1181),(1921,'2016',0,1181),(1931,'2014',0,1201),(1941,'2015',0,1201),(1951,'2016',0,1201),(2131,'2014',12,1321),(2141,'2015',23,1321),(2151,'2016',33,1321),(2301,'2014',0,1331),(2311,'2015',100,1331),(2321,'2016',0,1331),(2421,'2014',0,NULL),(2431,'2015',0,NULL),(2441,'2016',0,NULL),(3471,'2014',150,1391),(3481,'2015',15000,1391),(3491,'2016',100000,1391),(3641,'2014',400,1392),(3651,'2015',0,1392),(3661,'2016',0,1392),(3881,'2014',0,1401),(3891,'2015',0,1401),(3901,'2016',0,1401),(4001,'2014',1500,NULL),(4011,'2015',2500,NULL),(4021,'2016',3000,NULL),(4301,'2014',0,1411),(4311,'2015',0,1411),(4321,'2016',0,1411),(4331,'2014',0,1421),(4341,'2015',900,1421),(4351,'2016',300,1421),(4631,'2014',2000,1171),(4641,'2015',5000,1171),(4651,'2016',10000,1171),(4691,'2014',0,1431),(4701,'2015',0,1431),(4711,'2016',0,1431),(4721,'2014',0,1271),(4731,'2015',0,1271),(4741,'2016',0,1271),(4751,'2014',0,1441),(4761,'2015',0,1441),(4771,'2016',0,1441),(4781,'2014',0,1451),(4791,'2015',0,1451),(4801,'2016',0,1451),(4811,'2014',0,1461),(4821,'2015',0,1461),(4831,'2016',0,1461),(4841,'2014',1500,1161),(4851,'2015',2500,1161),(4861,'2016',3000,1161),(4871,'2014',0,1471),(4881,'2015',0,1471),(4891,'2016',0,1471),(4901,'2014',300,1381),(4911,'2015',400,1381),(4921,'2016',500,1381),(4931,'2014',0,1481),(4941,'2015',0,1481),(4951,'2016',0,1481),(4991,'2014',0,1241),(5001,'2015',15000,1241),(5011,'2016',0,1241);
/*!40000 ALTER TABLE `orcamentos` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=1482 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `organizacoes`
--

LOCK TABLES `organizacoes` WRITE;
/*!40000 ALTER TABLE `organizacoes` DISABLE KEYS */;
INSERT INTO `organizacoes` VALUES (1161,NULL,'urbana','Women Who Code','WWcode','(81) 9999-9999','recife@womenwhocode.com','outros','1996','101-500','sim','fhjfjfkjkjdfjdsfjdsjk','Mulheres','                                                                                                                  bbjbdfjbjdhvbbvhbfbvfbbvhfbvhfbhbfdbghbfhgbhfbhbjfbghbfhgbhbhgbhgbhfbghbhgbhbghshbshhhsdhghbghjgjdfhj                                                                                                                                                                                                                                                                                             ','gfjkjkfjkkjfkjfkdk','jdjvndsjnvsdnnv',NULL,'22.222.222/2222-22','projeto',171,'MTAC','1000000+','','testando , karina!','karina7'),(1171,'66.666.666/6666-66','rural','dudinha','MTGHJ','(00) 0000-0000','karina@womenwhocode.com','movimento','1917','501-1000','sim','hghjhfjdhhjfd','Adolescentes e jovens','municipal, estadual e nacional.','Você realiza monitoramento e avaliação sistematizada das atividades da Organizaçāo?*','Sua Organizaçāo tem uma estratégia de comunicação própria?*','A sua Organizaçāo recebeu premiações, certificações etc.?*',NULL,NULL,21,NULL,'1000000+','não tenho orçamento estou começando agora',NULL,''),(1181,NULL,'urbana','Women Who Code','WWcode','(81) 9999-9999','recife@womenwhocode.com','outros','1996','101-500','sim','fhjfjfkjkjdfjdsfjdsjk','Mulheres','                                                                                                                  bbjbdfjbjdhvbbvhbfbvfbbvhfbvhfbhbfdbghbfhgbhfbhbjfbghbfhgbhbhgbhgbhfbghbhgbhbghshbshhhsdhghbghjgjdfhj                                                                                                                                                                                                                                                                                             ','gfjkjkfjkkjfkjfkdk','jdjvndsjnvsdnnv',NULL,'22.222.222/2222-22','projeto',171,'MTAC','1000000+','','testando , karina!','karina7'),(1201,NULL,'urbana','Women Who Code','WWcode','(81) 9999-9999','recife@womenwhocode.com','outros','1996','101-500','sim','fhjfjfkjkjdfjdsfjdsjk','Mulheres','                                                                                                                  bbjbdfjbjdhvbbvhbfbvfbbvhfbvhfbhbfdbghbfhgbhfbhbjfbghbfhgbhbhgbhgbhfbghbhgbhbghshbshhhsdhghbghjgjdfhj                                                                                                                                                                                                                                                                                             ','gfjkjkfjkkjfkjfkdk','jdjvndsjnvsdnnv',NULL,'22.222.222/2222-22','projeto',171,'MTAC','1000000+','','testando , karina!','karina7'),(1241,'',NULL,'willany Silva will','will','(88) 8888-8888','willany_lp@hotmail.com','outros','','1-5',NULL,'','','','','','',NULL,NULL,16,NULL,'10001-50000','não tenho orçamento nadinha','edit outro tipo','edit outros recursos'),(1271,NULL,NULL,'','','','','outros','1900','',NULL,'','','                                                                            ','','',NULL,'',NULL,181,'','','','karina3','testando outros novamente'),(1321,NULL,'urbana','ewfef','efre','(33) 3333-3333','willanylp@gmail.com','coletivo','1911','21-50','nao','qwdqw','Organizações Sociais','                   adqsf','qwdqw','qwdwq',NULL,'22.222.222/2222-22','projeto',13,NULL,NULL,NULL,'A','B'),(1331,'',NULL,'willany Silva','will','(88) 8888','willany_lp@hotmail.com','academica','','1001+',NULL,'','','','','','',NULL,NULL,221,NULL,NULL,NULL,'A','B'),(1381,NULL,'urbana','WWcode','WWcode','(66) 6666-6666','karinamachado@msn.com','outros','','251-1000','sim','KKKKKKKKKKKKK','Mulheres','                   KKKKKKKKKKKKKKKKK                                                         ','KKKKKKKKKKKK','KKKKKKKKK',NULL,'33.333.333/3333-33','projeto',211,'Women Who Code','','','teste10','teste 11'),(1391,'99.999.999/9999-99','urbana','will teste editado','will etwe','(99) 9999-9999','willany_lp@hotmail.com','investimento_social_privado','','101-500','nao','nada ef','Adolescentes e jovens','nada ef','jbjb','','wefwefe',NULL,NULL,231,NULL,'2501-5000','não tenho fff','A','B'),(1392,NULL,'urbana','teste','will teste edit','(99) 9999-9999','willany_lp@hotmail.com','ong_sociedade_civil','1902','6-10','nao','efef','Organizações Sociais','                   qwdqef                                                                                               ','','qwdqw',NULL,'','projeto',241,'','2501-5000','nem ','A','B'),(1401,NULL,NULL,'','','','','','1998','',NULL,'','','                                                         ','','',NULL,'',NULL,251,'','','','A','B'),(1411,NULL,NULL,'','','','','','1900','',NULL,'','','                   ','','',NULL,'',NULL,71,'','','','',NULL),(1421,'','rural','teste','teste','(99) 9999-9999','teste@gmail.com','academica','2010','21-50','nao','hehehe','Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher','','','','',NULL,NULL,271,NULL,'2501-5000','teste',NULL,NULL),(1431,NULL,NULL,'','','','','','1900','',NULL,'','','                   ','','',NULL,'',NULL,291,'','','','','dim2'),(1441,'',NULL,'','','','','','1900','',NULL,'','','','','','',NULL,NULL,301,NULL,'','',NULL,'outrosprojetosong'),(1451,'',NULL,'','','','','','1900','',NULL,'','','','','','',NULL,NULL,61,NULL,'','','',''),(1461,'',NULL,'','','','','','1900','',NULL,'','','','','','',NULL,NULL,331,NULL,'','','','llllllllllllllllllll'),(1471,NULL,NULL,'','','','','','1900','',NULL,'','','                   ','','',NULL,'',NULL,351,'','','','','doação internacional'),(1481,'',NULL,'','','','','outros','1922','1001+','nao','','Mulheres','','','','',NULL,NULL,361,NULL,'1000000+','','testando outros dentifica','doação internacional');
/*!40000 ALTER TABLE `organizacoes` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=6892 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `origem_recursos`
--

LOCK TABLES `origem_recursos` WRITE;
/*!40000 ALTER TABLE `origem_recursos` DISABLE KEYS */;
INSERT INTO `origem_recursos` VALUES (451,'empresas',1321),(461,'institutos ou fundações empresariais',1321),(2011,'edital público governo federal',1391),(2021,'edital público municipal',1391),(2031,'endowment/fundo patrimonial',1391),(2041,'institutos ou fundações empresariais',1391),(2051,'investimento de impacto',1391),(2061,'organizações do sistema ONU',1391),(2071,'outros',1391),(2171,'edital público municipal',1392),(2181,'outros',1392),(3361,'doação pessoa física',NULL),(3371,'edital público governo federal',NULL),(3381,'edital público governo estadual',NULL),(3391,'edital público municipal',NULL),(3401,'empresas',NULL),(3411,'endowment/fundo patrimonial',NULL),(3421,'fomento à pesquisa',NULL),(3431,'institutos ou fundações empresariais',NULL),(3441,'investimento direto/patrocínio',NULL),(3451,'investimento de impacto',NULL),(3461,'leis de incentivo',NULL),(3471,'organizações do sistema ONU',NULL),(3481,'organizações não governamentais brasileiras ou internacionais',NULL),(3491,'subvenções públicas',NULL),(3501,'venda de produtos/prestação de serviços',NULL),(3511,'outros',NULL),(3521,'testando!!!!!!!!',NULL),(5061,'doação pessoa física',1421),(5071,'edital público municipal',1421),(6251,'doação pessoa física',1171),(6261,'edital público governo federal',1171),(6271,'edital público governo estadual',1171),(6281,'edital público municipal',1171),(6451,'outros',1431),(6461,'outros',1271),(6471,'outros',1461),(6481,'doação pessoa física',1161),(6491,'edital público governo federal',1161),(6501,'edital público governo estadual',1161),(6511,'edital público municipal',1161),(6521,'empresas',1161),(6531,'endowment/fundo patrimonial',1161),(6541,'fomento à pesquisa',1161),(6551,'institutos ou fundações empresariais',1161),(6561,'investimento direto/patrocínio',1161),(6571,'outros',1161),(6581,'outros',1471),(6591,'empresas',1381),(6601,'institutos ou fundações empresariais',1381),(6611,'organizações do sistema ONU',1381),(6621,'outros',1381),(6631,'outros',1481),(6771,'doação pessoa física',1241),(6781,'edital público governo federal',1241),(6791,'edital público governo estadual',1241),(6801,'edital público municipal',1241),(6811,'empresas',1241),(6821,'investimento direto/patrocínio',1241),(6831,'investimento de impacto',1241),(6841,'leis de incentivo',1241),(6851,'organizações do sistema ONU',1241),(6861,'organizações não governamentais brasileiras ou internacionais',1241),(6871,'subvenções públicas',1241),(6881,'venda de produtos/prestação de serviços',1241),(6891,'outros',1241);
/*!40000 ALTER TABLE `origem_recursos` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=1622 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `politicas_publicas`
--

LOCK TABLES `politicas_publicas` WRITE;
/*!40000 ALTER TABLE `politicas_publicas` DISABLE KEYS */;
INSERT INTO `politicas_publicas` VALUES (211,'estadual',1321),(681,'estadual',1391),(731,'estadual',1392),(981,'municipal',NULL),(991,'estadual',NULL),(1001,'nacional',NULL),(1491,'municipal',1171),(1501,'estadual',1171),(1511,'nacional',1171),(1551,'municipal',1161),(1561,'estadual',1161),(1571,'nacional',1161),(1581,'municipal',1381),(1591,'estadual',1381),(1601,'nacional',1381),(1621,'estadual',1241);
/*!40000 ALTER TABLE `politicas_publicas` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=8362 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `redes_sociais`
--

LOCK TABLES `redes_sociais` WRITE;
/*!40000 ALTER TABLE `redes_sociais` DISABLE KEYS */;
INSERT INTO `redes_sociais` VALUES (2221,'','Site',1181),(2231,'','Facebook',1181),(2241,'','Instagram',1181),(2251,'','Twitter',1181),(2261,'','Linkedin',1181),(2271,'','Outros',1181),(2281,'','Site',1201),(2291,'','Facebook',1201),(2301,'','Instagram',1201),(2311,'','Twitter',1201),(2321,'','Linkedin',1201),(2331,'','Outros',1201),(2691,'http://stackoverflow.com/questions/4027236/adding-readonly-attribute-to-all-form-elements','Site',1321),(2701,'','Facebook',1321),(2711,'','Instagram',1321),(2721,'www.twitter','Twitter',1321),(2731,'','Linkedin',1321),(2741,'','Outros',1321),(2991,'','Site',1331),(3001,'','Facebook',1331),(3011,'','Instagram',1331),(3021,'','Twitter',1331),(3031,'','Linkedin',1331),(3041,'','Outros',1331),(3231,'','Site',NULL),(3241,'','Facebook',NULL),(3251,'','Instagram',NULL),(3261,'','Twitter',NULL),(3271,'','Linkedin',NULL),(3281,'','Outros',NULL),(5261,'http://stackoverflow.com/questions/4027236/adding-readonly-attribute-to-all-form-elements','Site',1391),(5271,'www.facebook','Facebook',1391),(5281,'','Instagram',1391),(5291,'','Twitter',1391),(5301,'www.linkedin','Linkedin',1391),(5311,'','Outros',1391),(5611,'http://stackoverflow.com/questions/4027236/adding-readonly-attribute-to-all-form-elements','Site',1392),(5621,'','Facebook',1392),(5631,'','Instagram',1392),(5641,'','Twitter',1392),(5651,'www.linkedin','Linkedin',1392),(5661,'','Outros',1392),(6091,'','Site',1401),(6101,'','Facebook',1401),(6111,'','Instagram',1401),(6121,'','Twitter',1401),(6131,'','Linkedin',1401),(6141,'','Outros',1401),(6331,'karina','Site',NULL),(6341,'karina','Facebook',NULL),(6351,'karina','Instagram',NULL),(6361,'karina','Twitter',NULL),(6371,'karina','Linkedin',NULL),(6381,'karina','Outros',NULL),(6931,'','Site',1411),(6941,'','Facebook',1411),(6951,'','Instagram',1411),(6961,'','Twitter',1411),(6971,'','Linkedin',1411),(6981,'','Outros',1411),(6991,'','Site',1421),(7001,'','Facebook',1421),(7011,'','Instagram',1421),(7021,'','Twitter',1421),(7031,'','Linkedin',1421),(7041,'','Outros',1421),(7591,'site','Site',1171),(7601,'facebiik','Facebook',1171),(7611,'insta','Instagram',1171),(7621,'tw','Twitter',1171),(7631,'link','Linkedin',1171),(7641,'outros','Outros',1171),(7711,'','Site',1431),(7721,'','Facebook',1431),(7731,'','Instagram',1431),(7741,'','Twitter',1431),(7751,'','Linkedin',1431),(7761,'','Outros',1431),(7771,'','Site',1271),(7781,'','Facebook',1271),(7791,'','Instagram',1271),(7801,'','Twitter',1271),(7811,'','Linkedin',1271),(7821,'','Outros',1271),(7831,'','Site',1441),(7841,'','Facebook',1441),(7851,'','Instagram',1441),(7861,'','Twitter',1441),(7871,'','Linkedin',1441),(7881,'','Outros',1441),(7891,'','Site',1451),(7901,'','Facebook',1451),(7911,'','Instagram',1451),(7921,'','Twitter',1451),(7931,'','Linkedin',1451),(7941,'','Outros',1451),(7951,'','Site',1461),(7961,'','Facebook',1461),(7971,'','Instagram',1461),(7981,'','Twitter',1461),(7991,'','Linkedin',1461),(8001,'','Outros',1461),(8011,'karina','Site',1161),(8021,'karina','Facebook',1161),(8031,'karina','Instagram',1161),(8041,'karina','Twitter',1161),(8051,'karina','Linkedin',1161),(8061,'karina','Outros',1161),(8071,'','Site',1471),(8081,'','Facebook',1471),(8091,'','Instagram',1471),(8101,'','Twitter',1471),(8111,'','Linkedin',1471),(8121,'','Outros',1471),(8131,'sbbfbfff','Site',1381),(8141,'vfbvfbvbfndv','Facebook',1381),(8151,'hbfbhvfvbdfbv','Instagram',1381),(8161,'hfhhhfvnvvvnv','Twitter',1381),(8171,'hhjfbhbv nfbvdbvb','Linkedin',1381),(8181,'hfhvhfbvbdf','Outros',1381),(8191,'','Site',1481),(8201,'','Facebook',1481),(8211,'','Instagram',1481),(8221,'','Twitter',1481),(8231,'','Linkedin',1481),(8241,'','Outros',1481),(8311,'http://stackoverflow.com/questions/4027236/adding-readonly-attribute-to-all-form-elements','Site',1241),(8321,'','Facebook',1241),(8331,'www.instagram','Instagram',1241),(8341,'www.twitter','Twitter',1241),(8351,'www.linkedin','Linkedin',1241),(8361,'www.outros','Outros',1241);
/*!40000 ALTER TABLE `redes_sociais` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=4372 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relacionadas`
--

LOCK TABLES `relacionadas` WRITE;
/*!40000 ALTER TABLE `relacionadas` DISABLE KEYS */;
INSERT INTO `relacionadas` VALUES (1291,'_1',1181),(1301,'_2',1181),(1311,'_3',1181),(1321,'_1',1201),(1331,'_2',1201),(1341,'_3',1201),(1521,'qwd_1',1321),(1531,'qef_2',1321),(1541,'ef_3',1321),(1671,'_1',1331),(1681,'_2',1331),(1691,'_3',1331),(1791,'_1',NULL),(1801,'_2',NULL),(1811,'_3',NULL),(2831,'teste_1',1391),(2841,'ewf_2',1391),(2851,'wef_3',1391),(3001,'teste_1',1392),(3011,'_2',1392),(3021,'_3',1392),(3241,'_1',1401),(3251,'_2',1401),(3261,'_3',1401),(3361,'teste1_1',NULL),(3371,'teste2_2',NULL),(3381,'teste3_3',NULL),(3661,'_1',1411),(3671,'_2',1411),(3681,'_3',1411),(3691,'_1',1421),(3701,'_2',1421),(3711,'_3',1421),(3991,'_1',1171),(4001,'_2',1171),(4011,'_3',1171),(4051,'_1',1431),(4061,'_2',1431),(4071,'_3',1431),(4081,'_1',1271),(4091,'_2',1271),(4101,'_3',1271),(4111,'_1',1441),(4121,'_2',1441),(4131,'_3',1441),(4141,'_1',1451),(4151,'_2',1451),(4161,'_3',1451),(4171,'_1',1461),(4181,'_2',1461),(4191,'_3',1461),(4201,'_1',1161),(4211,'_2',1161),(4221,'_3',1161),(4231,'_1',1471),(4241,'_2',1471),(4251,'_3',1471),(4261,'_1',1381),(4271,'_2',1381),(4281,'_3',1381),(4291,'_1',1481),(4301,'_2',1481),(4311,'_3',1481),(4351,'wwcode recife_1',1241),(4361,'_2',1241),(4371,'pyladies_3',1241);
/*!40000 ALTER TABLE `relacionadas` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=3042 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subtemas`
--

LOCK TABLES `subtemas` WRITE;
/*!40000 ALTER TABLE `subtemas` DISABLE KEYS */;
INSERT INTO `subtemas` VALUES (341,'Inserção de mulheres na política',1321),(1611,'Advocacy',1391),(1621,'Água e saneamento básico',1391),(1631,'Artes plásticas',1391),(1641,'Dança',1391),(1651,'Desenvolvimento e Programação',1391),(1801,'Aborto',1392),(1811,'Advocacy',1392),(1821,'Água e saneamento básico',1392),(2061,'Artes plásticas',1401),(2071,'Estudo e pesquisa',1401),(2081,'Promoção à cargos de liderança',1401),(2181,'Estudo e pesquisa',NULL),(2191,'Promoção à cargos de liderança',NULL),(2201,'Saúde sexual e reprodutiva',NULL),(2481,'Advocacy',1421),(2491,'Água e saneamento básico',1421),(2501,'Artes plásticas',1421),(2721,'Estudo e pesquisa',1171),(2731,'Promoção à cargos de liderança',1171),(2741,'Saúde sexual e reprodutiva',1171),(2781,'Aborto',1161),(2791,'Advocacy',1161),(2801,'Água e saneamento básico',1161),(2811,'Artes plásticas',1161),(2821,'Cadeia produtiva responsável',1161),(2831,'Cinema',1161),(2841,'Conselhos e outras instâncias',1161),(2851,'Consumo',1161),(2861,'Cooperativismo',1161),(2871,'Aborto',1381),(2881,'Dança',1381),(2891,'Inserção de mulheres na política',1381),(2901,'Paternidade',1381),(2911,'Tecnologia social e/ou alternativas',1381),(2921,'Aborto',1481),(2931,'Advocacy',1481),(2941,'Água e saneamento básico',1481),(2951,'Artes plásticas',1481),(2961,'Cadeia produtiva responsável',1481),(2971,'Cinema',1481),(2981,'Conselhos e outras instâncias',1481),(3021,'Dança',1241),(3031,'Ecofeminismo',1241),(3041,'Inserção de mulheres na política',1241);
/*!40000 ALTER TABLE `subtemas` ENABLE KEYS */;
UNLOCK TABLES;

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
-- Dumping data for table `telefones`
--

LOCK TABLES `telefones` WRITE;
/*!40000 ALTER TABLE `telefones` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefones` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=3892 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temas`
--

LOCK TABLES `temas` WRITE;
/*!40000 ALTER TABLE `temas` DISABLE KEYS */;
INSERT INTO `temas` VALUES (431,'arte_cultura',1321),(441,'ciencia_tecnologia',1321),(2001,'arte_cultura',1391),(2011,'ciencia_tecnologia',1391),(2021,'empreendedorismo_feminino_autonomia_economica',1391),(2031,'paz_seguranca_publica',1391),(2041,'saude_bemestar',1391),(2291,'arte_cultura',1392),(2301,'ciencia_tecnologia',1392),(2311,'empreendedorismo_feminino_autonomia_economica',1392),(2321,'enfrentamento_violencia',1392),(2331,'equidade_Condições_trabalho',1392),(2721,'arte_cultura',NULL),(2731,'ciencia_tecnologia',NULL),(2741,'democracia_participação_politica',NULL),(2751,'educacao_formacao',NULL),(2761,'empreendedorismo_feminino_autonomia_economica',NULL),(3221,'arte_cultura',1421),(3231,'ciencia_tecnologia',1421),(3591,'arte_cultura',1171),(3601,'ciencia_tecnologia',1171),(3611,'democracia_participação_politica',1171),(3621,'educacao_formacao',1171),(3631,'empreendedorismo_feminino_autonomia_economica',1171),(3691,'arte_cultura',1161),(3701,'ciencia_tecnologia',1161),(3711,'democracia_participação_politica',1161),(3721,'educacao_formacao',1161),(3731,'empreendedorismo_feminino_autonomia_economica',1161),(3741,'arte_cultura',1381),(3751,'ciencia_tecnologia',1381),(3761,'democracia_participação_politica',1381),(3771,'empreendedorismo_feminino_autonomia_economica',1381),(3781,'enfrentamento_violencia',1381),(3791,'arte_cultura',1481),(3801,'ciencia_tecnologia',1481),(3811,'democracia_participação_politica',1481),(3821,'educacao_formacao',1481),(3831,'empreendedorismo_feminino_autonomia_economica',1481),(3871,'arte_cultura',1241),(3881,'ciencia_tecnologia',1241),(3891,'democracia_participação_politica',1241);
/*!40000 ALTER TABLE `temas` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=362 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (13,'willany','willanylp@gmail.com',2,0,0,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(16,'','willany_lp@hotmail.com',1,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(21,NULL,'karinamachado@msn.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(61,NULL,'ryuge@yahoo.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(71,NULL,'andreza.lba@gmail.com',2,1,1,'pajucara','0000-00-00 00:00:00','0000-00-00 00:00:00'),(101,NULL,'machado.karina@gmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(111,NULL,'rico_cavallari@hotmail.com',2,1,1,'enrico','0000-00-00 00:00:00','0000-00-00 00:00:00'),(121,NULL,'yves.rodrigues@jwt.com',1,1,1,'womanity2016','0000-00-00 00:00:00','0000-00-00 00:00:00'),(131,NULL,'suellen.vizzotto@jwt.com',2,1,1,'womanity2016','0000-00-00 00:00:00','0000-00-00 00:00:00'),(141,NULL,'vanessa@ponteaponte.com.br',1,1,1,'123MUDAR','0000-00-00 00:00:00','0000-00-00 00:00:00'),(151,NULL,'contato@ponteaponte.com.br',2,1,1,'123mudar','0000-00-00 00:00:00','0000-00-00 00:00:00'),(171,NULL,'recife@womenwhocode.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(181,NULL,'karina@womenwhocode.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(191,NULL,'machadokarina@gmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(201,NULL,'raioma@hotmail.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(211,NULL,'machadors73@hotmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(221,NULL,'teste@gmail.com',1,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(231,NULL,'will_teste@gmail.com',1,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(241,NULL,'willteste_ini@gmail.com',2,1,1,'1234','0000-00-00 00:00:00','0000-00-00 00:00:00'),(251,NULL,'duda@hotmail.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(261,NULL,'wwc@wwc.com.br',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(271,NULL,'andreza_leite@hotmail.com',1,1,1,'pajucara','0000-00-00 00:00:00','0000-00-00 00:00:00'),(281,NULL,'dim@dim.com.br',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(291,NULL,'dim2@dim2.com.br',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(301,NULL,'123@123',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(311,NULL,'teste@teste.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(321,NULL,'teste2@teste2.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(331,NULL,'ong@ong.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(341,NULL,'testeong@testeong.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(351,NULL,'testeini@testeini.com',2,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00'),(361,NULL,'karinatestong@karina.com',1,1,1,'123','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-10 13:30:43
