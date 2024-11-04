-- Tabela de carros
create table tb_carros (
id int,
marca varchar(50),
modelo varchar(50),
cor varchar(50),
portas varchar(50),
ano int not null,
preco float(8,2) default 0
);

insert into tb_carros (id, marca, modelo, cor, portas, ano, preco) values
(1, 'Toyota', 'Corolla', 'Azul', '4', '2020', '85000.00'),
(2, 'Honda', 'Civic', 'Laranja', '4', '2019', '90000.00'),
(3, 'Ford', 'Mustang', 'Verde', '4', '2021', '3000000.00'),
(4, 'Chevrolet', 'Onix', 'Vermelho', '4', '2018', '45000.00');

-- select * from tb_carros
select modelo, ano, preco from tb_carros;

