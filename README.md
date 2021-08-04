README
Desafio LEO Learning


## Front-end

Bootstrap 5
- Clone the repo: `git clone https://github.com/twbs/bootstrap.git`

## Back-end
PHP 7.4

##Documentação
Inline

## Estrutura

    CRUD_controle/Operador do Banco de DADOS
    │   ├── Conexão com o BD
    │   ├── Controle de USUARIOS
    │   ├── Contrle de CURSOS
    │   ├── Controle de Matriculas -> user(n):(n)cursos
    |
    DAO - OBJETOS
    │    ├── Cursos
    │    ├── Matriculas
    │    ├── Usuarios
    │    ├──
    Routes - Forma de Proceder as requisições: Controle de Rotas
    │   ├── LOGIN
    │   ├── CARGA INICIAL no BD
    │   ├── NOVO CURSO
    │   ├── BUSCAR CURSOS no BD
    ```
SQL:
create table curso
(
    id        int auto_increment,
    nome      varchar(50)   not null,
    imagem    varchar(2083) null,
    descricao varchar(150)  not null,
    constraint curso_id_uindex
        unique (id)
);

alter table curso
    add primary key (id);

create table user
(
     id       int auto_increment,
     nome     varchar(50)          not null,
     type     varchar(50)          not null,
     status   tinyint(1) default 1 null,
     password varchar(150)         not null,
     constraint user_id_uindex
         unique (id)
);

alter table user
    add primary key (id);

create table matricula
(
    id_aluno       int  not null,
    id_curso       int  null,
    data_matricula date not null,
    constraint id
        foreign key (id_aluno) references user (id),
    constraint id_curso
        foreign key (id_curso) references curso (id)
);

