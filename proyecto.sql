create database Proyecto;
use Proyecto;

create table usuario(
idusuario smallint not null auto_increment primary key,
nombre varchar(50) not null ,
primerApellido VARCHAR(50) NOT NULL,
segundoApellido VARCHAR(50) NOT NULL,
ci VARCHAR(50) NOT NULL,
sexo  CHAR(1) NOT NULL  ,

rol VARCHAR(70) NOT NULL,
login VARCHAR(50) NOT NULL ,
password VARCHAR(50) NOT NULL,

fechaRegistro  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
fechaActulizasion  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
estado boolean   default TRUE

);

create table estudiante(
idestudiante smallint not null  auto_increment primary key,
nombre varchar(50) not null ,
primerApellido VARCHAR(50) NOT NULL,
segundoApellido VARCHAR(50) NOT NULL,
ci VARCHAR(50) NOT NULL,
sexo  CHAR(1) NOT NULL  ,
curso varchar(20) not null,



fechaRegistro  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
fechaActulizasion  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
estado boolean   default TRUE

);


create table asistencia(
idasistencia smallint not null  auto_increment primary key,
fecha timestamp not null ,
temperaturra float NOT NULL,
observaciones VARCHAR(50) NOT NULL,

fechaRegistro  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
fechaActulizasion  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
estado boolean   default TRUE,
idestudiante smallint not null,
  foreign key(idestudiante) references estudiante( idestudiante)
);





create table aulas(
idaulas smallint not null  auto_increment primary key,
nombre varchar(50) not null ,
capacidad tinyint NOT NULL,
capacidadPermitida tinyint NOT NULL,
limiteCovid tinyint NOT NULL,

fechaRegistro  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
fechaActulizasion  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
estado boolean   default TRUE


);

create table horario(
idhorario smallint not null  auto_increment primary key,
horas varchar(50) not null ,
fechaRegistro  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
fechaActulizasion  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
estado boolean   default TRUE,
idestudiante smallint not null,
idaulas smallint not null,
  foreign key(idestudiante) references estudiante( idestudiante),
  foreign key(idaulas) references aulas( idaulas)
);



create table registroDesinfeccion(
idregistro smallint not null  auto_increment primary key,
inicio timestamp not null ,
fin timestamp not null ,
observaciones VARCHAR(60) NOT NULL,

fechaRegistro  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
fechaActulizasion  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
estado boolean   default TRUE,

idaulas smallint not null,
  
  foreign key(idaulas) references aulas( idaulas)
);


create table tipo(
idtipo smallint not null  auto_increment primary key,

categoria VARCHAR(50) NOT NULL,

fechaRegistro  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
fechaActulizasion  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
estado boolean   default TRUE

);





create table materialDesinfeccion(
idmaterial smallint not null  auto_increment primary key,
nombre varchar(50) not null ,
unidadMedida varchar(50) not null ,


fechaRegistro  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
fechaActulizasion  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
estado boolean   default TRUE,

idtipo smallint not null,
  
  foreign key(idtipo) references tipo( idtipo)
);









create table detalleDesinfeccion(
iddetalleD smallint not null  auto_increment primary key,
cantidad smallint not null ,
tipo varchar(20) not null ,


fechaRegistro  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
fechaActulizasion  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
estado boolean   default TRUE,


idregistro smallint not null,
idaulas smallint not null,
idmaterial smallint not null,

  
  foreign key(idregistro) references registroDesinfeccion( idregistro),
   foreign key(idaulas) references registroDesinfeccion( idaulas),
    foreign key(idmaterial) references materialDesinfeccion( idmaterial)
);



