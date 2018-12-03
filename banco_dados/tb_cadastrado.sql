create table if not exists tb_cadastrado(

	id int auto_increment not null primary key,
	nome varchar(100) not null,
	num int(10) not null unique,
	cargo varchar(50) not null
) default character set utf8 default collate utf8_general_ci; 