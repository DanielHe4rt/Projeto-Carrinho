
create table cidade (   
	cidade_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome_cidade varchar(50) not null,
	cep varchar(8) not null,
	uf varchar(2) not null
);

create table cliente (    
	cliente_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(100) not null,
	cpf varchar(14) not null,
  	rg varchar(14) not null,
  	telefone varchar(30) not null,
  	endereco varchar(100),
	cidade_id int not null,
	constraint fk_cidade foreign key (cidade_id) references cidade(cidade_id)
);

create table mercado ( 
	mercado_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	propriet_mercado varchar(100) not null,
	nome_mercado varchar(200) not null,
	rg varchar(14) not null,
	cpf varchar(14) not null,
	cnpj varchar(14) not null,
	endereco varchar(100),
	telefone varchar(30) not null,
	cidade_id int not null,
    constraint fk_city foreign key (cidade_id) references cidade(cidade_id)
);


create table categorias ( 
	categoria_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(50) not null
);

create table produto ( 
  	produto_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  	descrição varchar(450),
  	preço float not null,
	mercado_id int not null,
	categoria_id int not null,
    constraint fk_mercado foreign key (mercado_id) references mercado(mercado_id),
  	constraint fk_categoria foreign key (categoria_id) references categorias(categoria_id)
);

create table compra ( 
  	compra_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  	data_compra date not null,
  	produto_id int not null,
  	quantidade_compra varchar(50) not null,
	valor_compra varchar(50) not null,
  	valor_frete varchar(50),
	cliente_id int not null,
	constraint fk_cliente foreign key (cliente_id) references cliente(cliente_id),
    constraint fk_produto foreign key (produto_id) references produto(produto_id)
);

create table cadastro ( 
	cadastro_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome varchar(100) not null,
    sobrenome varchar(100) not null,
	login varchar(80) not null,
	senha varchar(100) not null,
	email varchar(100) not null,
   	nivel int not null,
    cidade_id int not null,
	constraint fk_cidadeCadas foreign key (cidade_id) references cidade(cidade_id)
);

create table usuario ( 
	usuario_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome Varchar(100) not null,
	login Varchar(80) not null,
	senha Varchar(100) not null,
   	nivel int
);