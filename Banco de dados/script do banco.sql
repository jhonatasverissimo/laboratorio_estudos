create database bd_labestudos;
use bd_labestudos;
create table tb_estado(
cd_estado int not null primary key auto_increment,
nm_estado varchar(45) not null
);
create table tb_cidade(
cd_cidade int not null primary key auto_increment,
nm_cidade varchar(45) not null,
fk_estado int not null,
foreign key tb_cidade(fk_estado) references tb_estado(cd_estado)
);
create table tb_bairro(
cd_bairro int not null primary key auto_increment,
nm_bairro varchar(45) not null,
fk_cidade int not null,
constraint fk_cidade foreign key (fk_cidade) references tb_cidade(cd_cidade)
);
create table tb_endereco(
cd_endereco int not null primary key auto_increment,
nm_rua varchar(45) not null,
nr_rua varchar(8) not null,
nm_complemento varchar(45),
fk_bairro int not null,
foreign key tb_endereco(fk_bairro) references tb_bairro(cd_bairro)
);

create table tb_cargo(
cd_cargo int not null primary key auto_increment,
nm_cargo varchar(30) not null,
ds_cargo varchar(250)
);

create table tb_escola(
cd_escola int not null primary key auto_increment,
nm_escola varchar(45) not null,
ds_escola varchar(300)
);
create table tb_unidade(
cd_unidade int not null primary key auto_increment,
nm_unidade varchar(50) not null,
cnpj_unidade varchar(14) not null,
id_endereco int not null,
id_escola int not null,
constraint endereco_unidade foreign key (id_endereco) references tb_endereco(cd_endereco),
constraint fk_escola foreign key (id_escola) references tb_escola(cd_escola)
);


create table tb_funcionario(
cd_funcionario int not null primary key auto_increment,
nm_funcionario varchar(45) not null,
dt_nasc_funcionario date not null,
nm_email_funcionario varchar(60),
sg_sexo_funcionario boolean,
id_unidade int not null,
id_cargo int not null,
id_endereco int not null,
constraint fk_unidade foreign key (id_unidade) references tb_unidade(cd_unidade),
constraint fk_cargo foreign key (id_cargo) references tb_cargo(cd_cargo),
constraint endereco_funcionario foreign key (id_endereco) references tb_endereco(cd_endereco)
);

create table tb_curso(
cd_curso int not null primary key auto_increment,
nm_curso varchar(50) not null,
ds_curso varchar(300) not null
);
create table curso_unidade(
id_curso int not null,
id_unidade int not null,
constraint fk_curso foreign key (id_curso) references tb_curso(cd_curso),
constraint id_unidade foreign key(id_unidade) references tb_unidade(cd_unidade)
);
create table tb_aula(
cd_aula int not null primary key auto_increment,
nm_aula varchar(45) not null,
ds_aula varchar(300) not null,
nm_arquivo varchar(150) not null,
id_curso int not null,
constraint curso_aula foreign key (id_curso) references tb_curso(cd_curso)
);
create table tb_aluno(
cd_aluno int not null primary key auto_increment,
nm_aluno varchar(45) not null,
dt_nasc_aluno date not null,
sg_sexo_aluno boolean,
email_aluno varchar(45) not null,
nm_senha varchar(20) not null,
fk_endereco int not null,
fk_unidade int not null,
constraint unidade_aluno foreign key (fk_unidade) references tb_unidade(cd_unidade),
constraint endereco_aluno foreign key (fk_endereco) references tb_endereco(cd_endereco)
);

create table curso_aluno(
id_aluno int not null,
id_curso int not null,
constraint fk_aluno foreign key (id_aluno) references tb_aluno(cd_aluno),
constraint curso_aluno foreign key (id_curso) references tb_curso(cd_curso)
);
create table telefone_aluno(
id_aluno int not null,
nr_telefone_aluno varchar(11) not null,
constraint aluno_telefone foreign key (id_aluno) references tb_aluno(cd_aluno)
);
create table tb_atividade(
cd_atividade int not null primary key auto_increment,
fk_aluno int not null,
fk_aula int not null,
constraint atividade_aluno foreign key (fk_aluno) references tb_aluno(cd_aluno),
constraint atividade_aula foreign key (fk_aula) references tb_aula(cd_aula)
);
