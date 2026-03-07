CREATE DATABASE escola_pedro;

USE escola_pedro;

CREATE TABLE alunos(

id INT PRIMARY KEY AUTO_INCREMENT,
nome VARCHAR(100) NOT NULL,
idade INT,
uf VARCHAR(2),
cidade VARCHAR(50)

);

INSERT INTO alunos (nome, idade, uf, cidade)
VALUES
('Pedro', 18, 'SP', 'São Paulo'),
('Yuri', 17, 'RJ', 'Cabo Frio'),
('Melissa', 15, 'BA', 'Salvador');

SELECT id, nome, idade, uf, cidade FROM alunos;