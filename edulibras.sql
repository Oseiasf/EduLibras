create database edu_libras;
use edu_libras;
create table Aluno (
id_aluno int AUTO_INCREMENT,
nome_completo varchar(100),
cpf varchar(14),
email varchar(100),
senha varchar(200),
data_nascimento date,
sinal varchar(200),
data_alteracao timestamp,
primary key (id_aluno)
);
create table Fale_conosco (
id_fale_conosco int AUTO_INCREMENT,
email varchar(100),
descricao text(5000),
primary key(id_fale_conosco)
);
