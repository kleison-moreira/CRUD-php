create database if not exists cadastro
default character set utf8
default collate utf8_general_ci;
use  cadastro;

create table pessoa(
id integer auto_increment unique primary key,
nome varchar (100),
email varchar (100)
);


insert into usuarios values ( 1,"admin", "1234");
 select * from pessoa;
 insert into pessoa values ( 2 , "kleison", "kleison97@hotmail.com");
 select * from pessoa;