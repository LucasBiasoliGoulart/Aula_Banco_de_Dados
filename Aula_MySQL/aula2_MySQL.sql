create database db_pessoa;
create table TB_DadosPessoas (
id int,
nome varchar(50),
profissao varchar(50),
nascimento date,
sexo char(1),
peso float(3,2),
altura float(3,2),
nascionalidade varchar(50) 
);

insert into TB_DadosPessoas (id, nome, profissao, nascimento, sexo, peso, altura, nascionalidade) values
(1, 'João Silva', 'Engenheiro', '1985-03-15', 'M', '80', '180', 'Brasileiro'),
(2, 'Maria Oliveira', 'Médica', '1990-07-22', 'F', '65', '165', 'Brasileira'),
(3, 'Ahmed El-Sayed', 'Cientista', '1993-09-12', 'M', '85', '178', 'Egípcio'),
(4, 'Chen Wei', 'Programador', '1988-04-23', 'M', '75', '172', 'Chinês'),
(5, 'Rafael Torres', 'Músico', '1980-03-20', 'M', '73', '180', 'Argentino'),
(6, 'Priya Desai', 'Psicóloga', '1983-02-25', 'F', '62', '168', 'Indiana'),
(7, 'Zara Patel', 'Enfermeira', '1992-01-05', 'F', '60', '162', 'Britânica'),
(8, 'Leandro Costa', 'Empresário', '1978-09-09', 'M', '89', '181', 'Brasileiro'),
(9, 'Luka Novak', 'Atleta', '1991-05-30', 'M', '85', '185', 'Croata'),
(10, 'Imani Ndlovu', 'Artista', '1996-04-18', 'F', '58', '164', 'Sul-Africana'),
(11, 'Mateo Gonzalez', 'Farmacêutico', '1980-08-22', 'M', '76', '177', 'Mexicano'),
(12, 'Elena Ivanova', 'Designer Gráfico', '1990-08-01', 'F', '62', '165', 'Russa');

select * from TB_DadosPessoas;