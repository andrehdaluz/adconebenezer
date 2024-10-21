
CREATE DATABASE IF NOT EXISTS FormularioFamilia;
USE FormularioFamilia;


CREATE TABLE IF NOT EXISTS familia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    num_pessoas INT NOT NULL,
    empregado ENUM('sim', 'nao') NOT NULL,
    menores_idade INT NOT NULL,
    matriculados ENUM('sim', 'nao') NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
