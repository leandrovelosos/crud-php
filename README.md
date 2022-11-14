## CRUD PHP
### Tecnologias utilizadas
- PHP
- MySQL
- Bootstrap
## Banco de daddos
Crie um banco de dados `cadastro` e execute as instruções SQL abaixo para criar a tabela `usuarios` 
```
CREATE TABLE `usuarios` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `data_nasc` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 
DEFAULT CHARSET=utf8mb4 
COLLATE=utf8mb4_0900_ai_ci;
```
