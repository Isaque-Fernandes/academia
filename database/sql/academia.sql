DROP DATABASE academia;
CREATE DATABASE academia;
USE academia;

SET SQL_MODE = 'STRICT_ALL_TABLES';


CREATE TABLE usuario(
	id INT AUTO_INCREMENT PRIMARY KEY,
	cpf VARCHAR(255) NOT NULL UNIQUE,
	nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
	telefone VARCHAR(255) DEFAULT NULL,
	dataNascimento VARCHAR(255) NOT NULL,
	atestadoMedico VARCHAR(255) DEFAULT NULL,
	comentario VARCHAR(255) DEFAULT NULL,
	dataInicio DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO usuario(cpf, nome, email, telefone, dataNascimento, atestadoMedico, comentario, dataInicio) VALUES 
	('171270807-47','Isaque','isaque@gmail.com',' 40028921','04-02-1999','Paciente se encontra em perfeitas condições', 'Cliente relata ser sedentário', "2021-04-13"),
	('171270807-48','Samara','samara@gmail.com',' 40028922','05-03-2000','Cliente relata preferência por exercícios para o fortalecimento das costas', ' ', "2021-04-14"),
	('171270807-49','Matheus','matheus@gmail.com',' 40028923','06-04-2001', ' ', ' ', "2021-04-15")
    ON DUPLICATE KEY UPDATE
	cpf = VALUE (cpf);
-- DELETE FROM user WHERE ID=3;
-- UPDATE user SET nome = 'Daniel', CPF = '17127080448' WHERE ID =1;
SELECT * FROM usuario;
CREATE TABLE categoria(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO categoria(nome) VALUES 
	('beginner'),
	('intermediary');
select * from categoria;
CREATE TABLE treino(
	id INT AUTO_INCREMENT PRIMARY KEY,
	categoria_id INT NOT NULL,
	nome VARCHAR(150) DEFAULT NULL,
    FOREIGN KEY (categoria_id) REFERENCES categoria(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO treino(categoria_id, nome) VALUES 
	(1, 'trainingA'),
	(1, 'trainingB'),
	(2, 'trainingA'),
    (2, 'trainingB'),
    (2, 'trainingC');
SELECT * from treino WHERE categoria_id ;
CREATE TABLE exercicio (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nome varchar (255) not null
);
INSERT INTO exercicio(nome) VALUES
-- begginer
	-- trainingA 
	('Remada alta 3x 10'),
	('Supino 3x 10'),
	('Flexão 3x 10'),
	('Abdominal 3x 10'),
	('Abdução Alter 3x 10'),
	('Polichinelo 3x 10'),
	('fasedfafdsaf 3x 10'),
	('dfdasfadsfads 3x 10'),
	('qfqffqwefqw 3x 10'),
	(' qfdqfedf 3x 10'),
	-- trainingB
	('Remada alta 3x 10'),
	('Supino 3x 10'),
	('Flexão 3x 10'),
	('Abdominal 3x 10'),
	('Abdução Alter 3x 10'),
	('Polichinelo 3x 10'),
	('fasedfafdsaf 3x 10'),
	('dfdasfadsfads 3x 10'),
	('qfqffqwefqw 3x 10'),
	(' qfdqfedf 3x 10'),
-- intermediary
	-- trainingA
	('fasdfasfasfasfsa 3x 10'),
	('adsfsdfasfdasfdsaf 3x 10'),
	('asfdfasfdfsaf 3x 10'),
	('asfdsafsdfsafsdaf 3x 10'),
	('afdfasdfadsfsadfasdf 3x 10'),
	('afdfadsfdasfdasfsa 3x 10'),
	('asfdafdsfdsafsdaf 3x 10'),
	('afdafsdfasfdasfas 3x 10'),
	('sdfdasfdsfadsfdasf 3x 10'),
	(' qaadfasfadsfsadf 3x 10'),
	-- trainingB
	('adfafdsfasfadsfdasfa 3x 10'),
	('adfafdsfadsfasdfads 3x 10'),
	('adfafdasfasdfasd 3x 10'),
	('adfsafdsfasfdsaf 3x 10'),
	('adsfasfdadsfasdfds 3x 10'),
	('dsfafsadfadsfasdf 3x 10'),
	('asdfafdsfdasfadsf 3x 10'),
	('afdafdsfasfadsfads 3x 10'),
	('asfdasfadsfasdfadsfdsa 3x 10'),
	(' dsfadsfasdfadsf 3x 10');
select * from exercicio;
CREATE TABLE treinoExercicio(
	id INT AUTO_INCREMENT PRIMARY KEY,
	categoria_id INT NOT NULL,
	treino_id INT NOT NULL,
	exercicio_id INT NOT NULL,
	foreign key (categoria_id) REFERENCES exercicio(id) ,
	foreign key (treino_id) REFERENCES treino(id) ,
	foreign key (exercicio_id) REFERENCES exercicio(id) 
);
insert into treinoExercicio(categoria_id, treino_id, exercicio_id) values
-- begginer
	-- trainingA
	(1, 1, 1),
	(1, 1, 2),
	(1, 1, 3),
	(1, 1, 4),
	(1, 1, 5),
	(1, 1, 6),
	(1, 1, 7),
	(1, 1, 8),
	(1, 1, 9),
	(1, 1, 10),
	-- trainingB
	(1, 2, 11),
	(1, 2, 12),
	(1, 2, 13),
	(1, 2, 14),
	(1, 2, 15),
	(1, 2, 16),
	(1, 2, 17),
	(1, 2, 18),
	(1, 2, 19),
	(1, 2, 20),
-- intermediary
	-- trainingA
    (2, 1, 21),
	(2, 1, 22),
	(2, 1, 23),
	(2, 1, 24),
	(2, 1, 25),
	(2, 1, 26),
	(2, 1, 27),
	(2, 1, 28),
	(2, 1, 29),
	(2, 1, 30),
	-- trainingB
	(2, 2, 31),
	(2, 2, 32),
	(2, 2, 33),
	(2, 2, 34),
	(2, 2, 35),
	(2, 2, 36),
	(2, 2, 37),
	(2, 2, 38),
	(2, 2, 39),
	(2, 2, 40);
select * from treinoExercicio;
select 
c.nome,
t.nome, 
e.nome 
from treino t
join treinoExercicio te
on te.treino_id = t.id
join categoria c
on te.categoria_id = c.id
join exercicio e
on te.exercicio_id = e.id;
select * from categoria;
select * from treino;
select * from treinoExercicio;
select * from exercicio;



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

SELECT nomeInstrutor  FROM instrutor WHERE nomeInstrutor="Fulano" ;

/*
create table fichaTreino(
	ID INT AUTO_INCREMENT PRIMARY KEY,
	usuario_id INT NOT NULL,
	instrutor_id INT NOT NULL,
    treino_id INT NOT NULL,
	dataFim DATE NOT NULL, 
	FOREIGN KEY (usuario_id) REFERENCES usuario(id) ON DELETE CASCADE,
	FOREIGN KEY (instrutor_id) REFERENCES instrutor(id) ON DELETE CASCADE,
    FOREIGN KEY (treino_id) REFERENCES treino(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
INSERT INTO fichaTreino (usuario_id, instrutor_id, treino_id, dataFim) VALUES
	(1, 1, 1, "2022-03-15"),
	(2, 2, 1, "2022-03-16"),
	(3, 3, 1, "2022-03-17");
SELECT * FROM fichaTreino;
/*Join: userCard
Tables: user, trainingCard, professional, training, category, trainingExercise, exercise  
*/
/*select * from usuario;*/
/*
select 
	u.cpf, u.dataNascimento, u.nome, u.comentario, u.atestadoMedico,
	i.nomeInstrutor instrutor,
	c.nome categoriaTreino,
	t.nome, 
	e.nome, 
	ft.dataFim
from usuario u
join fichaTreino ft
on ft.usuario_id = u.id
join instrutor i
on ft.instrutor_id = i.id
join treino t
on ft.treino_id = t.id
join categoria c
on t.categoria_id = c.id
join treinoExercicio te
on te.treino_id = t.id
join exercicio e
on te.exercicio_id = e.id
where ft.usuario_id ;
/*Join: professionalCard
Tables: professional, address, city 
*/

select * from instrutor;


create table login (
ID int auto_increment primary key, 
usuario varchar(255) not null,
senha varchar(255) not null
);
insert into login(usuario, senha) values
("admin123", "admin");