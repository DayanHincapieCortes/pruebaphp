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

INSERT INTO producto VALUES ('1','ejemplo1','a',100,1,'cafe1',10,'2023-07-13');
INSERT INTO producto VALUES ('2','ejemplo2','b',200,2,'cafe2',20,'2023-07-13');
INSERT INTO producto VALUES ('3','ejemplo3','c',300,3,'cafe3',30,'2023-07-13');
INSERT INTO producto VALUES ('4','ejemplo4','d',400,4,'cafe4',40,'2023-07-13');
