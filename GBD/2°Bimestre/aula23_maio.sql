create table fornecedores(
	codfor int,
	fornecedor varchar(50),
	
	constraint pk_fornecedores primary key(codfor)
);

select * from fornecedores;

insert into fornecedores values
(200,'Bomdipreço'),
(201,'Temditudo'),
(203,'Sodubom'),
(204,'Fhrescou'),
(205,'Darozza');

create table categorias(
	codcat int,
	descricao varchar(50),
	codfor int,
	
	constraint pk_categorias primary key(codcat),
	constraint fk_categorias_fornecedores foreign key(codfor) 
	  references fornecedores(codfor)
);
drop table categorias;
select * from categorias;

insert into categorias values
(101, 'Cereal', 204),
(102, 'Refrigerante', 200),
(103, 'Doces', 203),
(104, 'Cosméticos', 201),
(105, 'Higiene', 201),
(106, 'Frutas', 205);

create table produtos(
	codprod int,
	nomeprod varchar(60),
	preco real,
	codcat int,
	
	constraint pk_produtos primary key (codprod),
	 constraint fk_produtos_categorias foreign key (codcat) 
		references categorias (codcat)

);

select * from produtos;

insert into produtos values 
	(1,'Feijão Tia Maria', 14.00, 101),
	(2,'Arroz Solthim', 9.00, 101),
	(3,'Coca-Cola', 7.00, 102),
	(4,'Shampo Jubba', 19.55, 104),
	(5,'Bolacha Dabboa', 8.70, 103),
	(6,'Bombom Dobhom', 15, 103),
	(7,'Sabonete Xerobom', 3.99, 104),
	(8,'Desinfetante', 5.00, 105),
	(9,'Banana', 3.00, 106),
	(10,'Coco da Bahia', 6.50, 106);
	
	
--Perguntas

--Quem é o fornecedor do feijão tia Maria?
select f.fornecedores,p.nomeprod
	from fornecedores f inner join categorias c
		on f.codfor = c.codfor inner join produtos p
		on p.codcat = c.codcat
	where p.nomeprod = 'Feijão Tia Maria';
		

--4) Execute o código SQL (select) para mostrar apenas o “nome e o preço” dos produtos
--listados na tabela produto

select nomeprod, preco from produtos;

-- 5) Realize as seguintes consultas sobre as tabelas, mostre o código e a resposta
	
--a--

