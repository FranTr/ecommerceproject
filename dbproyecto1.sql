--what: Creacion de tablas para el ecommerce
--Why: Necesidad de estructuracion de los datos
--Who: FJ Trujillo
-- Date       Changes
--02/04/18	 Creacion de query


CREATE TABLE usuario(
	
	id INT IDENTITY(1,1) CONSTRAINT PK_usuario PRIMARY KEY(id) 
	,Nombre VARCHAR(40)
	,Apellido1 VARCHAR(40)
	,Apellido2 VARCHAR(40)
	,Email VARCHAR(100) CONSTRAINT AK_email UNIQUE
	,Verificacion BIT
	,pass VARCHAR(16)
	,privilegio BIT -- o eres admin o no
);
CREATE TABLE categorias(
	idcategoria SMALLINT IDENTITY(1,1) CONSTRAINT PK_categorias PRIMARY KEY(idcategoria)
	,nombre VARCHAR(40)
	,descripcion VARCHAR(300)
);

CREATE TABLE producto(
	idproducto INT IDENTITY(1,1) CONSTRAINT PK_producto PRIMARY KEY(idproducto)
	,nombre VARCHAR(40)
	,descripcion VARCHAR(300)
	,precio DECIMAL(5,3)
	,urlimagen VARCHAR(200) NULL
	
);
CREATE TABLE productoCategoria(
	id SMALLINT IDENTITY(1,1) CONSTRAINT PK_productoCategoria PRIMARY KEY(id)
	,idproducto INT NOT NULL CONSTRAINT FK_productoCategoria_producto FOREIGN KEY(idproducto) REFERENCES producto(idproducto)
	,idcategoria SMALLINT NOT NULL CONSTRAINT FK_productoCategoria_categorias FOREIGN KEY(idcategoria) REFERENCES categorias(idcategoria)
	);
	 
CREATE TABLE carrito(
	idcarrito BIGINT IDENTITY(1,1) CONSTRAINT PK_carrito PRIMARY KEY(idcarrito) 
	,idusuario INT CONSTRAINT FK_carrito_usuario FOREIGN KEY(idusuario) REFERENCES usuario(id)
	,fecha DATE
	,total DECIMAL(5,3)
	,pagado BIT
); 
		
CREATE TABLE productosCarrito(
	id BIGINT IDENTITY(1,1) CONSTRAINT PK_productosCarrito PRIMARY KEY(id)
	,idcarrito BIGINT CONSTRAINT FK_productosCarrito_carrito FOREIGN KEY(idcarrito) REFERENCES carrito(idcarrito)
	,idproducto INT CONSTRAINT FK_productosCarrito_producto FOREIGN KEY(idproducto) REFERENCES producto(idproducto)

);
CREATE TABLE contacto(
	id BIGINT IDENTITY(1,1) CONSTRAINT PK_contacto PRIMARY KEY(id)
	,nombre VARCHAR(40)
	,email VARCHAR(100)
	,tlf VARCHAR(16)
	,mensaje VARCHAR(300)
	);


select * FROM usuario;
select * FROM producto;
select * FROM contacto;
select * from carrito;
select * from productosCarrito;
SELECT * FROM producto WHERE precio=75;


SELECT p.idproducto, p.nombre,p.precio,p.urlimagen FROM productosCarrito as pc
	INNER JOIN producto as p ON p.idproducto = pc.idproducto
	INNER JOIN carrito as c ON pc.idcarrito = c.idcarrito
	INNER JOIN usuario as u ON u.id = c.idusuario
	WHERE pc.idcarrito = 10;

SELECT p.idproducto, p.nombre,p.precio,p.urlimagen,SUM(p.precio) as total FROM productosCarrito as pc
	INNER JOIN producto as p ON p.idproducto = pc.idproducto
	INNER JOIN carrito as c ON pc.idcarrito = c.idcarrito
	INNER JOIN usuario as u ON u.id = c.idusuario
	WHERE pc.idcarrito = 9
	GROUP BY p.idproducto, p.nombre,p.precio,p.urlimagen;

	SELECT SUM(p.precio) as TOTAL FROM productosCarrito as pc
	INNER JOIN producto as p ON p.idproducto = pc.idproducto
	INNER JOIN carrito as c ON pc.idcarrito = c.idcarrito
	INNER JOIN usuario as u ON u.id = c.idusuario
	WHERE pc.idcarrito = 13;

-- DELETE
-- delete producto WHERE idproducto = 3;
-- delete usuario;
-- delete productosCarrito;
-- delete carrito;
-- DELETE FROM productosCarrito 
--	WHERE idcarrito = 10 AND idproducto = 1;
--	UPDATE carrito
--      SET pagado = 0
--      WHERE idcarrito=3;

--RESET VARIALES IDENTITY
-- DBCC CHECKIDENT('usuario', RESEED, 0)
-- DBCC CHECKIDENT('producto', RESEED, 0)
--DBCC CHECKIDENT('carrito', RESEED, 0)
--DBCC CHECKIDENT('productosCarrito', RESEED, 0)


--ALTER TABLE carrito  ALTER COLUMN total DECIMAL(10,2) NULL;
--ALTER TABLE producto  ALTER COLUMN PRECIO DECIMAL(10,2)NULL  
--ALTER TABLE carrito ALTER COLUMN fecha DATETIME2(7);
--UPDATE producto SET precio = 20 WHERE idproducto = 8;   

--INSERT into productosCarrito(idcarrito,idproducto) 
			--VALUES(5,28)

--UPDATE carrito SET total = 600.000 WHERE idcarrito=13


USE tienda;
GO
BACKUP DATABASE tienda
TO DISK = 'D:\tienda.Bak'
GO