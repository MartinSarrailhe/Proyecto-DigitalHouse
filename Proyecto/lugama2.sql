CREATE TABLE usuarios(
	id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    apellido VARCHAR(100) NOT NULL,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    contrasenia VARCHAR(100) NOT NULL,
    avatar VARCHAR(100) NULL,
    address_id INT UNSIGNED NULL
);

ALTER TABLE usuarios
MODIFY email VARCHAR(100) UNIQUE NOT NULL;

ALTER TABLE usuarios
MODIFY username VARCHAR(100) UNIQUE NOT NULL;