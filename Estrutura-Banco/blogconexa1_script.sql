

create database blogconexa
default character set utf8
default collate utf8_general_ci;

use blogconexa;
create table categoria(
	id int not null auto_increment,
    nome varchar(255) not null,
    primary key (id)
) default charset utf8;


create table usuario(
	id int not null auto_increment,
    nome varchar(255) not null,
    email varchar(255) not null,
    senha varchar(255) not null,
    primary key (id)
) default charset utf8;


create table post(
	id int not null auto_increment,
    data_post date not null,
    autor varchar(255) not null,
    titulo varchar(255) not null,
    texto text not null,
    id_categoria int not null,
    id_usuario int not null,
    primary key (id)
)default charset utf8;

alter table post
add foreign key (id_categoria)
references categoria(id);

alter table post
add foreign key (id_usuario)
references usuario(id);

/*alter table post add autor varchar(255) not null;*/

create table comentario(
	id int not null auto_increment,
    autor varchar(255) not null,
    comentario text not null,
    id_post int not null,
    id_usuario int not null,
    primary key (id)
)default charset utf8;

alter table comentario
add foreign key (id_post)
references post(id);

alter table comentario
add foreign key (id_usuario)
references usuario(id);

/*alter table comentario add autor varchar(255) not null;*/



insert into categoria
(nome)
 values
('Integrações'),
('Serviços'),
('Financeiro'),
('Agenda'),
('Parceiros'),
('Outros');

