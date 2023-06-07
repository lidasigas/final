create table formulario(
    nombre varchar(30) not null primary key,
    primer_apellido varchar(30) DEFAULT null,
    segundo_apellido varchar(30) DEFAULT null,
    email varchar (20) DEFAULT null,
    login varchar (10) DEFAULT null,
    password varchar (8) DEFAULT null

);