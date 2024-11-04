select * from tb_clientes left join tb_pedidos on (tb_clientes.id_cliente = tb_pedidos.id_cliente);

select * from tb_clientes right join tb_pedidos on (tb_clientes.id_cliente = tb_pedidos.id_cliente);

select * from tb_produtos left join tb_imagens on (tb_produtos.id_produto = tb_imagens.id_produto);