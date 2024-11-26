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

insert into Funcionario (FuncionarioID, Nome, Salario)

