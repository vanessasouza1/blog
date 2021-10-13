CREATE DATABASE  IF NOT EXISTS `blogconexa` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `blogconexa`;
-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: blogconexa
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(255) NOT NULL,
  `comentario` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_post` (`id_post`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `post` (`id`),
  CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
INSERT INTO `comentario` VALUES (1,'Igor Oliveira','Comentário Post 1',1,1),(2,'Vanessa Souza','Comentário 2 - Post 1',1,2),(3,'Igor Oliveira','Comentário Post 3',3,1),(4,'Breno Caires','Comentário Post 4',4,4),(5,'Monalisa Passos','Comentário Post Ações Covid',5,3),(6,'Igor Oliveira','Comentando Post',6,1);
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_post` date NOT NULL,
  `autor` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categoria` (`id_categoria`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`),
  CONSTRAINT `post_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (1,'2021-10-12','Igor Oliveira','O que é Assinatura Eletrônica e porque usar em seu Coworking','Certamente você já pesquisou sobre assinatura eletrônica ao se deparar com um potencial cliente do seu coworking que está em outra localidade.\r\n\r\nPorém, antes da assinatura eletrônica, estabelecer uma relação jurídica com este cliente era um processo que poderia levar dias, ou até mesmo semanas.\r\n\r\nSendo assim, a assinatura eletrônica surgiu como um meio de validar contratos, reduzindo custos com envio e papel, além de evitar desgastes com erros de digitação.\r\n\r\nAcima de tudo, a principal vantagem deste método é acelerar o processo de assinatura e documentação de um contrato.\r\nPor isso, preparamos este artigo para que você entenda tudo que precisa saber sobre as assinaturas eletrônicas (conceito, aspectos jurídicos, aplicação, etc.).\r\n\r\nAlém disso, também vamos falar sobre como a assinatura eletrônica pode se tornar em um diferencial competitivo para seu negócio.',3,1),(2,'2021-10-12','Igor Oliveira','Como fazer Conciliação Bancária em seu Coworking','Como você já sabe, o aspecto financeiro é fundamental para a sobrevivência de qualquer negócio, por isso uma das melhores formas de evitar qualquer surpresa nas finanças da sua empresa é através da conciliação bancária.\r\n\r\nPorém, muitos empreendedores não dão a atenção necessária a esta atividade e acabam desconsiderando valores que acreditam ser muito baixos, como tarifas bancárias.\r\n\r\nSó que para ter certeza se o saldo que você imagina ter na sua conta realmente está lá, será necessário realizar frequentemente a conciliação bancária.\r\n\r\nSe você tem um coworking ou oferece serviços de cobranças recorrentes, o controle de todo o dinheiro que entra ou sai da sua empresa precisa ser ainda mais minucioso.\r\n\r\nGarantir um fluxo de caixa eficiente é essencial para que você consiga honrar com suas despesas, além de te ajudar a planejar futuros investimentos no seu negócio.\r\n\r\nAlém disso,  segundo o IBGE (Instituto Brasileiro de Geografia e Estatística), 25% das empresas Brasileiras fecham por falta de planejamento.\r\n\r\nPor isso, realizar a conciliação bancária é uma tarefa que exige muita atenção, principalmente quando você não tem um setor financeiro muito bem estruturado.',6,1),(3,'2021-10-12','Monalisa Passos','DRE: Entenda de uma vez por todas porque é importante analisar esse relatório!','Demonstrações contábeis podem ajudar a nortear decisões e o futuro do seu negócio. Hoje iremos falar da Demonstração do Resultado do Exercício – mais conhecida como DRE.\r\n\r\nGerenciar um negócio requer tomar as decisões certas e, para uma boa tomada de decisão, deter informação adequada é fundamental!  Por isso as demonstrações contábeis são tão importantes para uma gestão eficiente.\r\n\r\nA DRE vai muito além de uma ferramenta para o seu contador. Ao descrever um resumo do que aconteceu na sua empresa em determinado período, a ideia é que você tenha, de forma organizada, informações que poderão te ajudar a entender a situação financeira da companhia, identificando lucro ou prejuízo em determinados períodos (que podem ser meses ou anos).\r\nA DRE atua pelo regime de competência. Isso significa que todas as entradas e saídas são contabilizadas no momento em que elas foram geradas. É importante frisar que o objetivo da DRE não é dizer quanto dinheiro se tem em caixa, para isso já existe um demonstrativo: o Fluxo de Caixa, (também disponível no Conexa) e sim evidenciar quanto de lucro ou prejuízo será gerado a partir dos eventos num período específico.',3,3),(4,'2021-10-12','Monalisa Passos','Depois da tempestade vem o arco-íris','Mais uma vez estamos vendo os gestores de Coworking preocupados com o cenário, nosso país está com várias regiões afetadas pela Pandemia Covid-19 e muitas cidades decretaram Lockdown. Nós já vimos isso antes! E assim como é um cenário difícil para manter a operação, também já vimos que é uma pausa para um grande crescimento em um futuro não muito distante.\r\n\r\nPessoas e empresas já se acostumaram com o formato híbrido de trabalho. No caso das pessoas, elas percebem que não perdem tanto tempo no trânsito e economizam em algumas outras questões como deslocamento, vestuário e refeições fora de casa. No caso das empresas, elas percebem que não há mais a necessidade de espaços gigantescos, que a tecnologia está aí para movimentar o engajamento e que há a possibilidade de um encontro presencial por semana, de acordo com a demanda da equipe. Sabe quem se beneficia com essa mudança de comportamento? Os Coworkings.\r\n\r\nO mercado de Coworking no Brasil é muito jovem e passa por mudanças contínuas, mesmo porque nossa população não está acostumada nem com o formato, nem com o compartilhamento. Porém, assim como o resto do mundo, o Brasil não pode fugir de seguir as tendências de tecnologia e trabalho que se proliferam. Um dos grandes debates do mercado é sobre mobilidade: Para que dificultar se podemos facilitar? As ruas estão cheias de veículos contribuindo com a poluição do ar e com o aquecimento global. Então, se as pessoas saírem menos de casa, poderemos contribuir com a mobilidade urbana, meio ambiente e o combate à uma das grandes doenças do século: Estresse. Colaboradores felizes quer dizer mais produtividade, não é mesmo?',5,3),(5,'2021-10-13','Breno Caires','Ações COVID-19','Desde o início da pandemia estamos realizando ações para ajudar nossos clientes a passarem por esse período tão difícil. Acreditamos no poder da colaboração e sabemos que, se continuarmos juntos, todos podemos sair mais fortes.\r\n\r\nTodas essas ações vem sendo amplamente divulgadas, mas decidimos listar nesse post tudo o que colocamos em prática neste período:\r\n\r\nSem suspensão por inadimplência. Como parte da política da nossa empresa, o acesso é automaticamente bloqueado após 90 dias de inadimplência. Esse bloqueio foi suspenso por tempo indeterminado.\r\nTreinamento e consultoria gratuita. Visto que a pandemia deixou uma parte dos coworkings com tempo ocioso, disponibilizamos treinamento e consultoria gratuita para que esse tempo fosse aproveitado para capacitar e orientar ainda mais toda a equipe sobre melhores práticas de gestão.\r\nCongelamos os preços e contratos. Mesmo diante da disparada do dólar e consequente aumento abrupto de despesas, não aplicamos nenhum tipo de reajuste em todas as tabelas de preços e contratos já existentes.\r\nConexa Talk. Juntamos mais de 500 gestores de coworkings online em um bate papo para trazer informação e expandir os horizontes sobre o que podemos encontrar no futuro pós pandemia.',5,4),(6,'2021-10-13','Monalisa Passos','Integração com o Gerencianet – Simplificando sua cobrança por boletos!','Boleto bancário é uma das formas de pagamento mais utilizadas atualmente, além de ser fácil de emitir e simples de pagar, tem uma tarifa fixa, o que é ótimo para cobrar grandes somas. O Conexa está apto para emissão de boletos pelos principais bancos nacionais. Nesses casos, você pode emitir os boletos pelo software, gerar um arquivo de remessa e recepcionar o arquivo de retorno do banco correspondente para quitação automática. A Integração com o Gerencianet simplifica ainda mais esse processo, eliminando a troca de arquivos, e possui uma taxa especial e exclusiva para clientes Conexa.\r\nAbertura de conta Gerencianet sem burocracia! Pela internet, sem mensalidade e sem taxas administrativas;\r\nTarifa de liquidação de boleto competitiva: R$2,45 (exclusiva para clientes Conexa);\r\nSem tarifa no registro, nem na baixa, nem na alteração, apenas na LIQUIDAÇÃO do boleto;\r\nIntegração automática com Conexa: Gerou boleto no Conexa? Já gerou na Gerencianet! Assim como alterar, cancelar, tudo no Conexa e tudo automático;\r\nRegistro do boleto no sistema bancário é automático, ou seja, gerou o boleto o seu cliente já consegue pagar em qualquer banco em poucos minutos;\r\nDinheiro entra na conta Gerencianet em D+1;\r\nOs títulos podem ser protestados no cartório, pois você será o beneficiário direto dos boletos gerados;\r\nVocê poderá solicitar um cartão de crédito para sua empresa sem anuidade;\r\nA Gerencianet é um Meio de Pagamentos, autorizada pelo Banco Central, você poderá também pagar contas diretamente pelo internet banking deles;\r\nO prazo de compensação das TEDs feitas pela Gerencianet é de, no máximo, 2 dias úteis. Mas, geralmente, o processo é efetivado já no mesmo dia.',3,3),(7,'2021-10-13','Igor Oliveira','PIX para empresas – Tudo que você precisa saber','No início de 2020 o Banco Central anunciou o Pix para empresas e, mesmo antes do lançamento oficial em novembro, a novidade já foi considerada uma das maiores inovações do setor bancário dos últimos anos.\r\n\r\nConfira neste artigo tudo que você precisa saber sobre o novo sistema de pagamentos instantâneos do Banco Central que vem revolucionando a forma de fazer transferências e pagamentos em todo o Brasil.\r\n\r\nO que é o PIX;\r\nComo funciona o PIX para empresas;\r\nQuais as principais vantagens de adotar o PIX em seu Coworking;\r\nE muito mais.\r\nNo entanto, se você está buscando entender tudo sobre o assunto, o ideal é que você “comece do começo”. (risos)\r\n\r\nPor isso, dedicamos o próximo tópico para que você saiba, de forma clara e objetiva, o que é o PIX para empresas.\r\n\r\nO que é o PIX para empresas\r\nO Pix é um sistema de pagamentos instantâneo apresentado pelo Banco Central como uma forma “gratuita” de fazer transferências entre pessoas e empresas.\r\n\r\nNão se trata de um aplicativo exclusivo de um instituição financeira!\r\n\r\nNa realidade, é provável que todos os bancos do país ofereçam este meio de pagamentos junto a outros canais que seus clientes estão acostumados a usar, como aplicativo e internet banking.\r\n\r\nClique aqui e confira a lista de participantes do PIX atualizada.',4,1);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Igor Oliveira','igoroliveira@gmail.com','7c222fb2927d828af22f592134e8932480637c0d'),(2,'Vanessa Souza','vanessa@gmail.com','7c222fb2927d828af22f592134e8932480637c0d'),(3,'Monalisa Passos','monalisa@gmail.com','7c222fb2927d828af22f592134e8932480637c0d'),(4,'Breno Caires','breno@gmail.com','7c222fb2927d828af22f592134e8932480637c0d');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-12 23:26:42
