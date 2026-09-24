--
-- Banco de dados: wda_crud
--
CREATE DATABASE IF NOT EXISTS laptop DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE laptop;
-- --------------------------------------------------------
--
-- Estrutura da tabela customers
--
CREATE TABLE laptops (
id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
 marca varchar(50) NOT NULL,
 modelo varchar(50) NOT NULL,
 tamanho varchar(15) NOT NULL,
 datacad datetime NOT NULL,
 datamod datetime NOT NULL,
 foto varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Extraindo dados da tabela customers
--
INSERT INTO laptops (marca, modelo, tamanho, datacad, datamod, foto) VALUES
('Dell', 'Inspiron 15 3520', '15.6"', NOW(), NOW(), 'dell_inspiron.jpg'),
('Apple', 'MacBook Air M2', '13.6"', NOW(), NOW(), 'macbook_air.jpg');
--
