<?php

include_once("ManipulaDados.php");
include_once("Aluno.php");

class AlunoManipulaDados extends ManipulaDados
{
    public function validarLogin($login, $password)
    {
        $this->sql = "SELECT tb_aluno.id AS aluno_id, 
        tb_pessoa.id AS pessoa_id, 
        tb_pessoa.nome AS nome, 
        tb_pessoa.email AS email, 
        tb_aluno.matricula AS matricula
        FROM tb_aluno 
        INNER JOIN tb_pessoa 
        ON tb_aluno.id_pessoa = tb_pessoa.id 
        WHERE tb_pessoa.email = '$login' 
        AND tb_pessoa.senha = '$password'";

        $this->query = self::execSQL($this->sql);

        $linhas = @mysqli_num_rows($this->qr);

        $dados = array();

        while ($row = @mysqli_fetch_assoc($this->qr)) {
            array_push($dados, $row);
        }

        $output = null;
        if ($linhas > 0) {
            $output = new Aluno();
            $output->id = $dados[0]["pessoa_id"];
            $output->idAluno = $dados[0]["aluno_id"];
            $output->matricula = $dados[0]["matricula"];
            $output->nome = $dados[0]["nome"];
            $output->email = $dados[0]["email"];
        }

        return $output;
    }

    public function insert()
    {
        $this->sql = "INSERT INTO $this->table($this->fields) VALUES($this->dados)";

        if (self::execSQL($this->sql)) {
            $this->status = "Cadastrado com Sucesso!";
        } else {
            $this->status = "Erro ao cadastrar" . mysqli_error();
        }
    }
}
