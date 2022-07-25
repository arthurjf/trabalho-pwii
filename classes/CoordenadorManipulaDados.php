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
}
