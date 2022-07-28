<?php

include_once("ManipulaDados.php");
include_once("Coordenador.php");

class CoordenadorManipulaDados extends ManipulaDados
{
    public function validarLogin($login, $password)
    {
        $this->sql = "SELECT tb_coordenador.id AS coordenador_id, 
        tb_pessoa.id AS pessoa_id, 
        tb_pessoa.nome AS nome, 
        tb_pessoa.email AS email
        FROM tb_coordenador 
        INNER JOIN tb_pessoa 
        ON tb_coordenador.id_pessoa = tb_pessoa.id 
        WHERE tb_pessoa.email = '$login' 
        AND tb_pessoa.senha = '$password'";

        $this->qr = self::execSQL($this->sql);

        $dados = array();

        while ($row = @mysqli_fetch_assoc($this->qr)) {
            array_push($dados, $row);
        }

        $linhas = @mysqli_num_rows($this->qr);

        $output = null;
        if ($linhas > 0) {
            $output = new Coodenador();
            $output->id = $dados[0]["pessoa_id"];
            $output->idCoordenador = $dados[0]["coordenador_id"];
            $output->nome = $dados[0]["nome"];
            $output->email = $dados[0]["email"];
        }

        return $output;
    }

    public function getCertificados()
    {
        $this->sql = "SELECT tb_aluno.id AS aluno_id, 
        tb_pessoa.id AS pessoa_id, 
        tb_aluno.matricula AS aluno_matricula, 
        tb_certificado.data AS certificado_data, 
        tb_certificado.hora AS certificado_hora, 
        tb_certificado.url AS certificado_url, 
        tb_certificado.id AS certificado_id, 
        tb_certificado.descricao AS certificado_descricao, 
        tb_certificado.status AS certificado_status, 
        tb_pessoa.email AS pessoa_email, 
        tb_pessoa.nome AS pessoa_nome 
        FROM tb_certificado 
        INNER JOIN tb_aluno 
        ON tb_certificado.id_aluno = tb_aluno.id 
        INNER JOIN tb_pessoa 
        ON tb_pessoa.id = tb_aluno.id_pessoa;";

        $this->qr  = self::execSQL($this->sql);

        $dados = array();

        while ($row = @mysqli_fetch_assoc($this->qr)) {
            array_push($dados, $row);
        }

        return $dados;
    }

    public function getCertificadosByStatus($status)
    {
        $this->sql = "SELECT tb_aluno.id AS aluno_id, 
        tb_pessoa.id AS pessoa_id, 
        tb_aluno.matricula AS aluno_matricula, 
        tb_certificado.data AS certificado_data, 
        tb_certificado.hora AS certificado_hora, 
        tb_certificado.url AS certificado_url, 
        tb_certificado.id AS certificado_id, 
        tb_certificado.descricao AS certificado_descricao, 
        tb_certificado.status AS certificado_status, 
        tb_pessoa.email AS pessoa_email, 
        tb_pessoa.nome AS pessoa_nome 
        FROM tb_certificado 
        INNER JOIN tb_aluno 
        ON tb_certificado.id_aluno = tb_aluno.id 
        INNER JOIN tb_pessoa 
        ON tb_pessoa.id = tb_aluno.id_pessoa WHERE tb_certificado.status = $status;";

        $this->qr  = self::execSQL($this->sql);

        $dados = array();

        while ($row = @mysqli_fetch_assoc($this->qr)) {
            array_push($dados, $row);
        }

        return $dados;
    }
}
