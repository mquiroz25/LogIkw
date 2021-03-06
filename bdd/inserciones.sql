use LogIkw;

INSERT into usuario(user,pass,rol) values
('manu32','123','administrador'),
('nachoC','111','administrador'),
('diasa', '123','cliente'),
('mob', '123','cliente'),
('hectord','1234','chofer'),
('pepe1970','1234','chofer'),
('marcequespe','1234','mecanico'),
('mauris','1234','mecanico'),
('carbu','1234','empresa'),
('ceroc','1234','empresa');

INSERT into administrador(dni_administrador,rol,nombre,apellido,telefono,domicilio,email,id_usuario) values
(36555123,'administrador','manuel','dominguez',4522215,'laferrere 5667','manu_lafe@gmail.com',1),
(38555123,'administrador','ignacio','perez',444455,'salta 5367','nachoC10@gmail.com',2);


INSERT into cliente(razon_social, rol, nombre,telefono,domicilio,email,id_usuario) values
('Dia S.A','cliente','juan',451215,'donizeti 5847','jp15@gmail.com',3),
('Easy S.A','cliente','pedro',444215,'san jose 452','san_jose@gmail.com',4);

INSERT into chofer(dni_chofer,rol, nombre, apellido, estadoC, fecha_de_nacimiento,tipo_licencia_de_conducir,id_usuario) values
(222222222,'chofer','hector','diaz', 0,'1980-05-06','a5',5),
(333333333,'chofer','pepe','castañeda', 0,'1970-05-07','a5',6);






INSERT into vehiculo(patente,nro_chasis,nro_motor, estadoV, marca,modelo,anio_fabricacion,tipo,estado) values
('ab 123 cd','10',20, 0,'ford','j2001',2000, 'camion','disponible'),
('ik 456 pl','25',55, 0,'chevrolet','h201',2002,'acoplado','en reparacion');


INSERT into viaje(
id_vehiculo,
id_administrador,
origen,
destino,
tipo_de_carga,
fecha_de_salida_prevista,
fecha_de_llegada_prevista,
tiempo_estimado,
fecha_de_salida_real,
fecha_de_llegada_real,
tiempo_real,
km_recorridos_previstos,
km_recorridos_reales,
combustible_consumido_estimado,
combustible_consumido_real) values
(1,1,'san juan','buenos aires','Granel Sólido','2017-10-05','2017-10-10',120,
'2017-10-05','2017-10-11',130,1300,1500,300,350),
(2,2,'la pampa','san luis','Granel Sólido','2017-11-05','2017-11-08',200,
'2017-11-05','2017-11-09',105,1500,1700,400,380),
(1,1,'salta','buenos aires','Granel Sólido','2017-09-05','2017-10-08',150,
'2017-11-05','2017-11-09',170,1600,1650,400,500),
(3,1,'misiones','buenos aires','Granel Sólido','2017-09-05','2017-10-08',400,
'2017-11-05','2017-11-09',450,1700,2000,600,700),
(2,1,'san luis','buenos aires','Granel Sólido','2017-09-05','2017-10-08',100,
'2017-11-05','2017-11-09',105,1500,1600,700,750);



INSERT into mecanico(dni_mecanico,rol,nombre,apellido,id_usuario) values
(111111112,'mecanico','marcelo','quispe',7),
(222222221,'mecanico','mauricio','santillan',8);

INSERT into empresa(nombre,rol,telefono,domicilio,id_usuario) values
('Carburando','empresa',123456,'antoño machado',9),
('Cero Carburo','empresa',123456,'Cañada de gomez',10);


INSERT into mantenimiento(id_vehiculo,id_empresa,id_mecanico,patente ,nro_chasis ,nro_motor ,fecha_service,km_de_la_unidad ,costo,tipo,repuestos_cambiados) values

(1,1,1,'ab 123 cd',10,20,'2017-05-04',150000,20000,'externo','valvula,tubo de escape'),
(1,2,2,'ab 123 cd',20,10,'2017-04-04',300000,70000,'externo','motor'),
(4,2,2,'ab 323 cd',20,10,'2017-04-04',305000,50000,'externo','motor'),
(3,2,2,'tb 623 kd',20,10,'2017-04-04',400000,80000,'externo','motor'),
(2,2,2,'kd 456 rr',20,10,'2017-04-04',320000,90000,'externo','motor');

INSERT into reporte_chofer_combustible(id_chofer,id_viaje,fecha,combustible_cargado,importe_combustible,ubicacion,km_unidad) values
(1,1,'2017-09-04',10,500,'san justo',13000), 
(2,2,'2017-11-04',100,5000,'temperley',130000);


INSERT into reporte_chofer_posicion(id_chofer,id_viaje,fecha,latitud,longitud) values
(1,1,'2017-09-04 17:16:18','-5555.4','4444.4'), 
(2,2,'2017-11-04 17:16:18','-2222.4','555.4');

INSERT into reporte_chofer_incidente(id_chofer,id_viaje,fecha,incidente) values
(1,1,'2017-09-04','choque'), 
(2,2,'2017-11-04','piquete');


INSERT into calendarioService(id_vehiculo,fecha_service,km_de_la_unidad) values
(1,'2017-09-04',6000), 
(2,'2017-08-04',11000),
(3,'2017-04-04',52000),
(4,'2017-05-04',1000),
 (3,'2017-04-10',120000); 