/* 
comentario en sql 
SQL Structure Query Language - Lenguaje Estructurado de Consulta

Base de Datos: Una colecci�n de datos que estan organizados.

Qu� es un campo
Qu� es un registro
Qu� es una tabla
Qu� es un tipo de dato y ejemplos

Gestores o Manejadores de BD son los programas que nos permiten administrar los datos

Ejemplos de Gestores de BD: Microsoft Access, Microsoft SQL Server, ORACLE, Informix, DBASE, SQL Lite, PostgreSQL, MySQL

Una Sentencia SQL es una linea de c�digo para trabajar con nuestra BD

Existen 2 tipos de sentencias SQL:

1)Sentencias Estructurales: Son las que nos permitir�n crear, modificar o eliminar objetos, usuarios, y propiedades de nuestra BD

2)Sentencias de Datos: Son las que nos permitir�n insertar, eliminar, modificar y buscar informaci�n en nuestra BD

En MySQL existen 2 tipos de engine para tablas:
1)MyISAM - Tablas Planas, son como si fuera a trabajar datos en Excel
2)InnoDB - Tablas Relacionales, son como si fuera a trabajar datos en Access 

Modelo Entidad-Relaci�n de una BD
Normalizaci�n de una BD

http://mysql.conclase.net/curso/index.php
*/

/*CREATE DATABASE members; */

USE u148878710_members;

CREATE TABLE contactos(
	email VARCHAR(50) NOT NULL,
	name_1 VARCHAR(50) NOT NULL,
    surname VARCHAR(50),
	sex CHAR(1),
	birthday DATE,
	phone VARCHAR(13),
	country VARCHAR(50) NOT NULL,
	picture VARCHAR(50),
    password_id VARCHAR(50),
	PRIMARY KEY(email),
	FULLTEXT KEY buscador(email, name_1,surname, sex, phone, country,password_id)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE pais(
	id_pais INT NOT NULL AUTO_INCREMENT,
	pais VARCHAR(50) NOT NULL,
	PRIMARY KEY(id_pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pais (id_pais,pais) VALUES 
	(1,"M�xico"),
	(2,"Colombia"),
	(3,"Guatemala"),
	(4,"Espa�a"),
	(5,"Brasil"),
	(6,"Uruguay"),
	(7,"Per�"),
	(8,"Argentina"),
	(9,"Chile"),
	(10,"Paraguay"),
	(11,"Honduras"),
	(12,"El Salvador"),
	(13,"Nicaragua"),
	(14,"Costa Rica"),
	(15,"Panam�"),
	(16,"Venezuela"),
	(17,"Ecuador"),
	(18,"Bolivia"),
	(19,"Canada"),
	(20,"Estados Unidos"),
	(21,"Groenlandia"),
	(22,"Rep�blica Dominicana"),
	(23,"Hait�"),
	(24,"Cuba"),
	(25,"Belice"),
	(26,"Inglaterra"),
	(27,"Francia"),
	(28,"Alemania"),
	(29,"Italia"),
	(30,"Jap�n"),
	(31,"China"),
	(32,"Egipto"),
	(33,"Sudafrica"),
	(34,"Australia"),
	(35,"Nueva Zelanda");