# Trabalho Final

## Instituto Federal de Goiás (IFG)

## Programação para Web II

# Proposta do Trabalho

Desenvolvimento de um site para Cadastro de Certificados com horas extra curriculares. O coordenador será capaz de cadastrar um aluno, deferir ou não deferir e alterar os certificados cadastrados. O Aluno cadastrado pelo coordenador deverá cadastrar os certificados com descrição, data, hora e pdf do certificado. Por fim o coordenador deve conseguir imprimir a lista de certificados por nome do aluno e a contagem total de horas.

# Regras do Trabalho

- Utilizar a arquitetura Model-view-viewmodel (MVVM).
- Ser responsivo.

----

# A Fazer

## Área do Aluno
- [X] Login do aluno.
- [ ] Cadastrar certificado com descrição, data, hora e pdf.

## Área do Coordenador
- [X] Cadastro do coordenador.
- [X] Login do coordenador.
- [X] Cadastro de aluno (pelo coordenador).
- [ ] Deferir, indeferir e alterar certificados cadastrados.
- [ ] Imprimir a lista de certificado por nome do aluno e a contagem total de horas.

# Banco de Dados

## Nome
```sql
db_trabalho
```

## Criação de Tabela(s)

### Pessoa
```sql
CREATE TABLE tb_pessoa(id INTEGER AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(60) NOT NULL, email VARCHAR(50) NOT NULL, senha VARCHAR(50) NOT NULL) ENGINE=InnoDB;
```

### Aluno
```sql
CREATE TABLE tb_aluno(id INTEGER AUTO_INCREMENT PRIMARY KEY, id_pessoa INTEGER NOT NULL, matricula VARCHAR(50), FOREIGN KEY (id_pessoa) REFERENCES tb_pessoa(id)) ENGINE=InnoDB;
```

### Coordenador
```sql
CREATE TABLE tb_coordenador(id INTEGER AUTO_INCREMENT PRIMARY KEY, id_pessoa INTEGER NOT NULL, FOREIGN KEY (id_pessoa) REFERENCES tb_pessoa(id)) ENGINE=InnoDB;
```
