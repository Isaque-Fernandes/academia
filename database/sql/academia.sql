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


CREATE TABLE categoria(
	idCategoria INT AUTO_INCREMENT PRIMARY KEY,
	nomeCategoria VARCHAR(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO categoria(nomeCategoria) VALUES 
	('INICIANTE'),
	('INTERMEDIÁRIO');
select * from categoria;

/*
CREATE TABLE treino(
	idTreino INT AUTO_INCREMENT PRIMARY KEY,
	id_categoria INT NOT NULL,
	nomeTreino VARCHAR(255) DEFAULT NULL,
    FOREIGN KEY (id_categoria) REFERENCES categoria(idCategoria) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO treino(id_categoria, nomeTreino) VALUES 
	(1, 'trainingA'),
	(1, 'trainingB'),
    (2, 'trainingA'),
	(2, 'trainingB');
    SELECT * from treino;





CREATE TABLE exercicio (
	idExercicio INT AUTO_INCREMENT PRIMARY KEY,
	nomeExercicio varchar (255) not null
);

INSERT INTO exercicio(nomeExercicio) VALUES
-- begginer
	-- trainingA 
	('ex01'),
	('ex02'),
	('ex03'),
	('ex04'),
	('ex05'),

	-- trainingB
	('ex06'),
	('ex07'),
	('ex08'),
	('ex09'),
	('ex10');


select * from exercicio;


CREATE TABLE treinoExercicio(
	id INT AUTO_INCREMENT PRIMARY KEY,
	id_categoria INT NOT NULL,
	id_treino INT NOT NULL,
	id_exercicio INT NOT NULL,
	foreign key (id_categoria) REFERENCES categoria(idCategoria) ,
	foreign key (id_treino) REFERENCES treino(idTreino) ,
	foreign key (id_exercicio) REFERENCES exercicio(idExercicio) 
);
insert into treinoExercicio(id_categoria, id_treino, id_exercicio) values
-- begginer
	-- trainingA
	(1, 1, 1),
	(1, 1, 2),
	(1, 1, 3),
	(1, 1, 4),
	(1, 1, 5),

	-- trainingB
	(1, 2, 6),
	(1, 2, 7),
	(1, 2, 8),
	(1, 2, 9),
	(1, 2, 10),
    
    -- intermediario
	-- trainingA
	(2, 1, 1),
	(2, 1, 2),
	(2, 1, 3),
	(2, 1, 4),
	(2, 1, 5),

	-- trainingB
	(2, 2, 6),
	(2, 2, 7),
	(2, 2, 8),
	(2, 2, 9),
	(2, 2, 10);
select * from treinoExercicio;
*/

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
 

create table usuarioTreino(
	IdUsuarioTreino INT AUTO_INCREMENT PRIMARY KEY,
	id_usuario INT NOT NULL,
	id_instrutor INT NOT NULL,
	FOREIGN KEY (id_usuario) REFERENCES usuario(idUsuario) ON DELETE CASCADE,
	FOREIGN KEY (id_instrutor) REFERENCES instrutor(idInstrutor) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*INSERT INTO usuarioTreino (id_usuario, id_instrutor) VALUES
	(1, 1),
	(2, 1),
    (3, 2);
select * from usuarioTreino;*/

select * from usuario;
select * from instrutor;

create or replace view fichaTreino as
select 
u.nomeUsuario,
i.nomeInstrutor
from usuario u
join usuarioTreino ut
on ut.id_usuario = u.idUsuario
join instrutor i 
on ut.id_instrutor = i.idInstrutor;
select * from fichaTreino;

select * from usuario;
select * from instrutor;

/*
create 
or replace view fichaTreino as
select 
c.nomeCategoria,
t.nomeTreino,
e.nomeExercicio
from categoria c
join treino t
on t.id_categoria = c.idCategoria
join treinoExercicio te
on te.id_categoria  = c.idCategoria
join exercicio e
on te.id_exercicio = e.idExercicio;
select * from fichaTreino;
*/




