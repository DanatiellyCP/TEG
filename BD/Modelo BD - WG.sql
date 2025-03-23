--Modelo de banco de dados SQL
-- Projeto WG WORK GROUP
-- Mudei o nome do banco para Trabalho Em Grupo - TEG 

CREATE DATABASE work_group ;

CREATE TABLE usuarios (
	Codigo INTEGER,
	Nome VARCHAR(255),
	Senha VARCHAR (10),
	Email VARCHAR(255),
	PRIMARY KEY(Codigo)
);

CREATE TABLE projetos (
	Codigo INTEGER,
	Nome VARCHAR (255),
	Descricao VARCHAR (255),
	Status VARCHAR (255),
	DtCriacao VARCHAR (255),
	UsuarioCriador INTEGER,
	PRIMARY KEY(Codigo)
);

CREATE TABLE atividades (
	Codigo INTEGER,
	Nome VARCHAR (255),
	Descricao VARCHAR (255),
	Status VARCHAR (255),
	DtCriacao VARCHAR (255),
	UsuarioCriador INTEGER,
	Projeto INTEGER,
	PRIMARY KEY(Codigo)
);

CREATE TABLE participa_projeto (
	Codigo INTEGER,
	Usuario INTEGER,
	Projeto INTEGER,
	PRIMARY KEY(Codigo)
);

CREATE TABLE participa_atividade (
	Codigo INTEGER,
	Usuario INTEGER,
	Projeto INTEGER,
	PRIMARY KEY(Codigo)
);

