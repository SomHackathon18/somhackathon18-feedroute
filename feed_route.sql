DROP DATABASE IF EXISTS feed_route
GO

CREATE DATABASE feed_route
GO

USE feed_route
GO

CREATE TABLE destinatarios (
	id_cliente INT IDENTITY NOT NULL PRIMARY KEY,
	nombre_empresa VARCHAR(50) NOT NULL,
	direccion VARCHAR(50) NOT NULL,
	poblacion VARCHAR(50) NOT NULL,
	localidad CHAR(8) NOT NULL,
	pais CHAR(10) NOT NULL,
	telefono CHAR(10) NOT NULL,
	nombre_destinatario VARCHAR(25) NOT NULL,
	codigo_postal CHAR(5) NOT NULL,
	fecha DATETIME NOT NULL,
)
CREATE TABLE remitentes (
	id_empresa INT IDENTITY NOT NULL PRIMARY KEY,
	nombre_empresa VARCHAR(50) NOT NULL,
	direccion VARCHAR(25) NOT NULL,
	localidad CHAR(8) NOT NULL,
	pais CHAR(10) NOT NULL,
	telefono CHAR(10) NOT NULL,
	codigo_postal CHAR(5) NOT NULL,
	fecha DATETIME NOT NULL,
)
CREATE TABLE pedidos (
	id_pedido INT IDENTITY NOT NULL PRIMARY KEY,
	FK_cliente INT NOT NULL FOREIGN KEY 
		REFERENCES destinatarios(id_cliente),
	FK_empresa INT NOT NULL FOREIGN KEY
		REFERENCES remitentes(id_empresa)
)
CREATE TABLE productos (
	id_producto INT IDENTITY NOT NULL PRIMARY KEY,
	marca VARCHAR(25) NOT NULL,
	articulo VARCHAR(15) NOT NULL,
	num_articulo VARCHAR(50) NOT NULL,
	FK_pedido INT NOT NULL FOREIGN KEY
		REFERENCES pedidos(id_pedido)
)
CREATE TABLE producto_pedidos(
	FK_pedido INT NOT NULL FOREIGN KEY
		REFERENCES pedidos(id_pedido),
	FK_producto INT NOT NULL FOREIGN KEY
		REFERENCES productos(id_producto)
)
CREATE TABLE incidencias (
	id_incidencia INT IDENTITY NOT NULL PRIMARY KEY,
	nombre VARCHAR(25) NOT NULL,
	email VARCHAR(30) NOT NULL,
	FK_pedido INT NOT NULL FOREIGN KEY
		REFERENCES pedidos(id_pedido)
)

