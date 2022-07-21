<?php
include_once("../classes/manipuladados.php");

$manipula = new manipuladados();

$nome = $_POST['txtNome'];
$email = $_POST['txtEmail'];
$senha = $_POST['txtSenha'];
$botao = $_POST['button'];

switch ($botao) {
    case "insert":
        $inserirCoordenador = new manipuladados();
        $inserirCoordenador->setTable("tb_pessoa");
        $inserirCoordenador->setFields("nome, email, senha");
        $inserirCoordenador->setDados("'$nome', '$email', '$senha'");
        $inserirCoordenador->insert();

        $insertId = $inserirCoordenador->getLastInsertId();

        $inserirPessoa = new manipuladados();
        $inserirPessoa->setTable("tb_coordenador");
        $inserirPessoa->setFields("id_pessoa");
        $inserirPessoa->setDados("$insertId");
        $inserirPessoa->insert();
        break;
}
echo '<script> alert("' . $inserirCoordenador->getStatus() . '");</script>';
echo "<script> location = '../index.php';</script>";
