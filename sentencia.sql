USE CURSOR;

CREATE TABLE usuarios (
    id int(11) NOT NULL AUTO_INCREMENT,
    nombre varchar(80) NOT NULL,
    apellido varchar(80) NOT NULL,
    fecha_nacimiento DATETIME NULL,
    PRIMARY KEY (id)
);

drop table usuarios;


alter table usuarios add column telefono varchar(80) NULL;

alter table usuarios MODIFY column telefono varchar(30) NULL;

INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, telefono) VALUES ('Leslie', 'Mendoza', '1999-02-18','1161564481');

INSERT INTO usuarios (nombre, apellido, fecha_nacimiento, telefono) VALUES ('RichardS', 'Campos', '1999-02-18','1161564481');

select * from usuarios;

Update usuarios set fecha_nacimiento = '1992-11-03' where nombre = 'RichardS';

Select * from usuarios WHERE id='1';

SELECT nombre,apellido FROM usuarios WHERE id='1';


select id,nombre FROM usuarios;

DELETE FROM usuarios WHERE id='1';

SELECT * FROM usuarios WHERE apellido = 'Campos' AND nombre = 'RichardS';

SELECT * FROM usuarios WHERE apellido = 'Campos' OR nombre = 'RichardS';

SELECT COUNT(*) FROM usuarios WHERE apellido = 'Campos' OR nombre = 'RichardS';

SELECT COUNT(*) FROM usuarios; (--Cuenta todos los usuarios)

SELECT COUNT(*),nombre as 'Cantidad' FROM usuarios WHERE apellido = 'Campos' OR nombre = 'RichardS'; (-- El count cuenta la cantidad y el as le pone un label al resultado)


SELECT * FROM usuarios where nombre like '%es%';

SELECT * FROM usuarios where nombre like 'Ri%';

CREATE TABLE publicaciones (
    id int(11) NOT NULL AUTO_INCREMENT,
    autor_id int(11) NOT NULL,
    titulo varchar(80) NOT NULL,
    texto text NOT NULL,
    primary key (id),
    foreign key (autor_id) references usuarios(id)
)