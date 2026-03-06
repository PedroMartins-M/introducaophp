CREATE DATABASE loja;

USE loja;

CREATE TABLE produtos(

id INT PRIMARY KEY AUTO_IMCREMENT,
nome VARCHAR(100) NOT NULL,
preco DECIMAL (10,2),
estoque INT
);

INSERT INTO produtos (nome, preco, estoque)
VALUES
('Monitor',250.00, 5),
('Headset',150.00, 10),
("Teclado",50.00, 32);

SELECT id, nome, preco, estoque FROM produtos;

