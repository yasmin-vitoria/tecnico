create table marcas(
  	codigom int,
	nomem varchar(30),
	paisorigem varchar(30),
	
	constraint pk_marcas primary key(codigom)
);

insert into marcas values 
	(1012,'Volkswagen','Brasil'),
	(1013,'Fiat','Brasil'),
	(1014,'Audi','Alemanha'),
	(1015,'Chevrolet','Brasil'),
	(1016,'Chevrolet','USA');
	
select * from marcas;

create table modelos(
	codigomo int,
	nomemo varchar(30),
	tipomo varchar(5),
	cormo varchar(20),
	codigom int,
	
	constraint pk_modelos primary key(codigomo),
	constraint fk_modelos_marcas foreign key(codigom) 
	references marcas(codigom)
);

drop table modelos;

select * from modelos;

insert into modelos values
	(101,'Gol','GT','Cinza',1012),
	(102,'Pálio','XS','Preto',1013),
	(103,'Zafira','GLS','Verde',1015),
	(104,'Linea','GL','Cinza',1013),
	(105,'A3','GT','Preto',1014),
	(106,'Polo','GL','Cinza',1012),
	(107,'Taurus','XLS','Preto',1016);
	
select nomem,nomemo
	from modelos, marcas
 		where modelos.nomemo='A3'
	and modelos.codigom=marcas.codigom;

--vamos apagar a marca Audi

delete from marcas where nomem='Audi';
	select * from modelos;
	
--eu quero saber o país de origem
--dos modelos que possuem cor 'cinza'

select marcas.paisorigem,modelos.nomemo, modelos.cormo
	from marcas inner join modelos
  		on modelos.codigom=marcas.codigom
	where modelos.cormo='Cinza';
  
  
--Perguntas para prova;
--Qual é a marca do carro zafira?

select modelos.nomemo,marcas.nomem
	from modelos inner join marcas
		on modelos.codigom=marcas.codigom
	where modelos.nomemo='Zafira';
	
--Qual é o país que fabrica o carro A3?

select marcas.paisorigem, modelos.nomemo
	from marcas inner join modelos
		on marcas.codigom=modelos.codigom
	where modelos.nomemo='A3';
	
--Qual é o nome dos carros que a Fiat produz?

select marcas.nomem, modelos.nomemo
	from marcas inner join modelos
		on marcas.codigom=modelos.codigom
	where marcas.nomem='Fiat';

--Qual é a cor do carro que o tipo do modelo XS?
--Qual é a marca dele?

select modelos.cormo, marcas.nomem, modelos.tipomo
	from modelos inner join marcas
		on modelos.codigom=marcas.codigom
	where modelos.tipomo='XS';
	
	
--Qual é o nome do  modelo e  o nome da marca dos carros de cor preta?

select modelos.nomemo, marcas.nomem, modelos.cormo
	from modelos inner join marcas
		on modelos.codigom=marcas.codigom
	where modelos.cormo='Preto';

-- Qual é o carro que a chevrolet do brasil fabrica?
select modelos.tipomo, marcas.paisorigem, marcas.nomem
	from modelos inner join marcas
		on modelos.codigom=marcas.codigom
	where marcas.paisorigem='Brasil' and marcas.nomem='Chevrolet';
	
	
--A função count é utilizada o número de ocorrencias que acontece em um projeção (select).
--Seu uso é count (nomeCampo) então vamo perguntar quantos modelos possui a cor preta.

select count (nomemo) as "Números de modelos"
	from modelos
	where cormo='Preto';
	
--Quantos carros são montados pela Volkswagem?
-- utilize a funçaõ count

select count (nomem) as "Números de modelos"
	from marcas inner join modelos
		on marcas.codigom=modelos.codigom
	where nomem='Volkswagen';
	
	







