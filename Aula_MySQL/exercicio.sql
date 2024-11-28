-- Exercício
CREATE DATABASE db_pedidos;

-- Tabela de cliente
CREATE TABLE Cliente (
clienteID INT PRIMARY KEY,
nome varchar(50),
email varchar(50),
telefone varchar(50)
);

-- Tabela de pedidos
CREATE TABLE Pedido (
pedidoID INT PRIMARY KEY,
produto varchar(50),
quantidade int,
precoUnitario decimal(10, 2)
);

DELIMITER //
CREATE FUNCTION ValorTotalPedido (ID INT)
returns decimal (10, 2)
DETERMINISTIC
BEGIN
  DECLARE ValorTotal decimal(10, 2);
  SELECT SUM(quantidade * precoUnitario) into ValorTotal
  FROM Pedido
  WHERE pedidoID = ID;
  
  RETURN ifnull(ValorTotal, 0);
END; 
//
DELIMITER ;

insert into pedido (pedidoID, produto, quantidade, precoUnitario) values 
(1, 'Caneta', '2', '2,50'),
(2, 'Camiseta', '1', '3,50'),
(3, 'Tênis', '1', '4,00'),
(4, 'Short', '3', '6,50');

select * from pedido;
