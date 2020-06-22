
create table endereco(

    id_end int not null AUTO_INCREMENT,
    cep int not null,
    numero int not null,
    estado varchar(255) not null,
    cidade varchar(255) not null,
    endereco varchar(255) not null,
    complemento varchar(255) not null,
    primary key(id_end)

);