-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: blog_conexa
-- ------------------------------------------------------
-- Server version	5.7.35-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Integrações'),(2,'Serviços'),(3,'Financeiro'),(4,'Agenda'),(5,'Parceiros'),(6,'Outros');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_autor` varchar(255) NOT NULL,
  `comentario` text NOT NULL,
  `id_post` int(11) NOT NULL,
  PRIMARY KEY (`id_comentario`),
  KEY `id_post` (`id_post`),
  CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
INSERT INTO `comentario` VALUES (1,'Vanessa','Comentário Postagem',1),(2,'Camila Souza','Comentário sobre a postagem.',2),(3,'José da Silva','Comentário da postagem do dia 16/06/2021',1),(4,'João Santos','Comentando o post do dia 18/09/2021',2),(5,'Maria Souza','Comentando post de teste',2),(6,'João Pedro','Comentário do post do dia ',3);
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `data_post` date NOT NULL,
  `autor` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_post`),
  KEY `id_categoria` (`id_categoria`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'2021-06-16','Caren Grilo','Régua de cobrança: reduzindo a inadimplência em seu negócio','imagem','A inadimplência é um risco eminente para qualquer negócio, principalmente em um cenário de incertezas como o que estamos vivendo. Uma das ferramentas mais eficientes para minimizar esse risco é a régua de cobrança.\r\n\r\nA régua de cobrança permite monitorar a evolução dos pagamentos, visualizar a receita futura e manter sob controle o financeiro da sua empresa. De maneira simplificada, a régua gerencia o envio de mensagens, como alertas, em dias específicos para lembrar da mensalidade dias antes, na data (para que o cliente não se esqueça de efetuar o pagamento) e após o vencimento.\r\n\r\nPossibilita ainda que, para cada cliente, de acordo com o histórico de adimplência, sejam aplicados critérios diferenciados considerando a gravidade dos casos analisados.',3),(2,'2021-09-18','Igor Oliveira','Como fazer Conciliação Bancária em seu Coworking','imagem','Como você já sabe, o aspecto financeiro é fundamental para a sobrevivência de qualquer negócio, por isso uma das melhores formas de evitar qualquer surpresa nas finanças da sua empresa é através da conciliação bancária.\r\n\r\nPorém, muitos empreendedores não dão a atenção necessária a esta atividade e acabam desconsiderando valores que acreditam ser muito baixos, como tarifas bancárias.\r\n\r\nSó que para ter certeza se o saldo que você imagina ter na sua conta realmente está lá, será necessário realizar frequentemente a conciliação bancária.\r\n\r\nSe você tem um coworking ou oferece serviços de cobranças recorrentes, o controle de todo o dinheiro que entra ou sai da sua empresa precisa ser ainda mais minucioso.',2),(3,'2021-09-20','Monalisa Passos','DRE: Entenda de uma vez por todas porque é importante analisar esse relatório!','imagem','Demonstrações contábeis podem ajudar a nortear decisões e o futuro do seu negócio. Hoje iremos falar da Demonstração do Resultado do Exercício – mais conhecida como DRE.\r\n\r\nGerenciar um negócio requer tomar as decisões certas e, para uma boa tomada de decisão, deter informação adequada é fundamental!  Por isso as demonstrações contábeis são tão importantes para uma gestão eficiente.\r\n\r\nA DRE vai muito além de uma ferramenta para o seu contador. Ao descrever um resumo do que aconteceu na sua empresa em determinado período, a ideia é que você tenha, de forma organizada, informações que poderão te ajudar a entender a situação financeira da companhia, identificando lucro ou prejuízo em determinados períodos (que podem ser meses ou anos).\r\n\r\nREGIME DE COMPETÊNCIA\r\n\r\nA DRE atua pelo regime de competência. Isso significa que todas as entradas e saídas são contabilizadas no momento em que elas foram geradas. É importante frisar que o objetivo da DRE não é dizer quanto dinheiro se tem em caixa, para isso já existe um demonstrativo: o Fluxo de Caixa, (também disponível no Conexa) e sim evidenciar quanto de lucro ou prejuízo será gerado a partir dos eventos num período específico.',3);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'blog_conexa'
--

--
-- Dumping routines for database 'blog_conexa'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-13 10:50:46
