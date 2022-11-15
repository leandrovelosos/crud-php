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
## Screenshots
### Cadastro de novo usuário
![novo-usuario](https://user-images.githubusercontent.com/80790598/201793781-136b17c0-d331-486c-902e-7a4ead140ff6.png)
### Consulta de usuários cadastrados 
![consultar](https://user-images.githubusercontent.com/80790598/201793916-8c6b35c5-5ff4-4b0c-b21e-630c78d0cc8d.png)
