-- Loja de carros
create database db_loja_de_carros;

-- Tabela de cliente
create table tb_cliente(
id_cliente int primary key auto_increment,
nome varchar(50),
idade varchar(50),
telefone varchar(50),
endereco varchar(50)
);

insert into tb_cliente (id_cliente, nome, idade, telefone, endereco) values
(1, 'Gustavo', '35', '01123-3622', 'Rua gonzales 27'),
(2, 'Alice', '20', '79901-4021', 'Rua luiz de camoes 15'),
(3, 'Luiz', '27', '88019-5501', 'Rua conseleiro neves 19'),
(4, 'Caio', '40', '99512-6608', 'Rua alexandre martins 80');

select * from tb_cliente;

-- Tabela de carros
create table tb_carros(
id_carros int primary key auto_increment,
marca varchar(50),
modelo varchar(50),
cor varchar(50),
preco float(8,2),
ano int
);

insert into tb_carros (id_carros, marca, modelo, cor, preco, ano) values
(1, 'Toyota', 'Corolla', 'Prata', '120.000', '2020'),
(2, 'Ford', 'Mustang', 'Azul', '300.000', '2019'),
(3, 'Volkswagen', 'Golf', 'Branco', '110.000', '2021'),
(4, 'Honda', 'Civic', 'Preto', '130.000', '2022'),
(5, 'Chevrot', 'Onix', 'Vermelho', '75.000', '2021'),
(6, 'Nissan', 'Sentra', 'Azul', '110.000', '2020'),
(7, 'BMW', 'Série 3', 'Branco', '250.000', '2021'),
(8, 'Hyundai', 'Elantra', 'Vermelho', '100.000', '2020'),
(9, 'Fiat', 'Argo', 'Azul', '70.000', '2022'),
(10, 'Kia', 'Seltos', 'Verde', '140.000', '2021');

select * from tb_carros;

-- Tabela de pedidos
create table tb_pedidos(
id_pedidos int primary key auto_increment,
data_pedido datetime,
id_cliente int not null,
foreign key (id_cliente) references tb_cliente(id_cliente)
);

insert into tb_pedidos (data_pedido, id_cliente) values
('2024-10-22 14:30:00', 1),
('2024-10-17 12:00:00', 2),
('2024-10-20 19:30:00', 3);

select * from tb_pedidos;

-- Tabela de compras
create table tb_compras(
id_compras int primary key auto_increment,
id_cliente int not null,
id_carros int not null,
data_compra datetime,
valor decimal(10, 2),
forma_pagamento varchar(50),
foreign key (id_cliente) references tb_cliente(id_cliente),
foreign key (id_carros) references tb_carros(id_carros)
);

insert into tb_compras (id_cliente, id_carros, data_compra, valor, forma_pagamento) values
(1, 2, '2024-10-22 15:00:00', 3000.000, 'Cartão de credito');

select * from tb_compras;

-- Tabela de vendas
create table tb_vendas(
id_vendas int primary key auto_increment,
id_cliente int not null,
id_carros int not null,
data_vendas datetime,
preco decimal(10, 2),
foreign key (id_cliente) references tb_cliente(id_cliente),
foreign key (id_carros) references tb_carros(id_carros)
);

insert into tb_vendas (id_cliente, id_carros, data_vendas, preco) values
(1, 2, '2024-10-30 10:00:00', 2000.00),
(2, 3, '2024-10-28 14:00:00', 1500.00);

select * from tb_vendas;

-- Tabela de Vendedores
create table tb_vendedor(
id_vendedor int primary key auto_increment,
nome varchar(50),
telefone varchar(50),
data_contratacao date,
salario decimal(10, 2)
);

insert into tb_vendedor (id_vendedor, nome, telefone, data_contratacao, salario) values
(1, 'Carlos Silva', '119998001', '2023-01-10', 3000.00),
(2, 'Maria dos anjos', '99923003', '2024-10-29', 3500.00);

select * from tb_vendedor;

-- Selects
select tb_cliente.nome, data_pedido from tb_cliente inner join tb_pedidos on (tb_cliente.id_cliente = tb_pedidos.id_cliente);

select * from tb_carros where ano < 2022;

select nome, telefone from tb_cliente;

select tb_cliente.nome as nome_cliente, tb_carros.modelo as modelo_carro, tb_vendas.data_vendas, tb_vendas.preco from tb_vendas join tb_cliente on 
tb_vendas.id_cliente = tb_cliente.id_cliente join tb_carros on tb_vendas.id_carros = tb_carros.id_carros;

select tb_vendedor.nome as nome_vendedor, tb_carros.modelo as modelo_carro, tb_carros.preco as preco_carro, tb_vendas.data_vendas
from tb_vendedor join tb_vendas on tb_vendedor.id_vendedor = tb_vendas.id_vendedor join tb_carros on tb_vendas.id_carros = tb_carros.id_carros
order by tb_vendedor.nome, tb_vendas.data_vendas;