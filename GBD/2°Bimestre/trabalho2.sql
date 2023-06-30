CREATE TABLE empregado (
nome varchar(30),
rg int,
cic int,
depto int,
rgsupervisor int,
salario real,

CONSTRAINT pk_rg PRIMARY KEY(rg)
);

select * from empregado;

INSERT INTO empregado VALUES

('João Luiz', 10101010, 11111111, 1, null, 3000),

('Fernando', 20202020, 22222222, 2,10101010, 2500),

('Ricardo', 30303030, 33333333, 2, 10101010, 2300),

('Jorge', 40404040, 44444444, 2, 20202020, 4200),

('Renato', 50505050, 55555555, 3, 20202020, 1300);

CREATE TABLE dependentes (

rg int,
nomed varchar(30),
dtnasc varchar(10),
relacao varchar(30),
sexo varchar(30),
coddep int,

CONSTRAINT pk_coddep PRIMARY KEY (coddep),

CONSTRAINT fk_dependentes_empregado FOREIGN KEY (rg)
  REFERENCES empregado (rg)

);

select * from dependentes;

INSERT INTO dependentes VALUES

(10101010, 'Jorge', '1986-12-27', 'Filho', 'Masculino', 1),

(10101010, 'Luiz', '1979-11-18', 'Filho', 'Masculino', 2),

(20202020, 'Fernanda', '1969-02-14', 'Conjuge', 'Feminino', 3),

(20202020, 'Angelo', '1995-02-10', 'Filho', 'Masculino', 4),

(30303030, 'Adreia', '1990-05-01', 'Filho', 'Feminino', 5);

--A--
SELECT d.nomed, d.relacao, e.nome
	FROM empregado e INNER JOIN dependentes d
		ON e.rg = d.rg
	WHERE e.nome = 'Ricardo';

--B--
SELECT d.nomed, d.dtnasc, d.relacao
	FROM dependentes d
	WHERE d.relacao='Filho';

--C--
SELECT d.nomed, d.sexo, d.relacao
	FROM dependentes d 
    WHERE d.relacao='Conjuge';

--D--
SELECT e.nome, d.nomed, e.rg, e.cic, e.depto, d.relacao
	FROM empregado e INNER JOIN dependentes d
		ON e.rg d.rg
	WHERE d.relacao = 'Filho';

--E--
SELECT d.nomed, d.relacao, d.sexo, e.nome 
	FROM empregado e INNER JOIN dependentes d
    	ON e.rg = d.rg
	WHERE e.nome 'Fernando';

--F--
SELECT e.nome, d.nomed
	FROM empregado e INNER JOIN dependentes d
		ON e.rg d.rg
	WHERE d.nomed = 'Angelo';

--G--
SELECT e.nome, d.nomed, e.salario 
	FROM empregado e INNER JOIN dependentes d 
		ON e.rg d.rg
	WHERE d.nomed = ' Fernanda';

--H--
SELECT e.nome, e.salario, d.nomed
	FROM empregado e INNER JOIN dependentes d 
    	ON e.rg = d.rg 
    WHERE e.salario > 3000;

--I--
SELECT e.nome, d.nomed, e.salario 
	FROM empregado e INNER JOIN dependentes d
		ON e.rg= d.rg 
	WHERE d.relacao 'Conjuge';

--J--
SELECT e.nome, d.nomed, e.salario 
	FROM empregado e INNER JOIN dependentes d 
    	ON e.rg d.rg
	WHERE d.relacao 'Conjuge';


