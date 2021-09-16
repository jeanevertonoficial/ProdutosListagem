
DROP TABLE IF EXISTS `produtoscadastrados`;

CREATE TABLE `produtoscadastrados` (
  `id` int NOT NULL,
  `nomeproduto` varchar(255) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `subcategoria` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `dataproduto` datetime NOT NULL,
  `setor` varchar(45) NOT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ;


/*!40000 ALTER TABLE `produtoscadastrados` DISABLE KEYS */;
INSERT INTO `produtoscadastrados` VALUES (1,'Cadeira','sofas','sala','Cadeira poltroa ','2021-08-29 09:22:00','diretoria','jean everton');
/*!40000 ALTER TABLE `produtoscadastrados` ENABLE KEYS */;
