<?php
session_start();
include_once("../classes/AlunoManipulaDados.php");

$manipula = new AlunoManipulaDados();

$login = $_POST['txtEmail'];
$senha = $_POST['txtSenha'];

$dadosLogin = $manipula->validarLogin($login, $senha);

if ($dadosLogin == null) {
    echo '<script>alert("Nome ou senha não cadastrada ou incorreta")</script>';
    echo "<script>location = '../index.php';</script>";
} else {
    $_SESSION["id"] = $dadosLogin->idAluno;
    $_SESSION["idPessoa"] = $dadosLogin->id;
    $_SESSION["nome"] = $dadosLogin->nome;
    $_SESSION["email"] = $login;
    $_SESSION["senha"] = $senha;
    header("location: ../aluno/index.php");
}
