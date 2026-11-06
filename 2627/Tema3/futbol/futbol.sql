drop database if exists futbol;
create database futbol;

use futbol;
create table equipos(
	id int primary key auto_increment,
    nombre varchar(100) unique,
    cp int,
    password blob not null,
    perfil enum('J','A','F')
)engine innodb;

create table usuarios(
	id int primary key auto_increment,
    dni varchar(9) unique not null, 
    nombre varchar(100) not null,
    password blob not null,
    perfil enum('J','A','F') not null,
    id_equipo int null,
    
    foreign key(id_equipo) references equipos(id)
    on delete restrict on update cascade
)engine innodb;

insert into usuarios value(null, '00000000Z', 'Federacion',sha2('admin',512),'F',null);

create table partidos(
	id int primary key auto_increment,
    fecha datetime not null,
    id_equipoL int not null,
    id_equipoV int not null,
    foreign key(id_equipoL) references equipos(id)
    on delete restrict on update cascade,
    foreign key(id_equipoV) references equipos(id)
    on delete restrict on update cascade,
    golesEL int not null default 0,
    golesEV int not null default 0,
    finalizado boolean not null default false
)engine innodb;

create table colegiados(
	id_partido int not null,
    id_arbitro int not null,
    primary key(id_arbitro, id_partido),
    foreign key(id_partido) references partidos(id)
    on delete restrict on update cascade,
    foreign key(id_arbitro) references usuarios(id)
    on delete restrict on update cascade
)engine innodb;