USE pruebaphp;
CREATE TABLE producto(
    ID VARCHAR(255) NOT NULL PRIMARY KEY,
    Nombre_de_producto VARCHAR(255) NOT NULL,
    Referencia VARCHAR(255) NOT NULL,
    Precio INT NOT NULL,
    Peso INT NOT NULL,
    Categoria VARCHAR(255) NOT NULL,
    Stock INT NOT NULL,
    Fecha_de_creacion DATE NOT NULL
);

