CREATE TABLE productos(
    id_producto INTEGER PRIMARY KEY AUTOINCREMENT,
    producto VARCHAR(100) NOT NULL,
    precio FLOAT NOT NULL,
    existencias INTEGER NOT NULL 
);

INSERT INTO productos (producto, precio, existencias) values("Frasco de mermelada", 25, 10);
INSERT INTO productos (producto, precio, existencias) values("Carton de leche", 15, 10);

CREATE TABLE tickets(
    id_ticket INTEGER PRIMARY KEY AUTOINCREMENT,
    fecha DATE NOT NULL,
    hora_venta TIME NOT NULL,
    cantidad_producto INTEGER NOT NULL,
    producto VARCHAR (100) NOT NULL,
    total_producto FLOAT NOT NULL
    
);  