create table alunos(
	nome varchar(30),
	matricula varchar(40),
	rua varchar(50),
	bairro varchar(50),
	cidade varchar(50),
	cep int,
	fone int,
	constraint pk_alunos primary key (matricula)
);

insert into alunos values
('Felipe','VP123','Wilson Gaparino', 'Bom','Votuporanga',1234,9633),
('Raissa','VP789','Dahora ','Da Galera','Cardoso',4561,4002),
('Ravena','VP321', 'Verdim', 'Zona Leste', 'Potirendaba',1527, 9753),
('Gabriela','VP987', 'Matias', 'Campinas','Birigui', 1727, 9754);

insert into alunos values
('Robison','VP8888', 'Perdido','Sem saída', 'Solidão', 9865, 1234),
('Athos','VP0212', 'Estranho', 'Atrasada','Votuporanga',4321, 9876),
('Joly','VP7485', 'Vida vazia', 'Alvorada','Monções',2143, 7419),
('Partacus','VP0741', 'Suave', 'Andaime','Nhandeara',4321, 9876),
('Josefona','VP7854', 'Difícil', 'Saúde','Turiúba',5842, 7698),
('Derek','VP2414', 'Meu Deus', 'E agora','Poá',0800, 0555);

select * from alunos;


create table instrumentos (
	id_inst int,
	instrumento varchar (50),
		
	constraint pk_instrumentos primary key (instrumento)
);

insert into instrumentos values
(10,'Violino'),
(10,'Vilão'),
(10,'Guitarra'),
(10,'Cajon'),
(10,'Violino'),
(10,'Violino'),
(10,'Violino'),
(10,'Violino'),
(10,'Violino'),
(10,'Violino'),


select * from instrumentos;

create table banda(
	id_banda int,
	matricula varchar (40),
	instrumento varchar (50),
	dt_ingresso int,
	
	constraint pk_banda primary key (id_banda),
	constraint fk_matricula foreign key (matricula)
		references  alunos(matricula),
	constraint fk_instrumento foreign key (instrumento)
		freferences instrumentos (instrumento)
	
);

select * from banda;



