CREATE DATABASE jif;
USE jif;

CREATE TABLE usuario (
  nome VARCHAR(255),
  email VARCHAR(255) PRIMARY KEY,
  senha VARCHAR(255),
  imagem VARCHAR(255),
  telefone VARCHAR(255)
);

CREATE TABLE noticias (
  id INT,
  categoria VARCHAR(255),
  titulo VARCHAR(255),
  DataN DATE,
  autor VARCHAR(255),
  imagem VARCHAR(255)
);
