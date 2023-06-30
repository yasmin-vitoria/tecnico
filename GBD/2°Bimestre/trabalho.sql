CREATE TABLE marcas(
	CodM int,
	NomeM varchar(30),
	PaisOrigem varchar(40)
);

SELECT * FROM marcas;

INSERT INTO marcas VALUES
	('1012','VolksWagen','Brasil'),
	('1013','Fiat','Brasil'),
	('1014','Audi','Alemanha'),
	('1015','Chevrolet','Brasil'),
	('1016','Chevrolet','USA');





CREATE TABLE modelos(
	CodMo int,
	NomeMo varchar(30),
	TipoMO varchar(40),
	CorMo varchar (30),
	CodM int
);

SELECT * FROM modelos;

INSERT INTO modelos VALUES
	('101','Gol', 'GT', 'Cinza', '1012'),
	('102','Pálio', 'XS', 'Preto', '1013'),
	('103','Zafira', 'GLS', 'Verde', '1015'),
	('104','Linea', 'GL', 'Cinza', '1013'),
	('105','A3', 'GT', 'Preto', '1014'),
	('106','Polo', 'GL', 'Cinza', '1012'),
	('107','Taurus', 'XLS', 'Preto', '1016');
	
	--a)--
	select nomemo, cormo from modelos where nomemo = 'Zafira';
	--b)--
	select nomemo, tipomo from modelos where nomemo= 'Taurus';
	--c)--
	select nomem, paisorigem from marcas where nomem='VolksWagen';
	--d)--	
	select nomem, paisorigem from marcas where paisorigem='USA';
	--e)--
	select nomemo, cormo from modelos where nomemo='Pálio';
	--f)--
	select nomemo, cormo from modelos where cormo = 'Preto';
		