CREATE TABLE Productos(
    id_Producto VARCHAR(100) NOT NULL,
    Producto VARCHAR(50) NOT NULL,
    Precio VARCHAR(100) NOT NULL,
    Existencias VARCHAR(50) NOT NULL 
);

INSERT INTO Productos (id_Producto, Producto, Precio, Existencias) values("Frasco de mermelada", "Frasco de mermelada", "25", "10");
INSERT INTO Productos (id_Producto, Producto, Precio, Existencias) values("Carton de leche", "Carton de leche", "15", "10");
INSERT INTO Productos (id_Producto, Producto, Precio, Existencias) values("Paquete de galletas", "Paquete de galletas", "18", "10");
INSERT INTO Productos (id_Producto, Producto, Precio, Existencias) values("Bolsa de papas", "Bolsa de papas", "10", "10");
INSERT INTO Productos (id_Producto, Producto, Precio, Existencias) values("Barra de chocolates", "Barra de chocolates", "10", "10");
INSERT INTO Productos (id_Producto, Producto, Precio, Existencias) values("Paleta", "Paleta", "3", "10");
INSERT INTO Productos (id_Producto, Producto, Precio, Existencias) values("Bolsa de malvaviscos", "Bolsa de malvaviscos", "17", "10");
INSERT INTO Productos (id_Producto, Producto, Precio, Existencias) values("Pay de nuez", "Pay de nuez", "22", "10");

CREATE TABLE Tickets(

    Fecha DATE,
    hora_Venta TIME,
    cantidad_Producto VARCHAR (100) NOT NULL,
    Producto VARCHAR (50) NOT NULL,
    total_Producto VARCHAR (50) NOT NULL
    
);  

INSERT INTO Tickets (Fecha, hora_Venta, cantidad_Producto, Producto, total_Producto) values (DATE(), TIME(), "1", "Frasco de mermelada", "25");
INSERT INTO Tickets (Fecha, hora_Venta, cantidad_Producto, Producto, total_Producto) values (DATE(), TIME(), "1", "Carton de leche", "15");
INSERT INTO Tickets (Fecha, hora_Venta, cantidad_Producto, Producto, total_Producto) values (DATE(), TIME(), "1", "Paquete de galletas", "18");
INSERT INTO Tickets (Fecha, hora_Venta, cantidad_Producto, Producto, total_Producto) values (DATE(), TIME(), "1", "Barra de chocolates", "10");
INSERT INTO Tickets (Fecha, hora_Venta, cantidad_Producto, Producto, total_Producto) values (DATE(), TIME(), "1", "Bolsa de papas", "10");
INSERT INTO Tickets (Fecha, hora_Venta, cantidad_Producto, Producto, total_Producto) values (DATE(), TIME(), "1", "Paleta", "3");
INSERT INTO Tickets (Fecha, hora_Venta, cantidad_Producto, Producto, total_Producto) values (DATE(), TIME(), "1", "Bolsa de malvaviscos", "17");
INSERT INTO Tickets (Fecha, hora_Venta, cantidad_Producto, Producto, total_Producto) values (DATE(), TIME(), "1", "Pay de nuez", "22");