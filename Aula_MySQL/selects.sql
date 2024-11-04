select * from tb_carros;
select * from tb_carros where ano>=2020 and id>2;

select * from tb_carros where ano>=2020 or id>2;

select * from tb_carros where ano in(2018,2021);

select * from tb_carros where ano between 2018 and 2021;

select * from tb_carros where ano not between 2018 and 2021;

select * from tb_carros where modelo='Corolla';

select * from tb_carros where modelo like '%a';

select * from tb_carros where modelo like '%oyo%';

select * from tb_carros where ano between 2018 and 2021 order by ano desc;

select * from tb_carros where ano between 2018 and 2021 order by marca, ano desc limit 5;

select * from tb_carros where ano between 2018 and 2021 order by marca, ano desc limit 2 offset 2;