CREATE TABLE cliente (
codcli int,
	nome varchar(30),
	endereco varchar(50),
	cidade varchar(30),
	estado char(2)
);

SELECT * FROM cliente;

INSERT INTO cliente VALUES
(1,'Ana', 'Rua Sergipe, 3344','Votuporanga','SP');

INSERT INTO cliente VALUES
(1, 'Pedro', 'Av. Brasil, 312','Cosmorama','SP');


CONSTRAINT PRIMARY KEY(codcli)

