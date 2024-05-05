-- Criação da tabela usuarios
CREATE DATABASE IF NOT EXISTS cadastro_sorveteria;

USE cadastro_sorveteria;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(100),
    telefone VARCHAR(20),
    genero VARCHAR(10), -- Alterado de 'sexo' para 'genero'
    data_nasc DATE,
    cidade VARCHAR(100),
    endereco VARCHAR(200)
);

-- Inserção de dados iniciais - Usuários Exemplos
INSERT INTO usuarios (nome, email, senha, telefone, genero, data_nasc, cidade, endereco) VALUES ('João', 'joao@exemplo.com', 'senha123', '1234567890', 'Masculino', '1990-01-01', 'São Paulo', 'Rua Exemplo, 123');
INSERT INTO usuarios (nome, email, senha, telefone, genero, data_nasc, cidade, endereco) VALUES ('Maria', 'maria@exemplo.com', 'abc123', '9876543210', 'Feminino', '1995-05-05', 'Rio de Janeiro', 'Avenida Teste, 456');
