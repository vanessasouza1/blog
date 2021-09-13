
create database blog_conexa
default character set utf8
default collate utf8_general_ci;

use blog_conexa;
create table categoria(
	id_categoria int not null auto_increment,
    nome varchar(255) not null,
    primary key (id_categoria)
) default charset utf8;



create table post(
	id_post int not null auto_increment,
    data_post date not null,
    autor varchar(255) not null,
    titulo varchar(255) not null,
	imagem varchar(255) not null,
    texto text not null,
    id_categoria int not null,
    primary key (id_post)
)default charset utf8;

alter table post
add foreign key (id_categoria)
references categoria(id_categoria);


create table comentario(
	id_comentario int not null auto_increment,
    nome_autor varchar(255) not null,
    comentario text not null,
    id_post int not null,
    primary key (id_comentario)
)default charset utf8;

alter table comentario
add foreign key (id_post)
references post(id_post);


insert into categoria
(nome)
 values
('Integrações'),
('Serviços'),
('Financeiro'),
('Agenda'),
('Parceiros'),
('Outros');

describe comentario;