create database solidariza;
use solidariza;
DROP DATABASE solidariza;

-- Tabela Usuários
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(120) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    cep CHAR(8) NOT NULL,
    logradouro VARCHAR(150) NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    localidade VARCHAR(100) NOT NULL,
    uf VARCHAR(2) NOT NULL,
    nivel_acesso ENUM('doador', 'admin') DEFAULT 'doador',
    data_cadastro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Tabela Campanhas
CREATE TABLE campanhas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    descricao TEXT NOT NULL,
    status ENUM('ativa', 'encerrada') NOT NULL DEFAULT 'ativa',
    data_criacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Tabela Doações
CREATE TABLE doacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    campanha_id INT NOT NULL,
    item_descricao VARCHAR(255) NOT NULL,
    quantidade INT NOT NULL,
    status_logistica ENUM('pendente', 'aprovado', 'coletado') NOT NULL DEFAULT 'pendente',
    data_registro DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (campanha_id) REFERENCES campanhas(id)
);

SELECT * FROM usuarios;
SELECT * FROM campanhas;
SELECT * FROM doacoes;