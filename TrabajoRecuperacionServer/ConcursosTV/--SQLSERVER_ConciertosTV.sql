CREATE DATABASE ConcursoTV;
USE ConcursoTV;
CREATE TABLE Candidato (
	idCandidato INT NOT NULL,
	apellido NVARCHAR(50) NOT NULL,
	nombre NVARCHAR(50) NOT NULL,
	tlfno NVARCHAR(9) NOT NULL,
	eCorreo NVARCHAR(50) NOT NULL,
	direccion NVARCHAR(200) NOT NULL,
	CONSTRAINT PK_idCandidato PRIMARY KEY (idCandidato),
);

CREATE TABLE Concurso (
	idConcurso INT NOT NULL,
	nombre NVARCHAR(50) NOT NULL,
	descripcion NVARCHAR(MAX) NOT NULL,
	CONSTRAINT PK_idConcurso PRIMARY KEY (idConcurso),
);

CREATE TABLE CandidatoA (
	idCandidato INT,
	idConcurso INT,
	CONSTRAINT FK_idCandidato FOREIGN KEY (idCandidato) REFERENCES Candidato(idCandidato),
	CONSTRAINT FK_idConcurso FOREIGN KEY (idConcurso) REFERENCES Concurso(idConcurso),
);

INSERT INTO Concurso (idConcurso, nombre, descripcion) VALUES 
	(1, 'Salto a la fama', 'En busca de j�venes talentos que desean demostrar al gran p�blico sus dotes particulares'),
	(2, 'Saber y concursar', '�Qu� tan extensos son tus conocimientos culturales? El reto de contestar tanto a preguntas de actualidad como de hechos pasados'),
	(3, 'Queremos humor', 'Un desaf�o semanal en busca del mejor humorista que nos haga re�r y olvidar las penas de la semana'),
	(4, 'Mira qui�n se acerca', '�Sabr�as definir a esa persona que se acerca por la calle? �A qu� se dedica? �Cu�les son sus gustos y aficiones? Participa y demu�stranoslo'),
	(5, 'Futbol, m�s futbol por favor', 'El futbol desde sus comienzos. Todas las competiciones. Todos los marcadores. Todos los astros. Acepta el reto');
