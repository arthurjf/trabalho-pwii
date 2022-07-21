<?php

include_once("ManipulaDados.php");
include_once("Aluno.php");

class AlunoManipulaDados extends ManipulaDados
{
    public function validarLogin($login, $password)
    {
        $this->sql = "SELECT tb_aluno.id AS aluno_id, 
        tb_pessoa.id AS pessoa_id, 
        tb_pessoa.nome, 
        tb_pessoa.email,
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
            $output->id = $dados["id"];
            $output->idAluno = $dados["aluno_id"];
            $output->matricula = $dados["matricula"];
            $output->nome = $dados["nome"];
            $output->email = $dados["email"];
        }

        return $output;
    }
}
