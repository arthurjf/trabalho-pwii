<?php
include_once("../classes/CoordenadorManipulaDados.php");

$botao = $_POST['button'];

switch ($botao) {
    case "insert":
        $nome = $_POST['txtNome'];
        $email = $_POST['txtEmail'];
        $senha = $_POST['txtSenha'];

        $inserirCoordenador = new CoordenadorManipulaDados();
        $inserirCoordenador->setTable("tb_pessoa");
        $inserirCoordenador->setFields("nome, email, senha");
        $inserirCoordenador->setDados("'$nome', '$email', '$senha'");
        $inserirCoordenador->insert();

        $insertId = $inserirCoordenador->getLastInsertId();

        $inserirPessoa = new CoordenadorManipulaDados();
        $inserirPessoa->setTable("tb_coordenador");
        $inserirPessoa->setFields("id_pessoa");
        $inserirPessoa->setDados("$insertId");
        $inserirPessoa->insert();

        echo '<script> alert("' . $inserirCoordenador->getStatus() . '");</script>';
        break;
}
echo "<script> location = '../index.php';</script>";
