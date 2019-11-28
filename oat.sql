create database carro;
use carro;

create table info_carros (id int auto_increment not null primary key, modelo varchar(50) not null, ano int not null, valor float(10) not null);

alter table info_carros add column nome varchar(100) not null after valor;

alter table info_carros add column telefone varchar(14) not null after nome;

insert into info_carros (modelo, ano, valor, nome, telefone) values("Vw Golf",2006,23000,"Wagner","(35)99988-7777");
insert into info_carros (modelo, ano, valor, nome, telefone) values("Vw Fusca",1998,15000,"Ze","(35)99988-9999");
insert into info_carros (modelo, ano, valor, nome, telefone) values("Honda Fit",2008,27000,"Tiao","(35)99988-6666");
insert into info_carros (modelo, ano, valor, nome, telefone) values("Chevrolet Cobalt",2018,55000,"pedro","(35)99988-5555");

