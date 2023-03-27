DROP TABLE IF EXISTS "factura" CASCADE;
DROP TABLE IF EXISTS "articulo" CASCADE;
DROP TABLE IF EXISTS "usuario" CASCADE;

CREATE TABLE "usuario" (
  "id_usuario" serial,
  "nombre" varchar(50)  not null,
  "apellido" varchar(50) not null,
  "correo" varchar(100) not null,
  "clave" varchar(100) not null,
  "roles" json not null,
  "tipo" varchar(100) not null,
  "estado" varchar(1),
  CONSTRAINT "PK_Usuario"
  	PRIMARY KEY ("id_usuario")
);

CREATE TABLE "articulo" (
  "id_articulo" serial,
  "nombre" varchar(50) not null,
  "categoria" varchar(50) not null,
  "descripcion" varchar(200) not null,
  "precio" numeric(4,2) not null,
  "estado" varchar(1),
  CONSTRAINT "PK_Articulo"
	PRIMARY KEY ("id_articulo")
);

CREATE TABLE "factura" (
  "id_factura" serial,
  "id_usuario" integer,
  "id_articulo" integer,
  "fecha" date not null,
  "total" numeric(4,2),
  "estado" varchar(1),
  CONSTRAINT "PK_Factura"
  	PRIMARY KEY ("id_factura"),
  CONSTRAINT "FK_Factura_id_articulo"
    FOREIGN KEY ("id_articulo") REFERENCES "articulo"("id_articulo"),
  CONSTRAINT "FK_Factura_id_usuario"
    FOREIGN KEY ("id_usuario") REFERENCES "usuario"("id_usuario")
);

INSERT INTO usuario (nombre, apellido, correo, clave, tipo, roles, estado)
    VALUES ('admin', 'admin', 'admin@gmail.com', '$2y$13$p6GUK.ECGHLu8bQtEn3o6uwMF6lqtPB/0.RoQD7tm/Vjdk6fR/j6e', 'ADMIN','["ROLE_ADMIN"]','A');

SELECT * FROM public."usuario"
ORDER BY id_usuario ASC; 

SELECT * FROM public."factura"
ORDER BY id_factura ASC; 

SELECT * FROM public."articulo"
ORDER BY id_articulo ASC; 
