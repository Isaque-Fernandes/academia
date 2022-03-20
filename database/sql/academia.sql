DROP DATABASE academia;
CREATE DATABASE academia;
USE academia;

SET SQL_MODE = 'STRICT_ALL_TABLES';


															
CREATE TABLE usuario(
	idUsuario INT AUTO_INCREMENT PRIMARY KEY,
	cpf VARCHAR(255) NOT NULL ,
	nomeUsuario VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
	telefone VARCHAR(255) DEFAULT NULL,
	dataNascimento VARCHAR(255) NOT NULL,
	atestadoMedico VARCHAR(255) DEFAULT NULL,
	comentario VARCHAR(255) DEFAULT NULL,
	dataInicio DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO usuario (cpf, nomeUsuario, email, telefone, dataNascimento, atestadoMedico, comentario, dataInicio) VALUES
	("LOREM", "SUJEITO", "LOREM", "LOREM", "LOREM", "LOREM", "LOREM", "1999-02-04"),
    	("LOREM", "INDIVÍDUO", "LOREM", "LOREM", "LOREM", "LOREM", "LOREM", "1999-02-04"),
         	("LOREM", "SUSPEITO", "LOREM", "LOREM", "LOREM", "LOREM", "LOREM", "1999-02-04");
SELECT * FROM usuario;


create table instrutor(
	idInstrutor INT AUTO_INCREMENT PRIMARY KEY,
	cpf VARCHAR(255) NOT NULL,
    nomeInstrutor VARCHAR(255) NOT NULL,
	dataNascimento VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
	telefone VARCHAR(255) NOT NULL,
	cidade VARCHAR(255) NOT NULL,
	siglaUf VARCHAR(255) NOT NULL,
    bairro VARCHAR(255) NOT NULL,
	rua VARCHAR(255) NOT NULL,
	numero INT NOT NULL,
	complemento VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
SELECT * FROM instrutor;
INSERT INTO instrutor(cpf, nomeInstrutor, dataNascimento, email, telefone, cidade, siglaUf, bairro, rua, numero, complemento) values
("LOREM", "FULANO", "LOREM", "LOREM", "LOREM", "LOREM", "LOREM", "LOREM", "LOREM", 0, "LOREM"),
("LOREM", "CICLANO", "LOREM", "LOREM", "LOREM", "LOREM", "LOREM", "LOREM", "LOREM", 0, "LOREM"),
("LOREM", "MARCANO", "LOREM", "LOREM", "LOREM", "LOREM", "LOREM", "LOREM", "LOREM", 0, "LOREM");
select * from instrutor;

create table cadastro (
id int auto_increment primary key,
email varchar(255),
senha varchar(255)
);

insert into cadastro (email, senha)values
("admin", "123");

select * from cadastro;