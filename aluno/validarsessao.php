<?php
session_start();
include_once("../classes/AlunoManipulaDados.php");

$manipula = new AlunoManipulaDados();

$email_usuario = $_SESSION["email"];
$senha_usuario = $_SESSION["senha"];

if (!(empty($email_usuario) or empty($senha_usuario))) {
    $dadosLogin = $manipula->validarLogin($email_usuario, $senha_usuario);

    if ($dadosLogin == null) {
        session_destroy();
        header("location: index.php");
        exit;
    }
} else {
    header("location: ../index.php");
    exit;
}
