CREATE DATABASE IF NOT EXISTS wasicash;

USE wasicash;

/*
CREATE TABLE IF NOT EXISTS users(
id              int(255) auto_increment not null,
name            varchar(100),
surname         varchar(200),
dni             varchar(200),
email           varchar(255),
password        varchar(255),
image           varchar(255),
created_at      datetime,
updated_at      datetime,
remember_token  varchar(255),
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;


*/

/* tabla acamodada a brezze para el login etc*/

CREATE TABLE IF NOT EXISTS users(
id                   int auto_increment not null,
name                 varchar(255) not null,
email                varchar(255) not null,
email_verified_at    timestamp,
password             varchar(255) not null,
remember_token  varchar(100),
created_at      timestamp,
updated_at      timestamp,
CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;









CREATE TABLE IF NOT EXISTS clientes(
id              int(255) auto_increment not null,
user_id         int(255),
name            varchar(100),
surname         varchar(200),
dni             varchar(200),
capital         int,
interes         float,
clave           int,
sueldo          int,
estado          varchar(200),
deuda_total_intereses   float,
descripcion     text,
created_at      datetime,
updated_at      datetime,
CONSTRAINT pk_clientes PRIMARY KEY(id),
CONSTRAINT fk_clientes_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDb;


CREATE TABLE IF NOT EXISTS historial(
id              int(255) auto_increment not null,
cliente_id      int(255),
name            varchar(100),
surname         varchar(200),
dni             varchar(200),
capital         int,
created_at      datetime,
updated_at      datetime,
CONSTRAINT pk_historial PRIMARY KEY(id),
CONSTRAINT fk_historial_clientes FOREIGN KEY(cliente_id) REFERENCES clientes(id)
)ENGINE=InnoDb;


CREATE TABLE IF NOT EXISTS intereses(
id              int(255) auto_increment not null,
cliente_id      int(255),
interes         float,
estado          varchar(200),
image           varchar(255),
created_at      datetime,
updated_at      datetime,
CONSTRAINT pk_intereses PRIMARY KEY(id),
CONSTRAINT fk_intereses_clientes FOREIGN KEY(cliente_id) REFERENCES clientes(id)
)ENGINE=InnoDb;



CREATE TABLE IF NOT EXISTS capital(
id              int(255) auto_increment not null,
cliente_id      int(255),
image           varchar(255),
pago            int,
created_at      datetime,
updated_at      datetime,
CONSTRAINT pk_capital PRIMARY KEY(id),
CONSTRAINT fk_capital_clientes FOREIGN KEY(cliente_id) REFERENCES clientes(id)
)ENGINE=InnoDb;
