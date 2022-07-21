<?php
include_once("../classes/manipuladados.php");

$manipula = new manipuladados();

$login = $_POST['txtEmail'];
$senha = $_POST['txtSenha'];

$linhas = $manipula->validarLogin($login, $senha);

if ($linhas == 0) {
    echo '<script>alert("Nome ou senha não cadastrada ou incorreta")</script>';
    echo "<script>location = '../index.php';</script>";
} else {
    setcookie("email_usuario", $login);
    setcookie("senha_usuario", $senha);
    header("location: ../aluno/index.php");
}
