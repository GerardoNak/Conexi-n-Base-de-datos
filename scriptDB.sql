CREATE DATABASE crud;
use crud;
CREATE TABLE empleados(
    id int(11) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(40) NOT NULL,
    edad int(11) NOT NULL,
    PRIMARY KEY(id)
);   