# php_sitcon
Backend PHP

Get Laminas (Zend Framework)

Banco de dados

DROP TABLE IF EXISTS `pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pacientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  `datanasc` date DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `status` enum('ativo','inativo') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` VALUES (1,'Augusto Fernandes','2000-08-10','210.298.293-09','ativo'),(2,'Maria Silva Oliveira','1999-03-21','210.298.293-09','ativo'),(3,'Alfonse Smikchuz','2002-10-02','210.298.293-09','ativo'),(4,'Nagela Perreira','1997-05-16','210.298.293-09','ativo'),(5,'Gustavo Hernanes','2001-07-10','210.298.293-09','ativo'),(6,'João Paulo Ferreira','1995-06-26','210.298.293-09','inativo'),(7,'Julio Costa Martins','1980-11-23','210.298.293-09','ativo'),(8,'Helena Marques','2000-01-11','210.298.293-09','ativo'),(9,'Zira Silva','2003-02-14','210.298.293-09','ativo'),(10,'João Bicalho','1993-03-12','210.298.293-09','inativo'),(11,'Paulina Araujo','2002-08-10','210.298.293-09','ativo'),(12,'Carolina Rosa Silva','2001-12-24','210.298.293-09','ativo');
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `procedimentos`
--

DROP TABLE IF EXISTS `procedimentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `procedimentos` (
  `id` int NOT NULL,
  `descricao` varchar(250) DEFAULT NULL,
  `status` enum('ativo','inativo') DEFAULT NULL,
  `tipo_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_procedimentos_tiposolicitacao_idx` (`tipo_id`),
  CONSTRAINT `fk_procedimentos_tiposolicitacao` FOREIGN KEY (`tipo_id`) REFERENCES `tiposolicitacao` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procedimentos`
--

LOCK TABLES `procedimentos` WRITE;
/*!40000 ALTER TABLE `procedimentos` DISABLE KEYS */;
INSERT INTO `procedimentos` VALUES (1,'Consulta Pediátrica ','ativo',1),(2,'Consulta Clínico Geral','ativo',1),(3,'Hemograma','ativo',2),(4,'Glicemia','ativo',2),(5,'Colesterol','ativo',2),(6,'Triglicerídeos','ativo',2);
/*!40000 ALTER TABLE `procedimentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profissional`
--

DROP TABLE IF EXISTS `profissional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profissional` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  `status` enum('ativo','inativo') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profissional`
--

LOCK TABLES `profissional` WRITE;
/*!40000 ALTER TABLE `profissional` DISABLE KEYS */;
INSERT INTO `profissional` VALUES (1,'Orlando Nobrega','ativo'),(2,'Rafaela Tenorio','ativo'),(3,'João Paulo Nobrega','ativo');
/*!40000 ALTER TABLE `profissional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profissionalatende`
--

DROP TABLE IF EXISTS `profissionalatende`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profissionalatende` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status` enum('ativo','inativo') DEFAULT NULL,
  `procedimentos_id` int NOT NULL,
  `profissional_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_profissionalatende_procedimentos1_idx` (`procedimentos_id`),
  KEY `fk_profissionalatende_profissional1_idx` (`profissional_id`),
  CONSTRAINT `fk_profissionalatende_procedimentos1` FOREIGN KEY (`procedimentos_id`) REFERENCES `procedimentos` (`id`),
  CONSTRAINT `fk_profissionalatende_profissional1` FOREIGN KEY (`profissional_id`) REFERENCES `profissional` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profissionalatende`
--

LOCK TABLES `profissionalatende` WRITE;
/*!40000 ALTER TABLE `profissionalatende` DISABLE KEYS */;
INSERT INTO `profissionalatende` VALUES (1,'ativo',1,2),(2,'ativo',2,2),(3,'ativo',2,3),(4,'inativo',1,3),(5,'ativo',3,1),(6,'ativo',4,1),(7,'ativo',5,1),(8,'ativo',6,1);
/*!40000 ALTER TABLE `profissionalatende` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiposolicitacao`
--

DROP TABLE IF EXISTS `tiposolicitacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tiposolicitacao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(250) DEFAULT NULL,
  `status` enum('ativo','inativo') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiposolicitacao`
--

LOCK TABLES `tiposolicitacao` WRITE;
/*!40000 ALTER TABLE `tiposolicitacao` DISABLE KEYS */;
INSERT INTO `tiposolicitacao` VALUES (1,'Consulta','ativo'),(2,'Exames Laboratoriais','ativo');
