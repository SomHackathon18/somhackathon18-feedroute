DROP DATABASE IF EXISTS feed_route;

CREATE DATABASE feed_route;
USE feed_route;

create table login (
	id_user int auto_increment not null primary key,
	usuario varchar(50) not null,
    passwd varchar(30) not null
);
CREATE TABLE pedidos (
	id_user	int not null,
	id_pedido INT auto_increment NOT NULL PRIMARY KEY,
    constraint fk_iduser_pedi foreign key (id_user) references login(id_user)
);

CREATE TABLE destinatarios (
	NIF varchar(10) NOT NULL PRIMARY KEY,
	nombre_empresa VARCHAR(50) NOT NULL,
	direccion VARCHAR(50) NOT NULL,
	poblacion VARCHAR(50) NOT NULL,
	localidad CHAR(8) NOT NULL,
	pais CHAR(10) NOT NULL,
	telefono varchar(20) NOT NULL,
	nombre_destinatario VARCHAR(50) NOT NULL,
	codigo_postal int(5) NOT NULL,
	fecha DATE NOT NULL,
    id_pedido int not null,
    constraint fk_idp_dest foreign key (id_pedido) references pedidos(id_pedido)
		on update cascade
        on delete cascade
);
CREATE TABLE productos (
	id_producto INT auto_increment not null PRIMARY KEY,
	marca VARCHAR(25) NOT NULL,
	articulo VARCHAR(15) NOT NULL,
	num_articulo int NOT NULL,
    id_pedido int not null,
    constraint fk_idp_prod foreign key (id_pedido) references pedidos(id_pedido)
		on update cascade
        on delete cascade
);
CREATE TABLE incidencias (
	id_incidencia INT auto_increment NOT NULL PRIMARY KEY,
	nombre VARCHAR(25) NOT NULL,
	email VARCHAR(30) NOT NULL,
    incidencia text not null,
    id_pedido int not null,
    constraint fk_idp_inci foreign key (id_pedido) references pedidos(id_pedido)
		on update cascade
        on delete cascade
);


insert into login values
(1, 'jromero', 'JRhos!'),
(2, 'cdelean', 'OchiiSan14');

insert into pedidos values
(1, 1),
(2, 2)	;

insert into destinatarios values
('XXXXXXXXX','Verde Limón', 'Carrer de Sant Josep, 17', 'Barcelona', 'Mataró', 'España', '937 90 70 17', 'Cristian del Viejo', '08302', '2018-01-04', 1),
('YYYYYYYYY','Abacus Cooperativa', 'Carrer de la Riera, 14', 'Barcelona', 'Mataró', 'España', '937 41 92 30', 'Juan Romero', '08301', '2018-01-04', 2);


