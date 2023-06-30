CREATE TABLE paciente(
	codp int,
	nome varchar(30),
	cidade varchar(40),
	estado varchar(26),
	Tratamento varchar(50),
	
CONSTRAINT pk_paciente PRIMARY KEY (codp)
);

SELECT * FROM paciente;

INSERT INTO paciente VALUES	
	( 111, 'Claúdio Henrique','São Paulo','SP','Cardiovascular'),
	( 112, 'Mariia Helena','Votuporanga', 'SP','Oftamologia'),
	( 113, 'Jorge Silva','Cardoso','SP','Otorrino'),
	( 114, 'Clara Magalhães','Parisi','SP','Oftamologia'),
	( 115, 'Pedro Vieira','Votuporanga','SP','Osteopatia');
	


CREATE TABLE medico(
	codm varchar(30),
	nome varchar(30),
	especialidade varchar(40),
	hospital varchar(26),
	experiencia int,
	
CONSTRAINT pk_medico PRIMARY KEY (codm)
);

SELECT * FROM medico;

INSERT INTO medico VALUES	
	('Med1','júlio Batimento','Cardiovascular','Boa Saúde','10'),
	('Med2','Maria Velonge','Oftamologista','Bom Retiro','15'),
	('Med3','Gabriel Curioso','Otorrino','Bom Retiro', '21'),
	('Med4','Ana Veperto','Oftamologia','Boa Saúde','5'),
	('Med5','Fábio Quebraoço','Osteopatia','Boa Saúde','17'),
	('Med6','Augusto Nunes','Pediatria','Santa Maria','22');






