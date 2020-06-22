
create table cad_servicos(

    id_pessoa int not null AUTO_INCREMENT,
    nome varchar(255) not null,
    email varchar(255) not null,
    cpf int(15) not null,
    sexo char(2) not null,
    telefone int(15) not null,
    celular int(15) not null,
    nomeServico varchar(255) not null,
    tipoServico varchar(255) not null,
    expericencia int not null,
    categoria varchar(255) not null,
    disponibilidade varchar(255) not null,
    descricao varchar(255) not null,
    primary key(id_pessoa)

);