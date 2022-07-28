# Trabalho Final

## Instituto Federal de Goiás (IFG)

## Programação para Web II

# Proposta do Trabalho

Desenvolvimento de um site para Cadastro de Certificados com horas extra curriculares. O coordenador será capaz de cadastrar um aluno, deferir ou não deferir e alterar os certificados cadastrados. O Aluno cadastrado pelo coordenador deverá cadastrar os certificados com descrição, data, hora e pdf do certificado. Por fim o coordenador deve conseguir imprimir a lista de certificados por nome do aluno e a contagem total de horas.

# Regras do Trabalho

- Utilizar a arquitetura Model-view-viewmodel (MVVM).
- Ser responsivo.

----

# Como Subir Mudanças no Git

## Passo 1
Adicionar novas mudanças

```git
git add .
```

## Passo 2
Commitar as mudanças que você fez
```git
git commit -m "Qualquer mensagem aqui"
```

## Passo 3
Se você estiver na branch main fazendo essas mudanças (pode ser verificado com **git status**) então você cria uma nova branch
```git
git checkout -b nova-branch
```

## Passo 4
Agora que você criou uma branch você precisa voltar aonde você fez o commit
```git
git checkout main
```

## Passo 5
Agora é só subir o commit para a nova branch
```git
git push origin nova-branch
```

----

# A Fazer

## Área do Aluno
- [X] Login do aluno.
- [x] Cadastrar certificado com descrição, data, hora e pdf.

## Área do Coordenador
- [X] Cadastro do coordenador.
- [X] Login do coordenador.
- [X] Cadastro de aluno (pelo coordenador).
- [X] Deferir, indeferir e alterar certificados cadastrados.
- [X] Imprimir a lista de certificado por nome do aluno e a contagem total de horas.

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

### Certificado
```sql
CREATE TABLE tb_certificado(id INTEGER AUTO_INCREMENT PRIMARY KEY, descricao VARCHAR (255), data DATE, hora TIME, url VARCHAR (255), id_aluno INTEGER, status INTEGER (11), FOREIGN KEY (id_aluno) REFERENCES tb_aluno(id));
```