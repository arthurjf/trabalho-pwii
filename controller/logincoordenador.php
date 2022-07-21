<?php
include_once("../classes/CoordenadorManipulaDados.php");
session_start();

$manipula = new CoordenadorManipulaDados();

$login = $_POST['txtEmail'];
$senha = $_POST['txtSenha'];

$dadosLogin = $manipula->validarLogin($login, $senha);

if ($dadosLogin == null) {
    echo '<script>alert("Nome ou senha não cadastrada ou incorreta")</script>';
    echo "<script>location = '../index.php';</script>";
} else {
    $_SESSION["id"] = $dadosLogin->id;
    $_SESSION["idPessoa"] = $dadosLogin->idPessoa;
    $_SESSION["nome"] = $dadosLogin->nome;
    $_SESSION["email"] = $dadosLogin->email;
    setcookie("email_usuario", $dadosLogin->email);
    setcookie("senha_usuario", $password);
    header("location: ../coordenador/index.php");
}
