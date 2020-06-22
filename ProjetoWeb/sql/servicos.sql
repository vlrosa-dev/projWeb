
create table servicos(

    id_servico int not null AUTO_INCREMENT,
    nomeServico varchar(255) not null,
    tipoServico varchar(255) not null,
    expericencia int not null,
    categoria varchar(255) not null,
    disponibilidade varchar(255) not null,
    descricao varchar(255) not null,
    primary key(id_servico)

);