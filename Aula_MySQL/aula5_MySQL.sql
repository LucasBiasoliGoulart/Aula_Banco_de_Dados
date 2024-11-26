-- Funções
CREATE DATABASE db_dados;

CREATE table Pedidos (
PedidoID INT PRIMARY KEY,
Quantidade INT,
PrecoUnitario DECIMAL(10, 2)
);

DELIMITER //
create function CalcularValorTotalPedido (ID INT)
returns decimal(10, 2)
NOT deterministic
begin
   declare ValorTotal decimal(10, 2);
   select SUM(Quantidade * PrecoUnitario) into ValorTotal
   from Pedidos
   where PedidoID = ID;
   
   return IFNULL(ValorTotal, 0);
end;
//
DELIMITER ;

select * from Pedidos;

insert into Pedidos (PedidoID, Quantidade, PrecoUnitario) values (1, 5, 20.00);
insert into Pedidos (PedidoID, Quantidade, PrecoUnitario) values (1, 3, 15.00);

update Pedidos set Quantidade = 6 where PedidosID = 1;

SELECT db_dados.CalcularValorTotalPeido(1) as ValorTotal;

-- Tabela de Funcionário
CREATE TABLE Funcionario(
FuncionarioID INT PRIMARY KEY,
Nome varchar(100),
Salario decimal(10, 2)
);

insert into Funcionario (FuncionarioID, Nome, Salario) values 
(1, 'João', '150'),
(2, 'Maria', '200');

select * from funcionario;

DELIMITER //
CREATE PROCEDURE AumentoSalario(
   in FuncionarioID INT,
   in PercentualAumento decimal(5, 2)
)
BEGIN
   update Funcionario
   set Salario = Salario + (Salario * PercentualAumento / 100)
   where FuncionarioID = FuncionarioID;
END; //
DELIMITER ;

call AumentoSalario(1, 10);

set SQL_SAFE_UPDATES = 0;

call AumentoSalario(1, 10.5);

set SQL_SAFE_UPDATES = 1;

-- Produtos
CREATE TABLE Produtos (
ProdutoID INT PRIMARY KEY,
Nome VARCHAR(100),
Estoque int
);

CREATE TABLE Vendas (
VendaID INT PRIMARY KEY,
ProdutoID INT,
Quantidade INT,
foreign key (ProdutoID) references Produtos(ProdutoID)
);

insert into Produtos (ProdutoID, Nome, Estoque) values (1, 'Produto A', 100);
insert into Produtos (ProdutoID, Nome, Estoque) values (2, 'Produto B', 200);

insert into Vendas (VendaID, ProdutID, Quantidade) values (1, 1, 10);
select * from vendas;
select * from produtos;
truncate vendas;

DELIMITER $$
CREATE TRIGGER AtualizaEstoque
AFTER INSERT ON vendas
FOR EACH ROW
begin
   update Produtos
   SET Estoque = Estoque - new.Quantidade
   where ProdutoID = NEW.ProdutoID;
   
end $$
DELIMITER ;
