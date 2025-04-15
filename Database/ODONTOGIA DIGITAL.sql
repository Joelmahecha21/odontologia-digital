drop database if exists agendamiento_web;
create database agendamiento_web;
use agendamiento_web;
drop table if exists rol;
create table rol(
idrol int not null auto_increment primary key,
estadorol varchar (25) not null,
descripcionrol varchar(40) not null
);
insert into rol (idrol, estadorol, descripcionrol) values ('9001','activo','odontologia');
insert into rol (idrol, estadorol, descripcionrol) values ('9002','activo','ortodoncia');
insert into rol (idrol, estadorol, descripcionrol) values ('9003','activo','recepcionista');
insert into rol (idrol, estadorol, descripcionrol) values ('9004','activo','cliente');


drop table if exists usuario;
create table usuario (
idusuario int not null auto_increment primary key,
correoUsuario varchar(50) not null,
passwordUsuario varchar(25) not null,
estadoUsuario varchar(20) not null,
idrolFK int not null,
foreign key (idrolFK) references rol (idrol)
);
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69001','john.velasquez01@hotmail.com','884169218792', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69002','juan.quito02@hotmail.com','419753214987', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69003','viviana.marquez03@hotmail.com','623598745120', 'activo','9002');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69004','juana.molina04@hotmail.com','785419865784', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69005','rafael.mendez05@hotmail.com','036987451254', 'activo','9002');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69006','alexander.sanchez06@hotmail.com','874596185033', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69007','zapatilla91.1991@hotmail.com','774512008964', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69008','leoncentellante36@hotmail.com','894775510365', 'activo','9002');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69009','turron66.1987@hotmail.com','784560471012', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69010','juaquinxd@hotmail.com','874668875319', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69011','javitroll@hotmail.com','348967152011', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69012','alfonsorey@hotmail.com','974851632054', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69013','AlejoGut23@hotmail.com','5684239784120', 'activo','9002');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69014','roberMol@hotmail.com','348796510258', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69015','HouseArm@hotmail.com','931789456387', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69016','Escalonanata@hotmail.com','798413597645', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69017','zanahorializbeth@hotmail.com','255789463199', 'activo','9002');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69018','deivid12@hotmail.com','014698753269','activo','9002');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69019','daniellol@hotmail.com','738459716781', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69020','elizabethGonz@hotmail.com','478965412356', 'activo','9003');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69021','jesunavaja7@hotmail.com','876435897456', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69022','paredesleo@hotmail.com','798064587094', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69023','quitoeste@hotmail.com','046897513490', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69024','betoay@hotmail.com','978641325670', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69025','castillopedri@hotmail.com','013465798451', 'activo','9001');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69026','vivaboca09@hotmail.com','549631578420', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69027','vallenatero96@hotmail.com','486795134698', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69028','amantedelfutbol67@hotmail.com','701648596430', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69029','beummacamaulo8577@hotmail.com','740369402589', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69030','precagricrelo4275@hotmail.com','689462301784', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69031','niddauddepreutau8522@hotmail.com','379486108459', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69032','venateufroje8570@hotmail.com','187596420684', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69033','joixaullaucreita9181@hotmail.com','157904653024', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69034','croinnadolatra2627@hotmail.com','199650015454', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69035','luppoippippuze8795@hotmail.com','175230048902', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69036','racugoupefra2430@hotmail.com','584065871403', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69037','tazounammesa3917@hotmail.com','007846528743', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69038','greuttepreluyeu5264@hotmail.com','048976512304', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69039','creixeituzelle5219@hotmail.com','568420578910', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69040','vidoitoullommu2391@hotmail.com','568215730201', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69041','rammoizummepa3792@hotmail.com','156487620798', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69042','patitrassauro4180@hotmail.com','789143123548', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69043','gedaquoureugroi4020@hotmail.com','035489123577', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69044','vozawoucuma4693@hotmail.com','079855621402', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69045','cubosallottau4911@hotmail.com','789456186132', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69046','dotroukebrogou1503@hotmail.com','012489232548', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69047','waunoprifajo2581@hotmail.com','178549513281', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69048','nelofallulla1536@hotmail.com','789545051054', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69049','vullerabrougra8027@hotmail.com','798742021550', 'activo','9004');
insert into usuario (idusuario, correoUsuario, passwordUsuario,estadoUsuario,idrolFK) values ('69050','namacrawivei4921@hotmail.com','581548004785', 'activo','9004');

drop table if exists empleado;
create table empleado(
idempleado int not null auto_increment primary key,
numDocEmpleado varchar (15)not null,
tipoDocEmpleado varchar(15) not null,
nombreEmpleado varchar (30) not null,
apellidoEmpleado varchar (30) not null,
direccion varchar (25) not null,
telefono varchar(15) not null,
estado varchar(20) not null,
idusuarioFK int not null,
foreign key (idusuarioFK) references usuario (idusuario),
idRolFK int not null,
foreign key (idRolFK) references rol (idrol)
);

insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88001','84275312','ciudadania','jhon','velasquez','quiroga','312456686','activo','69001','9001');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88002','76327895','ciudadania','juan','estebanquito','usme','313354663','vacaciones','69002','9001');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88003','56786231','ciudadania','viviana','marquez','tunjuelito','321455686','activo','69003','9001');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88004','55432176','ciudadania','juana','molina','patio bonito','314823975','activo','69004','9003');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88005','86765217','ciudadania','rafael','mendez','tunal','321455686','activo','69005','9001');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88006','74029382','ciudadania','alexander','sanchez','fatima','305123566','activo','69006','9002');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88007','85432317','ciudadania','gabriel','camargo','tunal','3218165686','activo','69007','9001');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88008','86765217','ciudadania','robin','mendoza','kennedy','3219383315','activo','69008','9003');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88009','93566218','ciudadania','yeny','bocanegra','suba','350805686','activo','69009','9001');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88010','39696387','ciudadania','oscar','cortes','bosa','3142370901','activo','69010','9002');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88011','87946253','ciudadania','nestor','mejia','tunal','301495686','activo','69011','9002');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88012','13205468','ciudadania','jorge','luna','engativa','321455696','activo','69012','9001');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88013','11002662','ciudadania','diego','gimenez','soacha','321639386','activo','69013','9002');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88014','77005566','ciudadania','laura','gaviria','tunal','321435686','activo','69014','9003');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88015','86765217','ciudadania','karen','ayala','tunal','321403686','activo','69015','9001');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88016','45361289','ciudadania','lina','malaber','bosa','31455686','activo','69016','9002');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88017','83259098','ciudadania','maria','romero','fontibom','320505686','activo','69017','9003');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88018','80662636','ciudadania','sandra','ortiz','tunal','321687952','activo','69018','9001');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88019','86765217','ciudadania','sebastian','marin','usme','321455686','activo','69019','9001');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88020','14161718','ciudadania','miriam','ortega','venecia','321453086','activo','69020','9002');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88021','85265761','ciudadania','gloria','nieto','ciudad bolivar','305475626','activo','69021','9001');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88022','32401689','ciudadania','yuri','botero','suba','320303249','activo','69022','9001');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88023','72720388','ciudadania','olga','jimenez','tunal','311406107','activo','69023','9003');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88024','20938476','ciudadania','jose','merchan','tunal','350458675','activo','69024','9002');
insert into empleado (idempleado,numDocEmpleado, tipoDocEmpleado,nombreEmpleado,apellidoEmpleado,direccion,telefono,estado,idusuarioFK,idrolFK) 
values ('88025','89304673','ciudadania','juliana','mojica','venecia','320955086','activo','69025','9001');

drop table if exists doctor;
create table doctor (
idDoctor int not null auto_increment primary key,
nombredoctor varchar(25) not null,
apellidodoctor varchar(25) not null,
estado varchar(20) not null
);
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13001','juaquin','reyes', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13002','alberto','ayala', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13003','alfonso','reinosa', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13004','javier','hernandez', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13005','julio','domingues', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13006','daniel','lopez', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13007','david','turan', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13008','cristiano','rodriguez', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13009','lionel','casas', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13010','james','peralta', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13011','roberto','molano', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13012','juan','zapata', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13013','andres','cuadrado', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13014','pedro','castillo', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13015','lautaro','diaz', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13016','leo','paredes', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13017','armando','casas', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13018','esteban','quito', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13019','jesus','navaja', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13020','robertina','rojas', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13021','elizabeth','gonzales', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13022','lizbeth','zambrano', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13023','florentina','flores', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13024','natalia','escalona', 'activo');
insert into doctor (idDoctor, nombredoctor, apellidodoctor, estado) values ('13025','alejandro','gutierrez', 'activo');

drop table if exists cliente;
create table cliente(
idcliente int not null,
numDocCliente int not null auto_increment primary key,
tipoDocCliente varchar (15) not null,
nombreCliente varchar (30) not null,
apellidoCliente varchar(30) not null,
telefonoCliente varchar(20) not null,
estadoCliente varchar(20) not null,
idusuarioFK int not null,
foreign key (idusuarioFK) references usuario (idusuario)
);
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55001','823456741','ciudadania','alvaro','lopez','31365274','activo','69026');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55002','823457347','ciudadania','juan','pecas','312635274','suspendido','69027');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55003','5236789','ciudadania','jazmin','torres','322665274','activa','69028');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55004','5656779','ciudadania','melissa','paez','320667975','activa','69029');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55005','9836439','ciudadania','mariana','santos','320698774','activa','69030');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55006','5230789','ciudadania','jazmin','garcia','3122795905','activa','69031');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55007','5246789','ciudadania','valentina','cervantez','3242830480','activa','69032');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55009','3234689','ciudadania','paola','vega','3505210394','activa','69034');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55010','5806719','ciudadania','ricardo','botero','3126078493','activa','69035');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55011','5256740','ciudadania','jimena','urrego','3157796526','activa','69036');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55012','2306789','ciudadania','david','barrera','3114508828','activa','69037');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55013','5206709','ciudadania','jenid','cucaita','3013492050','activa','69038');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55014','5216739','ciudadania','ivonne','arenas','3203107726','activa','69039');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55015','5236784','ciudadania','elias','orozco','3106993890','activa','69040');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55016','2356789','ciudadania','ingrid','morientes','3227569339','activa','69041');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55017','5236709','ciudadania','fernando','mahecha','320665794','activa','69042');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55018','7296489','ciudadania','mario','fernandez','321666974','activa','69043');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55019','4236996','ciudadania','ximena','junco','326365245','activa','69044');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55020','6331089','ciudadania','paula','cifuentes','322675280','activa','69045');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55021','4698730','ciudadania','jere','alvarez','320665250','activa','69046');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55022','9235889','ciudadania','tatiana','melo','322665274','activa','69047');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55023','6226478','ciudadania','leonardo','moreno','320545280','activa','69048');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55024','5216989','ciudadania','marcela','perez','322665274','activa','69049');
insert into cliente (idcliente,numDocCliente,tipoDocCliente,nombreCliente,apellidoCliente,telefonoCliente,estadoCliente,idusuarioFK) 
values ('55025','5432101','ciudadania','luisa','bolivar','320664275','activa','69050');

drop table if exists servicio;
create table servicio (
idservicio int not null auto_increment primary key,
estadoservicio varchar (25) not null,
descripcionservicio varchar (40) not null
);
insert into servicio (idservicio,estadoservicio,descripcionservicio) values ('25001','activa','general');
insert into servicio (idservicio,estadoservicio,descripcionservicio) values ('25002','activa','Ortodoncia');
insert into servicio (idservicio,estadoservicio,descripcionservicio) values ('25003','activa','Blanqueamiento Dental');
insert into servicio (idservicio,estadoservicio,descripcionservicio) values ('25004','activa','Limpieza dental');
insert into servicio (idservicio,estadoservicio,descripcionservicio) values ('25005','activa','Estética dental');
insert into servicio (idservicio,estadoservicio,descripcionservicio) values ('25006','activa','Endodoncia');
insert into servicio (idservicio,estadoservicio,descripcionservicio) values ('25007','activa','Caries');
insert into servicio (idservicio,estadoservicio,descripcionservicio) values ('25008','activa','Diseño de sonrisa');

drop table if exists cita;
create table cita (
idcita int not null auto_increment primary key,
horacita time not null,
fechacita date not null, 
idDoctorFK int not null,
numdocClienteFK int not null,
idservicioFK int not null,
idempleadoFK int not null,
foreign key (idDoctorFK) references doctor (idDoctor),
foreign key (numdocCLienteFK) references cliente (numDocCliente),
foreign key (idservicioFK) references servicio (idservicio),
foreign key (idempleadoFK) references empleado (idempleado)
);
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12001','10:00','2021-09-28','13001','823456741','25001','88001');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12002','9:00','2021-09-30','13002','823457347','25002','88002');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12003','2:00','2021-09-29','13003','5236789','25003','88003');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12004','6:00','2021-09-27','13004','5656779','25004','88004');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12005','11:00','2021-10-01','13005','9836439','25005','88005');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12006','12:00','2021-10-06','13006','5230789','25006','88006');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12007','8:00','2021-10-09','13007','5246789','25007','88007');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12009','1:00','2021-10-15','13009','3234689','25001','88009');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12010','4:00','2021-10-17','13010','5806719','25002','88010');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12011','5:00','2021-10-19','13011','5256740','25003','88011');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12012','9:00','2021-10-21','13012','2306789','25004','88012');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12013','10:30','2021-10-24','13013','5206709','25005','88013');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12014','5:15','2021-10-27','13014','5216739','25006','88014');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12015','7:45','2021-10-28','13015','5236784','25007','88015');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12016','3:10','2021-10-31','13016','2356789','25008','88016');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12017','11:45','2021-11-04','13017','5236709','25001','88017');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12018','6:10','2021-11-06','13018','7296489','25002','88018');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12019','1:30','2021-11-08','13019','4236996','25003','88019');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12020','1:15','2021-11-10','13020','6331089','25004','88020');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12021','2:45','2021-11-13','13021','4698730','25005','88021');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12022','8:15','2021-11-15','13022','9235889','25006','88022');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12023','6:30','2021-11-17','13023','6226478','25007','88023');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12024','9:10','2021-11-20','13024','5216989','25008','88024');
insert into cita(idcita, horacita, fechacita,idDoctorFK,numdocClienteFK,idservicioFK,idempleadoFK) values ('12025','12:30','2021-11-25','13025','5432101','25001','88025');


/*consultas de dos tablas*/
select horacita, fechacita, nombrecliente,apellidocliente from cita,cliente where cita.numDocClienteFK=cliente.numDocCliente;
select horacita, fechacita, nombredoctor,apellidodoctor from cita,doctor where cita.idDoctorFK=doctor.idDoctor;
select nombreEmpleado, apellidoEmpleado, descripcionrol from empleado,rol where empleado.idrolFK=rol.idrol;

/*Update*/
update empleado set estado='suspendido' where estado='activa';
update servicio set descripcionservicio='general' where descripcionservicio='especializada';


/*Delete*/
delete from cita where fechacita='2021-11-20';
 
select * from cita;




/*vistas*/
drop view if exists vista_cita;
create view vista_cita as
select idcita,horacita  from cita;  
select * from cita;

drop view if exists vista_usuario;
create view vista_usuario as
select idusuario, correoUsuario  from usuario;  
select * from usuario;

drop view if exists vista_cliente;
create view vista_cliente as
select nombreCliente,apellidoCliente  from cliente;  
select * from cliente;

/*procedimiento almacenados*/
drop procedure if exists usuario;
delimiter //
create procedure usuario()
begin
select idusuario, correoUsuario, passwordUsuario
from usuario;
end //
delimiter ;
call usuario();

drop procedure if exists empleado;
delimiter //
create procedure empleado()
begin
select * from empleado where apellidoEmpleado="mendoza";
end //
delimiter ;
call empleado();

/*TRIGERRS*/
  drop trigger if exists before_empleado;  
delimiter //
create trigger before_empleado
  before update
  on empleado
  for each row
begin
  insert into empleado(nombreEmpleado,numDocEmpleado) values (old.nombreEmpleado, old.numDocEmpleado); 
end //
delimiter ;


insert into empleado(nombreEmpleado,numDocEmpleado) values ('jhon','84275312');
update empleado set numDocEmpleado='84275315' where nombreEmpleado='jhon';
select * from empleado;
update empleado set numDocEmpleado='84275314' where nombreEmpleado='jhon';
select * from empleado;

  drop trigger if exists after_cliente;  
 delimiter //
 create trigger after_cliente
   after insert
   on cliente 
   for each row
 begin
   update cliente  set telefonoCliente=cliente.telefonoCliente-new.idcliente
     where new.telefonoCliente=cliente.numDocCliente; 
 end //
 delimiter ;  
 select * from cliente where idcliente="55024";