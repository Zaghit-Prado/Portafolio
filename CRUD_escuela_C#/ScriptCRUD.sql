use master
if db_id ( 'CrudEscuela' ) is not null
  drop database CrudEscuela
go

create database CrudEscuela
go

use CrudEscuela
go

--
-- Estructura de tabla para la tabla `cargo`
--
CREATE TABLE cargo (
  idCargo int IDENTITY(1,1) PRIMARY KEY,
  cargo varchar(20) NOT NULL);
--
-- Insert de datos para la tabla `cargo`
--
INSERT INTO cargo (cargo) VALUES
('Soporte'),('Director'), ('SubDirector'), ('Prof. Matematicas'), ('Prof. Ciencias'), ('Prof. Computo'), ('Prof. Comunicacion'), ('Prof. Escuela') ;

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE profesores (
  id int IDENTITY(1,1) PRIMARY KEY,
  dni CHAR(8) NOT NULL,
  nombre char(12) NOT NULL,
  apellido char(12) NOT NULL,
  apellidoM char(12) NOT NULL,
  contraseña char(6) NOT NULL,
  idCargo int NOT NULL,
        CONSTRAINT fk_grupo FOREIGN KEY (idCargo)
        REFERENCES cargo (idCargo));


USE CrudEscuela
GO
create procedure sp_NewProf
	@dni CHAR(8),
	@nombre char(12),
	@apellido char(12),
	@apellidoM char(12),
	@contraseña char(6),
	@idCargo int
		as insert into profesores
		(dni, nombre, apellido, apellidoM, contraseña, idCargo)
		values (@dni, @nombre, @apellido, @apellidoM, @contraseña, @idCargo)
go

create procedure sp_EditarProf
	
	@dni CHAR(8),
	@nombre char(12),
	@apellido char(12),
	@apellidoM char(12),
	@contraseña char(6),
	@idCargo int,
	@id int
	as
		update profesores set nombre=@nombre, dni=@dni, apellido=@apellido, apellidoM =@apellidoM, contraseña=@contraseña, idCargo=@idCargo
		where id=@id
	go
--
-- Insert de datos para la tabla `profesores`
--
USE CrudEscuela
GO
INSERT INTO profesores (dni, nombre, apellido, apellidoM, contraseña, idCargo) VALUES
('72493800', 'Zaghit', 'Prado', 'Martinez', '123456', 2),
('12345678', 'Omar', 'Espinoza', 'Manrique', '123456', 2),
('00000000', 'Marcos', 'Garrido', 'Correa', '123456', 3),
('89456123', 'Jose', 'Mendoza', 'Auriz', '123456', 4),
('22222222', 'Marta', 'Viloria', 'Ortiz', '123456', 5),
('12121212', 'Carla', 'Muños', 'Torres', '123456', 6);

USE CrudEscuela
GO
Create procedure sp_getprofesores as
select p.id, p.dni,p.nombre,p.apellido as [Apellido Paterno],p.apellidoM as [Apellido Materno], c.cargo
from profesores as p 
inner join cargo as c
on p.idCargo=c.idCargo 
order by p.id
go
--
-- Estructura de procedure `sp_getCargos`
--
USE CrudEscuela
GO
Create procedure sp_getCargos
	as select*from cargo
go


USE CrudEscuela
GO
/****** Object:  StoredProcedure [dbo].[sp_Profesor_Login]    Script Date: 18/03/2022 15:54:20 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

CREATE OR ALTER PROCEDURE [dbo].[sp_Profesor_Login]
	@dni char(8),
	@Contraseña char(6)
	as select p.*, c.cargo from profesores p, cargo c where dni = @dni and contraseña = contraseña and p.idCargo = c.idCargo
	go
--
-- Estructura de tabla para la tabla `Estudiantes`
--		 
USE CrudEscuela
GO
create table Estudiantes (
  idEstudiante int primary key identity,
  nombre char(30) ,
  DNI char(8),
  segnombre char(30),
  apellidop char(30),
  apellidom char(30),
  telf char(9),
  direccion char(100),
  email char(50) unique,
  FechaNa char(40),
  edad char(2),
  Grado char(15),
  Seccion char(2))




--
-- Estructura de procedure `sp_getEstudiantes`
--

USE CrudEscuela
GO
Create procedure sp_getEstudiantes as
select idEstudiante as [ID], DNI as [DNI], nombre as [Nombre de Alumno], segnombre as [Segundo Nombre], apellidop as [Apellido Paterno],apellidom as [Apellido Materno], telf as [Telefono],
  direccion as [Direccion],
  email as [Email],
  FechaNa as [Fecha de Nacimiento],
  edad as [Edad],
  Grado as [Grado],
  Seccion as [Seccion]
from Estudiantes order by idEstudiante
go
--
-- Insert de datos para la tabla `Estudiantes`
--
USE CrudEscuela
GO
INSERT INTO Estudiantes
(nombre, DNI, segnombre, apellidop, apellidom, telf, direccion, email, FechaNa, edad, Grado, Seccion)
VALUES 
('Sofia', '72493955', 'Kristen', 'Prado', 'Martinez', '933499558', '5 de Canto Grade, cl. Simon Bolibar 545', 'Prado_Martinez@Hotmail.com', '14/03/2008', '14', '3ro', 'B'),
('Juan', '10356545', 'Marcos', 'Juri', 'Espinisa', '925222477', 'Canto Rey II Etapa, San Juan de Lurigancho', 'Espinoza@Hotmail.com', '03/11/2008', '14', '3ro', 'A'),
('Pilco', '78694522', 'Jhean', 'Vazques', 'Persa', '924938776', 'La Huayrona, San Juan de Lurigancho', '78694522a@gmail.com', '30/07/2009', '15', '5to', 'C'),
('Jonatan', '13493855', 'Piero', 'De Arca', 'Puerta', '6379284', 'Urb San Hilarion Etapa 2, San Juan de Lurigancho', '6379284a@gmail.com', '04/11/2007', '13', '2do', 'C'),
('Persi', '43451826', 'Fern', 'Persa', 'Carso', '6456879', 'Comite 51, San Juan de Lurigancho', 'Persa@Hotmail.com', '13/01/2006', '16', '6to', 'A')
GO	

	create procedure sp_EditarAlum
	@nombre char(30) ,
	@DNI char(8),
	@segnombre char(30),
	@apellidop char(30),
	@apellidom char(30),
	@telf char(9),
	@direccion char(100),
	@email char(50),
	@FechaNa char(40),
	@edad char(2),
	@Grado char(15),
	@Seccion char(2),
	@idEstudiante int
	as
		update Estudiantes set nombre=@nombre, DNI=@DNI, segnombre=@segnombre, apellidop=@apellidop, apellidom=@apellidom, telf=@telf, direccion=@direccion, email=@email, FechaNa=@FechaNa, edad=@edad, Grado=@Grado, Seccion=@Seccion
		where idEstudiante=@idEstudiante
	go

USE CrudEscuela
GO

create procedure sp_NewEstudiante
	@nombre char(30) ,
	@DNI char(8),
	@segnombre char(30),
	@apellidop char(30),
	@apellidom char(30),
	@telf char(9),
	@direccion char(100),
	@email char(50),
	@FechaNa char(40),
	@edad char(2),
	@Grado char(15),
	@Seccion char(2)
		as insert into Estudiantes
		(nombre, DNI, segnombre, apellidop, apellidom, telf, direccion, email, FechaNa, edad, Grado, Seccion)
		values (@nombre, @DNI, @segnombre, @apellidop, @apellidom, @telf, @direccion, @email, @FechaNa, @edad, @Grado, @Seccion)
go

USE CrudEscuela
GO
create procedure sp_BorrarAlum
	@idEstudiante int
	as
	delete from Estudiantes where idEstudiante=@idEstudiante
go

USE CrudEscuela
GO
create procedure sp_BorrarProf 
	@id int
	as
	delete from profesores where id=@id
go
USE CrudEscuela
GO
create procedure sp_buscar_Alumno
@nombre varchar(50)
as
select idEstudiante,
  nombre,
  DNI,
  segnombre,
  apellidop,
  apellidom,
  telf,
  direccion,
  email,
  FechaNa,
  edad,
  Grado,
  Seccion from clientes where nombre like @nombre + '%'
go

	select * from Estudiantes