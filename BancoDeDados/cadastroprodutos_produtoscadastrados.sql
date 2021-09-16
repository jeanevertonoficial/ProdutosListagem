DROP TABLE IF EXISTS `produtoscadastrados`;

CREATE TABLE `produtoscadastrados` (
  `id` int NOT NULL,
  `nomeproduto` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `dataproduto` datetime NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);


LOCK TABLES `produtoscadastrados` WRITE;
/*!40000 ALTER TABLE `produtoscadastrados` DISABLE KEYS */;
/*!40000 ALTER TABLE `produtoscadastrados` ENABLE KEYS */;
