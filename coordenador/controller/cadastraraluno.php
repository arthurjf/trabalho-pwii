<?php
include_once("../../classes/CoordenadorManipulaDados.php");
const CAMINHO_CERTIFICADOS = "../../certificados/";

$botao = $_POST['button'];

switch ($botao) {
    case "insert":
        $matricula = $_POST['txtMatricula'];
        $nome = $_POST['txtNome'];
        $email = $_POST['txtEmail'];
        $senha = $_POST['txtSenha'];

        $inserirAluno = new CoordenadorManipulaDados();
        $inserirAluno->setTable("tb_pessoa");
        $inserirAluno->setFields("nome, email, senha");
        $inserirAluno->setDados("'$nome', '$email', '$senha'");
        $inserirAluno->insert();

        $insertId = $inserirAluno->getLastInsertId();

        $inserirPessoa = new CoordenadorManipulaDados();
        $inserirPessoa->setTable("tb_aluno");
        $inserirPessoa->setFields("matricula, id_pessoa");
        $inserirPessoa->setDados("'$matricula', $insertId");
        $inserirPessoa->insert();
        mkdir(CAMINHO_CERTIFICADOS . $nome, 0777);

        echo '<script> alert("' . $inserirAluno->getStatus() . '");</script>';
        break;
}
echo "<script> location = '../index.php';</script>";
