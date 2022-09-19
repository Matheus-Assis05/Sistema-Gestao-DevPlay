create database bancoSgf;
use bancoSgf;

-- tabelas

create table usuario(
	email varchar(50) primary key not null,
    nome varchar(35)  not null,
    senha varchar(25) not null
)engine=innodb;

-- crud
select * from usuario; 