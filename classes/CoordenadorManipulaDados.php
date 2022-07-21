<?php

include_once("ManipulaDados.php");
include_once("Coordenador.php");

class CoordenadorManipulaDados extends ManipulaDados
{
    public function validarLogin($login, $password)
    {
        $this->sql = "SELECT tb_coordenador.id AS coordenador_id, 
        tb_pessoa.id AS pessoa_id, 
        tb_pessoa.nome, 
        tb_pessoa.email 
        FROM tb_coordenador 
        INNER JOIN tb_pessoa 
        ON tb_coordenador.id_pessoa = tb_pessoa.id 
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
            $output = new Coodenador();
            $output->id = $dados["id"];
            $output->idCoordenador = $dados["coordenador_id"];
            $output->nome = $dados["nome"];
            $output->email = $dados["email"];
        }

        return $output;
    }
}
