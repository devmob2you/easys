create table clientes(
	id_cliente int not null auto_increment primary key,
    nome_razao varchar(50) not null,
    cpf_cnpj varchar(20) not null,
    rg_ie varchar(15) not null,
    tel_fixo varchar(15) not null,
    tel_movel varchar(15) not null,
    cep varchar(9) not null,
    endereco varchar(50) not null,
    bairro varchar(50) not null,
    cidade varchar(50) not null,
    uf varchar(2) not null,
    numero varchar(10),
    email varchar(80) not null,
    aniversario TIMESTAMP,
    observacoes varchar(255)
)