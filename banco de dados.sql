/*Criando a databade CADASTRO se não existir*/

-- create database if not exists saads2017
-- default character set utf8
-- default collate utf8_general_ci;

-- USE saads2017;


/*Criando a tabela de cadastro de ADMINISTRAÇÃO da Semana Academica Do ISUL*/

create table if not exists administracao (
id_admin int not null auto_increment,
nome varchar(60) not null,
email varchar(50) not null unique,
usuario varchar (15) not null unique,
senha varchar(40) not null,
primary key(id_admin)
) ENGINE=InnoDB DEFAULT character set=utf8 collate utf8_general_ci; 



/*Criando a tabela de cadastro de MINI CURSO da Semana Academica Do ISUL*/

create table if not exists cursos (
cod_curso int not null auto_increment,
nome_curso varchar(100) not null,
nome_prof varchar(60) not null,
primary key(cod_curso)
) ENGINE=InnoDB DEFAULT character set=utf8 collate utf8_general_ci;


/* insere os mini cursos no banco  */

INSERT INTO `cursos` (`cod_curso`, `nome_curso`, `nome_prof`) VALUES
(1, 'Cobol', 'Alex Valerio'),
(2, 'PostgreSQL para desenvolvedores', 'Fabrizio Mello'),
(3, 'Introducao ao LaTex', 'Simone Ferreira'),
(4, 'Intruducao ao Arduino', 'Leandro Camargo'),
(5, 'Introducao a jogos com a engine Unity', 'Marcelo Siedler'),
(6, 'Intruducao ao Arduino', 'Leandro Camargo');





/*Criando a tabela de cadastro de ALUNOS MINI CURSOS da Semana Academica Do ISUL*/

create table if not exists alunos_cursos (
cod_aluno int not null auto_increment,
nome varchar(60) not null,
email varchar(50) not null unique,
cpf char(11) not null unique,
cod_curso int not null,
presenca char(3) DEFAULT 'nao',
primary key(cod_aluno),
FOREIGN KEY (cod_curso) REFERENCES cursos (cod_curso)
) ENGINE=InnoDB DEFAULT character set=utf8 collate utf8_general_ci;


/*Criando a tabela de cadastro de PARTICIPANTES da Semana Academica Do ISUL*/

create table if not exists participantes (
cod_parti int not null auto_increment,
nome varchar(60) not null,
email varchar(50) not null unique,
cpf char(11) not null unique,
inst varchar(60) not null,
dia_um char(3) DEFAULT 'nao',
dia_dois char(3) DEFAULT 'nao',
dia_tres char(3) DEFAULT 'nao',
primary key(cod_parti)
) default charset=utf8;
