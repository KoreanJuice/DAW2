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
	(1, 'Salto a la fama', 'En busca de jóvenes talentos que desean demostrar al gran público sus dotes particulares'),
	(2, 'Saber y concursar', '¿Qué tan extensos son tus conocimientos culturales? El reto de contestar tanto a preguntas de actualidad como de hechos pasados'),
	(3, 'Queremos humor', 'Un desafío semanal en busca del mejor humorista que nos haga reír y olvidar las penas de la semana'),
	(4, 'Mira quién se acerca', '¿Sabrías definir a esa persona que se acerca por la calle? ¿A qué se dedica? ¿Cuáles son sus gustos y aficiones? Participa y demuéstranoslo'),
	(5, 'Futbol, más futbol por favor', 'El futbol desde sus comienzos. Todas las competiciones. Todos los marcadores. Todos los astros. Acepta el reto');
