show databases;
use BdD;

show tables;

create table livro(
	id int not null unique auto_increment,
	titulo varchar(150) not null, 
    autor varchar(150) not null,
    dataPub date not null unique,
    dataCheg date not null,
    genero varchar(150) not null,
    sinopse varchar(200),
    primary key (id)
);

select * from livro;
describe livro;