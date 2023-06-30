CREATE TABLE marcas(
	CodM int,
	NomeM varchar(30),
	PaisOrigem varchar(40),
	
CONSTRAINT pk_marcas PRIMARY KEY (CodM)
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
	CodM int,
	
CONSTRAINT pk_modelos PRIMARY KEY (codMo), 
	CONSTRAINT fk_modelos_marcas FOREIGN KEY (CodM) 
		REFERENCES marcas(CodM)
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
	select nomemo, cormo 
		from modelos inner join on
	where modelos.nomemo = 'Zafira';
	--b)--
	select nomemo, tipomo 
		from modelos inner join on
	where nomemo= 'Taurus';
	--c)--
	select nomem, paisorigem 
		from marcas inner join on
	where nomem='VolksWagen';
	--d)--	
	select nomem, paisorigem 
		from marcas inner join on
	where paisorigem='USA';
	--e)--
	select nomemo, cormo 
		from modelos inner join on
	where nomemo='Pálio';
	--f)--
	select nomemo, cormo 
		from modelos inner join on
	where cormo = 'Preto';
	

select marcas.PaisOrigem,modelos.NomeMo, modelos.CorMO
	from marcas inner join  modelos 
		on modelos.CodM=marcas.CodM
	Where modelos.CorMo = 'Cinza';
	
	
		