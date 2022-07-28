<?php
include_once("../../classes/CoordenadorManipulaDados.php");

function converte($String)
{
    return iconv("UTF-8", "ISO8859-1", $String);
}

$certificadoId = $_POST["txtCertificadoId"];
$nomeAluno = $_POST["txtPessoaNome"];
$descricao = $_POST['txtDescricao'];
$data = $_POST['txtData'];
$hora = $_POST['txtHora'];
$statusId = $_POST['statusId'];
$urlbanco = $_POST["txtURLCertificado"];

if (isset($_POST['ckAlterarPDF']) && $_POST['ckAlterarPDF'] == "true") {

    $nomearquivo = $_FILES['arquivo']['name'];
    $urlbanco = "certificados/" . $nomeAluno . "/" . $nomearquivo;

    $nomearquivosalvo = converte($_FILES['arquivo']['name']);
    $urllocalsalvo = "../../certificados/" . $nomeAluno . "/" . $nomearquivosalvo;
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $urllocalsalvo);
}

$manipula = new CoordenadorManipulaDados();
$manipula->setTable("tb_certificado");
$manipula->setFields("descricao='$descricao',data='$data',hora='$hora',url='$urlbanco',status=$statusId");
$manipula->setFieldId("id");
$manipula->setValueId("$certificadoId");
$manipula->update();

echo '<script>alert("' . $manipula->getStatus() . '");</script>';
echo "<script>location = '../index.php'; </script>";
