create database bancoSgf;
use bancoSgf;

-- tabelas

create table usuario(
	email varchar(50) primary key not null,
    nome varchar(35)  not null,
    senha varchar(25) not null
)engine=innodb;

create table lancamento(
	email_user varchar(50) primary key not null,
    mes varchar(15) not null,
    renda double(8,2),
    despesa double(8,2)
)engine=innodb;

-- crud
select * from usuario; 