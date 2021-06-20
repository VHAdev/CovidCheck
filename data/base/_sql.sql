CREATE DATABASE covidcheck;


CREATE TABLE gd_gestor(
    id_gestor       INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome            VARCHAR(255) NOT NULL,
    email           VARCHAR(255) NOT NULL, 
    empresa         VARCHAR(255) NOT NULL,
    senha           VARCHAR(10) NOT NULL,
    usuario         VARCHAR(15)  NOT NULL UNIQUE
);


CREATE TABLE gd_funcionario(
    id_usuario      INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome            VARCHAR(255) NOT NULL,
    cpf             VARCHAR(14)  NOT NULL,
    empresa         VARCHAR(255) NOT NULL,
    sintomas        VARCHAR(400) NOT NULL,
    data_att        DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    send_mail       BOOLEAN NOT NULL DEFAULT FALSE            
);

