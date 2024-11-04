create database db_Carros;

-- Tabela de clientes
create table tb_clientes(
id_cliente int not null primary key auto_increment,
nome varchar(50),
idade varchar(50),
nascimento date,
sexo char(1),
CPF int,
numero varchar(50),
endereco varchar(50)
);

insert into tb_clientes (id, nome, idade, nascimento, sexo, cpf, numero) values
(1, 'João', '29', '2004-05-18', 'M', '144.677.013', '94450-9245'),
(2, 'Alice', '23', '1998-02-14', 'F', '181.503.243', '90053-6225'),
(3, 'Marcelo', '31', '2011-07-20', 'M', '209.100.501', '70091-9880');

select * from tb_clientes;

-- Tabela de vendedor
create table tb_vendedor(
id_vendedor int not null primary key auto_increment,
nome varchar(50),
endereco varchar(50),
valor float(8,2) not null
);

insert into tb_vendedor (id, nome, endereco, valor) values
(1, 'Gabriel', 'Rua Luiz de camoes 13', '2500.00'),
(2, 'Alexandre', 'Rua Rodrigue sauves 15', '3000.00');

select * from tb_vendedor;

-- Tabela de comprador
create table tb_comprador(
id_comprador int not null primary key auto_increment,
nome varchar(50),
telefone varchar(50)
);

insert into tb_comprador (id, nome, telefone) values
(1, 'Bella', '77053-9010'),
(2, 'Nicolas', '99150-6220');

select * from tb_comprador;

-- Tabela de carros
create table tb_carros(
id_carro int not null primary key auto_increment,
marca varchar(50),
modelo varchar(50),
cor varchar(50),
ano int not null,
preco float(8, 2) not null
);

insert into tb_carros (id, marca, modelo, cor, ano, preco) values
(1, 'Toyota', 'Corolla', 'Vermelho', '2020', '85000.00'),
(2, 'Honda', 'Civic', 'Verde', '2019', '90000.00'),
(3, 'Ford', 'Mustang', 'Laranja', '2021', '30000.00'),
(4, 'Chevrolet', 'Onix', 'Azul', '2018', '45000.00');

select * from tb_carros;

-- Tabelas de ID
create table tb_cliente(
id_cliente int not null,
id_carro int not null,
foreign key (id_cliente) references tb_clientes(id_cliente),
foreign key (id_carro) references tb_carros(id_carro)
);

create table tb_vendedor(
id_vendedor int not null,
id_carro int not null,
foreign key (id_vendedor) references tb_vendedor(id_vendedor),
foreign key (id_carro) references tb_carros(id_carro)
);

select * from tb_clientes left join tb_carros on (tb_clientes.id_cliente = tb_carros.id_cliente);